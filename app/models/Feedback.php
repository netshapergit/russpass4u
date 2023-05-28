<?php

class Feedback extends FeedbackCustom {

	protected $table = TABLE_FEEDBACK;

	public function forme()
	{
		return $this->belongsTo('Forme');
	}

	public function page()
	{
		return $this->belongsTo('Page');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	protected function rules()
	{
		$rules = array(
			'forme_id' => 'required|integer|exists:' . TABLE_FORME . ',id',
			'page_id' => 'required|integer|exists:' . TABLE_PAGE . ',id',
			'user_id' => 'integer|exists:' . TABLE_USER . ',id',
		);

		if ($this->forme)
		{
			foreach ($this->forme->fields as $field)
			{
				if ($field->pivot->required && !in_array($field->fieldType->alias, array('options', 'pages')))
				{
					$rules['field_' . $field->alias] = 'required';
				}
			}
		}

		return $rules;
	}

}
