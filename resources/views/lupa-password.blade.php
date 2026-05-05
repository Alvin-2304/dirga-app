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
        body {
            background-color: #fcf8fa;
            color: #1b1b1d;
            font-family: 'Inter', sans-serif;
            min-height: max(884px, 100dvh);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col items-center">

<!-- TopAppBar -->
<header class="sticky top-0 w-full flex justify-between items-center px-5 h-16 bg-white border-b border-slate-200 z-50 shadow-[0px_4px_20px_rgba(19,27,46,0.08)]">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-slate-100 transition-colors active:scale-95 duration-200 text-[#131b2e]">
<span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
</button>
<h1 class="font-manrope text-lg font-bold text-[#131b2e]">Lupa Password</h1>
</div>
<div class="w-10"></div>
</header>

<main class="flex-1 w-full max-w-md px-container-margin py-xl flex flex-col items-center">

<!-- Illustration/Icon Section -->
<div class="relative mb-xl mt-lg">
<div class="absolute inset-0 bg-primary-container opacity-5 rounded-full blur-3xl"></div>
<div class="relative w-32 h-32 flex items-center justify-center bg-white shadow-[0px_10px_30px_rgba(19,27,46,0.08)] rounded-full">
<span class="material-symbols-outlined text-[64px] text-primary-container" data-icon="lock" data-weight="fill" style="font-variation-settings: 'FILL' 1;">lock</span>
</div>
</div>

<!-- Text Content -->
<div class="text-center space-y-sm mb-xl">
<h2 class="font-display-lg text-display-lg text-primary-container">Lupa Kata Sandi?</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-[280px] mx-auto">
                Masukkan email Anda, kami akan mengirimkan link untuk mereset kata sandi.
            </p>
</div>

<!-- Form Section -->
<div class="w-full space-y-lg">
<form action="{{ route('lupa.password.post') }}" method="POST" id="lupaPasswordForm">
    @csrf
<div class="space-y-xs">
<label class="font-body-sm text-body-sm text-on-surface-variant ml-1" for="email">Email</label>
<div class="relative flex items-center group">
<span class="material-symbols-outlined absolute left-4 text-outline group-focus-within:text-primary-container transition-colors" data-icon="mail">mail</span>
<input class="w-full h-[56px] pl-12 pr-4 bg-white border border-slate-200 rounded-2xl font-body-md text-body-md focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="email" name="email" placeholder="nama@email.com" type="email" required/>
</div>
</div>
</form>

<button onclick="submitLupaPassword()" id="btnKirim" class="w-full h-14 bg-primary-container text-white font-manrope font-bold rounded-2xl shadow-[0px_4px_20px_rgba(19,27,46,0.2)] active:scale-[0.98] transition-transform flex items-center justify-center gap-2">
<span>Kirim Link Reset</span>
<span class="material-symbols-outlined text-xl" data-icon="send">send</span>
</button>

<div class="pt-md text-center">
<a class="inline-flex items-center gap-1 font-body-md text-body-md font-semibold text-primary-container hover:underline transition-all" href="{{ route('pilih.role') }}">
<span class="material-symbols-outlined text-sm" data-icon="chevron_left">chevron_left</span>
                    Kembali ke Login
                </a>
</div>
</div>

<!-- Decorative Card -->
<div class="mt-auto pt-xl w-full">
<div class="p-lg bg-surface-container-low rounded-2xl border border-slate-100 flex items-start gap-4 shadow-sm">
<div class="p-2 bg-primary-container/10 rounded-xl">
<span class="material-symbols-outlined text-primary-container" data-icon="security">security</span>
</div>
<div>
<h4 class="font-manrope font-bold text-sm text-primary-container">Keamanan Akun</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Kami menggunakan enkripsi tingkat lanjut untuk melindungi data pribadi Anda.</p>
</div>
</div>
</div>
</main>

<div class="h-10 w-full"></div>

<script>
async function submitLupaPassword() {
    const form = document.getElementById('lupaPasswordForm');
    const formData = new FormData(form);
    const btn = document.getElementById('btnKirim');
    
    btn.innerHTML = '<span>Mengirim...</span><span class="material-symbols-outlined animate-spin">progress_activity</span>';
    btn.disabled = true;
    
    try {
        const response = await fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json',
            }
        });
        
        const data = await response.json();
        
        if (data.status === 'success') {
            alert('Link reset password telah dikirim ke email Anda!');
            window.location.href = data.redirect;
        } else {
            alert(data.message);
            btn.innerHTML = '<span>Kirim Link Reset</span><span class="material-symbols-outlined text-xl" data-icon="send">send</span>';
            btn.disabled = false;
        }
    } catch (error) {
        alert('Terjadi kesalahan!');
        btn.innerHTML = '<span>Kirim Link Reset</span><span class="material-symbols-outlined text-xl" data-icon="send">send</span>';
        btn.disabled = false;
    }
}
</script>

</body>
</html>