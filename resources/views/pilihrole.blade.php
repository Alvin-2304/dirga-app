<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-primary-container": "#7c839b",
                    "tertiary-container": "#0d1c2d",
                    "surface-tint": "#565e74",
                    "primary-container": "#131b2e",
                    "on-error-container": "#93000a",
                    "on-primary-fixed": "#131b2e",
                    "secondary": "#5c5f61",
                    "outline": "#76777d",
                    "surface-dim": "#dcd9db",
                    "on-tertiary-fixed": "#0d1c2d",
                    "error-container": "#ffdad6",
                    "outline-variant": "#c6c6cd",
                    "inverse-on-surface": "#f3f0f2",
                    "surface-container-highest": "#e4e2e4",
                    "secondary-fixed": "#e0e3e5",
                    "secondary-fixed-dim": "#c4c7c9",
                    "surface-variant": "#e4e2e4",
                    "tertiary-fixed": "#d4e4fa",
                    "on-tertiary-fixed-variant": "#39485a",
                    "on-secondary-fixed": "#191c1e",
                    "on-error": "#ffffff",
                    "on-background": "#1b1b1d",
                    "on-tertiary-container": "#768599",
                    "on-primary": "#ffffff",
                    "on-secondary-fixed-variant": "#444749",
                    "tertiary-fixed-dim": "#b9c8de",
                    "on-secondary": "#ffffff",
                    "surface-container-low": "#f6f3f5",
                    "surface-container-lowest": "#ffffff",
                    "error": "#ba1a1a",
                    "on-surface-variant": "#45464d",
                    "inverse-primary": "#bec6e0",
                    "on-tertiary": "#ffffff",
                    "surface-bright": "#fcf8fa",
                    "surface-container-high": "#eae7e9",
                    "on-primary-fixed-variant": "#3f465c",
                    "tertiary": "#000000",
                    "primary": "#000000",
                    "surface-container": "#f0edef",
                    "inverse-surface": "#303032",
                    "on-secondary-container": "#626567",
                    "secondary-container": "#e0e3e5",
                    "surface": "#fcf8fa",
                    "primary-fixed": "#dae2fd",
                    "on-surface": "#1b1b1d",
                    "primary-fixed-dim": "#bec6e0",
                    "background": "#fcf8fa"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "section-padding": "24px",
                    "grid-columns": "4",
                    "stack-gap": "16px",
                    "container-margin": "20px",
                    "element-gap": "12px"
            },
            "fontFamily": {
                    "h3": ["Manrope"],
                    "h1": ["Manrope"],
                    "body-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "h2": ["Manrope"],
                    "body-md": ["Inter"],
                    "label-sm": ["Inter"]
            },
            "fontSize": {
                    "h3": ["20px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "600"}],
                    "h1": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "400"}],
                    "h2": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.04em", "fontWeight": "500"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-card {
            border: 2px solid #000;
            background-color: #f8fafc;
        }
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>
<body class="bg-background font-body-md text-on-background min-h-screen flex flex-col">
<div class="max-w-md mx-auto w-full min-h-screen flex flex-col">
<main class="flex-grow flex items-center justify-center px-container-margin py-section-padding">
<div class="max-w-md w-full">
<div class="text-center mb-10">
<h1 class="font-h1 text-h1 text-primary mb-2">Pilih Peran</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Silakan pilih peran Anda untuk memulai</p>
</div>
<div class="grid grid-cols-1 gap-stack-gap mb-10">
<button onclick="pilihRole('peserta')" class="group relative flex items-center p-6 bg-surface-container-lowest rounded-xl border border-outline-variant shadow-[0_4px_20px_rgba(15,23,42,0.04)] transition-all duration-300 hover:shadow-xl hover:scale-[1.02] active:scale-95 text-left w-full">
<div class="w-14 h-14 rounded-full bg-primary-container flex items-center justify-center mr-5 shrink-0 transition-colors group-hover:bg-primary">
<span class="material-symbols-outlined text-white text-3xl" data-icon="person">person</span>
</div>
<div class="flex-grow">
<h3 class="font-h3 text-h3 text-primary">Peserta</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Ikuti berbagai perlombaan</p>
</div>
<div class="ml-4 text-outline-variant group-hover:text-primary transition-colors">
<span class="material-symbols-outlined text-2xl" data-icon="chevron_right">chevron_right</span>
</div>
</button>

<button onclick="pilihRole('panitia')" class="group relative flex items-center p-6 bg-surface-container-lowest rounded-xl border border-outline-variant shadow-[0_4px_20px_rgba(15,23,42,0.04)] transition-all duration-300 hover:shadow-xl hover:scale-[1.02] active:scale-95 text-left w-full">
<div class="w-14 h-14 rounded-full bg-secondary-container flex items-center justify-center mr-5 shrink-0 transition-colors group-hover:bg-primary-container">
<span class="material-symbols-outlined text-primary-container text-3xl group-hover:text-white" data-icon="admin_panel_settings">admin_panel_settings</span>
</div>
<div class="flex-grow">
<h3 class="font-h3 text-h3 text-primary">Panitia</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Kelola dan buat perlombaan</p>
</div>
<div class="ml-4 text-outline-variant group-hover:text-primary transition-colors">
<span class="material-symbols-outlined text-2xl" data-icon="chevron_right">chevron_right</span>
</div>
</button>
</div>

<div class="space-y-4">
<button onclick="lanjutkan()" class="w-full h-14 bg-primary text-on-primary font-label-md text-label-md rounded-xl flex items-center justify-center transition-all duration-200 active:scale-95 shadow-lg shadow-primary/10 bg-gradient-to-r from-slate-900 to-slate-800">
    Lanjutkan
</button>
<button onclick="window.location.href='/'" class="w-full h-14 bg-transparent border border-outline-variant text-primary font-label-md text-label-md rounded-xl flex items-center justify-center transition-all duration-200 hover:bg-surface-container-low active:scale-95">
    Kembali
</button>
</div>
</div>
</main>
<footer class="py-8 px-container-margin text-center">
<p class="font-label-sm text-label-sm text-on-surface-variant opacity-60">© 2024 DIRGA Competition Platform. Seluruh hak cipta.</p>
</footer>
</div>

<script>
let roleDipilih = '';

function pilihRole(role) {
    roleDipilih = role;
    
    // Hapus highlight dari semua button
    document.querySelectorAll('button.group').forEach(btn => {
        btn.style.borderColor = '';
        btn.style.boxShadow = '';
    });
    
    // Tambahin highlight ke button yang dipilih
    event.currentTarget.style.borderColor = '#3b82f6';
    event.currentTarget.style.boxShadow = '0 0 0 2px #3b82f6';
}

function lanjutkan() {
    if (roleDipilih === '') {
        alert('Silakan pilih peran terlebih dahulu!');
        return;
    }
    
    if (roleDipilih === 'peserta') {
        window.location.href = '{{ route("login", "peserta") }}';
    } else if (roleDipilih === 'panitia') {
        window.location.href = '{{ route("login", "panitia") }}';
    }
}
</script>
</body>
</html>