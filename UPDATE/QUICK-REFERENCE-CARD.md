# 🎯 QUICK REFERENCE CARD — Fenster-Türen24 WordPress Project

**Projekt:** Modernizacja witryny Fenster-Türen24 (fachbetrieb sprzedaży okien/drzwi, NRW)  
**Repository:** https://github.com/piotroq/fenstertureneu-wordpress-new-website  
**Website:** https://fenster-tueren24.eu/  
**Status:** 🔄 In Progress  

---

## 🚀 Szybki Start (7 kroków)

```bash
# 1. Klonuj repozytorium
git clone https://github.com/piotroq/fenstertureneu-wordpress-new-website.git
cd fenstertureneu-wordpress-new-website

# 2. Setup zmiennych env
cp .env.example .env
# Edytuj .env jeśli potrzebujesz zmienić porty/bazy

# 3. Uruchom Docker environment
docker-compose up -d
docker-compose logs -f wordpress  # Czekaj na "WordPress initialized"

# 4. WordPress setup
docker-compose exec wordpress bash
wp core install \
  --url="http://localhost:9000" \
  --title="Fenster-Türen24" \
  --admin_user="admin" \
  --admin_password="AdminPass2025!" \
  --admin_email="admin@fenster-tueren24.eu"

wp theme activate responsywny-child
wp plugin activate all-in-one-seo-pack contact-form-7 open-graph wps-hide-login
wp plugin activate fts-schema-markup fts-seo-enhancements fts-performance fts-landing-pages
exit

# 5. Frontend setup
npm install
npm run build

# 6. Weryfikacja
# Otwórz: http://localhost:9000/
# Admin:   http://localhost:9000/wp-admin/
# phpMyAdmin: http://localhost:9004/

# 7. Desenvolupment
npm run dev  # Watch mode dla SCSS/JS
```

---

## 🐳 Docker Ports

| Service | Port | URL | Opis |
|---------|------|-----|------|
| **WordPress** | 9000 | http://localhost:9000 | Frontend + Admin |
| **MySQL** | 9001 | localhost:9001 | Database CLI |
| **Redis** | 9002 | localhost:9002 | Cache |
| **Nginx** | 9003 | - | Reverse proxy (internal) |
| **phpMyAdmin** | 9004 | http://localhost:9004 | MySQL GUI |

---

## 📁 Główne foldery

```
wp-content/
├── themes/responsywny-child/       ← Child theme (MAIN WORK)
│   ├── assets/css/                 ← SCSS styles (variables, animations, components)
│   ├── assets/js/                  ← JavaScript (components, utils, GSAP setup)
│   ├── template-parts/             ← Reusable components (header, footer, blocks)
│   └── includes/                   ← PHP functionality (hooks, schema, security)
├── plugins/                        ← Custom plugins (fts-*)
└── languages/                      ← German translations

config/
├── .env                            ← Environment variables
├── php.ini                         ← PHP configuration
└── nginx.conf                      ← Nginx config

docker/
├── Dockerfile                      ← Multi-stage build
├── entrypoint.sh                   ← Container init
└── (configs)

docs/                               ← Documentation
scripts/                            ← Bash automation
sql/                                ← Database migrations
```

---

## 🎨 Brand Identity (Color Codes)

```scss
--color-primary:      #22499a    // Primary Blue (CTA, Links, Headings)
--color-secondary:    #1274b5    // Secondary Blue (Hover, Gradients)
--color-accent-gold:  #edbc0e    // Gold (Premium, Stars, Highlights)
--color-dark:         #2D3436    // Dark Charcoal (Primary Text)
--color-section-dark: #1B2A4A    // Section Dark (Hero, Footer)

Fonts:
--font-heading: 'Montserrat', sans-serif
--font-body: 'Source Sans 3', sans-serif
--font-mono: 'IBM Plex Mono', monospace
```

---

## 📦 Key Dependencies

### Frontend
- **Bootstrap 5.3.8** — Responsive framework
- **GSAP 3.12+** — Animation library
- **Anime.js 3.2+** — Lightweight animations
- **Motion One 10+** — Web Animations API
- **Google Fonts** — Montserrat, Source Sans 3, IBM Plex Mono

### Backend
- **PHP 8.1+** — Server-side language
- **MySQL 8.0** — Database
- **Redis 7** — Caching
- **WordPress Plugins:**
  - all-in-one-seo-pack v4.9.0+
  - contact-form-7
  - open-graph
  - wps-hide-login

### Custom Plugins
1. **fts-schema-markup** — Schema.org JSON-LD (LocalBusiness, Product, FAQ)
2. **fts-seo-enhancements** — Meta tags, og:locale fix, lang="de-DE"
3. **fts-performance** — Image optimization, lazy loading, caching
4. **fts-landing-pages** — City landing pages CPT (8 cities)
5. **fts-analytics-integration** — GA4 + Core Web Vitals
6. **fts-contact-form-enhancements** — Form validation, spam protection

---

## 🎯 Performance Targets

| Metric | Target | Status |
|--------|--------|--------|
| **Lighthouse Performance** | 90+ | 🔄 |
| **Lighthouse Accessibility** | 95+ | 🔄 |
| **Lighthouse Best Practices** | 90+ | 🔄 |
| **Lighthouse SEO** | 95+ | ❌→✅ |
| **LCP** (Largest Contentful Paint) | < 2.5s | 🔄 |
| **FID** (First Input Delay) | < 100ms | 🔄 |
| **CLS** (Cumulative Layout Shift) | < 0.1 | 🔄 |

---

## 🔧 NPM Commands

```bash
npm run dev              # Watch mode (SCSS + JS bundling)
npm run build            # Production build (minified)
npm run lighthouse       # Lighthouse performance audit
npm run a11y            # Accessibility check (axe)
npm run lint:js         # ESLint JavaScript linting
npm run lint:css        # Stylelint CSS/SCSS linting
npm run core-web-vitals # CWV metrics
```

---

## 🔑 WordPress CLI Commands

```bash
# Activation
wp theme activate responsywny-child
wp plugin activate all-in-one-seo-pack contact-form-7
wp plugin activate fts-schema-markup fts-seo-enhancements fts-performance

# Language
wp language install de_DE --activate

# Options
wp option update blogname "Fenster-Türen24"
wp option update blogdescription "Ihr Fensterfachbetrieb im Ruhrgebiet"

# Posts/Pages
wp post list
wp post create --post_type=page --post_title="Test Page" --post_content="Test content"

# Debugging
wp eval 'error_log( print_r( get_option("blogname"), true ) );'
```

---

## 🎬 Development Workflow

### Feature Development
```bash
# 1. Utwórz branch
git checkout -b feature/sticky-nav-animation

# 2. Work (Watch mode)
npm run dev

# 3. Test locally
# Otwórz http://localhost:9000

# 4. Commit
git add .
git commit -m "feat: sticky nav animation with GSAP"
git push origin feature/sticky-nav-animation

# 5. Merge
git checkout main
git merge feature/sticky-nav-animation
```

---

## 🚀 Deployment

### Staging
```bash
./scripts/deploy-staging.sh
# Deploy to test.fenster-tueren24.eu
```

### Production
```bash
./scripts/pre-deploy-checklist.sh    # Verify everything
./scripts/backup-database.sh         # Backup
git checkout main && git pull
docker-compose -f docker-compose.prod.yml up -d
./scripts/post-deploy-verification.sh
```

---

## 🔒 Security Checklist

- ✅ **CSP Headers** — Content-Security-Policy implemented
- ✅ **CSRF Protection** — WordPress nonces on forms
- ✅ **Input Sanitization** — sanitize_text_field(), wp_kses()
- ✅ **Output Escaping** — esc_html(), esc_attr(), wp_kses()
- ✅ **SQL Injection Prevention** — $wpdb->prepare()
- ✅ **WPS Hide Login** — Hide wp-admin, wp-login URLs
- ✅ **Environment Variables** — .env for credentials
- ✅ **Rate Limiting** — Contact form rate limit
- ✅ **SSL/TLS** — HTTPS enforcement

---

## 📱 Responsive Breakpoints (Bootstrap 5)

```css
xs: < 576px     (Mobile phones)
sm: ≥ 576px     (Small devices)
md: ≥ 768px     (Tablets)
lg: ≥ 992px     (Small desktops)
xl: ≥ 1200px    (Desktops)
xxl: ≥ 1400px   (Large screens)
```

---

## 🔍 SEO Quick Wins (z Raportu)

1. ✅ Fix `lang="de-DE"` (plugin: fts-seo-enhancements)
2. ✅ Add Schema.org LocalBusiness (plugin: fts-schema-markup)
3. ✅ Create 8 city landing pages (plugin: fts-landing-pages)
4. ⏳ Create Google Business Profile (manual)
5. ✅ Unify NAP data (plugin checks + manual)
6. ✅ Add Product schema
7. ✅ Setup Analytics (GA4)

---

## 📚 Documentation

| Dokument | Opis |
|----------|------|
| `docs/README-ARCHITECTURE.md` | Technical decisions, system design |
| `docs/README-SETUP.md` | Detailed setup instructions |
| `docs/README-SEO.md` | SEO strategy, schema markup |
| `docs/README-PERFORMANCE.md` | Optimization guide, CWV strategy |
| `docs/README-SECURITY.md` | Security best practices |
| `docs/README-PLUGINS.md` | Custom plugin development |
| `docs/README-THEME.md` | Child theme customization |
| `docs/README-DEPLOYMENT.md` | Production deployment |
| `docs/README-BRAND.md` | Brand implementation |

---

## 🎯 18-Item Navigation Menu

1. **Home** (Startseite)
2. **AGB** (Terms & Conditions)
3. **Angebot** (Offer/Pricing)
4. **Realisierungen** (Portfolio)
5. **Impressum** (Imprint)
6. **Kontakt** (Contact)
7. **Datenschutzrichtlinie** (Privacy)
8. **Fensterrollläden** (Shutters)
9. **Fensterbänke** (Window Sills)
10. **Stossgriffe** (Push Handles)
11. **Türgriffe** (Door Handles)
12. **Türen Zubehör** (Door Accessories)
13. **Briefkasten** (Mailbox)
14. **Montage und Demontage** (Installation/Removal)
15. **Lieferung** (Delivery)
16. **Fenster** (Windows)
17. **Türen** (Doors)
18. **Über uns** (About Us)

---

## 🚦 Project Status

### Phase 1: Foundation ✅
- [x] Docker setup (9000-9004 ports)
- [x] Child theme scaffold
- [x] Bootstrap integration
- [x] SCSS variables (brand colors)
- [x] Custom plugins architecture
- [x] Schema.org + lang fix

### Phase 2: Build 🔄
- [ ] Hero sections + animations
- [ ] Sticky navbar
- [ ] City landing pages (8)
- [ ] Product showcase
- [ ] Contact form + validation
- [ ] Image optimization
- [ ] Lazy loading

### Phase 3: Optimization ⏳
- [ ] Lighthouse 90+
- [ ] Core Web Vitals < 2.5s
- [ ] Google Business Profile
- [ ] GA4 setup
- [ ] Content marketing (ratgeber)
- [ ] Local SEO

### Phase 4: Launch ⏳
- [ ] Staging verification
- [ ] DNS migration
- [ ] SSL setup
- [ ] Analytics monitoring
- [ ] Post-launch checks
- [ ] Client training

---

## 📞 Useful Links

- **GitHub Repo:** https://github.com/piotroq/fenstertureneu-wordpress-new-website
- **Website:** https://fenster-tueren24.eu/
- **Bootstrap Docs:** https://getbootstrap.com/docs/5.3/
- **GSAP Docs:** https://gsap.com/docs/
- **WordPress Codex:** https://developer.wordpress.org/
- **PageSpeed Insights:** https://pagespeed.web.dev/
- **Lighthouse:** https://chromedevtools.info/

---

## 🆘 Troubleshooting

### Docker container not starting?
```bash
docker-compose ps                  # Check status
docker-compose logs wordpress      # View logs
docker-compose down && docker-compose up -d  # Restart
```

### WordPress not initializing?
```bash
docker-compose exec wordpress wp core install \
  --url="http://localhost:9000" \
  --title="Fenster-Türen24" \
  --admin_user="admin" \
  --admin_password="AdminPass2025!" \
  --admin_email="admin@fenster-tueren24.eu"
```

### NPM dependencies conflict?
```bash
rm -rf node_modules package-lock.json
npm install
npm run build
```

### Lighthouse score low?
```bash
npm run lighthouse    # Run audit
# Check: image optimization, code splitting, CSS minification
# See: docs/README-PERFORMANCE.md
```

---

## 🎓 Learning Resources

- **WordPress Child Themes:** https://developer.wordpress.org/themes/advanced-topics/child-themes/
- **GSAP Animations:** https://www.youtube.com/c/GreenSockLearning
- **Bootstrap Components:** https://getbootstrap.com/docs/5.3/components/
- **SEO Best Practices:** https://developers.google.com/search/docs
- **Core Web Vitals:** https://web.dev/vitals/

---

**Last Updated:** 26 marca 2025  
**For:** Fenster-Türen24 WordPress Project  
**By:** Development Team  

⭐ **Star the repo:** https://github.com/piotroq/fenstertureneu-wordpress-new-website
