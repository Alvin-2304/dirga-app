<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Form Pendaftaran Lomba - DIRGA</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
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
        body {
            background-color: #fcf8fa;
            color: #1b1b1d;
            min-height: max(884px, 100dvh);
        }
    </style>
</head>
<body class="font-body-md bg-background min-h-screen pb-xl">

<!-- TopAppBar -->
<header class="sticky top-0 w-full flex justify-between items-center px-5 h-20 bg-white z-50 border-b border-slate-200 shadow-[0px_4px_20px_rgba(19,27,46,0.08)]">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" aria-label="Go back" class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-slate-100 transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined text-[#131b2e]" data-icon="arrow_back">arrow_back</span>
</button>
<div class="flex flex-col">
<h1 class="font-manrope text-lg font-bold text-[#131b2e]">Daftar Lomba</h1>
<p class="font-body-sm text-on-primary-container">National Robot Challenge</p>
</div>
</div>
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-slate-100 transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined text-[#131b2e]" data-icon="search">search</span>
</button>
</header>

<main class="max-w-xl mx-auto px-container-margin mt-lg">

<!-- Hero Decorative Section -->
<div class="relative w-full h-32 rounded-2xl overflow-hidden mb-xl shadow-sm">
<img alt="Robot Background" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuACmlFQ_NhFD47npzvhrKnsIicgeZ4xTjMurdANzY0sM4TiQL54d8edNH4Xi6RP6bhhUl0T6WUsR6tZ5HZqm0bTxCES3vuXaEFDf5PSRqzPEt89_ZGE-FX1SqtnEdOvC3RojA1ynolFkogvb_xc4_luTtt4Wm2Z471k9ega_DxA51bMrFPdgC3d-opFN6H81Q2BtC6WhnPYG2AL0WyEVv_mcInCsc8mpLxKisis47BCs02oxKQTl1KLTIu53MYzWlTABzzAPiD5KWsw"/>
<div class="absolute inset-0 bg-gradient-to-r from-[#131b2e]/80 to-transparent flex items-center p-md">
<div class="bg-white/10 backdrop-blur-md rounded-xl p-3 border border-white/20">
<span class="material-symbols-outlined text-white text-3xl" data-icon="robot_2">robot_2</span>
</div>
</div>
</div>

<!-- Registration Form Card -->
<section class="bg-white rounded-2xl shadow-[0px_4px_20px_rgba(19,27,46,0.06)] p-md md:p-xl border border-slate-100">
<form action="{{ route('daftar.store', 1) }}" method="POST" class="flex flex-col gap-lg">
    @csrf

<!-- Name Field -->
<div class="flex flex-col gap-xs">
<label class="font-label-bold text-on-surface-variant px-1" for="full-name">Nama Lengkap</label>
<input class="h-12 px-md rounded-xl border border-slate-200 focus:border-[#131b2e] focus:ring-0 transition-all font-body-md outline-none" id="full-name" name="nama" placeholder="Contoh: Budi Setiawan" type="text" value="{{ Auth::user()->name }}" required/>
</div>

<!-- Email Field (Readonly) -->
<div class="flex flex-col gap-xs">
<label class="font-label-bold text-on-surface-variant px-1" for="email">Email</label>
<div class="relative">
<input class="w-full h-12 px-md rounded-xl border border-slate-100 bg-slate-50 text-slate-500 font-body-md outline-none cursor-not-allowed" id="email" readonly="" type="email" value="{{ Auth::user()->email }}"/>
<span class="absolute right-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 text-sm" data-icon="lock">lock</span>
</div>
</div>

<!-- Phone Field -->
<div class="flex flex-col gap-xs">
<label class="font-label-bold text-on-surface-variant px-1" for="phone">No HP</label>
<input class="h-12 px-md rounded-xl border border-slate-200 focus:border-[#131b2e] focus:ring-0 transition-all font-body-md outline-none" id="phone" name="phone" placeholder="081234567890" type="tel"/>
</div>

<!-- Institution Field -->
<div class="flex flex-col gap-xs">
<label class="font-label-bold text-on-surface-variant px-1" for="institution">Institusi</label>
<input class="h-12 px-md rounded-xl border border-slate-200 focus:border-[#131b2e] focus:ring-0 transition-all font-body-md outline-none" id="institution" name="institusi" placeholder="Universitas Dirgantara" type="text"/>
</div>

<!-- File Upload Field -->
<div class="flex flex-col gap-xs">
<label class="font-label-bold text-on-surface-variant px-1">Upload Berkas</label>
<div class="border-2 border-dashed border-slate-200 rounded-2xl p-xl flex flex-col items-center justify-center gap-sm bg-slate-50/50 hover:bg-slate-50 transition-colors cursor-pointer group" onclick="document.getElementById('berkas').click()">
<div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-[#131b2e] group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined" data-icon="upload">upload</span>
</div>
<div class="text-center">
<p class="font-body-md font-semibold text-[#131b2e]" id="berkas-label">Pilih Berkas</p>
<p class="font-body-sm text-slate-400">PDF/ZIP maks 5MB</p>
</div>
<input class="hidden" id="berkas" name="berkas" type="file" accept=".pdf,.zip" onchange="document.getElementById('berkas-label').textContent = this.files[0]?.name || 'Pilih Berkas'"/>
</div>
</div>

<!-- Motivation Field -->
<div class="flex flex-col gap-xs">
<label class="font-label-bold text-on-surface-variant px-1" for="motivation">Motivasi Mengikuti Lomba</label>
<textarea class="p-md rounded-xl border border-slate-200 focus:border-[#131b2e] focus:ring-0 transition-all font-body-md outline-none resize-none" id="motivation" name="motivasi" placeholder="Ceritakan alasan Anda..." rows="4"></textarea>
</div>

<!-- Terms Checkbox -->
<label class="flex items-start gap-md group cursor-pointer">
<div class="relative flex items-center">
<input class="peer h-5 w-5 rounded border-slate-300 text-[#131b2e] focus:ring-0 cursor-pointer" id="terms" name="terms" type="checkbox" required/>
</div>
<span class="font-body-sm text-on-surface-variant leading-tight">
                        Saya setuju dengan <span class="text-[#131b2e] font-semibold underline">syarat dan ketentuan</span> yang berlaku dalam kompetisi National Robot Challenge.
                    </span>
</label>

<!-- Submit Button -->
<button class="mt-xs w-full h-[52px] bg-[#131b2e] text-white rounded-xl font-manrope font-bold text-md shadow-lg shadow-[#131b2e]/20 active:scale-[0.98] transition-all flex items-center justify-center gap-2" type="submit">
                    Kirim Pendaftaran
                    <span class="material-symbols-outlined text-lg" data-icon="send">send</span>
</button>
</form>
</section>

<!-- Help Section -->
<div class="mt-xl p-lg rounded-2xl bg-[#fbdeb6]/20 border border-[#fbdeb6]/40 flex items-start gap-md">
<span class="material-symbols-outlined text-[#271902]" data-icon="info">info</span>
<div>
<p class="font-label-bold text-[#271902] mb-1">Butuh bantuan?</p>
<p class="font-body-sm text-[#564426]">Jika Anda mengalami kendala teknis saat pendaftaran, hubungi Admin melalui menu Chat.</p>
</div>
</div>
</main>

</body>
</html>