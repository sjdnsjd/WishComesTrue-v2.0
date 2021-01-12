<?php
$slider_images = array(
	array(
		'filename'    => 'img1.jpeg',
		'displayText' => 'Coconuts Hong Kong',
	),
	array(
		'filename'    => 'img2.jpeg',
		'displayText' => 'SCMP',
	),
	array(
		'filename'    => 'img3.jpeg',
		'displayText' => 'Hong Kong Free Press',
	),
	array(
		'filename'    => 'img4.jpeg',
		'displayText' => 'Impact HK',
	),
	array(
		'filename'    => 'img5.jpeg',
		'displayText' => 'The Guardian',
	),
	array(
		'filename'    => 'img6.jpeg',
		'displayText' => 'Feeding HK',
	),
);
?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.php/donate.scss" />
</head>

<body>
	<div class="container">
		<div class="row align-items-center">
			<?php require 'includes/filters.php'; ?>
			<div class="col-md-9">
				<?php require 'includes/404construction.php'; ?>
				<!-- TODO: Fix carousel -->
				<!-- Slider -->
				<div class="swiper-container" style="display: none;">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<?php foreach ( $slider_images as $slider_image ) { ?>
						<div class="swiper-slide">
							<div class="img-div">
								<img src="images/donate_carousel/<?php echo $slider_image['filename']; ?>" />
								<div class="slide-text">Source: <?php echo $slider_image['displayText']; ?>
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
		</div>
	</div>


	<script type="text/javascript">
	<?php require 'js/donate.js'; ?>
	</script>

</body>

</html>