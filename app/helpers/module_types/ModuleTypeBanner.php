<?php

class ModuleTypeBanner extends ModuleTypeHelper {

	public function setRelationship()
	{
		parent::setRelationship();

		if (!empty($this->config['page_id']))
		{
			$page = Page::find($this->config['page_id']);

			if ($page)
			{
				$this->config['page'] = $page;
			}
		}
	}

}
