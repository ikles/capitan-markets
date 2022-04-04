<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<!--meta name="viewport" content="width=1920px"-->
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>	
		<?php wp_head(); ?>		
	<script>
		/*jQuery.noConflict();*/
	</script>		
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;800&display=swap" rel="stylesheet">	
	
	<link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/select2.min.css">
	<link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/main.css">

	<!--link rel="icon" type="image/png" href="http://ikles.ru/wp-content/themes/mif/img/icon.png" /-->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>


	<div class="wrapper" <?php if( is_front_page() ): echo 'id="fullpage"'?> <?php endif; ?>>
		<header class="header section">
			<div class="top">
				<div class="top__contain">
					<a href="#" class="logo">
						<img class="logo-img" src="<? bloginfo('template_url') ?>/img/logo.svg">
						<img class="logo-img-bl" src="<? bloginfo('template_url') ?>/img/logo-bl.svg">
					</a>
					<div class="menu__list-w">
						<?php					
						wp_nav_menu( [
							'theme_location'  => '',
							'menu'            => 'top-mnu',
							'container'       => 'div',
							'container_class' => 'top__mnu-col',
							'container_id'    => '',
							'menu_class'      => 'menu__list',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						] );
						?>
					</div>
					<div class="top__btns">
						<a href="#" class="btn top__btn">Sign in</a>
						<a href="#" class="btn btn--wh top__btn-2">Sign in</a>
					</div>
				</div>        
			</div><!--top-->
			<div class="top__slider">
				<div class="top__slide">
					<div class="top__slide-content">
						<div class="contain">
							<div class="top__slide-header">YOUR <span class="color-green">FINANCIAL</span> FUTURE<br>
								STRATEGIZED <span class="color-green">TODAY</span>
							</div>
							<div class="top__slide-text">Express your domination in the financial markets with Forex &amp; CFD Trading, Licensed Portfolio Management, and Shared Investments
							</div>
							<a href="#" class="btn top__slide-btn">Contact us</a>
						</div>
					</div>
				</div><!--top__slide-->
			</div><!--top__slider-->

			<div class="shape header__shape">
				<svg width="533" height="253" viewBox="0 0 533 253" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M320.001 114.185C409.501 50.1849 553.501 29.1849 669.359 102.844C809.28 191.802 920.029 150.611 1012 61.5228" stroke="#09D4DA" stroke-width="25" stroke-linecap="round"/>
					<path d="M12.9999 127.625C98.424 218.721 229.317 217.178 355.718 150.17C502.212 72.5106 606.389 102.403 698.36 191.491" stroke="#09D4DA" stroke-width="25" stroke-linecap="round"/>
				</svg>
			</div>
		</header>