<template>
    <!-- Mobile View | Features Interface -->
    <div
        class="flex bg-[#ededf0] ipad:hidden flex-col items-center justify-center px-5 py-20"
    >
        <!-- Information Header | Features Interface -->
        <h1 class="text-[#002431] text-xl font-poppins font-bold">
            Achieve 🎯 Your Goals
        </h1>
        <!-- Information Description | Features Interface -->
        <p class="text-base text-center font-bold text-[#000000a5] py-4">
            No matter your tasks, notes, or goals – stay organized and
            accomplish more with our intuitive productivity tool. Boost focus,
            track progress, and make every day productive.
        </p>
        <!-- Information Image | Features Interface -->
        <div class="p-5 mb-5 w-80">
            <img :src="'./images/Work.svg'" />
        </div>
        <!-- Information Button | Features Interface -->
        <a
            class="bg-[#000000d7] text-white px-5 py-2.5 rounded-full text-base font-semibold ipad:text-base hover:bg-[#000000ab] transition cursor-pointer"
            >Get started, for free</a
        >
    </div>
    <!-- Desktop View | Features Interface -->
    <div class="hidden bg-[#ededf0] ipad:flex p-20 justify-between">
        <div class="flex flex-col">
            <!-- Information Header | Features Interface -->
            <h1 class="text-[#002431] text-4xl font-poppins font-bold">
                Achieve 🎯 Your Goals
            </h1>
            <!-- Information Description | Features Interface -->
            <p class="text-base font-bold text-[#000000a5] py-4">
                No matter your tasks, notes, or goals – stay organized and
                accomplish more with our intuitive productivity tool. Boost
                focus, track progress, and make every day productive.
            </p>
            <div class="mt-10">
                <!-- Information Button | Features Interface -->
                <a
                    class="bg-[#000000d7] text-white px-5 py-3 rounded-full text-[11px] font-semibold ipad:text-base hover:bg-[#000000ab] transition cursor-pointer"
                    >Get started, for free</a
                >
            </div>
        </div>
        <!-- Information Image | Features Interface -->
        <div class="p-5">
            <img :src="'./images/Work.svg'" />
        </div>
    </div>
</template>
