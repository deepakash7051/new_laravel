<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    public function index(){
    	return view('todo.index')->with('todos',Todo::all());
    }
}
