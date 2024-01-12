@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Update Status {{ $project->name }}</h1>
    <hr />
    <form action="{{ route('project.update', $project->projectsid) }}" method="POST">
        
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Project Name</label>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $project->name }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
            <label class="form-label">Status</label>
             <div class="custom-dropdown">
                <select class="inputsize form-control" name="status" id="status">
                        <option value="" disabled selected>Select Project Status</option> 
                        <option value="On Target" {{ $project->status == 'On Target' ? 'selected' : '' }}>On Target</option>
                        <option value="Ahead of Target" {{ $project->status == 'Ahead of Target' ? 'selected' : '' }}>Ahead of Target</option>
                        <option value="Off Target" {{ $project->status == 'Off Target' ? 'selected' : '' }}>Off Target</option>
                        <option value="Completed" {{ $project->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                </select>
             </div>
            </div>
            <div class="col mb-3">
            <label class="form-label">Initiation</label>
                <div class="custom-dropdown">
                    <select class="inputsize form-control" name="initiation" id="initiation">
                        <option value="" disabled selected>Select Project Status</option> 
                        <option value="On Target" {{ $project->initiation == 'On Target' ? 'selected' : '' }}>On Target</option>
                        <option value="Ahead of Target" {{ $project->initiation == 'Ahead of Target' ? 'selected' : '' }}>Ahead of Target</option>
                        <option value="Off Target" {{ $project->initiation == 'Off Target' ? 'selected' : '' }}>Off Target</option>
                        <option value="Completed" {{ $project->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>           
             </div>
        </div>
        <div class="row">
            <div class="col mb-3">
            <label class="form-label">Planning</label>
                <div class="custom-dropdown">
                    <select class="inputsize form-control" name="planning" id="planning">
                        <option value="" disabled selected>Select Project Status</option> 
                        <option value="On Target" {{ $project->planning == 'On Target' ? 'selected' : '' }}>On Target</option>
                        <option value="Ahead of Target" {{ $project->planning == 'Ahead of Target' ? 'selected' : '' }}>Ahead of Target</option>
                        <option value="Off Target" {{ $project->planning == 'Off Target' ? 'selected' : '' }}>Off Target</option>
                        <option value="Completed" {{ $project->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>            
            </div>
            <div class="col mb-3">
            <label class="form-label">Design</label>
                <div class="custom-dropdown"> 
                    <select class="inputsize form-control" name="design" id="design">
                        <option value="" disabled selected>Select Project Status</option> 
                        <option value="On Target" {{ $project->design == 'On Target' ? 'selected' : '' }}>On Target</option>
                        <option value="Ahead of Target" {{ $project->design == 'Ahead of Target' ? 'selected' : '' }}>Ahead of Target</option>
                        <option value="Off Target" {{ $project->design == 'Off Target' ? 'selected' : '' }}>Off Target</option>
                        <option value="Completed" {{ $project->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                  </select>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col mb-3">
           <label class="form-label">Testing</label>
                <div class="custom-dropdown">
                    <select class="inputsize form-control" name="testing" id="testing">
                        <option value="" disabled selected>Select Project Status</option> 
                        <option value="On Target" {{ $project->testing == 'On Target' ? 'selected' : '' }}>On Target</option>
                        <option value="Ahead of Target" {{ $project->testing == 'Ahead of Target' ? 'selected' : '' }}>Ahead of Target</option>
                        <option value="Off Target" {{ $project->testing == 'Off Target' ? 'selected' : '' }}>Off Target</option>
                        <option value="Completed" {{ $project->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                  </select>
                </div>
           </div>
           <div class="col mb-3">
                <label class="form-label">Deploy</label>
                  <div class="custom-dropdown">
                    <select class="inputsize form-control" name="deploy" id="deploy">
                        <option value="" disabled selected>Select Project Status</option> 
                        <option value="On Target" {{ $project->deploy == 'On Target' ? 'selected' : '' }}>On Target</option>
                        <option value="Ahead of Target" {{ $project->deploy == 'Ahead of Target' ? 'selected' : '' }}>Ahead of Target</option>
                        <option value="Off Target" {{ $project->deploy == 'Off Target' ? 'selected' : '' }}>Off Target</option>
                        <option value="Completed" {{ $project->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                  </select>
                </div>
           </div>   
        </div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection