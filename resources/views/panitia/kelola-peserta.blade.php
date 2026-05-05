<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet"/>
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
        .pb-safe { padding-bottom: env(safe-area-inset-bottom); }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-background font-body-md text-on-surface">

<!-- TopAppBar -->
<nav class="sticky top-0 w-full flex justify-between items-center px-5 h-16 bg-white z-50 border-b border-slate-200 shadow-[0px_4px_20px_rgba(19,27,46,0.08)]">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" class="active:scale-95 duration-200 text-[#131b2e]">
<span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
</button>
<div class="flex flex-col">
<h1 class="font-manrope text-lg font-bold text-[#131b2e]">Daftar Peserta</h1>
<span class="text-[10px] font-semibold text-slate-500 uppercase tracking-wider">National Robot Challenge</span>
</div>
</div>
<button class="active:scale-95 duration-200 text-[#131b2e]">
<span class="material-symbols-outlined" data-icon="search">search</span>
</button>
</nav>

<main class="max-w-4xl mx-auto p-container-margin pb-32">

<!-- Filter Tabs -->
<div class="flex gap-2 overflow-x-auto no-scrollbar mb-lg">
<button class="px-5 py-2 bg-primary-container text-white rounded-full font-label-bold text-xs whitespace-nowrap shadow-sm">Semua</button>
<button class="px-5 py-2 bg-white text-slate-600 rounded-full font-label-bold text-xs border border-slate-200 whitespace-nowrap hover:bg-slate-50 transition-colors">Menunggu Review</button>
<button class="px-5 py-2 bg-white text-slate-600 rounded-full font-label-bold text-xs border border-slate-200 whitespace-nowrap hover:bg-slate-50 transition-colors">Diterima</button>
<button class="px-5 py-2 bg-white text-slate-600 rounded-full font-label-bold text-xs border border-slate-200 whitespace-nowrap hover:bg-slate-50 transition-colors">Ditolak</button>
</div>

<!-- Search Bar -->
<div class="relative mb-xl">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-slate-400" data-icon="search">search</span>
</div>
<input class="w-full bg-white border border-slate-200 rounded-2xl py-4 pl-12 pr-4 focus:ring-2 focus:ring-primary-container focus:border-transparent transition-all shadow-[0px_4px_20px_rgba(19,27,46,0.04)] text-body-md" placeholder="Cari peserta..." type="text"/>
</div>

<!-- Participants List -->
<div class="space-y-gutter">

@foreach($pendaftarans as $p)
<div class="bg-white rounded-2xl p-md shadow-[0px_4px_20px_rgba(19,27,46,0.06)] border border-slate-50 {{ $p->status == 'ditolak' ? 'opacity-60' : '' }}">
<div class="flex items-start gap-4 mb-4">
<div class="w-14 h-14 rounded-xl bg-slate-100 flex items-center justify-center">
<span class="material-symbols-outlined text-slate-400" data-icon="person">person</span>
</div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-start">
<div>
<h3 class="font-manrope text-body-md font-bold text-primary-container truncate">{{ $p->user->name }}</h3>
<p class="text-body-sm text-slate-500 truncate">{{ $p->user->email }}</p>
</div>
@if($p->status == 'menunggu')
<span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-tight">Menunggu Review</span>
@elseif($p->status == 'diterima')
<span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-tight">Diterima</span>
@else
<span class="bg-red-100 text-red-700 px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-tight">Ditolak</span>
@endif
</div>
<div class="flex items-center gap-1 mt-2 text-slate-600">
<span class="material-symbols-outlined text-[16px]" data-icon="account_balance">account_balance</span>
<span class="text-body-sm">{{ $p->institusi ?? 'Tidak ada' }}</span>
</div>
</div>
</div>

@if($p->status == 'menunggu')
<div class="flex flex-col sm:flex-row gap-2 mt-4">
<button class="flex-1 px-4 py-3 bg-slate-50 text-primary-container font-label-bold rounded-xl flex items-center justify-center gap-2 hover:bg-slate-100 transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="description">description</span> Lihat Berkas
</button>
<div class="flex gap-2">
<form action="{{ route('daftar.status', $p->id) }}" method="POST">
@csrf @method('PUT')
<input type="hidden" name="status" value="ditolak">
<button type="submit" class="px-6 py-3 bg-red-50 text-red-600 font-label-bold rounded-xl hover:bg-red-100 transition-colors flex items-center justify-center">Tolak</button>
</form>
<form action="{{ route('daftar.status', $p->id) }}" method="POST">
@csrf @method('PUT')
<input type="hidden" name="status" value="diterima">
<button type="submit" class="px-6 py-3 bg-emerald-600 text-white font-label-bold rounded-xl hover:bg-emerald-700 transition-all shadow-md flex items-center justify-center">Terima</button>
</form>
</div>
</div>
@else
<div class="flex items-center justify-between mt-4 pt-4 border-t border-slate-100">
<span class="text-xs text-slate-400 italic">Status: {{ ucfirst($p->status) }}</span>
</div>
@endif

</div>
@endforeach

@if($pendaftarans->isEmpty())
<div class="text-center py-20">
<span class="material-symbols-outlined text-6xl text-slate-300">person_off</span>
<p class="text-slate-400 mt-4">Belum ada peserta terdaftar.</p>
</div>
@endif

</div>
</main>

<!-- BottomNavBar Panitia 4 Tab -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-3 py-3 pb-safe bg-white border-t border-slate-100 shadow-[0px_-4px_20px_rgba(19,27,46,0.06)] rounded-t-2xl">

<a class="flex flex-col items-center justify-center text-[#131b2e] font-bold bg-slate-50 rounded-xl px-3 py-1 active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">emoji_events</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Kelola</span>
</a>

<a href="{{ route('panitia.notifikasi') }}" class="flex flex-col items-center justify-center text-slate-400 px-2 py-1 hover:text-[#131b2e] active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]">notifications</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Notifikasi</span>
</a>

<a href="{{ route('panitia.leaderboard') }}" class="flex flex-col items-center justify-center text-slate-400 px-2 py-1 hover:text-[#131b2e] active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]">leaderboard</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Leaderboard</span>
</a>

<a href="{{ route('panitia.profil') }}" class="flex flex-col items-center justify-center text-slate-400 px-2 py-1 hover:text-[#131b2e] active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]">person</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Profil</span>
</a>

</nav>

</body>
</html>