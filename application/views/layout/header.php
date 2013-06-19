<!DOCTYPE html>
<base href="<?=base_url();?>"/> 
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8">
    <title>GEEKR &#8211; GAMING - TECH - COMICS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Just another WordPress site" name="description"/>
    <meta content="Builder &#8211; Resonsive Wordpress Theme" name="keywords"/>

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/responsive.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="flexslider/flexslider.css" type="text/css">
     
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/wide_layout.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/css/options.css" rel="stylesheet">
    <link <?php if ($this->uri->segment(1)=='comics'){ echo 'href="assets/css/layouts/dark_blue.css" rel="stylesheet"';} 
          if ($this->uri->segment(1)=='tech'){ echo 'href="assets/css/layouts/cyan.css" rel="stylesheet"';}
          if ($this->uri->segment(1)=='gaming'){ echo 'href="assets/css/layouts/blue.css" rel="stylesheet"';}  
          if ($this->uri->segment(1)=='cine'){ echo 'href="assets/css/layouts/green.css" rel="stylesheet"';}
          if ($this->uri->segment(1)=='animanga'){ echo 'href="assets/css/layouts/pink.css" rel="stylesheet"';}
          if ($this->uri->segment(1)=='random'){ echo 'href="assets/css/layouts/grunge.css" rel="stylesheet"';}
    ?>>
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/nivo/nivo-slider.css" media="screen" rel="stylesheet" type="text/css">
    <link href="assets/css/prettyPhoto.css" media="screen" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C700italic%2C800italic%2C400%2C300%2C600%2C700%2C800&#038;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Cgreek%2Cvietnamese%2Clatin-ext%2Ccyrillic&#038;ver=3.4.2" id="gOpenSans-css" media="all" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

    <!-- Le fav and touch icons -->
    <link href="assets/builder/favicon.ico" rel="shortcut icon">
     
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="assets/css/ie.css"/>
    <![endif]-->
</head>

<body>
    <div class="wide_cont">
          <!--PAGE HEAD-->
        <div class="page_head">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <!--START LOGO IMAGE-->
                        <div class="logo">
                            <a href="index.html">
                            <img alt="Builder &#8211; Resonsive Wordpress Theme" src="assets/images/logo.png"/></a>
                        </div>
                        <!-- END LOGO IMAGE-->
                    </div>
                    <div class="span9">
                        <!-- START MAIN MENU-->
                        <nav>
                        <ul class="menu">
                            <li class="home"<?php if ($this->uri->segment(1)=='home'){ echo 'class="current-menu-item" style="background-color:#EF7D1A;"';} ?> > <a href="home">Home</a></li>
                            <li class="comics"<?php if ($this->uri->segment(1)=='comics'){ echo 'class="current-menu-item" style="background-color:#4F1EC7"';} ?> ><a href="comics">COMICS</a></li>                             
                            <li class="tech"<?php if ($this->uri->segment(1)=='tech'){ echo 'class="current-menu-item" style="background-color:#2997ab"';} ?> ><a href="tech">TECH</a></li>
                            <li class="gaming"<?php if ($this->uri->segment(1)=='gaming'){ echo 'class="current-menu-item"style="background-color:#2d5c88"';} ?> ><a href="gaming">GAMING</a></li>
                            <li class="cine"<?php if ($this->uri->segment(1)=='cine'){ echo 'class="current-menu-item"style="background-color:#719430"';} ?> ><a href="cine">CINE&TV</a></li>
                            <li class="animanga"<?php if ($this->uri->segment(1)=='animanga'){ echo 'class="current-menu-item"style="background-color:#e44884"';} ?> ><a href="animanga">ANIMANGA</a></li>
                            <li class="random"<?php if ($this->uri->segment(1)=='random'){ echo 'class="current-menu-item"style="background-color:#85742e"';} ?> ><a href="random">RANDOM</a></li>
                        </nav>
                        <!-- END MAIN MENU-->
                    </div>
                </div>
            </div>
        </div>

        