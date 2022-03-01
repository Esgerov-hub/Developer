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

        <title>Comment</title>
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
                        <div class="col-lg-4">
                            <!-- contact card -->
                            <div class="art-a art-card">
                                <div class="art-table p-15-15">
                                    <ul>
                                        <li>
                                            <h6>Note:</h6>
                                        </li>
                                        <li>
                                            <p>
                                                Words must be written in English letters
                                            </p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- contact card end -->

                        </div>
                        <!-- col end -->

                        <!-- col -->
                        <div class="col-lg-12">

                            <!-- section title -->
                            <div class="art-section-title">
                                <!-- title frame -->
                                <div class="art-title-frame">
                                    <!-- title -->
                                    <h4>To Express Opinion</h4>
                                </div>
                                <!-- title frame end -->
                            </div>
                            <!-- section title end -->

                            <!-- contact form frame -->
                            <div class="art-a art-card">

                                <!-- contact form -->
                                <form  class="art-contact-form" action="{{ route('commentsPost') }}" method="POST">
                                @csrf
                                <!-- form field -->

                                    <div class="art-form-field">
                                        <!-- name input -->
                                        <input id="name" name="name" class="art-input" type="text" placeholder="Name" required>
                                        <!-- label -->
                                        <label for="name"><i class="fas fa-user"></i></label>
                                    </div>
                                    <!-- form field end -->
                                    <!-- form field -->
                                    <div class="art-form-field">
                                        <!-- email input -->
                                        <input id="work" name="work" class="art-input" type="text" placeholder="Work" required>
                                        <!-- label -->
                                        <label for="work"><i class="fas fa-business-time"></i></label>
                                    </div>
                                    <!-- form field end -->
                                    <!-- form field -->
                                    <div class="art-form-field">
                                        <!-- message textarea -->
                                        <textarea id="message" name="text" class="art-input" placeholder="Message" required></textarea>
                                        <!-- label -->
                                        <label for="message"><i class="far fa-envelope"></i></label>
                                    </div>
                                    <!-- form field end -->
                                    <!-- button -->
                                    <div class="art-submit-frame">
                                        <button class="art-btn art-btn-md art-submit" type="submit"><span>Send comment</span></button>
                                        <!-- success -->
                                        <div class="art-success">Success <i class="fas fa-check"></i></div>
                                    </div>
                                </form>
                                <!-- contact form end -->

                            </div>
                            <!-- contact form frame end -->

                        </div>
                        <!-- col end -->

                    </div>
                    <!-- row end -->

                </div>
                <!-- container end -->

                <!-- container -->

                <!-- container end -->

                <!-- footer -->
                <div class="container-fluid">

                    <!-- footer -->
                    <footer>
                        <!-- copyright -->
                        <div>© <?php echo date('d.m.Y')?> All rights reserved</div>
                        <!-- author ( Please! Do not delete it. You are awesome! :) -->

                    </footer>
                    <!-- footer end -->

                </div>
                <!-- footer end -->

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
