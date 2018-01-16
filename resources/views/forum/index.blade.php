@extends('layouts.main')

@section('title', '| Forum')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="margin-bottom-20">
                <h1 class="text-white">FORUM</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            @foreach ($threads as $thread)
                    <div class="card margin-ten">
                        <div class="card-header">
                            <h5 class="card-title">
                                {{ $thread->title }}
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-left">{{ substr(strip_tags($thread->body), 0, 150)}}{{ strlen(strip_tags($thread->body)) > 150 ? "&#8230;" : "" }} <a class="card-link" href="{{ $thread->path() }}">read more</a></p>
                        </div>
                        <div class="card-footer text-muted">
                            {{ $thread->creator->name }}
                        </div>
                    </div>
            @endforeach
        </div>
        <div class="col-md-6 offset-md-3">
            {{ $threads->links() }}
        </div>
    </div>
@stop
