<?php get_header(); ?><!-- Ouvre le header -->


<!--    Projets-pro vignettes article    -->
<section class="projets-pro">
        <div class="container">
            <h2 class="projets-pro--title">Projets</h2>
            <div class="projets-pro__items">
            <?php query_posts('showposts=25');?>

            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                   <article class="projets-pro__item" id="post-<?php the_ID(); ?>">
                            <div class="projets-pro__item__content">
                               <header class="projets-pro__content--header">
                                   <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                       <h3><?php the_title(); ?></h3>
                                   </a>
                                   <span class="projets-pro__competences--categorie"><?php the_category(' ') ?></span>
                               </header>
                               <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                               <footer class="projets-pro__content--competences">
                                   <span class="projets-pro__competences--tag"> <?php the_tags('  '); ?></span>
                               </footer>
                            </div>
                            <div class="projets-pro__item__pic">
                                <a href="<?php the_permalink(); ?>" class="projets-pro__pic--link">
                                    <?php if ($thumbnail_html = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '400x400' )) :$thumbnail_src = $thumbnail_html['0']; ?>
                                        <img class="projets-pro__pic--img" src="<?php echo $thumbnail_src; ?>" alt="image du <?php the_title(); ?>" >
                                    <?php 
                                    endif; ?>
                                </a>
                            </div>
                       </article>
                <?php endwhile; ?> 
            <?php else: ?>
                <h2>Pas de résultat désolé !</h2>
            <?php endif; ?>
            </div>

    </div>
</section>

<?php get_footer(); ?><!-- Ouvre le footer -->
