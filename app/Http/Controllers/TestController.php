<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\Users;
use App\Models\Tasks;
use App\Models\Comments;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    
    public function index(){
        $tasks = Tasks::with('comments')->where('updated_at', '>', date('Y-m-d H:i:s', time() - 12 * 60 * 60))->get();
        
        // Output...
    }
}
