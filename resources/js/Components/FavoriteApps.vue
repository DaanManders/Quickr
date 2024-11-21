<template>
    <div class="w-full flex justify-center pt-16 pb-6">
        <h1 class="text-3xl font-medium">Replace your favorite apps</h1>
    </div>
    <div class="w-full flex items-center justify-center pb-12 px-40">
        <div class="flex flex-col items-center mx-20">
            <img
                :src="'/images/Joplin.png'"
                alt="Joplin"
                class="w-20 h-20 my-10"
            />
            <h2 class="text-3xl">Joplin</h2>
            <a
                href="https://joplinapp.org/"
                class="text-base text-[#00b5d8] font-bold my-2 hover:opacity-75 transition"
                >Learn more</a
            >
        </div>
        <div class="flex flex-col items-center mx-20">
            <img
                :src="'/images/Obsidian.png'"
                alt="Obsidian"
                class="w-20 h-20 my-10"
            />
            <h2 class="text-3xl">Obsidian</h2>
            <a
                href="https://obsidian.md/"
                class="text-base text-[#00b5d8] font-bold my-2 hover:opacity-75 transition"
                >Learn more</a
            >
        </div>
        <div class="flex flex-col items-center mx-20">
            <img
                :src="'/images/Notion.png'"
                alt="Notion"
                class="w-20 h-20 my-10"
            />
            <h2 class="text-3xl">Notion</h2>
            <a
                href="https://www.notion.so/"
                class="text-base text-[#00b5d8] font-bold my-2 hover:opacity-75 transition"
                >Learn more</a
            >
        </div>
        <div class="flex flex-col items-center mx-20">
            <img :src="'/images/Bear.png'" alt="Bear" class="w-20 h-20 my-10" />
            <h2 class="text-3xl">Bear</h2>
            <a
                href="https://bear.app/"
                class="text-base text-[#00b5d8] font-bold my-2 hover:opacity-75 transition"
                >Learn more</a
            >
        </div>
    </div>
</template>
