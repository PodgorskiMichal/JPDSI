{extends file="main.tpl"}

{block name=footer}Przykładowa stopka{/block}

{block name=content}

<h2 class="content-head is-center">Kalkulator</h2>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post"">
            <fieldset class="lol">

                <label for="id_kw">Kwota: </label>
                <input id="id_kw" class="ip" type="text" name="kw" style="width: 9em" placeholder="Kwota" value="{$form->kw}">

                <label for="id_ll">Liczba lat: </label>
                <input id="id_x" type="text" name="ll" style="width: 9em" placeholder="Liczba lat" value="{$form->ll}">

                <label for="id_op">Oprocentowanie: </label>

                <select id="id_op" name="op" style="width: 9em">

                    <option value="0">0%</option>
                    <option value="1">1%</option>
                    <option value="2">2%</option>
                    <option value="3">3%</option>
                    <option value="4">4%</option>
                    <option value="5">5%</option>

                </select>

                <button type="submit" class="pure-button pure-button-primary" >Oblicz</button>
            </fieldset>
        </form>
    </div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

    {* wyświeltenie listy błędów, jeśli istnieją *}
    {if $msgs->isError()}
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
                {foreach  $msgs->getErrors() as $err}
                    {strip}
                        <li>{$err}</li>
                    {/strip}
                {/foreach}
            </ol>
    {/if}

    {* wyświeltenie listy informacji, jeśli istnieją *}
    {if $msgs->isInfo()}
            <h4>Informacje: </h4>
            <ol class="inf">
                {foreach  $msgs->getInfos() as $inf}
                    {strip}
                        <li>{$inf}</li>
                    {/strip}
                {/foreach}
            </ol>
    {/if}

    {if isset($res->result)}
        <h4>Wynik</h4>
        <p class="res">
            {$res->result}
        </p>
    {/if}

</div>
</div>

{/block}