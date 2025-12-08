@extends('layouts.app')

@section('title')
    Post Details
@endsection

@section('content')
    <div class="container">

        @if (session('success'))
            <div class=" text-center alert alert-success alert-dismissible fade show mt-3" role="alert">
                {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card mb-5">
            <div class="card-header">
                Post Info
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->description }}</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Post Creator Info
            </div>
            <div class="card-body">
                {{-- <h5 class="card-title">Name: {{ $post->user ? $post->user->name : 'Not Found' }}</h5> --}}
                <h5 class="card-title">Name: {{ $post?->user?->name ?? 'Not Found' }}</h5>
                <p class="card-text">Email:{{ $post?->user?->email ?? 'Not Found' }}</p>
                <p class="card-text">Created At: {{ $post?->user?->created_at ?? 'Not Found' }}</p>
                <p class="card-text">Updated At: {{ $post?->user?->updated_at ?? 'Not Found' }}</p>
            </div>
        </div>
    </div>
@endsection
