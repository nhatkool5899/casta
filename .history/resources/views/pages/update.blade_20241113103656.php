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
            <div class="wrapper-upadte">
                <img src="{{asset('front-end/assets/imgs/update.webp')}}" alt="update">
            </div>
        </div>
    </section>
    <div class="clear-ft"></div>
@endsection