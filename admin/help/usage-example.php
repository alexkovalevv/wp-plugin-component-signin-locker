<?php
	global $bizpanda;
?>

<div class="onp-help-section">
	<h1><?php _e('Quick Start Guide', 'bizpanda-signin-locker'); ?></h1>

	<?php if( BizPanda::hasPlugin('sociallocker') ) { ?>

		<p>
			<?php _e('Using the Sign-In Locker is similar to using the Social Locker but it require a bit more efforts for the initial configuration.', 'bizpanda-signin-locker') ?>
		</p>

	<?php } elseif( BizPanda::hasPlugin('optinpanda') ) { ?>

		<p>
			<?php _e('Using the Sign-In Locker is similar to using the Email Locker but it require a bit more efforts for the initial configuration.', 'bizpanda-signin-locker') ?>
		</p>

	<?php } ?>

	<p>
		<?php _e('To pick out the content which should be locked, you can use special shortcodes. During installation, the plugin created for you the shortcode <span class="onp-mark onp-mark-gray onp-mark-stricked onp-code">[signinlocker][/signinlocker]</span> named <strong>Sign-In Locker</strong>.', 'bizpanda-signin-locker'); ?>
	</p>

	<p class='onp-note'>
		<?php _e('<strong>Note:</strong> You can create more shortcodes at any time for whatever you need them for. For instance, you could create one for locking video players or another one for locking download links.', 'bizpanda-signin-locker'); ?>
	</p>
</div>
<div class="onp-help-section">
	<h2>1. <?php _e('Register social apps', 'bizpanda-signin-locker'); ?></h2>

	<p><?php _e('Before you will be able to use the Sign-In Locker, you need to register a set of social apps (API Keys, App IDs, Client IDs and so) for your website.', 'bizpanda-signin-locker') ?></p>

	<p><strong><?php _e('You need to make it only once.', 'bizpanda-signin-locker') ?></strong></p>

	<p><?php _e('Then you will be able to use these apps with the Sign-In Locker and with any other plugins.', 'bizpanda-signin-locker') ?></p>

	<p><?php _e('We recommend you to start using the Sign-In Locker with 3 buttons: Facebook, Twitter and Google by skipping LinkedIn. You will be able to configure LinkedIn later:', 'bizpanda-signin-locker') ?>
	<table class="table">
		<thead>
		<tr>
			<th><?php _e('Button Name', 'bizpanda-signin-locker') ?></th>
			<th><?php _e('Your action to make it work', 'bizpanda-signin-locker') ?></th>
		</tr>
		</thead>
		<tr>
			<td><?php _e('Facebook Sign-In Button', 'bizpanda-signin-locker') ?></td>
			<td>
				<a href="<?php echo $manager->actionUrl('index', array('onp_sl_page' => 'facebook-app')) ?>" class="btn btn-default"><?php _e('Require creating a Facebook App', 'bizpanda-signin-locker') ?></a>
			</td>
		</tr>
		<tr>
			<td><?php _e('Twitter Sign-In Button', 'bizpanda-signin-locker') ?></td>
			<td>
				<?php _e('Ready to use by default.', 'bizpanda-signin-locker') ?><br/>
				<a href="<?php echo $manager->getActionUrl('index', array('onp_sl_page' => 'twitter-app')) ?>"><?php _e('Lean when you need to create your own app</a>', 'bizpanda-signin-locker') ?></a>
			</td>
		</tr>
		<tr>
			<td><?php _e('Google Sign-In Button', 'bizpanda-signin-locker') ?></td>
			<td>
				<a href="<?php echo $manager->actionUrl('index', array('onp_sl_page' => 'google-client-id')) ?>" class="btn btn-default"><?php _e('Require getting Google Client ID', 'bizpanda-signin-locker') ?></a>
			</td>
		</tr>
		<tr>
			<td><?php _e('LinkedIn Sign-In Button', 'bizpanda-signin-locker') ?></td>
			<td>
				<a href="<?php echo $manager->actionUrl('index', array('onp_sl_page' => 'linkedin-api-key')) ?>" class="btn btn-default"><?php _e('Require getting a LinkedIn API Key', 'bizpanda-signin-locker') ?></a>
			</td>
		</tr>
	</table>
	<p><?php _e('Now when you have created apps for Facebook and Google, let\'s examine how to use the default shortcode <strong>Sign-In Locker</strong>.', 'bizpanda-signin-locker'); ?>
	</p>
</div>
<div class="onp-help-section">
	<h2>2. <?php _e('Open the editor', 'bizpanda-signin-locker'); ?></h2>

	<p><?php printf(__('In admin menu, select Opt-In Panda -> <a href="%s">All Lockers</a>.', 'bizpanda-signin-locker'), admin_url('edit.php?post_type=opanda-item')); ?></p>

	<p><?php _e('Then click on the shortcode titled <strong>Sign-In Locker</strong> to open its editor:', 'bizpanda-signin-locker'); ?></p>

	<p class='onp-img'>
		<img src='<?php echo 'https://cconp.s3.amazonaws.com/bizpanda/signin-locker/help/panda-items.png' ?>'/>
	</p>
</div>
<div class="onp-help-section">
	<h2>3. <?php _e('Configure the locker', 'bizpanda-signin-locker'); ?></h2>

	<p>
		1) <?php _e('Set a clear title that attracts attention or creates a call to action (see the example below).', 'bizpanda-signin-locker'); ?></p>

	<p>
		2) <?php _e('Describe what the visitor will get after they unlock the content. This is very important, as visitors need to be aware of what they are getting. And please, only promise things you can deliver.', 'bizpanda-signin-locker'); ?></p>

	<p>3) <?php _e('Choose one of the available themes for your locker.', 'bizpanda-signin-locker'); ?></p>

	<p>
		4) <?php _e('Set the Overlay Mode. We recommend to use the Blurring Mode as the most attention-grabbing mode.', 'bizpanda-signin-locker'); ?></p>
	</p>
	<p class='onp-img'>
		<img src='<?php echo 'https://cconp.s3.amazonaws.com/bizpanda/signin-locker/help/basic-options.png' ?>'/>
	</p>

	<p>
		5) <?php _e('Make sure that the Facebook, Twitter and Google buttons are marked. That makes available for the users to sign in through the respective social networks.', 'bizpanda-signin-locker'); ?>
	</p>

	<p>
		6) <?php _e('Select actions you would like to execute for each button when the user clicks it to sign in.', 'bizpanda-signin-locker'); ?>
	</p>

	<p>
		7) <?php _e('Configure each action.', 'bizpanda-signin-locker'); ?>
	</p>

	<p class='onp-img'>
		<img src='<?php echo 'https://cconp.s3.amazonaws.com/bizpanda/signin-locker/help/social-options.png' ?>'/>
	</p>

	<p>
		<?php _e('Check out the image below to learn how to configure the buttons and their actions:', 'bizpanda-signin-locker'); ?>
	</p>

	<p class='onp-img'>
		<img src='<?php echo 'https://cconp.s3.amazonaws.com/bizpanda/signin-locker/help/social-options-explanation.png' ?>'/>
	</p>

	<p>
		<?php _e('Congratulations! The locker is ready to use.', 'bizpanda-signin-locker'); ?>
	</p>

	<p>
		<?php printf(__('The page <a href="%s">Stats & Reports</a> will help you to correct your locker after collecting the first statistical data.', 'bizpanda-signin-locker'), admin_url('edit.php?post_type=opanda-item&page=stats-' . $bizpanda->pluginName)); ?>
	</p>

	<p class='onp-note'>
		<?php _e('On the right sidebars, there are some additional options which can help you to adjust the locker to your site audience. Try to use them by yourself later.', 'bizpanda-signin-locker'); ?>
	</p>
</div>
<div class="onp-help-section">
	<h2>4. <?php _e('Place the locker shortcode', 'bizpanda-signin-locker'); ?></h2>

	<p>
		<?php _e('Decide what content you would like to lock. It might be:', 'bizpanda-signin-locker'); ?>
	<ul>
		<li><?php _e('A download link (for instance, a free graphic, an audio file, video resources, or a printable pdf of your article).', 'bizpanda-signin-locker'); ?></li>
		<li><?php printf(__('A promo code (for instance, a %s off discount, if the visitor shares your promo page).', 'bizpanda-signin-locker'), '10%'); ?></li>
		<li><?php _e('The end of your article (for instance, you might show the beginning of the article to gain interest, but hide the ending).', 'bizpanda-signin-locker'); ?></li>
	</ul>
	<?php _e('Basically, you can hide any content that would be important for visitors who are visiting your site.', 'bizpanda-signin-locker'); ?>
	</p>
	<p>
		<?php _e('However, <strong>you should never</strong>:', 'bizpanda-signin-locker'); ?>
	<ul>
		<li>
			<?php _e('Lock all of your content, posts or pages.', 'bizpanda-signin-locker'); ?>
		</li>
		<li>
			<?php _e('Lock boring content or content that is not interesting.', 'bizpanda-signin-locker'); ?>
		</li>
	</ul>
	</p>
	<p>
		<?php _e('In other words, don’t try to trick your visitors.', 'bizpanda-signin-locker'); ?>
	</p>

	<p>
		<?php _e('Open the post editor for the post where you want to put the locker. Wrap the content you want to lock within the locker shortcode. For example: <span class="onp-mark onp-mark-gray onp-mark-stricked onp-code">[signinlocker] Locked Content Goes Here [/signinlocker]</span>:', 'bizpanda-signin-locker'); ?>
	</p>

	<p class='onp-img'>
		<img src='<?php echo 'https://cconp.s3.amazonaws.com/bizpanda/signin-locker/help/shortcode.png' ?>'/>
	</p>

	<p>
		<?php _e('That’s it! Save your post and see the locker on your site! ', 'bizpanda-signin-locker'); ?>
	</p>

	<p class='onp-img'>
		<img src='<?php echo 'https://cconp.s3.amazonaws.com/bizpanda/signin-locker/help/signinlocker.png' ?>'/>
	</p>
</div>