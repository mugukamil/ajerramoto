<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AJERRA S8 NB300 — AJERRA Moto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Krona+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="src/styles/main.css">
  <link rel="stylesheet" href="src/styles/category.css">
  <link rel="stylesheet" href="src/styles/product.css">
</head>
<body>
  <div class="page page-with-header">
    <?php include 'includes/header-page.php'; ?>

    <!-- Product Page -->
    <section class="product-section">
      <div class="container">
        <!-- Breadcrumbs -->
        <nav class="breadcrumbs">
          <a href="index.php" class="breadcrumb-link">Главная</a>
          <img src="public/assets/c230e64e2fc8f783afe01e41d1f7b08d6ec283fb.svg" alt="" class="breadcrumb-arrow" width="14" height="14">
          <a href="category.php" class="breadcrumb-link">Каталог</a>
          <img src="public/assets/c230e64e2fc8f783afe01e41d1f7b08d6ec283fb.svg" alt="" class="breadcrumb-arrow" width="14" height="14">
          <span class="breadcrumb-current">Мотоцикл</span>
        </nav>
        <div class="breadcrumb-divider"></div>

        <!-- Product Card -->
        <div class="product-card-main">
          <!-- Left: Image Gallery -->
          <div class="product-gallery">
            <div class="product-image-main">
              <img src="public/assets/8bb77fd13eccde9b07be2e25a535ba4987f1869b.png" alt="AJERRA S8 NB300">
            </div>
            <button class="gallery-nav prev" aria-label="Назад">
              <img src="public/assets/40d1d1338cfbab8ddf4ad4dcfe5360adb5cfb97c.svg" alt="" width="24" height="24">
            </button>
            <button class="gallery-nav next" aria-label="Вперёд">
              <img src="public/assets/13cab78db9e3cac33724308568deeee0927e3285.svg" alt="" width="24" height="24">
            </button>
            <div class="product-badges">
              <span class="badge badge-new">новинка</span>
              <span class="badge badge-hit">хит</span>
            </div>
          </div>

          <!-- Right: Product Info -->
          <div class="product-info-main">
            <div class="product-header">
              <h1 class="product-title">AJERRA S8 NB300</h1>
              <div class="product-actions-top">
                <button class="icon-btn-top" aria-label="Поделиться">
                  <img src="public/assets/a0d8a7f8f3b3b0e8b9a045060116220c06053a2f.svg" alt="" width="24" height="24">
                </button>
                <button class="icon-btn-top" aria-label="В избранное">
                  <img src="public/assets/5f96e96e30e5f2130522614d183dd14941c24536.svg" alt="" width="24" height="24">
                </button>
              </div>
            </div>

            <div class="product-status-row">
              <span class="product-status">
                <span class="status-dot"></span>
                в наличии
              </span>
              <span class="product-sku">Арт. 00000021934</span>
            </div>

            <p class="product-description">
              Дуал-спорт для покорения бездорожья, путешествий и вылазок на природу в выходные. Универсальный, комфортный и манёвренный.
            </p>

            <div class="product-price-row">
              <span class="product-price-main">199000₽</span>
              <div class="product-buttons">
                <button class="btn-add-cart">
                  <span>добавить в корзину</span>
                </button>
                <button class="btn-buy-now">
                  <span>купить в один клик</span>
                </button>
              </div>
            </div>

            <!-- Specifications -->
            <div class="product-specs">
              <h3 class="specs-title">Характеристики</h3>
              <a href="#" class="specs-link">посмотреть все характеристики</a>
              <div class="specs-grid">
                <div class="spec-item">
                  <span class="spec-label">ПТС</span>
                  <span class="spec-value">Нет</span>
                </div>
                <div class="spec-item">
                  <span class="spec-label">Рама</span>
                  <span class="spec-value">Стальная</span>
                </div>
                <div class="spec-item">
                  <span class="spec-label">Двигатель</span>
                  <span class="spec-value">ZS 172FMM-3A</span>
                </div>
                <div class="spec-item">
                  <span class="spec-label">Мощность</span>
                  <span class="spec-value">23/8500</span>
                </div>
                <div class="spec-item">
                  <span class="spec-label">Охлаждение</span>
                  <span class="spec-value">Воздушное</span>
                </div>
                <div class="spec-item">
                  <span class="spec-label">Впрыск</span>
                  <span class="spec-value">23/8500</span>
                </div>
              </div>
            </div>

            <div class="specs-divider"></div>

            <!-- Contact Help -->
            <div class="product-help">
              <p class="help-title">Возникли вопросы?</p>
              <p class="help-subtitle">Свяжитесь с нами удобным вам способом</p>
              <div class="help-buttons">
                <button class="help-btn">
                  <img src="public/assets/e877147a424b8b04dfa16f34fac44e29f118be79.svg" alt="" width="24" height="24">
                  <span>позвоните к нам</span>
                </button>
                <button class="help-btn">
                  <img src="public/assets/6dcaf57b64202d573215989e790bee7b7e13c58b.svg" alt="" width="24" height="24">
                  <span>напишите нам</span>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Features Bar -->
        <div class="features-bar">
          <div class="feature-item">
            <div class="feature-icon">
              <img src="public/assets/63793bcb54c4c72e183e0699be5c85cb8d051e58.svg" alt="" width="24" height="24">
            </div>
            <div class="feature-text">
              <span class="feature-label">Рассрочка</span>
              <span class="feature-value">0% без переплаты</span>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon">
              <img src="public/assets/8981bb3aa54d82b3101c5f9540faf0fc92a8277f.svg" alt="" width="24" height="24">
            </div>
            <div class="feature-text">
              <span class="feature-label">Бонусы</span>
              <span class="feature-value">за покупки всем клиентам</span>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon">
              <img src="public/assets/1503090361fdd24de6c28c2dff16bda6bdf0bc43.svg" alt="" width="24" height="24">
            </div>
            <div class="feature-text">
              <span class="feature-label">Доставка</span>
              <span class="feature-value">бесплатно по всей России</span>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon">
              <img src="public/assets/8754ff51504a12c74c6d2beb50bc9be596c5caa2.svg" alt="" width="24" height="24">
            </div>
            <div class="feature-text">
              <span class="feature-label">Гарантия качества</span>
              <span class="feature-value">от производителей</span>
            </div>
          </div>
        </div>

        <!-- Tabs -->
        <div class="product-tabs">
          <div class="tabs-header">
            <button class="tab-btn active" data-tab="description">Описание</button>
            <button class="tab-btn" data-tab="specs">Характеристики</button>
            <button class="tab-btn" data-tab="reviews">Отзывы</button>
            <button class="tab-btn" data-tab="payment">Оплата</button>
            <button class="tab-btn" data-tab="delivery">Доставка</button>
          </div>
          <div class="tabs-content">
            <div class="tab-panel active" id="description">
              <p class="tab-text">
                Вы готовы открыть для себя Эндуро в классе 250cc? PROGASI Palma 250 – ваш входной билет! Спроектированный специально удовлетворить Ваши желание двигаться динамично по пересеченной местности или по бездорожью, ему под силу любая поверхность Земли. PROGASI Palma 250 доступный и надежный аппарат, новые эмоции будут распакованы! Мощный и надежный двигатель ZS 172FMM-3A (CB250-F) с воздушным охлаждением и 5-ступенчатой трансмиссией в паре со спортивным карбюратором PZ30 и выхлопом PROGASI Exhaust System обеспечивают идеальную композицию и мощность 23 л.с.
              </p>
            </div>
            <div class="tab-panel" id="specs">
              <p class="tab-text">Полные характеристики товара...</p>
            </div>
            <div class="tab-panel" id="reviews">
              <p class="tab-text">Отзывы покупателей...</p>
            </div>
            <div class="tab-panel" id="payment">
              <p class="tab-text">Способы оплаты...</p>
            </div>
            <div class="tab-panel" id="delivery">
              <p class="tab-text">Информация о доставке...</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Similar Products -->
    <section class="similar-section">
      <div class="container">
        <div class="similar-header">
          <h2 class="similar-title">Похожие товары</h2>
          <div class="similar-nav">
            <button class="similar-nav-btn prev" aria-label="Назад">
              <img src="public/assets/40d1d1338cfbab8ddf4ad4dcfe5360adb5cfb97c.svg" alt="" width="24" height="24">
            </button>
            <button class="similar-nav-btn next" aria-label="Вперёд">
              <img src="public/assets/13cab78db9e3cac33724308568deeee0927e3285.svg" alt="" width="24" height="24">
            </button>
          </div>
        </div>
        <div class="similar-grid">
          <article class="product-card">
            <div class="product-image">
              <img src="public/assets/fd4519b15bdbd14029df9c2b6672d950ae7f9e17.png" alt="AJERRA S8 RL300">
            </div>
            <div class="product-info">
              <h3 class="product-name">AJERRA S8 RL300</h3>
              <p class="product-desc">Полноразмерный мотоцикл для продвинутых райдеров.</p>
              <div class="product-divider"></div>
              <div class="product-footer">
                <div class="product-prices">
                  <span class="product-price">100000₽</span>
                  <span class="product-price-old">140000₽</span>
                </div>
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
              <img src="public/assets/fd4519b15bdbd14029df9c2b6672d950ae7f9e17.png" alt="AJERRA S8 RL300">
            </div>
            <div class="product-info">
              <h3 class="product-name">AJERRA S8 RL300</h3>
              <p class="product-desc">Полноразмерный мотоцикл для продвинутых райдеров.</p>
              <div class="product-divider"></div>
              <div class="product-footer">
                <div class="product-prices">
                  <span class="product-price">100000₽</span>
                  <span class="product-price-old">140000₽</span>
                </div>
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
              <img src="public/assets/fd4519b15bdbd14029df9c2b6672d950ae7f9e17.png" alt="AJERRA S8 RL300">
            </div>
            <div class="product-info">
              <h3 class="product-name">AJERRA S8 RL300</h3>
              <p class="product-desc">Полноразмерный мотоцикл для продвинутых райдеров.</p>
              <div class="product-divider"></div>
              <div class="product-footer">
                <div class="product-prices">
                  <span class="product-price">100000₽</span>
                  <span class="product-price-old">140000₽</span>
                </div>
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
      </div>
    </section>

    <?php include 'includes/footer.php'; ?>
  </div>

  <script>
    // Tab Switching
    document.querySelectorAll('.tab-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const tabId = btn.dataset.tab;
        document.querySelectorAll('.tab-panel').forEach(panel => {
          panel.classList.remove('active');
        });
        document.getElementById(tabId).classList.add('active');
      });
    });
  </script>
</body>
</html>
