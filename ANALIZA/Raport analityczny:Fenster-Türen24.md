# Raport analityczny: Fenster-Türen24 — audyt, rynek i strategia rozwoju

Firma Fenster-Türen24 z Marl dysponuje fundamentalną przewagą rynkową — oferuje pełen serwis (sprzedaż + montaż + dostawa) okien i drzwi ze wszystkich materiałów — ale jej obecność cyfrowa jest krytycznie słaba. **Ogólna ocena techniczno-SEO strony wynosi zaledwie 3,2/10**, z błędami takimi jak ustawienie języka na polski zamiast niemiecki, brak profilu Google Business i treści nieaktualizowane od 2018 roku. Jednocześnie rynek DACH przechodzi transformację: segment renowacji stanowi już **70% rynku okien w Niemczech**, a lokalna konkurencja cyfrowa w regionie Ruhrgebiet jest ekstremalnie słaba. To stwarza wyjątkową szansę na szybkie zdobycie dominacji w lokalnym SEO przy relatywnie niewielkim nakładzie.

---

## Moduł 1: Audyt techniczno-SEO obecnej strony

### Stan domeny i infrastruktura techniczna

Strona działa pod adresem `https://xn--fenster-tren24-osb.eu/` (Punycode dla `fenster-türen24.eu`). Wykorzystanie umlauta (ü) w domenie generuje problemy z udostępnianiem linków i kompatybilnością — wiele systemów nieprawidłowo konwertuje URL. Strona oparta jest na **WordPressie** z motywem „responsywny-child" stworzonym przez polską agencję szybkikontakt.pl. Plugin SEO: **All in One SEO Pro v4.9.0**. Certyfikat SSL jest aktywny (HTTPS działa poprawnie).

**Kluczowe dane techniczne strony:**

| Element | Stan | Ocena (1-10) |
|---------|------|:---:|
| SSL/HTTPS | ✅ Aktywny | 7 |
| CMS WordPress | ✅ Działa | 5 |
| robots.txt | ✅ Poprawny | 7 |
| sitemap.xml | ⚠️ Obecny, ale z błędami | 5 |
| Atrybut lang HTML | ❌ `pl-PL` zamiast `de-DE` | **1** |
| og:locale | ❌ `pl_PL` zamiast `de_DE` | **1** |
| Schema.org / JSON-LD | ❌ Brak całkowity | **0** |
| Google Business Profile | ❌ Brak | **1** |
| Spójność NAP w katalogach | ❌ 3 różne numery telefonu, 2 adresy | **2** |
| Aktualność treści | ❌ Ostatnia aktualizacja: październik 2018 | **1** |

### Błędy krytyczne w meta tagach i strukturze HTML

**Tag tytułowy** strony głównej brzmi: `Fenster & Türen - Fenster, Türen` — jest redundantny, nie zawiera nazwy firmy ani lokalizacji (Marl). Powinien brzmieć np.: *„Fenster & Türen kaufen in Marl | Fenster-Türen24 — Aluminium, Kunststoff, Holz"*.

**Meta description** jest obcięty (ponad 300 znaków), zawiera literówkę „Aluminuim" i nie posiada wezwania do działania. Zaczyna się od sloganu zamiast kluczowych informacji.

Najpoważniejszy problem to **atrybut `lang="pl-PL"` w tagu `<html>`** — strona jest identyfikowana przez Google jako polskojęzyczna, co dramatycznie obniża widoczność w niemieckich wynikach wyszukiwania. Jest to bezpośredni efekt wykorzystania polskiego motywu WordPress.

Na stronie głównej znajdują się **dwa tagi H1** (zamiast jednego), siedem tagów H2 (w tym widgety stopki jak „Facebook" i „Kontaktieren Sie uns"), oraz liczne błędy ortograficzne w niemieckim tekście: „funktions fähigsten", „Wärme – einsparung", „Stossgriffe, türggriffe".

### Brak danych strukturalnych i lokalnego SEO

Strona **nie zawiera żadnych znaczników Schema.org** — brak LocalBusiness, Product, BreadcrumbList, FAQPage czy WebSite. Dla firmy usługowej działającej lokalnie jest to jeden z najpoważniejszych braków. Brak profilu **Google Business Profile** oznacza, że firma nie pojawia się w Google Maps ani w lokalnym „3-pack" wyników.

W katalogach branżowych wykryto poważne niespójności danych NAP (Name, Address, Phone):

| Katalog | Adres | Telefon | Uwagi |
|---------|-------|---------|-------|
| Strona WWW | Hülsstr. 31 | +49 173 6744073 | — |
| 11880.com | Josefstr. 52 ❌ | (02365) 8567424 | 1 negatywna recenzja |
| Cylex.de | Hülsstr. 31 ✅ | 01520 3662455 | Brak recenzji |

Trzy różne numery telefonów i dwa różne adresy w katalogach to sygnał alarmowy dla algorytmów Google oceniających wiarygodność lokalnego biznesu.

### Treść i architektura informacji

Strona główna zawiera zaledwie **~150 słów** właściwego tekstu (zalecane minimum: 500–1000). Mapa witryny zawiera 28 stron, ale z nawigacji głównej dostępnych jest tylko 16 — **12 stron produktowych jest osieroconych** (np. szczegółowe strony systemów KBE 70mm, Trocal 88mm). Obrazy posiadają generyczne atrybuty alt: „logo", „slide1", „box 1" — żaden nie zawiera słów kluczowych branżowych. Treści nie były aktualizowane **od ponad 7 lat**.

---

## Moduł 2: Rynek okien i drzwi w regionie DACH

### Wielkość rynku i dynamika zmian

Rynek okien i drzwi w regionie DACH przeszedł głęboką korektę w latach 2023–2024, ale sygnały stabilizacji pojawiły się w 2025 roku. W Niemczech w 2024 roku sprzedano **12,9 mln jednostek okiennych** (spadek o 8,7% r/r), natomiast prognoza na 2025 rok wskazuje na pierwsze odbicie: **+0,3%** według VFF/Heinze. Prognoza na 2026 to **+2,8%**.

| Rynek | Przychody 2024 | Zmiana r/r | Prognoza 2025 |
|-------|---------------|-----------|---------------|
| Niemcy (okna) | ~12,9 mln FE | -8,7% | +0,3% |
| Niemcy (drzwi zewn.) | 1,136 tys. szt. | -8,1% | +1,0% |
| Austria (okna) | €903 mln | -4,9% | +0,9% |
| Szwajcaria (okna) | CHF 943 mln | +1,8% | -1,0% |

Cały niemiecki sektor okien i fasad generuje **~€34 mld przychodu rocznie** i zatrudnia ok. 300 000 osób w ~58 000 firmach. Segment samych producentów okien to **€9,02 mld** rocznych przychodów.

### Renowacja jako motor wzrostu

**Renowacja stanowi już ok. 70% niemieckiego rynku okien** — to kluczowa informacja strategiczna dla Fenster-Türen24. Budownictwo mieszkaniowe nowe spadło o ponad 50% od 2022 roku, ale segment wymiany okien w istniejących budynkach rośnie o **+3,5% rocznie**. Wskaźnik termomodernizacji (Sanierungsquote) wynosi zaledwie **0,69%** przy celu 2,0% — oznacza to ogromny potencjał na dekady.

Segmentacja materiałowa rynku jest stabilna: **PVC/Kunststoff dominuje z 53,4%** udziałem, aluminium zajmuje ~18%, drewno ~15%, a drewno-aluminium ~9%.

### Subsydia i regulacje jako katalizatory

Program **BEG EM (BAFA)** oferuje **15–20% dotacji** na wymianę okien spełniających wymóg Uw ≤ 0,95 W/(m²K). Kredyt uzupełniający KfW 358 zapewnia do **€120 000** finansowania. Alternatywnie, § 35c EStG daje **20% odliczenie podatkowe** rozłożone na 3 lata. Te programy bezpośrednio napędzają popyt na okna energooszczędne z potrójnym oszkleniem.

### Sezonowość i kanały dystrybucji

Szczyty popytu przypadają na **marzec–maj** i **wrzesień–październik**. Czas realizacji zamówień w 2025 roku wynosi: okna PVC 2–6 tygodni, aluminiowe 6–12 tygodni, drewniane 10–16 tygodni. **Sprzedaż online rośnie** najszybciej — udział internetowy w rynku drzwi wewnętrznych osiąga ~9,5%, a w oknach wciąż rośnie dzięki konfiguratorom online. Kluczowy trend: **model hybrydowy** — konfiguracja online + lokalna instalacja.

---

## Moduł 3: Analiza konkurencji

### Porównanie strategiczne pięciu kategorii konkurentów

| Cecha | Internorm | Schüco | REHAU | Lokalni (Marl) | Online (fensterversand) |
|-------|-----------|--------|-------|-----------------|------------------------|
| Przychody | €431 mln (2024) | ~$2,5 mld | ~€3 mld (grupa) | <€1 mln | ~$1,9 mln/mies. |
| Sprzedaż bezpośrednia | Przez dealerów | Przez przetwórców | Przez przetwórców | Bezpośrednia | Online bezpośrednia |
| Montaż | Przez partnerów | Przez partnerów | N/D | Tak | Nie |
| Jakość strony WWW | Doskonała | Doskonała | Dobra | Bardzo słaba | Doskonała |
| Szac. ruch miesięczny | 200–400K | 500K–1M | 300–600K | <2K | 517K |

**Internorm** (internorm.com) to „Europejska marka okienna nr 1" z Austrii — oferuje premium okna i drzwi przez sieć 1300+ partnerów. Posiada konfigurator online, podcast, blog z poradnikami. Słabość: brak sprzedaży bezpośredniej, ceny premium, wolniejsza logistyka do NRW.

**Schüco** (schueco.com) to globalny lider systemów aluminiowych z siedzibą w **Bielefeld (NRW!)** — bliskość geograficzna. Przychód ~$2,5 mld, najszersze portfolio produktowe w branży. Słabość: model B2B/systemowy, nie sprzedają konsumentom końcowym.

**REHAU** (rehau.com) to producent profili PVC — dostarcza systemy profilowe do lokalnych producentów okien. Firma nie sprzedaje bezpośrednio konsumentom, ale jej marka jest rozpoznawalna w branży.

### Lokalna konkurencja w regionie Marl/Ruhrgebiet

Lokalni konkurenci mają **skrajnie słabą obecność cyfrową**:

**Express Fenster** (expressfenster.de) — obsługuje Marl, prosta strona WordPress/Elementor, cienka treść, brak bloga. Ranking na „Fenster Marl" mimo niskiej jakości. **GeileFenster.de** — z Herten (8 km od Marl), strona na kreatorze Strato, przestarzałe techniki SEO (keyword stuffing), jednoosobowa działalność. Dalej: Fenster Reichel (Herne), Fenster Hampel (Recklinghausen), OLIVA GmbH (Marl — producent, 110 pracowników).

### Dealerzy online — fensterversand.com i fenster24.de

**Fensterversand.com** (Neuffer GmbH, Stuttgart, od 1872 r.) to lider z **~517 000 sesji miesięcznie**, przychodem ~$1,9 mln/mies. i szerokim asortymentem od €27 za okno PVC. Reklama TV (RTL, VOX), certyfikaty Trusted Shops. **Kluczowa słabość: nie oferuje montażu.**

**Fenster24.de** ma ~67 440 sesji/mies. i średnią wartość zamówienia ~€775. Silna domena (keyword domain), ale siedmiokrotnie mniejszy ruch niż fensterversand. Również nie oferuje montażu.

### Kluczowa luka rynkowa

Duzi producenci (Internorm, Schüco, REHAU) nie sprzedają bezpośrednio konsumentom. Dealerzy online (fensterversand, fenster24) nie montują. Lokalni konkurenci mają fatalne strony internetowe. **Nikt na rynku NRW nie oferuje profesjonalnego modelu: konfiguracja online + sprzedaż + montaż przez jedną firmę z nowoczesną stroną.**

---

## Moduł 4: Keyword research — rynek niemiecki

### Najważniejsze frazy kluczowe z priorytetyzacją

**Head keywords (wysoki wolumen, wysoka konkurencja):**

| Fraza | Szac. wolumen/mies. | KD | Intencja |
|-------|---------------------|-----|---------|
| Haustüren | 40 000–60 000 | Wysoka | Komercyjna |
| Schiebetüren | 15 000–25 000 | Wysoka | Komercyjna |
| Kunststofffenster | 10 000–15 000 | Wysoka | Komercyjna |
| Rollläden | 10 000–15 000 | Wysoka | Komercyjna |
| Fenster kaufen | 8 000–12 000 | Wysoka | Transakcyjna |
| Fenster Preise | 8 000–12 000 | Wysoka | Komercyjna |
| Balkontüren | 8 000–12 000 | Wysoka | Komercyjna |

**Long-tail keywords z intencją zakupową (najcenniejsze dla firmy):**

| Fraza | Szac. wolumen | KD | Priorytet |
|-------|-------------|-----|----------|
| Fenster austauschen Kosten | 1 000–2 000 | Średnia | WYSOKI |
| Neue Fenster einbauen lassen | 500–1 000 | Średnia | WYSOKI |
| Haustür mit Seitenteil | 500–1 000 | Średnia | WYSOKI |
| Kunststofffenster kaufen günstig | 300–600 | Średnia | WYSOKI |
| Fenster kaufen NRW | 100–300 | Niska | WYSOKI |
| Haustüren Montage | 200–500 | Niska | WYSOKI |

**Lokalne frazy SEO (niska konkurencja, wysokie ROI):**

| Fraza | Szac. wolumen | KD |
|-------|-------------|-----|
| Fenster Recklinghausen | 100–200 | Niska |
| Fensterbauer NRW | 100–300 | Niska–Średnia |
| Fenster NRW | 200–500 | Niska–Średnia |
| Fensterbauer Marl | 50–100 | Niska |
| Fenster Marl | 50–100 | Niska |
| Fenster Dorsten | 50–100 | Niska |
| Fenster Bottrop | 50–100 | Niska |

**Frazy semantyczne/LSI o wysokim priorytecie:** KfW Förderung Fenster (1 000–2 000/mies.), Einbruchschutz Fenster (1 000–2 000), Dreifachverglasung (1 000–2 000), U-Wert Fenster (1 000–2 000), RAL Montage (500–1 000), Schallschutzfenster (1 000–2 000).

**Frazy informacyjne (content marketing):** „Was kosten neue Fenster" (2 000–4 000/mies.), „Dreifachverglasung vs Zweifachverglasung" (500–1 000), „Fenster Förderung 2026" (500–1 000), „Fenster Material Vergleich" (200–500).

### Strategia keywords: trzy warstwy

Warstwa 1 (natychmiast): lokalne frazy — dedykowane landing pages dla miast Marl, Recklinghausen, Dorsten, Bottrop, Gelsenkirchen, Herten, Gladbeck. Warstwa 2 (3–6 miesięcy): long-tail z intencją zakupową — strony produktowo-usługowe zoptymalizowane pod frazy typu „Fenster kaufen NRW". Warstwa 3 (6–12 miesięcy): head keywords — budowanie autorytetu tematycznego przez content marketing i link building.

---

## Moduł 5: Analiza SWOT

### Strengths (mocne strony)

Fenster-Türen24 posiada **ponad 10 lat doświadczenia** w sprzedaży i montażu okien i drzwi. Firma oferuje **pełną gamę materiałów** — aluminium, PVC/Kunststoff i drewno — co pozwala obsłużyć każdy segment cenowy. Model biznesowy obejmuje **kompleksową usługę**: doradztwo, sprzedaż, dostawę, montaż i demontaż starych okien — to unikalna propozycja wartości, której nie oferują ani wielcy producenci, ani dealerzy online. Firma obsługuje zarówno klientów **B2C (prywatnych)** jak i **B2B (deweloperzy, firmy)**, co dywersyfikuje źródła przychodów. Lokalizacja w **Marl/Ruhrgebiet** — najgęściej zaludnionym regionie Niemiec (18 mln mieszkańców NRW) z ogromnym zasobem budynków z lat 1950–1970 wymagających termomodernizacji. Współpraca z rozpoznawalnymi markami profili (LOBO Türen widoczny na stronie). Forma prawna UG zapewnia ochronę prawną.

### Weaknesses (słabe strony)

**Krytycznie słaba obecność online** — strona oceniona na 3,2/10, nieaktualizowana od 2018 roku. **Brak profilu Google Business** — firma jest niewidoczna w Google Maps i lokalnych wynikach. **Atrybut języka ustawiony na polski** — strona jest traktowana przez Google jako polskojęzyczna. **Brak danych strukturalnych** Schema.org — zerowy wynik w tym aspekcie. **Niespójne dane NAP** w katalogach — 3 różne numery telefonów, 2 adresy. Strona zrealizowana przez polską agencję bez specjalizacji w rynku niemieckim. **Brak strategii content marketingowej** — zaledwie ~150 słów na stronie głównej. Brak widocznego brandbooka, spójnej identyfikacji wizualnej. Informacje o **postępowaniu upadłościowym** (sygn. 164 IN 94/22, Amtsgericht Essen) mogą stanowić barierę zaufania.

### Opportunities (szanse)

**Rosnący segment renowacji** — 70% rynku okien to wymiana, a Sanierungsquote wynosi zaledwie 0,69% (cel: 2,0%), co oznacza dekady popytu. **Hojne programy dotacji** (BAFA 15–20%, KfW kredyty, ulgi podatkowe) obniżają barierę cenową dla klientów. **Ekstremalnie słaba lokalna konkurencja cyfrowa** — Express Fenster i GeileFenster.de mają prymitywne strony, co pozwala na szybkie zdobycie TOP 3 w lokalnych wynikach. **Niezagospodarowana nisza**: nikt w regionie nie oferuje modelu „konfiguracja online + montaż przez tę samą firmę". **NRW jako największy rynek** — 18 mln mieszkańców, gęsta zabudowa z okresu powojennego. Rosnąca cyfryzacja branży — klienci coraz częściej szukają okien online przed decyzją zakupową. Możliwość pozycjonowania się jako **„Fachbetrieb z regionu"** z osobistym doradztwem vs. anonimowe sklepy online.

### Threats (zagrożenia)

**Duże marki** (Internorm, Schüco) z budżetami marketingowymi wielokrotnie wyższymi. **Dealerzy online** (fensterversand.com — 517K sesji/mies.) z agresywnym cenowo modelem. **Platformy porównawcze** (Check24, Aroundhome, MyHammer) przejmujące ruch z intencją zakupową i pobierające prowizje. Recesja w budownictwie mieszkaniowym nowym (-52% od 2022). Rosnące koszty materiałów i presja cenowa ze strony polskich importerów. Niepewność regulacyjna (zmiany GEG, nowa koalicja CDU/SPD). Postępowanie upadłościowe jako ryzyko reputacyjne.

---

## Moduł 6: Brandbook i identyfikacja wizualna

### Pozycjonowanie marki i USP

Rekomendowany **positioning**: *„Twój lokalny ekspert od okien i drzwi w Ruhrgebiet — profesjonalne doradztwo, sprzedaż i montaż z jednej ręki."* Model powinien podkreślać trzy filary: (1) kompleksowość usługi, (2) lokalną bliskość i osobiste podejście, (3) wieloletnią fachowość.

**USP (Unique Selling Proposition):**
*„Alles aus einer Hand — od doradztwa po montaż. Okna i drzwi z aluminium, PVC i drewna, profesjonalnie zamontowane przez lokalnych fachowców z Ruhrgebiet."*

**Proponowany tagline/slogan:** *„Fenster-Türen24 — Ihr Fensterfachbetrieb im Ruhrgebiet"* lub w wersji bardziej emocjonalnej: *„Fenster-Türen24 — Weil Ihr Zuhause es verdient."* (Bo Twój dom na to zasługuje.)

### Paleta kolorów premium

Proponowana paleta kolorystyczna łączy solidność branży budowlanej z nowoczesnością i profesjonalizmem:

| Funkcja | Kolor | HEX | Zastosowanie |
|---------|-------|-----|-------------|
| Primary (granat/navy) | Ciemny granat | `#1B2A4A` | Logo, nagłówki, nawigacja |
| Secondary (antracyt) | Antracyt | `#2D3436` | Tekst body, tła sekcji |
| Accent (złoto/miedź) | Ciepłe złoto | `#C8963E` | CTA, akcenty, wyróżnienia |
| Neutral jasny | Jasny szary | `#F5F5F0` | Tło strony |
| Neutral średni | Średni szary | `#8D9196` | Tekst drugorzędny, obramowania |
| Success/eco | Zielony | `#2E7D32` | Elementy eko/energooszczędne |
| Biały | Czysty biały | `#FFFFFF` | Przestrzeń, karty, kontrast |

Granat symbolizuje zaufanie i stabilność. Złoto/miedź nawiązuje do premium jakości i rzemiosła. Antracyt jest kolorem dominującym w nowoczesnej stolarce aluminiowej. Zielony sygnalizuje efektywność energetyczną.

### Typografia (Google Fonts)

| Zastosowanie | Font | Styl |
|-------------|------|------|
| Nagłówki (H1–H3) | **Montserrat** | Bold/SemiBold, wielkość 28–48px |
| Tekst body | **Source Sans 3** | Regular/Light, wielkość 16–18px |
| Akcenty/CTA | **Montserrat** | SemiBold, uppercase, letter-spacing 1px |
| Dane techniczne | **IBM Plex Mono** | Regular, wielkość 14px |

Montserrat to geometryczny sans-serif komunikujący nowoczesność i profesjonalizm. Source Sans 3 zapewnia doskonałą czytelność w dłuższych tekstach po niemiecku.

### Kierunek wizualny

**Styl fotografii:** Jasne, naturalne światło. Zdjęcia gotowych realizacji — okna i drzwi sfotografowane z zewnątrz i wewnątrz budynków w regionie Ruhrgebiet. Zdjęcia procesu montażu — ekipa w jednolitych, czystych strojach roboczych z logo. Zdjęcia „before/after" remontów. Unikać stockowych zdjęć — inwestować w autentyczne fotografie własnych realizacji.

**Ikony i elementy graficzne:** Minimalistyczne ikony liniowe w stylu outline (grubość 1,5–2px) w kolorze primary lub accent. Ikony dla: materiałów (aluminium, PVC, drewno), usług (montaż, dostawa, doradztwo), cech (energooszczędność, bezpieczeństwo, ciepło). Subtelne geometryczne elementy dekoracyjne nawiązujące do profili okiennych.

### Tone of voice i język komunikacji

**Ton:** Profesjonalny, ale przystępny. Fachowy bez nadmiernego żargonu technicznego. Pewny siebie, ale nie arogancki. Lokalny i osobisty — „Wir" (my) zamiast bezosobowych form.

**Zasady językowe:** Zwracanie się per „Sie" (Pan/Pani) — standard w niemieckiej branży B2C budowlanej. Aktywne, konkretne sformułowania zamiast ogólników. Zawsze podkreślanie korzyści dla klienta, nie tylko cech produktu. Włączanie lokalnych odniesień do Marl, Ruhrgebiet, NRW.

---

## Moduł 7: Plan naprawczy z priorytetyzacją

### Priorytet KRYTYCZNY — natychmiast (tydzień 1–2)

**1. Zmiana atrybutu języka HTML i OG locale**

Aktualny stan jest najbardziej szkodliwy ze wszystkich wykrytych problemów. W pliku `header.php` motywu:

```html
<!-- PRZED (błędnie): -->
<html dir="ltr" lang="pl-PL">

<!-- PO (poprawnie): -->
<html dir="ltr" lang="de-DE">
```

W ustawieniach AIOSEO lub functions.php motywu dziecka:
```php
// Wymuszenie poprawnego locale
add_filter('locale', function() { return 'de_DE'; });
add_filter('aioseo_og_locale', function() { return 'de_DE'; });
```

**2. Utworzenie profilu Google Business**

Zarejestrować firmę na business.google.com z danymi: Fenster-Türen24, Hülsstr. 31, 45772 Marl. Dodać: godziny otwarcia, numer telefonu (jeden, spójny), zdjęcia realizacji, kategorie „Fensterbauer", „Türenhersteller", „Fenster- und Türeneinbau". Obszar usługowy: Marl, Recklinghausen, Dorsten, Bottrop, Gelsenkirchen, Herten, Gladbeck, Haltern am See, Herne.

**3. Dodanie Schema.org LocalBusiness JSON-LD**

```json
{
  "@context": "https://schema.org",
  "@type": "HomeAndConstructionBusiness",
  "name": "Fenster-Türen24",
  "description": "Verkauf und Montage von Fenstern und Türen aus Aluminium, Kunststoff und Holz in Marl und Umgebung.",
  "url": "https://fenster-tueren24.eu/",
  "telephone": "+49-173-6744073",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Hülsstr. 31",
    "addressLocality": "Marl",
    "postalCode": "45772",
    "addressRegion": "NRW",
    "addressCountry": "DE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "51.6553",
    "longitude": "7.0867"
  },
  "areaServed": [
    {"@type": "City", "name": "Marl"},
    {"@type": "City", "name": "Recklinghausen"},
    {"@type": "City", "name": "Dorsten"},
    {"@type": "City", "name": "Gelsenkirchen"},
    {"@type": "City", "name": "Bottrop"},
    {"@type": "City", "name": "Herten"}
  ],
  "priceRange": "€€",
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
    "opens": "08:00",
    "closes": "17:00"
  }
}
```

**4. Korekta NAP we wszystkich katalogach**

Ujednolicić adres (Hülsstr. 31), numer telefonu i nazwę firmy we wszystkich katalogach: 11880.com, Cylex, Gelbe Seiten, Öffnungszeitenbuch. Zarejestrować firmę w brakujących katalogach: Yelp.de, GoLocal.de, KennstDuEinen.de, MyHammer, Aroundhome.

### Priorytet WYSOKI — miesiąc 1–3

**5. Przepisanie meta tagów na każdej podstronie**

Strona główna:
```html
<title>Fenster & Türen kaufen in Marl | Fenster-Türen24 — Aluminium, Kunststoff, Holz</title>
<meta name="description" content="Fenster-Türen24 in Marl: Ihr Fachbetrieb für Fenster und Türen aus Aluminium, Kunststoff und Holz. ✓ Beratung ✓ Verkauf ✓ Montage ✓ Über 10 Jahre Erfahrung. Jetzt Angebot anfordern!">
<link rel="canonical" href="https://fenster-tueren24.eu/">
<meta property="og:image" content="https://fenster-tueren24.eu/images/og-image.jpg">
```

**6. Rozbudowa treści strony głównej** do minimum 800 słów z naturalnymi słowami kluczowymi: Fensterbauer Marl, Fenster NRW, Haustüren Montage, energetische Sanierung, KfW-Förderung.

**7. Naprawa hierarchii nagłówków** — jeden H1 na stronę, usunięcie H2 z widgetów stopki, dodanie H3 do podsekcji.

**8. Stworzenie landing pages dla miast:** `/fenster-marl/`, `/fenster-recklinghausen/`, `/fenster-dorsten/`, `/fenster-bottrop/`, `/fenster-gelsenkirchen/`, `/fenster-herten/`. Każda strona: min. 500 słów unikalnej treści, lokalne odniesienia, formularz kontaktowy, Schema.org.

**9. Optymalizacja obrazów** — opisowe alt texts (np. `alt="Aluminium Haustür montiert in Marl NRW"`), konwersja do WebP, lazy loading, wymiary width/height.

**10. Aktywne zbieranie recenzji Google** — systematyczny proces proszenia klientów po montażu o opinię.

### Priorytet ŚREDNI — miesiąc 3–6

**11. Propozycja architektury nowej strony WordPress:**

```
fenster-tueren24.eu/
├── / (Startseite)
├── /fenster/
│   ├── /fenster/kunststofffenster/
│   ├── /fenster/aluminium-fenster/
│   ├── /fenster/holzfenster/
│   └── /fenster/holz-aluminium-fenster/
├── /tueren/
│   ├── /tueren/haustüren/
│   ├── /tueren/innentüren/
│   ├── /tueren/schiebetüren/
│   └── /tueren/balkontüren/
├── /zubehoer/
│   ├── /zubehoer/rolllaeden/
│   ├── /zubehoer/fensterbaenke/
│   ├── /zubehoer/türgriffe-stossgriffe/
│   └── /zubehoer/briefkasten/
├── /leistungen/
│   ├── /leistungen/montage/
│   ├── /leistungen/demontage-entsorgung/
│   └── /leistungen/lieferung/
├── /ratgeber/ (blog)
│   ├── /ratgeber/fenster-kosten/
│   ├── /ratgeber/kfw-foerderung-fenster/
│   ├── /ratgeber/dreifachverglasung/
│   └── ...
├── /referenzen/ (realizacje z galeriami)
├── /ueber-uns/
├── /kontakt/
├── /[miasto]/ (landing pages lokalne)
├── /impressum/
├── /datenschutz/
└── /agb/
```

**12. Content marketing** — publikacja 2 artykułów miesięcznie w `/ratgeber/`:
Tematy na start: „Was kosten neue Fenster für ein Einfamilienhaus?", „KfW-Förderung für Fenster 2026 — So sparen Sie", „Dreifachverglasung vs. Zweifachverglasung", „Fenster Material Vergleich: Kunststoff, Aluminium oder Holz?"

**13. Strategia link buildingu dla rynku DACH:**

Etap 1 — Fundament: wpisy w katalogach branżowych (fensterbau.org, bauen.de, MyHammer, Aroundhome, StarOfService), lokalne katalogi firm (IHK Nord Westfalen, stadtbranchenbuch.com), profile na platformach recenzyjnych (Trustpilot, ProvenExpert, Google Reviews).

Etap 2 — Partnerstwa: backlinki od dostawców profili (np. strona „Fachpartner" producenta LOBO, VEKA, Kömmerling lub Rehau). Lokalne partnerstwa z firmami komplementarnymi — malarz, elektryk, dekarz — wzajemne linkowanie. Sponsoring lokalnych inicjatyw w Marl (Stadtfest, Sportverein) z linkiem na ich stronach.

Etap 3 — Content-driven: guest posts na portalach budowlanych (hausbau-portal.net, renovieren.de, energieheld.de). Tworzenie infografik o kosztach termomodernizacji w NRW (linkbait). Lokalne PR — artykuły w Marler Zeitung lub Recklinghäuser Zeitung o projektach renowacji.

---

## Podsumowanie i kluczowe wnioski

Fenster-Türen24 stoi przed rzadko spotykaną kombinacją: **poważnych wewnętrznych problemów cyfrowych i wyjątkowo korzystnych warunków zewnętrznych**. Strona internetowa wymaga gruntownej przebudowy — od zmiany jednego atrybutu HTML (`lang="pl-PL"` → `lang="de-DE"`), przez utworzenie profilu Google Business, po budowę całej strategii contentowej od zera. Jednocześnie rynek renowacji okien w Niemczech jest napędzany regulacjami (GEG), subsydiami (BAFA/KfW) i ogromnym zasobem budynków wymagających termomodernizacji — przy wskaźniku modernizacji zaledwie **0,69%** wobec celu 2,0%.

Najważniejsze odkrycie analityczne: **w regionie Marl/Ruhrgebiet nie istnieje ani jeden konkurent z profesjonalną stroną internetową oferujący pełen model online + montaż**. Express Fenster rankuje na „Fenster Marl" z cienką, generyczną treścią. GeileFenster.de operuje na kreatorze Strato z 2015 roku. Fensterversand.com z 517K sesji miesięcznie sprzedaje okna online, ale nie montuje. Schüco z Bielefeld nie sprzedaje konsumentom. Ta luka jest szansą, którą profesjonalna strona z lokalnym SEO i autentycznym contentem może wypełnić w ciągu **3–6 miesięcy**. Koszt realizacji kluczowych napraw (priorytet krytyczny i wysoki) szacuję na **€3 000–8 000** — inwestycję, która przy prawidłowej realizacji powinna zwrócić się w ciągu pierwszych 6 miesięcy działania.

Rekomendowane trzy pierwsze działania: (1) natychmiastowa korekta techniczna HTML/locale i utworzenie Google Business Profile (dzień 1–7), (2) stworzenie 8 landing pages lokalnych dla miast w promieniu 30 km od Marl (tydzień 2–4), (3) uruchomienie systematycznego zbierania recenzji Google od obecnych i byłych klientów (ciągle). Te trzy działania, przy zerowym lub minimalnym budżecie, mogą zapewnić firmie widoczność w lokalnych wynikach wyszukiwania w ciągu 4–8 tygodni.