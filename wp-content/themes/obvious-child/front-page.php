<?php get_header(); ?><!-- Ouvre le header -->


<main class="mainsite_global prechargement__anim--fade-in-up prechargement__anim--del">

<section class="landing">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="landing--background">
                        <div class="landing--superpose">
                        <?php 

                        $image = get_field('landing_image_homepage');

                        if( !empty($image) ): ?>

                            <img class="landing_background--img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>
                        </div>
            <div class="landing_content container">
                <h1 class="landing--title"><?php the_field('landing_titre_homepage') ?></h1>
                <p class="landing--texte"><?php the_field('landing_texte_homepage') ?> </p>
            </div>
                </div>               
                <?php endwhile; ?> 
            <?php else: ?>
                <h2>Pas de résultat désolé !</h2>
            <?php endif; ?>
</section>
<div class="container news">
                <h3 class="news--title">Projets</h3>
                <div class="news_items">
                <?php query_posts('showposts=4');?>

                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                       <article class="news_item" id="post-<?php the_ID(); ?>">
                                <div class="news_item__content">
                                   <header class="news_content--header">
                                   <span class="news--categorie"><?php the_category(' ') ?></span>
                                       <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <h4><?php the_title(); ?></h4>
                                       </a>
                                   </header>
                                    <a class="news_excerpt" href="<?php the_permalink(); ?>">                                           
                                        <div class="news--traitsdesc"><span class="news--date"><?php echo get_the_date('d-m-Y'); ?></span></div>
                                        <?php the_excerpt(); ?>
                                    </a>
                                   <footer class="news_content">
                                   <div class="btn">
                                        <div class="btn-outline">
                                        <a class="btn btn-outline-primary">LIRE LA SUITE</a> 
                                        </div>
                                    </div>
                                   </footer>
                                </div>
                                <div class="news_item__pic">
                                    <a href="<?php the_permalink(); ?>" class="news_pic--link">
                                        <?php if ($thumbnail_html = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '400x400' )) :$thumbnail_src = $thumbnail_html['0']; ?>
                                            <img class="news_pic--img" src="<?php echo $thumbnail_src; ?>" alt="image du <?php the_title(); ?>" >
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
    <section class="solutions">  
        <div class="container">
            <div class="solutions_content">
                <div class="solution_content--left">           
                    <span class="solution_content-bignumber">0</span>
                    <p class="solution--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis erat sagittis, vehicula sem aliquam, facilisis orci. Nam mi odio, tincidunt sed ante non, ullamcorper ornare metus. Aliquam sodales sit amet justo eu efficitur. Cras ligula felis, suscipit sit amet orci et, pharetra venenatis lacus. Mauris et ultricies eros. Pellentesque dolor erat, eleifend at vestibulum a, sagittis sit amet lacus. Aliquam dolor quam, hendrerit lobortis condimentum eget, blandit a enim. Donec posuere dolor sit amet ligula consequat, sit amet luctus justo facilisis.</p>   
                </div>
                <div class="solution_content--right">
                    <div class="solution_image">
                        <img src="../wp-content/themes/obvious-child/img/FindSuspect10.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="landing_solution">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="landing_solution--background">
                        <div class="landing_solution--superpose">
                        <?php 

                        $image = get_field('landing_solution_video_homepage');

                        if( !empty($image) ): ?>

                            <img class="landing_background--img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>
                        </div>
            <div class="landing_solution_content container">
                <h1 class="landing--title"><?php the_field('landing_solution_titre_homepage') ?></h1>
                <p class="landing--texte"><?php the_field('landing_solution_texte_homepage') ?> </p>
            </div>
                </div>               
                <?php endwhile; ?> 
            <?php else: ?>
                <h2>Pas de résultat désolé !</h2>
            <?php endif; ?>
    </section>
</main>


<?php get_footer(); ?><!-- Ouvre le footer -->