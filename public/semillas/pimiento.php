<?php $titulo = "Pimiento"; ?>

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
        <img src="../assets/img/semillas/pimiento-main.png" alt="">
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
              <li class="tablinks" onclick="openCity(event, 'california')" id="defaultOpen">California <i class="fas fa-caret-right"></i></li>
              <li class="tablinks" onclick="openCity(event, 'cristal')">Cristal <i class="fas fa-caret-right"></i></li>
              <li class="tablinks" onclick="openCity(event, 'guindilla')" >Guindilla <i class="fas fa-caret-right"></i></li>
              <li class="tablinks" onclick="openCity(event, 'jalapeño')" >Jalapeño <i class="fas fa-caret-right"></i></li>
              <li class="tablinks" onclick="openCity(event, 'morron')" >Morrón <i class="fas fa-caret-right"></i></li>
              <li class="tablinks" onclick="openCity(event, 'padron')" >Padrón <i class="fas fa-caret-right"></i></li>
              <li class="tablinks" onclick="openCity(event, 'papikra')" >Páprika <i class="fas fa-caret-right"></i></li>
              <li onclick="openCity(event, 'piquillo')" class="tablinks">Piquillo <i class="fas fa-caret-right"></i></li>
            </ul>
          </div>
          <div class="producto-semilla__all">
            <div id="california" class="tabcontent">
              <div class="tabcontent__title title">California</div>
              <p class="tabcontent__text">Industria del Congelado y Fresco, también lo utilizan para la Industria Conservera</p>
              <button class="accordion">Aire Libre</button>
              <div class="panel">
                <div class="producto-semilla__grid">
                  <div class="producto-semilla__data">
                    <?php $tituloSemilla = "ALCÁNTARA F1"; ?>
                    <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                    <figure class="producto-semilla__logo">
                      <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                    </figure>
                    <ul class="producto-semilla__list">
                      <li>Pimiento tipo California grande, planta compacta y vigorosa.</li>
                      <li>Follaje abundante.</li>
                      <li>Buena cobertura del fruto.</li>
                      <li>Fruto con una carne gruesa y consistente.</li>
                      <li>Tiene una longitud de 10 a 13 cm y un ancho de 9 a 10 cm.</li>
                      <li>Peso promedio de 250 a 300 gramos.</li>
                      <li>De color rojo.</li>
                      <li>Ideal para mercado en fresco, industria conservera y congelado</li>
                    </ul>
                  </div>
                  <figure class="producto-semilla__img">
                    <img src="../assets/img/semillas/alcantara_f1.jpg" alt="">
                  </figure>
                </div>
                <div class="producto-semilla__grid">
                  <div class="producto-semilla__data">
                    <?php $tituloSemilla = "JONAS F1"; ?>
                    <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                    <figure class="producto-semilla__logo">
                      <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                    </figure>
                    <ul class="producto-semilla__list">
                      <li>Pimiento tipo California para mercado fresco, industria congelado y conservera.</li>
                      <li>Planta vigorosa y muy buen cuajado.</li>
                      <li>Fruto de forma cuadrada de 3 a 4 lóculos, frutos de gran tamaño, con pared gruesa y consistente de 9 a 10 cm de largo y 8 a 9 cm de ancho.</li>
                      <li>Peso promedio 250 a 330 gramos.</li>
                      <li>Color rojo intenso en la madurez.</li>
                      <li>Uniformidad en la maduración.</li>
                    </ul>
                  </div>
                  <figure class="producto-semilla__img">
                    <img src="../assets/img/semillas/jonas_f1.jpg" alt="">
                  </figure>
                </div>
                <div class="producto-semilla__grid">
                  <div class="producto-semilla__data">
                    <?php $tituloSemilla = "TESÓN F1"; ?>
                    <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                    <figure class="producto-semilla__logo">
                      <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                    </figure>
                    <ul class="producto-semilla__list">
                      <li>Pimiento tipo California para mercado fresco, industria congelado y conservera.</li>
                      <li>Planta vigorosa y de porte semi abierto, con tallo principal muy fuerte.</li>
                      <li>Fruto de forma cuadrados con 4 lóculos o cascos, bien formados y muy consistente, pared lisa y gruesa de 9 a 10 cm de longitud y 8 a 9 cm de diámetro.</li>
                      <li>Peso promedio 225 a 270 gramos por fruto.</li>
                      <li>Color rojo intenso en la madurez.</li>
                      <li>Resistencia a PMMV (L3), TSWV y a SPOTTED.</li>
                    </ul>
                  </div>
                  <figure class="producto-semilla__img">
                    <img src="../assets/img/semillas/teson_f1.jpg" alt="">
                  </figure>
                </div>
              </div>
              <button class="accordion">Invernadero y Aire Libre</button>
              <div class="panel">
                <div class="producto-semilla__grid">
                  <div class="producto-semilla__data">
                    <?php $tituloSemilla = "URANO F1"; ?>
                    <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                    <figure class="producto-semilla__logo">
                      <img src="../assets/img/vilmorin.png" alt="">
                    </figure>
                    <ul class="producto-semilla__list">
                      <li>Buen comportamiento en siembras para Invernadero y al Aire Libre</li>
                      <li>Planta con un vigor alto y entrenudos cortos, buena cobertura foliar (protege al fruto contra el sol) y las hojas tienen tolerancia al Mildiu.</li>
                      <li>Excelente calidad del fruto, uniformidad tanto en el tamaño como en la forma.</li>
                      <li>Frutos XL y L. Alto porcentaje de frutos con 4 lóculos. De unos 9 cms de largo y ancho y 240 a 250 gramos de peso.</li>
                      <li>Fruto con pared gruesa, logra un color rojo intenso, brillante y uniforme al madurar. Alta resistencia al cracking.</li>
                      <li>Resistencia a TMV y PMMV</li>
                    </ul>
                  </div>
                  <figure class="producto-semilla__img">
                    <img src="../assets/img/semillas/urano_f1.jpg" alt="">
                  </figure>
                </div>
              </div>
            </div>
            <div id="cristal" class="tabcontent">
              <div class="tabcontent__title title">Cristal</div>
              <!-- <p class="tabcontent__text">Industria del Congelado y Fresco, también lo utilizan para la Industria Conservera</p> -->
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "CRISTAL"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Pimiento para freír y deshidratación.</li>
                    <li>Forma alargado terminado en 3 a 4 morros, de 11 a 15 cm de longitud y 4 a 5 cm de diámetro.</li>
                    <li>Peso promedio del fruto, 50 a 75 gramos por fruto en rojo , de color verde o rojo, carne fina.</li>
                    <li>Planta de vigor.</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/cristal.jpg" alt="">
                </figure>
              </div>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "CRISTAL CH"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Es como la variedad Cristal pero con fruto de carne más gruesa, paredes más finas y ápice con 3 a4 cascos o lóculos más marcados.</li>
                    <li>Se utiliza para secar en rojo (páprika) y para asar en horno (rojo) en la industria conservera.</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/cristal-ch.jpg" alt="">
                </figure>
              </div>
            </div>
            <div id="guindilla" class="tabcontent">
              <div class="tabcontent__title title">GUINDILLA</div>
              <!-- <p class="tabcontent__text">Industria del Congelado y Fresco, también lo utilizan para la Industria Conservera</p> -->
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "PEQUEÑA AMARILLA VASCA"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Pimiento tipo Guindilla. Planta de hoja pequeña. Fruto de inserción pendular de color verde amarillento antes de la madurez. 12 a 15 cm de longitud.</li>
                    <li>Forma alargada, terminado en punta y con cuello estrecho.</li>
                    <li>Contiene capsicina (picante)</li>
                    <li>Especial para encurtidos.</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/vasca.jpg" alt="">
                </figure>
              </div>
            </div>
            <div id="jalapeño" class="tabcontent">
              <div class="tabcontent__title title">JALAPEÑO</div>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "CALIBER F1"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/agristar.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Ciclo medio a largo. Picor alto. Cosechas múltiples.</li>
                    <li>Planta grande. Fruto de color verde a rojo, de tamaño mediano a grande, pared gruesa. Alto rendimiento de frutos grandes y uniformes.</li>
                    <li>Para mercado fresco y procesado.</li>
                    <li>Resistente a BLS (Bacterial Leaf Spot).</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/caliber-f1.jpg" alt="">
                </figure>
              </div>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "DA VINCI F1"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/vilmorin.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Híbrido picante.</li>
                    <li>Frutos uniformes y de excelente calidad.</li>
                    <li>Planta de buen vigor, buena cobertura foliar y alto potencial de producción.</li>
                    <li>Frutos grandes, de 7.5 a 8.0 centímetros de largo y 3.0 a 3.2 centímetros de diámetro, totalmente lisos y color verde oscuro perfectamente uniforme.</li>
                    <li>Medianamente precoz.</li>
                    <li>Alta resistencia al BLS (Bacterial Leaf Spot) 1,2,3.</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/da-vinci.jpg" alt="">
                </figure>
              </div>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "RAYO F1"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/agristar.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Ciclo medio a largo. Picante medio a alto. Cosechas múltiples.</li>
                    <li>Fruto de color verde  a rojo, de tamaño grande, pared gruesa.</li>
                    <li>Cobertura excelente. Rendimiento alto y producción muy uniforme.</li>
                    <li>Para mercado fresco y rodajas.</li>
                    <li>Resistente a BLS (Bacterial Leaf Spot).</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/rayo-f1.jpg" alt="">
                </figure>
              </div>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "RIVERA F1"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/vilmorin.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Híbrido picante con alto potencial de producción, de color verde oscuro, excelente calidad y presentación para el mercado fresco.</li>
                    <li>Planta de buen vigor, excelente cuaje bajo alta presión de bacterias, muy picante, 8.5 a 9.0 centímetros de largo y 3.0 a 3.2 centímetros de diámetro, frutos totalmente lisos y color verde oscuro perfectamente uniforme.</li>
                    <li>Medianamente precoz.</li>
                    <li>Resistencia alta al BLS (Bacterial Leaf Spot) 1,2,3.</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/rivera-f1.jpg" alt="">
                </figure>
              </div>
            </div>
            <div id="morron" class="tabcontent">
              <div class="tabcontent__title title">MORRÓN</div>
              <p class="tabcontent__text">Industria conservera y congelado</p>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "CIERZO F1"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Pimiento Morrón, para conserva.</li>
                    <li>Forma cónico acorazonado de 10 a 12 cm de largo y 7 a 9 de ancho.</li>
                    <li>Peso promedio 170 a 200 gramos por fruto.</li>
                    <li>Color rojo intenso y carne gruesa, consistente y dulce.</li>
                    <li>Porcentaje de pedúnculo y placenta es menor que en Luesia (variedad de polinización abierta tipo morrón) por lo que se consigue mejor rendimiento en planta.</li>
                    <li>Placenta vigorosa, follaje abundante que protege al fruto</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/cierzo.jpg" alt="">
                </figure>
              </div>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "CORERA F1"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Pimiento Tipo Morrón de color rojo.</li>
                    <li>Planta vigorosa de cruz alta, follaje abundante.</li>
                    <li>Fruto cónico. El fruto es algo mayor que un Cierzo F1, más puntiagudo, de mayor peso medio y rendimiento en carne, tiene un pedúnculo fino y placenta pequeña.</li>
                    <li>Tiene 10 a 12 cm de longitud y 7 a 9 cm de diámetro.</li>
                    <li>200 a 250 gramos por fruto.</li>
                    <li>Paredes lisas.</li>
                    <li>Maduración uniforme.</li>
                    <li>Es un pimiento para la industria tanto conservera como congelado, también para el mercado fresco pues tiene muy buen color y resistencia en post cosecha.</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/corera.jpg" alt="">
                </figure>
              </div>
            </div>
            <div id="padron" class="tabcontent">
              <div class="tabcontent__title title">PADRÓN</div>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "CELTA F1"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Pimiento tipo Padrón.</li>
                    <li>Sin capsicina (no picante), pero con un intenso sabor a pimiento.</li>
                    <li>Planta compacta, de entrenudos cortos y de producción precoz.</li>
                    <li>Fruto ligeramente más largo pero más estrecho que Padrón.</li>
                    <li>Color verde ligeramente más oscuro.</li>
                    <li>Termina en 3 a 4 lóculos, aunque en ocasiones también en punta.</li>
                    <li>Se adapta a cultivo en aire libre y bajo plástico.</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/celta.jpg" alt="">
                </figure>
              </div>
            </div>
            <div id="papikra" class="tabcontent">
              <div class="tabcontent__title title">PÁPRIKA</div>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "CAPRI"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Pimiento para deshidratación, entero o polvo molido para condimento.</li>
                    <li>Forma largo estrecho terminado en punta con unos 14 cm de longitud aproximadamente.</li>
                    <li>Alto contenido de materia seca y buen secado.</li>
                    <li>240 grados Asta aproximadamente.</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/capri.jpg" alt="">
                </figure>
              </div>
            </div>
            <div id="piquillo" class="tabcontent">
              <div class="tabcontent__title title">PIQUILLO </div>
              <p class="tabcontent__text">Industria conservera</p>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "ARCA F1"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Pimiento para conserva de forma puntiaguda – aplanada con unos 9 a 11 cm de largo y 6 a 7 cm de ancho.</li>
                    <li>Peso promedio 45 a 55 gramos por fruto, de color rojo intenso, con dos caras, muy largos y muy uniformes. Carne fina y ligeramente picante en condiciones de estrés.</li>
                    <li>Planta muy vigorosa, con buena cobertura y buen cuajado.</li>
                    <li>Concentración en la maduración y muy precoz y productivo.</li>
                    <li>Recomendado en zonas donde el piquillo estándar se queda pequeño.</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/arca.jpg" alt="">
                </figure>
              </div>
              <div class="producto-semilla__grid">
                <div class="producto-semilla__data">
                  <?php $tituloSemilla = "PIQUILLO"; ?>
                  <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
                  <figure class="producto-semilla__logo">
                    <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
                  </figure>
                  <ul class="producto-semilla__list">
                    <li>Pimiento para conserva de forma puntiaguda – aplanada con unos 8 a 10 cm de largo y 5 a 6 cm de ancho.</li>
                    <li>Peso promedio 35 a 45 gramos por fruto, de color rojo intenso, con dos caras, algunos de tres.</li>
                    <li>Carne fina y ligeramente picante.</li>
                  </ul>
                </div>
                <figure class="producto-semilla__img">
                  <img src="../assets/img/semillas/piquillo.jpg" alt="">
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="navegacion">
          <a class="navegacion__button-prev" href="lechuga.php"><i class="fas fa-caret-left"></i>lechuga</a>
          <a class="navegacion__button-next" href="poro.php">poro<i class="fas fa-caret-right"></i></a>
        </div>

      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>