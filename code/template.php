<?php
/**
 * @copyright Copyright (C) 2012 Joomlashack LLC. All rights reserved.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

// WrightTemplate
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

?>
<doctype>
	<html>
		<head>
			<w:head />
		</head>
		<body>
			<div class="border-top"></div>
			<div id="wrap" class="wrap_<?php echo $opwidth ?>">
				<div id="header">
					<div class="logo-wrapp">
						<div class="container_<?php echo $opwidth ?> clearfix">
							<div class="logo-three">
							<div class="grid_<?php echo $this->params->get('logowidth','1') ?>" id="logogrid">
								<w:logo style="none"/>
							</div>
							<div class="grid_<?php echo (12 - (int)$this->params->get('logowidth','1')) ?>">
								<?php if ($this->countModules('top')) :
								?><div class="top">
								<div class="top-wrapper">
								<w:module type="single" name="top" chrome="xhtml" />
								<div class="clr"></div>
								</div>

								</div>
								<?php    endif;?>
							</div>
						</div>
						</div>
					</div>
					<div class="log-b-repeat">
						<div class="log-b-right">
							<div class="log-b-left"></div>
						</div>
					</div>
					<div id="mbar">
						<div id="nav">
							<div class="nav-left">
								<w:nav />
							</div>
							<div class="clear">
								&nbsp;
							</div>
						</div>
					</div>
				</div><!-- end header -->
				<div class="container_<?php echo $opwidth ?> clearfix">
					<?php if ($this->countModules('grid-top')) :
					?>
					<div id="grid-top">
						<w:module type="grid" name="grid-top" chrome="wrightflexgridimages" />
						<div class="clearmargin"></div>
					</div>
					<?php    endif;?>
					<?php if ($this->countModules('grid-top2')) :
					?>
					<div id="grid-top2">
						<w:module type="grid" name="grid-top2" chrome="wrightflexgridimages" />
						<div class="clearmargin"></div>
					</div>
					<?php    endif;?>
					<?php if ($this->countModules('breadcrumb')) :
					?>
					<div class="path">
						<w:module name="breadcrumb" chrome="raw" />
					</div>
					<?php endif;?>
					<div class="clear">
						&nbsp;
					</div>
					<div class="mainbody container_<?php echo $opwidth ?>">
						<div class="clear"></div>
						<section id="main">
							<w:content />
						</section>
						<?php if ($this->countModules('sidebar1')) :
						?>
						<aside id="sidebar1">
							<w:module name="sidebar1" chrome="wrightgridimages" />
							<div class="clearmargin"></div>
						</aside>
						<?php endif;?>
						<?php if ($this->countModules('sidebar2')) :
						?>
						<aside id="sidebar2">
							<w:module name="sidebar2" chrome="wrightgridimages" />
							<div class="clearmargin"></div>
						</aside>
						<?php endif;?>

						<div class="clear"></div>
						<div id="bottom">
							<w:module name="bottom" type="grid" chrome="wrightflexgrid" />
						</div>
					</div>
					<?php if ($this->countModules('grid-bottom')) :
					?>
					<div id="grid-bottom">
						<w:module type="grid" name="grid-bottom" chrome="wrightflexgridimages" />
						<div class="clearmargin"></div>
					</div>
					<?php    endif;?>
					<?php if ($this->countModules('grid-bottom2')) :
					?>
					<div id="grid-bottom2">
						<w:module type="grid" name="grid-bottom2" chrome="wrightflexgridimages" />
						<div class="clearmargin"></div>
					</div>
					<?php endif;?>
				</div>
				<div id="footer">
					<div class="footer-int">
						<w:module name="footer" />
					</div>
					
				</div>
				
			</div><!-- end wrap -->
			<div class="grid_12">
					<w:footer />
				</div>
		</body>
	</html>
