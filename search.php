<?php get_header() ?>

<main class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Search result for "<?php echo $_GET["s"] ?>":</h1>
                <ol class="list-group list-group-numbered">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post() ?>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
                                    <?php the_excerpt() ?>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    <?php else: ?> 
                        <p>Sorry, we didn't what you were looking for.</p>
                    <?php endif; ?>
                </ol>
            </div>
        </div>
    </div>

</main>

<?php get_footer() ?>