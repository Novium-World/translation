<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Ein neues Nest, :name, wurde erfolgreich erstellt.',
        'deleted' => 'Erfolgreich das angeforderte Nest vom Panel gelöscht.',
        'updated' => 'Erfolgreich die Nest Konfigurationsoptionen geändert.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Dieses Egg und dessen Variablen wurden erfolgreich impotiert.',
            'updated_via_import' => 'Dieses Egg wurde mit der gegebenen Datei geupdated.',
            'deleted' => 'Erfolgreich das angefordete Egg vom Panel gelöscht.',
            'updated' => 'Egg Konfiguration erfolgreich geändert.',
            'script_updated' => 'Egg Installtions Skript wurde geändert und wird ausgeführt, sobald Server installiert werden.',
            'egg_created' => 'Ein neues Egg wurde erfolgreich erstellt. Jeder laufen Daemon muss neu gestartet werden, um dieses Egg dort auszuführen.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Die Variable ":variable" wurde gelöscht und wird nicht mehr für Server verfügbar sein, sobald diese neu aufgesetzt werden.',
            'variable_updated' => 'Die Variable ":variable" wurde geändert. Jeder Server muss restartet werden, um die Änderungen der Variable zu übernehmen.',
            'variable_created' => 'Neue Variable wurde erfolgreich erstellt und auf dieses Egg verwiesen.',
        ],
    ],
];
