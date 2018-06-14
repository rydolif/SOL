<!DOCTYPE HTML>
<html lang="ru">
<head>
	<title>SOL</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" href="css/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="css/jquery.fullpage.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
</head>
    <?php
        if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false)) {
            $browser_name = 'ie';
        }
        else {
            $browser_name = '';
        }
    ?>
    <body>

        <!-- Preloader -->
        <div id="preloader"></div>

        <main class="<?= $browser_name; ?>">
		    <div class="content content--intro">
                <div class="content__inner">
                    <a href="#" class="scroll"></a>
                    <div class="progress_bar"></div>
                </div>
                <div class="shape-wrap">
                    <svg class="shape" width="100%" height="100vh" preserveAspectRatio="none" viewBox="0 0 1440 800" xmlns:pathdata="http://www.codrops.com/">
                        <path d="M -44,-50 C -52.71,28.52 15.86,8.186 184,14.69 383.3,22.39 462.5,12.58 638,14 835.5,15.6 987,6.4 1194,13.86 1661,30.68 1652,-36.74 1582,-140.1 1512,-243.5 15.88,-589.5 -44,-50 Z" pathdata:id="M -44,-50 C -137.1,117.4 67.86,445.5 236,452 435.3,459.7 500.5,242.6 676,244 873.5,245.6 957,522.4 1154,594 1593,753.7 1793,226.3 1582,-126 1371,-478.3 219.8,-524.2 -44,-50 Z"></path>
                    </svg>
                </div>
            </div><!-- /content -->
            <div class="content content--fixed">
                <div class="content__inner">
                    <header class="header">
                        <div class="container">
                            <div class="header__logo">
                                <a href="#welcome"><img src="img/logo.svg" alt=""></a>
                            </div>
                            <nav class="header__nav">
                                <ul id="menu">
                                    <li><a href="about.html">О нас</a></li>
                                    <li><a href="services.html">Услуги</a></li>
                                    <li><a href="partners.html">Партнеры</a></li>
                                    <li><a href="news.html">Новости</a></li>
                                    <li><a href="contact.html">Контакты</a></li>
                                </ul>
                            </nav>
                            <div class="header__controls">
                                <div class="header__controls_search">
                                    <a href="#" class="openSearch"><img src="img/search.svg" alt=""></a>
                                </div>
                                <div class="header__controls_lang">
                                    <a href="http://trainee.silk-its.com/sol">eng</a>
                                    <a href="#" class="active">ru</a>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div id="fullpage">
                    	<div class="section" id="section0">
                    		<div class="bg_video"></div>
                    		<div class="section__text">
                    		    <div class="section__text_animated">
                    		        <h3></h3>
                                </div>
                            </div>
                            <a href="#about" class="scroll"><img src="img/mouse.svg" alt=""></a>
                    	</div>
                    	<div class="section" id="section1">
                    		<div class="bg_video"></div>
                    		<div class="section__text">
                    		    <h3>О нас</h3>
                    		    <p>Когда темпы развития бизнеса переходят от просто стабильных в агрессивно быстрые, <br>когда бизнес диктует вам свои новые динамичные правила и требует не ограничивать его масштабы границами одной лишь страны – тогда <br>мы рады предложить вам свои профессиональные услуги.</p>
                    		    <p class="hide-xs">Мы – Страна Онлайн (Европа). Команда асов рекламного дела с более <br>чем 10-тилетним успешным портфолио реализованных проектов.</p>
                    		    <p class="hide-xs">Страна Онлайн (Европа) – компания-ассоциат, рожденная одним из крупнейших <br>коммуникационных агентств России. Мы переняли многолетний опыт работы с лидерами рекламного рынка, усовершенствовали алгоритмы <br>сотрудничества и адаптировали их к условиям мирового ADV- пространства.</p>
                    		    <p class="hide-xs">Выбирая своим партнером Страна Онлайн (Европа) – вы делаете одно рукопожатие, <br>чтобы гарантированно качественно вывести свою компанию на международную арену.</p>
                            </div>
                            <a href="#services" class="scroll"><img src="img/mouse.svg" alt=""></a>
                    	</div>
                    	<div class="section" id="section2">
                    		<div class="bg_video"></div>
                    		<div class="section__text">
                    		    <h3>Услуги</h3>
                    		    <p>Страна Онлайн (Европа) – ведущее международное коммуникационное агентство полного цикла.</p>
                    		    <p class="hide-xs">Наша концепция работы - это внедрение интегрированных маркетинговых <br>коммуникаций в качестве наиболее эффективной и быстродействующей стратегии продвижения бренда на мировой арене. Наши инструменты - <br>цифровая, наружная, мобильная, социальная, event-реклама, BTL.</p>
                    		    <p class="hide-xs">Страна Онлайн (Европа) – это команда сильнейших маркетологов и аналитиков, <br>чьи задачи - выбор сплита рекламных ресурсов и создание стратегии, необходимых для реализации именно вашей корпоративной цели, <br>независимо от географии или локации ресурсов.</p>
                    		    <p class="hide-xs">Наши специалисты возьмут на себя решение задач по производству любых <br>видов рекламной продукции и адаптации ее под условия зарубежного рынка. Мы сделаем все, чтобы вас не только услышали и увидели, мы <br>гарантируем – о вас заговорят во всем мире!</p>
                            </div>
                            <a href="#partners" class="scroll"><img src="img/mouse.svg" alt=""></a>
                    	</div>
                    	<div class="section" id="section3">
                    		<div class="bg_video"></div>
                    		<div class="section__text">
                    		    <h3>Партнеры</h3>
                    		    <div class="container partners_list">
                    		        <div class="row">
                    		            <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    		                <div class="inner">
                    		                    <a target="_blank" href="#"><img src="img/partner1.png" alt=""></a>
                                            </div>
                                        </div>
                    		            <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    		                <div class="inner">
                    		                    <a target="_blank" href="#"><img src="img/partner2.png" alt=""></a>
                                            </div>
                                        </div>
                    		            <div class="item hide-xs col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    		                <div class="inner">
                    		                    <a target="_blank" href="#"><img src="img/partner3.png" alt=""></a>
                                            </div>
                                        </div>
                    		            <div class="item hide-xs col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    		                <div class="inner">
                    		                    <a target="_blank" href="#"><img src="img/partner4.png" alt=""></a>
                                            </div>
                                        </div>
                    		            <div class="item hide-xs col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    		                <div class="inner">
                    		                    <a target="_blank" href="#"><img src="img/partner5.png" alt=""></a>
                                            </div>
                                        </div>
                    		            <div class="item hide-xs col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    		                <div class="inner">
                    		                    <a target="_blank" href="#"><img src="img/partner6.png" alt=""></a>
                                            </div>
                                        </div>
                    		            <div class="item hide-xs col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    		                <div class="inner">
                    		                    <a target="_blank" href="#"><img src="img/partner7.png" alt=""></a>
                                            </div>
                                        </div>
                    		            <div class="item hide-xs col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    		                <div class="inner">
                    		                    <a target="_blank" href="#"><img src="img/partner8.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#contacts" class="scroll"><img src="img/mouse.svg" alt=""></a>
                    	</div>
                    	<div class="section" id="section4">
                            <video></video>
                    		<div class="section__text">
                    		    <h3>Контакты</h3>
                    		    <div class="contacts_list">
                    		        <p>CMG Strana-online (CY) Ltd</p>
                    		        <p>T <a href="tel:+35724634860">+357 24634860</a></p>
                    		        <p><a href="mailto:info@s-ol.eu">info@s-ol.eu</a></p>
                    		        <p>Alexandrou Panagouli 1, ofce 101,</p>
                    		        <p>Larnaca 6057, Novel Tower, Cyprus</p>
                                </div>
                    		    <div class="buttons">
                    		        <a href="#" class="btn callback_open">Обратная связь</a>
                                </div>
                            </div>
                    	</div>
                    </div>
                    <footer class="footer">
                        <div class="container">
                            <div class="footer__cookies">
                                <p>Продолжая использовать этот сайт, вы соглашаетесь получать куки / аналогичные технологии для измерения посещений, просмотра видеороликов и <br>использования кнопок совместного доступа. Узнайте больше и измените настройки файлов cookie.</p>
                                <a href="#" class="btn">Согласен</a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="search_advanced">
                <a href="#" class="close_search"></a>
                <form>
                    <input type="search" placeholder="Искать...">
                    <button type="submit"><img src="img/search.svg" alt=""></button>
                </form>
            </div>
            <div class="modal" id="callback">
                <button class="callback_close">Close</button>
                <h3>Напишите Нам</h3>
                <form id="contacts_form">
                    <div class="form-control">
                        <input type="text" name="username" placeholder="Ваше Имя" required>
                    </div>
                    <div class="form-control">
                        <input type="email" name="email" placeholder="Ваш Email" required>
                    </div>
                    <input type="hidden" name="subject" value="Запрос обратной связи">
                    <button class="btn" type="submit">Отправить</button>
                </form>
            </div>
        </main>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/charming.min.js"></script>
        <?php
        if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false)) {

        }
        else {
            echo '<script src="js/welcome_animation.js"></script>';
        }
        ?>
		<script src="js/jquery.fullpage.min.js"></script>
		<script src="js/jquery.typetext.js"></script>
		<script src="js/modals.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>