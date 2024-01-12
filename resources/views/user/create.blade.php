@extends('layouts.app')
 
 @section('body')
 <div class="dashboard">
    <h1>Add New User</h1>

    <!-- Form to Add New User -->
    <form action="{{route('user.store')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="name">User Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <div class="custom-dropdown">
                    <select class="form-control" name="role" id="role" required>
                        <option value="" disabled selected>Select user role</option>
                        <option value="1">Admin</option>
                        <option value="2">Manager</option>
                        <option value="3">Lead Developer</option>
                        <option value="4">Developer</option>
                        <option value="5">Owner</option>
                    </select>
                </div>            
            </div>
        <br></br>
        <button type="submit" class="btn btn-primary">Add User</button>
    </form>
</div>
@endsection