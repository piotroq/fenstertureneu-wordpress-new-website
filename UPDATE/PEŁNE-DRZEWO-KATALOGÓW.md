# 📁 PEŁNE DRZEWO KATALOGÓW — Fenster-Türen24 WordPress Project

**Repozytorium:** https://github.com/piotroq/fenstertureneu-wordpress-new-website

---

## 🎯 Struktura katalogów (Full Tree)

```
fenstertureneu-wordpress-new-website/
│
├── 📁 .github/                          # GitHub-specific configuration
│   └── 📁 workflows/
│       ├── deploy-staging.yml           # GitHub Actions: auto-deploy to staging (optional)
│       ├── deploy-production.yml        # GitHub Actions: auto-deploy to production (gated)
│       ├── lighthouse-audit.yml         # GitHub Actions: performance check on PR
│       └── security-scan.yml            # GitHub Actions: SAST (security scanning)
│
├── 📁 ANALIZA/                          # Project analysis & research documentation
│   ├── Raport_analityczny_Fenster-Türen24.md    # Market analysis, SEO audit, competitive analysis
│   ├── fenster-tueren24-brandbook.md            # Brand guidelines (colors, typography, tone)
│   ├── fenster-tueren24-brandbook.docx          # Brand guidelines (Word format)
│   ├── PORTY-DOCKER.md                          # Docker port mapping reference
│   ├── PLAN.md                                  # Project plan & requirements
│   └── competitive-analysis.md                  # Competitor research (Internorm, Schüco, fensterversand)
│
├── 📁 SCREENSHOTS/                      # Visual references & inspiration
│   ├── gatre-homepage.png               # Gatre template - homepage screenshot
│   ├── gatre-services.png               # Gatre template - services page
│   ├── gatre-contact.png                # Gatre template - contact page
│   ├── gatre-about.png                  # Gatre template - about page
│   ├── gatre-portfolio.png              # Gatre template - portfolio/gallery
│   ├── fenster-tueren24-current.png     # Current website (state before rebuild)
│   └── progress/
│       ├── homepage-wip-20250326.png    # Work-in-progress homepage
│       ├── hero-section-draft.png       # Hero section iterations
│       └── ...                          # Progress screenshots
│
├── 📁 config/                           # Configuration files
│   ├── .env.example                     # Environment variables template
│   │   # DB_NAME=fenstertureneu_dev
│   │   # DB_USER=wordpress
│   │   # DB_PASSWORD=securepassword123
│   │   # WP_SITE_URL=http://localhost:9000
│   │   # WORDPRESS_DEBUG=true
│   │   # REDIS_HOST=redis
│   │   # GA_TRACKING_ID=G-XXXXXXXXXX
│   │
│   ├── .env.local                       # Local overrides (⚠️ NOT in git, .gitignored)
│   ├── wp-config-local.php              # Local WordPress config (database constants)
│   ├── php.ini                          # PHP configuration (memory_limit, upload_max, OPcache)
│   │   # memory_limit = 256M
│   │   # upload_max_filesize = 100M
│   │   # max_execution_time = 300
│   │   # opcache.enable = 1
│   │
│   ├── nginx.conf                       # Nginx reverse proxy config
│   │   # SSL configuration, compression (gzip), caching headers
│   │   # Proxy settings for upstream WordPress container
│   │
│   └── redis.conf                       # Redis configuration (optional)
│
├── 📁 docker/                           # Docker build & runtime configuration
│   ├── Dockerfile                       # Multi-stage Docker build
│   │   # FROM wordpress:latest (PHP 8.1-FPM)
│   │   # RUN apt-get install composer, wp-cli, git, curl
│   │   # COPY entrypoint.sh /
│   │   # ENTRYPOINT ["/entrypoint.sh"]
│   │
│   ├── docker-compose.yml               # Development environment (see: docker-compose.yml in root)
│   ├── docker-compose.prod.yml          # Production environment (see: docker-compose.prod.yml in root)
│   ├── entrypoint.sh                    # Container initialization script
│   │   # Database setup, plugin activation, WordPress core installation
│   │
│   ├── php.ini                          # PHP settings override
│   ├── nginx.conf                       # Nginx reverse proxy configuration
│   └── healthcheck.sh                   # Container health check script
│
├── 📁 docs/                             # Project documentation (markdown)
│   ├── README-ARCHITECTURE.md           # Technical decisions & system design
│   │   # Why child theme, why custom plugins, why Bootstrap+GSAP
│   │   # Performance targets, SEO strategy, security approach
│   │
│   ├── README-SETUP.md                  # Detailed local development setup
│   │   # Prerequisites, installation steps, troubleshooting
│   │   # Docker commands, WordPress CLI commands, npm scripts
│   │
│   ├── README-SEO.md                    # SEO implementation guide
│   │   # Schema.org JSON-LD (LocalBusiness, Product, FAQPage, BreadcrumbList)
│   │   # NAP consistency fixes, og:locale="de_DE" fix, lang="de-DE" attribute
│   │   # Local SEO strategy (city landing pages, Google Business Profile)
│   │   # Keyword research & mapping (18 menu items, content structure)
│   │
│   ├── README-PERFORMANCE.md            # Performance optimization guide
│   │   # Image optimization (WebP, AVIF, lazy loading)
│   │   # Code splitting (Webpack), asset minification (CSS, JS)
│   │   # Core Web Vitals strategy (LCP, FID, CLS targets)
│   │   # PageSpeed Insights 90+, Lighthouse 90+ targets
│   │   # Redis caching, OPcache configuration, Nginx compression
│   │
│   ├── README-SECURITY.md               # Security best practices
│   │   # CSRF protection (nonces), input sanitization, output escaping
│   │   # CSP headers, WPS Hide Login, .env variables
│   │   # Database security, backup strategy, monitoring
│   │
│   ├── README-PLUGINS.md                # Custom plugin development guide
│   │   # Plugin structure, hooks/filters, best practices
│   │   # fts-schema-markup, fts-seo-enhancements, fts-performance, fts-landing-pages
│   │
│   ├── README-THEME.md                  # Child theme customization guide
│   │   # Modifying styles, adding components, extending functionality
│   │   # Template hierarchy, hooks, filters
│   │
│   ├── README-DEPLOYMENT.md             # Production deployment checklist
│   │   # Pre-deploy checks, backup strategy, DNS migration
│   │   # SSL/TLS setup, caching headers, monitoring
│   │   # Post-deploy verification, rollback procedure
│   │
│   ├── README-BRAND.md                  # Brand implementation & design system
│   │   # Colors (#22499a, #1274b5, #edbc0e, #2D3436)
│   │   # Typography (Montserrat, Source Sans 3, IBM Plex Mono)
│   │   # Tone of voice, UI patterns, component library
│   │   # SCSS variables, CSS grid, Bootstrap customization
│   │
│   └── CHANGELOG.md                     # Version history & feature updates
│       # Tracks commits, deployments, breaking changes
│
├── 📁 scripts/                          # Automation scripts (Bash, Shell)
│   ├── install-wordpress.sh             # Initial WordPress setup
│   │   #!/bin/bash
│   │   # wp core install, theme activation, plugin installation
│   │   # Runs inside WordPress container
│   │
│   ├── import-demo-content.sh           # Import demo content
│   │   # Import sample posts, pages, products
│   │
│   ├── optimize-images.sh               # Batch image optimization
│   │   # Convert images to WebP, AVIF formats
│   │   # Generate thumbnails, optimize existing images
│   │   # Uses ImageMagick or similar tool
│   │
│   ├── backup-database.sh               # Database backup automation
│   │   # Mysqldump to timestamped file
│   │   # Compress with gzip, upload to backup storage
│   │
│   ├── generate-sitemaps.sh             # XML sitemap generation
│   │   # wp sitemap, XML sitemap for search engines
│   │
│   ├── pre-deploy-checklist.sh          # Pre-deployment validation
│   │   # Security checks, performance validation
│   │   # Database backup, asset compilation
│   │
│   ├── post-deploy-verification.sh      # Post-deployment checks
│   │   # Lighthouse score, Accessibility check
│   │   # Broken links, 404 errors, health checks
│   │
│   ├── deploy-staging.sh                # Deploy to staging environment
│   │   # Git checkout, Docker build, database migration
│   │
│   └── deploy-production.sh             # Deploy to production
│       # Backup database, pull latest code, restart services
│       # Run migrations, clear caches
│
├── 📁 sql/                              # Database files & migrations
│   ├── fenstertureneu_initial.sql       # Initial database dump
│   │   # WordPress core tables, initial posts, pages
│   │
│   ├── 📁 migrations/
│   │   ├── 001-create-landing-pages-cpt.sql         # Create custom post type
│   │   ├── 002-add-schema-markup-meta.sql           # Add meta fields for schema
│   │   ├── 003-add-landing-page-cities.sql          # Insert 8 city landing pages
│   │   ├── 004-create-performance-logs-table.sql    # Performance tracking
│   │   └── ...
│   │
│   ├── 📁 fixtures/
│   │   ├── sample-products.sql                      # Sample Fenster, Türen, Zubehör
│   │   ├── sample-posts.sql                         # Sample blog posts (ratgeber)
│   │   ├── sample-testimonials.sql                  # Sample client testimonials
│   │   └── sample-landing-pages.sql                 # Sample city landing pages
│   │
│   └── 📁 backups/
│       └── (daily timestamped backups: backup-2025-03-26-120000.sql.gz)
│
├── 📁 wp-content/                       # WordPress custom content
│   │
│   ├── 📁 themes/
│   │   │
│   │   └── 📁 responsywny-child/        # ⭐ CHILD THEME (main work here)
│   │       │
│   │       ├── 📁 assets/              # Static assets (CSS, JS, images, fonts)
│   │       │   │
│   │       │   ├── 📁 css/             # Stylesheets (SCSS → compiled CSS)
│   │       │   │   ├── _variables.scss              # SCSS variables (from brandbook)
│   │       │   │   │   # Colors: --color-primary, --color-secondary, --color-accent-gold
│   │       │   │   │   # Fonts: --font-heading, --font-body, --font-mono
│   │       │   │   │   # Spacing: --space-xs through --space-3xl
│   │       │   │   │   # Breakpoints: --breakpoint-sm, --breakpoint-md, --breakpoint-lg, --breakpoint-xl
│   │       │   │   │
│   │       │   │   ├── _utilities.scss              # Bootstrap utility extensions
│   │       │   │   │   # Custom utility classes (text shadows, transforms, etc.)
│   │       │   │   │
│   │       │   │   ├── _animations.scss             # GSAP/Anime.js keyframes
│   │       │   │   │   # @keyframes for fade-in, slide-up, bounce, parallax
│   │       │   │   │   # Animation utility classes (.fade-in, .slide-up-lg)
│   │       │   │   │
│   │       │   │   ├── _components.scss             # Custom component styles
│   │       │   │   │   # Buttons (primary, secondary, accent), cards, badges
│   │       │   │   │   # Hero sections, service cards, CTA blocks
│   │       │   │   │
│   │       │   │   ├── _responsive.scss             # Mobile-first media queries
│   │       │   │   │   # Bootstrap breakpoints: sm (576px), md (768px), lg (992px), xl (1200px), xxl (1400px)
│   │       │   │   │   # Custom breakpoints for specific layouts
│   │       │   │   │
│   │       │   │   ├── _accessibility.scss          # WCAG AA compliance
│   │       │   │   │   # Focus states, high contrast mode, skip links
│   │       │   │   │   # Screen reader visibility, keyboard navigation
│   │       │   │   │
│   │       │   │   ├── _forms.scss                  # Contact Form 7 styling
│   │       │   │   │   # Form inputs, buttons, validation states
│   │       │   │   │   # Fieldsets, labels, error messages
│   │       │   │   │
│   │       │   │   ├── _header-footer.scss          # Navigation & sticky menu
│   │       │   │   │   # Navbar (Bootstrap 5), sticky behavior
│   │       │   │   │   # Mobile hamburger menu, submenu styling
│   │       │   │   │
│   │       │   │   ├── _themes.scss                 # Color schemes & variants
│   │       │   │   │   # Light/dark mode (future), service-specific colors
│   │       │   │   │
│   │       │   │   ├── style.css                    # Main stylesheet
│   │       │   │   │   # Compiled from SCSS via Webpack
│   │       │   │   │   # Imports Bootstrap, custom styles, Google Fonts
│   │       │   │   │   # Critical CSS inline for above-the-fold
│   │       │   │   │
│   │       │   │   ├── editor-styles.css            # Classic editor styling
│   │       │   │   │   # TinyMCE editor appearance (match frontend styles)
│   │       │   │   │
│   │       │   │   └── print.css                    # Print styles
│   │       │   │       # Optimized for printing (hide nav, footer, etc.)
│   │       │   │
│   │       │   ├── 📁 js/              # JavaScript modules (Webpack bundled)
│   │       │   │   │
│   │       │   │   ├── 📁 components/  # Feature modules
│   │       │   │   │   ├── sticky-nav.js                # Sticky navbar (GSAP ScrollTrigger)
│   │       │   │   │   │   # Detects scroll, adds class for style changes
│   │       │   │   │   │   # Animates navbar on scroll (fade-in, color change)
│   │       │   │   │   │
│   │       │   │   │   ├── hero-animation.js            # Hero section GSAP animations
│   │       │   │   │   │   # Fades in hero image, title, CTA on page load
│   │       │   │   │   │   # Parallax scrolling effect
│   │       │   │   │   │
│   │       │   │   │   ├── lazy-load-images.js          # Native lazy loading + fallback
│   │       │   │   │   │   # Supports loading="lazy" attribute
│   │       │   │   │   │   # Fallback for older browsers (IntersectionObserver)
│   │       │   │   │   │   # Logs image loading performance
│   │       │   │   │   │
│   │       │   │   │   ├── form-validation.js           # Contact Form 7 enhancements
│   │       │   │   │   │   # Client-side validation (email, required fields)
│   │       │   │   │   │   # AJAX form submission (no page reload)
│   │       │   │   │   │   # Spam protection (honeypot, rate limiting)
│   │       │   │   │   │
│   │       │   │   │   ├── mobile-menu-toggle.js        # Hamburger menu animation
│   │       │   │   │   │   # Click handler for menu toggle button
│   │       │   │   │   │   # Animate menu with GSAP (slide-in, fade-in)
│   │       │   │   │   │   # Close menu on outside click or link click
│   │       │   │   │   │
│   │       │   │   │   ├── scroll-reveal.js             # Anime.js scroll-triggered reveals
│   │       │   │   │   │   # Observes elements, animates on scroll
│   │       │   │   │   │   # Stagger effects for grids (service cards, testimonials)
│   │       │   │   │   │
│   │       │   │   │   ├── image-optimizer.js           # WebP/AVIF fallback loading
│   │       │   │   │   │   # Checks browser support for modern formats
│   │       │   │   │   │   # Loads .avif, fallback to .webp, fallback to .jpg
│   │       │   │   │   │
│   │       │   │   │   ├── preloader-animation.js       # Page load spinner
│   │       │   │   │   │   # Animated SVG or CSS spinner
│   │       │   │   │   │   # Fades out on page fully loaded
│   │       │   │   │   │
│   │       │   │   │   ├── carousel.js                  # Testimonials/gallery carousel
│   │       │   │   │   │   # Anime.js carousel (testimonials, before-after)
│   │       │   │   │   │   # Touch support (swipe), keyboard navigation (arrows)
│   │       │   │   │   │
│   │       │   │   │   └── accordion.js                 # FAQ accordion
│   │       │   │   │       # Click to expand/collapse, smooth animation
│   │       │   │   │       # ARIA attributes for accessibility
│   │       │   │   │
│   │       │   │   ├── 📁 utils/      # Utility functions
│   │       │   │   │   ├── performance-monitor.js      # Core Web Vitals tracking
│   │       │   │   │   │   # Logs LCP, FID, CLS metrics
│   │       │   │   │   │   # Sends to GA4 for monitoring
│   │       │   │   │   │
│   │       │   │   │   ├── accessibility-helpers.js    # A11y utility functions
│   │       │   │   │   │   # Keyboard navigation, focus management
│   │       │   │   │   │   # ARIA label helpers
│   │       │   │   │   │
│   │       │   │   │   ├── dom-helpers.js              # Common DOM utilities
│   │       │   │   │   │   # Element selection, event delegation, classList
│   │       │   │   │   │
│   │       │   │   │   └── storage-helpers.js          # LocalStorage/SessionStorage
│   │       │   │   │       # User preferences (theme, sidebar collapse)
│   │       │   │   │
│   │       │   │   ├── gsap-setup.js                   # GSAP configuration
│   │       │   │   │   # Import GSAP, plugins (ScrollTrigger, Draggable)
│   │       │   │   │   # Register plugins, set defaults
│   │       │   │   │
│   │       │   │   ├── index.js                        # Main entry point
│   │       │   │   │   # Imports all components, initializes on DOM ready
│   │       │   │   │   # Entry point for Webpack bundler
│   │       │   │   │
│   │       │   │   ├── vendor-config.js                # Third-party library config
│   │       │   │   │   # Anime.js defaults, Motion One settings
│   │       │   │   │   # Bootstrap JS initialization
│   │       │   │   │
│   │       │   │   └── bundle.js                       # Webpack output (compiled & minified)
│   │       │   │       # Generated by npm run build
│   │       │   │       # Minified JavaScript, source maps
│   │       │   │
│   │       │   ├── 📁 images/          # Static images & SVGs
│   │       │   │   ├── logo.svg                        # Brand logo (vector)
│   │       │   │   ├── logo-dark.svg                   # Logo dark variant
│   │       │   │   ├── logo-symbol.svg                 # Logo symbol only (favicon, etc.)
│   │       │   │   ├── 📁 icons/                       # Custom SVG icons
│   │       │   │   │   ├── fenster-icon.svg            # Window icon
│   │       │   │   │   ├── turen-icon.svg              # Door icon
│   │       │   │   │   ├── montage-icon.svg            # Installation icon
│   │       │   │   │   ├── lieferung-icon.svg          # Delivery icon
│   │       │   │   │   ├── beratung-icon.svg           # Consultation icon
│   │       │   │   │   ├── energie-icon.svg            # Energy efficiency icon
│   │       │   │   │   ├── sicherheit-icon.svg         # Security icon
│   │       │   │   │   ├── qualitat-icon.svg           # Quality icon
│   │       │   │   │   └── ...                         # More service icons
│   │       │   │   │
│   │       │   │   └── 📁 patterns/                    # SVG patterns for backgrounds
│   │       │   │       ├── diagonal-lines.svg
│   │       │   │       ├── geometric-shapes.svg
│   │       │   │       ├── dots-grid.svg
│   │       │   │       └── ...
│   │       │   │
│   │       │   └── 📁 fonts/
│   │       │       └── (All fonts loaded from Google Fonts, no local files)
│   │       │           # Link rel="preload" in header for Montserrat, Source Sans 3, IBM Plex Mono
│   │       │
│   │       ├── 📁 template-parts/      # Reusable template components
│   │       │   │
│   │       │   ├── 📁 header/
│   │       │   │   ├── site-header.php              # <header> container
│   │       │   │   │   # Semantic HTML5, microdata, ARIA landmarks
│   │       │   │   │
│   │       │   │   ├── nav-primary.php              # Bootstrap 5 navbar
│   │       │   │   │   # <nav class="navbar navbar-expand-lg sticky-top">
│   │       │   │   │   # 18 menu items (Home, AGB, Angebot, etc.)
│   │       │   │   │   # Brand logo, search form, CTA button
│   │       │   │   │
│   │       │   │   ├── nav-mobile.php               # Mobile hamburger menu
│   │       │   │   │   # Offcanvas menu (Bootstrap offcanvas component)
│   │       │   │   │   # Click-outside close, swipe support
│   │       │   │   │
│   │       │   │   ├── search-form.php              # Search widget
│   │       │   │   │   # Search bar in header (optional)
│   │       │   │   │
│   │       │   │   └── branding.php                 # Logo + site title
│   │       │   │       # <a href="/">
│   │       │   │       #   <img src="logo.svg" alt="Fenster-Türen24">
│   │       │   │       #   <span>Ihr Fensterfachbetrieb im Ruhrgebiet</span>
│   │       │   │       # </a>
│   │       │   │
│   │       │   ├── 📁 footer/
│   │       │   │   ├── site-footer.php              # <footer> container
│   │       │   │   ├── footer-widgets.php           # Widget areas
│   │       │   │   │   # 4 columns: About, Links, Latest Blog, Newsletter
│   │       │   │   │
│   │       │   │   ├── footer-nav.php               # Footer links
│   │       │   │   │   # Impressum, Datenschutzrichtlinie, AGB, Kontakt
│   │       │   │   │
│   │       │   │   ├── footer-copyright.php         # Copyright text + social icons
│   │       │   │   │   # © 2025 Fenster-Türen24 | Facebook, Instagram, LinkedIn icons
│   │       │   │   │
│   │       │   │   └── back-to-top.js               # "Back to top" button
│   │       │   │       # Scroll-to-top with GSAP animation
│   │       │   │
│   │       │   ├── 📁 hero/
│   │       │   │   ├── hero-home.php                # Homepage hero
│   │       │   │   │   # Large background image, headline, subheading, CTA buttons
│   │       │   │   │   # GSAP animations (fade-in, parallax)
│   │       │   │   │
│   │       │   │   ├── hero-service.php             # Service page hero
│   │       │   │   │   # Smaller than homepage, with breadcrumbs
│   │       │   │   │
│   │       │   │   ├── hero-city-landing.php        # City landing page hero
│   │       │   │   │   # Dynamic city name, local phone number
│   │       │   │   │   # Dynamic service area map/list
│   │       │   │   │
│   │       │   │   └── hero-breadcrumbs.php         # Breadcrumb trail
│   │       │   │       # Home > Parent > Current page (schema.org BreadcrumbList)
│   │       │   │
│   │       │   ├── 📁 blocks/           # Content blocks (sections)
│   │       │   │   ├── cta-section.php              # Call-to-action blocks
│   │       │   │   │   # Button blocks with icon, text, link
│   │       │   │   │   # "Angebot anfordern", "Jetzt kontaktieren"
│   │       │   │   │
│   │       │   │   ├── features-grid.php            # Feature grid
│   │       │   │   │   # 2-4 column responsive grid
│   │       │   │   │   # Icon + title + description
│   │       │   │   │
│   │       │   │   ├── testimonials-carousel.php    # Client testimonials
│   │       │   │   │   # Carousel (Anime.js), rating stars
│   │       │   │   │   # Client name, photo, quote
│   │       │   │   │
│   │       │   │   ├── service-cards.php            # Service cards
│   │       │   │   │   # Fenster (Aluminium, Kunststoff, Holz)
│   │       │   │   │   # Türen (Haustüren, Innentüren, Schiebetüren)
│   │       │   │   │   # Zubehör (Rollläden, Fensterbänke, Griffe, etc.)
│   │       │   │   │   # Card design: image, title, description, link
│   │       │   │   │
│   │       │   │   ├── image-gallery.php            # Portfolio gallery
│   │       │   │   │   # Before/after gallery of installations
│   │       │   │   │   # Lightbox overlay (Anime.js), zoom on hover
│   │       │   │   │
│   │       │   │   ├── before-after-slider.php      # Before/after comparison
│   │       │   │   │   # Before/after image slider (Anime.js or CSS)
│   │       │   │   │   # Drag to compare, tap on mobile
│   │       │   │   │
│   │       │   │   ├── faq-accordion.php            # Frequently asked questions
│   │       │   │   │   # Expandable accordion items
│   │       │   │   │   # ARIA attributes (role, aria-expanded, aria-controls)
│   │       │   │   │
│   │       │   │   ├── stats-counter.js             # Numbers display
│   │       │   │   │   # Animated counters (10+ Jahre, 500+ Projekte, etc.)
│   │       │   │   │   # Anime.js count-up animation
│   │       │   │   │
│   │       │   │   ├── promo-banner.php             # Promotional banners
│   │       │   │   │   # Seasonal offers (KfW-Förderung, etc.)
│   │       │   │   │   # Eye-catching background, call-to-action
│   │       │   │   │
│   │       │   │   └── newsletter-signup.php        # Newsletter subscription
│   │       │   │       # Email input, submit button, success message
│   │       │   │
│   │       │   ├── 📁 content/
│   │       │   │   ├── page-header.php              # Page title + breadcrumbs
│   │       │   │   ├── entry.php                    # Post/page content wrapper
│   │       │   │   ├── entry-meta.php               # Post metadata
│   │       │   │   │   # Date, author, category, reading time
│   │       │   │   │
│   │       │   │   ├── entry-footer.php             # Post navigation
│   │       │   │   │   # Next/previous post links, related posts
│   │       │   │   │
│   │       │   │   └── pagination.php               # Archive pagination
│   │       │   │       # Previous/next page links, page numbers
│   │       │   │
│   │       │   └── 📁 forms/
│   │       │       ├── contact-form.php             # Contact Form 7 wrapper
│   │       │       │   # [contact-form-7 id="xxx"]
│   │       │       │   # Custom styling, validation messages
│   │       │       │
│   │       │       ├── inquiry-form.php             # Service inquiry form
│   │       │       │   # Fields: Name, Phone, Email, Service type, Message
│   │       │       │   # Customized CF7 form
│   │       │       │
│   │       │       └── newsletter-form.php          # Newsletter signup
│   │       │           # Email input, GDPR checkbox
│   │       │
│   │       ├── 📁 includes/            # Theme functionality (PHP)
│   │       │   ├── functions.php                    # Main theme setup
│   │       │   │   # add_action('wp_enqueue_scripts')
│   │       │   │   # add_action('wp_head'), add_action('wp_footer')
│   │       │   │   # Theme support (post-thumbnails, html5, etc.)
│   │       │   │
│   │       │   ├── hooks.php                       # Custom hooks & filters
│   │       │   │   # do_action('fts_before_main'), do_action('fts_after_main')
│   │       │   │   # apply_filters('fts_hero_image_url')
│   │       │   │
│   │       │   ├── class-walker-nav.php            # Custom nav walker
│   │       │   │   # Extends Walker_Nav_Menu
│   │       │   │   # Bootstrap navbar structure
│   │       │   │
│   │       │   ├── class-image-optimization.php    # Image optimization
│   │       │   │   # WebP/AVIF conversion, responsive images
│   │       │   │   # Lazy loading implementation
│   │       │   │
│   │       │   ├── class-schema-markup.php         # Schema.org generators
│   │       │   │   # Generate LocalBusiness, Product, FAQPage JSON-LD
│   │       │   │   # Hook into wp_head output
│   │       │   │
│   │       │   ├── class-language-fix.php          # Fix lang="de-DE"
│   │       │   │   # Hook into language_attributes filter
│   │       │   │   # Ensure lang="de-DE" not "pl-PL"
│   │       │   │
│   │       │   ├── filters.php                     # Content filters
│   │       │   │   # add_filter('the_title'), add_filter('the_content')
│   │       │   │   # Meta tag generation, CSP headers
│   │       │   │
│   │       │   ├── security.php                    # Security measures
│   │       │   │   # Content-Security-Policy headers
│   │       │   │   # CSRF nonce verification, input sanitization
│   │       │   │
│   │       │   ├── helpers.php                     # Utility functions
│   │       │   │   # get_hero_image(), get_service_cards()
│   │       │   │   # get_city_landing_page_context()
│   │       │   │
│   │       │   ├── migrations.php                  # Database migrations
│   │       │   │   # run_migration('001-landing-pages-cpt')
│   │       │   │
│   │       │   └── customizer.php                  # Customizer integration
│   │       │       # Customize colors, fonts, layout options
│   │       │
│   │       ├── 📁 layouts/             # Page layout templates
│   │       │   ├── layout-default.php              # 2-column layout (optional sidebar)
│   │       │   ├── layout-full-width.php           # Full-width (no sidebar)
│   │       │   ├── layout-landing.php              # Landing page (hero + sections)
│   │       │   ├── layout-blog.php                 # Blog post (sidebar for related)
│   │       │   └── layout-product.php              # Product page (gallery + specs)
│   │       │
│   │       ├── 📁 admin/               # Admin customizations
│   │       │   ├── customize-branding.php          # Customizer settings
│   │       │   │   # Color picker, font selection, logo upload
│   │       │   │
│   │       │   ├── admin-styles.css                # Backend styling
│   │       │   │   # Color dashboard widgets, metabox styling
│   │       │   │
│   │       │   ├── metabox-definitions.php         # Custom metaboxes
│   │       │   │   # Landing page metabox (city, radius, featured image)
│   │       │   │   # Product metabox (material, color, price)
│   │       │   │
│   │       │   └── dashboard-widgets.php           # Dashboard widgets
│   │       │       # Performance widget (Lighthouse score)
│   │       │       # Bookings widget (last 5 inquiries)
│   │       │
│   │       ├── style.css                           # Theme stylesheet header
│   │       │   # Theme Name: SzybkiKontakt Responsywny Child
│   │       │   # Template: responsywny
│   │       │   # Version: 1.0.0
│   │       │   # (Actual styles compiled to this file from SCSS)
│   │       │
│   │       ├── functions.php                       # Child theme functions
│   │       │   # require_once get_stylesheet_directory() . '/includes/functions.php';
│   │       │   # Loads custom functionality
│   │       │
│   │       ├── index.php                           # Fallback template
│   │       │   # Renders posts in standard loop
│   │       │
│   │       ├── single.php                          # Single post template
│   │       ├── page.php                            # Single page template
│   │       ├── archive.php                         # Archive/category template
│   │       ├── search.php                          # Search results template
│   │       ├── 404.php                             # 404 error page
│   │       │
│   │       ├── screenshot.png                      # Theme preview image (1200x900px)
│   │       │   # Displayed in WordPress theme selector
│   │       │
│   │       ├── README.md                           # Theme-specific documentation
│   │       │   # Installation, customization, troubleshooting
│   │       │
│   │       └── theme-info.txt                      # Theme metadata
│   │
│   ├── 📁 plugins/                      # Custom WordPress plugins
│   │   │
│   │   ├── 📁 fts-schema-markup/        # Schema.org JSON-LD generator
│   │   │   ├── fts-schema-markup.php
│   │   │   │   # Plugin Name: FTS Schema Markup
│   │   │   │   # Plugin URI: https://fenster-tueren24.eu/
│   │   │   │   # Version: 1.0.0
│   │   │   │
│   │   │   ├── 📁 includes/
│   │   │   │   ├── class-schema-generator.php      # Main schema generator
│   │   │   │   ├── class-nap-fixer.php            # NAP consistency checker
│   │   │   │   └── class-og-markup.php            # OpenGraph tags
│   │   │   │
│   │   │   ├── 📁 admin/
│   │   │   │   └── debug-schema.php                # Debug page (wp-admin)
│   │   │   │
│   │   │   └── README.md                           # Plugin documentation
│   │   │
│   │   ├── 📁 fts-seo-enhancements/    # SEO optimization plugin
│   │   │   ├── fts-seo-enhancements.php
│   │   │   ├── 📁 includes/
│   │   │   │   ├── class-meta-tags.php
│   │   │   │   ├── class-og-images.php
│   │   │   │   ├── class-canonical-urls.php
│   │   │   │   └── class-lang-attribute.php
│   │   │   ├── 📁 admin/
│   │   │   │   └── settings-page.php
│   │   │   └── README.md
│   │   │
│   │   ├── 📁 fts-performance/         # Performance optimization plugin
│   │   │   ├── fts-performance.php
│   │   │   ├── 📁 includes/
│   │   │   │   ├── class-image-optimization.php
│   │   │   │   ├── class-asset-minification.php
│   │   │   │   ├── class-lazy-loading.php
│   │   │   │   ├── class-caching-strategy.php
│   │   │   │   └── class-core-web-vitals.js
│   │   │   ├── 📁 admin/
│   │   │   │   └── performance-report.php
│   │   │   └── README.md
│   │   │
│   │   ├── 📁 fts-landing-pages/      # City landing pages CPT
│   │   │   ├── fts-landing-pages.php
│   │   │   ├── 📁 includes/
│   │   │   │   ├── class-cpt-landing-page.php      # Custom Post Type
│   │   │   │   ├── class-landing-rewrite.php       # URL rewrites
│   │   │   │   └── class-landing-metabox.php       # Custom fields
│   │   │   ├── 📁 templates/
│   │   │   │   └── single-landing-page.php
│   │   │   ├── 📁 admin/
│   │   │   │   └── landing-page-list.php
│   │   │   └── README.md
│   │   │
│   │   ├── 📁 fts-analytics-integration/  # GA4 + CWV tracking
│   │   │   ├── fts-analytics.php
│   │   │   ├── 📁 includes/
│   │   │   │   ├── class-google-analytics.php
│   │   │   │   └── class-cwv-tracking.js
│   │   │   ├── 📁 admin/
│   │   │   │   └── analytics-dashboard.php
│   │   │   └── README.md
│   │   │
│   │   └── 📁 fts-contact-form-enhancements/  # Form validation & spam protection
│   │       ├── fts-contact-form-enhancements.php
│   │       ├── 📁 includes/
│   │       │   ├── class-form-validation.js
│   │       │   ├── class-spam-protection.php
│   │       │   └── class-email-notifications.php
│   │       └── README.md
│   │
│   └── 📁 languages/                     # WordPress translations
│       ├── fenstertureneu-de_DE.po       # German translation (PO file)
│       ├── fenstertureneu-de_DE.mo       # Compiled translations (binary)
│       ├── fenstertureneu.pot            # Translation template
│       └── (Auto-generated by WordPress)
│
├── 📄 .editorconfig                      # Editor formatting standard
├── 📄 .env                               # Environment variables (dev, .gitignored)
├── 📄 .env.example                       # Environment template (in repo)
├── 📄 .eslintrc.json                     # ESLint JavaScript linting rules
├── 📄 .gitattributes                     # Git attributes (line endings, binary)
├── 📄 .gitignore                         # Files/folders to ignore in git
├── 📄 .stylelintrc.json                  # Stylelint CSS/SCSS linting rules
├── 📄 LICENSE                            # Project license (MIT or proprietary)
├── 📄 Makefile                           # Automation commands
│   # make dev, make build, make lighthouse, make deploy-staging, etc.
├── 📄 PORTY-DOCKER.md                    # Docker port mapping reference
├── 📄 README.md                          # Main project documentation (THIS FILE)
├── 📄 composer.json                      # PHP dependencies (WordPress, plugins)
├── 📄 composer.lock                      # Locked Composer versions
├── 📄 docker-compose.prod.yml            # Production Docker Compose
│   # WordPress + MySQL + Redis (optimized for production)
│   # SSL/TLS, health checks, resource limits
│
├── 📄 docker-compose.yml                 # Development Docker Compose
│   # WordPress, MySQL, Redis, Nginx, phpMyAdmin
│   # Ports: 9000 (WordPress), 9001 (MySQL), 9002 (Redis), 9003 (Nginx), 9004 (phpMyAdmin)
│
├── 📄 package.json                       # NPM JavaScript dependencies
│   # Bootstrap 5.3.8, GSAP, Anime.js, Motion One
│   # Webpack, Babel, ESLint, Stylelint
│
├── 📄 package-lock.json                  # Locked NPM versions
│
└── 📄 webpack.config.js                  # Webpack bundler configuration
    # Entry: wp-content/themes/responsywny-child/assets/js/index.js
    # Output: wp-content/themes/responsywny-child/assets/js/bundle.js
    # Loaders: babel-loader, style-loader, css-loader, sass-loader
    # Plugins: MiniCssExtractPlugin, UglifyJsPlugin
```

---

## 📊 Podsumowanie struktury

| Sekcja | Przeznaczenie | Status |
|--------|--------------|--------|
| **ANALIZA** | Raporty, research, competitive analysis | ✅ Reference |
| **SCREENSHOTS** | Visual inspirations, progress tracking | ✅ Reference |
| **config** | Konfiguracja (.env, php.ini, nginx.conf) | ✅ Ready |
| **docker** | Docker build & runtime files | ✅ Ready |
| **docs** | Developer documentation | ✅ Ready |
| **scripts** | Automation scripts (bash) | ✅ Ready |
| **sql** | Database files & migrations | ✅ Ready |
| **wp-content/themes** | Child theme (main work) | 🔄 In Progress |
| **wp-content/plugins** | Custom plugins (fts-*) | 🔄 In Progress |
| **wp-content/languages** | Translations (German) | ✅ Ready |
| **Root files** | .env, package.json, docker-compose.yml, etc. | ✅ Ready |

---

## 🎯 Quick Navigation

- **Development Setup:** `/docs/README-SETUP.md`
- **Architecture Decisions:** `/docs/README-ARCHITECTURE.md`
- **SEO Implementation:** `/docs/README-SEO.md`
- **Performance Optimization:** `/docs/README-PERFORMANCE.md`
- **Brand Implementation:** `/docs/README-BRAND.md`
- **Deployment Checklist:** `/docs/README-DEPLOYMENT.md`
- **Custom Plugins Guide:** `/docs/README-PLUGINS.md`
- **Child Theme Guide:** `/docs/README-THEME.md`
- **Security Best Practices:** `/docs/README-SECURITY.md`

---

**Last Updated:** March 26, 2025  
**Repository:** https://github.com/piotroq/fenstertureneu-wordpress-new-website  
**Website:** https://fenster-tueren24.eu/
