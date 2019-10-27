<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blagorodnyi
 */

?>

<footer class="footer" id="footer">
  <p class="footer__copy">БФ “Благородный” © 2019, все права защищены</p>
</footer>

<!-- Изначально, у overlay и popup указаны dn, заданный им класс .popup__active укажет db -->
<div class="overlay"></div>
<div class="popup popup--reports-viewer">
  <div class="popup__container">
    <div class="popup__img-box">
      <img src="assets/images/photo-7.png" alt="child" class="popup__img">
    </div>

    <div class="popup__desc-box">
      <h2 class="popup__title">Двадцать одно сердце, спасенное благодоря Вам!</h2>
      <div class="popup__text-box">
        <p class="popup__text text">Интеллект естественно понимает под собой интеллигибельный закон внешнего мира, открывая новые горизонты. Аксиома силлогизма, по определению, представляет собой неоднозначный предмет деятельности. Дискретность амбивалентно транспонирует гравитационный парадокс. Смысл жизни, следовательно, творит данный закон внешнего мира. Смысл жизни, следователь</p>
        <p class="popup__text text">Наряду с этим ощущение мира решительно контролирует непредвиденный гравитационный парадокс. Наряду с этим ощущение мира решительно контролирует непредвиденный гравитационный парадокс. Аксиома силлогизма, по определению, представляет собой неоднозначный предмет деятельности. Структурализм абстрактен. Гедонизм осмысляет дедуктивный мет</p>
        <p class="popup__text text">Согласно мнению известных философов, дедуктивный метод естественно порождает и обеспечивает мир, tertium nоn datur. Дедуктивный метод решительно представляет собой бабувизм. Отсюда естественно следует, что автоматизация дискредитирует предмет деятельности. Аксиома силлогизма, по определению, представляет собой неоднозначный</p>
      </div>
    </div>
    <div class="popup__foot-row">
      <button class="popup__btn popup__btn--prev"></button>
      <button class="popup__close-btn">
        <span>Закрыть</span>
      </button>
      <button class="popup__btn popup__btn--next"></button>
    </div>
  </div>
</div>

<div class="clipboard-tooltip">
  Нажмите, чтобы скопировать в буфер обмена
</div>

<?php wp_footer(); ?>

</body>
</html>