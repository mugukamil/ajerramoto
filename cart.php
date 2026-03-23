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
          <svg class="breadcrumb-arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.25 10.5L8.75 7L5.25 3.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
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
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.33301 8H12.6663" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </button>
                    <input type="number" class="counter-value" value="10" min="1">
                    <button class="counter-btn plus" aria-label="Увеличить">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.33301 8H12.6663" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 3.33334V12.6667" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </button>
                  </div>
                  <span class="cart-item-unit-price">10000₽ / шт</span>
                </div>
                <div class="cart-item-price">100000₽</div>
                <button class="cart-item-delete" aria-label="Удалить">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.33301 9.16666V14.1667" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.667 9.16666V14.1667" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.8337 5V16.6667C15.8337 17.1087 15.6581 17.5326 15.3455 17.8452C15.0329 18.1577 14.609 18.3333 14.167 18.3333H5.83366C5.39163 18.3333 4.96771 18.1577 4.65515 17.8452C4.34259 17.5326 4.16699 17.1087 4.16699 16.6667V5" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.5 5H17.5" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.66699 4.99999V3.33332C6.66699 2.8913 6.84259 2.46737 7.15515 2.15481C7.46771 1.84225 7.89163 1.66666 8.33366 1.66666H11.667C12.109 1.66666 12.5329 1.84225 12.8455 2.15481C13.1581 2.46737 13.3337 2.8913 13.3337 3.33332V4.99999" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>

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
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.33301 8H12.6663" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </button>
                    <input type="number" class="counter-value" value="41" min="1">
                    <button class="counter-btn plus" aria-label="Увеличить">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.33301 8H12.6663" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 3.33334V12.6667" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </button>
                  </div>
                  <span class="cart-item-unit-price">10000₽ / шт</span>
                </div>
                <div class="cart-item-price">129381₽</div>
                <button class="cart-item-delete" aria-label="Удалить">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.33301 9.16666V14.1667" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.667 9.16666V14.1667" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.8337 5V16.6667C15.8337 17.1087 15.6581 17.5326 15.3455 17.8452C15.0329 18.1577 14.609 18.3333 14.167 18.3333H5.83366C5.39163 18.3333 4.96771 18.1577 4.65515 17.8452C4.34259 17.5326 4.16699 17.1087 4.16699 16.6667V5" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.5 5H17.5" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.66699 4.99999V3.33332C6.66699 2.8913 6.84259 2.46737 7.15515 2.15481C7.46771 1.84225 7.89163 1.66666 8.33366 1.66666H11.667C12.109 1.66666 12.5329 1.84225 12.8455 2.15481C13.1581 2.46737 13.3337 2.8913 13.3337 3.33332V4.99999" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>

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
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.33301 9.16666V14.1667" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.667 9.16666V14.1667" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.8337 5V16.6667C15.8337 17.1087 15.6581 17.5326 15.3455 17.8452C15.0329 18.1577 14.609 18.3333 14.167 18.3333H5.83366C5.39163 18.3333 4.96771 18.1577 4.65515 17.8452C4.34259 17.5326 4.16699 17.1087 4.16699 16.6667V5" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.5 5H17.5" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.66699 4.99999V3.33332C6.66699 2.8913 6.84259 2.46737 7.15515 2.15481C7.46771 1.84225 7.89163 1.66666 8.33366 1.66666H11.667C12.109 1.66666 12.5329 1.84225 12.8455 2.15481C13.1581 2.46737 13.3337 2.8913 13.3337 3.33332V4.99999" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>

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
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.33301 8H12.6663" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </button>
                    <input type="number" class="counter-value" value="5" min="1">
                    <button class="counter-btn plus" aria-label="Увеличить">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.33301 8H12.6663" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 3.33334V12.6667" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </button>
                  </div>
                  <span class="cart-item-unit-price">10000₽ / шт</span>
                </div>
                <div class="cart-item-price">912391₽</div>
                <button class="cart-item-delete" aria-label="Удалить">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.33301 9.16666V14.1667" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.667 9.16666V14.1667" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.8337 5V16.6667C15.8337 17.1087 15.6581 17.5326 15.3455 17.8452C15.0329 18.1577 14.609 18.3333 14.167 18.3333H5.83366C5.39163 18.3333 4.96771 18.1577 4.65515 17.8452C4.34259 17.5326 4.16699 17.1087 4.16699 16.6667V5" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.5 5H17.5" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.66699 4.99999V3.33332C6.66699 2.8913 6.84259 2.46737 7.15515 2.15481C7.46771 1.84225 7.89163 1.66666 8.33366 1.66666H11.667C12.109 1.66666 12.5329 1.84225 12.8455 2.15481C13.1581 2.46737 13.3337 2.8913 13.3337 3.33332V4.99999" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>

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
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.33301 8H12.6663" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </button>
                    <input type="number" class="counter-value" value="2" min="1">
                    <button class="counter-btn plus" aria-label="Увеличить">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.33301 8H12.6663" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 3.33334V12.6667" stroke="#242424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </button>
                  </div>
                  <span class="cart-item-unit-price">10000₽ / шт</span>
                </div>
                <div class="cart-item-price">121312₽</div>
                <button class="cart-item-delete" aria-label="Удалить">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.33301 9.16666V14.1667" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.667 9.16666V14.1667" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.8337 5V16.6667C15.8337 17.1087 15.6581 17.5326 15.3455 17.8452C15.0329 18.1577 14.609 18.3333 14.167 18.3333H5.83366C5.39163 18.3333 4.96771 18.1577 4.65515 17.8452C4.34259 17.5326 4.16699 17.1087 4.16699 16.6667V5" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.5 5H17.5" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.66699 4.99999V3.33332C6.66699 2.8913 6.84259 2.46737 7.15515 2.15481C7.46771 1.84225 7.89163 1.66666 8.33366 1.66666H11.667C12.109 1.66666 12.5329 1.84225 12.8455 2.15481C13.1581 2.46737 13.3337 2.8913 13.3337 3.33332V4.99999" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
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
            <svg class="cart-empty-image" xmlns="http://www.w3.org/2000/svg" width="271" height="226" fill="none">
              <g clip-path="url(#a)">
                <path fill="#2f2e41" d="M12.593 215.354c3.759 6.964 11.737 9.954 11.737 9.954s1.883-8.302-1.876-15.266-11.737-9.954-11.737-9.954-1.883 8.302 1.876 15.266"/>
                <path fill="#feb05d" d="M15.176 213.063c6.787 4.079 9.4 12.181 9.4 12.181s-8.389 1.488-15.176-2.591c-6.786-4.078-9.4-12.18-9.4-12.18s8.39-1.489 15.176 2.59"/>
                <path fill="#f2f2f2" d="M167.333 10.85h-42.344v.604h42.344z"/>
                <path fill="#f2f2f2" d="M155.84 11.303h-.605v5.59h.605zm-18.45 0h-.605v5.59h.605zm51.417 28.553h-42.344v.604h42.344z"/>
                <path fill="#f2f2f2" d="M158.562 34.417h-.605v5.59h.605zm18.45 0h-.605v5.59h.605zm68.052 19.036H202.72v.604h42.344z"/>
                <path fill="#f2f2f2" d="M214.818 48.014h-.605v5.59h.605zm18.45 0h-.605v5.59h.605zm7.562 145.637h-42.344v.604h42.344z"/>
                <path fill="#f2f2f2" d="M210.584 188.212h-.605v5.59h.605zm18.45 0h-.605v5.59h.605zM168.543 96.66h-42.344v.605h42.344z"/>
                <path fill="#f2f2f2" d="M138.297 91.222h-.605v5.59h.605zm18.45 0h-.605v5.59h.605zm25.104 78.257h-42.344v.604h42.344z"/>
                <path fill="#f2f2f2" d="M151.605 164.04H151v5.59h.605zm18.45 0h-.605v5.59h.605zm79.546-16.618h-42.344v.604h42.344z"/>
                <path fill="#f2f2f2" d="M219.355 141.983h-.605v5.59h.605zm18.45 0h-.605v5.59h.605z"/>
                <path fill="#2f2e41" d="M109.507 212.165H37.89v-.514h71.101v-24.964h-65.08l-3.162-6.58.464-.223 3.022 6.288h65.272z"/>
                <path fill="#3f3d56" d="M47.422 224.776c2.988 0 5.41-2.42 5.41-5.405a5.407 5.407 0 0 0-5.41-5.404 5.407 5.407 0 0 0-5.41 5.404 5.41 5.41 0 0 0 5.41 5.405m53.326 0c2.988 0 5.41-2.42 5.41-5.405a5.407 5.407 0 0 0-5.41-5.404 5.407 5.407 0 0 0-5.41 5.404 5.41 5.41 0 0 0 5.41 5.405m62.858-116.84a3.347 3.347 0 0 0 3.349-3.346 3.347 3.347 0 0 0-3.349-3.345 3.35 3.35 0 0 0-3.349 3.345c0 1.848 1.5 3.346 3.349 3.346"/>
                <path fill="#2f2e41" d="M117.167 178.194H36.669L19.25 121.318h115.854l-.106.335zm-80.117-.514h79.739l17.613-55.847H19.947z"/>
                <path fill="#f2f2f2" d="M110.883 175.235H40.179l-15.3-50.442h101.759l-.092.297z"/>
                <path fill="#2f2e41" d="m136.548 116.237-.498-.132 3.4-12.802h19.777v.515h-19.381zm-7.233 22.324H24.879v.515h104.436zm-5.98 18.963H30.687v.515h92.648z"/>
                <path fill="#2f2e41" d="M77.434 121.576h-.516v56.361h.516zm23.068-.016-3.699 56.359.514.034 3.699-56.36zm-46.641-.001-.514.034 3.677 56.361.514-.034zM271 225.102H0v.604h271z"/>
                <path fill="#a0616a" d="M180.085 18.696s4.421 12.571 1.7 14.505 9.183 17.73 9.183 17.73l14.285-3.869-7.822-13.216s-1.021-13.216-1.021-15.15-16.325 0-16.325 0"/>
                <path fill="#000" d="M180.085 18.696s4.421 12.571 1.7 14.505 9.183 17.73 9.183 17.73l14.285-3.869-7.822-13.216s-1.021-13.216-1.021-15.15-16.325 0-16.325 0" opacity=".1"/>
                <path fill="#2f2e41" d="M172.664 108.307s-1.291 16.117 0 24.498 3.227 31.59 3.227 31.59 0 43.838 7.098 44.483c7.099.645 12.262 1.289 12.907-1.289.645-2.579-3.227-3.869-1.291-5.158s2.582-5.802 0-10.96c-2.581-5.157 0-57.376 0-57.376l12.262 32.878s1.29 27.077 2.581 30.945-1.291 10.96 3.227 11.605 9.68-3.224 12.261-4.513c2.581-1.29-3.872-1.29-2.581-1.934 1.29-.645 5.162-2.579 3.872-3.224-1.291-.644-2.582-31.589-2.582-31.589s-3.549-66.08-8.066-68.66c-4.518-2.578-7.422 1.864-7.422 1.864z"/>
                <path fill="#2f2e41" d="M184.28 206.299v5.158s-5.808 14.019 0 14.019 10.325 1.453 10.325-.481v-17.406zm38.075-.009v5.158s5.808 14.019 0 14.019-10.326 1.453-10.326-.481v-17.407z"/>
                <path fill="#a0616a" d="M189.12 28.044c6.415 0 11.616-5.196 11.616-11.605 0-6.408-5.201-11.604-11.616-11.604s-11.616 5.196-11.616 11.604c0 6.41 5.201 11.605 11.616 11.605"/>
                <path fill="#feb05d" d="M185.57 38.036s3.227 9.67 8.39 7.737l5.163-1.934 9.034 61.889s-7.098 10.315-17.424 3.868c-10.325-6.446-5.163-71.56-5.163-71.56"/>
                <path fill="#3f3d56" d="m194.605 36.102 2.904-6.124s17.101 8.058 19.683 10.637c2.581 2.579 2.581 6.447 2.581 6.447l-4.517 16.117s1.29 35.458 1.29 36.747 4.518 8.381 1.291 5.802c-3.227-2.578-3.872-5.157-6.453-1.289s-8.39 8.381-8.39 8.381z"/>
                <path fill="#a0616a" d="m217.192 82.52-1.936 18.051s-11.616 10.315-9.035 10.96c2.581.644 3.872-1.935 3.872-1.935s4.517 4.513 7.099 1.935c2.581-2.579 9.034-27.077 9.034-27.077z"/>
                <path fill="#2f2e41" d="M189.367.04c-2.575-.093-5.331-.138-7.502 1.248a11 11 0 0 0-2.593 2.536c-2.114 2.67-3.942 6.03-3.156 9.344l.912-.356c0 .885-.197 1.758-.576 2.557.129-.373.559.23.444.608l-1.005 3.293c1.652-.604 3.707.62 3.958 2.36.115-3.825.512-8.212 3.619-10.452 1.566-1.13 3.549-1.475 5.457-1.78 1.759-.283 3.604-.553 5.29.026s3.121 2.3 2.739 4.04c.777-.268 1.646.274 2.03 1s.404 1.582.416 2.403c.828.585 1.771-.576 2.109-1.532.792-2.243 1.497-4.631 1.07-6.972-.427-2.34-2.336-4.576-4.717-4.584.289-.317.443-.735.43-1.163l-1.963-.166a2.17 2.17 0 0 0 1.296-.683c-.788.867-6.984-1.682-8.258-1.728"/>
                <path fill="#3f3d56" d="M188.797 34.168s-5.253-5.142-7.144-4.828c-1.89.316-4.472 4.828-4.472 4.828s-15.488 5.158-14.843 10.315c.646 5.158 7.744 30.3 7.744 30.3s5.809 30.301.646 33.524 24.523 11.604 25.168 7.736 1.936-42.549 0-48.351-7.099-33.524-7.099-33.524m22.587 10.315h7.979s5.573 24.498 6.218 27.077c.646 2.579 1.936 14.828 1.291 14.828-.646 0-13.552-2.579-13.552-.645z"/>
                <path fill="#f2f2f2" d="M211.114 105.148h-30.548c-2.981-13.7-3.23-26.935 0-39.581h30.548c-4.93 12.418-5.238 25.564 0 39.581"/>
                <path fill="#a0616a" d="m168.146 88.322 9.035 3.868s17.424 2.579 17.424-4.513c0-7.091-17.424-3.223-17.424-3.223l-5.808-1.855z"/>
                <path fill="#3f3d56" d="m170.083 40.615-7.744 1.934-5.808 34.169s-1.936 9.025 1.29 9.67 12.262 5.802 12.262 5.802 1.29-9.67 3.872-9.67l-6.454-5.158 3.872-22.564z"/>
                <path fill="#f2f2f2" d="M60.566 106.631H18.223v.605h42.343z"/>
                <path fill="#f2f2f2" d="M30.32 101.193h-.604v5.589h.605zm18.45 0h-.605v5.589h.605zm26.617-83.998H33.043v.604h42.344z"/>
                <path fill="#f2f2f2" d="M63.893 17.648h-.605v5.59h.605zm-18.45 0h-.605v5.59h.605zm72.59 59.07H75.689v.605h42.344z"/>
                <path fill="#f2f2f2" d="M106.539 77.172h-.604v5.59h.604zm-18.449 0h-.605v5.59h.605zm-42.042-.756H3.705v.605h42.343z"/>
                <path fill="#f2f2f2" d="M34.555 76.87h-.605v5.59h.605zm-18.45 0h-.604v5.59h.604zM96.86 46.201H54.518v.605h42.344z"/>
                <path fill="#f2f2f2" d="M66.615 40.763h-.605v5.59h.605zm18.45 0h-.605v5.59h.605z"/>
              </g>
              <defs>
                <clipPath id="a">
                  <path fill="#fff" d="M0 0h271v226H0z"/>
                </clipPath>
              </defs>
            </svg>
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
        const input = counter.querySelector('.counter-value');
        let value = parseInt(input.value) || 1;

        if (this.classList.contains('plus')) {
          value++;
        } else if (this.classList.contains('minus') && value > 1) {
          value--;
        }

        input.value = value;
      });
    });

    // Delete item
    document.querySelectorAll('.cart-item-delete').forEach(btn => {
      btn.addEventListener('click', function() {
        const item = this.closest('.cart-item');
        item.remove();
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
