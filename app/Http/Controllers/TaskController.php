<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function getAll(){
        $tasks = Task::all();
        return $tasks;
    }
    public function createTask(Request $request){
        $data = $request->all();//obtiene el cuerpo de la peticion (datos del front end)
        // $data['id_user']
        // $data['text']
        Task::create([
            'id_user' => $data['id_user'],
            'text' => $data['text']
        ]);
    }
}
