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
  
//   public function create(Request $request){
//     $book = Book::factory()->make();
//     $book->title = $request->title;
    
//     $book->save();
//     return $book;
//   }
  
//   public function update(Request $request, $id){
//     $book = Book::find($id);
// //     $book = Book::factory()->make();
//     $book->title = $request->title;
    
//     $book->save();
//     return $book;
//   }
  
//   public function delete($id){
//     Book::find($id)->delete();
//   }
}
