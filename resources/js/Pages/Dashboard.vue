<script setup>
import Todo from '@/Components/Todo.vue';
import TodoForm from '@/Components/TodoForm.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    todos: Object,
})
</script>

<template>
    <Head title="Todo Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <div class="p-4 border bg-white mb-10">
                    <TodoForm />
                </div>

                <div class="grid grid-cols-4 gap-4">
                    <Todo v-for="todo in $props.todos.data"
                        :key="todo.id"
                        :todo="todo"
                    />
                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
