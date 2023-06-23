@extends('layouts.main')
@section('content')
    <div>
            <div>{{ $lot->id }}. {{ $lot->name }}</div>
            <div>{{ $lot->description }}</div>

    </div>
    <div>
        <a class="btn btn-primary" href="{{ route('lot.edit', $lot->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('lot.delete', $lot->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div>
        <a class="btn btn-dark" href="{{ route('lot.index') }}">Back</a>
    </div>
@endsection
