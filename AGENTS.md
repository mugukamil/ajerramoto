# AGENTS.md

Guidelines for AI coding agents working in this repository.

## Project Overview

AJERRA is a website for an enduro motorcycle company. Built with PHP, HTML5, and CSS3. Uses PHP includes for header/footer. No build system or JavaScript framework currently in use.

## Development Commands

### Running Locally

```bash
# Serve the site locally (choose one):
npx serve .
# or
python -m http.server 8000
# or open index.php directly in browser
```

### Linting (Recommended Setup)

```bash
# HTML validation
npx html-validate index.php

# CSS linting
npx stylelint "src/styles/**/*.css"

# Run all linting
npm run lint
```

### Testing

No automated tests currently. Manual testing:
- Open index.php in browser
- Test responsive breakpoints: 768px, 1200px, 1400px, 1600px
- Verify all links and images load correctly

## Code Style Guidelines

### PHP

- Pages use `.php` extension (index.php, category.php, product.php, cart.php, order.php)
- Header/footer included via `includes/header-*.php` and `includes/footer.php`
- Start local server with: `php -S localhost:1337`

### Header

- Fixed header, 90px height (`--header-height: 90px`)
- **index.php**: Header transparent, adds `.scrolled` class on scroll (dark background)
- **Inner pages**: Use `.page-with-header` class for 90px padding-top to account for fixed header
- **Search dropdown**: Click search icon toggles dropdown; submit button shows when input has value
- JavaScript for search is in `includes/footer.php`, scroll effect JS is in `index.php`

### HTML

**Structure:**
- Use HTML5 semantic elements (`<header>`, `<nav>`, `<section>`, `<article>`, `<footer>`)
- Include `lang="ru"` attribute on `<html>` element
- Use Russian language for content (this is a Russian-language website)

**Formatting:**
- 2-space indentation
- One element per line for readability
- Blank lines between major sections
- SVG icons inline in HTML (not external files)

**Accessibility:**
- Include `aria-label` on icon-only buttons
- Use descriptive `alt` text for images
- Link text should be descriptive

**Example:**
```html
<button class="icon-btn" aria-label="Поиск">
  <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
    <!-- SVG content -->
  </svg>
</button>
```

**SVG Icons:**
- Use inline SVGs for all icons (cart, arrows, decorative elements)
- For navigation arrows (prev/next), reuse the same SVG and flip with CSS:
  ```html
  <button class="nav-arrow prev">
    <img src="arrow.svg" style="transform: scaleX(-1)">
  </button>
  <button class="nav-arrow next">
    <img src="arrow.svg">
  </button>
  ```
- Cart icon SVG (14x14 for small, 18x18 for regular):
  ```html
  <svg width="14" height="14" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.25 8.25L10.5 15" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M14.25 8.25L11.25 3" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M1.5 8.25H16.5" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M2.625 8.25L3.825 13.8C3.89513 14.1439 4.08364 14.4523 4.35771 14.6716C4.63179 14.8909 4.97408 15.0071 5.325 15H12.675C13.0259 15.0071 13.3682 14.8909 13.6423 14.6716C13.9164 14.4523 14.1049 14.1439 14.175 13.8L15.45 8.25" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M3.375 11.625H14.625" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M3.75 8.25L6.75 3" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M6.75 8.25L7.5 15" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  ```

### CSS

**Architecture:**
- Single main stylesheet: `src/styles/main.css`
- Organize by section with clear comment headers
- Use CSS custom properties (variables) for theming

**CSS Custom Properties:**
Define in `:root`:
```css
:root {
  /* Colors */
  --color-primary: #FEB05D;
  --color-primary-dark: #DC872C;
  --color-bg: #F5F2F2;
  --color-bg-dark: #242424;
  --color-text: #242424;
  --color-text-light: #FFFFFF;
  --color-text-muted: #7B7B7B;
  --color-border: #D3D3D3;
  --color-card: #FFFFFF;

  /* Typography */
  --font-display: 'Bebas Neue', sans-serif;
  --font-body: 'Manrope', sans-serif;

  /* Spacing */
  --space-xs: 4px;
  --space-sm: 8px;
  --space-md: 16px;
  --space-lg: 24px;
  --space-xl: 32px;
  --space-2xl: 48px;
  --space-3xl: 64px;
  --space-4xl: 96px;

  /* Container */
  --container-padding: 192px;
  --container-max: 1728px;

  /* Transitions */
  --transition-fast: 150ms ease;
  --transition-base: 250ms ease;

  /* Border Radius */
  --radius-sm: 4px;
  --radius-md: 20px;
  --radius-lg: 34px;
  --radius-full: 9999px;
}
```

**Naming Conventions:**
- Use kebab-case for class names: `.product-card`, `.nav-link`, `.add-to-cart`
- Use BEM-inspired naming: block-element-modifier
- Avoid single-use IDs; prefer classes
- State classes: `.active`, `.dark`, `.wide`, `.last`

**Formatting:**
- One selector per line for multiple selectors
- Opening brace on same line as selector
- One property per line
- Space after colon in declarations
- No trailing whitespace
- Order: positioning → box model → typography → visual → animation

**Example:**
```css
.product-card {
  position: relative;
  display: flex;
  flex-direction: column;
  padding: var(--space-lg);
  background: var(--color-card);
  border: 1px solid var(--color-border-light);
  border-radius: var(--radius-md);
  transition: transform var(--transition-base);
}

.product-card:hover {
  transform: translateY(-4px);
}
```

**Section Comments:**
```css
/* ============================================
   SECTION NAME
   ============================================ */
```

### Responsive Design

Breakpoints defined:
- 1600px: Reduced container padding
- 1400px: Tablet landscape
- 1200px: Tablet portrait (nav hidden)
- 768px: Mobile

Update `--container-padding` inside media queries:
```css
@media (max-width: 1200px) {
  :root {
    --container-padding: 40px;
  }
}
```

### File Organization

```
/
├── index.php               # Main landing page
├── category.php            # Category/catalog page
├── product.php             # Product detail page
├── cart.php                # Cart page
├── order.php               # Checkout page
├── order-success.php       # Order confirmation
├── includes/
│   ├── header-home.php     # Light header for landing page
│   ├── header-page.php     # Dark header for other pages
│   └── footer.php          # Shared footer
├── src/
│   └── styles/
│       └── main.css        # Primary stylesheet
├── public/
│   └── assets/             # Static images
├── assets/                 # Alternative asset location
└── AGENTS.md               # This file
```

### Assets

- Images in `public/assets/` or `assets/`
- Use descriptive filenames or hash-based names
- Optimize images before adding
- SVGs preferred for icons (inline in HTML)

### Typography

**Fonts (Google Fonts):**
- Display: `'Bebas Neue'`
- Body: `'Manrope'` (weights: 400, 500, 600, 700)
- Logo: `'Krona One'`

**Font sizing:**
- Base: 16px
- Headings: 32-64px
- Body text: 14-20px
- Small text: 9-13px

### Color Palette

| Color | Variable | Usage |
|-------|----------|-------|
| #FEB05D | --color-primary | Primary accent, CTAs |
| #DC872C | --color-primary-dark | Links, highlights |
| #F5F2F2 | --color-bg | Page background |
| #242424 | --color-bg-dark | Dark sections |
| #7B7B7B | --color-text-muted | Secondary text |

### Error Handling

- Always include fallback fonts
- Use `object-fit: cover` for images with containers
- Test all interactive elements have hover/focus states
- Ensure color contrast meets WCAG standards

### Common Patterns

**Card component:**
```css
.card {
  background: var(--color-card);
  border: 1px solid var(--color-border-light);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-card);
  transition: transform var(--transition-base);
}

.card:hover {
  transform: translateY(-4px);
}
```

**Button styles:**
```css
.btn-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-md);
  padding: var(--space-lg) var(--space-2xl);
  background: var(--color-primary);
  color: var(--color-text);
  border-radius: var(--radius-full);
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 30px rgba(254, 176, 93, 0.5);
}
```

## Plan Mode

- Make the plan extremely concise. Sacrifice grammar for the sake of concision.
- At the end of each plan, give a list of unresolved questions to answer, if any.

## Notes

- Content is in Russian; maintain Russian for new content
- This is a marketing/e-commerce website, not a web application
- No JavaScript currently; if adding JS, consider vanilla JS first
- Maintain the existing visual design language when making changes

## Documentation Maintenance

- After implementing significant changes (new patterns, architecture decisions, component behavior), update both AGENTS.md and CLAUDE.md with relevant information
- This ensures future AI sessions have accurate context about the codebase
