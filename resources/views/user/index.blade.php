@extends('layouts.app')
 
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">User Management Dashboard</h1>
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
            </tr>
        </thead>
        <tbody>
    <?php
    $roles = [
        '1' => 'Admin',
        '2' => 'Manager',
        '3' => 'Lead Developer',
        '4' => 'Developer',
        '5' => 'Owner'
    ];
    ?>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['name'] }}</td>
            <td>{{ $roles[$user['role']] }}</td>
            <td>{{ $user['email'] }}</td>
            <!-- <td type="password">{{ $user['password'] }}</td> -->
        </tr>
    @endforeach
</tbody>

    </table>
@endsection