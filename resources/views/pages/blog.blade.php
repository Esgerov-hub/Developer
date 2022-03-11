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

        <style type="text/css">
            .read-more-show {
                cursor: pointer;
                color: #ed8323;
            }

            .read-more-hide {
                cursor: pointer;
                color: #ed8323;
            }

            .hide_content {
                display: none;
            }
        </style>
        <title>Blog</title>
    </head>
@endsection
@section('pages.body')
    <div class="art-content">
        <!-- curtain -->
        <div class="art-curtain"></div>
        <!-- top background -->
        <div class="art-top-bg" style="background-image: url({{ asset('pages/img/bg.jpg') }})">
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
                                    <h4>Blogs</h4>
                                </div>
                                <!-- title frame end -->
                            </div>
                            <!-- section title end -->
                        </div>
                        <!-- col end -->
                        <!-- col -->
                        @foreach($blogs as $blog)
                            <div class="col-lg-4">

                                <!-- blog post card -->
                                <div class="art-a art-blog-card">
                                    <!-- post cover -->
                                    <a href="{{ route('blogPost',$blog->title) }}" class="art-port-cover">
                                        <!-- img -->

                                        <img  src="{{ asset(\Illuminate\Support\Facades\Storage::url($blog->image)) }}"
                                             alt="blog post">

                                    </a>
                                    <!-- post cover end -->
                                    <!-- post description -->
                                    <div class="art-post-description">
                                        <!-- title -->
                                        <a href="{{ route('blogPost',$blog->title) }}">
                                            <h5 class="mb-15">{!! $blog->title !!} </h5>{!! $blog->reads !!}
                                        </a>
                                        <!-- text -->
                                    {{--                                    <div class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet!</div>--}}
                                    <!-- link -->
                                        <a href="{{ route('blogPost',$blog->title) }}" class="art-link art-color-link art-w-chevron">Read
                                            more</a>
                                    </div>
                                    <!-- post description end -->
                                </div>
                                <!-- blog post card end -->
                            </div>

                        @endforeach
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

                            <!-- pagination -->
                            @if ($blogs->hasPages())
                            <div class="art-a art-pagination">
                                <!-- button -->
                                @if ($blogs->onFirstPage())
                                    <a
                                       class="disabled"><span>Previous page</span></a>
                                @else
                                    <a href="{{ $blogs->previousPageUrl() }}" rel="prev"
                                       class="art-link art-color-link art-w-chevron art-left-link"><span>Previous page</span></a>
                                @endif
                                <div class="art-pagination-center art-m-hidden">
                                    @if (is_array($blogs))
                                        @foreach ($blogs as $page => $url)
                                            @if ($page == $paginator->currentPage())
                                                <li class="active my-active"><span>{{ $page }}</span></li>
                                            @else
                                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach
                                    @endif
                                        <div>© <?php echo date('d.m.Y')?> All rights reserved</div>
                                </div>
                                <!-- button -->
                                @if ($blogs->hasMorePages())
                                <a href="{{ $blogs->nextPageUrl() }}"
                                   class="art-link art-color-link art-w-chevron"><span>Next page</span></a>
                                @else
                                    <a class="disabled"
                                       class="art-link art-color-link art-w-chevron"><span>Next page</span></a>
                                @endif
                            </div>
                        @endif
                        <!-- pagination end -->
                        </div>
                        <!-- col end -->
                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
                <!-- container -->
{{--                <div class="container-fluid">--}}
{{--                    <!-- row -->--}}
{{--                    <div class="row">--}}
{{--                        <!-- col -->--}}
{{--                        <div class="col-6 col-lg-3">--}}
{{--                            <!-- brand -->--}}
{{--                            <img class="art-brand" src="pages/img/brands/1.png" alt="brand">--}}
{{--                        </div>--}}
{{--                        <!-- col end -->--}}
{{--                        <!-- col -->--}}
{{--                        <div class="col-6 col-lg-3">--}}
{{--                            <!-- brand -->--}}
{{--                            <img class="art-brand" src="pages/img/brands/2.png" alt="brand">--}}
{{--                        </div>--}}
{{--                        <!-- col end -->--}}
{{--                        <!-- col -->--}}
{{--                        <div class="col-6 col-lg-3">--}}
{{--                            <!-- brand -->--}}
{{--                            <img class="art-brand" src="pages/img/brands/3.png" alt="brand">--}}
{{--                        </div>--}}
{{--                        <!-- col end -->--}}
{{--                        <!-- col -->--}}
{{--                        <div class="col-6 col-lg-3">--}}
{{--                            <!-- brand -->--}}
{{--                            <img class="art-brand" src="pages/img/brands/1.png" alt="brand">--}}
{{--                        </div>--}}
{{--                        <!-- col end -->--}}
{{--                    </div>--}}
{{--                    <!-- row end -->--}}
{{--                </div>--}}
                <!-- container end -->
                <!-- container -->
{{--                <div class="container-fluid">--}}
{{--                    <!-- footer -->--}}
{{--                    <footer>--}}
{{--                        <!-- copyright -->--}}
{{--                        <div>© <?php echo date('d.m.Y')?> All rights reserved</div>--}}
{{--                    </footer>--}}
{{--                    <!-- footer end -->--}}
{{--                </div>--}}
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
    <script type="text/javascript">
        // Hide the extra content initially:
        $('.read-more-content').addClass('hide_content')
        $('.read-more-show, .read-more-hide').removeClass('hide_content')

        // Set up the toggle effect:
        $('.read-more-show').on('click', function (e) {
            $(this).next('.read-more-content').removeClass('hide_content');
            $(this).addClass('hide_content');
            e.preventDefault();
        });
        $('.read-more-hide').on('click', function (e) {
            var p = $(this).parent('.read-more-content');
            p.addClass('hide_content');
            p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
            e.preventDefault();
        });
    </script>
@endsection
