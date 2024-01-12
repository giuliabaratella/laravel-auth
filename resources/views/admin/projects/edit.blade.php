@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Edit {{ $project->title }}</h1>
        <main>

            <div id="create-posts">

                <div class="container">
                    <div class="py-5">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card p-2">
                            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="title" name="title" value="{{ $project->title }}" required maxlength="255"
                                        minlength="3">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="description" class="form-label" cols="30"
                                        rows="10">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                        value="">
                                                {{ $project->description }}
                                            </textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Image Url</label>

                                    <input type="text" id="image" name="image" value="{{ $project->image }}"
                                        class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="link" class="form-label">Project Link Url</label>

                                    <input type="text" id="link" name="link" value="{{ $project->link }}"
                                        class="form-control @error('link') is-invalid @enderror">
                                    @error('link')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>



                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-primary">Reset</button>

                            </form>
                        </div>
                    </div>
                </div>
        </main>
    </section>
@endsection
