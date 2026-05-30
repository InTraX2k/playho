{block name="title" prepend}{$LNG.siteTitleIndex} — {/block}
{block name="content"}

<main id="hero">

  {* ── Login Card ───────────────────────────────────── *}
  <aside>
    <div class="login-card">
      <div class="login-card-header">
        <h2>⚡ ANMELDEN</h2>
        <p>Kehre ins Universum zurück</p>
      </div>
      <div class="login-divider"></div>

      {if $code}
      <div class="login-error">
        ⚠️
        {if $code == 1}Benutzername oder Passwort falsch.
        {elseif $code == 2}Dein Account wurde gesperrt.
        {else}Anmeldung fehlgeschlagen (Code {$code}).
        {/if}
      </div>
      {/if}

      <form id="login-form" method="post" action="index.php?page=login">
        <div class="form-group">
          <label class="form-label" for="login-email">E-Mail Adresse</label>
          <input class="form-control" type="email" id="login-email" name="email"
                 placeholder="deine@email.de" required autocomplete="username">
        </div>
        <div class="form-group">
          <label class="form-label" for="login-pass">Passwort</label>
          <input class="form-control" type="password" id="login-pass" name="password"
                 placeholder="••••••••" required autocomplete="current-password">
        </div>
        <div class="form-row">
          <label class="form-check">
            <input type="checkbox" name="remember_pass"> Angemeldet bleiben
          </label>
          <a href="index.php?page=lostPassword" class="form-link">Vergessen?</a>
        </div>
        <button type="submit" class="btn btn-primary btn-full btn-lg">
          🚀 Jetzt spielen
        </button>
      </form>

      <div class="login-footer">
        Noch kein Account?
        <a href="index.php?page=register">Kostenlos registrieren →</a>
      </div>

      <div class="stats-row">
        <div class="stat-item">
          <span class="stat-value">{$users_amount}</span>
          <span class="stat-label">Spieler</span>
        </div>
        <div class="stat-item">
          <span class="stat-value">{$new_member}</span>
          <span class="stat-label">Neu</span>
        </div>
        <div class="stat-item">
          <span class="stat-value">{$active}</span>
          <span class="stat-label">Online</span>
        </div>
        <div class="stat-item">
          <span class="stat-value">{$total_hof}</span>
          <span class="stat-label">HOF</span>
        </div>
      </div>
    </div>
  </aside>

  {* ── Hero Left ────────────────────────────────────── *}
  <div class="hero-left">

    <div class="hero-headline">
      <span class="hero-badge"><span class="badge-dot"></span> Jetzt verfügbar</span>
      <h1 class="hero-title">DOMINATE<br>THE UNIVERSE</h1>
      <p class="hero-subtitle">
        Baue dein Imperium, forsche Technologien, befehlige Flotten
        und kämpfe gegen Tausende Spieler im galaktischen Echtzeit-Krieg.
      </p>
    </div>

    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">🏗️</div>
        <div class="feature-title">Imperium aufbauen</div>
        <div class="feature-desc">Errichte Gebäude, erschließe Planeten, baue Ressourcen ab.</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🔬</div>
        <div class="feature-title">Technologien</div>
        <div class="feature-desc">Über 25 Technologien und 58 Skills — forme deine Strategie.</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🚀</div>
        <div class="feature-title">Flotten kommandieren</div>
        <div class="feature-desc">Starte Angriffe, erkunde Galaxien, verteilige deine Planeten.</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🤝</div>
        <div class="feature-title">Allianzen</div>
        <div class="feature-desc">Verbünde dich mit anderen Spielern und kontrolliere die Galaxie.</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon">💱</div>
        <div class="feature-title">Handel</div>
        <div class="feature-desc">Tausche Ressourcen und baue wirtschaftliche Macht auf.</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🎯</div>
        <div class="feature-title">Echtzeit-Kampf</div>
        <div class="feature-desc">Detaillierte Kampfberichte, Schnellangriff und ACS-Verteidigung.</div>
      </div>
    </div>

    {* ── News ──────────────────────────────────────── *}
    <div class="section-header">
      <h3 class="section-title">Aktuelle News</h3>
      <a href="index.php?page=news&mode=all" class="btn btn-ghost" style="font-size:0.8rem;padding:6px 14px;">Alle News →</a>
    </div>

    <div class="news-grid">
      {foreach $newsList as $newsRow}
      <a href="index.php?page=news&id={$newsRow.id}" class="news-card">
        {if isset($newsRow.image) && $newsRow.image}
          <img src="./media/{$newsRow.image}" alt="{$newsRow.title|htmlspecialchars}" class="news-card-img"
               onerror="this.style.display='none'">
        {else}
          <div class="news-card-img-placeholder">📡</div>
        {/if}
        <div class="news-card-body">
          <span class="news-card-date">📅 {$newsRow.date}</span>
          <div class="news-card-title">{$newsRow.title|htmlspecialchars}</div>
          <div class="news-card-text">{$newsRow.text|strip_tags|truncate:100:'...'}</div>
          <span class="news-card-more">Weiterlesen →</span>
        </div>
      </a>
      {foreachelse}
      <div class="news-empty">
        🌌 {$LNG.news_does_not_exist}
      </div>
      {/foreach}
    </div>

  </div>
</main>

{/block}

{block name="script" append}
<script>
if (loginError) {
  var msgs = {
    1: 'Benutzername oder Passwort falsch.',
    2: 'Account gesperrt.',
    3: 'Account noch nicht aktiviert.'
  };
}
</script>
{/block}
