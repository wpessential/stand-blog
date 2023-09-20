<?php wp_footer() ?>
<footer>
  <div class="container">
    <div class="row">

      <?php

      wp_nav_menu(
        array(
          'theme_location' => 'secondary',
          'container' => 'div',
          'container_class' => 'col-lg-12',
          // 'container_id'         => 'navbarResponsive',
          // Change this to match your HTML structure
          'menu_class' => 'social-icons',
          // Adjust the class names as needed
      
        )
      );

      ?>





      <!-- <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div> -->
      <div class="col-lg-12">
        <div class="copyright-text">
          <p>Copyright 2020 Stand Blog Co.

            | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>




</body>

</html>