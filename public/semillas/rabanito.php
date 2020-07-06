<?php $titulo = "Rabanito"; ?>

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
        <img src="../assets/img/semillas/b-<?php echo $titulo; ?>.png" alt="">
      </figure>
    </div>
  </div>
  <main class="main">
    <section class="producto-semilla section">
      <div class="producto-semilla__container container">
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = 'TORERO'; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Hoja de color verde claro y peciolos ligeramente amoratados.</li>
              <li>Raíz globosa, de color rojo en el exterior y blanco en el interior.</li>
              <li>Prefiere ambientes frescos. Siembra a chorrillo a una dosis de 0,5 g/m2 en líneas separadas de 15 a 25 cm.</li>
              <li>Son necesarios aclareos con el fin de dejar las plantas a una distancia suficiente para su desarrollo.</li>
              <li>Alta resistencia al acorchado.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/torero.jpg" alt="">
          </figure>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>