<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    //

    public function index(){
        $books = Book::all();
        return view('index', compact('books'));
    }

    public function addbook(){
     
        return view('addbook');
        
    }

    public function add(Request $request){
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'year'=> 'required'
        ]);

        $book = Book::where('name', $request->name)->first(); //vamocmebt arsebobs tu ara eseti cigni
        
        if(!$book){

            $book = new Book;
            $book->name=$request->name;
            $book->year=$request->year;
            if($request->available){
                $book->isActive=1;
            }else{
                $book->isActive=0;
            }
            $book->save();
            $authors = explode(',' ,$request->author); //avtorebi gadavikvanot arrayshi

            foreach($authors as $author){
                $authori = Author::where("name", $author)->first();
                if($authori){
                    $book->authors()->attach($authori->id);
                }else{
                    $authori = new Author;
                    $authori->name = $author;
                    $authori->save();
                    $book->authors()->attach($authori->id);
                }
            }
            
            return redirect('/');
            
        }else{
            return redirect('addbook'); //redirect cignis damatebis formaze radgan aseti cigni arsebobs
        }

        



    }

    public function delete($id){
        $book = Book::find($id);
        $book->authors()->detach();
        $book->delete();
        return redirect('/');
    }
    
    public function edit($id){
        $book = Book::where('id', $id)->first();
        $authors = $book->authors()->get();
        $authornames = array();
        foreach($authors as $author){
            array_push($authornames, $author->name);
        }
        $authors_comp = implode(',', $authornames);
        return view('edit', compact('book', 'authors_comp'));
    }


    public function editprocess(Request $request){


        $book = Book::find('name', $request->id); 
        if(!$book){

            $book = new Book;
            $book->name=$request->name;
            $book->year=$request->year;
            $book->save();
            $authors = explode(',' ,$request->author); //avtorebi gadavikvanot arrayshi

            foreach($authors as $author){
                $authori = Author::where("name", $author)->first();
                if($authori){
                    $book->authors()->sync($authori->id);
                }else{
                    $authori = new Author;
                    $authori->name = $author;
                    $authori->save();
                    $book->authors()->sync($authori->id);
                }
            }
            return $request->id;
            //return redirect('/');
            
        }else{
            return $id;
            //return redirect('addbook'); //redirect cignis damatebis formaze radgan aseti cigni arsebobs
        }

        




    }

}
