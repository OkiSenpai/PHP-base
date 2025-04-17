<!DOCTYPE html>
<html>
<head>
	<?php
    include 'inc/metaIncView.php'
    ?>
</head>
<body>
	<section class="nav-bar">

		<?php
        include 'inc/navView.php'
        ?>
	</section>
	<section class="formations">
		<h1>Notre programme de formation</h1>

		<div class="formations-col">
			<img src="images/html-css.jpg">
			<div class="duree">60 h</div>
			<h3>HTML & CSS</h3>
			<p>Le HTML est un langage créé pour structurer des pages et pour donner du sens au contenu. Le CSS va servir à mettre en forme les différents contenus définis par le HTML en leur appliquant des styles.</p>

			<div class="star-formation">
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<span>(3454)</span>
			</div>

			<a href="?p=formations" class="btn-formation">Découvrir la formation</a>
		</div>

		<div class="formations-col">
			<img src="images/php.jpg">
			<div class="duree">240 h</div>
			<h3>PHP</h3>
			<p>PHP est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur web, pouvant également fonctionner avec une base de données.</p>

			<div class="star-formation">
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<span>(6655)</span>
			</div>
			
			<a href="?p=formations" class="btn-formation">Découvrir la formation</a>
		</div>

		<div class="formations-col">
			<img src="images/javascript.jpg">
			<div class="duree">160 h</div>
			<h3>JavaScript</h3>
			<p>JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web modernes.</p>

			<div class="star-formation">
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<span>(2087)</span>
			</div>

			<a href="?p=formations" class="btn-formation">Découvrir la formation</a>
		</div>
	</section>
	<!-- Section footer------------------->
<footer>
    <?php
    include 'inc/footerView.php'
    ?>
</footer>
</body>
</html>
