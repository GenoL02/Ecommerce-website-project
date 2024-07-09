<template>
<header class="header">
    <div class="common-content">
        <div class="left">
            <router-link to="/" title="logo">
                <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ8Igk041jLV2GId67NA4c2IOmNyfZGu5nm1NEU1loPVJzgi_gX" /> </router-link>
        </div>
        <div class="bnCnGipWrapper">
            <p class="bnCnGip"> <a href="#" title="Help?"> Bạn cần giúp đỡ? </a></p>
        </div>
    </div>
</header>
</template>

<script>
export default {
    name: 'SetHeader',
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

.left {
    position: relative;
}

.left {
    height: 84px;
    width: 600px;
    flex-shrink: 0;
    max-width: 100%;
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
    height: 84px;
    overflow: hidden;
}

.header .common-content {
    display: flex;
}

.header .left {
    width: 50%;
}

.header .left img {
    width: 162px;
    margin-top: calc((84px - 64px) / 2);
}

.header .bnCnGipWrapper {
    width: 50%;
    text-align: right;
}

.header .bnCnGipWrapper p {
    line-height: 84px;
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
    padding: 0 120px;
    box-sizing: border-box;
    max-width: 100%;
    gap: 20px;
    text-align: left;
    font-size: 14px;
    color: #000;
    font-family: Inter;
}
</style>
