<template>
    <!-- Mobile View | Features Interface -->
    <div class="flex flex-col ipad:hidden items-center py-20">
        <!-- Features Header | Features Interface -->
        <div class="font-poppins font-bold text-[#002431] text-xl">
            <h1>Features included in the App</h1>
        </div>
        <div
            class="flex flex-col items-center overflow-x-auto justify-start pt-10 w-full max-w-screen-lg"
        >
            <!-- App Feature | Features Interface -->
            <div class="flex flex-col items-center w-full mb-20">
                <div
                    class="h-40 w-40 bg-[#00b4d8] flex justify-center rounded-full"
                >
                    <img :src="'./images/Read.svg'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Smart Notes</h2>
                    <p class="text-[#000000a5] font-medium">
                        Capture and organize your ideas
                    </p>
                    <a
                        class="text-[#00b4d8] text-base font-bold cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
            <!-- App Feature | Features Interface -->
            <div class="flex flex-col items-center w-full mb-20">
                <div
                    class="h-40 w-40 bg-[#00b4d8] flex justify-center rounded-full"
                >
                    <img :src="'./images/Function.svg'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Actionable Tasks</h2>
                    <p class="text-[#000000a5] font-medium">
                        Manage your to-dos productively
                    </p>
                    <a
                        class="text-[#00b4d8] text-base font-bold cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
            <!-- App Feature | Features Interface -->
            <div class="flex flex-col items-center w-full">
                <div
                    class="h-40 w-40 bg-[#00b4d8] flex justify-center rounded-full"
                >
                    <img :src="'./images/Award.svg'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Focused Goals</h2>
                    <p class="text-[#000000a5] font-medium">
                        Set clear objectives and track progress
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
    <!-- Desktop View | Features Interface -->
    <div class="hidden ipad:flex flex-col items-center py-20">
        <!-- Features Header | Features Interface -->
        <div class="font-poppins font-bold text-[#002431] text-4xl">
            <h1>Perfect for every Moment</h1>
        </div>
        <div
            class="flex flex-row items-center overflow-x-auto justify-start pt-20 w-full max-w-screen-lg"
        >
            <!-- App Feature | Features Interface -->
            <div class="flex flex-col items-center w-full">
                <div
                    class="h-40 w-40 bg-[#00b4d8] flex justify-center rounded-full"
                >
                    <img :src="'./images/Read.svg'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Smart Notes</h2>
                    <p class="text-[#000000a5] font-medium">
                        Capture and organize your ideas
                    </p>
                    <a
                        class="text-[#00b4d8] text-base font-bold cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
            <!-- App Feature | Features Interface -->
            <div class="flex flex-col items-center w-full">
                <div
                    class="h-40 w-40 bg-[#00b4d8] flex justify-center rounded-full"
                >
                    <img :src="'./images/Function.svg'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Actionable Tasks</h2>
                    <p class="text-[#000000a5] font-medium text-center">
                        Manage your to-dos productively
                    </p>
                    <a
                        class="text-[#00b4d8] text-base font-bold cursor-pointer hover:opacity-80 transition"
                    >
                        Learn more
                    </a>
                </div>
            </div>
            <!-- App Feature | Features Interface -->
            <div class="flex flex-col items-center w-full">
                <div
                    class="h-40 w-40 bg-[#00b4d8] flex justify-center rounded-full"
                >
                    <img :src="'./images/Award.svg'" class="w-44 h-44" />
                </div>
                <div class="flex flex-col items-center pt-10">
                    <h2 class="text-lg font-bold">Focused Goals</h2>
                    <p class="text-[#000000a5] font-medium text-center">
                        Set clear objectives and track progress
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
