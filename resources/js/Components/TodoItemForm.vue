<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    todo: Object,
})

const theForm = useForm({
    name: ''
})

const save = () => {
    theForm.post(route('todo.saveItem', { todo: props.todo }), {
        preserveScroll: true,
        onSuccess() {
            theForm.reset()
        }
    })
}
</script>

<template>
    <form @submit.prevent="save" class="flex items-center">
        <input
            v-model="theForm.name"
            class="flex-grow h-8 bg-transparent focus:outline-none font-medium"
            type="text"
            placeholder="New Item..."
        />
        <button
            class="flex items-center w-full h-8 px-2 text-sm font-medium rounded bg-indigo-500 text-white"
        >
            <svg
                class="w-5 h-5 fill-current"
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
        </button>
    </form>
    <p v-if="theForm.errors?.name" class="text-red-500 text-sm">{{ theForm.errors?.name }}</p>
</template>
