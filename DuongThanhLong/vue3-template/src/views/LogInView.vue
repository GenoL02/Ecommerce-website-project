<template>
<SetHeader />
<main>
    <section class="common-content">
        <div class="signinInner">
            <div class="frameParent">
                <div class="infoWrapper">
                    <div class="info">
                        <div class="bnHngChuynNghipParent">
                            <div class="bnHngChuyn">
                                <h2>Bán hàng chuyên nghiệp</h2>

                                <div class="qunLShopContainer">
                                    <p>
                                        Quản lý shop của bạn một cách hiệu quả hơn <br />
                                        trên Shoop với Shoop - Kênh Người bán
                                    </p>
                                </div>
                            </div>
                            <div class="image35Icon">
                                <img src="@/assets/login.png" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="frm">
                    <div class="ngNhpParent">
                        <form @submit.prevent="handleSubmit($event)" id="login">
                            <div class="ngNhp">
                                <h3>Đăng nhập</h3>
                                <div class="inputParent">
                                    <div class="input">
                                        <input class="email" placeholder="Email" type="text" v-model="formData.email" />
                                    </div>
                                    <span class="error" v-if="errors.email">{{ errors.email }}</span>
                                    <div class="input1">
                                        <input class="inputChild" placeholder="Mật khẩu" :type="passwordFieldType" id="mk" v-model="formData.password" />
                                        <span class="show-btn" @click="togglePasswordVisibility">
                                            <i class="fas" :class="{'fa-eye': passwordFieldType === 'password', 'fa-eye-slash': passwordFieldType === 'text'}"></i>
                                        </span>
                                    </div>
                                    <span class="error" v-if="errors.password">{{ errors.password }}</span>
                                    <div class="input2">
                                        <div class="qunMtKhu">
                                            <router-link to="/forgot-password" title="Quên mật khẩu">Quên mật khẩu</router-link>
                                        </div>
                                    </div>
                                </div>
                                <button class="input3" type="submit">
                                    <div class="ngNhp1">ĐĂNG NHẬP</div>
                                </button>
                                <div class="success-message" v-if="successMessage">{{ loginSuccess }}</div>
                            </div>
                        </form>
                        <div class="Wrapper">
                            <div class="bnMiBitContainer">
                                <span> Bạn mới biết đến Shoop? </span>

                                <span class="ngK">
                                    <router-link to="/signup" title="Đăng ký">Đăng ký</router-link>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>
<SetFooter2 />
</template>

<script>
import SetHeader from '@/components/widgets/SetHeader.vue'
import SetFooter2 from '@/components/widgets/SetFooter2.vue'
import {
    useToast
} from 'vue-toastification'
export default {
    name: 'LogInView',
    components: {
        SetHeader,
        SetFooter2
    },
    data() {
        return {
            formData: {
                email: '',
                password: '',
                errors: {},
            },
            errors: {},
            passwordFieldType: 'password',
        };
    },
    methods: {
        togglePasswordVisibility() {
            this.passwordFieldType = this.passwordFieldType === 'password' ? 'text' : 'password';
        },
        validateEmail(email) {
            var re = /^\S+@\S+\.\S+$/;
            return re.test(String(email).toLowerCase());
        },
        handleSubmit(event) {
            event.preventDefault();
            this.errors = {}; // Reset errors

            // Validate email
            if (this.formData.email === "") {
                this.errors.email = this.$t("errors.email.empty");
            } else if (!this.validateEmail(this.formData.email)) {
                this.errors.email = this.$t("errors.email.invalid");
            } else if (this.formData.email.length > 200) {
                this.errors.email = this.$t("errors.email.tooLong");
            } else {
                this.errors.email = '';
            }
            // Validate password
            if (this.formData.password === '') {
                this.errors.password = this.$t('errors.password.empty');
            } else if (this.formData.password.length < 6) {
                this.errors.password = this.$t('errors.password.tooShort');
            } else {
                this.errors.password = '';
            }

            // If there are no errors, display a success message
            if (!this.errors.email && !this.errors.password) {
                const toast = useToast();
                toast.success(this.$t('errors.loginSuccess'));
                this.$router.push("/my-store");
            }
        },
        submitForm() {
            const toast = useToast()
            const successMessage = this.$t('errors.successMessage')
            toast.success(successMessage)
        },
    }
};
</script>

<style scoped>
main {
    width: auto;
    height: 450px;
    overflow: hidden;
    background-color: rgba(0, 0, 0, .05);
}

.main.bnHngChuynNghipParent {
    width: 50%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 30px;
    flex-shrink: 0;

}

.bnHngChuynNghipParent img {
    width: 500px;
    height: 250px;
    margin: 0 auto;
}

.section {
    background-color: rgba(0, 0, 0, .05);
}

.main.common-content {
    display: flex;
}

.bnHngChuyn {
    margin: 0px 40px;
    position: relative;
    font-size: inherit;
    font-weight: 700;
    font-family: inherit;
    display: inline-block;
    max-width: 100%;
}

.trnShoopVi {
    margin: 0;
}

.qunLShopContainer {
    position: relative;
    font-size: 18px;
    color: rgba(0, 0, 0, 0.87);
}

.image35Icon {
    margin-left: -7px;
    width: 450px;
    height: 203.9px;
    position: relative;
    object-fit: cover;
    flex-shrink: 0;
}

.info,
.infoWrapper {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
    flex-shrink: 0;
}

.info {
    align-self: stretch;
    height: 337px;

    padding: 0 0 229px;
    box-sizing: border-box;
    gap: 50px;
}

.infoWrapper {
    width: 437px;
    min-width: 437px;
    min-height: 418px;
    justify-content: center;
}

.email,
.ngNhp {
    font-family: Inter;
    position: relative;
    text-align: left;
    display: inline-block;
}

.ngNhp {
    margin: 0;
    font-size: 20px;
    font-weight: 400;
    color: #000;
    min-width: 123px;
}

.email {
    width: 350px;
    border: 0;
    outline: 0;
    font-size: 16px;
    background-color: transparent;
    height: 19px;
    color: rgba(0, 0, 0, 0.42);
    padding: 0;
}

.input,
.inputChild {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
}

.input {
    align-self: stretch;
    border-radius: 4px;
    border: 1px solid rgba(0, 0, 0, 0.1);

    flex-direction: row;
    padding: 16px 15px 15px;
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
    font-family: Inter;
    font-size: 16px;
    color: rgba(0, 0, 0, 0.42);
}

.hide1Icon {
    height: 24px;
    width: 24px;
    position: relative;
    object-fit: cover;
    min-height: 24px;
}

.input1 {
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
}

.qunMtKhu {
    position: relative;
    font-size: 16px;
    font-family: Inter;
    color: #007006;
    text-align: left;
    display: inline-block;
    min-width: 115px;
}

.input2,
.inputParent {
    align-self: stretch;
    display: flex;
    align-items: flex-start;
}

.input2 {
    border-radius: 4px;

    flex-direction: row;
    justify-content: flex-end;
    padding: 0 0 5px;
}

.inputParent {
    flex-direction: column;
    justify-content: flex-start;
    gap: 20px;
}

.ngNhp1 {
    width: 400px;
    position: relative;
    font-size: 16px;
    font-family: Inter;
    color: #fff;
    text-align: center;
    display: inline-block;
    min-width: 96px;
}

.input3,
.ngNhpParent {
    align-self: stretch;
    display: flex;
    align-items: flex-start;
    float: right;
}

.input3 {
    cursor: pointer;
    border: 0;
    padding: 16px 20px 15px;
    background-color: #007006;
    border-radius: 4px;

    flex-direction: row;
    justify-content: center;
    white-space: nowrap;
}

.input3:hover {
    background-color: #26962b;
}

.ngNhpParent {
    margin: 0;
    flex-direction: column;
    justify-content: flex-start;
    gap: 39.5px;
}

.ngK {
    color: #007006;
}

.bnMiBitContainer {
    position: relative;
}

.Wrapper,
.frm {
    display: flex;
}

.Wrapper {
    align-self: stretch;
    flex-direction: row;
    justify-content: center;
    padding: 0 0 0 10px;
}

.frm {
    float: right;
    width: 500px;
    border-radius: 4px;
    background-color: #fff;
    border: 4px solid rgba(0, 0, 0, 0.05);
    box-sizing: border-box;
    overflow: hidden;
    flex-shrink: 0;
    flex-direction: column;
    justify-content: flex-start;
    padding: 30px 29px;
    min-width: 500px;
    max-width: 100%;
    font-size: 16px;
    color: #000;
    align-items: flex-start;
}

.signinInner {
    display: flex;
    flex-direction: row;
    max-width: 100%;
}

.frameParent {
    width: 1200px;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 20px;
}

.signinInner {
    width: 1390px;
    align-items: flex-start;
    justify-content: center;
    padding: 0 20px;
    box-sizing: border-box;
    text-align: left;
    font-size: 28px;
    color: #007006;
    font-family: Inter;
}

.shoopTtC {
    position: relative;
}

footer,
.signin {

    display: flex;
}

footer {
    align-self: stretch;
    background-color: #fff;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 27px 20px 26px;
    text-align: left;
    font-size: 14px;
    color: rgba(0, 0, 0, 0.5);
    font-family: Inter;
}

.signin {
    width: 100%;
    position: relative;
    background-color: #fdfaf7;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    gap: 50px;
    letter-spacing: normal;
}

@media screen and (max-width: 1000px) {
    .header {
        flex-wrap: wrap;
    }

    .infoWrapper {
        flex: 1;
        min-height: auto;
    }

    .frm {
        flex: 1;
    }

    .frameParent {
        flex-wrap: wrap;
    }
}

@media screen and (max-width: 975px) {
    .header {
        padding-left: 60px;
        padding-right: 60px;
        box-sizing: border-box;
    }

    .signin {
        gap: 25px 50px;
    }
}

@media screen and (max-width: 725px) {
    .info {
        padding-bottom: 149px;
        box-sizing: border-box;
    }

    .frm,
    .infoWrapper {
        min-width: 100%;
    }

    .frm {
        gap: 49px 99px;
        padding-top: 20px;
        padding-bottom: 20px;
        box-sizing: border-box;
    }
}

@media screen and (max-width: 450px) {
    .header {
        padding-left: 20px;
        padding-right: 20px;
        box-sizing: border-box;
    }

    .bnHngChuyn {
        font-size: 22px;
    }

    .info {
        gap: 25px 50px;
    }

    .ngNhp {
        font-size: 19px;
    }

    #login {
        float: right;
    }
}

.input1 input#mk :valid~span {
    display: block;
}

.input1 span i.hide-btn::before {
    content: "\f070";
}

.error {
    color: red;
    font-size: 15px;
}
</style>
