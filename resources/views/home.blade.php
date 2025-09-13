<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adimas Rizki Purwanto | Web Developer Portfolio</title>
    <meta name="description" content="Portofolio Adimas Rizki Purwanto, seorang Web Developer berpengalaman. Lihat studi kasus, proyek, dan proses kerja saya dalam menciptakan pengalaman digital yang intuitif dan menarik.">
    <meta name="keywords" content="Adimas Rizki Purwanto, portofolio, web developer, jasa web, desain antarmuka, front-end developer, studi kasus, proyek, Indonesia">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body class="bg-gray-50 text-gray-800 pb-20 md:pb-0">

    <nav class="bg-white sticky top-0 z-50 shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center space-x-2">
                <span class="bg-primary-purple text-white w-10 h-10 flex items-center justify-center font-bold rounded-full">AR</span>
                <span class="md:block md:text-xl md:font-semibold md:text-gray-900 hidden">{{ $settings->hero_title ?? 'Judul Default' }}</span>
            </a>

            <div class="hidden md:flex items-center space-x-6">
                <a href="#home" class="text-gray-600 hover:text-primary-purple transition">Home</a>
                <a href="#about" class="text-gray-600 hover:text-primary-purple transition">About</a>
                <a href="#process" class="text-gray-600 hover:text-primary-purple transition">Process</a>
                <a href="#portfolio" class="text-gray-600 hover:text-primary-purple transition">Portfolio</a>
                <a href="#clients" class="text-gray-600 hover:text-primary-purple transition">Client</a>
                <a href="#contact" class="bg-primary-purple text-white px-6 py-2 rounded-full hover:bg-purple-700 transition">Contact</a>
            </div>
        </div>
    </nav>

    <section
        x-data="{ isWaving: false }"
        id="home"
        class="relative bg-gray-50 py-12 md:py-20 overflow-hidden">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 items-center gap-12">
            <div x-data="{
                fullText: @js($settings->hero_title ?? 'Adimas Rizki Purwanto | Web Developer'),
                typedText: ''
            }"
            x-init="
                let charIndex = 0;
                let typingInterval = setInterval(() => {
                    if (charIndex < fullText.length) {
                        typedText += fullText.charAt(charIndex);
                        charIndex++;
                    } else {
                        clearInterval(typingInterval);
                    }
                }, 100);
            " class="flex flex-col space-y-4">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">Hello, I'm <br>
                    <span x-text="typedText"></span>
                    <span class="animate-blink text-gray-500">|</span>
                </h1>
                <p x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate delay-200 text-lg text-gray-600 max-w-lg">
                    {{ $settings->hero_subtitle ?? 'Saya adalah seorang developer...' }}
                </p>

                <a  x-data x-intersect:enter.once="$el.classList.add('is-visible')" href="#contact"
                    @click.prevent="isWaving = true; setTimeout(() => isWaving = false, 1000); document.querySelector('#contact').scrollIntoView()"
                    class="scroll-animate delay-300 bg-primary-purple text-white font-semibold py-3 px-8 rounded-lg w-fit hover:bg-purple-700 transition duration-300 shadow-md flex items-center space-x-2">
                    <span>Say Hello</span>
                    <span :class="{ 'animate-wave': isWaving }">👋</span>
                </a>

                <div x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate delay-400 flex flex-wrap justify-start gap-4 mt-8 pt-4 border-t border-gray-200">
                    <div class="text-left p-4 bg-white rounded-lg shadow-sm">
                        <p class="text-2xl font-bold text-primary-purple">{{ $settings->years_experience ?? 0 }} Y.</p>
                        <p class="text-sm text-gray-600">Experience</p>
                    </div>
                    <div class="text-left p-4 bg-white rounded-lg shadow-sm">
                        <p class="text-2xl font-bold text-primary-purple">{{ $settings->projects_completed ?? 0 }}+</p>
                        <p class="text-sm text-gray-600">Projects Completed</p>
                    </div>
                    <div class="text-left p-4 bg-white rounded-lg shadow-sm">
                        <p class="text-2xl font-bold text-primary-purple">{{ $settings->happy_clients ?? 0 }}</p>
                        <p class="text-sm text-gray-600">Happy Clients</p>
                    </div>
                </div>
            </div>

            <div x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate delay-300 relative md:flex justify-center items-center h-[500px] md:h-[600px] hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-200 to-pink-200 rounded-bl-[8rem] rounded-tr-[8rem] rounded-tl-[2rem] rounded-br-[2rem] shadow-xl blur-2xl transform hidden md:block"></div>
                <div class="md:relative md:bg-white md:rounded-bl-[8rem] md:rounded-tr-[8rem] md:rounded-tl-[2rem] md:rounded-br-[2rem] md:p-6 md:shadow-2xl md:z-10 hidden md:block">
                    <img src="{{ Storage::url($settings->hero_image) }}" alt="Foto profil Adimas Rizki Purwanto" class="w-64 h-auto md:w-80 md:rounded-bl-[7.5rem] md:rounded-tr-[7.5rem] md:rounded-tl-[1.5rem] md:rounded-br-[1.5rem] md:object-cover">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 relative bg-white shadow-2xl rounded-3xl p-8 md:p-12 flex flex-col lg:flex-row items-center justify-between gap-12">
            <div x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate relative w-full lg:w-1/2 flex justify-center lg:justify-start -mt-24 lg:-ml-24 z-10">
                <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-300 p-4 md:p-8 transform hidden lg:block">
                    <img src="{{ Storage::url($settings->about_image) }}" alt="Adimas Rizki Purwanto sedang bekerja" class="rounded-[3.5rem] object-cover h-80 md:h-96 w-auto">
                </div>
                <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-300 p-4 md:p-8 block lg:hidden">
                    <img src="{{ Storage::url($settings->about_image) }}" alt="Adimas Rizki Purwanto sedang bekerja" class="rounded-[3.5rem] object-cover h-64 w-auto mx-auto">
                </div>
                @if($socialLinks->isNotEmpty())
                <div class="absolute px-10 shadow-teal-200 bottom-[-2rem] md:bottom-[-4.2rem] left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 lg:ml-8 mt-4 flex justify-center space-x-4 bg-white p-4 rounded-3xl shadow-lg z-20">
                    @foreach($socialLinks as $link)
                    <a href="{{ $link->url }}" target="_blank" rel="noopener noreferrer" title="{{ $link->name }}" class="md:w-6 md:h-6 w-5 h-5 text-gray-500 hover:text-primary-purple transition">
                        <img src="{{ Storage::url($link->icon_svg) }}" alt="{{ $link->name }} Icon" class="w-6 h-6 object-contain">
                    </a>
                    @endforeach
                </div>
                @endif
            </div>

            <div class="flex flex-col space-y-4 w-full lg:w-1/2 lg:pl-16">
                <h2 x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate text-3xl md:text-4xl font-bold text-gray-900 leading-tight">{{ $settings->about_title ?? 'Tentang Saya' }}</h2>
                <p x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate delay-200 text-gray-600 leading-relaxed">
                    {!! $settings->about_description_1 !!}
                </p>
                <p x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate delay-300 text-gray-600 leading-relaxed">
                    {!! $settings->about_description_2 !!}
                </p>
                <div x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate delay-400 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mt-4">
                    <a href="#portfolio" class="bg-primary-purple text-white font-semibold py-3 px-8 rounded-lg w-fit hover:bg-purple-700 transition duration-300 shadow-md">My Projects</a>
                    <a href="{{ Storage::url($settings->cv_path) }}" download class="bg-white text-gray-800 font-semibold py-3 px-8 rounded-lg w-fit border border-gray-300 hover:bg-gray-100 transition duration-300 shadow-md">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="py-16 md:py-24 bg-gray-200">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            <div>
                <h2 x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate text-3xl md:text-4xl font-bold text-gray-900 mb-4">Work Process</h2>
                <p x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate delay-200 text-gray-600 leading-relaxed mb-6">
                    Driven by design and supported by code, I create digital interfaces that feel intuitive and work seamlessly. Every layout, animation, and component is created with a purpose—combining usability with visual clarity.
                </p>
                <p x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate delay-300 text-gray-600 leading-relaxed">
                    I combine clean design with efficient code to build engaging and user-friendly web experiences that stand out.
                </p>
            </div>

            @if($workProcesses->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach($workProcesses as $index => $process)
                <div x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate" style="transition-delay: {{ $index * 150 }}ms">
                    <div class="bg-white p-6 rounded-3xl shadow-lg border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 h-full">
                        <div class="bg-primary-purple/10 text-primary-purple w-12 h-12 flex items-center justify-center rounded-xl mb-4">
                            <img src="{{ Storage::url($process->icon_svg) }}" alt="Ikon {{ $process->title }}" class="w-6 h-6 object-contain">
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $process->step_number }}. {{ $process->title }}</h3>
                        <p class="text-gray-600">{{ $process->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center text-gray-500 col-span-1 sm:col-span-2">
                <p>Proses kerja belum didefinisikan.</p>
            </div>
            @endif
        </div>
    </section>

    <section x-data="{ modalOpen: false, modalMessage: '' }" id="portfolio" class="py-16 md:py-24 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate text-4xl md:text-5xl font-bold text-gray-900">Portfolio</h2>
                <p x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate delay-200 text-gray-600 mt-2 max-w-2xl mx-auto">
                    Here is some of my latest work, showcasing my expertise in creating user-centered and visually appealing interfaces.
                </p>
            </div>

            @if($projects->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $index => $project)
                <div x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate bg-white p-4 rounded-3xl shadow-md overflow-hidden flex flex-col" style="transition-delay: {{ $index * 150 }}ms">
                    @if($project->image)
                    <img src="{{ Storage::url($project->image) }}" alt="Gambar proyek {{ $project->title }}" class="w-full h-64 object-cover rounded-3xl mb-4">
                    @else
                    <div class="w-full h-64 bg-gray-200 rounded-3xl mb-4 flex items-center justify-center">
                        <span class="text-gray-400">No Image</span>
                    </div>
                    @endif
                    <div class="p-4 flex-grow flex flex-col">
                        <span class="text-primary-purple text-sm font-medium uppercase">{{ $project->category?->name ?? 'Uncategorized' }}</span>
                        <h3 class="text-xl font-bold mt-1 mb-2">{{ $project->title }}</h3>
                        <div class="text-gray-600 text-sm flex-grow">
                            {!! $project->description !!}
                        </div>
                        <a  href="{{ $project->case_study_url ?: '#' }}"
                            @if($project->case_study_url && $project->case_study_url != '#')
                                target="_blank"
                                rel="noopener noreferrer"
                            @else
                                @click.prevent="modalOpen = true; modalMessage = 'Studi kasus untuk proyek ini belum dipublikasikan.'"
                            @endif
                            class="flex items-center text-primary-purple font-semibold mt-4">
                            Case Study
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            @if($totalProjects > 3)
            <div x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate delay-400 text-center mt-12">
                <a href="{{ route('projects.index') }}" class="bg-primary-purple text-white font-bold py-3 px-8 rounded-full hover:bg-opacity-90 transition duration-300">
                    See More
                </a>
            </div>
            @endif

            @else
            <div class="text-center text-gray-500">
                <p>Belum ada proyek untuk ditampilkan saat ini.</p>
            </div>
            @endif
        </div>

        <div x-show="modalOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center" @click.away="modalOpen = false" style="display: none;">
            <div x-show="modalOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="bg-white p-8 rounded-lg shadow-xl text-center max-w-sm mx-auto">
                <h3 class="text-xl font-bold mb-4">Informasi</h3>
                <p x-text="modalMessage" class="text-gray-600 mb-6"></p>
                <button @click="modalOpen = false" class="bg-primary-purple text-white font-bold py-2 px-6 rounded-full hover:bg-opacity-90 transition duration-300">
                    Tutup
                </button>
            </div>
        </div>
    </section>

<section id="clients" class="py-16 md:py-24 bg-gray-200">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Happy Clients</h2>
            <p class="text-gray-600 mt-2 max-w-2xl mx-auto mb-12">
                I've had the pleasure of working with a diverse range of companies, from startups to established brands.
            </p>

            <div class="relative w-full overflow-hidden whitespace-nowrap py-4">
                <div class="inline-block animate-slide-right group">
                    <div class="inline-flex items-center space-x-16 px-4 group-hover:pause">
                        <img src="{{ asset('assets/images/logo-almira.svg') }}" alt="Logo perusahaan Almira" class="w-24 h-auto opacity-50 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('assets/images/logo-reproject.png') }}" alt="Logo perusahaan Reproject" class="w-32 h-auto opacity-50 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('assets/images/logo-faaroti.png') }}" alt="Logo perusahaan Faaroti" class="w-24 h-auto opacity-50 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('assets/images/logo-man1cilegon.png') }}" alt="Logo sekolah MAN 1 Cilegon" class="w-12 px-2 h-auto opacity-50 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('assets/images/logo-kasa.jpg') }}" alt="Logo perusahaan Kasa" class="w-12 h-auto opacity-50 px-2 hover:opacity-100 transition-opacity">
                    </div>
                    <div class="inline-flex items-center space-x-16 px-4 group-hover:pause">
                        <img src="{{ asset('assets/images/logo-almira.svg') }}" alt="Logo perusahaan Almira" class="w-32 h-auto pl-8 pr-2 opacity-50 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('assets/images/logo-reproject.png') }}" alt="Logo perusahaan Reproject" class="w-32 h-auto opacity-50 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('assets/images/logo-faaroti.png') }}" alt="Logo perusahaan Faaroti" class="w-24 h-auto opacity-50 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('assets/images/logo-man1cilegon.png') }}" alt="Logo sekolah MAN 1 Cilegon" class="w-12 px-2 h-auto opacity-50 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('assets/images/logo-kasa.jpg') }}" alt="Logo perusahaan Kasa" class="w-12 h-auto opacity-50 px-2 hover:opacity-100 transition-opacity">
                    </div>
                    <div class="inline-flex items-center space-x-16 px-4 group-hover:pause">
                        <img src="{{ asset('assets/images/logo-almira.svg') }}" alt="Logo perusahaan Almira" class="w-32 h-auto pl-8 pr-2 opacity-50 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('assets/images/logo-reproject.png') }}" alt="Logo perusahaan Reproject" class="w-32 h-auto opacity-50 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('assets/images/logo-faaroti.png') }}" alt="Logo perusahaan Faaroti" class="w-24 h-auto opacity-50 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('assets/images/logo-man1cilegon.png') }}" alt="Logo sekolah MAN 1 Cilegon" class="w-12 px-2 h-auto opacity-50 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('assets/images/logo-kasa.jpg') }}" alt="Logo perusahaan Kasa" class="w-12 h-auto opacity-50 px-2 hover:opacity-100 transition-opacity">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div x-data x-intersect:enter.once="$el.classList.add('is-visible')" class="scroll-animate bg-white shadow-2xl rounded-3xl p-8 md:p-12 flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Let's discuss your Project</h2>
                    <p class="text-gray-600 mb-8">
                        I’m available for freelance work. Drop me a line if you have a project you think I’d be a good fit for.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="bg-primary-purple/10 text-primary-purple p-3 rounded-full">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.199 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"></path></svg>
                            </div>
                            <p class="text-gray-700">{{ $settings->contact_address ?? 'anyer' }}</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="bg-primary-purple/10 text-primary-purple p-3 rounded-full">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 12.713a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM12 13a7 7 0 1 1 0-14 7 7 0 0 1 0 14zM12 14c-4.008 0-7.394 2.476-7.854 6.002h15.708c-.46-3.526-3.846-6.002-7.854-6.002z"></path></svg>
                            </div>
                            <p class="text-gray-700">{{ $settings->contact_email ?? 'example@email.com' }}</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="bg-primary-purple/10 text-primary-purple p-3 rounded-full">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 2.003h-8c-2.757 0-5 2.243-5 5v14h18v-14c0-2.757-2.243-5-5-5zm-3 18v-4h2v4h-2zm-3 0v-4h2v4h-2zm-1-6c0-.552-.448-1-1-1s-1 .448-1 1v2c0 .552.448 1 1 1s1-.448 1-1v-2zm-5-3c0-2.206 1.794-4 4-4h2c2.206 0 4 1.794 4 4v2c0 2.206-1.794 4-4 4h-2c-2.206 0-4-1.794-4-4v-2z"></path></svg>
                            </div>
                            <p class="text-gray-700">{{ $settings->contact_phone ?? '+62' }}</p>
                        </div>
                    </div>
                    <div class="flex ml-4 space-x-4 mt-8">
                        @if($socialLinks->isNotEmpty())
                            @foreach($socialLinks as $link)
                            <a href="{{ $link->url }}" target="_blank" rel="noopener noreferrer" title="{{ $link->name }}" class="text-gray-500 hover:text-primary-purple transition">
                                <img src="{{ Storage::url($link->icon_svg) }}" alt="Ikon {{ $link->name }}" class="w-6 h-6 object-contain">
                            </a>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="md:w-1/2">
                    <p class="text-gray-600 mb-6">
                        I’m always open to discussing product design work or partnership opportunities.
                    </p>
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('contact.emailstore') }}" class="space-y-4">
                        @csrf
                        <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
                            <div class="w-full">
                                <input type="text" name="name" placeholder="Name*" value="{{ old('name') }}" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-purple @error('name') border-red-500 @enderror">
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full">
                                <input type="email" name="email" placeholder="Email*" value="{{ old('email') }}" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-purple @error('email') border-red-500 @enderror">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
                            <div class="w-full">
                                <input type="text" name="location" placeholder="Location*" value="{{ old('location') }}" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-purple @error('location') border-red-500 @enderror">
                                @error('location')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full">
                                <input type="text" name="budget" placeholder="Budget*" value="{{ old('budget') }}" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-purple @error('budget') border-red-500 @enderror">
                                @error('budget')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <input type="text" name="subject" placeholder="Subject*" value="{{ old('subject') }}" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-purple @error('subject') border-red-500 @enderror">
                            @error('subject')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <textarea name="message" placeholder="Message*" rows="4" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-purple @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="bg-primary-purple text-white font-semibold py-3 px-8 rounded-lg w-full hover:bg-purple-700 transition duration-300 shadow-md">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-gray-300 py-8">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="flex items-center space-x-8 mb-4 md:mb-0">
                <a href="#" class="flex items-center space-x-2">
                    <span class="bg-primary-purple text-white w-8 h-8 flex items-center justify-center font-bold rounded-full">AR</span>
                    <span class="text-lg font-semibold">{{ $settings->hero_title ?? '-' }}</span>
                </a>
                <div class="hidden sm:flex space-x-4 text-sm">
                    <a href="#home" class="hover:text-primary-purple transition">Home</a>
                    <a href="#about" class="hover:text-primary-purple transition">About</a>
                    <a href="#portfolio" class="hover:text-primary-purple transition">Portfolio</a>
                    <a href="#contact" class="hover:text-primary-purple transition">Contact</a>
                </div>
            </div>
            <p class="text-sm">{{ $settings->footer_copyright}}</p>
        </div>
    </footer>

    <nav class="md:hidden rounded-3xl fixed bottom-4 left-3 right-3 bg-white/70 backdrop-blur-sm shadow-lg z-50">
        <div class="container mx-auto h-16 flex justify-around items-center">
            <a href="#home" class="flex flex-col items-center justify-center text-gray-500 hover:text-primary-purple transition-colors p-2">
                <img src="{{ asset('assets/icons/home.png')) }}" class="w-6 h-6" alt="">
            </a>
            <a href="#about" class="flex flex-col items-center justify-center text-gray-500 hover:text-primary-purple transition-colors p-2">
                <img src="{{ asset('assets/icons/about.png')) }}" class="w-6 h-6" alt="">
            </a>
            <a href="#portfolio" class="flex flex-col items-center justify-center text-gray-500 hover:text-primary-purple transition-colors p-2">
                <img src="{{ asset('assets/icons/portofolio.png')) }}" class="w-6 h-6" alt="">
            </a>
            <a href="#contact" class="flex flex-col items-center justify-center text-gray-500 hover:text-primary-purple transition-colors p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </a>
        </div>
    </nav>
</body>
</html>
