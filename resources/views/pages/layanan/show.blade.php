<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $service['name'] }} - Klinik Koehried</title>
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
        .glass { background: rgba(255,255,255,0.72); border: 1px solid rgba(255,255,255,0.45); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); }
        .sr { opacity: 0; transform: translateY(28px); transition: opacity .65s cubic-bezier(.16,1,.3,1), transform .65s cubic-bezier(.16,1,.3,1); }
        .sr.visible { opacity: 1; transform: none; }
        .sr-delay-1 { transition-delay: .1s; }
        .sr-delay-2 { transition-delay: .18s; }
        .sr-delay-3 { transition-delay: .26s; }
        .detail-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 1.75rem; transition: border-color .25s, box-shadow .25s; }
        .detail-card:hover { border-color: #2563eb; box-shadow: 0 12px 32px -8px rgba(37,99,235,0.1); }
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.35s cubic-bezier(0.22,1,0.36,1), padding 0.35s cubic-bezier(0.22,1,0.36,1); padding: 0 1.5rem; }
        .faq-answer.open { max-height: 300px; padding: 0 1.5rem 1.25rem; }
        .faq-chevron { transition: transform 0.3s ease; }
        .faq-chevron.open { transform: rotate(180deg); }
        @media (prefers-reduced-motion: reduce) { .sr { transition: none !important; } }
    </style>
</head>
<body>
    <!-- Nav -->
    <nav id="nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" style="background: rgba(255,255,255,0.98); box-shadow: 0 1px 0 rgba(15,23,42,0.06), 0 4px 24px rgba(15,23,42,0.04);">
        <div class="mx-auto max-w-7xl px-6 py-3.5 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('storage/rs.avif') }}" alt="Logo" class="h-9 w-9 object-contain" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2236%22 height=%2236%22 viewBox=%220 0 36 36%22%3E%3Crect width=%2236%22 height=%2236%22 rx=%228%22 fill=%22%232563eb%22/%3E%3Ctext x=%2218%22 y=%2225%22 text-anchor=%22middle%22 font-size=%2218%22 font-weight=%22bold%22 fill=%22white%22 font-family=%22sans-serif%22%3EK%3C/text%3E%3C/svg%3E'">
                <span class="font-display font-bold text-lg text-ink-900">Klinik <span class="text-brand-600">Koehried</span></span>
            </a>
            <div class="hidden md:flex items-center gap-6 text-sm font-medium">
                <a href="{{ route('home') }}" class="text-ink-500 hover:text-brand-600 transition-colors">Beranda</a>
                <a href="{{ route('layanan.index') }}" class="text-ink-500 hover:text-brand-600 transition-colors">Layanan</a>
                <a href="{{ route('unggulan.index') }}" class="text-ink-500 hover:text-brand-600 transition-colors">Pusat Unggulan</a>
                <a href="{{ route('artikel-kesehatan.index') }}" class="text-ink-500 hover:text-brand-600 transition-colors">Artikel</a>
                <a href="{{ route('tentang') }}" class="text-ink-500 hover:text-brand-600 transition-colors">Tentang</a>
            </div>
            <a href="{{ route('filament.admin.auth.login') }}" class="hidden md:inline-flex rounded-full bg-brand-600 hover:bg-brand-700 px-5 py-2 text-sm font-bold text-white shadow-lg shadow-brand-600/20 transition-all hover:-translate-y-0.5">Login</a>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <section class="pt-24 pb-4 bg-gradient-to-b from-brand-50/50 to-white">
        <div class="mx-auto max-w-7xl px-6">
            <nav class="text-sm text-ink-500 flex items-center gap-2">
                <a href="{{ route('home') }}" class="hover:text-brand-600 transition-colors">Beranda</a>
                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                <a href="{{ route('layanan.index') }}" class="hover:text-brand-600 transition-colors">Layanan</a>
                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                <span class="text-ink-800 font-medium">{{ $service['name'] }}</span>
            </nav>
        </div>
    </section>

    <!-- Hero -->
    <section class="pb-12 bg-gradient-to-b from-white to-ink-50/20">
        <div class="mx-auto max-w-7xl px-6">
            <div class="glass rounded-3xl p-8 sm:p-12 shadow-xl border border-white/50" style="background: linear-gradient(135deg, rgba(37,99,235,0.04) 0%, rgba(255,255,255,0.9) 100%);">
                <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                    <div class="h-20 w-20 rounded-2xl {{ $service['iconBg'] }} flex items-center justify-center flex-shrink-0">
                        <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}" /></svg>
                    </div>
                    <div class="flex-1">
                        <h1 class="font-display text-3xl sm:text-4xl font-extrabold text-ink-900">{{ $service['name'] }}</h1>
                        <p class="text-ink-600 mt-3 text-base leading-relaxed max-w-3xl">{{ $service['description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="pb-28">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Main -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Manfaat -->
                    <div class="detail-card sr">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="h-8 w-8 rounded-lg bg-brand-50 text-brand-600 flex items-center justify-center"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg></div>
                            <h2 class="font-display font-bold text-xl text-ink-900">Manfaat Layanan</h2>
                        </div>
                        <ul class="grid sm:grid-cols-2 gap-3">
                            @foreach($service['benefits'] as $b)
                            <li class="flex items-start gap-3 text-sm text-ink-600">
                                <svg class="h-5 w-5 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                {{ $b }}
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Fasilitas -->
                    <div class="detail-card sr">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="h-8 w-8 rounded-lg bg-cyan-50 text-cyan-600 flex items-center justify-center"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg></div>
                            <h2 class="font-display font-bold text-xl text-ink-900">Fasilitas</h2>
                        </div>
                        <ul class="grid sm:grid-cols-2 gap-3">
                            @foreach($service['facilities'] as $f)
                            <li class="flex items-start gap-3 text-sm text-ink-600">
                                <svg class="h-5 w-5 text-cyan-500 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                {{ $f }}
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Prosedur -->
                    <div class="detail-card sr">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="h-8 w-8 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" /></svg></div>
                            <h2 class="font-display font-bold text-xl text-ink-900">Prosedur Pelayanan</h2>
                        </div>
                        <ol class="space-y-4">
                            @foreach($service['procedures'] as $i => $p)
                            <li class="flex items-start gap-4">
                                <span class="flex-shrink-0 h-7 w-7 rounded-full bg-brand-100 text-brand-700 flex items-center justify-center text-xs font-bold">{{ $i + 1 }}</span>
                                <span class="text-sm text-ink-600 pt-1">{{ $p }}</span>
                            </li>
                            @endforeach
                        </ol>
                    </div>

                    <!-- FAQ -->
                    @if(count($service['faq']) > 0)
                    <div class="detail-card sr">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="h-8 w-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div>
                            <h2 class="font-display font-bold text-xl text-ink-900">Pertanyaan Umum (FAQ)</h2>
                        </div>
                        <div class="space-y-3">
                            @foreach($service['faq'] as $faq)
                            <div class="border border-ink-200 rounded-2xl overflow-hidden">
                                <div class="faq-question flex items-center justify-between p-4 cursor-pointer select-none" role="button" tabindex="0">
                                    <span class="text-sm font-semibold text-ink-800 pr-4">{{ $faq['q'] }}</span>
                                    <svg class="faq-chevron h-4 w-4 text-ink-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                </div>
                                <div class="faq-answer">
                                    <p class="text-sm text-ink-600 leading-relaxed">{{ $faq['a'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Dokter Terkait -->
                    @if(count($service['doctors']) > 0)
                    <div class="detail-card sr">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="h-8 w-8 rounded-lg bg-teal-50 text-teal-600 flex items-center justify-center"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg></div>
                            <h2 class="font-display font-bold text-xl text-ink-900">Dokter Terkait</h2>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-4">
                            @foreach($service['doctors'] as $doc)
                            <div class="flex items-center gap-4 p-4 rounded-2xl bg-ink-50/60 border border-ink-100">
                                <div class="h-14 w-14 rounded-full bg-brand-100 flex items-center justify-center text-brand-700 font-bold text-lg flex-shrink-0">{{ substr($doc['name'], 0, 2) }}</div>
                                <div>
                                    <p class="font-semibold text-ink-900 text-sm">{{ $doc['name'] }}</p>
                                    <p class="text-xs text-ink-500 mt-0.5">{{ $doc['specialty'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Info Card -->
                    <div class="detail-card sr">
                        <h3 class="font-display font-bold text-lg text-ink-900 mb-4">Informasi Layanan</h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-brand-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <div>
                                    <p class="text-xs font-bold text-ink-500 uppercase tracking-wider">Jam Operasional</p>
                                    <p class="text-sm text-ink-800 font-medium mt-0.5">{{ $service['hours'] }}</p>
                                </div>
                            </div>
                            @if(count($service['requirements']) > 0)
                            <div class="border-t border-ink-100 pt-4">
                                <div class="flex items-start gap-3">
                                    <svg class="h-5 w-5 text-amber-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                    <div>
                                        <p class="text-xs font-bold text-ink-500 uppercase tracking-wider">Persyaratan</p>
                                        <ul class="mt-1 space-y-1">
                                            @foreach($service['requirements'] as $r)
                                            <li class="text-sm text-ink-600 flex items-start gap-2">
                                                <span class="text-ink-300">•</span> {{ $r }}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="rounded-2xl bg-gradient-to-br from-brand-600 to-brand-800 p-6 text-white sr" style="background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);">
                        <h3 class="font-display font-bold text-lg">Butuh Bantuan?</h3>
                        <p class="text-sm text-brand-200 mt-2 leading-relaxed">Hubungi kami untuk membuat janji atau konsultasi lebih lanjut tentang layanan ini.</p>
                        <div class="mt-5 flex flex-col gap-3">
                            <a href="tel:+6281234567890" class="flex items-center justify-center gap-2 rounded-full bg-white/20 hover:bg-white/30 backdrop-blur-sm px-5 py-3 text-sm font-bold transition-all">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                Hubungi +62 812-3456-7890
                            </a>
                            <a href="{{ route('kontak') }}" class="flex items-center justify-center gap-2 rounded-full bg-white text-brand-700 hover:bg-slate-100 px-5 py-3 text-sm font-bold transition-all">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                                Hubungi Kami
                            </a>
                        </div>
                    </div>

                    <!-- Layanan Lainnya -->
                    <div class="detail-card sr">
                        <h3 class="font-display font-bold text-sm text-ink-900 mb-3">Layanan Lainnya</h3>
                        <div class="space-y-1">
                            @foreach($allServices as $sSlug => $s)
                            @if($sSlug !== $slug)
                            <a href="{{ route('layanan.show', $sSlug) }}" class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-brand-50 text-sm text-ink-600 hover:text-brand-700 transition-all">
                                <div class="h-6 w-6 rounded-md {{ $s['iconBg'] }} flex items-center justify-center flex-shrink-0">
                                    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $s['icon'] }}" /></svg>
                                </div>
                                {{ $s['name'] }}
                            </a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
        (function() {
            // Scroll reveal
            document.querySelectorAll('.sr').forEach(el => {
                new IntersectionObserver(e => { if (e[0].isIntersecting) { e[0].target.classList.add('visible'); }, { threshold: 0.1 } }).observe(el);
            });

            // FAQ Accordion
            document.querySelectorAll('.faq-question').forEach(q => {
                q.addEventListener('click', function() {
                    const answer = this.nextElementSibling;
                    const chevron = this.querySelector('.faq-chevron');
                    const isOpen = answer.classList.contains('open');
                    document.querySelectorAll('.faq-answer.open').forEach(a => { a.classList.remove('open'); a.previousElementSibling.querySelector('.faq-chevron')?.classList.remove('open'); });
                    if (!isOpen) { answer.classList.add('open'); chevron?.classList.add('open'); }
                });
            });

            // Smooth scroll
            document.querySelectorAll('a[href^="#"]').forEach(a => {
                a.addEventListener('click', e => {
                    const t = document.querySelector(a.getAttribute('href'));
                    if (t) { e.preventDefault(); window.scrollTo({ top: t.offsetTop - 80, behavior: 'smooth' }); }
                });
            });
        })();
    </script>
</body>
</html>
