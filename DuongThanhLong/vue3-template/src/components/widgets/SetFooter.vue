<template>
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <section class="border-bottom border-top">
        <div class="container text-left text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h5 class="text-uppercase">
                        Chăm sóc khách hàng
                    </h5>
                    <p>
                        <a href="#!" class="text-reset">Trung Tâm Trợ Giúp</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Shoop Blog</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Hướng Dẫn Mua Hàng</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Hướng Dẫn Bán Hàng</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Thanh Toán</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Trả Hàng & Hoàn Tiền</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Chăm Sóc Khách Hàng</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Chính Sách Bảo Hành</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h5 class="text-uppercase">
                        Về Shoop
                    </h5>
                    <p>
                        <a href="#!" class="text-reset">Giới Thiệu Về Shoop Việt Nam</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Tuyển Dụng</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Điều Khoản Shoop</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Chính Sách Bảo Mật</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Kênh Người Bán</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Liên Hệ Với Truyền Thông</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h5 class="text-uppercase">
                        Thanh toán
                    </h5>
                    <div class="mainGallery">
                        <div class="gallery">
                            <a target="_blank">
                                <img src="@/assets/visa.png">
                            </a>
                        </div>
                        <div class="gallery">
                            <a target="_blank">
                                <img src="@/assets/method1.png">
                            </a>
                        </div>
                        <div class="gallery">
                            <a target="_blank">
                                <img src="@/assets/method2.png">
                            </a>
                        </div>
                        <div class="gallery">
                            <a target="_blank">
                                <img src="@/assets/method3.png">
                            </a>
                        </div>
                        <div class="gallery">
                            <a target="_blank">
                                <img src="@/assets/method4.png">
                            </a>
                        </div>
                        <div class="gallery">
                            <a target="_blank">
                                <img src="@/assets/method5.png">
                            </a>
                        </div>
                        <div class="gallery">
                            <a target="_blank">
                                <img src="@/assets/method6.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h5 class="text-uppercase">Theo dõi chúng tôi trên</h5>
                    <p>
                        <a href="#!" class="text-reset">Facebook</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Instagram</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">LinkedIn</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="information">
        <div class="text-left">
            &copy; 2024 Shoop. Tất cả các quyền được bảo lưu.
        </div>
        <div class="text-right">
            Quốc gia & Khu vực: Singapore | Indonesia | Thái Lan | Malaysia | Việt Nam | Philippines
        </div>
    </div>
    <div class="text-center border-top address">
        <p>Địa chỉ: Tòa nhà Capital Place, số 29 đường Liễu Giai, Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam. Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.shoop.vn</p>
        <p>&copy; 2015 - Bản quyền thuộc về Công ty TNHH Shoop</p>
    </div>
</footer>
</template>

<script>
export default {
    name: 'SetFooter',
};
</script>

<style scoped>
footer p {
    text-align: center;
    color: rgba(0, 0, 0, .5);
    font-size: 14px;
}

footer {
    width: 100%;
    align-self: stretch;
    background-color: #FBFBFB;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    text-align: left;
    font-size: 14px;
    color: rgba(0, 0, 0, 0.5);
    font-family: Inter;
    margin-top: 0px;
}

footer .information {
    display: flex;
    height: 100px;
    justify-content: space-between;
}

footer .mb-4 {
    font-family: 'Inter';
    color: rgba(0, 0, 0, 0.5);
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 15px;
    color: rgba(0, 0, 0, 0.5);
}

footer .mb-4 p {
    text-align: left !important;
    color: rgba(0, 0, 0, .5);
    font-size: 14px;
}

.text-left {
    margin-top: 40px;
    margin-left: 50px;
}

.text-right {
    margin-top: 40px;
    margin-right: 50px;
}

.text-uppercase {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 15px;
    color: rgba(0, 0, 0, 0.87);
}

.address p {
    margin-top: 20px;
}

.mainGallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
</style>
