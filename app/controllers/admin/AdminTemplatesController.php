<?php

class AdminTemplatesController extends AdminFilesController {

	public $alias = 'templates';

	protected $extension = 'twig';

	protected $storage = 'views/';

	protected $mode = 'htmlmixed';

}
