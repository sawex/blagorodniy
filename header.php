<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blagorodnyi
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="header" id="header">
    <div class="container">
      <div class="row">
        <nav class="header__nav">
          <?php the_custom_logo(); ?>

          <ul class="header__nav-list">
            <li class="header__nav-list-item">
              <a href="#objectives" class="header__nav-link">Цели и задачи</a>
            </li>
            <li class="header__nav-list-item">
              <a href="#activities" class="header__nav-link">Планы</a>
            </li>
            <li class="header__nav-list-item">
              <a href="#result" class="header__nav-link">Результаты</a>
            </li>
            <li class="header__nav-list-item">
              <a href="#help" class="header__nav-link">Помощь</a>
            </li>
            <li class="header__nav-list-item">
              <a href="#contacts" class="header__nav-link">Контакты</a>
            </li>
          </ul>

          <div class="contact-wrapper">
            <ul class="header__contacts-list">
              <li class="header__contact-item">
                <a href="tel:+380990800558" class="header__contact-link">+38 (099) 080-05-58</a>
                <span class="header__contact-desc">Директор</span>
              </li>

              <li class="header__contact-item">
                <a href="tel:+380990900558" class="header__contact-link">+38 (099) 090-05-58</a>
                <span class="header__contact-desc">Менеджер</span>
              </li>
            </ul>
            <button class="header__contacts-toggle-btn" aria-label="Показать все телефоны"></button>
          </div>

        </nav>
        <nav class="header__mobile-nav">
          <div class="header__mobile-row">
            <?php the_custom_logo(); ?>

            <h1 class="props__primary-title">Благотворительный <br> фонд “Благородный”</h1>
          </div>

          <div class="header__mobile-nav-menu-box">
            <ul class="header__nav-list">
              <li class="header__nav-list-item">
                <a href="#objectives" class="header__nav-link">Цели</a>
              </li>
              <li class="header__nav-list-item">
                <a href="#help" class="header__nav-link">Реквизиты</a>
              </li>
              <li class="header__nav-list-item">
                <a href="#contacts" class="header__nav-link">Контакты</a>
              </li>
            </ul>

            <button class="hamburger hamburger--spring">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
            </button>

            <div class="header__mob-open-menu">
              <ul class="header__nav-list">
                <li class="header__nav-list-item">
                  <a href="#objectives" class="header__nav-link">Цели и задачи</a>
                </li>
                <li class="header__nav-list-item">
                  <a href="#activities" class="header__nav-link">Планы</a>
                </li>
                <li class="header__nav-list-item">
                  <a href="#result" class="header__nav-link">Результаты</a>
                </li>
                <li class="header__nav-list-item">
                  <a href="#help" class="header__nav-link">Помощь</a>
                </li>
                <li class="header__nav-list-item">
                  <a href="#contacts" class="header__nav-link">Контакты</a>
                </li>
              </ul>

              <ul class="header__contacts-list">
                <li class="header__contact-item">
                  <a href="tel:+380990800558" class="header__contact-link">+38 (099) 080-05-58</a>
                  <span class="header__contact-desc">Директор</span>
                </li>

                <li class="header__contact-item">
                  <a href="tel:+380990900558" class="header__contact-link">+38 (099) 090-05-58</a>
                  <span class="header__contact-desc">Менеджер</span>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>