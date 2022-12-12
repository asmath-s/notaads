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
       <p class="navbotbtn">Social Ads</p>
    </div>
    <p class="showitem">Showing <span>20</span> items</p>
</div>

<main>
    <div class="gallery">
        <!-- socialads -->
                <?php $outs = array(); if( have_rows('socialads','options') ):        
            while ( have_rows('socialads','options') ) : the_row();  ob_start();
            $images = get_sub_field('image');
            $contents = get_sub_field('content');
        ?>
  
        <div class="galleryitem animate__animated animate__fadeInUp animate__delay-1s"><a data-fancybox="gallery"
                data-src="<?php echo $images ?>"><img src="<?php echo $images ?>" alt="notaads"></a>
            <div class="pro-content">
                <h5><?php echo $contents;?></h5>
            </div>
        </div>
             <?php $outs[] = ob_get_clean(); endwhile; 
        else :
        endif;
        $outs = array_reverse($outs);
        echo implode($outs);
        ?>
    </div>
</main>


<?php get_footer();?>