@extends('layouts.page')

@section('banner')
    <div class="banner">
        <div class="banner-page">
            <img src="{{asset('front-end/assets/imgs/bg-news.jpg')}}" alt="image">
            <div class="wrapper-breadcrumbs">
                <h1>Sự kiện</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}">Trang chủ</a></li>
                    <li><a href="#">Sự kiện</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    
<section class="section">
    <div class="container">
        <div class="wrapper-title">
            <h2>Sự kiện</h2>
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

            </div>
            {{-- <div class="wrapper-btn" style="text-align:center">
                <a href="{{route('about')}}" class="btn-primary btn-readmore">
                    Xem tất cả <i class="fa-regular fa-chevron-right"></i>
                </a>
            </div> --}}
        </div>
    </div>
</section>

<div class="clear-ft"></div>
@endsection
