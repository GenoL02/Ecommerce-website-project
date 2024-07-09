<template>
<SetHeader />
<div class="form">
    <div class="form-left">
        <div class="left-main">
            <div class="left-header">
                <p>Shoop Việt Nam</p>
            </div>
            <h4><strong>Trở thành Người bán ngay hôm nay</strong></h4>
            <div class="left-content">
                <p> <img src="@/assets/signin1.png" />
                    Nền tảng thương mại điện tử hàng đầu Đông Nam Á</p>
                <p><img src="@/assets/signin2.png" />
                    Phát triển trở thành thương hiệu toàn cầu</p>
                <p><img src="@/assets/signin3.png" />
                    Dẫn đầu lượng người dùng trên ứng dụng mua sắm tại Việt Nam</p>
            </div>
        </div>
    </div>
    <div class="form-right">
        <div class="right-main">
            <div class="parent">
                <Form :validation-schema="schema" @submit="onSubmit()" id="login">
                    <div class="ngNhp">
                        <h3>Đăng ký</h3>
                        <div class="inputParent">
                            <div class="input">
                                <Field name="shopName" type="text" class="shop" placeholder="Tên shop" id="input" v-model="formData.shopName" />
                                <ErrorMessage name="shopName" class="error-message" />
                            </div>
                            <div class="select">
                                <select class="form-select">
                                    <option selected>Thành phố</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <select class="form-select" aria-label="Default select example">
                                    <option id="text-inside" selected>Quận/huyện</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="input1">
                                <Field name="address" type="text" class="address" placeholder="Địa chỉ" id="input" v-model="formData.address" />
                                <ErrorMessage name="address" class="error-message" />
                            </div>
                            <div class="input2">
                                <Field name="email" type="text" class="email" placeholder="Email" id="input" v-model="formData.email" />
                                <ErrorMessage name="email" class="error-message" />
                            </div>
                            <div class="input3">
                                <Field name="password" :rules="schema.fields.password" :type="passwordFieldType" class="mk" placeholder="Mật khẩu" id="password-input" v-model="formData.password" />
                                <span class="show-btn" @click="togglePasswordVisibility('passwordFieldType')">
                                    <i class="fas" :class="{'fa-eye': passwordFieldType === 'password', 'fa-eye-slash': passwordFieldType === 'text'}"></i>
                                </span>
                            </div>
                            <ErrorMessage name="repeatPassword" class="error-message" />
                            <div class="input0">
                                <Field name="repeatPassword" :rules="schema.fields.repeatPassword" :type="repeatPasswordFieldType" class="inputChild" placeholder="Nhắc lại mật khẩu" id="repeat-password-input" v-model="formData.repeatPassword" />
                                <span class="show-btn" @click="togglePasswordVisibility('repeatPasswordFieldType')">
                                    <i class="fas" :class="{'fa-eye': repeatPasswordFieldType === 'password', 'fa-eye-slash': repeatPasswordFieldType === 'text'}"></i>
                                </span>
                            </div>
                            <ErrorMessage name="repeatPassword" class="error-message" />
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    <span>Đồng ý với Shoop về <a href="#" title="Điều khoản dịch vụ & Chính sách bảo mật">Điều khoản dịch vụ & Chính sách bảo mật</a></span>
                                </label>
                            </div>
                            <button class="input4" type="submit">
                                <div class="dang-nhap">ĐĂNG KÝ</div>
                            </button>
                        </div>
                    </div>
                </Form>
                <div class="wrapper">
                    <div class="ask">
                        <span> Bạn đã có tài khoản?</span>
                        <span class="ngK">
                            <router-link to="/login" title="Đăng nhập">Đăng nhập</router-link>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="why">
    <h3>TẠI SAO NÊN BÁN HÀNG TRÊN SHOOP</h3>
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <img src="@/assets/signin4.png"><br>
                <strong>Miễn phí đăng ký</strong>
                <p>Mở Shop và bán hàng dễ dàng hơn cùng Shoop</p>
            </div>
            <div class="col">
                <img src="@/assets/signin5.png"><br>
                <strong>Công cụ marketing đa dạng</strong>
                <p>Thu hút người mua và tăng trưởng đơn hàng vớg Flash Sale</p>
            </div>
            <div class="col">
                <img src="@/assets/signin6.png"><br>
                <strong>Vận chuyển dễ dàng</strong>
                <p>Linh hoạt lựa chọn đơn vị vận chuyển và theo dõi chi tiết hành trình đơn hàng.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <img src="@/assets/signin8.png"><br>
                <strong>Siêu sale cùng Shoop</strong>
                <p>Bứt phá doanh số với các chiến dịch lớn: Ngày Siêu Mua Sắm, Siêu Sale,...</p>
            </div>
            <div class="col">
                <img src="@/assets/signin9.png"><br>
                <strong>Hỗ trợ bán hàng hiệu quả</strong>
                <p>Đa dạng tính năng giúp quản lý, tương tác với khách hàng và theo dõi hiệu quả Shop.</p>
            </div>
            <div class="col">
                <img src="@/assets/signin10.png"><br>
                <strong>Kết nối cộng đồng Người bán</strong>
                <p>Chia sẻ kinh nghiệm bán hàng thực tế thông qua các hội thảo, khóa học trực tuyến</p>
            </div>
        </div>
    </div>
</div>
<SetFooter />
</template>

<script>
import SetHeader from '@/components/widgets/SetHeader.vue';
import SetFooter from '@/components/widgets/SetFooter.vue';
import {
    Form,
    Field,
    ErrorMessage
} from 'vee-validate';
import * as Yup from 'yup';
import {
    useToast
} from 'vue-toastification'
export default {
    name: 'SignUpView',
    components: {
        SetHeader,
        SetFooter,
        Form,
        Field,
        ErrorMessage
    },
    data() {
        const schema = Yup.object().shape({
            shopName: Yup.string()
                .required(this.$t("errors.shop.empty")),
            address: Yup.string()
                .required(this.$t("errors.address.empty")),
            email: Yup.string()
                .email(this.$t("errors.email.invalid"))
                .required(this.$t("errors.email.empty")),
            password: Yup.string()
                .required(this.$t("errors.password.empty")),
            repeatPassword: Yup.string()
                .oneOf([Yup.ref('password')], this.$t("errors.password.notMatch"))
                .required(this.$t("errors.password.empty")),
        });
        return {
            formData: {
                password: '',
                repeatPassword: '',
            },
            errors: {},
            passwordFieldType: 'password',
            repeatPasswordFieldType: 'password',
            schema
        };
    },
    methods: {
        onSubmit() {
            const toast = useToast()
            const successMessage = this.$t('errors.successMessage')
            toast.success(successMessage)
        },
        togglePasswordVisibility(fieldType) {
            this[fieldType] = this[fieldType] === 'password' ? 'text' : 'password';
        },
    },
};
</script>

<style scoped>
a {
    width: 244px;
    height: 19px;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #007006;
}

main {
    width: auto;
    height: 1288px;
    overflow: hidden;
}

.form {
    width: 100%;
    height: auto;
    display: flex;
    background-color: rgba(0, 0, 0, .05);
}

.form .form-left {
    width: 50%;
    display: flex;
    align-items: flex-start;
    flex-direction: column;
}

.left-main {
    margin-top: 110px;
    margin-left: 150px;
}

.form .form-right {
    width: 50%;
}

.left-header p {
    width: 214px;
    height: 34px;
    font-style: normal;
    font-weight: 400;
    font-size: 28px;
    line-height: 34px;
    color: #007006;
}

.form-left h4 {
    width: 287px;
    height: 68px;
    margin-bottom: 20px;
    font-style: normal;
    font-weight: 700;
    font-size: 28px;
    line-height: 34px;
    color: #007006;
}

.left-content {
    display: flex;
    flex-direction: column;
}

.left-content img {
    width: 45px;
    height: 45px;
}

.left-content p {
    width: 520px;
    height: 38px;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #007006;
}

.right-main {
    margin-top: 20px;
    margin-left: 40px;
    display: flex;
    width: 500px;
    height: auto;
    border-radius: 4px;
    background-color: #fff;
    border: 4px solid rgba(0, 0, 0, 0.05);
    box-sizing: border-box;
    overflow: hidden;
    flex-direction: column;
    justify-content: flex-start;
    padding: 30px 29px;
    min-width: 500px;
    max-width: 100%;
    font-size: 16px;
    color: #000;
    align-items: flex-start;
}

.right-main h3 {
    width: 93px;
    height: 29px;
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 29px;
    color: #000000;
}

.parent {
    display: flex;
    align-self: stretch;
    align-items: flex-start;
    margin: 0;
    flex-direction: column;
    justify-content: flex-start;
    gap: 39.5px;
}

.inputParent {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    gap: 5px;
}

.inputParent #input {
    display: flex;
    margin-bottom: 10px;
    box-sizing: border-box;
    width: 440px;
    height: 50px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    padding-inline: 15px;
}

.inputParent select {
    display: inline;
    margin-bottom: 10px;
    box-sizing: border-box;
    width: 218px;
    height: 50px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    padding-inline: 15px;
    color: rgba(0, 0, 0, 0.42) !important;
}

.mk {
    width: 370px;
    border: 0;
    outline: 0;
    font-size: 16px;
    background-color: transparent;
    height: 19px;
    color: rgba(0, 0, 0, 0.42);
    padding: 0;
}

.input3,
.inputChild {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
}

.input3 {
    align-self: stretch;
    height: 50px;
    border-radius: 4px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: space-between;
    padding: 13px 16px 13px 14px;
    gap: 20px;
    margin-bottom: 30px;
}

.inputChild {
    width: 350px;
    border: 0;
    outline: 0;
    background-color: transparent;
    height: 22px;
    flex-direction: column;
    padding: 3px 0 0;
    box-sizing: border-box;
    font-size: 16px;
    color: rgba(0, 0, 0, 0.42);
}

.input0 {
    align-self: stretch;
    height: 50px;
    border-radius: 4px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: space-between;
    padding: 13px 16px 13px 14px;
    gap: 20px;
    margin-bottom: 30px;
}

.input4 {
    margin-top: 15px;
}

.input4 .dang-nhap {
    display: flex;
    box-sizing: border-box;
    width: 440px;
    height: 50px;
    background: #007006;
    border-radius: 4px;
    color: white;
    justify-content: center;
    align-items: center;
}

input {
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: rgba(0, 0, 0, 0.42);
}

.ngNhp {
    position: relative;
    text-align: left;
    display: inline-block;
}

.wrapper {
    margin: -15px auto;
    text-align: center;
}

.why {
    width: 100%;
    height: 588px;
}

.why h3 {
    width: 411px;
    height: 68px;
    font-style: normal;
    font-weight: 400;
    font-size: 28px;
    line-height: 34px;
    text-align: center;
    color: rgba(0, 0, 0, 0.87);
    margin: 15px auto;
    margin-bottom: 30px;
}

.why p {
    width: 330px;
    height: 44px;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    text-align: center;
    color: rgba(0, 0, 0, 0.87);
}

.error-message {
    color: red;
    font-size: 14px;
    margin-top: -27px;
}
</style>
