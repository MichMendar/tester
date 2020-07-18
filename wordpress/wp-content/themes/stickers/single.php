<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<!-- Content -->
<section class="single">
    <div class="single__container container">
        <div class="single__row row">
            <div class="single__column column">
                <h2 class="single__title heading"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="single__row row">
            <div class="single__column column">
                <div class="single__content text">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End content -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>