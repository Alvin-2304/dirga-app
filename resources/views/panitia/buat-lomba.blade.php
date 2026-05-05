<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Buat Lomba Baru - DIRGA</title>
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
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-background font-body-md text-on-surface">

<!-- TopAppBar -->
<header class="sticky top-0 w-full flex justify-between items-center px-5 h-16 bg-white border-b border-slate-200 shadow-[0px_4px_20px_rgba(19,27,46,0.08)] z-50">
<div class="flex items-center gap-4">
<button onclick="window.history.back()" class="active:scale-95 duration-200 transition-colors hover:bg-slate-100 p-2 rounded-full">
<span class="material-symbols-outlined text-[#131b2e]" data-icon="arrow_back">arrow_back</span>
</button>
<h1 class="font-manrope text-lg font-bold text-[#131b2e]">Buat Lomba Baru</h1>
</div>
<div class="flex items-center">
<span class="text-xl font-black text-[#131b2e] tracking-tight">DIRGA</span>
</div>
</header>

<main class="max-w-4xl mx-auto px-container-margin py-xl pb-32">
<form action="{{ route('lomba.store') }}" method="POST" class="flex flex-col gap-xl">
    @csrf

<!-- Section: Info Dasar -->
<div class="bg-surface-container-lowest rounded-2xl shadow-[0px_4px_20px_rgba(19,27,46,0.08)] p-md md:p-xl border border-outline-variant/30">
<h2 class="font-display-md text-display-md text-primary-container mb-gutter">Informasi Dasar</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
<div class="md:col-span-2">
<label class="font-label-bold text-label-bold text-on-surface-variant mb-base block">Nama Lomba</label>
<input name="nama" class="w-full bg-white border border-outline-variant rounded-xl px-4 py-3 focus:border-primary-container focus:ring-1 focus:ring-primary-container outline-none transition-all font-body-md text-on-surface" placeholder="Contoh: Hackathon Nasional 2024" type="text" required/>
</div>
<div>
<label class="font-label-bold text-label-bold text-on-surface-variant mb-base block">Kategori</label>
<select name="kategori" class="w-full bg-white border border-outline-variant rounded-xl px-4 py-3 focus:border-primary-container focus:ring-1 focus:ring-primary-container outline-none transition-all font-body-md text-on-surface appearance-none">
<option value="">Pilih Kategori</option>
<option value="Teknologi">Teknologi</option>
<option value="Seni">Seni</option>
<option value="Olahraga">Olahraga</option>
<option value="Bisnis">Bisnis</option>
<option value="Sains">Sains</option>
</select>
</div>
<div>
<label class="font-label-bold text-label-bold text-on-surface-variant mb-base block">Biaya Pendaftaran</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="text-on-surface-variant font-medium">Rp</span>
</div>
<input name="biaya" class="w-full bg-white border border-outline-variant rounded-xl pl-12 pr-4 py-3 focus:border-primary-container focus:ring-1 focus:ring-primary-container outline-none transition-all font-body-md text-on-surface" placeholder="0" type="number"/>
</div>
</div>
<div class="md:col-span-2">
<label class="font-label-bold text-label-bold text-on-surface-variant mb-base block">Deskripsi Lomba</label>
<textarea name="deskripsi" class="w-full bg-white border border-outline-variant rounded-xl px-4 py-3 focus:border-primary-container focus:ring-1 focus:ring-primary-container outline-none transition-all font-body-md text-on-surface" placeholder="Jelaskan detail lomba secara umum..." rows="4"></textarea>
</div>
</div>
</div>

<!-- Section: Media & Poster -->
<div class="bg-surface-container-lowest rounded-2xl shadow-[0px_4px_20px_rgba(19,27,46,0.08)] p-md md:p-xl border border-outline-variant/30">
<h2 class="font-display-md text-display-md text-primary-container mb-gutter">Upload Poster</h2>
<div class="relative group cursor-pointer border-2 border-dashed border-outline-variant rounded-2xl bg-surface-container-low hover:bg-surface-container-high transition-colors aspect-video flex flex-col items-center justify-center overflow-hidden" onclick="document.getElementById('poster').click()">
<img class="absolute inset-0 w-full h-full object-cover opacity-20" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8eby1npqc38VtnUzZP0EjiMBL8nfcCCZQM4od2Y5pJG7f3YGfsMD49VnuU9g8kHfoEqT5NyFCp680pNvaYZHmsWpWApbUKbDlFFZIuBmBd_PvcrTXgosEWI2i2VlSqbIFcwmBu4LjJNQfBp3L5wCcPhVLIMqVQPYdoZYaxkRbPVvJuA_GznpfTY7HrIUJTdHyinJM2b2SjQRBTAcJh988yDFjGcJReXQf5JAHs_s2AkvfdHIGkITaPFMA4YPZn379hTUnAgn9QVDC"/>
<div class="relative z-10 flex flex-col items-center">
<span class="material-symbols-outlined text-4xl text-on-primary-container mb-xs" data-icon="upload_file">upload_file</span>
<p class="font-body-md font-semibold text-primary-container">Klik untuk upload poster</p>
<p class="font-body-sm text-on-surface-variant">Rekomendasi ukuran 1200x630px (Max 5MB)</p>
</div>
<input name="poster" id="poster" type="file" accept="image/*" class="hidden"/>
</div>
</div>

<!-- Section: Timeline & Hadiah -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-xl">

<!-- Timeline Card -->
<div class="bg-surface-container-lowest rounded-2xl shadow-[0px_4px_20px_rgba(19,27,46,0.08)] p-md md:p-xl border border-outline-variant/30">
<h2 class="font-display-md text-display-md text-primary-container mb-gutter">Timeline</h2>
<div class="space-y-lg">
<div>
<label class="font-label-bold text-label-bold text-on-surface-variant mb-base block">Pendaftaran Mulai</label>
<input name="tanggal_mulai" class="w-full bg-white border border-outline-variant rounded-xl px-4 py-3 focus:border-primary-container focus:ring-1 focus:ring-primary-container outline-none transition-all font-body-md text-on-surface" type="date"/>
</div>
<div>
<label class="font-label-bold text-label-bold text-on-surface-variant mb-base block">Batas Pengumpulan</label>
<input name="deadline" class="w-full bg-white border border-outline-variant rounded-xl px-4 py-3 focus:border-primary-container focus:ring-1 focus:ring-primary-container outline-none transition-all font-body-md text-on-surface" type="date"/>
</div>
<div>
<label class="font-label-bold text-label-bold text-on-surface-variant mb-base block">Pengumuman Pemenang</label>
<input name="tanggal_pengumuman" class="w-full bg-white border border-outline-variant rounded-xl px-4 py-3 focus:border-primary-container focus:ring-1 focus:ring-primary-container outline-none transition-all font-body-md text-on-surface" type="date"/>
</div>
</div>
</div>

<!-- Prize Card -->
<div class="bg-surface-container-lowest rounded-2xl shadow-[0px_4px_20px_rgba(19,27,46,0.08)] p-md md:p-xl border border-outline-variant/30">
<h2 class="font-display-md text-display-md text-primary-container mb-gutter">Hadiah</h2>
<div class="space-y-lg">
<div class="grid grid-cols-2 gap-gutter">
<div class="col-span-2">
<label class="font-label-bold text-label-bold text-on-surface-variant mb-base block">Total Hadiah</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="text-on-surface-variant font-medium">Rp</span>
</div>
<input name="total_hadiah" class="w-full bg-slate-50 border border-outline-variant rounded-xl pl-12 pr-4 py-3 focus:border-primary-container font-bold text-primary-container" placeholder="Total" type="number"/>
</div>
</div>
<div>
<label class="font-label-bold text-label-bold text-on-surface-variant mb-base block">Juara 1</label>
<input name="juara_1" class="w-full bg-white border border-outline-variant rounded-xl px-4 py-3 focus:border-primary-container font-body-md" placeholder="Rp" type="number"/>
</div>
<div>
<label class="font-label-bold text-label-bold text-on-surface-variant mb-base block">Juara 2</label>
<input name="juara_2" class="w-full bg-white border border-outline-variant rounded-xl px-4 py-3 focus:border-primary-container font-body-md" placeholder="Rp" type="number"/>
</div>
<div class="col-span-2">
<label class="font-label-bold text-label-bold text-on-surface-variant mb-base block">Juara 3</label>
<input name="juara_3" class="w-full bg-white border border-outline-variant rounded-xl px-4 py-3 focus:border-primary-container font-body-md" placeholder="Rp" type="number"/>
</div>
</div>
</div>
</div>
</div>

<!-- Section: Ketentuan -->
<div class="bg-surface-container-lowest rounded-2xl shadow-[0px_4px_20px_rgba(19,27,46,0.08)] p-md md:p-xl border border-outline-variant/30">
<h2 class="font-display-md text-display-md text-primary-container mb-gutter">Ketentuan &amp; Peraturan</h2>
<textarea name="ketentuan" class="w-full bg-white border border-outline-variant rounded-xl px-4 py-3 focus:border-primary-container focus:ring-1 focus:ring-primary-container outline-none transition-all font-body-md text-on-surface" placeholder="Sebutkan syarat peserta, format karya, dan ketentuan diskualifikasi secara detail..." rows="6"></textarea>
</div>

</form>
</main>

<!-- Fixed Bottom Actions -->
<div class="fixed bottom-0 left-0 w-full bg-white border-t border-slate-100 shadow-[0px_-4px_20px_rgba(19,27,46,0.06)] px-container-margin py-gutter z-50">
<div class="max-w-4xl mx-auto flex gap-gutter">
<button class="flex-1 border-2 border-primary-container text-primary-container font-bold py-3.5 px-xl rounded-2xl active:scale-95 transition-all hover:bg-slate-50">
                Simpan Draft
            </button>
<button onclick="document.querySelector('form').submit()" class="flex-[1.5] bg-primary-container text-white font-bold py-3.5 px-xl rounded-2xl shadow-lg active:scale-95 transition-all hover:bg-[#1e2a47]">
                Publish Lomba
            </button>
</div>
</div>

</body>
</html>