@extends('layout')


@section('main')
    <main class="container" style="background-color: #292929;color:#fff">
        <section id="contact-us">
            <h1 style="padding-top: 50px;color;" class="text-light">Create New Post!</h1>
            @include('includes.flash-message')
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Title -->
                    <label for="title"><span>Title</span></label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" />
                    @error('title')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- Description -->
                    <label for="description"><span>Description</span></label>
                    <input type="text" id="description" name="description" value="{{ old('description') }}" />
                    @error('description')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- Image -->
                    <label for="image"><span>Image</span></label>
                    <input type="file" id="image" name="image" />
                    @error('image')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror

                    <!-- Drop down -->
                    <label for="categories"><span>Choose a category:</span></label>
                    <select name="category_id" id="categories">
                        <option selected disabled>Select option </option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror

                    <!-- Body-->
                    <label for="body"><span>Body</span></label>
                    <textarea id="body" name="body">{{ old('body') }}</textarea>
                    @error('body')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- Button -->
                    <input class="bg-success" type="submit" value="Submit" />
                </form>
            </div>

        </section>
    </main>
@endsection
{{--  @section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>

                <div class="card-body">


                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" name="title" id="title" class="form-control" required minlength="2" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="description">Post Description</label>
                            <input type="text" id="description" name="description" class="form-control" required minlength="10" maxlength="500">
                        </div>


                        <div class="form-group">
                            <label for="body">Post Body</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control" required minlength="10"></textarea>
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
                            <label for="imagePath">Post Image</label>
                            <input type="file" name="imagePath" id="imagePath" class="form-control">
                        </div>

                        <input  class="btn btn-primary" type="submit" value="submit" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection  --}}

@section('scripts')
    <script>
        CKEDITOR.replace('body');
    </script>
@endsection
