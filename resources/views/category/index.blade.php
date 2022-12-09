@extends('layout')
@section('header')
<h1 class="text-center" style="padding-top: 50px;">All Categories</h1>

@endsection
@section('main')

<section id="about" class="about-section  section-padding bd-bottom " data-scroll-index="1">

    <div class="card" style="max-width: 60%;margin-left:auto;margin-right:auto">
        <div class="card-header">
            <b style="color: rgb(29, 29,29);font-weight:bolder">Categories List</b>
        </div>
        <div class="card-body">
            <div>

                <table class="table">
                    <thead class="thead-dark table-striped">
                        <tr>
                            <th scope="col">Category id</th>
                            <th scope="col">Category name</th>
                            <th scope="col">action</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    @include('includes.flash-message')
                    @foreach ($categories as $category)
                    <tbody>
                        <tr>
                            <th scope="row" style="color: rgb(29, 29,29);font-weight:bolder">{{ $category->id }}</th>
                            <td style="color: rgb(29, 29,29);font-weight:bolder">{{ $category->name }}</td>
                            <td style="color: rgb(29, 29,29);font-weight:bolder"> <a style="color: rgb(29, 29,29);font-weight:bolder" href="{{ route('categories.edit', $category) }}">Edit</a></td>
                            <td>
                                <form action="{{route('categories.destroy', $category)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <input style="color: rgb(29, 29,29);font-weight:bolder" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>


    <div class="card mt-4 text-center" style="max-width: 40%;margin-left:auto;margin-right:auto">
        <div class="card-header">
            <b> <a href="{{route('categories.create')}}" style="color: rgb(29, 29,29);font-weight:bolder">Create Category<span>&#8594;</span></a></b>
        </div>

    </div>
    </div>
</section>


@endsection
