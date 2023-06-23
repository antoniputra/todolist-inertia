<script setup>
import { Head } from '@inertiajs/vue3';


</script>

<template>
    <Head title="Sample Mockup" />
    
    <div class="flex items-center justify-center w-screen h-screen font-medium">
        <div
            class="flex flex-grow items-center justify-center h-full text-gray-600 bg-gray-100"
        >
            <!-- Component Start -->
            <div class="max-w-full p-8 bg-white rounded-lg shadow-lg w-96">

                <!-- Header -->
                <div class="flex items-center mb-6">
                    <svg
                        class="h-8 w-8 text-indigo-500 stroke-current"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"
                        />
                    </svg>
                    <h4 class="font-semibold ml-3 text-lg">Dream Products</h4>
                </div>
                
                <!-- Content -->
                <div>
                    <input class="hidden" type="checkbox" id="task_1" checked />
                    <label
                        class="flex items-center h-10 px-2 rounded cursor-pointer hover:bg-gray-100"
                        for="task_1"
                    >
                        <span
                            class="flex items-center justify-center w-5 h-5 text-transparent border-2 border-gray-300 rounded-full"
                        >
                            <svg
                                class="w-4 h-4 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </span>
                        <span class="ml-4 text-sm">Macbook Pro.</span>
                    </label>
                </div>
                <div>
                    <input class="hidden" type="checkbox" id="task_2" checked />
                    <label
                        class="flex items-center h-10 px-2 rounded cursor-pointer hover:bg-gray-100"
                        for="task_2"
                    >
                        <span
                            class="flex items-center justify-center w-5 h-5 text-transparent border-2 border-gray-300 rounded-full"
                        >
                            <svg
                                class="w-4 h-4 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </span>
                        <span class="ml-4 text-sm"
                            >House.</span
                        >
                    </label>
                </div>
                <div>
                    <input class="hidden" type="checkbox" id="task_3" />
                    <label
                        class="flex items-center h-10 px-2 rounded cursor-pointer hover:bg-gray-100"
                        for="task_3"
                    >
                        <span
                            class="flex items-center justify-center w-5 h-5 text-transparent border-2 border-gray-300 rounded-full"
                        >
                            <svg
                                class="w-4 h-4 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </span>
                        <span class="ml-4 text-sm"
                            >Family Car.</span
                        >
                    </label>
                </div>
                <div>
                    <input class="hidden" type="checkbox" id="task_4" />
                    <label
                        class="flex items-center h-10 px-2 rounded cursor-pointer hover:bg-gray-100"
                        for="task_4"
                    >
                        <span
                            class="flex items-center justify-center w-5 h-5 text-transparent border-2 border-gray-300 rounded-full"
                        >
                            <svg
                                class="w-4 h-4 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </span>
                        <span class="ml-4 text-sm">Super Big House.</span>
                    </label>
                </div>
                <div>
                    <input class="hidden" type="checkbox" id="task_5" />
                    <label
                        class="flex items-center h-10 px-2 rounded cursor-pointer hover:bg-gray-100"
                        for="task_5"
                    >
                        <span
                            class="flex items-center justify-center w-5 h-5 text-transparent border-2 border-gray-300 rounded-full"
                        >
                            <svg
                                class="w-4 h-4 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </span>
                        <span class="ml-4 text-sm"
                            >Lamborgini</span
                        >
                    </label>
                </div>
                <button
                    class="flex items-center w-full h-8 px-2 mt-2 text-sm font-medium rounded"
                >
                    <svg
                        class="w-5 h-5 text-gray-400 fill-current"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                        />
                    </svg>
                    <input
                        class="flex-grow h-8 ml-4 bg-transparent focus:outline-none font-medium"
                        type="text"
                        placeholder="Add new item..."
                    />
                </button>
            </div>
            <!-- Component End  -->
        </div>
    </div>
</template>

<style>
input[type=checkbox]:checked+label span:first-of-type {
	background-color: #10B981;
	border-color: #10B981;
	color: #fff;
}

input[type=checkbox]:checked+label span:nth-of-type(2) {
	text-decoration: line-through;
	color: #9CA3AF;
}
</style>