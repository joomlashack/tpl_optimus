<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );
define( 'YOURBASEPATH', dirname(__FILE__) );
require(YOURBASEPATH .DS."/styleswitcher.php");
require( YOURBASEPATH.DS."/js/template.css.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<?php
	$themecolor 	= $this->params->get("themecolor", "style1");
	$defaultWidth	= $this->params->get("defaultWidth", "fixed1024");
	$headerstyle	= $this->params->get("headerstyle", "graphic");
	$leftColWidth	= $this->params->get("leftColWidth");
	$typeFace		= $this->params->get("typeFace", "sanserif");
	$rightColWidth	= $this->params->get("rightColWidth");
	$headline		= $this->params->get("headline");
	$slogan			= $this->params->get("slogan");
	$logoHeight		= $this->params->get("logoHeight");
	$logoWidth		= $this->params->get("logoWidth");
	require( YOURBASEPATH.DS."/themesaver.php");
	
	
	//count modules in vertical positions u456
	$showcasemodulecount = $this->countModules('user4') + $this->countModules('user5') + $this->countModules('user6');
	if ($showcasemodulecount == "1") {$showcasetdwidth = "100%";}
	elseif ($showcasemodulecount == "2") {$showcasetdwidth = "50%";}
	elseif($showcasemodulecount == "3") {$showcasetdwidth = "33%";}
	
	
	//count modules in vertical positions u789
	$footermodulecount = $this->countModules('user7') + $this->countModules('user8') + $this->countModules('user9');
	if ($footermodulecount == "1") {$footertdwidth = "100%";}
	elseif ($footermodulecount == "2") {$footertdwidth = "50%";}
	elseif($footermodulecount == "3") {$footertdwidth = "33%";}
	
	
	
?>
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/<?php echo $width;?>.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/template_css.css" type="text/css" media="screen" />
<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/<?php echo $scheme;?>.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/nav.css" type="text/css" media="screen" />


<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/<?php echo $font;?>.css" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/j15.css" type="text/css" media="screen" />

<!--[if IE]>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $mainframe->getTemplate();?>/css/ie.css" media="screen" type="text/css" />
<![endif]-->



<style type="text/css" media="screen">
#logo-graphic h1 a{display:block;text-indent:-5000em;text-decoration:none;width:<?php echo $this->params->get("logoWidth");?>px;line-height:<?php echo $this->params->get("logoHeight");?>px;height:<?php echo $this->params->get("logoHeight");?>px;}
#newsflash,#header {height:<?php echo $logoHeight; ?>px;}
</style>




<!--[if lte IE 6]>
<style type="text/css">
.designer a,img { behavior: url(<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/js/iepngfix.htc); }
</style>
<![endif]-->
</head>
<body>
<div id="wrap">
	<div id="header">	
						<div id="logo-<?php echo $headerstyle;?>">
							<h1><a href="<?php echo JURI::base(); ?>" title="<?php echo $mainframe->getCfg('sitename'); ?>"><?php echo $headline;?></a></h1>
							<h2><?php echo $slogan;?></h2>
						</div>
						<?php if($this->countModules('newsflash')) : ?>
						<div id="newsflash">
						<jdoc:include type="modules" name="newsflash" style="raw" />
						</div>
						<?php endif; ?>
		</div><!-- end header -->
		<div id="mbar">
			<div id="nav">
					 <div class="menuleft">&nbsp;</div>
					 <div class="menuright">&nbsp;</div>
					<script type="text/javascript" src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/js/barmenu.js"></script>
		<jdoc:include type="modules" name="top" style="raw" />
			</div></div>
			<?php if($this->countModules('breadcrumb')) : ?>
			<div class="path">
			<jdoc:include type="modules" name="breadcrumb" style="raw" />
			</div>
			<?php endif; ?>
			<div class="clear">&nbsp;</div>
            <div id="sys_messages"><jdoc:include type="message" /></div>
		<div class="mainbody">
		
		
		<?php if($this->countModules('user4') or $this->countModules('user5') or $this->countModules('user6')) : ?>
				<div id="showcase" style="margin-bottom: 18px;">
								<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
								<tr>
								<?php if ($this->countModules( 'user4' )) : ?>
								<td style="width: <?php echo $showcasetdwidth; ?>;padding:5px; vertical-align:top;">
								<jdoc:include type="modules" name="user4" style="rounded" />
								</td>
								<?php endif; ?>
								<?php if ($this->countModules( 'user5' )) : ?>
								<td style="width: <?php echo $showcasetdwidth; ?>;padding:5px; vertical-align:top;">
								<jdoc:include type="modules" name="user5" style="rounded" />
								</td>
								<?php endif; ?>
								<?php if ($this->countModules( 'user6' )) : ?>
								<td style="width: <?php echo $showcasetdwidth; ?>;padding:5px; vertical-align:top;">
								<jdoc:include type="modules" name="user6" style="rounded" />
								</td>
								<?php endif; ?>
								</tr>
								</table>
							</div>
		<?php endif; ?>
		
		
				
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<?php if($this->countModules('left')) : ?>
			    <td class="leftcol" style="width:<?php echo $leftColWidth; ?>px;">
					<jdoc:include type="modules" name="left" style="rounded" />
			    </td>
			<?php endif; ?>
			    <td class="maincol">
				<div class="inside">
					<?php if($this->countModules('banner')) : ?>
					<div class="banner">
					<jdoc:include type="modules" name="banner" style="xhtml" />
					</div>
					<?php endif; ?>
					<jdoc:include type="component" />
				</div>    
				</td>
			<?php if($this->countModules('right')) : ?>
			    <td class="rightcol" style="width:<?php echo $rightColWidth; ?>px;px">
						<jdoc:include type="modules" name="right" style="rounded" />
			    </td>
			<?php endif; ?>
			  </tr>
			</table>





			<?php if($this->countModules('user7') or $this->countModules('user8') or $this->countModules('user9')) : ?>
					<div id="bottom">
					<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
					<tr>
					<?php if ($this->countModules( 'user7' )) : ?>
					<td style="width: <?php echo $footertdwidth; ?>;padding:5px; vertical-align:top;">
					<jdoc:include type="modules" name="user7" style="rounded" />
					</td>
					<?php endif; ?>
					<?php if ($this->countModules( 'user8' )) : ?>
					<td style="width: <?php echo $footertdwidth; ?>;padding:5px; vertical-align:top;">
					<jdoc:include type="modules" name="user8" style="rounded" />
					</td>
					<?php endif; ?>
					<?php if ($this->countModules( 'user9' )) : ?>
					<td style="width: <?php echo $footertdwidth; ?>;padding:5px; vertical-align:top;">
					<jdoc:include type="modules" name="user9" style="rounded" />
					</td>
					<?php endif; ?>
					</tr>
					</table>
					</div>
				<?php endif; ?>





		</div>
			<div id="footer">
				
				<div class="ftr-right">&nbsp;</div>
				<div class="ftr-left">&nbsp;</div>
				<jdoc:include type="modules" name="footer" style="raw" />
				
			</div>
	</div><!-- end wrap -->
	<?php echo $jstpl; ?>
</body>
</html>