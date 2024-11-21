<script setup>
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
</script>

<template>
    <nav
        v-if="canLogin"
        class="flex items-center justify-between border-[#e8edf3] border-b-2 py-5 px-40"
    >
        <a :href="route('Home')" class="hover:opacity-60 transition">
            <i class="fa-solid fa-bolt text-[#00b5d8] me-2"></i>
            <span class="font-bold">Quickr</span>
        </a>

        <div class="flex items-center w-1/3">
            <a
                :class="
                    IsWork
                        ? 'flex items-center text-[#00819b] bg-[#00b4d83a] px-5 py-1 rounded-md mx-2 font-bold'
                        : 'flex items-center bg-transparent px-5 py-1 rounded-md mx-2 font-bold group hover:opacity-60 transition'
                "
                :href="route('Work')"
            >
                <span class="me-1">Work</span>
                <i
                    class="fa-solid fa-chevron-down text-[8px] group-hover:rotate-180 transition-transform duration-500"
                ></i>
            </a>
            <a
                :class="
                    IsFeatures
                        ? 'flex items-center text-[#00819b] bg-[#00b4d83a] px-5 py-1 rounded-md mx-2 font-bold'
                        : 'flex items-center bg-transparent px-5 py-1 rounded-md mx-2 font-bold group hover:opacity-60 transition'
                "
                :href="route('Features')"
            >
                <span class="me-1">Features</span>
                <i
                    class="fa-solid fa-chevron-down text-[8px] group-hover:rotate-180 transition-transform duration-500"
                ></i>
            </a>
            <a
                :class="
                    IsResources
                        ? 'flex items-center text-[#00819b] bg-[#00b4d83a] px-5 py-1 rounded-md mx-2 font-bold'
                        : 'flex items-center bg-transparent px-5 py-1 rounded-md mx-2 font-bold group hover:opacity-60 transition'
                "
                :href="route('Resources')"
            >
                <span class="me-1">Resources</span>
                <i
                    class="fa-solid fa-chevron-down text-[8px] group-hover:rotate-180 transition-transform duration-500"
                ></i>
            </a>
            <a
                :class="
                    IsContact
                        ? 'flex items-center text-[#00819b] bg-[#00b4d83a] px-5 py-1 rounded-md mx-2 font-bold'
                        : 'flex items-center bg-transparent px-5 py-1 rounded-md mx-2 font-bold group hover:opacity-60 transition'
                "
                :href="route('Contact')"
            >
                <span>Contact</span>
            </a>
        </div>

        <div>
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Dashboard
            </Link>
            <template v-else>
                <Link
                    :href="route('login')"
                    class="bg-transparent text-[#0f0f0f] py-2 px-3 font-bold hover:opacity-60 transition"
                >
                    Login
                </Link>

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="bg-[#00b5d8] text-white py-2 px-5 rounded-md font-bold hover:bg-[#00819b] transition"
                >
                    Register
                </Link>
            </template>
        </div>
    </nav>
</template>

<script>
export default {
    computed: {
        IsWork() {
            return window.location.pathname === "/work";
        },

        IsFeatures() {
            return window.location.pathname === "/features";
        },

        IsResources() {
            return window.location.pathname === "/resources";
        },

        IsContact() {
            return window.location.pathname === "/contact";
        },
    },
};
</script>
