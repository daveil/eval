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
		
		<?php __('LCNSHS'); ?>
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
			<?php echo $this->Html->image('logo2.png', array('style'=>'width:120px;float:left;margin-bottom:10px;margin-right:10px;'));?>
			<h1 style="font-size: x-large;margin-top:50px;"><?php echo $this->Html->link(__('Lipa City National Science High School', true), '/'); ?></h1>
			<?php if($user):?>
			<span id="user">
			<?php echo $user['User']['username'];?>
			<?php echo $this->Html->link(__('Logout', true), 
								array(
										'controller' => 'users', 
										'action' => 'logout'
									),array('style'=>'color:white !important;')); ?>
				
			<?php endif;?>
			</span>
		</div>
		<div id="content">
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