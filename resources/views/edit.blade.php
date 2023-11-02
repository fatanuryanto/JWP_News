@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <form action="/post/update/{{$post->id}}">
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Judul</label>
                    <input type="text" name="title" class="form-control" id="recipient-name" value={{$post->title}}>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Isi </label>
                    <textarea class="form-control" name="description" id="message-text">{{$post->description}}</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="/">Kembali</a>
                <input type="submit" class="btn btn-primary" value="Ubah">
            </div>
        </form>
    </div>
</div>
@endsection
