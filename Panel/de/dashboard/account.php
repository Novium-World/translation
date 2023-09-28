<?php

return [
    'email' => [
        'title' => 'E-Mail ändern',
        'updated' => 'Deine E-Mail-Adresse wurde geändert.',
    ],
    'password' => [
        'title' => 'Passwort ändern',
        'requirements' => 'Dein neues Passwort sollte mindestens 8 Zeichen lang sein.',
        'updated' => 'Dein Passwort wurde geändert.',
    ],
    'two_factor' => [
        'button' => 'Zwei-Faktor Authentifizierung konfigurieren',
        'disabled' => 'Zwei-Faktor Authentifizierung wurde auf deinem Account deaktiviert. Von nun an musst du nicht mehr einen Code bei der Anmeldung eingeben.',
        'enabled' => 'Zwei-Faktor Authentifizierung wurde auf deinem Account aktiviert! Von nun an musst du einen Code, welcher von deinem Gerät generiert wurde bei der Anmeldung eingeben.',
        'invalid' => 'Das eingebene Token war ungültig.',
        'setup' => [
            'title' => 'Zwei-Faktor Authentifizierung aufgesetzt',
            'help' => 'Code nicht scanbar? Gib den folgenden Code in deine Anwendung ein:',
            'field' => 'Token eingeben',
        ],
        'disable' => [
            'title' => 'Zwei-Faktor Authentifizierung deaktivieren',
            'field' => 'Token eingeben',
        ],
    ],
];
