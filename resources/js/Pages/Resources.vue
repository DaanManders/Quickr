<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Navigation from "@/Components/Navigation.vue";
import FavoriteApps from "@/Components/FavoriteApps.vue";
import Comment from "@/Components/Comment.vue";
import PricePlans from "@/Components/PricePlans.vue";
import Action from "@/Components/Action.vue";
import Footer from "@/Components/Footer.vue";

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

function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
}
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

        <FavoriteApps></FavoriteApps>

        <Comment></Comment>

        <PricePlans></PricePlans>

        <Action></Action>

        <Footer></Footer>
    </div>
</template>
