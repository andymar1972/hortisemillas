<?php $titulo = "Esparrago"; ?>

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
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "JALEO F1"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Planta de crecimiento rápido.</li>
              <li>Turiones de calibre grueso con puntas cerradas, uniforme y de buena calidad.</li>
              <li>Cosecha muy precoz, activo a bajas temperaturas.</li>
              <li>Para cosechas de verde y blanco (Doble Propósito).</li>
              <li>Amplia adaptación.
                Precoz.
                Tolerancia a Stemphyllium.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/jaleo.jpg" alt="">
          </figure>
        </div>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "SEQUOIA F1 (ex NJ 1113)"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>100% plantas macho</li>
              <li>Plantas altas, abiertas, de apertura alta, tolerantes a enfermedades.</li>
              <li>Tienen buena resistencia a problemas foliares como también tolerancia a Fusarium.</li>
              <li>Buen vigor.</li>
              <li>Turiones cilíndricos, rectos, puntas finas y de calibre grueso.</li>
              <li>Potencial muy alto del rendimiento.</li>
              <li>Utilizado tanto para verde como para blanco.</li>
              <li>Buena adaptación a diferentes climas y suelos.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/sequoia.jpg" alt="">
          </figure>
        </div>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "UC 115 F1 (DE PAOLI)"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/eurosemillas.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Creado por la Universidad de California en el 2005.</li>
              <li>Es un Espárrago fresco de alto rendimiento.</li>
              <li>Hibrido diploide, productivo y dioico, resulta apropiado para la producción de espárrago de gran calidad en zonas productivas en campañas largas y calurosas y con inviernos no excesivamente fríos. Los ápices permanecen muy unidos hasta que el turión alcanza toda su longitud, ofreciendo una gran calidad.</li>
              <li>Produce calidad y cantidad durante muchos años.</li>
              <li>Produce una mayor proporción de espárrago comercializable con brácteas muy juntas y un índice sensiblemente superior de producción comercializable a largo plazo.</li>
              <li>Tolerante a Phytophthora megasperma y su nivel de tolerancia a Fusarium es similar al de UC 157 F1.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/uc115.jpg" alt="">
          </figure>
        </div>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "ESPÁRRAGO ESPADA F1"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/eurosemillas.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Espada es un híbrido muy adecuado para la producción temprana de espárragos frescos en climas cálidos.</li>
              <li>Las puntas permanecen firmemente cerradas lo que resulta en un alto nivel de calidad.</li>
              <li>Es capaz de producir altos rendimientos de espárragos de alta calidad durante muchos años.</li>
              <li>Es una variedad muy productiva, muy adecuada para las cosechas de espárrago verdes frescos de alta calidad en zonas de cultivo con temporadas de cultivos largos y muy calidas y con inviernos no demasiados frios.</li>
              <li>El díametro promedio de los turiones de Espada es mayor que UC 115 F1, y casi tan grande como Atlas y Grande.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/ult-esparrago.jpg" alt="">
          </figure>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>