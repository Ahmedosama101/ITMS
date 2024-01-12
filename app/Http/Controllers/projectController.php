<?php
namespace App\Models;
namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\systemUser;
use App\Models\ProgressReport;
use App\Models\ProjectRequest;
use App\Models\ProjectUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class projectController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    
     public function index()
    {
        $user = Auth::user(); // get the logged-in user
        $role = $user->role; // get the role of the user

        if($role == 1 || $role == 2) { // if the user is an admin or a manager
            $projects = Project::all(); // select all projects
        } else if($role == 3) { // if the user is a lead developer
            $projects = Project::where('leaddeveloper', $user->id)->get(); // select projects where the user is the lead developer
        } else if($role == 4) { // if the user is a developer
            $projectUserIds = ProjectUser::where('userid', $user->id)->pluck('projectid'); // get the ids of the projects where the user is a developer
            $projects = Project::whereIn('projectsid', $projectUserIds)->get(); // select those projects
        } else if($role == 5) { // if the user is an owner
            $projects = Project::where('owner', $user->name)->get(); // select projects where the user is the owner
        }

        return view('project.index', compact('projects'));
    }
     

    public function topdf()
    {
        $projects = Project::all(); // select * from students
        return view('project.topdf', compact('projects'));
    }

    public function progress_report(Project $project)
    {
        return view('project.progress_report', compact('project'));
    }


    public function storereport(Request $request, $project_id)
{
    $project = Project::findOrFail($project_id);

    $progressReport = new ProgressReport;
    $progressReport->progress_date = $request->progress_date;
    $progressReport->description = $request->description;
    $progressReport->project_id = $project_id;
    $progressReport->save();

    // Manually create the URL for generateProjectPDF method
    //$url = URL::route('project.reportpage', ['projectId' => $project_id]);
    $progressReports = ProgressReport::where('project_id', $project_id)->get();

    // Redirect to the generated URL
    //return Redirect::to($url);
    return view('project.reportpage', compact('progressReports','project'));
}


public function reportpage($project_id)
{        
        // Retrieve progress reports associated with the project
        $url = URL::route('project.generateProjectPDF', ['projectId' => $project_id]);

        // Redirect to the generated URL
        return Redirect::to($url);

    //return view('project.reportpage', compact('progressReports', 'project'));
}

    public function generateProjectPDF($projectId)
    {
        $project = Project::findOrFail($projectId);
        
        // Retrieve progress reports associated with the project
        $progressReports = ProgressReport::where('project_id', $projectId)->get();

        $data = [
            'project' => $project,
            'progressReports' => $progressReports,
        ];

        // If you are using the 'barryvdh/laravel-dompdf' package, you can load the view like this:
        $pdf = PDF::loadView('project.projectpdf', $data);

        // Customize the filename as needed
        $filename = 'project_report_' . $project->name . '.pdf';

        // Return the PDF as a download
        return $pdf->download($filename);
    }

    public function delete()
    {
        $projects = Project::all(); // select * from students
        return view('project.delete', compact('projects'));
    }
    public function toedit()
    {
        $projects = Project::all(); // select * from students
        return view('project.toedit', compact('projects'));
    }

    public function updatestatus()
    {
        $projects = Project::all(); // select * from students
        return view('project.updatestatus', compact('projects'));
    }
    


    public function requestform()
    {
        return view('project.requestform');
    }
    
    public function storerequest(Request $request)
    {
        $req = new ProjectRequest;
        $req->name = $request->name;
        $req->type = $request->type;
        $req->description = $request->description;
        $req->user_id = auth()->id(); 
        $req->user_name = auth()->user()->name;
        $req->save();

        return redirect()->route('project.index')->withSuccess('New project request added successfully');
    }
    
    public function viewRequests()
    {
        // Get all project requests...
        $req = ProjectRequest::all();
        return view('project.requests',compact('req'));
    }

    public function status(Project $project)
    {
        return view('project.status', compact('project'));
    }
    
    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project;
        $project->name = $request->name;
        $project->owner = $request->owner;
        $project->type = $request->type;
        $project->dev_methodology = $request->dev_methodology;
        $project->dev_platform = $request->dev_platform;
        $project->deployment_type = $request->deployment_type;
        $project->startdate = $request->startdate;
        $project->enddate = $request->enddate;
        $project->estimatedduration = $request->estimatedduration;
        $project->initiation = $request->initiation;
        $project->planning = $request->planning;
        $project->leaddeveloper = $request->leaddeveloper;  
        $project->design = $request->design;
        $project->test = $request->test;
        $project->deploy = $request->deploy;
        $project->status = $request->status;
        $project->save();
        $project->developers()->attach($request->input('developers'));

        return redirect()->route('project.index')->withSuccess('New student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        $developerIds = $request->input('developers');
        $project->developers()->sync($developerIds);
        return redirect()->route('project.index')->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        $project->delete();
        return redirect()->route('project.index');
    }
    /*
    public function deleteProjects()
    {
        $projects = Project::all();
        return view('delete-projects',  ['x'=>$projects]);
    }
    public function destroyProject($project)
    {
        $projects=Project::find($project);
        $projects->delete();
        return redirect('delete');
    }*/
}
