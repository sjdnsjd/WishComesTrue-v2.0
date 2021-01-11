<!-- TODO: Manun redo -->

<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.php/home.scss">
</head>

<body>
  <!-- other body content -->
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <!-- large img gif -->
        <img class="home__img" src="images/WCT banner.gif" alt="">
      </div>
    </div>
   <img src="../images/Home/temp.png" width=100% height=10px />


    <div class="row align-items-center">
      <div class="col">
        <img src="../images/Home/OUR VISION.png" width="500" height="270" />
        </div>
        <div class="col-5">
        <img src="../images/Home/Home2.png" width="482" height="243" />
        </div>
     </div>
     
     <div class="row align-items-center">
     	<div class="col">
        <h4>Our vision for this project is to create a website, where the wishes of <br>minority groups are published to
          the public allowing volunteers to <br>choose which ones they want to contribute to.</h4>
        <pre><h5>Examples of these include helping children who wish for better grades by tutoring.	   <img src="../images/Home/Home_image_2.png" alt=""></h5></pre>
      </div>
    </div>
   <img src="../images/Home/temp.png" width=100% height=10px />

    <div class="row align-items-center">
      <div class="col">
        <h1>MEET THE FOUNDERS</h1>
        <img src="images/arnav.jpg" width="250" height="280" /><img src="images/aditi.jpeg" width="250" height="280" />
      </div>
    </div>


    <button>
      <a class="
      <?php if (strpos($_SERVER['REQUEST_URI'], 'about')) { ?>
        active
      <?php } ?>
      " href="?page=about" id="about">
        Meet the rest of the team
      </a>
    </button>
</body>

</html>