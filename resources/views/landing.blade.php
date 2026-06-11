@php
    $heroButtonClasses = 'inline-flex items-center gap-3 rounded-full bg-primary-600 px-8 py-4 text-sm font-semibold text-white shadow-lg shadow-primary-500/20 transition hover:bg-primary-700';
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Koehried - Edukasi Kesehatan & Artikel Dokter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #F8FAFC; color: #111827; }
        .hero-glow { box-shadow: 0 30px 100px rgba(249, 115, 22, 0.12); }
        .glass-card { background: rgba(255,255,255,0.82); backdrop-filter: blur(14px); }
    </style>
</head>
<body class="antialiased">
    <header class="border-b border-slate-200 bg-white/80 backdrop-blur-sm sticky top-0 z-50">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-3 text-lg font-bold text-slate-900">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-primary-500 text-white">K</span>
                Klinik Koehried
            </a>
            <nav class="hidden items-center gap-8 text-sm font-medium text-slate-600 lg:flex">
                <a href="#why" class="hover:text-slate-900 transition">Mengapa Klinik</a>
                <a href="#features" class="hover:text-slate-900 transition">Edukasi</a>
                <a href="#articles" class="hover:text-slate-900 transition">Artikel</a>
                <a href="#statistik" class="hover:text-slate-900 transition">Laporan</a>
            </nav>
            <a href="{{ route('artikel-kesehatan.index') }}" class="rounded-full border border-slate-200 bg-white px-5 py-2 text-sm font-semibold text-slate-900 transition hover:border-slate-300 hover:bg-slate-50">Kunjungi Blog</a>
        </div>
    </header>

    <main class="mx-auto max-w-7xl px-6 py-10 lg:px-8">
        <section class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
            <div class="space-y-6">
                <p class="inline-flex rounded-full bg-primary-100 px-4 py-2 text-sm font-semibold text-primary-700">Edukasi Kesehatan</p>
                <h1 class="max-w-3xl text-4xl font-extrabold tracking-tight text-slate-950 sm:text-5xl">Klinik Koehried: Portal Kesehatan dan Artikel Dokter yang Mudah Dipahami</h1>
                <p class="max-w-2xl text-base leading-8 text-slate-600">Temukan informasi medis terpercaya, tips kesehatan harian, dan artikel dokter untuk keluarga Anda. Semua dirancang agar lebih mudah dibaca dan langsung membantu keputusan kesehatan.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#articles" class="{{ $heroButtonClasses }}">Lihat Artikel Terbaru</a>
                    <a href="#why" class="inline-flex items-center rounded-full border border-slate-300 px-6 py-4 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-primary-500 to-orange-400 p-1 shadow-2xl shadow-primary-500/20">
                <div class="glass-card rounded-[1.75rem] p-8 text-white">
                    <div class="mb-8 flex items-center justify-between rounded-3xl bg-white/10 px-5 py-4 shadow-lg shadow-black/5">
                        <div>
                            <p class="text-sm uppercase tracking-[0.3em] text-white/70">Klinik Koehried</p>
                            <h2 class="text-2xl font-semibold">Layanan Digital</h2>
                        </div>
                        <div class="rounded-2xl bg-white/20 px-4 py-3 text-center">
                            <p class="text-xs uppercase text-white/70">Update</p>
                            <p class="text-lg font-bold">Realtime</p>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="rounded-3xl bg-white/15 p-5">
                                <p class="text-sm text-white/80">Artikel Terbit</p>
                                <p class="mt-4 text-3xl font-semibold">{{ $stats['articles'] }}</p>
                            </div>
                            <div class="rounded-3xl bg-white/15 p-5">
                                <p class="text-sm text-white/80">Kategori Edukasi</p>
                                <p class="mt-4 text-3xl font-semibold">{{ $stats['categories'] }}</p>
                            </div>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="rounded-3xl bg-white/15 p-5">
                                <p class="text-sm text-white/80">Dokter Tersedia</p>
                                <p class="mt-4 text-3xl font-semibold">{{ $stats['doctors'] }}</p>
                            </div>
                            <div class="rounded-3xl bg-white/15 p-5">
                                <p class="text-sm text-white/80">Pasien Terlayani</p>
                                <p class="mt-4 text-3xl font-semibold">{{ $stats['patients'] }}</p>
                            </div>
                        </div>
                        <div class="rounded-[1.75rem] bg-white/15 p-6">
                            <p class="text-sm uppercase tracking-[0.4em] text-white/75">Kesan pengguna</p>
                            <p class="mt-4 text-lg leading-8">"Platform yang simpel, responsif, dan membantu saya memahami rekomendasi dokter dengan cepat."</p>
                            <p class="mt-4 font-semibold">— Farah, pasien</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="why" class="mt-24 rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm shadow-slate-200/50">
            <div class="grid gap-8 lg:grid-cols-2">
                <div class="space-y-4">
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary-600">Kenapa pilih Klinik Koehried?</p>
                    <h2 class="text-3xl font-bold text-slate-950">Konten medis jernih untuk semua usia, langsung dari praktisi kesehatan.</h2>
                    <p class="text-slate-600">Kami memberikan panduan yang mudah dimengerti, ringkasan masalah kesehatan umum, dan insight dokter yang relevan untuk kebutuhan keluarga Anda.</p>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    <article class="rounded-3xl border border-slate-200 p-6">
                        <p class="text-sm font-semibold text-primary-700">Praktis</p>
                        <h3 class="mt-3 text-xl font-semibold text-slate-950">Ringkas & langsung ke inti</h3>
                        <p class="mt-3 text-slate-600">Artikel ditulis untuk memudahkan keputusan sehari-hari tanpa jargon yang sulit.</p>
                    </article>
                    <article class="rounded-3xl border border-slate-200 p-6">
                        <p class="text-sm font-semibold text-primary-700">Terpercaya</p>
                        <h3 class="mt-3 text-xl font-semibold text-slate-950">Konten dokter & spesialis</h3>
                        <p class="mt-3 text-slate-600">Konten divalidasi oleh tim medis agar tetap akurat dan relevan.</p>
                    </article>
                    <article class="rounded-3xl border border-slate-200 p-6">
                        <p class="text-sm font-semibold text-primary-700">Terstruktur</p>
                        <h3 class="mt-3 text-xl font-semibold text-slate-950">Kategori kesehatan</h3>
                        <p class="mt-3 text-slate-600">Temukan topik kesehatan populer, mulai dari gaya hidup hingga perawatan medis.</p>
                    </article>
                    <article class="rounded-3xl border border-slate-200 p-6">
                        <p class="text-sm font-semibold text-primary-700">Akses cepat</p>
                        <h3 class="mt-3 text-xl font-semibold text-slate-950">Tampilan mobile-friendly</h3>
                        <p class="mt-3 text-slate-600">Cocok dibaca dari ponsel, tablet, maupun desktop kapan saja.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="features" class="mt-24">
            <div class="flex flex-col items-center gap-4 text-center">
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary-600">Edukasi untuk pengguna</p>
                <h2 class="text-3xl font-bold text-slate-950">Topik edukasi kesehatan populer</h2>
                <p class="max-w-2xl text-slate-600">Kategori yang paling banyak dicari pasien dan keluarga untuk memulai gaya hidup sehat.</p>
            </div>
            <div class="mt-10 grid gap-5 lg:grid-cols-3">
                @foreach($categories as $category)
                <article class="rounded-[1.75rem] border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="mb-4 inline-flex h-16 w-16 items-center justify-center rounded-3xl bg-primary-50 text-primary-700">{{ strtoupper(substr($category->name, 0, 2)) }}</div>
                    <h3 class="text-xl font-semibold text-slate-950">{{ $category->name }}</h3>
                    <p class="mt-3 text-slate-600">{{ $category->posts_count }} artikel praktis dari dokter dan tenaga medis.</p>
                </article>
                @endforeach
            </div>
        </section>

        <section id="articles" class="mt-24">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary-600">Artikel terbaru</p>
                    <h2 class="text-3xl font-bold text-slate-950">Pilihan bacaan paling direkomendasikan</h2>
                </div>
                <a href="{{ route('artikel-kesehatan.index') }}" class="inline-flex items-center rounded-full border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-50">Lihat semua artikel</a>
            </div>
            <div class="mt-10 grid gap-6 lg:grid-cols-3">
                @if($featuredPost)
                <article class="col-span-full overflow-hidden rounded-[2rem] bg-gradient-to-br from-primary-500 to-orange-400 p-8 text-white shadow-2xl shadow-primary-500/20">
                    <p class="text-sm uppercase tracking-[0.3em] text-white/80">Artikel Unggulan</p>
                    <h3 class="mt-4 text-3xl font-bold">{{ $featuredPost->title }}</h3>
                    <p class="mt-5 max-w-2xl text-base leading-8 text-white/90">{{ Str::limit($featuredPost->sub_title, 160) }}</p>
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        @foreach($featuredPost->categories as $category)
                        <span class="rounded-full bg-white/15 px-3 py-1 text-sm font-semibold text-white">{{ $category->name }}</span>
                        @endforeach
                    </div>
                    <div class="mt-8 flex items-center gap-4">
                        <img class="h-14 w-14 rounded-full border border-white/25 object-cover" src="{{ asset($featuredPost->user->avatar) }}" alt="{{ $featuredPost->user->name() }}">
                        <div>
                            <p class="text-sm text-white/80">Ditulis oleh</p>
                            <p class="font-semibold">{{ $featuredPost->user->name() }}</p>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="{{ route('artikel-kesehatan.show', ['post' => $featuredPost->slug]) }}" class="inline-flex items-center gap-3 rounded-full bg-white px-6 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">Baca sekarang</a>
                    </div>
                </article>
                @endif

                @foreach($recentPosts as $post)
                <article class="rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                    <img class="h-56 w-full rounded-3xl object-cover" src="{{ asset($post->featurePhoto) }}" alt="{{ $post->photo_alt_text }}">
                    <div class="mt-5">
                        <p class="text-sm uppercase tracking-[0.3em] text-primary-600">{{ $post->categories->first()?->name ?? 'Artikel' }}</p>
                        <h3 class="mt-3 text-2xl font-semibold text-slate-950">{{ $post->title }}</h3>
                        <p class="mt-4 text-slate-600">{{ Str::limit($post->sub_title, 130) }}</p>
                    </div>
                    <div class="mt-6 flex items-center justify-between text-sm text-slate-500">
                        <span>{{ $post->formattedPublishedDate() }}</span>
                        <a href="{{ route('artikel-kesehatan.show', ['post' => $post->slug]) }}" class="font-semibold text-primary-600 hover:text-primary-700">Baca</a>
                    </div>
                </article>
                @endforeach
            </div>
        </section>

        <section id="statistik" class="mt-24 rounded-[2rem] bg-slate-950 px-8 py-12 text-white shadow-2xl shadow-slate-900/10">
            <div class="grid gap-10 lg:grid-cols-4">
                <div class="space-y-4">
                    <p class="text-sm uppercase tracking-[0.3em] text-primary-300">Laporan inti</p>
                    <h2 class="text-2xl font-bold">Ringkasan layanan Klinik Koehried</h2>
                    <p class="text-slate-300">Data real-time pengguna, artikel, dan capaian edukasi kesehatan untuk membantu pengalaman pasien menjadi lebih baik.</p>
                </div>
                <div class="rounded-[1.75rem] bg-white/8 p-7">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-300">Artikel</p>
                    <p class="mt-4 text-4xl font-bold">{{ $stats['articles'] }}</p>
                    <p class="mt-2 text-sm text-slate-300">Artikel edukasi yang sudah terbit</p>
                </div>
                <div class="rounded-[1.75rem] bg-white/8 p-7">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-300">Kategori</p>
                    <p class="mt-4 text-4xl font-bold">{{ $stats['categories'] }}</p>
                    <p class="mt-2 text-sm text-slate-300">Subtopik kesehatan yang tersedia</p>
                </div>
                <div class="rounded-[1.75rem] bg-white/8 p-7">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-300">Dokter & Pasien</p>
                    <p class="mt-4 text-4xl font-bold">{{ $stats['doctors'] }} / {{ $stats['patients'] }}</p>
                    <p class="mt-2 text-sm text-slate-300">Tenaga medis dan pasien aktif</p>
                </div>
            </div>
        </section>

        <footer class="mt-24 rounded-[2rem] border border-slate-200 bg-white px-8 py-12 text-slate-600 shadow-sm shadow-slate-200/50">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary-600">Klinik Koehried</p>
                    <h3 class="mt-4 text-2xl font-bold text-slate-950">Selalu siap membantu</h3>
                    <p class="mt-3 max-w-md">Platform edukasi kesehatan yang memberi Anda bingkai informasi terpercaya dan akses ke artikel dokter untuk keputusan kesehatan sehari-hari.</p>
                </div>
                <a href="{{ route('artikel-kesehatan.index') }}" class="inline-flex items-center rounded-full bg-slate-950 px-7 py-4 text-sm font-semibold text-white transition hover:bg-slate-800">Mulai Baca Sekarang</a>
            </div>
        </footer>
    </main>
</body>
</html>
