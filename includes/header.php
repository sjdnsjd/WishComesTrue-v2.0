<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.php/header.scss" />
</head>

<body>
  <div class="header">
    <div class="row header__container" style="height: 100%;">

      <div class="col-md-4 header__container header__logo">
        <a class="
          <?php if (strpos($_SERVER['REQUEST_URI'], 'home')) { ?>
            active 
          <?php } ?>" href="?page=home" id="home">
          <img class="header__logo--img" src="../images/WCT logo.gif" alt="WishComesTrue Logo">
        </a>

        <!-- logo -->
      </div>
      <div class="col-md-8 header__container ">
        <div class="row header__container d-flex justify-content-end">
          <div class="col-md-8 header__login d-flex align-self-center">
            <button class="header__login--button">
              Please Login to Submit a Wish
            </button>
            <!-- <div class="header__login--icon">
              <i class="fas fa-user"></i>
            </div> -->
            <?php
              require 'google_auth/auth.php';
            ?>
          </div>
          <div class="col-md-12 align-self-end">
            <!-- display navbar -->
            <!-- x -->
            <?php
              require 'navbar.php';
            ?>
          </div>
        </div>
      </div>
      <hr class="col-md-12 header__container--line" />
    </div>

  </div>
</body>

</html>