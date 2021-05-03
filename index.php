<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap-responsive.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/navigation.css" type="text/css" />

    <?php JHtml::_('bootstrap.framework'); ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
                <a href="<?php echo $this->baseurl; ?>">
                    <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo_kac.png" alt="KAC logo" class="main-logo" />
                </a>
            </div>
            <div class="span9">

                <div class="span6 offset6">
                <jdoc:include type="modules" name="top" /> 
                </div>

            </div>
            <div class="span9 offset3">

                <div class="navbar navbar-static-top pull-right">
                    <div class="navbar-inner">
                        <jdoc:include type="modules" name="navigation" />
                    </div>
                </div>


                </div>
        </div>
        <div class="row">
            <jdoc:include type="modules" name="header" />
        </div>
    </div>
    <div class="container-fluid">
        <div class="row my-5 mx-2">
            <jdoc:include type="modules" name="breadcrumb" /> 
        </div>
        <div class="container">
            <div class="row my-5 mx-2">
                <jdoc:include type="component" />
            </div>
        </div>
    </div>
    <footer class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="span6 offset6">
                    <jdoc:include type="modules" name="bottom-right" />
                </div>
            </div>
            <div class="row no-space">
                <div class="span6">
                    <jdoc:include type="modules" name="subbottom-left" />
                </div>
                <div class="span6">
                    <jdoc:include type="modules" name="subbottom-right" />
                </div>
            </div>

            <div class="row">
                <div class="span12 copyrights">
                    <jdoc:include type="modules" name="bottom" />
                </div>
            </div>
        </div>
    </footer>
</body>

</html>