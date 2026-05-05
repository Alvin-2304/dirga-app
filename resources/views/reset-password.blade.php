<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
                        "primary": "#131b2e",
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
            min-height: max(884px, 100dvh);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md min-h-screen flex flex-col">

<!-- TopAppBar -->
<header class="sticky top-0 w-full flex justify-between items-center px-5 h-16 bg-white border-b border-slate-200 shadow-[0px_4px_20px_rgba(19,27,46,0.08)] z-50">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" class="p-2 -ml-2 rounded-full hover:bg-slate-100 transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined text-[#131b2e]" data-icon="arrow_back">arrow_back</span>
</button>
<h1 class="font-manrope text-lg font-bold text-[#131b2e]">Reset Password</h1>
</div>
<div class="w-10"></div>
</header>

<main class="flex-1 flex flex-col px-container-margin py-xl max-w-md mx-auto w-full">

<!-- Illustration/Icon Section -->
<div class="flex flex-col items-center justify-center mt-8 mb-xl">
<div class="relative">
<div class="absolute inset-0 bg-primary-fixed opacity-20 rounded-full scale-150 blur-xl"></div>
<div class="relative w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-[0px_10px_30px_rgba(19,27,46,0.1)] border border-slate-50">
<span class="material-symbols-outlined text-5xl text-primary" data-icon="shield" style="font-variation-settings: 'FILL' 1;">shield</span>
</div>
</div>
<div class="text-center mt-xl space-y-2">
<h2 class="font-display-md text-display-md text-primary">Buat Password Baru</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-[280px] mx-auto">
                    Keamanan akun Anda adalah prioritas kami. Silakan masukkan kata sandi baru yang kuat.
                </p>
</div>
</div>

<!-- Reset Password Form -->
<form action="{{ route('reset.password.post') }}" method="POST" id="resetPasswordForm" class="space-y-lg flex-1">
    @csrf
    <input type="hidden" name="email" value="{{ request('email') }}">

<div class="space-y-sm">
<label class="block font-label-bold text-label-bold text-on-surface-variant px-1" for="new_password">
                    Password Baru
                </label>
<div class="relative">
<input class="w-full h-12 px-md bg-white border border-[#e2e8f0] rounded-xl focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none text-body-md" id="new_password" name="password" placeholder="••••••••" type="password" required minlength="6"/>
<button onclick="togglePassword('new_password', this)" class="absolute right-3 top-1/2 -translate-y-1/2 p-1 text-slate-400 hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined" data-icon="visibility">visibility</span>
</button>
</div>
<p class="text-[11px] text-on-surface-variant px-1">Minimal 6 karakter.</p>
</div>

<div class="space-y-sm">
<label class="block font-label-bold text-label-bold text-on-surface-variant px-1" for="confirm_password">
                    Konfirmasi Password Baru
                </label>
<div class="relative">
<input class="w-full h-12 px-md bg-white border border-[#e2e8f0] rounded-xl focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none text-body-md" id="confirm_password" name="password_confirmation" placeholder="••••••••" type="password" required/>
<button onclick="togglePassword('confirm_password', this)" class="absolute right-3 top-1/2 -translate-y-1/2 p-1 text-slate-400 hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined" data-icon="visibility">visibility</span>
</button>
</div>
</div>

<!-- Hint Card -->
<div class="bg-surface-container-low p-md rounded-2xl border border-slate-100 flex gap-md items-start">
<span class="material-symbols-outlined text-on-primary-container" data-icon="info">info</span>
<p class="text-body-sm text-on-surface-variant leading-tight">
                    Pastikan password Anda unik dan tidak digunakan untuk layanan digital lainnya demi keamanan maksimal.
                </p>
</div>

<!-- Action Button -->
<div class="pt-xl pb-lg">
<button class="w-full h-14 bg-[#131b2e] text-white font-manrope font-bold text-md rounded-xl shadow-[0px_4px_20px_rgba(19,27,46,0.2)] hover:bg-[#1c2845] active:scale-[0.98] transition-all duration-200 flex items-center justify-center gap-2" type="submit">
                    Simpan Password Baru
                    <span class="material-symbols-outlined text-xl" data-icon="key">key</span>
</button>
</div>
</form>

<!-- Aesthetic Branding Element -->
<div class="mt-auto pt-lg text-center opacity-40">
<p class="font-manrope text-xs font-extrabold tracking-[0.2em] text-primary">DIRGA SECURE PROTOCOL</p>
</div>
</main>

<!-- Background Decoration -->
<div class="fixed bottom-0 right-0 -z-10 opacity-5 pointer-events-none">
<svg fill="none" height="400" viewbox="0 0 400 400" width="400" xmlns="http://www.w3.org/2000/svg">
<path d="M400 200C400 310.457 310.457 400 200 400C89.543 400 0 310.457 0 200C0 89.543 89.543 0 200 0C310.457 0 400 89.543 400 200Z" fill="#131B2E"></path>
</svg>
</div>

@if(session('success'))
<script>alert('{{ session('success') }}');</script>
@endif

<script>
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