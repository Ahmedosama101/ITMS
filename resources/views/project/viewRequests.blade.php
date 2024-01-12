@extends('layouts.app')
 
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Projects Requests</h1>
    </div>
    <br>
    <table class="table rounded shadow-lg p-3 mb-5 bg-white rounded">
        <thead class="thead-dark">
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Project Name</th>
                <th>Type</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($req as $req)
                <tr>
                    <td>{{ $req['user_id'] }}</td>
                    <td>{{ $req['user_name'] }}</td>
                    <td>{{ $req['name'] }}</td>
                    <td>{{ $req['type'] }}</td>
                    <td>{{ $req['description'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection