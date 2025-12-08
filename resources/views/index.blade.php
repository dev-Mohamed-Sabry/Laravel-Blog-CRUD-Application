@extends('layouts.app')

@section('title')
    Home
@endsection


@section('content')
    <div class="container py-5 text-center"
        style="background-image: url('{{ asset('assets/bg.jpg') }}');    background-size: cover;
    background-position: center; ">

        <h1 class="display-4 fw-bold">Welcome to My <span style="color:#0B5ED7">Blog</span> </h1>
        <p class="lead text-secondary mt-3">
            This is the home page. You can browse all posts using the button below.
        </p>

        <a href="{{ route('posts.index') }}" class="btn btn-primary btn-lg mt-3">
            View Posts
        </a>

    </div>
@endsection
