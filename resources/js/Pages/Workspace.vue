<script setup>
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Workspace" />
    <div class="bg-[#ededf0] ipad:flex hidden w-full h-screen p-10">
        <Navigation></Navigation>
    </div>
</template>

<script>
import Navigation from "@/Components/Workspace/Navigation.vue";

export default {
    props: {
        Workspace: Object,
    },
};
</script>
