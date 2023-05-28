<?php

abstract class ModuleTypeHelper {

	public $config = array();

	public $data = array();

	public function __construct(array $config)
	{
		$this->config = $config;

		$this->setRelationship();

		$this->setData();
	}

	public function setRelationship()
	{}

	public function setData()
	{}

}
