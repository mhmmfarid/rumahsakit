<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Klinik Koehried - Sistem Informasi Rumah Sakit Modern</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        },
                        ink: {
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
                            950: '#020617',
                        }
                    },
                    fontFamily: {
                        display: ['Plus Jakarta Sans', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --navy: #06111e;
            --blue: #2563eb;
            --cyan: #06b6d4;
            --slate: #1e293b;
            --glass-bg: rgba(255, 255, 255, 0.08);
            --glass-border: rgba(255, 255, 255, 0.12);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #1e293b;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        /* ── HERO ─────────────────────────────────────────────── */
        .hero-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background-color: var(--navy);
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background-image: url("{{ asset('images/hospital_background.png') }}");
            background-size: cover;
            background-position: center 30%;
            background-attachment: fixed;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg,
                    rgba(6, 17, 30, 0.94) 0%,
                    rgba(15, 23, 42, 0.88) 45%,
                    rgba(37, 99, 235, 0.30) 100%);
            backdrop-filter: blur(2px);
        }

        /* ── GLASS ────────────────────────────────────────────── */
        .glass {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        .glass-light {
            background: rgba(255, 255, 255, 0.72);
            border: 1px solid rgba(255, 255, 255, 0.45);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        /* ── NAV ──────────────────────────────────────────────── */
        .nav-scrolled {
            background: rgba(255, 255, 255, 0.98) !important;
            box-shadow: 0 1px 0 rgba(15, 23, 42, 0.06), 0 4px 24px rgba(15, 23, 42, 0.04);
        }

        .nav-scrolled .nav-logo-text {
            color: #1e293b !important;
        }
        .nav-scrolled .nav-logo-text span {
            color: #2563eb !important;
        }
        .nav-scrolled .nav-links a {
            color: #475569 !important;
        }
        .nav-scrolled .nav-links a:hover {
            color: #2563eb !important;
        }
        .nav-scrolled .nav-links button {
            color: #475569 !important;
        }
        .nav-scrolled .nav-links button:hover {
            color: #2563eb !important;
        }
        .nav-scrolled .nav-cta-text {
            color: #475569 !important;
        }
        .nav-scrolled .nav-cta-text:hover {
            color: #2563eb !important;
        }

        /* ── LOGO STYLING ────────────────────────────────────── */
        .logo-hospital {
            width: 40px;
            height: 40px;
            object-fit: contain;
            filter: brightness(0) invert(1);
            transition: filter 0.3s ease;
        }

        .nav-scrolled .logo-hospital {
            filter: brightness(0) saturate(100%) invert(0%);
        }

        .logo-hospital-footer {
            width: 40px;
            height: 40px;
            object-fit: contain;
            filter: brightness(0) invert(1);
        }

        /* ── FEATURE CARDS ────────────────────────────────────── */
        .feat-card {
            background: rgba(255, 255, 255, 0.74);
            border: 1px solid rgba(226, 232, 240, 0.8);
            backdrop-filter: blur(12px);
            border-radius: 24px;
            padding: 2rem;
            transition: transform .35s cubic-bezier(.22, 1, .36, 1),
                box-shadow .35s cubic-bezier(.22, 1, .36, 1),
                border-color .25s;
        }
        .feat-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 48px -12px rgba(37, 99, 235, 0.18);
            border-color: rgba(37, 99, 235, 0.35);
            background: rgba(255, 255, 255, 0.96);
        }
        .feat-icon {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.25rem;
            transition: background .25s, color .25s;
        }

        /* ── DASHBOARD MOCKUP ─────────────────────────────────── */
        .mockup-shell {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.08),
                0 40px 80px -20px rgba(6, 17, 30, 0.55),
                0 0 0 6px rgba(37, 99, 235, 0.12);
        }
        .mockup-bar {
            background: #1a2540;
            padding: .6rem 1rem;
            display: flex;
            align-items: center;
            gap: .5rem;
        }
        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        /* ── SCROLL REVEAL ────────────────────────────────────── */
        .sr {
            opacity: 0;
            transform: translateY(32px);
            transition: opacity .75s cubic-bezier(.16, 1, .3, 1),
                transform .75s cubic-bezier(.16, 1, .3, 1);
        }
        .sr.sr-left {
            transform: translateX(-36px);
        }
        .sr.sr-right {
            transform: translateX(36px);
        }
        .sr.sr-scale {
            transform: scale(.94);
        }
        .sr.visible {
            opacity: 1;
            transform: none;
        }

        .sr-delay-1 {
            transition-delay: .1s;
        }
        .sr-delay-2 {
            transition-delay: .18s;
        }
        .sr-delay-3 {
            transition-delay: .26s;
        }
        .sr-delay-4 {
            transition-delay: .34s;
        }

        /* ── HERO BADGE PULSE ─────────────────────────────────── */
        @keyframes badge-ping {
            0%,
            100% {
                opacity: 1;
            }
            50% {
                opacity: .55;
            }
        }
        .badge-dot {
            animation: badge-ping 2s ease-in-out infinite;
        }

        /* ── FLOATING CARD ANIMATION ──────────────────────────── */
        @keyframes float {
            0%,
            100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        .float-card {
            animation: float 5s ease-in-out infinite;
        }

        /* ── GRADIENT TEXT ────────────────────────────────────── */
        .grad-text {
            background: linear-gradient(90deg, #60a5fa 0%, #06b6d4 60%, #34d399 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ── STAT DIVIDER ─────────────────────────────────────── */
        .stat-item+.stat-item {
            border-left: 1px solid rgba(226, 232, 240, .6);
        }

        /* ── WHY CARD ─────────────────────────────────────────── */
        .why-card {
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            padding: 2rem;
            background: #fff;
            transition: border-color .25s, box-shadow .25s, transform .3s;
        }
        .why-card:hover {
            border-color: #2563eb;
            box-shadow: 0 16px 40px -10px rgba(37, 99, 235, 0.12);
            transform: translateY(-4px);
        }

        /* ── MOBILE MENU ──────────────────────────────────────── */
        #mobile-nav {
            transform: translateY(-8px);
            opacity: 0;
            pointer-events: none;
            transition: opacity .2s, transform .2s;
        }
        #mobile-nav.open {
            transform: translateY(0);
            opacity: 1;
            pointer-events: auto;
        }

        /* ── MEGA MENU ────────────────────────────────────────── */
        .mega-menu {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(12px);
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.25s ease, transform 0.3s cubic-bezier(0.22, 1, 0.36, 1);
            min-width: 720px;
            max-width: 900px;
            width: max-content;
            z-index: 100;
        }
        .mega-menu.open {
            opacity: 1;
            pointer-events: auto;
            transform: translateX(-50%) translateY(6px);
        }

        .mega-item {
            border-radius: 14px;
            padding: 0.875rem 1rem;
            transition: all 0.25s cubic-bezier(0.22, 1, 0.36, 1);
            cursor: pointer;
        }
        .mega-item:hover {
            background: rgba(37, 99, 235, 0.06);
            transform: translateY(-2px);
        }
        .mega-item:hover .mega-icon {
            transform: scale(1.12);
        }
        .mega-item:hover .mega-title {
            color: #2563eb;
        }
        .mega-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: transform 0.3s cubic-bezier(0.22, 1, 0.36, 1);
        }

        /* ── MEGA MENU SEARCH ─────────────────────────────────── */
        .mega-search {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 2.75rem;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            font-size: 0.875rem;
            color: #1e293b;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .mega-search:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            background: #fff;
        }
        .mega-search::placeholder {
            color: #94a3b8;
        }

        /* ── QUICK ACCESS ─────────────────────────────────────── */
        .quick-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 1.25rem;
            transition: all 0.3s cubic-bezier(0.22, 1, 0.36, 1);
            text-align: center;
        }
        .quick-card:hover {
            border-color: #2563eb;
            box-shadow: 0 12px 32px -8px rgba(37, 99, 235, 0.12);
            transform: translateY(-4px);
        }
        .quick-card:hover .quick-icon {
            background: #2563eb;
            color: #fff;
        }
        .quick-icon {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.75rem;
            transition: all 0.3s ease;
        }

        /* ── ALUR PELAYANAN ───────────────────────────────────── */
        .step-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            padding: 2rem;
            position: relative;
            transition: all 0.3s ease;
        }
        .step-card:hover {
            border-color: #2563eb;
            box-shadow: 0 16px 40px -10px rgba(37, 99, 235, 0.12);
            transform: translateY(-4px);
        }
        .step-number {
            width: 48px;
            height: 48px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1.25rem;
            font-weight: 800;
            flex-shrink: 0;
        }

        /* ── TESTIMONIAL ───────────────────────────────────────── */
        .testimonial-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            padding: 2rem;
            transition: all 0.3s ease;
        }
        .testimonial-card:hover {
            border-color: #2563eb;
            box-shadow: 0 20px 48px -12px rgba(37, 99, 235, 0.12);
            transform: translateY(-4px);
        }

        /* ── FAQ ───────────────────────────────────────────────── */
        .faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            background: #fff;
            transition: border-color 0.25s, box-shadow 0.25s;
            overflow: hidden;
        }
        .faq-item:hover {
            border-color: #2563eb;
            box-shadow: 0 8px 24px -8px rgba(37, 99, 235, 0.08);
        }
        .faq-question {
            padding: 1.25rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            user-select: none;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s cubic-bezier(0.22, 1, 0.36, 1),
                padding 0.35s cubic-bezier(0.22, 1, 0.36, 1);
            padding: 0 1.5rem;
        }
        .faq-answer.open {
            max-height: 300px;
            padding: 0 1.5rem 1.25rem;
        }
        .faq-chevron {
            transition: transform 0.3s ease;
            flex-shrink: 0;
        }
        .faq-chevron.open {
            transform: rotate(180deg);
        }

        /* ── SERVICE CARD ────────────────────────────────────── */
        .service-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            padding: 2rem;
            transition: all .3s ease;
        }
        .service-card:hover {
            border-color: #2563eb;
            box-shadow: 0 20px 40px -12px rgba(37, 99, 235, 0.15);
            transform: translateY(-4px);
        }

        @media (prefers-reduced-motion: reduce) {
            .sr,
            .float-card {
                transition: none !important;
                animation: none !important;
            }
        }
    </style>
</head>
<body>

    <!-- ════════════════════════════════════════════════════════ -->
    <!-- NAVIGATION - With Mega Menu                           -->
    <!-- ════════════════════════════════════════════════════════ -->
    <nav id="nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    style="background: transparent;">
    <div class="mx-auto max-w-7xl px-6 py-4 flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <img 
                src="{{ asset('storage/rs.avif') }}" 
                alt="Logo Klinik Koehried" 
                class="logo-hospital"
                onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2240%22 height=%2240%22 viewBox=%220 0 40 40%22%3E%3Crect width=%2240%22 height=%2240%22 rx=%228%22 fill=%22%232563eb%22/%3E%3Ctext x=%2220%22 y=%2228%22 text-anchor=%22middle%22 font-size=%2220%22 font-weight=%22bold%22 fill=%22white%22 font-family=%22sans-serif%22%3E%2B%3C/text%3E%3C/svg%3E'"
            >
            <span class="font-display font-bold text-lg text-white nav-logo-text transition-colors">
                Klinik <span class="text-brand-400">Koehried</span>
            </span>
        </a>

        <!-- Desktop Links with Mega Menu (lg+) -->
        <div class="hidden lg:flex items-center gap-1 text-sm font-medium nav-links">
            <!-- Mega Menu: Layanan Kesehatan -->
            <div class="relative mega-nav-item" data-mega="layanan">
                <button class="flex items-center gap-1.5 px-4 py-2 text-slate-200 hover:text-white transition-colors rounded-xl hover:bg-white/5 mega-trigger">
                    Layanan Kesehatan
                    <svg class="h-3.5 w-3.5 transition-transform duration-200 mega-chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Mega Panel -->
                <div class="mega-menu glass rounded-3xl p-6 shadow-2xl shadow-ink-900/20 border border-white/15" data-mega-panel="layanan">
                    <!-- Search -->
                    <div class="relative mb-5">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input type="text" class="mega-search" placeholder="Cari layanan kesehatan..." data-search="layanan">
                    </div>

                    <!-- Grid -->
                    <div class="grid grid-cols-2 gap-1.5 mega-grid" data-grid="layanan">
                        <a href="{{ route('layanan.show', 'rawat-jalan') }}" class="mega-item flex items-start gap-3" data-name="Rawat Jalan">
                            <div class="mega-icon bg-blue-50 text-blue-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Rawat Jalan</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Konsultasi dan pemeriksaan medis tanpa harus menginap di rumah sakit.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'rawat-inap') }}" class="mega-item flex items-start gap-3" data-name="Rawat Inap">
                            <div class="mega-icon bg-indigo-50 text-indigo-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Rawat Inap</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Perawatan intensif dengan fasilitas kamar yang nyaman dan tenaga medis siaga.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'igd') }}" class="mega-item flex items-start gap-3" data-name="IGD">
                            <div class="mega-icon bg-red-50 text-red-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Instalasi Gawat Darurat (IGD)</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pelayanan cepat untuk kondisi darurat medis, tersedia 24 jam non-stop.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'medical-check-up') }}" class="mega-item flex items-start gap-3" data-name="Medical Check Up">
                            <div class="mega-icon bg-green-50 text-green-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Medical Check Up</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pemeriksaan kesehatan menyeluruh untuk deteksi dini berbagai penyakit.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'laboratorium') }}" class="mega-item flex items-start gap-3" data-name="Laboratorium">
                            <div class="mega-icon bg-purple-50 text-purple-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Laboratorium</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pemeriksaan sampel darah, urine, dan jaringan dengan alat diagnostik modern.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'radiologi') }}" class="mega-item flex items-start gap-3" data-name="Radiologi">
                            <div class="mega-icon bg-cyan-50 text-cyan-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Radiologi</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pelayanan foto Rontgen, USG, CT Scan, dan MRI dengan teknologi terkini.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'farmasi') }}" class="mega-item flex items-start gap-3" data-name="Farmasi">
                            <div class="mega-icon bg-amber-50 text-amber-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Farmasi & Apotek</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pelayanan resep obat, konsultasi apoteker, dan informasi obat yang aman.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'rehabilitasi-medik') }}" class="mega-item flex items-start gap-3" data-name="Rehabilitasi Medik">
                            <div class="mega-icon bg-teal-50 text-teal-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Rehabilitasi Medik</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Terapi pemulihan fungsi fisik pasca operasi, cedera, atau penyakit kronis.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'poli-anak') }}" class="mega-item flex items-start gap-3" data-name="Poli Anak">
                            <div class="mega-icon bg-pink-50 text-pink-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Poli Anak</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pelayanan kesehatan khusus untuk bayi, anak, dan remaja hingga usia 18 tahun.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'poli-penyakit-dalam') }}" class="mega-item flex items-start gap-3" data-name="Poli Penyakit Dalam">
                            <div class="mega-icon bg-orange-50 text-orange-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Poli Penyakit Dalam</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Penanganan penyakit internal dewasa seperti diabetes, hipertensi, dan infeksi.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'poli-bedah') }}" class="mega-item flex items-start gap-3" data-name="Poli Bedah">
                            <div class="mega-icon bg-slate-100 text-slate-700">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Poli Bedah</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Layanan tindakan operatif untuk berbagai kondisi medis yang memerlukan intervensi bedah.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'poli-jantung') }}" class="mega-item flex items-start gap-3" data-name="Poli Jantung">
                            <div class="mega-icon bg-rose-50 text-rose-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Poli Jantung</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Diagnosis dan perawatan penyakit kardiovaskular oleh spesialis jantung berpengalaman.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'poli-saraf') }}" class="mega-item flex items-start gap-3" data-name="Poli Saraf">
                            <div class="mega-icon bg-violet-50 text-violet-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Poli Saraf</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Penanganan gangguan sistem saraf pusat dan tepi termasuk stroke dan epilepsi.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'poli-kandungan') }}" class="mega-item flex items-start gap-3" data-name="Poli Kandungan">
                            <div class="mega-icon bg-fuchsia-50 text-fuchsia-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Poli Kandungan (Obgyn)</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pelayanan kesehatan reproduksi wanita, kehamilan, persalinan, dan pasca melahirkan.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'poli-gigi') }}" class="mega-item flex items-start gap-3" data-name="Poli Gigi">
                            <div class="mega-icon bg-yellow-50 text-yellow-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Poli Gigi & Mulut</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Perawatan gigi dan mulut termasuk scaling, tambal, cabut, dan prostodontik.</p>
                            </div>
                        </a>
                        <a href="{{ route('layanan.show', 'poli-mata') }}" class="mega-item flex items-start gap-3" data-name="Poli Mata">
                            <div class="mega-icon bg-sky-50 text-sky-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Poli Mata</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pemeriksaan dan perawatan kesehatan mata termasuk koreksi penglihatan dan operasi katarak.</p>
                            </div>
                        </a>
                    </div>

                    <a href="{{ route('layanan.index') }}" class="mt-4 flex items-center justify-center gap-2 w-full rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 px-4 py-2.5 text-sm font-bold text-white transition-all hover:-translate-y-0.5">
                        Lihat Semua Layanan
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                    </a>
                </div>
            </div>

            <!-- Mega Menu: Pusat Unggulan -->
            <div class="relative mega-nav-item" data-mega="unggulan">
                <button class="flex items-center gap-1.5 px-4 py-2 text-slate-200 hover:text-white transition-colors rounded-xl hover:bg-white/5 mega-trigger">
                    Pusat Unggulan
                    <svg class="h-3.5 w-3.5 transition-transform duration-200 mega-chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div class="mega-menu glass rounded-3xl p-6 shadow-2xl shadow-ink-900/20 border border-white/15" data-mega-panel="unggulan">
                    <div class="relative mb-5">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input type="text" class="mega-search" placeholder="Cari pusat unggulan..." data-search="unggulan">
                    </div>

                    <div class="grid grid-cols-2 gap-1.5 mega-grid" data-grid="unggulan">
                        <a href="{{ route('unggulan.show', 'cardiac-center') }}" class="mega-item flex items-start gap-3" data-name="Cardiac Center">
                            <div class="mega-icon bg-rose-50 text-rose-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Cardiac Center</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pusat layanan jantung terpadu dengan teknologi kateterisasi dan bedah kardiovaskular.</p>
                            </div>
                        </a>
                        <a href="{{ route('unggulan.show', 'brain-stroke-center') }}" class="mega-item flex items-start gap-3" data-name="Brain & Stroke Center">
                            <div class="mega-icon bg-violet-50 text-violet-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Brain & Stroke Center</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Penanganan komprehensif gangguan otak dan stroke dengan tim neurologis multidisiplin.</p>
                            </div>
                        </a>
                        <a href="{{ route('unggulan.show', 'orthopedic-center') }}" class="mega-item flex items-start gap-3" data-name="Orthopedic Center">
                            <div class="mega-icon bg-orange-50 text-orange-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Orthopedic Center</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Layanan bedah ortopedi dan penanganan cedera tulang, sendi, serta olahraga.</p>
                            </div>
                        </a>
                        <a href="{{ route('unggulan.show', 'mother-child-center') }}" class="mega-item flex items-start gap-3" data-name="Mother & Child Center">
                            <div class="mega-icon bg-pink-50 text-pink-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Mother & Child Center</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pusat layanan ibu hamil, persalinan, dan perawatan neonatal dengan fasilitas NICU.</p>
                            </div>
                        </a>
                        <a href="{{ route('unggulan.show', 'eye-center') }}" class="mega-item flex items-start gap-3" data-name="Eye Center">
                            <div class="mega-icon bg-sky-50 text-sky-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Eye Center</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Klinik mata komprehensif dengan layanan LASIK, katarak, dan pemeriksaan retina.</p>
                            </div>
                        </a>
                        <a href="{{ route('unggulan.show', 'dental-center') }}" class="mega-item flex items-start gap-3" data-name="Dental Center">
                            <div class="mega-icon bg-yellow-50 text-yellow-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Dental Center</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Perawatan gigi menyeluruh termasuk estetika gigi, ortodonti, dan implan gigi.</p>
                            </div>
                        </a>
                        <a href="{{ route('unggulan.show', 'cancer-center') }}" class="mega-item flex items-start gap-3" data-name="Cancer Center">
                            <div class="mega-icon bg-purple-50 text-purple-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Cancer Center</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pusat onkologi terpadu dengan layanan kemoterapi, radioterapi, dan bedah tumor.</p>
                            </div>
                        </a>
                        <a href="{{ route('unggulan.show', 'diabetes-center') }}" class="mega-item flex items-start gap-3" data-name="Diabetes Center">
                            <div class="mega-icon bg-teal-50 text-teal-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Diabetes Center</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Edukasi dan manajemen diabetes komprehensif dengan pendekatan multidisiplin.</p>
                            </div>
                        </a>
                        <a href="{{ route('unggulan.show', 'trauma-center') }}" class="mega-item flex items-start gap-3" data-name="Trauma Center">
                            <div class="mega-icon bg-red-50 text-red-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Trauma Center</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Penanganan darurat cedera berat dan kecelakaan dengan tim trauma response cepat.</p>
                            </div>
                        </a>
                        <a href="{{ route('unggulan.show', 'geriatric-center') }}" class="mega-item flex items-start gap-3" data-name="Geriatric Center">
                            <div class="mega-icon bg-blue-50 text-blue-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Geriatric Center</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pelayanan kesehatan khusus lansia dengan pendekatan holistik dan penuh perhatian.</p>
                            </div>
                        </a>
                        <a href="{{ route('unggulan.show', 'digestive-center') }}" class="mega-item flex items-start gap-3" data-name="Digestive Center">
                            <div class="mega-icon bg-amber-50 text-amber-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                            </div>
                            <div>
                                <p class="mega-title font-display font-bold text-sm text-white transition-colors">Digestive Center</p>
                                <p class="text-xs text-slate-400 mt-0.5 leading-relaxed">Pusat penanganan gangguan pencernaan dengan fasilitas endoskopi dan kolonoskopi.</p>
                            </div>
                        </a>
                    </div>

                    <a href="{{ route('unggulan.index') }}" class="mt-4 flex items-center justify-center gap-2 w-full rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 px-4 py-2.5 text-sm font-bold text-white transition-all hover:-translate-y-0.5">
                        Lihat Selengkapnya
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                    </a>
                </div>
            </div>

            <a href="{{ route('artikel-kesehatan.index') }}" class="px-4 py-2 text-slate-200 hover:text-white transition-colors rounded-xl hover:bg-white/5">Artikel</a>
            <a href="{{ route('tentang') }}" class="px-4 py-2 text-slate-200 hover:text-white transition-colors rounded-xl hover:bg-white/5">Tentang</a>
        </div>

        <!-- Tablet Nav Links (md to lg) - simplified -->
        <div class="hidden md:flex lg:hidden items-center gap-1 text-sm font-medium nav-links">
            <a href="{{ route('layanan.index') }}" class="px-4 py-2 text-slate-200 hover:text-white transition-colors rounded-xl hover:bg-white/5">Layanan Kesehatan</a>
            <a href="{{ route('unggulan.index') }}" class="px-4 py-2 text-slate-200 hover:text-white transition-colors rounded-xl hover:bg-white/5">Pusat Unggulan</a>
            <a href="{{ route('artikel-kesehatan.index') }}" class="px-4 py-2 text-slate-200 hover:text-white transition-colors rounded-xl hover:bg-white/5">Artikel</a>
            <a href="{{ route('tentang') }}" class="px-4 py-2 text-slate-200 hover:text-white transition-colors rounded-xl hover:bg-white/5">Tentang</a>
        </div>

        <!-- CTA - Hanya Login -->
        <div class="hidden md:flex items-center gap-3">
            @auth
                <a href="{{ route('filament.admin.pages.dashboard') }}" class="rounded-full bg-brand-600 hover:bg-brand-700 px-6 py-2.5 text-sm font-bold text-white shadow-lg shadow-brand-600/20 transition-all hover:-translate-y-0.5">
                    Dashboard
                </a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-sm font-semibold text-slate-200 hover:text-white transition-colors nav-cta-text">Logout</button>
                </form>
            @else
                <a href="{{ route('filament.admin.auth.login') }}" class="rounded-full bg-brand-600 hover:bg-brand-700 px-6 py-2.5 text-sm font-bold text-white shadow-lg shadow-brand-600/20 transition-all hover:-translate-y-0.5">
                    Login
                </a>
            @endauth
        </div>

        <!-- Hamburger -->
        <button id="burger" class="lg:hidden text-white p-1" aria-label="Menu">
            <svg id="burger-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Nav -->
    <div id="mobile-nav" class="lg:hidden border-t border-white/10 bg-ink-950/95 backdrop-blur-xl px-6 py-5 space-y-4 text-sm font-semibold text-slate-200 max-h-[80vh] overflow-y-auto">
        <!-- Mobile Mega: Layanan -->
        <div>
            <button class="flex items-center justify-between w-full text-slate-200 hover:text-white transition-colors mobile-mega-btn" data-target="mobile-layanan">
                Layanan Kesehatan
                <svg class="h-4 w-4 transition-transform duration-200" data-chevron="mobile-layanan" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div id="mobile-layanan" class="hidden mt-3 space-y-2 pl-2">
                <div class="text-xs text-slate-400 px-3 py-1">Rawat Jalan, Rawat Inap, IGD, MCU, Lab, Radiologi, Farmasi, Rehabilitasi, Poli Anak, Poli Dalam, Poli Bedah, Poli Jantung, Poli Saraf, Poli Kandungan, Poli Gigi, Poli Mata</div>
            </div>
        </div>
        <!-- Mobile Mega: Pusat Unggulan -->
        <div>
            <button class="flex items-center justify-between w-full text-slate-200 hover:text-white transition-colors mobile-mega-btn" data-target="mobile-unggulan">
                Pusat Unggulan
                <svg class="h-4 w-4 transition-transform duration-200" data-chevron="mobile-unggulan" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div id="mobile-unggulan" class="hidden mt-3 space-y-2 pl-2">
                <div class="text-xs text-slate-400 px-3 py-1">Cardiac Center, Brain & Stroke, Orthopedic, Mother & Child, Eye Center, Dental Center, Cancer Center, Diabetes Center, Trauma Center, Geriatric, Digestive</div>
            </div>
        </div>
        <a href="{{ route('layanan.index') }}" class="block hover:text-white">Layanan Kesehatan</a>
        <a href="{{ route('unggulan.index') }}" class="block hover:text-white">Pusat Unggulan</a>
        <a href="{{ route('artikel-kesehatan.index') }}" class="block hover:text-white">Artikel</a>
        <a href="{{ route('tentang') }}" class="block hover:text-white">Tentang Kami</a>
        <a href="{{ route('kontak') }}" class="block hover:text-white">Kontak</a>
        <hr class="border-white/10 !my-3">
        @auth
            <a href="{{ route('filament.admin.pages.dashboard') }}" class="block text-center rounded-full bg-brand-600 px-5 py-2.5 text-white font-bold">Dashboard</a>
            <form action="{{ route('logout') }}" method="POST" class="w-full">
                @csrf
                <button type="submit" class="w-full text-center text-sm font-semibold text-slate-200 hover:text-white transition-colors">Logout</button>
            </form>
        @else
            <a href="{{ route('filament.admin.auth.login') }}" class="block text-center rounded-full bg-brand-600 px-5 py-2.5 text-white font-bold">Login</a>
        @endauth
    </div>
</nav>


<!-- ════════════════════════════════════════════════════════ -->
<!-- HERO                                                  -->
<!-- ════════════════════════════════════════════════════════ -->
<section class="hero-section">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>

    <div class="relative z-10 w-full mx-auto max-w-7xl px-6 pt-28 pb-24 lg:pt-36 lg:pb-32">
        <div class="grid lg:grid-cols-12 gap-12 items-center">

            <!-- LEFT: Copy -->
            <div class="lg:col-span-6 xl:col-span-7 space-y-8">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 px-4 py-1.5 text-xs font-bold text-cyan-300 uppercase tracking-widest">
                    <span class="badge-dot h-2 w-2 rounded-full bg-cyan-400"></span>
                    Sistem Informasi Rumah Sakit
                </div>

                <!-- Headline -->
                <h1 class="font-display text-4xl sm:text-5xl xl:text-6xl font-extrabold text-white leading-[1.12] tracking-tight">
                    Digitalisasi Pelayanan<br>
                    Rumah Sakit dalam<br>
                    <span class="grad-text">Satu Platform</span>
                </h1>

                <!-- Sub -->
                <p class="text-slate-300 text-lg leading-relaxed max-w-xl">
                    Kelola data pasien, rekam medis elektronik, jadwal dokter, dan seluruh administrasi klinik secara efisien — dari satu dashboard yang aman dan terintegrasi penuh.
                </p>

                <!-- CTA Row - Hanya Login -->
                <div class="flex flex-wrap gap-4 pt-2">
                    @auth
                        <a href="{{ route('filament.admin.pages.dashboard') }}" class="rounded-full bg-gradient-to-r from-brand-600 to-cyan-500 hover:from-brand-700 hover:to-cyan-600 px-8 py-4 font-bold text-white text-base shadow-xl shadow-brand-600/25 transition-all hover:-translate-y-0.5">
                            Buka Dashboard
                        </a>
                    @else
                        <a href="{{ route('filament.admin.auth.login') }}" class="rounded-full bg-gradient-to-r from-brand-600 to-cyan-500 hover:from-brand-700 hover:to-cyan-600 px-8 py-4 font-bold text-white text-base shadow-xl shadow-brand-600/25 transition-all hover:-translate-y-0.5">
                            Login
                        </a>
                    @endauth
                </div>

                <!-- Trust Strip -->
                <div class="flex flex-wrap items-center gap-6 pt-4">
                    <div class="flex items-center gap-2 text-slate-300 text-xs font-medium">
                        <svg class="h-4 w-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        Terakreditasi Kemenkes RI
                    </div>
                    <div class="flex items-center gap-2 text-slate-300 text-xs font-medium">
                        <svg class="h-4 w-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Pelayanan 24 Jam
                    </div>
                    <div class="flex items-center gap-2 text-slate-300 text-xs font-medium">
                        <svg class="h-4 w-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Terpercaya & Profesional
                    </div>
                </div>
            </div>

            <!-- RIGHT: Floating Status Card -->
            <div class="lg:col-span-6 xl:col-span-5 flex justify-center lg:justify-end">
                <div class="float-card w-full max-w-sm">
                    <div class="glass rounded-3xl p-7 space-y-5 border border-white/10 shadow-2xl">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Status Sistem</p>
                                <p class="text-white font-bold text-lg mt-0.5">Klinik Koehried</p>
                            </div>
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/15 border border-emerald-500/25 px-3 py-1 text-xs font-bold text-emerald-300">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                Live
                            </span>
                        </div>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-3">
                            <div class="rounded-2xl bg-white/6 border border-white/8 p-4">
                                <p class="text-xs text-slate-400 font-semibold">Pasien Aktif</p>
                                <p class="text-3xl font-black text-white mt-1">{{ $stats['patients'] ?? '248' }}</p>
                            </div>
                            <div class="rounded-2xl bg-white/6 border border-white/8 p-4">
                                <p class="text-xs text-slate-400 font-semibold">Tim Dokter</p>
                                <p class="text-3xl font-black text-white mt-1">{{ $stats['doctors'] ?? '34' }}</p>
                            </div>
                            <div class="rounded-2xl bg-white/6 border border-white/8 p-4">
                                <p class="text-xs text-slate-400 font-semibold">Artikel Medis</p>
                                <p class="text-3xl font-black text-white mt-1">{{ $stats['articles'] ?? '120' }}</p>
                            </div>
                            <div class="rounded-2xl bg-white/6 border border-white/8 p-4">
                                <p class="text-xs text-slate-400 font-semibold">Kategori</p>
                                <p class="text-3xl font-black text-white mt-1">{{ $stats['categories'] ?? '18' }}</p>
                            </div>
                        </div>

                        <!-- Uptime Bar -->
                        <div class="rounded-2xl bg-brand-600/12 border border-brand-500/20 p-4">
                            <div class="flex justify-between items-center mb-2">
                                <p class="text-xs font-bold text-brand-300 uppercase tracking-wider">Uptime Sistem</p>
                                <span class="text-xs font-bold text-emerald-400">99.9%</span>
                            </div>
                            <div class="h-1.5 rounded-full bg-white/10 overflow-hidden">
                                <div class="h-full w-[99%] rounded-full bg-gradient-to-r from-brand-400 to-cyan-400"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════════ -->
<!-- STATS BAR                                              -->
<!-- ════════════════════════════════════════════════════════ -->
<section class="relative z-20 -mt-1">
    <div class="mx-auto max-w-5xl px-6">
        <div class="glass-light rounded-3xl shadow-2xl shadow-ink-900/8 sr sr-scale">
            <div class="grid grid-cols-2 md:grid-cols-4 divide-y md:divide-y-0 divide-ink-200/60">
                <div class="stat-item text-center px-8 py-8">
                    <p class="text-xs font-bold text-brand-600 uppercase tracking-widest mb-1">Kunjungan</p>
                    <p class="font-display text-4xl font-black text-ink-900"><span class="counter" data-target="500">0</span>+</p>
                    <p class="text-xs text-ink-500 font-medium mt-1">Pasien Terdaftar</p>
                </div>
                <div class="stat-item text-center px-8 py-8">
                    <p class="text-xs font-bold text-cyan-600 uppercase tracking-widest mb-1">Tenaga Medis</p>
                    <p class="font-display text-4xl font-black text-ink-900"><span class="counter" data-target="50">0</span>+</p>
                    <p class="text-xs text-ink-500 font-medium mt-1">Dokter Spesialis</p>
                </div>
                <div class="stat-item text-center px-8 py-8">
                    <p class="text-xs font-bold text-teal-600 uppercase tracking-widest mb-1">Ketersediaan</p>
                    <p class="font-display text-4xl font-black text-ink-900"><span class="counter" data-target="24">0</span>/7</p>
                    <p class="text-xs text-ink-500 font-medium mt-1">Layanan Siaga</p>
                </div>
                <div class="stat-item text-center px-8 py-8">
                    <p class="text-xs font-bold text-emerald-600 uppercase tracking-widest mb-1">Kepuasan</p>
                    <p class="font-display text-4xl font-black text-ink-900"><span class="counter" data-target="98">0</span>%</p>
                    <p class="text-xs text-ink-500 font-medium mt-1">Tingkat Kepuasan</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════════ -->
<!-- QUICK ACCESS - Layanan Penting                        -->
<!-- ════════════════════════════════════════════════════════ -->
<section class="relative z-10 pb-0 -mt-4">
    <div class="mx-auto max-w-7xl px-6">
        <div class="glass-light rounded-3xl shadow-xl shadow-ink-900/6 border border-white/50 overflow-hidden sr">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 divide-x divide-ink-100/80">
                <a href="#" class="quick-card !rounded-none !border-0 !shadow-none !bg-transparent">
                    <div class="quick-icon bg-blue-50 text-blue-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                    </div>
                    <p class="font-display font-bold text-sm text-ink-800">Cari Dokter</p>
                    <p class="text-xs text-ink-400 mt-0.5">Temukan dokter spesialis</p>
                </a>
                <a href="#" class="quick-card !rounded-none !border-0 !shadow-none !bg-transparent">
                    <div class="quick-icon bg-cyan-50 text-cyan-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    </div>
                    <p class="font-display font-bold text-sm text-ink-800">Buat Janji</p>
                    <p class="text-xs text-ink-400 mt-0.5">Reservasi online</p>
                </a>
                <a href="#" class="quick-card !rounded-none !border-0 !shadow-none !bg-transparent">
                    <div class="quick-icon bg-teal-50 text-teal-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
                    </div>
                    <p class="font-display font-bold text-sm text-ink-800">Jadwal Dokter</p>
                    <p class="text-xs text-ink-400 mt-0.5">Cek jadwal praktik</p>
                </a>
                <a href="#" class="quick-card !rounded-none !border-0 !shadow-none !bg-transparent">
                    <div class="quick-icon bg-green-50 text-green-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    </div>
                    <p class="font-display font-bold text-sm text-ink-800">BPJS</p>
                    <p class="text-xs text-ink-400 mt-0.5">Informasi BPJS Kesehatan</p>
                </a>
                <a href="#" class="quick-card !rounded-none !border-0 !shadow-none !bg-transparent">
                    <div class="quick-icon bg-purple-50 text-purple-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0" /></svg>
                    </div>
                    <p class="font-display font-bold text-sm text-ink-800">Telemedicine</p>
                    <p class="text-xs text-ink-400 mt-0.5">Konsultasi jarak jauh</p>
                </a>
                <a href="#" class="quick-card !rounded-none !border-0 !shadow-none !bg-transparent">
                    <div class="quick-icon bg-amber-50 text-amber-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                    </div>
                    <p class="font-display font-bold text-sm text-ink-800">Kontak</p>
                    <p class="text-xs text-ink-400 mt-0.5">Hubungi kami</p>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════════ -->
<!-- FITUR UTAMA                                            -->
<!-- ════════════════════════════════════════════════════════ -->
<section id="fitur" class="py-28 bg-gradient-to-b from-ink-50 to-white">
    <div class="mx-auto max-w-7xl px-6">

        <div class="max-w-2xl mx-auto text-center mb-20 sr">
            <span class="inline-block text-xs font-bold text-brand-600 uppercase tracking-widest bg-brand-50 border border-brand-100 px-3 py-1 rounded-full mb-4">Modul Sistem</span>
            <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-ink-900 leading-tight">
                Empat Pilar Pengelolaan Klinik Digital
            </h2>
            <p class="text-ink-500 mt-4 leading-relaxed">
                Dirancang spesifik untuk alur kerja rumah sakit — dari pendaftaran pasien hingga penerbitan resep, semua dalam satu ekosistem.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Card 1 -->
            <div class="feat-card sr sr-delay-1">
                <div class="feat-icon bg-brand-50">
                    <svg class="h-6 w-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <h3 class="font-display font-bold text-ink-900 text-base mb-2">Manajemen Pasien</h3>
                <p class="text-sm text-ink-500 leading-relaxed">Registrasi cepat, antrian loket digital, admisi rawat inap & jalan, serta history kunjungan lengkap per pasien.</p>
            </div>

            <!-- Card 2 -->
            <div class="feat-card sr sr-delay-2">
                <div class="feat-icon bg-cyan-50">
                    <svg class="h-6 w-6 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-display font-bold text-ink-900 text-base mb-2">Data Dokter</h3>
                <p class="text-sm text-ink-500 leading-relaxed">Profil lengkap dokter spesialis, validitas SIP, kredensial aktif, dan kontrol hak akses berbasis peran klinisi.</p>
            </div>

            <!-- Card 3 -->
            <div class="feat-card sr sr-delay-3">
                <div class="feat-icon bg-teal-50">
                    <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-display font-bold text-ink-900 text-base mb-2">Jadwal Pemeriksaan</h3>
                <p class="text-sm text-ink-500 leading-relaxed">Penjadwalan poliklinik & dokter otomatis, reservasi janji temu daring, serta penyesuaian jadwal real-time.</p>
            </div>

            <!-- Card 4 -->
            <div class="feat-card sr sr-delay-4">
                <div class="feat-icon bg-indigo-50">
                    <svg class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="font-display font-bold text-ink-900 text-base mb-2">Rekam Medis Digital</h3>
                <p class="text-sm text-ink-500 leading-relaxed">RME terenkripsi — anamnesis, diagnosis ICD-10, tindakan, dan resep dokter tersimpan aman dan dapat diakses kapan saja.</p>
            </div>

        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════════ -->
<!-- LAYANAN KAMI - Premium Service Cards                   -->
<!-- ════════════════════════════════════════════════════════ -->
<section id="layanan" class="py-28 bg-white border-y border-ink-200/50">
    <div class="mx-auto max-w-7xl px-6">

        <div class="max-w-3xl mx-auto text-center mb-20 space-y-4 sr">
            <span class="text-sm font-bold text-brand-600 uppercase tracking-wider bg-brand-50 px-3 py-1 rounded-full border border-brand-100">Layanan Unggulan</span>
            <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-ink-900">
                Pelayanan Kesehatan Prima untuk Anda
            </h2>
            <p class="text-ink-600">
                Kami menghadirkan layanan medis terintegrasi dengan didukung tenaga profesional dan teknologi terkini.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Service 1 -->
            <div class="service-card sr sr-delay-1">
                <div class="h-12 w-12 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600 mb-5">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="font-display font-bold text-ink-900 text-lg mb-2">Poli Umum & Spesialis</h3>
                <p class="text-sm text-ink-500 leading-relaxed">Layanan konsultasi dengan dokter umum dan spesialis berpengalaman di berbagai bidang kesehatan.</p>
            </div>

            <!-- Service 2 -->
            <div class="service-card sr sr-delay-2">
                <div class="h-12 w-12 rounded-2xl bg-cyan-50 flex items-center justify-center text-cyan-600 mb-5">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h3 class="font-display font-bold text-ink-900 text-lg mb-2">Kesehatan Ibu & Anak</h3>
                <p class="text-sm text-ink-500 leading-relaxed">Pelayanan kesehatan khusus untuk ibu hamil, persalinan, dan tumbuh kembang anak secara holistik.</p>
            </div>

            <!-- Service 3 -->
            <div class="service-card sr sr-delay-3">
                <div class="h-12 w-12 rounded-2xl bg-teal-50 flex items-center justify-center text-teal-600 mb-5">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-display font-bold text-ink-900 text-lg mb-2">Laboratorium & Diagnostik</h3>
                <p class="text-sm text-ink-500 leading-relaxed">Fasilitas laboratorium lengkap untuk pemeriksaan darah, urine, radiologi, dan penunjang diagnostik lainnya.</p>
            </div>

            <!-- Service 4 -->
            <div class="service-card sr sr-delay-4">
                <div class="h-12 w-12 rounded-2xl bg-purple-50 flex items-center justify-center text-purple-600 mb-5">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-display font-bold text-ink-900 text-lg mb-2">Farmasi & Apotek</h3>
                <p class="text-sm text-ink-500 leading-relaxed">Pelayanan resep obat dengan apoteker profesional serta informasi lengkap mengenai penggunaan obat yang aman.</p>
            </div>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════════ -->
<!-- ALUR PELAYANAN PASIEN                                 -->
<!-- ════════════════════════════════════════════════════════ -->
<section class="py-28 bg-gradient-to-b from-white to-ink-50/30">
    <div class="mx-auto max-w-7xl px-6">
        <div class="max-w-3xl mx-auto text-center mb-20 space-y-4 sr">
            <span class="text-sm font-bold text-brand-600 uppercase tracking-wider bg-brand-50 px-3 py-1 rounded-full border border-brand-100">Alur Pelayanan</span>
            <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-ink-900">
                Mudahnya Berobat di Klinik Koehried
            </h2>
            <p class="text-ink-600">
                Kami hadirkan alur pelayanan yang sederhana dan cepat agar Anda tidak perlu menunggu lama.
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-6 relative">
            <!-- Connector line (desktop) -->
            <div class="hidden md:block absolute top-12 left-[12.5%] right-[12.5%] h-0.5 bg-gradient-to-r from-brand-200 via-cyan-200 to-teal-200 z-0"></div>

            <!-- Step 1 -->
            <div class="step-card sr sr-delay-1 text-center relative z-10">
                <div class="step-number bg-brand-50 text-brand-600 mx-auto mb-4">1</div>
                <h3 class="font-display font-bold text-ink-900 text-base mb-2">Pendaftaran</h3>
                <p class="text-sm text-ink-500 leading-relaxed">Daftar melalui loket pendaftaran, website, atau aplikasi mobile kami dengan data diri Anda.</p>
            </div>

            <!-- Step 2 -->
            <div class="step-card sr sr-delay-2 text-center relative z-10">
                <div class="step-number bg-cyan-50 text-cyan-600 mx-auto mb-4">2</div>
                <h3 class="font-display font-bold text-ink-900 text-base mb-2">Pemeriksaan</h3>
                <p class="text-sm text-ink-500 leading-relaxed">Konsultasi dengan dokter sesuai poli tujuan untuk diagnosis dan penanganan medis.</p>
            </div>

            <!-- Step 3 -->
            <div class="step-card sr sr-delay-3 text-center relative z-10">
                <div class="step-number bg-teal-50 text-teal-600 mx-auto mb-4">3</div>
                <h3 class="font-display font-bold text-ink-900 text-base mb-2">Tindakan & Terapi</h3>
                <p class="text-sm text-ink-500 leading-relaxed">Lakukan pemeriksaan penunjang, tindakan medis, atau pengambilan obat di apotek.</p>
            </div>

            <!-- Step 4 -->
            <div class="step-card sr sr-delay-4 text-center relative z-10">
                <div class="step-number bg-emerald-50 text-emerald-600 mx-auto mb-4">4</div>
                <h3 class="font-display font-bold text-ink-900 text-base mb-2">Pemulangan</h3>
                <p class="text-sm text-ink-500 leading-relaxed">Ambil resume medis, resep obat, dan jadwal kontrol berikutnya. Proses selesai!</p>
            </div>
        </div>
    </div>
</section>





<!-- ════════════════════════════════════════════════════════ -->
<!-- FAQ - Pertanyaan Umum                                 -->
<!-- ════════════════════════════════════════════════════════ -->
<section class="py-28 bg-ink-50/40">
    <div class="mx-auto max-w-3xl px-6">
        <div class="max-w-2xl mx-auto text-center mb-16 space-y-4 sr">
            <span class="text-sm font-bold text-brand-600 uppercase tracking-wider bg-brand-50 px-3 py-1 rounded-full border border-brand-100">FAQ</span>
            <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-ink-900">
                Pertanyaan Umum
            </h2>
            <p class="text-ink-600">
                Temukan jawaban atas pertanyaan yang sering diajukan tentang layanan kami.
            </p>
        </div>

        <div class="space-y-4 sr">
            <!-- FAQ 1 -->
            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0">
                    <span class="font-display font-bold text-sm text-ink-900">Bagaimana cara mendaftar sebagai pasien baru?</span>
                    <svg class="faq-chevron h-4 w-4 text-ink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="faq-answer">
                    <p class="text-sm text-ink-600 leading-relaxed">Anda dapat mendaftar langsung di loket pendaftaran dengan membawa KTP/KK, atau melalui website kami dengan mengisi formulir pendaftaran online. Proses pendaftaran hanya membutuhkan waktu sekitar 5-10 menit.</p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0">
                    <span class="font-display font-bold text-sm text-ink-900">Apakah rumah sakit menerima BPJS Kesehatan?</span>
                    <svg class="faq-chevron h-4 w-4 text-ink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="faq-answer">
                    <p class="text-sm text-ink-600 leading-relaxed">Ya, Klinik Koehried menerima peserta BPJS Kesehatan untuk semua layanan yang tercakup dalam ketentuan BPJS. Pastikan membawa kartu BPJS yang masih aktif saat berkunjung.</p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0">
                    <span class="font-display font-bold text-sm text-ink-900">Bagaimana cara membuat janji temu dengan dokter?</span>
                    <svg class="faq-chevron h-4 w-4 text-ink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="faq-answer">
                    <p class="text-sm text-ink-600 leading-relaxed">Anda dapat membuat janji temu melalui fitur "Buat Janji" di website, menghubungi call center kami, atau datang langsung ke loket pendaftaran. Kami sarankan membuat janji terlebih dahulu untuk mengurangi waktu tunggu.</p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0">
                    <span class="font-display font-bold text-sm text-ink-900">Apa saja yang perlu dibawa saat medical check up?</span>
                    <svg class="faq-chevron h-4 w-4 text-ink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="faq-answer">
                    <p class="text-sm text-ink-600 leading-relaxed">Untuk medical check up, disarankan puasa 8-10 jam sebelumnya, membawa identitas diri, hasil pemeriksaan sebelumnya (jika ada), serta daftar obat yang sedang dikonsumsi. Kami akan memberikan instruksi lengkap setelah pendaftaran.</p>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0">
                    <span class="font-display font-bold text-sm text-ink-900">Apakah tersedia layanan telemedicine atau konsultasi online?</span>
                    <svg class="faq-chevron h-4 w-4 text-ink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="faq-answer">
                    <p class="text-sm text-ink-600 leading-relaxed">Ya, kami menyediakan layanan telemedicine untuk konsultasi jarak jauh dengan dokter. Layanan ini dapat diakses melalui website atau aplikasi mobile kami. Cocok untuk konsultasi lanjutan dan kondisi non-darurat.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════════ -->
<!-- FASILITAS RUMAH SAKIT                                 -->
<!-- ════════════════════════════════════════════════════════ -->
<section class="py-28 bg-white border-y border-ink-200/50">
    <div class="mx-auto max-w-7xl px-6">
        <div class="max-w-3xl mx-auto text-center mb-20 space-y-4 sr">
            <span class="text-sm font-bold text-brand-600 uppercase tracking-wider bg-brand-50 px-3 py-1 rounded-full border border-brand-100">Fasilitas</span>
            <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-ink-900">
                Fasilitas Rumah Sakit
            </h2>
            <p class="text-ink-600">
                Didukung fasilitas modern dan nyaman untuk menunjang proses penyembuhan pasien.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="feat-card sr sr-delay-1 text-center">
                <div class="h-14 w-14 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600 mx-auto mb-4">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                </div>
                <h3 class="font-display font-bold text-ink-900 text-base">Kamar Rawat Inap</h3>
                <p class="text-sm text-ink-500 mt-2 leading-relaxed">Kamar kelas 1, 2, 3 dan VIP dengan fasilitas lengkap, AC, TV, dan nurse call.</p>
            </div>
            <div class="feat-card sr sr-delay-2 text-center">
                <div class="h-14 w-14 rounded-2xl bg-cyan-50 flex items-center justify-center text-cyan-600 mx-auto mb-4">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                </div>
                <h3 class="font-display font-bold text-ink-900 text-base">Laboratorium</h3>
                <p class="text-sm text-ink-500 mt-2 leading-relaxed">Alat diagnostik modern untuk pemeriksaan darah, urine, dan patologi klinik.</p>
            </div>
            <div class="feat-card sr sr-delay-3 text-center">
                <div class="h-14 w-14 rounded-2xl bg-teal-50 flex items-center justify-center text-teal-600 mx-auto mb-4">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>
                </div>
                <h3 class="font-display font-bold text-ink-900 text-base">Radiologi</h3>
                <p class="text-sm text-ink-500 mt-2 leading-relaxed">Rontgen digital, USG 4D, CT Scan 128 slice, dan MRI dengan hasil cepat.</p>
            </div>
            <div class="feat-card sr sr-delay-4 text-center">
                <div class="h-14 w-14 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-600 mx-auto mb-4">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                </div>
                <h3 class="font-display font-bold text-ink-900 text-base">Farmasi 24 Jam</h3>
                <p class="text-sm text-ink-500 mt-2 leading-relaxed">Apotek 24 jam dengan apoteker siaga dan stok obat lengkap.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════════════════════ -->
<!-- LAYANAN POPULER                                        -->
<!-- ════════════════════════════════════════════════════════ -->
<section class="py-28 bg-gradient-to-b from-ink-50/30 to-white">
    <div class="mx-auto max-w-7xl px-6">
        <div class="max-w-3xl mx-auto text-center mb-16 space-y-4 sr">
            <span class="text-sm font-bold text-brand-600 uppercase tracking-wider bg-brand-50 px-3 py-1 rounded-full border border-brand-100">Populer</span>
            <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-ink-900">
                Layanan Paling Sering Dicari
            </h2>
            <p class="text-ink-600">
                Berbagai pilihan layanan kesehatan yang menjadi andalan pasien kami.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
                $populer = [
                    ['icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z', 'color' => 'blue', 'name' => 'Rawat Jalan', 'desc' => 'Konsultasi dengan dokter umum & spesialis tanpa rawat inap.', 'slug' => 'rawat-jalan'],
                    ['icon' => 'M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'red', 'name' => 'IGD 24 Jam', 'desc' => 'Layanan darurat medis siaga 24 jam non-stop.', 'slug' => 'igd'],
                    ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'color' => 'green', 'name' => 'Medical Check Up', 'desc' => 'Pemeriksaan kesehatan menyeluruh untuk deteksi dini.', 'slug' => 'medical-check-up'],
                    ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'color' => 'rose', 'name' => 'Poli Jantung', 'desc' => 'Diagnosis & perawatan penyakit kardiovaskular.', 'slug' => 'poli-jantung'],
                    ['icon' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'pink', 'name' => 'Poli Anak', 'desc' => 'Kesehatan khusus bayi, anak, dan remaja.', 'slug' => 'poli-anak'],
                    ['icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'color' => 'purple', 'name' => 'Telemedicine', 'desc' => 'Konsultasi jarak jauh dengan dokter dari rumah.', 'slug' => null],
                ];
            @endphp
            @foreach($populer as $p)
                <a href="{{ $p['slug'] ? route('layanan.show', $p['slug']) : '#' }}" class="group flex items-start gap-4 rounded-2xl border border-ink-200 bg-white p-5 transition-all hover:-translate-y-1 hover:border-brand-300 hover:shadow-lg hover:shadow-brand-100/30 sr">
                    <div class="h-12 w-12 rounded-xl bg-{{ $p['color'] }}-50 flex items-center justify-center text-{{ $p['color'] }}-600 flex-shrink-0 group-hover:scale-110 transition-transform">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $p['icon'] }}" /></svg>
                    </div>
                    <div>
                        <p class="font-display font-bold text-ink-900 group-hover:text-brand-600 transition-colors">{{ $p['name'] }}</p>
                        <p class="text-sm text-ink-500 mt-0.5 leading-relaxed">{{ $p['desc'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>



<!-- ════════════════════════════════════════════════════════ -->
<!-- ARTIKEL TERBARU                                        -->
<!-- ════════════════════════════════════════════════════════ -->
<section id="artikel" class="py-28 bg-ink-50/50">
    <div class="mx-auto max-w-7xl px-6">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6 sr">
            <div class="space-y-4">
                <span class="text-sm font-bold text-brand-600 uppercase tracking-wider bg-brand-50 px-3 py-1 rounded-full border border-brand-100">Informasi & Update</span>
                <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-ink-900">Artikel Kesehatan Terbaru</h2>
                <p class="text-ink-600 max-w-xl">Dapatkan informasi tepercaya seputar kesehatan langsung dari dokter dan pakar medis kami.</p>
            </div>
            <a href="{{ route('artikel-kesehatan.index') }}" class="rounded-full border border-brand-600 px-6 py-3 text-sm font-bold text-brand-600 hover:bg-brand-50 transition-all self-start md:self-auto shadow-sm">
                Lihat Semua Artikel
            </a>
        </div>

        <!-- Featured Article -->
        @if($featuredPost)
            <div class="rounded-3xl border border-ink-200/80 bg-white shadow-[0_20px_50px_rgba(15,23,42,0.03)] overflow-hidden mb-16 grid lg:grid-cols-12 sr sr-scale">
                <!-- Text Area -->
                <div class="p-8 sm:p-12 lg:col-span-7 flex flex-col justify-between">
                    <div class="space-y-6">
                        <!-- Category Badges -->
                        <div class="flex flex-wrap gap-2">
                            @foreach($featuredPost->categories as $category)
                                <span class="text-xs font-bold text-brand-700 bg-brand-50 px-3 py-1 rounded-full uppercase tracking-wide border border-brand-100">
                                    {{ $category->name }}
                                </span>
                            @endforeach
                            <span class="text-xs font-bold text-amber-700 bg-amber-50 px-3 py-1 rounded-full uppercase tracking-wide border border-amber-100">
                                Pilihan Utama
                            </span>
                        </div>

                        <!-- Title & Excerpt -->
                        <h3 class="font-display text-2xl sm:text-3xl font-extrabold text-ink-900 leading-tight">
                            {{ $featuredPost->title }}
                        </h3>
                        <p class="text-ink-600 leading-relaxed">
                            {{ Str::limit($featuredPost->sub_title, 180) }}
                        </p>
                    </div>

                    <!-- Author & Button -->
                    <div class="flex flex-wrap items-center justify-between gap-6 mt-8 pt-6 border-t border-ink-100">
                        <div class="flex items-center gap-3">
                            <img src="{{ $featuredPost->user->avatar ? (str_starts_with($featuredPost->user->avatar, 'http') ? $featuredPost->user->avatar : asset($featuredPost->user->avatar)) : 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($featuredPost->user->email))) . '?d=mp' }}" alt="{{ $featuredPost->user->name() }}" class="h-11 w-11 rounded-full object-cover border border-ink-200">
                            <div>
                                <p class="text-sm font-bold text-ink-900">{{ $featuredPost->user->name() }}</p>
                                <p class="text-xs text-ink-500">Dokter Kontributor</p>
                            </div>
                        </div>

                        <a href="{{ route('artikel-kesehatan.show', ['post' => $featuredPost->slug]) }}" class="rounded-full bg-brand-600 px-6 py-3.5 text-sm font-bold text-white shadow-md hover:bg-brand-700 hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                            Baca Artikel Lengkap
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="lg:col-span-5 h-64 lg:h-auto min-h-[300px] relative">
                    <img src="{{ $featuredPost->featurePhoto }}" alt="{{ $featuredPost->photo_alt_text }}" class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>
        @endif

        <!-- Recent Articles Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($recentPosts as $post)
                <div class="group rounded-3xl border border-ink-200/60 bg-white overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgba(15,23,42,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between sr">
                    <div>
                        <!-- Cover Image -->
                        <div class="h-48 overflow-hidden relative bg-ink-100">
                            <img src="{{ $post->featurePhoto }}" alt="{{ $post->photo_alt_text }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 left-4 text-xs font-bold text-brand-800 bg-white/95 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm uppercase tracking-wide">
                                {{ $post->categories->first()?->name ?? 'Artikel' }}
                            </span>
                        </div>

                        <!-- Body -->
                        <div class="p-6 space-y-3">
                            <h3 class="font-display font-bold text-ink-900 group-hover:text-brand-600 transition-colors text-lg leading-snug">
                                {{ $post->title }}
                            </h3>
                            <p class="text-sm text-ink-600 leading-relaxed line-clamp-3">
                                {{ Str::limit($post->sub_title, 120) }}
                            </p>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="px-6 pb-6 pt-4 border-t border-ink-100 flex items-center justify-between bg-ink-50/30">
                        <span class="text-xs text-ink-500 font-medium">
                            {{ $post->formattedPublishedDate() }}
                        </span>
                        <a href="{{ route('artikel-kesehatan.show', ['post' => $post->slug]) }}" class="text-sm font-bold text-brand-600 hover:text-brand-700 transition-colors">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════════ -->
<!-- TENTANG KAMI - About Section                          -->
<!-- ════════════════════════════════════════════════════════ -->
<section id="tentang" class="py-28 bg-gradient-to-br from-ink-900 via-ink-800 to-ink-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-5" style="background-image:url('data:image/svg+xml,%3Csvg width=60 height=60 viewBox=0 0 60 60 xmlns=http://www.w3.org/2000/svg%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%23ffffff%22 fill-opacity=%221%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

    <div class="mx-auto max-w-7xl px-6 relative z-10">
        <div class="grid lg:grid-cols-12 gap-16 items-center">
            <!-- Left -->
            <div class="lg:col-span-5 sr sr-left">
                <span class="text-sm font-bold text-cyan-400 uppercase tracking-wider bg-cyan-500/10 px-3 py-1 rounded-full border border-cyan-500/20">Tentang Kami</span>
                <h2 class="font-display text-3xl sm:text-4xl font-extrabold mt-6 leading-tight">
                    Klinik Koehried — <br>
                    <span class="grad-text">Mitra Kesehatan Anda</span>
                </h2>
                <p class="text-slate-300 leading-relaxed mt-6">
                    Klinik Koehried hadir sebagai solusi pelayanan kesehatan terintegrasi yang menggabungkan profesionalisme medis dengan inovasi teknologi. Kami berkomitmen memberikan akses layanan kesehatan yang mudah, cepat, dan terpercaya untuk seluruh masyarakat.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('filament.admin.auth.login') }}" class="rounded-full bg-brand-600 hover:bg-brand-700 px-8 py-3.5 font-bold text-white shadow-lg shadow-brand-600/25 transition-all hover:-translate-y-0.5">
                        Login ke Sistem
                    </a>
                    <a href="mailto:it@klinikkoehried.com" class="rounded-full border border-white/30 hover:bg-white/10 px-8 py-3.5 font-semibold text-white transition-all backdrop-blur-sm">
                        Hubungi Tim IT
                    </a>
                </div>
                <div class="mt-6 text-sm text-slate-400">
                    <span class="inline-flex items-center gap-2">
                        <svg class="h-4 w-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        it@klinikkoehried.com
                    </span>
                    <span class="inline-flex items-center gap-2 ml-4">
                        <svg class="h-4 w-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        +62 812-3456-7890
                    </span>
                </div>
            </div>

            <!-- Right - Cards -->
            <div class="lg:col-span-7 grid grid-cols-2 gap-6 sr sr-right">
                <div class="rounded-3xl bg-white/5 border border-white/10 p-6 backdrop-blur-sm hover:bg-white/10 transition-colors">
                    <div class="h-10 w-10 rounded-xl bg-brand-600/20 flex items-center justify-center mb-4">
                        <svg class="h-5 w-5 text-brand-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-white text-sm">Visi</h3>
                    <p class="text-sm text-slate-400 mt-2 leading-relaxed">Menjadi klinik terdepan dalam pelayanan kesehatan berbasis teknologi di Indonesia.</p>
                </div>

                <div class="rounded-3xl bg-white/5 border border-white/10 p-6 backdrop-blur-sm hover:bg-white/10 transition-colors">
                    <div class="h-10 w-10 rounded-xl bg-emerald-600/20 flex items-center justify-center mb-4">
                        <svg class="h-5 w-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-white text-sm">Misi</h3>
                    <p class="text-sm text-slate-400 mt-2 leading-relaxed">Memberikan pelayanan medis berkualitas dengan didukung sistem informasi yang modern dan terintegrasi.</p>
                </div>

                <div class="rounded-3xl bg-white/5 border border-white/10 p-6 backdrop-blur-sm hover:bg-white/10 transition-colors col-span-2">
                    <div class="h-10 w-10 rounded-xl bg-cyan-600/20 flex items-center justify-center mb-4">
                        <svg class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-white text-sm">Tim IT Support</h3>
                    <p class="text-sm text-slate-400 mt-2 leading-relaxed">
                        Jika Anda mengalami kendala teknis atau bug pada sistem, silakan hubungi tim IT kami di 
                        <a href="mailto:it@klinikkoehried.com" class="text-cyan-400 hover:text-cyan-300 transition-colors font-medium">it@klinikkoehried.com</a>
                        atau melalui nomor <span class="text-cyan-400 font-medium">+62 812-3456-7890</span>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════════ -->
<!-- FOOTER - Minimalis & Clean                            -->
<!-- ════════════════════════════════════════════════════════ -->
<footer class="bg-ink-950 border-t border-ink-800/50 py-12">
    <div class="mx-auto max-w-7xl px-6">
        <div class="grid md:grid-cols-4 gap-10 pb-10 border-b border-ink-800/50">

            <!-- Brand -->
            <div class="md:col-span-1 space-y-4">
                <div class="flex items-center gap-3">
                    <img 
                        src="{{ asset('storage/rs.avif') }}" 
                        alt="Logo Klinik Koehried" 
                        class="logo-hospital-footer"
                        onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2240%22 height=%2240%22 viewBox=%220 0 40 40%22%3E%3Crect width=%2240%22 height=%2240%22 rx=%228%22 fill=%22%232563eb%22/%3E%3Ctext x=%2220%22 y=%2228%22 text-anchor=%22middle%22 font-size=%2220%22 font-weight=%22bold%22 fill=%22white%22 font-family=%22sans-serif%22%3E%2B%3C/text%3E%3C/svg%3E'"
                    >
                    <span class="font-display font-bold text-lg text-white">Klinik <span class="text-brand-400">Koehried</span></span>
                </div>
                <p class="text-xs text-slate-500 leading-relaxed">
                    Sistem Informasi Rumah Sakit Modern untuk pelayanan kesehatan yang lebih baik.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold text-slate-300 uppercase tracking-widest">Navigasi</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('layanan.index') }}" class="text-slate-500 hover:text-slate-200 transition-colors">Layanan</a></li>
                    <li><a href="{{ route('unggulan.index') }}" class="text-slate-500 hover:text-slate-200 transition-colors">Pusat Unggulan</a></li>
                    <li><a href="{{ route('artikel-kesehatan.index') }}" class="text-slate-500 hover:text-slate-200 transition-colors">Artikel</a></li>
                    <li><a href="{{ route('tentang') }}" class="text-slate-500 hover:text-slate-200 transition-colors">Tentang</a></li>
                    <li><a href="{{ route('kontak') }}" class="text-slate-500 hover:text-slate-200 transition-colors">Kontak</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold text-slate-300 uppercase tracking-widest">Kontak</h4>
                <ul class="space-y-2 text-sm">
                    <li class="text-slate-500">Jalan Kesehatan No. 123</li>
                    <li class="text-slate-500">Jakarta Selatan, Indonesia</li>
                    <li><a href="mailto:it@klinikkoehried.com" class="text-slate-500 hover:text-slate-200 transition-colors">it@klinikkoehried.com</a></li>
                    <li><a href="tel:+6281234567890" class="text-slate-500 hover:text-slate-200 transition-colors">+62 812-3456-7890</a></li>
                </ul>
            </div>

            <!-- Hours -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold text-slate-300 uppercase tracking-widest">Jam Operasional</h4>
                <ul class="space-y-2 text-sm">
                    <li class="text-slate-500">Senin - Sabtu: <span class="text-slate-300">08:00 - 20:00</span></li>
                    <li class="text-slate-500">Minggu: <span class="text-slate-300">09:00 - 16:00</span></li>
                    <li class="text-slate-500 pt-1">UGD & Apotek: <span class="text-emerald-400 font-semibold">24 Jam</span></li>
                </ul>
            </div>
        </div>

        <!-- Bottom -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-slate-600">
                &copy; {{ date('Y') }} Klinik Koehried. All rights reserved.
            </p>
            <div class="flex items-center gap-6 text-xs text-slate-600">
                <span>Dibangun dengan ♥ untuk Indonesia</span>
                <span class="hidden sm:inline">|</span>
                <span class="flex items-center gap-1.5">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    Sistem Online
                </span>
            </div>
        </div>
    </div>
</footer>


<!-- ════════════════════════════════════════════════════════ -->
<!-- SCRIPTS                                                -->
<!-- ════════════════════════════════════════════════════════ -->
<script>
    (function() {

        // ── Scroll-aware nav ──────────────────────────────────────
        const nav = document.getElementById('nav');

        const updateNav = () => {
            const scrolled = window.scrollY > 40;
            nav && nav.classList.toggle('nav-scrolled', scrolled);
        };
        updateNav();
        window.addEventListener('scroll', updateNav, { passive: true });


        // ── Desktop Mega Menu (hover) ──────────────────────────────
        const megaNavItems = document.querySelectorAll('.mega-nav-item');
        let activeMega = null;
        let megaCloseTimeout = null;

        megaNavItems.forEach(item => {
            const trigger = item.querySelector('.mega-trigger');
            const panel = item.querySelector('.mega-menu');
            const chevron = item.querySelector('.mega-chevron');

            const openMega = () => {
                if (megaCloseTimeout) {
                    clearTimeout(megaCloseTimeout);
                    megaCloseTimeout = null;
                }
                if (activeMega && activeMega !== item) {
                    activeMega.querySelector('.mega-menu')?.classList.remove('open');
                    activeMega.querySelector('.mega-chevron')?.classList.remove('rotate-180');
                }
                panel?.classList.add('open');
                chevron?.classList.add('rotate-180');
                activeMega = item;
            };

            const closeMega = () => {
                megaCloseTimeout = setTimeout(() => {
                    panel?.classList.remove('open');
                    chevron?.classList.remove('rotate-180');
                    if (activeMega === item) activeMega = null;
                }, 120);
            };

            item.addEventListener('mouseenter', openMega);
            item.addEventListener('mouseleave', closeMega);
            panel?.addEventListener('mouseenter', () => {
                if (megaCloseTimeout) {
                    clearTimeout(megaCloseTimeout);
                    megaCloseTimeout = null;
                }
            });
            panel?.addEventListener('mouseleave', closeMega);
        });


        // ── Mega Menu Search Filter ───────────────────────────────
        document.querySelectorAll('.mega-search').forEach(input => {
            input.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();
                const grid = this.closest('.mega-menu').querySelector('.mega-grid');
                const items = grid.querySelectorAll('.mega-item');
                let visibleCount = 0;
                items.forEach(item => {
                    const name = (item.dataset.name || '').toLowerCase();
                    const desc = (item.querySelector('p:last-child')?.textContent || '').toLowerCase();
                    const match = !query || name.includes(query) || desc.includes(query);
                    item.style.display = match ? 'flex' : 'none';
                    if (match) visibleCount++;
                });
                // Show "no results" if needed
                const noResult = grid.querySelector('.no-result');
                if (visibleCount === 0) {
                    if (!noResult) {
                        const nr = document.createElement('div');
                        nr.className = 'no-result col-span-2 text-center py-6 text-slate-400 text-sm';
                        nr.textContent = 'Layanan tidak ditemukan. Coba kata kunci lain.';
                        grid.appendChild(nr);
                    }
                } else {
                    noResult?.remove();
                }
            });
        });


        // ── Mobile Mega Menu toggle ──────────────────────────────
        document.querySelectorAll('.mobile-mega-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const targetId = this.dataset.target;
                const panel = document.getElementById(targetId);
                const chevron = this.querySelector('[data-chevron]');
                if (panel) {
                    const isHidden = panel.classList.contains('hidden');
                    panel.classList.toggle('hidden', !isHidden);
                    if (chevron) {
                        chevron.style.transform = isHidden ? 'rotate(180deg)' : '';
                    }
                }
            });
        });


        // ── FAQ Accordion ─────────────────────────────────────────
        document.querySelectorAll('.faq-question').forEach(q => {
            q.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const chevron = this.querySelector('.faq-chevron');
                const isOpen = answer.classList.contains('open');
                // Close all
                document.querySelectorAll('.faq-answer.open').forEach(a => {
                    a.classList.remove('open');
                    a.previousElementSibling.querySelector('.faq-chevron')?.classList.remove('open');
                });
                if (!isOpen) {
                    answer.classList.add('open');
                    chevron?.classList.add('open');
                }
            });
        });


        // ── Mobile burger ─────────────────────────────────────────
        const burger = document.getElementById('burger');
        const mobileNav = document.getElementById('mobile-nav');
        if (burger && mobileNav) {
            burger.addEventListener('click', () => {
                mobileNav.classList.toggle('open');
            });
            mobileNav.querySelectorAll('a').forEach(a => {
                a.addEventListener('click', () => mobileNav.classList.remove('open'));
            });
        }


        // ── Scroll reveal ─────────────────────────────────────────
        const srEls = document.querySelectorAll('.sr');
        const srObs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    srObs.unobserve(e.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -32px 0px' });
        srEls.forEach(el => srObs.observe(el));


        // ── Number counter ────────────────────────────────────────
        const counters = document.querySelectorAll('.counter');
        const countObs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                const el = e.target;
                const target = +el.dataset.target;
                const duration = 1800;
                const step = 16;
                const inc = target / (duration / step);
                let current = 0;
                const tick = setInterval(() => {
                    current = Math.min(current + inc, target);
                    el.textContent = Math.floor(current);
                    if (current >= target) clearInterval(tick);
                }, step);
                countObs.unobserve(el);
            });
        }, { threshold: 0.5 });
        counters.forEach(c => countObs.observe(c));


        // ── Smooth anchor scroll with nav offset ─────────────────
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const target = document.querySelector(a.getAttribute('href'));
                if (!target) return;
                e.preventDefault();
                const offset = 80;
                window.scrollTo({ top: target.offsetTop - offset, behavior: 'smooth' });
            });
        });

    })();
</script>

</body>
</html>