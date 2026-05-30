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

{* Login Modal *}
<div id="login-modal" class="modal-overlay" onclick="if(event.target===this)this.classList.remove('active')">
  <div class="modal-box">
    <button class="modal-close" onclick="document.getElementById('login-modal').classList.remove('active')">✕</button>
    <div class="login-card-header" style="margin-bottom:20px;">
      <h2>ANMELDEN</h2>
    </div>
    <form method="post" action="index.php?page=login">
      <div class="form-group">
        <label class="form-label">E-Mail</label>
        <input class="form-control" type="email" name="email" placeholder="deine@email.de" required>
      </div>
      <div class="form-group">
        <label class="form-label">Passwort</label>
        <input class="form-control" type="password" name="password" placeholder="••••••••" required>
      </div>
      <button type="submit" class="btn btn-primary btn-full" style="margin-top:8px;">Anmelden</button>
    </form>
    <div class="login-footer" style="margin-top:16px;">
      <a href="index.php?page=register">Registrieren</a> &nbsp;·&nbsp;
      <a href="index.php?page=lostPassword">Passwort vergessen</a>
    </div>
  </div>
</div>

</div>{* /page *}
</body>
</html>
