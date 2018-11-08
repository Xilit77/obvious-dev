<?php get_header(); ?><!-- Ouvre le header -->


<div class="page--post">
    <?php portfoliobg_post_nav(); ?>
</div>
<div class="container">
    <article class="container--projets" id="post-<?php the_ID(); ?>">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>

                <h2 class="projets--title">
                    <a href="<?php $custom_post_type = get_post_meta($post->ID, 'custom_url_input', true); echo $custom_post_type; ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h2>

                <p class="projets--cat">   
                    <?php the_category(' ') ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>   
                </p>
                <div class="projets--images">
                    <a href="<?php $custom_post_type = get_post_meta($post->ID, 'custom_url_input', true); echo $custom_post_type; ?>" class="">
                        <?php if ($thumbnail_html = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' )) :
                        $thumbnail_src = $thumbnail_html['0']; ?>
                            <img class="img-projets" src="<?php echo $thumbnail_src; ?>" alt="image du projet" >
                        <?php 
                        endif; ?>
                    </a>
                </div>
                <div class="projets__descriptions">
                    <div class="projets__descriptions__item">
                        <p class="projets__descriptions__item--texte">
                        <?php $custom_post_type = get_post_meta($post->ID, 'custom_projet_input', true);echo $custom_post_type;?>
                        </p>
                    </div>
                    <div class="projets__descriptions__item">
                        <p class="projets__descriptions__item--tags">
                            <?php the_tags('<b>Compétences : </b>',' , ',''); ?> , <?php $custom_post_type = get_post_meta($post->ID, 'custom_comp_input', true);echo $custom_post_type;?>
                        </p><br>
                        <p class="projets__descriptions__item--tags">
                            <b>Année(s) :</b> <?php $custom_post_type = get_post_meta($post->ID, 'custom_annee_input', true);echo $custom_post_type;?>
                        </p> <br>
                        <p class="projets__descriptions__item--tags">
                            <b>Client(s) :</b> <?php $custom_post_type = get_post_meta($post->ID, 'custom_client_input', true);echo $custom_post_type;?>
                        </p><br>
                    </div>
                </div>
                
    </article>
</div>
 <article class="container--projets--content">
        <div class="projets--content container">
                    <p>
                        <?php the_content(); ?>
                    </p>
                                        
                <?php endwhile; ?> 
            <?php else: ?>
                <h2>Pas de résultat désolé !</h2>
            <?php endif; ?>
                           
            <?php portfoliobg_post_nofixe_nav(); ?>

        </div>
</article>

<?php get_footer(); ?><!-- Ouvre le footer -->