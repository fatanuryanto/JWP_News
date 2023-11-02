@extends('layouts.app')

@section('content')
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{$post->title}}</h1>
                    <span class="meta">
                        Posted by
                        <a href="#!">{{$post->name}}</a>
                        on {{$post->created_at}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            @auth
                <a class="btn btn-primary" href=/post/edit/{{$post->id}}> Ubah Post</a>
            @endauth 
        </div>

        <br>

        <!--Isi Komentar-->
        <div class="col-md-8">
            @foreach($post->comment as $comment)
                <p>Name : {{$comment->name}}</p>
                <p>Email : {{$comment->email}}</p>
                <p>Komentar : {{$comment->comment}}</p>
                <a href="/comment/delete/{{$comment->id}}"><button>Hapus Komentar</button></a>
            @endforeach
         
        </div>

        

        <!--Form Komentar-->
        <div class="col-md-8">
            <form action="/post/comment/{$post->id}">
                <div class="modal-body">

                    <input type="text" name="post_id" value={{$post->id}} hidden>

                    <div class="form-group">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Komentar</label>
                        <textarea class="form-control" name="comment" id="message-text"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a class="btn btn-danger" href="/">Kembali</a>
                </div>
            </form>
        </div>

        
    </div>
</div>
@endsection
