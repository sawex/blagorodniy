<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Blagorodnyi
 */

get_header( '404' );
?>

  <div class="container">
    <div class="row">
      <div class="page-404-wrap">
        <div class="page-404-img-box">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.png" alt="" class="page-404-img">
        </div>
        <h1 class="title-404">Придется поскучать :(</h1>
        <a href="<?php echo esc_url( home_url() ); ?>" class="to-home-link">Вернуться на главную</a>
      </div>
    </div>
  </div>

<?php
get_footer( '404' );
