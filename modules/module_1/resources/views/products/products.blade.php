@extends('layouts.app')

@section('content')
    <h1>Products for {{ $manufacturer->brand }}</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacture Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->manufacture_date }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
