<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, viewport-fit=cover" name="viewport"/>
<title>Edit Profil - DIRGA</title>
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
        .pb-safe { padding-bottom: env(safe-area-inset-bottom); }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-background font-body-md text-on-surface antialiased min-h-screen">

<!-- TopAppBar Section -->
<header class="sticky top-0 w-full flex justify-between items-center px-5 h-16 bg-white border-b border-slate-200 shadow-[0px_4px_20px_rgba(19,27,46,0.08)] z-50">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" class="active:scale-95 duration-200 hover:bg-slate-100 p-2 rounded-full transition-colors">
<span class="material-symbols-outlined text-[#131b2e]" data-icon="arrow_back">arrow_back</span>
</button>
<h1 class="font-manrope text-lg font-bold text-[#131b2e]">Edit Profil</h1>
</div>
<div class="flex items-center">
<button class="active:scale-95 duration-200 hover:bg-slate-100 p-2 rounded-full transition-colors">
<span class="material-symbols-outlined text-[#131b2e]" data-icon="search">search</span>
</button>
</div>
</header>

<main class="max-w-md mx-auto px-container-margin pt-xl pb-xl">

<!-- Profile Picture Section -->
<section class="flex flex-col items-center mb-xl">
<div class="relative group">
<div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
<img alt="Foto Profil" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCmTOjOPDPH1J8ZV59KqEm7NwyjBmmBg5CGRnQe0Tg0pvSle6uLsxEEwETERfSvXvz-Um4i0BV7saKfA4scdyl3TnZGhtw36NXz52ZQQe_MPIJa9KHsVy9uwp8SfA1QmeFfEWaFuSYqRTiJ5zDfZwubEe0MChvyA97kvqepyjboYAAD17eI7xUwDSw8WyjfHxBdGs0H2AE4mjowlqMcccAT4LPtfV8iWXm3Y_NT0kduRnxgERdb02f21PV4bPxngRqiGoOHTAhI4c9u"/>
</div>
<button class="absolute bottom-0 right-0 bg-on-primary-fixed text-white p-2.5 rounded-full shadow-lg hover:bg-slate-800 transition-all active:scale-90 border-2 border-white">
<span class="material-symbols-outlined text-[20px]" data-icon="camera" data-weight="fill" style="font-variation-settings: 'FILL' 1;">camera</span>
</button>
</div>
<p class="mt-4 font-manrope font-bold text-[#131b2e] text-body-lg">{{ Auth::user()->name }}</p>
<p class="text-on-primary-container text-body-sm">{{ Auth::user()->role === 'peserta' ? 'Peserta' : 'Panitia' }}</p>
</section>

<!-- Form Section -->
<form action="{{ route('update.profil') }}" method="POST" class="space-y-lg">
    @csrf
    @method('PUT')

<!-- Full Name -->
<div class="space-y-base">
<label class="font-label-bold text-on-surface-variant ml-1" for="name">Nama Lengkap</label>
<div class="relative">
<input class="w-full h-12 px-md bg-white border border-outline-variant rounded-xl focus:border-on-primary-fixed focus:ring-1 focus:ring-on-primary-fixed transition-all text-body-md text-on-surface" id="name" name="name" type="text" value="{{ Auth::user()->name }}" required/>
</div>
</div>

<!-- Email (Readonly) -->
<div class="space-y-base opacity-75">
<label class="font-label-bold text-on-surface-variant ml-1" for="email">Email</label>
<div class="relative">
<input class="w-full h-12 px-md bg-surface-container border border-outline-variant rounded-xl cursor-not-allowed text-body-md text-on-surface-variant" id="email" readonly="" type="email" value="{{ Auth::user()->email }}"/>
<span class="absolute right-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-outline text-[20px]" data-icon="lock">lock</span>
</div>
</div>

<!-- Phone Number -->
<div class="space-y-base">
<label class="font-label-bold text-on-surface-variant ml-1" for="phone">No HP</label>
<div class="relative">
<input class="w-full h-12 px-md bg-white border border-outline-variant rounded-xl focus:border-on-primary-fixed focus:ring-1 focus:ring-on-primary-fixed transition-all text-body-md text-on-surface" id="phone" name="phone" type="tel" value="{{ Auth::user()->phone ?? '081234567890' }}"/>
</div>
</div>

<!-- Institution -->
<div class="space-y-base">
<label class="font-label-bold text-on-surface-variant ml-1" for="institution">Institusi</label>
<div class="relative">
<input class="w-full h-12 px-md bg-white border border-outline-variant rounded-xl focus:border-on-primary-fixed focus:ring-1 focus:ring-on-primary-fixed transition-all text-body-md text-on-surface" id="institution" name="institusi" type="text" value="{{ Auth::user()->institusi ?? 'Universitas Indonesia' }}"/>
</div>
</div>

<!-- Save Button -->
<div class="pt-lg">
<button class="w-full h-[52px] bg-[#131b2e] text-white font-manrope font-bold rounded-2xl shadow-[0px_4px_20px_rgba(19,27,46,0.2)] hover:shadow-[0px_6px_25px_rgba(19,27,46,0.3)] active:scale-[0.98] transition-all duration-200 flex items-center justify-center gap-2" type="submit">
<span class="material-symbols-outlined" data-icon="save">save</span>
                    Simpan Perubahan
                </button>
<p class="text-center mt-gutter text-body-sm text-outline">Pembaruan profil akan segera diterapkan pada akun Anda.</p>
</div>
</form>
</main>

<!-- Pop-up Sukses -->
@if(session('success'))
<script>
    alert('{{ session('success') }}');
</script>
@endif

</body>
</html>