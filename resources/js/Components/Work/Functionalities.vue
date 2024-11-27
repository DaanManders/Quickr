<template>
    <div class="bg-[#ededf0] flex flex-col ipad:hidden items-center py-20">
        <div class="font-poppins font-bold text-[#002431] text-xl">
            <h1>Perfect for every Moment</h1>
        </div>
        <div
            class="flex flex-row items-center overflow-x-auto justify-start pt-10 w-full max-w-screen-lg"
        >
            <div class="flex flex-col items-center w-full">
                <!-- Only one div is visible at a time -->
                <div
                    class="h-40 w-40 bg-[#00b4d8] flex justify-center rounded-full"
                >
                    <img :src="'./images/Barista.svg'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Evaluations & Retro's</h2>
                    <p class="text-[#000000a5] font-medium">
                        Collect input and learn from previous projects
                    </p>
                    <a
                        class="text-[#00b4d8] text-base font-bold cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#ededf0] hidden ipad:flex flex-col items-center py-20">
        <div class="font-poppins font-bold text-[#002431] text-4xl">
            <h1>Perfect for every Moment</h1>
        </div>
        <div
            class="flex flex-row items-center overflow-x-auto justify-start pt-20 w-full max-w-screen-lg"
        >
            <div class="flex flex-col items-center w-full">
                <!-- Only one div is visible at a time -->
                <div
                    class="h-40 w-40 bg-[#00b4d8] flex justify-center rounded-full"
                >
                    <img :src="'./images/Barista.svg'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Evaluations & Retro's</h2>
                    <p class="text-[#000000a5] font-medium">
                        Learn from previous projects
                    </p>
                    <a
                        class="text-[#00b4d8] text-base font-bold cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
            <div class="flex flex-col items-center w-full">
                <!-- Only one div is visible at a time -->
                <div
                    class="h-40 w-40 bg-[#00b4d8] flex justify-center rounded-full"
                >
                    <img :src="'./images/Social.svg'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Events & Conferences</h2>
                    <p class="text-[#000000a5] font-medium">
                        Bring engagement to big events
                    </p>
                    <a
                        class="text-[#00b4d8] text-base font-bold cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
            <div class="flex flex-col items-center w-full">
                <!-- Only one div is visible at a time -->
                <div
                    class="h-40 w-40 bg-[#00b4d8] flex justify-center rounded-full"
                >
                    <img :src="'./images/Phone.svg'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Brainstorming</h2>
                    <p class="text-[#000000a5] font-medium">
                        Run engaging sessions
                    </p>
                    <a
                        class="text-[#00b4d8] text-base font-bold cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
