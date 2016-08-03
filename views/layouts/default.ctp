<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Evaluation System'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('ui');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link(__('Evaluation System', true), '/'); ?></h1>
		</div>
		<div id="content">
			<div class="navs">
				<?php if($user):?>
					<?php if($user['User']['is_admin'] == 1):?>
							<span><?php echo $this->Html->link(__('Users', true), array('controller' => 'users', 'action' => '/')); ?> </span>
							<span><?php echo $this->Html->link(__('Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </span>
							<span><?php echo $this->Html->link(__('Questions', true), array('controller' => 'questions', 'action' => '/')); ?> </span>
							<span><?php echo $this->Html->link(__('Categories', true), array('controller' => 'categories', 'action' => '/')); ?> </span>
							<span><?php echo $this->Html->link(__('Profile', true), array('controller' => 'students', 'action' => 'add')); ?> </span>
							<span><?php echo $this->Html->link(__('Result', true), array('controller' => 'evaluations', 'action' => 'index')); ?></span>
							<span><?php echo $this->Html->link(__('Account Setting', true), array('controller' => 'users', 'action' => 'account_setting')); ?></span>
							<span><?php echo $this->Html->link(__('Logout', true), array('controller' => 'users', 'action' => 'logout')); ?> </span>
						<?php elseif ($user['User']['is_admin'] == 0):?>
							<span></span>
							<span><?php echo $this->Html->link(__('About Us', true), array('controller' => '', 'action' => 'about-us')); ?></span>
							<span><?php echo $this->Html->link(__('Account Setting', true), array('controller' => 'users', 'action' => 'account_setting')); ?></span>
							<span><?php echo $this->Html->link(__('Logout', true), array('controller' => 'users', 'action' => 'logout')); ?> </span>
						<?php endif;?>
				<?php else:?>
					<span><?php echo $this->Html->link(__('Register', true), array('controller' => '', 'action' => 'register')); ?> </span>
					<span><?php echo $this->Html->link(__('Login', true), array('controller' => '', 'action' => 'login')); ?> </span>
			
				<?php endif;?>
			</div>
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
			
		</div>
		<div id="footer">
		</div>
	</div>
	<?php
		//echo $this->Html->script('bower_components/jquery/dist/jquery.min');
		echo $this->Html->script('plugins/jquery-1.9.1.min');
		echo $this->Html->script('home');
		echo $scripts_for_layout;
	?>
</body>
</html>