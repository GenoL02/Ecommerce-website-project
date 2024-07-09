<template>
  <div class="layout">
    <SetHeader />
    <main>
      <router-view /> </main>
    <slot name="footer">
      <SetFooter />
    </slot>
  </div>
</template>

<script>
import SetHeader from './widgets/SetHeader.vue'
import SetFooter from './widgets/SetFooter.vue'

export default {
  name: 'SetLayout',
  components: {
    SetHeader,
    SetFooter
  },
  // other component options...
};
</script>

<style>
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
