<template>
<StoreHeader />
<div class="main-content">
    <SetSideBar />
    <main>

        <div class="container">
            <div class="content">
                <div class="content-header">
                    <div class="header">
                        <h4>Thêm Sản Phẩm</h4>
                    </div>
                </div>
                <Form :validation-schema="schema" @submit="onSubmit()">
                    <div class="main-content">
                        <h4>Thông Tin Cơ Bản</h4>
                        <div class="form">
                            <div class="form-left text-left">
                                <p>Danh mục sản phẩm (*)</p>
                                <p>SKU (*)</p>
                                <p>Tên sản phẩm (*)</p>
                                <p>Slug (*)</p>
                                <p>Đơn giá (*)</p>
                                <br>
                                <p>Tình trạng</p>
                            </div>
                            <div class="form-right">
                                <div class="select">
                                    <Field name="select" as="select" class="form-select">
                                        <option selected>Chọn danh mục</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </Field>
                                    <ErrorMessage name="select" class="error-message" />
                                </div>

                                <div class="input1">
                                    <Field name="sku" class="sku" placeholder="SKU" type="text" id="input" />
                                    <ErrorMessage name="sku" class="error-message" />
                                </div>
                                <div class="input2">
                                    <Field name="productName" class="product-name" placeholder="Tên sản phẩm" type="text" id="input" />
                                    <ErrorMessage name="productName" class="error-message" />
                                </div>
                                <div class="input3">
                                    <Field name="slug" class="slug" placeholder="Slug" type="text" id="input" />
                                    <ErrorMessage name="slug" class="error-message" />
                                </div>
                                <div class="input4">
                                    <Field name="price" class="price" placeholder="Giá bán" type="text" id="input-spec" />
                                    <p>Giảm giá</p>
                                    <Field name="discount" class="discount" placeholder="Giảm giá" type="text" id="input-spec" />
                                    <ErrorMessage name="price" class="error-message" />
                                </div>

                                <div class="form-check" id="form-check1">
                                    <div class="radio-container">
                                        <Field class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                                        <label class="form-check-label" for="flexRadioDefault1">%</label>
                                    </div>
                                    <div class="radio-container">
                                        <Field class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                                        <label class="form-check-label" for="flexRadioDefault2">Đồng</label>
                                    </div>
                                </div>
                                <div class="form-check" id="form-check2">
                                    <div class="radio-container">
                                        <Field class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" />
                                        <label class="form-check-label" for="flexRadioDefault1">Đang bán</label>
                                    </div>
                                    <div class="radio-container">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2" />
                                        <label class="form-check-label" for="flexRadioDefault2">Dừng bán</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pic-upload">
                            <h4>Hình Ảnh</h4>
                            <div class="upload">
                                <button type="button" id="picture" @click="triggerImageUpload">
                                    Tải ảnh lên
                                </button>
                            </div>
                            <div class="uploaded" v-for="(image, index) in images" :key="index">
                                <img :src="image" alt="Uploaded image" class="uploaded-image">
                            </div>
                            <input type="file" ref="fileInput" @change="handleFiles" multiple style="display: none">
                        </div>
                        <div class="information">
                            <h4>Thông Tin Mô Tả</h4>
                            <img src="@/assets/toolbar.png">
                            <div class="main-info">
                                <textarea type="text" id="textarea" placeholder="Mô tả"></textarea>
                            </div>
                        </div>
                        <div class="detail">
                            <h4>Thông Tin Chi Tiết</h4>
                            <div class="main-detail">
                                <div class="main-detail-left text-left">
                                    <p>Thương hiệu</p>
                                    <p>Hạn bảo hành</p>
                                    <p>Loại</p>
                                    <p>Gửi hàng từ</p>
                                </div>
                                <div class="main-detail-right">
                                    <div class="input1">
                                        <Field name="brand" class="brand" placeholder="Thương hiệu" type="text" id="input" />
                                        <ErrorMessage name="brand" class="error-message" />
                                    </div>
                                    <div class="input2">
                                        <Field name="baohanh" class="baohanh" placeholder="Hạn bảo hành" type="text" id="input" />
                                        <ErrorMessage name="baohanh" class="error-message" />
                                    </div>
                                    <div class="input3">
                                        <Field name="type" class="type" placeholder="Loại" type="text" id="input" />
                                        <ErrorMessage name="type" class="error-message" />
                                    </div>
                                    <div class="select">
                                        <select class="form-select" id="guihang">
                                            <option selected>Chọn tỉnh</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bienthe">
                            <div class="bienthe-button-left">
                                <h4>Biến Thể</h4>
                                <p>Màu sắc</p>
                            </div>
                            <div class="bienthe-button-right">
                                <input type="checkbox" id="optionA" />
                                <label for="optionA" class="toggle">
                                    <div class="slider"></div>
                                </label>
                                <a href="#" @click.prevent="addLine">+ Thêm thông tin</a>
                            </div>
                        </div>
                        <div class="line" v-for="(item, index) in items" :key="index">
                            <div class="row">
                                <div class="col-2">
                                    <p>Tên màu (*)</p>
                                </div>
                                <div class="col-3">
                                    <Field name="color" class="type" placeholder="Tên màu" type="text" id="input1" />
                                </div>
                                <div class="col-2">
                                    <p>Đơn giá</p>
                                </div>
                                <div class="col-4">
                                    <Field name="price2" class="type" placeholder="Tên màu" type="text" id="input2" />
                                </div>
                                <div class="col-1"><a href="#" title="delete" @click.prevent="deleteLine(index)"><img src="@/assets/delete.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="errors">
                            <error-message name="color" class="error-message" />
                            <error-message name="price2" class="error-message" />
                        </div>

                        <div class="end-button">
                            <button type="button" id="button1">Hủy Bỏ</button>
                            <button type="button" id="button2">Lưu Nháp</button>
                            <button type="submit" @click="onSubmit()" id="button3">Lưu & Công Bố</button>
                        </div>
                    </div>
                </Form>
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
import {
    Form,
    Field,
    ErrorMessage
} from 'vee-validate';
import * as Yup from 'yup';
import {
    useToast
} from 'vue-toastification'
const toast = useToast();
export default {
    name: 'MyStoreView',
    components: {
        StoreHeader,
        SetSideBar,
        SetFooter2,
        Form,
        Field,
        ErrorMessage
    },
    data() {
        const schema = Yup.object().shape({
            select: Yup.string()
                .required(this.$t("errors.product.select"))
                .not(['Chọn danh mục'], this.$t("errors.product.select")),
            sku: Yup.string()
                .required(this.$t("errors.form.empty")),
            productName: Yup.string()
                .required(this.$t("errors.product.empty")),
            slug: Yup.string()
                .required(this.$t("errors.form.empty")),
            price: Yup.string()
                .required(this.$t("errors.price.empty")),
            checked2: Yup.string()
                .oneOf(['Đang bán', 'Dừng bán'])
                .required('Vui lòng điền tình trạng'),
            color: Yup.string()
                .required(this.$t("errors.color.empty")),
            price2: Yup.string()
                .required(this.$t("errors.price.empty"))
        });
        return {
            items: [{}],
            images: [],
            schema,
        };
    },
    methods: {
        onSubmit() {
            console.log('submit');
            const successMessage = this.$t('errors.successMessage');
            toast.success(successMessage);
        },
        addLine() {
            this.items.push({});
        },
        deleteLine(index) {
            this.items.splice(index, 1);
        },
        triggerImageUpload() {
            this.$refs.fileInput.click();
        },
        handleFiles(event) {
            const files = event.target.files;
            for (let i = 0; i < files.length; i++) {
                const reader = new FileReader();
                reader.onload = e => {
                    this.images.push(e.target.result);
                };
                reader.readAsDataURL(files[i]);
            }
        },
    },
};
</script>

<style scoped>
main {
    background-color: rgb(0, 0, 0, .05);
}

.main-content {
    display: flex;
    flex-wrap: wrap;
}

.container .content {
    width: 90%;
    margin: 25px auto;
    height: auto;
    display: flex;
    flex-direction: column;
    background-color: white;
}

.content .content-header {
    width: 100%;
    border-bottom: 4px solid #007006;
}

.content .content-header h4 {
    width: 158px;
    height: 24px;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
    margin-top: 25px;
    margin-bottom: 0px;
}

.content .main-content {
    width: 95%;
    margin: 20px auto;
}

.main-content h4 {
    width: 170px;
    height: 24px;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
    margin-bottom: 30px;
}

.content .form {
    display: flex;
    width: 95%;
    margin: 0 auto;
}

.content .form-left {
    width: 20%;
}

.form-left p {
    width: 150px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
    margin-top: 12px;
    margin-bottom: 51px;
}

.content .form-right {
    width: 80%;
    margin-left: 20px;
}

.form-right .input4 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.input1,
.input2,
.input3,
.input4 {
    display: -webkit-box;
}

.form-check {
    display: flex;
    justify-content: space-evenly;
    width: 60%;
    margin-bottom: 15px;
    margin-top: 10px;
}

.form-check-input:checked {
    background-color: #007006 !important;
    border-color: #007006 !important;
}

.form-check#form-check1 {
    margin-left: 255px;
}

.select {
    display: -webkit-box;
}

.form-select {
    width: 50%;
    margin-bottom: 30px;
}

.form-select#guihang {
    width: 80%;
    margin-bottom: 10px;
}

.form-right input#input {
    width: 70%;
    height: 40px;
    display: block;
    padding: .375rem 1.75rem .375rem .75rem;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    margin-bottom: 30px;
    line-height: 1.5;
}

.form-right input#input-spec {
    padding: .375rem 1.75rem .375rem .75rem;
    border: 1px solid #ced4da;
    border-radius: 4px;
    margin-bottom: 20px;
    width: 30%;
}

.main-content .pic-upload {
    width: 95%;
    margin: 0 auto;
}

.pic-upload .upload {
    width: 100%;
    height: 200px;
    border: 1px dashed rgba(0, 0, 0, 0.4);
}

.upload button {
    box-sizing: border-box;
    width: 30%;
    height: 50px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    margin: 70px 310px 0px 310px;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    color: rgba(0, 0, 0, 0.4);
}

.information {
    width: 95%;
    margin: 30px auto;
}

.information img {
    width: 100%;
    height: 40px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 4px 4px 0px 0px;
}

.information .main-info {
    width: 100%;
    height: 380px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
}

.information .main-info textarea {
    width: 100%;
    height: 100%;
    border: none;
    padding: 0px 0px 310px 10px;
}

.main-content .detail {
    width: 95%;
    margin: 30px auto;
}

.detail .main-detail {
    width: 100%;
    display: flex;
}

.main-detail-left {
    width: 20%;
}

.main-detail-right {
    width: 80%;
    margin-left: 20px;
}

.main-detail-left p {
    width: 150px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
    margin-top: 12px;
    margin-bottom: 33px;
}

.main-detail-right input#input {
    width: 80%;
    height: 40px;
    display: block;
    padding: .375rem 1.75rem .375rem .75rem;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    margin-bottom: 12px;
    line-height: 1.5;
}

.bienthe {
    width: 95%;
    margin: 20px auto;
    display: flex;
}

.bienthe-button-left {
    width: 10%;
}

.bienthe-button-right {
    width: 90%;
    margin-left: 20px;
}

.bienthe-button-right a {
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 60px;
    color: #007006;
}

.bienthe-button-left p {
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    text-align: right;
    color: #000000;
}

.toggle {
    background-color: grey;
    width: 45px;
    height: 22px;
    border-radius: 11px;
    display: flex;
    flex-direction: column;
    margin-top: 5px;
}

.toggle-active {
    background-color: blue;
    width: 45px;
    height: 22px;
    border-radius: 11px;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    margin-top: 5px;
}

input#optionA {
    display: none;
}

.slider {
    height: 24px;
    width: 24px;
    background-color: white;
    border-radius: 12px;
    margin: 4px;
}

input#optionA:checked+.toggle {
    background-color: green;
}

input#optionA:checked+.toggle>.slider {
    align-self: flex-end;
}

.line {
    width: 70%;
    height: 50px;
    margin: 0 auto;
    margin-bottom: 10px;
}

.line img {
    width: 20px;
    height: 20px;
    margin-top: 14px;
    float: right;
}

.line p {
    width: 100px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #000000;
    margin-top: 16px;
    text-align: center;
}

.line input#input1 {
    box-sizing: border-box;
    position: absolute;
    width: 150px;
    height: 50px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    padding: .375rem 1.75rem .375rem .75rem;
    border-radius: 4px;
}

.line input#input2 {
    box-sizing: border-box;
    position: absolute;
    width: 200px;
    height: 50px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    padding: .375rem 1.75rem .375rem .75rem;
    border-radius: 4px;
}

.end-button {
    width: 80%;
    height: 50px;
    margin: 130px auto;
    display: flex;
    justify-content: space-between;
}

.end-button button {
    box-sizing: border-box;
    width: 200px;
    height: 50px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    flex: none;
    order: 1;
    flex-grow: 0;
}

.end-button button#button1 {
    background-color: white;
}

.end-button button#button2 {
    background-color: rgba(204, 204, 204, 1);
}

.end-button button#button3 {
    background-color: rgba(0, 112, 6, 1);
    color: white;
}

.uploaded-image {
    width: 12%;
    height: 25%;
}

.uploaded {
    display: inline;
}

.error-message {
    color: red;
    font-size: 14px;
}

.errors {
    display: flex;
    justify-content: space-evenly;
    width: 100%;
    margin: 0 auto;
    margin-left: 60px;
}
</style>
