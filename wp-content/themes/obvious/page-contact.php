<?php
/*
Template name: Contact
*/

get_header(); ?><!-- Ouvre le header -->


<main class="mainsite_global">

    <!-- Section présentation avec titre h1 -->
    <section class="presentation container">

      <h1 class="presentation--title">
          <span><b>Contact</b></span>
          <span class="email--contact"><p>geneixbastien@gmail.com</p></span>
          <span><p>06.40.64.67.97</p></span>
      </h1>

    </section>
    <section class="formulaire__contact">   
        <div class="container">
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                // Include the page content template.
                get_template_part( 'content', 'page' );

                the_content();
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            // End the loop.
            endwhile;
            ?>
        </div>
    </section>

</main>


<?php get_footer(); ?><!-- Ouvre le footer -->