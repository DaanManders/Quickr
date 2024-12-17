<script setup>
import { ref } from "vue"; // Make sure to use ref for reactivity

let Closed = ref(false);
let Expanded = ref(true);

const Toggle = () => {
    Closed.value = !Closed.value; // Toggling the "Closed" state
    Expanded.value = !Expanded.value; // Toggling the "Expanded" state
    console.log("Toggled States:", {
        Closed: Closed.value,
        Expanded: Expanded.value,
    });
};
</script>

<template>
    <div
        v-show="Closed"
        class="bg-[#ffffff] border-[#dedee2] flex flex-col justify-between items-center border-2 h-full w-20 rounded-md py-3"
    >
        <div class="flex flex-col items-center">
            <div></div>
            <div
                class="bg-[#ededf088] border-[#dedee288] flex items-center justify-center border-2 rounded-md w-14 h-14"
            >
                <img
                    :src="'../images/Vektora.png'"
                    class="rounded-md h-9 w-9"
                />
            </div>
            <div class="flex flex-col items-center w-full">
                <div
                    class="border-[#dedee288] flex flex-col items-center justify-center border-b-2 w-full"
                >
                    <div class="mt-2">
                        <span
                            class="text-[#d6d6db] font-poppins font-semibold uppercase text-[11px]"
                            >Tools</span
                        >
                    </div>
                    <div
                        class="bg-transparent border-transparent flex items-center justify-center rounded-md w-10 h-10 border-2 mb-1"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="text-[#000000a1] size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"
                            />
                        </svg>
                    </div>
                    <div
                        class="bg-transparent border-transparent flex items-center justify-center rounded-md w-10 h-10 border-2 mb-1"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="text-[#000000a1] size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z"
                            />
                        </svg>
                    </div>
                    <div
                        class="bg-transparent border-transparent flex items-center justify-center rounded-md w-10 h-10 border-2 mb-2"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="text-[#000000a1] size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z"
                            />
                        </svg>
                    </div>
                </div>
            </div>
            <div>
                <div class="mt-2">
                    <span
                        class="text-[#d6d6db] font-poppins font-semibold uppercase text-[11px]"
                        >Notes</span
                    >
                </div>
                <div class="flex flex-col items-center justify-center mt-2">
                    <div class="bg-[#3c41e9] h-5 w-5 rounded-md mb-5"></div>
                    <div class="bg-[#12a779] h-5 w-5 rounded-md mb-5"></div>
                    <div class="bg-[#ffa40a] h-5 w-5 rounded-md mb-5"></div>
                    <div class="bg-[#3c41e9] h-5 w-5 rounded-md"></div>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="mt-2">
                <span
                    class="text-[#d6d6db] font-poppins font-semibold uppercase text-[11px]"
                    >Other</span
                >
            </div>
            <div
                class="bg-transparent border-transparent flex items-center justify-center rounded-md w-10 h-10 border-2 mb-2"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="text-[#000000a1] size-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                    />
                </svg>
            </div>
            <div
                class="bg-transparent border-transparent flex items-center justify-center rounded-md w-10 h-10 border-2"
                @click="Toggle()"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="text-[#000000a1] size-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z"
                    />
                </svg>
            </div>
        </div>
    </div>
    <div
        v-show="Expanded"
        class="bg-[#ffffff] border-[#dedee2] flex flex-col justify-between items-start border-2 h-full w-56 rounded-md px-3 py-3"
    >
        <div class="flex flex-col items-center w-full">
            <div
                class="bg-[#ededf088] border-[#dedee288] flex justify-between items-center border-2 rounded-md w-full h-14 p-2"
            >
                <div class="flex items-center">
                    <div class="flex flex-col">
                        <img
                            :src="'../images/Vektora.png'"
                            class="rounded-md h-9 w-9"
                        />
                    </div>
                    <div class="flex flex-col ps-3">
                        <h1
                            class="text-[#000000eb] font-poppins font-medium text-sm"
                        >
                            Vektora
                        </h1>
                        <span
                            class="text-[#0000008e] font-poppins font-semibold text-[10px] -mt-1"
                            >1 Member</span
                        >
                    </div>
                </div>
                <div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="text-[#000000a1] size-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z"
                        />
                    </svg>
                </div>
            </div>
            <div class="flex flex-col items-center w-full">
                <div
                    class="border-[#dedee288] flex flex-col items-start justify-center border-b-2 w-full"
                >
                    <div class="mt-2">
                        <span
                            class="text-[#d6d6db] font-poppins font-semibold uppercase text-[11px]"
                            >Main Tools</span
                        >
                    </div>
                    <div
                        class="bg-transparent border-transparent flex items-center justify-start rounded-md h-10 border-2 w-full mb-1 p-2"
                    >
                        <div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="text-[#000000a1] size-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"
                                />
                            </svg>
                        </div>
                        <div>
                            <span
                                class="text-[#000000a1] font-poppins text-sm font-medium ms-2"
                                >Dashboard</span
                            >
                        </div>
                    </div>
                    <div
                        class="bg-transparent border-transparent flex items-center justify-start rounded-md h-10 border-2 w-full mb-1 p-2"
                    >
                        <div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="text-[#000000a1] size-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z"
                                />
                            </svg>
                        </div>
                        <div>
                            <span
                                class="text-[#000000a1] font-poppins text-sm font-medium ms-2"
                                >Tasks</span
                            >
                        </div>
                    </div>
                    <div
                        class="bg-transparent border-transparent flex items-center justify-start rounded-md h-10 border-2 w-full mb-1 p-2 mb-2"
                    >
                        <div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="text-[#000000a1] size-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z"
                                />
                            </svg>
                        </div>
                        <div>
                            <span
                                class="text-[#000000a1] font-poppins text-sm font-medium ms-2"
                                >Schedule</span
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="flex justify-between items-center mt-3.5">
                    <span
                        class="text-[#d6d6db] font-poppins font-semibold uppercase text-[11px]"
                        >Notes</span
                    >
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="text-[#000000a1] size-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 4.5v15m7.5-7.5h-15"
                            />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col items-start mt-2 ms-3">
                    <div class="flex items-center mb-5">
                        <div class="bg-[#3c41e9] h-5 w-5 rounded-md me-2"></div>
                        <span
                            class="text-[#000000a1] font-poppins text-sm font-medium"
                            >Project Manager</span
                        >
                    </div>
                    <div class="flex items-center mb-5">
                        <div class="bg-[#12a779] h-5 w-5 rounded-md me-2"></div>
                        <span
                            class="text-[#000000a1] font-poppins text-sm font-medium"
                            >Human Resource</span
                        >
                    </div>

                    <div class="flex items-center mb-5">
                        <div class="bg-[#ffa40a] h-5 w-5 rounded-md me-2"></div>
                        <span
                            class="text-[#000000a1] font-poppins text-sm font-medium"
                            >Design</span
                        >
                    </div>
                    <div class="flex items-center mb-5">
                        <div class="bg-[#3c41e9] h-5 w-5 rounded-md me-2"></div>
                        <span
                            class="text-[#000000a1] font-poppins text-sm font-medium"
                            >Development</span
                        >
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-start w-full">
            <div class="mt-2">
                <span
                    class="text-[#d6d6db] font-poppins font-semibold uppercase text-[11px]"
                    >Other</span
                >
            </div>
            <div
                class="bg-transparent border-transparent flex items-center justify-start rounded-md h-10 border-2 w-full mb-2 p-2"
            >
                <div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="text-[#000000a1] size-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                        />
                    </svg>
                </div>
                <div>
                    <span
                        class="text-[#000000a1] font-poppins text-sm font-medium ms-2"
                        >Settings</span
                    >
                </div>
            </div>
            <div
                class="bg-transparent border-transparent flex items-center justify-start rounded-md h-10 border-2 w-full p-2 cursor-pointer"
                @click="Toggle()"
            >
                <div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="text-[#000000a1] size-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z"
                        />
                    </svg>
                </div>
                <div>
                    <span
                        class="text-[#000000a1] font-poppins text-sm font-medium ms-2"
                        >Close</span
                    >
                </div>
            </div>
        </div>
    </div>
</template>
