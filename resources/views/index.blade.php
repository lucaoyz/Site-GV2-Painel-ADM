<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>GV2 Academia</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/ea50c2066e.js" crossorigin="anonymous"></script>

    <!-- favicons
    ================================================== -->
    <link rel="halter" sizes="76x76" href="{{asset('images/logos/gv2.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/logos/gv2.png')}}">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="{{route('index')}}"><img src="{{asset('images/Logohorizontalmaiscompacta.png')}}" alt=""></a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li class="current"><a class="smoothscroll"  href="#home" title="home">Menu</a></li>
                <li><a class="smoothscroll"  href="#about" title="about">Sobre</a></li>
                <li><a class="smoothscroll"  href="#pricing" title="blog">Planos</a></li>
                <li><a class="smoothscroll"  href="#estrutura" title="contact">Estrutura</a></li>
                <li><a class="smoothscroll"  href="#gallery" title="contact">Galeria</a></li>
                <li><a class="smoothscroll"  href="#contact" title="contact">Contato</a></li>
                @if(auth::check())
                <li><a class="smoothscroll"  href="{{route('home')}}" title="contact">Admin</a></li>
                @else
                <li><a class="smoothscroll"  href="{{route('login')}}" title="contact">Login</a></li>
                @endif
                <li><a href="{{route('indexEUA')}}"> <img class="botao-ingles"  src="{{asset('images/eua.png')}}"></a><li></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


   <!-- home
   ================================================== -->
   <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="{{asset('images/bckg.jpg')}}" data-natural-width=8000 data-natural-height=4500 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h1 style="text-transform: uppercase;">
                    For??a ?? um<br>
                    segundo poder

                </h1>

                <div class="home-content__scroll">
                    <a href="#about" class="scroll-link smoothscroll">
                        <span>Rolar para baixo</span>
                    </a>
                </div>


        </div> <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="https://www.facebook.com/GV2Academiaaa/" target="_blank"><i class="im im-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="https://www.instagram.com/gv2academia/" target="_blank"><i class="im im-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
        </ul>
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full text-center">
                <h1 style="color: #fff;">Sobre a <span style="color: #CB2727;">GV2</span></h1>
                <p class="lead" style="color: #888888;">Somos mais que uma academia de muscula????o, somos um time. Oferecemos o melhor para quem est?? determinado em treinar, com ampla quantidade de equipamentos e profissionais treinados e dedicados a te levar ao melhor desempenho referente aos seus objetivos. Fa??a parte do Time GV2!</p>
            </div>
        </div>

    </section> <!-- end about -->

    <div class="linha-horizontal"></div>

    <!-- team
    ================================================== -->
    <section class="team">
        <div class="container-team">
            <div class="row-team">

                @foreach ($membros as $membro)
                <div class="column">
                    <div class="imgBox">
                        <img src="{{asset('images/membros/' . $membro->mem_foto)}}">
                    </div>
                    <div class="details">
                        <h3>{{$membro->mem_nome}}<br><span>{{$membro->mem_cargo}}</span></h3>
                        <ul>
                            <li><a href="#"><i class="" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                @endforeach
                <div style="clear: both;"></div>
            </div>
        </div>
    </section>
    <!-- end team -->

    <!-- Price Plan Section Begin -->
    <section id="pricing" class="s-pricing target-section">

        <div class="overlay"></div>

        <div class="row narrow section-intro has-bottom-sep-video"">
            <div class="col-full text-center">
                <h1 style="color: #fff;">Planos</h1>
            </div>
        </div>

        <div class="pricing-table">
            <!-- 1 card -->
            <div class="pricing-card">
                <h3 class="pricing-card-header">Mensal</h3>
                <div class="price"> R$ @if ($plano1 === null)
                    Sem planos cadastrados.
                @else
                    {{$plano1->pl_plano1}}
                @endif<span>/M??s</span>
                </div>

                <a href="https://api.whatsapp.com/send?phone=55551936292954&text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20desejo%20adquirir%20o%20plano%20Mensal." class="order-btn">Adquirir</a>
            </div>

            <!-- 2 card -->
            <div class="pricing-card">
                <h3 class="pricing-card-header">Trimestral</h3>
                <div class="price"> R$ @if ($plano2 === null)
                    Sem planos cadastrados.
                @else
                    {{$plano2->pl_plano2}}
                @endif<span>/3x</span>
                </div>

                <a href="https://api.whatsapp.com/send?phone=55551936292954&text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20desejo%20adquirir%20o%20plano%20Trimestral." class="order-btn">Adquirir</a>
            </div>

            <!-- 3 card -->

            <div class="pricing-card">
                <h3 class="pricing-card-header">Semestral</h3>
                <div class="price"> R$ @if ($plano3 === null)
                    Sem planos cadastrados.
                @else
                    {{$plano3->pl_plano3}}
                @endif<span>/6x</span>
                </div>

                <a href="https://api.whatsapp.com/send?phone=55551936292954&text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20desejo%20adquirir%20o%20plano%20Semestral." class="order-btn">Adquirir</a>
            </div>

            <!-- 4th card  -->
            <div class="pricing-card">
                <h3 class="pricing-card-header">Anual Recorrente</h3>
                <div class="price"> R$ @if ($plano4 === null)
                    Sem planos cadastrados.
                @else
                    {{$plano4->pl_plano4}}
                @endif<span>/12x</span>
                </div>

                <a href="https://api.whatsapp.com/send?phone=55551936292954&text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20desejo%20adquirir%20o%20plano%20Anual%20Recorrente." class="order-btn">Adquirir</a>
            </div>

        </div>

    </section>
    <!-- blog
    ================================================== -->
        <section id="estrutura" class="s-services">
            <div class="row narrow section-intro has-bottom-sep">
                <div class="col-full text-center">
                    <h1 style="color: #fff;">Estrutura</h1>
                </div>
            </div>
            <div class="container-services">
                <div class="row-services">
                    <div class="service">
                        <i class="fa-solid fa-file-medical"></i>
                        <h2 style="color: #fff; margin-top: 0; margin-bottom: 0;">Avalia????o F??sica</h2>
                        <p>Avaliamos nossos alunos para oferecer um treino indicado e funcional de acordo com seu f??sico.</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-dumbbell"></i>
                        <h2 style="color: #fff; margin-top: 0; margin-bottom: 0;">Muscula????o</h2>
                        <p>Oferecemos grande quantidade de equipamentos de muscula????o ao seu dispor.</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-heart-pulse"></i>
                        <h2 style="color: #fff; margin-top: 0; margin-bottom: 0;">Aer??bico</h2>
                        <p>Aer??bico ?? essencial para ter uma sa??de em dia! A GV2 conta com equipamentos para sua realiza????o.</p>
                    </div>
                </div>
                <div class="row-services" style="padding-top: 30px;">
                    <div class="service">
                        <i class="fa-solid fa-users"></i>
                        <h2 style="color: #fff; margin-top: 0; margin-bottom: 0;">Equipe Especializada</h2>
                        <p>Professores especializados e prontos para te oferecer o melhor acompanhamento.</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-wifi"></i>
                        <h2 style="color: #fff; margin-top: 0; margin-bottom: 0;">Wi-Fi</h2>
                        <p>Wi-Fi Gratuito dispon??vel para todos os alunos GV2!</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-vault"></i>
                        <h2 style="color: #fff; margin-top: 0; margin-bottom: 0;">Arm??rios</h2>
                        <p>Contamos com arm??rios individuais para prote????o de objetos pessoais durante o treino.</p>
                    </div>
                </div>
            </div>

        </section><!-- end s-blog -->

     <!-- video
    ================================================== -->
    <div class="s-video video-section">

        <div class="overlay"></div>

        <div class="row narrow section-intro has-bottom-sep-video">
            <div class="video-text text-center">
                <h1 style="color: #fff;">Conhe??a a GV2</h1>
                <a href="https://youtu.be/hxQfRm6EJoo" target="_blank" class="play-btn video-popup">
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>

    </div> <!-- end s-video -->

   <!-- works
    ================================================== -->
    <section id="gallery" class="s-works target-section">

        <div class="row narrow section-intro has-bottom-sep-video">
            <div class="col-full">
                <h1 style="color: #fff;">Galeria</h1>
            </div>
        </div>

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" target="_blank" title="The Beetle Car" data-size="1050x700">
                                <img src="{{asset('images/portfolio/itens-acad.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Em breve
                            </h3>
                            <p class="item-folio__cat">
                                Em breve
                            </p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" target="_blank" title="Lighthouse" data-size="1050x700">
                                <img src="{{asset('images/portfolio/mulher-acad.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Em breve
                            </h3>
                            <p class="item-folio__cat">
                                Em breve
                            </p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" class="thumb-link" data-size="1050x700">
                                <img src="{{asset('images/portfolio/degrade2.png')}}"alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->


                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" target="_blank" data-size="1050x700">
                                <img src="{{asset('images/portfolio/homem-peso.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Em breve
                            </h3>
                            <p class="item-folio__cat">
                                Em breve
                            </p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" target="_blank" title="Lighthouse" data-size="1050x700">
                                <img src="{{asset('images/portfolio/pesos2.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Em breve
                            </h3>
                            <p class="item-folio__cat">
                                Em breve
                            </p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" target="_blank" title="Lighthouse" data-size="1050x700">
                                <img src="{{asset('images/portfolio/pesos.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Em breve
                            </h3>
                            <p class="item-folio__cat">
                                Em breve
                            </p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" class="thumb-link" data-size="1050x700">
                                <img src="{{asset('images/portfolio/degrade1.2.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" target="_blank" data-size="1050x700">
                                <img src="{{asset('images/portfolio/pesao.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Em breve
                            </h3>
                            <p class="item-folio__cat">
                                Em breve
                            </p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

            </div>
        </div> <!-- end masonry -->

    </section> <!-- end works -->

    <!-- s-contact
    ================================================== -->
    <section id="contact" class="s-contact target-section">

        <div class="overlay"></div>

        <div class="row narrow section-intro">
            <div class="col-full">
                <h1>Contato</h1>
            </div>
        </div>

        <div class="row contact__main">
            <div class="col-eight contact__infos">
                <form name="contactForm" method="post" action="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.0921983540507!2d-47.396350785403904!3d-22.76195943844074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c89c2346937a49%3A0xa623ab1ea6b5463b!2sR.%20dos%20Tupis%2C%20869%20-%20Jardim%20Mariana%2C%20Santa%20B%C3%A1rbara%20d&#39;Oeste%20-%20SP%2C%2013456-033!5e0!3m2!1spt-BR!2sbr!4v1666913623360!5m2!1spt-BR!2sbr"
                      class="mapaContato"
                      allowfullscreen="" loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"></iframe>
                </form>

            </div>
            <div class="col-four tab-full contact__infos">
                <h4 class="h06">Telefone</h4>
                <p>Telefone: (19) 3629-2954<br>
                Whatsapp: (19) 3629-2954<br>
                </p>

                <h4 class="h06">E-mail</h4>
                <p>gv2academia@gmail.com<br>
                </p>

                <h4 class="h06">Endere??o</h4>
                <p>
                R. dos Tupis, 869<br>
                Jardim S??o Francisco,<br>
                Santa B??rbara d'Oeste<br>
                SP, 13450-000
                </p>
            </div>

        </div>

    </section>
    <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <a class="footer-site-logo" href="#0"><img src="{{asset('images/logos/Logo_com_tagline.png')}}" alt="Homepage"></a>
                </div>

                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/GV2Academiaaa/" target="_blank">
                        <i class="im im-facebook" aria-hidden="true"></i>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href="https://www.instagram.com/gv2academia/" target="_blank">
                        <i class="im im-instagram" aria-hidden="true"></i>
                        <span>Instagram</span>
                    </a></li>
                </ul>

            </div>
        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    ?? <script>
                        document.write(new Date().getFullYear())
                      </script>,
                      Feito <i class="fa-solid fa-bolt"></i> por
                      <a href="https://instagram.com/ahtaeeazy" class="font-weight-bold" target="_blank">EAZY</a>
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->

    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
