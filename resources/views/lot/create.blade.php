@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('lot.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Name">
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Description">{{ old('description') }}</textarea>
                @error('description')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <label for="category" class="form-label">Category</label>
            <select class="form-select mb-3" id="category" name="category_id">
                @foreach($categories as $category)
                <option
                    {{ old('category_id') == $category->id ? ' selected' : '' }}
                    value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
