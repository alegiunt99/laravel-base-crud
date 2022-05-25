<h1>
    COMICS
</h1>
@forelse ($comics as $comic)
    <h2>{{$comic->title}}</h2>
@empty
    <h1>No comics </h1>
@endforelse