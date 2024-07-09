<template>
<StoreHeader />
<div class="main-content">
    <SetSideBar />
    <main>
        <div class="container">
            <div class="content">
                <div class="content-header">
                    <h4>Cài đặt thông tin Shop</h4>
                </div>
                <div class="main-content">
                    <div class="content-form">
                        <Form :validation-schema="schema" @submit="onSubmit()">
                            <div class="form-left text-right">
                                <p>Email</p>
                                <p>Tên</p>
                                <p>Số điện thoại</p>
                                <p>Giới tính</p>
                                <p>Tên shop</p>
                                <p>Địa chỉ lấy hàng</p>
                            </div>
                            <div class="form-right">
                                <div class="input1">
                                    <Field name="email" type="text" class="email" placeholder="Email" id="input" />
                                    <ErrorMessage name="email" class="error-message" />
                                </div>
                                <div class="input2">
                                    <Field name="name" type="text" class="name" placeholder="Tên" id="input" />
                                    <ErrorMessage name="name" class="error-message" />
                                </div>
                                <div class="input3">
                                    <Field name="phone" type="text" class="sdt" placeholder="Số điện thoại" id="input" />
                                    <ErrorMessage name="phone" class="error-message" />
                                </div>
                                <div class="form-check">
                                    <div class="radio-container">
                                        <Field type="radio" name="gender" value="male" class="form-check-input" />
                                        <label class="form-check-label">Nam</label>
                                    </div>
                                    <div class="radio-container">
                                        <Field type="radio" name="gender" value="female" class="form-check-input" />
                                        <label class="form-check-label">Nữ</label>
                                    </div>
                                    <div class="radio-container">
                                        <Field type="radio" name="gender" value="other" class="form-check-input" />
                                        <label class="form-check-label">Khác</label>
                                    </div>
                                </div>
                                <ErrorMessage name="gender" class="error-message" />
                                <div class="input4">
                                    <Field name="shopName" type="text" class="shop" placeholder="Tên shop" id="input" />
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
                                <div class="input5">
                                    <Field name="address" type="text" class="address" placeholder="Địa chỉ" id="input" />
                                    <ErrorMessage name="address" class="error-message" />
                                </div>
                                <button class="input6" type="submit">
                                    <div class="save-info">Lưu thông tin</div>
                                </button>
                            </div>
                        </Form>
                    </div>
                    <div class="avatar">
                        <!-- <div class="logo1">
                    <h3>A</h3>
                    </div>   -->
                        <img v-if="imageUrl" :src="imageUrl" class="uploaded-image" @click="showModalMethod" alt="Uploaded image" />
                        <input type="file" ref="imageUpload" accept="image/*" @change="handleImageUpload" style="display: none" />
                        <button @click="triggerImageUpload">
                            <div class="img-picker">Chọn ảnh</div>
                        </button>
                        <div class="text" v-bind:style="{ display: imageUrl ? 'none' : 'block' }">
                            <p>Dung lượng file tối đa 1 MB </p>
                            <p>Định dạng: JPEG, JPG, PNG</p>
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
            email: Yup.string()
                .email(this.$t("errors.email.invalid"))
                .required(this.$t("errors.email.empty")),
            name: Yup.string()
                .required(this.$t("errors.name.empty")),
            phone: Yup.string()
                .matches(/^[0-9]+$/, this.$t("errors.phone.invalid"))
                .min(10, this.$t("errors.phone.min"))
                .max(11, this.$t("errors.phone.max"))
                .required(this.$t("errors.phone.empty")),
            gender: Yup.string()
                .oneOf(['male', 'female', 'other'])
                .required(this.$t("errors.gender.empty")),
            shopName: Yup.string()
                .required(this.$t("errors.shop.empty")),
            address: Yup.string()
                .required(this.$t("errors.address.empty"))
        });

        return {
            imageUrl: '',
            schema,
            showModal: false
        };
    },
    methods: {
        onSubmit() {
            const toast = useToast()
            const successMessage = this.$t('errors.successMessage')
            toast.success(successMessage)
        },
        triggerImageUpload() {
            const imageUpload = this.$refs.imageUpload;
            if (imageUpload) {
                imageUpload.click();
            }
        },
        handleImageUpload(event) {
            const file = event.target.files[0];
            if (file) {
                this.imageUrl = URL.createObjectURL(file);
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.imageUrl = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        },
        showModalMethod() {
            this.showModal = true;
        },
    }
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
    width: 90%;
    margin: 25px auto;
    height: 660px;
    display: flex;
    flex-direction: column;
    background-color: white;
}

.content .content-header {
    width: 100%;
    margin-top: 20px;
    margin-left: 20px;
    margin-bottom: 40px;
}

.content .content-header h4 {
    width: 220px;
    height: 24px;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
}

.content .main-content {
    width: 100%;
    display: flex;
}

.main-content .avatar {
    width: 30%;
    display: flex;
    align-items: center;
    flex-direction: column;
}

.main-content .content-form {
    width: 70%;
}

.content-form .form-left {
    width: 20%;
}

.form-left p {
    width: 105px;
    height: 16px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 10px;
    color: #000000;
    margin-top: 12px;
    margin-bottom: 50px;
}

.content-form .form-right {
    width: 80%;
    margin-left: 20px;
}

form {
    display: flex;
}

.form-right #input {
    width: 80%;
    display: block;
    padding: .375rem 1.75rem .375rem .75rem;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    margin-bottom: 30px;
    line-height: 1.5;
}

.form-check {
    display: flex;
    justify-content: space-between;
    width: 50%;
    margin-bottom: 35px;
}

.form-check-input:checked {
    background-color: #007006 !important;
    border-color: #007006 !important;
}

.select {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    width: 80%;
}

.form-select {
    width: 48%;
}

.input6 .save-info {
    box-sizing: border-box;
    position: absolute;
    width: 200px;
    height: 50px;
    background: #007006;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    color: #fff;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.logo1 {
    width: 50%;
    display: flex;
    justify-content: center;
}

.logo1 h3 {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    width: 200px;
    height: 200px;
    text-align: center;
    outline: 1px solid;
    border-radius: 50%;
    position: absolute;
    font-style: normal;
    font-weight: 400;
    font-size: 64px;
    line-height: 77.45px;
    color: #FFFFFF;
    background-color: #007006;
}

.avatar button {
    box-sizing: border-box;
    position: absolute;
    width: 120px;
    height: 50px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    margin-top: 215px;
}

.avatar .text {
    margin-top: 275px;
}

.avatar .text p {
    width: 203px;
    height: 19px;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: rgba(0, 0, 0, 0.42);
}

img.uploaded-image {
    width: 70%;
    height: 40%;
}

.error-message {
    color: red;
    font-size: 14px;
    margin-top: -27px;
}

.input1,
.input2,
.input3,
.input4,
.input5 {
    display: flex;
    flex-wrap: wrap;
}
</style>
