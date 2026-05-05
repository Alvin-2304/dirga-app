<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "surface": "#fcf8fa",
                      "on-surface-variant": "#45464d",
                      "on-primary-container": "#7c839b",
                      "inverse-on-surface": "#f3f0f2",
                      "on-tertiary": "#ffffff",
                      "on-primary-fixed-variant": "#3f465c",
                      "surface-container-high": "#eae7e9",
                      "background": "#fcf8fa",
                      "primary-container": "#131b2e",
                      "surface-container-lowest": "#ffffff",
                      "surface-container-highest": "#e4e2e4",
                      "error": "#ba1a1a",
                      "tertiary-fixed": "#d4e4fa",
                      "tertiary-container": "#0d1c2d",
                      "surface-container": "#f0edef",
                      "on-primary": "#ffffff",
                      "on-secondary-fixed-variant": "#444749",
                      "on-secondary": "#ffffff",
                      "tertiary-fixed-dim": "#b9c8de",
                      "primary-fixed-dim": "#bec6e0",
                      "on-surface": "#1b1b1d",
                      "on-secondary-fixed": "#191c1e",
                      "inverse-primary": "#bec6e0",
                      "on-error": "#ffffff",
                      "on-background": "#1b1b1d",
                      "inverse-surface": "#303032",
                      "surface-container-low": "#f6f3f5",
                      "surface-variant": "#e4e2e4",
                      "secondary-container": "#e0e3e5",
                      "secondary": "#5c5f61",
                      "on-error-container": "#93000a",
                      "tertiary": "#000000",
                      "surface-bright": "#fcf8fa",
                      "surface-dim": "#dcd9db",
                      "primary": "#000000",
                      "secondary-fixed-dim": "#c4c7c9",
                      "on-tertiary-container": "#768599",
                      "primary-fixed": "#dae2fd",
                      "outline-variant": "#c6c6cd",
                      "error-container": "#ffdad6",
                      "on-tertiary-fixed-variant": "#39485a",
                      "surface-tint": "#565e74",
                      "on-secondary-container": "#626567",
                      "secondary-fixed": "#e0e3e5",
                      "on-tertiary-fixed": "#0d1c2d",
                      "on-primary-fixed": "#131b2e",
                      "outline": "#76777d"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "stack-gap": "16px",
                      "section-padding": "24px",
                      "grid-columns": "4",
                      "container-margin": "20px",
                      "element-gap": "12px"
              },
              "fontFamily": {
                      "body-sm": ["Inter"],
                      "h1": ["Manrope"],
                      "label-md": ["Inter"],
                      "body-md": ["Inter"],
                      "body-lg": ["Inter"],
                      "h3": ["Manrope"],
                      "h2": ["Manrope"],
                      "label-sm": ["Inter"]
              },
              "fontSize": {
                      "body-sm": ["14px", {"lineHeight": "20px", "letterSpacing": "0", "fontWeight": "400"}],
                      "h1": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                      "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                      "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "400"}],
                      "h3": ["20px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "600"}],
                      "h2": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
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
        .register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #F8FAFC;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(15, 23, 42, 0.05);
            box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.08);
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>
<body class="bg-background font-body-md text-on-background">
<main class="register-container px-5 py-section-padding">
<div class="grid grid-cols-1 md:grid-cols-12 gap-8 max-w-5xl w-full items-center">
<!-- Left Side: Brand & Visual Content -->
<div class="hidden md:flex md:col-span-6 flex-col justify-center space-y-8 p-8">
<div class="flex items-center gap-3">
<div class="w-12 h-12 bg-primary-container rounded-xl flex items-center justify-center">
<span class="material-symbols-outlined text-white text-3xl">emoji_events</span>
</div>
<span class="font-h1 text-h2 tracking-tighter text-primary">DIRGA</span>
</div>
<div class="space-y-4">
<h1 class="font-h1 text-h1 text-primary leading-tight">Mulai Perjalanan Kompetisi Anda Sekarang.</h1>
<p class="font-body-md text-on-surface-variant max-w-md">
                        Bergabunglah dengan ribuan talenta berbakat di seluruh negeri dalam berbagai ajang perlombaan bergengsi.
                    </p>
</div>
<div class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-2xl">
<img class="object-cover w-full h-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlaPG9nRBxTCVqu1xkmdNlzomWwJdU6675P1YUKtvol_e16nIQnOfPDO85NesKu7_QD7C3X-h4bK0j-HW3EGj2AfUAxLYEFEvl83uMiix9GuVc1ZqAo7SziUELHveHam1CK7Si69Y23a9cwlBPmw1tKoHBtTig74NDeK5kRPY1UaFr6dr-pQ1UVrF_UQ9tvz18ggI6DOU8YTmXbZ2ZwBlcKL61BvjaRYOPpSMn1_asfmFcKFKMgf6V9q4Ho3ZjEgHZ5WbtPwNL44gn"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary-container/60 to-transparent"></div>
<div class="absolute bottom-6 left-6 right-6">
<div class="bg-white/10 backdrop-blur-md p-4 rounded-xl border border-white/20">
<p class="text-white font-label-md">"Platform terbaik untuk mengelola kompetisi akademik maupun profesional."</p>
<p class="text-white/70 font-label-sm mt-1">— Dr. Ahmad S., Ketua Penyelenggara</p>
</div>
</div>
</div>
</div>
<!-- Right Side: Registration Form Card -->
<div class="md:col-span-6 w-full">
<div class="glass-card rounded-2xl p-8 md:p-10">
<!-- Brand Logo for Mobile -->
<div class="md:hidden flex items-center gap-2 mb-8">
<div class="w-8 h-8 bg-primary-container rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-white text-xl">emoji_events</span>
</div>
<span class="font-h1 text-h3 tracking-tighter text-primary">DIRGA</span>
</div>
<div class="mb-8">
<h2 class="font-h2 text-h2 text-primary">Daftar Akun Baru</h2>
<p class="font-body-sm text-on-surface-variant mt-2">Buat akun Anda untuk mulai mengikuti atau mengelola berbagai perlombaan.</p>
</div>
<form action="{{ route('register.post') }}" method="POST" id="registerForm" class="space-y-5">
    @csrf
    <input type="hidden" name="role" value="{{ $role }}">
<!-- Nama Lengkap -->
<div class="space-y-2">
<label class="font-label-md text-primary" for="name">Nama Lengkap</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">person</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface-container-low border-transparent rounded-lg focus:ring-2 focus:ring-primary-container/20 focus:border-primary-container transition-all text-body-md" id="name" name="name" placeholder="Masukkan nama lengkap" type="text" required/>
</div>
</div>
<!-- Email -->
<div class="space-y-2">
<label class="font-label-md text-primary" for="email">Email</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">mail</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface-container-low border-transparent rounded-lg focus:ring-2 focus:ring-primary-container/20 focus:border-primary-container transition-all text-body-md" id="email" name="email" placeholder="contoh@email.com" type="email" required/>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<!-- Kata Sandi -->
<div class="space-y-2">
<label class="font-label-md text-primary" for="password">Kata Sandi</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">lock</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface-container-low border-transparent rounded-lg focus:ring-2 focus:ring-primary-container/20 focus:border-primary-container transition-all text-body-md" id="password" name="password" placeholder="••••••••" type="password" required/>
</div>
</div>
<!-- Konfirmasi Kata Sandi -->
<div class="space-y-2">
<label class="font-label-md text-primary" for="password_confirmation">Konfirmasi Kata Sandi</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">key</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface-container-low border-transparent rounded-lg focus:ring-2 focus:ring-primary-container/20 focus:border-primary-container transition-all text-body-md" id="password_confirmation" name="password_confirmation" placeholder="••••••••" type="password" required/>
</div>
</div>
</div>
<div class="flex items-start gap-3 py-2">
<input class="mt-1 rounded text-primary-container focus:ring-primary-container" id="terms" type="checkbox" required/>
<label class="font-body-sm text-on-surface-variant" for="terms">
                                Saya menyetujui <a class="text-primary-container font-semibold hover:underline" href="#">Syarat &amp; Ketentuan</a> serta <a class="text-primary-container font-semibold hover:underline" href="#">Kebijakan Privasi</a>.
                            </label>
</div>
<!-- Submit Button -->
<button class="w-full bg-primary-container text-white font-label-md py-4 rounded-xl shadow-lg shadow-primary-container/20 active:scale-95 transition-transform flex items-center justify-center gap-2" type="submit" id="submitBtn">
                            Daftar
                            <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
</form>
<div class="mt-10 pt-6 border-t border-surface-container-high text-center">
<p class="font-body-sm text-on-surface-variant">
                            Sudah punya akun? <a class="text-primary-container font-bold hover:underline" href="{{ route('login', $role) }}">Masuk di sini</a>
</p>
</div>
</div>
<!-- Accessibility Footer -->
<div class="mt-8 text-center">
<p class="font-label-sm text-on-surface-variant/60 uppercase tracking-widest">
                        © 2024 DIRGA Ecosystem. All Rights Reserved.
                    </p>
</div>
</div>
</div>
</main>

<!-- SCRIPT REGISTER -->
<script>
document.getElementById('registerForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    // Validasi password confirmation
    const password = document.getElementById('password').value;
    const passwordConfirmation = document.getElementById('password_confirmation').value;
    
    if (password !== passwordConfirmation) {
        alert('Konfirmasi kata sandi tidak cocok!');
        return;
    }
    
    if (password.length < 6) {
        alert('Kata sandi minimal 6 karakter!');
        return;
    }
    
    const formData = new FormData(this);
    const submitButton = document.getElementById('submitBtn');
    const originalText = submitButton.innerHTML;
    
    // Loading state
    submitButton.innerHTML = '<span>Memproses...</span><span class="material-symbols-outlined text-[20px] animate-spin">progress_activity</span>';
    submitButton.disabled = true;
    
    try {
        const response = await fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json',
            }
        });
        
        const data = await response.json();
        
        if (data.status === 'success') {
            // Tampilkan pop-up sukses
            alert(data.message);
            // Redirect ke halaman login sesuai role
            window.location.href = '{{ route("login", $role) }}';
        } else {
            // Tampilkan error
            if (response.status === 422) {
                const errors = data.errors;
                let errorMessage = '';
                for (const key in errors) {
                    errorMessage += errors[key].join('\n') + '\n';
                }
                alert(errorMessage);
            } else {
                alert(data.message || 'Terjadi kesalahan!');
            }
            submitButton.innerHTML = originalText;
            submitButton.disabled = false;
        }
    } catch (error) {
        alert('Terjadi kesalahan! Silakan coba lagi.');
        submitButton.innerHTML = originalText;
        submitButton.disabled = false;
    }
});
</script>
</body>
</html>