<?php
/* Template Name: Home */
 get_header();
 ?>
 <div class="banner">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-6">
				  <?php if(get_field('heading')) {?>
                     <h1>
					 <?php the_field('heading');?>
					 </h1>
				  <?php } ?>
				   <?php if(get_field('sub_heading')) {?>
                     <h6 class="mb-5"><?php the_field('sub_heading');?></h6>
					 <?php } ?>
					  <?php if(get_field('button_text')) {?>
                     <button type="button" class="btn_Theme_green btnLg"><?php the_field('button_text');?></button>
					 <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sectionGoodCompany bg_Theme_green py-5">
         <div class="container">
            <div class="row">
               <div class="col">
			   <?php if(get_field('heading_text')) {?>
                  <h3 class="text-white mb-4 text-center"><?php the_field('heading_text');?></h3>
				  <?php } ?>
				  <?php if(get_field('sub_heading_text')) {?>
                  <p class="text-white mb-5 text-center"><?php the_field('sub_heading_text');?></p>
				  <?php } ?>
                  <div class="d-flex flex-wrap justify-content-center text-center text-white">
                     <div class="flex-fill points py-4 px-3 ml-0 mr-3">
                        <h4 class="my-4"><?php the_field('first_box_number');?></h4>
                        <h5 class="mb-0"><?php the_field('first_box_text');?></h5>
                     </div>
                     <div class="flex-fill points py-4 px-3 mx-3">
                        <h4 class="my-4"><?php the_field('second_box_number');?></h4>
                        <h5 class="mb-0"><?php the_field('second_box_text');?></h5>
                     </div>
                     <div class="flex-fill points py-4 px-3 mx-3">
                        <h4 class="my-4"><?php the_field('third_box_number');?></h4>
                        <h5 class="mb-0"><?php the_field('third_box_text');?></h5>
                     </div>
                     <div class="flex-fill points py-4 px-3 mx-3">
                        <h4 class="my-4"><?php the_field('fourth_box_number');?></h4>
                        <h5 class="mb-0"><?php the_field('fourth_box_text');?></h5>
                     </div>
                     <div class="flex-fill points py-4 px-3 ml-3 mr-0">
                        <h4 class="my-4"><?php the_field('fifth_box_number');?></h4>
                        <h5 class="mb-0"><?php the_field('fifth_box_text');?></h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sectionEcommercePlatform py-5 overflow-hidden">
         <div class="bg01"></div>
         <div class="container">
            <div class="col px-0">
               <div class="owl-carousel owl-theme" id="ecommerceCarousel">
			   
			   <?php     $args = array(  
								'post_type' => 'platform',
								'post_status' => 'publish',
								'posts_per_page' => -1, 
							);
							$loop = new WP_Query( $args ); 
							while ( $loop->have_posts() ) : $loop->the_post(); 
								?>
								<div class="item">
                     <div class="row no-gutters position-relative">
                        <div class="col-md-6 mb-md-0 p-md-4">
                           <h4 class="text-white"><?php the_field('top_title'); ?></h4>
									<?php if (has_post_thumbnail( $post->ID ) ): ?>
									  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									  <img src="<?php echo $image[0]?>" class="w-100" alt="" />
									<?php endif; ?>
								</div>
                        <div class="col-md-6 position-static ecommerce_cardbody p-5 pl-md-0">
                           <h2 class="mt-4 mb-5 text-white"><?php the_title(); ?></h2>
                           <p class="text-white pt-3 mb-5"><?php the_content(); ?></p>
						   <button type="button" class="btn_Theme_white text-dark mr-4">View Case Study</button>
                           <button type="button" class="btn_Transparent_green">Visit Site</button>
                        </div>
                     </div>
                  </div>
						<?php				
							endwhile;
							wp_reset_postdata();
						?>
			   </div>
            </div>
         </div>
      </section>
      <div class="dottedDivbg py-5 w-100"></div>
      <section class="sectionEliteCompany bg_Theme_green py-5">
         <div class="container">
            <div class="d-flex">
               <div class="flex-fill text-white pr-3">
                  <h2 class="mb-5"><?php the_field('top_heading_t'); ?></h2>
                  <p class="mb-5"><?php the_field('description'); ?></p>
                  <button type="button" class="btn_Transparent_green btnLg"><?php the_field('button_text_t'); ?></button>
               </div>
               <div class="flex-fill pl-4">
			   
                  <div class="d-flex flex-wrap">
				     
				  <?php if(get_field('text_block_first')) {?>
                     <div class="col bg-white py-3 px-4 mr-4">
					 <span class="imgCenter mr-3">
					 <img src="<?php the_field('text_block_image_first') ?>" alt="" /></span>
					 <?php the_field('text_block_first') ?>
					 </div>
				  <?php } ?>
                     <?php if(get_field('text_block_second')) {?>
                     <div class="col bg-white py-3 px-4 mr-4">
					 <span class="imgCenter mr-3">
					 <img src="<?php the_field('text_block_image_second') ?>" alt="" /></span>
					 <?php the_field('text_block_second') ?>
					 </div>
				  <?php } ?>
                     <div class="w-100 my-4"></div>
                      <?php if(get_field('text_block_third')) {?>
                     <div class="col bg-white py-3 px-4 mr-4">
					 <span class="imgCenter mr-3">
					 <img src="<?php the_field('text_block_image_third') ?>" alt="" /></span>
					 <?php the_field('text_block_third') ?>
					 </div>
				  <?php } ?>
				   <?php if(get_field('text_block_four')) {?>
                     <div class="col bg-white py-3 px-4 mr-4">
					 <span class="imgCenter mr-3">
					 <img src="<?php the_field('text_block_image_four') ?>" alt="" /></span>
					 <?php the_field('text_block_four') ?>
					 </div>
				  <?php } ?>
                     <div class="w-100 my-4"></div>
                      <?php if(get_field('text_block_five')) {?>
                     <div class="col bg-white py-3 px-4 mr-4">
					 <span class="imgCenter mr-3">
					 <img src="<?php the_field('text_block_image_five') ?>" alt="" /></span>
					 <?php the_field('text_block_five') ?>
					 </div>
				  <?php } ?>
				   <?php if(get_field('text_block_six')) {?>
                     <div class="col bg-white py-3 px-4 mr-4">
					 <span class="imgCenter mr-3">
					 <img src="<?php the_field('text_block_image_six') ?>" alt="" /></span>
					 <?php the_field('text_block_six') ?>
					 </div>
				  <?php } ?>
                     <div class="w-100 my-4"></div>
                      <?php if(get_field('text_block_seven')) {?>
                     <div class="col bg-white py-3 px-4 mr-4">
					 <span class="imgCenter mr-3">
					 <img src="<?php the_field('text_block_image_seven') ?>" alt="" /></span>
					 <?php the_field('text_block_seven') ?>
					 </div>
				  <?php } ?>
				   <?php if(get_field('text_block_eight')) {?>
                     <div class="col bg-white py-3 px-4 mr-4">
					 <span class="imgCenter mr-3">
					 <img src="<?php the_field('text_block_image_eight') ?>" alt="" /></span>
					 <?php the_field('text_block_eight') ?>
					 </div>
				  <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sectionTechnology py-5">
         <div class="container">
            <h3 class="text-dark mb-5 text-center"><b><?php the_field('heading_text_tb') ?></h3>
            <div class="tabsWrap">
               <ul class="tabs-nav d-flex p-0">
                  <li class="active flex-fill text-center"><a href="#mobility"><?php the_field('first_option') ?></a></li>
                  <li class="flex-fill text-center"><a href="#web"><?php the_field('second_option') ?></a></li>
                  <li class="flex-fill text-center"><a href="#ecommerce"><?php the_field('third_option') ?></a></li>
                  <li class="flex-fill text-center"><a href="#designing"><?php the_field('fourth_option') ?></a></li>
               </ul>
               <div class="tabs-content">
                  <div class="tabsBody" id="mobility">
                     <?php the_field('mobility_content'); ?>
                  </div>
                  <div class="tabsBody" id="web" class="position-relative">
                     <?php the_field('web_content'); ?>
				</div>
                  <div class="tabsBody" id="ecommerce">
                     <?php the_field('ecommerce_content'); ?>
                  </div>
                  <div class="tabsBody" id="designing">
                     <?php the_field('designing_content'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sectionTrusted bg_Theme_darkcyan py-5">
         <div class="container">
            <div class="row">
               <div class="col">
                  <h3 class="text-white mb-4 text-center"><b><?php the_field('heading_te'); ?></b></h3>
                  <p class="text-white mb-5 text-center"><?php the_field('sub_heading_te'); ?></p>
                  <div class="owl-carousel owl-theme trustedCarousel">
				  <?php 
						$args = array(  
								'post_type' => 'testimonial',
								'post_status' => 'publish',
								'posts_per_page' => -1, 
							);
							$loop = new WP_Query( $args ); 
							while ( $loop->have_posts() ) : $loop->the_post(); 
				  ?>
							<div class="item">
                        <div class="card text-center">
                           <div class="card-body">
                              <p class="card-text mb-5 mt-4 px-3"><?php the_content(); ?></p>
                              <h5 class="card-title"><?php the_field('title'); ?></h5>
                              <h6 class="card-subtitle mb-2 text-muted"><?php the_field('sub_title'); ?></h6>
                           </div>
                        </div>
                     </div>
				  <?php				
							endwhile;
							wp_reset_postdata();
						?>
                    </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sectionTipsTrends py-5">
         <div class="container">
            <h3 class="text-dark mb-4 text-center"><b><?php the_field('heading_text_in'); ?></b></h3>
            <div class="col">
               <div class="owl-carousel owl-theme tipsCarousel">
			   
			   <?php 
						$args = array(  
								'post_type' => 'post',
								'post_status' => 'publish',
								'posts_per_page' => -1, 
							);
							$loop = new WP_Query( $args ); 
							while ( $loop->have_posts() ) : $loop->the_post(); 
				  ?>
							<div class="item">
                     <div class="card mb-3">
                        <div class="row no-gutters px-4">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
						  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									 
						<?php endif; ?>
						<?php if($image[0]) {?>
                           <div class="col-md-4 py-4">
                              <img src="<?php echo $image[0]?>" class="card-img" alt="...">
                           </div>
						<?php } ?>
                           <div class="col-md-8">
                              <div class="card-body pr-0">
                                 <h5 class="card-title"><?php the_title(); ?></h5>
                                 <p class="card-text"><?php the_content(); ?></p>
                                 <p class="card-text pt-3"><a href="javascript:void(0);" class="text-muted">4 Days ago 16 mins read</a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
				  <?php				
							endwhile;
							wp_reset_postdata();
						?>
			                    
              </div>
            </div>
         </div>
      </section>
      <section class="sectionAboutGeek bg_Theme_green pt-4 pb-5 text-white">
         <div class="container">
            <div class="row">
               <div class="col-6 pr-4">
                  <h3 class="mb-4"><?php the_field('form_heading'); ?></h3>
                  <?php the_field('form_shortcode'); ?>
               </div>
               <div class="col-6">
                  <h3 class="text-white mb-3"><?php the_field('about_heading'); ?></h3>
                  <p class="mb-4"><?php the_field('about_sub_heading'); ?></p>
				  <?php if(get_field('image_employee')) {?>
                  <div class="imgCenter"><img src="<?php the_field('image_employee'); ?>" alt="" /></div>
				  <?php } ?>
               </div>
            </div>
         </div>
      </section>
    <?php get_footer(); ?>