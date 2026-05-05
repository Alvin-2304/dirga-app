<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet"/>
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
            display: inline-block;
            line-height: 1;
        }
        body {
            background-color: #fcf8fa;
            min-height: max(884px, 100dvh);
        }
    </style>
</head>
<body class="antialiased text-on-surface">

<!-- Top Navigation Bar -->
<header class="sticky top-0 w-full flex justify-between items-center px-5 h-16 bg-white z-50 border-b border-slate-200 shadow-[0px_4px_20px_rgba(19,27,46,0.08)]">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" class="active:scale-95 duration-200 hover:bg-slate-100 transition-colors p-2 rounded-full">
<span class="material-symbols-outlined text-[#131b2e]" data-icon="arrow_back">arrow_back</span>
</button>
<h1 class="font-manrope text-lg font-bold text-[#131b2e]">Ganti Password</h1>
</div>
<div class="w-10"></div>
</header>

<main class="max-w-md mx-auto px-container-margin pt-xl pb-32">

<!-- Hero Decorative Element -->
<div class="mb-xl text-center">
<div class="w-20 h-20 bg-primary-container/5 rounded-full flex items-center justify-center mx-auto mb-gutter">
<span class="material-symbols-outlined text-[#131b2e] text-4xl" data-icon="lock_reset" style="font-variation-settings: 'FILL' 1;">lock_reset</span>
</div>
<h2 class="font-display-md text-display-md text-on-surface mb-xs">Amankan Akun Anda</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Pastikan password Anda kuat dan sulit ditebak untuk melindungi data kompetisi Anda.</p>
</div>

<!-- Password Form -->
<form action="{{ route('update.password') }}" method="POST" id="passwordForm" class="space-y-lg">
    @csrf
    @method('PUT')

<!-- Password Lama -->
<div class="space-y-xs">
<label class="font-label-bold text-label-bold text-on-surface-variant uppercase" for="password_lama">Password Lama</label>
<div class="relative">
<input class="w-full h-12 px-gutter rounded-xl border border-slate-200 focus:border-[#131b2e] focus:ring-1 focus:ring-[#131b2e] bg-white transition-all outline-none font-body-md text-body-md" id="password_lama" name="password_lama" placeholder="Masukkan password lama" type="password" required/>
<button onclick="togglePassword('password_lama', this)" class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400" type="button">
<span class="material-symbols-outlined text-[20px]" data-icon="visibility">visibility</span>
</button>
</div>
@error('password_lama')
<p class="text-error text-body-sm mt-1">{{ $message }}</p>
@enderror
</div>

<!-- Password Baru -->
<div class="space-y-xs">
<label class="font-label-bold text-label-bold text-on-surface-variant uppercase" for="password_baru">Password Baru</label>
<div class="relative">
<input class="w-full h-12 px-gutter rounded-xl border border-slate-200 focus:border-[#131b2e] focus:ring-1 focus:ring-[#131b2e] bg-white transition-all outline-none font-body-md text-body-md" id="password_baru" name="password_baru" placeholder="Buat password baru" type="password" required minlength="6"/>
<button onclick="togglePassword('password_baru', this)" class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400" type="button">
<span class="material-symbols-outlined text-[20px]" data-icon="visibility">visibility</span>
</button>
</div>
<div class="flex items-center gap-2 mt-xs">
<span class="material-symbols-outlined text-primary-container text-base" data-icon="info">info</span>
<p class="font-body-sm text-body-sm text-on-primary-container">Minimal 6 karakter</p>
</div>
@error('password_baru')
<p class="text-error text-body-sm mt-1">{{ $message }}</p>
@enderror
</div>

<!-- Konfirmasi Password Baru -->
<div class="space-y-xs">
<label class="font-label-bold text-label-bold text-on-surface-variant uppercase" for="password_baru_confirmation">Konfirmasi Password Baru</label>
<div class="relative">
<input class="w-full h-12 px-gutter rounded-xl border border-slate-200 focus:border-[#131b2e] focus:ring-1 focus:ring-[#131b2e] bg-white transition-all outline-none font-body-md text-body-md" id="password_baru_confirmation" name="password_baru_confirmation" placeholder="Ulangi password baru" type="password" required/>
<button onclick="togglePassword('password_baru_confirmation', this)" class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400" type="button">
<span class="material-symbols-outlined text-[20px]" data-icon="visibility">visibility</span>
</button>
</div>
</div>

<!-- Visual Security Checklist -->
<div class="bg-surface-container-low p-md rounded-2xl border border-slate-100">
<h4 class="font-label-bold text-label-bold mb-sm text-[#131b2e]">KEAMANAN PASSWORD</h4>
<ul class="space-y-xs">
<li class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-[18px] text-primary-container" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-sm text-body-sm">Kombinasi huruf besar dan kecil</span>
</li>
<li class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-[18px] text-slate-300" data-icon="circle">circle</span>
<span class="font-body-sm text-body-sm">Menggunakan angka atau simbol</span>
</li>
</ul>
</div>
</form>
</main>

<!-- Bottom Action Area -->
<div class="fixed bottom-0 left-0 w-full p-gutter bg-white border-t border-slate-100 shadow-[0px_-4px_20px_rgba(19,27,46,0.06)] z-50">
<div class="max-w-md mx-auto">
<button onclick="document.getElementById('passwordForm').submit()" class="w-full h-14 bg-[#131b2e] text-white rounded-2xl font-manrope font-bold text-lg shadow-lg active:scale-[0.98] transition-all duration-200 flex items-center justify-center gap-2">
                Simpan Perubahan
                <span class="material-symbols-outlined text-white" data-icon="save" style="font-variation-settings: 'FILL' 1;">save</span>
</button>
<p class="text-center mt-sm font-body-sm text-body-sm text-on-surface-variant">
                Anda akan diminta login ulang setelah mengganti password.
            </p>
</div>
</div>

<!-- Pop-up Sukses/Error -->
@if(session('success'))
<script>alert('{{ session('success') }}');</script>
@endif

<script>
// Toggle visibility password
function togglePassword(inputId, btn) {
    const input = document.getElementById(inputId);
    const icon = btn.querySelector('.material-symbols-outlined');
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.textContent = 'visibility_off';
    } else {
        input.type = 'password';
        icon.textContent = 'visibility';
    }
}
</script>

</body>
</html>