<?php

declare(strict_types=1);

/**
 * French translations: validation messages.
 *
 * Replacements: :field → field label, :param → rule parameter value.
 */
return [
    'required'   => ':field est obligatoire.',
    'string'     => ':field doit être une chaîne de caractères.',
    'email'      => ':field doit être une adresse e-mail valide.',
    'integer'    => ':field doit être un nombre entier.',
    'min'        => ':field doit comporter au moins :param caractères.',
    'max'        => ':field ne doit pas dépasser :param.',
    'max_length' => ':field ne doit pas dépasser :param caractères.',
    'in'         => ':field doit être l\'une des valeurs suivantes : :param.',
    'date'       => ':field doit être une date valide.',
    'url'        => ':field doit être une URL valide.',
    'numeric'    => ':field doit être un nombre.',
    'unique'     => ':field est déjà utilisé.',
    'confirmed'  => ':field ne correspond pas à la confirmation.',
    'phone'      => ':field doit être un numéro de téléphone valide.',
    'slug'       => ':field ne doit contenir que des lettres minuscules, des chiffres et des tirets.',
    'hex_color'  => ':field doit être une couleur hexadécimale valide.',
    'timezone'   => ':field doit être un fuseau horaire valide.',
    'file'       => ':field doit être un fichier téléversé.',
    'image'      => ':field doit être une image.',
    'max_size'   => ':field ne doit pas dépasser :param Ko.',

    // ── Translated Attribute Labels ──
    // Used by Validator to produce human-readable field names.
    'attributes' => [
        'name'                 => 'Nom',
        'email'                => 'Adresse e-mail',
        'password'             => 'Mot de passe',
        'password_confirmation' => 'Confirmation du mot de passe',
        'current_password'     => 'Mot de passe actuel',
        'new_password'         => 'Nouveau mot de passe',
        'confirm_password'     => 'Confirmation du mot de passe',
        'phone'                => 'Numéro de téléphone',
        'notes'                => 'Notes',
        'date'                 => 'Date',
        'time'                 => 'Heure',
        'timezone'             => 'Fuseau horaire',
        'app_name'             => 'Nom de l\'application',
        'app_url'              => 'URL de l\'application',
        'slug'                 => 'Identifiant (slug)',
        'brand_color'          => 'Couleur de marque',
        'booking_pattern'      => 'Modèle de réservation',
        'db_host'              => 'Hôte de la base de données',
        'db_port'              => 'Port de la base de données',
        'db_database'          => 'Nom de la base de données',
        'db_username'          => 'Utilisateur de la base de données',
        'db_password'          => 'Mot de passe de la base de données',
        'mail_host'            => 'Hôte de messagerie',
        'mail_port'            => 'Port de messagerie',
        'mail_password'        => 'Mot de passe de messagerie',
        'resend_api_key'       => 'Clé API Resend',
        'mail_from_address'    => 'Adresse d\'expédition',
        'mail_from_name'       => 'Nom d\'expédition',
        'smtp_host'            => 'Hôte SMTP',
        'smtp_port'            => 'Port SMTP',
        'smtp_username'        => 'Utilisateur SMTP',
        'smtp_password'        => 'Mot de passe SMTP',
        'smtp_encryption'      => 'Chiffrement SMTP',
        'mail_transport'       => 'Transport de messagerie',
        'date_format'          => 'Format de date',
    ],
];
