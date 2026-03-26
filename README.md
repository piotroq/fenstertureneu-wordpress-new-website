# Fenster-Türen24 — WordPress Modernizacja & Rebuild

## 📋 Przegląd projektu

Projekt modernizacji witryny **Fenster-Türen24** — fachbetriebu specjalizującego się w sprzedaży i montażu okien/drzwi (aluminium, PVC, drewna) w regionie NRW, Niemcy.

**Kluczowe cele:**

- ✅ Rebuild witryny WordPress z child theme'em `responsywny-child`
- ✅ Implementacja brand identity (kolorystyka, typografia, tone of voice) z brandbook
- ✅ PageSpeed Insights & Lighthouse **90+ punktów** (mobile-first)
- ✅ WCAG AA accessibility compliance
- ✅ SEO optimization (Schema.org JSON-LD, local SEO, NAP consistency fixes)
- ✅ Nowoczesny, premium design (Bootstrap v5.3.8, GSAP, Anime.js, Motion One)
- ✅ Performance: lazy loading, .avif image serving, code splitting

**Tech Stack:**

```
Frontend:  Bootstrap 5.3.8 | GSAP | Anime.js | Motion One | Google Fonts | Bootstrap Icons
CMS:       WordPress (Latest) + Custom Child Theme
Backend:   PHP 8.1+ | MySQL 8.0+ | Redis (caching)
DevOps:    Docker | Docker Compose | Nginx
SEO:       All in One SEO Pro | Custom Schema Markup Plugin
Forms:     Contact Form 7 + Custom Validation
```

---

## 🚀 Szybki Start — Local Development

### Wymagania systemowe

- Docker Desktop (v4.10+)
- Docker Compose (v2.0+)
- Git
- ~4 GB RAM dostępnej dla kontenerów

### 1. Klonowanie repozytorium

```bash
git clone https://github.com/piotroq/fenstertureneu-wordpress-new-website.git
cd fenstertureneu-wordpress-new-website
```

### 2. Setup zmiennych środowiskowych

```bash
cp config/.env.example config/.env.local

# Edytuj config/.env.local i ustaw:
# - DB_NAME=fenstertureneu_dev
# - DB_USER=wordpress
# - DB_PASSWORD=securepassword123
# - WP_SITE_URL=http://localhost
```

### 3. Uruchomienie Docker environment

```bash
docker-compose up -d

# Czekaj na inicjalizację (30-60 sekund)
docker-compose logs -f wordpress

# Po inicjalizacji: http://localhost
```

### 4. WordPress setup

```bash
# SSH do container'a
docker-compose exec wordpress bash

# Uruchomienie WordPress CLI
wp core install \
  --url="http://localhost" \
  --title="Fenster-Türen24" \
  --admin_user="admin" \
  --admin_password="AdminPass2025!" \
  --admin_email="admin@fenster-tueren24.eu"

# Aktywacja child theme'u
wp theme activate responsywny-child

# Aktywacja custom plugins
wp plugin activate fts-schema-markup
wp plugin activate fts-seo-enhancements
wp plugin activate fts-performance
wp plugin activate fts-landing-pages
wp plugin activate all-in-one-seo-pack
wp plugin activate contact-form-7
wp plugin activate wps-hide-login

exit
```

### 5. Frontend dependencies

```bash
npm install
npm run build   # Kompilacja SCSS/JS
```

### 6. Weryfikacja

```bash
# Lighthouse w Chrome DevTools
# Target: 90+ (Mobile & Desktop)

# PageSpeed Insights
# https://pagespeed.web.dev/?url=http://localhost

# Accessibility check
# axe DevTools Chrome extension
```

---

## 📁 Struktura katalogów — Opis szczegółowy

### `/wp-content/themes/responsywny-child/`

**Child theme dla "Responsywny" parent theme.**

- **`/assets/css/`** — SCSS ze zmiennymi brandbook (kolory, fonty, spacing)
  
  - `_variables.scss`: `:root` vars dla kolorów (#22499a, #1274b5, #edbc0e, #2D3436)
  - `_animations.scss`: GSAP/Anime.js keyframes (sticky-nav, hero-reveals, scroll-triggers)
  - `_responsive.scss`: Mobile-first media queries (Bootstrap breakpoints + custom)

- **`/assets/js/`** — Component-based JavaScript architecture
  
  - `components/sticky-nav.js`: Sticky navbar (GSAP ScrollTrigger)
  - `components/lazy-load-images.js`: Native lazy loading + fallback
  - `components/hero-animation.js`: Hero section reveal animations
  - `utils/image-optimizer.js`: AVIF/WebP fallback loading

- **`/template-parts/`** — Reusable template components
  
  - `header/nav-primary.php`: Bootstrap 5 navbar (sticky, hamburger mobile)
  - `blocks/service-cards.php`: Fenster/Türen/Zubehör cards grid
  - `blocks/before-after.php`: Before/after image slider (Anime.js)
  - `blocks/cta-section.php`: Call-to-action sections z accent colors

- **`/includes/`** — Theme functionality
  
  - `functions.php`: Enqueue assets, theme setup, custom hooks
  - `class-schema-markup.php`: LocalBusiness, Product, FAQPage JSON-LD
  - `security.php`: CSP headers, sanitization, CSRF protection
  - `helpers.php`: `get_hero_image()`, `get_service_cards()`, etc.

---

### `/wp-content/plugins/`

**Custom plugins dla separacji concerns.**

#### `fts-schema-markup/`

Naprawa kluczowych błędów z Raportu analitycznego:

- ✅ Schema.org LocalBusiness JSON-LD (brak w current stronie)
- ✅ NAP data consistency checks (3 różne numery telefonu)
- ✅ Product schema dla Fenster/Türen
- ✅ FAQPage schema dla /ratgeber/

#### `fts-seo-enhancements/`

SEO-specific optimizations:

- ✅ Meta title/description per-page overrides
- ✅ OpenGraph image generation (og:locale = de_DE, NOT pl_PL)
- ✅ Canonical URL management
- ✅ XML sitemap customization

#### `fts-performance/`

Performance optimization (target: Lighthouse 90+):

- ✅ WebP/AVIF conversion on-the-fly
- ✅ Lazy loading (native + fallback)
- ✅ CSS/JS minification
- ✅ Redis caching strategy
- ✅ OPcache configuration

#### `fts-landing-pages/`

City landing pages CPT (8 stron: Marl, Recklinghausen, Dorsten, Bottrop, Gelsenkirchen, Herten, Gladbeck, Haltern):

- ✅ Custom Post Type definition
- ✅ URL rewrites (`/fenster-marl/`, `/fenster-recklinghausen/`, etc.)
- ✅ Custom meta fields (city, radius, keywords)
- ✅ Template dla landing pages

---

### `/docker/`

**Docker configuration dla local development.**

- `docker-compose.yml`: 
  
  - **WordPress** service (PHP 8.1-FPM + WordPress latest)
  - **MySQL** service (8.0, persistence via volume)
  - **Redis** service (caching layer)
  - **Nginx** service (reverse proxy, SSL dla dev, gzip compression)

- `Dockerfile`: Multi-stage build
  
  - Base: `wordpress:latest`
  - Additions: Composer, WP-CLI, development tools
  - Entrypoint: Automatic DB initialization + plugin activation

---

### `/docs/`

**Documentation dla solo developera.**

- **`ARCHITECTURE.md`**: Technical decisions (why WordPress child theme, why custom plugins, why Bootstrap+GSAP)
- **`SEO-IMPLEMENTATION.md`**: Krok-po-krok implementacja Schema.org, NAP fixes, local SEO
- **`PERFORMANCE-OPTIMIZATION.md`**: Image optimization, code splitting, Core Web Vitals strategy
- **`DEPLOYMENT.md`**: Production deployment checklist (SSL, caching headers, CDN setup)

---

## 🎨 Brand Identity Integration

Całe brandbooka jest zaimplementowane w:

1. **`/assets/css/_variables.scss`:**
   
   ```scss
   :root {
     --color-primary: #22499a;        // Primary Blue (CTA, Links)
     --color-secondary: #1274b5;      // Secondary Blue (Hover, Gradienty)
     --color-accent-gold: #edbc0e;    // Gold (Premium, Stars)
     --color-dark: #2D3436;           // Dark Charcoal (Text)
     --color-section-dark: #1B2A4A;   // Section Dark (Hero, Footer)
   
     --font-heading: 'Montserrat', sans-serif;
     --font-body: 'Source Sans 3', sans-serif;
     --font-mono: 'IBM Plex Mono', monospace;
   }
   ```

2. **Tone of Voice w treści:**
   
   - Pages pisane z perspektywy "Fachbetrieb" (expert-but-accessible)
   - Personalne "Wir" zamiast generycznych form
   - Lokalne odniesienia (Marl, Ruhrgebiet, NRW)

3. **Visual Design:**
   
   - Hero sections z gradient (#22499a → #1274b5)
   - Bootstrap navbar z custom styling
   - Card-based layouts z accent borders
   - Realistic product images (from Unsplash or client photography)

---

## 📊 SEO & Performance Requirements

### Lighthouse Targets (PageSpeed Insights)

| Metric         | Target | Current | Status |
| -------------- | ------ | ------- | ------ |
| Performance    | 90+    | TBD     | 🔄     |
| Accessibility  | 95+    | TBD     | 🔄     |
| Best Practices | 90+    | TBD     | 🔄     |
| SEO            | 95+    | 3.2/10  | ❌→✅    |

### Core Web Vitals (CWV)

- **LCP** (Largest Contentful Paint) < 2.5s
- **FID** (First Input Delay) < 100ms
- **CLS** (Cumulative Layout Shift) < 0.1

### SEO Quick Wins

1. ✅ Fix `lang="de-DE"` attribute (currently `pl-PL`)
2. ✅ Add Schema.org LocalBusiness JSON-LD
3. ✅ Create 8 city landing pages (`/fenster-marl/`, etc.)
4. ✅ Implement Google Business Profile
5. ✅ Unify NAP data (address, phone, name)
6. ✅ Setup Google Analytics 4 + Core Web Vitals tracking

---

## 🔒 Security

Implementacje:

- ✅ Content Security Policy (CSP) headers
- ✅ CSRF token validation (WP nonces)
- ✅ Input sanitization & output escaping
- ✅ Database prepared statements (WPDB)
- ✅ Environment variables (no hardcoded credentials)
- ✅ WPS Hide Login plugin (hide `/wp-admin/`, `/wp-login.php`)
- ✅ Rate limiting na contact forms
- ✅ SSL/TLS enforcement (Nginx)

---

## 🔧 Development Workflow (Solo Developer)

### Feature Development

```bash
# 1. Utwórz feature branch
git checkout -b feature/sticky-nav-animation

# 2. Workspace isolation
cd wp-content/themes/responsywny-child/assets/js/components

# 3. Edit, test locally
npm run dev    # Watch mode dla SCSS/JS

# 4. Commit & push
git add .
git commit -m "feat: sticky nav animation with GSAP ScrollTrigger"
git push origin feature/sticky-nav-animation

# 5. Self-review + merge to develop
git checkout develop
git merge feature/sticky-nav-animation
```

### Testing Locally

```bash
# Lighthouse audit
npm run lighthouse

# Accessibility check
npm run a11y

# SEO audit
wp plugin activate --all
wp seo-audit

# Performance metrics
npm run core-web-vitals
```

---

## 📦 Dependencies

### Frontend (Bootstrap 5.3.8, GSAP, Anime.js)

Zarządzane przez `npm`:

```json
{
  "dependencies": {
    "bootstrap": "^5.3.8",
    "gsap": "^3.12.2",
    "anime": "^3.2.1",
    "motion": "^10.16.2"
  },
  "devDependencies": {
    "sass": "^1.69.5",
    "webpack": "^5.89.0",
    "@babel/core": "^7.23.2"
  }
}
```

### Backend (WordPress Plugins)

Zarządzane przez Composer + manualna instalacja:

- `all-in-one-seo-pack` v4.9.0+ (SEO)
- `contact-form-7` (Formularz kontaktowy)
- `open-graph` (OG tags)
- `wps-hide-login` (Security)

---

## 🚢 Deployment

### Staging (test.fenster-tueren24.eu)

```bash
./scripts/deploy-staging.sh
```

### Production (fenster-tueren24.eu)

```bash
# Pre-deployment checklist
./scripts/pre-deploy-checklist.sh

# Backup current database
./scripts/backup-database.sh

# Deploy
git checkout main
git pull origin main
docker-compose -f docker-compose.prod.yml up -d

# Post-deployment verification
./scripts/post-deploy-verification.sh
```

---

## 📞 Kontakt & Support

- **Repository Owner:** Piotr O. (solo developer)
- **Project Manager:** Fenster-Türen24 team
- **GitHub Issues:** bug reports, feature requests
- **Documentation:** `/docs/` directory

---

## 📄 License

Proprietary. All rights reserved © 2025 Fenster-Türen24.

---
