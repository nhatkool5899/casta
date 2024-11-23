@extends('layouts.page')

@section('banner')
    <div class="banner">
        <div class="banner-page">
            <img src="{{asset('front-end/assets/imgs/bg-news.jpg')}}" alt="image">
            <div class="wrapper-breadcrumbs">
                <h1>Tuyển dụng</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}">Trang chủ</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    
<section class="section">
    <div class="container">
        <div class="wrapper-title">
            <h2>Tuyển dụng</h2>
            <p>Cập nhật những thông tin tuyển dụng mới nhất tại trung tâm.</p>
        </div>
        <div class="newspage">
            <div class="newspage-list">
                <div class="newspage-item">
                    <a href="{{url('chi-tiet-tin-tuc')}}" class="newspage-link">
                        <div class="newspage-img">
                            <img src="https://ttud.com.vn/wp-content/uploads/2023/08/Slider-tuyen-dung-1-1024x356.png" alt="image">
                        </div>
                        <div class="newspage-context">
                            <div class="newspage-date">
                                <span><i class="fa-regular fa-calendar"></i> 11/10/2024</span>
                            </div>
                            <div class="newspage-name">
                                Thông báo tuyển dụng nhân sự công ty Lingotech
                            </div>
                        </div>
                    </a>
                </div>
                <div class="newspage-item">
                    <a href="{{url('chi-tiet-tin-tuc')}}" class="newspage-link">
                        <div class="newspage-img">
                            <img src="https://ttud.com.vn/wp-content/uploads/2022/09/logo-Casta.jpg" alt="image">
                        </div>
                        <div class="newspage-context">
                            <div class="newspage-date">
                                <span><i class="fa-regular fa-calendar"></i> 06/11/2024</span>
                            </div>
                            <div class="newspage-name">
                                Thông báo kết quả trúng tuyển kỳ xét tuyển viên chức năm 2022 của Trung tâm ứng dụng tiến bộ khoa học và công nghệ.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="newspage-item">
                    <a href="{{url('chi-tiet-tin-tuc')}}" class="newspage-link">
                        <div class="newspage-img">
                            <img src="https://ttud.com.vn/wp-content/uploads/2022/09/logo-Casta.jpg" alt="image">
                        </div>
                        <div class="newspage-context">
                            <div class="newspage-date">
                                <span><i class="fa-regular fa-calendar"></i> 06/11/2024</span>
                            </div>
                            <div class="newspage-name">
                                [Thông báo] về việc tuyển dụng viên chức lần 1 năm 2020 của Trung tâm Ứng dụng tiến bộ khoa học và công nghệ
                            </div>
                        </div>
                    </a>
                </div>
                <div class="newspage-item">
                    <a href="{{url('chi-tiet-tin-tuc')}}" class="newspage-link">
                        <div class="newspage-img">
                            <img src="https://ttud.com.vn/wp-content/uploads/2023/08/Slider-tuyen-dung-1-1024x356.png" alt="image">
                        </div>
                        <div class="newspage-context">
                            <div class="newspage-date">
                                <span><i class="fa-regular fa-calendar"></i> 11/10/2024</span>
                            </div>
                            <div class="newspage-name">
                                Thông báo tuyển dụng nhân sự công ty Lingotech
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="wrapper-btn" style="text-align:center">
                <a href="{{route('about')}}" class="btn-primary btn-readmore">
                    Xem tất cả <i class="fa-regular fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<div class="clear-ft"></div>
@endsection
