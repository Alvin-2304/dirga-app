<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
                        "2xl": "1rem",
                        "3xl": "1.5rem",
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
                        "body-sm": ["Inter"],
                        "manrope": ["Manrope"]
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
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-background font-body-md text-on-surface min-h-screen pb-24">

<!-- TopAppBar -->
<header class="sticky top-0 w-full flex justify-between items-center px-5 h-16 bg-white border-b border-slate-200 shadow-[0px_4px_20px_rgba(19,27,46,0.08)] z-50">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" class="material-symbols-outlined text-[#131b2e] active:scale-95 duration-200 p-1 rounded-full hover:bg-slate-100 transition-colors">arrow_back</button>
<h1 class="font-manrope text-lg font-bold text-[#131b2e] tracking-tight">Kompetisi</h1>
</div>
<div class="flex items-center gap-2">
<button class="material-symbols-outlined text-[#131b2e] active:scale-95 duration-200 p-2 rounded-full hover:bg-slate-100 transition-colors">search</button>
</div>
</header>

<main class="max-w-md mx-auto px-container-margin pt-gutter">

<!-- Filter Chips Section -->
<div class="overflow-x-auto no-scrollbar flex gap-xs py-base mb-xl">
<button class="px-5 py-2.5 rounded-full bg-primary-container text-white font-label-bold text-sm whitespace-nowrap shadow-md transition-all active:scale-95">Semua</button>
<button class="px-5 py-2.5 rounded-full bg-white text-on-surface-variant border border-outline-variant font-label-bold text-sm whitespace-nowrap hover:bg-slate-50 transition-all active:scale-95">Teknologi</button>
<button class="px-5 py-2.5 rounded-full bg-white text-on-surface-variant border border-outline-variant font-label-bold text-sm whitespace-nowrap hover:bg-slate-50 transition-all active:scale-95">Seni</button>
<button class="px-5 py-2.5 rounded-full bg-white text-on-surface-variant border border-outline-variant font-label-bold text-sm whitespace-nowrap hover:bg-slate-50 transition-all active:scale-95">Olahraga</button>
<button class="px-5 py-2.5 rounded-full bg-white text-on-surface-variant border border-outline-variant font-label-bold text-sm whitespace-nowrap hover:bg-slate-50 transition-all active:scale-95">Bisnis</button>
<button class="px-5 py-2.5 rounded-full bg-white text-on-surface-variant border border-outline-variant font-label-bold text-sm whitespace-nowrap hover:bg-slate-50 transition-all active:scale-95">Sains</button>
</div>

<!-- Competition List -->
<div class="grid grid-cols-1 gap-lg">

<!-- Card 1 -->
<div class="group bg-white rounded-2xl overflow-hidden shadow-[0px_4px_20px_rgba(19,27,46,0.08)] border border-transparent hover:border-primary-container/10 transition-all duration-300">
<div class="relative h-48 w-full overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlWreXKgQSDoqq6GDhjqCqafITRC2Tx3o5XNeAcwjAk9kDi39I1XOclurQdJZRgKxLVCvtJffuwqPXDFR4zV0ec-VY6wIygcM1NpnDnZDqgCZYjiBnUEVm_JNHhWSsoZV__QYy5nOlT709r0czuRNt6yKQcrrMS5XF8JBztyyITDFjxB1YCEoEYFbhGP4yfAoMRimZf24bk14VYxsOh0hrEsdprn3gWJLSShNlOnq6tfi0Mguouz0IQITDLsi36KZfHhTP048r1pX6"/>
<div class="absolute top-4 left-4 bg-[#131b2e]/90 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1.5 rounded-lg flex items-center gap-1.5 uppercase tracking-widest shadow-lg">
<span class="w-1.5 h-1.5 rounded-full bg-teal-400 animate-pulse"></span> Berlangsung
</div>
</div>
<div class="p-md space-y-md">
<div class="flex justify-between items-start">
<div>
<span class="text-on-tertiary-container bg-tertiary-fixed-dim/20 font-label-bold text-[10px] px-2 py-0.5 rounded-md uppercase tracking-wider mb-2 inline-block">Teknologi</span>
<h3 class="font-manrope text-body-lg font-bold text-primary-container leading-tight">National Robot Challenge</h3>
</div>
<div class="flex flex-col items-end">
<span class="text-[10px] text-on-surface-variant font-medium uppercase">Total Hadiah</span>
<span class="text-primary-container font-extrabold text-body-md">Rp 10jt</span>
</div>
</div>
<div class="grid grid-cols-2 gap-sm pt-xs">
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-lg">calendar_today</span>
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-slate-400 leading-none">Deadline</span>
<span class="text-body-sm font-semibold">12 Okt 2024</span>
</div>
</div>
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-lg">group</span>
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-slate-400 leading-none">Pendaftar</span>
<span class="text-body-sm font-semibold">124 Tim</span>
</div>
</div>
</div>
<a href="{{ route('lomba.detail', ['id' => 1]) }}" class="w-full py-4 bg-primary-container text-white font-manrope font-bold rounded-xl shadow-lg active:scale-95 transition-all hover:bg-slate-800 mt-2 flex items-center justify-center">
    Lihat Detail
</a>
</div>
</div>

<!-- Card 2 -->
<div class="group bg-white rounded-2xl overflow-hidden shadow-[0px_4px_20px_rgba(19,27,46,0.08)] border border-transparent hover:border-primary-container/10 transition-all duration-300">
<div class="relative h-48 w-full overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCF49MVs4xuyjpzRBxYo1Iuf8tebOtO30ZONyLx1zYKreVc98sWcFaW7eWlc_z-wyjnBCgE1HsokFtlTppKLs7gBD7Wlu1KJtqpb1nDdmaWgygtv4Us_nT8SAJg7bMDo0C4xm8FKnKbt1qr9D09O-A3zQp8s3cGoJr8moHv9DXE22kdh7-KXpGHJxfbXFQHlfQhbg3vpn18p246NUMSg9BI3RNL22aULBV2xS_yOoAJLcxtRr_tl_SbAIDYcq31QQQDV4IDKJu6EK5V"/>
<div class="absolute top-4 left-4 bg-[#131b2e]/90 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1.5 rounded-lg flex items-center gap-1.5 uppercase tracking-widest shadow-lg">
<span class="w-1.5 h-1.5 rounded-full bg-teal-400"></span> Berlangsung
</div>
</div>
<div class="p-md space-y-md">
<div class="flex justify-between items-start">
<div>
<span class="text-on-tertiary-container bg-tertiary-fixed-dim/20 font-label-bold text-[10px] px-2 py-0.5 rounded-md uppercase tracking-wider mb-2 inline-block">Seni</span>
<h3 class="font-manrope text-body-lg font-bold text-primary-container leading-tight">Digital Arts Expo 2026</h3>
</div>
<div class="flex flex-col items-end">
<span class="text-[10px] text-on-surface-variant font-medium uppercase">Total Hadiah</span>
<span class="text-primary-container font-extrabold text-body-md">Rp 5jt</span>
</div>
</div>
<div class="grid grid-cols-2 gap-sm pt-xs">
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-lg">calendar_today</span>
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-slate-400 leading-none">Deadline</span>
<span class="text-body-sm font-semibold">20 Okt 2024</span>
</div>
</div>
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-lg">group</span>
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-slate-400 leading-none">Pendaftar</span>
<span class="text-body-sm font-semibold">89 Orang</span>
</div>
</div>
</div>
<a href="{{ route('lomba.detail', ['id' => 2]) }}" class="w-full py-4 bg-primary-container text-white font-manrope font-bold rounded-xl shadow-lg active:scale-95 transition-all hover:bg-slate-800 mt-2 flex items-center justify-center">
    Lihat Detail
</a>
</div>
</div>

</div>
</main>

<!-- BottomNavBar 5 Tab -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-2 py-3 pb-safe bg-white/80 backdrop-blur-md border-t border-slate-100 shadow-[0_-4px_20px_rgba(15,23,42,0.08)] rounded-t-2xl">

<!-- Beranda (Active) -->
<a href="{{ route('peserta.dashboard') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-600 transition-transform duration-200 active:scale-90">
<span class="material-symbols-outlined text-[20px]" data-icon="home" style="font-variation-settings: 'FILL' 1;">home</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Beranda</span>
</a>

<!-- Kompetisi (Active) --> 
<a class="flex flex-col items-center justify-center text-slate-900 bg-slate-100 rounded-xl px-2 py-1 transition-transform duration-200 active:scale-90 relative">
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