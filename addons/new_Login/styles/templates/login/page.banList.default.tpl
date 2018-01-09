{block name="title" prepend}{$LNG.siteTitleBanList}{/block}
{block name="content"}
<header id="blog-intro" class="intro-block bg-color-grad">
		<div class="container">
			<h1 class="slogan">{$LNG.bn_players_banned_list}</h1>
		</div>
		<div class="block-bg" data-stellar-ratio="0.5" style="display: block; -webkit-transform: translate3d(0px, 0px, 0px);"></div>
	</header>


<table class="table table-responsive">
{if $banCount}
	<tr>
		<td style="text-align:right;" colspan="5">{$LNG.mg_page}: {if $page != 1}<a href="index.php?page=banList&amp;side={$page - 1}">&laquo;</a>&nbsp;{/if}{for $site=1 to $maxPage}<a href="index.php?page=banList&amp;side={$site}">{if $site == $page}<b>[{$site}]</b>{else}[{$site}]{/if}</a>{if $site != $maxPage}&nbsp;{/if}{/for}{if $page != $maxPage}&nbsp;<a href="index.php?page=banList&amp;side={$page + 1}">&raquo;</a>{/if}</td>
	</tr>
{/if}
  <caption>{$LNG.bn_players_banned_list}</caption>
  <thead>
		{if $isMultiUniverse}<p>
{html_options options=$universeSelect selected=$UNI class="changeUni" id="universe" name="universe"}
</p>{/if}
    <tr>
      <th scope="col">{$LNG.bn_from}</th>
      <th scope="col">{$LNG.bn_until}</th>
      <th scope="col">{$LNG.bn_player}</th>
      <th scope="col">{$LNG.bn_by}</th>
      <th scope="col">{$LNG.bn_reason}</th>
    </tr>
  </thead>
  <tbody>
{if $banCount}
	{foreach $banList as $banRow}
    <tr>
      <th scope="row">{$banRow.from}</th>
      <td>{$banRow.to}</td>
      <td>{$banRow.player}</td>
      <td><a href="mailto:{$banRow.mail}" title="{$banRow.info}">{$banRow.admin}</a></td>
      <td>{$banRow.theme}</td>
    </tr>
		{/foreach}
	<tr>
		<td style="text-align:right;" colspan="5">{$LNG.mg_page}: {if $page != 1}<a href="index.php?page=banList&amp;side={$page - 1}">&laquo;</a>&nbsp;{/if}{for $site=1 to $maxPage}<a href="index.php?page=banList&amp;side={$site}">{if $site == $page}<b>[{$site}]</b>{else}[{$site}]{/if}</a>{if $site != $maxPage}&nbsp;{/if}{/for}{if $page != $maxPage}&nbsp;<a href="index.php?page=banList&amp;side={$page + 1}">&raquo;</a>{/if}</td>
	</tr>
	<tr>
		<td colspan="5">{$LNG.bn_exists}{$banCount|number}{$LNG.bn_players_banned}</td>
	</tr>
{else}
	<tr>
		<td colspan="5">{$LNG.bn_no_players_banned}</td>
{/if}
    </tr>
  </tbody>
</table>
{/block}