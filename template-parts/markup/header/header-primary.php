<?php
/**
 * Header Primary Markup
 *
 * @package Munk
 */

//header action
if( !function_exists('munk_header_primary_markup') ) :

function munk_header_primary_markup() { 

$single_header_ed = '';
if (is_singular()) {
	global $post;
	$single_header_ed = get_post_meta( $post->ID, 'munk_settings_disable_primary_header', true );
}

$munk_header_primary_ed = get_theme_mod('munk_layout_site_header_primary_ed', 'layout-one');
if ( $munk_header_primary_ed == 'none' || $single_header_ed ) {
	return;
}

if ($munk_header_primary_ed == 'layout-one') {
$munk_header_logo_class = 'col-xl-3 col-lg-3 col-md-12 col-10';
$munk_header_menu_class = 'col-xl-9 col-lg-9 col-md-12 col-12';
$munk_menu_pos = 'navbar-nav  ml-auto';
}
elseif ($munk_header_primary_ed == 'layout-two') {
$munk_header_logo_class = 'col-xl-12 col-lg-12 col-md-12 col-10';
$munk_header_menu_class = 'col-xl-12 col-lg-12 col-md-12 col-12 header-bottom';
$munk_menu_pos = 'navbar-nav ml-auto mx-auto';
}
else {
$munk_header_logo_class = '';
$munk_header_menu_class = '';
$munk_menu_pos = 'navbar-nav ml-auto mx-auto';
}

$munk_primary_menu = get_theme_mod ('munk_layout_site_header_primary_menu', '1');
?>

        <header id="masthead" class="site-header munk-header" role="banner">
	            <?php munk_header_top(); ?>
                <div class="container">
                    <div class="row">
                        <div class="<?php echo esc_attr($munk_header_logo_class); ?>">
                        <div class="site-branding text-center">
                                <?php the_custom_logo(); ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php
                                    $description = get_bloginfo( 'description', 'display' );
                                    if ( $description || is_customize_preview() ) : ?>
                                    <p class="site-description"><?php echo esc_html( $description ); // phpcs:ignore ?></p>
                                <?php endif; ?>
                          </div> 
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-2 d-xl-none d-lg-none d-sm-none">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
	                            <span class="navbar-toggler-icon"><?php echo esc_html('&#9776;', 'munk'); ?></span>
                            </button>                        
                        </div>
                        <?php if ($munk_primary_menu) { ?>
                            <div class="<?php echo esc_attr($munk_header_menu_class); ?>">
                                <nav class="navbar navbar-expand-sm">
                                    <div class="navbar-collapse collapse" id="navbar">
                                      <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'menu-1',
                                            'depth'	          => 4,
                                            'container'       => '',
                                            'container_class' => '',
                                            'container_id'    => '',
                                            'menu_class'      => $munk_menu_pos,
                                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'          => new WP_Bootstrap_Navwalker(),						  							  
                                        ) );
                                      ?>                                                   
                                    </div>
                                </nav> 
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php munk_header_bottom(); ?>
        </header><!-- #masthead -->    		
		<?php munk_header_after(); ?>			
<?php			
}
add_action( 'munk_header', 'munk_header_primary_markup', 20 ); 
endif;