<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use DB;

class BookController extends Controller
{
    public function index(){
        $book = DB::table('books')->latest()->orderByDesc('id')->paginate(3);
        return view('book.index', compact('book'));
    }

    public function create(){
        
        return view('book.create');
    }

    public function store(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        $book = DB::table('books')->insert($data);

        return redirect()->route('book.index')
                    -> with('success', 'Book Created Successfully');

    }

    public function edit($id){
        $book = DB::table('books')->where('id', $id)->first();
        return view('book.edit', compact('book'));
    }

    public function update(Request $request, $id){

        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        $book = DB::table('books')->where('id', $id)->update($data);

        return redirect()->route('book.index')
                    -> with('success', 'Book Updated Successfully');
    }

    public function delete($id){
        $data = DB::table('books')->where('id', $id)->first();
        $book = DB::table('books')->where('id', $id)->delete();
        return redirect()->route('book.index')
                    -> with('success', 'Book Deleted Successfully');
    }

    public function show($id){
        $data = DB::table('books')->where('id', $id)->first();
        return view('book.show', compact('data'));
    }
}
