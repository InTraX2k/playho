{block name="title" prepend}Achievements{/block}{block name="content"}
{if $manual_28_step == 0}
<script type="text/javascript">
	$(function() {
		qtips('.ach_head', 'During the game you can do differents achievements. Pick any favorite achievement and begin completing it. As reward, you get  {$LNG.ach_points} and antimatter, how higher the succesfull achievement, how higher the reward.', 'leftMiddle', 'topRight');

	});
	</script>
{/if}<div id="page"><div id="content"><div id="achivment"><div class="ach_main_block"><div class="ach_head"><div class="ach_head_p">{$LNG.ach_prog}</div><div class="ach_head_right"> {$LNG.ach_ach}: <span>460</span></div></div><div class="ach_main_content"><div class="ach_menu"><ul><li class="active"><a href="game.php?page=Achievements&amp;group=general">{$LNG.ach_general}</a></li><li ><a href="game.php?page=Achievements&amp;group=daily">{$LNG.ach_daily}</a></li><li ><a href="game.php?page=Achievements&amp;group=build">{$LNG.alm_buildings}</a></li><li ><a href="game.php?page=Achievements&amp;group=tech">{$LNG.alm_reseach}</a></li><li ><a href="game.php?page=Achievements&amp;group=fleet">{$LNG.alm_fleets}</a></li><li ><a href="game.php?page=Achievements&amp;group=def">{$LNG.alm_defense}</a></li><li ><a href="game.php?page=Achievements&amp;group=varia">Misc</a></li></ul>

</div><div class="ach_content_box"><div style="float:left;width:100%;"><div class="ach_content"><div class="stars_2">{$total_points_metal}</div><div class="ach_next_info tooltip" data-tooltip-content="<span style='color:#F90;font-weight:bold;'> {$LNG.ach_bonus_next}</span><br>&bull;{$next_am_metal} {$LNG.tech.922} <br>&bull;{$next_points_metal} {$LNG.ach_points}">?</div><div class="ach_img"><img alt="" src="styles/images/achiev/ach_mine_metal.png" ></div><div class="ach_content_text"><div class="ach_text_head"><span>metal lvl.{$achievements_metal_level}</span></div><div class="ach_text_boby"><p>{$LNG.ach_build_1}</p></div><div class="ach_text_need"><p>  {$LNG.ach_perform}<br><span >metal mine lvl.{$achievement_next_require_metal}</span><br></p></div></div><div class="clear"></div></div><div class="ach_content"><div class="stars_2">{$total_points_crystal}</div><div class="ach_next_info tooltip" data-tooltip-content="<span style='color:#F90;font-weight:bold;'> {$LNG.ach_bonus_next}</span><br>&bull;{$next_am_crystal} {$LNG.tech.922} <br>&bull;{$next_points_crystal} {$LNG.ach_points}">?</div><div class="ach_img"><img alt="" src="styles/images/achiev/ach_crystal_mine.png" ></div><div class="ach_content_text"><div class="ach_text_head"><span>crystal lvl.{$achievements_crystal_level}</span></div><div class="ach_text_boby"><p>{$LNG.ach_build_2}</p></div><div class="ach_text_need"><p>  {$LNG.ach_perform}<br><span >crystal mine lvl.{$achievement_next_require_crystal}</span><br></p></div></div><div class="clear"></div></div><div class="ach_content"><div class="stars_2">{$total_points_deuterium}</div><div class="ach_next_info tooltip" data-tooltip-content="<span style='color:#F90;font-weight:bold;'> {$LNG.ach_bonus_next}</span><br>&bull;{$next_am_deuterium} {$LNG.tech.922} <br>&bull;{$next_points_deuterium} {$LNG.ach_points}">?</div><div class="ach_img"><img alt="" src="styles/images/achiev/ach_deuterium_sintetizer.png" ></div><div class="ach_content_text"><div class="ach_text_head"><span>deuterium lvl.{$achievements_deuterium_level}</span></div><div class="ach_text_boby"><p>{$LNG.ach_build_3}</p></div><div class="ach_text_need"><p>  {$LNG.ach_perform}<br><span >deuterium mine lvl.{$achievement_next_require_deuterium}</span><br></p></div></div><div class="clear"></div></div><div class="ach_content"><div class="stars_2">{$total_points_light}</div><div class="ach_next_info tooltip" data-tooltip-content="<span style='color:#F90;font-weight:bold;'> {$LNG.ach_bonus_next}</span><br>&bull;{$next_am_light} {$LNG.tech.922} <br>&bull;{$next_points_light} {$LNG.ach_points}">?</div><div class="ach_img"><img alt="" src="styles/images/achiev/ach_conveyor1.png" ></div><div class="ach_content_text"><div class="ach_text_head"><span>light conveyor lvl.{$achievements_light_level}</span></div><div class="ach_text_boby"><p>{$LNG.ach_build_4}</p></div><div class="ach_text_need"><p>  {$LNG.ach_perform}<br><span >light conveyor lvl.{$achievement_next_require_light}</span><br></p></div></div><div class="clear"></div></div><div class="ach_content"><div class="stars_2">{$total_points_medium}</div><div class="ach_next_info tooltip" data-tooltip-content="<span style='color:#F90;font-weight:bold;'> {$LNG.ach_bonus_next}</span><br>&bull;{$next_am_medium} {$LNG.tech.922} <br>&bull;{$next_points_medium} {$LNG.ach_points}">?</div><div class="ach_img"><img alt="" src="styles/images/achiev/ach_conveyor2.png" ></div><div class="ach_content_text"><div class="ach_text_head"><span>medium conveyor lvl.{$achievements_medium_level}</span></div><div class="ach_text_boby"><p>{$LNG.ach_build_5}</p></div><div class="ach_text_need"><p>  {$LNG.ach_perform}<br><span >medium conveyor lvl.{$achievement_next_require_medium}</span><br></p></div></div><div class="clear"></div></div><div class="ach_content"><div class="stars_2">{$total_points_heavy}</div><div class="ach_next_info tooltip" data-tooltip-content="<span style='color:#F90;font-weight:bold;'> {$LNG.ach_bonus_next}</span><br>&bull;{$next_am_heavy} {$LNG.tech.922} <br>&bull;{$next_points_heavy} {$LNG.ach_points}">?</div><div class="ach_img"><img alt="" src="styles/images/achiev/ach_conveyor3.png" ></div><div class="ach_content_text"><div class="ach_text_head"><span>heavy conveyor lvl.{$achievements_heavy_level}</span></div><div class="ach_text_boby"><p>{$LNG.ach_build_6}</p></div><div class="ach_text_need"><p>  {$LNG.ach_perform}<br><span >heavy conveyor lvl.{$achievement_next_require_heavy}</span><br></p></div></div><div class="clear"></div></div><div class="ach_content"><div class="stars_2">{$total_points_university}</div><div class="ach_next_info tooltip" data-tooltip-content="<span style='color:#F90;font-weight:bold;'> {$LNG.ach_bonus_next}</span><br>&bull;{$next_am_university} {$LNG.tech.922} <br>&bull;{$next_points_university} {$LNG.ach_points}">?</div><div class="ach_img"><img alt="" src="styles/images/achiev/ach_university.png" ></div><div class="ach_content_text"><div class="ach_text_head"><span>university lvl.{$achievements_university_level}</span></div><div class="ach_text_boby"><p>{$LNG.ach_build_7}</p></div><div class="ach_text_need"><p>  {$LNG.ach_perform}<br><span >university lvl.{$achievement_next_require_university}</span><br></p></div></div><div class="clear"></div></div><div class="ach_content"><div class="stars_2">{$total_points_moon}</div><div class="ach_next_info tooltip" data-tooltip-content="<span style='color:#F90;font-weight:bold;'> {$LNG.ach_bonus_next}</span><br>&bull;{$next_am_moon} {$LNG.tech.922} <br>&bull;{$next_points_moon} {$LNG.ach_points}">?</div><div class="ach_img"><img alt="" src="styles/images/achiev/ach_mondbasis.png" ></div><div class="ach_content_text"><div class="ach_text_head"><span>moon base lvl.{$achievements_moon_level}</span></div><div class="ach_text_boby"><p>{$LNG.ach_build_8}</p></div><div class="ach_text_need"><p>  {$LNG.ach_perform}<br><span >moon base lvl.{$achievement_next_require_moon}</span><br></p></div></div><div class="clear"></div></div><div class="ach_content"><div class="stars_2">{$total_points_phalanx}</div><div class="ach_next_info tooltip" data-tooltip-content="<span style='color:#F90;font-weight:bold;'> {$LNG.ach_bonus_next}</span><br>&bull;{$next_am_phalanx} {$LNG.tech.922} <br>&bull;{$next_points_phalanx} {$LNG.ach_points}">?</div><div class="ach_img"><img alt="" src="styles/images/achiev/ach_phalanx.png" ></div><div class="ach_content_text"><div class="ach_text_head"><span>phalanx lvl.{$achievements_phalanx_level}</span></div><div class="ach_text_boby"><p>{$LNG.ach_build_9}</p></div><div class="ach_text_need"><p>  {$LNG.ach_perform}<br><span >phalanx sensor lvl.{$achievement_next_require_phalanx}</span><br></p></div></div><div class="clear"></div></div><div class="ach_content"><div class="stars_2">{$total_points_terraformer}</div><div class="ach_next_info tooltip" data-tooltip-content="<span style='color:#F90;font-weight:bold;'> {$LNG.ach_bonus_next}</span><br>&bull;{$next_am_terraformer} {$LNG.tech.922} <br>&bull;{$next_points_terraformer} {$LNG.ach_points}">?</div><div class="ach_img"><img alt="" src="styles/images/achiev/ach_terraformer.png" ></div><div class="ach_content_text"><div class="ach_text_head"><span>terraformer lvl.{$achievements_terraformer_level}</span></div><div class="ach_text_boby"><p>{$LNG.ach_build_10}</p></div><div class="ach_text_need"><p>  {$LNG.ach_perform}<br><span >terraformer lvl.{$achievement_next_require_terraformer}</span><br></p></div></div><div class="clear"></div></div></div><div style="padding-top:7px;"></div><div class="clear"></div></div></div></div></div></div></div><div class="clear"></div></div>{/block}