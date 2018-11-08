<?php get_header(); ?><!-- Ouvre le header -->


<main class="mainsite_global prechargement__anim--fade-in-up prechargement__anim--del">

    <!-- Section présentation avec titre h1 -->
    <section class="presentation container">
      <div class="presentation--pic-perso-main"></div>
      <h1 class="presentation--title">
          <span>OBVIOUS</span>
          <span><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure </b></span>
          <a href="#">+ Intégrateur</a>
      </h1>

    </section>

        <!-- Section expériences professionnel -->
    <section class="experience-pro">
      <div class="experience-pro--line-design"></div>
      <div class="container">    
          <h2 class="experience-pro--title">Expérience professionnel</h2> 

          <!-- Article experience pro 1 (gauche à droite 1 -> 3 ) --> 
          <div class="experience-pro__items">
              <article class="experience-pro__item">
                 <header class="experience-pro__header">
                     <span>2016</span>
                     <h3 class="experience-pro__header--title font-xl">2018</h3>
                 </header>
                 <div class="experience-pro__content">
                     <p class="font-m"><b>SNCF, Agence communication RH</b></p>
                 </div>
                 <footer class="experience-pro__footer">
                     <p>Chargé de communication</p>
                 </footer>
              </article>

              <!-- Article experience pro 1 (gauche à droite 2 -> 3 ) -->     
              <article class="experience-pro__item">
                 <header class="experience-pro__header">
                     <span>2014</span>
                     <h3 class="experience-pro__header--title font-xl">2016</h3>
                 </header>
                 <div class="experience-pro__content">
                     <p class="font-m"><b>Groupe Accédia, Septam</b></p>
                 </div>
                 <footer class="experience-pro__footer">
                     <p>Assistant de communication</p>
                 </footer>
              </article>

              <!-- Article experience pro 3 (gauche à droite 1 -> 3 ) -->     
              <article class="experience-pro__item">
                 <header class="experience-pro__header">
                     <span>2013</span>
                     <h3 class="experience-pro__header--title font-xl">2014</h3>
                 </header>
                 <div class="experience-pro__content ">
                     <p class="font-m"><b>77fm la radio</b></p>
                 </div>
                 <footer class="experience-pro__footer">
                     <p>Graphiste/Designer</p>
                 </footer>

              </article>
          </div>
          <div class="btn">
                <a href="<?php echo get_template_directory_uri(); ?>/img/CV_bastiengeneix_2018.pdf" class="btn__link">Mon CV
                    <span class="btn__link--boxwhite btn--boxwhite--1"></span>
                    <span class="btn__link--boxwhite btn--boxwhite--2"></span>
                    <span class="btn__link--boxwhite btn--boxwhite--3"></span>
                </a>
          </div>
      </div>
    </section>

    <!--    Projets-pro vignettes article    -->
    <section class="projets-pro">
            <div class="container">
                <h2 class="projets-pro--title">Projets</h2>
                <div class="projets-pro__items">
                <?php query_posts('showposts=6');?>

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

                <div class="btn">
                    <a href="http://bastiengeneix.yj.fr/portfolio/projets/" class="btn__link">Plus de projets
                        <span class="btn__link--boxwhite btn--boxwhite--1"></span>
                        <span class="btn__link--boxwhite btn--boxwhite--2"></span>
                        <span class="btn__link--boxwhite btn--boxwhite--3"></span>
                    </a>
                </div>
            </div>
    </section>


</main>


<?php get_footer(); ?><!-- Ouvre le footer -->