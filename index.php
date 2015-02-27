<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Blue360</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png"> -->
  </head><!--/head-->

  <body>

    <!--.preloader-->
    <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
    <!--/.preloader-->

    <header id="home">
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/skippr/home_030.jpg)">
                    <div class="caption" id="caption-video">
                        <p class="animated fadeInRightBig">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/TYgkCZMptaw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen id="home-video"></iframe>
                        </p>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
                    </div>
                </div>
                <div class="item" style="background-image: url(img/skippr/home_010.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig color-blue">ESTRATEGIA <span class="color-blue2">OCÉANO AZUL</span></h1>
                        <p class="animated fadeInRightBig">OCÉANO AZUL CREA NUEVOS ESPACIOS E INEXISTENCIAS DE<br>COMPETIDORES,DIFERENCIA Y LIDERA UN MERCADO LLENO DE OPORTUNIDADES</p>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="#about-us">NOSOTROS</a>
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
                                        <a href="http://www.dailymotion.com/blue360peru" target="_blank">
                                            <img src="img/daily_motion.png" alt="Logo daily Motion">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </div>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="#contact">CONTACTO</a>
                    </div>
                </div>
            </div>
            <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
            <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
        </div><!--/#home-slider-->
        <div class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
              <h1><img class="img-responsive" src="img/logo.png" alt="logo"></h1>
            </a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="scroll active"><a href="#home">Home</a></li>
              <li class="scroll"><a href="#services">Productos</a></li> 
              <li class="scroll"><a href="#about-us">Nosotros</a></li>
              <li class="scroll"><a href="#portfolio">Portafolio</a></li>
              <li class="scroll"><a href="#team">Equipo</a></li>
              <li class="scroll"><a href="#contact">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div><!--/.navbar-->
    </header><!--/#home-->
    
    <section id="services">
      <div class="container">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="row">
            <div class="text-center col-sm-8 col-sm-offset-2" style="visibility: hidden">
              <h2>Nuestros Servicios</h2>
            </div>
          </div> 
        </div>
        <div class="text-center our-services">
          <div class="row">
            <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <a href="#id-corp" data-toggle="modal">
                    <!-- <i class="icon" id="id-corporative"></i> -->
                    <div class="center-block">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-desktop fa-stack-1x" style="top: 6px"></i>
                        </span>
                    </div>
                    <span>
                        <span class="title-produts">IDENTIDAD CORPORATIVA</span><br>
                        <small class="hidden-xs">Identidad - Logotipo - Atributos - papeleria</small>
                    </span>
                </a>
            </div>
            <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                <a href="#creacion-web" data-toggle="modal">
                    <div class="center-block">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-wifi fa-stack-1x" style="top: 6px"></i>
                        </span>
                    </div>
                    <span>
                        <span class="title-produts">CREACIÓN WEB</span><br>
                        <small class="hidden-xs">Diseño web - Programación web</small>
                    </span>
                </a>
            </div>
            <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                <a href="#marketing-digital" data-toggle="modal">
                    <div class="center-block">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-support fa-stack-1x"></i>
                        </span>
                    </div>
                    <span>
                        <span class="title-produts">MARKETING DIGITAL</span><br>
                        <small class="hidden-xs">Redes sociales - Estrategias - Posicionamiento web</small>
                    </span>
                </a>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
                <a href="#marketing-audiovisual" data-toggle="modal">
                    <div class="center-block">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-video-camera fa-stack-1x"></i>
                        </span>
                    </div>
                    <span>
                        <span class="title-produts">MARKETING AUDIOVISUAL</span><br>
                        <small class="hidden-xs">Videos corporativos - Institucionales - Tutoriales</small>
                    </span>
                </a>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
                <a href="#marketing-promo" data-toggle="modal">
                    <div class="center-block">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-bar-chart fa-stack-1x"></i>
                        </span>
                    </div>
                    <span>
                        <span class="title-produts">MARKETING PROMOCIONAL</span><br>
                        <small class="hidden-xs">Actividades promocionales - Activaciones - Btl</small>
                    </span>
                </a>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
                <a href="#gestion-legal" data-toggle="modal">
                    <div class="center-block">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-legal fa-stack-1x"></i>
                        </span>
                    </div>
                    <span>
                        <span class="title-produts">GESTION LEGAL MKT & MEDIOS</span><br>
                        <small class="hidden-xs">Seguridad legal - marcas - patentes</small>
                    </span>
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="meters" class="parallax">
        <div class="container">
            <h2 class="text-center">Experiencia</h2>
            <div class="r1 row text-center" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="col-sm-1"></div>
                <div class="c1 col-sm-6 col-md-2 animateblock size speed-1 wow fadeInUp">
                    <p class="description">IDENTIDAD</p>
                    <div class="animateblock circle wow fadeInUp" id="circle-1"></div>
                </div>
                <div class="c2 col-sm-6 col-md-2 animateblock size speed-1 wow fadeInUp">
                    <p class="description">WEBSITE</p>
                    <div class="animateblock circle wow fadeInUp" id="circle-2"></div>
                </div>
                <div class="c3 col-sm-6 col-md-2 animateblock size speed-1 wow fadeInUp">
                    <p class="description">MKT DIGITAL</p>
                    <div class="animateblock circle wow fadeInUp" id="circle-3"></div>
                </div>
                <div class="c4 col-sm-6 col-md-2 animateblock size speed-1 wow fadeInUp">
                    <p class="description">MKT PROMOCIONAL</p>
                    <div class="animateblock circle wow fadeInUp" id="circle-4"></div>
                </div>
                <div class="c4 col-sm-6 col-md-2 animateblock size speed-1 wow fadeInUp">
                    <p class="description">MKT AUDIOVISUAL</p>
                    <div class="animateblock circle wow fadeInUp" id="circle-5"></div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </section>

    <section id="about-us">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/about-bg.jpg" alt="...">
                    <div class="carousel-caption color-blue" id="banner_1">
                        <h2 class="color-blue2 text-left">CREAR + INNOVAR = BLUE360</h2>
                        <p class="text-justify">Blue360 tuvo inicio a finales del año 2014, cuando un grupo de jóvenes profesionales se  unieron para desarrollar productos acorde a la necesidad de futuros clientes con el fin de lograr valor y beneficios de sus marcas.</p>
                        <p class="text-justify">Asimismo la creación de dichos productos debía abrir la barrera de lo intangible a lo tangible a través de nuestra estrategia Océano azul que se basa en desintoxicar a la empresa que se encuentra sumergida en conceptos tradicionales.</p>
                        <p class="text-justify">Por ello Blue360 se encuentra abocada a generar nuevas estrategias que brindarán a nuestros futuros clientes una gama de posibilidades para crecer y desarrollarse en un mundo de competencia constante y cambiante.</p>
                        <p class="text-justify">
                            <i>“La filosofía de Blue 360 es sacar lo mejor de ti o tu empresa, cuando aún no te has dado cuenta de lo poderoso que eres”</i>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/about-bg2.jpg" alt="">
                    <div class="carousel-caption color-blue" id="banner_2">
                        <div class="col-sm-4">
                            En Blue 360 entendemos que, en el mercado existe una constante lucha por ser el mejor; sin embargo nuestro objetivo es seguir la estrategia del Océano Azul que se basa en crear nuevos espacios y 
                        </div>
                        <div class="col-sm-4">
                            entender que la competencia es irrelevante e inexistente para llegar a nuestras metas. Sabemos lo importante que es diferenciarse de los demás y conseguir economías de gran escala. En 
                        </div>
                        <div class="col-sm-4">
                            conclusión, a través del Océano Azul nos encargaremos de encontrar nuevos mercados, crear nuevas demandas, y dejar de competir con otros con la finalidad de diferenciarnos y liderar un mercado.
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
        <!-- <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-6">
                    <div class="about-info wow fadeInUp color-blue" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h2>&nbsp;</h2>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="heading_min text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>PORTAFOLIO</h2>
          </div>
        </div> 
      </div>
      <div class="container-fluid">
        <div class="row">
            <div class="hidden-xs col-sm-4"></div>
            <div class="col-sm-4">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="img/portafolio/ARA_LOGO.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3>Ara Ingenieros</h3>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-link">
                                        <a class="folio-read-more" href="#" data-single_url="portafolios_html/ara_content.html" ><i class="fa fa-link"></i></a>
                                    </span>
                                    <span class="folio-expand">
                                        <a href="#modal-ara" data-toggle="modal">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden-xs col-sm-4"></div>
          <!-- <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
                  <div class="folio-image">
                    <img class="img-responsive" src="images/portfolio/2.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="overlay-content">
                      <div class="overlay-text">
                        <div class="folio-info">
                          <h3>Time Hours</h3>
                          <p>Design, Photography</p>
                        </div>
                        <div class="folio-overview">
                          <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                          <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                  <div class="folio-image">
                    <img class="img-responsive" src="images/portfolio/3.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="overlay-content">
                      <div class="overlay-text">
                        <div class="folio-info">
                          <h3>Time Hours</h3>
                          <p>Design, Photography</p>
                        </div>
                        <div class="folio-overview">
                          <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                          <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
                  <div class="folio-image">
                    <img class="img-responsive" src="images/portfolio/4.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="overlay-content">
                      <div class="overlay-text">
                        <div class="folio-info">
                          <h3>Time Hours</h3>
                          <p>Design, Photography</p>
                        </div>
                        <div class="folio-overview">
                          <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                          <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                  <div class="folio-image">
                    <img class="img-responsive" src="images/portfolio/5.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="overlay-content">
                      <div class="overlay-text">
                        <div class="folio-info">
                          <h3>Time Hours</h3>
                          <p>Design, Photography</p>
                        </div>
                        <div class="folio-overview">
                          <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                          <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
                  <div class="folio-image">
                    <img class="img-responsive" src="images/portfolio/6.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="overlay-content">
                      <div class="overlay-text">
                        <div class="folio-info">
                          <h3>Time Hours</h3>
                          <p>Design, Photography</p>
                        </div>
                        <div class="folio-overview">
                          <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                          <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
                  <div class="folio-image">
                    <img class="img-responsive" src="images/portfolio/7.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="overlay-content">
                      <div class="overlay-text">
                        <div class="folio-info">
                          <h3>Time Hours</h3>
                          <p>Design, Photography</p>
                        </div>
                        <div class="folio-overview">
                          <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                          <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
                  <div class="folio-image">
                    <img class="img-responsive" src="images/portfolio/8.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="overlay-content">
                      <div class="overlay-text">
                        <div class="folio-info">
                          <h3>Time Hours</h3>
                          <p>Design, Photography</p>
                        </div>
                        <div class="folio-overview">
                          <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                          <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div> -->
        </div>
      </div>
      <div id="portfolio-single-wrap">
        <div id="portfolio-single">
        </div>
      </div>
    </section>

    <section id="features" class="parallax">
        <div class="container">
            <div class="row count">
                <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <i class="fa fa-user"></i>
                    <h3 class="timer">4000</h3>
                    <p>Happy Clients</p>
                </div>
                <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <i class="fa fa-desktop"></i>
                    <h3 class="timer">200</h3>
                    <p>Modern Websites</p>
                </div> 
                <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <i class="fa fa-trophy"></i>
                    <h3 class="timer">10</h3>
                    <p>WINNING AWARDS</p>
                </div> 
                <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <i class="fa fa-comment-o"></i>
                    <h3>24/7</h3>
                    <p>Fast Support</p>
                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                    <h2>NUESTRO EQUIPO</h2>
                </div>
            </div>
            <div class="team-members">
                <div class="row">
                    <div class="text-center team-content">
                        <div class="boxgrid captionfull">
                            <img src="img/team/team-david.jpg"/>
                            <div class="cover boxcaption">
                                <h4>David Varas</h4>
                                <p>General Manager</p>
                                <div class="social-icons text-center">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
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
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
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
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="pricing">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
            <h2>Pricing Table</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div>
        <div class="pricing-table">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h3>Basic</h3>
                <div class="price">
                  $9<span>/Month</span>                          
                </div>
                <ul>
                  <li>Free Setup</li>
                  <li>10GB Storage</li>
                  <li>100GB Bandwith</li>
                  <li>5 Products</li>
                </ul>
                <a href="#" class="btn btn-lg btn-primary">Sign up</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h3>Standard</h3>
                <div class="price">
                  $19<span>/Month</span>                                
                </div>
                <ul>
                  <li>Free Setup</li>
                  <li>10GB Storage</li>
                  <li>100GB Bandwith</li>
                  <li>5 Products</li>
                </ul>
                <a href="#" class="btn btn-lg btn-primary">Sign up</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
                <h3>Featured</h3>
                <div class="price">
                  $29<span>/Month</span>                                
                </div>
                <ul>
                  <li>Free Setup</li>
                  <li>10GB Storage</li>
                  <li>100GB Bandwith</li>
                  <li>5 Products</li>
                </ul>
                <a href="#" class="btn btn-lg btn-primary">Sign up</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
                <h3>Professional</h3>
                <div class="price">
                  $49<span>/Month</span>                    
                </div>
                <ul>
                  <li>Free Setup</li>
                  <li>10GB Storage</li>
                  <li>100GB Bandwith</li>
                  <li>5 Products</li>
                </ul>
                <a href="#" class="btn btn-lg btn-primary">Sign up</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section id="twitter" class="parallax">
      <div>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="twitter-icon text-center">
                <i class="fa fa-twitter"></i>
                <h4>Themeum</h4>
              </div>
              <div id="twitter-carousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                  <li data-target="#twitter-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#twitter-carousel" data-slide-to="1"></li>
                  <li data-target="#twitter-carousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                  <div class="item active">
                    <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                  </div>
                  <div class="item">
                    <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                  </div>
                  <div class="item">                                
                    <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                  </div>
                </div>                        
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section id="contact">
      <div id="google-map" style="height:350px" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
      <div id="contact-us" class="parallax">
        <div class="container">
          <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h2>CONTACTENOS</h2>
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
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Teléfono" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Escriba su mensaje..." required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="col-sm-6">
                    <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                      <ul class="address">
                        <li><i class="fa fa-map-marker"></i> <span> Address:</span> 2400 South Avenue A </li>
                        <li><i class="fa fa-phone"></i> <span> Phone:</span> +928 336 2000  </li>
                        <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:someone@yoursite.com"> support@oxygen.com</a></li>
                        <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.sitename.com</a></li>
                      </ul>
                    </div>
                </div> -->
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
                    <a href="index.html"><img class="img-responsive" src="img/logo.png" alt="Logo Blue360"></a>
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
                                        <a href="http://www.dailymotion.com/blue360peru" target="_blank">
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
                        <p class="pull-right">Designed by <a href="http://www.themeum.com/">Themeum</a></p>
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
                    <h4 class="modal-title" id="idCorp">IDENTIDAD CORPORATIVA</h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="540" height="300" src="https://www.youtube.com/embed/iLUnFVHwbsA?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="row mt20">
                        <div class="col-sm-6">
                            <p class="text-justify">La identidad corporativa muestra a tu empresa, persona o producto, a través del medio escrito y diseño de forma especial, además tiene como objetivo explicar y precisar los atributos de tu empresa o producto, con el único fin de garantizar el buen uso de esta</p>
                        </div>
                        <div class="col-sm-6">
                            <img src="img/servicios/identidad_corporativa.jpg" alt="Identidad corporativa" class="img-modal-serv img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center" id="marketing-digital" tabindex="-1" role="dialog" aria-labelledby="marketingDigital" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="etingDigital">MARKETING DIGITAL</h4>
              </div>
              <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/l31Qcz7WcaQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="row mt20">
                    <div class="col-sm-6 text-justify">
                        <p>Producto dirigido a todo tipo de empresas gracias a que se logra llegar al público que usted desea, el mensaje se difunde de  manera acelerada y podrá seguir y analizar en tiempo real la campaña que se realiza.</p>
                        <p>Con el marketing digital se desea  promover y posicionar negocios de todo tamaño, teniendo como objetivo fidelizar a los clientes y así facilitar la venta de productos y/o servicios.</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="img/servicios/marketing_digital_Imagen.jpg" alt="Planeta tierra" class="img-modal-serv img-responsive">
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
                    <h4 class="modal-title" id="creacionWeb">CREACIÓN WEB</h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/55dCCmcQtI8?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="row mt20">
                        <div class="col-sm-6">
                            <p class="text-justify">De todos los medios de comunicación, internet ha superado a todas y cambio la forma de hacer negocios en todo el mundo. Si usted tiene un sitio web, tiene un local trabajando para usted las 24 horas del día y esto generará alcance mundial, competir con los más grandes y una imagen profesional.</p>
                        </div>
                        <div class="col-sm-6">
                            <img src="img/servicios/creacion_web.jpg" alt="Imac, pantalla y diseño" class="img-modal-serv img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center" id="marketing-audiovisual" tabindex="-1" role="dialog" aria-labelledby="marketingAudiovisual" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="marketingAudiovisual">MARKETING AUDIOVISUAL</h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/FqsGsnhycNo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="row mt20">
                        <div class="col-sm-6">
                            <p class="text-justify">Una de las últimas tendencias que se está valorando con mayor fuerza  gracias a su rápido resultado son los formatos en video que se caracterizan por generar mayor difusión, impacto y reconocimiento masivo con el fin de posicionarse e impulsar las ventas, y es que el contenido audiovisual  genera actitud positiva hacia la marca, disfrute de la información y mayor notoriedad debido al crecimiento del consumo de videos online.</p>
                        </div>
                        <div class="col-sm-6">
                            <img src="img/servicios/markt.jpg" alt="Imac, pantalla y diseño" class="img-modal-serv img-responsive">
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
                    <h4 class="modal-title" id="marketingPromo">MARKETING PROMOCIONAL</h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/0aU4IOwB_B0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="row mt20">
                        <div class="col-sm-6">
                            <p class="text-justify">A través de la introducción de nuevos productos, crear barreras con la competencia y obtener resultados a corto plazo, es que nace el marketing promocional, una estrategia que cautiva a los clientes y atrae a los no clientes, a través de actividades promocionales, activaciones y BTL.</p>
                        </div>
                        <div class="col-sm-6">
                            <img src="img/servicios/marketing-promo.jpg" alt="Imac, pantalla y diseño" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-ara" tabindex="-1" role="dialog" aria-labelledby="modalAra" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="modalAra">ARA INGENIEROS</h4>
                </div>
                <div class="modal-body">
                    <img src="http://blue360.com.pe/ara/img/proyectos/Proyecto_1.jpg" alt="Proyecto Ara" class="img-responsive">
                </div>
            </div>
        </div>
    </div>

    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/lib/jquery.inview.min.js"></script>
    <script src="js/lib/wow.min.js"></script>
    <script src="js/lib/mousescroll.js"></script>
    <script src="js/lib/smoothscroll.js"></script>
    <script src="js/lib/jquery.countTo.js"></script>
    <script src="js/lib/jquery.BlackAndWhite.min.js"></script>
    <script src="js/lib/circles.min.js"></script>
    <script src="js/dev/main.js"></script>

  </body>
</html>