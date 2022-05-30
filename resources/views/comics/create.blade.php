@extends('layouts.app')

@section('content')
    
    <!-- titolo -->
    <h1>
        COMICS
    </h1>

    <div class="create-page">

        <div class="container">

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                    <div class="input-new">
                        <label for="title">Titolo: </label><br>
                        <input type="text" name="title" id="">
                    </div>

                    <div class="input-new">
                        <label for="thumb">Thumb: </label><br>
                        <input type="text" name="thumb" id="">
                    </div>

                    <div class="input-new">
                        <label for="price">Prezzo:</label><br>
                        <input type="text" name="price" id="">
                    </div>
                    
                    <div class="input-new">
                        <label for="series">Serie: </label><br>
                        <input type="text" name="series" id="">
                    </div>
                    
                    <div class="input-new">
                        <label for="sale_date">Data di uscita: </label><br>
                        <input type="date" name="sale_date" id="">
                    </div>
                    
                    <div class="input-new">
                        <label for="type">Genere: </label><br>
                        <input type="text" name="type" id="">
                    </div>
                    
                    <button type="submit" name="" id="">INVIA</button>

                </form>

                <a id="annulla" href="{{ route('comics.index')}}">ANNULLA</a>

        </div>

    </div>


@endsection