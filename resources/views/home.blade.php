@extends('layouts.app')

@section('content')
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        @auth
                        <div class="site-heading">
                            <h1>Selamat Datang</h1>
                            <span class="subheading">{{Auth::user()->names}}</span>
                        </div>
                        @else
                        <div class="site-heading">
                            <h1>JWP</h1>
                            <span class="subheading">Your Trusted</span>
                        </div>
                        @endauth
                        
                    </div>
                </div>
            </div>
        </header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
                <a href="/post/{{$post->id}}"><h1>{{$post->title}}</h1></a>
                <h3>{{$post->description}}</h3>
                <p>Created By {{$post->user->name}} at {{$post->created_at}}</p>
            @endforeach

            

        </div>
    </div>
</div>
@endsection
