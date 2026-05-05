<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800;900&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
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
            display: inline-block;
            vertical-align: middle;
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
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
<header class="sticky top-0 w-full z-50 flex justify-between items-center px-5 h-16 bg-white dark:bg-slate-900 border-b border-slate-100 dark:border-slate-800 shadow-sm shadow-slate-900/5">
<div class="flex items-center gap-3">
<button class="transition-all duration-200 active:scale-95 text-slate-900 dark:text-slate-50">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
<span class="text-xl font-black text-slate-900 dark:text-white tracking-tight font-manrope">DIRGA</span>
</div>
<div class="flex items-center gap-3">
<div onclick="document.getElementById('logoutForm').submit()" class="w-10 h-10 rounded-full overflow-hidden border-2 border-slate-100 transition-all duration-200 active:scale-95 cursor-pointer">
<img alt="User Profile Avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKVT2fal9IqXDTblpa1IqU29An_lyRtttDTaNJit8WJDED5qRL3jbbel4roie5rUQaDoo_b17zvfNZgwC_ChnVLFPGZnkZNPv5DPSKYai0Nv-Nv2Lf6spgCFzj3nzHpc437fLecDIPosINvWBuJfEMCVS0ekAd--CBDe_D8KpOLU0Ap50d5O_taQ5_kf2IdX2T4LiO3riwGkEkOKXCZNMVZqVDfN2kxXRv_u55LmMYhuYyY31yXJOe-Q-tY_3_LrEoks6RWmkgNaYe"/>
</div>
</div>
</header>

<!-- Form Logout Tersembunyi -->
<form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<main class="max-w-md mx-auto px-container-margin pt-6 space-y-8">
<!-- Greeting Section -->
<section class="space-y-1">
<h1 class="font-h1 text-h1 text-primary">Halo, {{ Auth::user()->name }}!</h1>
<p class="font-body-md text-on-primary-container">Siap untuk memenangkan kompetisi hari ini?</p>
</section>
<!-- Search Bar -->
<section class="relative">
<div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined" data-icon="search">search</span>
</div>
<input class="w-full py-4 pl-12 pr-4 bg-surface-container-low border-none rounded-xl font-body-md text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary-container transition-all" placeholder="Cari kompetisi impianmu..." type="text"/>
</section>
<!-- Categories -->
<section class="space-y-4">
<div class="flex justify-between items-center">
<h2 class="font-h3 text-h3">Kategori</h2>
<button class="text-label-md font-label-md text-primary hover:underline">Lihat Semua</button>
</div>
<div class="flex gap-4 overflow-x-auto hide-scrollbar -mx-container-margin px-container-margin">
<div class="flex-shrink-0 flex flex-col items-center gap-2">
<div class="w-14 h-14 rounded-2xl bg-primary-container text-white flex items-center justify-center shadow-md">
<span class="material-symbols-outlined" data-icon="devices">devices</span>
</div>
<span class="font-label-sm text-label-sm">Teknologi</span>
</div>
<div class="flex-shrink-0 flex flex-col items-center gap-2">
<div class="w-14 h-14 rounded-2xl bg-white border border-outline-variant flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="palette">palette</span>
</div>
<span class="font-label-sm text-label-sm">Seni</span>
</div>
<div class="flex-shrink-0 flex flex-col items-center gap-2">
<div class="w-14 h-14 rounded-2xl bg-white border border-outline-variant flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="fitness_center">fitness_center</span>
</div>
<span class="font-label-sm text-label-sm">Olahraga</span>
</div>
<div class="flex-shrink-0 flex flex-col items-center gap-2">
<div class="w-14 h-14 rounded-2xl bg-white border border-outline-variant flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="menu_book">menu_book</span>
</div>
<span class="font-label-sm text-label-sm">Literasi</span>
</div>
<div class="flex-shrink-0 flex flex-col items-center gap-2">
<div class="w-14 h-14 rounded-2xl bg-white border border-outline-variant flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="biotech">biotech</span>
</div>
<span class="font-label-sm text-label-sm">Sains</span>
</div>
</div>
</section>
<!-- Vertical Competition List -->
<section class="space-y-6">
<div class="flex justify-between items-center">
<h2 class="font-h3 text-h3">Rekomendasi Lomba</h2>
<button class="text-label-md font-label-md text-primary-fixed-variant">Urutkan</button>
</div>
<div class="space-y-4">
<!-- Card 1 -->
<article class="bg-white rounded-2xl border border-slate-100 shadow-[0_-4px_20px_rgba(15,23,42,0.04)] overflow-hidden transition-all duration-200 active:scale-[0.98]">
<div class="relative h-48">
<img alt="Lomba UI/UX Nasional" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnUG7qfVg00g3NFZxL_Vio0zr7J9VANGNbIx5l9TsIxnrvy9hinrmH_mTzTdXKGGoy_GA6vLVvR7NTm__8j16q4pQ2al84_EivGkl84N8ELDMVyrCz2ZGa4YQVdoEetBtOvbl_zR-960wKyUynKQ4aiwIhSct5esiiM_intIBU3fnk1hZh_ZegpcHThcMvPlaTn3Ev9akQZBLKuZ72bm_ojgNAbeQbV4tdFbLlUbMhOpLX8M9Lj299vQy22kqmqyupBfb9StVdjCFb"/>
<div class="absolute top-4 right-4 bg-teal-500 text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider">Berlangsung</div>
</div>
<div class="p-4 space-y-4">
<div class="space-y-1">
<h3 class="font-h3 text-h3 text-primary">Lomba UI/UX Nasional</h3>
<div class="flex items-center gap-2 text-on-primary-container">
<span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
<span class="font-label-sm text-label-sm">12 Des 2023</span>
</div>
</div>
<div class="flex items-center justify-between pt-2">
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-outline">Hadiah Utama</span>
<span class="font-label-md text-primary">Rp 10.000.000</span>
</div>
<button class="px-6 py-2 bg-primary-container text-white rounded-xl font-label-md transition-all hover:bg-opacity-90 active:scale-95">Lihat Detail</button>
</div>
</div>
</article>
<!-- Card 2 -->
<article class="bg-white rounded-2xl border border-slate-100 shadow-[0_-4px_20px_rgba(15,23,42,0.04)] overflow-hidden transition-all duration-200 active:scale-[0.98]">
<div class="relative h-48">
<img alt="Hackathon Innovate 2023" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHZHLj-dRsDxPs6JdjVurf-uT3CJGCdNra_tURcZti0defy_UrgzgiTDau_rzRis1zBRkPV59x_hwgiipIROwZYQC8V1VohOw6RKNVG48ABQf72tRwkZwxmUelbD2QhZNx-Y7RW5Ewl7Sum60ZeTrXIqSsHmMFii1JQ_uit5BuHrd8CupkD5WlGcAhO2Hm_fOCooO_Lt38w17Epk07tDjNxQLguHYe5j9XObx7uTZ5VfvDrE0wOflv29qgV1zsr1XXUdjAyGZLFQht"/>
<div class="absolute top-4 right-4 bg-teal-500 text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider">Berlangsung</div>
</div>
<div class="p-4 space-y-4">
<div class="space-y-1">
<h3 class="font-h3 text-h3 text-primary">Hackathon Innovate 2023</h3>
<div class="flex items-center gap-2 text-on-primary-container">
<span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
<span class="font-label-sm text-label-sm">20 Des 2023</span>
</div>
</div>
<div class="flex items-center justify-between pt-2">
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-outline">Hadiah Utama</span>
<span class="font-label-md text-primary">Rp 25.000.000</span>
</div>
<button class="px-6 py-2 bg-primary-container text-white rounded-xl font-label-md transition-all hover:bg-opacity-90 active:scale-95">Lihat Detail</button>
</div>
</div>
</article>
<!-- Card 3 -->
<article class="bg-white rounded-2xl border border-slate-100 shadow-[0_-4px_20px_rgba(15,23,42,0.04)] overflow-hidden transition-all duration-200 active:scale-[0.98]">
<div class="relative h-48">
<img alt="Business Plan Competition" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHNBe5SMIoLleJdywVVYseRsMV1cIyUoHY_sR3nqH9v3UlrOslCa03FhRyJq1c6nLtkGTcAizbIK8Srp5McoZ_pyQ0Whh5nIjjDD-hhDqMLDaLubtLDLKNKOrouxWmfx67edS-qHANmlHAUP3nYcAqr6ysem6maveqRwZoNWrHTGepY4G2bZ-HRm-7JOkMh1MCH9vUxt6q59eann8fLsZKRVtsVNaprqn2TCEk4kuB_z6UXZtoglFnr1eYJ4nF981uq0kiiAA71qEF"/>
<div class="absolute top-4 right-4 bg-slate-400 text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider">Mendatang</div>
</div>
<div class="p-4 space-y-4">
<div class="space-y-1">
<h3 class="font-h3 text-h3 text-primary">Business Plan Competition</h3>
<div class="flex items-center gap-2 text-on-primary-container">
<span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
<span class="font-label-sm text-label-sm">05 Jan 2024</span>
</div>
</div>
<div class="flex items-center justify-between pt-2">
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-outline">Hadiah Utama</span>
<span class="font-label-md text-primary">Rp 15.000.000</span>
</div>
<button class="px-6 py-2 bg-primary-container text-white rounded-xl font-label-md transition-all hover:bg-opacity-90 active:scale-95">Lihat Detail</button>
</div>
</div>
</article>
</div>
</section>
</main>
<!-- BottomNavBar 5 Tab -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-2 py-3 pb-safe bg-white/80 backdrop-blur-md border-t border-slate-100 shadow-[0_-4px_20px_rgba(15,23,42,0.08)] rounded-t-2xl">

<!-- Beranda (Active) -->
<a class="flex flex-col items-center justify-center text-slate-900 bg-slate-100 rounded-xl px-2 py-1 transition-transform duration-200 active:scale-90">
<span class="material-symbols-outlined text-[20px]" data-icon="home" style="font-variation-settings: 'FILL' 1;">home</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Beranda</span>
</a>

<!-- Kompetisi -->
<a href="{{ route('lomba.index') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-600 transition-transform duration-200 active:scale-90">
<span class="material-symbols-outlined text-[20px]" data-icon="emoji_events">emoji_events</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Kompetisi</span>
</a>

<!-- Lomba Saya -->
<a href="{{ route('lomba.saya') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-600 transition-transform duration-200 active:scale-90">
<span class="material-symbols-outlined text-[20px]" data-icon="list_alt">list_alt</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Lomba Saya</span>
</a>

<!-- Notifikasi -->
<a href="{{ route('peserta.notifikasi') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-600 transition-transform duration-200 active:scale-90 relative">
<span class="material-symbols-outlined text-[20px]" data-icon="notifications">notifications</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Notifikasi</span>
<span class="absolute -top-0 right-0 w-2 h-2 bg-error rounded-full border-2 border-white"></span>
</a>

<!-- Profil -->
<a href="{{ route('peserta.profil') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-600 transition-transform duration-200 active:scale-90">
<span class="material-symbols-outlined text-[20px]" data-icon="person">person</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Profil</span>
</a>

</nav>
</body>
</html>