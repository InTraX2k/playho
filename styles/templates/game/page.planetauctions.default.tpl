{block name="title" prepend}Planet Auctions{/block}{block name="content"}<div id="page"><div id="content"><table style="100%"><tr><th colspan="8"><div style=" position:relative"><a href="#" style="top:3px;" onclick="return Dialog.manualinfo(12)" class="interrogation manual">?</a><form action="game.php?page=planeta" method="post"><input type="hidden" name="mode" value="sellshow"/><input type="submit" style="padding-left:10px;padding-right:10px;" title="Sell ​​planet" value="Sell ​​planet"/></form></div></th></tr><tr><th>№</th><th colspan="2">price</th><th>fields</th><th>Moon</th><th style="width:16px">&nbsp;</th><th>Time before the closing of the lot</th><th>action</th></tr>{foreach name=PlanetList item=RangeInfo from=$PlanetList}<tr><form action="game.php?page=planeta" method="post"><input type="hidden" name="mode" value="lotinfo"><input type="hidden" name="lotID" value="{$RangeInfo.auctionID}"><td>#{$RangeInfo.auctionID}</td><td style="text-align:right">{$RangeInfo.price}</td><td style="text-align:left">{if $RangeInfo.type==1}<span style="color:#3CF;">darkmatter</span>{elseif $RangeInfo.type==2}<span style="color:#FC3;">antimatter</span>{/if}</td><td>fields:{$RangeInfo.field_max}<br/>Used:{$RangeInfo.field_current}</td><td>{if $RangeInfo.id_luna==0}no{elseif $RangeInfo.id_luna !=0}<a href="#" onclick="return Dialog.painfo({$RangeInfo.id_luna})" style="color:#3C0">yes</a>{/if}</td><td><a href="#" onclick="return Dialog.painfo({$RangeInfo.planetID})"><img title="Information about the planet" src="./styles/images/Adm/i.gif" height="15px" width="15px"/></a></td><td>Remaining:{if !empty($RangeInfo.time)}<span class="countdown2" secs="{$RangeInfo.time}"></span>{/if}</td><td><input type="submit" title="More" value="More"/></td></form></tr>{/foreach}</table></div></div><div class="clear"></div></div>{/block}