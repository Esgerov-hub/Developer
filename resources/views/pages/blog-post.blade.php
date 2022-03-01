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

        <title>{!! $blogs->title !!}</title>
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
                        <div class="col-lg-12">

                            <!-- section title -->
                            <div class="art-section-title">
                                <!-- title frame -->
                                <div class="art-title-frame">
                                    <!-- title -->
                                    <h4>{!! $blogs->title !!}</h4>
                                </div>
                                <!-- title frame end -->
                                <!-- right frame -->

                                <!-- right frame end -->
                            </div>
                            <!-- section title end -->

                        </div>
                        <!-- col end -->

                        <!-- col -->

                        <!-- col end -->

                        <!-- col -->
                        <div class="col-lg-8">

                            <!-- post text -->
                            <div class="art-a art-card">
                                <p class="art-lg-text art-white">
                                    <i>
                                        {!! $blogs->text !!}
                                    </i>
                                </p>


                            </div>
                            <!-- post text end -->

                        </div>
                        <!-- col end -->

                        <!-- col -->
                        <div class="col-lg-4">

                            <div class="art-a art-card">
                                <!-- table -->
                                <div class="art-table p-15-15">
                                    <ul>
                                        <li>
                                            <h6>Date:</h6><span>{{$blogs->created_at->format('d M Y')}}</span>
                                        </li>
                                        <li>
                                            <h6>Author:</h6><span>{!! $blogs->name !!}</span>
                                        </li>

                                    </ul>
                                </div>
                                <!-- table end -->
                            </div>

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
                        <div class="col-lg-12">

                            <!-- section title -->
                            <div class="art-section-title">
                                <!-- title frame -->
                                <div class="art-title-frame">
                                    <!-- title -->
                                    <h4>Similar posts</h4>
                                </div>
                                <!-- title frame end -->
                            </div>
                            <!-- section title end -->

                        </div>
                        <!-- col end -->

                        <!-- col -->
                        <div class="col-lg-12">

                            <!-- slider container -->
                            <div class="swiper-container art-blog-slider" style="overflow: visible">
                                <!-- slider wrapper -->
                                <div class="swiper-wrapper">
                                    @foreach($get_blogs as $blog)
                                    <!-- slide -->
                                    <div class="swiper-slide">

                                        <!-- blog post card -->
                                        <div class="art-a art-blog-card">
                                            <!-- post cover -->
                                            <a href="{{route('blogPost',$blog->title)}}" class="art-port-cover">
                                                <!-- img -->
                                                <img src="{{\Illuminate\Support\Facades\Storage::url($blog->image)}}" alt="blog post">
                                            </a>
                                            <!-- post cover end -->
                                            <!-- post description -->
                                            <div class="art-post-description">
                                                <!-- title -->
                                                <a href="{{route('blogPost',$blog->title)}}">
                                                    <h5 class="mb-15">{{$blog->title}}</h5>
                                                </a>
                                                <!-- text -->

                                                <!-- link -->
                                                <a href="{{route('blogPost',$blog->title)}}" class="art-link art-color-link art-w-chevron">Read more</a>
                                            </div>
                                            <!-- post description end -->
                                        </div>
                                        <!-- blog post card end -->

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
                                        <div class="art-slider-nav art-blog-swiper-prev"><i class="fas fa-chevron-left"></i></div>
                                        <!-- next -->
                                        <div class="art-slider-nav art-blog-swiper-next"><i class="fas fa-chevron-right"></i></div>
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

                    <!-- footer -->
                    <footer>
                        <!-- copyright -->
                        <div>© <?php echo date('d.m.Y')?> All rights reserved</div>
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
