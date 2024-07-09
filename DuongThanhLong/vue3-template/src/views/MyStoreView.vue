<template>
<StoreHeader />
<div class="main-content">
    <SetSideBar />
    <main>
        <div class="container">
            <div class="content">
                <div class="content1">
                    <div class="box1">
                        <div class="box1-content">
                            <h4><strong>Danh sách cần làm</strong></h4>
                            <p>Những việc bạn sẽ phải làm</p>
                            <div class="container text-center">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <p id="zero">0</p>
                                        <p>Chờ Xác Nhận</p>
                                    </div>
                                    <div class="col">
                                        <p id="zero">0</p>
                                        <p>Chờ Lấy Hàng</p>
                                    </div>
                                    <div class="col">
                                        <p id="zero">0</p>
                                        <p>Đã Xử Lý</p>
                                    </div>
                                    <div class="col">
                                        <p id="zero">0</p>
                                        <p>Đơn Hủy</p>
                                    </div>
                                </div>
                                <div class="row align-items-start">
                                    <div class="col-3">
                                        <p id="zero">0</p>
                                        <p>Trả Hàng/Hoàn Tiền<br> Chờ xử lý</p>
                                    </div>
                                    <div class="col-3">
                                        <p id="zero">0</p>
                                        <p>Sản Phẩm Bị Tạm Khóa</p>
                                    </div>
                                    <div class="col-3">
                                        <p id="zero">0</p>
                                        <p>Sản Phẩm Hết Hàng </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box2">
                        <div class="box2-content">
                            <div class="box2-header">
                                <h4><strong>Phân tích bán hàng</strong></h4>
                                <p id="header-text">( Hôm nay 00:00 GTM+7 19:00 )</p>
                            </div>
                            <p>Tổng quan dữ liệu của shop đối với đơn hàng đã xác nhận</p>
                            <div class="box2-main">
                                <div class="box2-main-content">
                                    <p>Doanh số</p>
                                    <p id="zero1">0</p>
                                    <canvas id="myChart"></canvas>
                                </div>
                                <div class="box2-main-content1">
                                    <div class="box2-left">
                                        <p>Lượt truy cập</p>
                                        <p id="zero1">0</p>
                                        <p id="vs">Vs hôm qua 0,00 % --</p>
                                        <br>
                                        <p>Đơn hàng</p>
                                        <p id="zero1">0</p>
                                        <p id="vs">Vs hôm qua 0,00 % --</p>
                                    </div>
                                    <div class="box2-right">
                                        <p>Lượt xem</p>
                                        <p id="zero1">0</p>
                                        <p id="vs">Vs hôm qua 0,00 % --</p>
                                        <br>
                                        <p>Tỷ lệ chuyển đổi</p>
                                        <p id="zero1">0,00%</p>
                                        <p id="vs">Vs hôm qua 0,00 % --</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box3">
                    <div class="box3-content">
                        <div class="box3-header">
                            <h4><strong>Thông Báo</strong></h4>
                            <a href="#" title="Xem thêm">
                                <p>Xem thêm</p>
                            </a>
                        </div>
                        <div class="box3-main-content">
                            <h5><strong>Các Kênh Thông Tin Chính Thống Từ Shoop</strong></h5>
                            <p>Lừa đảo bằng việc mạo danh Shopee cung cấp các dịch vụ có thu phí nhằm mục đích trục lợi cá nhân đang dần trở nên phổ biến.</p>
                            <div class="new">
                                <p id="new">Mới</p>
                                <p id="time">Hôm Nay 00:00</p>
                            </div>
                            <h5><strong>Các Kênh Thông Tin Chính Thống Từ Shoop</strong></h5>
                            <p>Lừa đảo bằng việc mạo danh Shopee cung cấp các dịch vụ có thu phí nhằm mục đích trục lợi cá nhân đang dần trở nên phổ biến.</p>
                            <div class="new">
                                <p id="new">Mới</p>
                                <p id="time">Hôm Nay 00:00</p>
                            </div>
                            <h5><strong>Các Kênh Thông Tin Chính Thống Từ Shoop</strong></h5>
                            <p>Lừa đảo bằng việc mạo danh Shopee cung cấp các dịch vụ có thu phí nhằm mục đích trục lợi cá nhân đang dần trở nên phổ biến.</p>
                            <div class="new">
                                <p id="new">Mới</p>
                                <p id="time">19 Tháng 12 2023</p>
                            </div>
                            <h5><strong>Các Kênh Thông Tin Chính Thống Từ Shoop</strong></h5>
                            <p>Lừa đảo bằng việc mạo danh Shopee cung cấp các dịch vụ có thu phí nhằm mục đích trục lợi cá nhân đang dần trở nên phổ biến.</p>
                            <div class="new">
                                <p id="new">Mới</p>
                                <p id="time">15 Tháng 12 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<SetFooter2 />
</template>

<script>
import StoreHeader from "@/components/widgets/StoreHeader.vue";
import SetSideBar from "@/components/widgets/SetSideBar.vue";
import SetFooter2 from "@/components/widgets/SetFooter2.vue";
export default {
    name: 'MyStoreView',
    components: {
        StoreHeader,
        SetSideBar,
        SetFooter2
    },
};
</script>

<style scoped>
main {
    background-color: rgb(0, 0, 0, .05);
}

.main-content {
    display: flex;
}

.container .content {
    flex-grow: 1;
    width: 90%;
    margin: 0 auto;
    height: auto;
    display: flex;
}

.content1 {
    width: 70%;
    margin-top: 20px;
}

.content .box1 {
    height: 250px;
    background-color: white;
}

.box1-content {
    width: 100%;
    margin: 0 auto;
    padding: 20px;
}

.box1-content h4 {
    margin-bottom: 0px;
    width: 184px;
    height: 24px;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
}

.box1 p {
    width: 183px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: rgba(0, 0, 0, 0.6);
}

.box1 p#zero {
    width: 180px;
    height: 24px;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 24px;
    color: #007006;
}

.content .box2 {
    margin-top: 20px;
    height: 364px;
    background-color: white;
}

.box2-content {
    width: 100%;
    margin: 0 auto;
    padding: 20px;
}

.box2-content h4 {
    margin-bottom: 0px;
    width: 210px;
    height: 24px;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
}

.box2-header {
    display: flex;
    margin-bottom: 0px;
}

.box2 p {
    width: 360px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: rgba(0, 0, 0, 0.6);
}

.box2 p#header-text {
    margin-top: 5px;
}

.box2-main {
    display: flex;
}

.box2-main-content {
    width: 50%;
}

.box2-main-content1 {
    display: flex;
    width: 50%;
}

.box2-left {
    width: 50%;
}

.box2-right {
    width: 50%;
}

.box2-main p {
    width: 120px;
    height: 15px;
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 15px;
    color: rgba(0, 0, 0, 0.7);
}

.box2-main p#zero1 {
    width: 12px;
    height: 19px;
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
}

.box2-main p#vs {
    width: 123px;
    height: 15px;
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 15px;
    color: rgba(0, 0, 0, 0.4);
}

canvas {
    height: 180px !important;
}

.box3-content {
    width: 100%;
    margin: 0 auto;
    padding: 20px;
}

.content .box3 {
    margin-top: 20px;
    width: 30%;
    height: 730px;
    margin-left: 20px;
    background-color: white;
}

.box3-header a {
    width: 77px;
    height: 19px;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #007006;
}

.box3 h4 {
    width: 110px;
    height: 24px;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
}

.box3 h5 {
    width: 185px;
    height: 34px;
    font-style: normal;
    font-weight: 700;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
}

.box3-main-content p {
    width: 175px;
    height: 68px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: rgba(0, 0, 0, 0.6);
}

.box3 .box3-header {
    display: flex;
    justify-content: space-between;
}

.box3 .new {
    display: flex;
    width: 140px;
    justify-content: space-between;
    margin-top: 30px;
    margin-bottom: 0px;
}

.box3 .new p#new {
    width: 21px;
    height: 15px;
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 15px;
    color: #007006;
}

.box3 .new p#time {
    width: 110px;
    height: 15px;
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 15px;
    color: rgba(0, 0, 0, 0.4);
}
</style>
