<template>
    <div class="bg-[#e8edf3] px-40 py-20 flex w-full">
        <div class="pe-14">
            <div class="w-[10%] flex items-center">
                <i class="fa-solid fa-bolt text-[#00b5d8] text-4xl me-2"></i>
                <h1 class="text-4xl font-medium">Quickr</h1>
            </div>
            <div
                class="mt-40 pb-2 w-[100%] flex justify-between border-b-[1px] border-black"
            >
                <i
                    class="text-2xl fa-brands fa-square-facebook hover:opacity-65 transition cursor-pointer"
                ></i>
                <i
                    class="text-2xl fa-brands fa-linkedin hover:opacity-65 transition cursor-pointer"
                ></i>
                <i
                    class="text-2xl fa-brands fa-square-youtube hover:opacity-65 transition cursor-pointer"
                ></i>
                <i
                    class="text-2xl fa-brands fa-square-instagram hover:opacity-65 transition cursor-pointer"
                ></i>
                <i
                    class="text-2xl fa-brands fa-square-x-twitter hover:opacity-65 transition cursor-pointer"
                ></i>
            </div>
            <a
                :href="route('Home')"
                class="hover:opacity-65 transition cursor-pointer"
            >
                <i class="fa-solid fa-earth-europe text-lg me-2 mt-2"></i>
                <span class="font-medium">Return to Home</span>
            </a>
        </div>
        <div class="flex flex-col items-start ps-14 me-20 w-[15%]">
            <span
                class="w-full text-lg font-medium border-b-[1px] border-black mb-3"
                >Features</span
            >
            <a class="py-1 hover:opacity-65 transition cursor-pointer"
                >Overview</a
            >
            <a class="py-1 hover:opacity-65 transition cursor-pointer">Notes</a>
            <a class="py-1 hover:opacity-65 transition cursor-pointer">Tasks</a>
            <a class="py-1 hover:opacity-65 transition cursor-pointer">Goals</a>
        </div>
        <div class="flex flex-col items-start ps-14 me-20 w-[15%]">
            <span
                class="w-full text-lg font-medium border-b-[1px] border-black mb-3"
                >Resources</span
            >
            <a class="py-1 hover:opacity-65 transition cursor-pointer"
                >How To</a
            >
        </div>
        <div class="flex flex-col items-start ps-14 me-20 w-[15%]">
            <span
                class="w-full text-lg font-medium border-b-[1px] border-black mb-3"
                >Details</span
            >
            <a class="py-1 hover:opacity-65 transition cursor-pointer">Legal</a>
            <a class="py-1 hover:opacity-65 transition cursor-pointer"
                >Policies</a
            >
            <a class="py-1 hover:opacity-65 transition cursor-pointer"
                >Accessibility</a
            >
            <a class="py-1 hover:opacity-65 transition cursor-pointer"
                >Help Center</a
            >
        </div>
        <div class="flex flex-col items-start ps-14 w-[15%]">
            <span
                class="w-full text-lg font-medium border-b-[1px] border-black mb-3"
                >About Us</span
            >
            <a class="py-1 hover:opacity-65 transition cursor-pointer"
                >Our Team</a
            >
            <a class="py-1 hover:opacity-65 transition cursor-pointer">Jobs</a>
            <a class="py-1 hover:opacity-65 transition cursor-pointer"
                >Contact</a
            >
            <a class="py-1 hover:opacity-65 transition cursor-pointer"
                >Press Info</a
            >
            <a class="py-1 hover:opacity-65 transition cursor-pointer"
                >Investors</a
            >
        </div>
    </div>
</template>
