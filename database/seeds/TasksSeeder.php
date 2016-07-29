<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'task' => 'Weekend workout',
            'description' => 'try to make it in the afternoon',
            'done' => false,
            ]);

        Task::create([
            'task' => 'Late night coding',
            'description' => 'Finishing coding POS API',
            'done' => false,
            ]);
    }
}
