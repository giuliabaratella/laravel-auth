@extends('layouts.app')
@section('content')
    <h1 class="mb-3">Projects Dashboard</h1>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="row">
            <section id="all-projects" class="col-12 col-lg-8 mb-4">

                {{-- all projects card  --}}
                <div class="card h-100">
                    <div class="card-header">
                        <h2>All projects</h2>
                    </div>
                    <div class="card-body">
                        <table class="table p-3">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th class="d-none d-lg-table-cell">Link</th>
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
                                        <td class="d-none d-lg-table-cell">
                                            <a href="{{ $project->link }}">
                                                {{ $project->link }}
                                            </a>
                                        </td>
                                        <td><a href="{{ route('admin.projects.edit', $project->id) }}">
                                                <button class="btn btn-success rounded-3 border-0">
                                                    <i class="fa-solid fa-pen" style="font-size: 0.7rem"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.projects.destroy', $project->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger rounded-3 border-0">
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
            </section>

            <section class="col-12 col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h2>Section 2</h2>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos accusantium consequuntur corrupti,
                            fuga voluptatibus esse animi dignissimos, provident doloremque dolore adipisci nihil, molestiae
                            minus aut est fugit. Cupiditate nulla fugiat earum minus incidunt dolor vel quas adipisci,
                            voluptatibus repellat tempore eius mollitia odio doloremque aperiam odit illo! Pariatur voluptas
                            provident molestiae voluptates atque quo maiores sapiente reiciendis nobis doloribus repellendus
                            modi, eaque sit libero aspernatur dignissimos ipsam! Quo, aut velit modi hic perferendis
                            distinctio quos, suscipit maiores eos consequuntur facere delectus eveniet exercitationem
                            assumenda quasi est impedit obcaecati veniam dicta dolorem unde? Quae unde incidunt rem sequi,
                            beatae eum est.</p>
                    </div>
                </div>
            </section>

        </div>

    </div>
    </div>
@endsection
