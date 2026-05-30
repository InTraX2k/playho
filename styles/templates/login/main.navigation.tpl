<nav id="navbar">
  <div class="navbar-inner">

    <a href="index.php" class="logo-link">
      <img src="./media/images/logo.png" alt="{$gameName}" onerror="this.style.display='none'">
      <span class="logo-text">{$gameName}</span>
    </a>

    <div class="nav-links">
      <a href="index.php">{$LNG.main_navigation_menu2}</a>
      <a href="index.php?page=about">{$LNG.main_navigation_menu3}</a>
      <a href="index.php?page=galery">{$LNG.main_navigation_menu4}</a>
      <a href="index.php?page=news&mode=all">News</a>
      <a href="index.php?page=rules">Regeln</a>
    </div>

    <div class="nav-cta">
      {if count($languages) > 1}
      <form action="" style="display:inline;">
        <select id="lang-select" style="background:var(--bg-card);border:1px solid var(--border);color:var(--text-mid);padding:6px 10px;border-radius:8px;font-family:inherit;font-size:0.8rem;cursor:pointer;">
          {foreach $languages as $langKey => $langName}
            <option value="{$langKey}">{$langName}</option>
          {/foreach}
        </select>
      </form>
      {/if}
      <a href="index.php?page=register" class="btn btn-outline">Registrieren</a>
      <button onclick="document.getElementById('login-modal').classList.add('active')" class="btn btn-primary">Anmelden</button>
    </div>

  </div>
</nav>

<script src="scripts/login/selectLang.js"></script>
