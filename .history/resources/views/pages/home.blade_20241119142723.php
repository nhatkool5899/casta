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
                        <img src="{{asset('uploads/banner/'.$item->image)}}" alt="{{$item->image}}">
                    </div>
                </div>            
                @endforeach
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
                
                        @foreach ($service as $item)
                        <div class="swiper-slide">
                            <div class="service-content">
                                <div class="service-image">
                                    <img src="{{asset('uploads/service/'.$item->image)}}" alt="dich-vu-1">
                                </div>
                                <div class="service-context">
                                    <div class="service-name">{{$item->name}}</div>
                                    <div class="service-desc">{{$item->description}}</div>
                                    <div class="wrapper-btn">
                                        <a href="{{url('dich-vu/'.$item->slug)}}" class="btn-primary btn-readmore">
                                            Xem chi tiết <i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
        <span class="shape-1">
            <img src="{{asset('front-end/assets/imgs/shape-3.png')}}" alt="shape-1">
        </span>
        <span class="shape-2">
            <img src="{{asset('front-end/assets/imgs/shape-4.png')}}" alt="shape-1">
        </span>
        <div class="container">
            <div class="wrapper-title">
                <h2>Sản phẩm công nghệ</h2>
                <p>Chúng tôi mang đến những sản phẩm tốt nhất đến thị trường.</p>
            </div>
            <div class="product-home">
                <div class="swiper swiper-home">
                    <div class="swiper-wrapper">

                        @foreach ($news_1 as $item)
                            
                        <div class="swiper-slide">
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
                                    <a href="{{url('chi-tiet-tin-tuc')}}" class="product-title">{{$item->name}}</a>
                                    <div class="product-desc">
                                        {{$item->description}}
                                    </div>
                                    <a href="{{url('chi-tiet-tin-tuc')}}" class="read-mode">
                                        Đọc thêm <i class="fa-regular fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
                <div class="menu-slide">
                    <span class="home-prev-slide btn-slide"><i class="fa-regular fa-chevron-left"></i></span>
                    <span class="home-next-slide btn-slide"><i class="fa-regular fa-chevron-right"></i></span>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="wrapper-video">
                <img class="bg-image" src="{{asset('front-end/assets/imgs/demo01.jpg')}}" alt="background">
                <div class="video-context">
                    <h3>ĐẨY MẠNH ỨNG DỤNG KHOA HỌC VÀ CÔNG NGHỆ VÀO CUỘC SỐNG</h3>
                    <div class="btn-play" id="openModalBtn">
                        <i class="fa-sharp fa-solid fa-play"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="wrapper-title">
                <h2>Sự kiện</h2>
                <p>Cập nhật những tin tức - sự kiện mới nhất.</p>
            </div>
            <div class="wrapper-news">
                <div class="swiper swiper-news">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="news-inner">
                                <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-img">
                                    <img src="https://ttud.com.vn/wp-content/uploads/2024/09/z5842776648335_f66a8f457fad072d52b3dde1b9081568-1024x768.jpg" alt="image">
                                </a>
                                <div class="news-inner-context">
                                    <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-name">Tập huấn “Quản lý dữ liệu truy xuất nguồn gốc sản phẩm, hàng hóa nông nghiệp trên địa bạn thành phố Cần Thơ”</a>
                                    <div class="news-inner-bot">
                                        <div class="news-inner-info">
                                            <span><i class="fa-regular fa-calendar"></i> 11/11/2024</span>
                                            <span><i class="fa-regular fa-eye"></i> 5899</span>
                                        </div>
                                        <a href="{{url('chi-tiet-tin-tuc')}}" class="btn-primary btn-news">
                                            Xem thêm<i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="news-inner">
                                <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-img">
                                    <img src="https://ttud.com.vn/wp-content/uploads/2024/09/z5816028666594_ee58ab72330babd9aa3a38ae891a8043-1024x768.jpg" alt="image">
                                </a>
                                <div class="news-inner-context">
                                    <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-name">Tập huấn “Hướng dẫn sử dụng Hệ thống quản lý truy xuất nguồn gốc sản phẩm, hàng hóa thành phố Cần Thơ”.</a>
                                    <div class="news-inner-bot">
                                        <div class="news-inner-info">
                                            <span><i class="fa-regular fa-calendar"></i> 11/11/2024</span>
                                            <span><i class="fa-regular fa-eye"></i> 5899</span>
                                        </div>
                                        <a href="{{url('chi-tiet-tin-tuc')}}" class="btn-primary btn-news">
                                            Xem thêm<i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="news-inner">
                                <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-img">
                                    <img src="https://ttud.com.vn/wp-content/uploads/2024/09/image-2.png" alt="image">
                                </a>
                                <div class="news-inner-context">
                                    <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-name">Chào Mừng Ngày Quốc Khánh 2/9 – Niềm Tự Hào Của Dân Tộc Việt Nam!</a>
                                    <div class="news-inner-bot">
                                        <div class="news-inner-info">
                                            <span><i class="fa-regular fa-calendar"></i> 11/11/2024</span>
                                            <span><i class="fa-regular fa-eye"></i> 5899</span>
                                        </div>
                                        <a href="{{url('chi-tiet-tin-tuc')}}" class="btn-primary btn-news">
                                            Xem thêm<i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="news-inner">
                                <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-img">
                                    <img src="https://www.idiseafood.com/vnt_upload/news/09_2022/xuatkhaucatra_lmnz.jpeg" alt="image">
                                </a>
                                <div class="news-inner-context">
                                    <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-name">DOANH NGHIỆP ẤN ĐỘ KẾT NỐI CƠ HỘI HỢP TÁC KINH DOANH VỚI LĨNH VỰC  THỦY SẢN CỦA TẬP ĐOÀN SAO MAI</a>
                                    <div class="news-inner-bot">
                                        <div class="news-inner-info">
                                            <span><i class="fa-regular fa-calendar"></i> 11/11/2024</span>
                                            <span><i class="fa-regular fa-eye"></i> 5899</span>
                                        </div>
                                        <a href="{{url('chi-tiet-tin-tuc')}}" class="btn-primary btn-news">
                                            Xem thêm<i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="news-prev-slide slide-btn-mid"><i class="fa-solid fa-chevron-left"></i></span>
                <span class="news-next-slide slide-btn-mid"><i class="fa-solid fa-chevron-right"></i></span>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="wrapper-title">
                <h2>Liên hệ - góp ý</h2>
                <p>Quan tâm thêm về chúng tôi hoặc sản phẩm của chúng tôi? Hãy liên hệ ngay để biết thêm thông tin trực tiếp:</p>
            </div>
            <div class="form-contact">
				<div class="wrap">
					<form id="formContact" method="post" class="">
						<div class="form-title">
							<h2>GỬI TIN NHẮN</h2>
						</div>
						<div class="form-flex">
							<div class="col-md-6">
								<div class="form-group">
                                    <div class="div_input">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Họ tên *">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="div_input">
										<input type="text" name="phone" id="phone" class="form-control" placeholder="Điện thoại *">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="div_input">
										<input type="text" name="email" id="email" class="form-control" placeholder="Email *">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="div_input">
										<input type="text" name="address" id="address" class="form-control" placeholder="Địa chỉ *">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="div_input">
										<input type="text" name="subject" id="subject" class="form-control" placeholder="Tiêu đề *">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="div_input">
										<textarea class="form-control textarea" id="content" name="content" rows="3" placeholder="Nội dung liên lạc *"></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<div class="colright vbtcontact">
										<button type="submit" class="btn-send-contact" value="Gửi liên hệ"><span>Gửi liên hệ</span></button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="wrapper-title">
                <h2>Tin tức</h2>
            </div>
            <div class="wrapper-news">
                <div class="swiper swiper-news">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="news-inner">
                                <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-img">
                                    <img src="https://ttud.com.vn/wp-content/uploads/2024/11/183A34BC-6D2B-4BE8-A4EF-EC31B043B285.jpeg" alt="image">
                                </a>
                                <div class="news-inner-context">
                                    <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-name">
                                        Đổi mới cơ chế quản lý chất lượng sản phẩm, hàng hóa trong thời đại cách mạng công nghiệp 4.0</a>
                                    <div class="news-inner-bot">
                                        <div class="news-inner-info">
                                            <span><i class="fa-regular fa-calendar"></i> 11/11/2024</span>
                                            <span><i class="fa-regular fa-eye"></i> 5899</span>
                                        </div>
                                        <a href="{{url('chi-tiet-tin-tuc')}}" class="btn-primary btn-news">
                                            Xem thêm<i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="news-inner">
                                <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-img">
                                    <img src="https://ttud.com.vn/wp-content/uploads/2024/11/doanh-nghiep.jpg" alt="image">
                                </a>
                                <div class="news-inner-context">
                                    <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-name">Trách nhiệm bảo vệ môi trường là chìa khóa giúp doanh nghiệp phát triển bền vững</a>
                                    <div class="news-inner-bot">
                                        <div class="news-inner-info">
                                            <span><i class="fa-regular fa-calendar"></i> 11/11/2024</span>
                                            <span><i class="fa-regular fa-eye"></i> 5899</span>
                                        </div>
                                        <a href="{{url('chi-tiet-tin-tuc')}}" class="btn-primary btn-news">
                                            Xem thêm<i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="news-inner">
                                <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-img">
                                    <img src="https://www.idiseafood.com/vnt_upload/news/07_2023/Picture3.png" alt="image">
                                </a>
                                <div class="news-inner-context">
                                    <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-name">DOANH NGHIỆP ẤN ĐỘ KẾT NỐI CƠ HỘI HỢP TÁC KINH DOANH VỚI LĨNH VỰC  THỦY SẢN CỦA TẬP ĐOÀN SAO MAI</a>
                                    <div class="news-inner-bot">
                                        <div class="news-inner-info">
                                            <span><i class="fa-regular fa-calendar"></i> 11/11/2024</span>
                                            <span><i class="fa-regular fa-eye"></i> 5899</span>
                                        </div>
                                        <a href="{{url('chi-tiet-tin-tuc')}}" class="btn-primary btn-news">
                                            Xem thêm<i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="news-inner">
                                <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-img">
                                    <img src="https://ttud.com.vn/wp-content/uploads/2024/10/6-Sigma-co-the-ap-dung-duoc-hau-het-cho-cac-doanh-nghiep-moi-linh-vuc-nhu-may-mac-co-khi-1024x684.jpg" alt="image">
                                </a>
                                <div class="news-inner-context">
                                    <a href="{{url('chi-tiet-tin-tuc')}}" class="news-inner-name">Giải pháp, công cụ loại bỏ lãng phí vận chuyển trong năng suất</a>
                                    <div class="news-inner-bot">
                                        <div class="news-inner-info">
                                            <span><i class="fa-regular fa-calendar"></i> 11/11/2024</span>
                                            <span><i class="fa-regular fa-eye"></i> 5899</span>
                                        </div>
                                        <a href="{{url('chi-tiet-tin-tuc')}}" class="btn-primary btn-news">
                                            Xem thêm<i class="fa-regular fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="news-prev-slide slide-btn-mid"><i class="fa-solid fa-chevron-left"></i></span>
                <span class="news-next-slide slide-btn-mid"><i class="fa-solid fa-chevron-right"></i></span>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="wrapper-partner">
                <div class="swiper swiper-partner">
                    <div class="partner swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="partner-item">
                                <img src="{{asset('front-end/assets/imgs/partner/p-1.jpg')}}" alt="doi-tac-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner-item">
                                <img src="{{asset('front-end/assets/imgs/partner/p-2.jpg')}}" alt="doi-tac-2">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner-item">
                                <img src="{{asset('front-end/assets/imgs/partner/p-3.jpg')}}" alt="doi-tac-3">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner-item">
                                <img src="{{asset('front-end/assets/imgs/partner/p-4.jpg')}}" alt="doi-tac-4">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner-item">
                                <img src="{{asset('front-end/assets/imgs/partner/p-5.jpg')}}" alt="doi-tac-5">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner-item">
                                <img src="{{asset('front-end/assets/imgs/partner/p-6.jpg')}}" alt="doi-tac-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-slide">
                    <span class="partner-prev-slide btn-slide"><i class="fa-regular fa-chevron-left"></i></span>
                    <span class="partner-next-slide btn-slide"><i class="fa-regular fa-chevron-right"></i></span>
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