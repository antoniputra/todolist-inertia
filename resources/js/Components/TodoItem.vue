<script setup>
import { router } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
    todoItem: Object,
})

const isDone = ref(props.todoItem?.is_done)

const toggleDone = () => {
    router.put(route('todo.toggleItemDone', { todoItem: props.todoItem.id }), {}, {
        preserveScroll: true
    })
}

const deleteItem = () => {
    if (! confirm('Are you sure?')) {
        return
    }

    router.delete(route('todo.deleteItem', { todoItem: props.todoItem.id }), {}, {
        preserveScroll: true
    })
}

</script>

<template>
    <div class="flex items-start">
        <input class="hidden" @change="toggleDone" type="checkbox" :id="`todo-item-${todoItem?.id}`" :value="true" :checked="isDone" />
        <label
            class="flex-grow flex items-center h-10 px-2 rounded cursor-pointer hover:bg-gray-100"
            :for="`todo-item-${todoItem?.id}`"
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
            <span class="ml-4 text-sm">{{ todoItem.name }}</span>
        </label>
        <button type="button" @click="deleteItem" class="ml-auto text-3xl text-red-500">&times;</button>
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
