<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Navigation from "@/Components/Navigation.vue";
import Announcement from "@/Components/Announcement.vue";
import Heading from "@/Components/Heading.vue";
import Action from "@/Components/Action.vue";
import Copyright from "@/Components/Copyright.vue";
import Information from "@/Components/Information.vue";
import Reviews from "@/Components/Reviews.vue";

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
            <Heading></Heading>
            <Information></Information>
            <Reviews></Reviews>
        </div>

        <!-- Footer -->
        <div class="mt-auto">
            <Action></Action>
            <Copyright></Copyright>
        </div>
    </div>
</template>
