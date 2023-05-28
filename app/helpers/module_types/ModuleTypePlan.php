<?php

class ModuleTypePlan extends  ModuleTypeHelper {

	public function setRelationship()
	{
		parent::setRelationship();

		if (!empty($this->config['sections']))
		{
			$this->setPages($this->config['sections']);
		}
	}

	protected function setPages(&$sections)
	{
		foreach ($sections as &$section)
		{
			if (!empty($section['link']['page_id']))
			{
				$page = Page::find($section['link']['page_id']);

				if ($page)
				{
					// TODO use config->toArray instead of it
					$section['link']['page'] = $page->toArray();
				}
			}
		}
	}

}
