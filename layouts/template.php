<?php
/**
* @package   yoo_master
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get template configuration
include($this['path']->path('layouts:template.config.php'));

/* 

INSTRUCTIONS

# How to insert image?
<?php echo $this['path']->url('images:logo.png'); ?>

# To insert any other resources check /config.php and register path

# To change style of modules go to /layouts/module.php

*/
?>
<!DOCTYPE HTML>
<html class="no-js" lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>">

<head>
<?php echo $this['template']->render('head'); ?>
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
//to add css or js or any go to /layouts/template.config.php
?>
</head>

<body id="top" class="page <?php echo $this['config']->get('body_classes'); ?>" data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>

	<?php if ($this['modules']->count('absolute')) : ?>
        <div class="absolute">
            <?php echo $this['modules']->render('absolute'); ?>
        </div>
	<?php endif; ?>
	
	<div class="all-page-wrapper clearfix">

		<header class="page-header">
            
            <a href="<?php echo $this['config']->get('site_url'); ?>"><img class="logo" src="<?php echo $this['path']->url('images:logo.png'); ?>" alt=""></a>

			<?php if ($this['modules']->count('menu + search')) : ?>
			<div class="mainmenu-panel clearfix">
				
				<?php if ($this['modules']->count('menu')) : ?>
                    <nav id="menu" class="mainmenu"><?php echo $this['modules']->render('menu'); ?></nav>
				<?php endif; ?>

				<?php if ($this['modules']->count('search')) : ?>
                    <div id="search" class="search-box"><?php echo $this['modules']->render('search'); ?></div>
				<?php endif; ?>
				
			</div>
			<?php endif; ?>
		
		</header>
		
		<?php if ($this['modules']->count('innertop + innerbottom + sidebar-a + sidebar-b') || $this['config']->get('system_output')) : ?>
            <div id="main" class="grid-block">

                <div class="grid-box">

                    <?php if ($this['modules']->count('breadcrumbs')) : ?>
                    <section id="breadcrumbs"><?php echo $this['modules']->render('breadcrumbs'); ?></section>
                    <?php endif; ?>

                    <?php if ($this['config']->get('system_output')) : ?>
                    <article id="content" class="grid-block"><?php echo $this['template']->render('content'); ?></article>
                    <?php endif; ?>
                    
                </div>
                <!-- maininner end -->
                
                <?php if ($this['modules']->count('sidebar')) : ?>
                <aside class="grid-box"><?php echo $this['modules']->render('sidebar', array('layout'=>'stack')); ?></aside>
                <?php endif; ?>

            </div>
		<?php endif; ?>
		<!-- main end -->

		<?php if ($this['modules']->count('grid')) : ?>
            <section class="grid-block"><?php echo $this['modules']->render('grid', array('layout'=>'equal')); // to edit layout go to /warp/layouts/modules/layouts/equal.php ?></section>
		<?php endif; ?>
		
		<footer id="footer" class="page-footer">

			<?php echo $this['modules']->render('footer', array('style'=>'raw')); ?>
            
            <!-- a href="#top">Top</a -->
            
		</footer>

	</div>
	
	<?php echo $this->render('footer'); //this is warp system output, don't delete ?>
	
</body>
</html>