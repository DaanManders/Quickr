<script setup>
import { router } from "@inertiajs/vue3"; // Correct import for form handling

const Props = defineProps({
    Workspace: Object,
});

const DeleteWorkspace = () =>
    router.delete(route("workspace.destroy", Props.Workspace.id));
</script>

<template>
    <div
        class="bg-[#ffffff] border-[#dedee2] border-2 rounded-md w-[98%] h-32 p-5"
    >
        <div class="flex flex-col h-full">
            <div class="flex relative justify-start items-center w-full">
                <h2 class="text-[#000000eb] font-medium text-sm font-poppins">
                    Delete
                    <span class="italic">
                        {{ Props.Workspace.name }}
                    </span>
                </h2>
                <form @submit.prevent="DeleteWorkspace">
                    <button
                        class="text-[#ff0000a8] bg-[#ff00001d] font-medium absolute right-0 text-sm rounded-md px-3 py-0.5"
                        type="submit"
                    >
                        Delete Workspace
                    </button>
                </form>
            </div>
            <div>
                <p
                    class="text-[#00000060] text-sm font-poppins italic pe-64 mt-1"
                >
                    Deleting your workspace is a permanent action. All data,
                    including files, settings, and configurations associated
                    with this workspace, will be lost and cannot be recovered.
                </p>
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
