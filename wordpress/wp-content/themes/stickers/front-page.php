<?php get_header(); ?>

<div class="main-container container">
    <div class="row row--space-between">

        <!-- Content -->
        <div class="content column column--3-2-space">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <section id="information" class="information">
                    <div class="information__header">
                        <div class="row">
                            <div class="column column--4-3">
                                <?= get_field('information_top_text', $post->ID); ?>
                                <h1>
                                    <?= get_field('information_title', $post->ID); ?>
                                </h1>
                            </div>
                            <div class="column column--4 hide-mobile">
                                <?php
                                $informationImageArrow = get_field('information_top_image');
                                ?>
                                <img src="<?= $informationImageArrow['url'] ? $informationImageArrow['url'] : get_template_directory_uri().'/dist/images/Arrow.png'; ?>" alt="<?php $informationImageArrow['alt'] ? $informationImageArrow['alt'] : __('love stickers arrow', 'bls_theme'); ?>">
                            </div>
                        </div>                
                    </div>
                    <div class="information__content">
                        <?= get_field('information_content', $post->ID); ?>
                    </div>
                    <div class="information__sticker">
                        <p>
                            <?= get_field('information_sticker_title', $post->ID); ?>
                        </p>
                        <?php
                            $informationImage = get_field('information_sticker_image');
                            $informationImageMobile = get_field('information_sticker_image_mobile');
                        ?>
                        <img src="<?= $informationImage['url'] ? $informationImage['url'] : get_template_directory_uri().'/dist/images/Bloggers-love-stickers_Package.png'; ?>" alt="<?php $informationImage['alt'] ? $informationImage['alt'] : __('love stickers', 'bls_theme'); ?>" class="hide-mobile">
                        <img src="<?= $informationImageMobile['url'] ? $informationImageMobile['url'] : get_template_directory_uri().'/dist/images/Bloggers-love-stickers_Package_Mobile.png'; ?>" alt="<?php $informationImageMobile['alt'] ? $informationImageMobile['alt'] : __('love stickers', 'bls_theme'); ?>" class="show-mobile">
                    </div>

                    <div class="sidebar__form show-mobile">
                        <h3>
                            Eirmod tempor invidunt ut labore et dolor
                        </h3>
                        <form id="sticker-form-mobile" action="" class="sidebar__form-wrapper">
                            <div class="sidebar__form-container">
                                <div class="sidebar__form-row">
                                    <div class="sidebar__form-column">
                                        <input type="text" placeholder="Name" class="sidebar__form-input input">
                                        <input type="text" name="email" placeholder="Mail*" class="sidebar__form-input input">
                                        <input type="text" placeholder="Street" class="sidebar__form-input input">
                                        <input type="text" placeholder="Postal Code" class="sidebar__form-input input">
                                        <input type="text" placeholder="City" class="sidebar__form-input input">
                                    </div>
                                </div>
                                <div class="sidebar__form-row">
                                    <div class="sidebar__form-column">
                                        <label for="check-mobile" class="sidebar__form-check-wrapper check__wrapper">
                                            <input id="check-mobile" type="checkbox" class="sidebar__form-check check__input">
                                            <span class="sidebar__form-mask check__mask"></span>
                                        </label>
                                        <small class="sidebar__form-policy"><?= __('I have read and agree to the ', 'thikin-smart'); ?><a href="" class="sidebar__form-link"><?= __('privacy policy', 'bls_theme'); ?></a>.</small>
                                    </div>
                                </div>
                                <div class="sidebar__form-row">
                                    <div class="sidebar__form-column">
                                        <input type="submit" class="sidebar__form-submit btn btn--secondary" value="<?= __('GETTING NOW MY FREE STICKER PACK', 'bls_theme'); ?>">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>        
                
                <?php if (have_rows('detail_row')): ?>
                    <section class="details">
                    <?php while (have_rows('detail_row')): the_row(); ?>
                        <div class="details__row row">
                            <div class="details__image">
                                <?php the_sub_field('detail_icon'); ?>
                            </div>
                            <div class="details__content">
                                <?php the_sub_field('detail_content'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    </section>
                <?php endif; ?>
                

                <section class="call-us">
                    <div class="call-us__row row">
                        <div class="call-us__column column">
                            <?= get_field('call_us_content', $post->ID); ?>
                        </div>
                        <div class="call-us__column column">
                            <?php
                            $phoneNumber = get_field('call_us_phone', $post->ID);
                            $newNumber = str_replace(' ', '', $phoneNumber);
                            ?>
                            <a href="tel:<?= $newNumber; ?>" class="btn btn--primary">
                                <?= $phoneNumber; ?>
                            </a>
                        </div>
                    </div>
                </section>

                <section id="testimonials" class="testimonials">
                    <div class="testimonials__header">
                        <h2>
                            <?= get_field('community_say_title', $post->ID); ?>
                        </h2>
                    </div>
                    <?php if (have_rows('community_say_testimonials')): ?>
                        <div class="testimonials__slides">
                            <?php while (have_rows('community_say_testimonials')): the_row(); ?>
                                <?php
                                    $testimonialauthor = the_sub_field('testimonial_author_image');
                                ?>
                                <div class="testimonials__slide">
                                    <div class="testimonials__content">
                                        <?php the_sub_field('testimonial_content'); ?>
                                    </div>
                                    <div class="testimonials__author">
                                        <div class="testimonials__author-image">
                                            <img src="<?= $testimonialauthor['url'] ? $testimonialauthor['url'] : get_template_directory_uri().'/dist/images/Bloggers-love-sticker_fashion_blogger.png'; ?>" alt="<?php $testimonialauthor['alt'] ? $testimonialauthor['alt'] : __('testimonial_author', 'bls_theme'); ?>">
                                        </div>
                                        <div class="testimonials__author-information">
                                            <p>
                                                <span class="testimonials__author-name"><?php the_sub_field('testimonial_author_name'); ?></span>, <?php the_sub_field('testimonial_author_city'); ?>
                                                <br>
                                                <span class="testimonials__author-job"><?php the_sub_field('testimonial_author_job'); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </section>
            <?php endwhile; endif; ?>
            </div>
        <!-- End content -->

        <!-- Sidebar -->
        <div class="sidebar column column--3 hide-mobile">
            <div class="sidebar__form">
                <h3>
                    Eirmod tempor invidunt ut labore et dolor
                </h3>
                <form id="sticker-form" action="" class="sidebar__form-wrapper">
                    <div class="sidebar__form-container">
                        <div class="sidebar__form-row">
                            <div class="sidebar__form-column">
                                <input type="text" placeholder="Name" class="sidebar__form-input input">
                                <input type="text" name="email" placeholder="Mail*" class="sidebar__form-input input">
                                <input type="text" placeholder="Street" class="sidebar__form-input input">
                                <input type="text" placeholder="Postal Code" class="sidebar__form-input input">
                                <input type="text" placeholder="City" class="sidebar__form-input input">
                            </div>
                        </div>
                        <div class="sidebar__form-row">
                            <div class="sidebar__form-column">
                                <label for="check" class="sidebar__form-check-wrapper check__wrapper">
                                    <input id="check" type="checkbox" class="sidebar__form-check check__input">
                                    <span class="sidebar__form-mask check__mask"></span>
                                </label>
                                <small class="sidebar__form-policy"><?= __('I have read and agree to the ', 'thikin-smart'); ?><a href="" class="sidebar__form-link"><?= __('privacy policy', 'bls_theme'); ?></a>.</small>
                            </div>
                        </div>
                        <div class="sidebar__form-row">
                            <div class="sidebar__form-column">
                                <input type="submit" class="sidebar__form-submit btn btn--secondary" value="<?= __('GETTING NOW MY FREE STICKER PACK', 'bls_theme'); ?>">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End sidebar -->

    </div>
</div>
<?php get_footer(); ?>