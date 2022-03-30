<?php get_header() ?>

    <main>
        <div id="hero" class="px-4 py-5 text-center">
            <h1 class="display-5 fw-bold"><?php bloginfo("name") ?></h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4"><?php bloginfo("description") ?></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-9 mb-5">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post() ?>
                            <?php the_content() ?>
                        <?php endwhile; ?>
                    <?php else: ?>

                    <?php endif; ?>
                    <div class="container-fluid p-0 pt-3">
                        <div class="row">
                            <div class="col-4 p-0">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/images/hotel1.jpg" alt="">
                            </div>
                            <div class="col-4 p-0">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/images/hotel2.jpg" alt="">
                            </div>
                            <div class="col-4 p-0">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/images/hotel3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/map.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hotel CMS</h5>
                            <p class="card-text">
                            <address>
                                Spangsbjerg Kirkevej 103<br>
                                6700 Esbjerg<br>
                                Denmark
                            </address>
                            <a target="_blank" href="https://www.google.com/maps/dir//Business+Academy+South+West,+Spangsbjerg+Kirkevej+103,+6700+Esbjerg/@55.4884327,8.3768397,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x464b20de04044937:0x93f28cf042117583!2m2!1d8.4470501!2d55.4884528" class="btn btn-primary">Get driving directions</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

<?php get_footer() ?>