<template>
    <!-- Announcement | Website Component -->
    <div
        v-if="IsVisible"
        class="flex items-center justify-center px-10 py-5 ipad:pe-4 bg-[#00b4d818] ipad:justify-between text-base ipad:text-sm"
    >
        <!-- Dummy Division | Website Component -->
        <div class="hidden ipad:flex"></div>
        <!-- Announcement Text | Website Component -->
        <div class="flex justify-center">
            <h1
                class="text-[#00819b] font-medium ipad:w-full ipad:justify-center text-center"
            >
                Save up to
                <span class="font-poppins font-extrabold">30%</span> using code
                <span class="font-poppins font-extrabold uppercase"
                    >Quickr</span
                >
            </h1>
        </div>
        <!-- Hide Announcement Button | Website Component -->
        <div class="hidden ipad:flex ipad:justify-end">
            <i
                class="fa-solid fa-xmark flex justify-end text-[#00819b] cursor-pointer"
                @click="HideAnnouncement"
            ></i>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            // Controls Visibility of the Announcement Division.
            IsVisible: true,
        };
    },
    methods: {
        HideAnnouncement() {
            // Hide the Announcement Division.
            this.IsVisible = false;
        },
    },
};
</script>
