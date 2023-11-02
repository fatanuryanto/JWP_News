@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2> Hasil Pencarian </h2>
            @foreach($posts as $post)
                <a href="/post/{{$post->id}}"><h1>{{$post->title}}</h1></a>
                <h3>{{$post->description}}</h3>
                <p>Created By {{$post->user->name}} at {{$post->created_at}}</p>
            @endforeach

            @auth
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Buat Post Baru
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Buat Post Baru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/storePost">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Judul</label>
                                    <input type="text" name="title" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Isi </label>
                                    <textarea class="form-control" name="description" id="message-text"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endauth

        </div>
    </div>
</div>
@endsection
