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
        <link rel="stylesheet" href="{{ asset('pages/css/plugins/font-awesome.min.css') }}">
        <!-- swiper css -->
        <link rel="stylesheet" href="{{ asset('pages/css/plugins/swiper.min.css') }}">
        <!-- fancybox css -->
        <link rel="stylesheet" href="{{ asset('pages/css/plugins/fancybox.min.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('pages/css/style.css') }}">

        <title>About</title>
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
                        @foreach($abouts as $about)
                        <div class="col-lg-6">

                            <!-- section title -->
                            <div class="art-section-title">
                                <!-- title frame -->
                                <div class="art-title-frame">
                                    <!-- title -->
                                    <h4>{!! $about->title !!}</h4>
                                </div>
                                <!-- title frame end -->
                            </div>
                            <!-- section title end -->

                            <!-- timeline -->
                            <div class="art-timeline art-gallery">
                                <div class="art-timeline-item">
                                    <div class="art-timeline-mark-light"></div>
                                    <div class="art-timeline-mark"></div>

                                    <div class="art-a art-timeline-content">
                                        <div class="art-card-header">
                                            <div class="art-left-side">
                                                <h5>{!! $about->description !!}</h5>
                                                <div class="art-el-suptitle mb-15">{!! $about->job !!}</div>
                                            </div>
                                            <div class="art-right-side">
                                                <span class="art-date">{{\Illuminate\Support\Carbon::parse($about->start_date)->format('M Y') }} - {{\Illuminate\Support\Carbon::parse($about->end_date)->format('M Y') }}</span>
                                            </div>
                                        </div>

                                        <p>{!! $about->text !!}</p>
                                    </div>
                                </div>


                            </div>
                            <!-- timeline end -->

                        </div>
                    @endforeach


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
    <script src="{{ asset('pages/js/plugins/jquery.min.js') }}"></script>
    <!-- anime js -->
    <script src="{{ asset('pages/js/plugins/anime.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('pages/js/plugins/swiper.min.js') }}"></script>
    <!-- progressbar js -->
    <script src="{{ asset('pages/js/plugins/progressbar.min.js') }}"></script>
    <!-- smooth scrollbar js -->
    <script src="{{ asset('pages/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <!-- overscroll js -->
    <script src="{{ asset('pages/js/plugins/overscroll.min.js') }}"></script>
    <!-- typing js -->
    <script src="{{ asset('pages/js/plugins/typing.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('pages/js/plugins/isotope.min.js') }}"></script>
    <!-- fancybox js -->
    <script src="{{ asset('pages/js/plugins/fancybox.min.js') }}"></script>
    <!-- swup js -->
    <script src="{{ asset('pages/js/plugins/swup.min.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('pages/js/main.js') }}"></script>
@endsection
