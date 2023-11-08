@extends('layouts.admin')

@section('content')
<h1>Projects</h1>

<div class="table-responsive">
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
                <td>View Edit Delete</td>

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