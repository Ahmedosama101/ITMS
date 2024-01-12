@extends('layouts.app')
 
 @section('body')
<div class="dashboard">
    <h1>Add New Project</h1>

    <!-- Form to Add New Project -->
    <form action="{{route('project.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <label for="name">Project Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="col mb-3">
                <label for="owner">Project Owner:</label>
                <input type="text" name="owner" id="owner" class="form-control" required>
            </div>
            <div class="col mb-3">
            <label for="planning">Project Type:</label>
                <div class="custom-dropdown">
                    <select name="type" id="type" class="inputsize form-control" required>
                        <option value="" disabled selected>Select Project Type</option> 
                        <option value="New System">New System</option>
                        <option value="System Enhancment">System Enhancment</option>
                    </select>
                </div>
            </div>
        </div>            
        <div class="row">
            <div class="col mb-3">
                <label for="startdate">Project Start Date:</label>
                <input type="date" name="startdate" id="startdate" class="inputsize form-control" required>
            </div>
            <div class="col mb-3">
                <label for="enddate">Project End Date:</label>
                <input type="date" name="enddate" id="enddate" class="inputsize form-control" required>
            </div>
            <div class="col mb-3">
                <label for="estimatedduration">Project Estimated Duration:</label>
                <input type="text" name="estimatedduration" id="estimatedduration" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="dev_methodology">Project Development Methodology:</label>
                <input type="text" name="dev_methodology" id="dev_methodology" class="form-control" required>
            </div>
            <div class="col mb-3">
            <label for="dev_platform">Project System Platform:</label>
                <div class="custom-dropdown">
                    <select name="dev_platform" id="dev_platform" class="inputsize form-control" required>
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
                    <select name="deployment_type" id="deployment_type" class="inputsize form-control" required>
                        <option value="" disabled selected>Select Project Deployment Type</option> 
                        <option value="Cloud">Cloud</option>
                        <option value="On-Premises">On-Premises</option>
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
                    <option value="" disabled selected>Select Project Lead Developer</option> 
                    @foreach ($developers as $developer)
                        <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        </div>
        
        <div class="col mb-3">
            <?php
            $developers = \App\Models\User::where('role', '4')->get();
            ?>
            <label for="developer">Project Developers:</label>    
            <div class="mt-2" required>
                @foreach ($developers as $developer)
                    <div class="form-check" >
                        <input class="form-check-input" type="checkbox" name="developers[]" value="{{ $developer->id }}" id="developer_{{ $developer->id }}">
                        <label class="form-check-label" for="developer_{{ $developer->id }}">
                            {{ $developer->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Add Project</button>
    </form>
</div>
@endsection