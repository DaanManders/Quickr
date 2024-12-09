<script setup>
import { Head } from "@inertiajs/vue3";
import Navigation from "@/Components/Default/Navigation.vue";
import Announcement from "@/Components/General/Announcement.vue";
import Applications from "@/Components/Resources/Applications.vue";
import Banner from "@/Components/General/Banner.vue";
import Copyright from "@/Components/General/Copyright.vue";
import Review from "@/Components/Resources/Review.vue";
import Information from "@/Components/Work/Information.vue";

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
        <Head title="Home" />

        <!-- Navigation | Resources Interface -->
        <Navigation
            :canLogin="true"
            :canRegister="true"
            :laravelVersion="laravelVersion"
            :phpVersion="phpVersion"
        ></Navigation>

        <!-- Main Content | Resources Interface -->
        <div class="main-content flex-grow">
            <Announcement></Announcement>
            <Applications></Applications>
            <Review></Review>
            <Information></Information>
        </div>

        <!-- Footer | Resources Interface -->
        <div class="footer mt-auto">
            <Banner></Banner>
            <Copyright></Copyright>
        </div>
    </div>
</template>
