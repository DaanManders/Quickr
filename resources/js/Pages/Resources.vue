<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Navigation from "@/Components/Default/Navigation.vue";

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
    <Head title="Resources" />
    <div>
        <Navigation
            :canLogin="true"
            :canRegister="true"
            :laravelVersion="laravelVersion"
            :phpVersion="phpVersion"
        ></Navigation>
    </div>
</template>
