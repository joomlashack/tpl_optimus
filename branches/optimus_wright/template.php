<?php
// no direct access
defined('_JEXEC') or die('Restricted index access');
$app = JFactory::getApplication();
?>
<doctype>
    <html>
        <head>
        <w:head />

        <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/<?php echo $width; ?>.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/<?php echo $font; ?>.css" type="text/css" media="screen" />

        </head>
        <body>
            <div id="wrap">
                <div id="header">	
                    <w:logo />
                </div><!-- end header -->
                <div id="mbar">
                    <div id="nav">
                        <div class="menuleft">&nbsp;</div>
                        <div class="menuright">&nbsp;</div>
                        <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/barmenu.js"></script>
                        <w:nav />
                    </div></div>
                <?php if ($this->countModules('breadcrumb')) : ?>
                    <div class="path">
                        <w:module name="breadcrumb" chrome="raw" />
                    </div>
                <?php endif; ?>
                <div class="clear">&nbsp;</div>

                <div class="mainbody container_12">

                    <w:module type="grid" name="showcase" chrome="wrightflexgrid" />
                    <div class="clear"></div>

                    <section id="main">
                        <w:content />
                    </section>
                    <?php if ($this->countModules('sidebar1')) : ?>
                        <aside id="sidebar1">
                            <w:module name="sidebar1" />
                        </aside>
                    <?php endif; ?>
                    <?php if ($this->countModules('sidebar2')) : ?>
                        <aside id="sidebar2">
                            <w:module name="sidebar2" />
                        </aside>
                    <?php endif; ?>
                    
                    <div class="clear"></div>
                    
                    <div id="bottom">
                        <w:module name="bottom" type="grid" chrome="wrightflexgrid" />
                    </div>

                </div>
                <div id="footer">

                    <div class="ftr-right">&nbsp;</div>
                    <div class="ftr-left">&nbsp;</div>
                    <w:module name="footer" />
                </div>
                <div class="grid_12"><w:footer /></div>
            </div><!-- end wrap -->
        </body>
    </html>