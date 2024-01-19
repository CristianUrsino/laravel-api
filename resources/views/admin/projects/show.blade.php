@extends('layouts/app');
@section('content')
    <h1>{{$project->name}}</h1>
    <div>
        {{$project->description}}
    </div>
    @if($project->image)
    <div><img style="width: 250px" src="{{asset('storage/'.$project->image)}}" alt="image of {{$project->name}}"></div>
    @endif
    @if($project->type_id)
        <h6>type:</h6>
        <div class="my-2">{{$project->type->name}}</div>
    @endif
    @if($project->technologies->isNotEmpty())
        <div class="mb-3">
            <h6>techs</h6>
            @foreach($project->technologies as $technology)
                <div class="my-2">{{$technology->name}}</div>
            @endforeach
        </div>
    @endif
@endsection