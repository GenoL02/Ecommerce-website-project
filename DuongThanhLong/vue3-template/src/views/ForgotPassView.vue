<template>
<SetHeader />
<main>
    <form @submit.prevent="handleSubmit($event)" id="login">
        <div class="ngNhp">
            <div class="arrow">
                <router-link to="/login" title="Quay lại">
                    <img src="@/assets/images.png" width="30px" height="30px" />
                </router-link>
                <h3>Đặt lại mật khẩu</h3>
            </div>
            <div class="inputParent">
                <div class="input">
                    <input class="email" placeholder="Email" type="text" v-model="formData.email" />
                </div>
                <span class="error" v-if="errors.email">{{ errors.email }}</span>
                <button @click="resetpass" type="submit" class="input3">
                    <div class="ngNhp1">Tiếp theo</div>
                </button>
            </div>
        </div>
    </form>
</main>
<SetFooter2 />
</template>

<script>
import SetHeader from "@/components/widgets/SetHeader.vue";
import SetFooter2 from "@/components/widgets/SetFooter2.vue";
export default {
    name: "ForgotPassView",
    components: {
        SetHeader,
        SetFooter2,
    },
    data() {
        return {
            formData: {
                email: "",
            },
            errors: {
                email: "",
            },
        };
    },
    methods: {
        validateEmail(email) {
            var re = /^\S+@\S+\.\S+$/;
            return re.test(String(email).toLowerCase());
        },
        handleSubmit(event) {
            event.preventDefault();
            this.errors = {}; // Reset errors
            if (this.formData.email === "") {
                this.errors.email = this.$t("errors.email.empty");
            } else if (!this.validateEmail(this.formData.email)) {
                this.errors.email = this.$t("errors.email.invalid");
            } else if (this.formData.email.length > 200) {
                this.errors.email = this.$t("errors.email.tooLong");
            } else {
                this.errors.email = "";
            }
        },
        resetpass(event) {
            this.handleSubmit(event);
            if (!this.errors.email) {
                this.$router.push("/reset-password"); // Chuyển hướng đến trang liên hệ
            }
        },
    },
};
</script>

<style scoped>
.error {
    color: red;
    font-size: 15px;
}

main {
    width: auto;
    height: 450px;
    overflow: hidden;
    padding: 40px 400px;
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
    background-color: rgba(0, 0, 0, 0.05);
}

.main.common-content {
    display: flex;
}

.bnHngChuyn {
    margin: 0;
    position: relative;
    font-size: inherit;
    font-weight: 700;
    font-family: inherit;
    display: inline-block;
    max-width: 100%;
}

main {
    background-color: rgb(0, 0, 0, 0.05);
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

#login h3 {
    text-align: center;
    margin-left: 120px;
}

.ngNhp {
    align-items: center;
    justify-content: center;

    font-size: 24px;
    font-weight: 400;
    background-color: white;
    width: auto;
    box-sizing: border-box;
    padding: 40px 30px 30px;
}

.email {
    width: 440px;
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
    width: 200px;
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

.bnMiBitNShoopNgKWrapper,
.frm {
    display: flex;
}

.bnMiBitNShoopNgKWrapper {
    align-self: stretch;
    flex-direction: row;
    justify-content: center;
    padding: 0 0 0 10px;
}

.frm {
    width: 500px;
    border-radius: 4px;
    background-color: #fff;
    border: 4px solid rgba(0, 0, 0, 0.05);
    box-sizing: border-box;
    overflow: hidden;
    flex-shrink: 0;
    flex-direction: column;
    justify-content: flex-start;
    padding: 30px 30px 29px;
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
}

#login .arrow {
    display: flex;
    height: 60px;
}
</style>
