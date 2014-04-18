<?php
/* ------------------------------------------------------------------------
  # author    Gonzalo Suez
  # author    Adrian Fürschuß
  # copyright Copyright © 2013 gsuez.cl. All rights reserved.
  # @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
  # Website   http://www.gsuez.cl
  ------------------------------------------------------------------------- */
// no direct access
defined('_JEXEC') or die;

include 'includes/params.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

    <?php
    include 'includes/head.php';
    ?>

    <body>
        <div class="wrapper">
            <header>
                <div class="container">
                    <?php if ($this->countModules('top + top-left + top-right')) : ?>
                        <nav role="navigation" id="topnav">
                            <!--top-->
                            <?php if ($this->countModules('top')) : ?>
                                <div class="row">
                                    <jdoc:include type="modules" name="top" style="none" />        
                                </div>
                            <?php endif; ?>
                            <!--top-->
                            <!-- top-left -->
                            <?php if ($this->countModules('top-left')) : ?>
                                <div class="pull-left">
                                    <jdoc:include type="modules" name="top-left" style="none" />
                                </div>
                            <?php endif; ?>
                            <!-- top-left -->
                            <!-- top-right -->
                            <?php if ($this->countModules('top-right')) : ?>
                                <div class="pull-right">
                                    <jdoc:include type="modules" name="top-right" style="none" />
                                </div>
                            <?php endif; ?>
                            <!-- top-right -->
                        </nav>
                    <?php endif; ?>
                    <div class="clearfix"></div>
                    <!-- header -->
                    <div role="banner" id="header">
                        <div class="pull-left">
                            <h1><?php echo $this->params->get('page_title') ?></h1>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo $this->params->get('logo_link') ?>">
                                <img style="width:<?php echo $this->params->get('logo_width') ?>px; height:<?php echo $this->params->get('logo_height') ?>px; "
                                     src="<?php echo $this->params->get('logo_file') ?>" 
                                     alt="Logo" />
                            </a>
                        </div>
                    </div>
                    <!-- header -->
                </div>
            </header>

            <!--navigation-->
            <nav class="navbar navbar-default" role="navigation" id="mainnav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <?php if ($this->countModules('navigation')) : ?>
                            <jdoc:include type="modules" name="navigation" style="none" />
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
            <!--navigation-->

            <!--fullwidth-->
            <?php if ($this->countModules('fullwidth')) : ?>
                <div id="fullwidth">
                    <div class="row">
                        <jdoc:include type="modules" name="fullwidth" style="block"/>
                    </div>
                </div>
            <?php endif; ?>
            <!--fullwidth-->
            <!--Showcase-->
            <?php if ($this->countModules('showcase')) : ?>
                <div id="showcase">
                    <div class="container">
                        <div class="row">
                            <jdoc:include type="modules" name="showcase" style="custom"/>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!--Showcase-->
            <!--Feature-->
            <?php if ($this->countModules('feature')) : ?>
                <div id="feature">
                    <div class="container">
                        <div class="row">
                            <jdoc:include type="modules" name="feature" style="custom" />        
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!--Feature-->
            <!--content-->
            <div class="container">
                <!--breadcrumbs-->
                <?php if ($this->countModules('breadcrumbs')) : ?>
                    <jdoc:include type="modules" name="breadcrumbs" style="none" />
                <?php endif; ?>
                <!--breadcrumbs-->

                <div id="main" class="row show-grid">
                    <!--left-->
                    <?php if ($this->countModules('left')) : ?>
                        <nav id="sidebar" class="sidebar col-sm-<?php echo $leftcolgrid; ?>">
                            <jdoc:include type="modules" name="left" style="xhtml" />
                        </nav>
                    <?php endif; ?>
                    <!--left-->
                    <!--component-->
                    <div id="container" class="col-sm-<?php echo (12 - $leftcolgrid - $rightcolgrid); ?>">
                        <!-- Content-top Module Position -->        
                        <?php if ($this->countModules('content-top')) : ?>
                            <div id="content-top">
                                <div class="row">
                                    <jdoc:include type="modules" name="content-top" style="block" />        
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="main-box">
                            <jdoc:include type="component" />
                            <jdoc:include type="message" />        
                        </div>
                        <!-- Below Content Module Position -->        
                        <?php if ($this->countModules('content-bottom')) : ?>
                            <div id="content-bottom">
                                <div class="row">
                                    <jdoc:include type="modules" name="content-bottom" style="block" />	
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!--component-->
                    <!--right-->
                    <?php if ($this->countModules('right')) : ?>
                        <div id="sidebar-2" class="col-sm-<?php echo $rightcolgrid; ?>">
                            <jdoc:include type="modules" name="right" style="xhtml" />
                        </div>
                    <?php endif; ?>
                    <!--right-->
                </div>
            </div>
            <!--content-->
            <!-- bottom -->
            <?php if ($this->countModules('bottom')) : ?>
                <div id="bottom">
                    <div class="container">
                        <div class="row">
                            <jdoc:include type="modules" name="bottom" style="custom" />
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div id="push"></div>
            <!-- bottom -->

            <!-- footer -->
            <?php if ($this->countModules('footer')) : ?>
                <div id="footer">
                    <div class="container">
                        <jdoc:include type="modules" name="footer" style="custom" />
                    </div>
                </div>
            <?php endif; ?>
            <!-- footer -->
        </div>

        <jdoc:include type="modules" name="debug" />        
        <!-- page -->        
        <!-- JS -->
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
        <!-- JS -->
    </body>
</html>
