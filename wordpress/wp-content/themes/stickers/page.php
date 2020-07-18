<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<!-- Content -->
<section class="page">
    <div class="page__container container">
        <div class="page__row row">
            <div class="page__column column">
                <h2 class="page__title heading"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="page__row row">
            <div class="page__column column">
                <div class="page__content text">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End content -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>