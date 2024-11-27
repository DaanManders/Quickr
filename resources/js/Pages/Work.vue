<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Navigation from "@/Components/Navigation.vue";
import Announcement from "@/Components/Announcement.vue";
import Action from "@/Components/Action.vue";
import Copyright from "@/Components/Copyright.vue";
import Information from "@/Components/Work/Information.vue";
import Information2 from "@/Components/Work/Information2.vue";
import Functionalities from "@/Components/Work/Functionalities.vue";

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
    <div class="flex flex-col min-h-screen">
        <Head title="Home" />

        <!-- Navigation -->
        <Navigation
            :canLogin="true"
            :canRegister="true"
            :laravelVersion="laravelVersion"
            :phpVersion="phpVersion"
        ></Navigation>

        <!-- Main Content -->
        <div class="flex-grow">
            <Announcement></Announcement>
            <Information></Information>
            <Functionalities></Functionalities>
            <Information2></Information2>
        </div>

        <!-- Footer -->
        <div class="mt-auto">
            <Action></Action>
            <Copyright></Copyright>
        </div>
    </div>
</template>
