<?php

/**
 * Gibt die Monatsnamen für die aktuelle Sprache zurück
 * @return array
 */
function lang_months() {
    return [
        'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
        'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'
    ];
}

/**
 * Gibt die Tagesnamen für die aktuelle Sprache zurück
 * @return array
 */
function lang_days() {
    return [
        'So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'
    ];
}

/**
 * Gibt das Datum für die aktuelle Sprache zurück
 * @param string $date_string
 * @return string
 */
function lang_date($date_string) {

    $eng_months = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    return str_replace($eng_months, lang_months(), $date_string);
}

/**
 * Wandelt eine Zeichenfolge der aktuellen Sprache in einen URL-Slug um
 *
 * @param string $string Eingabezeichenfolge
 * @param boolean $disallow_numeric Numerische Slugs nicht zulassen
 * @return string
 */
function lang_slug(string $string, $disallow_numeric = true) {

    $string = mb_strtolower(strip_tags(trim($string)));

    $string = strtr($string, [
        'ä' => 'ae', 'ö' => 'oe', 'ü' => 'ue', 'ß' => 'ss'
    ]);

    $slug = preg_replace('/[^a-z0-9\-\/]+/u', '-', $string);
    $slug = preg_replace('/-+/', '-', $slug);
    $slug = preg_replace('/\/+/', '/', $slug);
    $slug = trim($slug, '-/');

    if (!$slug) {
        $slug = 'ohne-titel';
    }

    if ($disallow_numeric && ctype_digit($slug)) {
        $slug .= strtolower(date('F'));
    }

    return $slug;
}

/**
 * Legt die Gebietsschema-Einstellungen fest
 * @return mixed
 */
function lang_setlocale() {

    $locale = 'de_DE.UTF-8';

    setlocale(LC_COLLATE, $locale);
    setlocale(LC_CTYPE, $locale);
    setlocale(LC_MONETARY, $locale);
    setlocale(LC_TIME, $locale);
    if (defined('LC_MESSAGES')) {
        setlocale(LC_MESSAGES, $locale);
    }
    setlocale(LC_NUMERIC, 'POSIX');

    return true;
}

/**
 * Locale name
 */
define('LC_LANGUAGE_TERRITORY', 'de_DE');

/**
 * Locale validate regexp
 */
define('LC_LANGUAGE_VALIDATE_REGEXP', "/^([a-zäöüß0-9 \.\?\@\,\-]*)$/ui");
