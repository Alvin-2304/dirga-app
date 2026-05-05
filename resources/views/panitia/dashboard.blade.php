<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-primary-container": "#7c839b",
                    "tertiary-container": "#0d1c2d",
                    "surface-tint": "#565e74",
                    "primary-container": "#131b2e",
                    "on-error-container": "#93000a",
                    "on-primary-fixed": "#131b2e",
                    "secondary": "#5c5f61",
                    "outline": "#76777d",
                    "surface-dim": "#dcd9db",
                    "on-tertiary-fixed": "#0d1c2d",
                    "error-container": "#ffdad6",
                    "outline-variant": "#c6c6cd",
                    "inverse-on-surface": "#f3f0f2",
                    "surface-container-highest": "#e4e2e4",
                    "secondary-fixed": "#e0e3e5",
                    "secondary-fixed-dim": "#c4c7c9",
                    "surface-variant": "#e4e2e4",
                    "tertiary-fixed": "#d4e4fa",
                    "on-tertiary-fixed-variant": "#39485a",
                    "on-secondary-fixed": "#191c1e",
                    "on-error": "#ffffff",
                    "on-background": "#1b1b1d",
                    "on-tertiary-container": "#768599",
                    "on-primary": "#ffffff",
                    "on-secondary-fixed-variant": "#444749",
                    "tertiary-fixed-dim": "#b9c8de",
                    "on-secondary": "#ffffff",
                    "surface-container-low": "#f6f3f5",
                    "surface-container-lowest": "#ffffff",
                    "error": "#ba1a1a",
                    "on-surface-variant": "#45464d",
                    "inverse-primary": "#bec6e0",
                    "on-tertiary": "#ffffff",
                    "surface-bright": "#fcf8fa",
                    "surface-container-high": "#eae7e9",
                    "on-primary-fixed-variant": "#3f465c",
                    "tertiary": "#000000",
                    "primary": "#000000",
                    "surface-container": "#f0edef",
                    "inverse-surface": "#303032",
                    "on-secondary-container": "#626567",
                    "secondary-container": "#e0e3e5",
                    "surface": "#fcf8fa",
                    "primary-fixed": "#dae2fd",
                    "on-surface": "#1b1b1d",
                    "primary-fixed-dim": "#bec6e0",
                    "background": "#fcf8fa"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "section-padding": "24px",
                    "grid-columns": "4",
                    "stack-gap": "16px",
                    "container-margin": "20px",
                    "element-gap": "12px"
            },
            "fontFamily": {
                    "h3": ["Manrope"],
                    "h1": ["Manrope"],
                    "body-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "h2": ["Manrope"],
                    "body-md": ["Inter"],
                    "label-sm": ["Inter"]
            },
            "fontSize": {
                    "h3": ["20px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "600"}],
                    "h1": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "400"}],
                    "h2": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.04em", "fontWeight": "500"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .bg-glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen pb-24">
<!-- TopAppBar -->
<header class="sticky top-0 w-full z-50 flex justify-between items-center px-5 h-16 bg-white border-b border-slate-100 shadow-sm shadow-slate-900/5">
<div class="flex items-center gap-3">
<button class="transition-all duration-200 active:scale-95 text-slate-900">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
<h1 class="font-manrope font-bold text-lg text-slate-900 tracking-tight">DIRGA</h1>
</div>
<div class="flex items-center gap-4">
<span class="font-h3 text-h3 hidden md:block">Dashboard Panitia</span>
<div onclick="document.getElementById('logoutForm').submit()" class="w-8 h-8 rounded-full overflow-hidden bg-slate-200 border border-slate-200 cursor-pointer">
<img alt="User Profile Avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVcT8dvW_lg46C8URTQcd_WeBi5x18_omzQXMSyBXKf58wrzYHNwcNIG3RgtRv23s0EkJsErF_4ZggYeMWKX0lhsbv9Hpv93d9wzXw7gHDX3WihyT5wwszi7k2t9XMAwtUoG-8LA-3IuQENRvhmT4gFNKWaPxiv_avgGBkmjSme2tnc0Ew4JmynZMjjVjslMuZMReIXThnveXHioTzQAZLowsNYcpQK8dUhdwWNVKVKdOxQw7zQZIpJnw0yRC3BNPRoIeFOL8bwQTo"/>
</div>
</div>
</header>

<!-- Form Logout Tersembunyi -->
<form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<main class="max-w-4xl mx-auto px-5 pt-8">
<!-- Hero Section / Welcome -->
<section class="mb-8">
<h2 class="font-h1 text-h1 text-primary">Halo, {{ Auth::user()->name }}!</h2>
<p class="text-on-primary-container font-body-md mt-1">Kelola kompetisi Anda dan pantau statistik hari ini.</p>
</section>
<!-- Stats Section (Bento Style) -->
<section class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
<div class="col-span-2 bg-primary-container p-6 rounded-2xl text-white flex flex-col justify-between shadow-lg shadow-primary-container/20">
<div>
<span class="material-symbols-outlined mb-2 text-teal-400" data-icon="rocket_launch">rocket_launch</span>
<p class="text-label-sm uppercase tracking-wider opacity-80">Lomba Aktif</p>
</div>
<div class="flex items-baseline gap-2 mt-4">
<span class="text-4xl font-bold">12</span>
<span class="text-teal-400 text-sm font-semibold">+2 Baru</span>
</div>
</div>
<div class="bg-white border border-slate-100 p-6 rounded-2xl shadow-sm">
<span class="material-symbols-outlined mb-2 text-slate-900" data-icon="groups">groups</span>
<p class="text-label-sm text-on-primary-container uppercase tracking-wider">Total Pendaftar</p>
<p class="text-2xl font-bold text-primary mt-2">1,240</p>
</div>
<div class="bg-white border border-slate-100 p-6 rounded-2xl shadow-sm">
<span class="material-symbols-outlined mb-2 text-slate-900" data-icon="payments">payments</span>
<p class="text-label-sm text-on-primary-container uppercase tracking-wider">Pendapatan</p>
<p class="text-2xl font-bold text-primary mt-2">Rp 45M</p>
</div>
</section>
<!-- Lomba Saya Section -->
<section>
<div class="flex items-center justify-between mb-6">
<h3 class="font-h2 text-h2 text-primary">Lomba Saya</h3>
<button class="text-on-primary-fixed-variant font-label-md flex items-center gap-1 hover:underline">
                    Lihat Semua <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span>
</button>
</div>
<div class="space-y-4">
<!-- Competition Card 1 -->
<div class="bg-white border border-slate-100 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all duration-300">
<div class="flex items-start justify-between">
<div class="flex gap-4">
<div class="w-16 h-16 rounded-xl bg-slate-100 overflow-hidden shrink-0">
<img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAaUXA3sto0crVGgbptvIllQzORbk4EqhjKbFLILEj_N6GrTF0MgyAj6h5uPqpV8mnxbDabH2IDvVlW186x0rTBpAoWLhRvnUUOvjj-hLE5YAIvQZQ0AomeJ0_MIPJ1hokU7og1tkdIDjsgx3MnClgbgjEr5Ohfreri9PBQQe0FZddCduDYsqnHT4ip9Mqh3258Nup-X0Va-eqmwFgUc5aLxZzh5sWVBL6hjurFwFODiuFQZVJyEL66ujarMj1QP3NBkuMcrRU3UVYH"/>
</div>
<div>
<div class="flex items-center gap-2 mb-1">
<span class="px-2 py-0.5 bg-teal-50 text-teal-700 text-[10px] font-bold rounded uppercase tracking-tighter">Berlangsung</span>
<span class="text-on-primary-container text-[11px] font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-xs" data-icon="calendar_today">calendar_today</span> 12 Okt 2024
                                    </span>
</div>
<a href="{{ route ('lomba.detail', ['id' => 1]) }}" class="font-h3 text-h3 text-primary">National Robot Challenge 2024</a>
<p class="text-body-sm text-on-primary-container mt-1">256 Peserta terdaftar • Kategori: Teknologi</p>
</div>
</div>
</div>
<div class="mt-6 flex items-center gap-3">
<button class="flex-1 py-2.5 px-4 bg-primary text-white font-label-md rounded-xl flex items-center justify-center gap-2 transition-all active:scale-95">
<span class="material-symbols-outlined text-lg" data-icon="query_stats">query_stats</span> Statistik
                        </button>
<button class="flex-1 py-2.5 px-4 border border-outline-variant text-primary font-label-md rounded-xl flex items-center justify-center gap-2 transition-all active:scale-95 hover:bg-slate-50">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span> Edit
                        </button>
</div>
</div>
<!-- Competition Card 2 -->
<div class="bg-white border border-slate-100 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all duration-300">
<div class="flex items-start justify-between">
<div class="flex gap-4">
<div class="w-16 h-16 rounded-xl bg-slate-100 overflow-hidden shrink-0">
<img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgcQyVzmEImCe126CVfcuXolew2EAHOni25RWzyg119nzf0Jau4k35oNG0wLg_U8PfWETDWlmJMRyOCPy3sAS8wZJNhjpTxIqHWnObUMe3tysQR3l86IxaameydOKV5aC3UeOvxVX8RSAV8UcC9LtQW1tSfpPlPh11feoXEWDs74CJRb0M3c9aB0OHjrHK9jxJgRY8v-nifl0sEv3bIEmSVZPIfoBdPA_dH3MvwaGV2XP5L-cgRkMLP8qNy--ehMsHiWANpdxRNW9p"/>
</div>
<div>
<div class="flex items-center gap-2 mb-1">
<span class="px-2 py-0.5 bg-slate-100 text-slate-500 text-[10px] font-bold rounded uppercase tracking-tighter">Draft</span>
<span class="text-on-primary-container text-[11px] font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-xs" data-icon="calendar_today">calendar_today</span> 20 Nov 2024
                                    </span>
</div>
<h4 class="font-h3 text-h3 text-primary">Business Pitch Competition</h4>
<p class="text-body-sm text-on-primary-container mt-1">Pendaftaran belum dibuka • Kategori: Bisnis</p>
</div>
</div>
</div>
<div class="mt-6 flex items-center gap-3">
<button class="flex-1 py-2.5 px-4 bg-primary text-white font-label-md rounded-xl flex items-center justify-center gap-2 transition-all active:scale-95">
<span class="material-symbols-outlined text-lg" data-icon="query_stats">query_stats</span> Statistik
                        </button>
<button class="flex-1 py-2.5 px-4 border border-outline-variant text-primary font-label-md rounded-xl flex items-center justify-center gap-2 transition-all active:scale-95 hover:bg-slate-50">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span> Edit
                        </button>
</div>
</div>
<!-- Empty State Suggestion / Invite Card -->
<div class="bg-slate-50 border-2 border-dashed border-slate-200 rounded-2xl p-8 flex flex-col items-center justify-center text-center">
<div class="w-12 h-12 rounded-full bg-white flex items-center justify-center shadow-sm mb-4">
<span class="material-symbols-outlined text-primary" data-icon="add_circle">add_circle</span>
</div>
<h4 class="font-h3 text-primary">Buat Kompetisi Baru</h4>
<p class="text-body-sm text-on-primary-container mt-1 max-w-[240px]">Siap untuk mencari talenta terbaik di seluruh Indonesia?</p>
<a href="{{ route('lomba.create') }}" class="mt-4 px-6 py-2 bg-primary text-white font-label-md rounded-full transition-all hover:bg-slate-800 inline-block text-center">
    Mulai Sekarang
</a>
</div>
</div>
</section>
</main>
<!-- FAB -->
<a href="{{ route('lomba.create') }}" class="fixed bottom-24 right-5 w-14 h-14 bg-primary text-white rounded-2xl shadow-xl shadow-primary/30 flex items-center justify-center transition-transform duration-200 active:scale-90 z-40">
<span class="material-symbols-outlined text-2xl" data-icon="add">add</span>
</a>
<!-- BottomNavBar Panitia -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-3 py-3 pb-safe bg-white border-t border-slate-100 shadow-[0_-4px_20px_rgba(15,23,42,0.06)] rounded-t-2xl">

<!-- Kelola (Active) -->
<a class="flex flex-col items-center justify-center text-[#131b2e] font-bold bg-slate-50 rounded-xl px-3 py-1 active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">emoji_events</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Kelola</span>
</a>

<!-- Notifikasi -->
<a href="{{ route('panitia.notifikasi') }}" class="flex flex-col items-center justify-center text-slate-400 px-2 py-1 hover:text-[#131b2e] active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]">notifications</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Notifikasi</span>
</a>

<!-- Leaderboard -->
<a href="{{ route('panitia.leaderboard') }}" class="flex flex-col items-center justify-center text-slate-400 px-2 py-1 hover:text-[#131b2e] active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]">leaderboard</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Leaderboard</span>
</a>

<!-- Profil -->
<a href="{{ route('panitia.profil') }}" class="flex flex-col items-center justify-center text-slate-400 px-2 py-1 hover:text-[#131b2e] active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]">person</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Profil</span>
</a>

</nav>
</body>
</html>