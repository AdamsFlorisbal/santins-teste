<?php get_header(); ?>
<section class="content_home">
    <div class="home">
        <h1 class="text_home">
            Neque porro <br />
            quisquam est qui dolorem ipsum...
        </h1>
        <button class="btn_know__more"><a>saber mais</a></button>
    </div>
</section>
<section class="content_company">
    <div class="graphics_image"></div>
    <div id="a_company">
        <div class="title_company">
            <div class="rectangle"></div>
            <h1>
                <font class="bold" color="#56D7AF">A</font> empresa
            </h1>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
            maximus tempor tellus non cursus. Donec nisl metus, sagittis at
            convallis at, laoreet eu nulla. Duis mattis luctus tellus at
            venenatis.
            <span class="bold">Fusce molestie neque pulvinar magna ultrices</span>, vel lobortis mauris mattis. Etiam
            suscipit consequat dolor,
            dignissim dictum neque pulvinar pharetra. Sed mattis euismod lorem at
            egestas.
        </p>
        <button class="btn_know__more"><a>saber mais</a></button>
      </div>
</section>
<section class="main">

    <ul id="our_numbers" class="number">
        <li class="content_number">
            <div class="content_number__number">4</div>
            <div class="content_number__decoration"></div>
            <h4 class="content_number__text">lorem</h4>
            <h5 class="content_number__subtitle"></h5>
        </li>
        <li class="content_number">
            <div class="content_number__number">
                100
                <span class="content_number__char">%</span>
            </div>
            <div class="content_number__decoration"></div>
            <h4 class="content_number__text">lorem</h4>
            <h5 class="content_number__subtitle"></h5>
        </li>
        <li class="content_number">
            <div class="content_number__number">10</div>
            <div class="content_number__decoration"></div>
            <h4 class="content_number__text">lorem</h4>
            <h5 class="content_number__subtitle"></h5>
        </li>
        <li class="content_number">
            <div class="content_number__number">
                162,6
                <span class="content_number__char">%</span>
            </div>
            <div class="content_number__decoration"></div>
            <h4 class="content_number__text">lorem</h4>
            <h5 class="content_number__subtitle">(lorem)</h5>
        </li>
        <li class="content_number">
            <div class="content_number__number">1º</div>
            <div class="content_number__decoration"></div>
            <h4 class="content_number__text">lorem</h4>
            <h5 class="content_number__subtitle"></h5>
        </li>
        <li class="content_number">
            <div class="content_number__number">
                <span class="content_number__char">R$ </span>297<span class="content_number__char">mm</span>
            </div>
            <div class="content_number__decoration"></div>
            <h4 class="content_number__text">lorem</h4>
            <h5 class="content_number__subtitle"></h5>
        </li>
    </ul>

</section>
<section class="container_founds">
    <div id="founds" class="container_founds__founds">
        <div class="container_founds_text">
            <div class="founds_text__title">
                <div class="rectangle"></div>
                <h1 class="founds_title">Fundos</h1>
            </div>
            <p class="container_founds__founds-txt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                maximus tempor tellus non cursus. Donec nisl metus, sagittis at
                convallis at, laoreet eu nulla. Duis mattis luctus tellus at
                venenatis. Fusce molestie neque pulvinar magna ultrices, vel
                lobortis mauris mattis. Etiam suscipit consequat dolor, dignissim
                dictum neque pulvinar pharetra.
            </p>
        </div>
        <div class="container_founds__two">
            <h2>
                Lorem ipsum dolor sit<br />
                amet, consectetur<br />
                adipiscing elit.
            </h2>
        </div>
    </div>
    <section class="container_founds__wordpress">
        <?php
  $args = array(    
    'posts_per_page' => 4
  );

  query_posts( $args );
   if (have_posts()) : while (have_posts()) : the_post(); 
   ?>

        <div class="container_founds__grid">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/money.svg" alt="Logo dinheiro" />
            <div>
                <h3><?php the_title(); ?></h3>
                <p>
                    <?php the_content(); ?>
                </p>
            </div>

        </div>
        <?php endwhile;
      else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </section>
    <div class="btn_founds">
        <button class="btn_know__more"><a>saber mais</a></button>
    </div>

</section>
<div id="contact" class="container_newsletter">
    <div class="container_newsletter__shadow"></div>
    <div class="container_newsletter__newsletter">
        <h1>Inscreva-se na nossa Newsletter</h1>
        <div>
            <input type="text" placeholder="contato@santins.com.br" id="email" />
            <button><a>Assinar Newsletter</a></button>
        </div>
    </div>
</div>
<?php get_footer(); ?>