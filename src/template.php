<?php
/**
 * @package     Optimus
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

?>
<doctype>
<html>
	<head>
		<w:head />
	</head>
	<body class="<?php echo $wrightBodyClass ?>">
		<?php
			if ($this->countModules('toolbar'))
				:
		?>
		<!-- toolbar -->
		<w:nav containerClass="<?php echo $wrightContainerClass ?>" rowClass="row-fluid" wrapClass="navbar-fixed-top" type="toolbar" name="toolbar" />
		<?php
			endif;
		?>
		<div class="<?php echo $wrightContainerClass; ?>">
			<!-- header -->
			<header id="header" class="m-b-3 m-t-3">
				<div class="row-fluid">
					<w:logo name="menu" />
				</div>
			</header>
			<?php
				if ($this->countModules('top'))
					:
			?>
			<div class="top-position">
				<w:module type="none" name="top" />
			</div>
			<?php
				endif;
			?>
		</div>
		<div class="<?php echo $wrightContainerClass; ?>">
			<!-- featured -->
			<?php
				if ($this->countModules('featured'))
					:
			?>
			<div id="featured">
				<w:module type="none" name="featured" />
			</div>
			<?php
				endif;
			?>
			<!-- grid-top -->
			<?php
				if ($this->countModules('grid-top'))
					:
			?>
			<div id="grid-top" class="items-bg">
				<w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" />
			</div>
			<?php
				endif;
			?>
			<?php
				if ($this->countModules('grid-top2'))
					:
			?>
			<!-- grid-top2 -->
			<div id="grid-top2" class="items-bg">
				<w:module type="row-fluid" name="grid-top2" chrome="wrightflexgrid" />
			</div>
			<?php
				endif;
			?>
			<div id="main-content" class="row-fluid <?php echo $isBlog; ?>">
				<!-- sidebar1 -->
				<aside id="sidebar1">
					<w:module name="sidebar1" />
				</aside>
				<!-- main -->
				<section id="main">
					<?php
						if ($this->countModules('above-content'))
							:
					?>
					<!-- above-content -->
					<div id="above-content">
						<w:module type="none" name="above-content" />
					</div>
					<?php
						endif;
					?>
					<?php
						if ($this->countModules('breadcrumbs'))
							:
					?>
					<!-- breadcrumbs -->
					<div id="breadcrumbs">
						<w:module name="breadcrumbs" chrome="none" type="none" />
					</div>
					<?php
						endif;
					?>
					<!-- component -->
					<w:content />
					<?php
						if ($this->countModules('below-content'))
							:
					?>
					<!-- below-content -->
					<div id="below-content" class="m-t-3">
						<w:module type="none" name="below-content" />
					</div>
					<?php
						endif;
					?>
				</section>
				<!-- sidebar2 -->
				<aside id="sidebar2">
					<w:module name="sidebar2" />
				</aside>
			</div>
			<?php
				if ($this->countModules('grid-bottom'))
					:
			?>
			<!-- grid-bottom -->
			<div id="grid-bottom" class="items-bg">
				<w:module type="row-fluid" name="grid-bottom" chrome="wrightflexgrid" />
			</div>
			<?php
				endif;
			?>
			<?php
				if ($this->countModules('grid-bottom2'))
					:
			?>
			<!-- grid-bottom2 -->
			<div id="grid-bottom2" class="items-bg">
				<w:module type="row-fluid" name="grid-bottom2" chrome="wrightflexgrid" />
			</div>
			<?php
				endif;
			?>
		</div>

		<!-- footer -->
		<div class="wrapper-footer">
		   <footer id="footer" <?php
			if ($this->params->get('stickyFooter', 1))
				:
				?> class="sticky"<?php
			endif;
				?>>
		   	<div class="<?php echo $wrightContainerClass; ?> footer-content ">
			   	<?php
						if ($this->countModules('footer'))
						:
					?>
					<w:module type="row-fluid" name="footer" chrome="wrightflexgrid" />
				 	<?php
						endif;
					?>
					<?php
						if ($this->countModules('bottom-menu'))
						:
					?>
					<!-- bottom-menu -->
					<w:nav containerClass="" rowClass="<?php echo $wrightGridMode ?>" name="bottom-menu" wrapClass="navbar-inverse" />
					<?php
						endif;
					?>
				</div>
				<w:footer />
		   </footer>
		</div>
    <w:module type="none" name="debug" chrome="none" />
	</body>
</html>
