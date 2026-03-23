<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-brand">
        <a href="index.php" class="footer-logo">AJERRA</a>
      </div>
      <div class="footer-nav">
        <div class="footer-col catalog-col">
          <h4>Каталог</h4>
          <div class="catalog-grid">
            <ul>
              <li><a href="#">Мотоэкипировка</a></li>
              <li><a href="#">Защита</a></li>
              <li><a href="#">Мотоаксессуары</a></li>
              <li><a href="#">Расходники и запчасти</a></li>
            </ul>
            <ul>
              <li><a href="#">Тюнинг</a></li>
              <li><a href="#">Комплекты</a></li>
              <li><a href="#">Повседневная одежда и обувь</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-col">
          <h4>Компания</h4>
          <ul>
            <li><a href="#">Доставка</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
          <div class="social-links">
	        <a href="#" class="social-link" aria-label="Instagram">
	          <img src="public/assets/ac40dbf8bb5dfba43d41bbfa1d15ace20b703ee0.svg" alt="" width="24" height="24">
	        </a>
            <a href="#" class="social-link" aria-label="VK">
              <img src="public/assets/77be5db52bc6407aa8ecbcdfda68620ef9ecbc32.svg" alt="" width="24" height="24">
            </a>
            <a href="#" class="social-link" aria-label="YouTube">
              <img src="public/assets/a1418aa0ce7c6407cd26f34b1c7cbeabe4eed82c.svg" alt="" width="24" height="24">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="footer-divider"></div>
      <p class="copyright">Продукция сертифицирована © AjerraMoto 2020 - 2025</p>
    </div>
  </div>
</footer>

<script>
  // Search dropdown functionality
  const searchToggle = document.getElementById('search-toggle');
  const searchDropdown = document.getElementById('search-dropdown');
  const searchInput = document.getElementById('search-input');
  const searchSubmit = document.getElementById('search-submit');

  if (searchToggle && searchDropdown) {
    searchToggle.addEventListener('click', function(e) {
      e.preventDefault();
      searchDropdown.classList.toggle('active');
      if (searchDropdown.classList.contains('active')) {
        searchInput.focus();
      }
    });

    document.addEventListener('click', function(e) {
      if (!searchDropdown.contains(e.target) && !searchToggle.contains(e.target)) {
        searchDropdown.classList.remove('active');
      }
    });

    searchInput.addEventListener('input', function() {
      if (this.value.trim().length > 0) {
        searchSubmit.classList.add('visible');
      } else {
        searchSubmit.classList.remove('visible');
      }
    });
  }

  // Mobile Menu Toggle
  const header = document.getElementById('header');
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

  function toggleMobileMenu() {
    if (!header || !mobileMenu || !mobileMenuOverlay) return;
    const isOpen = header.classList.toggle('menu-open');
    mobileMenu.classList.toggle('active');
    mobileMenuOverlay.classList.toggle('active');
    document.body.classList.toggle('menu-open');
  }

  function closeMobileMenu() {
    if (!header || !mobileMenu || !mobileMenuOverlay) return;
    header.classList.remove('menu-open');
    mobileMenu.classList.remove('active');
    mobileMenuOverlay.classList.remove('active');
    document.body.classList.remove('menu-open');
  }

  if (menuToggle) {
    menuToggle.addEventListener('click', toggleMobileMenu);
  }

  if (mobileMenuOverlay) {
    mobileMenuOverlay.addEventListener('click', closeMobileMenu);
  }

  // Close menu on link click
  const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
  mobileMenuLinks.forEach(link => {
    link.addEventListener('click', closeMobileMenu);
  });

  // Mobile submenu toggle (Запчасти expand/collapse)
  const submenuToggleBtn = document.querySelector('.mobile-menu-toggle');
  const subcategories = document.querySelector('.mobile-menu-subcategories');

  if (submenuToggleBtn && subcategories && mobileMenu) {
    submenuToggleBtn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      const isExpanded = submenuToggleBtn.getAttribute('aria-expanded') === 'true';
      submenuToggleBtn.setAttribute('aria-expanded', !isExpanded);
      subcategories.style.display = isExpanded ? 'none' : 'flex';
      mobileMenu.classList.toggle('submenu-open', !isExpanded);
    });
  }
</script>
