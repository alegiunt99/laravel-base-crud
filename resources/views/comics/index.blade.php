@extends('layouts.app')

@section('content')
    
    <!-- titolo -->
    <h1>
        COMICS
    </h1>
    
    <div class="central-page">

        <div class="container">
            
            <!-- carico tutti i fumetti con i rispettivi dettagli  -->
            @forelse ($comics as $comic)

                <div class="card">
                    <!-- foto -->
                    <img src="{{$comic->thumb}}" alt="">

                    <!-- titolo -->
                    <h2>{{$comic->title}}</h2>

                    <!-- prezzo -->
                    <p>{{$comic->price}}</p>

                    <!-- serie -->
                    <p>{{$comic->series}}</p>

                    <!-- data di uscita -->
                    <p>{{$comic->sale_date}}</p>

                    <!-- tipologia -->
                    <p>{{$comic->type}}</p>
                </div>
                
            @empty
                <h1>No comics </h1>
            @endforelse

        </div>

    </div>
    
@endsection
    
