<?php get_header() ?>

    <div class="container">
        <div class="row">

                <?php while (have_posts()): the_post(); ?>
                    <div class="col-md-12">
                        <div class="card mb-5">
                            <img src="" alt="card image cap" class="card-img-top">
                            <div class="card-body">
                                    <h5 class="card-title"><?= the_title(); ?> </h5>

                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Submit</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

        </div>
    </div>

<?php get_footer() ?>