<?php


	class OPanda_SignInLocker_Skips_StatsTable extends OPanda_StatsTable {

		public function getColumns()
		{

			return array(
				'index' => array(
					'title' => ''
				),
				'title' => array(
					'title' => __('Post Title', 'bizpanda-signin-locker')
				),
				'unlock' => array(
					'title' => __('Number of Unlocks', 'bizpanda-signin-locker'),
					'hint' => __('The number of unlocks made by visitors.', 'bizpanda-signin-locker'),
					'highlight' => true,
					'cssClass' => 'opanda-col-number'
				),
				'skip-via-timer' => array(
					'title' => __('Skipped by Timer', 'bizpanda-signin-locker'),
					'cssClass' => 'opanda-col-number'

				),
				'skip-via-cross' => array(
					'title' => __('Skipped by Close Icon', 'bizpanda-signin-locker'),
					'cssClass' => 'opanda-col-number'
				)
			);
		}
	}

	class OPanda_SignInLocker_Skips_StatsChart extends OPanda_StatsChart {

		public $type = 'column';

		public function getFields()
		{

			return array(
				'aggregate_date' => array(
					'title' => __('Date', 'bizpanda-signin-locker')
				),
				'unlock' => array(
					'title' => __('Number of Unlocks', 'bizpanda-signin-locker'),
					'color' => '#0074a2'
				),
				'skip-via-timer' => array(
					'title' => __('Skipped by Timer', 'bizpanda-signin-locker'),
					'color' => '#333333'

				),
				'skip-via-cross' => array(
					'title' => __('Skipped by Close Icon', 'bizpanda-signin-locker'),
					'color' => '#dddddd'
				)
			);
		}
	}