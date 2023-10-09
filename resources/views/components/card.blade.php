<div class="card shadow" style="width: 18rem;">
  <img src="{{ $movieImg }}" class="card-img-top" alt="{{ $movieTitle }}">
  <div class="card-body">
    <h5 class="card-title">{!! $movieTitle !!}</h5>
    <p class="card-text">{{ $movie }}: {{ $movieDirector }}</p>
    <p class="card-text">Trama: {{Str::limit($movieDescription, 30) }}</p>
    <p class="card-text">Genere: {{ $movieGenre }}</p>
  </div>
  <div class="card-footer">
    <p class="card-text">Anno: {{ $movieRelease }}</p>
    <a href="{{route('film.show', ['id' => $movieId])}}" class="btn btn-dark">Vai al dettaglio</a>
  </div>
</div>