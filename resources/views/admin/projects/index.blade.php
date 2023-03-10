@extends('layouts.app')

@section('title', 'Project')

@section('content')
    <header>
        <h1 class="my-5">Project</h1>
    </header>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>{{ $project->updated_at }}</td>
                    <td class="d-flex justify-content-end align-item-center">
                        <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-small btn-primary">
                            <i class="fa-solid fa-eye"></i>
                        </a>

                        <form action="PROJECT" action="{{ route('admin.projects.destroy', $project->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="ms-2 btn btn-small btn-danger" type="submit">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <th scope="row" colspan="6" class="text-center">Non ci sono nuovi progetti</th>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection


@section('scripts')
    <script></script>
@endsection
