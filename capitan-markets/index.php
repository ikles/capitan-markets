<?php get_header(); ?>
<?php $post = get_post(580); ?>
<div class="favorite-assets section">
  <div class="favorite-assets-shape-top">
    <svg viewBox="0 0 1921 101" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.5 32.7628C0.5 32.7628 445.5 -40.9535 960.5 32.7628C1475.5 106.479 1920.5 32.7628 1920.5 32.7628V101C1920.5 101 1381 101 960.5 101C540 101 0.5 101 0.5 101L0.5 32.7628Z" fill="#EEF6F7"/>
    </svg>
  </div>    
  <!---->
  <div class="contain">
    <div class="favorite__heading heading-2">What are your favorite trading assets?</div>
  </div>
  <!---->
  <div class="favorite-assets-shape-bottom">
   <svg viewBox="0 0 1920 101" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0.000243288C0 0.000243288 432.5 1.81656e-05 960 0.000177659C1487.5 0.000337153 1920 0.000440363 1920 0.000440363L1920 63.5967C1920 63.5967 1382 147.755 960 63.5965C538 -20.5617 -1.11195e-05 63.5964 -1.11195e-05 63.5964L0 0.000243288Z" fill="#EEF6F7"/>
  </svg>

</div>
</div><!--favorite-assets-->

<div class="why section">


  <div class="shape why__shape">
    <svg width="574" height="252" viewBox="0 0 574 252" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M261.271 104.017C266.887 108.033 268.184 115.84 264.168 121.456C260.153 127.071 252.345 128.368 246.73 124.353L261.271 104.017ZM-95.3575 102.844L-88.651 113.393L-95.3575 102.844ZM-446.697 70.5013C-451.655 65.6981 -451.781 57.7845 -446.978 52.8259C-442.175 47.8672 -434.261 47.7412 -429.303 52.5444L-446.697 70.5013ZM246.73 124.353C160.733 62.8577 22.2759 42.8685 -88.651 113.393L-102.064 92.2956C18.725 15.5013 168.268 37.512 261.271 104.017L246.73 124.353ZM-88.651 113.393C-160.743 159.227 -226.567 172.228 -286.898 161.249C-346.889 150.331 -399.712 116.013 -446.697 70.5013L-429.303 52.5444C-384.315 96.1214 -335.778 126.943 -282.421 136.653C-229.404 146.301 -169.893 135.42 -102.064 92.2956L-88.651 113.393Z" fill="#09D4DA"/>
      <path d="M570.12 136.175C574.842 131.14 574.588 123.229 569.552 118.507C564.516 113.785 556.606 114.039 551.883 119.075L570.12 136.175ZM218.283 150.17L212.428 161.214L218.283 150.17ZM-133.056 182.513C-138.015 187.316 -138.141 195.23 -133.337 200.188C-128.534 205.147 -120.621 205.273 -115.662 200.47L-133.056 182.513ZM551.883 119.075C471.908 204.36 347.965 204.769 224.138 139.126L212.428 161.214C341.404 229.586 479.247 233.081 570.12 136.175L551.883 119.075ZM224.138 139.126C149.217 99.4088 83.7896 86.5145 24.5489 95.9562C-34.6401 105.39 -85.9098 136.845 -133.056 182.513L-115.662 200.47C-70.8364 157.05 -24.0319 129.015 28.4837 120.645C80.9477 112.283 140.856 123.272 212.428 161.214L224.138 139.126Z" fill="#09D4DA"/>
    </svg>
  </div>

  <div class="contain">
    <div class="why__heading heading-2">
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


<div class="prior section">

<div class="shape-white-lb prior__shape-top">
<svg viewBox="0 0 1920 101" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1920 -0.000410199C1920 -0.000410199 1487.5 -0.000597511 960 -0.000391902C432.5 -0.000186293 0 -4.52724e-05 0 -4.52724e-05V63.5963C0 63.5963 538 147.755 960 63.596C1382 -20.5623 1920 63.5958 1920 63.5958L1920 -0.000410199Z" fill="white"/>
</svg>
</div>
<div class="shape-white-lb prior__shape-bot">
<svg viewBox="0 0 1920 101" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.66793e-05 101C1.66793e-05 101 432.5 101 960 101C1487.5 101 1920 101 1920 101V37.4033C1920 37.4033 1382 -46.7554 960 37.4036C538 121.562 0 37.4038 0 37.4038L1.66793e-05 101Z" fill="white"/>
</svg>
</div>

  <div class="contain">
    <div class="prior__content">
      <div class="prior__title">The Security of Our Traders Is Our First and Foremost Priority</div>
      <div class="prior__text">
        We work in full compliance with the strictest European regulations to provide you with the best trading experience, and we apply the top-tier security measures to ensure the safety of your personal and financial
        information.
      </div>
      <a href="#" class="btn prior__btn">Choose now</a>
    </div>
  </div>
</div>
<div class="ask section">
  <div class="shape ask__shape">
    <svg width="697" height="252" viewBox="0 0 697 252" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M384.271 104.017C389.886 108.033 391.183 115.84 387.168 121.456C383.152 127.071 375.345 128.368 369.729 124.353L384.271 104.017ZM27.642 102.844L34.3485 113.393L27.642 102.844ZM-323.697 70.5013C-328.656 65.6981 -328.782 57.7845 -323.979 52.8259C-319.175 47.8672 -311.262 47.7412 -306.303 52.5444L-323.697 70.5013ZM369.729 124.353C283.732 62.8577 145.275 42.8685 34.3485 113.393L20.9355 92.2956C141.724 15.5013 291.268 37.512 384.271 104.017L369.729 124.353ZM34.3485 113.393C-37.7431 159.227 -103.568 172.228 -163.898 161.249C-223.89 150.331 -276.713 116.013 -323.697 70.5013L-306.303 52.5444C-261.316 96.1214 -212.778 126.943 -159.422 136.653C-106.405 146.301 -46.8939 135.42 20.9355 92.2956L34.3485 113.393Z" fill="#09D4DA"/>
      <path d="M693.119 136.175C697.842 131.139 697.587 123.229 692.552 118.507C687.516 113.784 679.605 114.039 674.883 119.074L693.119 136.175ZM341.283 150.17L335.428 161.214L341.283 150.17ZM-10.0565 182.513C-15.0151 187.316 -15.1411 195.229 -10.338 200.188C-5.53474 205.147 2.37879 205.273 7.33749 200.47L-10.0565 182.513ZM674.883 119.074C594.907 204.36 470.965 204.769 347.137 139.126L335.428 161.214C464.403 229.586 602.247 233.081 693.119 136.175L674.883 119.074ZM347.137 139.126C272.216 99.4086 206.789 86.5142 147.548 95.956C88.3594 105.389 37.0897 136.845 -10.0565 182.513L7.33749 200.47C52.1631 157.049 98.9676 129.014 151.483 120.644C203.947 112.283 263.855 123.272 335.428 161.214L347.137 139.126Z" fill="#09D4DA"/>
    </svg>

  </div>
  <div class="contain">
    <div class="ask__w">
      <div class="ask__l">
        <div class="ask__txts">
          <div class="ask__heading">Ask Your Queries</div>
          <div class="ask__text">
            Our financial markets experts are always on hand to help our clients help
          </div>
        </div>
      </div>
      <div class="ask__r">
        <form class="ask__form">
          <input class="ask__input" type="text" placeholder="Your name" /><input class="ask__input" type="text" placeholder="Your Email" /><input class="ask__input" type="text" placeholder="Subject" />
          <textarea class="ask__textarea" placeholder="Your message"></textarea>
          <button href="#" class="btn ask__btn">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="get section">

<div class="shape-white-lb get__shape-top">
<svg viewBox="0 0 1920 101" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.66793e-05 -0.000410199C1.66793e-05 -0.000410199 432.5 -0.000597511 960 -0.000391902C1487.5 -0.000186293 1920 -4.52724e-05 1920 -4.52724e-05V63.5963C1920 63.5963 1382 147.755 960 63.596C538 -20.5623 0 63.5958 0 63.5958L1.66793e-05 -0.000410199Z" fill="white"/>
</svg>
</div>

  <div class="contain">
    <div class="get__w">
      <div class="get__l">
        <div class="get__logo">
          <img src="<? bloginfo('template_url') ?>/img/logo-indexa.png" class="get__logo-img" />
        </div>
      </div>
      <div class="get__r">
        Get trading signals, analytics and online forecasts
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>