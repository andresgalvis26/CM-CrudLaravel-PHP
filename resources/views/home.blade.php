@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h2 class="bg-blue-600 text-black text-2xl text-center pb-3" >My Shopping List</h2>
            <table class="table table-striped table-success">
                <thead>
                    <tr class="bg-blue-400 text-black">
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
                        <td class="p-3 d-flex justify-center">
                            {{-- Botón de eliminar --}}
                            <form action="{{ route('products.destroy', $row->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="bg-red-500 text-info px-3 py-1 rounded-sm mx-1">
                                    <i class="fas fa-trash"></i></button>
                            </form>
                                <a href="{{ route('products.edit', $row->id) }}" class="bg-green-500 text-warning px-3 py-1 rounded-sm mx-1">
                                    <i class="fas fa-pen"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>




        </div>
    </div>
</div>
@endsection
