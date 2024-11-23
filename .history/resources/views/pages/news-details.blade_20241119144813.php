@extends('layouts.page')

@section('content')
    <section class="section">
        <div class="container">
            <div class="wrapper-newspage">
                <div class="newspage-title">{{$news->name}}Ư</div>
                <div class="newspage-action">
                    <span class="created-date"><i class="fa-regular fa-calendar"></i> 11/11/2024</span>
                    <div class="share-social">
                        <a href="#" class="share-social-item">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="share-social-item">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="wrapper-text">
                    <p class="text-p">
                        Bước sang năm 2024, ngành thủy sản Việt Nam đón nhận nhiều thông tin lạc quan từ thị trường nhập khẩu trên thế giới như Mỹ, Trung Quốc, Trung Đông và khối ASEAN… Ngoài ra, Anh, Brazil bất ngờ chi đậm nhập khẩu cá tra Việt Nam. 
                    </p>
                    <p class="text-p">
                        Mới đây, Bộ Thương mại Mỹ (DOC) đã công bố kết quả cuối cùng cho đợt rà soát thuế chống bán phá giá lần thứ 19 (POR19) đối với mặt hàng cá tra phi-lê đông lạnh của Việt Nam xuất khẩu vào thị trường này.
                    </p>
                    <figure class="text-image">
                        <img src="https://www.idiseafood.com/vnt_upload/news/07_2024/1S6A0763.jpg" alt="image">
                    </figure>
                    <figure class="text-image">
                        <img src="https://www.idiseafood.com/vnt_upload/news/07_2024/ky_ket_hop_tac_1.jpg" alt="image">
                    </figure>
                    <p class="text-p">
                        Theo VASEP, mức thuế lần này của DOC đưa ra đã giảm đáng kể so với mức thuế của lần rà soát trước (kỳ thứ 18). Đây là tín hiệu tích cực cho các doanh nghiệp xuất khẩu cá tra của Việt Nam trong thời gian tới.
                    </p>
                    <figure class="text-image">
                        <img src="https://www.idiseafood.com/vnt_upload/news/07_2024/ky_ket_hop_tac_5.jpg" alt="image">
                    </figure>
                    <p class="text-p">
                        Theo đó, IDI là 1 trong 6 doanh nghiệp xuất khẩu cá tra Việt Nam được hưởng mức thuế chống bán phá giá thấp. Đây là một lợi thế lớn cho Cty IDI để tiếp tục lấn sâu và gia tăng thị phần tại Hoa Kỳ kể cả Nam Mỹ.  
                    </p>
                    <p class="text-p">
                        Chiều 25/7, tại TP Long Xuyên, An Giang, đã diễn ra Lễ Ký kết Đối tác chiến lược phát triển thị trường Mỹ và Nam Mỹ giữa Công ty CP Đầu tư và phát triển Đa quốc gia (IDI Seafood Corporation) và Công ty PATAGONIA CUISINE LLC - ATLANTA, bang GEORGIA - Hoa Kỳ, do ông Alberto Valenzuela làm Giám đốc điều hành. 
                    </p>
                    <p class="text-p">
                        Hợp tác giữa IDI Seafood Corp và PATAGONIA CUISINE LLC đã thể hiện tầm nhìn mang tính bứt phá, khẩn trương cho mùa mua sắm 6 tháng cuối năm tại Mỹ và các nước Châu Âu, Nam Mỹ. Hai bên cùng hợp sức để xây dựng thành công “thương hiệu IDI” trở nên lớn mạnh, củng cố tiềm lực cho hành trình phát triển bền vững. 
                    </p>
                </div>
                <div class="wrapper-related">
                    <div class="related-head">Các tin khác</div>
                    <ul class="related-list">
                        <li class="related-item">
                            <a href="#" class="related-link">
                                <div class="div">
                                    <span class="related-icon">
                                        <i class="fa-solid fa-circle-caret-right"></i>
                                    </span>
                                    <div class="related-title"> TIN VUI I.D.I ĐƯỢC ÁP THUẾ THẤP KHI XUẤT KHẨU CÁ TRA VÀO MỸ</div>
                                </div>
                                <span class="created-date"><i class="fa-regular fa-calendar"></i> 11/11/2024</span>
                            </a>
                        </li>
                        <li class="related-item">
                            <a href="#" class="related-link">
                                <div class="div">
                                    <span class="related-icon">
                                        <i class="fa-solid fa-circle-caret-right"></i>
                                    </span>
                                    <div class="related-title">  MIỄN NHIỆM CHỨC DANH PHÓ TỔNG GIÁM ĐỐC ĐỐI VỚI ÔNG PHẠM ĐÌNH NAM</div>
                                </div>
                                <span class="created-date"><i class="fa-regular fa-calendar"></i> 01/11/2024</span>
                            </a>
                        </li>
                        <li class="related-item">
                            <a href="#" class="related-link">
                                <div class="div">
                                    <span class="related-icon">
                                        <i class="fa-solid fa-circle-caret-right"></i>
                                    </span>
                                    <div class="related-title"> IDI DỰ KIẾN ĐẠT LỢI NHUẬN SAU THUẾ 228 TỶ ĐỒNG VÀ HOÀN THÀNH 130% KẾ HOẠCH SAU 9 THÁNG NĂM 2017</div>
                                </div>
                                <span class="created-date"><i class="fa-regular fa-calendar"></i> 11/05/2024</span>
                            </a>
                        </li>
                        <li class="related-item">
                            <a href="#" class="related-link">
                                <div class="div">
                                    <span class="related-icon">
                                        <i class="fa-solid fa-circle-caret-right"></i>
                                    </span>
                                    <div class="related-title"> TIN VUI I.D.I ĐƯỢC ÁP THUẾ THẤP KHI XUẤT KHẨU CÁ TRA VÀO MỸ</div>
                                </div>
                                <span class="created-date"><i class="fa-regular fa-calendar"></i> 11/11/2024</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="clear-ft"></div>
@endsection