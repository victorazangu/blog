@extends('layout')
@section('header')

<nav class="navbar navbar-expand-lg navbar-dark text-light bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" aria-label="Search" name="search" placeholder="Search...">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="row">
                <div class="col">
                    <h3 class="text-light m-2 p-1">Categories:</h3>
                </div>
            </div>
            <div class="row">

                <li class="nav-item ">
                    @foreach ($categories as $category)
                <li><a class="btn-outline-light m-2 p-1" href="{{route('post.index', ['category' => $category->name ])}}">{{ $category->name }}</a></li>
                @endforeach


            </div>


    </div>
</nav>
{{-- <main class="container">
    <h2 class="header-title">All Blog Posts</h2>
   @include('includes.flash-message')
    <div class="searchbar">
        <form action="">
            <input type="text" placeholder="Search..." name="search" />

            <button type="submit">
                <i class="fa fa-search"></i>
            </button>

        </form>
    </div>
    <div class="categories">
        <ul>
            @foreach ($categories as $category)
                <li><a href="{{route('post.index', ['category' => $category->name ])}}">{{ $category->name }}</a></li>
@endforeach
</ul>
</div> --}}
@endsection
@section('main')
<!-- main -->

<section class="cards-blog latest-blog">
    @forelse($posts as $post)
    <div class="card-blog-content">
        @auth
        @if (auth()->user()->id === $post->user->id)
        <div class="post-buttons">
            <a href="{{ route('post.edit', $post) }}">Edit</a>
            <form action="{{ route('post.destroy', $post) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value=" Delete">
            </form>
        </div>
        @endif
        @endauth
        <h4 class="text-center">
            <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a>
        </h4>
        <a href="{{ route('post.show', $post) }}">
            <img src="{{ asset($post->imagePath) }}" alt="" />
        </a>
        <p>
            Published: {{ $post->created_at->diffForHumans() }}
            <span>Written By {{ $post->user->name }}</span>
        </p>

        <p>{{ $post->description }}</p>

    </div>
    @empty
    <p>Sorry, currently there is no blog post related to that search!</p>
    @endforelse

</section>
<!-- pagination -->
<div class="text-center">
    {{ $posts->links('pagination::default') }}
</div>



<br>
@endsection
