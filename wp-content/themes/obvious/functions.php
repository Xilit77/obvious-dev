<?php 

define('stylebg_version', '1.0.0');

// enqueue javascript
 
function theme_js(){
 
    wp_enqueue_script( 'Jquery',
    get_template_directory_uri() . '/js/jquery-3.3.1.min.js',
    array() );
    
    wp_enqueue_script( 'TweenMax',
    get_template_directory_uri() . '/js/TweenMax.min.js',
    array() );
 
}
 
add_action( 'wp_footer', 'theme_js' );


function stylebg_global() {
    
    wp_enqueue_style( 'stylebg_simplegrid', get_template_directory_uri() . '/css/simple-grid.min.css', array(), 
    stylebg_version , 'all' );
    wp_enqueue_style( 'stylebg_custom', get_template_directory_uri() . '/style.css', array('stylebg_simplegrid'), 
    stylebg_version , 'all' );
    
    
    wp_enqueue_script( 'stylebg_script', get_template_directory_uri() . '/js/global.js', array(), 
    stylebg_version , true );

} // fin function style°global

add_action('wp_enqueue_scripts', 'stylebg_global' );


// UTILITAIRE

function bgportfolio_setup() {
    // Image mise en avant
    add_theme_support( 'post-thumbnails' );
    
    //enlever le generateur de version dans le header pour mesure de sécurité
    remove_action('wp_head', 'wp_generator');
    
    //enlever les guillemets à la française
    remove_filter('the_content', 'wptexturize');

    // active la gestion des menus
    register_nav_menus( array('primary' => 'principal') );
    
    
} // fin function setup

add_action('after_setup_theme', 'bgportfolio_setup');

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="navsite__desk--navlink"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

// Réduire le nombre de mot dans l'extrait des textes
function custom_excerpt_length( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function portfoliobg_post_nav() {
    // Don't print empty markup if there's nowhere to navigate.
    $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );

    if ( ! $next && ! $previous ) {
        return;
    }

    ?>
    <nav class="navigation post-navigation" role="navigation">
        <div class="post--navigation--container">
            <?php
            if ( is_attachment() ) :
                previous_post_link( '%link', __( '<div class="btn--left--post"><p id="btn__post--txt--prev">%title</p><div class="btn__link--post--dark btn__post btn__post--prev"><i class="fa fa-angle-left"></i>
                            <span class="btn__link--boxdark btn--boxdark--1"></span>
                            <span class="btn__link--boxdark btn--boxdark--2"></span>
                            <span class="btn__link--boxdark btn--boxdark--3"></span></div></div>', 'portfoliobg' ) );
            else :
                previous_post_link( '%link', __( '<div class="btn--left--post"><p id="btn__post--txt--prev">%title</p><div class="btn__link--post--dark btn__post btn__post--prev"><i class="fa fa-angle-left"></i>
                            <span class="btn__link--boxdark btn--boxdark--1"></span>
                            <span class="btn__link--boxdark btn--boxdark--2"></span>
                            <span class="btn__link--boxdark btn--boxdark--3"></span></div></div>', 'portfoliobg' ) );
                next_post_link( '%link', __( '<div class="btn--right--post"><p id="btn__post--txt--next">%title</p><div class="btn__link--post--dark btn__post btn__post--next"><i class="fa fa-angle-right"></i>
                            <span class="btn__link--boxdark btn--boxdark--1"></span>
                            <span class="btn__link--boxdark btn--boxdark--2"></span>
                            <span class="btn__link--boxdark btn--boxdark--3"></span></div></div>', 'portfoliobg' ) );
            endif;
            ?>
        </div><!-- .nav-links -->
    </nav><!-- .navigation -->
    <?php
}

function portfoliobg_post_nofixe_nav() {
    // Don't print empty markup if there's nowhere to navigate.
    $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );

    if ( ! $next && ! $previous ) {
        return;
    }

    ?>
    <nav class="navigation post-navigation" role="navigation">
        <div class="post--navigation--container--nofixe">
            <?php
            if ( is_attachment() ) :
                previous_post_link( '%link', __( '<div class="btn--left"><div class="btn__link--dark btn--prev"><i class="fa fa-angle-left"></i> %title
                            <span class="btn__link--boxdark btn--boxdark--1"></span>
                            <span class="btn__link--boxdark btn--boxdark--2"></span>
                            <span class="btn__link--boxdark btn--boxdark--3"></span></div></div>', 'portfoliobg' ) );
            else :
                previous_post_link( '%link', __( '<div class="btn--left"><div class="btn__link--dark btn--prev"><i class="fa fa-angle-left"></i> %title
                            <span class="btn__link--boxdark btn--boxdark--1"></span>
                            <span class="btn__link--boxdark btn--boxdark--2"></span>
                            <span class="btn__link--boxdark btn--boxdark--3"></span></div></div>', 'portfoliobg' ) );
                next_post_link( '%link', __( '<div class="btn--left"><div class="btn__link--dark btn--next">%title <i class="fa fa-angle-right"></i>
                            <span class="btn__link--boxdark btn--boxdark--1"></span>
                            <span class="btn__link--boxdark btn--boxdark--2"></span>
                            <span class="btn__link--boxdark btn--boxdark--3"></span></div></div>', 'portfoliobg' ) );
            endif;
            ?>
        </div><!-- .nav-links -->
    </nav><!-- .navigation -->
    <?php
}
