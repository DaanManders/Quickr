<template>
    <div
        class="flex justify-center font-poppins font-bold text-[#002431] text-xl ipad:text-4xl ipad:pt-20 ipad:pb-32 py-10"
    >
        <h1>What Our Users Say 🌍</h1>
    </div>
    <div class="flex justify-center w-full">
        <div
            class="w-36 ipad:w-1/3 border-[1px] border-[d7dadc] rounded-lg p-3 me-1 ipad:me-3 shadow-md -rotate-6 bg-white"
        >
            <div>
                <div class="text-[7px] ipad:text-base mb-2">
                    <i class="fa-solid fa-star text-[#00b5d8] me-0.5"></i>
                    <i class="fa-solid fa-star text-[#00b5d8] me-0.5"></i>
                    <i class="fa-solid fa-star text-[#00b5d8] me-0.5"></i>
                    <i class="fa-solid fa-star text-[#00b5d8] me-0.5"></i>
                    <i class="fa-solid fa-star text-[#00b5d8]"></i>
                </div>
                <p
                    class="text-[8px] ipad:text-base italic text-[#002431] font-semibold mb-2"
                >
                    "I’ve tried a million productivity tools, but this one is a
                    whole new level, perfect!"
                </p>
            </div>
            <div class="flex items-center ipad:mt-5">
                <div
                    class="bg-[#00b4d85d] h-5 w-5 ipad:h-9 ipad:w-9 rounded-full"
                >
                    <img
                        :src="'./images/Male.svg'"
                        class="h-5 ipad:h-9 ipad:w-9 border-[1px] ipad:border-[2px] border-[#3f3d56] rounded-full"
                    />
                </div>
                <div class="flex flex-col ms-1.5">
                    <h1
                        class="text-[8px] text-[#002431] ipad:text-sm font-semibold"
                    >
                        Ethan Clarke
                    </h1>
                    <span
                        class="text-[7.4px] text-[#000000a5] font-semibold ipad:text-xs"
                        >Software Developer</span
                    >
                </div>
            </div>
        </div>
        <div
            class="w-36 ipad:w-1/3 border-[1px] border-[d7dadc] rounded-lg p-3 ms-1 ipad:ms-3 shadow-md rotate-12 bg-white"
        >
            <div>
                <div class="text-[7px] ipad:text-base mb-2">
                    <i class="fa-solid fa-star text-[#00b5d8] me-0.5"></i>
                    <i class="fa-solid fa-star text-[#00b5d8] me-0.5"></i>
                    <i class="fa-solid fa-star text-[#00b5d8] me-0.5"></i>
                    <i class="fa-solid fa-star text-[#00b5d8] me-0.5"></i>
                    <i class="fa-solid fa-star text-[#00b5d8a7]"></i>
                </div>
                <p
                    class="text-[8px] ipad:text-base italic text-[#002431] font-semibold mb-2"
                >
                    "I never knew organizing could be this fun. The interface is
                    sleek and easy to use."
                </p>
            </div>
            <div class="flex items-center ipad:mt-5">
                <div
                    class="bg-[#00b4d85d] h-5 w-5 ipad:h-9 ipad:w-9 rounded-full"
                >
                    <img
                        :src="'./images/Female.svg'"
                        class="h-5 ipad:h-9 ipad:w-9 border-[1px] ipad:border-[2px] border-[#3f3d56] rounded-full"
                    />
                </div>
                <div class="flex flex-col ms-1.5">
                    <h1
                        class="text-[8px] text-[#002431] ipad:text-sm font-semibold"
                    >
                        Sophia Williams
                    </h1>
                    <span
                        class="text-[7.4px] text-[#000000a5] font-semibold ipad:text-xs"
                        >Social Media Coordinator</span
                    >
                </div>
            </div>
        </div>
    </div>
</template>
