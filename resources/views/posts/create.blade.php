@extends('layout')

@section('header')

<h1 class="text-center">Create post</h1>
@endsection

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>

                <div class="card-body">


                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Post Title</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Post Description</label>
                            <input type="text" name="description" class="form-control" value="{{ old('description') }}">
                        </div>


                        <div class="form-group">
                            <label for="">Post Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{ old('body') }}</textarea>
                        </div>
                        <!-- Drop down -->
                        <div>
                            <label for="categories"><span>Choose a category:</span></label>
                            <select name="category_id" id="categories">
                                <option selected disabled>Select option </option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Post Image</label>
                            <input type="file" name="imagePath" class="form-control">
                        </div>

                        <input  class="btn btn-primary" type="submit" value="Submit" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        CKEDITOR.replace('body');
    </script>
@endsection
