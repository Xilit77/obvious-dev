<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


/*  ----------------  CUSTOM POST METABOX  ------------------  */
    
add_action('admin_init', 'custom_metabox');
    
    function custom_metabox(){
        add_meta_box("custom_metabox_01", "Description projet", "description_projet_metabox_field", "post", "normal", "low");
        add_meta_box("custom_metabox_02", "URL du projet", "siteprojeturl_metabox_field", "post", "normal", "low");
        add_meta_box("custom_metabox_03", "Compétences projet", "competences_metabox_field", "post", "side", "high");
        add_meta_box("custom_metabox_04", "Année du projet", "annee_metabox_field", "post", "side", "high");
        add_meta_box("custom_metabox_05", "Client du projet", "client_metabox_field", "post", "side", "high");
    }
    
    /*      ----------  DESCRIPTION DE PROJET  ------------   */
    
    function description_projet_metabox_field(){
        global $post;
        
        $data = get_post_custom($post->ID);
        $val = isset($data['custom_projet_input']) ? esc_attr($data['custom_projet_input'][0]) : 'Pas de description';
        echo '<textarea type="text" name="custom_projet_input" id="custom_projet_input" style="width:100%;">'.$val.'</textarea>';
    }  

    /*      ----------  DESCRIPTION COMPETENCE DE PROJET  ------------   */

    function competences_metabox_field(){
        global $post;
        
        $data = get_post_custom($post->ID);
        $val = isset($data['custom_comp_input']) ? esc_attr($data['custom_comp_input'][0]) : 'Pas de competences';
        echo '<input type="text" name="custom_comp_input" id="custom_comp_input" value="'.$val.'" style="width:100%;" />';
    } 
    /*      ----------  DESCRIPTION COMPETENCE DE PROJET  ------------   */

    /*      ----------  ANNÉE DE PROJET  ------------   */

    function annee_metabox_field(){
        global $post;
        
        $data = get_post_custom($post->ID);
        $val = isset($data['custom_annee_input']) ? esc_attr($data['custom_annee_input'][0]) : 'Pas d année';
        echo '<input type="text" name="custom_annee_input" id="custom_annee_input" value="'.$val.'" style="width:100%;" />';
    } 
    /*      ----------  ANNÉE DU PROJET  ------------   */

    /*      ----------  CLIENT DU PROJET  ------------   */

    function client_metabox_field(){
        global $post;
        
        $data = get_post_custom($post->ID);
        $val = isset($data['custom_client_input']) ? esc_attr($data['custom_client_input'][0]) : 'Pas de client';
        echo '<input type="text" name="custom_client_input" id="custom_client_input" value="'.$val.'" style="width:100%;" />';
    } 
    /*      ----------  CLIENT DE PROJET  ------------   */

    /*      ----------  Site web URL  ------------   */

    function siteprojeturl_metabox_field(){
        global $post;
        
        
        $data = get_post_custom($post->ID);
        $val = isset($data['custom_url_input']) ? esc_attr($data['custom_url_input'][0]) : '#';
        echo '<input type="text" name="custom_url_input" id="custom_url_input" value="'.$val.'" style="width:100%;" />';
    }
    /*      ----------  Site web URL  ------------   */

    
add_action('save_post', 'save_detail');

    function save_detail(){
        global $post;
        
        if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $post->ID;
        update_post_meta($post->ID, 'custom_projet_input', $_POST['custom_projet_input']);
        update_post_meta($post->ID, 'custom_url_input', $_POST['custom_url_input']);
        update_post_meta($post->ID, 'custom_comp_input', $_POST['custom_comp_input']);
        update_post_meta($post->ID, 'custom_annee_input', $_POST['custom_annee_input']);
        update_post_meta($post->ID, 'custom_client_input', $_POST['custom_client_input']);
            }
        
        
    }

/*  ----------------  CUSTOM POST METABOX  ------------------  */

    
remove_action("wp_head", "wp_generator");


define('DISALLOW_FILE_EDIT',true);
// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_ext1', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|Roboto:300,400,700' );
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'stylebg_custom','stylebg_custom' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 20 );

// END ENQUEUE PARENT ACTION
