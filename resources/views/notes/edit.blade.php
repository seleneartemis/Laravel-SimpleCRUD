@extends('layouts.app')
@section('content')

<div class="row">
    <div>
        <div>
            <h2>Edit Post</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('notes.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('notes.update',$note->id) }}" method="POST">
    @csrf

    @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" value="{{ $note->title }}" class="form-control" placeholder="Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Info:</strong>
                <textarea class="form-control" style="height:150px" name="details" placeholder="Description">{{ $note->details}}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection