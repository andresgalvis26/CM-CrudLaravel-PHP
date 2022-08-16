@extends('layouts.app')


@section('title', 'Edit')


@section('content')

<form action="{{ route('products.update', $product->id) }}" method="post" class="bg-white w-2/3 p-4 border-gray-100 shadow-xl rounded-lg">

    @csrf
    @method('put')

    <h2 class="text 2xl text-center py-4 mb-4 font-semibold">Edit Product {{ $product->id }}</h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" name="title" autocomplete="off" value={{$product->title}}>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" value={{$product->country}} type="text" name="country">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" value={{$product->price}} type="text" name="price">

    <button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold rounded text-white hover:bg-green-700">Send Edit Product</button>

</form>

@endsection