@extends('layouts.app')
 
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Delete User</h1>
    </div>
    <br>
    <table class="table rounded shadow-lg p-3 mb-5 bg-white rounded">
        <thead class="thead-dark">
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
                 <!--  <th>Password</th>  </td> -->                
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['role'] }}</td>
                    <td>{{ $user['email'] }}</td>
                 <!--   <td type="password">{{ $user['password'] }}</td> -->
                    <td>    
                        <form action="{{route('user.destroy',$user->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Confirm DELETE? this student {{$user->name}}')">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection