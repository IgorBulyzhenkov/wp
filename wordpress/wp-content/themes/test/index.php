<?php get_header() ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex flex-wrap justify-content-center">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()): the_post(); ?>

                        <div class="col-md-3 me-2">
                            <div class="card mb-5" style="min-height: 650px;">

                                <div class="card-header" style="min-height: 75px;">
                                    <a href="<?php the_permalink(); ?>">
                                        <h5 class="card-title"><?= the_title(); ?> </h5>
                                    </a>
                                </div>

                                <div class="card-body">
                                    <div class="img" style="min-height: 185px;
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: center;">
                                        <?php if (has_post_thumbnail()) : ?>

                                            <?php the_post_thumbnail(array(250, 250), array('class' => 'float-left-mr3')); ?>

                                        <?php else: ?>
                                            <img src="https://picsum.photos/1275/638" class="float-left-mr3" alt="test" width="250" height="250">
                                        <?php endif; ?>
                                    </div>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                </div>

                                <div class="card-footer">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Submit</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>Постов нет....</p>
                <?php endif; ?>
            </div>
            <div>
                <?php the_posts_pagination(array(
                    'type' => 'list'
                )); ?>
            </div>
        </div>

        <?php get_sidebar() ?>

    </div>


</div>

<?php get_footer() ?>
