@extends('layouts.admin')

@section('content')

@if (session('message'))
<div class="alert alert-success alert-dismissible fade show pt-5" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {{session('message')}}
</div>
@endif





<h1 class="pt-5">Projects</h1>

<a href="{{route('admin.projects.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new project</a>


<table class="table table-primary">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Actions</th>

        </tr>
    </thead>
    <tbody>

        @forelse ($projects as $project)
        <tr class="">
            <td scope="row">{{$project->id}}</td>


            <td>
                @if ($project->cover_image)
                <img width="100" src="{{asset('storage/' . $project->cover_image)}}">
                @else
                N/A
                @endif
            </td>
            <td>{{$project->title}}</td>
            <td> <a href="{{route('admin.projects.show', $project)}}"><i class="fa-solid fa-eye"></i></a>
                <a href="{{route('admin.projects.edit', $project)}}"><i class="fa-solid fa-file-pen"></i></a>
                Delete
            </td>

        </tr>

        @empty
        <tr class="">
            <td scope="row">No projects yet!</td>
        </tr>
        @endforelse

        {{$projects->links('pagination::bootstrap-5')}}

    </tbody>
</table>

</div>



@endsection