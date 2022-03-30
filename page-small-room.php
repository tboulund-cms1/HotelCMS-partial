<?php get_header() ?>

<main class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                        <h1><?php the_title() ?></h1>
                        <p><?php the_content() ?></p>
                    <?php endwhile; ?>
                <?php else: ?>

                <?php endif; ?>
            </div>
            <div class="col-9">
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/room-small-1.jpg" class="d-block w-100" alt="Picture of room">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/room-small-2.jpg" class="d-block w-100" alt="Picture of room">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-info mb-3">
                    <div class="card-header">Room information</div>
                    <div class="card-body">
                        <dl class="row m-0 p-0">
                            <dt class="col-12">Price per night</dt>
                            <dd class="col-12">500 DKK</dd>

                            <dt class="col-12">Number of beds</dt>
                            <dd class="col-12">1</dd>

                            <dt class="col-12">Size</dt>
                            <dd class="col-12">16 m2</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer() ?>