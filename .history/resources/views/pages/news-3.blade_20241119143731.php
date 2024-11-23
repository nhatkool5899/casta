@extends('layouts.page')

@section('banner')
    <div class="banner">
        <div class="banner-page">
            <img src="{{asset('front-end/assets/imgs/bg-news.jpg')}}" alt="image">
            <div class="wrapper-breadcrumbs">
                <h1>Cung cầu công nghệ</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}">Trang chủ</a></li>
                    <li><a href="#">Cung cầu công nghệ</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    
<section class="section">
    <div class="container">
        <div class="product-home product-grid">

            @foreach ($news as $item)
                
            <div class="product-content">
                <a href="{{url('chi-tiet-tin-tuc/'.$item->slug)}}" class="product-image">
                    <img src="{{asset('uploads/news/'.$item->image)}}" alt="{{$item->image}}">
                </a>
                <div class="product-data">
                    <div class="product-info">
                        <span class="date">
                            <i class="fa-regular fa-calendar-check"></i>
                            {{$item->created_at->format('d/m/y')}}
                        </span>
                        <span class="admin">
                            <i class="fa-light fa-user"></i>
                            admin
                        </span>
                    </div>
                    <a href="{{url('chi-tiet-tin-tuc/'.$item->slug)}}" class="product-title">{{$item->name}}</a>
                    <div class="product-desc">
                        {{$item->description}}
                    </div>
                    <a href="{{url('chi-tiet-tin-tuc/'.$item->slug)}}" class="read-mode">
                        Đọc thêm <i class="fa-regular fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            @endforeach

        </div>

    </div>
</section>

<div class="clear-ft"></div>
@endsection
