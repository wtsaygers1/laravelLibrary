<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
//   public function index(){
    
//     return User::all(); //R
//   }
  
  public function show($id){
    return User::find($id); //R, individual book
  }
  
  public function create(Request $request){
    $user = User::factory()->make();
    $user->full_name = $request->full_name;
    
    $user->save();
    return $user;
  }
  
  public function update(Request $request, $id){
    $user = User::find($id);
//     $book = Book::factory()->make();
    $user->full_name = $request->full_name;
    
    $user->save();
    return $user;
  }
  
  public function delete($id){
    User::find($id)->delete();
  }
}
