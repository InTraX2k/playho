<footer id="footer-modern">
  <div class="footer-inner">
    <div class="footer-brand">
      <span class="logo-text">{$gameName}</span>
      <p>Ein kostenloses Browser-Weltraumspiel. Kämpfe, baue, herrsche über die Galaxis.</p>
    </div>
    <div class="footer-col">
      <h4>Spiel</h4>
      <a href="index.php?page=register">Jetzt spielen</a>
      <a href="index.php?page=rules">{$LNG.footer_block1_menu2}</a>
      <a href="index.php?page=news&mode=all">News</a>
      <a href="index.php?page=about">Über das Spiel</a>
    </div>
    <div class="footer-col">
      <h4>Account</h4>
      <a href="index.php?page=register">Registrieren</a>
      <a href="index.php?page=lostPassword">Passwort vergessen</a>
    </div>
    <div class="footer-col">
      <h4>Community</h4>
      <a href="index.php?page=galery">{$LNG.footer_block3_menu3}</a>
      <a href="index.php?page=disclamer">{$LNG.footer_block3_menu2}</a>
      <a href="index.php?page=jobs">{$LNG.footer_block3_menu4}</a>
    </div>
  </div>
  <div class="footer-bottom">
    <span>{$copyright}</span>
    <span>Powered by Playho 5.0.2</span>
  </div>
</footer>

{* ── Bottom Tab Bar (Mobile only) ─────────────────────── *}
<nav id="bottom-tabs" aria-label="Mobile Navigation">
  <div class="tab-bar">
    <a href="index.php" class="tab-item active">
      <span class="tab-icon">🏠</span>
      <span>Home</span>
    </a>
    <a href="index.php?page=news&mode=all" class="tab-item">
      <span class="tab-icon">📰</span>
      <span>News</span>
    </a>
    <button onclick="document.getElementById('login-modal').classList.add('active')"
            class="tab-item tab-item-cta">
      <span class="tab-icon">🚀</span>
      <span>Spielen</span>
    </button>
    <a href="index.php?page=register" class="tab-item">
      <span class="tab-icon">✨</span>
      <span>Konto</span>
    </a>
    <a href="index.php?page=galery" class="tab-item">
      <span class="tab-icon">🖼️</span>
      <span>Galerie</span>
    </a>
  </div>
</nav>

{* ── Login Modal ──────────────────────────────────────── *}
<div id="login-modal" class="modal-overlay"
     onclick="if(event.target===this)this.classList.remove('active')">
  <div class="modal-box">
    <button class="modal-close" aria-label="Schließen"
            onclick="document.getElementById('login-modal').classList.remove('active')">✕</button>
    <div class="login-card-header" style="margin-bottom:20px;">
      <h2>🚀 ANMELDEN</h2>
      <p>Kehre ins Universum zurück</p>
    </div>
    <form method="post" action="index.php?page=login">
      <div class="form-group">
        <label class="form-label" for="modal-email">E-Mail</label>
        <input class="form-control" type="email" id="modal-email" name="email"
               placeholder="deine@email.de" required autocomplete="username">
      </div>
      <div class="form-group">
        <label class="form-label" for="modal-pass">Passwort</label>
        <input class="form-control" type="password" id="modal-pass" name="password"
               placeholder="••••••••" required autocomplete="current-password">
      </div>
      <div class="form-row">
        <label class="form-check">
          <input type="checkbox" name="remember_pass"> Angemeldet bleiben
        </label>
        <a href="index.php?page=lostPassword" class="form-link">Vergessen?</a>
      </div>
      <button type="submit" class="btn btn-primary btn-full btn-lg">Jetzt spielen</button>
    </form>
    <div class="login-footer" style="margin-top:16px;">
      <a href="index.php?page=register">Neuen Account erstellen →</a>
    </div>
  </div>
</div>

{* ESC-Taste schließt Modal *}
<script>
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    document.getElementById('login-modal').classList.remove('active');
  }
});
</script>

</div>{* /page *}
</body>
</html>
