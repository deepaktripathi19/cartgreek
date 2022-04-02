  <footer class="footer">
         <a href="javascript:void(0);" id="backtotop" class="backtotop"><span class="sprite_ico backtop_ico"></span></a>
         <div class="container py-4">
            <div class="row">
               <div class="col">
                  <img src="<?php echo get_theme_mod( 'footer_logo' ); ?>" class="mb-4 footer_logo" alt="" />
                  <p><?php echo get_theme_mod( 'footer_text' ); ?></p>
               </div>
               <div class="col-2 pt-4">
                  <h5>Important Links</h5>
                  <?php
							wp_nav_menu( array(
											'theme_location' => 'footerf',
											'container' => 'ul',
											'menu_class'     => 'p-0',
						 ) );
				?>
               </div>
               <div class="col-2 pt-4">
                  <h5>Featured Services</h5>
                  <?php
							wp_nav_menu( array(
											'theme_location' => 'footers',
											'container' => 'ul',
											'menu_class'     => 'p-0',
						 ) );
				?>
               </div>
			   <?php if(get_theme_mod( 'contact_info' )) {?>
               <div class="col pt-4">
                  <?php echo get_theme_mod( 'contact_info' ); ?>
               </div>
			   <?php } ?>
            </div>
         </div>
         <div class="bg-dark py-3 text-white bottomfooter">
            <div class="container">
               <div class="row">
                  <div class="col-6">
                     <p class="text-white m-0"><?php echo get_theme_mod( 'footer_copyright' ); ?>  
                        <a href="javascript:void(0);" class="text-white ml-4 mx-3">Terms</a> 
                        <a href="javascript:void(0);" class="text-white mx-3">Privacy</a>
                        <a href="javascript:void(0);" class="text-white mx-3">Sitemap</a>
                     </p>
                  </div>
                  <div class="col-4 text-center">
                     <a href="javascript:void(0);" class="d-inline-block mr-3">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/images/common-sprite-1.png" class="" alt="" />
                     </a> 
                     <a href="javascript:void(0);" class="d-inline-block ml-3">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/images/dmca-badge-w100-5x1-08.png" class="" alt="" />
                     </a>
                  </div>
                  <div class="col-2 socialIco text-right">
				  <?php if(get_theme_mod( 'facebook' )) { ?>
                     <a href="<?php echo get_theme_mod( 'facebook')?>" target="_blank" class="d-inline-block"><span class="sprite_ico facebook_ico"></span></a>
				  <?php } ?>
				  <?php if(get_theme_mod( 'twitter' )) { ?>
                     <a href="<?php echo get_theme_mod( 'twitter')?>" target="_blank" class="d-inline-block"><span class="sprite_ico twitter_ico"></span></a>
					 <?php } ?>
					  <?php if(get_theme_mod( 'linkedin' )) { ?>
                     <a href="<?php echo get_theme_mod( 'linkedin')?>" target="_blank" class="d-inline-block"><span class="sprite_ico linkedin_ico"></span></a>
					 <?php } ?>
					 <?php if(get_theme_mod( 'insta' )) { ?>
                     <a href="<?php echo get_theme_mod( 'insta')?>" target="_blank" class="d-inline-block"><span class="sprite_ico instagram_ico"></span></a>
					 <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </footer>
	  <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.3.3.1.min.js"></script>
      <?php wp_footer(); ?>
      </body>
</html>