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
        
                @foreach ($banner as $item)
                    
                <div class="swiper-slide">
                    <div class="banner-image">
                        <img src="{{asset('uploads/banner/'.$item->image)}}" alt="slide-1">
                    </div>
                </div>
        
                @endforeach
            
            </div>
            <div class="banner-pagination"></div>
        </div>
    </div>
@endsection
@section('content')
    
@endsection