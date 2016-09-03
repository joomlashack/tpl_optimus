<?php
/**
 * @package     Optimus
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

$width          = $this->params->get("defaultWidth", "fixed1024");
$font           = $this->params->get("typeFace", "sanserif");

// WrightTemplate class, for special settings on Wright
class WrightTemplate extends WrightTemplateBase {
	public $suffixes = true;  // allows stacked suffixes
}

$opwidth = '960px';
// fluid parameter
$user = JFactory::getUser();
if (!is_null(JRequest::getVar('opwidth', '')))
{
	$opwidth = JRequest::getVar('opwidth');
	if ($opwidth == '960px' || $opwidth == '800px' || $opwidth == 'fluid') {
		$user->setParam('opwidth', $opwidth);
		$user->save(true);
	}
}
$opwidth = ($user->getParam('opwidth',''));
if ($opwidth == '') {
	$opwidth =  $this->params->get('opwidth','960px' );
}

if ($opwidth == '960px') {
	$opwidth = '12';
}

if ($opwidth == '800px') {
	$opwidth = '800';
}
