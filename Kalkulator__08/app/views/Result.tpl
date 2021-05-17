{extends file="main.tpl"}

{block name=content}
<body class="lista">
    <div class="bottom-margin">
        <a class="pure-button button-success" href="{$conf->action_root}calcShow">Powrót</a>
    </div>

    <div class="tablebox">
    <table id="tab_list" class="pure-table pure-table-bordered">
        <thead>
        <tr>
            <th>Kwota kredytu</th>
            <th>Lata spłaty</th>
            <th>Oprocentowanie</th>
            <th>Miesięczna rata</th>
            <th>Data obliczeń</th>
        </tr>
        </thead>
        <tbody>
        {foreach $wyniki as $p}
            {strip}
                <tr>
                    <td>{$p["kw"]}</td>
                    <td>{$p["ll"]}</td>
                    <td>{$p["op"]}</td>
                    <td>{$p["rata"]}</td>
                    <td>{$p["DATA"]}</td>
                </tr>
            {/strip}
        {/foreach}
        </tbody>
    </table>
    </div>
</body>
{/block}
