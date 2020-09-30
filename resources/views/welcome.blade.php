@extends('layouts.app')

@section('content')


    <!-- SLIDER : begin -->
    <!-- If you want to have single BG image for all slides,
    just add style="background-image: url( 'url-to-your-image.jpg' );" to the following element
    (and remove "style" attributes from all "slide" elements) -->
    <div class="c-slider" data-autoplay="8">
        <div class="slide-list">

            <!-- SLIDE : begin -->
            <div class="slide" style="background-image: url( 'images/slide-01.jpg' );">
                <div class="slide-inner">
                    <!-- You can change vertical align of the content with the following classes valign-top | valign-middle | valign-bottom -->
                    <div class="slide-content valign-bottom">

                        <div class="row">
                            <div class="col-md-6 col-md-push-6">
                                <h2><a href="post-detail.html">TownPress Half Marathon Draws over 500 Runners</a></h2>
                                <h3>A half marathon is a road running event of 21.0975 kilometres (13.1094 mi). It is half the distance of a marathon and usually run on roads.</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- SLIDE : end -->

            <!-- SLIDE : begin -->
            <div class="slide" style="background-image: url( 'images/slide-02.jpg' );">
                <div class="slide-inner">
                    <div class="slide-content valign-bottom">

                        <div class="row">
                            <div class="col-md-6">
                                <h2><a href="post-detail.html">Town Cinema to Screen Indie Movies for the Whole Summer</a></h2>
                                <h3>An independent film is a film production resulting in a feature film that is produced mostly or completely outside of the major film studio system.</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- SLIDE : end -->

            <!-- SLIDE : begin -->
            <div class="slide" style="background-image: url( 'images/slide-03.jpg' );">
                <div class="slide-inner">
                    <div class="slide-content valign-bottom">

                        <div class="row">
                            <div class="col-md-6 col-md-push-6">
                                <h2><a href="post-detail.html">Travel Tips: America’s 20 Best National Parks</a></h2>
                                <h3>A national park is a park in use for conservation purposes. Often it is a reserve of natural, semi-natural, or developed land that a sovereign state declares or owns.</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- SLIDE : end -->

        </div>
    </div>
    <!-- SLIDER : end -->

    <!-- DIRECTORY : begin -->
    <!-- You can choose to have 2, 3 or 4 columns in Directory element.
    To change the number of columns, change the class in the following element from m-3-columns to m-2-columns or m-4-columns -->
    <div class="c-directory m-has-icon m-3-columns">
        <div class="c-content-box">
            <div class="directory-inner">
                <i class="ico-shadow tp tp-road-sign"></i>
                <h2 class="directory-title"><i class="ico tp tp-road-sign"></i>ELIJA <strong> SU INTERÉS</strong></h2>
                <div class="directory-content">
                    <nav class="directory-menu">
                        <ul>
                            <li><a href="town-hall.html">GOBIERNO</a>
                                <ul>
                                    <li><a href="town-hall.html">Town Hall</a></li>
                                    <li><a href="town-council.html">Town Council</a></li>
                                    <li><a href="home-2.html">Alternative Home</a></li>
                                </ul>
                            </li>
                            <li><a href="post-list.html">COMUNIDAD</a>
                                <ul>
                                    <li><a href="post-list.html">TownPress News</a></li>
                                    <li><a href="post-list.html">Public Notices</a></li>
                                    <li><a href="document-list.html">Town Documents</a></li>
                                </ul>
                            </li>
                            <li><a href="statistics.html">SOBRE NUESTRA CUIDAD</a>
                                <ul>
                                    <li><a href="statistics.html">Statistics</a></li>
                                    <li><a href="town-history.html">Town History</a></li>
                                    <li><a href="virtual-tour.html">Virtual Tour</a></li>
                                </ul>
                            </li>
                            <li><a href="event-list.html">RELAJARSE</a>
                                <ul>
                                    <li><a href="event-list.html">Upcoming Events</a></li>
                                    <li><a href="gallery-list-html">Photo Galleries</a></li>
                                    <li><a href="#">Facebook Page</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">PONERSE EN CONTACTO</a>
                                <ul>
                                    <li><a href="contact.html">Write To Mayor</a></li>
                                    <li><a href="phone-numbers.php">Phone Numbers</a></li>
                                    <li><a href="#">Twitter Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="http://themeforest.net/user/LSVRthemes/portfolio">PLANTILLA TOWNPRESS</a>
                                <ul>
                                    <li><a href="http://themeforest.net/user/LSVRthemes/portfolio">Purchase TownPress</a></li>
                                    <li><a href="http://themeforest.net/user/LSVRthemes/portfolio">WordPress Version</a></li>
                                    <li><a href="http://demos.lsvr.sk/townpress.html/documentation/">Documentation</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- DIRECTORY : end -->

    <!-- POST LIST : begin -->
    <div class="c-post-list m-has-icon">
        <div class="c-content-box">
            <div class="post-list-inner">
                <i class="ico-shadow tp tp-reading"></i>
                <h2 class="post-list-title"><i class="ico tp tp-reading"></i><a href="post-list.html">NOTICIAS <strong>DESTACADAS</strong></a></h2>
                <div class="post-list-content">

                    <!-- FEATURED POST : begin -->
                    <article class="featured-post m-has-thumb">
                        <div class="post-image">
                            <a href="post-detail.html"><img src="{{ asset('images/post-01-cropped.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-core">
                            <h3 class="post-title">
                                <a href="post-detail.html">Informe del partido amistoso de fútbol entre ..</a>
                            </h3>
                            <div class="post-date"><i class="ico tp tp-clock2"></i>August 23, 2015</div>
                            <div class="post-excerpt">
                                <p>Football refers to a number of sports that involve, to varying degrees, kicking a ball with the foot to score a goal. Unqualified, the word football is understood to refer to whichever form of football is the most popular in the regional context in which the word appears.</p>
                            </div>
                        </div>
                    </article>
                    <!-- FEATURED POST : end -->

                    <!-- POST : begin -->
                    <article class="post">
                        <h3 class="post-title">
                            <a href="post-detail.html">New Housing Complex in TownPress Nearly Complete</a>
                        </h3>
                        <div class="post-date">July 6, 2015</div>
                    </article>
                    <!-- POST : end -->

                    <!-- POST : begin -->
                    <article class="post">
                        <h3 class="post-title">
                            <a href="post-detail.html">This Year’s Summer Rock Festival Draws More Than 1000 Fans</a>
                        </h3>
                        <div class="post-date">June 15, 2015</div>
                    </article>
                    <!-- POST : end -->

                    <!-- POST : begin -->
                    <article class="post">
                        <h3 class="post-title">
                            <a href="post-detail.html">10 Things You Didn’t Know About our Town</a>
                        </h3>
                        <div class="post-date">June 2, 2015</div>
                    </article>
                    <!-- POST : end -->

                    <!-- POST : begin -->
                    <article class="post">
                        <h3 class="post-title">
                            <a href="post-detail.html">Report From Monday’s Financial Town Meeting</a>
                        </h3>
                        <div class="post-date">May 14, 2015</div>
                    </article>
                    <!-- POST : end -->

                    <p class="more-btn-holder"><a href="post-list.html">Leer todas las publicaciones</a></p>

                </div>
            </div>
        </div>
    </div>
    <!-- POST LIST : end -->
    <script>
        $('#m_inicio').addClass('m-active');
    </script>
@endsection
