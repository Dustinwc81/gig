@extends('layouts.main')

@section('title', '| Forum')

@section('content')

    @foreach ($threads as $thread)
        <div>
            {{ $thread->body }}
        </div>
    @endforeach
    <div>
        What the shit?
    </div>

@stop
