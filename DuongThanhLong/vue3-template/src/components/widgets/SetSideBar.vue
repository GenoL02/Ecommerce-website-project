<template>
<nav class='animated bounceInDown bg-white'>
    <ul>
        <li class='sub-menu'><a href='#settings' @click.prevent='toggleMenu(0)'> <img src="@/assets/item1.png"> Vận Chuyển<div class='fa fa-caret-down right' :class="{ 'fa-caret-up': isCaretUp[0], 'fa-caret-down': !isCaretUp[0]  }"></div></a>
            <ul v-show='isOpen[0]'>
                <li><a href='#settings'>Tất cả</a></li>
                <li><a href='#settings'>Kho hàng</a></li>
            </ul>
        </li>
        <li class='sub-menu'><a href='#settings' @click.prevent='toggleMenu(1)'> <img src="@/assets/item2.png"> Quản Lý Đơn Hàng<div class='fa fa-caret-down right' :class="{ 'fa-caret-up': isCaretUp[1], 'fa-caret-down': !isCaretUp[0]  }"></div></a>
            <ul v-show='isOpen[1]'>
                <li><a href='#settings'>Tất cả</a></li>
                <li><a href='#settings'>Đơn Hủy</a></li>
                <li><a href='#settings'>Trả Hàng/Hoàn Tiền &amp; Privacy</a></li>
            </ul>
        </li>
        <li class='sub-menu'><a href='#message' @click.prevent='toggleMenu(2)'><img src="@/assets/item3.png"> Quản Lý Sản Phẩm<div class='fa fa-caret-down right' :class="{ 'fa-caret-up': isCaretUp[2], 'fa-caret-down': !isCaretUp[0]  }"></div></a>
            <ul v-show='isOpen[2]'>
                <li>
                    <router-link to='/list' title="Tất Cả Sản Phẩm">Tất Cả Sản Phẩm</router-link>
                </li>
                <li>
                    <router-link to="/add-product" title="Thêm sản phẩm">Thêm Sản Phẩm</router-link>
                </li>
                <li><a href='#settings'>Sản Phẩm Vi Phạm</a></li>
                <li><a href='#settings'>Cài Đặt Sản Phẩm</a></li>
            </ul>
        </li>
        <li class='sub-menu'><a href='#settings' @click.prevent='toggleMenu(3)'><img src="@/assets/item4.png"> Kênh Marketing<div class='fa fa-caret-down right' :class="{ 'fa-caret-up': isCaretUp[3], 'fa-caret-down': !isCaretUp[0]  }"></div></a>
            <ul v-show='isOpen[3]'>
                <li><a href='#settings'>Facebook</a></li>
                <li><a href='#settings'>Tiktok</a></li>
                <li><a href='#settings'>Youtube</a></li>
            </ul>
        </li>
        <li class='sub-menu'><a href='#settings' @click.prevent='toggleMenu(4)'><img src="@/assets/item5.png"> Tài Chính<div class='fa fa-caret-down right' :class="{ 'fa-caret-up': isCaretUp[4], 'fa-caret-down': !isCaretUp[0]  }"></div></a>
            <ul v-show='isOpen[4]'>
                <li><a href='#settings'>1</a></li>
                <li><a href='#settings'>2</a></li>
                <li><a href='#settings'>3</a></li>
            </ul>
        </li>
        <li class='sub-menu'><a href='#settings' @click.prevent='toggleMenu(5)'><img src="@/assets/item6.png"> Dữ Liệu<div class='fa fa-caret-down right' :class="{ 'fa-caret-up': isCaretUp[5], 'fa-caret-down': !isCaretUp[0]  }"></div></a>
            <ul v-show='isOpen[5]'>
                <li><a href='#settings'>Tất cả</a></li>
                <li><a href='#settings'>Dashboard</a></li>
            </ul>
        </li>
        <li class='sub-menu'><a href='#settings' @click.prevent='toggleMenu(6)'><img src="@/assets/item7.png"> Phát Triển<div class='fa fa-caret-down right' :class="{ 'fa-caret-up': isCaretUp[6], 'fa-caret-down': !isCaretUp[0]  }"></div></a>
            <ul v-show='isOpen[6]'>
                <li><a href='#settings'>1</a></li>
                <li><a href='#settings'>2</a></li>
                <li><a href='#settings'>3</a></li>
            </ul>
        </li>
        <li class='sub-menu'><a href='#settings' @click.prevent='toggleMenu(7)'><img src="@/assets/item8.png"> Chăm Sóc Khách Hàng<div class='fa fa-caret-down right' :class="{ 'fa-caret-up': isCaretUp[7], 'fa-caret-down': !isCaretUp[0]  }"></div></a>
            <ul v-show='isOpen[7]'>
                <li><a href='#settings'>1</a></li>
                <li><a href='#settings'>2</a></li>
                <li><a href='#settings'>3</a></li>
            </ul>
        </li>
        <li class='sub-menu'><a href='#settings' @click.prevent='toggleMenu(8)'><img src="@/assets/item9.png"> Quản Lý Shop<div class='fa fa-caret-down right' :class="{ 'fa-caret-up': isCaretUp[8], 'fa-caret-down': !isCaretUp[0]  }"></div></a>
            <ul v-show='isOpen[8]'>
                <li>
                    <router-link to='/info' title="Cài đặt thông tin Shop">Cài đặt thông tin Shop</router-link>
                </li>
                <li><a href='#settings'>Cài đặt vận chuyển</a></li>
            </ul>
        </li>
    </ul>
</nav>
</template>

<script>
export default {
    name: 'SetMenu',
    data() {
        return {
            isOpen: [false, false, false, false, false, false, false, false, false],
            isCaretUp: [false, false, false, false, false, false, false, false, false]
        }
    },
    methods: {
        toggleMenu(index) {
            this.isOpen[index] = !this.isOpen[index];
            this.isCaretUp[index] = !this.isCaretUp[index];
        }
    }
}
</script>

<style scoped>
nav {
    position: relative;
    width: 20%;
}

nav img {
    width: 24px;
    height: 24px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

/*nav ul li {
   Sub Menu 
}*/
nav ul li a {
    display: block;
    padding: 10px 15px;
    color: black;
    text-decoration: none;
    -webkit-transition: 0.2s linear;
    -moz-transition: 0.2s linear;
    -ms-transition: 0.2s linear;
    -o-transition: 0.2s linear;
    transition: 0.2s linear;
}

nav ul li a:hover {
    background: #007006;
    color: #fff;
}

nav ul li a .fa {
    width: 16px;
    text-align: center;
    margin-right: 5px;
    float: right;
}

nav ul ul {
    background: white;
}

nav ul li ul li a {

    border-left: 30px solid transparent;
    padding: 10px 20px;
}

nav ul li ul li a:hover {

    border-left: 4px solid #3498db;
}
</style>
