<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
  public function index(){
    
    return Book::all();
  }
  
  public function create(Request $request){
    $book = new Book();
    $book->title = "Clean Code";
    $book->excerpt = "";
    $book->reviews = "";
    $book->ISBN = "";
    $book->pages = 362;
    $book->org_price = 19.99;
    $books->curr_value = 6.99;
    
    $book->save();
  }
  
  public function update($id){
    $book = Book::find($id);
    $book->cost = 23.99;
    
    $book->save();
  }
  
  public function destroy($id){
    Book::find($id)->delete();
  }
}
