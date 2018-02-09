<table class="tablesorter ally_ranks">
            <tr>
	<th colspan="2">{$LNG.st_position}</th>
	<th>{$LNG.st_player}</th>
	<th>{$LNG.ov_race}</th>
	<th>&nbsp;</th>
	<th>{$LNG.st_alliance}</th>
	<th>{$LNG.st_points}</th>
</tr>
{foreach name=RangeList item=RangeInfo from=$RangeList}
<tr>
	<td>{if $RangeInfo.rank == 1}
						<img src="styles/images/iconav/trophee_1.png" />
						{elseif $RangeInfo.rank == 2}
						<img src="styles/images/iconav/trophee_2.png" />
						{elseif $RangeInfo.rank == 3}
						<img src="styles/images/iconav/trophee_3.png" />
						{else}{$RangeInfo.rank}{/if}</td>
    <td>{if $RangeInfo.ranking == 0}<span style='color:#87CEEB'>*</span>{elseif $RangeInfo.ranking < 0}<span style='color:red'>{$RangeInfo.ranking}</span>{elseif $RangeInfo.ranking > 0}<span style='color:green'>+{$RangeInfo.ranking}</span>{/if}</td>
	<td>
	
	
	
	
    	<a href="#" onclick="return Dialog.Playercard({$RangeInfo.id}, '{$RangeInfo.name}');"{if $RangeInfo.id == $CUser_id} style="color:lime"{elseif $RangeInfo.isEnnemie > 0 }style="color:red"{elseif $RangeInfo.isFriend > 0}style="color:#eae45c"{/if}
		>{$RangeInfo.name}</a>
		{if $RangeInfo.isnoob == 1}
                (<span class="galaxy-short-noob">n</span>)  
		{elseif $RangeInfo.isnoob == 2}
		(<span class="galaxy-short-strong">s</span>)  
		{/if}
		{if $RangeInfo.isVac == 0}
                (<span class="galaxy-short-vacation">v</span>) {/if} 
				{if $RangeInfo.isInac == 0}
                (<span class="galaxy-short-inactive">i</span>) {/if}
				</td>
				<td><img src='../../../../styles/theme/gow/interface/race/{$RangeInfo.race}.png'></td>
	<td>{if $RangeInfo.id != $CUser_id}<a href="#" onclick="return Dialog.PM({$RangeInfo.id});"><img src="./styles/images/iconav/mesages.png" title="private Message" alt="private Message"></a>{/if}</td>
	<td>{if $RangeInfo.allyid != 0}<a href="game.php?page=alliance&amp;mode=info&amp;id={$RangeInfo.allyid}">{if $RangeInfo.allyid == $CUser_ally}<span style="color:#33CCFF">{$RangeInfo.allyname}</a>{if $RangeInfo.fraction2 != 0}<a class="tooltip" data-tooltip-content="Level {$RangeInfo.level}">{$RangeInfo.fraction}{/if}</span>{else}{$RangeInfo.allyname}{/if}</a>{if $RangeInfo.fraction2 != 0}<a class="tooltip" data-tooltip-content="Level {$RangeInfo.level}">{$RangeInfo.fraction}{/if}{else}-{/if}</td>
	<td>{$RangeInfo.points}</td>
</tr>



	
{/foreach}
 </table>
    <div class="gray_stripe">
    	<span style='color:#FFDEAD' class="tooltip" data-tooltip-content="<table>
	<tr>
		<th colspan='2'><span style='color:F30'>Spieler</span></th>
	</tr>
	<tr>
		<td style='text-align:left;'>Freunde</td>
		<td style='text-align:left;'><span style='color:yellow'>Name</span></td>
	</tr>
	<tr>
		<td style='text-align:left;'>Feinde</td>
		<td style='text-align:left;'><span style='color:red'>Name</span></td>
	</tr>
	
	
	<tr>
		<th colspan='2'>Allianz</th>
	</tr>
	<tr>
		<td style='text-align:left;'>Verbündete</td>
		<td style='text-align:left;'><span style='color:#32CD32'>Name</span></td>
	</tr>
	<tr>
		<td style='text-align:left;'>Im Krieg</td>
		<td style='text-align:left;'><span style='color:#FF0000'>Name</span></td>
	</tr>
	<tr>
		<td style='text-align:left;'>Deine Allianz</td>
		<td style='text-align:left;'><span style='color:#33CCFF'>Name</span></td>
	</tr>
</table>">Erklärung zur Farbe</span>
    </div>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>