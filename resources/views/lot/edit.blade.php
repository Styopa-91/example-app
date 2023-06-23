@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('lot.update', $lot->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{$lot->name}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Description">{{$lot->description}}</textarea>
            </div>
            <label for="category" class="form-label">Category</label>
            <select class="form-select mb-3" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{ $category->id == $lot->category->id ? ' selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
