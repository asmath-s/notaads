<?php get_header();?>

<div class="navbot mobi">
    <div class="navbb">
        <div class="navbotmenu">
            <ul class="navbotdrop">
                <li>
                    Choose Category
                    <ul class="navbotdown">
                        <li>
                            <a href="https://notaads.in/identity/">Identity</a>
                        </li>
                        <li><a href="https://notaads.in/packaging/">Packaging</a></li>
                        <li>
                            <a href="https://notaads.in/brochure-catalogue/">Brochure & Catalogue</a>
                        </li>
                        <li>
                            <a href="https://notaads.in/flyers-posters/">Flyers & Posters</a>
                        </li>
                        <li><a href="https://notaads.in/calendar/">Calendar</a></li>
                        <li>
                            <a href="https://notaads.in/social-ads/">Social Ads</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <i class="fa-solid fa-angle-down"></i>
        </div>

    </div>
    <p class="showitem">Showing <span>20</span> items</p>
</div>

<main>
    <div class="gallery">
        <?php if( have_rows('identity','options') ):?>
        <?php while( have_rows('identity','options') ) : the_row();
            $images = get_sub_field('image');
            $contents = get_sub_field('content');?>
        <div class="galleryitem animate__animated animate__fadeInUp animate__delay-1s"><a data-fancybox="gallery"
                data-src="<?php echo $images ?>"><img data-src="<?php echo $images ?>" alt="notaads"></a>
            <div class="pro-content">
                <h5><?php echo $contents;?></h5>
            </div>
        </div>
        <?php endwhile;?>
        <?php endif; ?>
        <!-- packaging -->
        <?php if( have_rows('packaging','options') ):?>
        <?php while( have_rows('packaging','options') ) : the_row();
            $images = get_sub_field('image');
            $contents = get_sub_field('content');?>
        <div class="galleryitem animate__animated animate__fadeInUp animate__delay-1s"><a data-fancybox="gallery"
                data-src="<?php echo $images ?>"><img data-src="<?php echo $images ?>" alt="notaads"></a>
            <div class="pro-content">
                <h5><?php echo $contents;?></h5>
            </div>
        </div>
        <?php endwhile;?>
        <?php endif; ?>
        <!-- brochure -->
        <?php if( have_rows('brochure','options') ):?>
        <?php while( have_rows('brochure','options') ) : the_row();
            $images = get_sub_field('image');
            $contents = get_sub_field('content');?>
        <div class="galleryitem animate__animated animate__fadeInUp animate__delay-1s"><a data-fancybox="gallery"
                data-src="<?php echo $images ?>"><img data-src="<?php echo $images ?>" alt="notaads"></a>
            <div class="pro-content">
                <h5><?php echo $contents;?></h5>
            </div>
        </div>
        <?php endwhile;?>
        <?php endif; ?>

        <!-- flyers -->
        <?php if( have_rows('flyers','options') ):?>
        <?php while( have_rows('flyers','options') ) : the_row();
            $images = get_sub_field('image');
            $contents = get_sub_field('content');?>
        <div class="galleryitem animate__animated animate__fadeInUp animate__delay-1s"><a data-fancybox="gallery"
                data-src="<?php echo $images ?>"><img data-src="<?php echo $images ?>" alt="notaads"></a>
            <div class="pro-content">
                <h5><?php echo $contents;?></h5>
            </div>
        </div>
        <?php endwhile;?>
        <?php endif; ?>
        <!-- calendar -->

        <?php if( have_rows('calendar','options') ):?>
        <?php while( have_rows('calendar','options') ) : the_row();
            $images = get_sub_field('image');
            $contents = get_sub_field('content');?>
        <div class="galleryitem animate__animated animate__fadeInUp animate__delay-1s"><a data-fancybox="gallery"
                data-src="<?php echo $images ?>"><img data-src="<?php echo $images ?>" alt="notaads"></a>
            <div class="pro-content">
                <h5><?php echo $contents;?></h5>
            </div>
        </div>
        <?php endwhile;?>
        <?php endif; ?>

        <!-- socialads -->

        <?php if( have_rows('socialads','options') ):?>
        <?php while( have_rows('socialads','options') ) : the_row();
            $images = get_sub_field('image');
            $contents = get_sub_field('content');?>
        <div class="galleryitem animate__animated animate__fadeInUp animate__delay-1s"><a data-fancybox="gallery"
                data-src="<?php echo $images ?>"><img data-src="<?php echo $images ?>" alt="notaads"></a>
            <div class="pro-content">
                <h5><?php echo $contents;?></h5>
            </div>
        </div>
        <?php endwhile;?>
        <?php endif; ?>
    </div>
</main>


<?php get_footer();?>