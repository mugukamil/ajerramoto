<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Категория — AJERRA Moto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Krona+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="src/styles/main.css">
  <link rel="stylesheet" href="src/styles/category.css">
</head>
<body>
  <div class="page page-with-header">
    <?php include "includes/header-page.php"; ?>

    <!-- Mobile Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebar-overlay"></div>

    <!-- Mobile Filter Toggle Button -->
    <button class="mobile-filter-toggle" id="mobile-filter-toggle">
      <span>Показать фильтры</span>
      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.49997 15C7.49991 15.1394 7.53868 15.276 7.61194 15.3946C7.6852 15.5131 7.79005 15.609 7.91472 15.6713L9.41472 16.4213C9.5291 16.4784 9.65618 16.5054 9.78391 16.4996C9.91163 16.4938 10.0358 16.4555 10.1445 16.3882C10.2532 16.3209 10.343 16.227 10.4052 16.1153C10.4674 16.0036 10.5 15.8779 10.5 15.75V10.5C10.5001 10.1283 10.6383 9.76988 10.8877 9.49425L16.305 3.5025C16.4021 3.39492 16.4659 3.26151 16.4888 3.11841C16.5117 2.97531 16.4926 2.82865 16.4339 2.69616C16.3752 2.56366 16.2794 2.45102 16.158 2.37184C16.0366 2.29266 15.8949 2.25034 15.75 2.25H2.24997C2.10493 2.25005 1.96301 2.29216 1.84141 2.37123C1.71981 2.45029 1.62375 2.56292 1.56485 2.69547C1.50596 2.82802 1.48676 2.97481 1.50959 3.11804C1.53242 3.26128 1.59629 3.39482 1.69347 3.5025L7.11222 9.49425C7.36163 9.76988 7.49981 10.1283 7.49997 10.5V15Z" stroke="#562C00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>

    <!-- Mobile Filter Action Buttons -->
    <div class="mobile-filter-actions" id="mobile-filter-actions">
      <button class="btn-filter-clear" id="mobile-btn-clear">
        <span>очистить</span>
        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 16.5L11.25 13.5" stroke="#919191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M14.25 10.5C14.4489 10.5 14.6397 10.421 14.7803 10.2803C14.921 10.1397 15 9.94891 15 9.75V9C15 8.60218 14.842 8.22064 14.5607 7.93934C14.2794 7.65804 13.8978 7.5 13.5 7.5H11.25C11.0511 7.5 10.8603 7.42098 10.7197 7.28033C10.579 7.13968 10.5 6.94891 10.5 6.75V3C10.5 2.60218 10.342 2.22064 10.0607 1.93934C9.77936 1.65804 9.39782 1.5 9 1.5C8.60218 1.5 8.22064 1.65804 7.93934 1.93934C7.65804 2.22064 7.5 2.60218 7.5 3V6.75C7.5 6.94891 7.42098 7.13968 7.28033 7.28033C7.13968 7.42098 6.94891 7.5 6.75 7.5H4.5C4.10218 7.5 3.72064 7.65804 3.43934 7.93934C3.15804 8.22064 3 8.60218 3 9V9.75C3 9.94891 3.07902 10.1397 3.21967 10.2803C3.36032 10.421 3.55109 10.5 3.75 10.5" stroke="#919191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M14.2499 10.5H3.7499L2.27015 15.5753C2.24373 15.6855 2.24266 15.8003 2.26701 15.9111C2.29137 16.0218 2.34051 16.1256 2.41075 16.2146C2.48099 16.3036 2.5705 16.3755 2.67255 16.425C2.77459 16.4744 2.88652 16.5001 2.9999 16.5H14.9999C15.1133 16.5001 15.2252 16.4744 15.3273 16.425C15.4293 16.3755 15.5188 16.3036 15.5891 16.2146C15.6593 16.1256 15.7084 16.0218 15.7328 15.9111C15.7571 15.8003 15.7561 15.6855 15.7297 15.5753L14.2499 10.5Z" stroke="#919191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M6 16.5L6.75 13.5" stroke="#919191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <button class="btn-filter-apply" id="mobile-btn-apply">
        <span>применить</span>
        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.49997 15C7.49991 15.1394 7.53868 15.276 7.61194 15.3946C7.6852 15.5131 7.79005 15.609 7.91472 15.6713L9.41472 16.4213C9.5291 16.4784 9.65618 16.5054 9.78391 16.4996C9.91163 16.4938 10.0358 16.4555 10.1445 16.3882C10.2532 16.3209 10.343 16.227 10.4052 16.1153C10.4674 16.0036 10.5 15.8779 10.5 15.75V10.5C10.5001 10.1283 10.6383 9.76988 10.8877 9.49425L16.305 3.5025C16.4021 3.39492 16.4659 3.26151 16.4888 3.11841C16.5117 2.97531 16.4926 2.82865 16.4339 2.69616C16.3752 2.56366 16.2794 2.45102 16.158 2.37184C16.0366 2.29266 15.8949 2.25034 15.75 2.25H2.24997C2.10493 2.25005 1.96301 2.29216 1.84141 2.37123C1.71981 2.45029 1.62375 2.56292 1.56485 2.69547C1.50596 2.82802 1.48676 2.97481 1.50959 3.11804C1.53242 3.26128 1.59629 3.39482 1.69347 3.5025L7.11222 9.49425C7.36163 9.76988 7.49981 10.1283 7.49997 10.5V15Z" stroke="#562C00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>
<?php $products = [
	[
		"name" => "Колеса для мотоцикла",
		"price" => "100000₽",
		"image" => "public/assets/7f4faf99484044ddb1e782958a41cad904e93297.png",
		"badge" => "шины",
		"badge_wide" => false,
	],
	[
		"name" => "Аккумулятор EXIDE",
		"price" => "8500₽",
		"image" => "public/assets/babc1deb46178ba007ecd52b6844574e4d5022d4.png",
		"badge" => "аккумуляторы",
		"badge_wide" => true,
	],
	[
		"name" => "Масло Motul 510 2T",
		"price" => "1200₽",
		"image" => "public/assets/0196eaee1d21f9868a5371414a7337a0f478490a.png",
		"badge" => "масла",
		"badge_wide" => false,
	],
	[
		"name" => "Шины Pirelli MT43",
		"price" => "6800₽",
		"image" => "public/assets/8bfe66051b94080dd8cc17c697f3909bbbc51575.png",
		"badge" => "шины",
		"badge_wide" => false,
	],
	[
		"name" => "Аккумулятор Yuasa",
		"price" => "5200₽",
		"image" => "public/assets/babc1deb46178ba007ecd52b6844574e4d5022d4.png",
		"badge" => "аккумуляторы",
		"badge_wide" => true,
	],
	[
		"name" => "Воздушный фильтр K&N",
		"price" => "3400₽",
		"image" => "public/assets/7f4faf99484044ddb1e782958a41cad904e93297.png",
		"badge" => "фильтры",
		"badge_wide" => false,
	],
	[
		"name" => "Цепь DID 520ERT3",
		"price" => "4500₽",
		"image" => "public/assets/0196eaee1d21f9868a5371414a7337a0f478490a.png",
		"badge" => "цепи",
		"badge_wide" => false,
	],
	[
		"name" => "Тормозные колодки Brembo",
		"price" => "2800₽",
		"image" => "public/assets/8bfe66051b94080dd8cc17c697f3909bbbc51575.png",
		"badge" => "тормоза",
		"badge_wide" => false,
	],
	[
		"name" => "Свеча зажигания NGK",
		"price" => "450₽",
		"image" => "public/assets/babc1deb46178ba007ecd52b6844574e4d5022d4.png",
		"badge" => "свечи",
		"badge_wide" => false,
	],
]; ?>

    <!-- Category Page -->
    <section class="category-section">
      <div class="container">
        <!-- Breadcrumbs -->
        <nav class="breadcrumbs">
          <a href="index.php" class="breadcrumb-link">Главная</a>
          <svg class="breadcrumb-arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.25 10.5L8.75 7L5.25 3.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <a href="#" class="breadcrumb-link">Каталог</a>
          <svg class="breadcrumb-arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.25 10.5L8.75 7L5.25 3.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <span class="breadcrumb-current">Шлемы</span>
        </nav>
        <div class="breadcrumb-divider"></div>

        <div class="category-layout">
          <!-- Sidebar -->
          <aside class="sidebar" id="sidebar">
            <!-- Tabs -->
            <div class="sidebar-tabs">
              <button class="sidebar-tab" data-tab="filters">Фильтры</button>
              <button class="sidebar-tab active" data-tab="categories">Категории</button>
            </div>

            <!-- Filters Content -->
            <div class="sidebar-content" id="filters-content" style="display: none;">
                          <!-- Filter Buttons -->
                          <div class="filter-buttons">
                            <button class="btn-filter-apply">
                              <span>применить</span>
                              <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.49997 15C7.49991 15.1394 7.53868 15.276 7.61194 15.3946C7.6852 15.5131 7.79005 15.609 7.91472 15.6713L9.41472 16.4213C9.5291 16.4784 9.65618 16.5054 9.78391 16.4996C9.91163 16.4938 10.0358 16.4555 10.1445 16.3882C10.2532 16.3209 10.343 16.227 10.4052 16.1153C10.4674 16.0036 10.5 15.8779 10.5 15.75V10.5C10.5001 10.1283 10.6383 9.76988 10.8877 9.49425L16.305 3.5025C16.4021 3.39492 16.4659 3.26151 16.4888 3.11841C16.5117 2.97531 16.4926 2.82865 16.4339 2.69616C16.3752 2.56366 16.2794 2.45102 16.158 2.37184C16.0366 2.29266 15.8949 2.25034 15.75 2.25H2.24997C2.10493 2.25005 1.96301 2.29216 1.84141 2.37123C1.71981 2.45029 1.62375 2.56292 1.56485 2.69547C1.50596 2.82802 1.48676 2.97481 1.50959 3.11804C1.53242 3.26128 1.59629 3.39482 1.69347 3.5025L7.11222 9.49425C7.36163 9.76988 7.49981 10.1283 7.49997 10.5V15Z" stroke="#562C00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </button>
                            <button class="btn-filter-clear">
                              <span>очистить</span>
                              <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 16.5L11.25 13.5" stroke="#919191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.25 10.5C14.4489 10.5 14.6397 10.421 14.7803 10.2803C14.921 10.1397 15 9.94891 15 9.75V9C15 8.60218 14.842 8.22064 14.5607 7.93934C14.2794 7.65804 13.8978 7.5 13.5 7.5H11.25C11.0511 7.5 10.8603 7.42098 10.7197 7.28033C10.579 7.13968 10.5 6.94891 10.5 6.75V3C10.5 2.60218 10.342 2.22064 10.0607 1.93934C9.77936 1.65804 9.39782 1.5 9 1.5C8.60218 1.5 8.22064 1.65804 7.93934 1.93934C7.65804 2.22064 7.5 2.60218 7.5 3V6.75C7.5 6.94891 7.42098 7.13968 7.28033 7.28033C7.13968 7.42098 6.94891 7.5 6.75 7.5H4.5C4.10218 7.5 3.72064 7.65804 3.43934 7.93934C3.15804 8.22064 3 8.60218 3 9V9.75C3 9.94891 3.07902 10.1397 3.21967 10.2803C3.36032 10.421 3.55109 10.5 3.75 10.5" stroke="#919191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.2499 10.5H3.7499L2.27015 15.5753C2.24373 15.6855 2.24266 15.8003 2.26701 15.9111C2.29137 16.0218 2.34051 16.1256 2.41075 16.2146C2.48099 16.3036 2.5705 16.3755 2.67255 16.425C2.77459 16.4744 2.88652 16.5001 2.9999 16.5H14.9999C15.1133 16.5001 15.2252 16.4744 15.3273 16.425C15.4293 16.3755 15.5188 16.3036 15.5891 16.2146C15.6593 16.1256 15.7084 16.0218 15.7328 15.9111C15.7571 15.8003 15.7561 15.6855 15.7297 15.5753L14.2499 10.5Z" stroke="#919191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 16.5L6.75 13.5" stroke="#919191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </button>
                          </div>
              <!-- Search -->
              <div class="filter-group">
                <h4 class="filter-title">ПОИСК</h4>
                <div class="search-input">
                  <input type="text" placeholder="Введите текст для поиска..">
                  <button class="search-btn">
                    <img src="public/assets/6dcaf57b64202d573215989e790bee7b7e13c58b.svg" alt="" width="18" height="18">
                  </button>
                </div>
              </div>

              <!-- Brand -->
              <div class="filter-group">
                <h4 class="filter-title">БРЕНД</h4>
                <div class="checkbox-list">
                  <label class="checkbox-item">
                    <input type="checkbox" checked>
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">ALPItrGRRNA</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">SNOWMOBILE</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">ALPINESTARS</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">ARCTIC CAT</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">ATHEN</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">FILTRO</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">HIGHWAY</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">JETHWEAR</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">JT</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">KAGE</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">KINGTYRE</span>
                  </label>
                </div>
              </div>

              <!-- Price -->
              <div class="filter-group">
                <h4 class="filter-title">ЦЕНА</h4>
                <div class="price-range">
                  <div class="price-row">
                    <span class="price-label">от</span>
                    <div class="price-input">
                      <input type="text" value="0">
                    </div>
                  </div>
                  <div class="price-divider"></div>
                  <div class="price-row">
                    <span class="price-label">до</span>
                    <div class="price-input">
                      <input type="text" value="100000000">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Categories Filter -->
              <div class="filter-group">
                <h4 class="filter-title">КАТЕГОРИИ</h4>
                <div class="checkbox-list">
                  <label class="checkbox-item">
                    <input type="checkbox" checked>
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">Мотошлемы</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">Мотоэкипировка</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">Моторасходники и З/Ч</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">Моторезина</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">Тюнинг и Аксессуары</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">Мотохимия</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">Уцененные товары</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box">
                      <img src="public/assets/filters-check.svg" alt="" class="checkbox-check">
                    </span>
                    <span class="checkbox-label">Зимняя экипировка</span>
                  </label>
                </div>
              </div>
            </div>

            <!-- Categories Content -->
            <div class="sidebar-content" id="categories-content">
              <!-- Category Item - Expanded -->
              <div class="category-item expanded">
                <div class="category-header">
                  <span class="category-name">Велокомпьютеры</span>
                  <span class="category-icon">
                    <svg class="icon-minus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="icon-plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10 4.16675V15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
                <div class="category-children">
                  <a href="#" class="category-child">Багажники для автомобиля</a>
                  <a href="#" class="category-child">Велосумки</a>
                  <a href="#" class="category-child active">Велотренажеры</a>
                  <a href="#" class="category-child">Крылья/Щитки</a>
                  <a href="#" class="category-child">Защита для автомобиля</a>
                  <a href="#" class="category-child">Зеркало заднего вида</a>
                  <a href="#" class="category-child">Мотокомпьютеры</a>
                  <a href="#" class="category-child">Звонки</a>
                </div>
                <div class="category-divider"></div>
              </div>

              <!-- Category Item - Collapsed -->
              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">ВЕЛОЗАПЧАСТИ</span>
                  <span class="category-icon">
                    <svg class="icon-minus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="icon-plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10 4.16675V15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
                <div class="category-divider"></div>
              </div>

              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">ВЕЛОСИПЕДЫ</span>
                  <span class="category-icon">
                    <svg class="icon-minus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="icon-plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10 4.16675V15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
                <div class="category-divider"></div>
              </div>

              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">ВЕЛОЭКИПИРОВКА</span>
                  <span class="category-icon">
                    <svg class="icon-minus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="icon-plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10 4.16675V15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
                <div class="category-divider"></div>
              </div>

              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">ИНСТРУМЕНТЫ</span>
                  <span class="category-icon">
                    <svg class="icon-minus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="icon-plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10 4.16675V15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
                <div class="category-divider"></div>
              </div>

              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">МАСКИ/ОЧКИ</span>
                  <span class="category-icon">
                    <svg class="icon-minus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="icon-plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10 4.16675V15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
                <div class="category-divider"></div>
              </div>

              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">МОТОЭКИПИРОВКА</span>
                  <span class="category-icon">
                    <svg class="icon-minus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="icon-plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10 4.16675V15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
                <div class="category-divider"></div>
              </div>

              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">ОДЕЖДА</span>
                  <span class="category-icon">
                    <svg class="icon-minus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="icon-plus" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.16675 10H15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10 4.16675V15.8334" stroke="#7B7B7B" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
                <div class="category-divider"></div>
              </div>
            </div>
          </aside>

          <!-- Main Content -->
          <main class="category-main">
            <!-- Header -->
            <div class="category-header-row">
              <h1 class="category-title">Мотошлемы, аксессуары и запчасти к ним</h1>
              <div class="category-controls">
                <!-- View Type -->
                <div class="view-control">
                  <span class="view-label">ВИД Карточек</span>
                  <div class="view-dropdown">
                    <button class="view-btn">
                      <span>Карточки</span>
                      <img src="public/assets/c230e64e2fc8f783afe01e41d1f7b08d6ec283fb.svg" alt="" width="16" height="16">
                    </button>
                    <div class="view-dropdown-menu">
                      <button class="view-option active" data-view="grid">Карточки</button>
                      <button class="view-option" data-view="list">Списком</button>
                    </div>
                  </div>
                </div>
                <!-- Sort -->
                <div class="sort-control">
                  <span class="sort-label">Сортировать по</span>
                  <div class="sort-dropdown">
                    <button class="sort-btn">
                      <span>Популярности</span>
                      <img src="public/assets/c230e64e2fc8f783afe01e41d1f7b08d6ec283fb.svg" alt="" width="16" height="16">
                    </button>
                    <div class="sort-dropdown-menu">
                      <button class="sort-option active" data-sort="popularity">Популярности</button>
                      <button class="sort-option" data-sort="price-asc">Цене (по возрастанию)</button>
                      <button class="sort-option" data-sort="price-desc">Цене (по убыванию)</button>
                      <button class="sort-option" data-sort="newest">Новизне</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Grid View -->
            <div class="products-grid-view" id="grid-view">
<?php foreach ($products as $product): ?>
              <article class="product-card">
                <div class="product-image">
                  <img src="<?php echo $product["image"]; ?>" alt="<?php echo $product["name"]; ?>">
                  <span class="product-badge<?php echo $product["badge_wide"] ? " wide" : ""; ?>"><?php echo $product[
	"badge"
]; ?></span>
                </div>
                <div class="product-info">
                  <h3 class="product-name"><?php echo $product["name"]; ?></h3>
                  <div class="product-divider"></div>
                  <div class="product-footer">
                    <span class="product-price"><?php echo $product["price"]; ?></span>
                    <button class="add-to-cart small">
                      <span class="cart-text">В КОРЗИНУ</span>
                      <span class="cart-icon">
                        <svg width="14" height="14" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.25 8.25L10.5 15" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.25 8.25L11.25 3" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1.5 8.25H16.5" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.625 8.25L3.825 13.8C3.89513 14.1439 4.08364 14.4523 4.35771 14.6716C4.63179 14.8909 4.97408 15.0071 5.325 15H12.675C13.0259 15.0071 13.3682 14.8909 13.6423 14.6716C13.9164 14.4523 14.1049 14.1439 14.175 13.8L15.45 8.25" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.375 11.625H14.625" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.75 8.25L6.75 3" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.75 8.25L7.5 15" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                      </span>
                    </button>
                  </div>
                </div>
              </article>
<?php endforeach; ?>
            </div>

            <!-- List View -->
            <div class="products-list-view" id="list-view" style="display: none;">
<?php foreach ($products as $product): ?>
              <article class="list-item">
                <a href="product.php" class="list-item-image">
                  <img src="<?php echo $product["image"]; ?>" alt="<?php echo $product["name"]; ?>">
                </a>
                <div class="list-item-info">
                  <span class="list-item-badge"><?php echo $product["badge"]; ?></span>
                  <a href="product.php" class="list-item-name"><?php echo $product["name"]; ?></a>
                </div>
                <span class="list-item-price"><?php echo $product["price"]; ?></span>
                <button class="add-to-cart small">
                  <span class="cart-text">В КОРЗИНУ</span>
                  <span class="cart-icon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.25 8.25L10.5 15" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.25 8.25L11.25 3" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1.5 8.25H16.5" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.625 8.25L3.825 13.8C3.89513 14.1439 4.08364 14.4523 4.35771 14.6716C4.63179 14.8909 4.97408 15.0071 5.325 15H12.675C13.0259 15.0071 13.3682 14.8909 13.6423 14.6716C13.9164 14.4523 14.1049 14.1439 14.175 13.8L15.45 8.25" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.375 11.625H14.625" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.75 8.25L6.75 3" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.75 8.25L7.5 15" stroke="#404040" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                  </span>
                </button>
              </article>
<?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <nav class="pagination">
              <button class="pagination-btn prev" aria-label="Предыдущая">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 12L6 8L10 4" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
              <button class="pagination-num active">1</button>
              <button class="pagination-num">2</button>
              <button class="pagination-num">3</button>
              <button class="pagination-btn next" aria-label="Следующая">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 12L10 8L6 4" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </nav>
          </main>
        </div>
      </div>
    </section>

    <?php include "includes/footer.php"; ?>
  </div>

  <script>
    // Sidebar Tabs
    document.querySelectorAll('.sidebar-tab').forEach(tab => {
      tab.addEventListener('click', () => {
        document.querySelectorAll('.sidebar-tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        const tabName = tab.dataset.tab;
        document.getElementById('filters-content').style.display = tabName === 'filters' ? 'block' : 'none';
        document.getElementById('categories-content').style.display = tabName === 'categories' ? 'block' : 'none';
      });
    });

    // View Dropdown
    const viewDropdown = document.querySelector('.view-dropdown');
    const viewBtn = document.querySelector('.view-dropdown .view-btn');
    const viewOptions = document.querySelectorAll('.view-option');

    viewBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      viewDropdown.classList.toggle('open');
    });

    viewOptions.forEach(option => {
      option.addEventListener('click', () => {
        const view = option.dataset.view;
        const btnText = viewBtn.querySelector('span');

        // Update button text
        btnText.textContent = option.textContent;

        // Update active state
        viewOptions.forEach(o => o.classList.remove('active'));
        option.classList.add('active');

        // Close dropdown
        viewDropdown.classList.remove('open');

        // Switch view
        document.getElementById('grid-view').style.display = view === 'grid' ? 'grid' : 'none';
        document.getElementById('list-view').style.display = view === 'list' ? 'flex' : 'none';
      });
    });

    // Close dropdown on outside click
    document.addEventListener('click', () => {
      viewDropdown.classList.remove('open');
      sortDropdown.classList.remove('open');
    });

    // Sort Dropdown
    const sortDropdown = document.querySelector('.sort-dropdown');
    const sortBtn = document.querySelector('.sort-dropdown .sort-btn');
    const sortOptions = document.querySelectorAll('.sort-option');

    sortBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      viewDropdown.classList.remove('open');
      sortDropdown.classList.toggle('open');
    });

    sortOptions.forEach(option => {
      option.addEventListener('click', () => {
        const btnText = sortBtn.querySelector('span');

        // Update button text
        btnText.textContent = option.textContent;

        // Update active state
        sortOptions.forEach(o => o.classList.remove('active'));
        option.classList.add('active');

        // Close dropdown
        sortDropdown.classList.remove('open');
      });
    });

    // Category Toggle
    document.querySelectorAll('.category-header').forEach(header => {
      header.addEventListener('click', () => {
        const item = header.parentElement;
        if (item.classList.contains('collapsed')) {
          item.classList.remove('collapsed');
          item.classList.add('expanded');
        } else {
          item.classList.remove('expanded');
          item.classList.add('collapsed');
        }
      });
    });

    // Mobile Sidebar Toggle
    const mobileFilterToggle = document.getElementById('mobile-filter-toggle');
    const mobileFilterActions = document.getElementById('mobile-filter-actions');
    const mobileBtnApply = document.getElementById('mobile-btn-apply');
    const mobileBtnClear = document.getElementById('mobile-btn-clear');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const sidebar = document.getElementById('sidebar');

    function openSidebar() {
      sidebar.classList.add('mobile-open');
      sidebarOverlay.classList.add('active');
      mobileFilterToggle.classList.add('hidden');
      mobileFilterActions.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
      sidebar.classList.remove('mobile-open');
      sidebarOverlay.classList.remove('active');
      mobileFilterToggle.classList.remove('hidden');
      mobileFilterActions.classList.remove('active');
      document.body.style.overflow = '';
    }

    function clearFilters() {
      // Clear all checkboxes
      document.querySelectorAll('.sidebar input[type="checkbox"]').forEach(cb => {
        cb.checked = false;
      });
      // Clear price inputs
      document.querySelectorAll('.sidebar .price-input input').forEach(input => {
        input.value = '';
      });
    }

    mobileFilterToggle.addEventListener('click', openSidebar);
    sidebarOverlay.addEventListener('click', closeSidebar);

    // Mobile apply button - close sidebar (filters already applied)
    mobileBtnApply.addEventListener('click', closeSidebar);

    // Mobile clear button - clear filters and close sidebar
    mobileBtnClear.addEventListener('click', () => {
      clearFilters();
      closeSidebar();
    });
  </script>
</body>
</html>
