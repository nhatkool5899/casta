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
            <div class="wrapper-title">
                <h2>Giới thiệu</h2>
            </div>
            <div class="wrapper-first">
                <div class="first-context">
                    <p>
                        Chúng tôi có vai trò, sứ mệnh trong sự phát triển thị trường khoa học công nghệ của thành phố Cần Thơ. Mục tiêu của chúng tôi là xây dựng cầu nối giữa các nhà khoa học, nhà sáng chế, Doanh nghiệp, chúng tôi cam kết đồng hành cùng với các tổ chức và cá nhân trong các hoạt động ứng dụng và chuyển giao công nghệ và công nghệ vào sản xuất và đời sống.
                    </p>
                    <div class="wrapper-btn">
                        <a href="{{route('about')}}" class="btn-primary btn-about">
                            Xem thêm về CASTA <i class="fa-regular fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="first-image">
                    <img src="https://www.idiseafood.com/vnt_upload/weblink/MAP_vn_1.jpg" alt="image-first">
                </div>
            </div>
            <div class="wrapper-video">
                <img class="bg-image" src="{{asset('front-end/assets/imgs/bg-1.jpg')}}" alt="background">
                <div class="video-context">
                    <h3>ĐẨY MẠNH ỨNG DỤNG KHOA HỌC VÀ CÔNG NGHỆ VÀO CUỘC SỐNG</h3>
                    <div class="btn-play" id="openModalBtn">
                        <i class="fa-sharp fa-solid fa-play"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-style">
        <span class="shape-1">
            <img src="{{asset('front-end/assets/imgs/shape-1.png')}}" alt="shape-1">
        </span>
        <span class="shape-2">
            <img src="{{asset('front-end/assets/imgs/shape-2.png')}}" alt="shape-1">
        </span>
        <div class="container">
            <div class="wrapper-title">
                <h2>Các dịch vụ</h2>
                <p>Cung cấp các dịch vụ phù hợp nhất với yêu cầu của khách hàng.</p>
            </div>
            <div class="wrapper-service">
                <div class="swiper service-swiper">
                    <div class="swiper-wrapper service-wrapper">
                
                            
                        <div class="swiper-slide">
                            <div class="service-content">
                                <div class="service-image">
                                    <img src="{{asset('front-end/assets/imgs/dich-vu-1.jpg')}}" alt="dich-vu-1">
                                </div>
                                <div class="service-context">
                                    <div class="service-name">Giải pháp phát triển</div>
                                    <div class="service-desc">Kết nối doanh nghiệp với các chuyên gia trong các lĩnh vực để tư vấn những giải pháp phát triển bền vững</div>
                                    <div class="wrapper-btn">
                                        <a href="{{route('about')}}" class="btn-primary btn-readmore">
                                            Xem thêm <i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-content">
                                <div class="service-image">
                                    <img src="{{asset('front-end/assets/imgs/dich-vu-2.jpg')}}" alt="dich-vu-1">
                                </div>
                                <div class="service-context">
                                    <div class="service-name">Chuyển giao công nghệ</div>
                                    <div class="service-desc">Nhận chuyển giao và hỗ trợ chuyển giao công nghệ từ các tổ chức khoa học công nghệ trong và ngoài nước</div>
                                    <div class="wrapper-btn">
                                        <a href="{{route('about')}}" class="btn-primary btn-readmore">
                                            Xem thêm <i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-content">
                                <div class="service-image">
                                    <img src="{{asset('front-end/assets/imgs/dich-vu-3.jpg')}}" alt="dich-vu-1">
                                </div>
                                <div class="service-context">
                                    <div class="service-name">Kết nối cộng đồng</div>
                                    <div class="service-desc">Hỗ trợ doanh nghiệp gắn kết với Viện, trường, nhà khoa học để thúc đẩy ứng dụng công nghệ mới</div>
                                    <div class="wrapper-btn">
                                        <a href="{{route('about')}}" class="btn-primary btn-readmore">
                                            Xem thêm <i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-content">
                                <div class="service-image">
                                    <img src="{{asset('front-end/assets/imgs/dich-vu-4.jpg')}}" alt="dich-vu-1">
                                </div>
                                <div class="service-context">
                                    <div class="service-name">Vườn ươm doanh nghiệp</div>
                                    <div class="service-desc">Ươm mầm doanh nghiệp công nghệ (TBI) và thành lập Sàn giao dịch công nghệ vùng Đồng bằng Sông Cửu Long</div>
                                    <div class="wrapper-btn">
                                        <a href="{{route('about')}}" class="btn-primary btn-readmore">
                                            Xem thêm <i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-content">
                                <div class="service-image">
                                    <img src="{{asset('front-end/assets/imgs/dich-vu-5.jpg')}}" alt="dich-vu-1">
                                </div>
                                <div class="service-context">
                                    <div class="service-name">Nghiên cứu dự án</div>
                                    <div class="service-desc">Tổ chức thực hiện các dự án triển khai thực nghiệm, sản xuất thử nghiệm, ứng dụng công nghệ</div>
                                    <div class="wrapper-btn">
                                        <a href="{{route('about')}}" class="btn-primary btn-readmore">
                                            Xem thêm <i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-content">
                                <div class="service-image">
                                    <img src="{{asset('front-end/assets/imgs/dich-vu-6.jpg')}}" alt="dich-vu-1">
                                </div>
                                <div class="service-context">
                                    <div class="service-name">Bảo tồn gen quý</div>
                                    <div class="service-desc">Bảo tồn, lưu trữ và phát triển các nguồn gen quý hiếm cho toàn thành phố Cần Thơ</div>
                                    <div class="wrapper-btn">
                                        <a href="{{route('about')}}" class="btn-primary btn-readmore">
                                            Xem thêm <i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-pagination"></div>
                    {{-- <div class="swiper-button-prev"><i class='bx bx-arrow-back'></i></div>
                    <div class="swiper-button-next"><i class='bx bx-arrow-back bx-rotate-180' ></i></div> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="wrapper-title">
                <h2>Các cố vấn</h2>
            </div>
            <div class="wrapper-people">
                <div class="people-grid">
                    <div class="people-content">
                        <span class="people-avt">
                            <img src="https://ttud.com.vn/wp-content/uploads/2018/10/Vu_Thi_Thu_Ha-90x90.jpg" alt="avatar">
                        </span>
                        <div class="people-context">
                            <div class="people-name">
                                GS. TS Vũ Thị Thu Hà
                            </div>
                            <div class="people-desc">
                                Giám đốc phòng thí nghiệm trọng điểm quốc gia lọc hóa dầu, Tập đoàn Hóa chất Việt Nam.
                            </div>
                        </div>
                    </div>
                    <div class="people-content">
                        <span class="people-avt">
                            <img src="https://ttud.com.vn/wp-content/uploads/2018/10/Dung-in-Koln-small-90x90.jpg" alt="avatar">
                        </span>
                        <div class="people-context">
                            <div class="people-name">
                                TS. Trần Hoàng Dũng
                            </div>
                            <div class="people-desc">
                                Tiến sĩ khoa học tự nhiên; Giảng viên Đại học Công nghiệp TP.HCM.
                            </div>
                        </div>
                    </div>
                    <div class="people-content">
                        <span class="people-avt">
                            <img src="https://ttud.com.vn/wp-content/uploads/2018/10/TPVu-1-90x90.jpg" alt="avatar">
                        </span>
                        <div class="people-context">
                            <div class="people-name">
                                TS. THÁI PHƯƠNG VŨ
                            </div>
                            <div class="people-desc">
                                Chuyên môn: Kỹ thuật Môi trường, Quản lý Môi trường
                            </div>
                        </div>
                    </div>
                    <div class="people-content">
                        <span class="people-avt">
                            <img src="https://ttud.com.vn/wp-content/uploads/2018/08/dovoanhkhoa-90x90.png" alt="avatar">
                        </span>
                        <div class="people-context">
                            <div class="people-name">
                                PGS.TS. ĐỖ VÕ ANH KHOA
                            </div>
                            <div class="people-desc">
                                Tiến sĩ chuyên ngành: Di truyền Miễn dịch Động vật - Đại học Bonn và Viện Sinh học Gia súc FBN-Dummerstorf, CHLB Đức Bộ môn Chăn nuôi, Khoa Nông nghiệp và Sinh học Ứng dụng, Đại học Cần Thơ
                            </div>
                        </div>
                    </div>
                    <div class="people-content">
                        <span class="people-avt">
                            <img src="https://ttud.com.vn/wp-content/uploads/2018/06/Ts.Mai_-90x90.png" alt="avatar">
                        </span>
                        <div class="people-context">
                            <div class="people-name">
                                TS. Ngô Trương Ngọc Mai
                            </div>
                            <div class="people-desc">
                                Tiến sĩ chuyên ngành: Vật liệu Vô Cơ
                            </div>
                        </div>
                    </div>
                    <div class="people-content">
                        <span class="people-avt">
                            <img src="https://ttud.com.vn/wp-content/uploads/2018/06/tvnha-90x90.jpg" alt="avatar">
                        </span>
                        <div class="people-context">
                            <div class="people-name">
                                ThS. Trần Văn Nhã
                            </div>
                            <div class="people-desc">
                                Thạc sỹ chuyên ngành: Kỹ Thuật Hệ Thống Công Nghiệp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-style">
        <div class="container">
            <div class="wrapper-title">
                <h2>Sản phẩm công nghệ</h2>
                <p>Chúng tôi mang đến những sản phẩm tốt nhất đến thị trường.</p>
            </div>
            <div class="product-home">
                <div class="product-content">
                    <div class="product-image">
                        <img src="https://ttud.com.vn/wp-content/uploads/2024/10/3731_ca-tra.jpg" alt="product">
                    </div>
                    <div class="product-data">
                        <div class="product-info">
                            <span class="date">
                                <i class="fa-regular fa-calendar-check"></i>
                                09/09/2023
                            </span>
                            <span class="admin">
                                <i class="fa-light fa-user"></i>
                                devkool
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
                        <img src="https://ttud.com.vn/wp-content/uploads/2024/10/3731_ca-tra.jpg" alt="product">
                    </div>
                    <div class="product-data">
                        <div class="product-info">
                            <span class="date">
                                <i class="fa-regular fa-calendar-check"></i>
                                09/09/2023
                            </span>
                            <span class="admin">
                                <i class="fa-light fa-user"></i>
                                devkool
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
                        <img src="https://ttud.com.vn/wp-content/uploads/2024/10/3731_ca-tra.jpg" alt="product">
                    </div>
                    <div class="product-data">
                        <div class="product-info">
                            <span class="date">
                                <i class="fa-regular fa-calendar-check"></i>
                                09/09/2023
                            </span>
                            <span class="admin">
                                <i class="fa-light fa-user"></i>
                                devkool
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
        </div>
    </section>


    <div id="videoModal" class="modal-video">
        <div class="modal-content">
            <span class="close-btn"><i class="fa-regular fa-xmark"></i></span>
            <div class="video-container">
                <iframe id="youtubeVideo" width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
        </div>
    </div>
@endsection