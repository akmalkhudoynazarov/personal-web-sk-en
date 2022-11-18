<?php include "lang.php" ?>
<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $lang['title']; ?></title>
  <meta name="description" content="<?php echo $lang['meta-description']; ?>">
  <meta name="keywords" content="<?php echo $lang['meta-keywords']; ?>">
  <link rel="shortcut icon" type="image/ico" href="photos/favicon.ico">
  <link rel="stylesheet" href="style.css">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- Reveal on scroll -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Form validation -->
  <script type="text/javascript" src="scripts/form.js"></script>
</head>

<body>
  <!-- Header and hero -->
  <section id="header">
    <div class="navbar">
      <a href="index.php" class="logo"><img src="photos/logo.png" alt=""></a>
      <ul class="nav">
        <li class="nav-link"><a href="#header"><?php echo $lang['home']; ?></a></li>
        <li class="nav-link"><a href="#benefits"><?php echo $lang['benefits']; ?></a></li>
        <li class="nav-link"><a href="#services"><?php echo $lang['services']; ?></a></li>
        <li class="nav-link"><a href="#portfolio"><?php echo $lang['portfolio']; ?></a></li>
        <li class="nav-link"><a href="#contact"><?php echo $lang['contact']; ?></a></li>
        <li class="language"><a href="javascript:void(0)" id="language"><i class="fa-solid fa-globe"></i></a>
          <div class="dropdown">
            <a rel="alternate" hreflang="sk" href="index.php?lang=sk">SK</a>
            <a rel="alternate" hreflang="en" href="index.php?lang=en">EN</a>
          </div>
        </li>
      </ul>
      <div class="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
    </div>
    <div class="flex-container hero">
      <div class="hero-col" data-aos="fade-right" data-aos-duration="2000">
        <h1><?php echo $lang['herotext']; ?></h1>
        <a href="#services" class="hero-btn"><?php echo $lang['herobtn']; ?></a>
      </div>
      <div class="hero-col" data-aos="fade-left" data-aos-duration="2000"><img src="photos/hero-img.png" alt=""></div>
    </div>
  </section>

  <!-- Social proof -->
  <section id="social-proof">
    <div class="flex-container counter">
      <div>
        <div class="counter-col1">
          <h2>47+</h2>
        </div>
        <p><?php echo $lang['social1']; ?></p>
      </div>
      <div>
        <div class="counter-col2">
          <h2>99%</h2>
        </div>
        <p><?php echo $lang['social2']; ?></p>
      </div>
      <div>
        <div class="counter-col3">
          <h2>85%+</h2>
        </div>
        <p><?php echo $lang['social3']; ?></p>
      </div>
      <div>
        <div class="counter-col4">
          <h2>160K+</h2>
        </div>
        <p><?php echo $lang['social4']; ?></p>
      </div>
    </div>
  </section>

  <!-- Benefits -->
  <section id="benefits">
    <h2 data-aos="fade-up" data-aos-duration="1000"><?php echo $lang['benefitstitle']; ?></h2>
    <div class="flex-container benefits-row">
      <div class="benefits-col" data-aos="fade-up" data-aos-duration="1000">
        <i class="fa-solid fa-hand-holding-dollar"></i>
        <h4><?php echo $lang['benefits1']; ?></h4>
        <p><?php echo $lang['benefits2']; ?></p>
      </div>
      <div class="benefits-col" data-aos="fade-up" data-aos-duration="1000">
        <i class="fa-brands fa-joomla"></i>
        <h4><?php echo $lang['benefits3']; ?></h4>
        <p><?php echo $lang['benefits4']; ?></p>
      </div>
      <div class="benefits-col" data-aos="fade-up" data-aos-duration="1000">
        <i class="fa-solid fa-person-chalkboard"></i>
        <h4><?php echo $lang['benefits5']; ?></h4>
        <p><?php echo $lang['benefits6']; ?></p>
      </div>
      <div class="benefits-col" data-aos="fade-up" data-aos-duration="1000">
        <i class="fa-solid fa-plug"></i>
        <h4><?php echo $lang['benefits7']; ?></h4>
        <p><?php echo $lang['benefits8']; ?></p>
      </div>
      <div class="benefits-col" data-aos="fade-up" data-aos-duration="1000">
        <i class="fa-solid fa-database"></i>
        <h4><?php echo $lang['benefits9']; ?></h4>
        <p><?php echo $lang['benefits10']; ?></p>
      </div>
      <div class="benefits-col" data-aos="fade-up" data-aos-duration="1000">
        <i class="fa-regular fa-circle-question"></i>
        <h4><?php echo $lang['benefits11']; ?></h4>
        <p><?php echo $lang['benefits12']; ?></p>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services">
    <h2 data-aos="fade-up" data-aos-duration="1000"><?php echo $lang['servicestitle']; ?></h2>
    <div class="flex-container services-row">
      <div class="services-col" data-aos="fade-right" data-aos-duration="3000">
        <h3>Simple Web</h3>
        <p><?php echo $lang['simple1']; ?></p>
        <h5><?php echo $lang['simple2']; ?></h5>
        <div><i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['simple3']; ?></strong>
        </div>
        <div><i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['simple4']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['simple5']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['simple6']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['simple7']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['simple8']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['simple9']; ?></strong>
        </div>
        <h3>49 €</h3>
        <br>
        <a href="#contact" class="hero-btn"><?php echo $lang['interested']; ?></a>
      </div>
      <div class="services-col" data-aos="fade-up" data-aos-duration="2000">
        <h3>Premium Web</h3>
        <p><?php echo $lang['premium1']; ?></p>
        <h5><?php echo $lang['premium2']; ?></h5>
        <div><i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['premium3']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['premium4']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['premium5']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['premium6']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['premium7']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['premium8']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['premium9']; ?></strong>
        </div>
        <h3>99 €</h3>
        <br>
        <a href="#contact" class="hero-btn"><?php echo $lang['interested']; ?></a>
      </div>
      <div class="services-col" data-aos="fade-left" data-aos-duration="3000">
        <h3>E-Shop</h3>
        <p><?php echo $lang['eshop1']; ?></p>
        <h5><?php echo $lang['eshop2']; ?></h5>
        <div><i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['eshop3']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['eshop4']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['eshop5']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['eshop6']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['eshop7']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['eshop8']; ?></strong>
        </div>
        <div>
          <i class="fa-solid fa-circle-chevron-right"></i>
          <strong><?php echo $lang['eshop9']; ?></strong>
        </div>
        <h3>199 €</h3>
        <br>
        <a href="#contact" class="hero-btn"><?php echo $lang['interested']; ?></a>
      </div>
    </div>
  </section>

  <!-- Additional services -->

  <section id="extra-services" data-aos="fade-up" data-aos-duration="1000">
    <h3><?php echo $lang['addser1']; ?></h3>
    <div class="flex-container extra-services-row">
      <div class="extra-services-col">
        <div class="extra-services-col-content">
          <h6><?php echo $lang['addser2']; ?></h6>
          <span></span>
          <h6>20 € / <?php echo $lang['hour']; ?></h6>
        </div>
        <p><?php echo $lang['addser3']; ?></p>
        <div class="extra-services-col-content">
          <h6><?php echo $lang['addser4']; ?></h6>
          <span></span>
          <h6>25 € / <?php echo $lang['month']; ?></h6>
        </div>
        <p><?php echo $lang['addser5']; ?></p>
      </div>
      <div class="extra-services-col">
        <div class="extra-services-col-content">
          <h6>Google Ads</h6>
          <span></span>
          <h6>100 € / <?php echo $lang['month']; ?></h6>

        </div>
        <p><?php echo $lang['addser6']; ?></p>
        <div class="extra-services-col-content">
          <h6>Facebook Ads</h6>
          <span></span>
          <h6>100 € / <?php echo $lang['month']; ?></h6>

        </div>
        <p><?php echo $lang['addser7']; ?></p>
      </div>
    </div>
    <i>!!! <?php echo $lang['addser8']; ?> !!!</i>
  </section>

  <!-- How does it work? -->
  <section id="how">
    <h2 data-aos="fade-up" data-aos-duration="1000"><?php echo $lang['how1']; ?></h2>
    <div class="flex-container how-row">
      <div class="how-col" data-aos="fade-up" data-aos-duration="1000">
        <i class="fa-solid fa-download"></i>
        <h4><?php echo $lang['how2']; ?></h4>
        <p><?php echo $lang['how3']; ?></p>
      </div>
      <div class="how-col" data-aos="fade-up" data-aos-duration="1500">
        <i class="fa-solid fa-comments"></i>
        <h4><?php echo $lang['how4']; ?></h4>
        <p><?php echo $lang['how5']; ?></p>
      </div>
      <div class="how-col" data-aos="fade-up" data-aos-duration="2000">
        <i class="fa-solid fa-play"></i>
        <h4><?php echo $lang['how6']; ?></h4>
        <p><?php echo $lang['how7']; ?></p>
      </div>
      <div class="how-col" data-aos="fade-up" data-aos-duration="2500">
        <i class="fa-solid fa-upload"></i>
        <h4><?php echo $lang['how8']; ?></h4>
        <p><?php echo $lang['how9']; ?></p>
      </div>
    </div>
  </section>

  <!-- Support -->
  <section id="support">
    <div class="flex-container support-row">
      <div class="support-col" data-aos="fade-right" data-aos-duration="1000">
        <img src="photos/support.png" alt="">
        <p><?php echo $lang['support1']; ?></p>
        <p><?php echo $lang['support2']; ?></p>
      </div>
      <div class="support-col" data-aos="fade-left" data-aos-duration="1000">
        <h2><?php echo $lang['support3']; ?></h2>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact">
    <div class="flex-container contact-row">
      <div class="contact-col" data-aos="fade-right" data-aos-duration="1000">
        <h2><?php echo $lang['contact1']; ?></h2>
      </div>
      <div class="contact-col" data-aos="fade-left" data-aos-duration="1000">
        <form action="contact.php" method="post" autocomplete="off" novalidate>
          <input id="name" type="text" name="name" placeholder="<?php echo $lang['contact2']; ?>">
          <input id="email" type="email" name="email" placeholder="E-mail">
          <select id="service" name="service">
            <option value=""><?php echo $lang['contact3']; ?></option>
            <option value="Simple Web">Simple Web</option>
            <option value="Premium Web">Premium Web</option>
            <option value="EShop">E-Shop</option>
            <option value="Individual Work"><?php echo $lang['contact4']; ?></option>
            <option value="Web Administration"><?php echo $lang['contact5']; ?></option>
            <option value="Google Ads">Google Ads</option>
            <option value="Facebook Ads">Facebook Ads</option>
            <option value="Question"><?php echo $lang['contact6']; ?></option>
          </select>
          <textarea name="message" id="message" cols="30" rows="5" placeholder="<?php echo $lang['contact7']; ?>"></textarea>
          <input id="submit" type="submit" name="submit" value="<?php echo $lang['contact8']; ?>">
          <br>
          <p class="form-message"></p>
        </form>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section id="portfolio">
    <h2 data-aos="fade-up" data-aos-duration="1000"><?php echo $lang['examples']; ?></h2>
    <div id="wrapper" data-aos="fade-up" data-aos-duration="1000">
      <div id="carousel">
        <div id="content">
          <div class="item">
            <img src="photos/bepultalimuz.png" />
            <p>University Catalogue - Wordpress</p>
            <a href="https://bepultalim.uz/">bepultalim.uz</a>
          </div>
          <div class="item">
            <img src="photos/resumecom.png" />
            <p>CV Builder - Coded From Scratch</p>
            <a href="https://resume007.com/">resume007.com</a>
          </div>
          <div class="item">
            <img src="photos/ilovesayohatuz.png" />
            <p>Travel Blog - Wordpress</p>
            <a href="https://ilovesayohat.uz/">ilovesayohat.uz</a>
          </div>
        </div>
      </div>
      <button id="prev">
        <i class="fa-solid fa-circle-left"></i>
      </button>
      <button id="next">
        <i class="fa-solid fa-circle-right"></i>
      </button>
    </div>
    </div>
  </section>

  <!-- Footer -->
  <section id="footer">
    <div class="footer-row">
      <p>digitalweb.sk | <?php echo $lang['rights']; ?> &copy; <?php echo date("Y"); ?> | DIC: 1123196866</p>
    </div>
  </section>
  <script type="text/javascript" src="scripts/navbar.js"></script>
  <script type="text/javascript" src="scripts/countup.js"></script>
  <script type="text/javascript" src="scripts/carousel.js"></script>
  <!-- Reveal on scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="scripts/revealonscroll.js"></script>

  <!-- Language switcher -->
  <script src="scripts/language.js"></script>
</body>

</html>