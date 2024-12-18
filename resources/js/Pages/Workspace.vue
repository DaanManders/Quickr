<script setup>
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />
    <div class="bg-[#ededf0] ipad:flex hidden w-full h-screen p-10">
        <Navigation :Workspace="Workspace"></Navigation>
    </div>
</template>

<script>
import Navigation from "@/Components/General/Sidebar.vue";

export default {
    props: {
        Workspace: Object,
    },
};
</script>
