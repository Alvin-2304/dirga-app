<!DOCTYPE html>
<html lang="id">
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
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .pb-safe { padding-bottom: env(safe-area-inset-bottom); }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md min-h-screen">

<!-- TopAppBar Shell -->
<header class="sticky top-0 w-full flex justify-between items-center px-5 h-16 bg-white z-50 border-b border-slate-200 shadow-[0px_4px_20px_rgba(19,27,46,0.08)]">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" class="active:scale-95 duration-200 hover:bg-slate-100 p-2 rounded-full transition-colors">
<span class="material-symbols-outlined text-[#131b2e]">arrow_back</span>
</button>
<h1 class="font-manrope text-lg font-bold text-[#131b2e]">Lomba Saya</h1>
</div>
<div class="flex items-center gap-2">
<span class="text-xl font-black text-[#131b2e] tracking-tight">DIRGA</span>
</div>
</header>

<main class="pb-32">

<!-- Filter Tabs -->
<div class="bg-white px-5 pt-4 overflow-x-auto whitespace-nowrap no-scrollbar sticky top-16 z-40 border-b border-slate-50">
<div class="flex gap-6">
<button class="pb-3 border-b-2 border-[#131b2e] text-[#131b2e] font-bold text-sm">Semua</button>
<button class="pb-3 border-b-2 border-transparent text-slate-400 font-medium text-sm hover:text-slate-600">Menunggu Review</button>
<button class="pb-3 border-b-2 border-transparent text-slate-400 font-medium text-sm hover:text-slate-600">Diterima</button>
<button class="pb-3 border-b-2 border-transparent text-slate-400 font-medium text-sm hover:text-slate-600">Ditolak</button>
</div>
</div>

<!-- Contest List Content -->
<div class="p-5 space-y-4">

<!-- Card 1: Menunggu Review -->
<div class="bg-white rounded-2xl p-4 shadow-[0px_4px_20px_rgba(19,27,46,0.06)] flex gap-4 items-center group active:scale-[0.98] transition-transform cursor-pointer">
<div class="relative w-20 h-20 rounded-xl overflow-hidden flex-shrink-0 bg-slate-100">
<img alt="Robot Challenge" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiAu_iW8IodIiKSXt9gmoyZfM7cQIcHldfaytZo9dt6-pFvQYN3PyHLLTUq4CXqJXeBpV06bX85pVI6istQ6B0gittKhdhNEv401kQnKg-GVQNHH3SuWTFRcSORzc8iH5PRK6ZSwNh8SG8idMqvY3C1kZ4SmAKgErPaJA7qUqQNNF7AL8GGGudz6TFqYrxGj2SppREs2USdPoZgTU5xEm229S-efA2Uw-c3vylpT5SbQl70P4i4KZdGk7zsA20F9ItLk_EzV59O0Mm"/>
</div>
<div class="flex-grow min-w-0">
<div class="flex items-center justify-between mb-1">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-700 uppercase tracking-wider">
                            Menunggu Review
                        </span>
</div>
<h3 class="font-manrope font-bold text-[#131b2e] text-md truncate leading-tight">National Robot Challenge</h3>
<div class="flex items-center gap-1.5 mt-2 text-slate-400">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
<span class="font-body-sm text-[12px]">12 Okt 2024</span>
</div>
</div>
<div class="text-slate-300 group-hover:text-[#131b2e] transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</div>
</div>

<!-- Card 2: Diterima -->
<div class="bg-white rounded-2xl p-4 shadow-[0px_4px_20px_rgba(19,27,46,0.06)] flex gap-4 items-center group active:scale-[0.98] transition-transform cursor-pointer">
<div class="relative w-20 h-20 rounded-xl overflow-hidden flex-shrink-0 bg-slate-100">
<img alt="Design Competition" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCs_r8IgSUS36HfpVZjYkuJ080Y_k9SKLmjE0WG5zvRsaYiSmeRabeSu1Nk9ghycGIxoY1dIBhI3ROjjkPElNnfc8Gp028GbokbIcNBpZOjUmM4Ye92Jo9Kk808BBX3pIOOL9n3cPDjjIASXZ9PccNztXfaSTV0wQOhwijhc1VdVveOgV2T2VEmQBLiBlNtWN8zG7uNMaDtM44ymMUCUkJUVzUE2gQZPJ1UTZ7CwNAQwWIabCNyEgbXeCj7wkJL2BSCcxZTbkrGFiP-"/>
</div>
<div class="flex-grow min-w-0">
<div class="flex items-center justify-between mb-1">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-700 uppercase tracking-wider">
                            Diterima
                        </span>
</div>
<h3 class="font-manrope font-bold text-[#131b2e] text-md truncate leading-tight">UI/UX Innovation Summit</h3>
<div class="flex items-center gap-1.5 mt-2 text-slate-400">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
<span class="font-body-sm text-[12px]">05 Okt 2024</span>
</div>
</div>
<div class="text-slate-300 group-hover:text-[#131b2e] transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</div>
</div>

<!-- Card 3: Ditolak -->
<div class="bg-white rounded-2xl p-4 shadow-[0px_4px_20px_rgba(19,27,46,0.06)] flex gap-4 items-center group active:scale-[0.98] transition-transform cursor-pointer opacity-75">
<div class="relative w-20 h-20 rounded-xl overflow-hidden flex-shrink-0 bg-slate-100 grayscale">
<img alt="Coding Sprint" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6vJ0wUctjx1vqOaOWPmCB3JIDrVDixRcFGwJZ0WF76nqq5rloF-tR8XzGGPsb_hagChtYOuN-SVLHBitJVq_awcThOwEfmibB9J2i5CPflNMTYLj5OpMk4SMcgaP04nRBB5BEmq-sdSG_H3QVPS4EUtx_BcgwKZ7ftxzSzCAsql6HZg76nTZoIGdwCq-PGVzfiigv9uHyhgS-5rem4mxkDj9tdBtS2l4ApFeP7x3LLDueTIvaxtRC-VNo00bwAgvnLJ7zDjvF9C1m"/>
</div>
<div class="flex-grow min-w-0">
<div class="flex items-center justify-between mb-1">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-red-100 text-red-700 uppercase tracking-wider">
                            Ditolak
                        </span>
</div>
<h3 class="font-manrope font-bold text-[#131b2e] text-md truncate leading-tight">Global Coding Sprint 2024</h3>
<div class="flex items-center gap-1.5 mt-2 text-slate-400">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
<span class="font-body-sm text-[12px]">28 Sep 2024</span>
</div>
</div>
<div class="text-slate-300">
<span class="material-symbols-outlined">chevron_right</span>
</div>
</div>
</div>

<!-- Ringkasan Aktivitas -->
<div class="px-5 mt-4">
<div class="bg-[#131b2e] rounded-3xl p-6 text-white overflow-hidden relative shadow-xl">
<div class="relative z-10">
<h4 class="font-manrope font-extrabold text-xl mb-1">Ringkasan Aktivitas</h4>
<p class="text-slate-400 text-sm mb-6">Pantau terus progres kompetisi Anda.</p>
<div class="grid grid-cols-2 gap-4">
<div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/10">
<p class="text-[10px] font-bold text-slate-300 uppercase tracking-widest mb-1">Total Lomba</p>
<p class="text-2xl font-black">12</p>
</div>
<div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/10">
<p class="text-[10px] font-bold text-slate-300 uppercase tracking-widest mb-1">Menang</p>
<p class="text-2xl font-black">3</p>
</div>
</div>
</div>
<div class="absolute -bottom-10 -right-10 w-40 h-40 bg-white/5 rounded-full blur-3xl"></div>
<div class="absolute -top-10 -left-10 w-40 h-40 bg-white/5 rounded-full blur-2xl"></div>
</div>
</div>
</main>

<!-- BottomNavBar 5 Tab -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-2 py-3 pb-safe bg-white/80 backdrop-blur-md border-t border-slate-100 shadow-[0_-4px_20px_rgba(15,23,42,0.08)] rounded-t-2xl">

<!-- Beranda -->
<a href="{{ route('peserta.dashboard') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-600 transition-transform duration-200 active:scale-90">
<span class="material-symbols-outlined text-[20px]" data-icon="home" style="font-variation-settings: 'FILL' 1;">home</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Beranda</span>
</a>

<!-- Kompetisi -->
<a href="{{ route('lomba.index') }}" class="flex flex-col items-center justify-center text-slate-400 hover:text-slate-600 transition-transform duration-200 active:scale-90">
<span class="material-symbols-outlined text-[20px]" data-icon="emoji_events">emoji_events</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Kompetisi</span>
</a>

<!-- Lomba Saya (Active) -->
<a href="{{ route('lomba.saya') }}" class="flex flex-col items-center justify-center text-slate-900 bg-slate-100 rounded-xl px-2 py-1 transition-transform duration-200 active:scale-90">
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