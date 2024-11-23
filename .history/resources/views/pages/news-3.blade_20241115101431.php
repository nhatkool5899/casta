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
            <div class="product-content">
                <div class="product-image">
                    <img src="https://ttud.com.vn/wp-content/uploads/2024/10/3970_z5060101415478_f774f9f1ab6e688619f4d3f38a9f49c7-768x1024.jpg" alt="product">
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
                    <a href="#" class="product-title">🥚 Trứng Muối Bách Hương – Hương Vị Đậm Đà, Dinh Dưỡng Tinh Tế! 🥚</a>
                    <div class="product-desc">
                        ✨ Khám Phá Lợi Ích Thú Vị Từ Trứng Muối Bách Hương Qua Hệ Thống Truy Xuất Nguồn Gốc Hàng Hóa Thành Phố Cần Thơ ✨ Trứng muối Bách Hương là sản phẩm chất lượng cao với hương vị đậm đà, mặn mà, là lựa chọn tuyệt vời cho các món ăn hàng ngày. Được sản xuất và kiểm soát chặt chẽ qua hệ thống truy xuất nguồn gốc hàng hóa của thành phố Cần Thơ, sản phẩm không chỉ đảm bảo an toàn mà còn mang đến nhiều giá
                    </div>
                    <div class="read-mode">
                        Đọc thêm <i class="fa-regular fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="product-content">
                <div class="product-image">
                    <img src="https://ttud.com.vn/wp-content/uploads/2024/10/4029_z5769608257702_2815fb69e02bd734310a595d6f20f2e3-768x1024.jpg" alt="product">
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
        <div class="wrapper-btn" style="text-align:center">
            <a href="{{route('about')}}" class="btn-primary btn-readmore">
                Xem tất cả <i class="fa-regular fa-chevron-right"></i>
            </a>
        </div>
    </div>
</section>

<div class="clear-ft"></div>
@endsection
