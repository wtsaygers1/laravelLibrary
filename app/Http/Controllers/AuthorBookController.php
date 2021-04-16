<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\AuthorBook;
use Illuminate\Http\Request;

class AuthorBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AuthorBook::all(); //R
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $authorBook = AuthorBook::factory()->make();
    
          $authorBook->save();
          return $authorBook;   
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthorBook  $authorBook
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorBook $authorBook)
    {
        return Author::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthorBook  $authorBook
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorBook $authorBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthorBook  $authorBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthorBook $authorBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthorBook  $authorBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorBook $authorBook)
    {
        //
    }
}
