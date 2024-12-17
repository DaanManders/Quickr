<script setup>
// Import Vue Properties.
import { ref, watch, defineProps } from "vue";
import { useForm } from "@inertiajs/vue3";

// Define Workspace Properties.
const Props = defineProps({
    Workspaces: {
        type: Array,
        required: true,
    },
});

// Create Reactive References.
const Overview = ref(Props.Workspaces.length > 0);
const Create = ref(Props.Workspaces.length === 0);

// Initiolize Submit Form.
const Workspace = useForm({
    name: "",
});

const CreateWorkspace = () => {
    // Create Workspace & Store in Database.
    Workspace.post(route("workspace.store")).then(() => {
        CheckWorkspaces(); // Check.
    });
};

const CheckWorkspaces = () => {
    // Checks the Length of the Workspace Array.
    Overview.value = Props.Workspaces.length > 0;
    Create.value = Props.Workspaces.length === 0;
};

watch(
    // Watches the Array Length.
    () => Props.Workspaces.length,
    () => {
        // Tirgger Check Function.
        CheckWorkspaces();
    },
    // Update Immediately.
    { immediate: true }
);

// Toggle between Division.
const Toggle = () => {
    Overview.value = false;
    Create.value = true;
};

// Return to Previous Division.
const Return = () => {
    Overview.value = true;
    Create.value = false;
};
</script>

<template>
    <!-- Workspace Card | Portal Interface -->
    <div
        class="flex bg-[#ffffff] flex-col justify-between h-full w-full ipad:w-1/2 rounded-2xl"
    >
        <!-- Return Home | Portal Interface -->
        <div class="flex items-center justify-between pt-5 ps-5 pe-5">
            <div class="flex items-center">
                <a
                    :href="route('Home')"
                    class="bg-[#00b4d81c] flex items-center justify-center h-10 w-10 rounded-full"
                >
                    <i class="text-[#002431] fa-solid fa-arrow-left"></i>
                </a>
                <span class="text-[#002431] font-bold text-sm ms-3">Home</span>
            </div>
            <div v-if="Overview">
                <span class="text-[#002431] font-bold text-sm ms-3"
                    >{{ Workspaces.length }}/3</span
                >
            </div>
        </div>
        <div>
            <!-- Workspace Card Header | Portal Interface -->
            <div class="flex flex-col mb-7 px-10 ipad:px-20">
                <h1 class="text-[#002431] text-2xl font-extrabold font-poppins">
                    You're 🚀 Almost There!
                </h1>
                <span class="text-[#000000a5] text-xs font-bold">
                    Select the Workspace you want to work in to get started.
                </span>
            </div>
            <!-- All Workspaces | Portal Interface -->
            <div
                v-if="Overview"
                class="bg-[#00b4d81c] rounded-lg p-6 mx-10 ipad:mx-20"
            >
                <div
                    v-for="(Workspace, Index) in Workspaces"
                    :key="Workspace.id"
                    :class="[
                        Index === 0 && Workspaces.length > 1
                            ? 'flex items-center justify-between border-b-2 border-[#00819b16] pb-6'
                            : '',
                        Index === 1 && Workspaces.length > 2
                            ? 'flex items-center justify-between border-b-2 border-[#00819b16] pt-6 pb-6'
                            : '',
                        Index === 2 ||
                        (Workspaces.length === 1 && Index === 0) ||
                        (Workspaces.length === 2 && Index === 1)
                            ? 'flex items-center justify-between'
                            : '',
                        Workspaces.length === 1 && Index === 0 ? 'pt-0' : '',
                        Workspaces.length === 2 && Index === 1 ? 'pt-6' : '',
                        Workspaces.length === 3 && Index === 2 ? 'pt-6' : '',
                    ]"
                >
                    <div class="flex items-center">
                        <div
                            class="bg-[#0400d836] flex items-center justify-center h-12 w-12 rounded-md"
                        >
                            <img
                                :src="
                                    Index === 0
                                        ? './images/Cycle.jpg'
                                        : Index === 1
                                        ? './images/Odama.png'
                                        : Index === 2
                                        ? './images/Vektora.png'
                                        : ''
                                "
                                class="rounded-md"
                            />
                        </div>
                        <div class="flex flex-col ms-4">
                            <h2 class="text-[#002431] font-extrabold text-sm">
                                {{ Workspace.name }}
                            </h2>
                            <span
                                class="text-[#00000078] text-[11px] -mt-1 font-extrabold"
                            >
                                1 Member
                            </span>
                        </div>
                    </div>
                    <a
                        :href="route('Workspace', Workspace)"
                        class="bg-[#00b4d8] px-3 py-1 rounded-full text-[#fff] text-sm font-semibold cursor-pointer hover:opacity-85 transition"
                    >
                        Join
                    </a>
                </div>
            </div>
            <!-- Create Workspace | Portal Interface -->
            <div
                v-if="Overview && Workspaces.length < 3"
                class="flex items-center justify-start pt-6 ms-10 ipad:ms-20 me-10 ipad:me-20 pe-6 ps-6 cursor-pointer"
                v-on:click="Toggle()"
            >
                <div
                    class="bg-[#e9e9e98b] flex items-center justify-center h-12 w-12 rounded-md"
                >
                    <i class="text-[#002431] fa-solid fa-plus"></i>
                </div>
                <div class="flex flex-col ms-4">
                    <h2 class="text-[#002431] font-extrabold text-sm">
                        Create Workspace
                    </h2>
                </div>
                <div></div>
            </div>
            <!-- Workspace Form | Portal Interface -->
            <div v-if="Create">
                <form @submit="CreateWorkspace" class="mx-10 ipad:mx-20">
                    <div class="flex flex-col">
                        <div
                            class="flex justify-between text-xs font-bold mb-1"
                        >
                            <span class="text-[#002431] font-poppins"
                                >Workspace Name 🏠</span
                            >
                        </div>
                        <input
                            v-model="Workspace.name"
                            class="border-2 border-[#00000031] rounded-md focus:ring-0 focus-within:border-[#00b4d8] transition placeholder:text-[#00000031] font-medium focus-within:text-[#00b4d8] text-[#002431]"
                            type="text"
                            :minlength="1"
                            :maxlength="30"
                            placeholder="Personal Workspace"
                            required
                        />
                    </div>
                    <div>
                        <button
                            class="bg-[#00b4d8] flex justify-between items-center h-[43.2px] w-full rounded-md mt-2 text-[#fff] font-bold hover:opacity-85 transition cursor-pointer px-3"
                            type="submit"
                        >
                            Continue
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                    <div
                        v-if="Create && Workspaces.length > 0"
                        class="flex justify-end items-center font-bold text-xs text-[#002431] font-poppins mt-1 cursor-pointer hover:pe-2 transition-all ease-in-out duration-500"
                        @click="Return()"
                    >
                        <i class="fa-solid fa-arrow-left-long me-1"></i>
                        <span>Workspaces</span>
                    </div>
                </form>
            </div>
            <!-- Dummy Divisions | Portal Interface -->
            <div v-if="Create"></div>
        </div>
        <!-- Dummy Divisions | Portal Interface -->
        <div></div>
    </div>
</template>
