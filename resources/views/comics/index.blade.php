@extends('layouts.main')

@section('content')
<h1>Lista Prodotti</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
        <th scope="col">Data di vendita</th>
        <th scope="col">Tipo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->series }}</td>
                <td>{{ $product->sale_date }}</td>
                <td>{{ $product->type }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
