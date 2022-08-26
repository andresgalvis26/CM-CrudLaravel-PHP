@extends('layouts.app')


@section('title', 'Home')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <h2 class="bg-blue-600 text-white text-2xl text-center py-5" >My Shopping List</h2>  {{-- Development in Laravel PHP --}}
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-blue-400 text-white">
                <th class="w-20 py-4 ...">ID</th>
                <th class="w-1/8 py-4 ...">Products</th>
                <th class="w-1/16 py-4 ...">Market</th>
                <th class="w-1/16 py-4 ...">Price</th>
                {{-- <th class="w-1/16 py-4 ...">Created</th>
                <th class="w-1/16 py-4 ...">Updated</th> --}}
                <th class="w-28 py-4 ...">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $row)
                
            <tr>
                <td class="py-3 px-6">{{ $row->id }}</td>
                <td class="p-3">{{ $row->title }}</td>
                <td class="p-3 text-center">{{$row->country}}</td>
                <td class="p-3 text-center">{{$row->price}} COP</td>
                {{-- <td class="p-3 text-center">{{$row->created_at}}</td>
                <td class="p-3 text-center">{{$row->updated_at}}</td> --}}
                <td class="p-3 flex justify-center">
                    {{-- Botón de eliminar --}}
                    <form action="{{ route('products.destroy', $row->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                            <i class="fas fa-trash"></i></button>
                    </form>
                        <a href="{{ route('products.edit', $row->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-sm mx-1">
                            <i class="fas fa-pen"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
