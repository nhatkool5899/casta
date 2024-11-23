@extends('layouts.page')

@section('banner')
    <div class="banner">
        {{-- <div class="video-inner">
            <video class="ssvideo" muted="" playsinline="" autoplay="" loop="">
                <source src="https://www.idiseafood.com/vnt_upload/weblink/IDI_FOOD_30s_vn.mp4" type="video/mp4">
            </video>
        </div> --}}
        <div class="swiper banner-swiper">
            <div class="swiper-wrapper banner-wrapper">
        
                    
                <div class="swiper-slide">
                    <div class="banner-image">
                        <img src="{{asset('front-end/assets/imgs/banner-1.png')}}" alt="slide-1">
                    </div>
                </div>
        
            
            </div>
            <div class="banner-pagination"></div>
        </div>
    </div>
@endsection
@section('content')
    <section class="section">
        <div class="container">
            <div class="wrapper-title">
                <h2>Giới thiệu</h2>
            </div>
            <div class="wrapper-first">
                <div class="first-context">
                    <p>
                        Chúng tôi có vai trò, sứ mệnh trong sự phát triển thị trường khoa học công nghệ của thành phố Cần Thơ. Mục tiêu của chúng tôi là xây dựng cầu nối giữa các nhà khoa học, nhà sáng chế, Doanh nghiệp, chúng tôi cam kết đồng hành cùng với các tổ chức và cá nhân trong các hoạt động ứng dụng và chuyển giao công nghệ và công nghệ vào sản xuất và đời sống.
                    </p>
                    <div class="wrapper-btn">
                        <a href="{{route('about')}}" class="btn-primary btn-about">
                            Xem thêm về CASTA <i class="fa-regular fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="first-image">
                    <img src="https://www.idiseafood.com/vnt_upload/weblink/MAP_vn_1.jpg" alt="image-first">
                </div>
            </div>
            <div class="wrapper-video">
                <img src="{{asset('front-end/assets/imgs/banner-1.png')}}" alt="background">
            </div>
        </div>
    </section>
@endsection