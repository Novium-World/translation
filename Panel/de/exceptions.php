<?php

return [
    'daemon_connection_failed' => 'Während des Versuchs, mit dem Daemon zu kommunizieren ist ein Fehler mit dem HTTP/:code Response Code aufgetreten. Dieser Fehler wurde geloggt.',
    'node' => [
        'servers_attached' => 'Eine Node darf keine Server verlinkt haben damit diese gelöscht werden kann.',
        'daemon_off_config_updated' => 'Die Daemon Konfiguration <strong>wurde geupdated</strong>, aber es ist ein Fehler beim Versuch, die Datei auf dem Daemon zu aktualisieren, aufgetreten. Sie müssen die Konfigurationsdatei (config.yml) manuell updaten damit der Daemon diese Änderungen anwendet.',
    ],
    'allocations' => [
        'server_using' => 'Eine Zuordnung ist mit diesem Server beauftragt. Eine Zuordnung kann nur gelöscht werden, wenn kein Server zugeordnet ist.',
        'too_many_ports' => 'Mehr als 1000 Ports in einer einzigen Range auf einmal hinzuzufügen wird nicht unterstützt.',
        'invalid_mapping' => 'Das Mapping für :port war ungültig und konnte nicht verarbeitet werden.',
        'cidr_out_of_range' => 'CDIR Notation erlaubt nur Masken zwischen /25 und /32.',
        'port_out_of_range' => 'Ports in einer Zuordnung müssen größer als 1024 und kleiner oder gleich 65535 sein.',
    ],
    'nest' => [
        'delete_has_servers' => 'Ein Nest mit aktiven Servern kann nicht vom Panel gelöscht werden.',
        'egg' => [
            'delete_has_servers' => 'Ein Egg mit aktiven Servern kann nicht vom Panel gelöscht werden.',
            'invalid_copy_id' => 'Das für\'s wegkopieren eines Skriptes ausgewählte Egg existiert entweder nicht oder kopiert selbst einen Skript.',
            'must_be_child' => 'Die "Copy Settings From" Direktive für dieses Egg muss eine Kind-Option für das ausgewählte Nest sein.',
            'has_children' => 'Dieses Egg ist ein Elter für ein oder mehr andere Egg. Bitte lösche die anderen Eggs, bevor dieses Egg gelöscht werden kann.',
        ],
        'variables' => [
            'env_not_unique' => 'Die Umgebungsvariable :name muss für dieses Egg einzigartig sein.',
            'reserved_name' => 'Die Umgebungvariable :name ist geschützt und kann nicht einer Variable zugewiesen werden.',
            'bad_validation_rule' => 'Die Zulässigkeitsregel ":rule" ist keine zulässige Regel für diese Applikation.',
        ],
        'importer' => [
            'json_error' => 'Es ist ein Fehler beim Versuch, die JSON-Datei zu interpretieren, aufgetreten: :error.',
            'file_error' => 'Die angegebene JSON-Datei ist nicht zulässig.',
            'invalid_json_provided' => 'Die angegebene JSON-Datei ist nicht in einem Format, welches erkannt werden kann.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Das Bearbeiten des eigenen Unterbenutzeraccounts ist nicht gestattet.',
        'user_is_owner' => 'Der Serverbesitzer kann nicht als Unterbenutzer zu diesem Server hinzugefügt werden.',
        'subuser_exists' => 'Ein Benutzer mit dieser E-Mail ist bereits ein Unterbenutzer für diesen Server.',
    ],
    'databases' => [
        'delete_has_databases' => 'Datenbank-Hostserver mit aktiven Datenbanken können nicht gelöscht werden.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Das maximale Interval für eine verkettete Aufgabe ist 15 Minuten.',
    ],
    'locations' => [
        'has_nodes' => 'Ein Ort mit aktiven Nodes kann nicht gelöscht werden.',
    ],
    'users' => [
        'node_revocation_failed' => 'Konnte nicht Schlüssel auf <a href=":link">Node #:node</a> finden. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Es konnten keine Nodes mit den spezifierzierten Anforderungen für automatisches Deployement gefunden werden.',
        'no_viable_allocations' => 'Es konnten keine Zuweisungen mit den spezifierten Anforderungen für automatisches Deployement gefunden werden.',
    ],
    'api' => [
        'resource_not_found' => 'Die angeforderte Resource existiert nicht auf diesem Server.',
    ],
];
