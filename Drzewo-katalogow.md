## Część 1: Drzewo katalogów

```markdown
fenstertureneu-wordpress-new-website/
│
├── 📁 .github/
│   └── workflows/
│       └── deploy-staging.yml          # Deploy do staging (opcjonalny dla przyszłości)
│
├── 📁 wp-content/
│   ├── 📁 themes/
│   │   └── 📁 responsywny-child/       # Child theme dla "Responsywny" parent
│   │       ├── 📁 assets/
│   │       │   ├── 📁 css/
│   │       │   │   ├── _variables.scss           # SCSS variables (kolory, fonty, spacing z brandbook)
│   │       │   │   ├── _utilities.scss           # Utility classes (extensions do Bootstrap)
│   │       │   │   ├── _animations.scss          # GSAP/Anime.js keyframes
│   │       │   │   ├── _components.scss          # Custom component styles
│   │       │   │   ├── _responsive.scss          # Mobile-first media queries
│   │       │   │   ├── _accessibility.scss       # WCAG AA improvements
│   │       │   │   └── style.css                 # Main stylesheet (compiled from SCSS)
│   │       │   ├── 📁 js/
│   │       │   │   ├── 📁 components/
│   │       │   │   │   ├── sticky-nav.js         # Sticky navigation menu
│   │       │   │   │   ├── hero-animation.js     # Hero section GSAP animations
│   │       │   │   │   ├── lazy-load-images.js   # Native lazy loading + fallback
│   │       │   │   │   ├── form-validation.js    # Contact Form 7 enhancements
│   │       │   │   │   ├── mobile-menu.js        # Mobile hamburger toggle
│   │       │   │   │   └── scroll-reveal.js      # Anime.js scroll-triggered reveals
│   │       │   │   ├── 📁 utils/
│   │       │   │   │   ├── image-optimizer.js    # WebP/AVIF fallback loading
│   │       │   │   │   ├── performance-monitor.js # Core Web Vitals tracking
│   │       │   │   │   └── accessibility-helpers.js # A11y utility functions
│   │       │   │   ├── index.js                  # Main entry point
│   │       │   │   └── gsap-setup.js             # GSAP initialization & defaults
│   │       │   ├── 📁 images/
│   │       │   │   ├── logo.svg                  # Brand logo (SVG)
│   │       │   │   ├── logo-symbol.svg           # Logo symbol only
│   │       │   │   ├── icons/                    # Custom SVG icons (nicht Bootstrap Icons)
│   │       │   │   └── patterns/                 # SVG patterns dla backgrounds
│   │       │   └── 📁 fonts/
│   │       │       └── (preload paths, not files — pobierane z Google Fonts)
│   │       ├── 📁 template-parts/
│   │       │   ├── header/
│   │       │   │   ├── site-header.php           # <header> wrapper
│   │       │   │   ├── nav-primary.php           # Main navigation (sticky)
│   │       │   │   ├── nav-mobile.php            # Mobile menu (hamburger)
│   │       │   │   └── branding.php              # Logo + tagline
│   │       │   ├── footer/
│   │       │   │   ├── site-footer.php           # <footer> wrapper
│   │       │   │   ├── footer-widgets.php        # Widget areas (About, Links, Blog, Newsletter)
│   │       │   │   ├── footer-nav.php            # Footer navigation (Impressum, Datenschutz, AGB)
│   │       │   │   └── footer-copyright.php      # Copyright + social links
│   │       │   ├── hero/
│   │       │   │   ├── hero-home.php             # Homepage hero section
│   │       │   │   ├── hero-service.php          # Service page hero template
│   │       │   │   └── hero-city-landing.php     # Lokalne landing pages hero
│   │       │   ├── blocks/
│   │       │   │   ├── cta-section.php           # Call-to-action blocks
│   │       │   │   ├── features-grid.php         # 2-4 column feature grid
│   │       │   │   ├── testimonials.php          # Client testimonials carousel
│   │       │   │   ├── service-cards.php         # Fenster/Türen/Zubehör cards
│   │       │   │   ├── image-gallery.php         # Portfolio/Realisierungen gallery
│   │       │   │   ├── before-after.php          # Before/after image slider
│   │       │   │   └── faq-accordion.php         # FAQs (expandable, A11y-ready)
│   │       │   ├── content/
│   │       │   │   ├── page-header.php           # Page title + breadcrumbs
│   │       │   │   ├── entry.php                 # Post/page content wrapper
│   │       │   │   ├── entry-meta.php            # Post metadata (date, author, category)
│   │       │   │   └── pagination.php            # Archive pagination
│   │       │   └── forms/
│   │       │       ├── contact-form.php          # Contact Form 7 container
│   │       │       ├── inquiry-form.php          # Service inquiry form
│   │       │       └── newsletter-signup.php      # Newsletter subscription
│   │       ├── 📁 includes/
│   │       │   ├── functions.php                 # Theme setup, enqueues, hooks (główne)
│   │       │   ├── hooks.php                     # Custom action/filter definitions
│   │       │   ├── class-walker-nav.php          # Custom nav walker dla Bootstrap navbar
│   │       │   ├── class-image-optimization.php  # Image optimization class
│   │       │   ├── class-schema-markup.php       # Schema.org JSON-LD generation
│   │       │   ├── filters.php                   # Content filters (meta tags, CSP headers)
│   │       │   ├── security.php                  # Security enhancements (CSP, CSRF, sanitization)
│   │       │   └── helpers.php                   # Utility functions (get_hero_image(), etc.)
│   │       ├── 📁 layouts/
│   │       │   ├── layout-default.php            # 2-col (sidebar optional)
│   │       │   ├── layout-full-width.php         # Full width (no sidebar)
│   │       │   ├── layout-landing.php            # Landing page layout (hero + sections)
│   │       │   └── layout-blog.php               # Blog post layout
│   │       ├── 📁 admin/
│   │       │   ├── customize-branding.php        # Customizer setup dla kolorów/fontów
│   │       │   ├── admin-styles.css              # Backend UI improvements
│   │       │   └── metabox-definitions.php       # Custom meta boxes dla pages
│   │       ├── style.css                         # Theme stylesheet header (compiled)
│   │       ├── functions.php                     # Child theme functions
│   │       ├── screenshot.png                    # Theme preview (1200x900)
│   │       └── theme-name.txt                    # Theme info file
│   │
│   ├── 📁 plugins/
│   │   ├── 📁 fts-schema-markup/                 # Custom plugin: Schema.org JSON-LD
│   │   │   ├── fts-schema-markup.php            # Main plugin file
│   │   │   ├── includes/
│   │   │   │   ├── class-schema-generator.php   # LocalBusiness, Product, FAQPage schemas
│   │   │   │   └── class-nap-fixer.php          # NAP data consistency checks
│   │   │   └── templates/
│   │   │       └── schema-debug.php              # Debug output (dev only)
│   │   │
│   │   ├── 📁 fts-seo-enhancements/              # Custom plugin: SEO tweaks
│   │   │   ├── fts-seo-enhancements.php         # Main plugin file
│   │   │   ├── includes/
│   │   │   │   ├── class-meta-tags.php          # Meta title/description overrides
│   │   │   │   ├── class-og-images.php          # OpenGraph image generation
│   │   │   │   └── class-canonical-urls.php     # Canonical URL management
│   │   │   └── admin/
│   │   │       └── settings-page.php             # Plugin settings UI
│   │   │
│   │   ├── 📁 fts-performance/                   # Custom plugin: Performance optimization
│   │   │   ├── fts-performance.php              # Main plugin file
│   │   │   ├── includes/
│   │   │   │   ├── class-image-optimization.php # WebP/AVIF conversion
│   │   │   │   ├── class-asset-minification.php # CSS/JS minification
│   │   │   │   ├── class-lazy-loading.php       # Native lazy load + fallback
│   │   │   │   └── class-caching-strategy.php   # Redis/OPcache setup
│   │   │   └── admin/
│   │   │       └── performance-report.php        # Lighthouse score display
│   │   │
│   │   ├── 📁 fts-landing-pages/                 # Custom plugin: City landing pages CPT
│   │   │   ├── fts-landing-pages.php            # Main plugin file
│   │   │   ├── includes/
│   │   │   │   ├── class-cpt-landing-page.php   # Custom Post Type definition
│   │   │   │   ├── class-landing-rewrite.php    # Custom URL rewrites (/fenster-marl/, etc.)
│   │   │   │   └── class-landing-metabox.php    # Meta fields (city, radius, keywords)
│   │   │   └── templates/
│   │   │       └── single-landing-page.php       # Landing page template
│   │   │
│   │   └── 📁 fts-analytics-integration/         # Custom plugin: GA4 + Core Web Vitals
│   │       ├── fts-analytics.php                # Main plugin file
│   │       ├── includes/
│   │       │   ├── class-google-analytics.php   # GA4 integration
│   │       │   └── class-cwv-tracking.php       # Core Web Vitals JS injection
│   │       └── admin/
│   │           └── analytics-dashboard.php       # Backend analytics view
│   │
│   └── 📁 languages/
│       ├── fenstertureneu-de_DE.po               # German translations (primary)
│       ├── fenstertureneu-de_DE.mo               # Compiled German translations
│       └── fenstertureneu.pot                    # Translation template (generated)
│
├── 📁 docker/
│   ├── Dockerfile                       # WordPress + PHP 8.1 + Composer
│   ├── nginx.conf                       # Nginx vhost configuration (SSL, compression)
│   ├── php.ini                          # PHP configuration (limits, OPcache, error_log)
│   └── entrypoint.sh                    # Container initialization script
│
├── 📁 docs/
│   ├── ARCHITECTURE.md                  # Technical architecture & decision rationale
│   ├── SEO-IMPLEMENTATION.md             # SEO strategy + schema markup details
│   ├── PERFORMANCE-OPTIMIZATION.md       # PageSpeed/Lighthouse optimization guide
│   ├── BRANCHING-STRATEGY.md             # Git workflow dla solo developera
│   ├── DATABASE-MIGRATIONS.md            # Notes on DB schema changes
│   ├── SECURITY-CHECKLIST.md             # Security best practices implemented
│   ├── PLUGIN-DEVELOPMENT.md             # Guide for writing custom plugins
│   ├── THEME-CUSTOMIZATION.md            # Child theme extension guide
│   └── DEPLOYMENT.md                     # Production deployment instructions
│
├── 📁 config/
│   ├── .env.example                      # Environment variables template
│   ├── .env.local                        # Local development env (NOT in git)
│   ├── wp-config-local.php               # Local WordPress config
│   ├── php.ini                           # PHP settings (development)
│   └── nginx.conf                        # Nginx configuration
│
├── 📁 scripts/
│   ├── install-wordpress.sh               # Initial WordPress setup
│   ├── import-demo-content.sh             # Demo/test content import
│   ├── optimize-images.sh                 # Batch image optimization (.avif, WebP)
│   ├── backup-database.sh                 # Database backup automation
│   └── generate-sitemaps.sh               # XML sitemap generation
│
├── docker-compose.yml                   # Local development environment (WordPress, MySQL, Redis, Nginx)
├── docker-compose.prod.yml               # Production environment configuration
├── .gitignore                            # Git ignore rules
├── .editorconfig                         # Editor configuration (formatting consistency)
├── package.json                          # Frontend dependencies (Bootstrap, GSAP, etc.)
├── package-lock.json                     # Locked dependency versions
├── composer.json                         # PHP dependencies (WordPress plugins)
├── composer.lock                         # Locked composer versions
├── webpack.config.js                     # Webpack config dla asset bundling
├── .eslintrc.json                        # ESLint configuration
├── .stylelintrc.json                     # Stylelint configuration
├── README.md                             # Main documentation (setup, deployment, development)
└── LICENSE                               # MIT or proprietary license
```

---
