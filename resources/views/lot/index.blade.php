@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-sm-3 float-start">
        <form>
       @foreach($categories as $category)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="categoriesArr[]" value="{{$category->title}}"
                   id="flexCheckChecked" {{isset($checkedCat)?($checkedCat->contains($category)?' checked ':''):''}}>
            <label class="form-check-label" for="flexCheckChecked">
                {{$category->title}}
            </label>
        </div>
        @endforeach
           <button type="submit" class="btn btn-primary">OK</button>
        </form>
    </div>
    <div class="col-sm-6 float-end">
        <div>
            <a href="{{ route('lot.create') }}" class="btn btn-primary mb-3">Add</a>
        </div>
        @foreach($lots as $lot)
            <div><a href="{{route('lot.show', $lot->id)}}"> {{ $lot->id }}. {{ $lot->name }}</a></div>
        @endforeach

    </div>
</div>
@endsection
