@extends('layouts.app')

@section('title')
    Edit Post
@endsection

@section('content')
    <form method='post' action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')

        {{-- Validataion Errors If Exist --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp"
                value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ $post->description }}
            </textarea>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Updated By</label>
            <select id="user_id" name="user_id" class="form-select">

                <option disabled {{ $post->user_id == null ? 'selected' : '' }}>No User</option>

                @foreach ($users as $user)
                    {{-- <option value="{{ $user->id }}" {{ $post->user_id == $user->id ? 'selected' : '' }}> --}}
                    <option value="{{ $user->id }}" @selected($post->user_id == $user->id ? 'selected' : '')>
                        {{ $user->name }}
                    </option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
