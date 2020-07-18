<?php get_header(); ?>
<div class="main-container container">
    <div class="row row--space-between">

        <!-- Content -->
        <div class="content column column--3-2-space">
            <section class="information">
                <div class="information__header">
                    <div class="row">
                        <div class="column column--4-3">
                            <p class="top-title">
                                GET ONE OF <span class="counter">100</span><strong> FREE STICKER</strong> PACKAGES
                            </p>
                            <h1>
                                Be quick bedore this offer is gone and get your fee sticker pack!
                            </h1>
                        </div>
                        <div class="column column--4 hide-mobile">
                            <?php
                            $informationImageArrow = get_field('information_arrow');
                            ?>
                            <img src="<?= $informationImageArrow['url'] ? $informationImageArrow['url'] : get_template_directory_uri().'/dist/images/Arrow.png'; ?>" alt="<?php $informationImageArrow['alt'] ? $informationImageArrow['alt'] : __('love stickers arrow', 'bls_theme'); ?>">
                        </div>
                    </div>                
                </div>
                <div class="information__content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at fringilla mi. 
                        Maecenas vestibulum velit tellus, et suscipit ligula vestibulum id. Integer nec 
                        purus et metus suscipit iaculis. 
                    </p>
                </div>
                <div class="information__sticker">
                    <p>
                        YOUR BLOGGINGS STICKERS
                    </p>
                    <?php
                        $informationImage = get_field('information_image');
                        $informationImageMobile = get_field('information_image_mobile');
                    ?>
                    <img src="<?= $informationImage['url'] ? $informationImage['url'] : get_template_directory_uri().'/dist/images/Bloggers-love-stickers_Package.png'; ?>" alt="<?php $informationImage['alt'] ? $informationImage['alt'] : __('love stickers', 'bls_theme'); ?>" class="hide-mobile">
                    <img src="<?= $informationImageMobile['url'] ? $informationImageMobile['url'] : get_template_directory_uri().'/dist/images/Bloggers-love-stickers_Package_Mobile.png'; ?>" alt="<?php $informationImageMobile['alt'] ? $informationImageMobile['alt'] : __('love stickers', 'bls_theme'); ?>" class="show-mobile">
                </div>
                <div class="sidebar__form show-mobile">
                    <h3>
                        Eirmod tempor invidunt ut labore et dolor
                    </h3>
                    <form action="" class="sidebar__form-wrapper">
                        <div class="sidebar__form-container">
                            <div class="sidebar__form-row">
                                <div class="sidebar__form-column">
                                    <input type="text" placeholder="Name" class="sidebar__form-input input">
                                    <input type="text" placeholder="Mail*" class="sidebar__form-input input">
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
            
            <section class="details">
                <div class="details__row row">
                    <div class="details__image">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="details__content">
                        <p>
                            <strong> ipsum dolor sit amet, consectetur adipiscing elit.</strong> Nullam at fringilla mi. 
                            Maecenas vestibulum velit tellus, et suscipit ligula vestibulum id. Integer nec 
                            purus et metus suscipit iaculis. 
                        </p>
                    </div>
                </div>
                <div class="details__row row">
                    <div class="details__image">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="details__content">
                        <p>
                        <strong> ipsum dolor sit amet, consectetur adipiscing elit.</strong> Nullam at fringilla mi. 
                            Maecenas vestibulum velit tellus, et suscipit ligula vestibulum id. Integer nec 
                            purus et metus suscipit iaculis. 
                        </p>
                    </div>
                </div>
                <div class="details__row row">
                    <div class="details__image">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="details__content">
                        <p>
                        <strong> ipsum dolor sit amet, consectetur adipiscing elit.</strong> Nullam at fringilla mi. 
                            Maecenas vestibulum velit tellus, et suscipit ligula vestibulum id. Integer nec 
                            purus et metus suscipit iaculis. 
                        </p>
                    </div>
                </div>
            </section>

            <section class="call-us">
                <div class="call-us__row row">
                    <div class="call-us__column column">
                        <h4>OR SIMPLE GIVE US A CALL</h4>
                        <p>No problem. We will get your stickers in a call</p>
                    </div>
                    <div class="call-us__column column">
                        <a href="tel:559589699" class="btn btn--primary">
                            555 958 9699
                        </a>
                    </div>
                </div>
            </section>

            <section class="testimonials">
                <div class="testimonials__header">
                    <h2>What does the community say?</h2>
                </div>
                <div class="testimonials__slides">
                <?php
                    $testimonialauthor = get_field('testimonial_author');
                ?>
                
                    <div class="testimonials__slide">
                        <div class="testimonials__content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at fringilla mi. 
                                Maecenas vestibulum velit tellus, et suscipit ligula vestibulum id. Integer nec 
                                purus et metus suscipit iaculis. Duis feugiat, orci ut malesuada lobortis, nunc 
                                dolor cursus risus, quis mollis magna nibh et felis. Donec scelerisque nunc 
                                porta risus tempor euismod. Donec fermentum erat ut enim cursus facilisis. 
                                Aenean nec augue vestibulum sem commodo consequat non sed enim.
                            </p>
                        </div>
                        <div class="testimonials__author">
                            <div class="testimonials__author-image">
                                <img src="<?= $testimonialauthor['url'] ? $testimonialauthor['url'] : get_template_directory_uri().'/dist/images/Bloggers-love-sticker_fashion_blogger.png'; ?>" alt="<?php $testimonialauthor['alt'] ? $testimonialauthor['alt'] : __('testimonial_author', 'bls_theme'); ?>">
                            </div>
                            <div class="testimonials__author-information">
                                <p>
                                    <span class="testimonials__author-name">Jessica Simpsons</span>, New York
                                    <br>
                                    <span class="testimonials__author-job">Fashion Blogger</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials__slide">                        
                        <div class="testimonials__content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at fringilla mi. 
                                Maecenas vestibulum velit tellus, et suscipit ligula vestibulum id. Integer nec 
                                purus et metus suscipit iaculis. Duis feugiat, orci ut malesuada lobortis, nunc 
                                dolor cursus risus, quis mollis magna nibh et felis. Donec scelerisque nunc 
                                porta risus tempor euismod. Donec fermentum erat ut enim cursus facilisis. 
                                Aenean nec augue vestibulum sem commodo consequat non sed enim.
                            </p>
                        </div>
                        <div class="testimonials__author">
                            <div class="testimonials__author-image">
                                <img src="<?= $testimonialauthor['url'] ? $testimonialauthor['url'] : get_template_directory_uri().'/dist/images/Bloggers-love-sticker_fashion_blogger.png'; ?>" alt="<?php $testimonialauthor['alt'] ? $testimonialauthor['alt'] : __('testimonial_author', 'bls_theme'); ?>">
                            </div>
                            <div class="testimonials__author-information">
                                <p>
                                    <span class="testimonials__author-name">Jessica Simpsons</span>, San Francisco
                                    <br>
                                    <span class="testimonials__author-job">Fashion Blogger</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials__slide">                        
                        <div class="testimonials__content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at fringilla mi. 
                                Maecenas vestibulum velit tellus, et suscipit ligula vestibulum id. Integer nec 
                                purus et metus suscipit iaculis. Duis feugiat, orci ut malesuada lobortis, nunc 
                                dolor cursus risus, quis mollis magna nibh et felis. Donec scelerisque nunc 
                                porta risus tempor euismod. Donec fermentum erat ut enim cursus facilisis. 
                                Aenean nec augue vestibulum sem commodo consequat non sed enim.
                            </p>
                        </div>
                        <div class="testimonials__author">
                            <div class="testimonials__author-image">
                                <img src="<?= $testimonialauthor['url'] ? $testimonialauthor['url'] : get_template_directory_uri().'/dist/images/Bloggers-love-sticker_fashion_blogger.png'; ?>" alt="<?php $testimonialauthor['alt'] ? $testimonialauthor['alt'] : __('testimonial_author', 'bls_theme'); ?>">
                            </div>
                            <div class="testimonials__author-information">
                                <p>
                                    <span class="testimonials__author-name">Jessica Simpsons</span>, Los angeles
                                    <br>
                                    <span class="testimonials__author-job">Fashion Blogger</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End content -->

        <!-- Sidebar -->
        <div class="sidebar column column--3 hide-mobile">
            <div class="sidebar__form">
                <h3>
                    Eirmod tempor invidunt ut labore et dolor
                </h3>
                <form action="" class="sidebar__form-wrapper">
                    <div class="sidebar__form-container">
                        <div class="sidebar__form-row">
                            <div class="sidebar__form-column">
                                <input type="text" placeholder="Name" class="sidebar__form-input input">
                                <input type="text" placeholder="Mail*" class="sidebar__form-input input">
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
