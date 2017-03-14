{block name="title" prepend}{$LNG.tut_welcome}{/block}
{block name="content"}
  <div id="planet" class="shortHeader">
   <h2>{$LNG.tut_m8_name} - {$Si8}{$No8}</h2>
  </div>

  <div class="boxWrapper">
   <div class="tutHeader">
	<div id="tutList">
		<ul>
			<li><a id="tutorialBack" href="game.php?page=tutorial&mode=m1">{$Si1}{$No1}</a></li>
			<li><a id="tutorialBack" href="game.php?page=tutorial&mode=m2">{$Si2}{$No2}</a></li>
			<li><a id="tutorialBack" href="game.php?page=tutorial&mode=m3">{$Si3}{$No3}</a></li>
			<li><a id="tutorialBack" href="game.php?page=tutorial&mode=m4">{$Si4}{$No4}</a></li>
			<li><a id="tutorialBack" href="game.php?page=tutorial&mode=m5">{$Si5}{$No5}</a></li>
			<li><a id="tutorialBack" href="game.php?page=tutorial&mode=m6">{$Si6}{$No6}</a></li>
			<li><a id="tutorialBack" href="game.php?page=tutorial&mode=m7">{$Si7}{$No7}</a></li>
			<li><a id="tutorialBack" href="game.php?page=tutorial&mode=m8">{$Si8}{$No8}</a></li>
			<li><a id="tutorialBack" href="game.php?page=tutorial&mode=m9">{$Si9}{$No9}</a></li>
		</ul>
	</div>
   </div>

<table width="100%">
	<tr>
		<td class="k" colspan="3">
			<img src="{$dpath}gebaeude/208.png" class="pic" alt="">
		</td>
		<td class="k" colspan="7">
			<p>{$LNG.tut_m8_desc}</p>
		</td>
	</tr>
	<tr>
		<td class="k" colspan="10">
			<h3 style="text-align:left">{$LNG.tut_objects}:</h3>
				<ul id="aufgabe_liste" style="text-align:left">
					<li class="aufzaehlungszeichen">{$LNG.tut_m8_quest} {$Si_m8_1}{$No_m8_1}{$Si8}</li>
					<li class="aufzaehlungszeichen">{$LNG.tut_m8_quest2} {$Si_m8_2}{$No_m8_2}{$Si8}</li>
					<li class="aufzaehlungszeichen">{$LNG.tut_m8_quest3} {$Si_m8_3}{$No_m8_3}{$Si8}</li>
				</ul>
				<div style="color:orange">{$LNG.tut_m8_gain}</div>
		</td>
	</tr>
	{if $Si8}
	<tr>
		<td colspan=9>
			<a href ="game.php?page=tutorial&mode=m9">
				<input class="btn_blue" type="submit" value="{$LNG.tut_go_to} {$LNG.tut_m9}" onclick="window.location='game.php?page=tutorial&mode=m9'"/>
			</a>
		</td>
	</tr>
	{/if}
	<tr>
	</tr>
</table>
</div>
{/block}