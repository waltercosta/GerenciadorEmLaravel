<?php

namespace App\Http\Controllers;

use App\TaskModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    public function index()
    {
        $newTask = TaskModel::orderBy('created_at', 'desc')->paginate(10);
        return view('teste',['newTask' => $newTask]);
    }

    public function creating()
    {
        return view('teste');
    }

    public function create(Request $request)
    {
        $newTask = TaskModel::create($request->all());
        
        return Redirect::to('teste');
    }
  
    public function edit($id)
    {
        $oldTask = TaskModel::findOrFail($id);
        return view('edit',['oldTask' => $oldTask]);
    }

    public function update(Request $request)
    {
        
        $newTask = TaskModel::findOrFail($request['id']);

        $newTask->name = $request->name;
        $newTask->description = $request->description;
        $newTask->type = $request->type;
        $newTask->date_begin = $request->date_begin;
        $newTask->date_end = $request->date_end;
        $newTask->save();
        return Redirect::to('teste');
    }

    public function delete($id)
    {
        $newTask = TaskModel::findOrFail($id);
        $newTask->delete();
        return Redirect::to('teste');
    }

    public function details($id)
    {
        $newTask = TaskModel::FindorFail($id);
        return view('teste')->with('newTask', $newTask);
    }  
}