<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\TodoItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Antoni Rodriguez',
            'email' => 'antoni@example.com'
        ])->each(function ($user) {
            \App\Models\Todo::factory(10)->create([
                'user_id' => $user->id,
            ])->each(function ($todo) {
                TodoItem::factory(rand(1, 5))->create([
                    'todo_id' => $todo->id
                ]);
            });
        });

    }
}
