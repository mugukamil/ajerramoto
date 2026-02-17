<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Корзина — AJERRA Moto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Krona+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="src/styles/main.css">
  <link rel="stylesheet" href="src/styles/cart.css">
</head>
<body>
  <div class="page page-with-header">
    <?php include 'includes/header-page.php'; ?>

    <!-- Cart Section -->
    <section class="cart-section">
      <div class="container">
        <!-- Breadcrumbs -->
        <nav class="breadcrumbs">
          <a href="index.php" class="breadcrumb-link">Главная</a>
          <img src="public/assets/c230e64e2fc8f783afe01e41d1f7b08d6ec283fb.svg" alt="" class="breadcrumb-arrow" width="14" height="14">
          <span class="breadcrumb-current">Корзина</span>
        </nav>
        <div class="breadcrumb-divider"></div>

        <!-- Cart with Items -->
        <div class="cart-content" id="cart-with-items">
          <div class="cart-main">
            <h1 class="cart-title">Корзина</h1>

            <!-- Cart Items List -->
            <div class="cart-items">
              <!-- Cart Item 1 -->
              <div class="cart-item">
                <div class="cart-item-image">
                  <img src="public/assets/aa814c92260698d3cae94f93357d949cce0077b0.png" alt="Мотоцикл Progasi PALMA 250">
                </div>
                <div class="cart-item-info">
                  <h3 class="cart-item-name">Мотоцикл Progasi PALMA 250 (CB250-F) Orange</h3>
                </div>
                <div class="cart-item-counter">
                  <div class="counter">
                    <button class="counter-btn minus" aria-label="Уменьшить">
                      <img src="public/assets/minus-icon.svg" alt="" width="16" height="16">
                    </button>
                    <span class="counter-value">10</span>
                    <button class="counter-btn plus" aria-label="Увеличить">
                      <img src="public/assets/13cab78db9e3cac33724308568deeee0927e3285.svg" alt="" width="16" height="16">
                    </button>
                  </div>
                  <span class="cart-item-unit-price">10000₽ / шт</span>
                </div>
                <div class="cart-item-price">100000₽</div>
                <button class="cart-item-delete" aria-label="Удалить">
                  <img src="public/assets/delete-icon.svg" alt="" width="20" height="20">
                </button>
              </div>

              <div class="cart-item-divider"></div>

              <!-- Cart Item 2 -->
              <div class="cart-item">
                <div class="cart-item-image">
                  <img src="public/assets/667ff3e2940adf340cfbcbe959f9c1a7214422ea.png" alt="Мотоцикл Progasi PALMA 250">
                </div>
                <div class="cart-item-info">
                  <h3 class="cart-item-name">Мотоцикл Progasi PALMA 250 (CB250-F) Orange</h3>
                </div>
                <div class="cart-item-counter">
                  <div class="counter">
                    <button class="counter-btn minus" aria-label="Уменьшить">
                      <img src="public/assets/minus-icon.svg" alt="" width="16" height="16">
                    </button>
                    <span class="counter-value">41</span>
                    <button class="counter-btn plus" aria-label="Увеличить">
                      <img src="public/assets/13cab78db9e3cac33724308568deeee0927e3285.svg" alt="" width="16" height="16">
                    </button>
                  </div>
                  <span class="cart-item-unit-price">10000₽ / шт</span>
                </div>
                <div class="cart-item-price">129381₽</div>
                <button class="cart-item-delete" aria-label="Удалить">
                  <img src="public/assets/delete-icon.svg" alt="" width="20" height="20">
                </button>
              </div>

              <div class="cart-item-divider"></div>

              <!-- Cart Item 3 -->
              <div class="cart-item">
                <div class="cart-item-image">
                  <img src="public/assets/09cc6f82150767efb913391726cabe1fce6b213b.png" alt="Мотоцикл Progasi PALMA 250">
                </div>
                <div class="cart-item-info">
                  <h3 class="cart-item-name">Мотоцикл Progasi PALMA 250 (CB250-F) Orange</h3>
                </div>
                <div class="cart-item-counter">
                  <div class="counter">
                    <button class="counter-btn minus" aria-label="Уменьшить">
                      <img src="public/assets/minus-icon.svg" alt="" width="16" height="16">
                    </button>
                    <span class="counter-value">2</span>
                    <button class="counter-btn plus" aria-label="Увеличить">
                      <img src="public/assets/13cab78db9e3cac33724308568deeee0927e3285.svg" alt="" width="16" height="16">
                    </button>
                  </div>
                  <span class="cart-item-unit-price">10000₽ / шт</span>
                </div>
                <div class="cart-item-price">131021₽</div>
                <button class="cart-item-delete" aria-label="Удалить">
                  <img src="public/assets/delete-icon.svg" alt="" width="20" height="20">
                </button>
              </div>

              <div class="cart-item-divider"></div>

              <!-- Cart Item 4 -->
              <div class="cart-item">
                <div class="cart-item-image">
                  <img src="public/assets/89ecf4374f11209328c188512d0753c3d19abd21.png" alt="Мотоцикл Progasi PALMA 250">
                </div>
                <div class="cart-item-info">
                  <h3 class="cart-item-name">Мотоцикл Progasi PALMA 250 (CB250-F) Orange</h3>
                </div>
                <div class="cart-item-counter">
                  <div class="counter">
                    <button class="counter-btn minus" aria-label="Уменьшить">
                      <img src="public/assets/minus-icon.svg" alt="" width="16" height="16">
                    </button>
                    <span class="counter-value">5</span>
                    <button class="counter-btn plus" aria-label="Увеличить">
                      <img src="public/assets/13cab78db9e3cac33724308568deeee0927e3285.svg" alt="" width="16" height="16">
                    </button>
                  </div>
                  <span class="cart-item-unit-price">10000₽ / шт</span>
                </div>
                <div class="cart-item-price">912391₽</div>
                <button class="cart-item-delete" aria-label="Удалить">
                  <img src="public/assets/delete-icon.svg" alt="" width="20" height="20">
                </button>
              </div>

              <div class="cart-item-divider"></div>

              <!-- Cart Item 5 -->
              <div class="cart-item">
                <div class="cart-item-image">
                  <img src="public/assets/d269588cc2e3ba86da1d80a32d310114815c771f.png" alt="Мотоцикл Progasi PALMA 250">
                </div>
                <div class="cart-item-info">
                  <h3 class="cart-item-name">Мотоцикл Progasi PALMA 250 (CB250-F) Orange</h3>
                </div>
                <div class="cart-item-counter">
                  <div class="counter">
                    <button class="counter-btn minus" aria-label="Уменьшить">
                      <img src="public/assets/minus-icon.svg" alt="" width="16" height="16">
                    </button>
                    <span class="counter-value">2</span>
                    <button class="counter-btn plus" aria-label="Увеличить">
                      <img src="public/assets/13cab78db9e3cac33724308568deeee0927e3285.svg" alt="" width="16" height="16">
                    </button>
                  </div>
                  <span class="cart-item-unit-price">10000₽ / шт</span>
                </div>
                <div class="cart-item-price">121312₽</div>
                <button class="cart-item-delete" aria-label="Удалить">
                  <img src="public/assets/delete-icon.svg" alt="" width="20" height="20">
                </button>
              </div>
            </div>
          </div>

          <!-- Order Summary -->
          <div class="cart-summary">
            <div class="summary-row">
              <span class="summary-label">Итого</span>
              <span class="summary-total">1314037₽</span>
            </div>
            <button class="btn-one-click">Купить в один клик</button>
            <button class="btn-checkout">Перейти к офомлению</button>
          </div>
        </div>

        <!-- Empty Cart (hidden by default) -->
        <div class="cart-empty" id="cart-empty" style="display: none;">
          <div class="cart-empty-content">
            <h2 class="cart-empty-title">Ваша корзина пуста</h2>
            <p class="cart-empty-text">
              <a href="category.php" class="cart-empty-link">Нажмите здесь</a>, чтобы продолжить покупки.
            </p>
            <img src="public/assets/undraw_empty-cart_574u.svg" alt="" class="cart-empty-image" width="271" height="226">
          </div>
        </div>
      </div>
    </section>

    <?php include 'includes/footer.php'; ?>
  </div>

  <script>
    // Toggle between cart states for demo
    // In production, this would be controlled by actual cart data
    function showEmptyCart() {
      document.getElementById('cart-with-items').style.display = 'none';
      document.getElementById('cart-empty').style.display = 'flex';
    }

    function showCartWithItems() {
      document.getElementById('cart-with-items').style.display = 'flex';
      document.getElementById('cart-empty').style.display = 'none';
    }

    // Counter functionality
    document.querySelectorAll('.counter-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        const counter = this.closest('.counter');
        const valueEl = counter.querySelector('.counter-value');
        let value = parseInt(valueEl.textContent);

        if (this.classList.contains('plus')) {
          value++;
        } else if (this.classList.contains('minus') && value > 1) {
          value--;
        }

        valueEl.textContent = value;
      });
    });

    // Delete item
    document.querySelectorAll('.cart-item-delete').forEach(btn => {
      btn.addEventListener('click', function() {
        const item = this.closest('.cart-item');
        const divider = item.nextElementSibling;
        item.remove();
        if (divider && divider.classList.contains('cart-item-divider')) {
          divider.remove();
        }

        // Check if cart is empty
        const items = document.querySelectorAll('.cart-item');
        if (items.length === 0) {
          showEmptyCart();
        }
      });
    });
  </script>
</body>
</html>
