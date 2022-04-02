<!doctype html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700;800&display=swap" rel="stylesheet">
      <title><?php
        bloginfo('name');
        if (wp_title('', false)) {
            echo '|';
        } else {
			echo '-';
            echo bloginfo('description');
        } wp_title('');
        ?>
	  </title>
	  <?php wp_head(); ?>
   </head>
   <body>
      <section class="sectionBanner">
         <div class="header py-3">
            <div class="container pl-0 pr-0">
               <nav class="navbar navbar-expand-lg navbar-light pl-0 pr-0">
			   <?php if(get_theme_mod( 'm1_logo' )) {?>
                  <div class="brandLogo flex-shrink-1">
				  <img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="" />
				  </div>
			   <?php } ?>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <?php
							wp_nav_menu( array(
											'theme_location' => 'primary',
											'container' => 'ul',
											'menu_class'     => 'navbar-nav mr-auto ml-auto pl-0 pr-0',
						 ) );
				?>
				<?php if(get_theme_mod( 'action_button_text' )) {?>
                     <form class="form-inline my-2 my-lg-0">
                        <button type="button" class="btn_Theme_green"><?php echo get_theme_mod( 'action_button_text' ); ?></button>
                     </form>
				<?php } ?>
                  </div>
               </nav>
            </div>
         </div>