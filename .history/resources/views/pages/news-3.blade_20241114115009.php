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
            <h2>Cung cầu công nghệ</h2>
        </div>
        <div class="product-home">
            <div class="swiper swiper-home">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-content">
                            <div class="product-image">
                                <img src="{{asset('front-end/assets/imgs/ca-tra.jpg')}}" alt="product">
                            </div>
                            <div class="product-data">
                                <div class="product-info">
                                    <span class="date">
                                        <i class="fa-regular fa-calendar-check"></i>
                                        09/09/2023
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
                    </div>
                    <div class="swiper-slide">
                        <div class="product-content">
                            <div class="product-image">
                                <img src="https://ttud.com.vn/wp-content/uploads/2024/10/3611_R-1.jpg" alt="product">
                            </div>
                            <div class="product-data">
                                <div class="product-info">
                                    <span class="date">
                                        <i class="fa-regular fa-calendar-check"></i>
                                        09/09/2023
                                    </span>
                                    <span class="admin">
                                        <i class="fa-light fa-user"></i>
                                        admin
                                    </span>
                                </div>
                                <a href="#" class="product-title">Gạo Jasmine – Tinh Túy Thiên Nhiên, Dinh Dưỡng Vượt Trội!</a>
                                <div class="product-desc">
                                    Gạo Jasmine, một loại gạo thơm ngon đặc trưng, đang ngày càng trở nên phổ biến nhờ hương vị thơm dẻo đặc biệt và giá trị dinh dưỡng vượt trội. Trên hệ thống truy xuất nguồn gốc hàng hóa thành phố Cần Thơ, gạo Jasmine được giám sát chặt chẽ từ khâu[…]
                                </div>
                                <div class="read-mode">
                                    Đọc thêm <i class="fa-regular fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-content">
                            <div class="product-image">
                                <img src="https://ttud.com.vn/wp-content/uploads/2024/10/3840_z4463541835668_0cad8d03521a1be31caee5711908e396-1024x767.jpg" alt="product">
                            </div>
                            <div class="product-data">
                                <div class="product-info">
                                    <span class="date">
                                        <i class="fa-regular fa-calendar-check"></i>
                                        09/09/2023
                                    </span>
                                    <span class="admin">
                                        <i class="fa-light fa-user"></i>
                                        admin
                                    </span>
                                </div>
                                <a href="#" class="product-title">Khô Cá Cơm Bánh Tráng – Hương Vị Giòn Tan, Dinh Dưỡng Tuyệt Vời! 🐟</a>
                                <div class="product-desc">
                                    Khám Phá Lợi Ích Thú Vị Và Dinh Dưỡng Từ Khô Cá Cơm Bánh Tráng Qua Hệ Thống Truy Xuất Nguồn Gốc Hàng Hóa Thành Phố Cần Thơ ✨ Khô cá cơm bánh tráng là món ăn đậm đà hương vị biển cả, được chế biến từ những con cá cơm tươi ngon và […]
                                </div>
                                <div class="read-mode">
                                    Đọc thêm <i class="fa-regular fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-slide">
                <span class="home-prev-slide btn-slide"><i class="fa-regular fa-chevron-left"></i></span>
                <span class="home-next-slide btn-slide"><i class="fa-regular fa-chevron-right"></i></span>
            </div>
        </div>
    </div>
</section>

<div class="clear-ft"></div>
@endsection
