
@extends('layouts.app')

@section('content')

<!-- <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">

    </div>
</div> -->

  



    <div class="row">
    <div class="col-md-12">
        <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
            <div class="text-white text-center py-5 px-4 my-5">
                <div>
                    <h1 class="card-title pt-3 mb-5 font-bold"><strong>Create your beautiful website with MDBootstrap</strong></h1>
                    <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat,
                        laboriosam, voluptatem, optio vero odio nam sit officia accusamus
                        minus error nisi architecto nulla ipsum dignissimos. Odit sed qui,
                        dolorum!.</p>
                    <a class="btn btn-outline-white btn-rounded"><i class="fa fa-clone left"></i> View project</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
