<?php get_header(); ?>
<main class="main">
  <?php $post = get_post(580); ?>
  <div class="favorite-assets">
    <div class="favorite-assets-shape-top">
      <svg viewBox="0 0 1921 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.5 32.7628C0.5 32.7628 445.5 -40.9535 960.5 32.7628C1475.5 106.479 1920.5 32.7628 1920.5 32.7628V101C1920.5 101 1381 101 960.5 101C540 101 0.5 101 0.5 101L0.5 32.7628Z" fill="#EEF6F7"/>
      </svg>

    </div>    

    <div class="favorite-assets-shape-bottom">
     <svg viewBox="0 0 1920 101" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0.000243288C0 0.000243288 432.5 1.81656e-05 960 0.000177659C1487.5 0.000337153 1920 0.000440363 1920 0.000440363L1920 63.5967C1920 63.5967 1382 147.755 960 63.5965C538 -20.5617 -1.11195e-05 63.5964 -1.11195e-05 63.5964L0 0.000243288Z" fill="#EEF6F7"/>
    </svg>

  </div>
</div><!--favorite-assets-->

<div class="why">
  <div class="contain">
    <div class="why__heading">
      <?php echo get_field('why_captain_markets'); ?>    
    </div>
    <div class="why__items">
      <div class="why__col">
        <div class="why__item">
          <div class="why__img-w"><img src="<? bloginfo('template_url') ?>/img/why-1.GIF" /></div>
          <div class="why__content">
            <div class="why__title">
              <?php echo get_field('title_1'); ?>              
            </div>
            <div class="why__text">
              <?php echo get_field('text_1'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="why__col">
        <div class="why__item">
          <div class="why__img-w"><img src="<? bloginfo('template_url') ?>/img/why-1.GIF" /></div>
          <div class="why__content">
            <div class="why__title">
              <?php echo get_field('title_2'); ?>
            </div>
            <div class="why__text">
             <?php echo get_field('text_2'); ?>
           </div>
         </div>
       </div>
     </div>
     <div class="why__col">
      <div class="why__item">
        <div class="why__img-w"><img src="<? bloginfo('template_url') ?>/img/why-1.GIF" /></div>
        <div class="why__content">
          <div class="why__title">
            <?php echo get_field('title_3'); ?>
          </div>
          <div class="why__text">
            <?php echo get_field('text_3'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



</main>
<?php get_footer(); ?>