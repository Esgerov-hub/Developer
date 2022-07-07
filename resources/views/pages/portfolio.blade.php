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
        <link rel="stylesheet" href="{{asset("pages/css/plugins/bootstrap.min.css")}}">
        <!-- font awesome css -->
        <link rel="stylesheet" href="{{asset("pages/css/plugins/font-awesome.min.css")}}">
        <!-- swiper css -->
        <link rel="stylesheet" href="{{asset("pages/css/plugins/swiper.min.css")}}">
        <!-- fancybox css -->
        <link rel="stylesheet" href="{{asset("pages/css/plugins/fancybox.min.css")}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset("pages/css/style.css")}}">

        <title>Project</title>
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

                            <!-- filter -->
                            <div class="art-filter mb-30">
                                <!-- filter link -->
                                <h4>My Project</h4>
                                <!-- filter link -->
                            </div>
                            <!-- filter end -->

                        </div>
                        <!-- col end -->

                        <div class="art-grid art-grid-3-col art-gallery">

                            <!-- grid item -->
                            @foreach($projects as $project)
                            <div class="art-grid-item">
                                <!-- grid item frame -->
                                <a  href="{!! $project->url !!}"  target="_blank" class="art-a art-portfolio-item-frame art-square">
                                    <!-- img -->
                                    <img src="{{ asset( \Illuminate\Support\Facades\Storage::url($project->image)) }}" alt="item" >
                                    <!-- zoom icon -->

                                </a>
                                <!-- grid item frame end -->
                                <!-- description -->
                                <div class="art-item-description">
                                    <!-- title -->
                                    <h5 class="mb-15">{!! $project->title !!}</h5>
                                    <div class="mb-15">{!! $project->text !!}</div>
                                    <!-- button -->
                                    <a href="{!! $project->url !!}" class="art-link art-color-link art-w-chevron">Read more</a>
                                </div>
                                <!-- description end -->

                            </div>
                        @endforeach
                            <!-- grid item end -->

                        </div>

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
