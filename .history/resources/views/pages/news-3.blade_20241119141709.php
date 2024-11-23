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
                <div class="product-image">
                    <img src="{{asset('uploads/news/'.$item->image)}}" alt="product">
                </div>
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
                    <a href="#" class="product-title">Cá Tra – Sản Phẩm Nông Nghiệp Chủ Lực Tại Cần Thơ, Bước Đột Phá Với Hệ Thống Truy Xuất Nguồn Gốc</a>
                    <div class="product-desc">
                        Cá tra không chỉ là biểu tượng của vùng đồng bằng sông Cửu Long mà còn là một trong những sản phẩm nông nghiệp chủ lực tại Cần Thơ, góp phần quan trọng trong việc phát triển kinh tế địa phương. Với sự phát triển của công nghệ hiện đại, cá tra Cần Thơ đã […]
                    </div>
                    <div class="read-mode">
                        Đọc thêm <i class="fa-regular fa-arrow-right"></i>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        <div class="wrapper-btn" style="text-align:center">
            <a href="{{route('about')}}" class="btn-primary btn-readmore">
                Xem tất cả <i class="fa-regular fa-chevron-right"></i>
            </a>
        </div>
    </div>
</section>

<div class="clear-ft"></div>
@endsection
