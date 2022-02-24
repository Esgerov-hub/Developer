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

                            <!-- section title -->
                            <div class="art-section-title">
                                <!-- title frame -->
                                <div class="art-title-frame">
                                    <!-- title -->
                                    <h4>Contact information</h4>
                                </div>
                                <!-- title frame end -->
                            </div>
                            <!-- section title end -->

                        </div>
                        <!-- col end -->
                        <!-- col -->
                        <div class="col-lg-4">
                            <!-- contact card -->
                            <div class="art-a art-card">
                                <div class="art-table p-15-15">
                                    <ul>
                                        <li>
                                            <h6>Country:</h6><span>Canada</span>
                                        </li>
                                        <li>
                                            <h6>City:</h6><span>Toronto</span>
                                        </li>

                                        <li>
                                            <h6>Streat:</h6><span>20 Dellbank Rd</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- contact card end -->
                        </div>
                        <!-- col end -->
                        <!-- col -->
                        <div class="col-lg-4">
                            <!-- contact card -->
                            <div class="art-a art-card">
                                <div class="art-table p-15-15">
                                    <ul>
                                        <li>
                                            <h6>Email:</h6><span>carter.inbox@mail.com</span>
                                        </li>
                                        <li>
                                            <h6>Telegram:</h6><span>@arter</span>
                                        </li>
                                        <li>
                                            <h6>Skype:</h6><span>Arter</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- contact card end -->
                        </div>
                        <!-- col end -->
                        <!-- col -->
                        <div class="col-lg-4">
                            <!-- contact card -->
                            <div class="art-a art-card">
                                <div class="art-table p-15-15">
                                    <ul>
                                        <li>
                                            <h6>Support service:</h6><span>+78 (098) 333 11 22</span>
                                        </li>
                                        <li>
                                            <h6>Office:</h6><span>+78 (098) 326 11 22</span>
                                        </li>
                                        <li>
                                            <h6>Personal:</h6><span>+78 (077) 114 26 53</span>
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
                                    <h4>Get in touch</h4>
                                </div>
                                <!-- title frame end -->
                            </div>
                            <!-- section title end -->

                            <!-- contact form frame -->
                            <div class="art-a art-card">

                                <!-- contact form -->
                                <form id="form" class="art-contact-form">
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
                                        <input id="email" name="email" class="art-input" type="email" placeholder="Email" required>
                                        <!-- label -->
                                        <label for="email"><i class="fas fa-at"></i></label>
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
                                        <button class="art-btn art-btn-md art-submit" type="submit"><span>Send message</span></button>
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
                <footer>
                    <!-- copyright -->
                    <div>© 2020 Artur Carter</div>
                    <!-- author ( Please! Do not delete it. You are awesome! :) -->
                    <div>Template author:&#160; <a href="https://themeforest.net/user/millerdigitaldesign" target="_blank">Nazar Miller</a></div>
                </footer>
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