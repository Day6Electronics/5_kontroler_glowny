<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>{$page_title|default:"Tytuł domyślny"}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{$conf->app_url}/css/main.css" />
                <meta name="description" content="{$page_description|default:"Opis domyślny"}">
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="">Kalkulator rezystora diody LED</a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="#menu">Strona główna</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" style="background-image: url('{$conf->app_url}/images/zdj2.jpg')">
                            
				<div class="inner">
                                    
					<h1>Kalkulator</h1>
                                        <p style="color:#FFF">{$page_description|default:"Opis domyślny"}<br />
                                            {$author|default:"Autor domyślny"}</p>
					<a href="#app_content" class="button special scrolly">Do kalkulatora</a>
				</div>
                            
			</section>
                                        
<div class="content-wrapper">
    <div id="app_content" class="content">

{block name=content} Domyślna treść zawartości .... {/block}

    </div>

                <footer id="footer" class="wrapper">
				<div class="inner">
					<div class="copyright">
						&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>. Video <a href="http://coverr.co/">Coverr</a>.
                                                <p>{$author}</p>
					</div>
				</div>
			</footer>
    </div>
</div>               
			
		<!-- Scripts -->
			<script src="{$conf->app_url}/js/jquery.min.js"></script>
			<script src="{$conf->app_url}/js/jquery.scrolly.min.js"></script>
			<script src="{$conf->app_url}/js/jquery.scrollex.min.js"></script>
			<script src="{$conf->app_url}/js/skel.min.js"></script>
			<script src="{$conf->app_url}/js/util.js"></script>
			<script src="{$conf->app_url}/js/main.js"></script>

	</body>
</html>