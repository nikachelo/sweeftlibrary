@extends('layouts.master')
@section('title')
@section('content')
<table class="table table-bordered table-dark" style="text-align:center">
   <thead>
      <tr>
         <th scope="col">Name</th>
         <th scope="col">Author(s)</th>
         <th scope="col">Year</th>
         <th scope="col">Availability</th>
         <th scope="col">Action</th>
      </tr>
   </thead>
   <tbody>
      @foreach($books as $book)
      <tr>
         <td>{{$book->name}}</td>
         <td>
            @foreach($book->authors as $author)
            <span>{{$author->name}}</span>
            @if(!$loop->last)
            ,
            @endif
            @endforeach
         </td>
         <td>{{$book->year}}</td>
        @if($book->isActive)
         <td>Available</td>
         @else
         <td>Not available</td>
         @endif
         <td>        
            <a href="edit/{{$book->id}}"><button type="button" class="btn btn-primary">Edit</button></a>
            <a href="delete/{{$book->id}}"><button type="button" class="btn btn-danger">Remove</button></a>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>
@endsection
