<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){
        
        $this->validate($request,[
            'task'=>'required|min:5|max:200',
        ]);

        $task= new Task;
        $task->task=$request->task;
        $task->save();
        $data=Task::all();
        return redirect('/')->with('taskall',$data);
    }

    public function completed($id){
        $task=Task::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();
    }
    public function notcompleted($id){
        $task=Task::find($id);
        $task->iscompleted=0;
        $task->save();
        return redirect()->back();
    }
    public function delete($id){
        $task=Task::find($id);
        $task->delete();
        return redirect()->back();
    }
    public function updatetask($id){
        $task=Task::find($id);
        return view('updatetask')->with('taskdata',$task);
    }
    public function updatetasks(Request $request){
        
        $this->validate($request,[
            'updatetask'=>'required|min:5|max:200',
        ]);

        $id=$request->id;
        $task=$request->updatetask;
        $data=Task::find($id);
        $data->task=$task;
        $data->save();
        $datas=Task::all();
        return redirect('/')->with('taskall',$datas);
    }
}
