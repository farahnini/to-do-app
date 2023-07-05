<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Todo;


class TodoController extends Controller
{
    public function index ()
    {
        // query all todos from table 'todos' using Todo.php model
        $todos = Todo::all();
        
        // return view with todo data
        return view('todos.index',compact('todos'));
    }
}
