<template>
    <router-view></router-view>
</template>



<script>
import Sidebar from './sidebar.vue';

export default {
    name: "App",
    components: { Sidebar },
    methods: {
        toggleBodyClass() {
            document.querySelector("body").classList.toggle("active");
        }
    }
}
</script>

