@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{ $project->title }}</h1>
        <h3><a href="{{ $project->link }}">{{ $project->link }}</a></h3>

        @if ($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
        @endif
        <p>{{ $project->description }}</p>
    </section>
@endsection
