@extends('layouts/main')

@section('main-content')

<h1>Dettaglio libro</h1>

<h4><span>TITOLO: </span>{{$book->title}}</h4>

<h5>
    <span>AUTORE: </span>
    @foreach ($book->authors as $author)
        <span>{{$author->name}} </span><span>{{$author->lastname}}</span> (<span>{{$author->author_info->nationality}}</span>)

    @endforeach
</h5>

<div>
    <img src="{{$book->cover}}" alt="{{$book->title}}">
</div>

<div>
    <p>CODICE ISBN: <span>{{$book->isbn}}</span></p>
    <p>EDIZIONE: <span>{{$book->edition}}, {{$book->year}} - pagine: {{$book->pages}} </span></p>
    <p>VOTO: <span>{{$book->vote}}</span></p>
</div>

<div>
    <p>CITAZIONE: <span><em>{{$book->quote}}</em></span></p>
    <p>NOTE: <span>{{$book->note}}</span></p>
</div>

<div>
    <span>TAG: </span>
    @foreach ($book->tags as $tag)
        <span>{{$tag->name}} </span>
    @endforeach
</div>

<div>
    <p>GENERE: <span>{{$book->genre->name}}</span>
    </p>    
</div>

<div>
    <p>IN PRESTITO A: <span>{{$book->loan->name}}</span> il <span>{{$book->loan->date_of_loan}}</span>
    </p>    
</div>

<div>
    <a href="{{Route('books.index')}}"> <<< TORNA ALLA LISTA GENERALE</a>
</div>

@endsection