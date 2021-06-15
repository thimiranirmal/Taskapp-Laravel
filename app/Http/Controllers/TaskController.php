<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){
        
        $task= new Task;
        $task->task=$request->task;
        $task->save();
        return redirect()->back();
    }
}
