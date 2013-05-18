<?php
/**
* @package   yoo_master
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// include config	
include_once(dirname(__FILE__).'/config.php');

// get warp
$warp = Warp::getInstance();

// load main template file, located in /layouts/template.php
echo $warp['template']->render('template');

/*
INSTRUCTIONS:

# to add css or js files goto /layouts/template.config.php
# to edit html-markup goto /layouts/template.php
# to add or change positions:
    - add the name into /templateDetails.xml
    - put position in layout /layouts/template.php
    - define style of modules /layouts/module.php
# to add system ovverides go to /warp/systems/joomla/layouts/
*/