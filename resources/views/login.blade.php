<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
        .backdrop-blur-custom {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>
<body class="bg-surface text-on-surface min-h-screen font-body-md selection:bg-primary-fixed selection:text-primary-container">
<!-- TopAppBar Mockup -->
<header class="fixed top-0 left-0 w-full z-50 flex items-center px-5 h-16 bg-white border-b border-slate-100 shadow-sm">
<div class="flex items-center gap-4">
<span onclick="window.location.href='{{ route('pilih.role') }}'" class="material-symbols-outlined text-slate-900 cursor-pointer active:scale-95 transition-transform" data-icon="arrow_back">arrow_back</span>
<span class="text-xl font-extrabold tracking-tight text-slate-900">DIRGA</span>
</div>
</header>

<!-- MAIN CONTENT - RESPONSIVE -->
<main class="flex min-h-screen items-center justify-center px-container-margin py-section-padding pt-24 lg:mr-[40%]">
<div class="w-full max-w-md">
<!-- Branding/Identity -->
<div class="mb-10 text-center md:text-left">
<div class="inline-flex items-center justify-center p-3 mb-6 bg-primary-container rounded-2xl shadow-lg">
<span class="material-symbols-outlined text-white text-3xl" data-icon="emoji_events" style="font-variation-settings: 'FILL' 1;">emoji_events</span>
</div>
<h1 class="font-h1 text-h1 text-on-surface mb-2">Selamat Datang Kembali</h1>
<p class="font-body-md text-on-surface-variant leading-relaxed">
                    Silakan masuk untuk melanjutkan akses ke platform perlombaan <span class="font-bold text-on-surface">DIRGA</span>.
                </p>
</div>
<!-- Login Form Container -->
<div class="bg-white rounded-[24px] p-8 shadow-[0_8px_30px_rgb(15,23,42,0.04)] border border-slate-100">
<form action="{{ route('login.post') }}" method="POST" id="loginForm" class="flex flex-col gap-6">
    @csrf
    <input type="hidden" name="role" value="{{ $role }}">
<!-- Email Field -->
<div class="space-y-2">
<label class="font-label-md text-on-surface block px-1" for="email">Email</label>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-xl" data-icon="mail">mail</span>
</div>
<input class="w-full pl-12 pr-4 py-4 bg-[#F1F5F9] border-transparent rounded-xl focus:ring-2 focus:ring-primary-container focus:bg-white focus:border-primary-container transition-all duration-200 outline-none text-body-md" id="email" name="email" placeholder="nama@email.com" required="" type="email"/>
</div>
</div>
<!-- Password Field -->
<div class="space-y-2">
<div class="flex justify-between items-center px-1">
<label class="font-label-md text-on-surface" for="password">Kata Sandi</label>
<a class="font-label-sm text-primary-container hover:underline" href="{{ route('lupa.password') }}">Lupa Kata Sandi?</a>
</div>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-xl" data-icon="lock">lock</span>
</div>
<input class="w-full pl-12 pr-12 py-4 bg-[#F1F5F9] border-transparent rounded-xl focus:ring-2 focus:ring-primary-container focus:bg-white focus:border-primary-container transition-all duration-200 outline-none text-body-md" id="password" name="password" placeholder="••••••••" required="" type="password"/>
<button onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-4 flex items-center text-outline hover:text-on-surface transition-colors" type="button">
<span id="eyeIcon" class="material-symbols-outlined text-xl" data-icon="visibility">visibility</span>
</button>
</div>
</div>
<!-- Submit Button -->
<button class="mt-2 w-full py-4 bg-primary-container text-white font-label-md rounded-xl shadow-md hover:bg-black active:scale-[0.98] transition-all duration-200 flex items-center justify-center gap-2" type="submit">
<span>Masuk</span>
<span class="material-symbols-outlined text-lg" data-icon="login">login</span>
</button>
</form>
<!-- Divider -->
<div class="relative my-8">
<div class="absolute inset-0 flex items-center">
<div class="w-full border-t border-slate-100"></div>
</div>
<div class="relative flex justify-center text-xs uppercase">
<span class="bg-white px-4 text-outline font-medium tracking-widest">Atau masuk dengan</span>
</div>
</div>
<!-- Social Login -->
<div class="grid grid-cols-2 gap-4">
<button class="flex items-center justify-center gap-2 py-3 px-4 border border-slate-200 rounded-xl hover:bg-slate-50 transition-colors active:scale-95">
<img alt="Google" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVVJ-djG7f36dWuoQwIz2qmVzKd8V528uOIbPxkeXo1bt5npOxS8PI2Ja5TUXrAFX7rgvpq6ikEhZwHewbVs4tW8s83TCZlx5NJGTMXdP2N8HXUhSdA8iwg-0jED-O3oc9UlVHaqUw9aF5aYBikvUX1g5vh23ux4kavh-paQ6J8vQHqz-UnYGa9_9hutyRupPPPDN2iE44alM2w7I50qqh5UZ9qeQ0dEXgPBczmaUpmR3q-deoJQ8uRFyi6aH-zCac3IUanQ4whxEH"/>
<span class="font-label-sm text-on-surface">Google</span>
</button>
<button class="flex items-center justify-center gap-2 py-3 px-4 border border-slate-200 rounded-xl hover:bg-slate-50 transition-colors active:scale-95">
<span class="material-symbols-outlined text-[#1877F2]" data-icon="facebook" style="font-variation-settings: 'FILL' 1;">social_leaderboard</span>
<span class="font-label-sm text-on-surface">Facebook</span>
</button>
</div>
</div>
<!-- Footer Link -->
<div class="mt-8 text-center">
<p class="font-body-md text-on-surface-variant">
                    Belum punya akun? 
                    <a class="font-bold text-primary-container hover:underline ml-1" href="{{ route('register', $role) }}">Daftar Sekarang</a>
</p>
</div>
<!-- Decorative Visual -->
<div class="mt-12 opacity-40 grayscale flex justify-center gap-8 md:justify-start">
<div class="w-12 h-1 bg-primary-container rounded-full"></div>
<div class="w-6 h-1 bg-primary-container/40 rounded-full"></div>
<div class="w-3 h-1 bg-primary-container/20 rounded-full"></div>
</div>
</div>
</main>

<!-- Side Image Decor - RESPONSIVE -->
<div class="hidden lg:block fixed right-0 top-0 w-[40%] h-full p-8">
<div class="w-full h-full rounded-[40px] overflow-hidden relative group">
<img alt="DIRGA Platform" class="w-full h-full object-cover transition-transform duration-[20s] ease-linear group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcxPStLSSL7VwxU2BKs8TMF58d4YkrZLsy0DZiuQcOgWAc4wLRWLnleIn1HTleO_sMjBET30kBXcdP9pDfV8DExvVQqdSDro6_nCY8kCJemsiPCl3Y32IHkPY0xKWCKyd2KUV_c076UcunGw7Z6gobwkPofJvUgdQJ2YVyqOmLsp3pSrway1aI5rFX-Zbglfgx9M3KgKJPg7uprZSgB_aMkK-evS5xHujxawpKUdyHRMLlakXiNV_lKz2Q-hbSriTdnrnjNMRIKK_Y"/>
<div class="absolute inset-0 bg-gradient-to-tr from-primary-container/80 to-transparent flex flex-col justify-end p-10">
<div class="max-w-md">
<span class="inline-block px-4 py-1.5 bg-teal-400 text-primary-container font-label-sm rounded-full mb-4">#LevelUpTogether</span>
<h2 class="text-2xl xl:text-3xl font-h2 text-white mb-3">Wujudkan Ambisi Anda dalam Kompetisi Bergengsi.</h2>
<p class="text-white/80 text-sm xl:text-base">Platform perlombaan digital terintegrasi untuk para profesional dan mahasiswa ambisius di seluruh Indonesia.</p>
</div>
</div>
</div>
</div>

<!-- SCRIPT LOGIN -->
<script>
// Toggle visibility password
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.textContent = 'visibility_off';
    } else {
        passwordInput.type = 'password';
        eyeIcon.textContent = 'visibility';
    }
}

// Handle login form submission
document.getElementById('loginForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitButton = this.querySelector('button[type="submit"]');
    const originalText = submitButton.innerHTML;
    
    // Loading state
    submitButton.innerHTML = '<span>Memproses...</span><span class="material-symbols-outlined text-lg animate-spin">progress_activity</span>';
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
            window.location.href = data.redirect;
        } else {
            alert(data.message);
            
            if (data.message === 'Akun tidak ditemukan!') {
                const role = document.querySelector('input[name="role"]').value;
                window.location.href = '{{ url("/register") }}/' + role;
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