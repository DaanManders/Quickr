<script setup>
import { Head } from "@inertiajs/vue3";
import Form from "@/Components/Portal/Form.vue";
import Info from "@/Components/Portal/Info.vue";

const Props = defineProps({
    Workspaces: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <Head title="Portal" />
    <!-- Main Content | Portal Interface -->
    <div
        class="main-content bg-[#00b4d8] flex justify-between items-end h-screen w-full ipad:p-7 p-4 overflow-hidden"
    >
        <Form :Workspaces="Props.Workspaces" />
        <Info></Info>
    </div>
</template>
