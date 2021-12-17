@extends('layouts.master')
@section('title')
@section('content')

<div style="width: 20%; margin: 0 auto;">




@csrf
<form action="/editprocess/{{$book->id}}">
        <div class="form-group" >
          <label">Name</label>
          <input type="text"name="name" class="form-control" value="{{$book->name}}">
        </div>
        <br>
        <div class="form-group">
          <label>Book author(s) (Separate different authors with commas: Gogebashvili,Turmanidze,Amirejibi)</label>
          <input type="text" name="author" class="form-control" value="{{$authors_comp}}">
        </div>
        <br>

        <div class="form-group">
          <label>Year</label>
          <input type="text" name="year" class="form-control" value="{{$book->year}}" >
        </div>
        <br>
        <div class="form-group">
            <label>Is book available?</label>
            <input type="checkbox" name="available">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection