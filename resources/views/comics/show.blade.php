@extends('layouts.app')

@section('content')
    
    <!-- titolo -->
    <h1>
        COMICS
    </h1>

    <div class="details-page">

        <div class="container">

            <div class="details-logo">
                <img src="{{$comic->thumb}}" alt="">
            </div>
    
            <div class="title-and-description">
                <!-- title -->
                <div class="title">
                    <h2>
                        {{$comic->title}}
                    </h2>
                </div>
    
    
                <!-- description -->
                <div class="description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aliquid voluptate provident voluptatum vitae excepturi, aliquam numquam eveniet sed officiis. Saepe, totam! Facere, neque suscipit ipsam eligendi odio, facilis similique possimus ullam quasi praesentium esse corporis sed omnis mollitia? Perspiciatis modi maiores, debitis voluptas eaque nihil? Quia assumenda tempore debitis, voluptates dolor cum, eum ipsam aliquid ipsa, quos facere nulla?</p>
                </div>

            </div>

            
        </div>

        <div class="back">
            <a href="{{ route('comics.index')}}"> BACK </a>
        </div>
        
        
    </div>




@endsection