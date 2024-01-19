@extends('layouts.app')
@section('content')
    <section class="container">
       <h1>technology create</h1>

       <form action="{{route('admin.technologies.store')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">
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