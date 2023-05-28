<?php

class ModuleTypeMenu extends ModuleTypeHelper {

	public function setRelationship()
	{
		parent::setRelationship();

		if (!empty($this->config['items']))
		{
			$this->setPages($this->config['items']);
		}
	}

	protected function setPages(&$items)
	{
		foreach ($items as &$item)
		{
			if (!empty($item['page_id']))
			{
				$page = Page::find($item['page_id']);

				if ($page && $page->isAvailable())
				{
					$item['page'] = $page;
				}
			}

			if (!empty($item['items']))
			{
				$this->setPages($item['items']);
			}
		}
	}

}
