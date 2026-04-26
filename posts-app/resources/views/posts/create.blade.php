@extends('app')
@section('content')

<div class="page">

    <nav class="topbar">
        <a href="{{ route('posts.index') }}" class="topbar__brand">The Journal</a>
    </nav>

    <header class="page-header">
        <h1>New Post</h1>
        <p class="sub">Share your thoughts with the world.</p>
    </header>

    <div class="form-card">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    class="form-input"
                    placeholder="Give your post a title…"
                    value="{{ old('title') }}">
                @error('title')
                <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="body" class="form-label">Body</label>
                <textarea
                    id="body"
                    name="body"
                    class="form-textarea"
                    placeholder="Write something worth reading…">{{ old('body') }}</textarea>
                @error('body')
                <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-footer">
                <a href="{{ route('posts.index') }}" class="btn btn--ghost">← Cancel</a>
                <button type="submit" class="btn btn--primary">Publish Post</button>
            </div>

        </form>
    </div>

</div>

@endsection