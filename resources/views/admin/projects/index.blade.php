@extends('layouts/app');
@section('content')
    <h1>index project</h1>
    
    @if(session()->has('message'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{route('admin.projects.create')}}">Aggiungi progetto</a>
    </div>
    @foreach ($projects as $project)
        <div class="my-3">
            <a href="{{route('admin.projects.show',$project)}}">{{$project->name}}</a>
            <a href="{{route('admin.projects.edit', $project)}}" class="ms-3">edit</a>
            <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn border" type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection