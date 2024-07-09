<template>
<div id="app">
    <SetMenu />
    <HomeHeader />
    <main>
        <router-view />
    </main>
    <SetLinks />
    <SetFooter />
</div>
</template>

<script>
import SetMenu from '@/components/widgets/SetMenu.vue';
import SetFooter from '@/components/widgets/SetFooter.vue';
import SetLinks from '@/components/widgets/SetLinks.vue';
import HomeHeader from '@/components/widgets/HomeHeader.vue'
export default {
    name: 'HomeMain',
    components: {
        SetMenu,
        SetFooter,
        SetLinks,
        HomeHeader
    },
};
</script>

<style scoped>
footer {
    margin-top: 1000px;
}
</style>
