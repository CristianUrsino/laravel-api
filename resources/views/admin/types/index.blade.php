@extends('layouts/app');
@section('content')
    <h1>index type</h1>
    
    @if(session()->has('message'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{route('admin.types.create')}}">Aggiungi type</a>
    </div>
    @foreach ($types as $type)
        <div class="my-3">
            <a href="{{route('admin.types.show',$type)}}">{{$type->name}}</a>
            <a href="{{route('admin.types.edit', $type)}}" class="ms-3">edit</a>
            <form action="{{route('admin.types.destroy', $type->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn border" type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection