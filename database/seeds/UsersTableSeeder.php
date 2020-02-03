<?php

use Illuminate\Database\Seeder;
use App\Models\Users;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emails = [
            'test1@test.asd',
            'test2@test.asd',
            'test3@test.asd',
            'test4@test.asd',
            'test5@test.asd',
            'test6@test.asd',
            'test7@test.asd',
            'test8@test.asd',
            'test9@test.asd',
            'test10@test.asd',
        ];
        
        \DB::table('users')->truncate();
        
        foreach($emails AS $email){
            Users::create([
                'email' => $email,
                'password' => uniqid(),
            ]);
        }
    }
}
