@extends('layouts/app');
@section('content')
    <h1>index technologies</h1>
    
    @if(session()->has('message'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{route('admin.technologies.create')}}">Aggiungi technology</a>
    </div>
    @foreach ($technologies as $technology)
        <div class="my-3">
            <a href="{{route('admin.technologies.show',$technology)}}">{{$technology->name}}</a>
            <a href="{{route('admin.technologies.edit', $technology)}}" class="ms-3">edit</a>
            <form action="{{route('admin.technologies.destroy', $technology->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn border" type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection