<?php

return [
    'sign_in' => 'Einloggen',
    'go_to_login' => 'Zur Anmeldung',
    'failed' => 'Es konnte kein Account mit diesen Anmeldedaten gefunden werden.',

    'forgot_password' => [
        'label' => 'Passwort vergessen?',
        'label_help' => 'Gebe deine Account E-Mail-Adresse ein um Instruktionen zum Zurücksetzen deines Passworts zu bekommen.',
        'button' => 'Account retten',
    ],

    'reset_password' => [
        'button' => 'Passwort zurücksetzen und Anmelden',
    ],

    'two_factor' => [
        'label' => 'Zwei-Faktor Token',
        'label_help' => 'Dieser Account benögtigt eine zweite Ebene an Verifizierung um weiterzumachen. Bitte gib den Code, der von deinem Gerät generiert wurde, ein, um weiterzumachen.',
        'checkpoint_failed' => 'Das Zwei-Faktor Token war ungültig.',
    ],

    'throttle' => 'Zu viele Einlogversuche. Versuche es erneut in :seconds Sekunden.',
    'password_requirements' => 'Passwort muss mindestens 8 Zeichen lang sein und sollte einzigartig für diese Seite sein.',
    '2fa_must_be_enabled' => 'Der Administrator hat festgelegt, dass die 2-Faktor Authentifizierung aktiviert sein muss, um das Panel zu nutzen.',
];
