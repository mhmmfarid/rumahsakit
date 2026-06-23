<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Koehried - Edukasi Kesehatan & Artikel Dokter</title>
    
    <!-- Google Fonts: Plus Jakarta Sans for a highly clinical and clean aesthetic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Tailwind Configuration for Premium Color Palette & Fonts -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        medical: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e',
                            800: '#115e59',
                            900: '#134e4a',
                        },
                        trust: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
        }
    </style>
</head>
<body class="antialiased">

<!-- NAVIGATION (Glassmorphism & Sticky, Icon-free) -->
<nav class="sticky top-0 z-50 w-full border-b border-trust-200/50 bg-white/80 backdrop-blur-md">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
        <!-- Logo (KK Medis Text Icon) -->
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-tr from-medical-600 to-medical-500 font-extrabold text-white text-lg tracking-wider">
                KK
            </span>
            <span class="text-xl font-bold tracking-tight text-trust-900">
                Klinik <span class="text-medical-600">Koehried</span>
            </span>
        </a>
        
        <!-- Navigation Links -->
        <div class="hidden md:flex items-center gap-8">
            <a href="#layanan" class="text-sm font-semibold text-trust-600 hover:text-medical-600 transition-colors">Layanan Kami</a>
            <a href="#kategori" class="text-sm font-semibold text-trust-600 hover:text-medical-600 transition-colors">Topik Kesehatan</a>
            <a href="#artikel" class="text-sm font-semibold text-trust-600 hover:text-medical-600 transition-colors">Artikel Terbaru</a>
            <a href="#statistik" class="text-sm font-semibold text-trust-600 hover:text-medical-600 transition-colors">Laporan Statistik</a>
        </div>
        
        <!-- CTAs -->
        <div class="flex items-center gap-4">
            <a href="{{ route('artikel-kesehatan.index') }}" class="text-sm font-semibold text-trust-600 hover:text-medical-600 transition-colors hidden sm:inline-block">Kunjungi Blog</a>
            @auth
                <a href="{{ route('filament.admin.pages.dashboard') }}" class="rounded-full bg-medical-600 px-5 py-2.5 text-sm font-bold text-white shadow-md hover:bg-medical-700 hover:shadow-lg transition-all transform hover:-translate-y-0.5">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="rounded-full border border-trust-200 px-4 py-2.5 text-sm font-semibold text-trust-600 hover:bg-trust-100 transition-all">Logout</button>
                </form>
            @else
                <a href="{{ route('filament.admin.auth.login') }}" class="rounded-full bg-medical-600 px-5 py-2.5 text-sm font-bold text-white shadow-md hover:bg-medical-700 hover:shadow-lg transition-all transform hover:-translate-y-0.5">Login</a>
            @endauth
        </div>
    </div>
</nav>

<main>
    <!-- HERO SECTION (High Trust, Medical Dashboard Layout) -->
    <section class="relative overflow-hidden py-16 lg:py-24 bg-gradient-to-b from-white to-trust-50/30">
        <!-- Clean abstract design patterns (no graphic icons) -->
        <div class="absolute -top-40 -right-40 -z-10 h-96 w-96 rounded-full bg-medical-100/40 blur-3xl"></div>
        <div class="absolute top-1/2 -left-40 -z-10 h-96 w-96 rounded-full bg-medical-50/50 blur-3xl"></div>

        <div class="mx-auto max-w-7xl px-6 grid lg:grid-cols-12 gap-12 items-center">
            <!-- Hero Text Content -->
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 rounded-full bg-medical-100/60 px-4 py-1.5 text-sm font-semibold text-medical-800">
                    <span class="h-2 w-2 rounded-full bg-medical-500 animate-pulse"></span>
                    Edukasi Kesehatan Terpercaya
                </div>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-trust-900 leading-[1.15]">
                    Informasi Medis & Artikel <span class="bg-gradient-to-r from-medical-600 to-medical-800 bg-clip-text text-transparent">Dokter</span> Untuk Keluarga Anda
                </h1>
                
                <p class="text-lg text-trust-600 leading-relaxed max-w-2xl">
                    Temukan tips kesehatan harian, penjelasan penyakit, dan panduan medis praktis yang divalidasi langsung oleh tim dokter Klinik Koehried.
                </p>
                
                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="#artikel" class="rounded-full bg-medical-600 px-8 py-4 font-bold text-white shadow-lg shadow-medical-600/20 hover:bg-medical-700 hover:shadow-xl hover:shadow-medical-600/30 transition-all transform hover:-translate-y-0.5">
                        Mulai Membaca
                    </a>
                    <a href="#layanan" class="rounded-full border border-trust-200 bg-white px-8 py-4 font-semibold text-trust-700 hover:bg-trust-50 transition-all">
                        Pelajari Layanan
                    </a>
                </div>
            </div>
            
            <!-- Hero Dashboard Stats Card -->
            <div class="lg:col-span-5">
                <div class="rounded-3xl border border-trust-200/60 bg-white p-8 shadow-[0_20px_50px_rgba(15,23,42,0.06)] relative overflow-hidden">
                    <div class="absolute top-0 right-0 h-24 w-24 bg-gradient-to-bl from-medical-100/30 to-transparent rounded-tr-3xl"></div>
                    
                    <div class="flex items-center justify-between mb-8 border-b border-trust-100 pb-5">
                        <div>
                            <p class="text-xs uppercase tracking-wider text-trust-500 font-bold">Status Klinik</p>
                            <h3 class="text-xl font-bold text-trust-900">Klinik Koehried</h3>
                        </div>
                        <div class="rounded-full bg-medical-100 px-3 py-1 text-xs font-semibold text-medical-800 flex items-center gap-1.5">
                            <span class="h-2 w-2 rounded-full bg-medical-500 animate-ping"></span>
                            Realtime Update
                        </div>
                    </div>
                    
                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="rounded-2xl bg-trust-50/60 p-4 border border-trust-100/50 hover:bg-trust-50 transition-colors">
                            <p class="text-xs font-semibold text-trust-500">Artikel Terbit</p>
                            <p class="text-3xl font-extrabold text-trust-900 mt-1">{{ $stats['articles'] }}</p>
                        </div>
                        <div class="rounded-2xl bg-trust-50/60 p-4 border border-trust-100/50 hover:bg-trust-50 transition-colors">
                            <p class="text-xs font-semibold text-trust-500">Kategori Medis</p>
                            <p class="text-3xl font-extrabold text-trust-900 mt-1">{{ $stats['categories'] }}</p>
                        </div>
                        <div class="rounded-2xl bg-trust-50/60 p-4 border border-trust-100/50 hover:bg-trust-50 transition-colors">
                            <p class="text-xs font-semibold text-trust-500">Tim Dokter</p>
                            <p class="text-3xl font-extrabold text-trust-900 mt-1">{{ $stats['doctors'] }}</p>
                        </div>
                        <div class="rounded-2xl bg-trust-50/60 p-4 border border-trust-100/50 hover:bg-trust-50 transition-colors">
                            <p class="text-xs font-semibold text-trust-500">Pasien Aktif</p>
                            <p class="text-3xl font-extrabold text-trust-900 mt-1">{{ $stats['patients'] }}</p>
                        </div>
                    </div>
                    
                    <!-- Testimonial / Active Info Widget -->
                    <div class="rounded-2xl bg-medical-50/50 border border-medical-100/80 p-4">
                        <p class="text-xs font-bold text-medical-800 uppercase tracking-wider mb-2">Poli & Dokter Siaga</p>
                        <div class="flex items-center gap-3">
                            <div class="h-3 w-3 rounded-full bg-emerald-500 animate-pulse shrink-0"></div>
                            <p class="text-sm font-medium text-trust-800">
                                Layanan pemeriksaan & konsultasi aktif melayani pasien.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION (Editorial Layout with Big Typography Numbers, Icon-free) -->
    <section id="layanan" class="py-20 bg-white border-y border-trust-200/50">
        <div class="mx-auto max-w-7xl px-6">
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-16 space-y-3">
                <span class="text-sm font-bold text-medical-600 uppercase tracking-wider bg-medical-100/60 px-3 py-1 rounded-full">Mengapa Klinik Kami</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-trust-900">
                    Pusat Informasi Medis & Pelayanan Kesehatan Prima
                </h2>
                <p class="text-trust-600">
                    Kami menyediakan sarana edukasi kesehatan yang teruji secara klinis dan layanan medis terintegrasi.
                </p>
            </div>
            
            <!-- Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group relative rounded-3xl border border-trust-200/60 p-8 hover:border-medical-500 hover:shadow-xl hover:shadow-medical-600/5 transition-all duration-300">
                    <div class="absolute top-6 right-8 text-5xl font-black text-trust-100 group-hover:text-medical-200 transition-colors">01</div>
                    <h3 class="text-lg font-bold text-trust-900 mb-3 pt-6">Konsultasi Medis</h3>
                    <p class="text-sm text-trust-600 leading-relaxed">
                        Akses pemeriksaan dan konsultasi klinis langsung dengan dokter umum dan spesialis berpengalaman.
                    </p>
                </div>
                
                <div class="group relative rounded-3xl border border-trust-200/60 p-8 hover:border-medical-500 hover:shadow-xl hover:shadow-medical-600/5 transition-all duration-300">
                    <div class="absolute top-6 right-8 text-5xl font-black text-trust-100 group-hover:text-medical-200 transition-colors">02</div>
                    <h3 class="text-lg font-bold text-trust-900 mb-3 pt-6">Artikel Tervalidasi</h3>
                    <p class="text-sm text-trust-600 leading-relaxed">
                        Setiap tulisan kesehatan di platform kami ditulis dan direview oleh dokter ahli demi menjaga akurasi medis.
                    </p>
                </div>
                
                <div class="group relative rounded-3xl border border-trust-200/60 p-8 hover:border-medical-500 hover:shadow-xl hover:shadow-medical-600/5 transition-all duration-300">
                    <div class="absolute top-6 right-8 text-5xl font-black text-trust-100 group-hover:text-medical-200 transition-colors">03</div>
                    <h3 class="text-lg font-bold text-trust-900 mb-3 pt-6">Kategori Lengkap</h3>
                    <p class="text-sm text-trust-600 leading-relaxed">
                        Topik kesehatan terstruktur mulai dari gizi, kebugaran, kesehatan anak, hingga pencegahan penyakit kronis.
                    </p>
                </div>
                
                <div class="group relative rounded-3xl border border-trust-200/60 p-8 hover:border-medical-500 hover:shadow-xl hover:shadow-medical-600/5 transition-all duration-300">
                    <div class="absolute top-6 right-8 text-5xl font-black text-trust-100 group-hover:text-medical-200 transition-colors">04</div>
                    <h3 class="text-lg font-bold text-trust-900 mb-3 pt-6">Kemudahan Akses</h3>
                    <p class="text-sm text-trust-600 leading-relaxed">
                        Informasi medis dapat diakses kapan saja dan di mana saja melalui perangkat mobile, tablet, atau desktop Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- HEALTH TOPICS SECTION (Gradient Badges with Initials, Icon-free) -->
    <section id="kategori" class="py-20 bg-trust-50/50">
        <div class="mx-auto max-w-7xl px-6">
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-16 space-y-3">
                <span class="text-sm font-bold text-medical-600 uppercase tracking-wider bg-medical-100/60 px-3 py-1 rounded-full">Edukasi Sesuai Kebutuhan</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-trust-900">Topik Edukasi Kesehatan Populer</h2>
                <p class="text-trust-600">Temukan panduan praktis berdasarkan kategori kesehatan yang paling sering dicari.</p>
            </div>
            
            <!-- Categories Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($categories as $category)
                    <div class="group rounded-3xl border border-trust-200/60 bg-white p-6 shadow-[0_8px_30px_rgb(0,0,0,0.02)] hover:border-medical-500 hover:shadow-[0_20px_40px_rgba(13,148,136,0.06)] hover:-translate-y-1 transition-all duration-300">
                        <div class="flex items-center gap-4 mb-4">
                            <!-- Circular Initials Container -->
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-medical-500 to-medical-600 font-extrabold text-white text-sm tracking-wide">
                                {{ strtoupper(substr($category->name, 0, 2)) }}
                            </span>
                            <div>
                                <h3 class="font-bold text-trust-900 group-hover:text-medical-600 transition-colors">{{ $category->name }}</h3>
                                <span class="text-xs text-trust-600 font-semibold bg-trust-100 px-2.5 py-0.5 rounded-md mt-1 inline-block">
                                    {{ $category->posts_count }} Artikel
                                </span>
                            </div>
                        </div>
                        <p class="text-sm text-trust-600 leading-relaxed">
                            Kumpulan artikel informatif dan tips kesehatan seputar {{ strtolower($category->name) }} dari para dokter spesialis.
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ARTICLES SECTION (Premium Layout, Dynamic Hover Effects, Clean typography) -->
    <section id="artikel" class="py-20 bg-white">
        <div class="mx-auto max-w-7xl px-6">
            <!-- Section Header with CTA -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div class="space-y-3">
                    <span class="text-sm font-bold text-medical-600 uppercase tracking-wider bg-medical-100/60 px-3 py-1 rounded-full">Informasi & Update Terbaru</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-trust-900">Rekomendasi Artikel Kesehatan</h2>
                    <p class="text-trust-600 max-w-xl">Dapatkan informasi tepercaya seputar kesehatan langsung dari dokter dan pakar medis kami.</p>
                </div>
                <a href="{{ route('artikel-kesehatan.index') }}" class="rounded-full border border-medical-600 px-6 py-3 text-sm font-bold text-medical-600 hover:bg-medical-50 transition-all self-start md:self-auto">
                    Lihat Semua Artikel
                </a>
            </div>
            
            <!-- Featured Article Card (Dual Column layout) -->
            @if($featuredPost)
                <div class="rounded-3xl border border-trust-200/80 bg-white shadow-[0_20px_50px_rgba(15,23,42,0.03)] overflow-hidden mb-12 grid lg:grid-cols-12">
                    <!-- Text Area (Left) -->
                    <div class="p-8 sm:p-12 lg:col-span-7 flex flex-col justify-between">
                        <div class="space-y-6">
                            <!-- Category Badges -->
                            <div class="flex flex-wrap gap-2">
                                @foreach($featuredPost->categories as $category)
                                    <span class="text-xs font-bold text-medical-700 bg-medical-100/80 px-3 py-1 rounded-full uppercase tracking-wide">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                                <span class="text-xs font-bold text-amber-700 bg-amber-100 px-3 py-1 rounded-full uppercase tracking-wide">
                                    Pilihan Utama
                                </span>
                            </div>
                            
                            <!-- Title & Excerpt -->
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-trust-900 leading-tight">
                                {{ $featuredPost->title }}
                            </h3>
                            <p class="text-trust-600 leading-relaxed">
                                {{ Str::limit($featuredPost->sub_title, 180) }}
                            </p>
                        </div>
                        
                        <!-- Author Info & Button -->
                        <div class="flex flex-wrap items-center justify-between gap-6 mt-8 pt-6 border-t border-trust-100">
                            <div class="flex items-center gap-3">
                                <img src="{{ $featuredPost->user->avatar ? (str_starts_with($featuredPost->user->avatar, 'http') ? $featuredPost->user->avatar : asset($featuredPost->user->avatar)) : 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($featuredPost->user->email))) . '?d=mp' }}" alt="{{ $featuredPost->user->name() }}" class="h-11 w-11 rounded-full object-cover border border-trust-200">
                                <div>
                                    <p class="text-sm font-bold text-trust-900">{{ $featuredPost->user->name() }}</p>
                                    <p class="text-xs text-trust-500">Dokter Kontributor</p>
                                </div>
                            </div>
                            
                            <a href="{{ route('artikel-kesehatan.show', ['post' => $featuredPost->slug]) }}" class="rounded-full bg-medical-600 px-6 py-3.5 text-sm font-bold text-white shadow-md hover:bg-medical-700 hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                                Baca Artikel Lengkap
                            </a>
                        </div>
                    </div>
                    
                    <!-- Image Area (Right) -->
                    <div class="lg:col-span-5 h-64 lg:h-auto min-h-[300px] relative">
                        <img src="{{ $featuredPost->featurePhoto }}" alt="{{ $featuredPost->photo_alt_text }}" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                </div>
            @endif
            
            <!-- Recent Articles Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($recentPosts as $post)
                    <div class="group rounded-3xl border border-trust-200/60 bg-white overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgba(15,23,42,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <!-- Cover Image -->
                            <div class="h-48 overflow-hidden relative bg-trust-100">
                                <img src="{{ $post->featurePhoto }}" alt="{{ $post->photo_alt_text }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-4 left-4 text-xs font-bold text-medical-800 bg-white/95 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm uppercase tracking-wide">
                                    {{ $post->categories->first()?->name ?? 'Artikel' }}
                                </span>
                            </div>
                            
                            <!-- Body -->
                            <div class="p-6 space-y-3">
                                <h3 class="font-bold text-trust-900 group-hover:text-medical-600 transition-colors text-lg leading-snug">
                                    {{ $post->title }}
                                </h3>
                                <p class="text-sm text-trust-600 leading-relaxed line-clamp-3">
                                    {{ Str::limit($post->sub_title, 120) }}
                                </p>
                            </div>
                        </div>
                        
                        <!-- Footer -->
                        <div class="px-6 pb-6 pt-4 border-t border-trust-100 flex items-center justify-between bg-trust-50/30">
                            <span class="text-xs text-trust-500 font-medium">
                                {{ $post->formattedPublishedDate() }}
                            </span>
                            <a href="{{ route('artikel-kesehatan.show', ['post' => $post->slug]) }}" class="text-sm font-bold text-medical-600 hover:text-medical-700 transition-colors">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- STATS SECTION (Navy Background, Elegant Numbers, Icon-free) -->
    <section id="statistik" class="py-20 bg-trust-900 text-white relative overflow-hidden">
        <!-- Abstract gradient overlays -->
        <div class="absolute -bottom-40 -left-40 h-96 w-96 rounded-full bg-medical-700/20 blur-3xl"></div>
        <div class="absolute -top-40 -right-40 h-96 w-96 rounded-full bg-medical-500/10 blur-3xl"></div>

        <div class="mx-auto max-w-7xl px-6 relative z-10 grid lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-5 space-y-6">
                <span class="text-xs font-bold text-medical-400 uppercase tracking-wider bg-medical-950/60 px-3 py-1 rounded-full border border-medical-800/40">Laporan Statistik</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight">
                    Komitmen Kami Melayani Masyarakat Digital
                </h2>
                <p class="text-trust-300 leading-relaxed text-sm">
                    Klinik Koehried menyajikan data transparan mengenai kontribusi edukasi kesehatan, tim dokter terdaftar, dan jumlah layanan pasien aktif.
                </p>
            </div>
            
            <!-- Metrics Display -->
            <div class="lg:col-span-7 grid sm:grid-cols-3 gap-6">
                <div class="rounded-3xl border border-trust-800 bg-trust-800/40 p-6 backdrop-blur-sm">
                    <span class="text-xs font-bold text-medical-400 uppercase tracking-widest block mb-2">Edukasi</span>
                    <p class="text-4xl font-black text-white tracking-tight">{{ $stats['articles'] }}</p>
                    <p class="text-xs text-trust-300 mt-2 font-medium">Artikel Medis Terbit</p>
                </div>
                
                <div class="rounded-3xl border border-trust-800 bg-trust-800/40 p-6 backdrop-blur-sm">
                    <span class="text-xs font-bold text-medical-400 uppercase tracking-widest block mb-2">Topik Medis</span>
                    <p class="text-4xl font-black text-white tracking-tight">{{ $stats['categories'] }}</p>
                    <p class="text-xs text-trust-300 mt-2 font-medium">Kategori Tersedia</p>
                </div>
                
                <div class="rounded-3xl border border-trust-800 bg-trust-800/40 p-6 backdrop-blur-sm">
                    <span class="text-xs font-bold text-medical-400 uppercase tracking-widest block mb-2">Sumber Daya</span>
                    <p class="text-4xl font-black text-white tracking-tight">{{ $stats['doctors'] }} / {{ $stats['patients'] }}</p>
                    <p class="text-xs text-trust-300 mt-2 font-medium">Tenaga Medis & Pasien</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER SECTION (Deep Navy & Slate Layout) -->
    <footer class="bg-trust-900 border-t border-trust-800 py-16 text-trust-500">
        <div class="mx-auto max-w-7xl px-6 grid md:grid-cols-12 gap-12">
            <!-- Left Info -->
            <div class="md:col-span-6 space-y-6">
                <div class="flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-tr from-medical-600 to-medical-500 font-extrabold text-white text-lg tracking-wider">
                        KK
                    </span>
                    <span class="text-xl font-bold tracking-tight text-white">
                        Klinik <span class="text-medical-500">Koehried</span>
                    </span>
                </div>
                <p class="text-sm text-trust-300 max-w-md leading-relaxed">
                    Platform informasi medis terpadu dan sistem pelayanan kesehatan Klinik Koehried. Membantu Anda mendapatkan artikel medis berkualitas, tepercaya, dan mudah dipahami langsung dari sumbernya.
                </p>
                <p class="text-xs text-trust-500/80">
                    &copy; {{ date('Y') }} Klinik Koehried. Hak Cipta Dilindungi Undang-Undang.
                </p>
            </div>
            
            <!-- Right CTA & Hours -->
            <div class="md:col-span-6 flex flex-col justify-between items-start md:items-end gap-6">
                <div class="space-y-2 md:text-right">
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider">Waktu Layanan Klinik</h4>
                    <p class="text-sm text-trust-300">Senin - Sabtu: 08:00 - 20:00 WIB</p>
                    <p class="text-sm text-trust-500/60">Unit Gawat Darurat & Apotek: Buka 24 Jam</p>
                </div>
                
                <a href="{{ route('artikel-kesehatan.index') }}" class="rounded-full bg-medical-600 px-8 py-4 font-bold text-white shadow-lg shadow-medical-600/10 hover:bg-medical-700 hover:shadow-xl hover:shadow-medical-600/20 transition-all transform hover:-translate-y-0.5">
                    Kunjungi Blog Kesehatan
                </a>
            </div>
        </div>
    </footer>
</main>

</body>
</html>