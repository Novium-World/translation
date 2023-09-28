<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Anmeldung gescheitert',
        'success' => 'Angemeldet',
        'password-reset' => 'Passwort zurücksetzen',
        'reset-password' => 'Requested password reset',
        'checkpoint' => 'Zwei-Faktor authentifizierung beantragt',
        'recovery-token' => 'Zwei-Faktor Zurücksetzungstoken benutzt',
        'token' => 'Zwei-Faktor Aufgabe gelöst',
        'ip-blocked' => 'Anfrage von ungelisteter IP Adresse blockiert wegen :identifier',
        'sftp' => [
            'fail' => 'Gescheiterte SFTP Anmeldung',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-Mail von :old zu :new geändert',
            'password-changed' => 'Passwort geändert',
        ],
        'api-key' => [
            'create' => 'Neuen API-Schlüssel :identifier erstellt',
            'delete' => 'API-Schlüssel :identifier gelöscht',
        ],
        'ssh-key' => [
            'create' => 'SSH-Schlüssel :fingerprint zum Account hinzugefügt',
            'delete' => 'SSH-Schlüssel :fingerprint vom Account entfernt',
        ],
        'two-factor' => [
            'create' => 'Zwei-Faktor Authentifizierung aktiviert',
            'delete' => 'Zwei-Faktor Authentifizierung deaktiviert',
        ],
    ],
    'server' => [
        'reinstall' => 'Server neu installiert',
        'console' => [
            'command' => '":command" auf dem Server ausgeführt',
        ],
        'power' => [
            'start' => 'Server gestartet',
            'stop' => 'Server gestoppt',
            'restart' => 'Server neu gestartet',
            'kill' => 'Serverprozess gestoppt',
        ],
        'backup' => [
            'download' => ':name Backup heruntergeladen',
            'delete' => ':name Backup gelöscht',
            'restore' => ':name Backup wiederhergestellt (gelöschte Dateien: :truncate)',
            'restore-complete' => 'Wiederherstellung von :name Backup abgeschlossen',
            'restore-failed' => 'Konnte Wiederherstellung von :name Backup nicht abschließen',
            'start' => 'Neues Backup gestarted :name',
            'complete' => ':name Backup als Vervollständigt markiert',
            'fail' => ':name Backup als Gescheitert markiert',
            'lock' => ':name Backup gesperrt',
            'unlock' => ':name Backup entsperrt',
        ],
        'database' => [
            'create' => 'Neue Datenbank :name erstellt',
            'rotate-password' => 'Passwort für Datenbank :name rotiert',
            'delete' => 'Datenbank :name gelöscht',
        ],
        'file' => [
            'compress_one' => 'Kompremierte :directory:file',
            'compress_other' => 'Kompremierte :count Dateien im Ordner :directory',
            'read' => 'Inhalt von :file angeschaut',
            'copy' => 'Kopie von Datei :file erstellt',
            'create-directory' => 'Ordner :directory:name erstellt',
            'decompress' => 'Dekompremierte :files im Ordner :directory',
            'delete_one' => 'Löschte Datei :directory:files.0',
            'delete_other' => 'Löschte :count Dateien im Ordner :directory',
            'download' => ':file heruntergeladen',
            'pull' => 'Remote Datei von :url in den Ordner :directory heruntergeladen',
            'rename_one' => 'Datei :directory:files.0.from zu :directory:files.0.to umbenannt',
            'rename_other' => ':count Dateien in :directory umbenannt',
            'write' => 'Neuen Inhalt in die Datei :file geschrieben',
            'upload' => 'Dateiupload begonnen',
            'uploaded' => ':directory:file hochgeladen',
        ],
        'sftp' => [
            'denied' => 'SFTP Zugang aufgrund von Berechtigungen blockiert',
            'create_one' => ':files.0 erstellt',
            'create_other' => ':count neue Dateien erstellt',
            'write_one' => 'Inhalt von :files.0 bearbeitet',
            'write_other' => 'Inhalt von :count Dateien geändert',
            'delete_one' => ':files.0 gelöscht',
            'delete_other' => ':count Dateien gelöscht',
            'create-directory_one' => 'Ordner :files.0 erstellt',
            'create-directory_other' => ':count Ordner erstellt',
            'rename_one' => 'Datei :files.0.from zu :files.0.to umbenannt',
            'rename_other' => ':count Dateien umbenannt oder verschoben',
        ],
        'allocation' => [
            'create' => ':allocation zum Server hinzugefügt',
            'notes' => 'Notizen für :allocation von ":old" zu ":new" geändert',
            'primary' => ':allocation als primäre allocation festgelegt',
            'delete' => 'Allocation :allocation gelöscht',
        ],
        'schedule' => [
            'create' => 'Ablaufplan :name erstellt',
            'update' => 'Ablaufplan the :name geändert',
            'execute' => 'Ablaufplan :name manuell ausgeführt',
            'delete' => 'Ablaufplan :name gelöscht',
        ],
        'task' => [
            'create' => 'Neue Aufgabe ":action" für den Ablaufplan :name erstellt',
            'update' => 'Aufgabe ":action" für den Ablaufplan :name geändert',
            'delete' => 'Eine Aufgabe für den Ablaufplan :name gelöscht',
        ],
        'settings' => [
            'rename' => 'Server von :old zu :new umbenannt',
        ],
        'startup' => [
            'edit' => 'Variable :variable von ":old" zu ":new" geändert',
            'image' => 'Docker Image für den Server von :old zu :new geändert',
        ],
        'subuser' => [
            'create' => ':email als Mitbenutzer hinzugefügt',
            'update' => 'Mitbenutzer Berechtigungen für :email geändert',
            'delete' => 'Mitbenutzer :email gelöscht',
        ],
    ],
];
