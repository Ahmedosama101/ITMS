@extends('layouts.app')
 
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Project Delete</h1>
    </div>
    <br>
    <table class="table rounded shadow-lg p-3 mb-5 bg-white rounded">
        <thead class="thead-dark">
            <tr>
                <th>Project ID</th>
                <th>Name</th>
                <th>Owner</th>
                <th>End Date</th>
                <th>Estimated Duration</th>
                <th>Status</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project['projectsid'] }}</td>
                    <td>{{ $project['name'] }}</td>
                    <td>{{ $project['owner'] }}</td>
                    <td>{{ $project['enddate'] }}</td>
                    <td>{{ $project['estimatedduration'] }}</td>
                    <td>{{ $project['status'] }}</td>
                    <td>    
                            <form action="{{route('project.destroy',$project->projectsid)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Confirm DELETE? this student {{$project->name}}')">
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection