@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" placeholder="Title">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
