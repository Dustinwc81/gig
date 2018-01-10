@extends('layouts.main')

@section('title', '| Forum')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="border border-white margin-bottom-20">
                <h1 class="text-white">FORUM</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            @foreach ($threads as $thread)
                    <div class="card margin-ten">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $thread->title }}
                            </h5>
                            <p class="card-text text-left">{{ substr(strip_tags($thread->body), 0, 150)}}{{ strlen(strip_tags($thread->body)) > 150 ? "&#8230;" : "" }} <a class="card-link" href="">read more</a></p>

                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@stop
