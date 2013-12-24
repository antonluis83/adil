			<?php  global $virtue; ?>
			<?php if(isset($virtue['mobile_switch'])) { 
				$mobile_slider = $virtue['mobile_switch'];
			} else {
				$mobile_slider = '';
			}
			if(isset($virtue['choose_slider'])) {
				$slider = $virtue['choose_slider'];
			} else {
				$slider = 'mock_flex';
			}
			if(detect_mobile() && $mobile_slider == '1') {
		 		$slider = $virtue['choose_mobile_slider'];
					 if ($slider == "flex") {
					get_template_part('templates/mobile_home/mobileflex', 'slider');
				}
				else if ($slider == "video") {
					get_template_part('templates/mobile_home/mobilevideo', 'block');
				} 
	} else { ?>
    		<?php if ($slider == "flex") {
					get_template_part('templates/home/flex', 'slider');
				}
				else if ($slider == "thumbs") {
					get_template_part('templates/home/thumb', 'slider');
				}
				else if ($slider == "fullwidth") {
					get_template_part('templates/home/fullwidth', 'slider');
				}
				else if ($slider == "video") {
					get_template_part('templates/home/video', 'block');
				}
				else if ($slider == "mock_flex") {
					get_template_part('templates/home/mock', 'flex');
				}
}?>
	<div id="pageheader" class="titleclass">
    <div class="container">
        <img src="<?php echo bloginfo('template_url'); ?>/images/homepage.png" alt="">
    </div>
    <div class="wrap2">
      <div class="img-wrapper">
     
       <div class="point-img"> <img src="<?php echo bloginfo('template_url'); ?>/images/point-img.png" alt=""></div>
       <div class="img-content"><p class="">We manage the support, maintanence,<br>
        and scaling of your eCommerce<br>
        website so you don’t have to. 
        </p></div>
       <div class="point-img"><img src="<?php echo bloginfo('template_url'); ?>/images/point-img.png" alt=""></div>
       <div class="clearfix"></div>
      </div>
    </div>
    
    <!--container-->
   </div><!--titleclass-->
   
     <div class="wrap1">
         <div class="container">
             <p class="w-title">We work with the best eCommerce platforms on earth.</p>
             <div class="magento">
                <div class="m-title"><img class="" src="<?php echo bloginfo('template_url'); ?>/images/magento.png" ></div>
                <p class="m-content">The world’s most popular eCommerce platform, with over 200,000 live merchants. Offering both community and enterprise editions.</p>
             </div>
             <div class="spree">
                <div class="s-title"><img class="" src="<?php echo bloginfo('template_url'); ?>/images/spree.png" ></div>
                <p class="s-content">One of the fastest growing open-source eCommerce platforms. Built atop the prolific
Ruby on Rails framework.</p>
            
             </div>
         </div>
     </div>
     <div class="wrap2">
        <div class="container">
            <p class="w-title">When you work with Hero, you’ll have peace-of-mind
knowing that your eCommerce site will remain.</p>
             <div class="div1">
                <div class=""><img class="" src="<?php echo bloginfo('template_url'); ?>/images/super-fast.png" ></div>
                <p class="">Super Fast</p>
             </div>
             <div class="div1">
                <div class=""><img class="" src="<?php echo bloginfo('template_url'); ?>/images/secure.png" ></div>
                <p class="">Secure</p>            
             </div>
             <div class="div1">
                <div class=""><img class="" src="<?php echo bloginfo('template_url'); ?>/images/bug-free.png" ></div>
                <p class="">Bug-free</p>            
             </div>
        </div>
     </div>
     <div class="wrap1">
         <div class="container">
               <p class="w-title">Some of the smartest retailers worldwide are already using Hero. Why aren’t you?</p>
             <div class="div1">
                <div class=""><img class="" src="<?php echo bloginfo('template_url'); ?>/images/circle.png" ></div>
                <p class="">Company #1</p>
                <p class="c-content">See how <company> scaled it’s growth 153%
while letting Hero sweat the small stuff.</p>            
             </div>
             <div class="div1">
                <div class=""><img class="" src="<?php echo bloginfo('template_url'); ?>/images/circle.png" ></div>
                <p class="">Company #2</p>
                 <p class="c-content">See how <company> scaled it’s growth 153%
while letting Hero sweat the small stuff.</p>            
             </div>
             <div class="div1">
                <div class=""><img class="" src="<?php echo bloginfo('template_url'); ?>/images/circle.png" ></div>
                <p class="">Company #3</p> 
                 <p class="c-content">See how <company> scaled it’s growth 153%
while letting Hero sweat the small stuff.</p>           
             </div>
         </div>
     </div>
     <div class="wrap3">
         <div class="container">
            <span class="">See how Hero is helping retailers around the world, grow faster.</span>
            <a class="howit" href="#">HOW IT WORKS</a>
         </div>
     </div>
    
    <div id="content" class="container homepagecontent">
   		<div class="row">
         