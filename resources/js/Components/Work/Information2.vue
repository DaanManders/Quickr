<template>
    <!-- Mobile View | Work Interface -->
    <div
        class="flex ipad:hidden flex-col items-center justify-center px-5 py-20"
    >
        <!-- Information Header | Work Interface -->
        <h1 class="text-[#002431] text-xl font-poppins font-bold">
            Boost 🔥 Your Productivity
        </h1>
        <!-- Information Description | Work Interface -->
        <p class="text-base text-center font-bold text-[#000000a5] py-4">
            Take charge of your day with a tool designed to help you organize
            your notes, manage your tasks, and track your goals seamlessly.
            Simplify your workflow, stay focused, and achieve more with less
            effort.
        </p>
        <!-- Information Image | Work Interface -->
        <div class="p-5 mb-5 w-80">
            <img :src="'./images/Map.svg'" />
        </div>
    </div>
    <!-- Desktop View | Work Interface -->
    <div class="hidden ipad:flex p-20 justify-between">
        <!-- Information Image | Work Interface -->
        <div class="p-5">
            <img :src="'./images/Map.svg'" />
        </div>
        <div class="flex flex-col">
            <!-- Information Header | Work Interface -->
            <h1 class="text-[#002431] text-4xl font-poppins font-bold">
                Boost 🔥 Your Productivity
            </h1>
            <!-- Information Description | Work Interface -->
            <p class="text-base font-bold text-[#000000a5] py-4">
                Take charge of your day with a tool designed to help you
                organize your notes, manage your tasks, and track your goals
                seamlessly. Simplify your workflow, stay focused, and achieve
                more with less effort.
            </p>
        </div>
    </div>
</template>
