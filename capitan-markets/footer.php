<footer class="footer section">	
	<div class="contain">
		<div class="footer__row">
			<div class="footer__col-1">
				<a href="/" class="footer__logo"><img src="<? bloginfo('template_url') ?>/img/logo-foot.svg" /></a>
				<div class="footer__socials">
					<?php dynamic_sidebar('fsocs'); ?>										
				</div>
			</div>
			<div class="footer__col-2">
				<div class="footer__mnu-title">
					<?php dynamic_sidebar('ftitle1'); ?>
			</div>
				<?php wp_nav_menu(array( 'theme_location' => 'b-mnu1', 'menu_class' => 'footer__mnu cls2' )); ?>				
			</div>
			<div class="footer__col-3">
				<div class="footer__mnu-title">
					<?php dynamic_sidebar('ftitle2'); ?>				
			</div>
				<?php wp_nav_menu(array( 'theme_location' => 'b-mnu2', 'menu_class' => 'footer__mnu cls2' )); ?>
			</div>
			<div class="footer__col-4">
				<div class="footer__mnu-title">
					<?php dynamic_sidebar('ftitle3'); ?>				
			</div>
			<?php wp_nav_menu(array( 'theme_location' => 'b-mnu3', 'menu_class' => 'footer__mnu cls2' )); ?>				
			</div>
			<div class="footer__col-5">
				<div class="footer__mnu-title">
					<?php dynamic_sidebar('ftitle4'); ?>
			</div>
				<?php wp_nav_menu(array( 'theme_location' => 'b-mnu4', 'menu_class' => 'footer__mnu cls2' )); ?>				
			</div>
		</div>
		<div class="footer__text">
			<?php dynamic_sidebar('ftxt'); ?>
		</div>
		<div class="footer__term">
			<?php dynamic_sidebar('flinks'); ?>			
		</div>
	</div>
	<div class="shape-footer">
		<svg viewBox="0 0 1920 84" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 83.5H960H1920V39.2227C1920 39.2227 1382 -48.7778 960 39.2227C538 127.223 0 39.2227 0 39.2227V83.5Z" fill="#163241"/>
		</svg>
	</div>
</footer>
</div><!--wrapper-->
<? wp_footer(); ?>
<script src="<? bloginfo('template_url') ?>/js/jquery-3.4.1.min.js"></script>
<script src="<? bloginfo('template_url') ?>/js/jquery.onepage-scroll.min.js"></script>
<script src="<? bloginfo('template_url') ?>/js/select2.min.js"></script>
<script src="<? bloginfo('template_url') ?>/js/common.js"></script>
</body>
</html>