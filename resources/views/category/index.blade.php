@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Add</a>
        </div>
        @foreach($categories as $category)
            <div><a href="{{route('category.show', $category->id)}}"> {{ $category->id }}. {{ $category->title }}</a></div>
        @endforeach

    </div>
@endsection
