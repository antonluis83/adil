<footer id="containerfooter" class="footerclass" role="contentinfo">
  <div class="container">
    
    <div class="foot1"><img class="" src="<?php echo bloginfo('template_url'); ?>/images/foot-logo.png" ></div>
    <div class="foot2">
        <h6 class="learn-more">LEAEN MORE</h6>
        <h6><a href="#">COMPANY</a></h6>
        <h6><a href="#">CAREERS</a></h6>
        <h6><a href="#">PRESS ROOM</a></h6>
        <h6><a href="#">SITE MAP</a></h6>
        <h6 class="connect">CONNECT</h6>
        <a href="#"><img class="" src="<?php echo bloginfo('template_url'); ?>/images/facebook.png" ></a>
        <a href="#"><img class="" src="<?php echo bloginfo('template_url'); ?>/images/twitter.png" ></a>
        <a href="#"><img class="" src="<?php echo bloginfo('template_url'); ?>/images/google.png" ></a>         
        
    </div>
    <div class="foot3">
        <h6>We manage the support, maintanence, and scaling of your <br>eCommerce website so you don’t have to.</h6>
        <h6>get in touch</h6>
        <h6>Hero would like to hear from you! call us or send us an email.</h6>
        <a class="contactus" href="#">CONTACT US</a>
    </div>
   </div>
  	<div class="row">
  		<?php global $virtue; if(isset($virtue['footer_layout'])) { $footer_layout = $virtue['footer_layout']; } else { $footer_layout = 'fourc'; }
  			if ($footer_layout == "fourc") {
  				if (is_active_sidebar('footer_1') ) { ?> 
					<div class="span3 footercol1">
					<?php dynamic_sidebar(__("Footer Column 1", "virtue")); ?>
					</div> 
            	<?php }; ?>
				<?php if (is_active_sidebar('footer_2') ) { ?> 
					<div class="span3 footercol2">
					<?php dynamic_sidebar(__("Footer Column 2", "virtue")); ?>
					</div> 
		        <?php }; ?>
		        <?php if (is_active_sidebar('footer_3') ) { ?> 
					<div class="span3 footercol3">
					<?php dynamic_sidebar(__("Footer Column 3", "virtue")); ?>
					</div> 
	            <?php }; ?>
				<?php if (is_active_sidebar('footer_4') ) { ?> 
					<div class="span3 footercol4">
					<?php dynamic_sidebar(__("Footer Column 4", "virtue")); ?>
					</div> 
		        <?php }; ?>
		    <?php } else if($footer_layout == "threec") {
		    	if (is_active_sidebar('footer_third_1') ) { ?> 
					<div class="span4 footercol1">
					<?php dynamic_sidebar(__("Footer Column 1", "virtue")); ?>
					</div> 
            	<?php }; ?>
				<?php if (is_active_sidebar('footer_third_2') ) { ?> 
					<div class="span4 footercol2">
					<?php dynamic_sidebar(__("Footer Column 2", "virtue")); ?>
					</div> 
		        <?php }; ?>
		        <?php if (is_active_sidebar('footer_third_3') ) { ?> 
					<div class="span4 footercol3">
					<?php dynamic_sidebar(__("Footer Column 3", "virtue")); ?>
					</div> 
	            <?php }; ?>
			<?php } else {
					if (is_active_sidebar('footer_double_1') ) { ?>
					<div class="span6 footercol1">
					<?php dynamic_sidebar(__("Footer Column 1", "virtue")); ?> 
					</div> 
		            <?php }; ?>
		        <?php if (is_active_sidebar('footer_double_2') ) { ?>
					<div class="span6 footercol2">
					<?php dynamic_sidebar(__("Footer Column 2", "virtue")); ?> 
					</div> 
		            <?php }; ?>
		        <?php } ?>
        </div>
        <div class="footercredits clearfix">
    		  <div class="container">
    		<?php if (has_nav_menu('footer_navigation')) :
        	?><div class="footernav clearfix"><?php 
              wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'footermenu'));
            ?></div><?php
        	endif;?>
        	<p><?php $footertext = '[copyright] [the-year] [site-name] '; echo do_shortcode($footertext); ?>INTERNATIONAL,INC. ALL RIGHT RESERVED</p>
            <div class="foot-pol"><a href="#">PRIVACY POLICY</a><span>|</span><a href="#">TERMS OF SERVICE</a></div>
    	</div>
        </div>

 

</footer>

<?php wp_footer(); ?>
