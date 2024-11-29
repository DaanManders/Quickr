<template>
    <!-- Mobile View | Home Interface -->
    <div
        class="flex ipad:hidden flex-col items-center justify-center px-10 bg-[#ededf0] py-20"
    >
        <!-- Information Header | Home Interface -->
        <h1 class="text-[#002431] text-xl font-poppins font-bold">
            🗂️ Organize Like a Pro
        </h1>
        <!-- Information Description | Home Interface -->
        <p class="text-base text-center font-bold text-[#000000a5] py-4">
            Say goodbye to chaos and hello to effortless organization! Whether
            you’re tackling tasks, chasing goals, or jotting down brilliant
            ideas, our productivity tool is here to make it easy.
        </p>
        <!-- Information Image | Home Interface -->
        <div class="p-10 mb-5">
            <img :src="'./images/Note.svg'" />
        </div>
    </div>
    <!-- Desktop View | Home Interface -->
    <div class="hidden ipad:flex bg-[#ededf0] p-20 justify-between">
        <div class="flex flex-col">
            <!-- Information Header | Home Interface -->
            <h1 class="text-[#002431] text-4xl font-poppins font-bold">
                🗂️ Organize Like a Pro
            </h1>
            <!-- Information Description | Home Interface -->
            <p class="text-base font-bold text-[#000000a5] py-4">
                Say goodbye to chaos and hello to effortless organization!
                Whether you’re tackling tasks, chasing goals, or jotting down
                brilliant ideas, our productivity tool is here to make it easy.
            </p>
        </div>
        <!-- Information Image | Home Interface -->
        <div class="ps-10 w-[50%]">
            <img :src="'./images/Note.svg'" />
        </div>
    </div>
</template>
