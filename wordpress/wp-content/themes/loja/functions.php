<?php

function themebs_enqueue_styles() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');
function themebs_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js',
  array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');

//definindo  miniaturas de  imagem post
add_theme_support('post-thumbnails');

//funçoes de personalização 
require get_template_directory(). '/inc/customizer.php';

//formulario de comentarios 
function theme_queue_js(){
    if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ) wp_enqueue_script('comment-reply');
}
add_action('wp_print_scripts','theme_queue_js');
//comentarios ajustar
function format_comment($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment; ?>

    <div <?php comment_class('ml-4'); ?> id="comment-<?php comment_ID(); ?>">

        <div class="card mb-3">
            <div class="card-body">

            <div class="comment-intro">

                <h5 class="card-title"><?php printf(__('%s'), get_comment_author_link()) ?></h5>
                <h6 class="card-subtitle mb-3 text-muted">Data: <?php printf(__('%1$s'), get_comment_date('d/m/y'), get_comment_time()) ?></h6>
            
            </div>

            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>

            </div>
        </div>

    <?php

}



?>