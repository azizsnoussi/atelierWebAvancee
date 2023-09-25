@extends('app')

@section('content')

<h1>Product List</h1>
    <table>
        <thead>
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Description </th>
                <th> Price </th>
                <th> Stock </th>
                <th> Actions </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td><a href="{{ route('products.show', $product->id) }}">Show</a></td>
                    <td><button href="{{ route('products.edit', $product->id) }}">Edit</button></td>
                    <td><form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    </form></td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection