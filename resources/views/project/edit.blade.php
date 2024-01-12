@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit {{ $project->name }} project information</h1>
    <hr />
    <form action="{{ route('project.update', $project->projectsid) }}" method="POST">

        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $project->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Owner</label>
                <input type="text" name="owner" class="form-control" placeholder="owner" value="{{ $project->owner }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="planning">Project Type:</label>
                <div class="custom-dropdown">
                    <select name="type" id="type" class="inputsize form-control">
                        <option value="" disabled selected>Select Project Type</option> 
                        <option value="New System"{{ $project->type == 'New System' ? 'selected' : '' }}>New System</option>
                        <option value="System Enhancment"{{ $project->type == 'System Enhancment' ? 'selected' : '' }}>System Enhancment</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="row">
        <div class="col mb-3">
    <?php
    $developers = \App\Models\User::where('role', '3')->get();
    ?>
    <label for="leaddeveloper">Project Lead Developer:</label>
    <div class="custom-dropdown">
    <select name="leaddeveloper" id="leaddeveloper" class="inputsize form-control" required>
        @foreach ($developers as $developer)
            <option value="{{ $developer->id }}"
                @if($developer->id == $project->leadDeveloper->id) selected @endif
            >
                {{ $developer->name }}
            </option>
        @endforeach
    </select>
</div>
</div>


            <div class="col mb-3">
    <?php
    $developers = \App\Models\User::where('role', '4')->get();

    // Fetch the developer IDs associated with the project from the database
    $projectDeveloperIds = DB::table('project_user') // replace 'project_developer' with your actual pivot table name
                            ->where('projectid', $project->projectsid)
                            ->pluck('userid')
                            ->toArray();
    ?>
    <label for="developer">Project Developers:</label>    
    <div class="mt-2">
        @foreach ($developers as $developer)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="developers[]" value="{{ $developer->id }}" id="developer_{{ $developer->id }}"
                @if(in_array($developer->id, $projectDeveloperIds)) checked @endif
                >
                <label class="form-check-label" for="developer_{{ $developer->id }}">
                    {{ $developer->name }}
                </label>
            </div>
        @endforeach
    </div>
</div>
<div class="row">
            <div class="col mb-3">
                <label for="startdate">Project Start Date:</label>
                <input type="date" name="startdate" id="startdate" class="inputsize form-control" value="{{ $project->startdate }}" required>
            </div>
            <div class="col mb-3">
                <label for="enddate">Project End Date:</label>
                <input type="date" name="enddate" id="enddate" class="inputsize form-control" value="{{ $project->enddate }}" required>
            </div>
            <div class="col mb-3">
            <label class="form-label">estimatedduration</label>
                <input type="text" name="estimatedduration" class="form-control" placeholder="estimatedduration" value="{{ $project->estimatedduration }}" >
            </div>  
        </div>
<div class="row">
            <div class="col mb-3">
                <label for="dev_methodology">Project Development Methodology:</label>
                <input type="text" name="dev_methodology" id="dev_methodology" class="form-control" value="{{ $project->dev_methodology }}" required>
            </div>
            <div class="col mb-3">
            <label for="dev_platform">Project System Platform:</label>
                <div class="custom-dropdown">
                    <select name="dev_platform" id="dev_platform" class="inputsize form-control"value="{{ $project->dev_platform }}" required>
                        <option value="" disabled selected>Select Project Type</option> 
                        <option value="Web-Based">Web-Based</option>
                        <option value="Mobile">Mobile</option>
                        <option value="Stand-Alone">Stand-Alone</option>
                    </select>
                </div>
            </div>
            <div class="col mb-3">
            <label for="deployment_type">Project Deployment Type:</label>
                <div class="custom-dropdown">
                    <select name="deployment_type" id="deployment_type" class="inputsize form-control" value="{{ $project->deployment_type }}" required>
                        <option value="" disabled selected>Select Project Deployment Type</option> 
                        <option value="Cloud">Cloud</option>
                        <option value="On-Premises">On-Premises</option>
                    </select>
                </div>
            </div>
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