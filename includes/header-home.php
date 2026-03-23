<!-- Header - Home/Landing Page (Light variant) -->
<header class="header" id="header">
  <div class="container">
    <a href="#" class="logo">AJERRA</a>
    <nav class="nav">
      <a href="#models" class="nav-link active">Модели</a>
      <a href="#parts" class="nav-link">Запчасти</a>
      <a href="#" class="nav-link">Туры</a>
      <a href="#about" class="nav-link">О нас</a>
      <a href="#contacts" class="nav-link">Контакты</a>
    </nav>
    <div class="header-actions">
      <button class="icon-btn icon-btn-search" aria-label="Поиск" id="search-toggle">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14 14L11.1067 11.1067" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M7.33333 12.6667C10.2789 12.6667 12.6667 10.2789 12.6667 7.33333C12.6667 4.38781 10.2789 2 7.33333 2C4.38781 2 2 4.38781 2 7.33333C2 10.2789 4.38781 12.6667 7.33333 12.6667Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <button class="icon-btn icon-btn-phone" aria-label="Телефон">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9.22133 11.0453C9.35902 11.1086 9.51413 11.123 9.66113 11.0863C9.80812 11.0496 9.93822 10.9639 10.03 10.8433L10.2667 10.5333C10.3909 10.3677 10.5519 10.2333 10.737 10.1408C10.9222 10.0482 11.1263 10 11.3333 10H13.3333C13.687 10 14.0261 10.1405 14.2761 10.3905C14.5262 10.6406 14.6667 10.9797 14.6667 11.3333V13.3333C14.6667 13.687 14.5262 14.0261 14.2761 14.2761C14.0261 14.5262 13.687 14.6667 13.3333 14.6667C10.1507 14.6667 7.09849 13.4024 4.84805 11.1519C2.59762 8.90151 1.33333 5.84926 1.33333 2.66667C1.33333 2.31304 1.47381 1.97391 1.72386 1.72386C1.97391 1.47381 2.31304 1.33333 2.66667 1.33333H4.66667C5.02029 1.33333 5.35943 1.47381 5.60948 1.72386C5.85952 1.97391 6 2.31304 6 2.66667V4.66667C6 4.87366 5.95181 5.07781 5.85924 5.26295C5.76667 5.44809 5.63226 5.60914 5.46667 5.73333L5.15467 5.96733C5.03228 6.06078 4.94601 6.19372 4.91053 6.34357C4.87504 6.49341 4.89252 6.65092 4.96 6.78933C5.87112 8.63991 7.36962 10.1365 9.22133 11.0453Z" stroke="currentColor" stroke-width="0.666667" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
      </button>
      <button class="icon-btn icon-btn-menu" aria-label="Меню" id="menu-toggle">
        <svg class="menu-icon-hamburger" width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line y1="0.5" x2="16" y2="0.5" stroke="currentColor"/>
          <line y1="7.5" x2="16" y2="7.5" stroke="currentColor"/>
        </svg>
        <svg class="menu-icon-close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M18 6L6 18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M6 6L18 18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <a href="cart.php" class="icon-btn icon-btn-cart" aria-label="Корзина">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.33333 14.6667C5.70152 14.6667 6 14.3682 6 14C6 13.6318 5.70152 13.3333 5.33333 13.3333C4.96514 13.3333 4.66667 13.6318 4.66667 14C4.66667 14.3682 4.96514 14.6667 5.33333 14.6667Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M12.6667 14.6667C13.0349 14.6667 13.3333 14.3682 13.3333 14C13.3333 13.6318 13.0349 13.3333 12.6667 13.3333C12.2985 13.3333 12 13.6318 12 14C12 14.3682 12.2985 14.6667 12.6667 14.6667Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M1.36667 1.36667H2.7L4.47333 9.64667C4.53839 9.94991 4.70711 10.221 4.95047 10.4132C5.19384 10.6055 5.4966 10.7069 5.80667 10.7H12.3267C12.6301 10.6995 12.9243 10.5955 13.1607 10.4052C13.397 10.2149 13.5614 9.94969 13.6267 9.65333L14.7267 4.7H3.41333" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="cart-badge">12</span>
      </a>
    </div>
    <div class="search-dropdown" id="search-dropdown">
      <input type="text" class="search-input" placeholder="Поиск по сайту.." id="search-input">
      <button class="search-submit" id="search-submit" aria-label="Найти">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14 14L11.1067 11.1067" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M7.33333 12.6667C10.2789 12.6667 12.6667 10.2789 12.6667 7.33333C12.6667 4.38781 10.2789 2 7.33333 2C4.38781 2 2 4.38781 2 7.33333C2 10.2789 4.38781 12.6667 7.33333 12.6667Z" stroke="#242424" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay" id="mobile-menu-overlay"></div>

<!-- Mobile Menu Panel -->
<nav class="mobile-menu" id="mobile-menu">
  <div class="mobile-menu-content">
    <a href="#models" class="mobile-menu-link">Модели</a>
    <div class="mobile-menu-item">
      <button class="mobile-menu-link mobile-menu-toggle" aria-expanded="false">
        Запчасти
        <svg class="chevron-down" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
        <svg class="chevron-up" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
      </button>
      <div class="mobile-menu-subcategories">
        <a href="#" class="mobile-menu-sublink">Мотоциклы</a>
        <a href="#" class="mobile-menu-sublink">Экипировка</a>
        <a href="#" class="mobile-menu-sublink">Шины</a>
        <a href="#" class="mobile-menu-sublink">Еще что-то</a>
        <a href="#" class="mobile-menu-sublink">Тюнинг</a>
        <a href="#" class="mobile-menu-sublink">Аксессуары</a>
        <a href="#" class="mobile-menu-sublink">Химия</a>
      </div>
    </div>
    <a href="#" class="mobile-menu-link">Туры</a>
    <a href="#about" class="mobile-menu-link">О нас</a>
    <a href="#contacts" class="mobile-menu-link">Контакты</a>
  </div>
</nav>
