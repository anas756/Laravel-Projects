@extends('app')
@section('content')

<div class="page">

    <nav class="topbar">
        <a href="{{ route('posts.index') }}" class="topbar__brand">The Journal</a>
        <a href="{{ route('posts.create') }}" class="btn btn--primary">
            + New Post
        </a>
    </nav>

    <header class="page-header">
        <h1>All Posts</h1>
        <p class="sub">{{ $posts->count() }} {{ Str::plural('entry', $posts->count()) }}</p>
    </header>

    @if($posts->isEmpty())
    <div class="empty-state">
        <div class="empty-state__icon">✦</div>
        <p>No posts yet. Write your first one.</p>
    </div>
    @else
    <div class="post-list">
        @foreach($posts as $post)
        <article class="post-card">

            <div class="post-card__content">
                <h2 class="post-card__title">{{ $post->title }}</h2>
                <p class="post-card__body">{{ $post->body }}</p>
            </div>

            <div class="post-card__actions">
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn--ghost">Edit</a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn--danger"
                        onclick="return confirm('Delete this post?')">
                        Delete
                    </button>
                </form>
            </div>

        </article>
        @endforeach
    </div>
    @endif

</div>

@endsection