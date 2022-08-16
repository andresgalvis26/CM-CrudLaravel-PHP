@extends('layouts.app')


@section('title', 'Create')


@section('content')

<form action="{{ route('products.store') }}" method="post" class="bg-white w-2/3 p-4 border-gray-100 shadow-xl rounded-lg">

    @csrf

    <h2 class="text 2xl text-center py-4 mb-4 font-semibold">Create Products</h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Product" type="text" name="title">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Market" type="text" name="country">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Price" type="text" name="price">

    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-700">Send</button>

</form>

@endsection