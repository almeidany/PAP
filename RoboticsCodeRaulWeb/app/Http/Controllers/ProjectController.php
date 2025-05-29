<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use App\Models\project_user;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        //
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = array(
            "OEI" => "Objetos e Espaços Inteligentes",
            "TRL" => "Tema Livre",
            "VR" => "Veículos Robóticos",
        );
        $user = User::all();
        return view('projects.create', compact('categories', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'projectname' => 'required|string|max:50',
            'designation' => 'required|string|max:50',
            'category' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'date|after_or_equal:start_date',
            'github_url' => 'required|url|regex:/^(https?:\/\/)?(www\.)?github\.com\/[a-zA-Z0-9_.-]+\/[a-zA-Z0-9_.-]+$/',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:10920',
            'projectcolleagues' => 'nullable|array',
            'description' => 'required|string|max:2000',

        ]);
        $project = new Project();
        $project->projectname = $request->input('projectname');
        $project->designation = $request->input('designation');
        $project->category = $request->input('category');
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        $project->github_url = $request->input('github_url');
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $title = preg_replace('/[^A-Za-z0-9\-]/', '', $request->input('projectname'));
            $name = $project->projectname . '_' . time() . '.' . $extension;
            $path = $file->storeAs('public/images/projects', $name);
            $project->photo = $name;
        };
        $project->description = $request->input('description');

        $project->save();
        $users = $request->input('projectcolleagues', []);
        foreach ($users as $userId) {
            $project_user = new project_user();
            $project_user->project_id = $project->id;
            $project_user->user_id = $userId;
            $project_user->save();
        }
        return redirect()->route('projects')->with('message', 'Projeto criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $categories = array(
            "OEI" => "Objetos e Espaços Inteligentes",
            "TRL" => "Tema Livre",
            "VR" => "Veículos Robóticos",
        );
        return view('projects.show', compact('categories', 'project'))->with(['readonly' => true, 'disabled' => true]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        $categories = array(
            "OEI" => "Objetos e Espaços Inteligentes",
            "TRL" => "Tema Livre",
            "VR" => "Veículos Robóticos",
        );

        //select users.* from project_users, users where project_users.project_id = $project->id and project_users.user_id = users.id

        $project_users = user::select('users.*')
            ->join('project_users', 'project_users.user_id', '=', 'users.id')
            ->where('project_users.project_id', $project->id)
            ->get();
        return view('projects.edit', compact('categories', 'project', 'project_users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        $request->validate([
            'projectname' => 'required|string|max:50',
            'designation' => 'required|string|max:50',
            'category' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'date|after_or_equal:start_date',
            'github_url' => 'required|url|regex:/^(https?:\/\/)?(www\.)?github\.com\/[a-zA-Z0-9_.-]+\/[a-zA-Z0-9_.-]+$/',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:10920',
            'projectcolleagues' => 'nullable|array',
            'description' => 'required|string|max:2000',

        ]);


        $project->projectname = $request->projectname;
        $project->designation = $request->designation;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->category = $request->category;
        $project->github_url = $request->github_url;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $title = preg_replace('/[^A-Za-z0-9\-]/', '', $request->input('projectname'));
            $name = $project->projectname . '_' . time() . '.' . $extension;
            $path = $file->storeAs('public/images/projects', $name);
            $project->photo = $name;
        };

        $project->description = $request->description;
        if ($request->has('projectcolleague')) {
            $project->colleagues()->sync($request->input('projectcolleague'));
        } else {
            $project->colleagues()->detach();
        }
        $project->save();
        return redirect()->route('projects')->with('message', 'Projeto atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        return redirect()->route('projects')->with('message', 'Projeto eliminado com sucesso!');
    }
}
