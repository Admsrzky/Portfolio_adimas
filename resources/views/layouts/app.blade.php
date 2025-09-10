<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Judul halaman akan dinamis --}}
    <title>{{ $title ?? 'Adimas | Portofolio' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
      body { font-family: 'Poppins', sans-serif; }
      :root { --primary-purple: #8B5CF6; }
      .bg-primary-purple { background-color: var(--primary-purple); }
      .text-primary-purple { color: var(--primary-purple); }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 pb-20 md:pb-0">

    {{-- NAVIGASI DESKTOP --}}
    <nav class="bg-white sticky top-0 z-50 shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-2">
                <span class="bg-primary-purple text-white w-10 h-10 flex items-center justify-center font-bold rounded-full">AR</span>
                <span class="hidden md:block text-xl font-semibold text-gray-900">{{ $settings->hero_title ?? 'Adimas Rizki' }}</span>
            </a>
            <div class="hidden md:flex items-center space-x-6">
                <a href="/#home" class="text-gray-600 hover:text-primary-purple transition">Home</a>
                <a href="/#about" class="text-gray-600 hover:text-primary-purple transition">About</a>
                <a href="/#process" class="text-gray-600 hover:text-primary-purple transition">Process</a>
                <a href="/#portfolio" class="text-gray-600 hover:text-primary-purple transition">Portfolio</a>
                <a href="/#clients" class="text-gray-600 hover:text-primary-purple transition">Client</a>
                <a href="/#contact" class="bg-primary-purple text-white px-6 py-2 rounded-full hover:bg-purple-700 transitin">Contact</a>
            </div>
        </div>
    </nav>

    {{-- KONTEN UTAMA DARI SETIAP HALAMAN --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gray-800 text-gray-300 py-8">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between">
            <div class="flex items-center space-x-8 mb-4 md:mb-0">
                <a href="/" class="flex items-center space-x-2">
                    <span class="bg-primary-purple text-white w-8 h-8 flex items-center justify-center font-bold rounded-full">AR</span>
                    <span class="text-lg font-semibold">{{ $settings->hero_title ?? '-' }}</span>
                </a>
            </div>
            <p class="text-sm">{{ $settings->footer_copyright ?? '-' }}</p>
        </div>
    </footer>

    {{-- NAVIGASI MOBILE --}}
    <nav class="md:hidden rounded-2xl fixed bottom-4 left-3 right-3 bg-white shadow-[0_-2px_10px_rgba(0,0,0,0.1)] z-50">
        {{-- ... isi navigasi mobile Anda ... --}}
    </nav>
</body>
</html>
