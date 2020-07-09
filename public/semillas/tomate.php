<?php $titulo = "Tomate"; ?>

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
      <figure class="banner__absolute">
        <img src="../assets/img/semillas/tomate-main.png" alt="">
      </figure>
    </div>
  </div>
  <main class="main">
    <section class="producto-semilla section">
      <div class="producto-semilla__container container">
        <nav class="producto-semilla__nav--modify">
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
        <div class="producto-semilla__2fr">
          <div class="producto-semilla__filtro">
            <ul class="producto-semilla__filtro__list">
              <li class="tablinks" onclick="openCity(event, 'determinado')" id="defaultOpen">Determinado <i class="fas fa-caret-right"></i></li>
              <li class="tablinks" onclick="openCity(event, 'indeterminado')">Indeterminado <i class="fas fa-caret-right"></i></li>
              <li onclick="openCity(event, 'cherry')" class="tablinks">Cherry <i class="fas fa-caret-right"></i></li>
            </ul>
          </div>
          <div class="producto-semilla__all">
            <div id="determinado" class="tabcontent">
              <div class="tabcontent__title title">Determinado</div>
              <!-- <p class="tabcontent__text">Industria del Congelado y Fresco, también lo utilizan para la Industria Conservera</p> -->
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "Proximamente"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                </div>
              </div>
            </div>
            <div id="indeterminado" class="tabcontent">
              <div class="tabcontent__title title">Indeterminado</div>
              <!-- <p class="tabcontent__text">Industria del Congelado y Fresco, también lo utilizan para la Industria Conservera</p> -->
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "AGUAMIEL F1"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/vilmorin.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Tomate indeterminado para invernadero y campo abierto, semitardío, de buen vigor. Planta con entrenudos cortos, buena cobertura y alta producción.</li>
                    <li>Fruto alargado, de buen tamaño con unos 7.5 x 5.5 centímetros y unos 140 a 160 gramos, con 3 lóculos en promedio.</li>
                    <li>Homogeneidad en tamaño y peso del fruto. Frutos muy firmes. Buena conservación. Resistencia Alta a ToMV, V:0, Fol: 0,1, 2, S, TSWV:0.</li>
                    <li>Resistencia Intermedia a M, TYLCV.</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/aguamiel.jpg" alt="">
                </figure>
              </div>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "ALMEIDA F1"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/vilmorin.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Tomate Redondo Indeterminado</li>
                    <li>Adaptado para siembras al aire libre</li>
                    <li>Planta muy vigorosa y rústica</li>
                    <li>Buena cobertura foliar y entrenudos cortos</li>
                    <li>Frutos de 180 a 200 gramos, de buen color</li>
                    <li>Tamaño homogéneo de los frutos hasta el final de la cosecha</li>
                    <li>Buen rendimiento</li>
                    <li>Buena tolerancia al rajado del fruto</li>
                    <li>Tolerante a problemas fisiológicos en la maduración</li>
                    <li>Resistencia a ToMV, V:0, Fol: 0, 1, M, TYLCV y TSWV:0</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/almeida.jpg" alt="">
                </figure>
              </div>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "PALERMO F1:"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/vilmorin.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Semi precoz.</li>
                    <li>Buen vigor y buena cobertura foliar.</li>
                    <li>Buena firmeza, buena calidad y buena postcosecha del fruto.</li>
                    <li>Uniformidad en tamaño y peso del fruto.</li>
                    <li>Tamaño promedio del fruto entre 140 y 150 gramos.</li>
                    <li>Se adapta bien a ciclos medios o largos.</li>
                    <li>Alto rendimiento.</li>
                    <li>Alta Resistencia a Fol:0; Pst ; ToMV:0, 1, 2; Va:0.</li>
                    <li>Resistencia media a M; TYLCV</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/palermo.jpg" alt="">
                </figure>
              </div>
            </div>
            <div id="cherry" class="tabcontent">
              <div class="tabcontent__title title">CHERRY</div>
                <div class="producto-semilla__grid">
                  <div class="producto-semilla__data">
                    <?php $tituloSemilla = "BRONCO F1"; ?>
                    <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                    <figure class="producto-semilla__logo">
                      <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                    </figure>
                    <ul class="producto-semilla__list">
                      <li>Planta vigorosa, de entrenudos medios y porte semiabierto.</li>
                      <li>Fruto de alta consistencia y buena conservación.</li>
                      <li>Con un ramo casi perfecto y un peso medio de 28-32 g.</li>
                      <li>HR a ToMV, Fol (0, 1). IR a TYLCV y N.</li>
                    </ul>
                  </div>
                  <figure class="producto-semilla__img">
                    <img src="../assets/img/semillas/tomate-bronco.jpg" alt="">
                  </figure>
                </div>
                <div class="producto-semilla__grid">
                  <div class="producto-semilla__data">
                    <?php $tituloSemilla = "PAIME F1"; ?>
                    <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                    <figure class="producto-semilla__logo">
                      <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                    </figure>
                    <ul class="producto-semilla__list">
                      <li>Tipo Cherry Pera para cultivo en invernadero.</li>
                      <li>Planta de gran vigor, con entrenudos medios y porte abierto.</li>
                      <li>Fruto de 25-30 g de peso, muy resistente al rajado.</li>
                      <li>Para recolección en suelto.</li>
                      <li>Ciclo largo.</li>
                      <li>Alta Resistencia a ToMV.</li>
                      <li>Alcanza los 9-10º Brix, por lo que destaca por su sabor.</li>
                    </ul>
                  </div>
                  <figure class="producto-semilla__img">
                    <img src="../assets/img/semillas/paime.jpg" alt="">
                  </figure>
                </div>
              <!-- <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "SCIALARI F1"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/vilmorin.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Tipo Cherry redondo indeterminado</li>
                    <li>Vigor medio con entrenudos cortos</li>
                    <li>Frutos redondos de 15 a 20 gramos</li>
                    <li>Racimos compactos, con 14 a 16 frutos</li>
                    <li>Fruto firme y buen sabor</li>
                    <li>Alta tolerancia al cracking</li>
                    <li>Buen cuaje a altas temperaturas</li>
                    <li>Alto rendimiento</li>
                    <li>Adaptado a ciclos largos de cultivo</li>
                    <li>Para cosechas en racimo y suelto</li>
                    <li>Alta resistencia a TYLCV, M</li>
                    <li>Resistencia Intermedia a ToMV, V:0, Fol:0,1</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/scialari.jpg" alt="">
                </figure>
              </div> -->
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "TRUVATURA F1"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/vilmorin.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Tipo Cherry, redondo indeterminado</li>
                    <li>Planta muy vigorosa</li>
                    <li>Buena cobertura con hojas oscuras</li>
                    <li>Excelente cuaje, obteniéndose buen rendimiento</li>
                    <li>Fruto de buen color rojo</li>
                    <li>Frutos redondos de 20 a 25 gramos</li>
                    <li>De buena consistencia y buen sabor</li>
                    <li>Racimos largos</li>
                    <li>Cosecha en racimo</li>
                    <li>Racimos compactos con 18 a 22 frutos</li>
                    <li>Larga vida de anaquel</li>
                    <li>Adaptado a ciclos largos</li>
                    <li>Alta resistencia a ToMV, Fol: 0,1, TSWV:0</li>
                    <li>Resistencia Intermedia a M, TYLCV</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/truvatura.jpg" alt="">
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="navegacion">
          <a class="navegacion__button-prev" href="sandia.php"><i class="fas fa-caret-left"></i>sandia</a>
          <a class="navegacion__button-next" href="vainita.php">vainitia<i class="fas fa-caret-right"></i></a>
        </div>

      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>