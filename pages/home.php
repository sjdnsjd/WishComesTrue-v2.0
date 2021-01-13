<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.php/home.scss">
    <style>
	.center{
		text-align: center;
	}
	</style>
</head>

<body>
	<!-- other body content -->
	<div class="row align-items-center">
		<div class="col">
			<!-- large img gif -->
			<img class="home__img" src="images/WCT banner.gif" alt="">
		</div>
		<hr class="col-md-12 container__line" />
	</div>
	<div class="row align-items-center">
		<div class="col-md-7 col-10" style="min-height: 16vw;">
			<div class="subheading">
				<div class="subheading__text">Our Vision</div>
				<img class="subheading__img" alt="Pencil"
					src="https://static.wixstatic.com/media/2d61d965a8fd4e8da44d2a72e0b7ee86.png/v1/fill/w_324,h_324,al_c,q_85,usm_0.66_1.00_0.01/Pencil.webp" />
			</div>
		</div>
		<div class="col-md-5 col-9">
			<div class="subheading__girl" title="">
				<img alt="Happy Indian Girl" class="subheading__girl--img"
					src="https://static.wixstatic.com/media/5cc7c17262bb44089076051c4a9003a5.jpg/v1/fill/w_514,h_280,al_c,q_80,usm_0.66_1.00_0.01/Happy%20Indian%20Girl.webp" />
			</div>
		</div>
	</div>

	<div class="row align-items-center paragraph justify-content-end">
		<div class="col-lg-9 col-md-7 ">
			<p class="paragraph__first">
				Our vision for this project is to create a website, where the wishes of minority groups are published to
				the public allowing volunteers to choose which ones they want to contribute to.
			</p>
			<p class="paragraph__second">
				<br />
				Examples of these include helping children who wish for better grades by tutoring.
			</p>
		</div>
		<div class="col-lg-3 col-md-5 ms-auto">
			<img src="images/Home/Home_image_2.png" alt="">
		</div>
		<hr class="col-md-12 container__line" />
	</div>

	<div class="row align-items-center justify-content-center">
		<div class="col-md-12">
			<h1 style="text-align:center;">MEET THE FOUNDERS</h1>
		</div>
		<div class="col-md-3">
			<img src="images/arnav2.jpg" width="280" height="280"/>
		</div>
		<div class="col-md-3">
			<img src="images/Aditi2.jpg" width="280" height="280"/>
		</div>
		<div class="col-md-12">
			<button>
				<a class="<?php if ( strpos( $_SERVER['REQUEST_URI'], 'about' ) ) {
						?>active<?php } ?>" href="?page=about" id="about">
					Meet the rest of the team
				</a>
			</button>
		</div>
	</div>
</body>

</html>
