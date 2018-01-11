<?php


	class OPanda_SignInLocker_Channels_StatsTable extends OPanda_StatsTable {

		public function getColumns()
		{

			$prepareChannels = array(
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
				'unlock-via-form' => array(
					'title' => __('Via Opt-In Form', 'bizpanda-signin-locker'),
					'cssClass' => 'opanda-col-number'
				),
				'unlock-via-facebook' => array(
					'title' => __('Via Facebook', 'bizpanda-signin-locker'),
					'cssClass' => 'opanda-col-number'
				),
				'unlock-via-twitter' => array(
					'title' => __('Via Twitter', 'bizpanda-signin-locker'),
					'cssClass' => 'opanda-col-number'
				),
				'unlock-via-google' => array(
					'title' => __('Via Google', 'bizpanda-signin-locker'),
					'cssClass' => 'opanda-col-number'
				),
				'unlock-via-linkedin' => array(
					'title' => __('Via LinkedIn', 'bizpanda-signin-locker'),
					'cssClass' => 'opanda-col-number'
				)

			);

			$prepareChannels['unlock-via-vk'] = array(
				'title' => __('Via Vkontakte', 'bizpanda-signin-locker'),
				'cssClass' => 'opanda-col-number'
			);

			$prepareChannels = apply_filters('opanda_signinlocker_channels_statstable', $prepareChannels);

			return $prepareChannels;
		}
	}

	class OPanda_SignInLocker_Channels_StatsChart extends OPanda_StatsChart {

		public $type = 'line';

		public function getFields()
		{

			$prepareChannels = array(
				'aggregate_date' => array(
					'title' => __('Date', 'bizpanda-signin-locker')
				),
				'unlock-via-form' => array(
					'title' => __('Via Opt-In Form', 'bizpanda-signin-locker'),
					'color' => '#31ccab'
				),
				'unlock-via-facebook' => array(
					'title' => __('Via Facebook', 'bizpanda-signin-locker'),
					'color' => '#7089be'
				),
				'unlock-via-twitter' => array(
					'title' => __('Via Twitter', 'bizpanda-signin-locker'),
					'color' => '#3ab9e9'
				),
				'unlock-via-google' => array(
					'title' => __('Via Google', 'bizpanda-signin-locker'),
					'color' => '#e26f61'
				),
				'unlock-via-linkedin' => array(
					'title' => __('Via LinkedIn', 'bizpanda-signin-locker'),
					'color' => '#006080'
				)
			);

			$prepareChannels['unlock-via-vk'] = array(
				'title' => __('Via Vkontakte', 'bizpanda-signin-locker'),
				'color' => '#567CA4'
			);

			$prepareChannels = apply_filters('opanda_signinlocker_channels_statschart', $prepareChannels);

			return $prepareChannels;
		}
	}