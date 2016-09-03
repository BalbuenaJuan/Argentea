<footer class="footer">
    <h2 class="header--footer">&copy; Juan Balbuena 2015 - 2016</h2>
    <?php wp_footer(); ?>
    <p class="header--footer">E-mail: hello@juanbalbuena.info</p>
    <?php wp_nav_menu(
      array(
        "theme_location" => "footer-menu",
				"menu_class" => "footer__nav--menu"
      )
    ); ?>
    <div class="stack">
      <h3 class="stack--header">Stack:</h3>
      <img class="stack--img" src="<?php bloginfo('template_directory'); ?>/img/asf.png" alt="" />
      <img class="stack--img" src="<?php bloginfo('template_directory'); ?>/img/php7.png" alt="" />
      <img class="stack--img" src="<?php bloginfo('template_directory'); ?>/img/wordpress.png" alt="" />
      <img class="stack--img" src="<?php bloginfo('template_directory'); ?>/img/html5.png" alt="" />
      <img class="stack--img" src="<?php bloginfo('template_directory'); ?>/img/javascript.png" alt="" />
      <img class="stack--img" src="<?php bloginfo('template_directory'); ?>/img/jv81.png" alt="" />
      <img class="stack--img" src="<?php bloginfo('template_directory'); ?>/img/Stylus.png" alt="" />

    </div>
    </footer>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77430471-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
