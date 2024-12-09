<template>
    <!-- Mobile View | Resources Interface -->
    <div class="flex flex-col ipad:hidden items-center py-20">
        <!-- Applications Header | Resources Interface -->
        <div class="font-poppins font-bold text-[#002431] text-xl">
            <h1>Replace Favorite Apps</h1>
        </div>
        <div
            class="flex flex-col items-center overflow-x-auto justify-start pt-10 w-full max-w-screen-lg"
        >
            <!-- Application | Resources Interface -->
            <div class="flex flex-col items-center w-full mb-20">
                <div class="h-32 w-32 flex justify-center rounded-full">
                    <img :src="'./images/Joplin.png'" class="w-32 h-32" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Joplin</h2>
                    <a
                        class="text-[#00b4d8] text-base font-medium cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
            <!-- Application | Resources Interface -->
            <div class="flex flex-col items-center w-full mb-20">
                <div class="h32 w-32 flex justify-center rounded-full">
                    <img :src="'./images/Obsidian.png'" class="w-32 h-32" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Obsidian</h2>
                    <a
                        class="text-[#00b4d8] text-base font-medium cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
            <!-- Application | Resources Interface -->
            <div class="flex flex-col items-center w-full mb-20">
                <div class="h32 w-32 flex justify-center rounded-full">
                    <img :src="'./images/Notion.png'" class="w-32 h-32" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Notion</h2>
                    <a
                        class="text-[#00b4d8] text-base font-medium cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
            <!-- Application | Resources Interface -->
            <div class="flex flex-col items-center w-full mb-20">
                <div class="h32 w-32 flex justify-center rounded-full">
                    <img :src="'./images/Bear.png'" class="w-32 h-32" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Bear</h2>
                    <a
                        class="text-[#00b4d8] text-base font-medium cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Desktop View | Resources Interface -->
    <div class="hidden ipad:flex flex-col items-center py-20">
        <!-- Applications Header | Resources Interface -->
        <div class="font-poppins font-bold text-[#002431] text-4xl">
            <h1>Replace Favorite Apps</h1>
        </div>
        <div
            class="flex flex-row items-center overflow-x-auto justify-start pt-20 w-full max-w-screen-lg"
        >
            <!-- Application | Resources Interface -->
            <div class="flex flex-col items-center w-full">
                <div
                    class="h-44 w-44 bg-[#00b4d8] flex justify-center rounded-full"
                >
                    <img :src="'./images/Joplin.png'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Joplin</h2>
                    <a
                        class="text-[#00b4d8] text-base font-bold cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
            <!-- Application | Resources Interface -->
            <div class="flex flex-col items-center w-full">
                <div class="h-44 w-44 flex justify-center rounded-full">
                    <img :src="'./images/Obsidian.png'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Obsidian</h2>
                    <a
                        class="text-[#00b4d8] text-base font-bold cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
            <!-- Application | Resources Interface -->
            <div class="flex flex-col items-center w-full">
                <div class="h-44 w-44 flex justify-center rounded-full">
                    <img :src="'./images/Notion.png'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Notion</h2>

                    <a
                        class="text-[#00b4d8] text-base font-bold cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
            <!-- Application | Resources Interface -->
            <div class="flex flex-col items-center w-full">
                <div class="h-44 w-44 flex justify-center rounded-full">
                    <img :src="'./images/Bear.png'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Bear</h2>

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
