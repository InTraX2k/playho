<nav id="navbar">
  <div class="navbar-inner">

    <a href="index.php" class="logo-link">
      <img src="./media/images/logo.png" alt="{$gameName}" onerror="this.style.display='none'">
      <span class="logo-text">{$gameName}</span>
    </a>

    {* Desktop Nav Links *}
    <div class="nav-links">
      <a href="index.php">Home</a>
      <a href="index.php?page=about">Über</a>
      <a href="index.php?page=galery">Galerie</a>
      <a href="index.php?page=news&mode=all">News</a>
      <a href="index.php?page=rules">Regeln</a>
    </div>

    <div class="nav-cta">
      {if count($languages) > 1}
      <select id="lang-select" onchange="document.cookie='lang='+this.value+';path=/'; location.reload();"
        style="background:var(--bg-card);border:1px solid var(--border);color:var(--text-mid);padding:6px 10px;border-radius:8px;font-family:inherit;font-size:0.8rem;cursor:pointer;min-height:44px;">
        {foreach $languages as $langKey => $langName}
          <option value="{$langKey}">{$langName}</option>
        {/foreach}
      </select>
      {/if}
      <a href="index.php?page=register" class="btn btn-outline">Registrieren</a>
      <button onclick="document.getElementById('login-modal').classList.add('active')" class="btn btn-primary">
        Anmelden
      </button>
      {* Hamburger für Mobile *}
      <button class="hamburger" id="hamburger-btn" aria-label="Menü öffnen" onclick="toggleMenu()">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>
</nav>

{* Mobile Drawer *}
<div class="nav-drawer" id="nav-drawer">
  <a href="index.php">🏠 Home</a>
  <a href="index.php?page=about">ℹ️ Über das Spiel</a>
  <a href="index.php?page=galery">🖼️ Galerie</a>
  <a href="index.php?page=news&mode=all">📰 News</a>
  <a href="index.php?page=rules">📋 Regeln</a>
  <div class="drawer-divider"></div>
  <a href="index.php?page=register">✨ Registrieren</a>
  <button onclick="document.getElementById('nav-drawer').classList.remove('open');document.getElementById('hamburger-btn').classList.remove('open');document.getElementById('login-modal').classList.add('active');"
    class="tab-item-cta drawer-cta nav-drawer">🚀 Anmelden</button>
</div>

<script>
function toggleMenu() {
  var btn    = document.getElementById('hamburger-btn');
  var drawer = document.getElementById('nav-drawer');
  btn.classList.toggle('open');
  drawer.classList.toggle('open');
}
// Drawer schließen bei Klick außerhalb
document.addEventListener('click', function(e) {
  var btn = document.getElementById('hamburger-btn');
  var drawer = document.getElementById('nav-drawer');
  if (!btn.contains(e.target) && !drawer.contains(e.target)) {
    btn.classList.remove('open');
    drawer.classList.remove('open');
  }
});
</script>
