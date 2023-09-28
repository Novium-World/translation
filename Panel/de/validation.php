<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute muss akzeptiert werden.',
    'active_url' => ':attribute ist keine gültige URL.',
    'after' => ':attribute muss ein Datum nach :date sein.',
    'after_or_equal' => ':attribute muss ein Datum nach oder gleich :date sein.',
    'alpha' => ':attribute darf nur Buchstaben beinhalten.',
    'alpha_dash' => ':attribute darf nur Buchstaben, Zahlen oder Gedankenstriche beinhalten.',
    'alpha_num' => ':attribute darfn nur Buchstaben und Zahlen beinhalten.',
    'array' => ':attribute muss eine Liste sein.',
    'before' => ':attribute muss ein Datum vor :date sein.',
    'before_or_equal' => ':attribute muss ein Datum vor oder Gleich :date sein.',
    'between' => [
        'numeric' => ':attribute muss zwischen :min und :max liegen.',
        'file' => ':attribute muss zwischen :min und :max kilobytes groß sein.',
        'string' => ':attribute muss zwischen :min und :max zeichen lang sein.',
        'array' => ':attribute muss zwischen :min und :max Inhalte haben.',
    ],
    'boolean' => ':attribute muss entweder Wahr oder Falsch sein.',
    'confirmed' => ':attribute Bestätigung stimmt nicht überein.',
    'date' => ':attribute ist kein zulässiges Datum.',
    'date_format' => ':attribute passt nicht zum Format :format.',
    'different' => ':attribute und :other müssen unterschiedlich sein.',
    'digits' => ':attribute muss :digits Zeichen lang sein.',
    'digits_between' => ':attribute braucht zwischen :min und :max Zeichen.',
    'dimensions' => ':attribute hat ungültige Dimensionen.',
    'distinct' => ':attribute hat einen doppelt vorkommenden Wert.',
    'email' => ':attribute muss eine gültige E-Mail-Adresse sein.',
    'exists' => 'Das ausgewählte :attribute ist ungültig.',
    'file' => ':attribute muss eine Datei sein.',
    'filled' => ':attribute ist erforderlich.',
    'image' => ':attribute muss ein Bild sein.',
    'in' => 'Das ausgewälte :attribute ist ungültig.',
    'in_array' => ':attribute existiert nicht in :other.',
    'integer' => ':attribute muss eine ganze Zahl sein.',
    'ip' => ':attribute muss eine gültige IP-adresse sein.',
    'json' => ':attribute muss ein gültiger JSON-String sein.',
    'max' => [
        'numeric' => ':attribute darf nicht größer als :max sein.',
        'file' => ':attribute darf nicht größer als :max kilobytes sein.',
        'string' => ':attribute darf nicht länger als :max Zeichen sein.',
        'array' => ':attribute darf nicht mehr als :max Inhalte haben.',
    ],
    'mimes' => ':attribute muss eine Datei vom Typen: :values sein.',
    'mimetypes' => ':attribute muss eine Datei vom Typen : :values sein.',
    'min' => [
        'numeric' => ':attribute muss mindestens :min sein.',
        'file' => ':attribute muss mindestens :min kilobytes sein.',
        'string' => ':attribute muss mindestens :min Zeichen lang sein.',
        'array' => ':attribute muss mindestens :min Inhalte haben.',
    ],
    'not_in' => ':attribute ist ungültig.',
    'numeric' => ':attribute muss eine Zahl sein.',
    'present' => ':attribute muss eingegeben sein.',
    'regex' => 'Das Format von :attribute ist ungültig.',
    'required' => ':attribute ist erforderlich.',
    'required_if' => ':attribute ist erforderlich wenn :other :value ist.',
    'required_unless' => ':attribute ist erforderlich solange :other in :values vorhanden ist.',
    'required_with' => ':attribute ist erforderlich wenn :values angegeben ist.',
    'required_with_all' => ':attribute ist erforderlich wenn :values angegeben ist.',
    'required_without' => ':attribute ist erforderlich wenn :values nicht angegeben ist.',
    'required_without_all' => ':attribute ist erforderlich wenn keiner von :values angegeben ist.',
    'same' => ':attribute und :other müssen gleich sein.',
    'size' => [
        'numeric' => ':attribute muss :size sein.',
        'file' => ':attribute muss :size kilobytes sein.',
        'string' => ':attribute muss :size Zeichen sein.',
        'array' => ':attribute muss :size Inhalte haben.',
    ],
    'string' => ':attribute muss ein String sein.',
    'timezone' => ':attribute muss eine gültige Zeitzone sein.',
    'unique' => ':attribute wurde bereits genommen.',
    'uploaded' => ':attribute konnte nicht hochgeladen werden.',
    'url' => ':attribute Format ist ungültig.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ':env Variable',
        'invalid_password' => 'Das engegebene Passwort ist ungültig für diesen Account.',
    ],
];
