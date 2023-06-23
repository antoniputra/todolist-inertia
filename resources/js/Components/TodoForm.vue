<script setup>
import { useForm } from '@inertiajs/vue3';

const theForm = useForm({
    name: ''
})

const save = () => {
    theForm.post(route('todo.store'), {
        onSuccess() {
            theForm.reset()
        }
    })
}
</script>

<template>
    <form @submit.prevent="save" class="flex flex-col max-w-lg">
        <h2 class="text-xl mb-4 font-semibold">Add New Todo</h2>
        <div class="flex">
            <input
                v-model="theForm.name"
                class="flex-grow h-8 bg-transparent focus:outline-none font-medium"
                type="text"
                placeholder="e.g: Produk impian"
            />
            <button
                class="flex items-center px-2 text-sm font-medium rounded bg-indigo-500 text-white"
            >
                Save
            </button>
        </div>
    </form>
</template>
