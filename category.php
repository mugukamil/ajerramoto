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
    <?php include 'includes/header-page.php'; ?>

    <!-- Category Page -->
    <section class="category-section">
      <div class="container">
        <!-- Breadcrumbs -->
        <nav class="breadcrumbs">
          <a href="index.php" class="breadcrumb-link">Главная</a>
          <img src="public/assets/c230e64e2fc8f783afe01e41d1f7b08d6ec283fb.svg" alt="" class="breadcrumb-arrow" width="14" height="14">
          <a href="#" class="breadcrumb-link">Каталог</a>
          <img src="public/assets/c230e64e2fc8f783afe01e41d1f7b08d6ec283fb.svg" alt="" class="breadcrumb-arrow" width="14" height="14">
          <span class="breadcrumb-current">Шлемы</span>
        </nav>
        <div class="breadcrumb-divider"></div>

        <div class="category-layout">
          <!-- Sidebar -->
          <aside class="sidebar">
            <!-- Tabs -->
            <div class="sidebar-tabs">
              <button class="sidebar-tab" data-tab="filters">Фильтры</button>
              <button class="sidebar-tab active" data-tab="categories">Категории</button>
            </div>

            <!-- Filters Content -->
            <div class="sidebar-content" id="filters-content" style="display: none;">
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
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">SNOWMOBILE</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">ALPINESTARS</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">ARCTIC CAT</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">ATHEN</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">FILTRO</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">HIGHWAY</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">JETHWEAR</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">JT</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">KAGE</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">KINGTYRE</span>
                  </label>
                </div>
              </div>

              <!-- Price -->
              <div class="filter-group">
                <h4 class="filter-title">ЦЕНА</h4>
                <div class="price-range">
                  <span class="price-label">от</span>
                  <div class="price-input">
                    <input type="text" value="0">
                  </div>
                  <div class="price-divider"></div>
                  <span class="price-label">до</span>
                  <div class="price-input">
                    <input type="text" value="100000000">
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
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">Мотоэкипировка</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">Моторасходники и З/Ч</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">Моторезина</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">Тюнинг и Аксессуары</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">Мотохимия</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">Уцененные товары</span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox">
                    <span class="checkbox-box"></span>
                    <span class="checkbox-label">Зимняя экипировка</span>
                  </label>
                </div>
              </div>

              <!-- Filter Buttons -->
              <div class="filter-buttons">
                <button class="btn-filter-apply">
                  <span>применить</span>
                  <img src="public/assets/cf81563ca584e2ef7014e6e03117956d52f40b96.svg" alt="" width="18" height="18">
                </button>
                <button class="btn-filter-clear">
                  <img src="public/assets/filters-clear.svg" alt="" width="24" height="24">
                  <span>очистить</span>
                </button>
              </div>
            </div>

            <!-- Categories Content -->
            <div class="sidebar-content" id="categories-content">
              <!-- Category Item - Expanded -->
              <div class="category-item expanded">
                <div class="category-header">
                  <span class="category-name">Велокомпьютеры</span>
                  <img src="public/assets/c230e64e2fc8f783afe01e41d1f7b08d6ec283fb.svg" alt="" class="category-arrow" width="20" height="20">
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
                  <img src="public/assets/category-arrow-right.svg" alt="" class="category-arrow" width="20" height="20">
                </div>
                <div class="category-divider"></div>
              </div>

              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">ВЕЛОСИПЕДЫ</span>
                  <img src="public/assets/category-arrow-right.svg" alt="" class="category-arrow" width="20" height="20">
                </div>
                <div class="category-divider"></div>
              </div>

              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">ВЕЛОЭКИПИРОВКА</span>
                  <img src="public/assets/category-arrow-right.svg" alt="" class="category-arrow" width="20" height="20">
                </div>
                <div class="category-divider"></div>
              </div>

              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">ИНСТРУМЕНТЫ</span>
                  <img src="public/assets/category-arrow-right.svg" alt="" class="category-arrow" width="20" height="20">
                </div>
                <div class="category-divider"></div>
              </div>

              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">МАСКИ/ОЧКИ</span>
                  <img src="public/assets/category-arrow-right.svg" alt="" class="category-arrow" width="20" height="20">
                </div>
                <div class="category-divider"></div>
              </div>

              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">МОТОЭКИПИРОВКА</span>
                  <img src="public/assets/category-arrow-right.svg" alt="" class="category-arrow" width="20" height="20">
                </div>
                <div class="category-divider"></div>
              </div>

              <div class="category-item collapsed">
                <div class="category-header">
                  <span class="category-name">ОДЕЖДА</span>
                  <img src="public/assets/category-arrow-right.svg" alt="" class="category-arrow" width="20" height="20">
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
                  <div class="view-select">
                    <button class="view-btn active" data-view="grid">
                      <span>Карточки</span>
                      <img src="public/assets/c230e64e2fc8f783afe01e41d1f7b08d6ec283fb.svg" alt="" width="16" height="16">
                    </button>
                    <button class="view-btn" data-view="list">
                      <span>Списком</span>
                      <img src="public/assets/c230e64e2fc8f783afe01e41d1f7b08d6ec283fb.svg" alt="" width="16" height="16">
                    </button>
                  </div>
                </div>
                <!-- Sort -->
                <div class="sort-control">
                  <span class="sort-label">Сортировать по</span>
                  <button class="sort-btn">
                    <span>Популярности</span>
                    <img src="public/assets/c230e64e2fc8f783afe01e41d1f7b08d6ec283fb.svg" alt="" width="16" height="16">
                  </button>
                </div>
              </div>
            </div>

            <!-- Grid View -->
            <div class="products-grid-view" id="grid-view">
              <article class="product-card">
                <div class="product-image">
                  <img src="public/assets/7f4faf99484044ddb1e782958a41cad904e93297.png" alt="Колеса для мотоцикла">
                  <span class="product-badge">шины</span>
                </div>
                <div class="product-info">
                  <h3 class="product-name">Колеса для мотоцикла</h3>
                  <div class="product-divider"></div>
                  <div class="product-footer">
                    <span class="product-price">100000₽</span>
                    <button class="add-to-cart small">
                      <span class="cart-text">В КОРЗИНУ</span>
                      <span class="cart-icon">
                        <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="14" height="14">
                      </span>
                    </button>
                  </div>
                </div>
              </article>

              <article class="product-card">
                <div class="product-image">
                  <img src="public/assets/babc1deb46178ba007ecd52b6844574e4d5022d4.png" alt="Аккумулятор EXIDE">
                  <span class="product-badge wide">аккумуляторы</span>
                </div>
                <div class="product-info">
                  <h3 class="product-name">Аккумулятор EXIDE</h3>
                  <div class="product-divider"></div>
                  <div class="product-footer">
                    <span class="product-price">100000₽</span>
                    <button class="add-to-cart small">
                      <span class="cart-text">В КОРЗИНУ</span>
                      <span class="cart-icon">
                        <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="14" height="14">
                      </span>
                    </button>
                  </div>
                </div>
              </article>

              <article class="product-card">
                <div class="product-image">
                  <img src="public/assets/0196eaee1d21f9868a5371414a7337a0f478490a.png" alt="Аккумулятор EXIDE">
                  <span class="product-badge wide">аккумуляторы</span>
                </div>
                <div class="product-info">
                  <h3 class="product-name">Аккумулятор EXIDE</h3>
                  <div class="product-divider"></div>
                  <div class="product-footer">
                    <span class="product-price">100000₽</span>
                    <button class="add-to-cart small">
                      <span class="cart-text">В КОРЗИНУ</span>
                      <span class="cart-icon">
                        <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="14" height="14">
                      </span>
                    </button>
                  </div>
                </div>
              </article>

              <article class="product-card">
                <div class="product-image">
                  <img src="public/assets/8bfe66051b94080dd8cc17c697f3909bbbc51575.png" alt="Аккумулятор EXIDE">
                  <span class="product-badge wide">аккумуляторы</span>
                </div>
                <div class="product-info">
                  <h3 class="product-name">Аккумулятор EXIDE</h3>
                  <div class="product-divider"></div>
                  <div class="product-footer">
                    <span class="product-price">100000₽</span>
                    <button class="add-to-cart small">
                      <span class="cart-text">В КОРЗИНУ</span>
                      <span class="cart-icon">
                        <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="14" height="14">
                      </span>
                    </button>
                  </div>
                </div>
              </article>

              <article class="product-card">
                <div class="product-image">
                  <img src="public/assets/7f4faf99484044ddb1e782958a41cad904e93297.png" alt="Колеса для мотоцикла">
                  <span class="product-badge wide">аккумуляторы</span>
                </div>
                <div class="product-info">
                  <h3 class="product-name">Аккумулятор EXIDE</h3>
                  <div class="product-divider"></div>
                  <div class="product-footer">
                    <span class="product-price">100000₽</span>
                    <button class="add-to-cart small">
                      <span class="cart-text">В КОРЗИНУ</span>
                      <span class="cart-icon">
                        <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="14" height="14">
                      </span>
                    </button>
                  </div>
                </div>
              </article>

              <article class="product-card">
                <div class="product-image">
                  <img src="public/assets/0196eaee1d21f9868a5371414a7337a0f478490a.png" alt="Аккумулятор EXIDE">
                  <span class="product-badge wide">аккумуляторы</span>
                </div>
                <div class="product-info">
                  <h3 class="product-name">Аккумулятор EXIDE</h3>
                  <div class="product-divider"></div>
                  <div class="product-footer">
                    <span class="product-price">100000₽</span>
                    <button class="add-to-cart small">
                      <span class="cart-text">В КОРЗИНУ</span>
                      <span class="cart-icon">
                        <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="14" height="14">
                      </span>
                    </button>
                  </div>
                </div>
              </article>

              <article class="product-card">
                <div class="product-image">
                  <img src="public/assets/babc1deb46178ba007ecd52b6844574e4d5022d4.png" alt="Колеса для мотоцикла">
                  <span class="product-badge">шины</span>
                </div>
                <div class="product-info">
                  <h3 class="product-name">Колеса для мотоцикла</h3>
                  <div class="product-divider"></div>
                  <div class="product-footer">
                    <span class="product-price">100000₽</span>
                    <button class="add-to-cart small">
                      <span class="cart-text">В КОРЗИНУ</span>
                      <span class="cart-icon">
                        <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="14" height="14">
                      </span>
                    </button>
                  </div>
                </div>
              </article>

              <article class="product-card">
                <div class="product-image">
                  <img src="public/assets/8bfe66051b94080dd8cc17c697f3909bbbc51575.png" alt="Аккумулятор EXIDE">
                  <span class="product-badge wide">аккумуляторы</span>
                </div>
                <div class="product-info">
                  <h3 class="product-name">Аккумулятор EXIDE</h3>
                  <div class="product-divider"></div>
                  <div class="product-footer">
                    <span class="product-price">100000₽</span>
                    <button class="add-to-cart small">
                      <span class="cart-text">В КОРЗИНУ</span>
                      <span class="cart-icon">
                        <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="14" height="14">
                      </span>
                    </button>
                  </div>
                </div>
              </article>

              <article class="product-card">
                <div class="product-image">
                  <img src="public/assets/7f4faf99484044ddb1e782958a41cad904e93297.png" alt="Колеса для мотоцикла">
                  <span class="product-badge">шины</span>
                </div>
                <div class="product-info">
                  <h3 class="product-name">Колеса для мотоцикла</h3>
                  <div class="product-divider"></div>
                  <div class="product-footer">
                    <span class="product-price">100000₽</span>
                    <button class="add-to-cart small">
                      <span class="cart-text">В КОРЗИНУ</span>
                      <span class="cart-icon">
                        <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="14" height="14">
                      </span>
                    </button>
                  </div>
                </div>
              </article>
            </div>

            <!-- List View -->
            <div class="products-list-view" id="list-view" style="display: none;">
              <article class="list-item">
                <div class="list-item-image">
                  <img src="public/assets/7f4faf99484044ddb1e782958a41cad904e93297.png" alt="Колеса для мотоцикла">
                </div>
                <span class="list-item-badge">шины</span>
                <h3 class="list-item-name">Колеса для мотоцикла</h3>
                <span class="list-item-price">100000₽</span>
                <button class="add-to-cart small">
                  <span class="cart-text">В КОРЗИНУ</span>
                  <span class="cart-icon">
                    <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="18" height="18">
                  </span>
                </button>
              </article>

              <article class="list-item">
                <div class="list-item-image">
                  <img src="public/assets/7f4faf99484044ddb1e782958a41cad904e93297.png" alt="Колеса для мотоцикла">
                </div>
                <span class="list-item-badge">шины</span>
                <h3 class="list-item-name">Колеса для мотоцикла</h3>
                <span class="list-item-price">100000₽</span>
                <button class="add-to-cart small">
                  <span class="cart-text">В КОРЗИНУ</span>
                  <span class="cart-icon">
                    <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="18" height="18">
                  </span>
                </button>
              </article>

              <article class="list-item">
                <div class="list-item-image">
                  <img src="public/assets/7f4faf99484044ddb1e782958a41cad904e93297.png" alt="Колеса для мотоцикла">
                </div>
                <span class="list-item-badge">шины</span>
                <h3 class="list-item-name">Колеса для мотоцикла</h3>
                <span class="list-item-price">100000₽</span>
                <button class="add-to-cart small">
                  <span class="cart-text">В КОРЗИНУ</span>
                  <span class="cart-icon">
                    <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="18" height="18">
                  </span>
                </button>
              </article>

              <article class="list-item">
                <div class="list-item-image">
                  <img src="public/assets/7f4faf99484044ddb1e782958a41cad904e93297.png" alt="Колеса для мотоцикла">
                </div>
                <span class="list-item-badge">шины</span>
                <h3 class="list-item-name">Колеса для мотоцикла</h3>
                <span class="list-item-price">100000₽</span>
                <button class="add-to-cart small">
                  <span class="cart-text">В КОРЗИНУ</span>
                  <span class="cart-icon">
                    <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="18" height="18">
                  </span>
                </button>
              </article>

              <article class="list-item">
                <div class="list-item-image">
                  <img src="public/assets/7f4faf99484044ddb1e782958a41cad904e93297.png" alt="Колеса для мотоцикла">
                </div>
                <span class="list-item-badge">шины</span>
                <h3 class="list-item-name">Колеса для мотоцикла</h3>
                <span class="list-item-price">100000₽</span>
                <button class="add-to-cart small">
                  <span class="cart-text">В КОРЗИНУ</span>
                  <span class="cart-icon">
                    <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="18" height="18">
                  </span>
                </button>
              </article>

              <article class="list-item">
                <div class="list-item-image">
                  <img src="public/assets/7f4faf99484044ddb1e782958a41cad904e93297.png" alt="Колеса для мотоцикла">
                </div>
                <span class="list-item-badge">шины</span>
                <h3 class="list-item-name">Колеса для мотоцикла</h3>
                <span class="list-item-price">100000₽</span>
                <button class="add-to-cart small">
                  <span class="cart-text">В КОРЗИНУ</span>
                  <span class="cart-icon">
                    <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="18" height="18">
                  </span>
                </button>
              </article>

              <article class="list-item">
                <div class="list-item-image">
                  <img src="public/assets/7f4faf99484044ddb1e782958a41cad904e93297.png" alt="Колеса для мотоцикла">
                </div>
                <span class="list-item-badge">шины</span>
                <h3 class="list-item-name">Колеса для мотоцикла</h3>
                <span class="list-item-price">100000₽</span>
                <button class="add-to-cart small">
                  <span class="cart-text">В КОРЗИНУ</span>
                  <span class="cart-icon">
                    <img src="public/assets/8b2f6c836ca44a47f4a724c5702a6fc5581e36b0.svg" alt="" width="18" height="18">
                  </span>
                </button>
              </article>
            </div>

            <!-- Pagination -->
            <nav class="pagination">
              <button class="pagination-btn prev" aria-label="Предыдущая">
                <img src="public/assets/40d1d1338cfbab8ddf4ad4dcfe5360adb5cfb97c.svg" alt="" width="16" height="16">
              </button>
              <button class="pagination-num active">1</button>
              <button class="pagination-num">2</button>
              <button class="pagination-num">3</button>
              <button class="pagination-btn next" aria-label="Следующая">
                <img src="public/assets/13cab78db9e3cac33724308568deeee0927e3285.svg" alt="" width="16" height="16">
              </button>
            </nav>
          </main>
        </div>
      </div>
    </section>

    <?php include 'includes/footer.php'; ?>
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

    // View Toggle
    document.querySelectorAll('.view-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.view-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const view = btn.dataset.view;
        document.getElementById('grid-view').style.display = view === 'grid' ? 'grid' : 'none';
        document.getElementById('list-view').style.display = view === 'list' ? 'flex' : 'none';
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
  </script>
</body>
</html>
