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
            @foreach ($req as $request)
                <tr>
                    <td>{{ $request['user_id'] }}</td>
                    <td>{{ $request['user_name'] }}</td>
                    <td>{{ $request['name'] }}</td>
                    <td>{{ $request['type'] }}</td>
                    <td>{{ $request['description'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection