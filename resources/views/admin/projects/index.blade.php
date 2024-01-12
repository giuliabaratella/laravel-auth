@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects</h1>

        <ul>
            @foreach ($projects as $project)
                <li>
                    <a href="{{ route('admin.projects.show', $project->id) }}">
                        {{ $project->title }}
                    </a>
                </li>
            @endforeach

        </ul>
    </section>
@endsection
