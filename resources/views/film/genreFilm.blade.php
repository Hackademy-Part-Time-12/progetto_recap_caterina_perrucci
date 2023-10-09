<x-layout>
    <div class="container my-5">
        <div class="row">
            <h3 class="text-center">Genere</h3>
        </div>
    </div>
   
    <div class="container my-5">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-12 col-md-4 my-2">
                    <x-card 
                    movieId="{{$movie['id']}}"
                    {{-- binding esplicito --}}
                    :movieTitle="$movie['title']"
                    movieImg="{{$movie['img']}}"
                    movieDescription="{{$movie['description']}}"
                    movieDirector="{{$movie['director']}}"
                    movieRelease="{{$movie['released_at']}}"
                    movieGenre="{{$movie['genre']}}"
                    movie="Film diretto da"
                    />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>