@extends('app')

@section('title', '日記')

@section('content')
    @include('nav')
    <div class="container">
        @foreach ($articles as $article)
            @include('articles.daily')
        @endforeach
    </div>
@endsection
