<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.php/header.scss" />
</head>

<body>
  <div class="header container">
    <div class="row header__container">
      
      <div class="col-md-4 header__container header__logo">
        <img class="header__logo--img" src="../images/WCT logo.gif" alt="WishComesTrue Logo">
        <!-- logo -->
      </div>
      <div class="col-md-8 header__container ">
        <div class="row header__container d-flex justify-content-end">
          <div class="col-md-8 header__login d-flex align-self-center">
            <button class="header__login--button">
              Please Login to Submit a Wish
            </button>
            <div class="header__login--icon">
              <i class="fas fa-user"></i>
            </div>
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
    
      <div class="col-md-12 header__container--line"></div>
    </div>
  </div>
</body>

</html>