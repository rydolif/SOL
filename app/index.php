<!DOCTYPE HTML>
<html lang="ru">
<head>
	<title>SOL</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
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
        <div class="loading">
            <img src="img/logo-white.png" alt="" />
            <div class="progress-bar"><span></span></div>
        </div>

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
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="partners.html">Partners</a></li>
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="header__controls">
                                <div class="header__controls_search">
                                    <a href="#" class="openSearch"><img src="img/search.svg" alt=""></a>
                                </div>
                                <div class="header__controls_lang">
                                    <a href="#" class="active">eng</a>
                                    <a href="http://trainee.silk-its.com/sol/ru">ru</a>
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
                    		    <h3>About us</h3>
                    		    <p>SOL ltd was established in Larnaca (Cyprus) in 2017, bringing together a group of specialists in the field of advertising to achieve ambitious <br>target for the promoting Russian businesses for World market.</p>
                    		    <p class="hide-xs">Well-educated staff with more than 10 years of experience, deep knowledge of the media market and the enthusiasm is ready to provide <br>prompt and qualitative service to customers in Russia and beyond its borders.</p>
                    		    <p class="hide-xs">We are about communication between partners and clients. We bring the maximum effectiveness with a required pack of needed resources for <br>certain advertising campaign in regard to set goal and available budget.</p>
                    		    <p class="hide-xs">Being a company associate of one of the leader communication agency in Russia Strana-online.pro we use thegained experience, improve the <br>algorithms of cooperation with advertising leaders, we adapt to conditions of the World ADV-space. We develop a unique strategy to every <br>particular case.</p>
                    		    <p class="hide-xs">We are truly proud of the evaluation from media and clients in Russia and we are strongly convinced to gain the leading position in reputation <br>in the World.</p>
                            </div>
                            <a href="#services" class="scroll"><img src="img/mouse.svg" alt=""></a>
                    	</div>
                    	<div class="section" id="section2">
                    		<div class="bg_video"></div>
                    		<div class="section__text">
                    		    <h3>Services</h3>
                    		    <p>SOL ltd offers the advising full cycle services. Our concept is the introduction of integrated marketing communications as the most effective and <br>fast-acting strategy of brand promotion to the World market..</p>
                    		    <p class="hide-xs">Our tools are digital, outdoor, mobile, social, event, BTL advertising. Our team consists of strongest marketers and analysts whose tasks are <br>to select a split of advertising resources and create appropriate strategy to realize your corporate goal in regard to location of resources.</p>
                    		    <p class="hide-xs">We are proud that we can offer you the most favorable conditions for placing advertising on TV, Radio, in the Internet, in print media, as well as <br>in retail outlets, entertainment events, and specialized exhibitions.</p>
                    		    <p class="hide-xs">Our specialists will undertake the tasks of producing any kinds of advertising products and adapting it to the conditions of the International <br>market. With the help of our creative and production facilities, we will do our best so that you will not only be heard and seen. We guarantee - <br>they will talk about you all over the world!</p>
                            </div>
                            <a href="#partners" class="scroll"><img src="img/mouse.svg" alt=""></a>
                    	</div>
                    	<div class="section" id="section3">
                    		<div class="bg_video"></div>
                    		<div class="section__text">
                    		    <h3>Partners</h3>
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
                    		    <h3>Contacts</h3>
                    		    <div class="contacts_list">
                    		        <p>«CMG STRANA-ONLINE (CY)  Ltd»</p>
                    		        <p>Telephone: <a href="tel:+35724634860">+357 24634860</a></p>
                                    <p>Mobile: <a href="tel:+35796177808">+357 96177808</a></p>
                                    <p>Web sites: <a href="www.s-ol.eu">www.s-ol.eu</a></p>
                                    <p><a href="www. strana-online.eu">www. strana-online.eu</a></p>
                    		        <p><a href="mailto:info@s-ol.eu">info@s-ol.eu</a></p>
                                    <p><a href="info@strana-online.eu">info@strana-online.eu</a></p>
                    		        <p>Alexandrou Panagouli 1, 5th floor, office 5B</p>
                    		        <p>Larnaca 6057, Novel Tower, Cyprus</p>
                                </div>
                    		    <div class="buttons">
                    		        <a href="#" class="btn callback_open">contact us</a>
                                </div>
                            </div>
                    	</div>
                    </div>
                    <footer class="footer">
                        <div class="container">
                            <div class="footer__cookies">
                                <p>By continuing to use this site, you agree to receive cookies/similar technologies to measure visits, view videos <br>and use social sharing buttons. Find out more and change your cookies settings.</p>
                                <a href="#" class="btn">accept</a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="search_advanced">
                <a href="#" class="close_search"></a>
                <form>
                    <input type="search" placeholder="Search...">
                    <button type="submit"><img src="img/search.svg" alt=""></button>
                </form>
            </div>
            <div class="modal" id="callback">
                <button class="callback_close">Close</button>
                <h3>Contact Us</h3>
                <form id="contacts_form">
                    <div class="form-control">
                        <input type="text" name="username" placeholder="Your Name" required>
                    </div>
                    <div class="form-control">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <input type="hidden" name="subject" value="Contact Request">
                    <button class="btn" type="submit">Send</button>
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