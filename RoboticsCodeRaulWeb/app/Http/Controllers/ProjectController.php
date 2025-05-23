<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
        return view('projects.create', compact('categories'));
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
            'description' => 'required|string|max:2000',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:10920',
        ]);

        $project = new Project();
        $project->projectname = $request->input('projectname');
        $project->designation = $request->input('designation');
        $project->category = $request->input('category');
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        $project->github_url = $request->input('github_url');
        $project->description = $request->input('description');

        if ($request->hasFile('inputFoto')) {
            $file = $request->file('inputFoto');
            $originalName = $file->getClientOriginalName();
            $extension = pathinfo($originalName, PATHINFO_EXTENSION);
            $designation = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $project->name);
            $designation = str_replace(' ', '', $designation);
            $name = $designation . "." . $extension;
            $project->foto = $name;
            $file->storeAs('/public/images/projects', $name);
        }

        $project->save();
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
        return view('projects.edit', compact('categories', 'project'));
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
            'start_date' => 'required|date',
            'end_date' => 'date|after_or_equal:start_date',
            'category' => 'required',
            'github_url' => 'required|url|regex:/^(https?:\/\/)?(www\.)?github\.com\/[a-zA-Z0-9_.-]+\/[a-zA-Z0-9_.-]+$/',
            'description' => 'required|string|max:2000',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:10920',
        ]);

        $project->projectname = $request->projectname;
        $project->designation = $request->designation;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->category = $request->category;
        $project->github_url = $request->github_url;
        $project->description = $request->description;

        if ($request->hasFile('inputFoto')) {
            $file = $request->file('inputFoto');
            $originalName = $file->getClientOriginalName();
            $extension = pathinfo($originalName, PATHINFO_EXTENSION);
            $designation = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $project->projectname);
            $designation = str_replace(' ', '', $designation);
            $name = $designation . "." . $extension;
            $project->foto = $name;
            $file->storeAs('/public/images/projects', $name);
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
