<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta name="description" content="{$page_description|default:"Opis domyślny"}">
	
	<title>{$page_title|default:"Tytuł domyślny"}</title>	
	
	<script src="{$app_url}/js/jquery.min.js"></script>
	<script src="{$app_url}/js/softscroll.js"></script>
	<link rel="stylesheet" href="{$conf->app_url}/css/szablon_prosty.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	
</head>

<body style="margin: 20px;">

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Lista</a>
{if count($conf->roles)>0}
	<a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
{else}	
	<a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
{/if}
</div>

{block name=top} {/block}

{block name=messages}

{if $msgs->isError()}
<div class="messages error bottom-margin">
	<ul>
	{foreach $msgs->getErrors() as $msg}
	{strip}
		<li>{$msg}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{if $msgs->isInfo()}
<div class="messages info bottom-margin">
	<ul>
	{foreach $msgs->getInfos() as $msg}
	{strip}
		<li>{$msg}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}

{block name=bottom} {/block}


</body>
</html>
