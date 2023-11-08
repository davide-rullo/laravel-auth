@extends('layouts.admin')

@section('content')

<h1>Add project</h1>


@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

</div>
@endif


<form action="{{route('admin.projects.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Add your project title" aria-describedby="helpId">
        <small id="helpTitle" class="text-muted">Help text</small>
    </div>

    <div class="mb-3">
        <label for="cover_image" class="form-label">Choose file</label>
        <input type="file" class="form-control" name="cover_image" id="cover_image" placeholder="" aria-describedby="fileHelpId">
        <div id="fileHelpId" class="form-text">Add an image</div>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Button</button>

</form>


@endsection