@extends('layouts.main')

@section('title', '| Forum')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        {{ $thread->creator->name }} Posted: <strong>{{ $thread->title }}</strong>
                    </div>
                    <div class="card-body text-left">
                        {{ $thread->body }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row margin-ten">
            <div class="col-md-8 offset-md-2">

                @foreach ($thread->replies as $reply)
                    @include('forum.reply')
                @endforeach

            </div>
        </div>


        @if(auth()->check())
            <div class="row">
                <div class="col-md-8 offset-md-2 form-group">
                    <form class="" action="{{ $thread->path() . '/replies' }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea name="body" id="body" class="form-control" placeholder="Add a comment..." rows="5" cols="80"></textarea>
                        </div>

                        <button type="submit" class="btn btn-secondary left">Reply</button>
                    </form>
                </div>
            </div>
        @else
            <p class="text-center text-white">Please <a href="{{ route('login') }}">Sign in</a> to participate in the discussion</p>
        @endif

    </div>

@stop
