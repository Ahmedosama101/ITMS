@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit {{ $user->name }} information</h1>
    <hr />
    <form action="{{ route('user.update', $user->id) }}" method="POST">

        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $user->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="email" value="{{ $user->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="password" value="{{ $user->password }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Role</label>
                <div class="custom-dropdown">
                    <select class="form-control" name="role" id="role">
                        <option value="1"{{ $user->role == '1' ? 'selected' : '' }}>Admin</option>
                        <option value="2"{{ $user->role == '2' ? 'selected' : '' }}>Manager</option>
                        <option value="3"{{ $user->role == '3' ? 'selected' : '' }}>Lead Developer</option>
                        <option value="4"{{ $user->role == '4' ? 'selected' : '' }}>Developer</option>
                        <option value="5"{{ $user->role == '5' ? 'selected' : '' }}>Owner</option>

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