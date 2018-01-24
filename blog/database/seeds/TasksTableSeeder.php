<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'body' => 'Do the dishes'
        ]);
        DB::table('tasks')->insert([
            'body' => 'Go to th store'
        ]);
        DB::table('tasks')->insert([
            'body' => 'Save money'
        ]);
    }
}
