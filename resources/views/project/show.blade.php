@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Project Details</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Project ID</label>
            <input type="text" name="projectsid" class="form-control" placeholder="projectsid" value="{{ $project->projectsid }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Project Name</label>
            <input type="text" name="name" class="form-control" placeholder="name" value="{{ $project->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Owner</label>
            <input type="text" name="owner" class="form-control" placeholder="owner" value="{{ $project->owner }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Type</label>
            <input type="text" class="form-control" name="type" placeholder="type" value="{{ $project->type }}"readonly>
        </div>
    </div>
    <div class="row">      
        <div class="col mb-3">
            <label class="form-label">Lead Developer</label>
            <input type="text" class="form-control" name="leaddeveloper" placeholder="leaddeveloper" value="{{ $project->leaddeveloper }}"readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Developers</label>
            <input type="text" name="developer" class="form-control" placeholder="developer" value="{{ $project->developer }}" readonly>
        </div>
    </div>
@endsection