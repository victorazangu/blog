@extends('layout')

@section('header')

<h1 class="text-center">Edit post</h1>
@endsection
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('post.update',$post) }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" >
                        </div>
                        <div class="form-group">
                            <label for="description">Post Description</label>
                            <input type="text" name="description" id="description" class="form-control" value="{{ $post->description }}" >
                        </div>

                        <div class="form-group">
                            <label for="body">Post Body</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control" value="" >{{ $post->body }}</textarea>
                        </div>
                        <!-- Drop down -->
                        {{--  <div>
                            <label for="categories"><span>Choose a category:</span></label>
                            <select name="category_id" id="categories" >
                                <option selected disabled>Select option </option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>  --}}

                        <div class="form-group">
                            <label for="imagePath">Post Image</label>
                            <input type="file" name="imagePath" id="imagePath" class="form-control" " >
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection