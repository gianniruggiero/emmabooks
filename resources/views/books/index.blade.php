@extends('layouts/main')

@section('main-content')
    <h1>Lista generale dei libri</h1>

    @foreach ($books as $book)
        <a href="{{Route('books.show', $book->id)}}">
            <h3>{{$book->title}}</h3>
            <img src="{{$book->cover}}" alt="">
        </a>
        <hr>
      
    @endforeach

@endsection