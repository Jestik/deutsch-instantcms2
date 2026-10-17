<?php

define('LANG_REDIRECT_CONTROLLER', 'Weiterleitungen');
define('LANG_REDIRECT_H1', 'Weiterleitung zu einem externen Link');
define('LANG_REDIRECT_HINT1', 'Sie verlassen die Website «<a href="%s">%s</a>» über den externen Link <a rel="nofollow" href="%s">%s</a>.');
define('LANG_REDIRECT_HINT2', 'Wir übernehmen keine Verantwortung für den Inhalt der Website <b>%s</b> und empfehlen dringend, auf externen Websites <b>keine</b> persönlichen Daten einzugeben.');
define('LANG_REDIRECT_HINT3', 'Wenn Sie die Sicherheit Ihres Computers nicht gefährden möchten, schließen Sie diesen Tab. Andernfalls werden Sie weitergeleitet in');
define('LANG_REDIRECT_HINT4', 'Nicht mehr warnen');
define('LANG_REDIRECT_YOUR_SAFETY', '«%s» achtet stets auf Ihre Sicherheit.');
define('LANG_REDIRECT_SUSPICIOUS_LINK', 'Link zu einer verdächtigen Website');
define('LANG_REDIRECT_SUSPICIOUS_LINK_1', 'Der Link, den Sie aufgerufen haben, könnte zu einer Website führen, die erstellt wurde, um Benutzer zu täuschen und daraus Gewinn zu erzielen.');
define('LANG_REDIRECT_SUSPICIOUS_LINK_2', 'Ich bin mir des Risikos bewusst und möchte trotzdem <a rel="nofollow" href="%s">zur Website wechseln</a>.');

define('LANG_REDIRECT_NO_REDIRECT_LIST', 'Domainliste für direkte Weiterleitungen');
define('LANG_REDIRECT_ADMIN_HINT', 'Eine Domain pro Zeile im Format domain.com. ');
define('LANG_REDIRECT_NO_REDIRECT_LIST_HINT', 'Die Weiterleitung erfolgt ohne Zwischenseite.');
define('LANG_REDIRECT_BLACK_LIST', 'Sperrliste für Domains');
define('LANG_REDIRECT_BLACK_LIST_HINT', 'Weiterleitungen zu den angegebenen Domains werden immer blockiert.');
define('LANG_REDIRECT_IS_CHECK_REFER', 'HTTP-Referer prüfen');
define('LANG_REDIRECT_IS_CHECK_LINK', 'Links prüfen');
define('LANG_REDIRECT_IS_CHECK_LINK_HINT', 'Links werden über die <a href="https://dev.vk.ru/ru/method/utils.checkLink" target="_blank" rel="noopener noreferrer">öffentliche VK-Methode</a> geprüft');
define('LANG_REDIRECT_VK_ACCESS_TOKEN', 'Service-Zugriffsschlüssel');
define('LANG_REDIRECT_VK_ACCESS_TOKEN_HINT', 'Sie erhalten den Schlüssel in den <a href="https://dev.vk.ru/ru/api/access-token/getting-started" target="_blank" rel="noopener noreferrer">Einstellungen der VK-Anwendung</a>');
define('LANG_REDIRECT_WHITE_LIST', 'Erlaubte Domains');
define('LANG_REDIRECT_WHITE_LIST_HINT', 'Diese Domains werden nicht überprüft.');
define('LANG_REDIRECT_REDIRECT_TIME', 'Weiterleitungszeit für Links');
define('LANG_REDIRECT_REWRITE_JSON', 'Regeln für Weiterleitungen und URL-Umschreibungen');
define('LANG_REDIRECT_REWRITE_JSON_HINT', 'Im JSON-Format. Array nach folgendem Muster:
{
"source": "regularer Ausdruck zum Vergleich mit der aktuellen URI",
"target": "URI für die Weiterleitung, wenn source übereinstimmt",
"action": "Aktion bei Übereinstimmung mit source: rewrite, redirect, redirect-301"
}');
