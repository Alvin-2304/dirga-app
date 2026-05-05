<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DIRGA - Platform Perlombaan Digital</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 48;
        }
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
    </style>
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
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-primary-container text-on-primary">
<!-- Splash Screen Container -->
<main class="relative h-screen w-full flex flex-col items-center justify-center overflow-hidden bg-gradient-to-b from-primary-container via-[#1a243d] to-[#0a1120]">
<!-- Abstract Background Ornaments for Modern Professional Look -->
<div class="absolute top-[-10%] right-[-10%] w-[600px] h-[600px] bg-[#2a375a] opacity-20 blur-[120px] rounded-full"></div>
<div class="absolute bottom-[-15%] left-[-5%] w-[500px] h-[500px] bg-on-tertiary-container opacity-10 blur-[100px] rounded-full"></div>
<!-- Center Content: Logo & Tagline -->
<div class="relative z-10 flex flex-col items-center gap-6">
<!-- Modern Minimalist Wordmark Logo -->
<div class="flex flex-col items-center">
<div class="mb-4 flex items-center justify-center w-24 h-24 rounded-3xl bg-white shadow-[0_20px_50px_rgba(0,0,0,0.3)]">
<span class="material-symbols-outlined text-primary-container text-6xl font-light" data-icon="emoji_events">emoji_events</span>
</div>
<!-- Brand Headline -->
<h1 class="font-h1 text-[64px] font-black tracking-tighter text-white">
                    DIRGA
                </h1>
</div>
<!-- Tagline Section -->
<div class="flex flex-col items-center gap-2">
<p class="font-h3 text-h3 text-on-primary-container uppercase tracking-[0.25em] opacity-80">
                    Platform Perlombaan Digital
                </p>
<!-- Decorative Progress Line -->
<div class="mt-8 w-12 h-1 bg-on-primary-container/30 rounded-full overflow-hidden">
<div class="w-1/3 h-full bg-white rounded-full"></div>
</div>
</div>
</div>
<!-- Hero Decorative Image (Asymmetric/Modern) -->
<div class="absolute bottom-0 w-full h-[40%] flex justify-center opacity-30 pointer-events-none">
<img alt="Cyber Infrastructure" class="w-full h-full object-cover mix-blend-overlay" data-alt="A sophisticated network of glowing data streams and digital connection points forming an abstract geometric structure. The style is hyper-modern and professional, utilizing deep navy blues and sharp cyan accents to convey advanced technology and competition. Lighting is cinematic and focused, with soft bokeh effects in the background. The mood is ambitious and focused, fitting for a high-end digital competition platform." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCm5yiASTR9qxeu1OJc0HoYVM4nugNMbQkjxvu8OO7bY4tJtkJmNWHGkI2wYV2J12HhfBJCKw4EFlUMeIztY53mEiAeGyXv_1hXGebqUa6HG6SpopBDtxcusyfwacfvhyhk6_-ZtAHT_EViFRFqaKfJS8UunSOGtoJHDcGjJaoIebJuHkYIZTBfd8WJ0BpkQQ_cnn65vMt4CQkTX3atlH8r369zUu-45kntVF5Cy4T7XPPWAcV12VwnqM0zO28qHqdeOVAYdiP9-NDF"/>
</div>
<!-- Footer / Version Info -->
<div class="absolute bottom-12 flex flex-col items-center gap-1">
<p class="font-label-sm text-label-sm text-on-primary-container/50">
                Inovasi Indonesia © 2024
            </p>
</div>
</main>
<script>
    // Redirect otomatis setelah 3 detik (3000 milidetik)
    setTimeout(function() {
        window.location.href = "{{ route('pilih.role') }}";
    }, 3000);
</script>
<!-- Contextual FAB Suppression: Not rendered on splash screen as per mandate -->
<!-- Navigation Shell Suppression: Not rendered on linear/transactional screen as per mandate -->
</body></html>