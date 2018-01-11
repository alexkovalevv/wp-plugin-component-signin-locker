<?php

	global $bizpanda;

	require_once OPANDA_BIZPANDA_DIR . '/admin/includes/plugins.php';
	$optinpandaUrl = OPanda_Plugins::getPremiumUrl('optinpanda');
	$sociallockerUrl = OPanda_Plugins::getPremiumUrl('sociallocker');

?>

<div class="onp-help-section">
	<h1><?php _e('Sign-In Locker', 'bizpanda-signin-locker'); ?></h1>

	<?php if( BizPanda::hasPlugin('sociallocker') ) { ?>

		<p>
			<?php printf(__('Sign-In Locker works the same way as the <a href="%s">Social Locker</a> but instead of liking/sharing it asks the user to sign in through social networks. Concurrently it can perform some social actions.', 'bizpanda-signin-locker'), opanda_get_help_url('what-is-social-locker')) ?>
		</p>

	<?php } elseif( BizPanda::hasPlugin('optinpanda') ) { ?>

		<p>
			<?php printf(__('Sign-In Locker works the same way as the <a href="%s">Email Locker</a> but instead of entering an email it asks the user to sign in through social networks. Concurrently it can perform some social actions.', 'bizpanda-signin-locker'), opanda_get_help_url('what-is-email-locker')) ?>
		</p>

	<?php } ?>

	<p><strong><?php _e('What can you do with the Sign-In Locker', 'bizpanda-signin-locker') ?></strong></p>

	<p>
		<?php _e('When the user signs in, the social network grants access to the user\'s contact data and allow additionally perform the following actions:', 'bizpanda-signin-locker') ?>
	</p>
	<ul style="margin-bottom: 20px;">
		<li><p><?php _e('Register the user on our website (create an account)', 'bizpanda-signin-locker') ?></p></li>
		<?php if( !BizPanda::hasPlugin('optinpanda') ) { ?>
			<li><?php printf(__('Subscribe the user to your mailing list (<a href="%s" target="_blank">Opt-In Panda</a> required)', 'bizpanda-signin-locker'), $optinpandaUrl) ?></li>
		<?php } else { ?>
			<li><?php _e('Subscribe the user to your mailing list.', 'bizpanda-signin-locker') ?></li>
		<?php } ?>
		<?php if( !BizPanda::hasPlugin('sociallocker') ) { ?>
			<li><?php printf(__('Publish a tweet from behalf of the user (<a href="%s" target="_blank">Social Locker</a> required)', 'bizpanda-signin-locker'), $sociallockerUrl) ?></li>
			<li><?php printf(__('Subscribe the user to your account on Twitter (<a href="%s" target="_blank">Social Locker</a> required)', 'bizpanda-signin-locker'), $sociallockerUrl) ?></li>
			<li><?php printf(__('Subscribe the user to your account on LinkedIn (<a href="%s" target="_blank">Social Locker</a> required)', 'bizpanda-signin-locker'), $sociallockerUrl) ?></li>
			<li><?php printf(__('Subscribe the user to your Youtube channel (<a href="%s" target="_blank">Social Locker</a> required)', 'bizpanda-signin-locker'), $sociallockerUrl) ?></li>
		<?php } else { ?>
			<li><?php _e('Publish a tweet from behalf of the user', 'bizpanda-signin-locker') ?></li>
			<li><?php _e('Subscribe the user to your account on Twitter (make the user a follower)', 'bizpanda-signin-locker') ?></li>
			<li><?php _e('Subscribe the user to your account on LinkedIn (make the user a follower)', 'bizpanda-signin-locker') ?></li>
			<li><?php _e('Subscribe the user to your Youtube channel', 'bizpanda-signin-locker') ?></li>
		<?php } ?>
	</ul>
	<p><strong><?php _e('Know your audience', 'bizpanda-signin-locker') ?></strong></p>

	<p><?php _e('Except the user\'s contact data, the Sign-In Locker also receives some personal data (name, profile url).', 'bizpanda-signin-locker') ?></p>

	<p><?php _e('That allows you to know better your audinece and understand who is these people who visits your website. Also you can go and engage with them personally on their social pages on Facebook, Twitter, Google or LinkedIn.', 'bizpanda-signin-locker') ?></p>

	<?php if( BizPanda::hasPlugin('sociallocker') ) { ?>

		<p><strong><?php _e('Comparing Sign-In Locker and Social Locker', 'bizpanda-signin-locker') ?></strong></p>

		<p>
			<?php _e('Although the Sign-In Locker brings more benefits per unlock, it has more lower conversion than Social Locker. Please check out the table below to learn more:', 'bizpanda-signin-locker') ?>
		</p>

		<table class="table">
			<thead>
			<tr>
				<th><?php _e('Paramters', 'bizpanda-signin-locker') ?></th>
				<th><?php _e('Sing-In Locker', 'bizpanda-signin-locker') ?></th>
				<th><?php _e('Social Locker', 'bizpanda-signin-locker') ?></th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td><?php _e('Benefits', 'bizpanda-signin-locker') ?></td>
				<td><?php _e('More benefits per unlock. Can be configured to execute several actions per unlock.', 'bizpanda-signin-locker') ?></td>
				<td><?php _e('Only one action has to be perfomed to unlock the content.', 'bizpanda-signin-locker') ?></td>
			</tr>
			<tr>
				<td><?php _e('Conversion', 'bizpanda-signin-locker') ?></td>
				<td><?php _e('More lower conversion due to the locker asks the user to authorize your social app and grant extra permissions.', 'bizpanda-signin-locker') ?></td>
				<td><?php _e('Extremely high conversion which may reach up to 50%. All what the user has to make is to click on the social button.', 'bizpanda-signin-locker') ?></td>
			</tr>
			<tr>
				<td><?php _e('Content', 'bizpanda-signin-locker') ?></td>
				<td><?php _e('As asks the user to authorize your social app to read one\'s personal data, the content you provide should have more value.', 'bizpanda-signin-locker') ?></td>
				<td><?php _e('You can lock practically any content. Giving a like is not hard.', 'bizpanda-signin-locker') ?></td>
			</tr>
			</tbody>
		</table>

	<?php } elseif( BizPanda::hasPlugin('optinpanda') ) { ?>

		<p><strong><?php _e('Comparing Sign-In Locker and Email Locker', 'bizpanda-signin-locker') ?></strong></p>

		<p>
			<?php _e('Although the Sign-In Locker brings more benefits per unlock, it has more lower conversion than Email Locker. Please check out the table below to learn more:', 'bizpanda-signin-locker') ?>
		</p>

		<table class="table">
			<thead>
			<tr>
				<th><?php _e('Paramters', 'bizpanda-signin-locker'); ?></th>
				<th><?php _e('Sing-In Locker', 'bizpanda-signin-locker'); ?></th>
				<th><?php _e('Email Locker', 'bizpanda-signin-locker'); ?></th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td><?php _e('Benefits', 'bizpanda-signin-locker') ?></td>
				<td><?php _e('More benefits per unlock. Can be configured to execute several actions per unlock.', 'bizpanda-signin-locker') ?></td>
				<td><?php _e('The user has to opt-in only to unlock the content.', 'bizpanda-signin-locker') ?></td>
			</tr>
			<tr>
				<td><?php _e('Conversion', 'bizpanda-signin-locker') ?></td>
				<td><?php _e('More lower conversion due to the locker asks the user to authorize your social app and grant extra permissions.', 'bizpanda-signin-locker') ?></td>
				<td><?php printf(__('High conversion which may reach up to %s.', 'bizpanda-signin-locker'), '40%'); ?></td>
			</tr>
			<tr>
				<td><?php _e('Content', 'bizpanda-signin-locker') ?></td>
				<td><?php _e('As asks the user to authorize your social app to read one\'s personal data, the content you provide should have more value.', 'bizpanda-signin-locker') ?></td>
				<td><?php _e('You can lock practically any content.', 'bizpanda-signin-locker') ?></td>
			</tr>
			</tbody>
		</table>

	<?php } ?>

	<p style="margin-top: 25px;">
		<a href="<?php $manager->actionUrl('index', array('onp_sl_page' => 'usage-example-signin-locker')) ?>" class="btn btn-default"><?php _e('Learn how to configure and use Sign-In Locker', 'bizpanda-signin-locker') ?>
			<i class="fa fa-long-arrow-right"></i></a>
	</p>
</div>