<script setup>
import { Head } from "@inertiajs/vue3";
import Navigation from "@/Components/Default/Navigation.vue";
import Announcement from "@/Components/General/Announcement.vue";
import Heading from "@/Components/Home/Heading.vue";
import Information from "@/Components/Home/Information.vue";
import Reviews from "@/Components/Home/Reviews.vue";
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
        <Head title="Home" />

        <!-- Navigation | Home Interface -->
        <Navigation
            :canLogin="true"
            :canRegister="true"
            :laravelVersion="laravelVersion"
            :phpVersion="phpVersion"
        ></Navigation>

        <!-- Main Content | Home Interface -->
        <div class="main-content flex-grow">
            <Announcement></Announcement>
            <Heading></Heading>
            <Information></Information>
            <Reviews></Reviews>
        </div>

        <!-- Footer | Home Interface -->
        <div class="footer mt-auto">
            <Banner></Banner>
            <Copyright></Copyright>
        </div>
    </div>
</template>
