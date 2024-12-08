<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    public function index(Request $req){
        $project = Project::all();
        return  view('home')->with("project",$project);
    }

    public function tables(Request $req){
        $projects = Project::all();
        return  view('tables')->with("project",$projects);
    }

    public function delete(Request $req){
        $project = Project::find($req->id);
        $project->delete();
        return redirect()->back();
    }
    public function add(Request $req){
        $project = new Project;
        $project->name = $req->name;
        $project->location = $req->location;
        $project->pro_image = $req->pro_image;
        $project->budget = $req->budget;
        $project->progress = $req->progress;
        $project->save();
        return redirect()->back();
    }
    public function edit(Request $req){
        $project = Project::find($req->id);
        return view('dedit')->with("project",$project);
    }
    public function update(Request $req){
        $project = Project::find($req->id);
        $project->update([
            'name' => $req->name,
            'location' => $req->location,
            'budget' => $req->budget,
            'progress' => $req->progress,
        ]);
        return redirect()->back();
    }


}
