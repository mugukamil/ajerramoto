<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Заказ успешно оформлен — AJERRA Moto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Krona+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="src/styles/main.css">
  <link rel="stylesheet" href="src/styles/order.css">
</head>
<body>
  <div class="page page-with-header">
    <?php include 'includes/header-page.php'; ?>

    <!-- Order Success Section -->
    <section class="order-success-section">
      <div class="container">
        <!-- Breadcrumbs -->
        <nav class="breadcrumbs">
          <a href="index.php" class="breadcrumb-link">Главная</a>
          <img src="public/assets/c230e64e2fc8f783afe01e41d1f7b08d6ec283fb.svg" alt="" class="breadcrumb-arrow" width="14" height="14">
          <span class="breadcrumb-current">Заказ успешно оформлен</span>
        </nav>
        <div class="breadcrumb-divider"></div>

        <!-- Success Content -->
        <div class="order-success-content">
          <div class="order-success-image">
            <img src="public/assets/order-success.svg" alt="Заказ успешно оформлен" width="446" height="286">
          </div>
          <div class="order-success-message">
            <p class="order-success-text">
              Ваш заказ <strong>№4854</strong> от 30.12.2025 22:38 успешно создан. Номер вашей оплаты: <strong>№4854/1</strong>
              <br><br>
              Вы можете следить за выполнением своего заказа в <a href="#" class="order-success-link">Персональном разделе сайта</a>. Обратите внимание, что для входа в этот раздел вам необходимо будет ввести логин и пароль пользователя сайта.
            </p>
          </div>
        </div>
      </div>
    </section>

    <?php include 'includes/footer.php'; ?>
  </div>
</body>
</html>
