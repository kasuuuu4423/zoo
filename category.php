<?php get_header(); ?>
    <div class="container">
      <main> 
        <section class="cats">
        <ul>
          <a href="<?php echo home_url(); ?>"><li class="cat">ALL</li></a>
        <?php
          $args = array(
            'orderby' => 'name'
          );
          $categories = get_categories( $args );
          foreach ( $categories as $category ) {
            $cat_link = get_category_link($category->cat_ID);
            echo '<a href="' . $cat_link . '"><li class="cat">' . $category->name . '</li></a>';
          }
        ?>
        </ul>
        </section>
        <section class="articles">
          <?php
          if(have_posts()):
            while(have_posts()):
              the_post();
          ?>
            <div class="article">
              <div class="article_head"> 
                <div class="cat"><?php the_category(); ?></div>
                <div class="date"><?php the_date(); ?></div>
              </div>
              <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <?php
                endwhile;
              else:
                echo '投稿はありません。';
              endif;
            ?>
          </section>
          <?php 
            $count_posts = wp_count_posts();
            $posts = $count_posts->publish;
            if($posts > 8):
          ?>
          <section class="showMore"><a href="#">
            <div class="showMore_btn"> ShowMore</div></a>
          </section>
        <?php 
        endif; 
        ?>
      </main>
      <?php get_sidebar(); ?>
    </div>
  <?php get_footer(); ?>