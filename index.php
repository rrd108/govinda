<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title>Govinda Éttermek</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Quicksand:wght@300;700&family=Roboto:wght@300&display=swap" rel="stylesheet">
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
      <li><a href="ettermek">Éttermek</a></li>
      <li><a href="about">Rólunk</a></li>
      <li><a href="karma-free">KarmaFree</a></li>
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
    <?php if (empty($_GET)) : ?>
      <section id="special">
        <h1>Különlegességek</h1>
        <h2>A vegetáriánus konyha csodás sokszínűsége</h2>
        <div>
          <div>
            <img src="img/pakora.jpg" alt="Pakora">
            <h3>Pakora</h3>
            <p>Bundában sült zöldségek <a href="pakora" class="button">Tovább »</a></p>
          </div>
          <div>
            <img src="img/puspanna.jpg" alt="Puspanna rizs">
            <h3>Puspanna rizs</h3>
            <p>Egy köret ami főétel is egyben <a href="puspanna" class="button">Tovább »</a></p>
          </div>
          <div>
            <img src="img/malpura.jpg" alt="Malpura">
            <h3>Malpura</h3>
            <p>Joghurtba áztatott tészta labdák <a href="malpura" class="button">Tovább »</a></p>
          </div>
        </div>
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
  <aside class="c"><img src="img/govinda_logo.png" alt="logo"></aside>
  <aside>
      <dl>
          <dt>Govinda Vegetáriánus Étterem és Salátabár</dt>
          <dd>1051 Budapest, Vigyázó Ferenc u. 4, <a href="https://www.facebook.com/govindabudapest
">https://www.facebook.com/govindabudapest</a></dd>

          <dt>Govinda Vega Sarok</dt>
          <dd>1053 Budapest, Papnövelde u. 1, <a href="https://www.facebook.com/vegasarok">https://www.facebook.com/vegasarok</a></dd>
          <dt>Govinda Csillaghegy</dt>
          <dd>1039 Budapest, Lehel U. 15-17, <a href="https://www.facebook.com/govindacsillaghegy
">https://www.facebook.com/govindacsillaghegy</a></dd>

          <dt>Krisna-völgy Govinda Étterem</dt>
          <dd>8699 Somogyvámos Gauranga tér 1, <a href="http://krisnavolgy.hu/etterem
">http://krisnavolgy.hu/etterem</a></dd>

          <dt>Eger Govinda Étterem</dt>
          <dd>3300 Eger Tűzoltó tér 5, <a href="http://govindaeger.hu
">http://govindaeger.hu</a></dd>

          <dt>Govinda Debrecen</dt>
          <dd>4028 Debrecen Magyari u. 2, <a href="http://govindadebrecen.hu
">http://govindadebrecen.hu</a></dd>

          <dt><a href="ettermek">Éttermek Európában</a></dt>
      </dl>

  </aside>
  <footer>
      <div>
      <h3>Krisna.hu hírlevél feliratkozás</h3>
      <!-- Begin MailChimp Signup Form -->
          <form action="//krisna.us7.list-manage.com/subscribe/post?u=02a57b758ba9a1c47589e529b&amp;id=a6fbd1031f"
                method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                target="_blank" novalidate="novalidate">
              <label for="mce-EMAIL">E-mail <span class="asterisk">*</span></label>
              <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" aria-required="true">
              <label for="mce-FNAME">Név <span class="asterisk">*</span></label>
              <input type="text" value="" name="FNAME" class="required" id="mce-FNAME" aria-required="true">
              <strong><a href="http://krisna.hu/kapcsolat/internetes-adatvedelmi-iranyelvek/"
                          style="text-decoration:none;" target="_blank" ;="">Adatvédelmi nyilatkozat »</a> <span
                          class="asterisk">*</span></strong>
              <input type="radio" value="Elfogadom" name="MMERGE2" id="mce-MMERGE2-0">
              <label for="mce-MMERGE2-0">Elfogadom</label>
              <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;">
                  <input type="text" name="b_02a57b758ba9a1c47589e529b_a6fbd1031f" tabindex="-1" value="">
              </div>
              <div class="indicates-required"><span class="asterisk">*</span> a mezők kitöltése szükséges</div>
              <div class="clear">
                  <input type="submit" value="Feliratkozás" name="subscribe" id="mc-embedded-subscribe"
                          class="button2">
              </div>
      </form>

      <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
      <script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='MMERGE2';ftypes[2]='radio'; /*
      * Translated default messages for the $ validation plugin.
      * Locale: HU
      */
              $.extend($.validator.messages, {
                  required: "Kötelező megadni.",
                  maxlength: $.validator.format("Legfeljebb {0} karakter hosszú legyen."),
                  minlength: $.validator.format("Legalább {0} karakter hosszú legyen."),
                  rangelength: $.validator.format("Legalább {0} és legfeljebb {1} karakter hosszú legyen."),
                  email: "Érvényes e-mail címnek kell lennie.",
                  url: "Érvényes URL-nek kell lennie.",
                  date: "Dátumnak kell lennie.",
                  number: "Számnak kell lennie.",
                  digits: "Csak számjegyek lehetnek.",
                  equalTo: "Meg kell egyeznie a két értéknek.",
                  range: $.validator.format("{0} és {1} közé kell esnie."),
                  max: $.validator.format("Nem lehet nagyobb, mint {0}."),
                  min: $.validator.format("Nem lehet kisebb, mint {0}."),
                  creditcard: "Érvényes hitelkártyaszámnak kell lennie."
              });}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->
      </div>
      <div>
          <h3>Linkek</h3>
          <ul>
              <li><a href="https://bolt.krisnavolgy.hu/kereses?tag=szak%C3%A1csk%C3%B6nyv">Szakácskönyvek</a></li>
          </ul>
      </div>

  </footer>
</body>

</html>
