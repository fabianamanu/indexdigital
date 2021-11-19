<?php
get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php while ( have_posts() ) : the_post();
                  
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <a href="<?php the_permalink() ?>"> 
                                <?php the_post_thumbnail('post-thumbnail',array('class' => 'img-fluid')); ?>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <h4 class="my-2 fw-normal"><?php the_title(); ?></h4>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <?php
                                      if ( is_singular( 'attachment' ) ) {
                                        the_post_navigation(
                                            array(
                                                'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
                                            )
                                        );
                                    } 
                                    if ( comments_open() || get_comments_number() ) {
                                        comments_template();
                                    }
                                ?>
                            </div>
                           
                        </div>
                    </div>
                </div>
                            
            
            
            <?php endwhile;?>

		</main>
	</div>

<?php
get_footer();
