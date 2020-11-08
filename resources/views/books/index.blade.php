@extends('layouts/main')

@section('main-content')

    <div class="books-index">
        <div class="container">
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-4">
                        <div class="book-box">
                            <a href="{{Route('books.show', $book->id)}}">
                                <img src="{{$book->cover}}" alt="">
                                <h4>{{$book->title}}</h4>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection