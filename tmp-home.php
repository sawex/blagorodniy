<?php
/*
  Template Name: Home page
*/

defined( 'ABSPATH' ) || exit;
get_header();
?>

  <main class="main" id="main" role="main">
    <section class="props" id="props" data-scrollspy-id="props">
      <div class="container">
        <div class="row">
          <div class="props__wrapper">
            <div class="props__img-box">
              <h1 class="props__primary-title">Благотворительный фонд “Благородный”</h1>
            </div>
            <div class="props__props-info">
              <h2 class="props__secondary-title">Реквизиты</h2>
              <p class="text">Помогите детям, перечислив деньги на счет Благотворительного Фонда “Благородный”</p>
              <p class="text">
                <span class="text-bold">Приват (UAH):</span>
                <a class="text-to-copy"
                   data-clipboard-text="5169330520036481">
                  5169-3305-2003-6481
                </a>
              </p>

              <p class="text">
                <span class="text-bold">Приват (USD):</span>
                <a class="text-to-copy"
                   data-clipboard-text="UA683133990000026002055754164">
                  UA683133990000026002055754164
                </a>
              </p>

              <p class="text">
                <span class="text-bold">Биткоин:</span>
                <a class="text-to-copy"
                   data-clipboard-text="3CsZZKTqYFV2noNRkiFHwmtMnxpTkJiJuk">
                  3CsZZKTqYFV2noNRkiFHwmtMnxpTkJiJuk
                </a>
              </p>

              <p class="text">
                <span class="text-bold">Лайткоин:</span>
                <a class="text-to-copy"
                   data-clipboard-text="MWunNZPUacRrZ8deSxTby68eu1WNzqCeyV">
                  MWunNZPUacRrZ8deSxTby68eu1WNzqCeyV
                </a>
              </p>

              <p class="text text--semititle">
                <span class="text-bold">Платежи по реквизитам</span>
              </p>

              <p class="text" style="margin-top: 0;">
                <span class="text-bold">Наименование получателя</span><br>
                <a class="text-to-copy">БО БФ БЛАГОРОДНИЙ БО</a><br>

                <span class="text-bold">Код получателя</span><br>
                <a class="text-to-copy">43232411</a><br>

                <span class="text-bold">Счет получателя</span><br>
                <a class="text-to-copy">26001055752253</a><br>

                <span class="text-bold">Счет в формате согласно стандарту IBAN</span><br>
                <a class="text-to-copy">UA093133990000026001055752253</a><br>

                <span class="text-bold">Название Банка</span><br>
                <a class="text-to-copy">ЗАПОРIЗЬКЕ РУ АТ КБ "ПРИВАТБАНК"</a><br>

                <span class="text-bold">Код Банка (МФО)</span><br>
                <a class="text-to-copy">313399</a>
              </p>

              <p class="text text--semititle">
                <span class="text-bold">Приват 24</span>
              </p>

              <p class="text text--qr">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/QR.png"
                     alt="Privatbank QR">
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="objectives" id="objectives" data-scrollspy-id="objectives">
      <div class="container">
        <div class="row">
          <h2 class="objectives__title">Цели и задачи фонда</h2>
          <div class="objectives__wrapper">
            <div class="objectives__text-box">
              <div class="objectives__tasks">
                <h3 class="objectives__tasks-title">Основная цель фонда:</h3>
                <p class="text">Оказание материальной и иной помощи детям, страдающим тяжелыми заболеваниями, их семьям. Помощь медицинским учреждениям и учреждениям, работающим с детьми, оставшимися без попечения родителей.</p>
              </div>
              <div class="objectives__tasks">
                <h3 class="objectives__tasks-title">Задачи фонда:</h3>
                <ol class="objectives__tasks-list">
                  <li class="objectives__tasks-list-item">Реализация программ, способствующих росту количества детей, выздоравливающих после перенесения тяжелых заболеваний.</li>
                  <li class="objectives__tasks-list-item">Организация кампании по привлечению добровольных пожертвований российских и зарубежных юридических и физических лиц для реализации благотворительных программ фонда.</li>
                  <li class="objectives__tasks-list-item">Формирование благоприятного правового, социального и информационного поля вокруг семей, имеющих тяжелобольных детей.</li>
                  <li class="objectives__tasks-list-item">Улучшение имиджа бизнес структур, оказывающих благотворительную помощь.</li>
                  <li class="objectives__tasks-list-item">Участие в городских и федеральных программах по поддержкедетских больниц.</li>
                  <li class="objectives__tasks-list-item">Содействие движению доноров крови.</li>
                  <li class="objectives__tasks-list-item">Формирование информационного банка данных нуждающихся и благотворителей.</li>
                </ol>
              </div>
            </div>
            <div class="objectives__img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/girl-and-sun.png"
                   alt=""
                   class="objectives__img">
            </div>
          </div>
        </div>
      </div>
      <div class="objectives__bg-cloud-1"></div>
      <div class="objectives__bg-cloud-2"></div>
    </section>

    <section class="activities" id="activities" data-scrollspy-id="activities">
      <div class="container">
        <div class="row">
          <h2 class="activities__title">Основные виды деятельности</h2>
          <div class="activities__wrapper">
            <div class="activities__service">
              <div class="activities__serv-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blagotvor.png"
                     alt=""
                     class="activities__serv-img">
              </div>
              <p class="text">Благотворительная <br> деятельность</p>
            </div>

            <div class="activities__service">
              <div class="activities__serv-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-and-meds.png"
                     alt=""
                     class="activities__serv-img">
              </div>
              <p class="text">Оказание помощи лекарствами <br> и питанием</p>
            </div>

            <div class="activities__service">
              <div class="activities__serv-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/money.png"
                     alt=""
                     class="activities__serv-img">
              </div>
              <p class="text">Оказание материальной <br> помощи семьям</p>
            </div>

            <div class="activities__service">
              <div class="activities__serv-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/auctions.png"
                     alt=""
                     class="activities__serv-img">
              </div>
              <p class="text">Проведение <br> благотворительных аукционов</p>
            </div>

            <div class="activities__service">
              <div class="activities__serv-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/commerce.png"
                     alt=""
                     class="activities__serv-img">
              </div>
              <p class="text">Осуществление коммерческих операций в <br> целях использования полученных доходов <br> для благотворительных целей</p>
            </div>

            <div class="activities__service">
              <div class="activities__serv-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publish.png"
                     alt=""
                     class="activities__serv-img">
              </div>
              <p class="text">Осуществление издательской <br> деятельности</p>
            </div>

            <div class="activities__service">
              <div class="activities__serv-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/other.png"
                     alt=""
                     class="activities__serv-img">
              </div>
              <p class="text">Другие виды деятельности, <br> соответствующие целям и задачам фонда <br> и не запрещенные действующим <br> законодательством</p>
            </div>
          </div>

          <div class="activities__wrapper activities__wrapper--mobile">
            <div class="activities__service">
              <div class="activities__serv-img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blagotvor.png" alt="blagotvor" class="activities__serv-img"></div>
              <p class="text">Благотворительная <br> деятельность</p>
            </div>
            <div class="activities__service">
              <div class="activities__serv-img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-and-meds.png" alt="food-and-meds" class="activities__serv-img"></div>
              <p class="text">Оказание помощи лекарствами <br> и питанием</p>
            </div>
            <div class="activities__service">
              <div class="activities__serv-img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/money.png" alt="money" class="activities__serv-img"></div>
              <p class="text">Оказание материальной <br> помощи семьям</p>
            </div>
            <div class="activities__service">
              <div class="activities__serv-img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/auctions.png" alt="auctions" class="activities__serv-img"></div>
              <p class="text">Проведение <br> благотворительных аукционов</p>
            </div>
            <div class="activities__service">
              <div class="activities__serv-img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/commerce.png" alt="commerce" class="activities__serv-img"></div>
              <p class="text">Осуществление коммерческих операций в <br> целях использования полученных доходов <br> для благотворительных целей</p>
            </div>
            <div class="activities__service">
              <div class="activities__serv-img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/publish.png" alt="publish" class="activities__serv-img"></div>
              <p class="text">Осуществление издательской <br> деятельности</p>
            </div>
            <div class="activities__service">
              <div class="activities__serv-img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other.png" alt="other" class="activities__serv-img"></div>
              <p class="text">Другие виды деятельности, <br> соответствующие целям и задачам фонда <br> и не запрещенные действующим <br> законодательством</p>
            </div>
          </div>

          <nav class="reports__gallery-nav">
            <button class="reports__gallery-nav-btn reports__gallery-nav-btn--prev"></button>
            <button class="reports__gallery-nav-btn reports__gallery-nav-btn--next"></button>
          </nav>

          <p class="text microtext activities__desc">Основные источники финансирования деятельности фонда – частные финансовые пожертвования, привлечение целевых средств от крупных коммерческих структур, сбор средств путем проведения благотворительных мероприятий.</p>
        </div>
      </div>
    </section>

    <section class="result" id="result" data-scrollspy-id="result">
      <div class="container">
        <div class="row">
          <h2 class="result__title">Ожидаемые результаты деятельности фонда</h2>
          <div class="result__wrapper">
            <div class="result__desc-box">
              <ol class="result__list">
                <li class="result__list-item">Увеличение количества выздоравливающих детей после перенесения тяжелых заболеваний.</li>
                <li class="result__list-item">Вовлечение в благотворительную деятельность широкого круга лиц.</li>
                <li class="result__list-item">Привлечение СМИ к освещению эффективных путей решения серьезной проблемы тяжелых заболеваний.</li>
                <li class="result__list-item">Развитие корпоративной благотворительности в российских компаниях.</li>
              </ol>
              <p class="secondary-text">Партнеры программ и акций фонда – физические и юридические лица Екатеринбурга и Свердловской области, России. стран СНГ и зарубежья, заключившие с некоммерческой организацией Детский благотворительный фонд "Мы вместе" договоры о реализации благотворительных мероприятий.</p>
            </div>
            <div class="result__img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/two-girl.png" alt="two girls" class="result__img">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Reports was here -->

    <section class="help" id="help" data-scrollspy-id="help">
      <div class="container">
        <div class="row">
          <div class="help__wrapper">
            <div class="help__img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sun.png" alt="sun" class="help__img">
            </div>

            <div class="help__desc-box">
              <h2 class="help__title">Получить помощь</h2>
              <div class="help__desc-text-box">
                <h3 class="help__desc-title">Список необходимых документов для обращения в фонд:</h3>
                <ol class="help__list">
                  <li class="help__list-item">Свидетельство о рождении ребенка (копия)</li>
                  <li class="help__list-item">Паспорт законного представителя ребенка (копия)</li>
                  <li class="help__list-item">Справка об инвалидности ребенка (копия)</li>
                  <li class="help__list-item">СНИЛС (копия)</li>
                  <li class="help__list-item">Медицинская выписка (копия)</li>
                  <li class="help__list-item">Заявление (скачать с сайта и заполнить)</li>
                  <li class="help__list-item">Анкета-обращение (скачать с сайта и заполнить)</li>
                  <li class="help__list-item">Договор (скачать с сайта и заполнить)</li>
                  <li class="help__list-item">Справка с места работы родителя (законного представителя) </li>
                  <li class="help__list-item">Фотография ребенка</li>
                </ol>
                <p class="text">Имея все указанные документы, смело приходите к нам в офис, либо связывайтесь с фондом любым удобным вам способом</p>
              </div>
            </div>
          </div>

          <div class="help__footer-bg"></div>
        </div>
      </div>

      <div class="help__cloud-bg"></div>
    </section>

    <section class="requisites-mobile" id="requisites">
      <div class="container">
        <div class="row">
          <div class="props__props-info">
            <h2 class="props__secondary-title">Реквизиты</h2>
            <p class="text">Помогите детям, перечислив деньгина счет Благотворительного Фонда “Благородный”</p>
            <p class="text">
              <span class="text-bold">Приват (UAH):</span>
              <a class="text-to-copy">5169-3305-2003-6481</a>
            </p>

            <p class="text">
              <span class="text-bold">Приват (USD):</span>
              <a class="text-to-copy">UA683133990000026002055754164</a>
            </p>

            <p class="text">
              <span class="text-bold">Биткоин:</span>
              <a class="text-to-copy">3CsZZKTqYFV2noNRkiFHwmtMnxpTkJiJuk</a>
            </p>

            <p class="text">
              <span class="text-bold">Лайткоин:</span>
              <a class="text-to-copy">MWunNZPUacRrZ8deSxTby68eu1WNzqCeyV</a>
            </p>

            <p class="text text--semititle">
              <span class="text-bold">Платежи по реквизитам</span>
            </p>

            <p class="text" style="margin-top: 0;">
              <span class="text-bold">Наименование получателя</span><br>
              <a class="text-to-copy">БО БФ БЛАГОРОДНИЙ БО</a><br>

              <span class="text-bold">Код получателя</span><br>
              <a class="text-to-copy">43232411</a><br>

              <span class="text-bold">Счет получателя</span><br>
              <a class="text-to-copy">26001055752253</a><br>

              <span class="text-bold">Счет в формате согласно стандарту IBAN</span><br>
              <a class="text-to-copy">UA093133990000026001055752253</a><br>

              <span class="text-bold">Название Банка</span><br>
              <a class="text-to-copy">ЗАПОРIЗЬКЕ РУ АТ КБ "ПРИВАТБАНК"</a><br>

              <span class="text-bold">Код Банка (МФО)</span><br>
              <a class="text-to-copy">313399</a>
            </p>

<!--            <p class="text text--semititle">-->
<!--              <span class="text-bold">Приват 24</span>-->
<!--            </p>-->
<!---->
<!--            <p class="text text--qr">-->
<!--              <img src="--><?php //echo get_template_directory_uri() ?><!--/assets/images/QR.png"-->
<!--                   alt="Privatbank QR">-->
<!--            </p>-->

          </div>
        </div>
      </div>
    </section>

    <section class="contacts" id="contacts" data-scrollspy-id="contacts">
      <div class="contacts__map"></div>

      <div class="container">
        <div class="row">
          <div class="contacts__contact-box">
            <div class="contacts__container">
              <h2 class="contacts__title">Контакты</h2>
              <span class="contacts__link contacts__link--address">Запорожье, ул. Курузова 11, офис 112</span>
              <a href="tel:+380990800538" class="contacts__link">
                <span class="text-bold">Директор:</span> +38 (099) 080-05-38
              </a>
              <a href="tel:+380990800558" class="contacts__link">
                <span class="text-bold">Менеджер:</span> +38 (099) 080-05-58
              </a>
              <a href="mailto:blagorod.zp@gmail.com" class="contacts__link">
                <span class="text-bold">E-mail:</span> blagorod.zp@gmail.com
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


<?php
get_footer();
