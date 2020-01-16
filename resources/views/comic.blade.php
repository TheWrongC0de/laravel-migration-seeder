{{-- pagina che estende il layouts --}}
@extends('layouts.comic-layout')
@section('content')

    <div class="comics-container">

  
        @foreach($comics as $comic)
            <div class="comic">
                <img src="{{url('/img/logohero.png')}}" alt="">
               <h3> {{ $comic["title"] }}</h3>
               <small>{{ $comic["author"] }}</small> 
                <strong>{{ $comic["year"] }}</strong>
                <div class="review">
                    <p>{{ $comic["review"] }}</p>
                </div>
                
                <p>Voto : {{ $comic["vote"] }}/5</p>
            </div>
                    {{-- <li><img src="{{ $comic['path'] }}" alt=""></li> --}}
                
        @endforeach
  </div>
    
@endsection