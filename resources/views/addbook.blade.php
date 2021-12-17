@extends('layouts.master')
@section('title')
@section('content')

<div style="width: 20%; margin: 0 auto;">

    <?php
            echo Form::open(array('url' => 'add'));


            echo Form::label('name', 'Book name');
            echo Form::text('name','', array('class' => 'form-control'));
            echo '<br/>';


            echo Form::label('author', 'Book author(s) (Separate different authors with commas: Gogebashvili,Turmanidze,Amirejibi)');
            echo Form::text('author','', array('class' => 'form-control'));
            echo '<br/>';

            echo Form::label('year', 'Book year');
            echo Form::text('year','', array('class' => 'form-control'));
            echo '<br/>';

            echo Form::label('title', 'Is book available?:');
            echo Form::checkbox('available', 'value');
            echo '<br/>';

            echo '<br/>';
            echo Form::submit('Add');
            echo Form::close();
    ?>
    </div>

@endsection