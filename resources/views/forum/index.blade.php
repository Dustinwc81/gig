@extends('layouts.main')

@section('title', 'JH2 Gigs | Forum')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="margin-bottom-20">
                <h1 class="text-white">FORUM</h1>
                <a href="{{ route('forum.create')}}" class="btn btn-primary">Start a conversation</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            @foreach ($threads as $thread)
                    <div class="card margin-ten-around">
                        <div class="card-header">
                            <h5 class="card-title">
                                {{ $thread->title }}
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-left">{{ substr(strip_tags($thread->body), 0, 150)}}{{ strlen(strip_tags($thread->body)) > 150 ? "&#8230;" : "" }} <a class="card-link" href="{{ $thread->path() }}">read more</a></p>
                        </div>
                        <div class="card-footer text-light">
                            {{ $thread->creator->name }}
                        </div>
                    </div>
            @endforeach
        </div>
        <div class="col-md-6 offset-md-5">
            {{ $threads->links() }}
        </div>
    </div>
@stop
