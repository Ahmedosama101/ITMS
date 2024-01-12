@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Submit Progress Report for {{ $project->name }} project</h1>
    <hr />
    <form action="{{ route('project.storereport', $project->projectsid) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Project Name</label>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $project->name }}" disabled>
            </div>
            <div class="col mb-3">
                <label for="project_id" class="form-label">Project ID</label>
                <input type="text" name="project_id" class="form-control" if="project_id"  value="{{ $project->projectsid }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label for="progress_date">Progress Date:</label>
                <input type="date" name="progress_date" id="progress_date" class="form-control" required>
            </div>
            <div class="col mb-3">
                <label for="description">Description:</label>
                <input name="description" id="description" class="form-control" required></input>           
             </div>
        </div>
       
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">View {{ $project->name }} Progress Report</button>
            </div>
        </div>
    </form>
@endsection