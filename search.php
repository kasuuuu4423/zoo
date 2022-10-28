<?php get_header(); ?>
    <div class="container">
      <main> 
        <?php
          if(!isset($_GET['s'])){
            echo '<div style="margin-top: 40px;">検索ワードを入力してください</div>';
            goto side;
          }
          else{
            echo '<div class="s_word">検索ワード："' . $_GET['s'] . '"</div>';
          }
        ?>
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
        side:
        ?>
      </main>
      <?php get_sidebar(); ?>
    </div>
  <?php get_footer(); ?>