<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageNotification;
use App\Models\Client;
use App\Models\ContactMessage;
use App\Models\Generalsetting;
use App\Models\Project;
use App\Models\Skill;
use App\Models\SocialLink;
use App\Models\WorkProcess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $clients = Client::first();
        $skills = Skill::all();


        // Mengirimkan variabel $projects ke view menggunakan compact()
        return view('home', compact('projects', 'totalProjects', 'workProcesses', 'socialLinks', 'settings', 'skills'));
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

    public function NewEmailStore(Request $request)
    {
        // 1. Validasi data (kode dari sebelumnya)
        $validatedData = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'location'  => 'required|string|max:255',
            'budget'    => 'required|string|max:255',
            'subject'   => 'required|string|max:255',
            'message'   => 'required|string|min:10',
        ]);

        // 2. Simpan pesan ke database
        $message = ContactMessage::create($validatedData);

        // 3. Kirim notifikasi email
        try {
            // Ganti 'admin@example.com' dengan email tujuan Anda
            Mail::to('adimasrizki256@gmail.com')->send(new ContactMessageNotification($message));
        } catch (\Exception $e) {
            // Opsional: Tangani jika email gagal dikirim, misalnya dengan mencatat log
            // \Log::error('Gagal mengirim email notifikasi kontak: ' . $e->getMessage());
        }

        // 4. Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Your message has been sent successfully! We will get back to you shortly.');
    }
}
