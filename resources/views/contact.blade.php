<x-layout>
    <div class="container my-5">
        <div class="row">
            <h3 class="text-center fs-1">Contattaci</h3>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('contact.submit')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del film</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="director" class="form-label">Regista</label>
                        <input type="text" name="director" class="form-control" id="director">
                    </div>
                    <div class="mb-3">
                        <label for="plot" class="form-label">Trama del film</label>
                        <textarea name="plot" id="plot" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Invia</button>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <h3>Suggeriscici un film</h3>
                <p>Non trovi il tuo film preferito? Compila il form.</p>
                <p>Un nostro curatore esaminerà la tua richiesta.</p>
            </div>
        </div>
    </div>
</x-layout>