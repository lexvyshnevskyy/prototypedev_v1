<?php
prototypedev_register_guest_session();

get_header();
?>
<section id="fullpage">

    <div data-anchor="slide1" class="section main">

        <img src="<?=esc_url( get_template_directory_uri() )?>/img/logo.png" class="dev_logo">

    </div>

    <div data-anchor="slide2" class="section about_us ">

        <div class="content">

            <h2>about us</h2>

            <span>

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis officiis ullam libero quam aliquam, totam ducimus enim optio quis quae, tenetur dolor incidunt praesentium dolorum laborum tempora suscipit quo sapiente?

			</span>

            <span>

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis officiis ullam libero quam aliquam, totam ducimus enim optio quis quae, tenetur dolor incidunt praesentium dolorum laborum tempora suscipit quo sapiente?

			</span>

        </div>

    </div>

    <div data-anchor="slide3" class="section  skills">

        <div class="name_skill">

            <img src="<?=esc_url( get_template_directory_uri() )?>/img/ui.png" alt="">

            <h2>ui/ux</h2>

            <span>from <span class="price">500</span> USD</span>

            <a href="" class="get_it">

                <span>Get it</span>

            </a>

        </div>

        <div class="name_skill">

            <img src="<?=esc_url( get_template_directory_uri() )?>/img/front.png" alt="">

            <h2>back-end</h2>

            <span>from <span class="price">500</span> USD</span>

            <a href="" class="get_it">

                <span>Get it</span>

            </a>

        </div>

        <div class="name_skill">

            <img src="<?=esc_url( get_template_directory_uri() )?>/img/back_end.png" alt="">

            <h2>mobile dev</h2>

            <span>from <span class="price">500</span> USD</span>

            <a href="" class="get_it">

                <span>Get it</span>

            </a>

        </div>

        <div class="name_skill">

            <img src="<?=esc_url( get_template_directory_uri() )?>/img/smartphone.png" alt="">

            <h2>front-end</h2>

            <span>from <span class="price">500</span> USD</span>

            <a href="" class="get_it">

                <span>Get it</span>

            </a>

        </div>

        <div class="name_skill">

            <img src="<?=esc_url( get_template_directory_uri() )?>/img/complex.png" alt="">

            <h2>complex dev</h2>

            <span>from <span class="price">500</span> USD</span>

            <a href="" class="get_it">

                <span>Get it</span>

            </a>

        </div>

    </div>



    <div data-anchor="slide4" class="section works ">



        <div class="gallery">

            <ul>
<?php
$portfolio=prototypedev_get_portfolio();
try {
    if (count($portfolio) > 0)
        foreach ($portfolio as $item):?>
            <li>
                <img src="<?=$item["sumbnail"]?>" alt="">
            </li>
        <?php endforeach;
}
catch (Exception $e) {}
?>


            </ul>

        </div>

    </div>



    <div data-anchor="slide5" class="section form">

        <form>

            <h2>

                Contact us to get <b>best realizing your idea</b>

            </h2>

            <div class="line">

                <input type="text" placeholder="Your Name" required name="<?=md5('name').session_id()?>">

                <input type="email" placeholder="Email" required name="<?=md5('email').session_id()?>">

            </div>

            <textarea name="<?=md5('comment').session_id()?>" placeholder="Message"></textarea>

            <button class="send feedback"><span>Send</span></button>

        </form>

    </div>



</section>
<?php get_footer(); ?>
