<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Done;

class TodoController extends Controller
{
    public function index()
    {
    	 $todos = Todo:: latest()->get();
      $dones = Done:: latest()->get();
   	return view('todo.index',compact('todos','dones')); 
   	
   }

   public function add()		
   {
   	 Todo::create([
   		'body' => request('body')
   		]);
   	 session()->flash('message','Your todo has been added successfully');
   	 return back();
   }

   public function edit($id)
   {
   	$todo = Todo::find($id);
   	return view('todo.edit',compact('todo'));
   }

   public function update($id)
   {
   	$todo = Todo::find($id);
   	$todo->body = request('body');
  	$todo->save();
    session()->flash('message','Your todo has been edited successfully');
  	return redirect('/index');
   }

   public function remove($id)
   {
   	$todo = Todo::find($id);
   	$todo->delete();
    session()->flash('message','Your todo has been deleted successfully');
   	return back(); 
   }

   public function removeall()
   {
      $dones = Done::all();
        foreach ($dones as $done) {
          $done->delete();
        }
        return back();
   }

   public function mark($id)
   {
    $todo = Todo::find($id);
    $done = new done();
    $done->body = $todo->body;
    $done->save();
    $todo->delete();

    return back();

   }
   public function markall()
   {
     $todos = Todo::all();
      foreach ($todos as $todo) {
        $done =new done();
        $done->body = $todo->body;
        $done->save();
        $todo->delete();
      }

       return back();
   }
   
}
