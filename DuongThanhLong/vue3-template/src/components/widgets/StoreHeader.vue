<template>
<header class="header">
    <div class="common-content">
        <div class="left">
            <router-link to="/" title="logo">
                <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ8Igk041jLV2GId67NA4c2IOmNyfZGu5nm1NEU1loPVJzgi_gX" /> </router-link>
            <h4>Kênh Người Bán</h4>
        </div>
        <div class="logo">
            <h3>A</h3>
            <p>Tên chủ cửa hàng</p>
        </div>
        <div class="bell">
            <img src="@/assets/bell.png">
            <p>Cửa hàng A</p>
        </div>
    </div>
</header>
</template>

<script>
export default {
    name: 'HomeHeader',
};
</script>

<style scoped>
.logoIcon {
    position: absolute;
    height: calc(100% - 20px);
    top: 10px;
    bottom: 10px;
    left: 0;
    max-height: 100%;
    width: 161.7px;
    object-fit: cover;
}

.bnCnGip {
    display: inline-block;
    min-width: 114px;
}

.common-content {
    width: 1200px;
    margin: 0 auto;
}

.header {
    width: 100%;
    height: 65px;
    overflow: hidden;
}

.header .common-content {
    display: flex;
    justify-content: space-between;
}

.header .left {
    width: 60%;
    display: flex;
    position: relative;
    height: 65px;
    flex-shrink: 0;
    max-width: 100%;
}

.left h4 {
    margin-top: 20px;
    width: 180px;
    height: 22px;
    font-style: normal;
    font-weight: 400;
    font-size: 23px;
    line-height: 23px;
    color: #000000;
}

.header .left img {
    width: 110px;
    margin-top: calc((65px - 64px) / 2);
}

.header .logo {
    width: 20%;
}

.logo p {
    margin-top: 25px;
    margin-left: 90px;
    width: 155px;
    height: 17px;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 17px;
    color: #000000;
}

.logo h3 {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-top: 9px;
    margin-left: 20px;
    width: 45px;
    height: 45px;
    text-align: center;
    outline: 1px solid;
    border-radius: 50%;
    position: absolute;
    font-style: normal;
    font-weight: 400;
    font-size: 33px;
    line-height: 58px;
    color: #FFFFFF;
    background-color: #007006;
}

.bell {
    width: 20%;
    display: flex;
    justify-content: space-between;
}

.bell img {
    margin-top: 20px;
    margin-left: 35px;
    width: 30px;
    height: 30px
}

.bell p {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-top: 15px;
    width: 125px;
    height: 36px;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
    border: 1px solid;
    border-radius: 20px;
}

.header {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 34px 0 0;
}

.header {
    align-self: stretch;
    background-color: #fff;
    flex-direction: row;
    justify-content: space-between;
    padding: 0 30px;
    box-sizing: border-box;
    max-width: 100%;
    gap: 20px;
    text-align: left;
    font-size: 14px;
    color: #000;
}
</style>
