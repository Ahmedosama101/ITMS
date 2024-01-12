@extends('layouts.app')
 
@section('body')
<div class="dashboard">

    <h1 class="mb-0">Project Request</h1>
    <hr />
    <form method="POST" action="{{ route('project.storerequest') }}">
    @csrf

    <div class="row">
            <div class="col mb-3">
                <label for="name">Project Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
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
                <label for="description">Project Description:</label>
                <textarea type="text" name="description" id="description" class="form-control" placeholder="Enter the project description"required></textarea>
            </div>   
    </div>   
        <br>
        <button type="submit" class="btn btn-primary">Send Project Request</button>
</form>
</div>

@endsection