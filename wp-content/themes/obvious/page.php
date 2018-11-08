<?php get_header(); ?><!-- Ouvre le header -->


<main class="mainsite_global prechargement__anim--fade-in-up prechargement__anim--del">

<section class="landing">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="landing--background">
                        <?php if ($thumbnail_html = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' )) :
                        $thumbnail_src = $thumbnail_html['0']; ?>
                            <img class="landing_background--img" src="<?php echo $thumbnail_src; ?>" alt="image du projet" >
                        <?php 
                        endif; ?>
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
    <!-- Section présentation avec titre h1 -->
    <section class="landing container">

       <div class="landing--pic-perso-main"></div>
        <h1 class="presentation--title">
          <span><b>Présentation</b></span>
          <span><p class="presentation--texte">«Digital native seine-et-marnais (77) enthousiaste et passionné à la curiosité débordante, je suis spécialisé en UX et UI Design. 
J'apporte des solutions et conçois des interfaces pour permettre d'améliorer l'expérience client/utilisateur.»</p></span>
      </h1>

    </section>
    <section>  
        <div>
        <?php the_content(); ?>
        </div>
    </section>
    <!--    Methodologie parcours    -->
    <section class="methodo">
            <div class="container">
                <h2 class="methodo--title">Une méthologie à l'image de mon parcours</h2>
                <div class="methodo__items">
                    <article class="methodo--item">
                        <div class="methodo__pic methodo__pic--com">
                            <div class="methodo__pic--container"><img src="../wp-content/themes/portfoliobg/img/ico-method-gestion-projet.png" alt="" class="methodo__pic--inner"></div>
                        </div>
                        <div class="methodo__content">
                            <div class="methodo__content--inner">
                                <h3 class="methodo__content--title">Communication / Gestion de projet</h3>
                                <p class="methodo__content--txt">Mes deux années en BTS communication au CFA IGS et mes expériences professionnelles m'ont permis d'acquérir des réflexes lors de la récéption d'un projet. Cela commence par s'approprier le sujet grâce à l'étude du marché et de la concurrence (benchmark), définir les problématiques du clients réaliste, les cibles, le retro-planning...  </p>
                            </div>
                        </div>
                    </article>
                    <!--     UX Design     -->
                    <article class="methodo--item">
                        <div class="methodo__pic methodo__pic--ux">
                            <div class="methodo__pic--container"><img src="../wp-content/themes/portfoliobg/img/ico-method-ux-design.png" alt="" class="methodo__pic--inner"></div>
                        </div>
                        <div class="methodo__content">
                            <div class="methodo__content--inner">
                                <h3 class="methodo__content--title">UX Design</h3>
                                <p class="methodo__content--txt">Après une formation et documentation approfondie sur l'expérience utilisateur, j'ai pris pour habitude de toujours définir un persona à chaque projet et de définir ses besoins. C'est sur cette nécéssité que je vais baser le parcours utilisateurs dans le but d'y répondre de façons simplifié et logique. Évidemment cette approche est toujours accompagné de test utilisateurs.  </p>
                            </div>
                        </div>
                    </article>
                    <!--     UI Design     -->
                    <article class="methodo--item">
                        <div class="methodo__pic methodo__pic--ui">
                            <div class="methodo__pic--container"><img src="../wp-content/themes/portfoliobg/img/ico-method-uidesign.png" alt="" class="methodo__pic--inner"></div>
                        </div>
                        <div class="methodo__content">
                            <div class="methodo__content--inner">
                                <h3 class="methodo__content--title">UI Design</h3>
                                <p class="methodo__content--txt">Étant à la base très intéressé par le graphisme, le métier de Webdesigner m'a parut être une évidence. Dans la plupart de mes projets, l'étape de la mise en page commence généralement par une période d'inspiration et ensuite de création depuis Sketch ou Adobe XD </p>
                            </div>
                        </div>
                    </article>
                    <!--     Integration     -->
                    <article class="methodo--item">
                        <div class="methodo__pic methodo__pic--integration">
                            <div class="methodo__pic--container"><img src="../wp-content/themes/portfoliobg/img/ico-method-integration.png" alt="" class="methodo__pic--inner"></div>
                        </div>
                        <div class="methodo__content">
                            <div class="methodo__content--inner">
                                <h3 class="methodo__content--title">Intégration</h3>
                                <p class="methodo__content--txt">Toujours dans une logique d'évolution de mes compétences, je ne cesse d'apprendre et j'ai de nombreuses fois été amené à faire de l'intégration avec des languages comme : HTML5, CSS3, JQuery. Sans parler de maîtrise, j'ai de bonnes notions en javascript et dans le framework ReactJS. </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
    </section>
    <!--       Compétences      -->
    <section class="competences">
        <div class="container">
            <h2 class="competences--title">Mes compétences / logiciels</h2>
            <div class="competences__items">
                <article class="competences__item">
                    <div class="compentences--title__container"><h4 class="competences__item--title">Technologies maitrisées</h4></div>
                    <div class="competences__content">
                        <div class="competences__content--logiciels">
                            <ul>
                                <ul><b>Logiciels</b></ul>
                                <li>Sketch</li>
                                <li>Adobe XD</li>
                                <li>Photoshop</li>
                                <li>Illustrator</li>
                                <li>Indesign</li>
                                <li>After effect</li>
                                <li>Première pro</li>
                                <li>...</li>
                            </ul>
                        </div>
                        <div class="competences__content--dev">
                            <ul>
                                <ul><b>Dev. front</b></ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>Jquery</li>
                                <li>Tweenmax</li>
                                <li>Wordpress</li>
                                <li>Prestashop</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="competences__item">
                    <div class="compentences--title__container"><h4 class="competences__item--title">Compétences maitrisés / À venir</h4></div>
                    <div class="competences__content">
                        <div class="competences__content--comp">
                            <ul>
                                <ul><b>Compétences</b></ul>
                                <li>Communication</li>
                                <li>Gestion de projet</li>
                                <li>Rédaction</li>
                                <li>Motion design</li>
                                <li>Maquettage / Wireframes</li>
                                <li>Ergonomie Web (UX/UI)</li>
                                    <ul><b>Création</b></ul>
                                    <li>Identité de marque</li>
                                    <li>Support de com</li>
                                    <li>Illustration</li>
                            </ul>
                        </div>
                        <div class="competences__content--avenir">
                            <ul>
                                <ul><b>À venir - Dev. front</b></ul>
                                <li><i>Javascript (en cours)</i></li>
                                <li><i>ReactJS (en cours)</i></li>
                                <li><i>VueJS (à venir)</i></li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!--    PASSIONS    -->
    <section class="passions">
       <div class="container">
        <h2 class="passions__title">Mes passions</h2>
        <div class="passions__items">
            <article class="passions__item">
                <div class="passion__item--pic"><img src="../wp-content/themes/portfoliobg/img/ico-passions-foot.png" alt=""></div>
                <div class="passion__item--txt">
                    <p><b>Football américain</b></p>
                    <p>6 ans de pratique</p>
                </div>
            </article>
            <article class="passions__item">
                <div class="passion__item--pic"><img src="../wp-content/themes/portfoliobg/img/ico-passions-muscu.png" alt=""></div>
                <div class="passion__item--txt">
                    <p><b>Musculation</b></p>
                    <p>4 ans de pratique</p>
                </div>
            </article>
            <article class="passions__item">
                <div class="passion__item--pic"><img src="../wp-content/themes/portfoliobg/img/ico-passions-medias.png" alt=""></div>
                <div class="passion__item--txt">
                    <p><b>Radio, musique, cinema, <br> jeux-video, apprentissage</b></p>
                </div>
            </article>
        </div>
        </div>
    </section>
    <!--    MOTIONS DESIGN    -->
    <section class="petit-bonus">
       <div class="container">
        <h2 class="petit-bonus__title">Bonus</h2>
        <div class="petit-bonus__items">
            <h3>MOTION DESIGN</h3>
            <p>Passionné par le design et par la vidéo, il m'arrive souvent de créer des vidéos Motions Design dans le cadre de mes projets ou de mission en indépendant.</p>
            <article class="petit-bonus__item">
                <div class="petit-bonus__item--video"><iframe src="https://player.vimeo.com/video/242446757" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </article>
            <article class="petit-bonus__item">
                <div class="passion__item--video"><iframe src="https://player.vimeo.com/video/242447815" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </article>
            <article class="petit-bonus__item">
                <div class="passion__item--video"><iframe src="https://player.vimeo.com/video/263734997" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </article>
        </div>
        </div>
    </section>
</main>


<?php get_footer(); ?><!-- Ouvre le footer -->