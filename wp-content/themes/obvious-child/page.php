<?php get_header(); ?><!-- Ouvre le header -->


<main class="mainsite_global prechargement__anim--fade-in-up prechargement__anim--del">

<section class="landing">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="landing--background">
                        <div class="landing--superpose">
                        <?php if ($thumbnail_html = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' )) :
                        $thumbnail_src = $thumbnail_html['0']; ?>
                            <img class="landing_background--img" src="<?php echo $thumbnail_src; ?>" alt="image du projet" >
                        <?php 
                        endif; ?>
                        </div>
            <div class="landing_content container">
                <h1 class="landing--title">OBVIOUS</h1>
                <p class="landing--texte"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione facilis </p>
            </div>
                </div>               
                <?php endwhile; ?> 
            <?php else: ?>
                <h2>Pas de résultat désolé !</h2>
            <?php endif; ?>
</section>
    <section>  
        <div>
            <?php the_content(); ?>
        </div>
    </section>
</main>


<?php get_footer(); ?><!-- Ouvre le footer -->