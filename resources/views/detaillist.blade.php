<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>NOTE-UNIV</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-edu-meeting.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
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
                      <a href="index.html" class="logo">
                          NOTE-UNIV
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="{{route('index.blade')}}">Home</a></li>
                          <li class="scroll-to-section"><a href="{{route('mapage.blade')}}">MaPage</a></li> 
                          
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

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Decouvrez toutes les détails concernant l'université de votre choix</h6>
          <h2>Explorez plus d'informations</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
                  <div class="meeting-single-item">
                    <div class="thumb">
                      <div class="price">
                        <span>Note des universités </span>
                      </div>
                      <img src="{{ asset('storage/'. $universitys->image)}}" alt="New Lecturer Meeting">
                    </div>
                    <div class="down-content ">
                      <h4>{{$universitys->nomUniv}}</h4>
                      <p>{{$universitys->description}}</p>
                      <div class="row">
                        <div class="col-lg-4"  style="margin-top:25px">
                          <div class="hours">
                            <h5>Horaires</h5>
                            <p>Monday - Friday: 07:00 AM - 13:00 PM<br>Saturday- Sunday: 09:00 AM - 15:00 PM</p>
                          </div>
                        </div>
                        <div class="col-lg-4" style="margin-top:25px">
                          <div class="location">
                            <h5>Localisation</h5>
                            <p>{{$universitys->localisation}}</p>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
            </div>

            <section class="contact-us" id="contact">
              <div class="container">
                <div class="row">
                  <div class="col-lg-9 align-self-center">
                    <div class="row">
                      <div class="col-lg-12">
                        <form id="contact" action="{{route('notations.store')}}" method="post">
                          @csrf
                          <div class="row">
                            <div class="col-lg-12">
                              <h2>Commentaire</h2>
                            </div>
                            <div class="col-lg-4">
                              <fieldset>
                                  <select name="university_id" id="university_id" required="">
                                      <option value="">Choisissez une université...</option>
                                          <option value="{{ $universitys->id }}">{{ $universitys->nomUniv }}</option>
                                  </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" type="text" class="form-control" id="message" placeholder="VOTRE MESSAGE..." required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="button">Laisser votre note</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                  <div class="right-info">
                    <ul>
                      <li>
                          <h6>Qualité d'enseignement</h6>
                          <select class="form-select" name="qualitEns" aria-label="Qualité d'enseignement" name="qualite_enseignement">
                              @for ($i = 1; $i <= 5; $i++)
                                  <option value="{{ $i }}">{{ $i }}</option>
                              @endfor
                          </select>
                      </li>
                      <li>
                          <h6>Note Infrastructure</h6>
                          <select class="form-select" name="infrastruture" aria-label="Note Infrastructure" name="note_infrastructure">
                              @for ($i = 1; $i <= 5; $i++)
                                  <option value="{{ $i }}">{{ $i }}</option>
                              @endfor
                          </select>
                      </li>
                      <li>
                          <h6>Note Recherche</h6>
                          <select class="form-select" name="recherche" aria-label="Note Recherche" name="note_recherche">
                              @for ($i = 1; $i <= 5; $i++)
                                  <option value="{{ $i }}">{{ $i }}</option>
                              @endfor
                          </select>
                      </li>
                      <li>
                          <h6>Note InsertionPro</h6>
                          <select class="form-select" name="isertionPro" aria-label="Note InsertionPro" name="note_insertion_pro">
                              @for ($i = 1; $i <= 5; $i++)
                                  <option value="{{ $i }}">{{ $i }}</option>
                              @endfor
                          </select>
                      </li>
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
              
            </section>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="{{route('list.blade')}}">Retour sur la Liste</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Plateforme de selection et de notain d'université
        <br>
        Creatrice: DJATA Essi Bitia
        <br>
      
      </p>
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
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


  </body>

</html>
