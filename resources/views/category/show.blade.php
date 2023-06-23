@extends('layouts.main')
@section('content')
    <div>
            <div>{{ $category->id }}. {{ $category->title }}</div>

    </div>
    <div>
        <a class=" btn btn-primary" href="{{ route('category.edit', $category->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('category.delete', $category->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div>
        <a class=" btn btn-dark" href="{{ route('category.index') }}">Back</a>
    </div>
@endsection
