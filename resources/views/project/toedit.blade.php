@extends('layouts.app')
 
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Project Management Dashboard</h1>
    </div>
    <br>
    <table class="table rounded shadow-lg p-3 mb-5 bg-white rounded">
        <thead class="thead-dark">
            <tr>
                <th>Project ID</th>
                <th>Name</th>
                <th>Owner</th>
                <th>Type</th>
                <th>Status</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project['projectsid'] }}</td>
                    <td>{{ $project['name'] }}</td>
                    <td>{{ $project['owner'] }}</td>
                    <td>{{ $project['type'] }}</td>
                    <td style="background-color: 
                @if($project['status'] == 'Ahead of Target') MediumAquaMarine
                @elseif($project['status'] == 'Off Target') OrangeRed
                @elseif($project['status'] == 'On Target') #FDAB3D
                @elseif($project['status'] == 'Completed') PowderBlue
                @else Gainsboro
                @endif
            ">
                {{ $project['status'] }}
            </td>
               <td><a class="btn btn-warning" href="{{route('project.edit',$project->projectsid)}}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection