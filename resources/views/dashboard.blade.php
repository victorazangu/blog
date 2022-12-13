@extends('layout')

@section('main')
<x-app-layout>

    <div class="py-12" style="background-color: #292929;color:#fff">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="background-color: #292929;color:#fff">
            <div class="overflow-hidden shadow-sm sm:rounded-lg" style="background-color: #292929;color:#fff">
                <div class="p-6  border-b border-white-200" style="background-color: #292929;color:#fff">


                    <div class="dashboard" style="background-color: #292929;color:#fff">
                        {{-- <ul>
                            <li><a href="{{route('post.create')}}">Create Post</a></li>
                        <li><a href="{{route('categories.create')}}">Create Category</a></li>
                        <li><a href="{{route('categories.index')}}">Categories List</a></li>
                        </ul> --}}
                        <section class="cards-blog latest-blog border-b border-white-200">
                            @forelse($posts as $post)
                            <div class="card-blog-content">
                                <div class="post-buttons">
                                    <a class="bnt bnt-success m-2" href="{{ route('post.edit', $post) }}">Edit</a>
                                    <form action="{{ route('post.destroy', $post) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input class="m-2" type="submit" value=" Delete">
                                    </form>
                                </div>
                                <h4>
                                    <a class="text-center" href="{{ route('post.show', $post) }}">{{ $post->title }}</a>
                                </h4>
                                <a class="text-center" href="{{ route('post.show', $post) }}">
                                <img class="text-center" src="{{asset($post->imagePath)}}" alt="" />
                                </a>
                                <p>
                                    Published: {{ $post->created_at->diffForHumans() }}
                                    <span>Written By {{ $post->user->name }}</span>
                                </p>
                                <p class="text-center">{{ $post->description }}</p>

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
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
@endsection
