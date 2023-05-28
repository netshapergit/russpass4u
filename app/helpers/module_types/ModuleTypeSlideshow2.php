<?php

class ModuleTypeSlideshow2 extends ModuleTypeHelper {

	public function setRelationship()
	{
		parent::setRelationship();

		if (!empty($this->config['items']))
		{
			foreach ($this->config['items'] as &$item)
			{
				if (!empty($item['page_id']))
				{
					$page = Page::find($item['page_id']);

					if ($page)
					{
						$item['page'] = $page;
					}
				}
			}
		}
	}

}
