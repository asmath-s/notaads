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
        <p class="navbotbtn">About Us</p>
    </div>

</div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/nota.webp" alt="" class="aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 abouttxt" style="margin: auto 0">
            <h2>About Us</h2>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>

            <p>
                NOTA provides unique designing & printing services in+
                Sivakasi. We are a one-of-a-kind branding & designing
                company, specialising in high-quality print media and packaging
                services. Our creative & innovative team is committed to design
                excellence and to increase the reach of your brand among target
                audiences.
                Our mission is to surpass your expectations providing designs
                that reflect your brand presence. This approach has made us one
                of the fastest growing branding companies in our space.
                Experience the power of designing & branding with
                NOTA today.
            </p>

        </div>
    </div>
</div>
</section>
<section class="countsec">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-4">
                <div class="numcoun">
                    <div class="hex">
                        <span id="count1" class="numbcount"></span>
                    </div>
                    <h6>Years of Experience
                    </h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="numcoun ">
                    <div class="hex2">
                        <span id="count2" class="numbcount"></span>
                    </div>
                    <h6>Clients</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="numcoun ">
                    <div class="hex3">
                        <span id="count3" class="numbcount"></span>
                    </div>
                    <h6>Projects</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="client">
    <div class="container">
        <h2 class="underline">Our Clients</h2>

        <p class="clientpara">Each of our clients have been a pillar of support &amp; backbone <br>to the growth of
            our company. It has
            been a
            privilege to provide design &amp; print media <br>services to these brands.</p>

        <div class="gallery">
            <?php if( have_rows('logos','options') ):?>
            <?php while( have_rows('logos','options') ) : the_row();
$logoes = get_sub_field('logoimage');?>
            <div class="galleryitem">
                <img src="<?php echo $logoes?>" alt="notaads">
            </div>
            <?php endwhile;?>
            <?php endif; ?>
        </div>

</section>



<footer>
    <div id=footer>
        <ul class=socials>
            <li class=ft-fb><a href="https://www.facebook.com/adminnotaads" target=_blank><i
                        class="fa-brands fa-facebook-f"></i></a></li>
            <li class=ft-wh><a href="https://wa.me/919585919193" target=_blank><i class="fa-brands fa-whatsapp"></i>
                </a> </li>
            <li class=ft-ln><a href="https://www.linkedin.com/company/notaads/" target=_blank><i
                        class="fa-brands fa-linkedin-in"></i>
                </a> </li>
        </ul>
        <p>Copyright &copy; <script>
                document.write(/\d{4}/.exec(Date())[0])
            </script> <a href=https://designlyworld.com/ target=_blank>DesignlyWorld</a> Company. All
            rights reserved. </p>
    </div>
</footer>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/lazyload.js"type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/counter.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</body>

</html>