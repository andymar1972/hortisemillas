<?php $titulo = "Zapallito"; ?>

<?php include('../includes/_head2.php') ?>
<title><?php echo $titulo; ?> - Hortisemillas/Semillas Seleccionadas</title>

</head>

<body>
  <?php include('../includes/_header2.php') ?>
  <div class="banner--modify">
    <div class="banner__container">
      <div class="container">
        <h2 class="banner__title"><?php echo $titulo; ?></h2>
      </div>
      <figure class="banner__img">
        <img src="../assets/img/semillas/b-<?php echo strtolower($titulo); ?>.png" alt="">
      </figure>
    </div>
  </div>

  <main class="main">
    <section class="producto-semilla section">
      <div class="producto-semilla__container container">
        <nav class="producto-semilla__nav">
          <ul>
            <li><a href="../productos.php">Productos</a></li>
            <li>
              <i class="fas fa-caret-right"></i>
              <figure>
                <img src="../assets/img/icons/semillas/<?php echo strtolower($titulo); ?>.png" alt="">
              </figure>
              <?php echo strtoupper($titulo); ?>
            </li>
          </ul>
        </nav>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "BAHIA F1"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Planta vigorosa, de porte abierto, con entrenudos cortos y hojas de gran tamaño, muy productiva.</li>
              <li>El fruto es cilíndrico, marcando ligeramente las aristas, rectos, de color verde medio brillantes y con cicatriz pistilar pequeña.</li>
              <li>Tiene muy buen comportamiento frente a oidium.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/bahia.jpg" alt="">
          </figure>
        </div>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "BLAS F1"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Zapallito precoz</li>
              <li>Con planta de porte abierto y entrenudos cortos</li>
              <li>De crecimiento lento.</li>
              <li>Frutos rectos, de color verde oscuro, poco jaspeado y muy consistente.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/blas.jpg" alt="">
          </figure>
        </div>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "LENA F1"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Recomendada para cultivos de campo abierto.</li>
              <li>Funciona también para siembras en invernadero.</li>
              <li>Planta frondosa, erecta, entrenudos cortos, muy vigorosa y hojas de gran tamaño.</li>
              <li>Fruto globoso, color verde crema, no demasiado claro, con una longitud de 12 a 14 cms, y aguanta bien después de la cosecha.</li>
              <li>Frutos con buena presentación comercial.</li>
              <li>Primera cosecha temprana (50 a 55 días después de la siembra)</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/lena.jpg" alt="">
          </figure>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>