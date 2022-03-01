@extends('pages.app')
@section('pages.css')
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- color of address bar in mobile browser -->
        <meta name="theme-color" content="#2B2B35">
        <!-- favicon  -->
        <link rel="shortcut icon" href="{{ asset('pages/img/ss.png') }}" type="image/x-icon">
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

        <title>Service</title>
    </head>
@endsection
@section('pages.body')
    <div class="art-content">

        <!-- curtain -->
        <div class="art-curtain"></div>

        <!-- top background -->
        <div class="art-top-bg" style="background-image: url({{asset('pages/img/bg.jpg')}})">
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
                        @foreach($services as $service)
                        <div class="col-lg-4 col-md-6">

                            <!-- service -->
                            <div class="art-a art-service-icon-box">
                                <!-- service content -->
                                <div class="art-service-ib-content">
                                    <!-- title -->
                                    <h5 class="mb-15">{{$service->title}}</h5>
                                    <!-- text -->
                                    <div class="mb-15">{!! $service->text !!}</div>
                                    <!-- button -->
                                    <div class="art-buttons-frame"><a href="{{ route('contact') }}" class="art-link art-color-link art-w-chevron">Contact</a></div>
                                </div>
                                <!-- service content end -->
                            </div>
                            <!-- service end -->

                        </div>
                        <!-- col end -->
                        @endforeach
                    </div>
                    <!-- row end -->

                </div>
                <!-- container end -->



                <!-- container -->
                <div class="container-fluid">

                    <!-- footer -->
                    <footer>
                        <!-- copyright -->
                        <div>© <?php echo date('d.m.Y')?> All rights reserved</div>
                        <!-- author ( Please! Do not delete it. You are awesome! :) -->

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
