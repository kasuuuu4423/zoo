
    <footer> 
      <div class="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>//img/logo_white.png" alt=""></a></div>
      <div class="privacy_policy"><a href="<?php echo home_url(); ?>/privacypolicy/">Privacy Policy</a></div>
      <div class="copyright">© 2020 Zoo.</div>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scroll-out.min.js"></script>
    <?php
      if(is_single() || is_page()){
        echo '<script src="'. get_template_directory_uri() .'/js/side_headers.js"></script>';
      }
      wp_footer();
    ?>
  </body>
</html>