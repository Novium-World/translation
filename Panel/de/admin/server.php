<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Sie versuchen die Standardzuordnung zu löschen, aber es gibt keine Rückfallzuordnungen.',
        'marked_as_failed' => 'Dieser Server wurde als bei einer früheren Installation gescheitert markiert. Der aktuelle Status kann in diesem Status nicht umgeschaltet werden.',
        'bad_variable' => 'Es ist ein Validierzungsfehler mit der :name Variable aufgetreten.',
        'daemon_exception' => 'Während der Versuchs, mit dem Daemon zu kommunizieren ist ein Fehler mit dem HTTP/:code Response Code aufgetreten. Dieser Fehler wurde geloggt (Anfrage id: :request_id)',
        'default_allocation_not_found' => 'Die angefragte Standardzuordnung wurde nicht den Zuordnungen dieses Servers gefunden.',
    ],
    'alerts' => [
        'startup_changed' => 'Die Startkonfiguration für diesen Server wurde geändert. Falls das Egg oder das Nest dieses Servers geändert wurde findet nun ein Neustart statt.',
        'server_deleted' => 'Server wurde erfolgreich aus dem System gelöscht.',
        'server_created' => 'Server wurde erfolgreich auf diesem Panel erstellt. Bitte gib dem Daemon einige Minuten Zeit um den Server komplett zu installieren',
        'build_updated' => 'Die Details für dieses Server wurden geändert. Manche Änderungen brauchen einen Restart um in Aktion zu treten.',
        'suspension_toggled' => 'Server-Suspensionsstatus wurde geändert zu :status.',
        'rebuild_on_boot' => 'Dieses Server wurde als einen Docker Container Rebuild benötigend markiert. Dies wird beim nächsten Start des Servers passieren.',
        'install_toggled' => 'The installation status for this server has been toggled. Der Installationsstatus für diesen Server wurde umgeschaltet',
        'server_reinstalled' => 'Dieser Server wurde in die Warteschlange für eine Reinstallation gestellt',
        'details_updated' => 'Serverdetails wurden erfolgreich geändert.',
        'docker_image_updated' => 'Das Standard Docker Image für diesen Server wurde erfolgreich geändert. Ein Neustart wird benötigt, um die Änderungen zu übernehmen.',
        'node_required' => 'Es muss mindestens eine Node konfiguriert sein, bevor ein Server zum Panel hinzugefügt werden kann.',
        'transfer_nodes_required' => 'Es müssen mindestens zwei Nodes konfiguriert sein, bevor Server transferiert werden können.',
        'transfer_started' => 'Server Transfer wurde gestartet.',
        'transfer_not_viable' => 'Diese Node hat nicht den benötigten Speicherplatz um den Server unterzubringen',
    ],
];
