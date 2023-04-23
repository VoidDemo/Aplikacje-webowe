{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=footer} {/block}

{block name=content}



<div class= "bg-white">
<h2 class="col-md-8 content-head is-center">Oblicz wysokość raty</h2>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
        <form action="{$conf->app_url}/app/calc.php" method="get" class="pure-form pure-form-stacked">
            
                <div class="col-md-6 form-input">
                <label for="x">Kwota</label>
                <input id="x" type="text" placeholder="PLN" name="x" value="{$form->x}">
                </div>
                <div class="col-md-6 form-input">
                <label for="y">Okres spłaty</label>
                <input id="y" type="text" placeholder="Lata" name="y" value="{$form->y}">
                </div>
                <div class="col-md-6 form-input">
                <label for="z">Oprocentowanie</label>		
                <input id="z" type="text" placeholder="%" name="z" value="{$form->z}">

                </div>
                
                <button class="pure-button" type="submit" name="submit">Oblicz</button>
                <br>
                


        </form>	
    </div>
</div>
    {if $msgs->isError()}
            <br>
            <h4>Wystąpiły błędy: </h4>
            <ol style="padding: 1em 1em 1em 3em; border-radius: 1em; background-color: #f55; color: #222; width: 22%">
            {foreach $msgs->getErrors() as $err}
            {strip}
                <li>{$err}</li>
            {/strip}
            {/foreach}
            </ol>
    {/if}



    {if $msgs->isInfo()}
        {if count ( $infos ) > 0}
        <h4>Informacje: </h4>
        <ol style="padding: 1em 1em 1em 3em; border-radius: 1em; background-color: #8f8; color: #222; width: 22%">
        {foreach $msgs->getInfos() as $msg}
            {strip}
                <li>{$msg}</li>
            {/strip}
            {/foreach}
            </ol>
                <br>
        {/if}
    {/if}
<div class="pure-g"> 
    <div >
    {if isset($res->$result)} 
        <h4>Rata wyniesie</h4>
        <p style="padding: 1em 1em 1em 1em;
	border-radius: 1em;
	background-color: #1f8dd6;
	color: #222;"> 
        {$res->$result} PLN
        </p>
        <br>
    {/if}
    </div>
</div>
<br>


{/block}