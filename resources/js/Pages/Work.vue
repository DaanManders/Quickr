<script setup>
import { Head } from "@inertiajs/vue3";
import Navigation from "@/Components/Default/Navigation.vue";
import Announcement from "@/Components/General/Announcement.vue";
import Information from "@/Components/Work/Information.vue";
import Functionalities from "@/Components/Work/Functionalities.vue";
import Information2 from "@/Components/Work/Information2.vue";
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
        <Head title="Work" />

        <!-- Navigation | Work Interface -->
        <Navigation
            :canLogin="true"
            :canRegister="true"
            :laravelVersion="laravelVersion"
            :phpVersion="phpVersion"
        ></Navigation>

        <!-- Main Content | Work Interface -->
        <div class="main-content flex-grow">
            <Announcement></Announcement>
            <Information></Information>
            <Functionalities></Functionalities>
            <Information2></Information2>
        </div>

        <!-- Footer | Work Interface -->
        <div class="footer mt-auto">
            <Banner></Banner>
            <Copyright></Copyright>
        </div>
    </div>
</template>
