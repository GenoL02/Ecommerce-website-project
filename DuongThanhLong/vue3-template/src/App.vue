<template>
 <HomeMain v-if="$route.path === '/'" />
  <router-view v-if="$route.path === '/signup'" />
  <router-view v-if="$route.path === '/login'" />
  <router-view v-if="$route.path === '/forgot-password'" />
  <router-view v-if="$route.path === '/reset-password'" />
  <router-view v-if="$route.path === '/detail'" />
  <router-view v-if="$route.path === '/my-store'" />
  <router-view v-if="$route.path === '/info'" />
  <router-view v-if="$route.path === '/list'" />
  <router-view v-if="$route.path === '/add-product'" />
</template>

<script>
import HomeMain from '@/views/HomeMain.vue';
export default {
  components: {
    HomeMain
  },
};
</script>

<style>
*{
 margin : 0;
 padding : 0;
}
.layout {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}
main {
  flex: 1; /* Chiếm phần còn lại sau khi header và footer chiếm chỗ */
  padding: 0px;
}
a{
  color: #007006;
}

</style>
