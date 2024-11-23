<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $ogTitle ?? 'CASTA - Trung Tâm Ứng Dụng Tiến Bộ Khoa Học và Công Nghệ Cần Thơ' }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('front-end/assets/imgs/logo/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front-end/assets/imgs/logo/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front-end/assets/imgs/logo/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('front-end/assets/imgs/logo/site.webmanifest')}}">

    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $ogTitle ?? 'CASTA - Trung Tâm Ứng Dụng Tiến Bộ Khoa Học và Công Nghệ Cần Thơ' }}" />
    <meta property="og:description" content="{{ $ogDesc ?? '' }}" />
    <meta property="og:image" content="{{ $ogImage ?? '' }}" />


    <!-- Link custom css -->
    <link rel="stylesheet" href="{{asset('front-end/assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/fonts/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/responsive.css')}}">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.3.1/lazyload.min.js"></script>

</head>
<body>
    <div class="app">

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v21.0&appId=396469165987143"></script>
        <header>
            <div class="header">
                <div class="header-top">
                    <div class="container">
                        <div class="header-flex">
                           <h1 class="header-name">Công ty cổ phần chứng nhận và giám định - MEKONGCERT</h1>
                            <div class="header-info">
                                <div class="header-info-item">
                                    <div class="info-item-icon">
                                        <i class="fa-sharp fa-light fa-phone-volume"></i>
                                    </div>
                                    <div class="info-item-context">
                                        <h3>+84 292 2245 599</h3>
                                    </div>
                                </div>
                                <div class="header-info-item">
                                    <div class="info-item-icon">
                                        <i class="fa-thin fa-envelope"></i>
                                    </div>
                                    <div class="info-item-context">
                                        <h3>mekongcert.sale@gmail.com</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="header-main">
                            <div class="nav-mobile">
                                <div class="btn_show-menu">
                                    <div class="nav-mobile-toggle">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="nav_mobile-menu">
                                    <ul class="nav_mobile-list">
                                        <div class="btn-close-nav">
                                            <i class="fa-light fa-xmark"></i>
                                        </div>
                                        <div class="logo-mobile">
                                            <a href="{{url('/')}}">
                                                <img data-src="{{asset('front-end/assets/imgs/logo/logo.jpg')}}" alt="logo" class="lazy">
                                            </a>
                                        </div>
                                        <li class="nav-item">
                                            <a href="{{ route('about') }}" class="nav_mobile-item">
                                                <span>Giới thiệu</span>
                                            </a>
                                            
                                        </li>
                                        <li class="nav-item slide-drop">
                                            <a class="nav_mobile-item" href="{{route('services')}}">
                                                <span>Dịch vụ</span>
                                            </a>
                                        </li>
        
                                        <li class="nav-item slide-drop">
                                            <a class="nav_mobile-item" href="{{route('news_client')}}">
                                                <span>Tin tức</span>
                                            </a>
                                        </li>

                                        <li class="nav-item slide-drop">
                                            <a class="nav_mobile-item" href="{{route('customer_client')}}">
                                                <span>Khách hàng</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav_mobile-item" href="{{route('contact')}}">
                                                <span>Liên hệ</span>
                                            </a>
                                        </li>
        
                                    </ul>
                                
                                </div>
                            </div>
                            <div class="header-logo">
                                <a href="{{route('home')}}" class="logo-link">
                                    <img src="{{asset('front-end/assets/imgs/logo.jpg')}}" alt="logo-mekongcert">
                                </a>
                            </div>
                            <ul class="navigation">
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('about')}}" class="nav-link">Giới thiệu</a>
                                    <div class="submenu">
                                        <ul class="submenu-list">
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section1">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-info"></i>
                                                    </div>
                                                    <span>Giới thiệu chung</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section2">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-layer-group"></i>
                                                    </div>
                                                    <span>Chức năng, <br> phạm vi hoạt động</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section3">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-award"></i>
                                                    </div>
                                                    <span>Thông tin <br> năng lực</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section4">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-shield-check"></i>
                                                    </div>
                                                    <span>Chính sách  <br> chất lượng</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section5">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-user-nurse"></i>
                                                    </div>
                                                    <span>Ban lãnh đạo</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section6">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-diagram-project"></i>
                                                    </div>
                                                    <span>Sơ đồ tổ chức</span>    
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('services')}}" class="nav-link">Dịch vụ</a>
                                    <div class="submenu">
                                        <div class="container">
                                            <ul class="submenu-service">
                                                <li class="submenu-item">
                                                    <span class="submenu-link">
                                                        <div class="icon">
                                                            <i class="fa-solid fa-info"></i>
                                                        </div>
                                                        <span>Thử nghiệm</span>
                                                    </span>
                                                    <ul class="menu-service">
                                                        @foreach ($service_1 as $item)
                                                            
                                                        <li>
                                                            <a href="{{url('dich-vu/'.$item->slug)}}" class="menu-sv-link">{{$item->name}}</a>
                                                        </li>

                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="submenu-item">
                                                    <span class="submenu-link">
                                                        <div class="icon">
                                                            <i class="fa-solid fa-layer-group"></i>
                                                        </div>
                                                        <span>Giám định</span>
                                                    </span>
                                                    <ul class="menu-service">
                                                        @foreach ($service_2 as $item)
                                                            
                                                        <li>
                                                            <a href="{{url('dich-vu/'.$item->slug)}}" class="menu-sv-link">{{$item->name}}</a>
                                                        </li>
                                                        
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="submenu-item">
                                                    <span class="submenu-link">
                                                        <div class="icon">
                                                            <i class="fa-solid fa-award"></i>
                                                        </div>
                                                        <span>Đào tạo</span>
                                                    </span>
                                                    <ul class="menu-service">
                                                        @foreach ($service_3 as $item)
                                                            
                                                        <li>
                                                            <a href="{{url('dich-vu/'.$item->slug)}}" class="menu-sv-link">{{$item->name}}</a>
                                                        </li>
                                                        
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('news_client')}}" class="nav-link">Tin tức</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('customer_client')}}" class="nav-link">Khách hàng</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link">Liên hệ</a>
                                </li>
                            </ul>
                            <div class="header-action">
                                <div class="header-search">
                                    <button class="header-search-btn search-icon">
                                        <i class="fa-regular fa-magnifying-glass"></i>
                                    </button>
                                </div>
                                <div class="header-button">
                                    <a href="tel:02922245599" class="header-register-btn">
                                        Đăng ký ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clear-header"></div>
        <section class="wrapper-banner">
            @yield('banner')
        </section>
        
        <main>
            @yield('content')
        </main>
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="ft-body">
                        <div class="ft-left">
                            <div class="ft-logo">
                                <img data-src="{{asset('front-end/assets/imgs/logo/logo.png')}}" alt="logo" class="lazy">
                            </div>
                            <h2 class="ft-company">
                                <span>Công ty cổ phần chứng nhận và giám định MEKONGCERT</span> 
                            </h2>

                            <div class="ft-group-col">
                                <div class="ft-title" style="padding-top: 20px">Thông tin liên hệ</div>
                                <div class="ft-col-text">
                                    <strong>Địa chỉ: </strong>
                                    <span>10B đường số 9, KDC Hồng Phát, P. An Bình, Q. Ninh Kiều, Cần Thơ</span>
                                </div>
                                <div class="ft-col-flex">
                                    <div class="ft-col-text">
                                        <strong>Điện thoại: </strong>
                                        <span>+84 292 2245 599</span>
                                    </div>
                                    <div class="ft-col-text">
                                        <strong>Email: </strong>
                                        <span>mekongcert.sale@gmail.com</span>
                                    </div>
                                    <div class="ft-col-text">
                                        <strong>Mã số thuế: </strong>
                                        <span>1801752042</span>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="ft-social">
                                <a href="#" class="ft-social-item">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="ft-social-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                </a>
                                <a href="#" class="ft-social-item">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" class="ft-social-item">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div> --}}
                        </div>
                        <div class="ft-right">
                            <div class="ft-context">
                                <div class="ft-group">
                                     <div class="ft-group-col">
                                        <div class="ft-title">Fanpage</div>
                                        <div>
                                            <div class="fb-page" data-href="https://www.facebook.com/mekongcert" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/mekongcert" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/mekongcert">Mekongcert JSC</a></blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ft-bot">
                                <div class="copyright">
                                    <p>Copyright © [2024] MekongCert. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
           
            </div>
        </footer>

        <div class="search-body">
            <div class="search-body-content">
                <div class="container-search">
                    <div class="search-top">
                        <span>Bạn cần tìm gì?</span>
                        <span class="btn-search-close"><i class="fa-regular fa-xmark"></i></span>
                    </div>
                    <div class="search-bottom">
                        <form action="{{url('search-keyword')}}" class="form-search" method="POST">
                        @csrf
                            <input type="search" class="search_input" name="keyword" placeholder="Tên dịch vụ hoặc bài viết ...">
                            <button type="submit" class="btn-search-submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('front-end/assets/js/slider.js')}}"></script>
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>

    <script>
        var lazyLoadInstance = new LazyLoad({
            elements_selector: ".lazy"
        });
    </script>

</body>
</html>