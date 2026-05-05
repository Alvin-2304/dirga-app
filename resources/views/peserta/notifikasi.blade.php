<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800;900&amp;family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        body {
            background-color: #fcf8fa;
            min-height: max(884px, 100dvh);
        }
        .custom-shadow {
            box-shadow: 0px 4px 20px rgba(19, 27, 46, 0.08);
        }
        .pb-safe { padding-bottom: env(safe-area-inset-bottom); }
    </style>
</head>
<body class="font-body-md text-on-surface bg-background min-h-screen pb-24">

<!-- TopAppBar -->
<header class="sticky top-0 w-full flex justify-between items-center px-5 h-16 bg-white border-b border-slate-200 shadow-[0px_4px_20px_rgba(19,27,46,0.08)] z-50">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" class="active:scale-95 duration-200 transition-colors hover:bg-slate-100 p-2 rounded-full">
<span class="material-symbols-outlined text-[#131b2e]" data-icon="arrow_back">arrow_back</span>
</button>
<span class="font-manrope text-lg font-bold text-[#131b2e]">Notifikasi</span>
</div>
<button class="text-primary-container font-label-bold text-label-bold py-2 px-4 hover:bg-slate-50 transition-all active:scale-95">
            Tandai Semua Dibaca
        </button>
</header>

<main class="max-w-3xl mx-auto px-gutter py-xl">

<!-- Header Section -->
<section class="mb-xl">
<h1 class="font-display-md text-display-md text-primary-container mb-xs">Aktivitas Terbaru</h1>
<p class="font-body-sm text-body-sm text-on-surface-variant">Tetap pantau pembaruan kompetisi dan status Anda.</p>
</section>

<!-- Notifications List -->
<div class="space-y-md">

<!-- New Contest Item -->
<div class="group flex items-start gap-md p-md bg-white rounded-2xl shadow-[0px_4px_20px_rgba(19,27,46,0.06)] border border-slate-50 transition-all hover:shadow-[0px_10px_30px_rgba(19,27,46,0.1)] active:scale-[0.98]">
<div class="relative flex-shrink-0">
<div class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center text-white">
<span class="material-symbols-outlined" data-icon="emoji_events">emoji_events</span>
</div>
<div class="absolute -top-1 -right-1 w-3 h-3 bg-blue-500 rounded-full border-2 border-white"></div>
</div>
<div class="flex-grow">
<div class="flex justify-between items-start mb-1">
<h3 class="font-display-md text-[16px] leading-tight text-primary-container font-bold">Lomba Baru: UI/UX Challenge</h3>
<span class="font-body-sm text-[12px] text-on-surface-variant whitespace-nowrap">2 jam lalu</span>
</div>
<p class="font-body-sm text-on-surface-variant leading-relaxed">Kompetisi baru telah dibuka untuk para desainer kreatif! Segera daftarkan tim Anda sebelum kuota penuh.</p>
</div>
</div>

<!-- Status Update Item -->
<div class="group flex items-start gap-md p-md bg-white rounded-2xl shadow-[0px_4px_20px_rgba(19,27,46,0.06)] border border-slate-50 transition-all hover:shadow-[0px_10px_30px_rgba(19,27,46,0.1)] active:scale-[0.98]">
<div class="flex-shrink-0">
<div class="w-12 h-12 rounded-xl bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed">
<span class="material-symbols-outlined" data-icon="info">info</span>
</div>
</div>
<div class="flex-grow">
<div class="flex justify-between items-start mb-1">
<h3 class="font-display-md text-[16px] leading-tight text-primary-container font-bold">Update Status</h3>
<span class="font-body-sm text-[12px] text-on-surface-variant whitespace-nowrap">1 hari lalu</span>
</div>
<p class="font-body-sm text-on-surface-variant leading-relaxed">Pendaftaran Anda telah diterima untuk kompetisi "Frontend Masterclass". Tim juri akan meninjau berkas Anda segera.</p>
</div>
</div>

<!-- Divider -->
<div class="pt-lg pb-sm border-b border-slate-100">
<span class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-widest">Satu Minggu Terakhir</span>
</div>

<!-- Yesterday Item -->
<div class="group flex items-start gap-md p-md bg-surface-container-low opacity-75 rounded-2xl border border-transparent transition-all active:scale-[0.98]">
<div class="flex-shrink-0">
<div class="w-12 h-12 rounded-xl bg-secondary-container flex items-center justify-center text-on-secondary-container">
<span class="material-symbols-outlined" data-icon="group">group</span>
</div>
</div>
<div class="flex-grow">
<div class="flex justify-between items-start mb-1">
<h3 class="font-display-md text-[16px] leading-tight text-primary-container font-bold">Undangan Tim</h3>
<span class="font-body-sm text-[12px] text-on-surface-variant whitespace-nowrap">3 hari lalu</span>
</div>
<p class="font-body-sm text-on-surface-variant leading-relaxed">Budi Ardianto mengundang Anda untuk bergabung ke dalam tim "Cyber Sentinels".</p>
</div>
</div>

<!-- Promotional Card -->
<div class="relative overflow-hidden group flex flex-col gap-sm p-md bg-primary-container text-white rounded-2xl shadow-xl transition-all hover:scale-[1.02]">
<div class="flex items-center gap-xs">
<span class="material-symbols-outlined text-tertiary-fixed" data-icon="star">star</span>
<span class="font-label-bold text-label-bold text-tertiary-fixed">PROMO SPESIAL</span>
</div>
<div>
<h3 class="font-display-md text-[18px] mb-xs">Tingkatkan Profil Anda!</h3>
<p class="font-body-sm text-primary-fixed-dim">Dapatkan badge eksklusif dengan menyelesaikan 3 tantangan desain minggu ini.</p>
</div>
<div class="absolute -right-6 -bottom-6 opacity-10">
<span class="material-symbols-outlined !text-9xl" data-icon="emoji_events">emoji_events</span>
</div>
</div>

</div>

<!-- Load More -->
<div class="mt-xl flex justify-center">
<button class="px-lg py-sm font-label-bold text-label-bold text-primary-container border border-primary-container rounded-full hover:bg-primary-container hover:text-white transition-colors duration-300">
                Lihat Semua Notifikasi
            </button>
</div>
</main>

<!-- BottomNavBar 5 Tab -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-2 py-3 pb-safe bg-white/80 backdrop-blur-md border-t border-slate-100 shadow-[0_-4px_20px_rgba(15,23,42,0.08)] rounded-t-2xl">

<a href="{{ route('peserta.dashboard') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-600 transition-transform duration-200 active:scale-90">
<span class="material-symbols-outlined text-[20px]" data-icon="home">home</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Beranda</span>
</a>

<a href="{{ route('lomba.index') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-600 transition-transform duration-200 active:scale-90">
<span class="material-symbols-outlined text-[20px]" data-icon="emoji_events">emoji_events</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Kompetisi</span>
</a>

<a href="{{ route('lomba.saya') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-600 transition-transform duration-200 active:scale-90">
<span class="material-symbols-outlined text-[20px]" data-icon="list_alt">list_alt</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Lomba Saya</span>
</a>

<!-- Notifikasi (Active) -->
<a class="flex flex-col items-center justify-center text-slate-900 bg-slate-100 rounded-xl px-2 py-1 transition-transform duration-200 active:scale-90 relative">
<span class="material-symbols-outlined text-[20px]" data-icon="notifications" style="font-variation-settings: 'FILL' 1;">notifications</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Notifikasi</span>
</a>

<a href="{{ route('peserta.profil') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-600 transition-transform duration-200 active:scale-90">
<span class="material-symbols-outlined text-[20px]" data-icon="person">person</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Profil</span>
</a>

</nav>

</body>
</html>