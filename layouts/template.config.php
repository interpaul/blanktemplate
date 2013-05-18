<?php
/**
* @package   blanktemplate
* @author    Paul Radzkov
* @copyright Copyright © Paul Radzkov
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

/*
WARNING!
Don't forget to change «blanktemplate» to your template name in «templateDetails.xml» on line «<fields name="params" addfieldpath="/templates/blanktemplate/warp/systems/joomla/config/elements">»
*/

$rtl             = $this['config']->get('direction') == 'rtl';
$body_config	 = array();


// generate css for dropdown menu
$dropdownwidth = 200;
foreach (array(1 => '.dropdown', 2 => '.columns2', 3 => '.columns3', 4 => '.columns4') as $i => $class) {
	$css[] = sprintf('#menu %s { width: %dpx; }', $class, $i * intval($this['config']->get('menu_width')));
}

// load css
$this['asset']->addFile('css', 'css:normalize.css');
$this['asset']->addFile('css', 'css:html5boilerplate.css');
//$this['asset']->addFile('css', 'css:base.css');
//$this['asset']->addFile('css', 'css:layout.css'); //for equal modules
//$this['asset']->addFile('css', 'css:menus.css');
//$this['asset']->addString('css', implode("\n", $css));
//$this['asset']->addFile('css', 'css:modules.css');
//$this['asset']->addFile('css', 'css:tools.css');
//$this['asset']->addFile('css', 'css:system.css');
//$this['asset']->addFile('css', 'css:extensions.css');
//$this['asset']->addFile('css', 'css:custom.css');
//if ($this['config']->get('direction') == 'rtl') $this['asset']->addFile('css', 'css:rtl.css');
//$this['asset']->addFile('css', 'css:responsive.css');
//$this['asset']->addFile('css', 'css:print.css');
$this['asset']->addFile('css', 'css:template.css');


// set body css classes
$body_classes  = ' ';
$body_classes .= $this['system']->isBlog() ? 'isblog ' : 'noblog ';
$body_classes .= $this['config']->get('page_class');

$this['config']->set('body_classes', $body_classes);

// add social buttons
// uncomment warp.js to use it
$body_config['twitter'] = (int) $this['config']->get('twitter', 0);
$body_config['plusone'] = (int) $this['config']->get('plusone', 0);
$body_config['facebook'] = (int) $this['config']->get('facebook', 0);

$this['config']->set('body_config', json_encode($body_config));

// add javascripts
$this['asset']->addFile('js', 'js:modernizr-2.6.2.min.js');
$this['asset']->addFile('js', 'js:warp.js'); //use for support: matchWidth, matchHeight, smoothScroller, socialButtons, AJAXSearch
//$this['asset']->addFile('js', 'js:responsive.js'); //use for support: onMediaQuery
//$this['asset']->addFile('js', 'js:accordionmenu.js'); // accordionMenu
//$this['asset']->addFile('js', 'js:dropdownmenu.js'); // dropdownMenu
$this['asset']->addFile('js', 'js:template.js');

// internet explorer
if ($this['useragent']->browser() == 'msie') {

	// add conditional comments
	//$head[] = sprintf('<!--[if lte IE 8]><script src="%s"></script><![endif]-->', $this['path']->url('js:html5.js'));
	//$head[] = sprintf('<!--[if IE 8]><link rel="stylesheet" href="%s" /><![endif]-->', $this['path']->url('css:ie8.css'));

}

// add $head
if (isset($head)) {
	$this['template']->set('head', implode("\n", $head));
}