@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{ $project->title }}</h1>
        <h3><a href="{{ $project->link }}">{{ $project->link }}</a></h3>

        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
        <p>{{ $project->description }}</p>
    </section>
@endsection
