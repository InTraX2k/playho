{block name="title" prepend}{$LNG.siteTitleScreens}{/block}
{block name="content"}
<header id="blog-intro" class="intro-block bg-color-grad">
		<div class="container">
			<h1 class="slogan">{$LNG.siteScreenLogo}</h1>
		</div>
		<div class="block-bg" data-stellar-ratio="0.5" style="display: block; -webkit-transform: translate3d(0px, 0px, 0px);"></div>
	</header>
<body>
		<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="styles/img/1.jpg" alt="{$LNG.siteScreen1}">
      <div class="carousel-caption">
        <h3>{$LNG.siteScreen1}</h3>
        <p>{$LNG.siteScreen1Info}</p>
      </div>
    </div>

    <div class="item">
      <img src="styles/img/2.jpg" alt="{$LNG.siteScreen2}">
      <div class="carousel-caption">
        <h3>{$LNG.siteScreen2}</h3>
        <p>{$LNG.siteScreen2Info}</p>
      </div>
    </div>

    <div class="item">
      <img src="styles/img/3.jpg" alt="{$LNG.siteScreen3}">
      <div class="carousel-caption">
        <h3>{$LNG.siteScreen3}</h3>
        <p>{$LNG.siteScreen3Info}</p>
      </div>
    </div>

    <div class="item">
      <img src="styles/img/4.jpg" alt="{$LNG.siteScreen4}">
      <div class="carousel-caption">
        <h3>{$LNG.siteScreen4}</h3>
        <p>{$LNG.siteScreen4Info}</p>
      </div>
    </div>

    <div class="item">
      <img src="styles/img/5.jpg" alt="{$LNG.siteScreen5}">
      <div class="carousel-caption">
        <h3>{$LNG.siteScreen5}</h3>
        <p>{$LNG.siteScreen5Info}</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
{/block}