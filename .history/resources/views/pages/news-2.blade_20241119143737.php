@extends('layouts.page')

@section('banner')
    <div class="banner">
        <div class="banner-page">
            <img src="{{asset('front-end/assets/imgs/bg-news.jpg')}}" alt="image">
            <div class="wrapper-breadcrumbs">
                <h1>Tin tức</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}">Trang chủ</a></li>
                    <li><a href="#">Tin tức</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    
<section class="section">
    <div class="container">
        <div class="wrapper-title">
            <h2>Tin tức</h2>
            <p>Cập nhật những tin tức - sự kiện mới nhất.</p>
        </div>
        <div class="newspage">
            <div class="newspage-list">
                @foreach ($news as $item)
                <div class="newspage-item">
                    <a href="{{url('chi-tiet-tin-tuc/'.$item->slug)}}" class="newspage-link">
                        <div class="newspage-img">
                            <img src="{{asset('uploads/news/'.$item->image)}}" alt="image">
                        </div>
                        <div class="newspage-context">
                            <div class="newspage-date">
                                <span><i class="fa-regular fa-calendar"></i> {{$item->created_at->format('d/m/y')}}</span>
                            </div>
                            <div class="newspage-name">
                                {{$item->name}}
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="newspage-item">
                    <a href="{{url('chi-tiet-tin-tuc')}}" class="newspage-link">
                        <div class="newspage-img">
                            <img src="https://ttud.com.vn/wp-content/uploads/2024/10/ung-dung-tu-dong-hoa-giup-nang-cao-nang-suat-va-chat-luong-san-pham-hang-hoa6-1.jpg" alt="image">
                        </div>
                        <div class="newspage-context">
                            <div class="newspage-date">
                                <span><i class="fa-regular fa-calendar"></i> 06/11/2024</span>
                            </div>
                            <div class="newspage-name">
                                Ứng dụng tự động hóa giúp nâng cao năng suất, chất lượng sản phẩm hàng hóa
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="clear-ft"></div>
@endsection
