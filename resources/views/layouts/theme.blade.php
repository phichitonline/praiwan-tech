<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Praiwan Technology') }}</title>

        <!-- Scripts -->
        <script src="{{ url('js/app.js') }}" defer></script>

        <!-- Icon css link -->
        <link href="{{ URL('css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ URL('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="{{ URL('vendors/revolution/css/settings.css') }}" rel="stylesheet">
        <link href="{{ URL('vendors/revolution/css/layers.css') }}" rel="stylesheet">
        <link href="{{ URL('vendors/revolution/css/navigation.css') }}" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="{{ URL('vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">

        <link href="{{ URL('css/style.css') }}" rel="stylesheet">
        <link href="{{ URL('css/responsive.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            <!-- Styles -->
            <style>
                /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            </style>

            <style>
                body {
                    font-family: 'Nunito', sans-serif;
                }
            </style>

    </head>
    <body>

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/"><img src="{{ URL('img/logo.png') }}" alt="ไพรวัลย์เทคโนโลยีการเกษตร"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item @yield('menu-active-about')"><a class="nav-link" href="{{ route('about') }}">เกี่ยวกับเรา</a></li>
                        {{-- <li class="nav-item @yield('menu-active-service')"><a class="nav-link" href="{{ route('service') }}">บริการของเรา</a></li> --}}
                        <li class="nav-item @yield('menu-active-portfolio')"><a class="nav-link" href="{{ route('portfolio') }}">ผลงาน</a></li>
                        {{-- <li class="nav-item @yield('menu-active-contact')"><a class="nav-link" href="{{ route('contact') }}">ติดต่อเรา</a></li> --}}
                        <li class="nav-item @yield('menu-active-user') dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @guest
                                    สำหรับสมาชิก
                                @else
                                    {{ Auth::user()->name }}
                                @endguest
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @guest
                                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">ลงชื่อเข้าใช้งาน</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">ลงทะเบียน</a></li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">ข้อมูลผู้ใช้</a></li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('ออกจากระบบ') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        @yield('content')

        <!--================Footer Area =================-->
        <footer class="footr_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row footer_widget_inner">
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_about_widget">
                                <img src="{{ URL('img/footer-logo2.png') }}" alt="ไพรวัลย์เทคโนโลยีการเกษตร">
                                <p>
                                    รับปั่นนา ดำนา เกี่ยว ลาก ตาก คัด และจำหน่ายเมล็ดพันธุ์ข้าวปลูก
                                </p>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_insta_widget">
                                <div class="f_title">
                                    <h3>ภาพผลงาน</h3>
                                </div>
                                <ul>
                                    <li><a href="{{ route('portfolio') }}"><img src="{{ URL('img/instagram/praiwan-ins-1.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ route('portfolio') }}"><img src="{{ URL('img/instagram/praiwan-ins-2.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ route('portfolio') }}"><img src="{{ URL('img/instagram/praiwan-ins-3.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ route('portfolio') }}"><img src="{{ URL('img/instagram/praiwan-ins-4.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ route('portfolio') }}"><img src="{{ URL('img/instagram/praiwan-ins-5.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ route('portfolio') }}"><img src="{{ URL('img/instagram/praiwan-ins-6.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ route('portfolio') }}"><img src="{{ URL('img/instagram/praiwan-ins-7.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ route('portfolio') }}"><img src="{{ URL('img/instagram/praiwan-ins-8.jpg') }}" alt=""></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_subs_widget">
                                <div class="f_title">
                                    <h3>ติดต่อสอบถาม</h3>
                                </div>
                                <div class="input-group">
                                    <div>
                                        <a target="_blank" href="https://www.facebook.com/narumon1205"><img src="{{ URL('img/icon/icon-facebook.png') }}" height="35" alt="">ติดตามเพจ Facebook</a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="{{ URL('img/icon/icon-line.png') }}" height="35" alt="">LineID : nooying_narktub</a>
                                    </div>
                                    <div>
                                        <a target="_blank" href="https://lin.ee/1cs7OIn"><img src="{{ URL('img/icon/icon-line.png') }}" height="35" alt="">Line Official ไพรวัลย์เทค</a>
                                        <a target="_blank" href="https://lin.ee/1cs7OIn"><img src="https://qr-official.line.me/sid/M/345lgrdn.png"></a>
                                    </div>

                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;2021 All rights reserved. ไพรวัลย์เทคโนโลยีการเกษตร <i class="fa fa-heart-o" aria-hidden="true"></i> Developper by <a href="https://www.alwayhost-demo.com" target="_blank">AlwatHost</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h5>
                    </div>
                    <div class="float-sm-right">
                        <ul>
                            {{-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li> --}}
                            <li><a href="https://www.facebook.com/narumon1205"><i class="fa fa-facebook"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fa fa-behance"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ URL('js/jquery-3.2.1.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ URL('js/popper.min.js') }}"></script>
        <script src="{{ URL('js/bootstrap.min.js') }}"></script>
        <!-- Rev slider js -->
        <script src="{{ URL('vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ URL('vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ URL('vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ URL('vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{ URL('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ URL('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ URL('vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ URL('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <!-- Extra plugin css -->
        <script src="{{ URL('vendors/counterup/jquery.waypoints.min.js') }}"></script>
        <script src="{{ URL('vendors/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ URL('vendors/counterup/apear.js') }}"></script>
        <script src="{{ URL('vendors/counterup/countto.js') }}"></script>
        <script src="{{ URL('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ URL('vendors/magnify-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ URL('js/smoothscroll.js') }}"></script>
        <script src="{{ URL('vendors/circle-bar/circle-progress.min.js') }}"></script>
        <script src="{{ URL('vendors/circle-bar/plugins.js') }}"></script>
        <script src="{{ URL('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ URL('vendors/isotope/isotope.pkgd.min.js') }}"></script>

        <script src="{{ URL('js/circle-active.js') }}"></script>
        <script src="{{ URL('js/theme.js') }}"></script>
    </body>
</html>
