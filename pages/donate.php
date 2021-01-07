<?php
  $sliderImages = [
      [
          'filename' => 'img1.jpeg',
          'displayText' => 'Coconuts Hong Kong',
      ], [
          'filename' => 'img2.jpeg',
          'displayText' => 'SCMP',
      ], [
          'filename' => 'img3.jpeg',
          'displayText' => 'Hong Kong Free Press',
      ], [
          'filename' => 'img4.jpeg',
          'displayText' => 'Impact HK',
      ], [
          'filename' => 'img5.jpeg',
          'displayText' => 'The Guardian',
      ], [
          'filename' => 'img6.jpeg',
          'displayText' => 'Feeding HK',
      ],
  ];
?>

<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.php/donate.scss" />
</head>

<body>
  <div class="container">
    <div class="row">
      <?php require 'includes/filters.php'; ?>
      <div class="col-md-9">
        <section class="content">
          <div id="body">
            <?php require 'includes/404construction.php'; ?>
            <!-- Slider -->
            <div class="swiper-container" style="display: none;">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <?php foreach ($sliderImages as $sliderImage) { ?>
                <div class="swiper-slide">
                  <div class="img-div">
                    <img src="./images/<?php echo $sliderImage['filename']; ?>" />
                    <div class="slide-text">Source: <?php echo $sliderImage['displayText']; ?>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>

              <!-- If we need scrollbar -->
              <div class="swiper-scrollbar"></div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>


  <script type="text/javascript">
  <?php include 'js/donate.js'; ?>
  </script>

</body>

</html>