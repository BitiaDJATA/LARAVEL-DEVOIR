<!DOCTYPE html>
<html lang="en">

  <head>

    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-edu-meeting.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
  </head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="{{route('index.blade')}}" class="logo">
                           NOTE-UNIV
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li><a href="{{route('mapage.blade')}}"  class="active">MAPAGE</a></li>
                         <!-- <li class="scroll-to-section"><a href="#apply">Apply Now</a></li>-->
                          <li class="has-sub">
                              <a href="javascript:void(0)">CONNECT</a>
                              <ul class="sub-menu">
                                  <li><a href="{{route('login')}}">LOGIN</a></li>
                                  <li><a href="{{route('users.store')}}">SIGN-UP</a></li>
                              </ul>
                          </li> 
                          
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="{{'images/course-video.mp4'}}" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hello Students</h6>
              <h2>Bienvenue to NOTE-UNIV</h2>
              <p>Trouvez la meilleure université selon vos critères.
                Que vous recherchiez une atmosphère stimulante, des professeurs dévoués ou des opportunités de carrière exceptionnelles, nos évaluations vous aideront à trouver votre université idéale..</p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="{{route('index.blade')}}">Allons-y</a></div>
              </div>
          </div>
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
                <img src="{{'images/service-icon-01.png'}}" alt="">
              </div>
              <div class="down-content">
                <h4>Partagez votre expérience universitaire.</h4>
                <p>Étudiants actuels et anciens, partagez vos histoires et vos conseils pour aider les autres à trouver leur chemin dans le monde académique. Votre voix compte !</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="{{'images/service-icon-02.png'}}" alt="">
              </div>
              <div class="down-content">
                <h4>Trouvez la meilleure université pour vous.</h4>
                <p>Explorez les expériences réelles des étudiants dans diverses universités. Des évaluations honnêtes et des commentaires détaillés vous guideront vers un choix éclairé.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="{{'images/service-icon-03.png'}}" alt="">
              </div>
              <div class="down-content">
                <h4>Créez une communauté universitaire transparente.</h4>
                <p>Ensemble, construisons une plateforme où la transparence et l'authenticité règnent. Aidez-nous à créer une communauté d'étudiants informés et engagés.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="{{'images/service-icon-02.png'}}" alt="">
              </div>
              <div class="down-content">
                <h4>Évaluez, partagez, inspirez.</h4>
                <p>Votre expérience compte. Partagez vos notes et commentaires pour aider les autres à faire des choix éclairés et à créer une communauté universitaire dynamique.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="{{'images/service-icon-03.png'}}" alt="">
              </div>
              <div class="down-content">
                <h4>Un guide complet pour votre avenir académique.</h4>
                <p>Trouvez des informations fiables, des évaluations impartiales et des conseils pratiques pour choisir la bonne université et réussir votre parcours étudiant.</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Classement</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>critères de classification</h4>
            <ul>
              <li><a href="#">Qualité d'enseignement</a></li><br>
              <li><a href="#">Infrastructure</a></li><br>
              <li><a href="#">Recherche</a></li><br>
              <li><a href="#">InsertionPro </a></li><br>
              
            </ul>
            <div class="main-button-red">
              <a href="{{route('listView.blade')}}">Toutes les universités</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
          @foreach($fourthUniversities as $_university)
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>Note des universités </span>
                  </div>
                  <img src="{{ asset('storage/' . $_university->image) }}" alt="New Lecturer Meeting">
                </div>
                <div class="down-content d-block justify-center">
                  
                    <div class="date">
                      <h6>ajouté le <span>{{$_university->created_at}}</span></h6>
                    </div>
                    <a href="javscript:void(0);"><h4></h4></a>
                    <p></p>
                  
                </div>
              </div>
            </div>
           @endforeach
           
            
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <section class="our-courses" id="courses">
    <div class="container">

    </div>
  </section>

  <section class="our-facts">
   
    <div class="footer">
      <p>Plateforme de selection et de notain d'université
          <br>
          Creatrice: <a href="https://templatemo.com" target="_parent" title="free css templates">DJATA Essi Bitia</a>
          <br>
        
        </p>
    </div>
  </section>

 

  <!-- Scripts -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

  <script src="{{ asset('js/isotope.min.js') }}"></script>
  <script src="{{ asset('js/owl-carousel.js') }}"></script>
  <script src="{{ asset('js/lightbox.js') }}"></script>
  <script src="{{ asset('js/tabs.js') }}"></script>
  <script src="{{ asset('js/video.js') }}"></script>
  <script src="{{ asset('js/slick-slider.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var direction = section.replace(/#/, ''),
              reqSection = $('.section').filter('[data-section="' + direction + '"]');

          if (reqSection.length > 0) { // Vérifie si une section correspondante a été trouvée
            var reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
              $('body, html').animate({
                scrollTop: reqSectionPos
              }, 800);
            } else {
              $('body, html').scrollTop(reqSectionPos);
            }
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

</body>
</html>