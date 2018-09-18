<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <body>
        
        <?php get_header();?>
        
        <h2>Xesque do bresque</h2>
        
        <?php
            if ( have_posts() ) {
                while (have_posts()){
                    the_post();
                    the_title();
                    the_excerpt();
                }
            }
        ?>
        
        <div class="col-md-4">
            
            <h3><?php the_tittle(); ?></h3>
            <div class="img-responsive img-thumbnail foto"><?php the_post_thumbnail(); ?></div>
            <p><?php the_excerpt(); ?></p>
            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Leia Mais</a>
        </div>
        
        <?php
        
            $cont = 0;
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        $cont++;
                    if($cont <= 3){
        ?>
        
            <div class="col-md-4">
                
                <h3><?php the_title(); ?></h3>
                <div class="img_responsive img-thumbnail foto"><?php the_post_thumbnail(); ?></div>
                <p><?php the_excerpt(); ?></p>
                
            </div>
            
        <?php
        
                    }}}
                    
        ?>
        
        <div class="col-md-4">
            
            <h3><?php the_title(); ?></h3>
            <div clas="img-responsive img-thumbnail foto"><?php the_post_thumbnail(); ?></div>
            <p><?php the_excerpt(); ?></p>
            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Leia Mais</a>
            
        </div>
        
        <?php get_footer();?>
        
    </body>
</html>