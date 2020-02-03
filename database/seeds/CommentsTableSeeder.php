<?php

use Illuminate\Database\Seeder;
use App\Models\Users;
use App\Models\Tasks;
use App\Models\Comments;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            'Comment 1',
            'Comment 2',
            'Comment 3',
            'Comment 4',
            'Comment 5',
            'Comment 6',
            'Comment 7',
            'Comment 8',
            'Comment 9',
            'Comment 10',
        ];
        
        \DB::table('comments')->truncate();
        
        foreach($comments AS $k => $comment){
            $user = Users::where('id', ($k + 1))->first();
            
            if(!$user){
                $user['id'] = 1;
            }
            
            $task = Tasks::where('id', ($k + 1))->first();
            
            if(!$task){
                $task['id'] = 1;
            }
            
            Comments::create([
                'comment' => $comment,
                'creator_id' => $user['id'],
                'task_id' => $task['id'],
            ]);
        }
    }
}
