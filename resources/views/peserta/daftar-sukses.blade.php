<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-container": "#768599",
                        "surface-container-highest": "#e4e2e4",
                        "surface-container-high": "#eae7e9",
                        "surface-tint": "#565e74",
                        "tertiary-container": "#0d1c2d",
                        "outline-variant": "#c6c6cd",
                        "error-container": "#ffdad6",
                        "surface-container-low": "#f6f3f5",
                        "tertiary": "#000000",
                        "on-surface": "#1b1b1d",
                        "primary-fixed": "#dae2fd",
                        "on-secondary-fixed": "#191c1e",
                        "on-primary-container": "#7c839b",
                        "on-primary-fixed": "#131b2e",
                        "surface-container": "#f0edef",
                        "on-background": "#1b1b1d",
                        "on-tertiary-fixed": "#0d1c2d",
                        "on-tertiary": "#ffffff",
                        "on-error": "#ffffff",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed-variant": "#3f465c",
                        "tertiary-fixed": "#d4e4fa",
                        "secondary-fixed": "#e0e3e5",
                        "on-tertiary-fixed-variant": "#39485a",
                        "on-surface-variant": "#45464d",
                        "tertiary-fixed-dim": "#b9c8de",
                        "primary-container": "#131b2e",
                        "inverse-surface": "#303032",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed-dim": "#c4c7c9",
                        "primary": "#000000",
                        "outline": "#76777d",
                        "on-error-container": "#93000a",
                        "on-secondary-container": "#626567",
                        "inverse-primary": "#bec6e0",
                        "secondary": "#5c5f61",
                        "surface": "#fcf8fa",
                        "background": "#fcf8fa",
                        "on-primary": "#ffffff",
                        "on-secondary-fixed-variant": "#444749",
                        "inverse-on-surface": "#f3f0f2",
                        "surface-dim": "#dcd9db",
                        "surface-bright": "#fcf8fa",
                        "secondary-container": "#e0e3e5",
                        "error": "#ba1a1a",
                        "surface-variant": "#e4e2e4",
                        "primary-fixed-dim": "#bec6e0"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "section-padding": "24px",
                        "element-gap": "12px",
                        "grid-columns": "4",
                        "container-margin": "20px",
                        "stack-gap": "16px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "h3": ["Manrope"],
                        "h1": ["Manrope"],
                        "label-sm": ["Inter"],
                        "h2": ["Manrope"],
                        "label-md": ["Inter"],
                        "body-sm": ["Inter"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "400"}],
                        "h3": ["20px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "600"}],
                        "h1": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.04em", "fontWeight": "500"}],
                        "h2": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                        "body-sm": ["14px", {"lineHeight": "20px", "letterSpacing": "0", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
<style>
        body {
            background-color: #fcf8fa;
            color: #1b1b1d;
            min-height: max(884px, 100dvh);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .success-blob {
            background: radial-gradient(circle at center, rgba(20, 184, 166, 0.1) 0%, transparent 70%);
        }
        .pb-safe { padding-bottom: env(safe-area-inset-bottom); }
    </style>
</head>
<body class="font-body-md antialiased min-h-screen flex flex-col">

<!-- TopAppBar -->
<header class="bg-white border-b border-slate-100 shadow-[0_4px_20px_rgba(15,23,42,0.04)] fixed top-0 w-full z-50 flex justify-between items-center px-5 py-3 h-16">
<div class="flex items-center gap-3">
<button onclick="window.history.back()" class="active:scale-95 transition-all duration-200">
<span class="material-symbols-outlined text-slate-900" data-icon="arrow_back">arrow_back</span>
</button>
</div>
<h1 class="text-xl font-extrabold tracking-widest text-slate-900 uppercase font-manrope">DIRGA</h1>
<button class="flex items-center justify-center p-2 rounded-xl text-slate-900 hover:bg-slate-50 active:scale-95 transition-all duration-200">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
</header>

<!-- Main Canvas Content -->
<main class="flex-grow pt-24 pb-32 px-5 max-w-lg mx-auto w-full">

<!-- Success Illustration Section -->
<div class="relative flex flex-col items-center text-center mb-8">
<div class="success-blob absolute inset-0 -z-10 scale-150"></div>
<div class="w-24 h-24 bg-teal-50 rounded-full flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-6xl text-teal-600" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<h2 class="font-h1 text-h1 text-primary mb-2">Pendaftaran Berhasil!</h2>
<p class="font-body-md text-body-md text-on-tertiary-container px-4">Anda telah terdaftar di kompetisi National Robot Challenge 2024.</p>
</div>

<!-- Summary Card -->
<div class="bg-white rounded-xl shadow-[0_4px_20px_rgba(15,23,42,0.06)] border border-slate-100 p-6 mb-8 overflow-hidden relative">
<div class="absolute top-0 right-0 p-4">
<span class="bg-teal-50 text-teal-700 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Terkonfirmasi</span>
</div>
<div class="space-y-6">
<div class="flex flex-col">
<span class="text-label-sm font-label-sm text-on-tertiary-container uppercase tracking-widest mb-1">ID Pendaftaran</span>
<span class="text-h3 font-h3 text-primary">#DRG-88291</span>
</div>
<div class="grid grid-cols-2 gap-4 pt-4 border-t border-slate-50">
<div class="flex flex-col">
<span class="text-label-sm font-label-sm text-on-tertiary-container uppercase mb-1">Tanggal</span>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-slate-400" data-icon="calendar_today">calendar_today</span>
<span class="text-body-sm font-body-sm text-primary">12 Okt 2024</span>
</div>
</div>
<div class="flex flex-col">
<span class="text-label-sm font-label-sm text-on-tertiary-container uppercase mb-1">Kategori</span>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-slate-400" data-icon="smart_toy">smart_toy</span>
<span class="text-body-sm font-body-sm text-primary">Robotics</span>
</div>
</div>
</div>
</div>
</div>

<!-- Next Steps Note -->
<div class="bg-surface-container-low rounded-xl p-5 mb-10 flex gap-4">
<span class="material-symbols-outlined text-teal-600 mt-0.5" data-icon="info">info</span>
<p class="text-body-sm font-body-sm text-on-surface-variant leading-relaxed">
                Silakan cek email Anda untuk panduan teknis dan jadwal perlombaan selanjutnya. Kami akan mengirimkan detail persiapan dalam 24 jam ke depan.
            </p>
</div>

<!-- Action Cluster -->
<div class="space-y-4">
<a href="{{ route('lomba.saya') }}" class="w-full bg-primary-container text-white font-label-md py-4 rounded-xl shadow-lg shadow-primary-container/20 active:scale-[0.98] transition-all flex items-center justify-center gap-2 bg-gradient-to-r from-[#131b2e] to-[#1e293b]">
<span>Lihat Kompetisi Saya</span>
<span class="material-symbols-outlined text-lg" data-icon="arrow_forward">arrow_forward</span>
</a>
<a href="{{ route('peserta.dashboard') }}" class="w-full bg-white border border-slate-200 text-primary font-label-md py-4 rounded-xl active:scale-[0.98] transition-all flex items-center justify-center gap-2">
<span>Kembali ke Beranda</span>
</a>
</div>

<!-- Visual Decorative Element -->
<div class="mt-12 rounded-2xl overflow-hidden aspect-video relative group">
<img class="w-full h-full object-cover grayscale opacity-50 transition-opacity group-hover:opacity-70" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBfUx3PWc_a7l8qqrDGD11Mz1jXmbsk0oErRr-19RS_fDLTGCCHYUOjrtM9vo6mSM-J7zExYYgMKW-BHc9shQuz2KPsPjChd8H23IEczSisy8fgKlvd9NL9ZYu8-7Y7ORZKoqKQBHNuTW5Vh4KJQUzCAeY6Sc5pKpeLL3WMNAFLTOMcRzR6QZwMq_wMZezTDbU3yczBLlwNSl0EFZw7rrYphQguG7u7UfByYpCK-2shcpq85klJ3piwm6b6VL63aLn7BsJjDClscly9"/>
<div class="absolute inset-0 bg-gradient-to-t from-background to-transparent"></div>
</div>
</main>

<!-- BottomNavBar 5 Tab Peserta -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-2 py-3 pb-safe bg-white/80 backdrop-blur-lg border-t border-slate-100 shadow-[0_-4px_20px_rgba(15,23,42,0.06)] rounded-t-2xl">

<a href="{{ route('peserta.dashboard') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-900 active:scale-90 transition-transform duration-150">
<span class="material-symbols-outlined text-[20px]" data-icon="home">home</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Beranda</span>
</a>

<a href="{{ route('lomba.index') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-900 active:scale-90 transition-transform duration-150">
<span class="material-symbols-outlined text-[20px]" data-icon="emoji_events">emoji_events</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Kompetisi</span>
</a>

<!-- Lomba Saya (Active) -->
<a class="flex flex-col items-center justify-center text-[#131b2e] font-bold bg-slate-50 rounded-xl px-2 py-1 active:scale-90 transition-transform duration-150">
<span class="material-symbols-outlined text-[20px]" data-icon="list_alt" style="font-variation-settings: 'FILL' 1;">list_alt</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Lomba Saya</span>
</a>

<a href="{{ route('peserta.notifikasi') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-900 active:scale-90 transition-transform duration-150 relative">
<span class="material-symbols-outlined text-[20px]" data-icon="notifications">notifications</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Notifikasi</span>
</a>

<a href="{{ route('peserta.profil') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-900 active:scale-90 transition-transform duration-150">
<span class="material-symbols-outlined text-[20px]" data-icon="person">person</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Profil</span>
</a>

</nav>

</body>
</html>