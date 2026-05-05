<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Leaderboard Panitia - DIRGA</title>
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
                    "tertiary-container": "#271902",
                    "secondary-container": "#dce0e4",
                    "error": "#ba1a1a",
                    "surface-tint": "#565e74",
                    "on-primary-fixed": "#131b2e",
                    "inverse-surface": "#303032",
                    "on-primary-container": "#7c839b",
                    "on-tertiary-fixed": "#271902",
                    "primary-fixed-dim": "#bec6e0",
                    "surface": "#fcf8fa",
                    "on-tertiary-container": "#97805e",
                    "on-secondary-fixed": "#171c1f",
                    "tertiary": "#000000",
                    "primary-fixed": "#dae2fc",
                    "surface-bright": "#fcf8fa",
                    "secondary": "#5a5f62",
                    "on-primary": "#ffffff",
                    "on-secondary-container": "#5e6367",
                    "surface-container-low": "#f6f3f5",
                    "inverse-primary": "#bec6e0",
                    "tertiary-fixed-dim": "#dec39c",
                    "on-background": "#1b1b1d",
                    "background": "#fcf8fa",
                    "primary": "#000000",
                    "on-error-container": "#93000a",
                    "surface-container-high": "#eae7e9",
                    "secondary-fixed": "#dfe3e7",
                    "on-tertiary": "#ffffff",
                    "on-surface": "#1b1b1d",
                    "primary-container": "#131b2e",
                    "error-container": "#ffdad6",
                    "surface-container-lowest": "#ffffff",
                    "on-surface-variant": "#45464d",
                    "surface-dim": "#dcd9db",
                    "tertiary-fixed": "#fbdeb6",
                    "secondary-fixed-dim": "#c3c7cb",
                    "on-tertiary-fixed-variant": "#564426",
                    "surface-container": "#f0edef",
                    "inverse-on-surface": "#f3f0f2",
                    "surface-variant": "#e4e2e3",
                    "outline-variant": "#c6c6cd",
                    "surface-container-highest": "#e4e2e3",
                    "on-secondary-fixed-variant": "#43474b",
                    "on-secondary": "#ffffff",
                    "on-error": "#ffffff",
                    "outline": "#76777d",
                    "on-primary-fixed-variant": "#3f465b"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "lg": "24px",
                    "gutter": "16px",
                    "base": "4px",
                    "md": "16px",
                    "container-margin": "20px",
                    "sm": "12px",
                    "xs": "8px",
                    "xl": "32px"
            },
            "fontFamily": {
                    "display-md": ["Manrope"],
                    "display-lg": ["Manrope"],
                    "label-bold": ["Inter"],
                    "body-lg": ["Inter"],
                    "body-sm": ["Inter"],
                    "body-md": ["Inter"]
            },
            "fontSize": {
                    "display-md": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "display-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "label-bold": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
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
            font-family: 'Inter', sans-serif;
            background-color: #fcf8fa;
            min-height: max(884px, 100dvh);
        }
        .gold-glow { box-shadow: 0 0 20px rgba(212, 175, 55, 0.2); }
        .silver-glow { box-shadow: 0 0 20px rgba(192, 192, 192, 0.2); }
        .bronze-glow { box-shadow: 0 0 20px rgba(205, 127, 50, 0.2); }
        .pb-safe { padding-bottom: env(safe-area-inset-bottom); }
    </style>
</head>
<body class="text-on-surface">

<!-- TopAppBar -->
<header class="flex items-center justify-between px-5 h-16 w-full sticky top-0 z-50 bg-[#fcf8fa] border-b border-slate-200 shadow-sm">
<div class="flex items-center gap-3">
<button onclick="window.history.back()" class="active:scale-95 duration-200">
<span class="material-symbols-outlined text-[#131b2e]">arrow_back</span>
</button>
<h1 class="font-manrope font-semibold text-lg text-[#131b2e]">Leaderboard</h1>
</div>
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-slate-100 transition-colors active:scale-95 duration-150">
<span class="material-symbols-outlined text-[#131b2e]">settings</span>
</button>
</header>

<main class="pb-24 pt-lg px-container-margin max-w-2xl mx-auto">

<!-- Category Selector -->
<section class="mb-xl">
<label class="font-label-bold text-label-bold text-on-surface-variant mb-xs block">KATEGORI LOMBA</label>
<div class="relative">
<select class="w-full h-12 bg-surface-container-lowest border border-outline-variant rounded-xl px-4 font-body-md text-[#131b2e] appearance-none focus:outline-none focus:ring-2 focus:ring-primary-container transition-all">
<option>UI/UX Design Competition</option>
<option>Web Development Challenge</option>
<option>Mobile App Innovation</option>
<option>Algorithm Masterclass</option>
</select>
<div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">
<span class="material-symbols-outlined">expand_more</span>
</div>
</div>
</section>

<!-- Podium Top 3 -->
<section class="grid grid-cols-3 gap-3 mb-xl items-end h-64">

<!-- Rank 2 -->
<div class="flex flex-col items-center">
<div class="relative mb-3">
<div class="w-16 h-16 rounded-full border-4 border-slate-300 silver-glow overflow-hidden">
<img alt="2nd" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpf7xnV2GsNeW5qkNWEH1v-uo9qZPvZG2kFnuh8BJEay3tm-hPUHW-rhdVdTMZhtOWoaUkq2ID687mdgFBKC5Wr01dyrh4NK4uckey7O9ltjc1NHRpyUgd-5zEaSLpabrV3EANGEA3tGZsJU0q-aCTysp5D6pzXLpm2FDUeWX8y-VDLP-5i2ZP9-RqgF9nvxym6rL_Azs0WTwqk5DrhItmdmCruG-XCJKMoEUKw20FpzfADbbMJGEcc1JeIiGRzdfcZlBlCrG1MPp0"/>
</div>
<div class="absolute -bottom-2 right-0 bg-slate-300 text-white w-6 h-6 rounded-full flex items-center justify-center font-bold text-xs">2</div>
</div>
<div class="bg-white p-3 rounded-t-2xl w-full text-center shadow-sm h-28 flex flex-col justify-center border-t-4 border-slate-300">
<p class="font-display-md text-[14px] leading-tight truncate px-1">Ahmad S.</p>
<p class="text-[10px] text-on-surface-variant truncate">ITB</p>
<p class="font-bold text-[#131b2e] mt-1">2.450</p>
</div>
</div>

<!-- Rank 1 -->
<div class="flex flex-col items-center">
<div class="relative mb-4">
<div class="absolute -top-6 left-1/2 -translate-x-1/2">
<span class="material-symbols-outlined text-yellow-500 text-3xl" style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
</div>
<div class="w-20 h-20 rounded-full border-4 border-yellow-400 gold-glow overflow-hidden">
<img alt="1st" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABPZ3uvjVdfFmO9BYusKT8Pc_9fUp9UaSBDS91hrJCjWZP_NESwGk-2tCKh8ph76xdO6w_sWTYLQ3EkKXv4yq_iIoXPF8DmiAWfVMgfxmDdWKGRJv-wnWjjzsRRlBbThpzHGTgZofwpnRkdQQHvKMpLZyHx7BMZu34zZE0tc6B53WFBpEaZg643K-RdgRQRXFThQeIOva1FRuUEufVlRnUFUq4E5RTDpYXP_wjZ0nx8pM9QtQrrPq86hHTvCGiB6znr28H00TGpqrQ"/>
</div>
<div class="absolute -bottom-2 right-0 bg-yellow-400 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">1</div>
</div>
<div class="bg-white p-4 rounded-t-2xl w-full text-center shadow-md h-36 flex flex-col justify-center border-t-4 border-yellow-400">
<p class="font-display-md text-[16px] leading-tight truncate">Sarah J.</p>
<p class="text-[11px] text-on-surface-variant truncate">UI</p>
<p class="font-extrabold text-[#131b2e] text-lg mt-1">2.580</p>
</div>
</div>

<!-- Rank 3 -->
<div class="flex flex-col items-center">
<div class="relative mb-2">
<div class="w-14 h-14 rounded-full border-4 border-orange-400 bronze-glow overflow-hidden">
<img alt="3rd" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABGiKzakzjqR9hF9KVehvF5OlvOQOScxk7yoREqLFaNJC-VJ9mxi9DEGpOTuDplc5LXSY5R3ZWdDCGnTjMYIMRSZS6p3d6SrYp_q5YrkpObS2E8kzoPTUE4OT6fsKFLndCoT5BQEiQTbzPMlrvZTkrvoKL57__MgcWKX6RNcLg0kRXFEm4tq4SFDzauurjTIJvMY-bqQMwMostqrr3XeYVyK0apQrTNPNaEuUTAT_wV2DyAoF554sfYMF8kHjcbljbNQEH7SVmOAnM"/>
</div>
<div class="absolute -bottom-2 right-0 bg-orange-400 text-white w-6 h-6 rounded-full flex items-center justify-center font-bold text-xs">3</div>
</div>
<div class="bg-white p-3 rounded-t-2xl w-full text-center shadow-sm h-24 flex flex-col justify-center border-t-4 border-orange-400">
<p class="font-display-md text-[14px] leading-tight truncate px-1">Daffa R.</p>
<p class="text-[10px] text-on-surface-variant truncate">ITS</p>
<p class="font-bold text-[#131b2e] mt-1">2.310</p>
</div>
</div>
</section>

<!-- Ranking List 4-10 -->
<div class="space-y-3">
<!-- Item Ranking -->
<div class="bg-white p-4 rounded-2xl shadow-sm flex items-center justify-between border border-transparent hover:border-slate-100 transition-all">
<div class="flex items-center gap-4">
<span class="font-display-md text-on-surface-variant w-6 text-center">4</span>
<div class="w-10 h-10 rounded-full overflow-hidden bg-slate-100"></div>
<div>
<p class="font-manrope font-semibold text-[#131b2e]">Putri Ananda</p>
<p class="text-body-sm text-on-surface-variant">UGM</p>
</div>
</div>
<div class="text-right">
<p class="font-bold text-[#131b2e]">2.150</p>
</div>
</div>

<div class="bg-white p-4 rounded-2xl shadow-sm flex items-center justify-between">
<div class="flex items-center gap-4">
<span class="font-display-md text-on-surface-variant w-6 text-center">5</span>
<div class="w-10 h-10 rounded-full overflow-hidden bg-slate-100"></div>
<div>
<p class="font-manrope font-semibold text-[#131b2e]">Budi Hartono</p>
<p class="text-body-sm text-on-surface-variant">Binus University</p>
</div>
</div>
<div class="text-right">
<p class="font-bold text-[#131b2e]">2.090</p>
</div>
</div>

<div class="bg-white p-4 rounded-2xl shadow-sm flex items-center justify-between">
<div class="flex items-center gap-4">
<span class="font-display-md text-on-surface-variant w-6 text-center">6</span>
<div class="w-10 h-10 rounded-full overflow-hidden bg-slate-100"></div>
<div>
<p class="font-manrope font-semibold text-[#131b2e]">Clarissa V.</p>
<p class="text-body-sm text-on-surface-variant">Unpad</p>
</div>
</div>
<div class="text-right">
<p class="font-bold text-[#131b2e]">1.980</p>
</div>
</div>
</div>
</main>

<!-- BottomNavBar 4 Tab Panitia -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-3 py-3 pb-safe bg-white border-t border-slate-100 shadow-[0px_-4px_20px_rgba(19,27,46,0.06)] rounded-t-2xl">

<!-- Kelola -->
<a href="{{ route('panitia.dashboard') }}" class="flex flex-col items-center justify-center text-slate-400 px-2 py-1 hover:text-[#131b2e] active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]">emoji_events</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Kelola</span>
</a>

<!-- Notifikasi -->
<a href="{{ route('panitia.notifikasi') }}" class="flex flex-col items-center justify-center text-slate-400 px-2 py-1 hover:text-[#131b2e] active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]">notifications</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Notifikasi</span>
</a>

<!-- Leaderboard (Active) -->
<a class="flex flex-col items-center justify-center text-[#131b2e] font-bold bg-slate-50 rounded-xl px-3 py-1 active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">leaderboard</span>
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