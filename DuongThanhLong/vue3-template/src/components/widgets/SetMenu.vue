<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-top ">

    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <router-link to="/login" class="nav-item nav-link" title="Kênh người bán">Kênh người bán</router-link>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Trở thành người bán</a>
        </li>
      </ul>
      <div class="navbar-nav ">
        <a class="nav-item nav-link" href="#">Thông báo</a>
        <a class="nav-item nav-link" href="#">Hỗ trợ</a>
        <router-link to="/signup" class="nav-item nav-link" title="Đăng ký">Đăng ký</router-link>
        <router-link to="/login" class="nav-item nav-link" title="Đăng nhập">Đăng nhập</router-link>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
  name: 'SetMenu',
};
</script>
<style scoped>
.bg-top{
  background-color: #007006 !important;
  width: 100%;
}
.navbar-nav li a{
  color: white !important;
}
.navbar-nav a{
  color: white !important;
}
</style>
