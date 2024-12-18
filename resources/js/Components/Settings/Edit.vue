<script setup>
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

const Props = defineProps({
    Workspace: Object,
});

const Form = useForm({
    name: Props.Workspace.name,
});

const IsUpdated = ref(false);
const InputRef = ref(null);

const UpdateWorkspace = () => {
    Form.put(route("workspace.update", Props.Workspace.id), {
        preserveScroll: true,
    });

    IsUpdated.value = true;
    InputRef.value.blur();

    setTimeout(() => {
        IsUpdated.value = false;
    }, 2000);
};
</script>

<template>
    <div
        class="bg-[#ffffff] border-[#dedee2] flex justify-between items-center border-2 rounded-md w-[98%] h-20 p-5"
    >
        <div class="w-full">
            <h2 class="text-[#000000eb] font-medium text-sm font-poppins">
                Edit Workspace
            </h2>
            <span class="text-[#00000060] text-sm font-poppins italic">
                Workspace name will be saved automatically
            </span>
        </div>
        <div class="flex justify-end w-full">
            <input
                type="text"
                v-model="Form.name"
                @keydown.enter.prevent="UpdateWorkspace"
                :placeholder="Props.Workspace.name"
                class="h-full w-1/2 text-[#000000a8] border-[#c2c2c759] font-medium border-2 text-sm rounded-md focus:outline-none focus:ring-0 focus:border-[#00819b53]"
                :class="{
                    'border-green-500': IsUpdated,
                    'transition-all duration-500': true,
                }"
                :maxlength="30"
                ref="InputRef"
            />
        </div>
    </div>
</template>
