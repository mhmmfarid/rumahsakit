@php
    $heroButtonClasses = '';
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Koehried - Edukasi Kesehatan & Artikel Dokter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        *{box-sizing:border-box;margin:0;padding:0}
        body{font-family:'Poppins',sans-serif;background:#0a0f1a;color:#e2e8f0}
        a{text-decoration:none;color:inherit}

        .tag{display:inline-flex;align-items:center;gap:6px;background:rgba(249,115,22,0.15);color:#fb923c;border:1px solid rgba(249,115,22,0.3);border-radius:999px;padding:5px 14px;font-size:12px;font-weight:600;letter-spacing:.08em;text-transform:uppercase}

        nav{background:#0d1420;border-bottom:1px solid rgba(255,255,255,0.06);position:sticky;top:0;z-index:99;padding:0 2rem}
        .nav-inner{max-width:1120px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;height:64px;gap:1rem}
        .brand{display:flex;align-items:center;gap:10px;font-weight:700;font-size:15px;color:#f1f5f9}
        .brand-ico{width:36px;height:36px;background:linear-gradient(135deg,#f97316,#fb923c);border-radius:10px;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:14px;color:#fff;flex-shrink:0}
        .nav-links{display:flex;gap:1.5rem}
        .nav-links a{font-size:13px;font-weight:500;color:#94a3b8;transition:color .2s}
        .nav-links a:hover{color:#f1f5f9}
        .nav-cta{display:flex;gap:.6rem;align-items:center}
        .btn-ghost{background:transparent;border:1px solid rgba(255,255,255,0.12);color:#cbd5e1;border-radius:999px;padding:7px 18px;font-size:13px;font-weight:500;cursor:pointer;transition:all .2s}
        .btn-ghost:hover{border-color:rgba(255,255,255,0.25);color:#f1f5f9}
        .btn-primary-nav{background:linear-gradient(135deg,#f97316,#ea580c);border:none;color:#fff;border-radius:999px;padding:8px 20px;font-size:13px;font-weight:600;cursor:pointer;transition:all .2s}
        .btn-primary-nav:hover{opacity:.9;transform:translateY(-1px)}

        .hero{max-width:1120px;margin:0 auto;display:grid;grid-template-columns:1.15fr .85fr;gap:3rem;align-items:center;padding:5rem 2rem 4rem}
        .hero-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(249,115,22,0.1);border:1px solid rgba(249,115,22,0.25);border-radius:999px;padding:6px 16px;font-size:12px;font-weight:600;color:#fb923c;margin-bottom:1.5rem;letter-spacing:.06em;text-transform:uppercase}
        .hero h1{font-size:46px;font-weight:800;line-height:1.12;color:#f8fafc;margin-bottom:1.25rem;letter-spacing:-.5px}
        .hero h1 span{background:linear-gradient(135deg,#f97316,#fb923c);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
        .hero-sub{color:#94a3b8;font-size:15px;line-height:1.8;margin-bottom:2rem;max-width:480px}
        .hero-btns{display:flex;gap:.75rem;flex-wrap:wrap}
        .btn-hero{background:linear-gradient(135deg,#f97316,#ea580c);color:#fff;border:none;border-radius:999px;padding:13px 28px;font-size:14px;font-weight:600;cursor:pointer;display:inline-flex;align-items:center;gap:8px;transition:all .2s;box-shadow:0 8px 24px rgba(249,115,22,0.3)}
        .btn-hero:hover{transform:translateY(-2px);box-shadow:0 12px 30px rgba(249,115,22,0.4)}
        .btn-hero-out{background:transparent;border:1px solid rgba(255,255,255,0.12);color:#cbd5e1;border-radius:999px;padding:12px 26px;font-size:14px;font-weight:500;cursor:pointer;display:inline-flex;align-items:center;gap:8px;transition:all .2s}
        .btn-hero-out:hover{border-color:rgba(255,255,255,0.3);color:#f1f5f9;background:rgba(255,255,255,0.04)}

        .hero-card{background:#111827;border:1px solid rgba(255,255,255,0.08);border-radius:24px;padding:2rem;position:relative;overflow:hidden}
        .hero-card::before{content:'';position:absolute;top:-40px;right:-40px;width:160px;height:160px;background:radial-gradient(circle,rgba(249,115,22,0.12),transparent 70%);pointer-events:none}
        .hc-top{background:rgba(249,115,22,0.08);border:1px solid rgba(249,115,22,0.15);border-radius:14px;padding:1rem 1.25rem;display:flex;justify-content:space-between;align-items:center;margin-bottom:1.5rem}
        .hc-label{font-size:10px;text-transform:uppercase;letter-spacing:.1em;color:#64748b;margin-bottom:3px}
        .hc-val{font-size:18px;font-weight:700;color:#f1f5f9}
        .hc-badge{background:rgba(249,115,22,0.15);border-radius:8px;padding:8px 14px;text-align:center}
        .hc-badge .hc-label{color:#fb923c}
        .hc-badge .hc-val{font-size:13px;color:#fb923c}
        .stats-grid{display:grid;grid-template-columns:1fr 1fr;gap:.75rem;margin-bottom:1rem}
        .stat-box{background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.06);border-radius:14px;padding:1rem}
        .stat-box .lbl{font-size:11px;color:#64748b;margin-bottom:.5rem}
        .stat-box .num{font-size:28px;font-weight:700;color:#f8fafc}
        .testimonial{background:rgba(249,115,22,0.06);border:1px solid rgba(249,115,22,0.12);border-radius:14px;padding:1.25rem}
        .testimonial p{font-size:13px;color:#94a3b8;line-height:1.7;font-style:italic;margin-bottom:.75rem}
        .testimonial .author{font-size:12px;font-weight:600;color:#fb923c}

        .section{max-width:1120px;margin:0 auto;padding:5rem 2rem}
        .section-head{text-align:center;margin-bottom:3rem}
        .section-head h2{font-size:34px;font-weight:800;color:#f8fafc;line-height:1.2;margin-bottom:.75rem;margin-top:.75rem}
        .section-head p{color:#64748b;font-size:14px;max-width:520px;margin:0 auto;line-height:1.8}

        .why-wrap{background:#0d1420;border-top:1px solid rgba(255,255,255,0.05);border-bottom:1px solid rgba(255,255,255,0.05)}
        .why-inner{max-width:1120px;margin:0 auto;padding:5rem 2rem;display:grid;grid-template-columns:1fr 1fr;gap:3.5rem;align-items:start}
        .why-left h2{font-size:32px;font-weight:800;color:#f8fafc;line-height:1.25;margin-bottom:1rem}
        .why-left p{color:#64748b;font-size:14px;line-height:1.85}
        .why-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem}
        .why-card{background:#111827;border:1px solid rgba(255,255,255,0.07);border-radius:18px;padding:1.25rem;transition:border-color .2s}
        .why-card:hover{border-color:rgba(249,115,22,0.3)}
        .why-card .wc-tag{font-size:11px;font-weight:600;color:#fb923c;text-transform:uppercase;letter-spacing:.06em;margin-bottom:.6rem}
        .why-card h3{font-size:14px;font-weight:700;color:#e2e8f0;margin-bottom:.5rem;line-height:1.4}
        .why-card p{font-size:12px;color:#64748b;line-height:1.7}

        .cats-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem}
        .cat-card{background:#111827;border:1px solid rgba(255,255,255,0.07);border-radius:20px;padding:1.75rem;transition:all .25s}
        .cat-card:hover{border-color:rgba(249,115,22,0.35);transform:translateY(-3px)}
        .cat-icon{width:52px;height:52px;background:rgba(249,115,22,0.1);border:1px solid rgba(249,115,22,0.2);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;color:#fb923c;margin-bottom:1rem}
        .cat-card h3{font-size:15px;font-weight:700;color:#e2e8f0;margin-bottom:.5rem}
        .cat-card p{font-size:12px;color:#64748b;line-height:1.7}

        .articles-header{display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:2rem}
        .articles-header h2{font-size:28px;font-weight:800;color:#f8fafc}
        .articles-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem}
        .feat-article{grid-column:1/-1;background:linear-gradient(135deg,#1a0a00,#1c1205 40%,#0d1420);border:1px solid rgba(249,115,22,0.2);border-radius:24px;padding:2.5rem;position:relative;overflow:hidden;margin-bottom:.5rem}
        .feat-cats{display:flex;gap:.5rem;flex-wrap:wrap;margin-bottom:1.25rem}
        .feat-cats span{background:rgba(249,115,22,0.15);border:1px solid rgba(249,115,22,0.25);border-radius:999px;padding:4px 12px;font-size:11px;font-weight:600;color:#fb923c;text-transform:uppercase;letter-spacing:.05em}
        .feat-article h3{font-size:28px;font-weight:800;color:#f8fafc;line-height:1.2;margin-bottom:1rem;max-width:600px}
        .feat-article > p{color:#94a3b8;font-size:14px;line-height:1.8;max-width:560px;margin-bottom:1.75rem}
        .feat-author{display:flex;align-items:center;gap:.75rem;margin-bottom:1.75rem}
        .feat-author img{width:44px;height:44px;border-radius:50%;border:2px solid rgba(249,115,22,0.3);object-fit:cover}
        .feat-author .name{font-size:13px;font-weight:600;color:#e2e8f0}
        .feat-author .role{font-size:11px;color:#64748b}
        .art-card{background:#111827;border:1px solid rgba(255,255,255,0.07);border-radius:20px;overflow:hidden;transition:all .25s}
        .art-card:hover{border-color:rgba(249,115,22,0.3);transform:translateY(-3px)}
        .art-img{width:100%;height:160px;object-fit:cover;display:block}
        .art-body{padding:1.25rem}
        .art-cat{font-size:10px;font-weight:600;color:#fb923c;text-transform:uppercase;letter-spacing:.08em;margin-bottom:.5rem}
        .art-body h3{font-size:14px;font-weight:700;color:#e2e8f0;line-height:1.45;margin-bottom:.5rem}
        .art-body p{font-size:12px;color:#64748b;line-height:1.6;margin-bottom:1rem}
        .art-footer{display:flex;justify-content:space-between;align-items:center;border-top:1px solid rgba(255,255,255,0.06);padding-top:.75rem}
        .art-date{font-size:11px;color:#475569}
        .art-read{font-size:12px;font-weight:600;color:#fb923c}

        .stats-dark{background:#0d1420;border-top:1px solid rgba(255,255,255,0.05);border-bottom:1px solid rgba(255,255,255,0.05)}
        .stats-inner{max-width:1120px;margin:0 auto;padding:5rem 2rem;display:grid;grid-template-columns:.9fr repeat(3,1fr);gap:2rem;align-items:start}
        .si-left h2{font-size:22px;font-weight:700;color:#f8fafc;margin-bottom:.75rem}
        .si-left p{font-size:13px;color:#64748b;line-height:1.75}
        .si-card{background:#111827;border:1px solid rgba(255,255,255,0.07);border-radius:18px;padding:1.5rem}
        .si-card .lbl{font-size:10px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:.1em;margin-bottom:1rem}
        .si-card .big{font-size:38px;font-weight:800;color:#f8fafc;margin-bottom:.25rem}
        .si-card .sub{font-size:12px;color:#475569}

        .footer{background:#060b14;border-top:1px solid rgba(255,255,255,0.06)}
        .footer-inner{max-width:1120px;margin:0 auto;padding:3.5rem 2rem;display:flex;justify-content:space-between;align-items:center;gap:2rem}
        .foot-left h3{font-size:22px;font-weight:800;color:#f8fafc;margin-bottom:.5rem}
        .foot-left p{font-size:13px;color:#64748b;max-width:420px;line-height:1.75}
        .foot-cta{background:linear-gradient(135deg,#f97316,#ea580c);color:#fff;border:none;border-radius:999px;padding:13px 28px;font-size:13px;font-weight:600;cursor:pointer;white-space:nowrap;transition:all .2s;box-shadow:0 6px 20px rgba(249,115,22,0.25)}
        .foot-cta:hover{transform:translateY(-2px);box-shadow:0 10px 28px rgba(249,115,22,0.35)}
    </style>
</head>
<body>

<nav>
  <div class="nav-inner">
    <a href="{{ route('home') }}" class="brand">
      <div class="brand-ico">K</div>
      Klinik Koehried
    </a>
    <div class="nav-links">
      <a href="#why">Mengapa Klinik</a>
      <a href="#features">Edukasi</a>
      <a href="#articles">Artikel</a>
      <a href="#statistik">Laporan</a>
    </div>
    <div class="nav-cta">
      <a href="{{ route('artikel-kesehatan.index') }}" class="btn-ghost">Kunjungi Blog</a>
      @auth
        <a href="{{ route('filament.admin.pages.dashboard') }}" class="btn-primary-nav">Dashboard</a>
        <form action="{{ route('logout') }}" method="POST" style="display:inline">@csrf
          <button type="submit" class="btn-ghost">Logout</button>
        </form>
      @else
        <a href="{{ route('filament.admin.auth.login') }}" class="btn-primary-nav">Login</a>
      @endauth
    </div>
  </div>
</nav>

<main>
  <!-- HERO -->
  <section class="hero">
    <div>
      <div class="hero-badge">&#9829; Edukasi Kesehatan</div>
      <h1>Portal Kesehatan &amp; Artikel <span>Dokter</span> yang Mudah Dipahami</h1>
      <p class="hero-sub">Temukan informasi medis terpercaya, tips kesehatan harian, dan artikel dokter untuk keluarga Anda.</p>
      <div class="hero-btns">
        <a href="#articles" class="btn-hero">Lihat Artikel Terbaru</a>
        <a href="#why" class="btn-hero-out">Pelajari Lebih Lanjut</a>
      </div>
    </div>
    <div class="hero-card">
      <div class="hc-top">
        <div>
          <div class="hc-label">Klinik Koehried</div>
          <div class="hc-val">Layanan Digital</div>
        </div>
        <div class="hc-badge">
          <div class="hc-label">Update</div>
          <div class="hc-val">Realtime</div>
        </div>
      </div>
      <div class="stats-grid">
        <div class="stat-box"><div class="lbl">Artikel Terbit</div><div class="num">{{ $stats['articles'] }}</div></div>
        <div class="stat-box"><div class="lbl">Kategori</div><div class="num">{{ $stats['categories'] }}</div></div>
        <div class="stat-box"><div class="lbl">Dokter</div><div class="num">{{ $stats['doctors'] }}</div></div>
        <div class="stat-box"><div class="lbl">Pasien</div><div class="num">{{ $stats['patients'] }}</div></div>
      </div>
      <div class="testimonial">
        <p>"Platform yang simpel, responsif, dan membantu saya memahami rekomendasi dokter dengan cepat."</p>
        <div class="author">— Farah, pasien</div>
      </div>
    </div>
  </section>

  <!-- WHY -->
  <div class="why-wrap" id="why">
    <div class="why-inner">
      <div class="why-left">
        <div class="tag" style="margin-bottom:1rem">Kenapa pilih kami?</div>
        <h2>Konten medis jernih untuk semua usia, langsung dari praktisi.</h2>
        <p>Panduan mudah dimengerti, ringkasan masalah kesehatan umum, dan insight dokter yang relevan untuk kebutuhan keluarga Anda.</p>
      </div>
      <div class="why-grid">
        <div class="why-card">
          <div class="wc-tag">Praktis</div>
          <h3>Ringkas & langsung ke inti</h3>
          <p>Artikel ditulis untuk memudahkan keputusan sehari-hari tanpa jargon yang sulit.</p>
        </div>
        <div class="why-card">
          <div class="wc-tag">Terpercaya</div>
          <h3>Konten dokter & spesialis</h3>
          <p>Konten divalidasi oleh tim medis agar tetap akurat dan relevan.</p>
        </div>
        <div class="why-card">
          <div class="wc-tag">Terstruktur</div>
          <h3>Kategori kesehatan</h3>
          <p>Temukan topik dari gaya hidup hingga perawatan medis.</p>
        </div>
        <div class="why-card">
          <div class="wc-tag">Akses cepat</div>
          <h3>Tampilan mobile-friendly</h3>
          <p>Cocok dibaca dari ponsel, tablet, maupun desktop kapan saja.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- CATEGORIES -->
  <section class="section" id="features">
    <div class="section-head">
      <div class="tag">Edukasi untuk pengguna</div>
      <h2>Topik edukasi kesehatan populer</h2>
      <p>Kategori yang paling banyak dicari pasien dan keluarga.</p>
    </div>
    <div class="cats-grid">
      @foreach($categories as $category)
      <div class="cat-card">
        <div class="cat-icon">{{ strtoupper(substr($category->name, 0, 2)) }}</div>
        <h3>{{ $category->name }}</h3>
        <p>{{ $category->posts_count }} artikel praktis dari dokter dan tenaga medis.</p>
      </div>
      @endforeach
    </div>
  </section>

  <!-- ARTICLES -->
  <section class="section" id="articles" style="padding-top:0">
    <div class="articles-header">
      <div>
        <div class="tag" style="margin-bottom:.75rem">Artikel terbaru</div>
        <h2>Pilihan bacaan paling direkomendasikan</h2>
      </div>
      <a href="{{ route('artikel-kesehatan.index') }}" class="btn-ghost">Lihat semua &rarr;</a>
    </div>

    @if($featuredPost)
    <div class="feat-article">
      <div class="feat-cats">
        @foreach($featuredPost->categories as $category)
          <span>{{ $category->name }}</span>
        @endforeach
        <span>Unggulan</span>
      </div>
      <h3>{{ $featuredPost->title }}</h3>
      <p>{{ Str::limit($featuredPost->sub_title, 180) }}</p>
      <div class="feat-author">
        <img src="{{ asset($featuredPost->user->avatar) }}" alt="{{ $featuredPost->user->name() }}">
        <div>
          <div class="name">{{ $featuredPost->user->name() }}</div>
          <div class="role">Penulis</div>
        </div>
      </div>
      <a href="{{ route('artikel-kesehatan.show', ['post' => $featuredPost->slug]) }}" class="btn-hero">Baca sekarang</a>
    </div>
    @endif

    <div class="articles-grid" style="margin-top:1.25rem">
      @foreach($recentPosts as $post)
      <div class="art-card">
        <img class="art-img" src="{{ asset($post->featurePhoto) }}" alt="{{ $post->photo_alt_text }}">
        <div class="art-body">
          <div class="art-cat">{{ $post->categories->first()?->name ?? 'Artikel' }}</div>
          <h3>{{ $post->title }}</h3>
          <p>{{ Str::limit($post->sub_title, 100) }}</p>
          <div class="art-footer">
            <span class="art-date">{{ $post->formattedPublishedDate() }}</span>
            <a href="{{ route('artikel-kesehatan.show', ['post' => $post->slug]) }}" class="art-read">Baca &rarr;</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <!-- STATS -->
  <div class="stats-dark" id="statistik">
    <div class="stats-inner">
      <div class="si-left">
        <div class="tag" style="margin-bottom:1rem">Laporan inti</div>
        <h2>Ringkasan layanan Klinik Koehried</h2>
        <p>Data real-time pengguna, artikel, dan capaian edukasi kesehatan.</p>
      </div>
      <div class="si-card">
        <div class="lbl">Artikel</div>
        <div class="big">{{ $stats['articles'] }}</div>
        <div class="sub">Artikel edukasi terbit</div>
      </div>
      <div class="si-card">
        <div class="lbl">Kategori</div>
        <div class="big">{{ $stats['categories'] }}</div>
        <div class="sub">Subtopik tersedia</div>
      </div>
      <div class="si-card">
        <div class="lbl">Dokter / Pasien</div>
        <div class="big">{{ $stats['doctors'] }} / {{ $stats['patients'] }}</div>
        <div class="sub">Tenaga medis & pasien aktif</div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="footer">
    <div class="footer-inner">
      <div class="foot-left">
        <div class="tag" style="margin-bottom:.75rem">Klinik Koehried</div>
        <h3>Selalu siap membantu</h3>
        <p>Platform edukasi kesehatan yang memberi Anda bingkai informasi terpercaya dan akses ke artikel dokter.</p>
      </div>
      <a href="{{ route('artikel-kesehatan.index') }}" class="foot-cta">Mulai Baca Sekarang &rarr;</a>
    </div>
  </div>
</main>

</body>
</html>