<?php

class PositionsUpdate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$create = function($alias, $order, $wrap = true, $parentPositionId = 0) {
			$position = Position::where('alias', $alias)->first();

			if (!$position)
			{
				$position = new Position;
				$position->alias = $alias;
				$position->name = $alias;
				$position->save();
			}

			if ($wrap)
			{
				$positionWrap = new Position;
				$positionWrap->alias = 'wrap_' . $alias;
				$positionWrap->name = 'wrap_' . $alias;
				$positionWrap->order = $order;
				if ($parentPositionId)
				{
					$positionWrap->parent_position_id = $parentPositionId;
				}
				$positionWrap->save();

				$position->parent_position_id = $positionWrap->id;
			}

			if (!$wrap && $parentPositionId)
			{
				$position->parent_position_id = $parentPositionId;
			}
			$position->order = $wrap ? 1 : $order;
			$position->save();

			return $position;
		};

		$create('highest', 1);
		$create('header', 2);
		$create('top', 3);

		$middle = $create('middle', 4, false);
		$create('verso', 1, false, $middle->id);

		$mean = $create('mean', 2, false, $middle->id);
		$create('above', 1, true, $mean->id);

		$main = $create('main', 2, false, $mean->id);
		$create('left', 1, false, $main->id);

		$center = $create('center', 2, false, $main->id);
		$create('pre', 1, true, $center->id);
		$create('content', 2, true, $center->id);
		$create('post', 3, true, $center->id);

		$create('right', 3, false, $main->id);

		$create('below', 3, true, $mean->id);

		$create('recto', 3, false, $middle->id);

		$create('bottom', 5);
		$create('footer', 6);
		$create('lowest', 7);
		$create('dummy', 8);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
