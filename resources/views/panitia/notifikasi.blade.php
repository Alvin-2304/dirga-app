<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Notifikasi - Panitia DIRGA</title>
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
                      "on-tertiary-fixed-variant": "#564426",
                      "on-secondary-fixed": "#171c1f",
                      "on-error": "#ffffff",
                      "on-background": "#1b1b1d",
                      "on-tertiary-container": "#97805e",
                      "on-secondary-fixed-variant": "#43474b",
                      "on-primary": "#ffffff",
                      "tertiary-fixed-dim": "#dec39c",
                      "on-secondary": "#ffffff",
                      "surface-container-lowest": "#ffffff",
                      "surface-container-low": "#f6f3f5",
                      "error": "#ba1a1a",
                      "on-surface-variant": "#45464d",
                      "inverse-primary": "#bec6e0",
                      "on-tertiary": "#ffffff",
                      "surface-bright": "#fcf8fa",
                      "surface-container-high": "#eae7e9",
                      "on-primary-fixed-variant": "#3f465b",
                      "tertiary": "#000000",
                      "surface-container": "#f0edef",
                      "primary": "#000000",
                      "inverse-surface": "#303032",
                      "on-secondary-container": "#5e6367",
                      "surface": "#fcf8fa",
                      "secondary-container": "#dce0e4",
                      "primary-fixed": "#dae2fc",
                      "on-surface": "#1b1b1d",
                      "primary-fixed-dim": "#bec6e0",
                      "background": "#fcf8fa",
                      "on-primary-container": "#7c839b",
                      "tertiary-container": "#271902",
                      "surface-tint": "#565e74",
                      "primary-container": "#131b2e",
                      "on-error-container": "#93000a",
                      "secondary": "#5a5f62",
                      "on-primary-fixed": "#131b2e",
                      "outline": "#76777d",
                      "surface-dim": "#dcd9db",
                      "on-tertiary-fixed": "#271902",
                      "error-container": "#ffdad6",
                      "outline-variant": "#c6c6cd",
                      "inverse-on-surface": "#f3f0f2",
                      "surface-container-highest": "#e4e2e3",
                      "secondary-fixed": "#dfe3e7",
                      "secondary-fixed-dim": "#c3c7cb",
                      "surface-variant": "#e4e2e3",
                      "tertiary-fixed": "#fbdeb6"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "xl": "32px",
                      "container-margin": "20px",
                      "base": "4px",
                      "sm": "12px",
                      "gutter": "16px",
                      "xs": "8px",
                      "md": "16px",
                      "lg": "24px"
              },
              "fontFamily": {
                      "label-bold": ["Inter"],
                      "display-md": ["Manrope"],
                      "display-lg": ["Manrope"],
                      "body-sm": ["Inter"],
                      "body-md": ["Inter"],
                      "body-lg": ["Inter"]
              },
              "fontSize": {
                      "label-bold": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                      "display-md": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                      "display-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                      "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                      "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}]
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
        .pb-safe { padding-bottom: env(safe-area-inset-bottom); }
    </style>
</head>
<body class="font-body-md text-on-surface">

<!-- TopAppBar -->
<header class="bg-[#fcf8fa] border-b border-slate-200 sticky top-0 z-50">
<div class="flex justify-between items-center w-full px-5 py-4 max-w-7xl mx-auto">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" class="active:scale-95 transition-transform duration-200 hover:opacity-80 text-[#131b2e]">
<span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
</button>
<h1 class="font-manrope text-lg font-bold text-[#131b2e]">Notifikasi</h1>
</div>
<button class="font-manrope text-[14px] font-bold text-[#131b2e] hover:opacity-80 active:scale-95 transition-transform">
                Tandai Semua Dibaca
            </button>
</div>
</header>

<!-- Main Content -->
<main class="max-w-2xl mx-auto px-container-margin pt-lg pb-32">

@if($notifikasis->isNotEmpty())
<section class="mb-xl">
<h2 class="font-display-md text-label-bold text-on-primary-container mb-gutter tracking-wider">SEMUA NOTIFIKASI</h2>
<div class="space-y-sm">

@foreach($notifikasis as $n)
<a href="{{ route('kelola.peserta', 1) }}" class="bg-surface-container-lowest p-gutter rounded-xl shadow-[0px_4px_20px_rgba(19,27,46,0.06)] border border-slate-50 flex gap-gutter relative overflow-hidden active:scale-[0.98] transition-transform duration-150 block">
@if(!$n->is_read)
<div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-container"></div>
@endif
<div class="h-12 w-12 rounded-full bg-[#2dd4bf20] flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[#2dd4bf]">notifications</span>
</div>
<div class="flex-1 space-y-1">
<div class="flex justify-between items-start">
<h3 class="font-display-md text-body-md font-bold text-[#131b2e]">{{ $n->judul }}</h3>
<span class="font-body-sm text-[12px] text-slate-400">{{ $n->created_at->diffForHumans() }}</span>
</div>
<p class="font-body-sm text-on-surface-variant leading-relaxed">{{ $n->pesan }}</p>
@if(!$n->is_read)
<div class="pt-1"><span class="h-2 w-2 rounded-full bg-primary-container inline-block"></span></div>
@endif
</div>
</a>
@endforeach

</div>
</section>
@else
<div class="text-center py-20">
<span class="material-symbols-outlined text-6xl text-slate-300">notifications_off</span>
<p class="text-slate-400 mt-4">Belum ada notifikasi.</p>
</div>
@endif

<!-- Decorative -->
<div class="mt-xl opacity-20 flex flex-col items-center justify-center text-center">
<div class="w-full h-[200px] rounded-3xl overflow-hidden relative mb-lg">
<img alt="Abstract Notification Background" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqua3TeBarTqDoekCn_l2Z1JfLmrx4jj4FhEVzKZaxGbgTnkRm-g-4IKTEZT7WxTHAK6PL7gpMdYfFqmn3DslhSn9KvcU3AIHTnaOkk831BqvTT0LVoD13h5WEltdkF2DSgcHGDBY_3RM3GPQokF-b_amLi1L7XbjyO8IfbGsLnoj2QfkGYCYMgcnMbrT-jMbPx3igHJ8KctJytxEejiO8fk1DBL6Mt5u8cqZbYuT_b6MLyD35EARNSVp2awstmWwxh8hnsPP0oOpH"/>
</div>
<p class="font-body-sm text-slate-400">Anda sudah mengecek semua tugas panitia DIRGA.</p>
</div>
</main>

<!-- BottomNavBar Panitia -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-3 py-3 pb-safe bg-white border-t border-slate-100 shadow-[0_-4px_20px_rgba(15,23,42,0.06)] rounded-t-2xl">

<a href="{{ route('panitia.dashboard') }}" class="flex flex-col items-center justify-center text-slate-400 px-2 py-1 hover:text-[#131b2e] active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]">emoji_events</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Kelola</span>
</a>

<a class="flex flex-col items-center justify-center text-[#131b2e] font-bold bg-slate-50 rounded-xl px-3 py-1 active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">notifications</span>
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