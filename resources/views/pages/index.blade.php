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
        <link rel="stylesheet" href="{{ asset('pages/css/plugins/font-awesome.min.css') }}">
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
                    <div class="row p-60-0 p-lg-30-0 p-md-15-0">
                        <!-- col -->
                        <div class="col-lg-12">

                            <!-- banner -->
                            <div class="art-a art-banner" style="background-image: url({{asset('pages/img/bg.jpg')}})">
                                <!-- banner back -->
                                <div class="art-banner-back"></div>
                                <!-- banner dec -->
                                <div class="art-banner-dec"></div>
                                <!-- banner overlay -->
                                <div class="art-banner-overlay">
                                    <!-- main title -->
                                    <div class="art-banner-title">
                                        <!-- title -->
                                        <h1 class="mb-15">Asgarov Anvar <br>Web Developer!</h1>
                                        <!-- suptitle -->
                                        <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt; I am <span
                                                class="txt-rotate" data-period="2000"
                                                data-rotate='[ "web developer." ]'></span>&lt;/<i>code</i>&gt;
                                        </div>
                                        <div class="art-buttons-frame">
                                            <!-- button -->
                                            <a href="{{ route('comments') }}" class="art-btn art-btn-md"><span>Comment</span></a>
                                        </div>
                                    </div>
                                    <!-- main title end -->
                                    <!-- photo -->
{{--                                    <img src="pages/img/face-2.png" class="art-banner-photo" alt="Your Name">--}}
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
                                <h6>Service</h6>
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
                                    <span class="art-counter">{{ $projects->count() }}</span>
                                </div>
                                <!-- counter end -->
                                <!-- title -->
                                <h6>Project</h6>
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
                                    <span class="art-counter">{{$comments->count()}}</span>
                                </div>
                                <!-- counter end -->
                                <!-- title -->
                                <h6>Comment</h6>
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
                                    <span class="art-counter">{{$blogs->count()}}</span>
                                </div>
                                <!-- counter end -->
                                <!-- title -->
                                <h6>Blog</h6>
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
                                                <div class="art-buttons-frame">
                                                    <!-- button -->
                                                    <a href="{{ route('contact') }}" class="art-btn art-btn-md"><span>Contact</span></a>
                                                </div>
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
                                    @foreach($projects as $project)
                                        <div class="swiper-slide">
                                            <!-- service -->
                                            <div class="art-a art-service-icon-box">
                                                <!-- service content -->
                                                <a href="{!! $project->url !!}" class="art-a art-portfolio-item-frame art-square">
                                                    <!-- img -->
                                                    <img src="{{ asset( \Illuminate\Support\Facades\Storage::url($project->image)) }}" alt="item">
                                                    <!-- zoom icon -->
{{--                                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>--}}
                                                </a>
                                                <div class="art-service-ib-content">
                                                    <!-- title -->
                                                    <h5 class="mb-15">{!! $project->title !!}</h5>
                                                    <div class="mb-15">{!! $project->text !!}</div>
                                                    <!-- button -->
{{--                                                    <div class="art-buttons-frame">--}}
{{--                                                        <!-- button -->--}}
{{--                                                        <a href=" {!! $project->url !!} " class="art-btn art-btn-md"><span>Read more</span></a>--}}
{{--                                                    </div>--}}
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

                                    <h4>Comment<a href="#"><i class="la la-file-text"></i></a></h4>
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
                                    @foreach($comments as $comment)
                                    <div class="swiper-slide">

                                        <!-- testimonial -->
                                        <div class="art-a art-testimonial">
                                            <!-- testimonial body -->

                                            <div class="testimonial-body">
                                                <!-- photo -->
                                                <img class="art-testimonial-face"
                                                     src="pages/img/users.png" alt="face">
                                                <!-- name -->
                                                <h5>{!! $comment->name !!}</h5>
                                                <div class="art-el-suptitle mb-15">{!! $comment->work !!}</div>
                                                <!-- text -->
                                                <div class="mb-15">
                                                    {!! $comment->text !!}
                                                </div>
                                            </div>
                                            <!-- testimonial body end -->

                                        </div>
                                        <!-- testimonial end -->

                                    </div>
                                    <!-- slide end -->
                                    @endforeach


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
    <script src="{{asset('pages/js/plugins/jquery.min.js')}}"></script>
    <!-- anime js -->
    <script src="{{asset('pages/js/plugins/anime.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('pages/js/plugins/swiper.min.js')}}"></script>
    <!-- progressbar js -->
    <script src="{{asset('pages/js/plugins/progressbar.min.js')}}"></script>
    <!-- smooth scrollbar js -->
    <script src="{{asset('pages/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <!-- overscroll js -->
    <script src="{{asset('pages/js/plugins/overscroll.min.js')}}"></script>
    <!-- typing js -->
    <script src="{{asset('pages/js/plugins/typing.min.js')}}"></script>
    <!-- isotope js -->
    <script src="{{asset('pages/js/plugins/isotope.min.js')}}"></script>
    <!-- fancybox js -->
    <script src="{{asset('pages/js/plugins/fancybox.min.js')}}"></script>
    <!-- swup js -->
    <script src="{{asset('pages/js/plugins/swup.min.js')}}"></script>

    <!-- main js -->
    <script src="{{asset('pages/js/main.js')}}"></script>
@endsection
