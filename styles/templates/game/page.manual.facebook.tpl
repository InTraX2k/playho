{block name="title" prepend}Manual Information{/block}
{block name="content"}
<div id="fb-root"></div>
<script>window.fbAsyncInit = function() {
    FB.init({
        appId: '328011467238834',
        status: true,
        cookie: true,
        xfbml: true,
        oauth: true
    });
    FB.Event.subscribe('edge.create', function(response) {
       xhr = $.ajax({
    type: 'POST',
    url: 'game.php?page=overview&mode=facebook',
    dataType: 'json',
    global: false,
    success: function(json) {
	}
    });
    });
	
	FB.Event.subscribe('edge.remove', function(response) {
       xhr = $.ajax({
    type: 'POST',
    url: 'game.php?page=overview&mode=facebookbis',
    dataType: 'json',
    global: false,
    success: function(json) {
	}
    });
    });
};
(function(d) {
    var js, id = 'facebook-jssdk';
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement('script');
    js.id = id;
    js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>
<div id="ally_content" class="conteiner" style="width:auto;">
        <div class="gray_stripe">
		Facebook
    </div>
        <div class="ally_contents" style="text-align:center">
		
<td style="text-align:center" colspan="2"> Like uns auf facebook und erhalte: <span style="color:#F90">500,000 Dunkle Materie</span> + <span style="color:#F90">5,000 Anti Materie</span> als Belohnung. <br>Sie können diese Fenster schließen, nachdem Sie uns geliked haben<br><span style="font-size:10px;">Achtung: Beim entfernen des Likes , wirst du deine Belohnung verlieren</span>.  </td><br><br>



<div class="fb-like-box" data-href="https://www.facebook.com/battlethegalaxy" data-send="false" data-show-faces="true"></div>

<div class="manual_btn_blokc">
	<a class="manual_btn_ok" href="game.php?page=overview" onclick="endfacebook()" target="_parent">Schließe dieses Fenster!</a>
</div>

    </div>        
</div>


{/block}