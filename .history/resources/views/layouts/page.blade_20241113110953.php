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
                                        <a href="{{route('home')}}">
                                            <img data-src="{{asset('front-end/assets/imgs/logo/logo.jpg')}}" alt="logo" class="lazy">
                                        </a>
                                    </div>
                                    <li class="nav-item slide-drop">
                                        <a class="nav_mobile-item">
                                            <span>Dịch vụ</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                            </svg>
                                        </a>
                                        <ul class="nav-submobile submobile">
                                            <li class="nav-submobile-item">
                                                <a href="{{url('chuyen-giao-cong-nghe')}}" class="nav-submobile-link">Chuyển giao công nghệ</a>
                                            </li>
                                            <li class="nav-submobile-item">
                                                <a href="{{url('ho-tro-doanh-nghiep')}}" class="nav-submobile-link">Hỗ trợ doanh nghiệp</a>
                                            </li>
                                            <li class="nav-submobile-item">
                                                <a href="{{url('thuc-nghiem-khao-nghiem-cong-nghe')}}" class="nav-submobile-link">Thực nghiệm - Khảo nghiệm công nghệ</a>
                                            </li>
                                            <li class="nav-submobile-item">
                                                <a href="{{url('dao-tao')}}" class="nav-submobile-link">Đào tạo</a>
                                            </li>
                                        </ul>
                                    </li>
    
                                    <li class="nav-item slide-drop">
                                        <a class="nav_mobile-item">
                                            <span>Thông tin</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                            </svg>
                                        </a>
                                        <ul class="nav-submobile submobile">
                                            <li class="nav-submobile-item">
                                                <a href="{{url('su-kien')}}" class="nav-submobile-link">Sự kiện</a>
                                            </li>
                                            <li class="nav-submobile-item">
                                                <a href="{{url('tin-tuc')}}" class="nav-submobile-link">Tin tức</a>
                                            </li>
                                            <li class="nav-submobile-item">
                                                <a href="{{url('metag+')}}" class="nav-submobile-link">MetaG+</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item slide-drop">
                                        <a class="nav_mobile-item" href="{{url('cung-cau-cong-nghe')}}">
                                            <span>Cung cầu công nghệ</span>
                                        </a>
                                    </li>

                                    <li class="nav-item slide-drop">
                                        <a class="nav_mobile-item">
                                            <span>Về trung tâm</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                            </svg>
                                        </a>
                                        <ul class="nav-submobile submobile">
                                            <li class="nav-submobile-item">
                                                <a href="{{url('su-kien')}}" class="nav-submobile-link">Giới thiệu</a>
                                            </li>
                                            <li class="nav-submobile-item">
                                                <a href="{{url('tin-tuc')}}" class="nav-submobile-link">Cơ cấu tổ chức</a>
                                            </li>
                                            <li class="nav-submobile-item">
                                                <a href="{{url('metag+')}}" class="nav-submobile-link">Thành tích đạt được</a>
                                            </li>
                                            <li class="nav-submobile-item">
                                                <a href="{{url('metag+')}}" class="nav-submobile-link">Tuyển dụng</a>
                                            </li>
                                        </ul>
                                    </li>
    
                                </ul>
                            
                            </div>
                        </div>
                        <div class="header-logo">
                            <a href="{{route('home')}}" class="logo-link">
                                <img src="{{asset('front-end/assets/imgs/logo/logo.jpg')}}" alt="logo-mekongcert">
                            </a>
                            <h1>Trung tâm Ứng dụng tiến bộ <br> khoa học và công nghệ</h1>
                        </div>
                        <div class="header-body">
                            <div class="header-action">
                                <div class="header-search">
                                    <button class="header-search-btn search-icon">
                                        <i class="fa-regular fa-magnifying-glass"></i>
                                    </button>
                                </div>
                                <div class="header-button">
                                    <a href="tel:02922245599" class="header-register-btn">
                                        Liên hệ ngay
                                    </a>
                                </div>
                            </div>
                            <ul class="navigation">
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link" style="padding-left: 0">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('chuyen-giao-cong-nghe')}}" class="nav-link">Dịch vụ <i class="fa-light fa-chevron-down"></i></a>
                                    <div class="submenu">
                                        <ul class="submenu-list">
                                            <li class="submenu-item">
                                                <a href="{{ url('chuyen-giao-cong-nghe') }}" class="nav-submobile-link">
                                                    <span>Chuyển giao công nghệ</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ url('ho-tro-doanh-nghiep') }}" class="nav-submobile-link">
                                                    <span>Hỗ trợ doanh nghiệp</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ url('thu-nghiem-khao-nghiem-cong-nghe') }}" class="nav-submobile-link">
                                                    <span>Thực nghiệm - Khảo nghiệm công nghệ</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{url('dao-tao')}}" class="submenu-link">
                                                    <span>Đào tạo</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('su-kien')}}" class="nav-link">Thông tin <i class="fa-light fa-chevron-down"></i></a>
                                    <div class="submenu">
                                        <ul class="submenu-list">
                                            <li class="submenu-item">
                                                <a href="{{ url('su-kien') }}" class="submenu-link">
                                                    <span>Sự kiện</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ url('tin-tuc') }}" class="submenu-link">
                                                    <span>Tin tức</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ url('metag+') }}" class="submenu-link">
                                                    <span>MetaG+</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('cung-cau-cong-nghe')}}" class="nav-link">Cung - cầu cn</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link">Về trung tâm</a>
                                    <div class="submenu">
                                        <ul class="submenu-list">
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section1">
                                                    <span>Chuyển giao công nghệ</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section2">
                                                    <span>Hỗ trợ doanh nghiệp</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
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
                            {{-- <div class="ft-logo">
                                <img src="{{asset('front-end/assets/imgs/logo/logo-trans.png')}}" alt="logo">
                            </div> --}}
                            <h2 class="ft-company">
                                <span>Trung tâm ứng dụng tiến bộ khoa học và công nghệ Cần Thơ</span> 
                            </h2>
                            <p class="ft-information">
                                Là đơn vị sự nghiệp trực thuộc Sở Khoa học và Công nghệ Cần Thơ, được thành lập ngày 27 tháng 02 năm 2013 theo Quyết định số 503/QĐ- UBND của Ủy ban nhân dân thành phố Cần Thơ. Hoạt động của Trung tâm tập trung vào: nghiên cứu, ứng dụng, chuyển giao tiến bộ khoa học và công nghệ phục vụ công tác hoạch định chính sách, cung cấp dịch vụ công thuộc lĩnh vực khoa học và công nghệ chưa thể chuyển giao cho các tổ chức ngoài khu vực nhà nước đảm nhận. Thực hiện các hợp đồng dịch vụ khoa học và công nghệ, tư vấn, hỗ trợ Doanh nghiệp đổi mới dây chuyền công nghệ (các lĩnh vực công nghệ cơ khí – tự động hóa, vật liệu mới, công nghệ sinh học, công nghệ thông tin…), ươm tạo doanh nghiệp, bồi dưỡng, huấn luyện nhân lực trình độ cao, dịch vụ trưng bày sản phẩm công nghệ mới, kể cả hợp tác quốc tế về khoa học và công nghệ… phù hợp với quy định của pháp luật.
                            </p>

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
                            <div class="ft-social">
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
                            </div>
                        </div>
                    </div>
                    
                    <div class="ft-bot">
                        <div class="copyright">
                            <p>Copyright © [2024] Dev. All rights reserved.</p>
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
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>
    <script src="{{asset('front-end/assets/js/slider.js')}}"></script>

    <script>
        var lazyLoadInstance = new LazyLoad({
            elements_selector: ".lazy"
        });
    </script>

</body>
</html>