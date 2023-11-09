@extends('layouts.admin')

@section('content')

<h2 class="pt-4">Edit project</h2>


@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

</div>
@endif


<form action="{{route('admin.projects.update', $project)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Add your project title" aria-describedby="helpId" value="{{old('title', $project->title)}}">
        <small id="helpTitle" class="text-muted">Help text</small>
    </div>
    @error('title')
    <div class="text-danger">{{$message}}</div>
    @enderror

    <div class="mb-3">
        <label for="cover_image" class="form-label">Choose file</label>
        <input type="file" class="form-control" name="cover_image" id="cover_image" placeholder="" aria-describedby="fileHelpId">
        <div id="fileHelpId" class="form-text">Add an image</div>
    </div>
    @error('cover_image')
    <div class="text-danger">{{$message}}</div>
    @enderror

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{old('description', $project->description)}}</textarea>
    </div>
    @error('description')
    <div class="text-danger">{{$message}}</div>
    @enderror

    <button class="btn btn-primary" type="submit">Update</button>

</form>


@endsection