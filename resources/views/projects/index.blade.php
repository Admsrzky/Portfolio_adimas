@extends('layouts.app', ['title' => 'Semua Proyek | Adimas Portofolio'])

@section('content')
<section x-data="{ modalOpen: false, modalMessage: '' }" id="portfolio" class="py-16 md:py-24 bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900">All Project</h1>
            <p class="text-gray-600 mt-2 max-w-2xl mx-auto">
                Here is a complete collection of all the projects I have ever worked on.
            </p>
             <a href="/" class="text-primary-purple font-semibold mt-4 inline-block">&larr; Back to home</a>
        </div>

        @if($projects->isNotEmpty())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Loop untuk setiap proyek --}}
            @foreach($projects as $project)
            <div class="bg-white p-4 rounded-3xl shadow-md overflow-hidden flex flex-col">
                @if($project->image)
                <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-full h-64 object-cover rounded-3xl mb-4">
                @else
                <div class="w-full h-64 bg-gray-200 rounded-3xl mb-4"></div>
                @endif
                <div class="p-4 flex-grow flex flex-col">
                    <span class="text-primary-purple text-sm font-medium uppercase">{{ $project->category }}</span>
                    <h3 class="text-xl font-bold mt-1 mb-2">{{ $project->title }}</h3>
                    <div class="text-gray-600 text-sm flex-grow">{!! $project->description !!}</div>
                    <a href="{{ $project->case_study_url }}"
                        @if($project->case_study_url != '') target="_blank" @else @click.prevent="modalOpen = true; modalMessage = 'Studi kasus untuk proyek ini belum dipublikasikan.'" @endif
                        class="flex items-center text-primary-purple font-semibold mt-4">
                        Case Study
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        {{-- TAUTAN PAGINATION --}}
        <div class="mt-16">
            {{ $projects->links() }}
        </div>

        @else
        <div class="text-center text-gray-500 py-16">
            <p>Belum ada proyek untuk ditampilkan saat ini.</p>
        </div>
        @endif
    </div>

    {{-- MODAL UNTUK CASE STUDY --}}
    <div x-show="modalOpen" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center" @click.away="modalOpen = false" style="display: none;">
        <div class="bg-white p-8 rounded-lg shadow-xl text-center max-w-sm mx-auto">
            <h3 class="text-xl font-bold mb-4">Informasi</h3>
            <p x-text="modalMessage" class="text-gray-600 mb-6"></p>
            <button @click="modalOpen = false" class="bg-primary-purple text-white font-bold py-2 px-6 rounded-full">Tutup</button>
        </div>
    </div>
</section>
@endsection
