@extends('pages.app')
@section('pages.css')
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- color of address bar in mobile browser -->
        <meta name="theme-color" content="#2B2B35">
        <!-- favicon  -->
        <link rel="shortcut icon" href="{{ asset('pages/img/thumbnail.ico') }}" type="image/x-icon">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('pages/css/plugins/bootstrap.min.css') }}">
        <!-- font awesome css -->
        <link rel="stylesheet" href="{{ asset('pages/css/plugins/bootstrap.min.css') }}">
        <!-- swiper css -->
        <link rel="stylesheet" href="{{ asset('pages/css/plugins/swiper.min.css') }}">
        <!-- fancybox css -->
        <link rel="stylesheet" href="{{ asset('pages/css/plugins/fancybox.min.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('pages/css/style.css') }}">

        <title>Index</title>
    </head>
@endsection
@section('pages.body')
    <div class="art-content">

        <!-- curtain -->
        <div class="art-curtain"></div>

        <!-- top background -->
        <div class="art-top-bg" style="background-image: url(pages/img/bg.jpg)">
            <!-- overlay -->
            <div class="art-top-bg-overlay"></div>
            <!-- overlay end -->
        </div>
        <!-- top background end -->

        <!-- swup container -->
        <div class="transition-fade" id="swup">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame">

                <!-- container -->
                <div class="container-fluid">

                    <!-- row -->
                    <div class="row p-60-0 p-lg-30-0 p-md-15-0">
                        <!-- col -->
                        <div class="col-lg-12">

                            <!-- banner -->
                            <div class="art-a art-banner" style="background-image: url(pages/img/bg.jpg)">
                                <!-- banner back -->
                                <div class="art-banner-back"></div>
                                <!-- banner dec -->
                                <div class="art-banner-dec"></div>
                                <!-- banner overlay -->
                                <div class="art-banner-overlay">
                                    <!-- main title -->
                                    <div class="art-banner-title">
                                        <!-- title -->
                                        <h1 class="mb-15">Discover my Amazing <br>Art Space!</h1>
                                        <!-- suptitle -->
                                        <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt; I build <span
                                                class="txt-rotate" data-period="2000"
                                                data-rotate='[ "web interfaces.", "ios and android applications.", "design mocups.", "automation tools." ]'></span>&lt;/<i>code</i>&gt;
                                        </div>
                                        <div class="art-buttons-frame">
                                            <!-- button -->
                                            <a href="portfolio-3-col-masonry.html" class="art-btn art-btn-md"><span>Explore now</span></a>
                                        </div>
                                    </div>
                                    <!-- main title end -->
                                    <!-- photo -->
                                    <img src="pages/img/face-2.png" class="art-banner-photo" alt="Your Name">
                                </div>
                                <!-- banner overlay end -->
                            </div>
                            <!-- banner end -->

                        </div>
                        <!-- col end -->
                    </div>
                    <!-- row end -->

                </div>
                <!-- container end -->

                <!-- container -->
                <div class="container-fluid">

                    <!-- row -->
                    <div class="row p-30-0">

                        <!-- col -->
                        <div class="col-md-3 col-6">

                            <!-- couner frame -->
                            <div class="art-counter-frame">
                                <!-- counter -->
                                <div class="art-counter-box">
                                    <!-- counter number -->
                                    <span class="art-counter">{{$services->count()}}</span>
                                </div>
                                <!-- counter end -->
                                <!-- title -->
                                <h6>Services</h6>
                            </div>
                            <!-- couner frame end -->

                        </div>
                        <!-- col end -->

                        <!-- col -->
                        <div class="col-md-3 col-6">

                            <!-- couner frame -->
                            <div class="art-counter-frame">
                                <!-- counter -->
                                <div class="art-counter-box">
                                    <!-- counter number -->
                                    <span class="art-counter">143</span>
                                </div>
                                <!-- counter end -->
                                <!-- title -->
                                <h6>Completed Projects</h6>
                            </div>
                            <!-- couner frame end -->

                        </div>
                        <!-- col end -->

                        <!-- col -->
                        <div class="col-md-3 col-6">

                            <!-- couner frame -->
                            <div class="art-counter-frame">
                                <!-- counter -->
                                <div class="art-counter-box">
                                    <!-- counter number -->
                                    <span class="art-counter">114</span>
                                </div>
                                <!-- counter end -->
                                <!-- title -->
                                <h6>Happy Customers</h6>
                            </div>
                            <!-- couner frame end -->

                        </div>
                        <!-- col end -->

                        <!-- col -->
                        <div class="col-md-3 col-6">

                            <!-- couner frame -->
                            <div class="art-counter-frame">
                                <!-- counter -->
                                <div class="art-counter-box">
                                    <!-- counter number -->
                                    <span class="art-counter">20</span><span class="art-counter-plus">+</span>
                                </div>
                                <!-- counter end -->
                                <!-- title -->
                                <h6>Honors and Awards</h6>
                            </div>
                            <!-- couner frame end -->

                        </div>
                        <!-- col end -->

                    </div>
                    <!-- row end -->

                </div>
                <!-- container end -->

                <!-- container -->
                <div class="container-fluid">

                    <!-- row -->
                    <div class="row">

                        <!-- col -->
                        <div class="col-lg-12">

                            <!-- section title -->
                            <div class="art-section-title">
                                <!-- title frame -->
                                <div class="art-title-frame">
                                    <!-- title -->
                                    <h4>My Services</h4>
                                </div>
                                <!-- title frame end -->
                            </div>
                            <!-- section title end -->

                        </div>
                        <!-- col end -->

                        <!-- col -->
                        <div class="col-lg-12">
                            <div class="swiper-container art-testimonial-slider" style="overflow: visible">
                                <!-- slider wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- slide -->
                                    @foreach($services as $service)
                                    <div class="swiper-slide">
                                        <!-- service -->
                                        <div class="art-a art-service-icon-box">
                                            <!-- service content -->
                                            <div class="art-service-ib-content">
                                                <!-- title -->
                                                <h5 class="mb-15">{{$service->title}}</h5>
                                                <!-- text -->
                                                <div class="mb-15">
                                                    {!! $service->text !!}
                                                </div>
                                                <!-- button -->
                                                <div class="art-buttons-frame"><a href="{{ route('contact') }}"
                                                                                  class="art-link art-color-link art-w-chevron">Contact</a></div>
                                            </div>
                                            <!-- service content end -->
                                        </div>
                                        <!-- service end -->
                                    </div>
                                @endforeach
                                    <!-- slide -->
                                </div>

                            </div>
                            <!-- col end -->

                        </div>
                    </div>
                    <!-- row end -->

                </div>
                <!-- container end -->

                <!-- container -->
                <div class="container-fluid">

                    <!-- row -->
                    <div class="row p-0-0">

                        <!-- col -->
                        <div class="col-lg-12">

                            <!-- section title -->
                            <div class="art-section-title">
                                <!-- title frame -->
                                <div class="art-title-frame">
                                    <!-- title -->
                                    <h4>My Project</h4>
                                </div>
                                <!-- title frame end -->
                            </div>
                            <!-- section title end -->

                        </div>
                        <!-- col end -->
                        <div class="col-lg-12">
                            <div class="swiper-container art-testimonial-slider" style="overflow: visible">
                                <!-- slider wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- slide -->
                                    @foreach($services as $service)
                                        <div class="swiper-slide">
                                            <!-- service -->

                                            <div class="art-a art-service-icon-box">
                                                <!-- service content -->
                                                <a data-fancybox="gallery" href="pages/img/works/original-size/13.jpg" class="art-a art-portfolio-item-frame art-square">
                                                    <!-- img -->
                                                    <img src="pages/img/works/thumbnail/13.jpg" alt="item">
                                                    <!-- zoom icon -->
                                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                                </a>
                                                <div class="art-service-ib-content">
                                                    <!-- title -->
                                                    <h5 class="mb-15">Project title</h5>
                                                    <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                                                    <!-- button -->
                                                    <div class="art-buttons-frame"><a href="{{ route('contact') }}"
                                                                                      class="art-link art-color-link art-w-chevron">Contact</a></div>
                                                </div>
                                                <!-- service content end -->
                                            </div>
                                            <!-- service end -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- service -->

                                            <div class="art-a art-service-icon-box">
                                                <!-- service content -->
                                                <a data-fancybox="gallery" href="pages/img/works/original-size/13.jpg" class="art-a art-portfolio-item-frame art-square">
                                                    <!-- img -->
                                                    <img src="pages/img/works/thumbnail/13.jpg" alt="item">
                                                    <!-- zoom icon -->
                                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                                </a>
                                                <div class="art-service-ib-content">
                                                    <!-- title -->
                                                    <h5 class="mb-15">Project title</h5>
                                                    <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                                                    <!-- button -->
                                                    <div class="art-buttons-frame"><a href="{{ route('contact') }}"
                                                                                      class="art-link art-color-link art-w-chevron">Contact</a></div>
                                                </div>
                                                <!-- service content end -->
                                            </div>
                                            <!-- service end -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- service -->

                                            <div class="art-a art-service-icon-box">
                                                <!-- service content -->
                                                <a data-fancybox="gallery" href="pages/img/works/original-size/13.jpg" class="art-a art-portfolio-item-frame art-square">
                                                    <!-- img -->
                                                    <img src="pages/img/works/thumbnail/13.jpg" alt="item">
                                                    <!-- zoom icon -->
                                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                                </a>
                                                <div class="art-service-ib-content">
                                                    <!-- title -->
                                                    <h5 class="mb-15">Project title</h5>
                                                    <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                                                    <!-- button -->
                                                    <div class="art-buttons-frame"><a href="{{ route('contact') }}"
                                                                                      class="art-link art-color-link art-w-chevron">Contact</a></div>
                                                </div>
                                                <!-- service content end -->
                                            </div>
                                            <!-- service end -->
                                        </div>
                                @endforeach
                                <!-- slide -->
                                </div>

                            </div>
                            <!-- col end -->

                        </div>

                    </div>
                    <!-- row end -->

                </div>
                <!-- container end -->

                <!-- container -->
                <div class="container-fluid">

                    <!-- row -->
                    <div class="row">

                        <!-- col -->
                        <div class="col-lg-12">

                            <!-- section title -->
                            <div class="art-section-title">
                                <!-- title frame -->
                                <div class="art-title-frame">
                                    <!-- title -->

                                    <h4>Rəy<a href="#"><i class="la la-file-text"></i></a></h4>
                                </div>
                                <!-- title frame end -->
                            </div>
                            <!-- section title end -->

                        </div>

                        <!-- col end -->

                        <!-- col -->
                        <div class="col-lg-12">

                            <!-- slider container -->
                            <div class="swiper-container art-testimonial-slider" style="overflow: visible">
                                <!-- slider wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- slide -->
                                    <div class="swiper-slide">

                                        <!-- testimonial -->
                                        <div class="art-a art-testimonial">
                                            <!-- testimonial body -->
                                            <div class="testimonial-body">
                                                <!-- photo -->
                                                <img class="art-testimonial-face"
                                                     src="pages/img/testimonials/face-1.jpg" alt="face">
                                                <!-- name -->
                                                <h5>Paul Trueman</h5>
                                                <div class="art-el-suptitle mb-15">Template author</div>
                                                <!-- text -->
                                                <div class="mb-15">Working with Artur has been a pleasure. Better
                                                    yet - I alerted them of a minor issue before going to sleep. The
                                                    issue was fixed the next morning. I couldn't ask for better
                                                    support. Thank you Artur!
                                                    This is easily a 5 star freelancer.
                                                </div>
                                            </div>
                                            <!-- testimonial body end -->
                                            <!-- testimonial footer -->
                                            <div class="art-testimonial-footer">
                                                <div class="art-left-side">
                                                    <!-- star rate -->
                                                    <ul class="art-star-rate">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <!-- star rate end -->
                                                </div>
                                                <div class="art-right-side">

                                                </div>
                                            </div>
                                            <!-- testimonial footer end -->
                                        </div>
                                        <!-- testimonial end -->

                                    </div>
                                    <!-- slide end -->

                                    <!-- slide -->
                                    <div class="swiper-slide">

                                        <!-- testimonial -->
                                        <div class="art-a art-testimonial">
                                            <!-- testimonial body -->
                                            <div class="testimonial-body">
                                                <!-- photo -->
                                                <img class="art-testimonial-face"
                                                     src="pages/img/testimonials/face-2.jpg" alt="face">
                                                <!-- name -->
                                                <h5>Paul Trueman</h5>
                                                <div class="art-el-suptitle mb-15">Template author</div>
                                                <!-- text -->
                                                <div class="mb-15">Working with Artur has been a pleasure. Better
                                                    yet - I alerted them of a minor issue before going to sleep. The
                                                    issue was fixed the next morning. I couldn't ask for better
                                                    support. Thank you Artur!
                                                    This is easily a 5 star freelancer.
                                                </div>
                                            </div>
                                            <!-- testimonial body end -->
                                            <!-- testimonial footer -->
                                            <div class="art-testimonial-footer">
                                                <div class="art-left-side">
                                                    <!-- star rate -->
                                                    <ul class="art-star-rate">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="art-empty-item"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <!-- star rate end -->
                                                </div>
                                                <div class="art-right-side">

                                                </div>
                                            </div>
                                            <!-- testimonial footer end -->
                                        </div>
                                        <!-- testimonial end -->

                                    </div>
                                    <!-- slide end -->

                                    <!-- slide -->
                                    <div class="swiper-slide">

                                        <!-- testimonial -->
                                        <div class="art-a art-testimonial">
                                            <!-- testimonial body -->
                                            <div class="testimonial-body">
                                                <!-- photo -->
                                                <img class="art-testimonial-face"
                                                     src="pages/img/testimonials/face-3.jpg" alt="face">
                                                <!-- name -->
                                                <h5>Paul Trueman</h5>
                                                <div class="art-el-suptitle mb-15">Template author</div>
                                                <!-- text -->
                                                <div class="mb-15">Working with Artur has been a pleasure. Better
                                                    yet - I alerted them of a minor issue before going to sleep. The
                                                    issue was fixed the next morning. I couldn't ask for better
                                                    support. Thank you Artur!
                                                    This is easily a 5 star freelancer.
                                                </div>
                                            </div>
                                            <!-- testimonial body end -->
                                            <!-- testimonial footer -->
                                            <div class="art-testimonial-footer">
                                                <div class="art-left-side">
                                                    <!-- star rate -->
                                                    <ul class="art-star-rate">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <!-- star rate end -->
                                                </div>
                                                <div class="art-right-side">

                                                </div>
                                            </div>
                                            <!-- testimonial footer end -->
                                        </div>
                                        <!-- testimonial end -->

                                    </div>
                                    <!-- slide end -->

                                    <!-- slide -->
                                    <div class="swiper-slide">

                                        <!-- testimonial -->
                                        <div class="art-a art-testimonial">
                                            <!-- testimonial body -->
                                            <div class="testimonial-body">
                                                <!-- photo -->
                                                <img class="art-testimonial-face"
                                                     src="pages/img/testimonials/face-4.jpg" alt="face">
                                                <!-- name -->
                                                <h5>Paul Trueman</h5>
                                                <div class="art-el-suptitle mb-15">Template author</div>
                                                <!-- text -->
                                                <div class="mb-15">Working with Artur has been a pleasure. Better
                                                    yet - I alerted them of a minor issue before going to sleep. The
                                                    issue was fixed the next morning. I couldn't ask for better
                                                    support. Thank you Artur!
                                                    This is easily a 5 star freelancer.
                                                </div>
                                            </div>
                                            <!-- testimonial body end -->
                                            <!-- testimonial footer -->
                                            <div class="art-testimonial-footer">
                                                <div class="art-left-side">
                                                    <!-- star rate -->
                                                    <ul class="art-star-rate">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <!-- star rate end -->
                                                </div>
                                                <div class="art-right-side">

                                                </div>
                                            </div>
                                            <!-- testimonial footer end -->
                                        </div>
                                        <!-- testimonial end -->

                                    </div>
                                    <!-- slide end -->

                                </div>
                                <!-- slider wrapper end -->
                            </div>
                            <!-- slider container end -->

                        </div>
                        <!-- col end -->

                        <!-- col -->
                        <div class="col-lg-12">

                            <!-- slider navigation -->
                            <div class="art-slider-navigation">

                                <!-- left side -->
                                <div class="art-sn-left">

                                    <!-- slider pagination -->
                                    <div class="swiper-pagination"></div>

                                </div>
                                <!-- left side end -->

                                <!-- right side -->
                                <div class="art-sn-right">

                                    <!-- slider navigation -->
                                    <div class="art-slider-nav-frame">
                                        <!-- prev -->
                                        <div class="art-slider-nav art-testi-swiper-prev"><i
                                                class="fas fa-chevron-left"></i></div>
                                        <!-- next -->
                                        <div class="art-slider-nav art-testi-swiper-next"><i
                                                class="fas fa-chevron-right"></i></div>
                                    </div>
                                    <!-- slider navigation -->

                                </div>
                                <!-- right side end -->

                            </div>
                            <!-- slider navigation end -->

                        </div>
                        <!-- col end -->

                    </div>
                    <!-- row end -->

                </div>
                <!-- container end -->

                <!-- container -->
                <div class="container-fluid">

                    <!-- row -->
                    <div class="row">

                        <!-- col -->
                        <div class="col-6 col-lg-3">
                            <!-- brand -->
                            <img class="art-brand" src="pages/img/brands/1.png" alt="brand">
                        </div>
                        <!-- col end -->

                        <!-- col -->
                        <div class="col-6 col-lg-3">
                            <!-- brand -->
                            <img class="art-brand" src="pages/img/brands/2.png" alt="brand">
                        </div>
                        <!-- col end -->

                        <!-- col -->
                        <div class="col-6 col-lg-3">
                            <!-- brand -->
                            <img class="art-brand" src="pages/img/brands/3.png" alt="brand">
                        </div>
                        <!-- col end -->

                        <!-- col -->
                        <div class="col-6 col-lg-3">
                            <!-- brand -->
                            <img class="art-brand" src="pages/img/brands/1.png" alt="brand">
                        </div>
                        <!-- col end -->

                    </div>
                    <!-- row end -->

                </div>
                <!-- container end -->

                <!-- container -->
                <div class="container-fluid">

                    <!-- footer -->
                    <footer>
                        <!-- copyright -->
                        <div>© 2020 Artur Carter</div>
                        <!-- author ( Please! Do not delete it. You are awesome! :) -->
                        <div>Template author:&#160; <a href="https://themeforest.net/user/millerdigitaldesign"
                                                       target="_blank">Nazar Miller</a></div>
                    </footer>
                    <!-- footer end -->

                </div>
                <!-- container end -->

            </div>
            <!-- scroll frame end -->

        </div>
        <!-- swup container end -->

    </div>
@endsection

@section('pages.js')
    <!-- jquery js -->
    <script src="pages/js/plugins/jquery.min.js"></script>
    <!-- anime js -->
    <script src="pages/js/plugins/anime.min.js"></script>
    <!-- swiper js -->
    <script src="pages/js/plugins/swiper.min.js"></script>
    <!-- progressbar js -->
    <script src="pages/js/plugins/progressbar.min.js"></script>
    <!-- smooth scrollbar js -->
    <script src="pages/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- overscroll js -->
    <script src="pages/js/plugins/overscroll.min.js"></script>
    <!-- typing js -->
    <script src="pages/js/plugins/typing.min.js"></script>
    <!-- isotope js -->
    <script src="pages/js/plugins/isotope.min.js"></script>
    <!-- fancybox js -->
    <script src="pages/js/plugins/fancybox.min.js"></script>
    <!-- swup js -->
    <script src="pages/js/plugins/swup.min.js"></script>

    <!-- main js -->
    <script src="pages/js/main.js"></script>
@endsection
