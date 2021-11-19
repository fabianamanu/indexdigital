
<?php get_header(); ?>
<div>
  
</div>

<div class="container-fluid home">
    <main>
        <br>
        <h1 class="display-6 text-center mb-4">PS4 & PS5</h1>
        <div class="row ">
            <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
                <div class="col-6 col-md-4">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header ">
                            <h4 class="my-0 fw-normal"><?php the_title(); ?></h4>
                        </div>
                            <div class="card-body">
                                <a href="<?php the_permalink() ?>"> 
                                    <?php the_post_thumbnail('post-thumbnail',array('class' => 'img-fluid')); ?>
                                </a>
                                
                                <a href="<?php the_permalink() ?>"> 
                                    <button type="button" class="w-100 btn btn-lg btn-primary">Veja mais</button>
                                </a>
                            </div>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <p>Não existe nenhum produto no momento!</p>
            <?php endif; ?>
        </div>
     </main>
</div>

 <?php get_footer(); ?>


 