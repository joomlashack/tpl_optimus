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

$app = JFactory::getApplication();
$input = $app->input;

$paramOption = $input->getCmd('option', '');
$paramView = $input->getCmd('view', '');
$paramLayout = $input->getCmd('layout', 'default');
$paramItemid = $input->getCmd('Itemid', '');
$paramId = $input->getCmd('id', '');

$isBlog = "not_blog";

// Checks the right layout of the category, depending if it's set on the menu item or if it has to look for the category layout or default com_content layout for blogs
if ($paramOption == 'com_content')
{
	if ($paramView == 'featured' || $paramLayout == 'blog')
	$isBlog = "is_blog";
}