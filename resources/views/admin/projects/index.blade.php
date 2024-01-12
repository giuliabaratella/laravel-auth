@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects</h1>

        <div class="container">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr>
                                <th>
                                    <a href="{{ route('admin.projects.show', $project->id) }}">
                                        {{ $project->title }}
                                    </a>
                                </th>
                                <td>
                                    <a href="{{ $project->link }}">
                                        {{ $project->link }}
                                    </a>
                                </td>
                                <td><a href="{{ route('admin.projects.edit', $project->id) }}">
                                        <button class="btn btn-success rounded-3 border-0 mx-5">
                                            <i class="fa-solid fa-pen" style="font-size: 0.7rem"></i>
                                        </button>
                                    </a>
                                </td>

                                <td>
                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger rounded-3 border-0 mx-5">
                                            <i class="fa-solid fa-trash" style="font-size: 0.7rem"></i>
                                        </button>
                                    </form>


                                </td>

                            </tr>
                        @empty
                            <div>No projects</div>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
        </div>


    </section>
@endsection
