<template>
    <div
        class="flex ipad:hidden flex-col items-center justify-center px-5 py-20"
    >
        <h1 class="text-[#002431] text-xl font-poppins font-bold">
            Take Control of Your Day 🗓️
        </h1>
        <p class="text-base text-center font-bold text-[#000000a5] py-4">
            Make smarter decisions and stay on track with our productivity tool.
            Whether you're organizing notes, managing tasks, or setting goals,
            our software helps you stay engaged and productive throughout your
            day.
        </p>
        <div class="p-5 mb-5 w-80">
            <img :src="'./images/Day.svg'" />
        </div>
        <a
            class="bg-[#000000d7] text-white px-5 py-2.5 rounded-full text-base font-semibold ipad:text-base hover:bg-[#000000ab] transition cursor-pointer"
            >Get started, for free</a
        >
    </div>
    <div class="hidden ipad:flex p-20 justify-between">
        <div class="flex flex-col">
            <h1 class="text-[#002431] text-4xl font-poppins font-bold">
                Take Control of Your Day 🗓️
            </h1>
            <p class="text-base font-bold text-[#000000a5] py-4">
                Make smarter decisions and stay on track with our productivity
                tool. Whether you're organizing notes, managing tasks, or
                setting goals, our software helps you stay engaged and
                productive throughout your day.
            </p>
            <div class="mt-10">
                <a
                    class="bg-[#000000d7] text-white px-5 py-3 rounded-full text-[11px] font-semibold ipad:text-base hover:bg-[#000000ab] transition cursor-pointer"
                    >Get started, for free</a
                >
            </div>
        </div>
        <div class="p-5">
            <img :src="'./images/Day.svg'" />
        </div>
    </div>
</template>
