<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-error": "#ffffff",
                    "primary-container": "#131b2e",
                    "on-tertiary-fixed": "#271902",
                    "tertiary-fixed": "#fbdeb6",
                    "primary-fixed-dim": "#bec6e0",
                    "primary-fixed": "#dae2fc",
                    "tertiary-fixed-dim": "#dec39c",
                    "surface-container-lowest": "#ffffff",
                    "on-surface-variant": "#45464d",
                    "secondary-fixed": "#dfe3e7",
                    "surface-container": "#f0edef",
                    "surface-dim": "#dcd9db",
                    "on-background": "#1b1b1d",
                    "secondary": "#5a5f62",
                    "on-tertiary-fixed-variant": "#564426",
                    "secondary-fixed-dim": "#c3c7cb",
                    "surface-container-highest": "#e4e2e3",
                    "on-error-container": "#93000a",
                    "inverse-on-surface": "#f3f0f2",
                    "on-secondary-container": "#5e6367",
                    "inverse-primary": "#bec6e0",
                    "surface-container-high": "#eae7e9",
                    "on-primary": "#ffffff",
                    "outline-variant": "#c6c6cd",
                    "tertiary-container": "#271902",
                    "error-container": "#ffdad6",
                    "primary": "#000000",
                    "tertiary": "#000000",
                    "on-secondary-fixed-variant": "#43474b",
                    "on-surface": "#1b1b1d",
                    "surface-tint": "#565e74",
                    "secondary-container": "#dce0e4",
                    "on-secondary": "#ffffff",
                    "outline": "#76777d",
                    "on-primary-fixed-variant": "#3f465b",
                    "surface-container-low": "#f6f3f5",
                    "background": "#fcf8fa",
                    "inverse-surface": "#303032",
                    "on-tertiary-container": "#97805e",
                    "on-primary-container": "#7c839b",
                    "on-tertiary": "#ffffff",
                    "on-secondary-fixed": "#171c1f",
                    "surface-bright": "#fcf8fa",
                    "error": "#ba1a1a",
                    "on-primary-fixed": "#131b2e",
                    "surface-variant": "#e4e2e3",
                    "surface": "#fcf8fa"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "xs": "8px",
                    "gutter": "16px",
                    "lg": "24px",
                    "xl": "32px",
                    "sm": "12px",
                    "base": "4px",
                    "md": "16px",
                    "container-margin": "20px"
            },
            "fontFamily": {
                    "body-md": ["Inter"],
                    "label-bold": ["Inter"],
                    "display-lg": ["Manrope"],
                    "body-lg": ["Inter"],
                    "display-md": ["Manrope"],
                    "body-sm": ["Inter"]
            },
            "fontSize": {
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "label-bold": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "display-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "display-md": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .pb-safe { padding-bottom: env(safe-area-inset-bottom); }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-background font-body-md text-on-surface">

<main class="max-w-md mx-auto relative min-h-screen pb-32">

<!-- Header Hero Section -->
<header class="relative w-full h-[250px] overflow-hidden">
<img alt="Poster Lomba" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4VKNPkrsJiG5gkvgUjFHWnYHW771Ac4UiprKFyGm8QShL__ddszCVt_xnFCAAuQAc-Xd_bLB7OycSt9Y7iEdbcHdEy4whU_UvFnhNPgUPVBeHugcaQkxEZjXtHLDycPHNFSDlWFKar15dIJsl94ic5-ihJDXfaeP4lJD8ZKnvxcmbM-tOIUOCjcosJZXzte7ZqmaTp5-XkHGyEgfV8RXLSWoh8UzwuBb5baLDJ4-MT7zD8maEzq_YCjauWwOAOSGO_imp3GuKb4Yn"/>
<button onclick="window.history.back()" class="absolute top-5 left-5 w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center shadow-lg active:scale-95 transition-all text-on-primary-fixed">
<span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
</button>
<div class="absolute top-5 right-5 bg-tertiary-fixed text-on-tertiary-fixed px-3 py-1.5 rounded-full font-label-bold text-[10px] flex items-center gap-1.5 shadow-md">
<div class="w-2 h-2 rounded-full bg-on-tertiary-fixed animate-pulse"></div>
                Berlangsung
            </div>
<div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-background to-transparent"></div>
</header>

<!-- Main Content Canvas -->
<section class="px-container-margin -mt-6 relative z-10">
<div class="bg-white rounded-2xl p-md shadow-[0px_4px_20px_rgba(19,27,46,0.08)]">
<div class="flex items-start justify-between gap-md mb-xs">
<h1 class="font-display-md text-display-md text-on-primary-fixed">National Robot Challenge 2026</h1>
</div>
<span class="inline-flex items-center px-3 py-1 rounded-full bg-primary-fixed text-on-primary-fixed-variant font-label-bold text-body-sm">
                    Teknologi
                </span>

<!-- Info Grid -->
<div class="grid grid-cols-2 gap-sm mt-lg pt-lg border-t border-slate-100">
<div class="flex items-start gap-xs">
<div class="w-8 h-8 rounded-lg bg-slate-50 flex items-center justify-center text-on-primary-fixed">
<span class="material-symbols-outlined text-[20px]" data-icon="calendar_month">calendar_month</span>
</div>
<div>
<p class="text-[10px] font-label-bold text-slate-500 uppercase tracking-wider">Masa Pendaftaran</p>
<p class="font-body-sm font-semibold">1 Okt - 12 Okt</p>
</div>
</div>
<div class="flex items-start gap-xs">
<div class="w-8 h-8 rounded-lg bg-slate-50 flex items-center justify-center text-on-primary-fixed">
<span class="material-symbols-outlined text-[20px]" data-icon="payments">payments</span>
</div>
<div>
<p class="text-[10px] font-label-bold text-slate-500 uppercase tracking-wider">Biaya Daftar</p>
<p class="font-body-sm font-semibold text-emerald-600">Gratis</p>
</div>
</div>
</div>
</div>

<!-- Prizes Section -->
<div class="mt-lg bg-white rounded-2xl p-md shadow-[0px_4px_20px_rgba(19,27,46,0.06)]">
<div class="flex items-center gap-xs mb-md">
<span class="material-symbols-outlined text-on-primary-fixed" data-icon="emoji_events">emoji_events</span>
<h2 class="font-display-md text-lg text-on-primary-fixed">Hadiah Kompetisi</h2>
</div>
<div class="space-y-sm">
<div class="flex items-center justify-between p-sm bg-tertiary-fixed/20 rounded-xl">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-yellow-500" data-icon="military_tech">military_tech</span>
<p class="font-body-md font-bold">Juara 1</p>
</div>
<p class="font-body-md font-extrabold text-on-primary-fixed">Rp 5.000.000</p>
</div>
<div class="flex items-center justify-between p-sm bg-slate-50 rounded-xl">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-slate-400" data-icon="military_tech">military_tech</span>
<p class="font-body-md font-semibold">Juara 2</p>
</div>
<p class="font-body-md font-bold text-on-primary-fixed">Rp 3.000.000</p>
</div>
<div class="flex items-center justify-between p-sm bg-slate-50 rounded-xl">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-amber-700" data-icon="military_tech">military_tech</span>
<p class="font-body-md font-semibold">Juara 3</p>
</div>
<p class="font-body-md font-bold text-on-primary-fixed">Rp 2.000.000</p>
</div>
</div>
<div class="mt-md pt-md border-t border-slate-100 flex justify-between items-center">
<p class="font-body-sm text-slate-500">Total Hadiah</p>
<p class="font-display-md text-xl text-primary-container">Rp 10.000.000</p>
</div>
</div>

<!-- Description -->
<div class="mt-lg">
<h3 class="font-display-md text-md text-on-primary-fixed mb-sm">Deskripsi</h3>
<p class="text-body-sm text-on-surface-variant leading-relaxed">
                    Kompetisi robotik tingkat nasional yang mempertemukan inovator muda dari seluruh penjuru negeri. National Robot Challenge 2026 berfokus pada pengembangan solusi otomasi untuk tantangan industri masa depan.
                </p>
</div>

<!-- Terms & Conditions -->
<div class="mt-lg mb-xl">
<h3 class="font-display-md text-md text-on-primary-fixed mb-sm">Ketentuan &amp; Syarat</h3>
<ul class="space-y-xs">
<li class="flex gap-sm text-body-sm text-on-surface-variant">
<span class="material-symbols-outlined text-body-md text-emerald-500" data-icon="check_circle">check_circle</span>
                        Peserta aktif perguruan tinggi (Diploma/S1) di Indonesia.
                    </li>
<li class="flex gap-sm text-body-sm text-on-surface-variant">
<span class="material-symbols-outlined text-body-md text-emerald-500" data-icon="check_circle">check_circle</span>
                        Satu tim terdiri dari maksimal 3 orang anggota.
                    </li>
<li class="flex gap-sm text-body-sm text-on-surface-variant">
<span class="material-symbols-outlined text-body-md text-emerald-500" data-icon="check_circle">check_circle</span>
                        Proposal dan prototipe harus orisinal dan belum pernah dilombakan.
                    </li>
</ul>
</div>

<!-- Important Dates Timeline -->
<div class="mt-lg bg-primary-container text-white p-lg rounded-2xl">
<h3 class="font-display-md text-md mb-md flex items-center gap-xs">
<span class="material-symbols-outlined text-tertiary-fixed" data-icon="schedule">schedule</span>
                    Timeline Penting
                </h3>
<div class="space-y-lg relative before:content-[''] before:absolute before:left-[11px] before:top-2 before:bottom-2 before:w-[2px] before:bg-slate-700">
<div class="flex items-center gap-md relative">
<div class="w-[24px] h-[24px] rounded-full bg-tertiary-fixed border-4 border-primary-container z-10"></div>
<div>
<p class="text-body-sm font-bold text-white">Mulai Pendaftaran</p>
<p class="text-[12px] text-slate-400">1 Oktober 2026</p>
</div>
</div>
<div class="flex items-center gap-md relative">
<div class="w-[24px] h-[24px] rounded-full bg-slate-600 border-4 border-primary-container z-10"></div>
<div>
<p class="text-body-sm font-bold text-white">Deadline Submisi</p>
<p class="text-[12px] text-slate-400">12 Oktober 2026</p>
</div>
</div>
<div class="flex items-center gap-md relative">
<div class="w-[24px] h-[24px] rounded-full bg-slate-600 border-4 border-primary-container z-10"></div>
<div>
<p class="text-body-sm font-bold text-white">Pengumuman Pemenang</p>
<p class="text-[12px] text-slate-400">20 Oktober 2026</p>
</div>
</div>
</div>
</div>
</section>

<!-- Fixed Bottom Action -->
<footer class="fixed bottom-0 left-0 w-full bg-white/80 backdrop-blur-xl border-t border-slate-100 px-container-margin py-md pb-safe z-50 shadow-[0px_-10px_30px_rgba(0,0,0,0.05)]">
<div class="max-w-md mx-auto flex items-center gap-md">
<a href="{{ route('daftar.create', 1) }}" class="flex-1 bg-on-primary-fixed text-white font-display-md py-4 rounded-xl active:scale-95 transition-transform shadow-lg shadow-on-primary-fixed/20 flex items-center justify-center">
                    Daftar Sekarang
                </a>
</div>
</footer>

</main>
</body>
</html>