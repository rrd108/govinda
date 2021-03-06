<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title>Govinda Éttermek</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Quicksand:wght@300;700&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/krisna-menu.min.css">
  <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1" />
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <meta name="theme-color" content="#fff">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2231644-38"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-2231644-38');
  </script>
</head>

<body>
  <?php require './krisna-menu.php'; ?>
  <nav id="govinda-menu">
    <ul>
      <li><a href="ettermek"><i class="fas fa-utensils"></i> Éttermek</a></li>
      <li><a href="about"><i class="fas fa-people-carry"></i> Rólunk</a></li>
      <li><a href="karma-free"><i class="fas fa-globe"></i> KarmaFree</a></li>
    </ul>
    <ul>
      <li>
        <a href="https://www.facebook.com/krisnahun/"><img src="img/facebook-3-32.png"></a>
      </li>
    </ul>
  </nav>
  <main>
    <section id="slider">
      <div>
        <a href="index.php" title="Főoldal"><img src="img/govinda_logo.png" id="logo"></a>
        <h2>A legfinomabb választás</h2>
        <a href="about" class="button">Tovább »</a>
      </div>
    </section>
    <?php if (empty($_GET['page'])) : ?>
      <section id="restaurants">
        <h1>Éttermek</h1>
        <h2>Magyorországi éttermeink elérhetősége</h2>

        <div>
          <div class="restaurant">
            <h3>Govinda Vigyázó</h3>
            <div>
              <h4>Vegetáriánus Étterem és Salátabár</h4>
              <div class="round-image">
                <img loading="lazy" src="./img/vigyazo.jpg" alt="Govinda Vigyázó">
              </div>
              <p>
                <i class="fas fa-map-marker-alt"></i> 1051 Budapest, Vigyázó Ferenc u. 4
              </p>
              <p>
                <i class="fas fa-phone-alt"></i> +36 (1) 797 9373
              </p>
              <p>
                <a href="https://www.facebook.com/govindabudapest" class="web"><i class="fab fa-facebook-f"></i></a>
              </p>
            </div>
          </div>

          <div class="restaurant">
            <h3>Govinda Vega Sarok</h3>
            <div>
              <h4>Vegetáriánus Étterem és Salátabár</h4>
              <div class="round-image">
                <img loading="lazy" src="./img/vegasarok.jpg" alt="Govinda Vega Sarok">
              </div>
              <p>
                <i class="fas fa-map-marker-alt"></i> 1053 Budapest, Papnövelde u. 1
              </p>
              <p>
                <i class="fas fa-phone-alt"></i> +36 (70) 255 2195
              </p>
              <p>
                <a href="https://www.facebook.com/vegasarok" class="web"><i class="fab fa-facebook-f"></i></a>
              </p>
            </div>
          </div>

          <div class="restaurant">
            <h3>Govinda Csillaghegy</h3>
            <div>
              <h4>Vegán Étterem</h4>
              <div class="round-image">
                <img loading="lazy" src="./img/csillaghegy.jpg" alt="Govinda Csillaghegy">
              </div>
              <p>
                <i class="fas fa-map-marker-alt"></i> 1039 Budapest, Lehel u. 15-17
              </p>
              <p>
                <i class="fas fa-phone-alt"></i> +36 (30) 398 9610
              </p>
              <p>
                <a href="https://www.facebook.com/govindacsillaghegy" class="web"><i class="fab fa-facebook-f"></i></a>
              </p>
            </div>
          </div>

          <div class="restaurant">
            <h3>Krisna-völgy Govinda Étterem</h3>
            <div>
              <h4>Vegán Étterem</h4>
              <div class="round-image">
                <img loading="lazy" src="./img/krisnavolgy.jpg" alt="Krisna-völgy Govinda Étterem">
              </div>
              <p>
                <i class="fas fa-map-marker-alt"></i> 8699 Somogyvámos Gauranga tér 1
              </p>
              <p>
                <i class="fas fa-phone-alt"></i> +36 (30) 436 3900
              </p>
              <p class="flex">
                <a href="https://krisnavolgy.hu/etterem" class="web"><i class="fas fa-hand-point-up"></i></a>
                <a href="https://facebook.com/krisnavolgy" class="web"><i class="fab fa-facebook-f"></i></a>
              </p>
            </div>
          </div>

          <div class="restaurant">
            <h3>Eger Govinda Étterem</h3>
            <div>
              <h4>Vegetáriánus Étterem</h4>
              <div class="round-image">
                <img loading="lazy" src="./img/eger.jpg" alt="Eger Govinda Étterem">
              </div>
              <p>
                <i class="fas fa-map-marker-alt"></i> 3300 Eger Tűzoltó tér 5
              </p>
              <p>
                <i class="fas fa-phone-alt"></i> +36 (36) 313 761
              </p>
              <p class="flex">
                <a href="http://govindaeger.hu" class="web"><i class="fas fa-hand-point-up"></i></a>
                <a href=https://www.facebook.com/egrigovindaetterem" class="web"><i class="fab fa-facebook-f"></i></a>
              </p>
            </div>
          </div>

          <div class="restaurant">
            <h3>Debrecen Govinda Étterem</h3>
            <div>
              <h4>Vegetáriánus Étterem</h4>
              <div class="round-image">
                <img loading="lazy" src="./img/debrecen.jpg" alt="Debrecen Govinda Étterem">
              </div>
              <p>
                <i class="fas fa-map-marker-alt"></i> 4028 Debrecen Magyari u. 2
              </p>
              <p>
                <i class="fas fa-phone-alt"></i> +36 (30) 372 9959
              </p>
              <p class="flex">
                <a href="http://govindadebrecen.hu" class="web"><i class="fas fa-hand-point-up"></i></a>
                <a href=https://www.facebook.com/Govinda-%C3%89tterem-%C3%A9s-Kultur%C3%A1lis-K%C3%B6zpont-Debrecen-175108915857986/" class="web"><i class="fab fa-facebook-f"></i></a>
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id="special">
        <h1>Különlegességek</h1>
        <h2>A vegetáriánus konyha csodás sokszínűsége</h2>
        <div id="recepies"></div>
      </section>
    <?php else : ?>
    <article>
      <?php
        //avoid directory traversal
        $page = str_replace('.', '', $_GET['page']);
        $page = str_replace('/', '', $page);
        include './' . 'o-' . $page . '.php';
      ?>
    </article>
    <?php endif; ?>
  </main>

  <?php require "./footer.php"; ?>

  <?php if (empty($_GET['page'])) : ?>
    <script src="./js/recepies.min.js"></script>
  <?php endif; ?>
</body>
</html>
