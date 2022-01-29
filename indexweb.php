<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Aplikasi RS. Asura Tugumulyo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assetsweb/css/fontawesome.css">
    <link rel="stylesheet" href="assetsweb/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assetsweb/css/owl.css">
    <link rel="stylesheet" href="assetsweb/css/lightbox.css">
	<link href="http://192.168.88.203/dashboard/download.jpeg" rel="icon" type="image/png" />
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

  
<header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                         Aplikasi RS. Asura Tugumulyo                      </a>
                      <!-- ***** Logo End ***** -->
                      
                </nav>
              </div>
          </div>
      </div>
  </header>
  

  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assetsweb/images/TEMA.mp4" type="video/mp4" />
      </video>

   
          
              
            
                 
            
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <div class="icon"><a href="http://192.168.88.203/dashboard/indexmenu.php" target=""><img src="https://wharf850.com/wp-content/uploads/2019/04/icon-menu.png"></a></div>
              </div>
              <div class="down-content">
                <h4>MENU</h4>
			  </div>
            </div>
				
            
            <div class="item">
              <div class="icon">
			 
                <div class="icon"><a href="http://192.168.88.203/dashboard/APLIKASI-APS.6.0" target=""><img src="https://www.pngall.com/wp-content/uploads/4/LCD-Computer-Monitor-Transparent.png"></a></div>
              </div>
			 
              <div class="down-content">
                <h4>DISPLAY</h4>
                
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <div class="icon"><a href="http://192.168.88.203/dashboard/APLIKASI-APS.6.0/POLIKLINIK" target=""><img src="https://cdn.kibrispdr.org/data/icon-klinik-png-22.png"></a></div>
              </div>
              <div class="down-content">
                <h4>POLIKLINIK</h4>
               
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                 <div class="icon"><a href="http://192.168.88.1/webfig/#Wireless.Interfaces.5" target=""><img src="https://cdn-icons-png.flaticon.com/512/4425/4425276.png"></a></div>
              </div>
              <div class="down-content">
                <h4>LOGIN HOTSPOT</h4>
                
              </div>
            </div>
            
            
          </div>
        </div>
            
      </div>
    </div>
      </div>
    </div>
  </section>

<!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assetsweb/js/isotope.min.js"></script>
    <script src="assetsweb/js/owl-carousel.js"></script>
    <script src="assetsweb/js/lightbox.js"></script>
    <script src="assetsweb/js/tabs.js"></script>
    <script src="assetsweb/js/video.js"></script>
    <script src="assetsweb/js/slick-slider.js"></script>
    <script src="assetsweb/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
	
</body>
</html>