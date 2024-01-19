@extends('layouts.app')
@section('content')
    <section class="container">
       <h1>project create</h1>

       <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            

            <div class="mb-3">
                <label for="description">description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="repository_link">Repository link</label>
                <input type="url" class="form-control @error('repository_link') is-invalid @enderror" name="repository_link" id="repository_link" value="{{ old('repository_link') }}">
                @error('repository_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="completion_date">completion_date</label>
                <input type="date" class="form-control @error('completion_date') is-invalid @enderror" name="completion_date" id="completion_date" value="{{ old('completion_date') }}">
                @error('completion_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image">image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image') }}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="project_status">project_status</label>
                <select name="project_status" id="project_status">
                    <option value="active">active</option>
                    <option value="completed">completed</option>
                    <option value="paused">paused</option>
                </select>
                @error('project_status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type">type</label>
                <select name="type_id" id="type_id">
                    <option value="">scegli i tipi</option>
                    @foreach($types as $type)
                        <option value="{{$type->id}}" {{old('type_id') == $type->id ? 'selected' : ''}}>{{$type->name}}</option>
                    @endforeach
                </select>
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <div>tech:</div>
                @foreach($technologies as $technology)
                    <div class="form-check @error('technologies') is-invalid @enderror">
                        <input type="checkbox" name="technologies[]" value="{{ $technology->id }}" {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $technology->name }}</label>
                    </div>
                @endforeach
            </div>

            <div>
                <button type="submit" class="btn">Invia</button>
                <button type="reset" class="btn">Reset</button>
            </div>

        </form>  

    </section>
@endsection