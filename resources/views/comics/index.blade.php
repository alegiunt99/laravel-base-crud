<h1>
    COMICS
</h1>
@forelse ($comics as $comic)
    <div class="card">
        <img src="{{$comic->thumb}}" alt="">
        <h2>{{$comic->title}}</h2>
        <p>{{$comic->price}}</p>
        <p>{{$comic->series}}</p>
        <p>{{$comic->sale_date}}</p>
        <p>{{$comic->type}}</p>
    </div>
    
@empty
    <h1>No comics </h1>
@endforelse