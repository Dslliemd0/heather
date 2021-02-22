<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
</head>

<body>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-3">
                <a href="<?php echo $this->baseurl; ?>">
                    <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo_kac.png" alt="KAC logo" class="main-logo img-fluid my-4 shadow-none" />
                </a>
            </div>
            <div class="col-9 d-flex flex-column justify-content-end align-items-end">

                <jdoc:include type="modules" name="top" /> 
            </div>
        </div>
        <div class="row">
            <jdoc:include type="modules" name="header" />
        </div>
    </div>
    <jdoc:include type="component" />
    <jdoc:include type="modules" name="bottom" />
</body>

</html>