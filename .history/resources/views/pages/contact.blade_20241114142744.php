@extends('layouts.page')

@section('content')
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
        <div class="elementor-contact">
            <div class="contact-row">
                <div class="contact-col">
                    <div class="contact-title">
                        TRỤ SỞ CHÍNH
                    </div>
                    <div class="contact-text">
                        Quốc lộ 80, Khu công nghiệp Vàm Cống, ấp An Thạnh, xã Bình Thành, huyện Lấp Vò, Tỉnh Đồng Tháp, Việt Nam
                    </div>
                    <div class="contact-text">
                        Điện thoại: +84 2773 680 383 - +84 2777300 468
                    </div>
                    <div class="contact-text">
                        Fax: +84 2773 680 382
                    </div>
                    <div class="contact-text">
                        Email: info@idiseafood.com
                    </div>
                </div>
                <div class="contact-col">
                    <div class="contact-title">
                        VĂN PHÒNG ĐẠI DIỆN Tại cần thơ
                    </div>
                    <div class="contact-text">
                        9 Nguyễn Kim, phường 12, quận 5 Thành phố Hồ Chí Minh Việt Nam
                    </div>
                    <div class="contact-text">
                        Điện thoại: +84 932 824 888
                    </div>
                </div>
            </div>
            <div class="gg-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7858.274835788155!2d105.72368!3d10.005506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a088372f7d3079%3A0x2bc3836c2ec35bba!2zVHJ1bmcgVMOibSDhu6huZyBE4bulbmcgVGnhur9uIELhu5kgS2hvYSBI4buNYyBWw6AgQ8O0bmcgTmdo4buH!5e0!3m2!1svi!2sus!4v1731569054489!5m2!1svi!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection