@extends('pages.app')
@section('pages.css')
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- color of address bar in mobile browser -->
        <meta name="theme-color" content="#2B2B35">
        <!-- favicon  -->
        <link rel="shortcut icon" href="pages/img/thumbnail.ico" type="image/x-icon">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="pages/css/plugins/bootstrap.min.css">
        <!-- font awesome css -->
        <link rel="stylesheet" href="pages/css/plugins/font-awesome.min.css">
        <!-- swiper css -->
        <link rel="stylesheet" href="pages/css/plugins/swiper.min.css">
        <!-- fancybox css -->
        <link rel="stylesheet" href="pages/css/plugins/fancybox.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="pages/css/style.css">

        <title>Arter</title>
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
                    <div class="row p-30-0">

                        <!-- col -->
                        <div class="col-lg-12">

                            <!-- filter -->
                            <div class="art-filter mb-30">
                                <!-- filter link -->
                                <a href="#" data-filter="*" class="art-link art-current">All Categories</a>
                                <!-- filter link -->
                                <a href="#" data-filter=".webTemplates" class="art-link">Web Templates</a>
                                <!-- filter link -->
                                <a href="#" data-filter=".logos" class="art-link">Logos</a>
                                <!-- filter link -->
                                <a href="#" data-filter=".drawings" class="art-link">Drawings</a>
                                <!-- filter link -->
                                <a href="#" data-filter=".ui" class="art-link">UI Elements</a>
                            </div>
                            <!-- filter end -->

                        </div>
                        <!-- col end -->

                        <div class="art-grid art-grid-2-col art-gallery">

                            <!-- grid item -->
                            <div class="art-grid-item webTemplates">
                                <!-- grid item frame -->
                                <a data-fancybox="gallery" href="pages/img/works/original-size/1.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                    <!-- img -->
                                    <img src="pages/img/works/thumbnail/1.jpg" alt="item">
                                    <!-- zoom icon -->
                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                </a>
                                <!-- grid item frame end -->
                                <!-- description -->
                                <div class="art-item-description">
                                    <!-- title -->
                                    <h5 class="mb-15">Project title</h5>
                                    <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                                    <!-- button -->
                                    <a href="portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                                </div>
                                <!-- description end -->

                            </div>
                            <!-- grid item end -->

                            <!-- grid item -->
                            <div class="art-grid-item logos">

                                <!-- grid item frame -->
                                <a data-fancybox="gallery" href="pages/img/works/original-size/2.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                    <!-- img -->
                                    <img src="pages/img/works/thumbnail/2.jpg" alt="item">
                                    <!-- zoom icon -->
                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                </a>
                                <!-- grid item frame end -->
                                <!-- description -->
                                <div class="art-item-description">
                                    <!-- title -->
                                    <h5 class="mb-15">Project title</h5>
                                    <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                                    <!-- button -->
                                    <a href="portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                                </div>
                                <!-- description end -->

                            </div>
                            <!-- grid item end -->

                            <!-- grid item -->
                            <div class="art-grid-item drawings">

                                <!-- grid item frame -->
                                <a data-fancybox="gallery" href="pages/img/works/original-size/3.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                    <!-- img -->
                                    <img src="pages/img/works/thumbnail/3.jpg" alt="item">
                                    <!-- zoom icon -->
                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                </a>
                                <!-- grid item frame end -->
                                <!-- description -->
                                <div class="art-item-description">
                                    <!-- title -->
                                    <h5 class="mb-15">Project title</h5>
                                    <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                                    <!-- button -->
                                    <a href="portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                                </div>
                                <!-- description end -->

                            </div>
                            <!-- grid item end -->

                            <!-- grid item -->
                            <div class="art-grid-item ui">

                                <!-- grid item frame -->
                                <a data-fancybox="gallery" href="pages/img/works/original-size/4.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                    <!-- img -->
                                    <img src="pages/img/works/thumbnail/4.jpg" alt="item">
                                    <!-- zoom icon -->
                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                </a>
                                <!-- grid item frame end -->
                                <!-- description -->
                                <div class="art-item-description">
                                    <!-- title -->
                                    <h5 class="mb-15">Project title</h5>
                                    <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                                    <!-- button -->
                                    <a href="portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                                </div>
                                <!-- description end -->

                            </div>
                            <!-- grid item end -->

                            <!-- grid item -->
                            <div class="art-grid-item webTemplates">

                                <!-- grid item frame -->
                                <a data-fancybox="gallery" href="pages/img/works/original-size/5.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                    <!-- img -->
                                    <img src="pages/img/works/thumbnail/5.jpg" alt="item">
                                    <!-- zoom icon -->
                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                </a>
                                <!-- grid item frame end -->
                                <!-- description -->
                                <div class="art-item-description">
                                    <!-- title -->
                                    <h5 class="mb-15">Project title</h5>
                                    <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                                    <!-- button -->
                                    <a href="portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                                </div>
                                <!-- description end -->

                            </div>
                            <!-- grid item end -->

                            <!-- grid item -->
                            <div class="art-grid-item logos">

                                <!-- grid item frame -->
                                <a data-fancybox="gallery" href="pages/img/works/original-size/6.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                    <!-- img -->
                                    <img src="pages/img/works/thumbnail/6.jpg" alt="item">
                                    <!-- zoom icon -->
                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                </a>
                                <!-- grid item frame end -->
                                <!-- description -->
                                <div class="art-item-description">
                                    <!-- title -->
                                    <h5 class="mb-15">Project title</h5>
                                    <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                                    <!-- button -->
                                    <a href="portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                                </div>
                                <!-- description end -->

                            </div>
                            <!-- grid item end -->

                            <!-- grid item -->
                            <div class="art-grid-item drawings">

                                <!-- grid item frame -->
                                <a data-fancybox="gallery" href="pages/img/works/original-size/7.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                    <!-- img -->
                                    <img src="pages/img/works/thumbnail/7.jpg" alt="item">
                                    <!-- zoom icon -->
                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                </a>
                                <!-- grid item frame end -->
                                <!-- description -->
                                <div class="art-item-description">
                                    <!-- title -->
                                    <h5 class="mb-15">Project title</h5>
                                    <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                                    <!-- button -->
                                    <a href="portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                                </div>
                                <!-- description end -->

                            </div>
                            <!-- grid item end -->

                            <!-- grid item -->
                            <div class="art-grid-item ui">

                                <!-- grid item frame -->
                                <a data-fancybox="gallery" href="pages/img/works/original-size/8.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                    <!-- img -->
                                    <img src="pages/img/works/thumbnail/8.jpg" alt="item">
                                    <!-- zoom icon -->
                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                </a>
                                <!-- grid item frame end -->
                                <!-- description -->
                                <div class="art-item-description">
                                    <!-- title -->
                                    <h5 class="mb-15">Project title</h5>
                                    <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                                    <!-- button -->
                                    <a href="portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                                </div>
                                <!-- description end -->

                            </div>
                            <!-- grid item end -->

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
                        <div>Template author:&#160; <a href="https://themeforest.net/user/millerdigitaldesign" target="_blank">Nazar Miller</a></div>
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
