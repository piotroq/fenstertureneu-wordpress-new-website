# Fenster-Türen24 — WordPress Modernizacja & Rebuild 🪟🚪

**Repozytorium GitHub:** [piotroq/fenstertureneu-wordpress-new-website](https://github.com/piotroq/fenstertureneu-wordpress-new-website)

---

## 📋 Przegląd projektu

Projekt modernizacji i rebuild'u witryny **Fenster-Türen24** — fachbetriebu specjalizującego się w sprzedaży, doradztwie i montażu okien/drzwi (aluminium, PVC, drewna) w regionie NRW (Marl, Recklinghausen, Dorsten, Bottrop, Gelsenkirchen, Herten, Gladbeck, Haltern am See), Niemcy.

### 🎯 Kluczowe cele

- ✅ **Rebuild WordPress** z child theme'em `responsywny-child` na bazie motywu "SzybkiKontakt Responsywny"
- ✅ **Brand identity** — implementacja kolorystyki, typografii i tone of voice z Brandbook
- ✅ **PageSpeed Insights & Lighthouse 90+** (mobile-first) — optymalizacja performance
- ✅ **WCAG AA accessibility** — dostępność dla wszystkich użytkowników
- ✅ **SEO optimization** — Schema.org JSON-LD, local SEO, NAP consistency fixes, lang="de-DE"
- ✅ **Premium design** — Bootstrap v5.3.8, GSAP animations, Anime.js, Motion One
- ✅ **Image optimization** — lazy loading, WebP/AVIF serving, code splitting

### 🛠️ Tech Stack

```
Frontend:      Bootstrap 5.3.8 | GSAP 3.12+ | Anime.js 3.2+ | Motion One 10+
               Google Fonts (Montserrat, Source Sans 3, IBM Plex Mono)
               Bootstrap Icons | Webpack 5 bundling

CMS:           WordPress (Latest) + Custom Child Theme (responsywny-child)
               Edytor treści: Klasyczny | Widżety: Klasyczne

Backend:       PHP 8.1+ | MySQL 8.0+ | Redis 7 (caching)
               Composer (PHP dependency management)

DevOps:        Docker | Docker Compose | Nginx (reverse proxy)
               Multi-stage builds | Health checks | Volumes persistence

SEO:           All in One SEO Pro v4.9.0+ | Contact Form 7 | Open Graph
               Custom Plugins: fts-schema-markup, fts-seo-enhancements,
                              fts-performance, fts-landing-pages

Security:      WPS Hide Login | Content Security Policy (CSP)
               CSRF protection (nonces) | Input sanitization | .env variables
```

---

## 🚀 Szybki Start — Local Development Setup

### 📦 Wymagania systemowe

- **Docker Desktop** (v4.10+) — https://www.docker.com/products/docker-desktop
- **Docker Compose** (v2.0+) — instalowana razem z Docker Desktop
- **Git** (v2.30+) — https://git-scm.com/
- **Node.js** (v16+, opcjonalnie dla localnych build'ów) — https://nodejs.org/
- **Minimum 4 GB RAM** dostępnej dla kontenerów

### 1️⃣ Klonowanie repozytorium

```bash
git clone https://github.com/piotroq/fenstertureneu-wordpress-new-website.git
cd fenstertureneu-wordpress-new-website
```

### 2️⃣ Setup zmiennych środowiskowych

```bash
# Kopiuj plik example do .env (dla development)
cp .env.example .env

# Edytuj .env (opcjonalnie):
# - DB_NAME=fenstertureneu_dev
# - DB_USER=wordpress
# - DB_PASSWORD=securepassword123
# - WP_SITE_URL=http://localhost:9000
```

### 3️⃣ Uruchomienie Docker environment

```bash
# Uruchomienie wszystkich serwisów (WordPress, MySQL, Redis, Nginx, phpMyAdmin)
docker-compose up -d

# Czekaj na inicjalizację (60-120 sekund)
docker-compose logs -f wordpress

# Po zakończeniu inicjalizacji (widoczny log bez błędów):
# Ctrl+C, aby wyjść z logów

# Weryfikacja statusu kontenerów
docker-compose ps
```

### 4️⃣ WordPress setup (first-time installation)

```bash
# Zaloguj się do WordPress container
docker-compose exec wordpress bash

# Instalacja WordPress (jeśli nie istnieje)
wp core install \
  --url="http://localhost:9000" \
  --title="Fenster-Türen24" \
  --admin_user="admin" \
  --admin_password="AdminPass2025!" \
  --admin_email="admin@fenster-tueren24.eu" \
  --skip-email

# Aktywacja child theme (responsywny-child)
wp theme activate responsywny-child

# Instalacja + aktywacja required plugins
wp plugin install all-in-one-seo-pack contact-form-7 open-graph wps-hide-login --activate

# Instalacja custom plugins (z wp-content/plugins)
wp plugin activate fts-schema-markup
wp plugin activate fts-seo-enhancements
wp plugin activate fts-performance
wp plugin activate fts-landing-pages

# Ustawienie opcji WordPress (German language, brand colors, etc.)
wp option update blogname "Fenster-Türen24"
wp option update blogdescription "Ihr Fensterfachbetrieb im Ruhrgebiet"
wp language install de_DE --activate

# Wyjście z container
exit
```

### 5️⃣ Frontend dependencies (SCSS compilation, Webpack bundling)

```bash
# Instalacja NPM dependencies (Bootstrap, GSAP, Anime.js, etc.)
npm install

# Build frontend assets (SCSS → CSS, JS bundling)
npm run build

# (Opcjonalnie) Watch mode dla development
npm run dev
```

### 6️⃣ Weryfikacja setup'u

```bash
# Odwiedź poniższe adresy:
# WordPress Frontend:    http://localhost:9000/
# WordPress Admin:       http://localhost:9000/wp-admin/
# phpMyAdmin (MySQL):    http://localhost:9004/
# Nginx logs:            docker-compose logs -f nginx

# Performance checks
npm run lighthouse       # Lighthouse audit
npm run a11y           # Accessibility audit
npm run seo-check      # SEO quick validation
```

### 🎛️ Docker Ports Mapping

| Service | Port | URL | Opis |
|---------|------|-----|------|
| **WordPress** | 9000 | http://localhost:9000 | Frontend & Admin |
| **MySQL** | 9001 | localhost:9001 | Database (MySQL CLI) |
| **Redis** | 9002 | localhost:9002 | Cache layer |
| **Nginx** | 9003 | - | Reverse proxy (internal) |
| **phpMyAdmin** | 9004 | http://localhost:9004 | MySQL GUI |

**Zmiana portów:** Edytuj `.env` lub `docker-compose.yml` i zmień `ports` sekcję.

---

## 📁 Rzeczywista struktura katalogów (z GitHub)

```
fenstertureneu-wordpress-new-website/
│
├── 📁 .github/
│   └── workflows/                   # GitHub Actions (CI/CD, auto-deploy opcjonalnie)
│
├── 📁 ANALIZA/                      # Raporty analityczne, research, competitive analysis
│   └── (Raporty z Raport_analityczny_Fenster-Türen24.md)
│
├── 📁 SCREENSHOTS/                  # Screenshoty inspirujące (Gatre template, current state, progress)
│   └── (Screenshots stron referencyjnych do analizy)
│
├── 📁 config/                       # Konfiguracja aplikacji i environment
│   ├── .env.example                 # Template zmiennych środowiskowych
│   ├── .env.local                   # Local overrides (⚠️ NOT in git)
│   ├── php.ini                      # PHP konfiguracja (memory_limit, upload_max_filesize, OPcache)
│   ├── nginx.conf                   # Nginx vhost config (SSL, compression, caching headers)
│   └── wp-config-local.php          # Local WordPress config (database constants)
│
├── 📁 docker/                       # Docker configuration
│   ├── Dockerfile                   # Multi-stage build (WordPress + PHP 8.1 + tools)
│   ├── entrypoint.sh               # Container initialization (DB setup, plugin activation)
│   ├── php.ini                      # PHP settings (opcjonalnie override w docker-compose.yml)
│   └── nginx.conf                   # Nginx reverse proxy config
│
├── 📁 docs/                         # Dokumentacja dla developera
│   ├── ARCHITECTURE.md              # Technical decisions & rationale
│   ├── SETUP.md                     # Detailed setup instructions
│   ├── SEO-IMPLEMENTATION.md        # Schema.org, NAP fixes, local SEO strategy
│   ├── PERFORMANCE-OPTIMIZATION.md  # Image optimization, CWV strategy, Lighthouse 90+
│   ├── SECURITY-CHECKLIST.md        # Security best practices
│   ├── PLUGIN-DEVELOPMENT.md        # Guide dla custom plugins
│   ├── THEME-CUSTOMIZATION.md       # Child theme extension guide
│   ├── DEPLOYMENT.md                # Production deployment checklist
│   └── BRAND-IMPLEMENTATION.md      # Brand colors, typography, design system
│
├── 📁 scripts/                      # Automation scripts (Bash)
│   ├── install-wordpress.sh         # WordPress initial setup + activation
│   ├── import-demo-content.sh       # Demo content import
│   ├── optimize-images.sh           # Batch image optimization (WebP, AVIF)
│   ├── backup-database.sh           # Database backup automation
│   ├── generate-sitemaps.sh         # XML sitemap generation
│   ├── deploy-staging.sh            # Deploy to staging environment
│   └── deploy-production.sh         # Deploy to production
│
├── 📁 sql/                          # Database files & migrations
│   ├── fenstertureneu_initial.sql   # Initial database dump (opcjonalnie)
│   ├── migrations/                  # SQL migration files (por version)
│   │   ├── 001-add-landing-pages.sql
│   │   └── 002-add-schema-markup.sql
│   └── fixtures/                    # Test data (demo content)
│
├── 📁 wp-content/                   # WordPress custom content
│   │
│   ├── 📁 themes/
│   │   └── 📁 responsywny-child/    # ⭐ Child theme dla "Responsywny" parent
│   │       │
│   │       ├── 📁 assets/
│   │       │   ├── 📁 css/
│   │       │   │   ├── _variables.scss        # SCSS variables (brandbook: kolory, fonty, spacing)
│   │       │   │   ├── _utilities.scss        # Bootstrap utility extensions
│   │       │   │   ├── _animations.scss       # GSAP/Anime.js keyframes
│   │       │   │   ├── _components.scss       # Custom component styles
│   │       │   │   ├── _responsive.scss       # Mobile-first media queries
│   │       │   │   ├── _accessibility.scss    # WCAG AA improvements (focus, contrast)
│   │       │   │   ├── _forms.scss            # Contact Form 7 styling
│   │       │   │   ├── _header-footer.scss    # Navigation, sticky menu styles
│   │       │   │   ├── style.css              # Main stylesheet (compiled SCSS)
│   │       │   │   └── editor-styles.css      # Classic editor styling
│   │       │   │
│   │       │   ├── 📁 js/
│   │       │   │   ├── 📁 components/
│   │       │   │   │   ├── sticky-nav.js              # Sticky navbar z GSAP ScrollTrigger
│   │       │   │   │   ├── hero-animation.js          # Hero section GSAP reveals
│   │       │   │   │   ├── lazy-load-images.js        # Native lazy loading + fallback
│   │       │   │   │   ├── form-validation.js         # Contact Form 7 enhancements
│   │       │   │   │   ├── mobile-menu-toggle.js      # Hamburger menu animation
│   │       │   │   │   ├── scroll-reveal.js           # Anime.js scroll-triggered elements
│   │       │   │   │   ├── image-optimizer.js         # WebP/AVIF fallback loading
│   │       │   │   │   └── preloader-animation.js     # Animated preloader icon
│   │       │   │   │
│   │       │   │   ├── 📁 utils/
│   │       │   │   │   ├── performance-monitor.js      # Core Web Vitals tracking
│   │       │   │   │   ├── accessibility-helpers.js    # A11y utility functions
│   │       │   │   │   └── dom-helpers.js              # Common DOM utilities
│   │       │   │   │
│   │       │   │   ├── gsap-setup.js                   # GSAP initialization & defaults
│   │       │   │   ├── index.js                        # Main entry point (Webpack)
│   │       │   │   └── vendor-config.js                # Third-party lib config (Motion, Anime)
│   │       │   │
│   │       │   ├── 📁 images/
│   │       │   │   ├── logo.svg                        # Brand logo (SVG)
│   │       │   │   ├── logo-symbol.svg                 # Logo icon only (favicon, etc.)
│   │       │   │   ├── 📁 icons/                       # Custom SVG icons
│   │       │   │   │   ├── fenster-icon.svg
│   │       │   │   │   ├── turen-icon.svg
│   │       │   │   │   ├── montage-icon.svg
│   │       │   │   │   └── ...
│   │       │   │   └── 📁 patterns/                    # SVG patterns dla backgrounds
│   │       │   │       ├── diagonal-lines.svg
│   │       │   │       └── geometric-shapes.svg
│   │       │   │
│   │       │   └── 📁 fonts/
│   │       │       └── (Fonts imported z Google Fonts via CSS, nie pliki lokalne)
│   │       │
│   │       ├── 📁 template-parts/
│   │       │   │
│   │       │   ├── 📁 header/
│   │       │   │   ├── site-header.php        # <header> wrapper, semantic HTML5
│   │       │   │   ├── nav-primary.php        # Main navbar (sticky, Bootstrap structure)
│   │       │   │   ├── nav-mobile.php         # Mobile hamburger menu
│   │       │   │   ├── search-form.php        # Search widget (optional)
│   │       │   │   └── branding.php           # Logo + tagline section
│   │       │   │
│   │       │   ├── 📁 footer/
│   │       │   │   ├── site-footer.php        # <footer> wrapper
│   │       │   │   ├── footer-widgets.php     # Widget areas (About, Links, Latest Blog, Newsletter)
│   │       │   │   ├── footer-nav.php         # Footer links (Impressum, Datenschutz, AGB, Kontakt)
│   │       │   │   ├── footer-copyright.php   # Copyright + social media icons
│   │       │   │   └── back-to-top.js         # "Back to top" button animation
│   │       │   │
│   │       │   ├── 📁 hero/
│   │       │   │   ├── hero-home.php          # Homepage hero (large image, CTA)
│   │       │   │   ├── hero-service.php       # Service/product page hero
│   │       │   │   ├── hero-city-landing.php  # City landing pages hero (Marl, Recklinghausen, etc.)
│   │       │   │   └── hero-breadcrumbs.php   # Breadcrumb navigation (accessibility)
│   │       │   │
│   │       │   ├── 📁 blocks/
│   │       │   │   ├── cta-section.php        # Call-to-action blocks (Angebot, Kontakt buttons)
│   │       │   │   ├── features-grid.php      # 2-4 column feature grid (Materialien, Services)
│   │       │   │   ├── testimonials-carousel.php # Client testimonials (slider w Anime.js)
│   │       │   │   ├── service-cards.php      # Fenster/Türen/Zubehör cards (product showcase)
│   │       │   │   ├── image-gallery.php      # Portfolio gallery (Realisierungen lightbox)
│   │       │   │   ├── before-after-slider.php # Before/after image slider (Anime.js)
│   │       │   │   ├── faq-accordion.php      # FAQs (expandable, accessible)
│   │       │   │   ├── stats-counter.php      # Numbers display (animated counters)
│   │       │   │   ├── promo-banner.php       # Seasonal promotions/offers
│   │       │   │   └── newsletter-signup.php  # Newsletter subscription section
│   │       │   │
│   │       │   ├── 📁 content/
│   │       │   │   ├── page-header.php        # Page title + breadcrumbs
│   │       │   │   ├── entry.php              # Post/page content wrapper
│   │       │   │   ├── entry-meta.php         # Post metadata (date, author, category)
│   │       │   │   ├── entry-footer.php       # Post navigation + related posts
│   │       │   │   └── pagination.php         # Archive pagination
│   │       │   │
│   │       │   └── 📁 forms/
│   │       │       ├── contact-form.php       # Contact Form 7 container
│   │       │       ├── inquiry-form.php       # Service inquiry form (Fenster, Türen, Zubehör)
│   │       │       └── newsletter-form.php    # Newsletter signup form
│   │       │
│   │       ├── 📁 includes/
│   │       │   ├── functions.php              # Theme main functions (enqueues, hooks, setup)
│   │       │   ├── hooks.php                  # Custom action/filter definitions
│   │       │   ├── class-walker-nav.php       # Custom nav walker dla Bootstrap navbar
│   │       │   ├── class-image-optimization.php # Image optimization class (WebP, AVIF)
│   │       │   ├── class-schema-markup.php    # Schema.org JSON-LD generators
│   │       │   ├── class-language-fix.php     # lang="de-DE" attribute fix
│   │       │   ├── filters.php                # Content filters (meta tags, CSP, og:locale)
│   │       │   ├── security.php               # Security (CSP headers, CSRF, sanitization)
│   │       │   ├── helpers.php                # Utility functions (get_hero_image(), etc.)
│   │       │   └── migrations.php             # Database migrations/updates
│   │       │
│   │       ├── 📁 layouts/
│   │       │   ├── layout-default.php         # Default layout (2-col, optional sidebar)
│   │       │   ├── layout-full-width.php      # Full-width layout (no sidebar)
│   │       │   ├── layout-landing.php         # Landing page layout (hero + sections)
│   │       │   ├── layout-blog.php            # Blog post layout (sidebar for related)
│   │       │   └── layout-product.php         # Product page layout (specs + gallery)
│   │       │
│   │       ├── 📁 admin/
│   │       │   ├── customize-branding.php    # Customizer setup (kolorystyka, fonty)
│   │       │   ├── admin-styles.css          # Backend UI improvements
│   │       │   ├── metabox-definitions.php   # Custom metaboxes (landing pages, products)
│   │       │   └── dashboard-widgets.php     # Custom dashboard widgets
│   │       │
│   │       ├── style.css                      # Theme stylesheet header (compiled SCSS + critical CSS)
│   │       ├── functions.php                  # Child theme functions.php (includes/)
│   │       ├── index.php                      # Fallback template
│   │       ├── screenshot.png                 # Theme preview image (1200x900)
│   │       ├── README.md                      # Theme-specific documentation
│   │       └── theme-name.txt                 # Theme metadata file
│   │
│   ├── 📁 plugins/                   # Custom WordPress plugins
│   │   │
│   │   ├── 📁 fts-schema-markup/              # ⭐ Plugin: Schema.org JSON-LD generators
│   │   │   ├── fts-schema-markup.php         # Main plugin file (header + activation hooks)
│   │   │   ├── 📁 includes/
│   │   │   │   ├── class-schema-generator.php # LocalBusiness, Product, FAQPage, BreadcrumbList
│   │   │   │   ├── class-nap-fixer.php       # NAP (Name, Address, Phone) consistency
│   │   │   │   └── class-og-markup.php       # OpenGraph meta tags (og:locale = de_DE!)
│   │   │   └── 📁 admin/
│   │   │       └── debug-schema.php          # Admin page dla schema debug (dev only)
│   │   │
│   │   ├── 📁 fts-seo-enhancements/          # ⭐ Plugin: SEO-specific optimizations
│   │   │   ├── fts-seo-enhancements.php      # Main plugin file
│   │   │   ├── 📁 includes/
│   │   │   │   ├── class-meta-tags.php       # Meta title/description overrides per page
│   │   │   │   ├── class-og-images.php       # OpenGraph image generation (1200x630)
│   │   │   │   ├── class-canonical-urls.php  # Canonical URL management
│   │   │   │   └── class-lang-attribute.php  # Fix lang="de-DE" na <html>
│   │   │   └── 📁 admin/
│   │   │       └── settings-page.php         # Plugin settings UI
│   │   │
│   │   ├── 📁 fts-performance/                # ⭐ Plugin: Performance optimization
│   │   │   ├── fts-performance.php            # Main plugin file
│   │   │   ├── 📁 includes/
│   │   │   │   ├── class-image-optimization.php  # WebP/AVIF conversion, lazy loading
│   │   │   │   ├── class-asset-minification.php  # CSS/JS minification via Webpack
│   │   │   │   ├── class-lazy-loading.php        # Native lazy load + fallback
│   │   │   │   ├── class-caching-strategy.php    # Redis + OPcache setup
│   │   │   │   └── class-core-web-vitals.js      # LCP, FID, CLS tracking
│   │   │   └── 📁 admin/
│   │   │       └── performance-report.php    # Lighthouse score display
│   │   │
│   │   ├── 📁 fts-landing-pages/              # ⭐ Plugin: City landing pages CPT
│   │   │   ├── fts-landing-pages.php          # Main plugin file
│   │   │   ├── 📁 includes/
│   │   │   │   ├── class-cpt-landing-page.php   # Custom Post Type definition
│   │   │   │   ├── class-landing-rewrite.php    # URL rewrites (/fenster-marl/, etc.)
│   │   │   │   └── class-landing-metabox.php    # Meta fields (city, radius, keywords)
│   │   │   ├── 📁 templates/
│   │   │   │   └── single-landing-page.php      # Landing page template
│   │   │   └── 📁 admin/
│   │   │       └── landing-page-list.php    # Admin list customization
│   │   │
│   │   ├── 📁 fts-analytics-integration/      # ⭐ Plugin: GA4 + Core Web Vitals
│   │   │   ├── fts-analytics.php              # Main plugin file
│   │   │   ├── 📁 includes/
│   │   │   │   ├── class-google-analytics.php   # GA4 integration
│   │   │   │   └── class-cwv-tracking.js        # Core Web Vitals JS injection
│   │   │   └── 📁 admin/
│   │   │       └── analytics-dashboard.php      # Backend analytics view
│   │   │
│   │   └── 📁 fts-contact-form-enhancements/ # Plugin: Form validation + spam protection
│   │       ├── fts-contact-form-enhancements.php
│   │       └── 📁 includes/
│   │           ├── class-form-validation.js
│   │           ├── class-spam-protection.php
│   │           └── class-email-notifications.php
│   │
│   └── 📁 languages/
│       ├── fenstertureneu-de_DE.po            # German translations (primary language)
│       ├── fenstertureneu-de_DE.mo            # Compiled German translations
│       └── fenstertureneu.pot                 # Translation template (auto-generated)
│
├── .editorconfig                    # Editor formatting consistency (.editorconfig standard)
├── .env                             # Environment variables (⚠️ dev only, not for production secrets)
├── .env.example                     # Environment template (commit to repo)
├── .eslintrc.json                   # ESLint configuration (JS linting)
├── .gitattributes                   # Git attributes (line endings, binary files)
├── .gitignore                        # Git ignore rules (node_modules, vendor, .env, etc.)
├── .stylelintrc.json                # Stylelint configuration (CSS/SCSS linting)
├── LICENSE                          # Project license (MIT or proprietary)
├── Makefile                         # Automation commands (make dev, make build, make deploy)
├── PORTY-DOCKER.md                  # Docker ports mapping reference
├── README.md                         # This file (main documentation)
├── composer.json                    # PHP dependencies (WordPress plugins via Composer)
├── composer.lock                    # Locked Composer versions
├── docker-compose.prod.yml          # Production Docker Compose config (SSL, optimization)
├── docker-compose.yml               # Development Docker Compose config (ports 9000-9004)
├── package.json                     # NPM dependencies (Bootstrap, GSAP, Webpack, etc.)
├── package-lock.json                # Locked NPM versions
└── webpack.config.js                # Webpack configuration (asset bundling, SCSS compilation)
```

---

## 🎨 Brand Identity Implementation

### Kolorystyka (z Brandbook)

Całkowicie zaimplementowana w `/wp-content/themes/responsywny-child/assets/css/_variables.scss`:

```scss
:root {
  /* Primary Colors */
  --color-primary: #22499a;              /* Primary Blue — CTA, Links, Headings */
  --color-secondary: #1274b5;            /* Secondary Blue — Hover, Gradienty */
  --color-orbital-blue: #1a5fa8;         /* Logo Orbital — Logo accent element */
  
  /* Accent Colors */
  --color-accent-gold: #edbc0e;          /* Gold — Premium, Stars, Highlights */
  --color-accent-copper: #C8963E;        /* Copper Warm — Secondary accents, prices */
  
  /* Neutral Colors */
  --color-dark-charcoal: #2D3436;        /* Primary Text, Navigation */
  --color-section-dark: #1B2A4A;         /* Hero, Footer backgrounds */
  --color-tertiary-grey: #727272;        /* Secondary Text, Icons */
  
  /* Backgrounds */
  --color-bg-light: #F5F5F0;             /* Light background (sections) */
  --color-bg-white: #FFFFFF;             /* Card backgrounds, modals */
  --color-bg-divider: #E0E0E0;           /* Divider lines, borders */
  
  /* Status Colors */
  --color-success: #2E7D32;              /* Energy efficiency, success */
  --color-warning: #F59E0B;              /* Warnings, important notices */
  --color-error: #DC2626;                /* Error messages, validation */
  
  /* Typography */
  --font-heading: 'Montserrat', sans-serif;       /* H1-H4, CTAs */
  --font-body: 'Source Sans 3', sans-serif;       /* Fließtext, body */
  --font-mono: 'IBM Plex Mono', monospace;        /* Technical data, prices */
  
  /* Spacing (8px base) */
  --space-xs: 4px;
  --space-sm: 8px;
  --space-md: 16px;
  --space-lg: 24px;
  --space-xl: 32px;
  --space-2xl: 48px;
  --space-3xl: 64px;
}
```

### Typografia

- **Headings (H1-H4):** Montserrat Bold/ExtraBold — `font-weight: 700-800`
- **Body Text:** Source Sans 3 Regular — `font-weight: 400` — line-height 1.7
- **Technical Data:** IBM Plex Mono — `font-weight: 400-500` — monospace for U-values, prices
- **All fonts:** Załadowane z Google Fonts (brak self-hosted)

### Tone of Voice

- **Fachlich aber verständlich** — Expert wiedzy bez jargon'u technicznego
- **Persönlich & professionell** — "Wir" zamiast "Man", "Sie" zamiast "du"
- **Lokal & stolz** — Odniesienia do Marl, Ruhrgebiet, NRW
- **Lösungsorientiert** — Korzyści dla klienta, konkretne liczby, call-to-action

---

## 📊 Performance & SEO Targets

### Lighthouse Targets (PageSpeed Insights)

| Metrika | Target | Status |
|---------|--------|--------|
| **Performance** | **90+** | 🔄 In Progress |
| **Accessibility** | **95+** | 🔄 In Progress |
| **Best Practices** | **90+** | 🔄 In Progress |
| **SEO** | **95+** | ❌→✅ Quick wins |

### Core Web Vitals (CWV) Targets

- **LCP** (Largest Contentful Paint): < 2.5s
- **FID** (First Input Delay): < 100ms
- **CLS** (Cumulative Layout Shift): < 0.1

### SEO Critical Fixes (z Raportu analitycznego)

| Problem | Status | Deadline |
|---------|--------|----------|
| Fix `lang="pl-PL"` → `lang="de-DE"` | ✅ Wdrożone (fts-seo-enhancements) | Wk 1 |
| Add Schema.org LocalBusiness JSON-LD | ✅ Wdrożone (fts-schema-markup) | Wk 1 |
| Create Google Business Profile | ⏳ Manual (not automated) | Wk 2 |
| Create 8 city landing pages (CPT) | ✅ Wdrożone (fts-landing-pages) | Wk 3 |
| Unify NAP data in directories | ⏳ Manual + plugin checks | Wk 2 |
| Add Product schema dla Fenster/Türen | ✅ Wdrożone | Wk 1 |

---

## 🔧 Development Workflow (Solo Developer)

### Feature Development

```bash
# 1. Utwórz feature branch
git checkout -b feature/sticky-nav-animation

# 2. Work na isolated feature
cd wp-content/themes/responsywny-child/assets/js/components
# Edytuj: sticky-nav.js

# 3. Test locally
npm run dev         # Watch mode
# Otwórz http://localhost:9000 w przeglądarce

# 4. Commit & push
git add .
git commit -m "feat: sticky nav animation with GSAP ScrollTrigger"
git push origin feature/sticky-nav-animation

# 5. Self-review + merge
git checkout main
git merge feature/sticky-nav-animation
```

### Testing Locally

```bash
# Performance audit
npm run lighthouse      # Lighthouse scores
npm run a11y          # Accessibility check (axe)

# SEO validation
wp plugin activate all-in-one-seo-pack
wp seo-audit          # All in One SEO audit

# Core Web Vitals
npm run core-web-vitals  # LCP, FID, CLS tracking
```

### Makefile Commands (convenience)

```bash
make dev                # Start development environment
make stop              # Stop all containers
make build             # Build frontend assets (SCSS, JS)
make lighthouse        # Run Lighthouse audit
make backup            # Backup database
make deploy-staging    # Deploy to staging
make deploy-prod       # Deploy to production
```

---

## 📦 Frontend Dependencies

### CSS Framework & UI
- **Bootstrap 5.3.8** — Responsive grid, components (navbar, cards, modals)
- **Bootstrap Icons** — SVG icons dla UI elements

### JavaScript Animations & Interactions
- **GSAP 3.12+** — High-performance animations (ScrollTrigger, timelines, easing)
- **Anime.js 3.2+** — Lightweight alternative dla scroll reveals, carousels
- **Motion One 10+** — Web Animations API wrapper (minimal footprint)

### Build Tools & Processing
- **Webpack 5** — Module bundling, code splitting
- **Sass 1.69+** — SCSS compilation (variables, mixins, nesting)
- **Babel 7** — ES6+ transpilation (broad browser support)

### Development Tools
- **ESLint** — JavaScript linting (code quality)
- **Stylelint** — CSS/SCSS linting (consistency)
- **Prettier** — Code formatting (optional, via .editorconfig)

### Package.json (scripts)

```json
{
  "scripts": {
    "dev": "webpack --mode development --watch",
    "build": "webpack --mode production",
    "lint:js": "eslint wp-content/themes/responsywny-child/assets/js/",
    "lint:css": "stylelint wp-content/themes/responsywny-child/assets/css/",
    "lighthouse": "lighthouse http://localhost:9000 --output-path=./lighthouse-report.html",
    "a11y": "pa11y http://localhost:9000 --standard WCAG2AA",
    "core-web-vitals": "npm run build && npm run lighthouse"
  },
  "dependencies": {
    "bootstrap": "^5.3.8",
    "gsap": "^3.12.2",
    "anime": "^3.2.1",
    "motion": "^10.16.2"
  },
  "devDependencies": {
    "sass": "^1.69.5",
    "webpack": "^5.89.0",
    "webpack-cli": "^5.1.4",
    "@babel/core": "^7.23.2",
    "@babel/preset-env": "^7.23.2",
    "babel-loader": "^9.1.3",
    "eslint": "^8.50.0",
    "stylelint": "^15.10.3"
  }
}
```

---

## 📦 Backend Dependencies (PHP)

### Composer-managed WordPress Plugins
- **all-in-one-seo-pack** v4.9.0+ — SEO optimization, meta tags
- **contact-form-7** — Contact forms (via Contact Form 7)
- **open-graph** — OpenGraph meta tags generation
- **wps-hide-login** — Security (hide wp-admin, wp-login URLs)

### Custom Plugins (w repozytorium)
1. **fts-schema-markup** — Schema.org JSON-LD (LocalBusiness, Product, FAQ)
2. **fts-seo-enhancements** — Meta tags, OG images, lang attribute fix
3. **fts-performance** — Image optimization, lazy loading, caching
4. **fts-landing-pages** — City landing pages CPT
5. **fts-analytics-integration** — GA4 + Core Web Vitals tracking
6. **fts-contact-form-enhancements** — Form validation, spam protection

### Composer.json (main)

```json
{
  "require": {
    "php": "^8.1",
    "wordpress/wordpress": "latest",
    "wp-cli/wp-cli": "^2.8.0"
  },
  "require-dev": {
    "phpstan/phpstan": "^1.10",
    "wp-coding-standards/wpcs": "^3.0"
  }
}
```

---

## 🚢 Deployment

### Staging Environment (test.fenster-tueren24.eu)

```bash
./scripts/deploy-staging.sh

# Checks:
# - Database backup
# - Asset compilation
# - Plugin activation
# - SSL certificate renewal
# - Health checks (Lighthouse, accessibility)
```

### Production Deployment (fenster-tueren24.eu)

```bash
# Pre-deployment
./scripts/pre-deploy-checklist.sh      # Security, performance, SEO checks
./scripts/backup-database.sh            # Database snapshot

# Deploy
git checkout main
git pull origin main
docker-compose -f docker-compose.prod.yml up -d

# Post-deployment
./scripts/post-deploy-verification.sh   # Final checks
# Verify: https://fenster-tueren24.eu
# Verify: https://pagespeed.web.dev/?url=https://fenster-tueren24.eu
```

### Production Checklist (z DEPLOYMENT.md)

- [ ] SSL certificate aktywny (Let's Encrypt)
- [ ] All plugins zaktualizowane
- [ ] Database backup
- [ ] Caching headers configured (Nginx, Redis)
- [ ] CDN setup (optional: images, CSS, JS)
- [ ] Monitoring setup (Error logs, Core Web Vitals)
- [ ] Backup automation scheduled (daily)
- [ ] Email notifications configured

---

## 🔒 Security Implemented

### Code-level Security
- ✅ **CSRF Protection** — WordPress nonces na formularzach
- ✅ **Input Sanitization** — Wszystkie dane od użytkownika sanitized
- ✅ **Output Escaping** — Wszystkie dane do HTML escaped (esc_html, esc_attr, wp_kses)
- ✅ **SQL Injection Prevention** — Prepared statements ($wpdb->prepare)

### Application-level Security
- ✅ **Content Security Policy (CSP)** — Headers chroniące przed XSS
- ✅ **WPS Hide Login Plugin** — Ukrycie `/wp-admin/`, `/wp-login.php`
- ✅ **Environment Variables** — .env dla credentials (not in code)
- ✅ **Rate Limiting** — Contact form rate limits (spam prevention)

### Infrastructure Security
- ✅ **SSL/TLS Enforcement** — Nginx redirect HTTP → HTTPS
- ✅ **Docker Security** — Non-root user w container, read-only volumes gdzie możliwe
- ✅ **Database Backups** — Automated daily backups (przed deployment)

---

## 📞 Support & Documentation

### Quick References
- **Brand Identity:** `/docs/BRAND-IMPLEMENTATION.md`
- **SEO Strategy:** `/docs/SEO-IMPLEMENTATION.md`
- **Performance:** `/docs/PERFORMANCE-OPTIMIZATION.md`
- **Deployment:** `/docs/DEPLOYMENT.md`
- **Security:** `/docs/SECURITY-CHECKLIST.md`

### GitHub Issues
Raportuj bugi, feature requests, documentation improvements jako GitHub Issues.

### Contact
- **Developer:** Piotr O. (solo)
- **Client:** Fenster-Türen24 team (Dariusz Lewandowski)

---

## 📄 License

**Proprietary** — All rights reserved © 2025 Fenster-Türen24 GmbH.

---

## 🎯 Checklist — Następne kroki (Roadmap)

### Phase 1: Foundation ✅
- [x] Setup Docker environment (ports 9000-9004)
- [x] Child theme `responsywny-child` scaffold
- [x] Bootstrap 5.3.8 integration
- [x] SCSS variables (brandbook colors, fonts, spacing)
- [x] Custom plugins architecture (fts-*)
- [x] Schema.org + og:locale fixes

### Phase 2: Build (🔄 In Progress)
- [ ] Complete hero sections + animations (GSAP)
- [ ] Sticky navbar implementation
- [ ] City landing pages (8 templates)
- [ ] Product showcase (Fenster, Türen, Zubehör)
- [ ] Contact form (CF7) + validation
- [ ] Image optimization (WebP, AVIF)
- [ ] Lazy loading implementation

### Phase 3: Optimization (⏳ Planned)
- [ ] Lighthouse 90+ (Performance, Accessibility)
- [ ] Core Web Vitals < 2.5s LCP
- [ ] Google Business Profile setup (manual)
- [ ] GA4 + tracking implementation
- [ ] Content marketing setup (ratgeber, blog)
- [ ] Local SEO optimization (NAP, citations)

### Phase 4: Launch (⏳ TBD)
- [ ] Staging verification (test.fenster-tueren24.eu)
- [ ] DNS migration + SSL
- [ ] Analytics monitoring
- [ ] Post-launch checks (SEO, performance)
- [ ] Client training (WordPress backend)
- [ ] Documentation finalization

---

**Last Updated:** March 26, 2025  
**Repository:** https://github.com/piotroq/fenstertureneu-wordpress-new-website  
**Client Website:** https://fenster-tueren24.eu/
