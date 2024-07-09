<template>
<SetMenu />
<HomeHeader />
<main>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Shoop</a></li>
            <li class="breadcrumb-item"><a href="#">Máy tính & Laptop</a></li>
            <li class="breadcrumb-item"><a href="#">Laptop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Máy tính xách tay Apple MacBook Air (2020) M1 Chip, 13.3-inch, 8GB, 256GB SSD</li>
        </ol>
    </nav>
    <div class="container0">
        <div class="thumb">
            <img src="@/assets/detail1.png">
            <div class="slider">
                <div id="img-list">
                    <div>
                        <img src="@/assets/detail2.png" alt="">

                        <img src="@/assets/detail3.png" alt="">

                        <img src="@/assets/detail4.png" alt="">
                        <img src="@/assets/detail5.png" alt="">

                        <img src="@/assets/detail6.png" alt="">
                    </div>
                </div>
                <img src="@/assets/arrow-right.png" alt="ArrowRight" id="ArrowRight">
                <img src="@/assets/arrow-left.png" alt="ArrowLeft" id="ArrowLeft">
            </div>
        </div>
        <div class="infor">
            <div class="info1">
                <h5>Máy tính xách tay Apple MacBook Air (2020) M1 Chip, 13.3-inch, 8GB, 256GB SSD</h5>
            </div>
            <div class="pdp-block" id="block">
                <div class="left-block" id="block1">
                    <div class="rating-block" id="review">
                        <div class="rating-block1" id="review1">
                            <p>5.0
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> </p>
                            <p><strong> 2,2k </strong> Đánh giá </p>
                            <p> <strong> 7,9k </strong> Đã bán</p>
                        </div>
                    </div>
                </div>
                <div class="right-block" id="block2">
                    <p>Tố cáo</p>
                </div>
            </div>
            <div class="price">
                <div class="oldprice">
                    <p>₫28.990.000</p>
                </div>
                <div class="newprice">
                    <p>₫19.290.000</p>
                </div>
                <div class="sale">
                    <p>33% GIẢM</p>
                </div>
            </div>
            <div class="ship">
                <div class="vanchuyen">
                    <p>Vận chuyển</p>
                </div>
                <div class="soluong">
                    <p>Xử lý đơn hàng bởi Shoop</p>
                    <p>Miễn phí vận chuyển</p>
                    <div class="dia_diem">
                        <div class="dia_diem1">
                            <p>Vận Chuyển Tới </p>
                            <p>Phí vận chuyển</p>
                        </div>
                        <div class="dia_diem2">
                            <div class="huyen-ba-vi">
                                <select class="form-select">
                                    <option selected>Huyện Ba Vì</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="phivanchuyen">
                                <select class="form-select">
                                    <option selected>₫0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="color-picker">
                <div class="mau_sac">
                    <p>Màu sắc</p>
                </div>
                <div class="chon_mau">
                    <button type="button" onclick="alert('Gold')">
                        <img src="@/assets/pick-color.png"> Gold
                    </button>
                    <button type="button" onclick="alert('Sliver')">
                        <img src="@/assets/pick-color.png"> Sliver
                    </button>
                    <button type="button" onclick="alert('Space gray')">
                        <img src="@/assets/pick-color.png"> Space gray
                    </button>
                </div>
            </div>
            <div class="quantity">
                <div class="qnt1">
                    <p>Số lượng</p>
                </div>
                <div class="qnt2">
                    <input type="number" value="0" min="0" max="100" step="1" />
                </div>
            </div>
            <div class="buy">
                <button type="button" class="btn btn-secondary btn-lg">Thêm vào giỏ hàng</button>
                <button type="button" class="btn btn-primary btn-lg">Mua ngay</button>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="infor1">
            <div class="container-left">
                <div class="logo">
                    <h3>A</h3>
                </div>
                <div class="content">
                    <h5>Apple Flagship Store</h5>
                    <p>Online 15 Giờ Trước</p>
                    <button type="button" id="active" onclick="alert('Chat ngay')"> Chat ngay
                    </button>
                    <button type="button" id="not-active" onclick="alert('Xem shop')"> Xem shop
                    </button>
                </div>
            </div>
        </div>
        <div class="infor2">
            <div class="shop">
                <div class="shop1">
                    <div class="left1">
                        <p>Đánh giá</p>
                        <p>Sản phẩm</p>
                    </div>
                    <div class="right1">
                        <p>67,6k</p>
                        <p>300</p>
                    </div>
                </div>
                <div class="shop2">
                    <div class="left1">
                        <p>Tỉ Lệ Phản Hồi</p>
                        <p>Thời Gian Phản Hồi</p>
                    </div>
                    <div class="right1">
                        <p>100%</p>
                        <p>trong vài giờ</p>
                    </div>
                </div>
                <div class="shop3">
                    <div class="left1">
                        <p>Tham gia</p>
                        <p>Người theo dõi</p>
                    </div>
                    <div class="right1">
                        <p>5 năm trước</p>
                        <p>588k</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container3">
        <div class="title">
            <h4>CHI TIẾT SẢN PHẨM</h4>
        </div>
        <div class="detail">
            <div class="detail-left">
                <p>Danh Mục</p>
                <p>Thương hiệu</p>
                <p>Loại laptop</p>
                <p>Kho hàng</p>
                <p>Gửi từ</p>
            </div>
            <div class="detail-right">
                <p id="apple">Shoop / Máy Tính & Laptop / Laptop</p>
                <p id="apple">Apple</p>
                <p id="normal-text">Khác</p>
                <p id="normal-text">180</p>
                <p id="normal-text">Bắc Ninh</p>
            </div>
        </div>
        <div class="title2">
            <h4>MÔ TẢ SẢN PHẨM</h4>
        </div>
        <div class="detail2">
            <p>Máy tính xách tay mỏng và nhẹ nhất của Apple, nay siêu mạnh mẽ với chip Apple M1. Xử lý công việc giúp bạn với CPU 8 lõi nhanh như chớp. Đưa các ứng dụng và game có đồ họa khủng lên một tầm cao mới với GPU 7 lõi. Đồng thời, tăng tốc các tác vụ máy học với Neural Engine 16 lõi. Tất cả gói gọn trong một thiết kế không quạt, giảm thiểu tiếng ồn, thời lượng pin dài nhất từ trước đến nay lên đến 18 giờ (1) MacBook Air. Vẫn cực kỳ cơ động. Mà mạnh mẽ hơn nhiều.</p>
        </div>
        <div class="detail3">
            <p>Tính năng nổi bật</p>
            <ul class="unord-list">
                <li>Chip M1 do Apple thiết kế tạo ra một cú nhảy vọt về hiệu năng máy học, CPU và GPU</li>
                <li>Tăng thời gian sử dụng với thời lượng pin lên đến 18 giờ (1)</li>
                <li>CPU 8 lõi cho tốc độ nhanh hơn đến 3.5x, xử lý công việc nhanh chóng hơn bao giờ hết (2)</li>
                <li>GPU lên đến 7 lõi với tốc độ xử lý đồ họa nhanh hơn đến 5x cho các ứng dụng và game đồ họa khủng (2)</li>
                <li>Neural Engine 16 lõi cho công nghệ máy học hiện đại</li>
                <li>Bộ nhớ thống nhất 8GB giúp bạn làm việc gì cũng nhanh chóng và trôi chảy</li>
                <li>Ổ lưu trữ SSD siêu nhanh giúp mở các ứng dụng và tập tin chỉ trong tích tắc</li>
                <li>Thiết kế không quạt giảm tối đa tiếng ồn khi sử dụng</li>
                <li>Màn hình Retina 13.3 inch với dải màu rộng P3 cho hình ảnh sống động và chi tiết ấn tượng (3)</li>
                <li>Camera FaceTime HD với bộ xử lý tín hiệu hình ảnh tiên tiến cho các cuộc gọi video đẹp hình, rõ tiếng hơn</li>
                <li>Bộ ba micro phối hợp tập trung thu giọng nói của bạn, không thu tạp âm môi trường</li>
                <li>Wi-Fi 6 thế hệ mới giúp kết nối nhanh hơn</li>
                <li>Hai cổng Thunderbolt / USB 4 để sạc và kết nối phụ kiện</li>
                <li>Bàn phím Magic Keyboard có đèn nền và Touch ID giúp mở khóa và thanh toán an toàn hơn</li>
                <li>macOS Big Sur với thiết kế mới đầy táo bạo cùng nhiều cập nhật quan trọng cho các ứng dụng Safari, Messages và Maps</li>
                <li>Hiện có màu vàng kim, xám bạc và bạc</li>
            </ul>
        </div>
        <div class="detail4">
            <p>Pháp lý</p>
            <p>Hiện có sẵn các lựa chọn để nâng cấp.</p>
            <p>(1) Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình. Truy cập apple.com/batteries để biết thêm thông tin.</p>
            <p>(2) So với thế hệ máy trước.</p>
            <p>(3) Kích thước màn hình tính theo đường chéo.</p>
        </div>
        <div class="detail5">
            <p>Thông tin bảo hành:</p>
            <p>Bảo hành: 12 tháng kể từ ngày kích hoạt sản phẩm.</p>
            <p>Kích hoạt bảo hành tại: <a href="#">https://checkcoverage.apple.com/vn/en/</a></p>
        </div>
        <div class="detail6">
            <p>Hướng dẫn kiểm tra địa điểm bảo hành gần nhất:</p>
            <p>Bước 1: Truy cập vào đường link <a href="#">https://getsupport.apple.com/?caller=grl&locale=en_VN</a></p>
            <p>Bước 2: Chọn sản phẩm.</p>
            <p>Bước 3: Điền Apple ID, nhập mật khẩu.</p>
            <p>Sau khi hoàn tất, hệ thống sẽ gợi ý những trung tâm bảo hành gần nhất.</p>
        </div>
        <div class="detail7">
            <p>Tại Việt Nam, về chính sách bảo hành và đổi trả của Apple, "sẽ được áp dụng chung" theo các điều khoản được liệt kê dưới đây:</p>
            <p>1) Chính sách chung: <a href="#">https://www.apple.com/legal/warranty/products/warranty-rest-of-apac-vietnamese.html</a></p>
            <p>2) Chính sách cho phụ kiện: <a href="">https://www.apple.com/legal/warranty/products/accessory-warranty-vietnam.html</a></p>
            <p>3) Các trung tâm bảo hành Apple ủy quyền tại Việt Nam: https://getsupport.apple.com/repair-locations?locale=vi_VN</p>
            <p>Quý khách vui lòng đọc kỹ hướng dẫn và quy định trên các trang được Apple công bố công khai, Shop chỉ có thể hỗ trợ theo đúng chính sách được đăng công khai của thương hiệu Apple tại Việt Nam.</p>
        </div>
        <div class="detail8">
            <p>Bài viết tham khảo chính sách hỗ trợ của nhà phân phối tiêu biểu:</p>
            <a href="#">https://synnexfpt.com/bao-hanh/chinh-sach-bao-hanh/?agency-group=1&agency-slug=san-pham-apple</a>
        </div>
        <div class="detail9">
            <p> Để thuận tiện hơn trong việc xử lý khiếu nại, đơn hàng của Brand Apple thường có giá trị cao, quý khách mua hàng vui lòng quay lại Clip khui mở kiện hàng (khách quan nhất có thể, đủ 6 mặt) giúp Shopee có thêm căn cứ để làm việc với các bên và đẩy nhanh tiến độ xử lý giúp Qúy khách mua hàng.</p>
        </div>
    </div>
    <div class="container4">
        <div class="cmt">
            <h4>ĐÁNH GIÁ SẢN PHẨM</h4>
        </div>
        <div class="rate">
            <div class="rate-left">
                <div class="rate-top">
                    <div class="rate-top1">
                        <p>5.0</p>
                    </div>
                    <div class="rate-top2">
                        <p>trên 5</p>
                    </div>
                </div>
                <div class="rate-bot">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
            </div>
            <div class="rate-right">
                <div class="rate-button">
                    <button type="button" class="btn btn-secondary btn-lg">
                        <p>Tất Cả</p>
                    </button>
                    <button type="button" class="btn btn-secondary btn-lg">
                        <p>5 Sao (2,1k)</p>
                    </button>
                    <button type="button" class="btn btn-secondary btn-lg">
                        <p>4 Sao (31)</p>
                    </button>
                    <button type="button" class="btn btn-secondary btn-lg">
                        <p>3 Sao (31)</p>
                    </button>
                    <button type="button" class="btn btn-secondary btn-lg">
                        <p>2 Sao (31)</p>
                    </button>
                    <button type="button" class="btn btn-secondary btn-lg">
                        <p>1 Sao (31)</p>
                    </button>
                    <button type="button" id="cmt-button" class="btn btn-secondary btn-lg">
                        <p>Có bình luận (31)</p>
                    </button>
                    <button type="button" id="spec-button" class="btn btn-secondary btn-lg">
                        <p>Có Hình Ảnh / Video (739)</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="cmt-section">
            <div class="logo1">
                <h3>A</h3>
            </div>
            <div class="rate-bot1">
                <p>dangquocchan</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <p id="cmt-text">2022-03-31 20:45 | Phân loại hàng: Space Gray</p>
                <p id="cmt-text2">Máy mỏng nhẹ, lướt nhanh. Shop đóng gói kỹ, đặt 12h thứ 6 mà 9h sáng thứ 7 đã nhận được, xuất sắc shop ơi.</p>
            </div>
            <div class="slider1">
                <div id="img-list1">
                    <div>
                        <img src="@/assets/cmt.png" alt="">
                        <img src="@/assets/cmt.png" alt="">
                        <img src="@/assets/cmt.png" alt="">
                        <img src="@/assets/cmt.png" alt="">
                    </div>
                </div>
            </div>
            <div class="logo1">
                <h3>A</h3>
            </div>
            <div class="rate-bot1">
                <p>dangquocchan</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <p id="cmt-text">2022-03-31 20:45 | Phân loại hàng: Space Gray</p>
                <p id="cmt-text2">Máy mỏng nhẹ, lướt nhanh. Shop đóng gói kỹ, đặt 12h thứ 6 mà 9h sáng thứ 7 đã nhận được, xuất sắc shop ơi.</p>
            </div>
            <div class="slider1">
                <div id="img-list1">
                    <div>
                        <img src="@/assets/cmt.png" alt="">
                        <img src="@/assets/cmt.png" alt="">
                        <img src="@/assets/cmt.png" alt="">
                        <img src="@/assets/cmt.png" alt="">
                    </div>
                </div>
            </div>
            <div class="logo1">
                <h3>A</h3>
            </div>
            <div class="rate-bot1">
                <p>dangquocchan</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <p id="cmt-text">2022-03-31 20:45 | Phân loại hàng: Space Gray</p>
                <p id="cmt-text2">Máy mỏng nhẹ, lướt nhanh. Shop đóng gói kỹ, đặt 12h thứ 6 mà 9h sáng thứ 7 đã nhận được, xuất sắc shop ơi.</p>
            </div>
            <div class="slider1">
                <div id="img-list1">
                    <div>
                        <img src="@/assets/cmt.png" alt="">
                        <img src="@/assets/cmt.png" alt="">
                        <img src="@/assets/cmt.png" alt="">
                        <img src="@/assets/cmt.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container5">
        <h3>CÁC SẢN PHẨM KHÁC CỦA SHOP</h3>
        <div class="row" id="pic2">
            <div class="col-lg-3">
                <img src="@/assets/shirt.png" alt="Hình ảnh 1" class="img-fluid">
                <p>Áo Sweater The Bad God Signature Monogram</p>
                <p id="oldprice">₫500.000</p>
                <p id="newprice">₫339.000</p>
                <img src="@/assets/cart.png" class="cart">
            </div>
            <div class="col-lg-3">
                <img src="@/assets/shirt.png" alt="Hình ảnh 2" class="img-fluid">
                <p>Áo Sweater The Bad God Signature Monogram</p>
                <p id="oldprice">₫500.000</p>
                <p id="newprice">₫339.000</p>
                <img src="@/assets/cart.png" class="cart">
            </div>
            <div class="col-lg-3">
                <img src="@/assets/shirt.png" alt="Hình ảnh 3" class="img-fluid">
                <p>Áo Sweater The Bad God Signature Monogram</p>
                <p id="oldprice">₫500.000</p>
                <p id="newprice">₫339.000</p>
                <img src="@/assets/cart.png" class="cart">
            </div>
            <div class="col-lg-3">
                <img src="@/assets/shirt.png" alt="Hình ảnh 4" class="img-fluid">
                <p>Áo Sweater The Bad God Signature Monogram</p>
                <p id="oldprice">₫500.000</p>
                <p id="newprice">₫339.000</p>
                <img src="@/assets/cart.png" class="cart">
            </div>
        </div>
    </div>
</main>
<SetLinks2 />
<SetFooter />
</template>

<script>
import SetMenu from '@/components/widgets/SetMenu.vue';
import HomeHeader from '@/components/widgets/HomeHeader.vue';
import SetLinks2 from '@/components/widgets/SetLinks2.vue';
import SetFooter from '@/components/widgets/SetFooter.vue';
export default {
    name: 'DetailView',
    components: {
        SetMenu,
        SetFooter,
        SetLinks2,
        HomeHeader
    },
}
</script>

<style scoped>
footer {
    margin-top: 50px;
}

main {
    height: 3800px;
    overflow: hidden;
    background-color: rgba(0, 0, 0, .05);
}

.breadcrumb {
    background-color: rgba(0, 0, 0, 0) !important;
    width: 85%;
    margin: 0 auto;
}

.breadcrumb a {
    color: green !important;
}

.container0 {
    display: flex;
    width: 85%;
    height: 580px;
    background-color: white;
    margin: 0 auto;
}

.container0 .thumb {
    width: 40%;
}

.content .info {
    width: 60%;
}

.thumb img {
    width: 450px;
    height: 450px;
}

.thumb .slider {
    display: flex;
}

.thumb .slider img {
    width: 80px;
    height: 80px;
}

#ArrowRight {
    position: absolute;
    width: 24px;
    height: 24px;
    left: 495px;
    top: 680px;
    border-radius: 25px;
    border: 1px solid hsla(0, 0%, 53.7%, .4);
}

#ArrowLeft {
    position: absolute;
    width: 24px;
    height: 24px;
    left: 80px;
    top: 680px;
    border-radius: 25px;
    border: 1px solid hsla(0, 0%, 53.7%, .4);
    transform: rotate(180deg);
}

.infor .info1 h5 {
    width: 613px;
    height: 54px;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin-top: 20px;
}

.pdp-block {
    display: flex;
    width: 100%;
}

.pdp-block p {
    font-family: 'Inter';
    font-style: normal;
    color: rgba(0, 0, 0, 0.6);
}

.left-block {
    display: flex;
    width: 60%;
    display: flex;
    vertical-align: middle;
    text-align: left;
    justify-content: space-between;
    flex-direction: column-reverse;
}

.checked {
    color: orange;
}

.rating-block1 {
    display: flex;
    justify-content: space-between;
}

#block2 {
    width: 40%;
    text-align: right;
}

.infor .price {
    display: flex;
    width: 615px;
    height: 66px;
    background-color: #E0E0E033;
    justify-content: space-around;
    align-items: center;
}

.price .oldprice {
    width: 122px;
    height: 24px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    text-decoration-line: line-through;
    color: rgba(0, 0, 0, 0.5);
}

.price .newprice {
    width: 190px;
    height: 39px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 32px;
    line-height: 39px;
    color: #007006;
}

.price .sale {
    width: 80px;
    height: 21px;
    background: #007006;
    color: white;
    display: flex;
    justify-content: space-evenly;
}

.ship {
    display: flex;
    margin-top: 20px;
    justify-content: space-between;
}

.ship .vanchuyen {
    width: 20%;
    height: 40px;
    width: 77px;
    height: 17px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: rgba(0, 0, 0, 0.8);
}

.ship .soluong {
    width: 80%;
    height: 115px;
}

.soluong p {
    width: 170px;
    height: 17px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: rgba(0, 0, 0, 0.8);
}

.dia_diem {
    display: flex;
    justify-content: space-between;
    width: 275px;
}

.dia_diem2 {
    height: 20px;
}

#arrow-down {
    width: 17px;
    height: 17px;
}

.dia_diem2 .phivanchuyen {
    margin-top: 5px;
    display: flex;
}

.dia_diem1 p {
    color: rgba(0, 0, 0, 0.5);
}

.color-picker {
    display: flex;
    width: 615px;
    height: 40px;
    margin-top: 30px;
}

.color-picker .mau_sac {
    width: 20%;
}

.color-picker .mau_sac p {
    width: 615px;
    height: 40px;
    flex: none;
    order: 4;
    flex-grow: 0;
}

.color-picker .chon_mau {
    display: flex;
    width: 80%;
    justify-content: space-between;
    align-items: center;
}

.chon_mau button {
    box-sizing: border-box;
    width: 115px;
    height: 40px;
    border: 1px solid #007006;
    background-color: white;
}

.chon_mau img {
    width: 24px;
    height: 24px;
}

.quantity {
    display: flex;
    width: 615px;
    height: 40px;
    margin-top: 20px;
}

.quantity .qnt1 {
    width: 20%;
}

.quantity .qnt2 {
    display: flex;
    width: 80%;
    height: 32px;
}

.qnt1 p {
    width: 615px;
    height: 40px;
    flex: none;
    order: 4;
    flex-grow: 0;
}

.input-group,
input.test-value-input {
    max-width: 250px;
}

.input-group>.form-control,
.input-group>.form-select {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0;
}

.buy {
    display: flex;
    margin-top: 30px;
    width: 615px;
    height: 48px;
    justify-content: space-around;
}

.btn-primary {
    width: 180px;
    background-color: #007006 !important;
}

.btn-secondary {
    background-color: white;
    color: #007006;
    border-color: #007006 !important;
    border: 1px solid;
}

.container2 {
    display: flex;
    width: 85%;
    height: 135px;
    background-color: white;
    margin: 25px auto;
}

.infor1 {
    width: 360px;
    height: 135px;
}

.container-left {
    display: flex;
    width: 370px;
    height: 135px;
}

.container-left .logo {
    width: 123.33px;
    height: 135px;
}

.logo h3 {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-top: 25px;
    margin-left: 20px;
    width: 82px;
    text-align: center;
    outline: 1px solid;
    border-radius: 50%;
    position: absolute;
    height: 82px;
    font-style: normal;
    font-weight: 400;
    font-size: 48px;
    line-height: 58px;
    color: #FFFFFF;
    background-color: #007006;
}

.content {
    margin-top: 20px;
    width: 247px;
    height: 135px;
}

.content button {
    width: 100px;
    height: 34px;
    border: 1px solid;
    background-color: white;
    box-sizing: border-box;
}

button#active {
    border-color: #007006;
}

button#not-active {
    border-color: rgba(0, 0, 0, 0.2);
    ;
}

button .content h5 {
    width: 157px;
    height: 19px;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: rgba(0, 0, 0, 0.8);
}

.content p {
    width: 130px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: rgba(0, 0, 0, 0.5);
}

.infor2 {
    display: flex;
    width: 673.83px;
}

.shop {
    display: flex;
    margin-top: 10px;
}

.shop1 {
    display: flex;
    justify-content: space-around;
    margin-top: 35px;
    width: 150px;
    height: 55px;
}

.shop2 {
    display: flex;
    justify-content: space-around;
    margin-top: 35px;
    width: 310px;
    height: 55px;
}

.shop3 {
    display: flex;
    justify-content: space-around;
    margin-top: 35px;
    width: 255px;
    height: 55px;
}

.shop .left1 p {
    width: 90px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: rgba(0, 0, 0, 0.8);
}

.shop .right1 p {
    width: 81px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #007006;
    text-align: right;
}

.container3 {
    width: 85%;
    height: 1500px;
    background-color: white;
    margin: 25px auto;
}

.container3 .title h4 {
    display: flex;
    width: 95%;
    margin: 20px auto;
    height: 55px;
    align-items: center;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
    background-color: rgba(0, 0, 0, 0.02);
}

.title h4 {
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
}

.detail {
    display: flex;
    width: 50%;
    margin-left: -15px;
    height: 55px;
    justify-content: space-around;
}

.detail-left p {
    width: 90px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: rgba(0, 0, 0, 0.5);
}

.detail-right p#apple {
    width: 238px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #007006;
}

.detail-right p#normal-text {
    width: 238px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
}

.container3 .title2 {
    display: flex;
    width: 95%;
    margin: 110px auto;
    height: 55px;
    align-items: center;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
    background-color: rgba(0, 0, 0, 0.02);
    margin-bottom: 10px;
}

.title2 h4 {
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
}

.detail2 {
    display: flex;
    width: 95%;
    height: 55px;
    margin: 10px auto;
}

.detail2 p {
    width: 1140px;
    height: 66px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 22px;
    color: rgba(0, 0, 0, 0.7);
}

.detail3 {
    width: 95%;
    height: 55px;
    margin: 25px auto;
}

.detail3 p {
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 22px;
    color: rgba(0, 0, 0, 0.7);
}

.detail3 .unord-list {
    width: 95%;
    height: 55px;
    margin: -10px auto;
}

.detail3 .unord-list li {
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 22px;
    color: rgba(0, 0, 0, 0.7);
}

.detail4 {
    width: 95%;
    height: 55px;
    margin: 335px auto;
    margin-bottom: 0px;
}

.detail4 p {
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 22px;
    margin-bottom: 5px;
    color: rgba(0, 0, 0, 0.7);
}

.detail5 {
    width: 95%;
    height: 55px;
    margin: 90px auto;
    margin-bottom: 5px;
}

.detail5 p {
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 22px;
    margin-bottom: 5px;
    color: rgba(0, 0, 0, 0.7);
}

.detail6 {
    width: 95%;
    height: 55px;
    margin: 40px auto;
    margin-bottom: 5px;
}

.detail6 p {
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 22px;
    margin-bottom: 5px;
    color: rgba(0, 0, 0, 0.7);
}

.detail7 {
    width: 95%;
    height: 55px;
    margin: 95px auto;
    margin-bottom: 5px;
}

.detail7 p {
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 22px;
    margin-bottom: 5px;
    color: rgba(0, 0, 0, 0.7);
}

.detail8 {
    width: 95%;
    height: 55px;
    margin: 115px auto;
    margin-bottom: 5px;
}

.detail8 p {
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 22px;
    margin-bottom: 5px;
    color: rgba(0, 0, 0, 0.7);
}

.detail9 {
    width: 95%;
    height: 55px;
    margin: 30px auto;
    margin-bottom: 5px;
}

.detail9 p {
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 22px;
    margin-bottom: 5px;
    color: rgba(0, 0, 0, 0.7);
}

.container4 {
    width: 85%;
    height: 880px;
    background-color: white;
    margin: 25px auto;
}

.container4 .cmt h4 {
    display: flex;
    width: 95%;
    margin: 20px auto;
    height: 55px;
    align-items: center;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
}

.container4 .rate {
    width: 95%;
    height: 145px;
    margin: -15px auto;
    margin-bottom: 5px;
    background-color: #0070060D;
}

.rate {
    display: flex;
}

.rate .rate-left {
    display: flex;
    width: 20%;
    flex-direction: column;
    padding: 30px;
}

.rate .rate-top {
    display: flex;
    width: 117px;
    height: 48px;
    justify-content: space-around;
}

.rate-top1 p {
    font-style: normal;
    font-weight: 400;
    font-size: 40px;
    line-height: 48px;
    color: #007006;
}

.rate-top2 p {
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    line-height: 62px;
    color: #007006;
}

.rate .rate-right {
    display: flex;
    width: 75%;
    align-content: flex-end;
    align-items: center;
    justify-content: space-around;
}

.rate-button {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.rate-button button {
    width: 90px;
    height: 30px;
    margin-bottom: 10px;
}

.rate-right p {
    display: flex;
    width: 165px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #007006;
}

button#spec-button {
    width: 190px;
    height: 30px;
}

button#cmt-button {
    width: 130px;
    height: 30px;
}

.container4 .cmt-section {
    display: flex;
    width: 95%;
    height: 145px;
    margin: 10px auto;
    margin-bottom: 5px;
    flex-direction: column;
}

.logo1 {
    width: 7%;
}

.logo1 h3 {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-top: 25px;
    margin-left: 20px;
    width: 40px;
    text-align: center;
    outline: 1px solid;
    border-radius: 50%;
    position: absolute;
    height: 40px;
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    line-height: 58px;
    color: #FFFFFF;
    background-color: #007006;
}

.rate-bot1 {
    margin-top: 20px;
    margin-left: 70px;
    width: 80%;
}

.rate-bot1 p {
    width: 600px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
    margin-bottom: 0px;
}

.rate-bot1 p#cmt-text {
    font-size: 12px;
    line-height: 15px;
    color: rgba(0, 0, 0, 0.5);
}

.rate-bot1 p#cmt-text2 {
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 15px;
    color: rgba(0, 0, 0, 0.8);
}

.slider1 {
    display: flex;
    flex-direction: column;
    margin-left: 70px;
}

.slider1 img {
    width: 72px;
    height: 72px;
}

.container5 {
    width: 85%;
    height: 440px;
    background-color: white;
    margin: 25px auto;
}

.container5 h3 {
    position: absolute;
    width: 324px;
    height: 24px;
    left: 100px;
    margin-top: 25px;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
}

.container5 .img-fluid {
    width: 238px;
    height: 238px;
    margin: 850px 0px;
    margin-top: 65px;
    margin-bottom: 10px;
}

p#pic2 {
    display: flex;
    margin-left: 115px;
    margin-bottom: 5px;
}

.container5 .cart {
    position: absolute;
    width: 30px;
    height: 30px;
    left: 225px;
    top: 400px;
    border-radius: 25px;
    background-color: #007006;
}

.container5 #pic2 {
    display: flex;
    width: 100%;
    margin: 0 auto;
    margin-top: 5px;
}

p#oldprice {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 15px;
    text-decoration-line: line-through;
    color: #ACACAC;
}

p#newprice {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #AB1515;
}

.form-select {
    border: none;
    width: 100px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: rgba(0, 0, 0, 0.8);
}
</style>
