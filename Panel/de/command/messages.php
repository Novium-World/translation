<?php

return [
    'location' => [
        'no_location_found' => 'Konnte keine Daten finden, die zu dem angegebenen Kurzcode passen.',
        'ask_short' => 'Ortskurzcode',
        'ask_long' => 'Ortsbeschreibung',
        'created' => 'Ein Ort (:name) mit der ID :id wurde erfolgreich erstellt.',
        'deleted' => 'Erfolgreich angeforderten Ort gelöscht.',
    ],
    'user' => [
        'search_users' => 'Gib einen Benutzernamen, Benutzerid oder E-Mail-Adresse ein',
        'select_search_user' => 'ID des gelöschtwerdenden Benutzers (Gib \'0\' ein um nochmal zu suchen)',
        'deleted' => 'Benutzer erfolgreich vom Panel gelöscht.',
        'confirm_delete' => 'Bist du dir sicher, dass du diesen Nutzer vom Panel löschen möchtest?',
        'no_users_found' => 'Es wurde kein Benutzer gefunden, der zur Suchanfrage passt.',
        'multiple_found' => 'Mehrere Accounts wurden mit dem angegeben Nutzer gefunden, Nutzer kann wegen der --no-interaction flag nicht gelöscht werden.',
        'ask_admin' => 'Ist dieser Nutzer ein Administrator?',
        'ask_email' => 'E-Mail-Adresse',
        'ask_username' => 'Benutzername',
        'ask_name_first' => 'Vorname',
        'ask_name_last' => 'Nachname',
        'ask_password' => 'Passwort',
        'ask_password_tip' => 'Falls du einen Account mit einem zufälligen Passwort, welches an den Nutzer geschickt wird, erstellen möchtest, führe diesen Befehl mit der `--no-password` flag nochmal (CTRL+C) aus.',
        'ask_password_help' => 'Passwort muss mindestens 8 Zeichen lang sein und benötigt mindestens einen Großbuchstaben und eine Zahl.',
        '2fa_help_text' => [
            'Dieser Befehl deaktiviert die 2-Faktor-Authentifizierung für einen Befehl falls diese aktiviert ist. Er sollte nur als eine Account-Zurückgewinnungsmethode ausgeführt werden, falls der Nutzer aus seinem Account ausgesperrt ist.',
            'Falls dies nicht ausgeführt werden sollte, drücke CTRL+C um den Prozess zu verlassen.',
        ],
        '2fa_disabled' => '2-Faktor-Authentifizierung wurde für :email gedeaktiviert.',
    ],
    'schedule' => [
        'output_line' => 'Absendung von Auftrag als erste Aufgabe in `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Service Backup Datei :file gelöscht.',
    ],
    'server' => [
        'rebuild_failed' => 'Neuaufbau-Anfrage für ":name" (#:id) auf Node ":node" scheiterte mit Fehler: :message',
        'reinstall' => [
            'failed' => 'Neuinstallationsanfrage für ":name" (#:id) auf Node ":node" gescheitert mit Fehler: :message',
            'confirm' => 'Es wird gleich gegen eine Gruppe von Servern reinstalliert. Möchten Sie weitermachen?',
        ],
        'power' => [
            'confirm' => 'Es wird gleiche ein :action gegen :count Server ausgeführt. Möchten Sie weitermachen?',
            'action_failed' => 'Power Aktionsanfrage für ":name" (#:id) auf Node ":node" scheiterte mit Fehler: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Host (z.B. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Port',
            'ask_smtp_username' => 'SMTP Benutzername',
            'ask_smtp_password' => 'SMTP Passwort',
            'ask_mailgun_domain' => 'Mailgun Domain',
            'ask_mailgun_endpoint' => 'Mailgun Endpunkt',
            'ask_mailgun_secret' => 'Mailgun Geheimniss',
            'ask_mandrill_secret' => 'Mandrill Geheimniss',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => 'Welcher Driver sollte benutzt werden, um E-Mails zu senden?',
            'ask_mail_from' => 'E-Mail-Adressen-E-Mails sollen kommen von',
            'ask_mail_name' => 'Name, von dem E-Mails kommen sollen',
            'ask_encryption' => 'Benutzte Verschlüsselungsmethode',
        ],
    ],
];
