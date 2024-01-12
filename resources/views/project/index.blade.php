@extends('layouts.app')
 <?php
            if($user['role'] == 1 ) { // if the user is an admin or a manager
                $rolename = 'admin';
            } elseif($user['role'] == 2){
                $rolename = 'manager';
            }
            else if($user['role'] == 3) { // if the user is a lead developer
                $rolename = 'leaddeveloper';
            } else if($user['role'] == 4) { // if the user is a developer
                $rolename = 'developer';
            } else if($user['role'] == 5) { // if the user is an owner
                $rolename = 'owner';
            }
        ?>
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        
        <h1 class="mb-0">Project Management Dashboard for the {{ $rolename }} {{ $user['name'] }}</h1>
<!--        <a href="/projectpdf" class="btn btn-succsess">Export PDF</a>  -->
    </div>
    <br>
    <table class="table rounded shadow-lg p-3 mb-5 bg-white rounded">
        <thead class="thead-dark">
            <tr>
                <th>Project ID</th>
                <th>Name</th>
                <th>Owner</th>
                <th>Type</th>
                <th>Development Methodology</th>
                <th>System Platform</th>
                <th>Deployment Type</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Estimated Duration</th>
                <th>Status</th>
                <th>Lead Developer</th>
                <th>Developers</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project['projectsid'] }}</td>
                    <td>{{ $project['name'] }}</td>
                    <td>{{ $project['owner'] }}</td>
                    <td>{{ $project['type'] }}</td>
                    <td style="width:100px">{{ $project['dev_methodology'] }}</td>
                    <td style="width:100px">{{ $project['dev_platform'] }}</td>
                    <td>{{ $project['deployment_type'] }}</td>
                    <td style="width:110px">{{ $project['startdate'] }}</td>
                    <td style="width:110px">{{ $project['enddate'] }}</td>
                    <td>{{ $project['estimatedduration'] }}</td>
                    <td style="background-color: 
                @if($project['status'] == 'Ahead of Target') MediumAquaMarine
                @elseif($project['status'] == 'Off Target') OrangeRed
                @elseif($project['status'] == 'On Target') #FDAB3D
                @elseif($project['status'] == 'Completed') PowderBlue
                @else Gainsboro
                @endif
            ">
                {{ $project['status'] }}
            </td>                    <td style="width:150px">
                        @if($project->leadDeveloper)
                            {{ optional($project->leadDeveloper)->name }}
                        @else
                            Lead Developer Not Found
                        @endif
                    </td>
                    <?php
                        $projectId = $project['projectsid'];
                        $developers = \App\Models\ProjectUser::where('projectid', $projectId)->get();
                     ?>
                   <td>  @foreach ($developers as $developer)
                   <?php
                        $user = \App\Models\SystemUser::find($developer->userid);
                    ?>
                        {{ $user->name }}<br>
                    @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
