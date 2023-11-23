@extends('layouts.main')

@section('content')
    <h1 class="mb-3">Inserisci nuovo prodotto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="title">Titolo</label>
            <input class="form-control" type="text" id="title" name="title">
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 200px"></textarea>
            <label for="description">Descrizione</label>
        </div>

        <div class="mb-3">
            <label class="form-label" for="thumb">Immagine</label>
            <input class="form-control" type="thumb" id="thumb" name="thumb">
        </div>

        <div class="mb-3">
            <label class="form-label" for="price">Prezzo</label>
            <input class="form-control" type="price" id="price" name="price">
        </div>

        <div class="mb-3">
            <label class="form-label" for="series">Serie</label>
            <input class="form-control" type="series" id="series" name="series">
        </div>

        <div class="mb-3">
            <label class="form-label" for="sale_date">Data di vendita</label>
            <input class="form-control" type="sale_date" id="sale_date" name="sale_date">
        </div>

        <div class="mb-3">
            <label class="form-label" for="type">Tipo</label>
            <input class="form-control" type="type" id="type" name="type">
        </div>

        <button class="btn btn-primary" type="submit">Invia</button>
        <button class="btn btn-secondary" type="reset">Annulla</button>
    </form>
@endsection
