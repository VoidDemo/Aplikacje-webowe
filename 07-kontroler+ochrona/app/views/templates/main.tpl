<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta name="description" content="{$page_description|default:"Opis domyślny"}">
	
	<title>{$page_title|default:"Tytuł domyślny"}</title>	
	
	<script src="{$app_url}/js/jquery.min.js"></script>
	<script src="{$app_url}/js/softscroll.js"></script>
	<link rel="stylesheet" href="{$conf->app_url}/css/szablon.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">
	
</head>
<body>
    <div id="top" class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Your Site</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#app_content" class="pure-menu-link">Kalkulator</a></li>
            <li class="pure-menu-item"><a href="#top" class="pure-menu-link">Do góry</a></li>
            <li class="pure-menu-item"><a href="https://kakadu.pl/blog/wp-content/uploads/2014/06/pielegnacja-i-zywienie-kotki-w-ciazy.jpg" target="_blank" class="pure-menu-link">Obrazek</a></li>
        </ul>
    </div>
</div>
<!-- zdjecie z napisem-->
    <div class="splashC">
            <div class="splash">
                <h1 class="splash-head">{$page_title|default:"Tytuł domyślny"}</h1>
                <h6 class="splash-subhead">{$page_description|default:"Opis domyślny"}</h6>
                    <p>
                        <a href="#app_content" class="pure-button pure-button-primary " >Idź do formularza</a>
                    </p>	
            </div>
    </div>
    
    
    <div class="content-wrapper">
        <div class="content">
            <h2 class="content-head is-center">Prosty kalkulator kredytowy.</h2>

            <div class="pure-g">
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                    <h3 class="content-subhead">
                        <i class="fa fa-rocket"></i>
                        Możesz obliczyć swój kredyt!
                    </h3>
                    <p>
                        Nazwa chyba mówi sama za siebie, więc nie ma co opisywać
                    </p>
                </div>
                
            </div>
        </div>
        
        
        <div id="app_content" class="content">
        {block name=content} Domyślna treść zawartości .... {/block}

        </div>
    </div>

    <!-- !!!!!!!!!!footer -->
    <footer class="footer l-box is-center">
            <p>
            {block name=footer} Domyślna treść stopki .... {/block}
            </p>			
            <p class="">Autor przykładu Błażej Klimas. Widok oparty na stylu Marketing. <a href="https://gettemplates.co" target="_blank">GetTemplates.co</a>.</p>
    </footer>

</body>
</html>
