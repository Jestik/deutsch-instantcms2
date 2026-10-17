<?php

    define('LANG_USERS_CONTROLLER',         'Benutzerprofile');

    define('LANG_USERS_LIST',               'Benutzerliste');
    define('LANG_USERS_PROFILE',            'Benutzerprofil');
    define('LANG_USERS_RESTRICTIONS',       'Einschränkungen');
    define('LANG_USERS_SOCIALITY',          'Soziales');
    define('LANG_USERS_EDIT_PROFILE',       'Profil bearbeiten');
    define('LANG_USERS_EDIT_USER',          'Benutzer bearbeiten');

    define('LANG_RULE_USERS_CHANGE_SLUG',   'Profil-URL ändern');
    define('LANG_USERS_RESTORE_PROFILE',    'Profil wiederherstellen');
    define('LANG_USERS_DELETE_PROFILE',     'Profil löschen');
    define('LANG_RULE_USERS_DELETE',        'Profil löschen');
    define('LANG_RULE_USERS_BIND_TO_PARENT', 'Einträge von Inhaltstypen verknüpfen');
    define('LANG_RULE_USERS_BIND_OFF_PARENT', 'Verknüpfung von Einträgen der Inhaltstypen aufheben');
    define('LANG_RULE_USERS_BAN',           'Benutzer sperren');
    define('LANG_PERM_OPTION_MY',           'Nur das eigene');
    define('LANG_PERM_OPTION_ANYUSER',      'Jeder Benutzer');
    define('LANG_USERS_DELETE_CONFIRM',     'Profil "%s" löschen?');
    define('LANG_USERS_DELETE_SUCCESS',     'Profil erfolgreich gelöscht');
    define('LANG_USERS_RESTORE_SUCCESS',    'Profil erfolgreich wiederhergestellt');
    define('LANG_USERS_DELETE_ADMIN_ERROR', 'Sie können keine Administratorprofile löschen');
    define('LANG_USERS_IS_DELETED',         'Profil gelöscht');

    define('LANG_USERS_EDIT_PROFILE_MAIN',  'Inhalt');
    define('LANG_USERS_EDIT_PROFILE_THEME', 'Design');
    define('LANG_USERS_EDIT_PROFILE_NOTICES', 'Benachrichtigungen');
    define('LANG_USERS_EDIT_PROFILE_PRIVACY', 'Privatsphäre');

    define('LANG_USERS_CFG_FIELDS',         'Profilfelder');
    define('LANG_USERS_CFG_TABS',           'Profilregister');
    define('LANG_USERS_CFG_OPTIONS',        'Einstellungen');
    define('LANG_USERS_CFG_MIGRATION',      'Gruppenwechsel');

    define('LANG_USERS_OPT_SHOW_USER_GROUPS', 'Gruppen anzeigen, denen der Benutzer angehört');
    define('LANG_USERS_OPT_SHOW_REG_DATA',  'Registrierungsdatum des Benutzers anzeigen');
    define('LANG_USERS_OPT_SHOW_LAST_VISIT','Letzten Besuch des Benutzers anzeigen');
    define('LANG_USERS_OPT_FRIENDSHIP',     'Freunde hinzufügen erlauben');
    define('LANG_USERS_OPT_THEME',          'Anpassung des Profildesigns erlauben');
    define('LANG_USERS_OPT_THEME_HINT',     'Funktioniert nur, wenn die Website-Vorlage diese Funktion unterstützt');
    define('LANG_USERS_OPT_MAX_TABS',       'Maximale Anzahl der Register');
    define('LANG_USERS_OPT_MAX_TABS_HINT',  'Weitere Register werden unter „Mehr...“ angezeigt<br>0 — unbegrenzt');
    define('LANG_USERS_OPT_AUTH_ONLY',      'Profile nur für angemeldete Benutzer sichtbar machen');
    define('LANG_USERS_OPT_RESTRICTED_SLUGS', 'Gesperrte Profiladressen');
    define('LANG_USERS_OPT_RESTRICTED_SLUGS_HINT', 'Eine Adresse pro Zeile. Das Zeichen * kann als Platzhalter verwendet werden');
    define('LANG_USERS_OPT_RESTRICTED_SLUG', 'Die Verwendung der Profiladresse <b>%s</b> ist nicht erlaubt');
    define('LANG_RULE_USERS_CHANGE_EMAIL',   'Änderung der E-Mail-Adresse erlauben');
    define('LANG_RULE_USERS_CHANGE_EMAIL_PERIOD', 'Wartezeit für eine erneute Änderung der E-Mail-Adresse (Tage)');
    define('LANG_RULE_USERS_CHANGE_EMAIL_PERIOD_HINT', 'Wenn nicht angegeben, kann die Adresse jederzeit geändert werden');
    define('LANG_USERS_EMAIL_VERIFY', 'Eine E-Mail wurde an <b>%s</b> gesendet. Folgen Sie dem Link in der Nachricht, um die Änderung der E-Mail-Adresse zu bestätigen');
    define('LANG_USERS_OPT_WALL_ENABLED',   'Profil-Pinnwand aktivieren');
    define('LANG_USERS_OPT_STATUSES_ENABLED',   'Profilstatus aktivieren');
    define('LANG_USERS_OPT_KARMA_ENABLED',   'Bewertung der Reputation aktivieren');
    define('LANG_USERS_OPT_KARMA_COMMENTS', 'Begründung bei einer Reputationsbewertung anfordern');
    define('LANG_USERS_OPT_KARMA_TIME',     'Abstimmungszeitraum für die Reputation (Tage)');
    define('LANG_USERS_OPT_KARMA_TIME_HINT','Ein Benutzer kann die Reputation eines anderen Benutzers nur einmal innerhalb des angegebenen Zeitraums bewerten');
    define('LANG_USERS_OPT_MAX_FRIENDS_COUNT', 'Maximale Anzahl von Freunden auf der Profilstartseite');

    define('LANG_USERS_MIG_TITLE',              'Regelname');
    define('LANG_USERS_MIG_IS_ACTIVE',          'Regel aktiv');
    define('LANG_USERS_MIG_ADD',                'Wechselregel erstellen');
    define('LANG_USERS_MIG_DELETE_CONFIRM',     'Regel "{title}" löschen?');
    define('LANG_USERS_MIG_ACTION',             'Aktionstyp');
    define('LANG_USERS_MIG_ACTION_CHANGE',      'Gruppe wechseln');
    define('LANG_USERS_MIG_ACTION_ADD',         'Gruppe hinzufügen');
    define('LANG_USERS_MIG_FROM',               'Ausgangsgruppe');
    define('LANG_USERS_MIG_TO',                 'Zielgruppe');
    define('LANG_USERS_MIG_COND_DATE',          'Datumsbedingung');
    define('LANG_USERS_MIG_PASSED_DAYS',        'Tage');
    define('LANG_USERS_MIG_PASSED',             'Mindestens vergangene Tage');
    define('LANG_USERS_MIG_PASSED_FROM',        'Seit');
    define('LANG_USERS_MIG_PASSED_REG',         'der Registrierung');
    define('LANG_USERS_MIG_PASSED_MIG',         'dem letzten Wechsel');
    define('LANG_USERS_MIG_COND_RATING',        'Bewertungseinschränkung');
    define('LANG_USERS_MIG_COND_KARMA',         'Reputationseinschränkung');
    define('LANG_USERS_MIG_RATING',             'Bewertung über');
    define('LANG_USERS_MIG_KARMA',              'Reputation über');
    define('LANG_USERS_MIG_NOTIFY',             'Über den Wechsel benachrichtigen');
    define('LANG_USERS_MIG_NOTIFY_TEXT',        'Benachrichtigungstext');

    define('LANG_USERS_KARMA_COMMENT',      'Bitte begründen Sie, warum Sie diese Bewertung abgeben');

    define('LANG_USERS_OPT_DS_SHOW',        'Register "%s" anzeigen');
    define('LANG_USERS_DS_LATEST',          'Neueste');
    define('LANG_USERS_DS_SUBSCRIBERS',     'Beliebt bei Abonnenten');
    define('LANG_USERS_DS_POPULAR',         'Beliebt');
    define('LANG_USERS_DS_ONLINE',          'Online');
    define('LANG_USERS_DS_RATED',           'Bewertet');
    define('LANG_USERS_DS_DATE_LOG',        'Datum des letzten Besuchs');
    define('LANG_USERS_OPT_LIST_ALLOWED',   'Liste sichtbar für');

    define('LANG_USERS_OPT_FILTER_SHOW',    'Filter anzeigen');

    define('LANG_USERS_FIELD_PRIVATE',      'Feld nur dem Profilinhaber anzeigen');

    define('LANG_USERS_PROFILE_INDEX',      'Profil');
    define('LANG_USERS_PROFILE_CONTENT',    'Inhalte');
    define('LANG_USERS_PROFILE_FRIENDS',    'Freunde');
    define('LANG_USERS_PROFILE_ACTIVITY',   'Aktivität');
    define('LANG_USERS_PROFILE_FEED',       'Feed');

    define('LANG_USERS_PROFILE_WALL',       'Benutzer-Pinnwand');

    define('LANG_USERS_PROFILE_REGDATE',    'Registrierung');
    define('LANG_USERS_PROFILE_INVITED_BY', 'Eingeladen von');

    define('LANG_USERS_PROFILE_IS_HIDDEN',  'Persönliche Informationen sind aufgrund der Privatsphäre-Einstellungen verborgen');
    define('LANG_USERS_CONTENT_IS_HIDDEN',  '%s hat die Anzeige der eigenen %s-Liste eingeschränkt');

    define('LANG_USERS_FRIENDS',            'Freunde');
    define('LANG_USERS_FRIENDS_ADD',        'Als Freund hinzufügen');
    define('LANG_USERS_FRIENDS_DELETE',     'Aus der Freundesliste entfernen');
    define('LANG_USERS_KEEP_IN_SUBSCRIBERS', 'Als Abonnent behalten');
    define('LANG_USERS_FRIENDS_CONFIRM',    'Freundschaftsanfrage an Benutzer %s senden?');
    define('LANG_USERS_SUBSCRIBE_CONFIRM',    'Neuigkeiten von Benutzer %s abonnieren?');
    define('LANG_USERS_UNSUBSCRIBE_CONFIRM',    'Benutzer %s nicht mehr abonnieren?');
    define('LANG_USERS_FRIENDS_DELETE_CONFIRM', 'Benutzer <b>%s</b> aus Ihrer Freundesliste entfernen?');
    define('LANG_USERS_FRIENDS_SUBSCRIBE_CONFIRM', 'Benutzer <b>%s</b> aus Ihrer Freundesliste entfernen und als Abonnent behalten?');
    define('LANG_USERS_FRIENDS_SENT',       'Freundschaftsanfrage gesendet');
    define('LANG_USERS_SUBSCRIBE_SUCCESS',  'Sie haben das Abonnement erfolgreich abgeschlossen');
    define('LANG_USERS_UNSUBSCRIBE_SUCCESS',  'Sie haben das Abonnement erfolgreich beendet');
    define('LANG_USERS_FRIENDS_DELETED',    '%s aus der Freundesliste entfernt');
    define('LANG_USERS_FRIENDS_DECLINED',   '%s hat Ihre Freundschaftsanfrage abgelehnt');
    define('LANG_USERS_KEEP_IN_SUBSCRIBERS_NOTICE',   '%s hat Sie als Abonnent behalten');
    define('LANG_USERS_FRIENDS_NOTICE',     '%s möchte mit Ihnen befreundet sein');
    define('LANG_USERS_FRIENDS_DONE',       '%s ist jetzt mit Ihnen befreundet');
    define('LANG_USERS_SUBSCRIBE_DONE',     '%s hat Sie abonniert');
    define('LANG_USERS_UNSUBSCRIBE_DONE',   '%s hat Ihr Abonnement beendet');
    define('LANG_USERS_FRIENDS_UNDONE',     '%s hat die Freundschaft mit Ihnen beendet');

    define('LANG_USERS_NOTIFY_VIA_NONE',    'Nicht benachrichtigen');
    define('LANG_USERS_NOTIFY_VIA_EMAIL',   'Per E-Mail');
    define('LANG_USERS_NOTIFY_VIA_PM',      'Auf der Website');
    define('LANG_USERS_NOTIFY_VIA_BOTH',    'Per E-Mail und auf der Website');

    define('LANG_USERS_PRIVACY_FOR_ANYONE',  'Alle');
    define('LANG_USERS_PRIVACY_FOR_FRIENDS', 'Nur Freunde');
    define('LANG_USERS_PRIVACY_FOR_NOBODY',  'Niemand');

    define('LANG_USERS_NOTIFY_FRIEND_ADD',     'Über Freundschaftsanfragen benachrichtigen');
    define('LANG_USERS_NOTIFY_FRIEND_ACCEPT',  'Über angenommene Freundschaftsanfragen benachrichtigen');
    define('LANG_USERS_NOTIFY_FRIEND_DELETE',  'Über beendete Freundschaften benachrichtigen');

    define('LANG_USERS_PRIVACY_FRIENDSHIP',    'Wer darf Ihnen Freundschaftsanfragen senden?');
    define('LANG_USERS_PRIVACY_SHOW_REG_DATA', 'Wer darf Ihr Registrierungsdatum sehen?');
    define('LANG_USERS_PRIVACY_SHOW_LAST_VISIT', 'Wer darf Ihren letzten Besuch sehen?');
    define('LANG_USERS_PRIVACY_SHOW_USER_GROUPS', 'Wer darf Ihre Gruppen sehen?');
    define('LANG_USERS_PRIVACY_PROFILE_VIEW',  'Wer darf Ihr Profil ansehen?');
    define('LANG_USERS_PRIVACY_PROFILE_WALL',  'Wer darf auf Ihre Pinnwand schreiben?');
    define('LANG_USERS_PRIVACY_PROFILE_WALL_REPLY', 'Wer darf Einträge auf Ihrer Pinnwand kommentieren?');
    define('LANG_USERS_PRIVACY_PROFILE_CTYPE',  'Wer darf Ihre %s-Liste ansehen?');

    define('LANG_USERS_FRIENDS_SPELLCOUNT',     'Freund|Freunde|Freunde');

    define('LANG_USERS_ACTIVITY_FRIENDS',       'und %s sind jetzt befreundet');

    define('LANG_USERS_LOCK_USER',              'Benutzer sperren');
    define('LANG_USERS_LOCKED_NOTICE',          'Ihr Profil wurde gesperrt.');
    define('LANG_USERS_LOCKED_NOTICE_PUBLIC',   'Gesperrt');
    define('LANG_USERS_LOCKED_NOTICE_UNTIL',    'Die Sperre läuft ab am: %s');
    define('LANG_USERS_LOCKED_NOTICE_REASON',   'Grund der Sperre: %s');

    define('LANG_USERS_WHAT_HAPPENED',          'Was gibt es Neues, %s?');
    define('LANG_USERS_DELETE_STATUS_CONFIRM',  'Aktuellen Status löschen?');

    define('LANG_RULE_USERS_VOTE_KARMA',       'Reputation anderer Benutzer bewerten');
    define('LANG_RULE_USERS_WALL_ADD',         'Einträge auf der Pinnwand hinzufügen');
    define('LANG_RULE_USERS_WALL_DELETE',      'Einträge von der Pinnwand löschen');

    define('LANG_USERS_KARMA_LOG',          'Reputationsverlauf');
    define('LANG_USERS_KARMA_LOG_EMPTY',    'Bisher hat niemand eine Bewertung abgegeben');

    define('LANG_USERS_MY_INVITES',         'Meine Einladungen');
    define('LANG_USERS_INVITES_COUNT',      'Sie können %s versenden');
    define('LANG_USERS_INVITES_LINKS',      'Oder teilen Sie Einladungslinks');
    define('LANG_USERS_INVITES_SPELLCOUNT', 'Einladung|Einladungen|Einladungen');
    define('LANG_USERS_INVITES_EMAIL',      'E-Mail-Adresse zum Versenden einer Einladung');
    define('LANG_USERS_INVITES_EMAILS',     'E-Mail-Adressen zum Versenden von Einladungen');
    define('LANG_USERS_INVITES_EMAILS_HINT','Eine Adresse pro Zeile');
    define('LANG_USERS_INVITES_SENT_TO',    'Einladungen erfolgreich an folgende Adressen gesendet');
    define('LANG_USERS_INVITES_FAILED_TO',  'Einladungen konnten nicht an folgende Adressen gesendet werden');
    define('LANG_USERS_SESSIONS',  'Sitzungen');
    define('LANG_USERS_SESSIONS_DELETE',  'Sitzung erfolgreich beendet');
    define('LANG_SESS_DESKTOP',  'Desktop-PC');
    define('LANG_SESS_TABLET',  'Tablet');
    define('LANG_SESS_MOBILE',  'Mobiltelefon');
    define('LANG_SESS_APP',  'Anwendung');
    define('LANG_SESS_NOT_FOUND',  'Keine aktiven gespeicherten Sitzungen.');
    define('LANG_SESS_DROP',  'beenden');
    define('LANG_SESS_DROP_CONFIRM',  'Diese Sitzung beenden?');
    define('LANG_SESS_IP',  'IP-Adresse');
    define('LANG_SESS_LAST_DATE',  'Letzte Aktivität');
    define('LANG_SESS_TYPE',  'Zugriffstyp');
    define('LANG_SESSIONS_HINT',  'Hier werden Sitzungen mit aktivem Zugriff angezeigt, bei denen Sie bei der Anmeldung "Angemeldet bleiben" ausgewählt haben, sowie Sitzungen aus mobilen Apps. Sie können jede Sitzung jederzeit beenden.');
    define('LANG_USERS_SLUG',  'Adresse Ihrer Seite');
