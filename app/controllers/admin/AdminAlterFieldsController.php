<?php

abstract class AdminAlterFieldsController extends AdminFieldsController {

	protected function with($itemId = null)
	{
		return array(
			'fieldType',
			'layouts',
			'selects',
		);
	}

}
