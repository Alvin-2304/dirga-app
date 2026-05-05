<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet"/>
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
                }
            }
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
    </style>
</head>
<body class="font-body-md text-on-background min-h-screen pb-24">

<!-- TopAppBar -->
<header class="sticky top-0 w-full flex justify-between items-center px-5 h-16 bg-white z-50 border-b border-slate-200 shadow-[0px_4px_20px_rgba(19,27,46,0.08)]">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" class="active:scale-95 duration-200 hover:bg-slate-100 transition-colors p-2 rounded-full">
<span class="material-symbols-outlined text-[#131b2e]">arrow_back</span>
</button>
<h1 class="font-manrope text-lg font-bold text-[#131b2e]">Profil Saya</h1>
</div>
<div class="flex items-center">
<span class="text-xl font-black text-[#131b2e] tracking-tight">DIRGA</span>
</div>
</header>

<!-- Form Logout Tersembunyi -->
<form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<main class="max-w-md mx-auto px-container-margin pt-xl">
<!-- Profile Section -->
<section class="flex flex-col items-center mb-xl">
<div class="relative mb-md">
<div class="w-32 h-32 rounded-full border-4 border-white shadow-lg overflow-hidden bg-secondary-container">
<img alt="Foto Profil" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtX53Wdp30jhmva3osmcBlQ6h5fdrbR1yLZhnb8vB7TMUDOrxohqL0htrbxvwMW1cOdXkz55w87_lIE8dbcXofYc2dAErNbm19Hu2H5qdQc-l5FuDJvJGD6ELXUScm7wjFm7ChlpuB8qicMKGmbtp6RMMAFxKXNTkq1BAUjrGOcr8GZK1OZnhK_62cvp4fPR_Kjv35nLNIBYLy-ckck0cAyUF0NanuZ2rkV_5DAQ9mmNsisJM-unaugxd4gm0CbO6_d8rpPUUp3tJ0"/>
</div>
<button class="absolute bottom-0 right-0 bg-on-primary-fixed text-white p-2 rounded-full shadow-lg border-2 border-white active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[20px]">camera_alt</span>
</button>
</div>
<div class="text-center">
<h2 class="font-display-md text-primary-container mb-xs">{{ Auth::user()->name }}</h2>
<div class="inline-flex items-center px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant text-label-bold mb-4">
                    Peserta
                </div>
</div>
</section>

<!-- Information Card -->
<div class="bg-white rounded-2xl p-md shadow-[0px_4px_20px_rgba(19,27,46,0.08)] mb-lg">
<div class="space-y-4">
<div class="flex items-start gap-4">
<div class="bg-surface-container rounded-lg p-2 flex items-center justify-center">
<span class="material-symbols-outlined text-on-primary-container">mail</span>
</div>
<div>
<p class="text-label-bold text-on-surface-variant uppercase">Email</p>
<p class="font-body-md text-primary-container">{{ Auth::user()->email }}</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="bg-surface-container rounded-lg p-2 flex items-center justify-center">
<span class="material-symbols-outlined text-on-primary-container">phone_iphone</span>
</div>
<div>
<p class="text-label-bold text-on-surface-variant uppercase">No HP</p>
<p class="font-body-md text-primary-container">081234567890</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="bg-surface-container rounded-lg p-2 flex items-center justify-center">
<span class="material-symbols-outlined text-on-primary-container">school</span>
</div>
<div>
<p class="text-label-bold text-on-surface-variant uppercase">Institusi</p>
<p class="font-body-md text-primary-container">Universitas Indonesia</p>
</div>
</div>
</div>
</div>

<!-- Menu List -->
<section class="bg-white rounded-2xl shadow-[0px_4px_20px_rgba(19,27,46,0.08)] overflow-hidden mb-lg">
<nav class="flex flex-col divide-y divide-slate-100">
<a class="flex items-center justify-between p-md hover:bg-slate-50 transition-colors active:bg-slate-100" href="#">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary-container">emoji_events</span>
<span class="font-body-md text-primary-container">Riwayat Lomba</span>
</div>
<span class="material-symbols-outlined text-on-surface-variant">chevron_right</span>
</a>
<a class="flex items-center justify-between p-md hover:bg-slate-50 transition-colors active:bg-slate-100" href="{{ route('edit.profil') }}">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary-container">edit</span>
<span class="font-body-md text-primary-container">Edit Profil</span>
</div>
<span class="material-symbols-outlined text-on-surface-variant">chevron_right</span>
</a>
<a class="flex items-center justify-between p-md hover:bg-slate-50 transition-colors active:bg-slate-100" href="{{ route('ganti.password') }}">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary-container">lock</span>
<span class="font-body-md text-primary-container">Ganti Password</span>
</div>
<span class="material-symbols-outlined text-on-surface-variant">chevron_right</span>
</a>
<a class="flex items-center justify-between p-md hover:bg-slate-50 transition-colors active:bg-slate-100" href="#">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary-container">notifications</span>
<span class="font-body-md text-primary-container">Notifikasi</span>
</div>
<span class="material-symbols-outlined text-on-surface-variant">chevron_right</span>
</a>
<a class="flex items-center justify-between p-md hover:bg-slate-50 transition-colors active:bg-slate-100" href="#">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary-container">info</span>
<span class="font-body-md text-primary-container">Tentang Aplikasi</span>
</div>
<span class="material-symbols-outlined text-on-surface-variant">chevron_right</span>
</a>
</nav>
</section>

<!-- Logout Button -->
<button onclick="document.getElementById('logoutForm').submit()" class="w-full flex items-center justify-center gap-3 bg-error text-on-error py-4 rounded-2xl font-body-md font-bold shadow-[0px_10px_30px_rgba(186,26,26,0.2)] active:scale-[0.98] transition-all mb-lg">
<span class="material-symbols-outlined">logout</span>
<span>Logout</span>
</button>
</main>

<!-- BottomNavBar 5 Tab -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-2 py-3 pb-safe bg-white/80 backdrop-blur-md border-t border-slate-100 shadow-[0_-4px_20px_rgba(15,23,42,0.08)] rounded-t-2xl">

<!-- Beranda (Active) -->
<a href="{{ route('peserta.dashboard') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-600 transition-transform duration-200 active:scale-90">     
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
<a href="{{ route('peserta.profil') }}" class="flex flex-col items-center justify-center text-slate-900 bg-slate-100 rounded-xl px-2 py-1 transition-transform duration-200 active:scale-90">
<span class="material-symbols-outlined text-[20px]" data-icon="person">person</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Profil</span>
</a>

</nav>

</body>
</html>