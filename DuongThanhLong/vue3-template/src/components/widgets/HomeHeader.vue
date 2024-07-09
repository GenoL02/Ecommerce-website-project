<template>
<header class="header">
    <div class="common-content">
        <div class="left">
            <a href="#" title="Logo">
                <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ8Igk041jLV2GId67NA4c2IOmNyfZGu5nm1NEU1loPVJzgi_gX" />
            </a>
        </div>
        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Tìm kiếm" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="right">
        <div class="cart">
            <router-link to="/detail" class="login"><img src="@/assets/shopping-cart.png"></router-link>
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

.left {
    position: relative;
}

.left {
    height: 84px;
    width: 300px;
    flex-shrink: 0;
    max-width: 100%;
}

.common-content {
    width: 1200px;
    margin: 0 auto;
}

.header {
    width: 100%;
    height: 100px;
    overflow: hidden;
}

.header .common-content {
    display: flex;
}

.header .left {
    width: 25%;
}

.header .left img {
    width: 162px;
    margin-top: calc((84px - 64px) / 2);
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

.search-container button {
    float: right;
    padding: 6px 10px;
    margin-top: 30px;
    margin-right: 16px;
    background: #ddd;
    font-size: 17px;
    border: 1px solid rgba(0, 0, 0, 0.1);

    cursor: pointer;
}

.search-container button:hover {
    background-color: #007006;
}

.search-container {
    width: 655px;
}

input[type=text] {
    padding: 6px;
    margin-top: 30px;
    font-size: 17px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    width: 600px;
}

.search-container {
    float: right;
}

.header .right img {
    width: 40px;
    position: absolute;
    margin: 30px -80px;
    background-size: cover;

}
</style>
