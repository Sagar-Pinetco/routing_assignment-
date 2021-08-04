<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'heloo';

        //
        if(request('search')){
            dd(request('search'));
            // return "hello call";
        }
        $book_list = Book::paginate(5);

        // return $book_data;
        return view('book',['list'=>$book_list]);
        // return view('book',compact("book_data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bookinsert');
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
        // return $request->input();
        // $book = new Book();
        Book::create($request->all());
        // return redirect()->route("books.index")
        // ->with('success','Book Inserted Successfully');
        return redirect()->back()
        ->with('success','Book Inserted Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
        return view('edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        // Book::where('id', $book)->update($request->all());

        $input = $request->all();
        $book->find('id');
        $book->update($input);

          return redirect()->route("books.index")
        ->with('success',$book->book_name.' Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->find('id');
        $book->delete();
        //

        return redirect()->route("books.index")
        ->with('delete',$book->book_name.' delete Successfully');
    }

    public function getSearch($keyword)
    {
        return "hello";
        // //get keywords input for search
        // $keyword=  Input::get('q');

        // //search that student in Database
        //  $students= Student::find($keyword);

        // //return display search result to user by using a view
        // return View::make('selfservice')->with('student', $students);
    }
}
