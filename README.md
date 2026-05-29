# Playho — Browser-Strategie-Spiel

**Version:** 5.0.2  
**Lizenz:** GPL-2.0  
**PHP:** 8.3+  
**Datenbank:** MySQL 5.7+ / MariaDB 10.3+

---

## Über das Projekt

Playho ist ein browserbasiertes Multiplayer-Strategie- und Kampfspiel.  
Spieler bauen Planeten aus, forschen Technologien, kämpfen mit Flotten und handeln Ressourcen.

**Stack:**
- PHP 8.3 (vollständig migriert)
- MySQL/MariaDB
- Smarty 4.5.4 (Template-Engine)
- PHPMailer 6.9.3 (E-Mail)
- AJAXChat (MySQLi)

---

## Installation

### Voraussetzungen

- Webserver (Apache/Nginx) mit PHP 8.3+
- MySQL 5.7+ oder MariaDB 10.3+
- PHP-Extensions: `pdo_mysql`, `mysqli`, `mbstring`, `curl`, `gd`

### Schritte

1. Dateien in das Web-Root kopieren
2. Datenbank anlegen und `install/install.sql` importieren
3. `includes/config.php` mit Datenbankzugangsdaten befüllen
4. Web-Server auf das Verzeichnis zeigen lassen
5. `install/` Verzeichnis nach der Installation **vom Web-Root entfernen** oder via `.htaccess` sperren (bereits konfiguriert)

### Umgebungsvariablen (Pflicht)

Folgende Secrets **niemals** im Source-Code speichern — als Umgebungsvariablen oder in einer `.env`-Datei (außerhalb des Web-Roots) setzen:

| Variable | Beschreibung |
|----------|-------------|
| `XSOLLA_SECRET_KEY` | Xsolla Webhook-Secret |
| `XSOLLA_DB_USER` | Datenbankbenutzer (Xsolla) |
| `XSOLLA_DB_PASS` | Datenbankpasswort (Xsolla) |
| `XSOLLA_DB_NAME` | Datenbankname (Xsolla) |
| `SR_APP_SECRET` | SuperRewards App-Secret |
| `SR_DB_USER` | Datenbankbenutzer (SuperRewards) |
| `SR_DB_PASSWORD` | Datenbankpasswort (SuperRewards) |
| `SR_DB_NAME` | Datenbankname (SuperRewards) |
| `IPN_DB_HOST` | Datenbankhost (PayPal IPN) |
| `IPN_DB_NAME` | Datenbankname (PayPal IPN) |
| `IPN_DB_USER` | Datenbankbenutzer (PayPal IPN) |
| `IPN_DB_PASS` | Datenbankpasswort (PayPal IPN) |
| `VOTESYSTEM_SECRET` | Shared Secret für Vote-Callbacks (ivnss.php) |

---

## Sicherheit

Das Projekt wurde einem vollständigen Security-Audit unterzogen. Alle gefundenen Schwachstellen wurden behoben:

### Behobene Schwachstellen

| Schwere | Beschreibung |
|---------|-------------|
| 🔴 Kritisch | `eval()` für DB-Formeln → `safeEval()` mit Whitelist-Validator |
| 🔴 Kritisch | `shell_exec()` ohne `escapeshellarg()` → behoben |
| 🔴 Kritisch | SQL-Injection via nicht-gecasteten `$_POST`-Werten → `(int)`-Casts |
| 🔴 Kritisch | MD5-Passwort-Hashing → `password_hash()`/`password_verify()` + bcrypt |
| 🔴 Kritisch | Hardcodierte DB-Credentials → Umgebungsvariablen |
| 🔴 Kritisch | PayPal IPN ohne VERIFIED-Prüfung → Validierung erzwungen |
| 🟠 Hoch | `unserialize()` ohne Klassen-Whitelist → `allowed_classes: false` |
| 🟠 Hoch | TinyMCE Path-Traversal → Allowlist-Validierung |
| 🟠 Hoch | Backup-Dumps im Web-Root → nach `../backups/` verlegt |
| 🟠 Hoch | BBCode XSS (`[img]`, `[mailto]`, `[php]`) → URL-Validierung + Escaping |
| 🟠 Hoch | Kein Rate-Limiting beim Login → 5 Versuche / 15 Min. |
| 🟠 Hoch | Session-Fixation → `session_regenerate_id(true)` nach Login |
| 🟠 Hoch | Timing-Angriff auf Session-Token → `hash_equals()` |
| 🟠 Hoch | IP-Whitelist für Vote-Callbacks nicht erzwungen → behoben |
| 🟡 Mittel | Numerische SQL-Injection in Admin-Pages → `(int)`-Casts |

### Sicherheitshinweise für den Betrieb

- **HTTPS erzwingen** — kein HTTP in Produktion
- **`install/`-Verzeichnis sperren** nach der Erstinstallation (`.htaccess` vorhanden)
- **Fehler-Logs** nicht im Web-Root ablegen (`error_log`, `ipn.log`)
- **`display_errors = Off`** in `php.ini` für Produktivbetrieb (bereits in `common.php` gesetzt)
- **Datenbankbenutzer** nur mit den benötigten Rechten ausstatten (kein `GRANT ALL`)

---

## PHP-Migration

Das Projekt wurde vollständig von **PHP 5.x auf PHP 8.3** migriert:

- Alle `mysql_*`-Funktionen durch PDO/MySQLi ersetzt
- `magic_quotes`-Workarounds entfernt
- `create_function()` → anonyme Funktionen
- `each()` → `foreach`
- Curly-Brace-String-Zugriff `$str{n}` → `$str[n]`
- PHP4-Stil-Konstruktoren → `__construct()`
- Smarty 3.1.13 → **4.5.4**
- PHPMailer 5.2.4 → **6.9.3**
- AJAXChat → MySQLi-Backend

---

## Changelog

### 5.0.2 (aktuell)
- PHP 8.3-Kompatibilität vollständig hergestellt
- Alle kritischen Sicherheitslücken behoben
- Drittanbieter-Bibliotheken aktualisiert (Smarty 4.5.4, PHPMailer 6.9.3)
- Passwort-Hashing auf bcrypt migriert (Legacy-MD5-Hashes werden bei Login automatisch migriert)

---

## Lizenz

GPL-2.0 — siehe [LICENSE](LICENSE)
