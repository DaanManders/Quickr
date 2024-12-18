<script setup>
import { Head } from "@inertiajs/vue3";

import Navigation from "@/Components/General/Sidebar.vue";
import Account from "@/Components/Settings/Account.vue";
import Edit from "@/Components/Settings/Edit.vue";
import Delete from "@/Components/Settings/Delete.vue";

defineProps({
    Workspace: Object,
});
</script>

<template>
    <Head title="Settings" />
    <div
        class="bg-[#ededf0] ipad:flex justify-between hidden w-full h-screen p-10"
    >
        <div class="flex">
            <Navigation :Workspace="Workspace"></Navigation>
        </div>
        <div class="flex flex-col items-end w-full">
            <Account :Workspace="Workspace"></Account>
            <Edit :Workspace="Workspace" class="mt-5"></Edit>
            <Delete :Workspace="Workspace" class="mt-5"></Delete>
        </div>
    </div>
</template>
