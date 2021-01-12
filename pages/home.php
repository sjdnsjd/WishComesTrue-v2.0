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
		<img src="images/Home/temp.png" width=100% height=10px />


		<div class="row align-items-center">
			<div class="col-md-7">
				<div class="subheading">
					<div class="subheading__text">Our Vision</div>
					<img class="subheading__img" alt="Pencil"
						src="https://static.wixstatic.com/media/2d61d965a8fd4e8da44d2a72e0b7ee86.png/v1/fill/w_324,h_324,al_c,q_85,usm_0.66_1.00_0.01/Pencil.webp" />
				</div>
			</div>
			<div class="col-5">
				<div class="subheading__girl" title="">
					<div data-testid="linkElement" class="subheading__girl--container">
						<img alt="Happy Indian Girl" class="subheading__girl--img"
							src="https://static.wixstatic.com/media/5cc7c17262bb44089076051c4a9003a5.jpg/v1/fill/w_514,h_280,al_c,q_80,usm_0.66_1.00_0.01/Happy%20Indian%20Girl.webp" />

					</div>
				</div>
				<!-- <img src="images/Home/Home2.png" width="482" height="243" /> -->
			</div>
		</div>

		<div class="row align-items-center">
			<div class="col-md-10">
				<h4>
					Our vision for this project is to create a website, where the wishes of <br>minority groups are published to
					the public allowing volunteers to <br>choose which ones they want to contribute to.
				</h4>
			</div>
			<div class="col-md-12 row">
				<div class="col-md-10">
					<h5>
						Examples of these include helping children who wish for better grades by tutoring.
					</h5>
				</div>
				<div class="col-md-2">
					<img src="images/Home/Home_image_2.png" alt="">
				</div>
			</div>
		</div>
		<img src="images/Home/temp.png" width=100% height=10px />

		<div class="row align-items-center justify-content-center">
			<div class="col-md-12">
				<h1>MEET THE FOUNDERS</h1>
			</div>
			<div class="col-md-6">
				<img src="images/arnav.jpg" width="250" height="280" />
			</div>
			<div class="col-md-6">
				<img src="images/aditi.jpeg" width="250" height="280" />
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