<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Author;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        {

            // Search in the title and body columns from the posts table
            $keyword = $request->search;

            $books = Book::whereHas('authors', function($query) use ($keyword)
            {
                $query->where('name', 'LIKE', "%$keyword%");
            })->with('authors')
              ->get();
        }
    }
}
