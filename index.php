<!DOCTYPE html>
      <html lang="en">
        <!--<![endif]-->
        <head>
          <!-- Basic Page Needs
            ================================================== -->
          <meta charset="utf-8">
          <title>Hospital Zonal</title>
          <!-- Mobile Specific Metas
            ================================================== -->
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <!-- CSS
            ================================================== -->
          <link rel="stylesheet" href="assets/css/skeleton.css">
          <link rel="stylesheet" href="assets/css/style.css">
          <link rel="stylesheet" href="assets/css/estilo_carga.css">
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600" rel='stylesheet' type='text/css'>
          <!--[if lt IE 9]>
          <link rel="stylesheet" type="text/css" media="screen" href="assets/css/sequencejs-theme.sliding-horizontal-parallax-ie.css" />
          <![endif]-->
          <link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" />
          <link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
          <link rel="stylesheet" href="assets/css/carousel.css" type="text/css" media="screen" />
          <!-- JS
            ================================================== -->
          <script type="text/javascript" src="assets/js/jquery-1.7.2.min.js"></script>
          <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
          <script type="text/javascript" src="assets/js/common.js"></script>
          <script type="text/javascript" src="assets/js/sequence.jquery-min.js"></script>
          <script type="text/javascript" src="assets/js/jquery.quicksand.js"></script>
          <script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
          <script type="text/javascript" src="assets/js/jquery.prettyPhoto.js"></script>
          <script type="text/javascript" src="assets/js/jquery.jcarousel.min.js"></script>
          <script type="text/javascript" src="assets/js/jquery.tipsy.js"></script>
          <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <![endif]-->
          <!-- Favicons
            ================================================== -->
        </head>
        <body>
          <div id="contenedor_carga">
            <div id="carga">
            </div>
          </div>
          <div id="wrapper">
          <div class="container1">
          <?php
            include("incluidos/header_top.php")
            ?>
          <!-- Main Navigation -->
          <?php include("incluidos/ind_menu1.php");?>
          
          <!-- Main Navigation::END -->
          <!-- Sequence Slider -->
          <div class="h15 clear"></div>
          <script type="text/javascript">
            $(document).ready(function() {
                var options = {
                    autoPlay: true,
                    autoPlayDelay: 3000,
                    nextButton: true,
                    prevButton: true,
                    preloader: true,
                    animateStartingFrameIn: true,
                    transitionThreshold: 500,
                    fallback: {
                        theme: "slide",
                        speed: 500
                    }
                };
            
                var sequence = $("#sequence").sequence(options).data("sequence");
            
                sequence.afterLoaded = function() {
                    $(".info").css('display', 'block');
                    $("#sequence").hover(
                        function() {
                            $(".prev, .next").stop().animate({
                                opacity: 0.7
                            }, 300);
                        },
                        function() {
                            $(".prev, .next").stop().animate({
                                opacity: 0
                            }, 300);
                        }
                    );
            
                    $(".prev, .next").hover(
                        function() {
                            $(this).stop().animate({
                                opacity: 1
                            }, 200);
                        },
                        function() {
                            $(this).stop().animate({
                                opacity: 0.7
                            }, 200);
                        }
                    );
                }
            })
          </script>
          <div class="row no_bm">
            <div id="slider_holder" class="sixteen columns">
              <div id="sequence">
                <div class="prev"><span></span></div>
                <div class="next"><span></span></div>
                <ul>
                  <!-- Layer 1 -->
                  <li>
                    <div class="info animate-in">
                      <h2>Hospital Zonal</h2>
                      <h3>Bariloche</h3>
                      <p style="color: white">Promovemos servicios de salud de excelencia, centrando nuestro accionar en el individuo y la comunidad, cuidando y respetando sus derechos.</p>
                      <p>
                    </div>
                    <img class="slider_bgr animate-in" src="images/img_hospital/foto_hospi_viejo_1.jpg" />
                  </li>
                  <!-- Layer 2 -->
                  <li>
                    <img class="slider_bgr" src="images/22.jpg" />
                    <div class="info">
                    </div>
                  </li>
                  <!-- Layer 3 -->
                  <li>
                    <div class="info">
                    <h2>CoronaVirus!</h2>
                      <h3>Cuidados y Prevenciones</h3>
                      <p> <a style="color: white" href="https://www.argentina.gob.ar/salud/coronavirus-COVID-19">INFORMATE HACIENDO CLICK ACA!</a></p>
                      <p>
                    </div>
                    <img class="slider_bgr" src="images/img_hospital/coronavirus1.png" />
                  </li>
                  <li>
                    <div class="info">
                      <p>
                    </div>
                    <img class="slider_bgr" src="images/img_hospital/coronavirus2.png" />
                  </li>
                  <li>
                    <div class="info animate-in">
                      <h2>Noticias!</h2>
                      <h3>Control en la Playa</h3>
                      <p style="color: white">En Bariloche, los viernes y sábados de 16 a 20 durante febrero y marzo, agentes sanitarios del Hospital Zonal realizan tareas de promoción y prevención en la playa ubicada al pie del Centro Cívico.</p>
                      <p>
                    </div>
                    <img class="slider_bgr animate-in" src="images/img_hospital/noticia1.jpg" />
                  </li>
                </ul>
              </div>
              <!-- Sequence Slider::END-->
              <!-- Featured Texts Section -->
              <div id="informacion_paciente" class="row section_featured_texts">
                <img style="max-width: 990px;width: 100%;
                  height: auto;" src="images/img_hospital/imagen_urgencias.png" alt="">
              </div>
              <!-- Featured Texts Section::END -->
              <div class="row">
                <div class="eight columns">
                  <div class="row">
                    <!-- Featured Services Section -->
                    <div class="clear"></div>
                    <div class="row">
                      <div class="section_featured_services">
                        <div class='carousel_arrows_bgr'></div>
                        <style>
                          .contenedor {
                          display: -webkit-flex;
                          display: flex;
                          -webkit-flex-flow: row wrap;
                          flex-flow: row wrap;
                          }
                          .contenedor1 {
                          display: -webkit-flex;
                          display: flex;
                          -webkit-flex-flow: row wrap;
                          

                          }
                          .columna1,
                          .columna2,
                          .columna3,
                          .columna4,
                          .columna5 {
                          width: 100%;
                          }
                          @media (min-width: 600px) {
                          .columna2,
                          .columna3,
                          .columna4,
                          .columna5 {
                          width: 50%;
                          }
                          }
                          @media (min-width: 800px) {
                          .columna1 {
                          width: 23%;
                          margin-left: auto;
                          margin-right: auto;
                          }
                          .columna2 {
                          width: 43%;
                          margin-left: auto;
                          margin-right: auto;
                          }
                          .columna3 {
                          width: 55%;

                          }
                          .columna4 {
                          width: 49%;

                          }
                          .columna5 {
                          width: 98%;
                          margin-left: auto;
                          margin-right: auto;
                          }
                          .contenedor {
                          width: 800px;
                          margin-left: auto;
                          margin-right: auto;
                          }
                          
                          }
                        </style>




                        <!-- cuadrilla 1 -->

                        <div class="contenedor">
                          <a href="#" style="   
                            background: url(images/img_hospital/turnosdou.png) ;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 250px;margin: 5px; margin-bottom: 20px;" class="columna1">
                          </a>
                          <a href="#" style="   
                            background: url(images/img_hospital/vacunacion.jpg) ;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 250px;margin: 5px;padding-bottom: 3px;" class="columna1">

                          </a>
                          <a href="#" style="   
                            background: url(images/img_hospital/farmacia.jpg) ;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 250px;margin: 5px; padding-bottom: 3px;" class="columna1">
                          </a>
                          <a href="#" style="   
                            background: url(images/img_hospital/docencia.png) ;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 250px;margin: 5px;padding-bottom: 3px;" class="columna1">
                           
                          </a>
                          <!--  fin cuadrilla 1 -->




                          <!--  recuadro campañas -->

                        <div style="width: 97%; height: 450px; background-color: #00C9B1; float: left;" class="contenedor1">
                            <div style="width: 97%; height: 150px" >
                            <img  src="images/img_hospital/titulo_campañas.png">
                            </div>
                            <a href="#" style="   
                            background: url(images/img_hospital/campaña1.jpg);
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                             height: 50%; width: 24%;
                               margin-left: 8px;
                               margin-right: 3px; 
                               padding-bottom: 3px;" >                          
                          </a>

                          <a href="#" style="   
                            background: url(images/img_hospital/campaña2.jpg);
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                             height: 50%; width: 24%;
                             margin: 3px;
                             padding-bottom: 3px;" >                          
                          </a>
                          <a href="#" style="   
                            background: url(images/img_hospital/campaña3.jpg);
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                             height: 50%; width: 24%;
                             margin: 3px;
                             padding-bottom: 3px;" >                          
                          </a>
                                
                          <a href="#" style="   
                            background: url(images/img_hospital/campaña4.jpg);
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                             height: 50%; width: 24%;
                             margin: 3px;
                             padding-bottom: 3px;" >                          
                          </a>
                           
                          </div>
                    <!--  fin recuadro campañas -->



                    <!--  cuadrilla 2 -->
                          <a href="#" style="   
                            background: url(images/img_hospital/centros.png) ;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 250px;margin: 5px;margin-top: 20px;" class="columna1">
                            
                          </a>
                          <a href="#" style="   
                            background: url(images/img_hospital/guardia.png) ;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 250px;margin: 5px;margin-top: 20px;" class="columna1">

                          </a>

                          <a href="#" style="   
                            background: url(images/img_hospital/biblioteca.jpg) ;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 250px;margin: 5px;margin-top: 20px;" class="columna1">
                          </a>
                          <a href="#" style="   
                            background: url(images/img_hospital/voluntariado.png) ;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 250px;margin: 5px;margin-top: 20px;" class="columna1">

                          </a>
                          <!--  fin cuadrilla 2 -->




                          <!--  video -->
                          <div style="width: 98%; height: 450px; background-color: #C6C6C6; margin-top: 15px; margin-bottom: 15px">
                          <iframe width="100%" height="450px" src="https://www.youtube.com/embed/jVsLH4DWYS4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <!--  fin video -->




                        <!--  links-->
                          <img src="images/img_hospital/querestrbajar.jpg" style="   
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 250px;" class="columna3">
                          </a>
                          <a href="#" style="   
                            background: url(images/img_hospital/cv3.jpg) ;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 250px;" class="columna2">
                            <div></div>
                          </a>
                          <a href="https://www.argentina.gob.ar/salud/incucai" style="   
                            background: url(images/img_hospital/incucai.png) ;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 150px;margin: 1px;margin-top: 15px" class="columna4">
                          </a>
                          <a href="http://www.ide.rionegro.gov.ar/index.php?contID=49640" style="   
                            background: url(images/img_hospital/ministerio_rio.png) ;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 150px;margin: 1px;margin-top: 15px" class="columna4">
                          </a>
                          <a href="https://www.argentina.gob.ar/salud" style="   
                            background: url(images/img_hospital/ministerio_nacion.png) ;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            text-align: center; height: 150px;margin: 1px; margin-top: 15px" class="columna5">
                          </a>
                        </div>
                      </div>
                    </div>

                    <!--  fin links -->





                    <script type="text/javascript">
                      $(document).ready(function() {
                      
                          $('#featured_services_carousel').jcarousel({
                              scroll: ($(window).width() > 767 ? 4 : 1),
                              easing: 'easeInOutExpo',
                              animation: 600
                          });
                      });
                      
                      // Reload carousels on window resize to scroll only 1 item if viewport is small
                      $(window).resize(function() {
                          var el = $("#featured_services_carousel"),
                              carousel = el.data('jcarousel'),
                              win_width = $(window).width();
                          var visibleItems = (win_width > 767 ? 4 : 1);
                          carousel.options.visible = visibleItems;
                          carousel.options.scroll = visibleItems;
                          carousel.reload();
                      });
                    </script>
                    <!-- Featured Services Section::END -->
                  </div>
                  <!-- Tabs -->
                  <div>
                    <div style="max-width: 990px; padding: 15px;">
                      <img style="max-width: 465px;width: 100%;
                        height: auto;" src="images/img_hospital/valores1.png">
                      <iframe src="https://calendar.google.com/calendar/embed?height=330&amp;bgcolor=%2301c8b1&amp;src=Y3RzLmVkdS5hcl9nbmR0dWU0c3R2bXJuYjc0MWtuZjh2azQ1c0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%2322AA99&amp;color=%23329262&amp;color=%23A87070&amp;color=%231F753C&amp;mode=MONTH&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;showCalendars=0&amp;showTitle=0" style="border-width:0" width="490" height="330" frameborder="0" scrolling="no"></iframe>
                    </div>
                  </div>
                  <script type="text/javascript">
                    $('#tabs a').tabs();
                  </script>
                  <!-- Tabs::END -->
                </div>
              </div>
            </div>
            <!-- Footer -->
            <?php include("incluidos/footer.php"); ?>
            <!-- Footer::END -->
          </div>
          <script>
            window.onload = function() {
                var contenedor = document.getElementById('contenedor_carga');
            
                contenedor.style.visibility = 'hidden';
                contenedor.style.opacity = '0';
            }
          </script>
        </body>
      </html>

