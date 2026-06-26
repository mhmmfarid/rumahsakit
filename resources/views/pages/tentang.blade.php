<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami - Klinik Koehried</title>
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
        .sr { opacity: 0; transform: translateY(28px); transition: opacity .65s cubic-bezier(.16,1,.3,1), transform .65s cubic-bezier(.16,1,.3,1); }
        .sr.visible { opacity: 1; transform: none; }
    </style>
</head>
<body>
    <nav id="nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" style="background: rgba(255,255,255,0.98); box-shadow: 0 1px 0 rgba(15,23,42,0.06), 0 4px 24px rgba(15,23,42,0.04);">
        <div class="mx-auto max-w-7xl px-6 py-3.5 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('storage/rs.avif') }}" alt="Logo" class="h-9 w-9 object-contain" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2236%22 height=%2236%22 viewBox=%220 0 36 36%22%3E%3Crect width=%2236%22 height=%2236%22 rx=%228%22 fill=%22%232563eb%22/%3E%3Ctext x=%2218%22 y=%2225%22 text-anchor=%22middle%22 font-size=%2218%22 font-weight=%22bold%22 fill=%22white%22 font-family=%22sans-serif%22%3EK%3C/text%3E%3C/svg%3E'">
                <span class="font-display font-bold text-lg text-ink-900">Klinik <span class="text-brand-600">Koehried</span></span>
            </a>
            <div class="hidden md:flex items-center gap-6 text-sm font-medium">
                <a href="{{ route('home') }}" class="text-ink-500 hover:text-brand-600">Beranda</a>
                <a href="{{ route('layanan.index') }}" class="text-ink-500 hover:text-brand-600">Layanan</a>
                <a href="{{ route('unggulan.index') }}" class="text-ink-500 hover:text-brand-600">Pusat Unggulan</a>
                <a href="{{ route('artikel-kesehatan.index') }}" class="text-ink-500 hover:text-brand-600">Artikel</a>
                <a href="{{ route('tentang') }}" class="text-brand-600 font-semibold">Tentang</a>
            </div>
            <a href="{{ route('filament.admin.auth.login') }}" class="hidden md:inline-flex rounded-full bg-brand-600 hover:bg-brand-700 px-5 py-2 text-sm font-bold text-white shadow-lg shadow-brand-600/20 transition-all hover:-translate-y-0.5">Login</a>
        </div>
    </nav>

    <section class="pt-28 pb-20 bg-gradient-to-br from-ink-900 via-ink-800 to-ink-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5" style="background-image:url('data:image/svg+xml,%3Csvg width=60 height=60 viewBox=0 0 60 60 xmlns=http://www.w3.org/2000/svg%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%23ffffff%22 fill-opacity=%221%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        <div class="mx-auto max-w-7xl px-6 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <span class="text-sm font-bold text-cyan-400 uppercase tracking-wider bg-cyan-500/10 px-3 py-1 rounded-full border border-cyan-500/20">Tentang Kami</span>
                <h1 class="font-display text-4xl sm:text-5xl font-extrabold mt-6 leading-tight">Klinik Koehried — <span class="grad-text" style="background: linear-gradient(90deg, #60a5fa 0%, #06b6d4 60%, #34d399 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Mitra Kesehatan Anda</span></h1>
                <p class="text-slate-300 mt-4 text-lg leading-relaxed">Klinik Koehried hadir sebagai solusi pelayanan kesehatan terintegrasi yang menggabungkan profesionalisme medis dengan inovasi teknologi.</p>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="sr">
                    <h2 class="font-display text-3xl font-extrabold text-ink-900">Visi & Misi Kami</h2>
                    <div class="mt-8 space-y-6">
                        <div class="bg-white rounded-2xl border border-ink-200 p-6">
                            <div class="h-10 w-10 rounded-xl bg-brand-100 flex items-center justify-center text-brand-600 mb-4"><svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg></div>
                            <h3 class="font-display font-bold text-ink-900 text-lg">Visi</h3>
                            <p class="text-ink-600 mt-2 leading-relaxed">Menjadi klinik terdepan dalam pelayanan kesehatan berbasis teknologi di Indonesia yang memberikan dampak positif bagi masyarakat.</p>
                        </div>
                        <div class="bg-white rounded-2xl border border-ink-200 p-6">
                            <div class="h-10 w-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600 mb-4"><svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg></div>
                            <h3 class="font-display font-bold text-ink-900 text-lg">Misi</h3>
                            <p class="text-ink-600 mt-2 leading-relaxed">Memberikan pelayanan medis berkualitas dengan didukung sistem informasi yang modern, terintegrasi, dan berorientasi pada keselamatan pasien.</p>
                        </div>
                    </div>
                </div>
                <div class="sr">
                    <img src="{{ asset('images/hospital_building.png') }}" alt="Klinik Koehried" class="rounded-3xl shadow-2xl w-full object-cover" style="max-height: 420px;">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white border-t border-ink-200/50">
        <div class="mx-auto max-w-7xl px-6">
            <div class="text-center max-w-2xl mx-auto mb-16 sr">
                <h2 class="font-display text-3xl font-extrabold text-ink-900">Mengapa Memilih Kami</h2>
                <p class="text-ink-600 mt-4">Komitmen kami dalam memberikan pelayanan kesehatan terbaik bagi setiap pasien.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center sr">
                    <div class="h-16 w-16 rounded-2xl bg-brand-100 flex items-center justify-center text-brand-600 mx-auto mb-5"><svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg></div>
                    <h3 class="font-display font-bold text-ink-900 text-lg">Terpercaya</h3>
                    <p class="text-sm text-ink-600 mt-2 leading-relaxed">Terakreditasi Kemenkes RI dengan standar mutu pelayanan nasional.</p>
                </div>
                <div class="text-center sr">
                    <div class="h-16 w-16 rounded-2xl bg-cyan-100 flex items-center justify-center text-cyan-600 mx-auto mb-5"><svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div>
                    <h3 class="font-display font-bold text-ink-900 text-lg">24 Jam Siaga</h3>
                    <p class="text-sm text-ink-600 mt-2 leading-relaxed">Layanan IGD dan apotek tersedia 24 jam untuk kebutuhan darurat Anda.</p>
                </div>
                <div class="text-center sr">
                    <div class="h-16 w-16 rounded-2xl bg-purple-100 flex items-center justify-center text-purple-600 mx-auto mb-5"><svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" /></svg></div>
                    <h3 class="font-display font-bold text-ink-900 text-lg">Teknologi Modern</h3>
                    <p class="text-sm text-ink-600 mt-2 leading-relaxed">Didukung sistem informasi dan peralatan medis terkini untuk diagnosis akurat.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-ink-950 border-t border-ink-800/50 py-12">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 pb-8 border-b border-ink-800/50">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('storage/rs.avif') }}" alt="Logo" class="h-8 w-8 object-contain brightness-0 invert">
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
