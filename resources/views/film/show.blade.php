<x-layout>
    <div class="container my-5">
        <div class="row">
            <h3 class="text-center fs-1">{{ $movie['title'] }}</h3>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{ $movie['img'] }}" alt="{{ $movie['title'] }}" class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <p>{{$movie['description']}}</p>
                <p>Regista: {{$movie['director']}}</p>
                <p>Genere: {{$movie['genre']}}</p>
                <p>Anno: {{$movie['released_at']}}</p>
            </div>
        </div>
    </div>
</x-layout>