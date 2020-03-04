<?php
function myScripts ()
{
wp_enqueue_style('customstyle',get_template_directory_uri(). '/css/fullpage.css', array(),'1.5','all');
     wp_enqueue_style('screen',get_template_directory_uri().'/styles/sass/screen.css');
wp_enqueue_style('styles',get_template_directory_uri().'/styles/sass/styles.css');
wp_enqueue_style('fullpage',get_template_directory_uri().'/css/fullpage.css');
wp_enqueue_style('custom',get_template_directory_uri().'/css/jquery.custom-select.css');
wp_enqueue_style('mediaqueries',get_template_directory_uri().'/styles/sass/mediaqueries.css');
wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css?family=Merriweather');

wp_enqueue_script('jquery.min',get_template_directory_uri(). '/js/jquery.min.js',array(),'1.5',true);
wp_enqueue_script('custom-select',get_template_directory_uri().'/js/jquery.custom-select.js',array(),'1.5',true);
wp_enqueue_script('fullpage.min',get_template_directory_uri().'/js/fullpage.min.js',array(),'1.5',true);
wp_enqueue_script('mousewheel',get_template_directory_uri().'/js/jquery.mousewheel.min.js',array(),'1.5',true);
wp_enqueue_script('sticky-sidebar',get_template_directory_uri().'/js/sticky-sidebar.js',array(),'1.5',true);
wp_enqueue_script('jquery.sticky',get_template_directory_uri(). '/js/jquery.sticky-sidebar.js',array(),'1.5',true);
wp_enqueue_script('hashtag',get_template_directory_uri(). '/js/hashtag.js',array(),'1.5',true);
wp_enqueue_script('checkboxed',get_template_directory_uri(). '/js/checkboxed.js',array(),'1.5',true);
}

add_action( 'wp_enqueue_scripts', 'myScripts' );

function menu_shiftin(){
    add_theme_support('menus');
    register_nav_menu('primary','Shiftin menu');
    register_nav_menu('primary2','Shiftin menu 2');
    register_nav_menu('secondary','another menu');
}
add_action('init','menu_shiftin');

add_theme_support( 'post-thumbnails' );
add_theme_support('html5',array('search_form'));

// Trois articles populaires (popular reads)
//Créer un checkbox dans tous les articles
function sm_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Popular reads', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
   }
  
// récupérer l'id de l'article populaire checké
function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
 
	<p>
    <div class="sm-row-content">
        
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Article populaire', 'sm-textdomain' )?>
        </label>
        
    </div>
</p>
 
    <?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta' );


//*************************************************************************************************
// Article populaire mise en avant (popular reads)
function sm_custom_meta2() {
    add_meta_box( 'sm_meta2', __( 'Popular reads top', 'sm-textdomain' ), 'sm_meta2_callback', 'post' );
   } 
function sm_meta2_callback( $post ) {
    $featured2 = get_post_meta( $post->ID );
    ?>
 
	<p>
    <div class="sm-row-content">
        <label for="meta-checkbox2">
            <input type="checkbox" name="meta-checkbox2" id="meta-checkbox2" value="yes" <?php if ( isset ( $featured2['meta-checkbox2'] ) ) checked( $featured2['meta-checkbox2'][0], 'yes' ); ?> />
            <?php _e( 'Article populaire mise en avant', 'sm-textdomain' )?>
        </label>
        
    </div>
</p>
<script>
$('#meta-checkbox').change(function () {
        
        if ($(this).attr("checked")) {
            
            $('#meta-checkbox2').attr('disabled', true);
        } else {
            $('#meta-checkbox2').attr('disabled', false);
        }
    });
    
$('#meta-checkbox').ready(function () {
        
        if ($('#meta-checkbox').is(":checked")) {
            $('#meta-checkbox2').attr('disabled', true);
            
        } else if($('#meta-checkbox').is(":not(:checked)")){
            $('#meta-checkbox2').attr('disabled', false);
        }
    });    
    
$('#meta-checkbox2').change(function () {
        if ($(this).attr("checked")) {
            
            $('#meta-checkbox').attr('disabled', true);
        } else {
            
            $('#meta-checkbox').attr('disabled', false);
        }
    });  
    $('#meta-checkbox2').ready(function () {
        if ($('#meta-checkbox2').is(":checked")) {
            
            $('#meta-checkbox').attr('disabled', true);
        } else if($('#meta-checkbox2').is(":not(:checked)")){
            
            $('#meta-checkbox').attr('disabled', false);
        }
    });
    </script>
 
    <?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta2' );



// Sauvegarder les états du Checkbox des trois articles populaires (popular reads)
function sm_meta_save( $post_id ) {
 
    // Vérifier les états du sauvegarde
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Quitter le script en fonction de l'état de sauvegarde
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Vérifier les entrées et les sauvegardes
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox', '' );
}
 
}
add_action( 'save_post', 'sm_meta_save' );

// Sauvegarder les états du Checkbox de l'article populaire mise en avant (popular reads)
function sm_meta2_save( $post_id ) {
 
    // Vérifier les états du sauvegarde
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Quitter le script en fonction de l'état de sauvegarde
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Vérifier les entrées et les sauvegardes
if( isset( $_POST[ 'meta-checkbox2' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox2', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox2', '' );
}
 
}
add_action( 'save_post', 'sm_meta2_save' );

//Couleurs des catégories *****************************************************************************************************************************************
/**
 * Add new colorpicker field to "Add new Category" screen
 * - https://developer.wordpress.org/reference/hooks/taxonomy_add_form_fields/
 *
 * @param String $taxonomy
 *
 * @return void
 */
function colorpicker_field_add_new_category( $taxonomy ) {

  ?>

    <div class="form-field term-colorpicker-wrap">
        <label for="term-colorpicker">Category Color</label>
        <input name="_category_color" value="#ffffff" class="colorpicker" id="term-colorpicker" />
        <p>Choose a background color for this category.</p>
    </div>

  <?php

}
add_action( 'category_add_form_fields', 'colorpicker_field_add_new_category' );  // Variable Hook Name



/**
 * Add new colopicker field to "Edit Category" screen
 * - https://developer.wordpress.org/reference/hooks/taxonomy_add_form_fields/
 *
 * @param WP_Term_Object $term
 *
 * @return void
 */
function colorpicker_field_edit_category( $term ) {

    $color = get_term_meta( $term->term_id, '_category_color', true );
    $color = ( ! empty( $color ) ) ? "#{$color}" : '#ffffff';

  ?>

    <tr class="form-field term-colorpicker-wrap">
        <th scope="row"><label for="term-colorpicker">Severity Color</label></th>
        <td>
            <input name="_category_color" value="<?php echo $color; ?>" class="colorpicker" id="term-colorpicker" />
            <p class="description">Choose a background color for this category.</p>
        </td>
    </tr>

  <?php


}
add_action( 'category_edit_form_fields', 'colorpicker_field_edit_category' );   // Variable Hook Name




/**
The below function will sanitize and save the term meta without the # but there is a separate function which will sanitize it with the hash called sanitize_hex_color():
 * Term Metadata - Save Created and Edited Term Metadata
 * - https://developer.wordpress.org/reference/hooks/created_taxonomy/
 * - https://developer.wordpress.org/reference/hooks/edited_taxonomy/
 *
 * @param Integer $term_id
 *
 * @return void
 */
function save_termmeta( $term_id ) {

    // Save term color if possible
    if( isset( $_POST['_category_color'] ) && ! empty( $_POST['_category_color'] ) ) {
        update_term_meta( $term_id, '_category_color', sanitize_hex_color_no_hash( $_POST['_category_color'] ) );
    } else {
        delete_term_meta( $term_id, '_category_color' );
    }

}
add_action( 'created_category', 'save_termmeta' );  // Variable Hook Name
add_action( 'edited_category',  'save_termmeta' );  // Variable Hook Name



/**
 * Enqueue colorpicker styles and scripts.
 * - https://developer.wordpress.org/reference/hooks/admin_enqueue_scripts/
 *
 * @return void
 */
function category_colorpicker_enqueue( $taxonomy ) {

    if( null !== ( $screen = get_current_screen() ) && 'edit-category' !== $screen->id ) {
        return;
    }

    // Colorpicker Scripts
    wp_enqueue_script( 'wp-color-picker' );

    // Colorpicker Styles
    wp_enqueue_style( 'wp-color-picker' );

}
add_action( 'admin_enqueue_scripts', 'category_colorpicker_enqueue' );



/**
 * Print javascript to initialize the colorpicker
 * - https://developer.wordpress.org/reference/hooks/admin_print_scripts/
 *
 * @return void
 */
function colorpicker_init_inline() {

    if( null !== ( $screen = get_current_screen() ) && 'edit-category' !== $screen->id ) {
        return;
    }

  ?>

    <script>
        jQuery( document ).ready( function( $ ) {

            $( '.colorpicker' ).wpColorPicker();

        } ); // End Document Ready JQuery
    </script>

  <?php

}
add_action( 'admin_print_scripts', 'colorpicker_init_inline', 20 );

function the_category_colors() {
 $categories = get_the_category();
    $color = get_term_meta( $category->term_id, '_category_color', true );
    $color = ( ! empty( $color ) ) ? "#{$color}" : '#000000';
 $separator = '';
 $output = '';
 if($categories){
     foreach($categories as $category) {
         $output .= '<span class="post-category" style="background-color: #'.  get_term_meta( $category->term_id, '_category_color', true ) . '; "><a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a></span>'.$separator;
     }
     echo trim($output, $separator);
 }
}

/***************************************************************************************************************************************/

function new_contact_methods( $contactmethods ) {
    $contactmethods['job'] = 'Job';
    return $contactmethods;
}
add_filter( 'user_contactmethods', 'new_contact_methods' );


function new_modify_user_table( $column ) {
    $column['job'] = 'Job';
    return $column;
}
add_filter( 'manage_users_columns', 'new_modify_user_table' );

function new_modify_user_table_row( $val, $column_name, $user_id ) {
    switch ($column_name) {
        case 'job' :
            return get_the_author_meta( 'job', $user_id );
        default:
    }
    return $val;
}
add_filter( 'manage_users_custom_column', 'new_modify_user_table_row');

function addtoany_add_share_services( $services ) {
    $services['example_share_service'] = array(
        'name'        => 'Example Share Service',
        'icon_url'    => 'http://raouf-cv.com/wp-content/tehmes/shiftin/images/rs_g.svg',
        'icon_width'  => 32,
        'icon_height' => 32,
        'href'        => 'https://www.example.com/share?url=A2A_LINKURL&title=A2A_LINKNAME',
    );
    return $services;
}
add_filter( 'A2A_SHARE_SAVE_services', 'addtoany_add_share_services', 10, 1 );
