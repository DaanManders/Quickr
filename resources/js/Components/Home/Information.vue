<template>
    <div
        class="flex ipad:hidden flex-col items-center justify-center px-10 bg-[#ededf0] py-20"
    >
        <h1 class="text-[#002431] text-xl font-poppins font-bold">
            🗂️ Organize Like a Pro
        </h1>
        <p class="text-base text-center font-bold text-[#000000a5] py-4">
            Say goodbye to chaos and hello to effortless organization! Whether
            you’re tackling tasks, chasing goals, or jotting down brilliant
            ideas, our productivity tool is here to make it easy.
        </p>
        <div class="p-10 mb-5">
            <img :src="'./images/Note.svg'" />
        </div>
    </div>
    <div class="hidden ipad:flex bg-[#ededf0] p-20 justify-between">
        <div class="flex flex-col">
            <h1 class="text-[#002431] text-4xl font-poppins font-bold">
                🗂️ Organize Like a Pro
            </h1>
            <p class="text-base font-bold text-[#000000a5] py-4">
                Say goodbye to chaos and hello to effortless organization!
                Whether you’re tackling tasks, chasing goals, or jotting down
                brilliant ideas, our productivity tool is here to make it easy.
            </p>
        </div>
        <div class="ps-10 w-[50%]">
            <img :src="'./images/Note.svg'" />
        </div>
    </div>
</template>
