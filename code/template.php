<?php
/**
 * @package     Optimus
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2014 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');


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
