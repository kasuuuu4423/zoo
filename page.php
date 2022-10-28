<?php get_header(); ?>
    <div class="container">
      <main>
      <?php
        if(have_posts()):
          while(have_posts()):
            the_post();
      ?>
        <div class="wrap_cats-date">
          <section class="cats">
          </section>
          <section class="date"><?php the_date(); ?></section>
        </div>
        <section class="content">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </section>
        <section class="share">
          <div class="tweet"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/share_t.png" alt="ツイートする"></a></div>
          <div class="facebook"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/share_f.png" alt="フェイスブックでシェア"></a></div>
        </section>
      <?php
          endwhile;
        endif;
      ?>
      </main>
      <section class="side_headers side pc_only" data-scroll></section>
    </div>
<?php get_footer(); ?>