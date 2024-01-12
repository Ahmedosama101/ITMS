@extends('layouts.app')
 
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Project Report - {{$project['name']}}</h1>
        <a class="btn btn-warning" href="{{route('project.reportpage',$project->projectsid)}}">Download PDF</a>    </div>    
    <h2>Project Details:</h2>
    <br>
    <table class="table rounded shadow-lg p-3 mb-5 bg-white rounded">
        <thead class="thead-dark">
                <th>Project ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Owner</th>
                <th>Type</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Estimated Duration</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $project['projectsid'] }}</td>
                <td>{{ $project['name'] }}</td>
                <td>{{ $project['status'] }}</td>
                <td>{{ $project['owner'] }}</td>
                <td>{{ $project['type'] }}</td>
                <td>{{ $project['startdate'] }}</td>
                <td>{{ $project['enddate'] }}</td>
                <td>{{ $project['estimatedduration'] }}</td>
            </tr>
        </tbody>
    </table>
    <table class="table rounded shadow-lg p-3 mb-5 bg-white rounded">
    <thead class="thead-dark">
        <tr>
            <th>Status</th>
            <th>Initiation</th>
            <th>Planning</th>
            <th>Design</th>
            <th>Test</th>
            <th>Deploy</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $project->status ?? 'not initialized' }}</td>
            <td>{{ $project->initiation ?? 'not initialized' }}</td>
            <td>{{ $project->planning ?? 'not initialized' }}</td>
            <td>{{ $project->design ?? 'not initialized' }}</td>
            <td>{{ $project->test ?? 'not initialized' }}</td>
            <td>{{ $project->deploy ?? 'not initialized' }}</td>
        </tr>
    </tbody>
</table>

<table class="table rounded shadow-lg p-3 mb-5 bg-white rounded">
    <thead class="thead-dark">
        <tr>
        <th>Development Methodology</th>
                <th>System Platform</th>
                <th>Deployment Type</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $project['dev_methodology'] }}</td>
            <td>{{ $project['dev_platform'] }}</td>
            <td>{{ $project['deployment_type'] }}</td>
    </tbody>
</table>

    <h2>Progress Reports:</h2>
    <br>
    <table class="table rounded shadow-lg p-3 mb-5 bg-white rounded">
        <thead class="thead-dark">
            <tr>
                <th>Progress Date</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($progressReports as $report)
                <tr>
                    <td>{{ $report->progress_date }}</td>
                    <td>{{ $report->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection