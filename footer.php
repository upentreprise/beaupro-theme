<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="wrapper-footer">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <footer class="site-footer" id="colophon">

          <div class="site-info">
            <div class="d-flex flex-wrap justify-content-between">
              <div class="my-1">
                <span>© 2021 Beaupro lanaudière inc. - Tous droits réservés.</span>
              </div>
              <div class="my-1 position-relative d-none">
                <a href="#tooltip-benz">
                  <i class="fa fa-info-circle mr-1 tooltip-title" aria-hidden="true"></i>
                </a>
                <div id="tooltip-benz">
                  Pour les demandes commerciales:<br>
                  admin@benzisolutions.com
                </div>
                <span>
                  Conçu par
                  <a id="coder" class="pl-0" href="https://github.com/bernzJ" target="_blank" rel="noreferrer">
                    Benz
                  </a>
                </span>
              </div>
            </div>
          </div><!-- .site-info -->

        </footer><!-- #colophon -->

      </div>
      <!--col end -->

    </div><!-- row end -->

  </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>