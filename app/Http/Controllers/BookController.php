<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
  public function index(){
    
    return Book::all(); //R
  }
  
  public function show($id){
    return Book::find($id); //R, individual book
  }
  
  public function create(Request $request){
    $book = Book::factory()->make();
    $book->title = $request->title;
    
    $book->save();
    return $book;
  }
  
  public function update(Request $request, $id){
    $book = Book::find($id);
//     $book = Book::factory()->make();
    $book->title = $request->title;
    
    $book->save();
    return $book;
  }
  
  public function destroy($id){
    Book::find($id)->delete();
  }
}
