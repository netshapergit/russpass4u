<?php

use Illuminate\Database\Eloquent\Relations\Relation;

abstract class Model extends Eloquent {

	protected $syncAfterSave = array();

	protected $pivotAfterSave = array();

	protected $guarded = array(
		'id',
		'created_at',
		'updated_at',
	);

	public $additionalFields = array();

	public $validator;

	public function additionalFieldsToArray()
	{
		$array = array();

		foreach ($this->additionalFields as $key)
		{
			$array[$key] = $this->$key;
		}

		return $array;
	}

	public function toArray()
	{
		return array_merge(parent::toArray(), $this->additionalFieldsToArray());
	}

	protected function rules()
	{
		return array();
	}

	public static function boot()
	{
		parent::boot();

		self::saving(function($model)
		{
			foreach ($model->getAttributes() as $key => $value)
			{
				// TODO hot fix files attribute
				if ($key == 'files')
				{
					unset($model->attributes[$key]);
				}

				// empty id values
				if (preg_match('#_id$#', $key) && !$value)
				{
					$model->attributes[$key] = null;
				}

				// many to many values
				$isPivotValue = preg_match('#^pivot_#', $key);

				$relationMethod = camel_case(preg_replace('#^pivot_#', '', $key));

				if (method_exists($model, $relationMethod))
				{
					$relation = $model->$relationMethod();

					if ($relation instanceof Relation)
					{
						if (!$value)
						{
							$value = array();
						}

						if ($isPivotValue)
						{
							$model->pivotAfterSave[$relationMethod] = $value;
						}
						else
						{
							$model->syncAfterSave[$relationMethod] = $value;
						}

						unset($model->attributes[$key]);
					}
				}

				// unset extra attributes
				if (!array_key_exists($key, $model->attributes))
				{
					unset($model->attributes[$key]);
				}
			}

			$validator = Validator::make($model->attributes, $model->rules());

			if ($validator->fails())
			{
				$model->validator = $validator;
				return false;
			}
		});

		self::saved(function($model)
		{
			foreach ($model->syncAfterSave as $relationMethod => $ids)
			{
				$model->$relationMethod()->sync($ids);
				$model->load($relationMethod);
				unset($model->syncAfterSave[$relationMethod]);
			}

			foreach ($model->pivotAfterSave as $relationMethod => $items)
			{
				foreach ($model->$relationMethod as $related)
				{
					// unset extra pivot attributes
					foreach (array_keys($items[$related->id]) as $key)
					{
						if (!array_key_exists($key, $related->pivot->attributes))
						{
							unset($items[$related->id][$key]);
						}
					}

					$related->pivot->fill($items[$related->id])->save();
				}

				$model->load($relationMethod);
				unset($model->pivotAfterSave[$relationMethod]);
			}
		});
	}

}
