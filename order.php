<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Оформление заказа — AJERRA Moto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Krona+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="src/styles/main.css">
  <link rel="stylesheet" href="src/styles/order.css">
</head>
<body>
  <div class="page page-with-header">
    <?php include 'includes/header-page.php'; ?>

    <!-- Order Section -->
    <section class="order-section">
      <div class="container">
        <!-- Breadcrumbs -->
        <nav class="breadcrumbs">
          <a href="index.php" class="breadcrumb-link">Главная</a>
          <svg class="breadcrumb-arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.25 10.5L8.75 7L5.25 3.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <span class="breadcrumb-current">Оформление заказа</span>
        </nav>
        <div class="breadcrumb-divider"></div>

        <!-- Order Content -->
        <div class="order-content">
          <!-- Order Form -->
          <div class="order-main">
            <h1 class="order-title">Оформление заказа</h1>

            <!-- Customer Info -->
            <div class="order-block">
              <h2 class="order-block-title">Покупатель</h2>
              <div class="order-form-row">
                <div class="form-group">
                  <label class="form-label" for="fio">Ф.И.О <span class="required">*</span></label>
                  <input type="text" id="fio" class="form-input" placeholder="Введите ваше Ф.И.О">
                </div>
                <div class="form-group">
                  <label class="form-label" for="email">Email <span class="required">*</span></label>
                  <input type="email" id="email" class="form-input" placeholder="Введите ваш email">
                </div>
                <div class="form-group">
                  <label class="form-label" for="phone">Телефон <span class="required">*</span></label>
                  <input type="tel" id="phone" class="form-input" placeholder="Введите ваш телефон">
                </div>
              </div>
              <p class="form-note"><span class="required">*</span> – обязательные поля</p>
            </div>

            <!-- Delivery -->
            <div class="order-block">
              <h2 class="order-block-title">Доставка</h2>
              <div class="radio-group">
                <label class="radio-label">
                  <input type="radio" name="delivery" checked>
                  <span class="radio-icon-unchecked"></span>
                  <span class="radio-text">Доставка курьером</span>
                </label>
                <label class="radio-label">
                  <input type="radio" name="delivery">
                  <span class="radio-icon-unchecked"></span>
                  <span class="radio-text">Самовывоз</span>
                </label>
              </div>
              <div class="order-divider"></div>
              <div class="order-form-row delivery-form">
                <div class="form-group">
                  <label class="form-label" for="address">Адрес доставки <span class="required">*</span></label>
                  <input type="text" id="address" class="form-input" placeholder="Введите ваш адрес">
                </div>
                <div class="form-group">
                  <label class="form-label" for="zip">Индекс <span class="required">*</span></label>
                  <input type="text" id="zip" class="form-input" placeholder="Введите ваш индекс">
                </div>
              </div>
              <div class="form-group form-group-full">
                <label class="form-label" for="comment">Комментарий к заказу</label>
                <textarea id="comment" class="form-textarea" placeholder="Введите ваш комментарий"></textarea>
              </div>
              <p class="form-note"><span class="required">*</span> – обязательные поля</p>
            </div>

            <!-- Payment -->
            <div class="order-block">
              <h2 class="order-block-title">Оплата</h2>
              <div class="radio-group mb-0">
                <label class="radio-label">
                  <input type="radio" name="payment" checked>
                  <span class="radio-icon-unchecked"></span>
                  <span class="radio-text">Наличными</span>
                </label>
                <label class="radio-label">
                  <input type="radio" name="payment">
                  <span class="radio-icon-unchecked"></span>
                  <span class="radio-text">Картой</span>
                </label>
              </div>
            </div>
          </div>

          <!-- Order Summary -->
          <div class="order-summary">
            <div class="summary-row">
              <span class="summary-label">Итого</span>
              <span class="summary-total">1314037₽</span>
            </div>
            <div class="summary-details">
              <div class="summary-item">
                <span class="summary-item-label">Товаров на</span>
                <span class="summary-item-value">12 070₽</span>
              </div>
              <div class="summary-item">
                <span class="summary-item-label">Доставка</span>
                <span class="summary-item-value">500₽</span>
              </div>
            </div>
            <div class="summary-divider"></div>
            <div class="summary-toggles">
              <label class="toggle-label">
                <span class="toggle-text">Я согласен на обработку персональных данных</span>
                <button type="button" class="toggle-btn active" aria-label="Toggle">
                  <span class="toggle-slider"></span>
                </button>
              </label>
              <label class="toggle-label">
                <span class="toggle-text">Согласен с публичной офертой</span>
                <button type="button" class="toggle-btn" aria-label="Toggle">
                  <span class="toggle-slider"></span>
                </button>
              </label>
            </div>
            <button class="btn-submit" onclick="window.location.href='order-success.php'">Оформить заказ</button>
          </div>
        </div>
      </div>
    </section>

    <?php include 'includes/footer.php'; ?>
  </div>

  <script>
    // Toggle buttons
    document.querySelectorAll('.toggle-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        this.classList.toggle('active');
      });
    });
  </script>
</body>
</html>
