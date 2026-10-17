<?php

    define('LANG_PAGE_TITLE',               'InstantCMS-Installation');
    define('LANG_INSTALLATION_WIZARD',      'Installationsassistent');
    define('LANG_NEXT',                     'Weiter &rarr;');
    define('LANG_ERROR',                    'Fehler');
    define('LANG_FROM',                     'von');
    define('LANG_DEPRECATED',               'Veraltet');

    define('LANG_MANUAL',                   '<a href="https://docs.instantcms.ru/en/manual/install" target="_blank" rel="noopener noreferrer">Installationshandbuch</a>');

    define('LANG_LANGUAGE_SELECT_RU',       'Пожалуйста, выберите язык');
    define('LANG_LANGUAGE_SELECT_EN',       'Please select a language');
	define('LANG_LANGUAGE_SELECT_EN',       'Bitte wählen Sie eine Sprache aus');

    define('LANG_STEP_LANGUAGE',            'Sprache');
    define('LANG_STEP_START',               'Einführung');
    define('LANG_STEP_LICENSE',             'Lizenz');
    define('LANG_STEP_PHP_CHECK',           'PHP-Prüfung');
    define('LANG_STEP_PATHS',               'Pfade');
    define('LANG_STEP_DATABASE',            'Datenbank');
    define('LANG_STEP_SITE',                'Website');
    define('LANG_STEP_ADMIN',               'Administration');
    define('LANG_STEP_CONFIG',              'Konfiguration');
    define('LANG_STEP_ADDONS',              'Erweiterungen');
    define('LANG_STEP_ADDONS_WARN',         'Sie installieren eine Version mit Erweiterungen von Drittanbietern.<br>Die Autoren von InstantCMS sind für diese Erweiterungen nicht verantwortlich.');
    define('LANG_STEP_ADDONS_HINT',         'Zu installierende Erweiterungen:');
    define('LANG_STEP_CRON',                'Zeitplanung');
    define('LANG_STEP_FINISH',              'Abschluss');

    define('LANG_STEP_START_1',             'Der Installationsassistent von InstantCMS prüft, ob Ihr Server die Systemanforderungen erfüllt.');
    define('LANG_STEP_START_2',             'Der Assistent stellt Ihnen einige Fragen, die für die korrekte Installation und Konfiguration erforderlich sind.');

    define('LANG_LICENSE_AGREE',            'Ich stimme den Lizenzbedingungen zu');
    define('LANG_LICENSE_ERROR',            'Sie müssen den Lizenzbedingungen zustimmen');
    define('LANG_LICENSE_NOTE',             'InstantCMS steht unter der <a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0.html" target="_blank" rel="noopener noreferrer">GNU/GPL</a>-Lizenz, Version 2.');
    define('LANG_LICENSE_ORIGINAL',         'Englisch');
    define('LANG_LICENSE_TRANSLATION',      'Deutsch');

    define('LANG_PHP_VERSION',              'PHP-Version');
    define('LANG_PHP_VERSION_REQ',          'PHP 7.2 oder höher ist erforderlich');
    define('LANG_PHP_VERSION_DESC',         'Installierte Version');
    define('LANG_PHP_VARIABLES',            'PHP-Konfiguration');
    define('LANG_PHP_VARIABLES_HINT',       'Erforderliche Voraussetzungen sind grau markiert');
    define('LANG_PHP_VARIABLES_ON',         'Ein');
    define('LANG_PHP_VARIABLES_OFF',        'Aus');
    define('LANG_PHP_EXTENSIONS',           'Erforderliche Erweiterungen');
    define('LANG_PHP_EXTENSIONS_REQ',       'Diese Erweiterungen sind für InstantCMS erforderlich');
    define('LANG_PHP_EXTENSIONS_EXTRA',     'Empfohlene Erweiterungen');
    define('LANG_PHP_EXTENSIONS_EXTRA_REQ', 'Diese Erweiterungen sind optional; <br>Aktualisierungs- und Cachefunktionen sind möglicherweise nicht verfügbar.');
    define('LANG_PHP_EXT_INSTALLED',        'Installiert');
    define('LANG_PHP_EXT_NOT_INSTALLED',    'Nicht gefunden');
    define('LANG_PHP_CHECK_ERROR',          'Sie können mit der Installation erst fortfahren, wenn alle rot markierten Voraussetzungen erfüllt sind.');
    define('LANG_PHP_CHECK_ERROR_HINT',     'Bitten Sie den Support Ihres Hosting-Anbieters, die erforderlichen Voraussetzungen zu schaffen, und starten Sie die Installation erneut.');

    define('LANG_PATHS_ROOT_INFO',          'Alle Pfade beziehen sich auf:<br/><span class="root-path">%s</span>');
    define('LANG_PATHS_ROOT_CHANGE',        'Ändern');
    define('LANG_PATHS_CHANGE_INFO',        'Sie können die Pfade später in der Konfigurationsdatei ändern.<br/>Denken Sie daran, dies nach der Übertragung vom lokalen Server auf das Hosting zu tun!');
    define('LANG_PATHS_MUST_WRITABLE',      'Muss beschreibbar sein');
    define('LANG_PATHS_NOT_WRITABLE',       'nicht beschreibbar!');
    define('LANG_PATHS_WRITABLE_HINT',      'Legen Sie die richtigen Berechtigungen für den Ordner fest');

    define('LANG_PATHS_ROOT',               'Website-Stammverzeichnis');
    define('LANG_PATHS_ROOT_PATH',          'Stammverzeichnispfad');
    define('LANG_PATHS_ROOT_HOST',          'Stamm-URL');
    define('LANG_PATHS_UPLOAD',             'Uploads');
    define('LANG_PATHS_UPLOAD_PATH',        'Upload-Pfad');
    define('LANG_PATHS_UPLOAD_HOST',        'Upload-URL');
    define('LANG_PATHS_CACHE',              'Cache');
    define('LANG_PATHS_CACHE_PATH',         'Cache-Pfad');
    define('LANG_PATHS_SESSION',            'Sitzungen');
    define('LANG_PATHS_SESSION_PATH',       'Speicherpfad für Sitzungen');
    define('LANG_PATHS_SESSIONS_BASEDIR',    'Der vollständige Dateisystempfad muss einem der folgenden Pfade entsprechen: ');

    define('LANG_DATABASE_INFO',            'Geben Sie die Verbindungsdaten für Ihre MySQL-Datenbank ein');
    define('LANG_DATABASE_HOST',            'MySQL-Server');
    define('LANG_DATABASE_USER',            'Benutzername');
    define('LANG_DATABASE_PASS',            'Passwort');
    define('LANG_DATABASE_BASE',            'Datenbank');
    define('LANG_DATABASE_BASE_HINT',       'Falls nicht vorhanden, erstellen');
    define('LANG_DATABASE_ENGINE',          'Datenbank-Engine');
    define('LANG_DATABASE_ENGINE_HINT',     'Wenn Sie unsicher sind, wählen Sie InnoDB.');
    define('LANG_DATABASE_CHARSET',         'Datenbank-Kollation');
    define('LANG_DATABASE_PREFIX',          'Tabellenpräfix');
    define('LANG_DATABASE_USERS_TABLE',     'Benutzertabelle');
    define('LANG_DATABASE_USERS_TABLE_NEW', 'Neue erstellen');
    define('LANG_DATABASE_USERS_TABLE_OLD', 'Vorhandene Tabelle verwenden');
    define('LANG_DATABASE_INSTALL_DEMO',    'Demoinhalte installieren');

    define('LANG_DATABASE_PREFIX_ERROR',    'Das Datenbankpräfix darf nur Buchstaben, Zahlen und Unterstriche enthalten');
    define('LANG_DATABASE_SELECT_ERROR',    'Die Datenbank "%s" kann nicht ausgewählt werden');
    define('LANG_DATABASE_CONNECT_ERROR',   "MySQL-Verbindungsfehler:\n\n%s");
    define('LANG_DATABASE_BASE_ERROR',      "Fehler beim Import der Datenbank\nBitte überprüfen Sie die eingegebenen Daten");
    define('LANG_DATABASE_ENGINE_NO',       'Die Datenbank-Engine wird nicht unterstützt');
    define('LANG_DATABASE_ENGINE_DISABLED', 'Die Datenbank-Engine wird unterstützt, ist aber in den MySQL-Einstellungen deaktiviert');
    define('LANG_DATABASE_ENGINE_ERROR',    'Der Server unterstützt diese Datenbank-Engine nicht');
    define('LANG_DATABASE_CH_ERROR',        'Der Server unterstützt diese Tabellen-Kollation nicht');

    define('LANG_SITE_SITENAME',            "Name der Website");
    define('LANG_SITE_HOMETITLE',           "Titel der Startseite");
    define('LANG_SITE_METAKEYS',            "Schlüsselwörter");
    define('LANG_SITE_METADESC',            "Beschreibung");
    define('LANG_SITE_CHECK_UPDATE',        "Automatisch nach InstantCMS-Aktualisierungen suchen");
    define('LANG_SITE_TEMPLATE',            'Website-Vorlage');
    define('LANG_SITE_TEMPLATE_ADMIN',      'Vorlage des Administrationsbereichs');

    define('LANG_SITE_SITENAME_ERROR',      "Der Name der Website ist erforderlich");
    define('LANG_SITE_HOMETITLE_ERROR',     "Der Titel der Startseite ist erforderlich");

    define('LANG_ADMIN_EXTERNAL',           'Die Administratorinformationen werden aus der Tabelle <b>%s</b> übernommen');
    define('LANG_ADMIN_INFO',               'Daten des Hauptadministrators');
    define('LANG_ADMIN_NAME',               'Name');
    define('LANG_ADMIN_EMAIL',              'E-Mail-Adresse');
    define('LANG_ADMIN_PASS',               'Passwort');
    define('LANG_ADMIN_PASS2',              'Passwort wiederholen');

    define('LANG_ADMIN_ERROR',              'Alle Felder sind erforderlich');
    define('LANG_ADMIN_EMAIL_ERROR',        'Ungültige E-Mail-Adresse');
    define('LANG_ADMIN_PASS_ERROR',         'Die Passwörter stimmen nicht überein');
    define('LANG_ADMIN_PASS_HASH_ERROR',    'Fehler beim Erstellen des Passwort-Hashes. Bitte versuchen Sie es erneut.');
    define('LANG_VALIDATE_MIN_LENGTH',      'Der Wert des Feldes %s ist zu kurz (Mindestlänge: %s)');
    define('LANG_VALIDATE_MAX_LENGTH',      'Der Wert des Feldes %s ist zu lang (Höchstlänge: %s)');

    define('LANG_CONFIG_INFO',              'Die Konfigurationsdatei wird jetzt erstellt.');
    define('LANG_CONFIG_PATH',              'Dateipfad:');
    define('LANG_CONFIG_MUST_WRITABLE',     'Der Ordner muss beschreibbar sein.');
    define('LANG_CONFIG_AFTER',             'Machen Sie den Ordner und seine Dateien nach dem Erstellen der Konfigurationsdatei schreibgeschützt.');
    define('LANG_CONFIG_NOT_WRITABLE',      'Ordner ist nicht beschreibbar');

    define('LANG_CRON_1',                   'Damit InstantCMS ordnungsgemäß funktioniert, müssen Sie auf Ihrem Webserver einen CRON-Auftrag einrichten.');
    define('LANG_CRON_2',                   'Dadurch kann das System regelmäßig Aufgaben im Hintergrund ausführen.');
    define('LANG_CRON_FILE',                'Auszuführende Datei: <b>%s</b>');
    define('LANG_CRON_INT',                 'Intervall: <b>5 Minuten</b>');
    define('LANG_CRON_EXAMPLE',             'Der Befehl für die Zeitplanung sieht üblicherweise so aus:');
    define('LANG_CRON_SUPPORT_1',           'Weitere Informationen zu CRON-Einstellungen finden Sie im FAQ-Bereich der Website Ihres Hosting-Anbieters.');
    define('LANG_CRON_SUPPORT_2',           'Wenn Sie Schwierigkeiten haben, kopieren Sie den obigen Text und wenden Sie sich an den Support Ihres Hosting-Anbieters.');

    define('LANG_FINISH_1',                 'Die Installation von InstantCMS ist abgeschlossen.');
    define('LANG_FINISH_2',                 'Löschen Sie vor dem Fortfahren den Ordner <b>install</b> aus dem Stammverzeichnis.');

    define('LANG_FINISH_TO_SITE',           'Website aufrufen');

    define('LANG_CFG_OFF_REASON',           'Die Website ist wegen Wartungsarbeiten geschlossen');
    define('LANG_CFG_SITENAME',             'InstantCMS 2');
    define('LANG_CFG_HOMETITLE',            'InstantCMS 2');
    define('LANG_CFG_DATE_FORMAT',          'd.m.Y');
    define('LANG_CFG_DATE_FORMAT_JS',       'dd.mm.yy');
    define('LANG_CFG_TIME_ZONE',            'Europe/Berlin');
    define('LANG_CFG_METAKEYS',             'Website, Blog, Community');
    define('LANG_CFG_METADESC',             'Meine Community-Website');

    define('LANG_RB_ERROR_MANIFEST',        'Vervollständigen Sie die Datei manifest.php');
    define('LANG_RB_TITLE',                 'InstantCMS %s anpassen');
    define('LANG_RB_DEL_ALL',               'Alle Komponenten bis auf die erforderlichen entfernen?');
    define('LANG_RB_CREATE_ZIP',            'ZIP-Archiv erstellen?');
    define('LANG_RB_START',                 'InstantCMS wird angepasst …');
    define('LANG_RB_ADD_COM',               'Erweiterung %s wird vorinstalliert …');
    define('LANG_RB_DEL_COM',               'Komponente %s wird entfernt');
    define('LANG_RB_DEL_SER',               'Dienstdateien werden entfernt …');
    define('LANG_RB_SET_PERM',              'Legen Sie die richtigen Berechtigungen fest …');
    define('LANG_RB_START_ARCH',            'Archivierung wird gestartet …');
    define('LANG_RB_SUCCES_ARCH',           'Die Archivierung ist abgeschlossen. Die Datei befindet sich unter %s');
    define('LANG_RB_DONE',                  'Anpassung erfolgreich abgeschlossen.');
    define('LANG_RB_DONE_HINT',             'Sie können jetzt mit der Installation von InstantCMS beginnen.');
