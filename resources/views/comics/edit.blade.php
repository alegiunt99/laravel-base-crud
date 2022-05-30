@extends('layouts.app')

@section('content')
    
    <!-- titolo -->
    <h1>
        COMICS
    </h1>

    <div class="create-page">

        <div class="container">

            <form action="{{ route('comics.update', $comic)}}" method="POST">
                @csrf

                @method('PUT')

                    <div class="input-new">
                        <label for="title">Titolo: </label><br>
                        <input type="text" name="title" value="{{ $comic->title}}">
                    </div>

                    <div class="input-new">
                        <label for="thumb">Thumb: </label><br>
                        <input type="text" name="thumb" value="{{ $comic->thumb}}">
                    </div>

                    <div class="input-new">
                        <label for="price">Prezzo:</label><br>
                        <input type="text" name="price" value="{{ $comic->price}}">
                    </div>
                    
                    <div class="input-new">
                        <label for="series">Serie: </label><br>
                        <input type="text" name="series" value="{{ $comic->series}}">
                    </div>
                    
                    <div class="input-new">
                        <label for="sale_date">Data di uscita: </label><br>
                        <input type="date" name="sale_date" value="{{ $comic->sale_date}}">
                    </div>
                    
                    <div class="input-new">
                        <label for="type">Genere: </label><br>
                        <input type="text" name="type" value="{{ $comic->type}}">
                    </div>
                    
                    <input type="submit" value="Invia">
                
                </form>

                <a id="annulla" href="{{ route('comics.show', $comic)}}">ANNULLA</a>
        </div>    
    </div>    





@endsection