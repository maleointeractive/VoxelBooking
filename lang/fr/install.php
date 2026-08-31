<?php

declare(strict_types=1);

/**
 * French translations: installation wizard.
 */
return [
    // ── Flash Messages ──
    'flash' => [
        'db_connected'        => 'Base de données connectée. MySQL :version. :count table(s) créée(s).',
        'db_connected_existing' => 'Base de données connectée. MySQL :version. Toutes les tables existent déjà.',
        'email_skipped'       => 'Configuration e-mail ignorée. Vous pourrez la définir plus tard dans les paramètres.',
        'email_saved'         => 'Configuration e-mail enregistrée.',
        'operator_created'    => 'Compte opérateur créé.',
        'install_complete'    => 'Installation terminée.',
        'migration_failed'    => 'Échec de la migration : :error',
        'reconnected_keep'    => 'Reconnexion à la base de données existante. Vos données sont intactes.',
        'db_refreshed'        => 'Base de données réinitialisée. MySQL :version. :count table(s) créée(s).',
        'passwords_mismatch'  => 'Les mots de passe ne correspondent pas.',
        'refresh_confirm_required' => 'Veuillez confirmer que vous comprenez que cela effacera toutes les données existantes.',
    ],

    // ── Database Errors ──
    'db_errors' => [
        'access_denied'       => 'Accès refusé. Vérifiez votre nom d\'utilisateur et votre mot de passe.',
        'unknown_database'    => 'Base de données introuvable. Créez-la d\'abord, puis réessayez.',
        'connection_refused'  => 'Connexion refusée. MySQL est-il en cours d\'exécution sur l\'hôte et le port spécifiés ?',
        'socket_not_found'    => 'Socket MySQL introuvable. Essayez d\'utiliser 127.0.0.1 au lieu de localhost comme hôte.',
        'timed_out'           => 'Délai de connexion dépassé. Vérifiez l\'adresse de l\'hôte et le port.',
        'generic'             => 'Erreur de base de données : :message',
    ],

    // ── System Checks ──
    'checks' => [
        'php_version'         => 'Version de PHP',
        'php_ok'              => 'PHP :version',
        'php_fail'            => 'PHP 8.3 ou supérieur requis. Version actuelle : :version',
        'pdo_mysql'           => 'Extension PDO MySQL',
        'curl'                => 'Extension cURL',
        'mbstring'            => 'Extension mbstring',
        'json'                => 'Extension JSON',
        'fileinfo'            => 'Extension Fileinfo',
        'openssl'             => 'Extension OpenSSL',
        'gd'                  => 'Extension GD',
        'zip'                 => 'Extension Zip',
        'loaded'              => 'Chargée',
        'enable_ext'          => 'Activez l\'extension :ext dans votre php.ini',
        'storage_logs'        => 'storage/logs accessible en écriture',
        'public_uploads'      => 'public/uploads accessible en écriture',
        'writable'            => 'Accessible en écriture',
        'chmod'               => 'chmod 755 :path',
    ],

    // ── Wizard Template ──
    'wizard' => [
        'page_title'             => 'Installation — :app_name',
        'complete_page_title'    => 'Installation terminée',

        // Step-bar short names (progress bar)
        'step_bar_1'             => 'Vérification système',
        'step_bar_2'             => 'Base de données',
        'step_bar_3'             => 'E-mail',
        'step_bar_4'             => 'Compte',
        'step_bar_5'             => 'Première entreprise',
        'step_of'                => 'Étape :step sur :total',
        'step_current'           => 'en cours',
        'step_done'              => 'terminée',
        'continue'               => 'Continuer',
        'back'                   => 'Retour',

        // Step 1: System Requirements
        'step1_title'            => 'Prérequis système',
        'step1_desc'             => 'Vérification de la version de PHP, des extensions et des permissions de répertoire.',

        // Step 2: Database
        'step2_title'            => 'Configuration de la base de données',
        'step2_desc'             => 'Saisissez vos identifiants MySQL. L\'assistant testera la connexion et créera les tables nécessaires. Si la base de données contient déjà une installation de VoxelBooking, la reconnexion se fera automatiquement.',
        'db_host'                => 'Hôte MySQL',
        'db_port'                => 'Port',
        'db_name'                => 'Nom de la base de données',
        'db_username'            => 'Nom d\'utilisateur',
        'db_password'            => 'Mot de passe',
        'db_password_hint'       => 'Laissez vide si aucun n\'est requis.',
        'db_submit'              => 'Tester la connexion et continuer',

        // Step 3: Email
        'step3_title'              => 'Configuration e-mail',
        'step3_desc'               => 'Choisissez comment VoxelBooking envoie ses e-mails. Vous pourrez modifier ce choix plus tard dans les paramètres.',
        'mail_transport'           => 'Transport',
        'mail_transport_smtp'      => 'SMTP (production)',
        'mail_transport_resend'    => 'Resend (API HTTPS — aucun port SMTP requis)',
        'mail_transport_mailpit'   => 'Mailpit (test local)',
        'mail_transport_log'       => 'Journalisation dans un fichier (aucun envoi)',
        'mail_host'                => 'Hôte SMTP',
        'mail_port'                => 'Port',
        'mail_username'            => 'Nom d\'utilisateur',
        'mail_password'            => 'Mot de passe',
        'mail_encryption'          => 'Chiffrement',
        'mail_encryption_none'     => 'Aucun',
        'resend_api_key'           => 'Clé API',
        'resend_api_key_hint'      => 'Votre clé API Resend (commence par re_).',
        'mail_from_address'        => 'Adresse d\'expédition',
        'mail_from_name'           => 'Nom d\'expédition',
        'mail_from_name_default'   => 'Système de réservation',
        'mail_submit'              => 'Enregistrer et continuer',
        'mail_skip'                => 'Ignorer pour l\'instant',

        // Step 2b: Reconnect Decision
        'reconnect_title'                  => 'Installation existante détectée',
        'reconnect_desc'                   => 'Cette base de données (MySQL :version) contient déjà une installation de VoxelBooking. Comment souhaitez-vous procéder ?',
        'reconnect_keep_title'             => 'Utiliser les données existantes',
        'reconnect_keep_desc'              => 'Conserver tous les opérateurs, entreprises, réservations et paramètres existants. Un nouveau fichier .env sera créé et vous serez redirigé vers la page de connexion.',
        'reconnect_keep_btn'               => 'Utiliser les données existantes',
        'reconnect_refresh_title'          => 'Nouvelle installation',
        'reconnect_refresh_desc'           => 'Supprimer toutes les tables et repartir de zéro. Toutes les données existantes (opérateurs, entreprises, réservations, paramètres) seront définitivement détruites.',
        'reconnect_refresh_confirm_label'  => 'Je comprends que cela effacera définitivement toutes les données existantes',
        'reconnect_refresh_btn'            => 'Supprimer toutes les données et réinstaller',

        // Step 4: Operator
        'step4_title'            => 'Application et compte administrateur',
        'step4_desc'             => 'Nommez votre application et créez le compte administrateur principal.',
        'app_name'               => 'Nom de l\'application',
        'app_name_hint'          => 'Affiché dans l\'en-tête, les e-mails et l\'onglet du navigateur. Vous pourrez le modifier plus tard dans les paramètres.',
        'login_section_title'    => 'Identifiants de connexion administrateur',
        'login_section_desc'     => 'Ces identifiants servent à se connecter au tableau de bord d\'administration. Conservez-les en lieu sûr.',
        'op_name'                => 'Nom complet',
        'op_name_placeholder'    => 'ex. Admin',
        'op_email'               => 'E-mail de connexion',
        'op_email_hint'          => 'Vous utiliserez cet e-mail pour vous connecter.',
        'op_password'            => 'Mot de passe',
        'op_password_hint'       => '8 caractères minimum.',
        'op_password_confirm'    => 'Confirmer le mot de passe',
        'op_password_show'       => 'Afficher le mot de passe',
        'op_password_generate'   => 'Générer un mot de passe',
        'op_submit'              => 'Créer le compte et continuer',

        // Step 4: Regional Defaults
        'regional_section_title' => 'Paramètres régionaux par défaut',
        'regional_section_desc'  => 'Ces paramètres s\'appliquent à l\'ensemble du système et sont hérités par les nouvelles entreprises.',
        'timezone'               => 'Fuseau horaire',
        'timezone_hint'          => 'Fuseau horaire par défaut pour les nouvelles entreprises. Détecté automatiquement à partir de votre navigateur.',
        'locale'                 => 'Langue par défaut',
        'locale_hint'            => 'Langue de l\'ensemble du système. Les nouvelles entreprises héritent de cette valeur par défaut.',
        'currency'               => 'Devise par défaut',
        'currency_hint'          => 'Devise par défaut pour les nouvelles entreprises.',
        'date_format'            => 'Notation de date',
        'number_format'          => 'Notation des nombres',
        'time_format'            => 'Format de l\'heure',
        'time_format_12h'        => '12 heures (2:30 PM)',
        'time_format_24h'        => '24 heures (14:30)',
        'week_start'             => 'La semaine commence le',

        // Step 5: First Business
        'step5_title'            => 'Créez votre première entreprise',
        'step5_desc'             => 'Configurez votre première page de réservation. Vous pourrez créer d\'autres entreprises plus tard.',
        'tenant_name'            => 'Nom de l\'entreprise',
        'tenant_pattern'         => 'Modèle de réservation',
        'pattern_timeslot'       => 'Créneaux horaires',
        'pattern_timeslot_desc'  => 'Salon, thérapeute, tuteur',
        'pattern_resource'       => 'Ressources',
        'pattern_resource_desc'  => 'Chambre d\'hôtes, hôtel, salle de réunion',
        'pattern_capacity'       => 'Capacité',
        'pattern_capacity_desc'  => 'Restaurant, escape game',
        'pattern_event'          => 'Événements',
        'pattern_event_desc'     => 'Yoga, cours de cuisine',
        'tenant_email'           => 'E-mail de l\'entreprise',
        'tenant_brand_color'     => 'Couleur de marque',
        'tenant_submit'          => 'Créer l\'entreprise et terminer',
        'tenant_skip'            => 'Je le ferai depuis le tableau de bord',

        // UI controls
        'toggle_theme'           => 'Activer le mode sombre',
        'copy_url'               => 'Copier l\'URL',

        // Complete step
        'complete_title'         => 'Installation terminée',
        'ready_message'          => ':app_name est prêt à accepter des réservations.',
        'go_to_dashboard'        => 'Accéder au tableau de bord',
        'version_label'          => 'v:version',
    ],
];
