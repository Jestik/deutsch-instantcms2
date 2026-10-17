<?php

return [
    [
        'intro' => '<h3>Willkommen auf der Seite zur Widget-Verwaltung!</h3><p>Hier legen Sie fest, wie Ihre Website angezeigt wird.<br>Jede Seite der Website ist in "Positionen" unterteilt, in denen verschiedene Blöcke — Widgets — angezeigt werden können.<br>Widgets können Menüs, Inhaltslisten, Such- und Anmeldeformulare und vieles mehr anzeigen.</p> <p>Hier können Sie das Positionsschema der Website ändern und Widgets den Positionen zuweisen.</p><p><b>Klicken Sie auf &laquo;Weiter&raquo;, um eine kurze Einführung in die Widget-Verwaltung zu starten.</b><br><span class="text-muted">Wir empfehlen diese Einführung, wenn Sie InstantCMS 2 zum ersten Mal verwenden.</span></p>',
        'tooltipClass' => 'introjs-full-width'
    ],
    [
        'element'  => '#intro-step1',
        'scrollTo' => 'tooltip',
        'intro'    => '<p>Im linken Bereich gibt es zwei Register:</p> <ol><li>eine nach Typ gruppierte Liste aller Seiten der Website; wählen Sie in diesem Baum den passenden Seitentyp aus, um die zugehörigen Widgets anzuzeigen.</li><li>eine Übersicht aller verfügbaren Widgets; von hier können Sie Widgets an die gewünschte Position im Seitenschema ziehen und dem ausgewählten Seitentyp zuweisen.</li></ol>'
    ],
    [
        'element'  => '#cp-widgets-layout',
        'scrollTo' => 'tooltip',
        'intro'    => 'In der Mitte sehen Sie das Seitenlayout Ihrer Website. Sie können Zeilen und darin Spalten hinzufügen, um das gewünschte Layout zu erstellen.'
    ],
    [
        'element'  => '.gridicon',
        'scrollTo' => 'tooltip',
        'intro'    => 'Das Seitenlayout kann von der ausgewählten Website-Vorlage abhängen. Über diese Schaltfläche können Sie zwischen Vorlagen wechseln.'
    ],
    [
        'element'  => '.add_row',
        'scrollTo' => 'tooltip',
        'intro'    => 'Klicken Sie hier, um dem Seitenlayout eine weitere Zeile hinzuzufügen, in der Sie Widgets platzieren können.'
    ],
    [
        'element'  => '.add-scheme-row',
        'scrollTo' => 'tooltip',
        'intro'    => 'Innerhalb einer Zeile können Sie die gewünschte Anzahl von Spalten hinzufügen.'
    ],
    [
        'element'  => '.position',
        'scrollTo' => 'tooltip',
        'intro'    => '<p>Jede Spalte bildet eine neue Widget-Position.</p><p>Wählen Sie im linken Bereich (Register "Alle Widgets") ein Widget aus und ziehen Sie es in die Spalte, um es dem aktuellen Seitentyp zuzuweisen.</p>'
    ],
    [
        'element'  => '.breadcrumb-menu',
        'position' => 'left',
        'scrollTo' => 'tooltip',
        'intro'    => 'Unsere Dokumentation beschreibt die Arbeit mit Widgets ausführlich. Klicken Sie hier, wenn Sie Fragen haben.'
    ]
];
