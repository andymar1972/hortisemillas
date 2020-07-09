<?php $titulo = "Lechuga"; ?>

<?php include('../includes/_head2.php') ?>
<title><?php echo $titulo; ?> - Hortisemillas/Semillas Seleccionadas</title>

</head>

<body>
  <?php include('../includes/_header2.php') ?>
  <div class="banner--modify">
    <div class="banner__container">
      <!-- <div class="container">
        <h2 class="banner__title"><?php echo $titulo; ?></h2>
      </div> -->
      <figure class="banner__img">
        <img src="../assets/img/semillas/b-<?php echo strtolower($titulo); ?>.png" alt="">
      </figure>
      <figure class="banner__absolute">
        <img src="../assets/img/semillas/lechuga-main.png" alt="">
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
        <!-- <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "BEGOÑA"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Batavia amarilla de color atractivo.</li>
              <li>Vigorosa, con abundante hoja exterior.</li>
              <li>Indicada para cultivo en invernadero en otoño- invierno y en climas suaves a principios de primavera.</li>
              <li>Al aire libre está indicada para final de invierno-primavera.</li>
              <li>Resistente a Bremia, razas 1 a 16, 19 y 21.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/begoña.jpg" alt="">
          </figure>
        </div> -->
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "ANTARTICA"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Lechuga precoz, de color verde.</li>
              <li>Buena tolerancia a la floración.</li>
              <li>Aguanta muy bien en el campo con un crecimiento lento.</li>
              <li>Buen comportamiento en el campo, muy versátil. </li>
              <li>Alta resistencia a Bl (1 - 28)</li>
              <li>Resistencia intermedia a LMV (0)</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/lechuga-antartica.jpg" alt="">
          </figure>
        </div>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "GALA"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Lechuga tipo Iceberg para el mercado de América del Sur y Estados Unidos.</li>
              <li>Planta y cabeza grande, buena protección de la cabeza, peso promedio de 900 gramos por cabeza, alto porcentaje de primera clase (70%) y buena tolerancia a la subida de la flor.</li>
              <li>Precocidad media.</li>
              <li>Alta resistencia al Bremia Bl 1-4/6-10/13-16/18-20/23-26 y resistencia intermedia al LMV (Lettuce Mosaic Virus).</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/gala.jpg" alt="">
          </figure>
        </div>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "GRENADINE"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Lechuga tipo Hojas de Roble roja.</li>
              <li>Medianamente precoz.</li>
              <li>Buen vigor</li>
              <li>Hojas delgadas y flexibles</li>
              <li>Buena densidad de hojas en el centro</li>
              <li>Hojas oscuras y brillantes con color triple rojo y versátil.</li>
              <li>Buena tolerancia a la floración.</li>
              <li>Ideal para Primavera, Verano y Otoño.</li>
              <li>Tiene alta resistencia a Bl 16-26,28.32. LMV.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/grenadine.jpg" alt="">
          </figure>
        </div>
        <!-- <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "LIRICE"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Lechuga crespa verde claro</li>
              <li>Hojas gruesas, puntas rizadas, muy bonita forma</li>
              <li>Medianamente precoz</li>
              <li>Siembras de Primavera, Verano y Otoño</li>
              <li>Excelente comportamiento en condiciones calientes.</li>
              <li>Muy buena tolerancia a la floración</li>
              <li>Variedad versátil, buen porcentaje de corte.</li>
              <li>Alta resistencia: Bl 1-28, Nr0</li>
              <li>Resistencia Intermedia a LMV (0)</li>
              <li>Alta resistencia a  Bremia : BL16-28,30,31 y a afidos (Nr0)</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/lirice.jpg" alt="">
          </figure>
        </div> -->
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "MONTERREAL"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Tipo Romana con buenas aptitudes tanto para fresco como para la industria.</li>
              <li>Color verde oscuro.</li>
              <li>Hojas erectas, abullonadas, consistentes y crujientes con una roseta alta.</li>
              <li>Cultivos de otoño-invierno-primavera.</li>
              <li>Excelente comportamiento frente al espigado.</li>
              <li>Alta resistencia a Bl (16, 19 y 21).</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/monterreal.jpg" alt="">
          </figure>
        </div>
        <div class="navegacion">
          <a class="navegacion__button-prev" href="espinaca.php"><i class="fas fa-caret-left"></i>ESPINACA</a>
          <a class="navegacion__button-next" href="pimiento.php">PIMIENTO<i class="fas fa-caret-right"></i></a>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>