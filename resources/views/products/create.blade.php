@extends('app')

@section('content')

<form method="post" action="create" role="form text-left" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description" ></textarea>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" >
    </div>
    <div>
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" >
    </div>
    <button type="submit">Create</button>
</form>    

@endsection