<?php

class User extends UserCustom {

	protected $table = TABLE_USER;

	protected function rules()
	{
		$rules = array(
			'email' => 'required|unique:' . TABLE_USER . ',email,' . $this->id . '|email',
			'login' => 'required|unique:' . TABLE_USER . ',login,' . $this->id . '|regex:#^[a-z\\d]{3,}$#',
			'password' => 'min:7|confirmed',
		);

		if (!$this->id)
		{
			$rules['password'] .= '|required';
		}

		$fields = UserField::where('hidden', false)->get();

		foreach ($fields as $field)
		{
			if ($field->required && !in_array($field->fieldType->alias, array('options', 'pages')))
			{
				$rules['field_' . $field->alias] = 'required';
			}
		}

		return $rules;
	}

}
