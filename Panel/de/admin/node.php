<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Die angegebene FQDN- oder IP-Adresse führt nicht zu einer zulässigen IP-Adresse.',
        'fqdn_required_for_ssl' => 'Ein vollständig gültiger Domain-Name, welcher zu einer öffentlichen IP-Adresse führt wird benötigt, um SSL für diese Node zu nutzen.',
    ],
    'notices' => [
        'allocations_added' => 'Allocations wurden erfolgreich zum Panel hinzugefügt.',
        'node_deleted' => 'Node wurde erfolgreich vom Panel entfernt.',
        'location_required' => 'Es muss mindestens eine Lokation konfiguriert sein, bevor eine Node zu diesem Panel hinzugefügt werden kann.',
        'node_created' => 'Erfolgreich neue Node erstellt. Der Daemon kann automatisch konfiguriert werden. Besuche dazu den \'Konfiguration\' Tab. <strong>Bevor ein Server hinzugefügt werden kann man erst mindestens eine IP-Adresse und ein Port zugeordnet werden.</strong>',
        'node_updated' => 'Node Informationen wurden geupdated. Falls eine Daemoneinstellung geändert wurde, muss neu gestartet werden damit diese übernommen werden.',
        'unallocated_deleted' => 'Alle unzugeordneten Ports für <code>:ip</code> gelöscht.',
    ],
];
