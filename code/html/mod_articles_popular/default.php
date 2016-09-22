<?php
// Wright v.3 Override: Joomla 3.6.2
/**
 * @package     Optimus
 * @subpackage  mod_articles_popular
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<ul class="mostread<?php echo $moduleclass_sfx; ?> unstyled">  <?php // Wright v.3: Added nav nav-list classes ?>
<?php foreach ($list as $item) : ?>
	<li>
		<a href="<?php echo $item->link; ?>">
			<i class="icon icon-star-o"></i>  <?php // Wright v.3: Added icon ?>
			<?php echo $item->title; ?></a>
	</li>
<?php endforeach; ?>
</ul>
