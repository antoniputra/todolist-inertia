<script setup>
import { router } from '@inertiajs/vue3';
import TodoItem from './TodoItem.vue';
import TodoItemForm from './TodoItemForm.vue';

const props = defineProps({
    todo: Object,
})

const deleteTodo = () => {
    if (! confirm('Are you really sure?')) {
        return
    }

    router.delete(route('todo.delete', { todo: props.todo.id }), {
        preserveScroll: true
    })
}
</script>

<template>
    <div class="relative max-w-full p-8 bg-white rounded-lg shadow-lg">
        <button type="button" @click="deleteTodo" class="absolute -top-2 -right-2 inline-flex px-2 rounded border border-rose-300 bg-red-500 text-3xl text-white">&times;</button>

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
            <h4 class="font-semibold ml-3 text-lg truncate" :title="todo.name">{{todo.name}}</h4>
        </div>

        <div class="flex flex-col gap-2">
            <TodoItem v-for="item in todo.todo_items"
                :key="item.id"
                :todo-item="item"
            />
        </div>

        <div>
            <TodoItemForm :todo="todo" />
        </div>
    </div>
</template>
