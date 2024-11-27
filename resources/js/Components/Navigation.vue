<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

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

// Reactive states for dropdown visibility
const isWorkDropdownVisible = ref(false);
const isFeaturesDropdownVisible = ref(false);
const isResourcesDropdownVisible = ref(false);
</script>

<template>
    <nav
        v-if="canLogin"
        class="flex items-center justify-between border-[#d7dadc] border-b-2 py-3 ipad:py-5 px-3 text-sm ipad:ps-3 ipad:pe-4 text-[#002431]"
    >
        <a :href="route('Home')" class="hover:opacity-60 transition">
            <img
                :src="'./images/Brand.svg'"
                alt="Quickr"
                class="h-[15px] ipad:h-5"
            />
        </a>
        <div class="items-center w-1/3 hidden ipad:flex justify-center">
            <div
                class="relative group"
                @mouseenter="isWorkDropdownVisible = true"
                @mouseleave="isWorkDropdownVisible = false"
            >
                <a
                    class="flex items-center bg-transparent py-1 rounded-md mx-2 font-bold group hover:opacity-60 transition px-5 cursor-pointer"
                    @click="toggleDropdown(isWorkDropdownVisible)"
                >
                    <span class="me-1">Work</span>
                    <i
                        class="fa-solid fa-chevron-down text-[8px] group-hover:rotate-180 transition-transform duration-500"
                    ></i>
                </a>
                <div
                    v-show="isWorkDropdownVisible"
                    class="absolute top-full left-1/2 transform -translate-x-1/2 bg-white py-2 rounded-md w-48 z-50 shadow-[0_4px_10px_rgba(0,0,0,0.15),0_4px_10px_rgba(0,0,0,0.1)] opacity-0 transition-opacity duration-300 ease-in-out"
                    :class="{ 'opacity-100': isWorkDropdownVisible }"
                >
                    <div
                        class="absolute top-[-6px] left-1/2 transform -translate-x-1/2 border-l-6 border-r-6 border-t-6 border-transparent border-b-white"
                    ></div>
                    <a
                        :href="route('Work')"
                        class="block px-4 py-1.5 hover:opacity-60 transition text-sm font-bold"
                    >
                        Overview
                    </a>
                </div>
            </div>
            <div
                class="relative group"
                @mouseenter="isFeaturesDropdownVisible = true"
                @mouseleave="isFeaturesDropdownVisible = false"
            >
                <a
                    class="flex items-center bg-transparent py-2 rounded-md mx-2 font-bold group hover:opacity-60 transition px-5 cursor-pointer"
                    @click="toggleDropdown(isFeaturesDropdownVisible)"
                >
                    <span class="me-1">Features</span>
                    <i
                        class="fa-solid fa-chevron-down text-[8px] group-hover:rotate-180 transition-transform duration-500"
                    ></i>
                </a>
                <div
                    v-show="isFeaturesDropdownVisible"
                    class="absolute top-full left-1/2 transform -translate-x-1/2 bg-white py-2 rounded-md w-48 z-50 shadow-[0_4px_10px_rgba(0,0,0,0.15),0_4px_10px_rgba(0,0,0,0.1)] opacity-0 transition-opacity duration-300 ease-in-out"
                    :class="{ 'opacity-100': isFeaturesDropdownVisible }"
                >
                    <div
                        class="absolute top-[-6px] left-1/2 transform -translate-x-1/2 border-l-6 border-r-6 border-t-6 border-transparent border-b-white"
                    ></div>
                    <a
                        :href="route('Features')"
                        class="block px-4 py-1.5 hover:opacity-60 transition text-sm font-bold"
                    >
                        Overview
                    </a>
                </div>
            </div>
            <div
                class="relative group"
                @mouseenter="isResourcesDropdownVisible = true"
                @mouseleave="isResourcesDropdownVisible = false"
            >
                <a
                    class="flex items-center bg-transparent py-2 rounded-md mx-2 font-bold group hover:opacity-60 transition px-5 cursor-pointer"
                    @click="toggleDropdown(isResourcesDropdownVisible)"
                >
                    <span class="me-1">Resources</span>
                    <i
                        class="fa-solid fa-chevron-down text-[8px] group-hover:rotate-180 transition-transform duration-500"
                    ></i>
                </a>
                <div
                    v-show="isResourcesDropdownVisible"
                    class="absolute top-full left-1/2 transform -translate-x-1/2 bg-white py-2 rounded-md w-48 z-50 shadow-[0_4px_10px_rgba(0,0,0,0.15),0_4px_10px_rgba(0,0,0,0.1)] opacity-0 transition-opacity duration-300 ease-in-out"
                    :class="{ 'opacity-100': isResourcesDropdownVisible }"
                >
                    <!-- Triangle -->
                    <div
                        class="absolute top-[-6px] left-1/2 transform -translate-x-1/2 border-l-6 border-r-6 border-t-6 border-transparent border-b-white"
                    ></div>
                    <a
                        :href="route('Resources')"
                        class="block px-4 py-1.5 hover:opacity-60 transition text-sm font-bold"
                    >
                        How To
                    </a>
                </div>
            </div>
            <a
                class="flex items-center bg-transparent py-2 rounded-md mx-2 font-bold group hover:opacity-60 transition px-5"
                :href="route('Contact')"
            >
                <span>Contact</span>
            </a>
        </div>
        <div class="hidden ipad:flex">
            <Link
                v-if="$page.props.auth?.user"
                :href="route('dashboard')"
                class="rounded-md px-3 py-2 text-[#002431] ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Dashboard
            </Link>
            <template v-else>
                <Link
                    :href="route('login')"
                    class="bg-transparent text-[#002431] py-2 px-3 font-bold hover:opacity-60 transition"
                >
                    Login
                </Link>
                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="bg-[#00b5d8] text-white py-2 px-5 rounded-md font-bold hover:bg-[#0097b5ff] transition"
                >
                    Register
                </Link>
            </template>
        </div>
        <div class="ipad:hidden">
            <i
                class="fa-solid fa-bars text-[#00b5d8] ipad:hidden text-base py-1.5 text-[15px]"
            ></i>
        </div>
    </nav>
</template>
