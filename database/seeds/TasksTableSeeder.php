<?php

use Illuminate\Database\Seeder;
use App\Models\Users;
use App\Models\Tasks;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            'Task 1',
            'Task 2',
            'Task 3',
            'Task 4',
            'Task 5',
            'Task 6',
            'Task 7',
            'Task 8',
            'Task 9',
            'Task 10',
        ];
        
        \DB::table('tasks')->truncate();
        
        foreach($tasks AS $k => $task){
            $user = Users::where('id', ($k + 1))->first();
            
            if(!$user){
                $user['id'] = 1;
            }
            
            Tasks::create([
                'name' => $task,
                'creator_id' => $user['id'],
            ]);
        }
    }
}
