# AGENTS.md

Guidelines for AI coding agents working in this repository.

## Project Overview

AJERRA is a static website for an enduro motorcycle company. Built with vanilla HTML5 and CSS3. No build system or JavaScript framework currently in use.

## Development Commands

### Running Locally

```bash
# Serve the site locally (choose one):
npx serve .
# or
python -m http.server 8000
# or open index.html directly in browser
```

### Linting (Recommended Setup)

```bash
# HTML validation
npx html-validate index.html

# CSS linting
npx stylelint "src/styles/**/*.css"

# Run all linting
npm run lint
```

### Testing

No automated tests currently. Manual testing:
- Open index.html in browser
- Test responsive breakpoints: 768px, 1200px, 1400px, 1600px
- Verify all links and images load correctly

## Code Style Guidelines

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
├── index.html              # Main HTML file
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

## Notes

- Content is in Russian; maintain Russian for new content
- This is a marketing/e-commerce website, not a web application
- No JavaScript currently; if adding JS, consider vanilla JS first
- Maintain the existing visual design language when making changes
