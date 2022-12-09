@extends('layout')
@section('header')
<h1 class="text-center" style="padding-top: 50px;">Create New Category!</h1>
<hr>
@endsection
@section('main')
<section id="about" class="about-section  section-padding bd-bottom " data-scroll-index="1">

    <div class="card" style="max-width: 60%;margin-left:auto;margin-right:auto">
        <div class="card-header">
            <b style="color: rgb(29, 29,29);font-weight:bolder"> New Category!</b>
        </div>
        <div class="card-body">
            <div>
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <!-- name -->
                    <label for="name"><span><b style="color: rgb(29, 29,29);font-weight:bolder">Name</b></span></label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" />


                    <!-- Button -->
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </div>
    </div>


    <div class="card mt-4 text-center" style="max-width: 40%;margin-left:auto;margin-right:auto">
        <div class="card-header">
            <b>  <a href="{{route('categories.index')}}" style="color: rgb(29, 29,29);font-weight:bolder">Categories list <span>&#8594;</span></a></b>
        </div>

    </div>
    </div>
</section>


@endsection
