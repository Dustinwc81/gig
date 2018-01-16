@extends('layouts.main')

@section('title', '| Create')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="margin-bottom-20">
                <h1 class="text-white">Create a Thread</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <form method="POST" action="{{ route('threads.store') }}">
                {{ csrf_field() }}
                <div class="form-group text-left">
                    <label for="title" class="text-white text-left">Title</label>
                    <input type="text" name='title' id="title" class="form-control" placeholder="Thread title">
                </div>
                <div class="form-group text-left">
                    <label for="body" class="text-white text-left">Body</label>
                    <textarea type="text" name='body' id="body" class="form-control" placeholder="post here..." cols="80" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>

@endsection
