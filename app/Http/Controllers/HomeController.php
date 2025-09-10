<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SocialLink;
use App\Models\WorkProcess;
use App\Models\Generalsetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::where('is_published', true)
            ->orderBy('order', 'asc')
            ->limit(3)
            ->get();
        $totalProjects = Project::where('is_published', true)->count();
        $workProcesses = WorkProcess::orderBy('step_number', 'asc')->get();
        $socialLinks = SocialLink::orderBy('order', 'asc')->get();
        $settings = GeneralSetting::first();


        // Mengirimkan variabel $projects ke view menggunakan compact()
        return view('home', compact('projects', 'totalProjects', 'workProcesses', 'socialLinks', 'settings'));
    }

    public function Allportofolio()
    {
        // Ambil data settings untuk header dan footer
        $settings = GeneralSetting::first();

        // Ambil semua proyek yang sudah dipublikasikan dengan pagination
        $projects = Project::where('is_published', true)
            ->orderBy('order', 'asc')
            ->paginate(9); // Tampilkan 9 proyek per halaman

        return view('projects.index', compact('projects', 'settings'));
    }
}
