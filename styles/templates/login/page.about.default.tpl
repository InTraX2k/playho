{block name="title" prepend}
{$LNG.siteTitleIndex}{/block}
{block name="content"}
<link rel="stylesheet" type="text/css" href="/styles/css/fb-traffic-pop.css">


<div id="content">
  <div id="right_side">
    <div class="right_menu">
      <h3>
        Categories
      </h3>
      <ul>
        <li>
          <a href="index.php?page=news&mode=notif">
            Notifications
          </a>
        </li>
        <li>
          <a href="index.php?page=news&mode=contest">
            Contests
          </a>
        </li>
        <li>
          <a href="index.php?page=news&mode=stock">
            Stock
          </a>
        </li>
        <li>
          <a href="index.php?page=news&mode=update">
            News
          </a>
        </li>
        <li>
          <a href="index.php?page=news&mode=all">
            All
          </a>
        </li>
      </ul>
    </div>
    <div class="related_articles">
      <h3>
        Latest News
      </h3>
      <div class="hr">
      </div>
      {foreach $newsList as $newsRow}
      <a href="index.php?page=news&id={$newsRow.id}">
        {$newsRow.title}
      </a>
      <div class="clear">
      </div>
      {foreachelse}
      <h1>
        {$LNG.news_does_not_exist}
      </h1>
      {/foreach}
    </div>
    <div class="forums">
      <h3>
        Latest Topics
      </h3>
      <div class="hr">
      </div>
      <a title="" href="forum" class="more" target="_blank">
        Go to the forum ...
      </a>
    </div>
  </div>
  <div class="conteiner">
    <div class="article">
      <div id="news">
        <h2>
          About {$gameName}
        </h2>
        <br/>
        <p align="justify">
          <span>
            Willkommen zu {$gameName}. Die Spielgeschwindigkeit wird angepasst unm das Gameplay zu genießen und nicht lange auf neue Entwicklungen in der Spielwelt zu warten. Kämpfe mit Hunderten oder sogar Tausenden von Spielern im Universum zur gleichen Zeit, um den Titel des besten Spielers, um dieses spannende und unterhaltsame Strategiespiel zu spielen, brauchst du nur einen Internetbrowser. Testen Sie Ihr können und Versuchen Sie alles, um die einzigartige wirtschaftliche und militärische Struktur zu verbessern.n Behaupten Sie sich imKampf gegen andere Spieler und Allianzen. Gehen Sie Bündnisse ein gründen Sie Allianzen.
          </span>
        </p>
        <p align="justify">
          &nbsp;
        </p>
        <p align="justify">
          Das Spiel beginnt mit einem kleinen Planeten, der in Zukunft die Hauptstadt des ganzen Imperiums wird. Für die Weiterentwicklung Ihres Imperiums steht Ihnen die neuste Technologie, neue Gebäude, neue Schiffe und Verteidigungsanlagen zu Verfügung. Im Spiel gibt es mehrere Möglichkeiten, Imperium aufzubauen. Werden Sie Miner, senden Sie Ressourcen an alle Freunde oder werden Sie ein professioneller Kämpfer, der Ressourcen mit Hilfe seiner starken Flotte produziert.
        </p>
        <p align="justify">
          &nbsp;
        </p>
        <p align="justify">
          Um in 
          <span>
            {$gameName}
          </span>
          zu überleben müssen Sie gleichzeitig viele Dinge überwachen: entwickeln, bauen, Verteidigen, Flotte vergrößern, und all dies unter der Aufsicht von aggressiven mitspielern. Um erfolgreich zu sein, müssen Sie Allianzen beitreten.
        </p>
        <p align="justify">
          &nbsp;
        </p>
      </div>
    </div>
  </div>
  <div class="clear">
  </div>
</div>
{/block}
