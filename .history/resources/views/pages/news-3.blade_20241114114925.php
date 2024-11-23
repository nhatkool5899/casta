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
        <div class="wrapper-title">
            <h2>Cung cầu công nghệ
            </h2>
            <p>Cập nhật những tin tức - sự kiện mới nhất.</p>
        </div>
        <div class="newspage">
            <div class="newspage-list">
                <div class="newspage-item">
                    <a href="{{url('chi-tiet-tin-tuc')}}" class="newspage-link">
                        <div class="newspage-img">
                            <img src="https://www.idiseafood.com/vnt_upload/news/07_2024/ky_ket_hop_tac_thub.jpg" alt="image">
                        </div>
                        <div class="newspage-context">
                            <div class="newspage-date">
                                <span><i class="fa-regular fa-calendar"></i> 11/11/2024</span>
                            </div>
                            <div class="newspage-name">
                                KÝ KẾT ĐỐI TÁC CHIẾN LƯỢC PHÁT TRIỂN THỊ TRƯỜNG MỸ VÀ NAM MỸ
                            </div>
                        </div>
                    </a>
                </div>
                <div class="newspage-item">
                    <a href="{{url('chi-tiet-tin-tuc')}}" class="newspage-link">
                        <div class="newspage-img">
                            <img src="https://www.idiseafood.com/vnt_upload/news/06_2024/IDI_Corporation_Makes_Presence_at_FB_THAIFEX__Anuga_Asia_2024_in_Thailand_thumb.jpeg" alt="image">
                        </div>
                        <div class="newspage-context">
                            <div class="newspage-date">
                                <span><i class="fa-regular fa-calendar"></i> 06/11/2024</span>
                            </div>
                            <div class="newspage-name">
                                I.D.I CÓ MẶT THAM GIA HỘI CHỢ F&B THAIFEX – ANUGA ASIA 2024 TẠI THÁI LAN
                            </div>
                        </div>
                    </a>
                </div>
                <div class="newspage-item">
                    <a href="{{url('chi-tiet-tin-tuc')}}" class="newspage-link">
                        <div class="newspage-img">
                            <img src="https://www.idiseafood.com/vnt_upload/news/05_2024/I_D_I_TAI_HOI_CHO_TRIEN_LAM_THUY_HAI_SAN_BAC_MY_2024_thumb.png" alt="image">
                        </div>
                        <div class="newspage-context">
                            <div class="newspage-date">
                                <span><i class="fa-regular fa-calendar"></i> 06/11/2024</span>
                            </div>
                            <div class="newspage-name">
                                I.D.I TẠI HỘI CHỢ TRIỂN LÃM THỦY HẢI SẢN BẮC MỸ 2024
                            </div>
                        </div>
                    </a>
                </div>
                <div class="newspage-item">
                    <a href="{{url('chi-tiet-tin-tuc')}}" class="newspage-link">
                        <div class="newspage-img">
                            <img src="https://www.idiseafood.com/vnt_upload/news/06_2024/IDI_Corporation_Makes_Presence_at_FB_THAIFEX__Anuga_Asia_2024_in_Thailand_thumb.jpeg" alt="image">
                        </div>
                        <div class="newspage-context">
                            <div class="newspage-date">
                                <span><i class="fa-regular fa-calendar"></i> 06/11/2024</span>
                            </div>
                            <div class="newspage-name">
                                I.D.I CÓ MẶT THAM GIA HỘI CHỢ F&B THAIFEX – ANUGA ASIA 2024 TẠI THÁI LAN
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
