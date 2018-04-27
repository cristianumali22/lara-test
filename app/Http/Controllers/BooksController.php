<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\books;

class BooksController extends Controller
{
    public function index()
    {
       $show = books::latest()->simplePaginate(5);
       return view('books.ItemCRUD.index', compact('show'));  //calls the blade file with the value stored in $show
    }
 
    public function showed(Request $request)
    {
        $item = books::find($request->id);
        return view('books.ItemCRUD.show', compact('item'));
    }//calls the blade file with the value stored in $item

    public function delete($id)
    {
        $del = books::find($id);
        $del->delete();
        return back();
    }

    public function add()
    {
        return view('books.ItemCRUD.add'); //calls the blade file
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'isbn' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'yearPublished' => 'required',
            'category' => 'required'
        ]);



        books::create($request->all());
        return redirect()->route('books.index');
    }

    public function edit($id)
    {
        $item = books::find($id);
        return view('books.ItemCRUD.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        books::find($id)->update($request->all());
        return redirect()->route('books.index');
    }

    public function search(Request $request)
    {
        $data = $request->data;
        $result = books::where('title', 'like', "%$data%")
                        ->orWhere('isbn', 'like', "%$data%")
                        ->orWhere('author', 'like', "%$data%")
                        ->orWhere('publisher', 'like', "%$data%")
                        ->orWhere('yearPublished', 'like', "%$data%")
                        ->orWhere('category', 'like', "%$data%")
                        ->get();
        return view('books.ItemCRUD.result', compact('result'));
    }

    public function sortingOfTitle()
    {
        $show = books::orderBy('title')->simplePaginate(5);
        return view('books.ItemCRUD.index', compact('show'));
    }

    public function sortingOfISBN()
    {
        $show = books::orderBy('isbn')->simplePaginate(5);
        return view('books.ItemCRUD.index', compact('show'));
    }

    public function sortingOfAuthor()
    {
        $show = books::orderBy('author')->simplePaginate(5);
        return view('books.ItemCRUD.index', compact('show'));
    }

    public function sortingOfPublisher()
    {
        $show = books::orderBy('publisher')->simplePaginate(5);
        return view('books.ItemCRUD.index', compact('show'));
    }

    public function sortingOfYearPublished()
    {
        $show = books::orderBy('yearPublished')->simplePaginate(5);
        return view('books.ItemCRUD.index', compact('show'));
    }

    public function sortingOfCategory()
    {
        $show = books::orderBy('category')->simplePaginate(5);
        return view('books.ItemCRUD.index', compact('show'));
    }
}
