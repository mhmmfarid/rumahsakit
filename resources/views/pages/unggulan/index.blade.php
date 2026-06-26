<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pusat Unggulan - Klinik Koehried</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { brand: { 50: '#eff6ff', 100: '#dbeafe', 400: '#60a5fa', 500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8', 800: '#1e40af', 900: '#1e3a8a' }, ink: { 50: '#f8fafc', 100: '#f1f5f9', 200: '#e2e8f0', 300: '#cbd5e1', 400: '#94a3b8', 500: '#64748b', 600: '#475569', 700: '#334155', 800: '#1e293b', 900: '#0f172a', 950: '#020617' } },
                    fontFamily: { display: ['Plus Jakarta Sans', 'sans-serif'], body: ['Inter', 'sans-serif'] },
                }
            }
        }
    </script>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Inter', sans-serif; background: #f8fafc; color: #1e293b; -webkit-font-smoothing: antialiased; overflow-x: hidden; }
        .glass-light { background: rgba(255,255,255,0.72); border: 1px solid rgba(255,255,255,0.45); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); }
        .sr { opacity: 0; transform: translateY(32px); transition: opacity .75s cubic-bezier(.16,1,.3,1), transform .75s cubic-bezier(.16,1,.3,1); }
        .sr.visible { opacity: 1; transform: none; }
        .sr-delay-1 { transition-delay: .1s; }
        .sr-delay-2 { transition-delay: .18s; }
        .sr-delay-3 { transition-delay: .26s; }
        .center-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 24px; padding: 2rem; transition: all .3s ease; }
        .center-card:hover { border-color: #2563eb; box-shadow: 0 20px 40px -12px rgba(37,99,235,0.15); transform: translateY(-4px); }
        .center-card:hover .cc-icon { background: #2563eb; color: #fff; }
        .cc-icon { width: 52px; height: 52px; border-radius: 16px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; }
        @media (prefers-reduced-motion: reduce) { .sr { transition: none !important; } }
    </style>
</head>
<body>
    <div class="min-h-screen">
        <nav id="nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" style="background: rgba(255,255,255,0.98); box-shadow: 0 1px 0 rgba(15,23,42,0.06), 0 4px 24px rgba(15,23,42,0.04);">
            <div class="mx-auto max-w-7xl px-6 py-3.5 flex items-center justify-between">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <img src="{{ asset('storage/rs.avif') }}" alt="Logo" class="h-9 w-9 object-contain" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2236%22 height=%2236%22 viewBox=%220 0 36 36%22%3E%3Crect width=%2236%22 height=%2236%22 rx=%228%22 fill=%22%232563eb%22/%3E%3Ctext x=%2218%22 y=%2225%22 text-anchor=%22middle%22 font-size=%2218%22 font-weight=%22bold%22 fill=%22white%22 font-family=%22sans-serif%22%3EK%3C/text%3E%3C/svg%3E'">
                    <span class="font-display font-bold text-lg text-ink-900">Klinik <span class="text-brand-600">Koehried</span></span>
                </a>
                <div class="hidden md:flex items-center gap-6 text-sm font-medium">
                    <a href="{{ route('home') }}" class="text-ink-500 hover:text-brand-600">Beranda</a>
                    <a href="{{ route('layanan.index') }}" class="text-ink-500 hover:text-brand-600">Layanan</a>
                    <a href="{{ route('unggulan.index') }}" class="text-brand-600 font-semibold">Pusat Unggulan</a>
                    <a href="{{ route('artikel-kesehatan.index') }}" class="text-ink-500 hover:text-brand-600">Artikel</a>
                    <a href="{{ route('tentang') }}" class="text-ink-500 hover:text-brand-600">Tentang</a>
                </div>
                <a href="{{ route('filament.admin.auth.login') }}" class="hidden md:inline-flex rounded-full bg-brand-600 hover:bg-brand-700 px-5 py-2 text-sm font-bold text-white shadow-lg shadow-brand-600/20 transition-all hover:-translate-y-0.5">Login</a>
            </div>
        </nav>

        <section class="pt-28 pb-16 bg-gradient-to-b from-brand-50 to-white">
            <div class="mx-auto max-w-7xl px-6">
                <div class="max-w-3xl mx-auto text-center">
                    <span class="text-sm font-bold text-brand-600 uppercase tracking-wider bg-brand-100/60 px-3 py-1 rounded-full border border-brand-200">Unggulan</span>
                    <h1 class="font-display text-4xl sm:text-5xl font-extrabold text-ink-900 mt-6 leading-tight">Pusat Unggulan</h1>
                    <p class="text-ink-600 mt-4 text-lg max-w-xl mx-auto">Pusat layanan spesialis dengan teknologi terkini dan tim dokter subspesialis berpengalaman.</p>
                </div>
            </div>
        </section>

        <section class="pb-28">
            <div class="mx-auto max-w-7xl px-6">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($centers as $slug => $c)
                    <a href="{{ route('unggulan.show', $slug) }}" class="center-card sr sr-delay-{{ min(($loop->index % 4) + 1, 4) }}">
                        <div class="cc-icon {{ $c['iconBg'] }} mb-4">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $c['icon'] }}" /></svg>
                        </div>
                        <h3 class="font-display font-bold text-ink-900 text-lg mb-2">{{ $c['name'] }}</h3>
                        <p class="text-sm text-ink-500 leading-relaxed line-clamp-2">{{ $c['description'] }}</p>
                        <div class="mt-4 flex items-center gap-1 text-sm font-semibold text-brand-600">
                            Selengkapnya
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <footer class="bg-ink-950 border-t border-ink-800/50 py-12">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 pb-8 border-b border-ink-800/50">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('storage/rs.avif') }}" alt="Logo" class="h-8 w-8 object-contain brightness-0 invert" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2232%22 height=%2232%22 viewBox=%220 0 32 32%22%3E%3Crect width=%2232%22 height=%2232%22 rx=%226%22 fill=%22%232563eb%22/%3E%3C/svg%3E'">
                    <span class="font-display font-bold text-lg text-white">Klinik <span class="text-brand-400">Koehried</span></span>
                </div>
                <div class="flex gap-6 text-sm text-slate-500">
                    <a href="{{ route('home') }}" class="hover:text-slate-200">Beranda</a>
                    <a href="{{ route('layanan.index') }}" class="hover:text-slate-200">Layanan</a>
                    <a href="{{ route('unggulan.index') }}" class="hover:text-slate-200">Pusat Unggulan</a>
                    <a href="{{ route('tentang') }}" class="hover:text-slate-200">Tentang</a>
                    <a href="{{ route('kontak') }}" class="hover:text-slate-200">Kontak</a>
                </div>
            </div>
            <div class="pt-8 text-center text-xs text-slate-600">&copy; {{ date('Y') }} Klinik Koehried. All rights reserved.</div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('.sr').forEach(el => {
            new IntersectionObserver(e => { if (e[0].isIntersecting) { e[0].target.classList.add('visible'); } }, { threshold: 0.1 }).observe(el);
        });
    </script>
</body>
</html>
