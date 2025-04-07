<?php get_header(); ?>


<!-- hero section with image -->

<section data-section="hero" class="hero" id="hero" style="background-image: url('<?php echo get_theme_file_uri('images/site-hero.jpg'); ?>');">
    <div class="content">
        <h2>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quo, eos. Minus ad tempora voluptatibus placeat aliquid nulla, enim aliquam eum quos eligendi natus rem dignissimos explicabo saepe ipsam! Minima, possimus!
        </p>
        <button class="btn" data-open="contact"=>
            Get in Touch
        </button>
    </div>
</section>

<!-- about section -->

<section data-section="about" class="about" id="about">
    <div class="content">
        <div>
            <h3>About</h3>
            <h2>
                <?php echo esc_html(get_bloginfo('name')); ?> <span> <?php echo esc_html(get_bloginfo('description')); ?></span>
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ullam dicta saepe numquam nisi fugit? Iure cum veritatis similique cupiditate tempore deserunt mollitia labore nisi dignissimos voluptates, natus ducimus assumenda.
            </p>
        </div>
        <div>
            <ul>
                <li> <i class="fa-solid fa-circle-check"></i> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></li>
                <li> <i class="fa-solid fa-circle-check"></i> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></li>
                <li> <i class="fa-solid fa-circle-check"></i> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></li>

            </ul>
        </div>
    </div>
</section>

<!-- services -->

<section data-section="services" class="services" id="services">
    <h2>our services</h2>
    <section id="domestic-services" class="service">
        <div class="content">
            <div class="card title">
                <h3>Domestic</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
        </div>
    </section>
    <section id="comercial-services" class="service">
        <div class="content">
            <div class="card title">
                <h3>comercial</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
        </div>
    </section>
    <section id="industrial-services" class="service">
        <div class="content">
            <div class="card title">
                <h3>industrial</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="card">
                <h3>Testing</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
        </div>
    </section>

</section>


<section class="reviews" id="reviews">
    <div class="content swiper review-carousel">
        <h2>reviews</h2>
        <div class="swiper-wrapper review-carousel-wrapper">
            <div class="swiper-slide review review-carousel-slide">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae eos a debitis saepe dolore officiis. Cum odit quibusdam voluptates illo quod ratione obcaecati, facere reiciendis, accusamus adipisci nemo, accusantium iusto!</p>
                <a href="" target="_blank" rel="noopener noreferer" class="btn">
                    <h3>Name - Site</h3>
                </a>

            </div>
            <div class="swiper-slide review review-carousel-slide">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae eos a debitis saepe dolore officiis. Cum odit quibusdam voluptates illo quod ratione obcaecati, facere reiciendis, accusamus adipisci nemo, accusantium iusto!</p>
                <a href="" target="_blank" rel="noopener noreferer" class="btn">
                    <h3>Name - Site</h3>
                </a>

            </div>
            <div class="swiper-slide review review-carousel-slide">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae eos a debitis saepe dolore officiis. Cum odit quibusdam voluptates illo quod ratione obcaecati, facere reiciendis, accusamus adipisci nemo, accusantium iusto!</p>
                <a href="" target="_blank" rel="noopener noreferer" class="btn">
                    <h3>Name - Site</h3>
                </a>

            </div>

        </div>


        <div class="swiper-pagination"></div>
    </div>



</section>


<section id="modals" class="modals">
    <div class="overlay">
        <div class="modal contact" id="contact">
            <h2>Get in touch</h2>
            <button class="close">x</button>
            <ul>
                <li>
                    <a href="tel:+447831495512">
                        <i class="fa-solid fa-mobile-screen"></i>: 07831 495512
                    </a>
                </li>

                <li>
                    <a href="mailto:test@test.com">
                        <i class="fa-solid fa-envelope"></i>: test@test.com
                    </a>
                </li>
            </ul>
            <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="f7c315d" title="Contact form 1"]'); ?>
            </div>
            <button class="btn" data-submit="contact-form-submit">Send</button>
        </div>

    </div>
</section>


<?php get_footer();
