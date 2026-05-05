<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet"/>
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
                        "full": "9999px",
                        "2xl": "1rem"
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
        .pb-safe { padding-bottom: env(safe-area-inset-bottom); }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md min-h-screen flex flex-col">

<!-- TopAppBar -->
<header class="sticky top-0 w-full flex justify-between items-center px-5 h-16 bg-white z-50 border-b border-slate-200 shadow-[0px_4px_20px_rgba(19,27,46,0.08)]">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" class="active:scale-95 duration-200 hover:bg-slate-100 p-2 rounded-full transition-colors">
<span class="material-symbols-outlined text-[#131b2e]" data-icon="arrow_back">arrow_back</span>
</button>
<h1 class="font-manrope text-lg font-bold text-[#131b2e]">Profil Panitia</h1>
</div>
<button class="active:scale-95 duration-200 hover:bg-slate-100 p-2 rounded-full transition-colors">
<span class="material-symbols-outlined text-[#131b2e]" data-icon="search">search</span>
</button>
</header>

<!-- Form Logout Tersembunyi -->
<form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<main class="flex-grow w-full max-w-md mx-auto px-container-margin py-xl space-y-xl">
<!-- Profile Header Section -->
<section class="flex flex-col items-center text-center space-y-md">
<div class="relative">
<div class="w-28 h-28 rounded-full border-4 border-white shadow-lg overflow-hidden">
<img alt="Foto Profil" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfV8SXzSrPM27CDTST1_qpO-OUjoBqYlB1B-wk13jlpDEPLqqQvwsAb6pCspvC1Pm3vznS-aVtbNW-W4mRu5-QDEfUNJIYYPYhGu_0GYq0NH2dcfDm1dEh5PiU1xeyXCyA_M5Ylc4Ly-bTzPSIdq9MduelM-iEWYN8tGCoYShrq6cQIBT9qsbwuRWStff8fUFOeiqqhR-36IqxPQ6kG9XlKPG3QSWvPvqh79VsHVIk5V5LoKwN0LnK0Lb2sHaYUO5AzbORoWIU5BM4"/>
</div>
<div class="absolute bottom-0 right-0 bg-[#131b2e] text-white p-1.5 rounded-full border-2 border-white shadow-md flex items-center justify-center">
<span class="material-symbols-outlined text-sm" data-icon="verified" style="font-variation-settings: 'FILL' 1;">verified</span>
</div>
</div>
<div class="space-y-1">
<h2 class="font-display-md text-primary-container">{{ Auth::user()->name }}</h2>
<div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-container/10 text-primary-container font-label-bold">
                    Panitia
                </div>
</div>
<!-- Contact/Details Card -->
<div class="w-full bg-white rounded-2xl p-md shadow-[0px_4px_20px_rgba(19,27,46,0.08)] text-left space-y-md">
<div class="flex items-center gap-md">
<div class="w-10 h-10 rounded-xl bg-surface-container flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="mail">mail</span>
</div>
<div>
<p class="text-label-bold text-on-surface-variant">Email</p>
<p class="font-body-md text-primary-container font-semibold">{{ Auth::user()->email }}</p>
</div>
</div>
<div class="flex items-center gap-md">
<div class="w-10 h-10 rounded-xl bg-surface-container flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="call">call</span>
</div>
<div>
<p class="text-label-bold text-on-surface-variant">No HP</p>
<p class="font-body-md text-primary-container font-semibold">08987654321</p>
</div>
</div>
<div class="flex items-center gap-md">
<div class="w-10 h-10 rounded-xl bg-surface-container flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="business">business</span>
</div>
<div>
<p class="text-label-bold text-on-surface-variant">Institusi</p>
<p class="font-body-md text-primary-container font-semibold">Dirga Committee</p>
</div>
</div>
</div>
</section>

<!-- Menu List Section -->
<section class="space-y-sm">
<h3 class="text-label-bold text-on-surface-variant px-1">PENGATURAN AKUN</h3>
<div class="bg-white rounded-2xl shadow-[0px_4px_20px_rgba(19,27,46,0.06)] overflow-hidden">
<!-- Lomba yang Dikelola -->
<a href="#" class="w-full flex items-center justify-between px-md py-4 hover:bg-slate-50 transition-colors border-b border-slate-100 last:border-0 group">
<div class="flex items-center gap-md">
<span class="material-symbols-outlined text-primary-container" data-icon="emoji_events">emoji_events</span>
<span class="font-body-md font-medium text-primary-container">Lomba yang Dikelola</span>
</div>
<span class="material-symbols-outlined text-slate-400 group-hover:translate-x-1 transition-transform" data-icon="chevron_right">chevron_right</span>
</a>
<!-- Edit Profil -->
<a href="{{ route('edit.profil') }}" class="w-full flex items-center justify-between px-md py-4 hover:bg-slate-50 transition-colors border-b border-slate-100 last:border-0 group">
<div class="flex items-center gap-md">
<span class="material-symbols-outlined text-primary-container" data-icon="edit">edit</span>
<span class="font-body-md font-medium text-primary-container">Edit Profil</span>
</div>
<span class="material-symbols-outlined text-slate-400 group-hover:translate-x-1 transition-transform" data-icon="chevron_right">chevron_right</span>
</a>
<!-- Ganti Password -->
<a href="{{ route('ganti.password') }}" class="w-full flex items-center justify-between px-md py-4 hover:bg-slate-50 transition-colors border-b border-slate-100 last:border-0 group">
<div class="flex items-center gap-md">
<span class="material-symbols-outlined text-primary-container" data-icon="lock">lock</span>
<span class="font-body-md font-medium text-primary-container">Ganti Password</span>
</div>
<span class="material-symbols-outlined text-slate-400 group-hover:translate-x-1 transition-transform" data-icon="chevron_right">chevron_right</span>
</a>
<!-- Notifikasi -->
<a href="#" class="w-full flex items-center justify-between px-md py-4 hover:bg-slate-50 transition-colors border-b border-slate-100 last:border-0 group">
<div class="flex items-center gap-md">
<span class="material-symbols-outlined text-primary-container" data-icon="notifications">notifications</span>
<span class="font-body-md font-medium text-primary-container">Notifikasi</span>
</div>
<span class="material-symbols-outlined text-slate-400 group-hover:translate-x-1 transition-transform" data-icon="chevron_right">chevron_right</span>
</a>
<!-- Tentang Aplikasi -->
<a href="#" class="w-full flex items-center justify-between px-md py-4 hover:bg-slate-50 transition-colors last:border-0 group">
<div class="flex items-center gap-md">
<span class="material-symbols-outlined text-primary-container" data-icon="info">info</span>
<span class="font-body-md font-medium text-primary-container">Tentang Aplikasi</span>
</div>
<span class="material-symbols-outlined text-slate-400 group-hover:translate-x-1 transition-transform" data-icon="chevron_right">chevron_right</span>
</a>
</div>
</section>

<!-- Logout Button -->
<section class="pb-xl">
<button onclick="document.getElementById('logoutForm').submit()" class="w-full h-[52px] bg-white border-2 border-error text-error rounded-2xl flex items-center justify-center gap-xs font-label-bold active:scale-[0.98] transition-all hover:bg-error/5">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
                LOGOUT
            </button>
</section>
</main>

<!-- BottomNavBar -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-3 py-3 pb-safe bg-white border-t border-slate-100 shadow-[0_-4px_20px_rgba(15,23,42,0.06)] rounded-t-2xl">

<a href="{{ route('panitia.dashboard') }}" class="flex flex-col items-center justify-center text-slate-400 px-2 py-1 hover:text-[#131b2e] active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]">emoji_events</span>
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

<a class="flex flex-col items-center justify-center text-[#131b2e] font-bold bg-slate-50 rounded-xl px-3 py-1 active:scale-90 transition-transform">
<span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">person</span>
<span class="font-manrope text-[10px] font-semibold mt-0.5">Profil</span>
</a>

</nav>

</body>
</html> 