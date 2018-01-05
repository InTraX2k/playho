{block name="title" prepend}Paypal{/block}
{block name="content"}
<div id="page">
<div id="content">
 <script>
	  $(function(){
		$("#paypal_form").submit();
	  });
	  </script>
	  <form method="post" id="paypal_form" name="paypal_form" action="https://www.paypal.com/cgi-bin/webscr">
	  {foreach from=$fields item=i key=k}
		{$i.text}
	  {/foreach}
	 <div id="ally_content" class="conteiner" style="width:500px;">
    <div class="gray_stripe">
       {$LNG.fcm_info}                    
    </div> 
	<div class="ally_contents">
		<h3>Ihre Anfrage wird bearbeitet und Sie werden zur PayPal-Website weitergeleitet.</h3><br>Dieser Vorgang dauert 5 Sekunden. Wenn Sie nicht automatisch umgeleitet werden ...<br></h3><br>Vergessen Sie nach der Zahlung nicht, auf den ZURÜCK-BUTTON zu drücken, um die DM auf Ihr Konto zu transferieren....<br><br><input type="submit" value="zu Paypal">
	</div>
</div>

	  </form>
{/block}