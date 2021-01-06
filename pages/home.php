<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.php/home.scss">
</head>

<body>
  <div >
    <!-- large img gif -->
    <img class="home__img" src="../images/WCT banner.gif" alt="">
  </div>
  <h1>Kanav's part </h1>
  <!-- other body content -->
  
  <button><a class="<?php
            if (strpos($_SERVER['REQUEST_URI'], 'about')) {
                ?>
                active <?php
            } ?>" href="?page=about" id="about">Meet the rest of the team
        </a></button>
</body>

</html>