<!doctype html>
<html lang="zxx">


<!-- Mirrored from elanta.app/nazar/arter-demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 10:24:05 GMT -->
<!-- Added by HTTrack --><!-- /Added by HTTrack -->
@yield('pages.css')

<body>

<!-- app -->
<div class="art-app">

    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="art-app-wrapper">

        <!-- app container end -->
        <div class="art-app-container">

            <!-- info bar -->
            <div class="art-info-bar">

                <!-- menu bar frame -->
                <div class="art-info-bar-frame">

                    <!-- info bar header -->
                    <div class="art-info-bar-header">
                        <!-- info bar button -->
                        <a class="art-info-bar-btn" href="#.">
                            <!-- icon -->
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <!-- info bar button end -->
                    </div>
                    <!-- info bar header end -->

                    <!-- info bar header -->
                    <div class="art-header">
                        <!-- avatar -->
                        <div class="art-avatar">
                            <a data-fancybox="avatar" href="pages/img/face-1.jpg" class="art-avatar-curtain">
                                <img src="pages/img/face-1.jpg" alt="avatar">
                                <i class="fas fa-expand"></i>
                            </a>
                            <!-- available -->
                            <div class="art-lamp-light">
                                <!-- add class 'art-not-available' if not available-->
                                <div class="art-available-lamp"></div>
                            </div>
                        </div>
                        <!-- avatar end -->
                        <!-- name -->
                        <h5 class="art-name mb-10"><a href="{{ route('index') }}">Asgarov Anvar</a></h5>
                        <!-- post -->
                        <div class="art-sm-text">Back-End Developer <br>PHP,Laravel </div>
                        <div class="art-links-frame p-15-15">

                            <!-- download cv button -->
                            <a href="pages/files/cv.txt" class="art-link" download><h7>Download cv</h7><i class="fas fa-download"></i></a>

                        </div>
                    </div>
                    <!-- info bar header end -->

                    <!-- scroll frame -->
                    <div id="scrollbar2" class="art-scroll-frame">

                        <!-- links frame -->

                        <div class="art-ls-divider"></div>
                        <!-- info bar about -->
                        <div class="art-table p-15-15">
                            <!-- about text -->
                            <ul>
                                <!-- country -->
                                <li>
                                    <h6>Residence:</h6><span>Azerbaijan</span>
                                </li>
                                <!-- city -->
                                <li>
                                    <h6>City:</h6><span>Baku</span>
                                </li>
                                <!-- age -->
                                <li>
                                    <h6>Age:</h6><span>21</span>
                                </li>
                            </ul>
                        </div>
                        <!-- info bar about end -->

                        <!-- divider -->
                        <div class="art-ls-divider"></div>

                        <!-- language skills -->

                        <div class="art-lang-skills p-30-15">

                            <!-- skill -->
                            <div class="art-lang-skills-item">
                                <div id="circleprog1" class="art-cirkle-progress"></div>
                                <!-- title -->
                                <h6>French</h6>
                            </div>
                            <!-- skill end -->

                            <!-- skill -->
                            <div class="art-lang-skills-item">
                                <div id="circleprog2" class="art-cirkle-progress"></div>
                                <!-- title -->
                                <h6>English</h6>
                            </div>
                            <!-- skill end -->

                            <!-- skill -->
                            <div class="art-lang-skills-item">
                                <div id="circleprog3" class="art-cirkle-progress"></div>
                                <!-- title -->
                                <h6>Spanish</h6>
                            </div>

                        </div>
                        <!-- language skills end -->

                        <!-- divider -->
                        <div class="art-ls-divider"></div>

                        <!-- hard skills -->
                        <div class="art-hard-skills p-30-15">

                            <!-- skill -->
                            <div class="art-hard-skills-item">
                                <div class="art-skill-heading">
                                    <!-- title -->
                                    <h6>html</h6>
                                </div>
                                <!-- progressbar frame -->
                                <div class="art-line-progress">
                                    <!-- progressbar -->
                                    <div id="lineprog1"></div>
                                </div>
                                <!-- progressbar frame end -->
                            </div>
                            <!-- skill end -->

                            <!-- skill -->
                            <div class="art-hard-skills-item">
                                <div class="art-skill-heading">
                                    <!-- title -->
                                    <h6>CSS</h6>
                                </div>
                                <!-- progressbar frame -->
                                <div class="art-line-progress">
                                    <!-- progressbar -->
                                    <div id="lineprog2"></div>
                                </div>
                                <!-- progressbar frame end -->
                            </div>
                            <!-- skill end -->

                            <!-- skill -->
                            <div class="art-hard-skills-item">
                                <div class="art-skill-heading">
                                    <!-- title -->
                                    <h6>Js</h6>
                                </div>
                                <!-- progressbar frame -->
                                <div class="art-line-progress">
                                    <!-- progressbar -->
                                    <div id="lineprog3"></div>
                                </div>
                                <!-- progressbar frame end -->
                            </div>
                            <!-- skill end -->

                            <!-- skill -->
                            <div class="art-hard-skills-item">
                                <div class="art-skill-heading">
                                    <!-- title -->
                                    <h6>PHP</h6>
                                </div>
                                <!-- progressbar frame -->
                                <div class="art-line-progress">
                                    <!-- progressbar -->
                                    <div id="lineprog4"></div>
                                </div>
                                <!-- progressbar frame end -->
                            </div>
                            <!-- skill end -->

                            <!-- skill -->
                            <div class="art-hard-skills-item">
                                <div class="art-skill-heading">
                                    <!-- title -->
                                    <h6>Wordpress</h6>
                                </div>
                                <!-- progressbar frame -->
                                <div class="art-line-progress">
                                    <!-- progressbar -->
                                    <div id="lineprog5"></div>
                                </div>
                                <!-- progressbar frame end -->
                            </div>
                            <!-- skill end -->

                        </div>
                        <!-- language skills end -->

                        <!-- divider -->
                        <div class="art-ls-divider"></div>

                        <!-- knowledge list -->
                        <ul class="art-knowledge-list p-15-0">
                            <!-- list item -->
                            <li>Bootstrap, Materialize</li>
                            <!-- list item -->
                            <li>Stylus, Sass, Less</li>
                            <!-- list item -->
                            <li>Gulp, Webpack, Grunt</li>
                            <!-- list item -->
                            <li>GIT knowledge</li>
                        </ul>
                        <!-- knowledge list end -->

                        <!-- divider -->



                        <!-- links frame end -->

                    </div>
                    <!-- scroll frame end -->

                    <!-- sidebar social -->
                    <div class="art-ls-social">
                        <!-- social link -->
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <!-- social link -->
                        <a href="#" target="_blank"><i class="fab fa-dribbble"></i></a>
                        <!-- social link -->
                        <a href="#" target="_blank"><i class="fab fa-behance"></i></a>
                        <!-- social link -->
                        <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                        <!-- social link -->
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                    <!-- sidebar social end -->

                </div>
                <!-- menu bar frame end -->

            </div>
            <!-- info bar end -->

            <!-- content -->
            @yield('pages.body')
            <!-- content end -->

            <!-- menu bar -->
            <div class="art-menu-bar">

                <!-- menu bar frame -->
                <div class="art-menu-bar-frame">

                    <!-- menu bar header -->
                    <div class="art-menu-bar-header">
                        <!-- menu bar button -->
                        <a class="art-menu-bar-btn" href="#">
                            <!-- icon -->
                            <span></span>
                        </a>
                        <!-- menu bar button end -->
                    </div>
                    <!-- current page title -->

                    <div class="art-scroll-frame">

                        <!-- menu -->
                        <nav id="swupMenu">
                            <!-- menu list -->
                            <ul class="main-menu">
                                <!-- menu item -->
                                <li class="menu-item {{ Request::is('/*') ? 'current-menu-item' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                                <!-- menu item -->
                                <li class="menu-item {{ Request::is('about*') ? 'current-menu-item' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                                <li class="menu-item {{ Request::is('service*') ? 'current-menu-item' : '' }}"><a href="{{ route('service') }}" target="_blank">Service</a></li>
                                <li class="menu-item {{ Request::is('project*') ? 'current-menu-item' : '' }}"><a href="{{route('project')}}">Project</a></li>
                                <li class="menu-item {{ Request::is('contact*') ? 'current-menu-item' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                                <li class="menu-item {{ Request::is('comment*') ? 'current-menu-item' : '' }}"><a href="{{ route('comments') }}">Comment</a></li>
                            </ul>
                            <!-- menu list end -->
                        </nav>
                        <!-- menu end -->

                        <!-- language change -->
                        <ul class="art-language-change">
                            <!-- language item -->
                            <li><a href="#">*</a></li>
                            <!-- language item -->
                            <li class="art-active-lang"><a href="#">*</a></li>
                            <li><a href="#">*</a></li>
                        </ul>
                        <!-- language change end -->

                    </div>
                    <!-- scroll frame end -->

                </div>
                <!-- menu bar frame -->

            </div>
            <!-- menu bar end -->



        </div>
        <!-- app container end -->

    </div>
    <!-- app wrapper end -->

    <!-- preloader -->
    <div class="art-preloader">
        <!-- preloader content -->
        <div class="art-preloader-content">
            <!-- title -->
            <h5>Asgarov Anvar</h5>
            <!-- progressbar -->
            <div class="art-preloader-load">
                <p>Back-End Developer</p>
            </div>

            <div id="preloader" class="art-preloader-load"></div>
        </div>
        <!-- preloader content end -->
    </div>
    <!-- preloader end -->

</div>
<!-- app end -->
@yield('pages.js')


</body>
</html>
