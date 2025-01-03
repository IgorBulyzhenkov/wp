<?php get_header() ?>

<div class="container">
    <div class="row">

        <?php while (have_posts()): the_post(); ?>
            <div class="col">
                <div class="card mb-5">
                    <?php if (has_post_thumbnail()) : ?>

                        <?php the_post_thumbnail('large', array(
                            'alt' => the_title()
                        )); ?>

                    <?php else:  ?>
                        <img src="https://picsum.photos/1275/638" alt="test">
                    <?php endif; ?>

                    <div class="card-body">
                        <h1 class="card-title"><?= the_title(); ?> </h1>

                        <p class="card-text"><?php the_content(''); ?></p>
                    </div>

                    <?php the_field('name_test'); ?>

                </div>
            </div>
        <?php endwhile; ?>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer() ?>
