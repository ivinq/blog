@extends('layouts/master')

@section('title', 'Категории')

@section('content')

    @foreach($categories as $category)
        <div class="panel">
        <a class="nav-link" href="{{route('category', $category->code)}}">
            <img src="{{ Storage::url($category->image) }} " height="240px">
            <h2 class="display-4">{{$category->name}}</h2>
        </a>
        <h6>
            {{$category->description}}
        </h6>
    </div>
    @endforeach

@endsection
