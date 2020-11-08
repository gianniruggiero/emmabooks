@extends('layouts/main')

@section('main-content')

    <div class="books-show">

        <div class="container">
            <div class="row">

                <div class="col-3">
                    <div class="book-cover">
                        <img src="{{$book->cover}}" alt="{{$book->title}}">
                    </div>
                </div>

                <div class="col-9">
                    <h4>{{$book->title}}</h4>
                    <h5>
                        <span>di</span>
                        @foreach ($book->authors as $author)
                            <span><em>{{$author->name}} </span><span>{{$author->lastname}}</em></span> (<span>{{$author->author_info->nationality}}</span>)
                        @endforeach
                    </h5>
                    
                    <div class="row">
                        <div class="offset-4 col-8">
                            <div class="quote text-right">
                                <p><span class="quote-left"><i class="fas fa-quote-left"></i></span><em> {{$book->quote}}</em> <span class="quote-right"><i class="fas fa-quote-right"></i></span> 
                                </p>
                            </div>    
                        </div>
                    </div>
                    <div>
                        <p>{{$book->note}}/p>
                    </div>

                    <div class="vote">
                    
                        {{-- <span>VOTO: {{$book->vote}}<i class="far fa-star"></i><i class="fas fa-star"></i></span> --}}
                        <span><strong>VOTO:</strong> </span> 
                            @for ($i = 1; $i < 11; $i++)

                                @if ($i <= $book->vote)
                                    {{-- <span><i class="far fa-star"></span> --}}
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#d3039e" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                          </svg>
                                @else
                                    {{-- <span><i class="fas fa-star"></span> --}}
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                      </svg>
                                @endif
                            @endfor
                        
                    </div>

                    <div>
                        <span>CODICE ISBN: {{$book->isbn}}</span>
                    </div>

                    <div>
                        <span>EDIZIONE: {{$book->edition}}, {{$book->year}}</span>
                    </div>

                    <div>
                        <span>PAGINE: {{$book->pages}}</span>
                    </div>

                    <div class="genere">
                        <span>GENERE: <a href="">{{$book->genre->name}}</a></span>    
                    </div>
                
                    <div class="tags">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tags" fill="#d3039e" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                            <path fill-rule="evenodd" d="M5.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            <path d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                          </svg><span> <strong>TAGs:</strong> </span>

                        @foreach ($book->tags as $tag)
                            <a href="" class="tag">{{$tag->name}}</a>
                        @endforeach
                    </div>
                
                    <div class="loan text-center">
                        <div class="row">
                            <div class="col-8 text-left">
                                <div class="loan-text">
                                    <span>In prestito a: {{$book->loan->name}}</span> dal <span class="loan-date">{{date('j-n-Y', strtotime($book->loan->date_of_loan))}}</span>
                                </div>
                            </div>

                            <div class="col-4 text-right">
                                <div class="menu">
                                    <a href="">Modifica</a>
                                    <a href="">Restituisci</a>
                                </div>
                            </div>

                            <div class="col-12 text-left">
                                <form class="d-none" action="">
                                    <input type="text" placeholder="nome di chi ha preso il libro" name="name" id="name">
                                    <label for="name">Nome e cognome:</label>
                                    <input type="date" placeholder="data quando ha preso il libro" name="date" id="date">
                                    <label for="name">Data:</label>
                                    <input type="submit" value="Salva">
                                </form>
                            </div>
                        </div>
                    </div>
    

                </div>
                
                {{-- <div class="row">
                    <div class="col-12">
                        <a href="{{Route('books.index')}}"> <<< TORNA ALLA LISTA GENERALE</a>
                    </div>
                </div> --}}
                
            </div>

        </div>

    </div>



@endsection