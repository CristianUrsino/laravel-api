@extends('layouts.app')
@section('content')
    <section class="container">
       <h1>edit {{$technology->title}}</h1>

       <form action="{{route('admin.technologies.update', $technology->slug)}}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') . $technology->name }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
           
            <div>
                <button type="submit" class="btn">Invia</button>
                <button type="reset" class="btn">Reset</button>
            </div>

        </form>  

    </section>
@endsection