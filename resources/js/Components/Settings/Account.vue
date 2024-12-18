<script setup>
import { router } from "@inertiajs/vue3";

const LogOut = () => {
    router.post(route("logout"));
};
</script>

<template>
    <div
        class="bg-[#ffffff] border-[#dedee2] border-2 rounded-md w-[98%] h-40 p-5"
    >
        <div class="flex flex-col justify-between h-full">
            <div class="flex relative justify-between items-center w-full">
                <h2 class="text-[#000000eb] font-medium text-sm font-poppins">
                    Account Details
                    <i
                        class="text-[#00000060] text-xs fa-solid fa-circle-info ms-1"
                    ></i>
                </h2>
                <form @submit.prevent="LogOut">
                    <button
                        type="submit"
                        class="text-[#000000a8] border-[#c2c2c759] font-medium border-2 absolute right-0 text-sm rounded-md px-3 py-0.5"
                    >
                        Sign Out
                    </button>
                </form>
            </div>
            <div class="flex items-center">
                <div class="flex flex-col">
                    <h3
                        class="text-[#00000060] font-medium text-sm font-poppins"
                    >
                        Account Name
                    </h3>
                    <span
                        class="text-[#000000a1] font-medium text-sm font-poppins italic"
                        >{{ $page.props.auth.user.name }}</span
                    >
                </div>
                <div class="flex flex-col ms-10">
                    <h3
                        class="text-[#00000060] font-medium text-sm font-poppins"
                    >
                        Email Address
                    </h3>
                    <span
                        class="text-[#000000a1] font-medium text-sm font-poppins italic"
                        >{{ $page.props.auth.user.email }}</span
                    >
                </div>
                <div class="flex flex-col ms-10">
                    <h3
                        class="text-[#00000060] font-medium text-sm font-poppins"
                    >
                        Member Since
                    </h3>
                    <span
                        class="text-[#000000a1] font-medium text-sm font-poppins italic"
                    >
                        {{
                            $page.props.auth.user.created_at.split("T")[0]
                        }}</span
                    >
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        Workspace: Object,
    },
};
</script>
