<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Certificate;
use App\Models\Skill;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    public function welcome()
    {
        $projects = Project::all();
        $certificates = Certificate::all();
        // Mengambil semua data skill dari database
        $skills = Skill::all();

        // Memisahkan skill berdasarkan kategori (frontend dan backend)
        $front = $skills->where('type', 'Frontend');
        $back = $skills->where('type', 'Backend');

        return view('welcome')
            ->with('projects', $projects)
            ->with('certificates', $certificates)
            ->with('skills', $skills)
            ->with('front', $front)
            ->with('back', $back);
    }

    public function portofolio()
    {
        $projects = Project::all();
        $certificates = Certificate::all();
        // Mengambil semua data skill dari database
        $skills = Skill::all();

        // Memisahkan skill berdasarkan kategori (frontend dan backend)
        $front = $skills->where('type', 'Frontend');
        $back = $skills->where('type', 'Backend');

        return view('portofolio')
            ->with('projects', $projects)
            ->with('certificates', $certificates)
            ->with('skills', $skills)
            ->with('front', $front)
            ->with('back', $back);
    }

    public function CRUD()
    {
        $projects = Project::all();
        $certificates = Certificate::all();
        // Mengambil semua data skill dari database
        $skills = Skill::all();

        // Memisahkan skill berdasarkan kategori (frontend dan backend)
        $front = $skills->where('type', 'Frontend');
        $back = $skills->where('type', 'Backend');;
        return view('CRUD.crud', [
            'projects' => $projects, 
            'certificates' => $certificates, 
            'skills' => $skills,
            'front' => $front,
            'back' => $back]);
    }

    public function project()
    {
        $projects = Project::all();
        return view('CRUD.project', ['projects' => $projects]);
    }

    public function certificate()
    {
        $certificates = Certificate::all();
        return view('CRUD.certificate', ['certificates' => $certificates]);
    }

    public function skill()
    {
        // Mengambil semua data skill dari database
        $skills = Skill::all();

        // Memisahkan skill berdasarkan kategori (frontend dan backend)
        $front = $skills->where('type', 'Frontend');
        $back = $skills->where('type', 'Backend');

        // Mengirimkan data ke view dengan variabel $front dan $back
        return view('CRUD.skill', [
            'skills' => $skills,
            'front' => $front,
            'back' => $back
        ]);
    }
}
