<script setup>
import { Head } from "@inertiajs/vue3";
import Navigation from "@/Components/Default/Navigation.vue";
import Information from "@/Components/Features/Information.vue";
import Features from "@/Components/Features/Features.vue";
import Banner from "@/Components/General/Banner.vue";
import Copyright from "@/Components/General/Copyright.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <div class="main-container flex flex-col min-h-screen">
        <Head title="Features" />

        <!-- Navigation | Features Interface -->
        <Navigation
            :canLogin="true"
            :canRegister="true"
            :laravelVersion="laravelVersion"
            :phpVersion="phpVersion"
        ></Navigation>

        <!-- Main Content | Features Interface -->
        <div class="main-content flex-grow">
            <Information></Information>
            <Features></Features>
        </div>

        <!-- Footer | Features Interface -->
        <div class="footer mt-auto">
            <Banner></Banner>
            <Copyright></Copyright>
        </div>
    </div>
</template>
