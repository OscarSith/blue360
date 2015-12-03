<?php
$arr = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
$arr[0] = substr($arr[0], 0, 2);
include 'languaje.php';

if (isset($_GET['lang']) && ($_GET['lang'] == 'es' || $_GET['lang'] == 'en')) {
    $arr[0] = $_GET['lang'];

    setcookie('lang', $arr[0], strtotime( '+30 days' ));
    header('location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

if (isset($_COOKIE['lang'])) {
    $arr[0] = $_COOKIE['lang'];
}
$text = $lang[ $arr[0] ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Blue360">
  <title>Blue360</title>
    <link href="css/main.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
  </head>

  <body>
    <div id="preloader" class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
    <header id="home">
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/skippr/home_030.jpg)" id="home-video">
                    <div class="caption" id="caption-video">
                        <div class="animated fadeInRightBig">
                            <div style="height:221px" class="visible-xs"></div>
                            <div class="row hidden-xs">
                                <div class="col-sm-5 col-sm-offset-1">
                                    <div class="embed-responsive embed-responsive-16by9" style="margin-top: 90px">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/TYgkCZMptaw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen id="home-video"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a data-scroll class="btn btn-start btn-primary animated fadeInUpBig" style="margin-top: 150px" href="#services">Start now</a>
                    </div>
                </div>
                <div class="item" style="background-image: url(img/skippr/home_040.jpg)">
                    <div class="caption">
                        <a data-scroll class="btn btn-start btn-primary animated fadeInUpBig" href="#services" style="margin-top: -90px"><?php echo $text['products'] ?></a>
                        <h1 class="animated fadeInLeftBig" style="margin-top: 382px"><span class="color-products"><?php echo $text['ours'] ?> <?php echo $text['products'] ?></span></h1>
                    </div>
                </div>
                <div class="item" style="background-image: url(img/skippr/home_010.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig color-blue"><?php echo $text['strategy'] ?> <span class="color-blue2"><?php echo $text['blue_ocean'] ?></span></h1>
                        <p class="animated fadeInRightBig color-blue" style="font-weight: 500">OCÉANO AZUL CREA NUEVOS ESPACIOS E INEXISTENCIAS DE<br>COMPETIDORES,DIFERENCIA Y LIDERA UN MERCADO LLENO DE OPORTUNIDADES</p>
                        <a class="btn btn-start btn-primary animated fadeInUpBig" href="#services" id="nav-about-us"><?php echo $text['us'] ?></a>
                    </div>
                </div>
                <div class="item" style="background-image: url(img/skippr/home_020.jpg)">
                    <div class="caption">
                        <div class="animated fadeInRightBig">
                            <div class="row">
                            <div class="col-sm-6" id="social-left">
                                <ul class="list-inline social-buttons">
                                    <li>
                                        <a href="https://www.facebook.com/pages/Blue-360/824952017567637" target="_blank" id="fb"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/blue360peru" target="_blank" id="tw"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/profile/view?id=388517954&amp;trk=nav_responsive_tab_profile" target="_blank" id="in"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCQ0l1VibZWhjmk9B83MWxtg" target="_blank" id="yt"><i class="fa fa-youtube-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6" id="social-right">
                                <ul class="list-inline social-buttons">
                                    <li>
                                        <a href="https://plus.google.com/u/0/103514686876234909711/posts" target="_blank" id="gp"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="http://instagram.com/blue360peru/" target="_blank" id="ins"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://vimeo.com/blue360peru" target="_blank" id="vim"><i class="fa fa-vimeo-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="http://www.dailymotion.com/blue360peru" target="_blank" class="dym">
                                            <img src="img/daily_motion.png" alt="Logo daily Motion">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </div>
                        <a data-scroll class="btn btn-start btn-primary animated fadeInUpBig" href="#contact"><?php echo strtoupper($text['contact']) ?></a>
                    </div>
                </div>
            </div>
            <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
            <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
        </div>
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#home">
                      <h1><img class="img-responsive" src="img/logo.png" alt="logo" id="logo"></h1>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                      <li class="scroll active"><a href="#home"><?php echo $text['home'] ?></a></li>
                      <li class="scroll"><a href="#services"><?php echo $text['products'] ?></a></li>
                      <li class="scroll"><a href="#about-us"><?php echo $text['us'] ?></a></li>
                      <li class="scroll"><a href="#portfolio"><?php echo $text['portfolio'] ?></a></li>
                      <li class="scroll"><a href="#team"><?php echo $text['team'] ?></a></li>
                      <li class="scroll"><a href="#contact"><?php echo $text['contact'] ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="row">
                <div class="text-center col-sm-8 col-sm-offset-2" style="visibility: hidden">
                  <h2><?php echo $text['our_services'] ?></h2>
                </div>
              </div>
            </div>
            <div class="text-center our-services">
              <div class="row">
                <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <a href="#id-corp" data-toggle="modal">
                        <div class="center-block">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                <i class="fa fa-desktop fa-stack-1x" style="top: 6px"></i>
                            </span>
                        </div>
                        <span>
                            <span class="title-produts"><?php echo $text['identity'] ?></span><br>
                            <small class="hidden-xs">Identidad - Logotipo - Atributos - papeleria</small>
                        </span>
                    </a>
                </div>
                <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                    <a href="#creacion-web" data-toggle="modal">
                        <div class="center-block">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                <i class="fa fa-wifi fa-stack-1x" style="top: 6px"></i>
                            </span>
                        </div>
                        <span>
                            <span class="title-produts"><?php echo $text['web'] ?></span><br>
                            <small class="hidden-xs">Diseño web - Programación web</small>
                        </span>
                    </a>
                </div>
                <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                    <a href="#marketing-digital" data-toggle="modal">
                        <div class="center-block">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                <i class="fa fa-support fa-stack-1x"></i>
                            </span>
                        </div>
                        <span>
                            <span class="title-produts"><?php echo $text['d_marketing'] ?></span><br>
                            <small class="hidden-xs">Redes sociales - Estrategias - Posicionamiento web</small>
                        </span>
                    </a>
                </div>
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
                    <a href="#marketing-audiovisual" data-toggle="modal">
                        <div class="center-block">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                <i class="fa fa-video-camera fa-stack-1x"></i>
                            </span>
                        </div>
                        <span>
                            <span class="title-produts"><?php echo $text['m_audiovisual'] ?></span><br>
                            <small class="hidden-xs">Videos corporativos - Institucionales - Tutoriales</small>
                        </span>
                    </a>
                </div>
                <div class="col-sm-3 col-sm-offset-1 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
                    <a href="#marketing-promo" data-toggle="modal">
                        <div class="center-block">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                <i class="fa fa-bar-chart fa-stack-1x"></i>
                            </span>
                        </div>
                        <span>
                            <span class="title-produts"><?php echo $text['promotional'] ?></span><br>
                            <small class="hidden-xs">Actividades promocionales - Activaciones - Btl</small>
                        </span>
                    </a>
                </div>
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
                    <a href="#gestion-legal" data-toggle="modal">
                        <div class="center-block">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                <i class="fa fa-legal fa-stack-1x"></i>
                            </span>
                        </div>
                        <span>
                            <span class="title-produts">Gestion Legal Mkt &amp; Medios</span><br>
                            <small class="hidden-xs">Seguridad legal - marcas - patentes</small>
                        </span>
                    </a>
                </div>
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
                    <a href="#artes-graficas" data-toggle="modal">
                        <div class="center-block">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                <img id="artes_graficas_icon" src="img/servicios/Artes_Graficas_logo.png">
                            </span>
                        </div>
                        <span>
                            <span class="title-produts">Artes Gráficas</span><br>
                            <small class="hidden-xs">Agendas - revistas - calendarios -  bolsas - cuadernos</small>
                        </span>
                    </a>
                </div>
              </div>
            </div>
        </div>
    </section>

    <section id="about-us">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/about-bg.jpg)" id="us-01">
                    <div id="banner_1">
                        <div class="col-xs-12 col-sm-offset-5 col-md-offset-6 col-sm-6 col-md-5"><?php echo $text['us_info'] ?></div>
                    </div>
                </div>
                <div class="item" style="background-image: url(img/about-bg2.jpg)">
                    <div class="carousel-caption" id="home-2">
                        <div class="col-sm-12 text-left">
                            <?php echo $text['us_info2_01'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="heading_min text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2><?php echo strtoupper($text['portfolio']) ?></h2>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2" id="content-portfolio">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div>
                                <img class="img-responsive center-block mt50" src="img/portafolio/l-oreal-paris.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div>
                                <img class="img-responsive center-block" src="img/portafolio/los_tallanes.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div>
                                <img class="img-responsive center-block" src="img/portafolio/PricewaterhouseCoopers_Logo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                            <div>
                                <img class="img-responsive center-block mt50" src="img/portafolio/westin.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                            <div>
                                <img class="img-responsive center-block" src="img/portafolio/Alianza_Lima.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                            <div>
                                <img class="img-responsive center-block mt50" src="img/portafolio/Cara_Logo-Recuperado.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="1100ms">
                            <div>
                                <img class="img-responsive center-block" src="img/portafolio/ara.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="1100ms">
                            <div>
                                <img class="img-responsive center-block" src="img/portafolio/vina.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="1100ms">
                            <div>
                                <img class="img-responsive center-block" src="img/portafolio/challenger.png" alt="" style="margin-top: 26px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section id="features" class="parallax">
        <div class="container">
            <div class="row count">
                <div class="col-sm-4 col-xs-4 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <i class="fa fa-user"></i>
                    <h3 class="timer">5</h3>
                    <p><?php echo $text['features_1'] ?></p>
                </div>
                <div class="col-sm-4 col-xs-4 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <i class="fa fa-desktop"></i>
                    <h3 class="timer">5</h3>
                    <p><?php echo $text['features_2'] ?></p>
                </div>
                <div class="col-sm-4 col-xs-4 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <i class="fa fa-comment"></i>
                    <h3>8/5</h3>
                    <p><?php echo $text['features_3'] ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="pb0" style="padding-top: 100px">
        <div class="container">
            <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                    <h2><?php echo $text['our_team'] ?></h2>
                </div>
            </div>
            <div class="team-members">
                <div class="row">
                    <div class="text-center team-content">
                        <div class="boxgrid captionfull" data-toggle="popover" data-content="And here's some amazing content. It's very engaging. Right?">
                            <img src="img/team/team-david.jpg"/>
                            <div class="cover boxcaption">
                                <h4>David Varas</h4>
                                <p>General Manager</p>
                                <div class="social-icons text-center">
                                    <ul>
                                        <!-- <li><a class="facebook" target="_blank" href="https://www.facebook.com/davidvarasalvarez"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" target="_blank" href="https://twitter.com/davidvaras84"><i class="fa fa-twitter"></i></a></li> -->
                                        <li><a class="linkedin" target="_blank" href="http://pe.linkedin.com/pub/david-varas/82/805/223"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="boxgrid captionfull">
                            <img src="img/team/team-fernando.jpg"/>
                            <div class="cover boxcaption">
                                <h4>Fernando Suarez</h4>
                                <p>Comunication Manager</p>
                                <div class="social-icons text-center">
                                    <ul>
                                        <li><a class="linkedin" target="_blank" href="http://pe.linkedin.com/pub/fernando-su%C3%A1rez-del-aguila/37/76a/629"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="boxgrid captionfull">
                            <img src="img/team/team-sebastian.jpg"/>
                            <div class="cover boxcaption">
                                <h4>Sebastián Santos</h4>
                                <p>Senior Designer</p>
                                <div class="social-icons text-center">
                                    <ul>
                                        <li><a class="linkedin" target="_blank" href="https://www.linkedin.com/profile/view?id=402967028&trk=nav_responsive_tab_profile"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="boxgrid captionfull">
                            <img src="img/team/team-jonny.jpg"/>
                            <div class="cover boxcaption">
                                <h4>Jhonny Castillo</h4>
                                <p>Chief Accounting Area</p>
                                <div class="social-icons text-center">
                                    <ul>
                                        <li><a class="linkedin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="boxgrid captionfull">
                            <img src="img/team/team-oscar.jpg"/>
                            <div class="cover boxcaption">
                                <h4>Oscar Larriega</h4>
                                <p>Software Engineer</p>
                                <div class="social-icons text-center">
                                    <ul>
                                        <li><a class="linkedin" target="_blank" href="http://pe.linkedin.com/pub/oscar-augusto-larriega-grandez/64/9ba/859"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="boxgrid captionfull">
                            <img src="img/team/team-pedrito.jpg"/>
                            <div class="cover boxcaption">
                                <h4>Pedro Suarez</h4>
                                <p>Community Manager</p>
                                <div class="social-icons text-center">
                                    <ul>
                                        <li><a class="linkedin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="twitter" class="parallax">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="twitter-icon text-center">
                        <i class="fa fa-twitter"></i>
                        <h4>#blue360peru</h4>
                    </div>
                    <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        </ol>
                        <div class="carousel-inner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
      <div id="google-map" style="height:350px" class="wow fadeIn" data-latitude="-12.072827" data-longitude="-77.051158" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
      <div id="contact-us" class="parallax">
        <div class="container">
          <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h2><?php echo $text['contact_us'] ?></h2>
            </div>
          </div>
          <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-sm-3 hidden-xs"></div>
                <div class="col-sm-6">
                    <form id="main-contact-form" name="contact-form" method="post" action="send.php">
                        <div class="row wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="<?php echo $text['name'] ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="<?php echo $text['phone'] ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="<?php echo $text['mail'] ?>" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="<?php echo $text['message'] ?>" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-start btn-primary btn-lg btn-block"><?php echo $text['send'] ?></button>
                        </div>
                    </form>
                </div>
                <div class="hidden">
                    <div class="contact-info wow fadeInUp">
                      <ul class="address">
                        <li><i class="fa fa-map-marker"></i> <span> Address:</span> Pje Ayulo - ref: Cdra 1 de Republica Dominicana</li>
                        <li><i class="fa fa-phone"></i> <span> Phone:</span> 966 840 025</li>
                        <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:blue360peru@gmail.com"> blue360peru@gmail.com</a></li>
                      </ul>
                    </div>
                </div>
                <div class="col-sm-3 hidden-xs"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
        <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="container text-center">
                <div class="footer-logo">
                    <a href="#home"><img class="img-responsive" src="img/logo.png" alt="Logo Blue360" style="width:140px"></a>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6" id="social-left">
                                <ul class="list-inline social-buttons">
                                    <li>
                                        <a href="https://www.facebook.com/pages/Blue-360/824952017567637" target="_blank" id="fb"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/blue360peru" target="_blank" id="tw"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/profile/view?id=388517954&amp;trk=nav_responsive_tab_profile" target="_blank" id="in"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCQ0l1VibZWhjmk9B83MWxtg" target="_blank" id="yt"><i class="fa fa-youtube-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6" id="social-right">
                                <ul class="list-inline social-buttons">
                                    <li>
                                        <a href="https://plus.google.com/u/0/103514686876234909711/posts" target="_blank" id="gp"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="http://instagram.com/blue360peru/" target="_blank" id="ins"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://vimeo.com/blue360peru" target="_blank" id="vim"><i class="fa fa-vimeo-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="http://www.dailymotion.com/blue360peru" target="_blank" class="dym">
                                            <img src="img/daily_motion.png" alt="Logo daily Motion">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p><span class="copyright">COPYRIGHT &copy; <?php echo date('Y') ?></span></p>
                    </div>
                    <div class="col-sm-6">
                        <p class="pull-right">SIEMPRE A TU ALREDEDOR</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade text-center" id="id-corp" tabindex="-1" role="dialog" aria-labelledby="idCorp" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="idCorp"><?php echo strtoupper($text['identity']) ?></h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9" data-yt="https://www.youtube.com/embed/iLUnFVHwbsA?rel=0&amp;controls=0&amp;showinfo=0">
                        <iframe width="540" height="300" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="row mt20">
                        <div class="col-sm-12">
                            <p class="text-justify"><?php echo $text['identity_info'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center" id="marketing-digital" tabindex="-1" role="dialog" aria-labelledby="marketingDigital" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="etingDigital"><?php echo strtoupper($text['d_marketing']) ?></h4>
              </div>
              <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9" data-yt="https://www.youtube.com/embed/l31Qcz7WcaQ?rel=0&amp;controls=0&amp;showinfo=0">
                </div>
                <div class="row mt20">
                    <div class="col-sm-12 text-justify">
                        <p><?php echo $text['d_marketing_info'] ?></p>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center" id="creacion-web" tabindex="-1" role="dialog" aria-labelledby="creacionWeb" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="creacionWeb"><?php echo strtoupper($text['web']) ?></h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9" data-yt="https://www.youtube.com/embed/55dCCmcQtI8?rel=0&amp;controls=0&amp;showinfo=0">
                    </div>
                    <div class="row mt20">
                        <div class="col-sm-12">
                            <p class="text-justify"><?php echo $text['web_info'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center" id="marketing-audiovisual" tabindex="-1" role="dialog" aria-labelledby="marketingAudiovisual" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="marketingAudiovisual"><?php echo strtoupper($text['m_audiovisual']) ?></h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9" data-yt="https://www.youtube.com/embed/FqsGsnhycNo?rel=0&amp;controls=0&amp;showinfo=0">
                    </div>
                    <div class="row mt20">
                        <div class="col-sm-12">
                            <p class="text-justify"><?php echo $text['m_audiovisual_info'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center" id="marketing-promo" tabindex="-1" role="dialog" aria-labelledby="marketingPromo" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="marketingPromo"><?php echo strtoupper($text['promotional']) ?></h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9" data-yt="https://www.youtube.com/embed/0aU4IOwB_B0?rel=0&amp;controls=0&amp;showinfo=0">
                    </div>
                    <div class="row mt20">
                        <div class="col-sm-12">
                            <p class="text-justify"><?php echo $text['promotional_info'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center" id="gestion-legal" tabindex="-1" role="dialog" aria-labelledby="mktLegal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="mktLegal">GESTIÓN LEGAL DE MARKETING Y MEDIOS</h4>
                </div>
                <div class="modal-body">
                    <img src="img/servicios/marketing_legal_video.jpg" alt="Video gestion Legal" class="img-responsive">
                    <div class="row mt20">
                        <div class="col-sm-12">
                            <p class="text-justify" style="line-height:1.4em">Tenemos en cuenta los factores que existen en el mercado para consolidar las acciones y hacerlas efectivas, tal como el tiempo y el presupuesto disponible.  Por tal motivo se crea el producto de Gestion legal de Mkt & Medios,  que tiene el objetivo de realizar trámites que resuelvan asuntos o se concreten proyectos de nuestros clientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center" id="artes-graficas" tabindex="-1" role="dialog" aria-labelledby="artesGraficas" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="artesGraficas">ARTES GRÁFICAS</h4>
                </div>
                <div class="modal-body">
                    <div id="carousel-artes_graficas" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/servicios/artes_graficas/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/servicios/artes_graficas/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/servicios/artes_graficas/4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/servicios/artes_graficas/5.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/servicios/artes_graficas/6.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/servicios/artes_graficas/7.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/servicios/artes_graficas/8.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/servicios/artes_graficas/1908002_701482843314718_5665897783641948102_n.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/servicios/artes_graficas/11039908_701482836648052_8633214759870355945_n.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/servicios/artes_graficas/11083886_684548688341467_9209111137694478800_n.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/servicios/artes_graficas/tp202plata.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/servicios/artes_graficas/westin002.jpg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-artes_graficas" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-artes_graficas" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="row mt20">
                        <div class="col-sm-12">
                            <p class="text-justify" style="line-height:1.4em">La reproducción de cualquier pieza gráfica con una calidad impecable es una de las características desde el inicio del proyecto hasta la entrega final del mismo. Nuestro propósito es la satisfacción de nuestros clientes y colaborar en la solución de cualquier necesidad que su empresa requiera.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/lib/mousescroll.js"></script>
    <script src="js/lib/smoothscroll.js"></script>
    <script src="js/lib/wow.min.js"></script>
    <script src="js/lib/jquery.inview.min.js"></script>
    <script src="js/lib/jquery.countTo.js"></script>
    <script src="js/lib/jquery.BlackAndWhite.min.js"></script>
    <script src="js/lib/circles.min.js"></script>
    <script src="js/dev/main.js"></script>
  </body>
</html>