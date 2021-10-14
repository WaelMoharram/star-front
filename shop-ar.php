<?php
include('header-ar.html');
?>
	<!-- Page Title
    ============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>المتجر</h1>
				<span>ابدأ شراء منتجاتك المفضلة</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index-ar.php">الرئيسية</a></li>
					<li class="breadcrumb-item active" aria-current="page">المتجر</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="clear"></div>

					<div class="fancy-title title-border title-center topmargin-sm">
						<h4>التصنيفات</h4>
					</div>

					<ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">
						<li class="grid-item"><a href="#"><img src="images/clients/logo/3.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="#"><img src="images/clients/logo/3.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="#"><img src="images/clients/logo/3.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="#"><img src="images/clients/logo/3.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="#"><img src="images/clients/logo/3.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="#"><img src="images/clients/logo/3.png" alt="Clients"></a></li>
						</ul>
					<div class="clear"></div>
					<!-- Shop
					============================================= -->
					<div id="shop" class="shop row grid-container gutter-30" data-layout="fitRows">

						<?php
							for ($i=1;$i<13;$i++){
								include('card-product-ar.html');
							}
						?>


					</div><!-- #shop end -->

				</div>
			</div>
		</section><!-- #content end -->

<?php
include('footer.html');
?>