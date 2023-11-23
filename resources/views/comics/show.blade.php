@extends('layouts.main')

@section('content')
    <h1 class="mb-3"><strong>Titolo:</strong> {{ $product->title }}</h1>

    <div class="card" style="width: 18rem;">
        <div class="image">
            <img class="card-img-top" src="{{ $product->thumb }}" alt="{{ $product->title }}">
        </div>

        <div class="card-body">
          <p class="card-text"><strong>Descrizione:</strong> {{ $product->description }}</p>
          <p class="card-text"><strong>Prezzo:</strong> {{ $product->price }}</p>
          <p class="card-text"><strong>Serie:</strong> {{ $product->series }}</p>
          <p class="card-text"><strong>Data di vendita:</strong> {{ $product->sale_date }}</p>
          <p class="card-text"><strong>Tipo:</strong> {{ $product->type }}</p>
        </div>
      </div>
@endsection
