<?php

namespace App\Http\Controllers\SupportTeam;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Material;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();
        return view('pages.support_team.materials.index', compact('materials'));
    }

    public function create()
    {
        return view('pages.support_team.materials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|file|mimes:pdf,doc,docx',
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('materials', $fileName);

        Material::create([
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $filePath,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('uploadMaterials.index')->with('success', 'Material uploaded successfully.');
    }
    public function show()
    {
        $materials = Material::all(); // Fetch all materials
        return view('pages.support_team.materials.show', compact('materials'));
    }
    
}
