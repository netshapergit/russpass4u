<?php

use \Illuminate\Database\Eloquent\Collection;

class ModuleTypeAnnouncement extends ModuleTypeHelper {

	public function setRelationship()
	{
		parent::setRelationship();

		if (empty($this->config['parent_pages']))
		{
			$this->config['pages'] = new Collection();
		}
		else
		{
			$query = Page::where('active', 1)
				->whereIn('parent_page_id', $this->config['parent_pages'])
				->orderBy(
					empty($this->config['order_by']) ? 'id' : $this->config['order_by'],
					empty($this->config['order_direction']) ? 'desc' : $this->config['order_direction']
				);

			if (!empty($this->config['limit']) && (int) $this->config['limit'] > 0)
			{
				$query->take((int) $this->config['limit']);
			}

			$this->config['pages'] = $query->get();
		}
	}

}
