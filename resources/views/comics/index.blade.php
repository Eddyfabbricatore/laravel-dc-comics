@extends('layouts.main')

@section('content')
<h1 class="mb-3">Lista Prodotti</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Data di vendita</th>
        <th scope="col">Info</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->sale_date }}</td>
                <td><a class="btn btn-success" href="{{ route('comics.show', $product->id) }}"><i class="fa-solid fa-pencil"></i></a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
