
    <section class="bg bg-grey">
        <div class="container">
            <div class="row">
            <div class="col-md-12 color-white">
                <h3>Newslater</h3>
            </div>
            <div class="col-xs-12 col-md-4">
                <input class="form-control" type="text" id="text-input" placeholder="Votre nom">
            </div>
            <div class="col-xs-12 col-md-4">
                <input class="form-control" type="text" id="text-input" placeholder="Votre entreprise">
            </div>
            <div class="col-xs-12 col-md-4">
                <input class="form-control" type="text" id="text-input" placeholder="Votre numéro de téléphone">
            </div>
            <div class="col-md-8">
                <textarea class="form-control" id="textarea-input" rows="5">Hello World!</textarea>
            </div>
            <div class="col-md-12">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="ex-check-2" checked="">
                    <label class="custom-control-label" for="ex-check-2">J’accepte également de recevoir des offres commerciales et promotionnelles d’Obvious.</label>
                    
                </div>
            </div>
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

            <div class="col-md-12">
                <button id="cta-home" class="btn btn-primary float-left">Envoyer !</button>
            </div>
            </div>
        </div>
    </section>

        <footer class="bg-grey border-top-primary color-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 color-secondary">
                        <h4 class="title-footer">Obvious</h4>
                        <p>Eodem tempore Serenianus ex duce, cuius ignavia populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis.</p>
                <br>
                <span>© All rights reserved  <a href="#">- Mentions Légales</a></span>
            </div>

            <div class="col-xs-12 col-md-6 color-secondary">
                <h4 class="title-footer">Nous contacter</h4>
                <p><i class="fas fa-home"></i> : 22 Quai Gallieni, 92150 Suresnes / 8:30 - 19h30 </p>
                <p><i class="fas fa-mobile-alt"></i> : +33 00 00 00 00  | <i class="far fa-envelope"></i> : contact@obvious.com </p>   
                </div>      
                </div>
            </div>
        </footer>
            <?php wp_footer(); ?>

    </body>
</html>