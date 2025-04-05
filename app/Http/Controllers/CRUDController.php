<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Certificate;
use App\Models\Skill;
use Illuminate\Support\Facades\Log;

class CRUDController extends Controller
{
    //insert
    public function insertCertificate(Request $request){
        // Validate the incoming data
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
            'certi_name' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'month' => 'required|date_format:Y-m', // Format: YYYY-MM
        ]);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img', 'public'); // Store in storage/app/public/img
        }
    
        // Save data to the database
        Certificate::create([
            'image' => $imagePath,
            'certi_name' => $validated['certi_name'],
            'publisher' => $validated['publisher'],
            'month' => $validated['month'],
        ]);
    
        return redirect()->back();
    }

    public function insertProject(Request $request){
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'deskripsi' => 'required',
            'bahasa' => 'required|string',
            'url' => 'required|url',
        ]);
    
        Log::info('Data to be inserted:', $validated);
    
        Project::create([
            'project_name' => $validated['project_name'],
            'deskripsi' => $validated['deskripsi'],
            'bahasa' => $validated['bahasa'],
            'url' => $validated['url'],
        ]);
    
        return redirect()->back();
    }

    public function insertSkill(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'skill_name' => 'required|string|max:255',
            'level' => 'required|string|in:Beginner,Intermediate,Advanced',
            'type' => 'required|string|in:Frontend,Backend',
        ]);

        // Log the data to be inserted (for debugging purposes)
        Log::info('Data to be inserted:', $validated);

        // Insert the validated data into the database
        Skill::create([
            'skill_name' => $validated['skill_name'],
            'level' => $validated['level'], // Fixed from 'persen' to 'level'
            'type' => $validated['type'],
        ]);

        // Redirect back to the previous page with a success message
        return redirect()->back();
    }


    //update
    public function updateCertificate(Request $request, $certi_id){
        // Update the certificate with the given ID
        $certificates = Certificate::findOrFail($certi_id);
        $certificates->update($request->all());

        return redirect()->back();
    }

    public function updateProject(Request $request, $project_id){
        $project = Project::findOrFail($project_id);
        $project->update($request->all());

        return redirect()->back();
    }

    public function updateSkill(Request $request, $skill_id){
        $skill = Skill::findOrFail($skill_id);
        $skill->update($request->all());

        return redirect()->back();
    }

    //delete
    public function deleteCertificate($certi_id){
        $certificates = Certificate::findOrFail($certi_id);
        $certificates->delete();

        return redirect()->back();
    }

    public function deleteProject($project_id){
        $project = Project::findOrFail($project_id);
        $project->delete();

        return redirect()->back();
    }

    public function deleteSkill($skill_id){
        $skill = Skill::findOrFail($skill_id);
        $skill->delete();

        return redirect()->back();
    }
}
