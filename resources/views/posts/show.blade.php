@extends('layout');

@section('header')
<div class="dl-side-content">
    <div class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </div>

    <header class=" ">
        <h1 class="text-center">{{Str::title($post->title)}}</h1>
    </header>

    @endsection

@section('main')
    <section id="about" class="about-section p-2 m-2  section-padding bd-bottom " data-scroll-index="1">
        <p class="time-and-author">
            {{$post->created_at->diffForHumans()}}
            <span>Written By {{ $post->user->name}}</span>
          </p>

        <div class="card text-center " style="background-color: #292929;color:#999;border:1px solid #cba982">

            <img class="card-img-top text-center" src="{{asset($post->imagePath)}}" alt="Card image cap">
            <div class="card-body text-center">

                <p class="card-text">{{$post->body}}</p>

            </div>
        </div>
    </section>
    <section class="recommended  m-2 m-2 mx-5">
        <p>Related</p>
        <div class="recommended-cards">
            @foreach ($relatedPosts as $relatedPost )
            <a href="{{ route('post.show',$post) }}">
                <div class="recommended-card">
                    <img src="{{asset($relatedPost->imagePath)}}" alt="" loading="lazy" />
                    <h4>
                        {{$relatedPost->title}}
                    </h4>
                </div>
            </a>
            @endforeach
        </div>
    </section>
@endsection
