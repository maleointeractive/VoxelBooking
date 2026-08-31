<?php

declare(strict_types=1);

/**
 * French translations: email subjects and content.
 */
return [
    'booking_confirmation' => [
        'subject'  => 'Réservation confirmée – :service le :date',
        'greeting' => 'Bonjour :name,',
        'body'     => 'Votre réservation a été confirmée.',
        'details'  => 'Détails de la réservation',
        'footer'   => 'Si vous devez apporter des modifications, veuillez nous contacter.',
    ],

    'booking_reminder' => [
        'subject'  => 'Rappel : :service demain à :time',
        'greeting' => 'Bonjour :name,',
        'body'     => 'Ceci est un rappel concernant votre prochain rendez-vous.',
    ],

    'operator_notification' => [
        'subject' => 'Nouvelle réservation : :service – :customer',
        'body'    => 'Une nouvelle réservation a été effectuée.',
    ],

    'operator_cancellation' => [
        'subject' => 'Réservation annulée : :service – :customer',
        'body'    => 'Une réservation a été annulée.',
    ],

    'privacy_acknowledgment' => [
        'subject'  => 'Votre demande de confidentialité a été reçue',
        'greeting' => 'Bonjour :name,',
        'body'     => 'Nous avons bien reçu votre demande concernant vos données et la traiterons sous 30 jours.',
    ],

    'deletion_completed' => [
        'subject' => 'Vos données ont été supprimées',
        'body'    => 'Vos données personnelles ont été supprimées de nos systèmes.',
    ],

    'export_acknowledgment' => [
        'subject' => 'Votre export de données depuis :tenant',
        'title'   => 'Export de données terminé',
        'body'    => 'Vos données personnelles ont été exportées depuis :tenant. Le fichier d\'export a été téléchargé sur votre appareil pendant votre session.',
        'footer'  => 'Si vous n\'êtes pas à l\'origine de cet export, veuillez contacter directement l\'entreprise.',
    ],

    'deletion_acknowledgment' => [
        'subject' => 'Demande de suppression reçue — :tenant',
        'title'   => 'Demande de suppression reçue',
        'body'    => 'Votre demande de suppression de données a été transmise à :tenant. L\'entreprise examinera votre demande et la traitera conformément à la réglementation sur la protection des données.',
        'footer'  => 'Conformément au RGPD, l\'entreprise doit répondre sous 30 jours. Vos données personnelles seront anonymisées une fois la demande confirmée.',
    ],

    'operator_deletion' => [
        'subject'          => 'Nouvelle demande de suppression — :customer',
        'title'            => 'Nouvelle demande de suppression',
        'body'             => 'Un client a demandé la suppression de ses données.',
        'detail_customer'  => 'Client :',
        'detail_email'     => 'E-mail :',
        'detail_hashed'    => '(haché)',
        'detail_tenant'    => 'Entreprise :',
        'footer'           => 'Connectez-vous à :app_name et accédez à la file d\'attente de suppression pour traiter cette demande.',
    ],

    'business_user_welcome' => [
        'subject'           => "Vous avez été invité(e) à gérer :tenant",
        'title'             => "Vous avez été invité(e)",
        'greeting'          => 'Bonjour :name,',
        'body'              => 'Un compte a été créé pour vous permettre de gérer les réservations de :tenant.',
        'detail_email'      => 'E-mail',
        'detail_password'   => 'Mot de passe temporaire',
        'detail_login_url'  => 'URL de connexion',
        'cta_label'         => 'Se connecter à :tenant',
        'change_password'   => 'Changez votre mot de passe après votre première connexion.',
        'booking_page_hint' => 'Votre page de réservation est disponible à l\'adresse :',
        'footer'            => 'Envoyé par :app_name pour le compte de :tenant.',
    ],

    'waitlist_confirmation' => [
        'subject'  => 'Liste d\'attente — :event',
        'heading'  => 'Vous êtes sur liste d\'attente',
        'greeting' => 'Bonjour :name,',
        'body'     => "L'événement est actuellement complet, mais vous avez été ajouté(e) à la liste d'attente. Nous vous préviendrons si une place se libère.",
        'footer'   => 'Pour toute question, veuillez nous contacter.',
    ],

    'cancellation' => [
        'subject'    => 'Réservation annulée — :business',
        'heading'    => 'Réservation annulée',
        'greeting'   => 'Bonjour :name,',
        'body'       => 'Votre réservation a été annulée comme demandé.',
        'footer'     => 'S\'il s\'agit d\'une erreur, vous pouvez effectuer une nouvelle réservation à tout moment.',
        'book_again' => 'Réserver à nouveau',
    ],

    'approval_request' => [
        'subject'  => 'Votre demande de réservation a été reçue — :business',
        'heading'  => 'Demande reçue',
        'greeting' => 'Bonjour :name,',
        'body'     => 'Votre réservation est en attente d\'approbation. Nous vous préviendrons dès qu\'elle sera confirmée.',
        'footer'   => 'Pour toute question, veuillez nous contacter.',
    ],

    'approval_confirmed' => [
        'subject'  => 'Votre réservation a été approuvée — :business',
        'heading'  => 'Réservation approuvée',
        'greeting' => 'Bonjour :name,',
        'body'     => 'Votre réservation a été approuvée et est désormais confirmée.',
        'footer'   => 'Si vous devez apporter des modifications, veuillez nous contacter.',
    ],

    'reschedule_confirmation' => [
        'subject'  => 'Réservation reportée — :business',
        'heading'  => 'Réservation reportée',
        'greeting' => 'Bonjour :name,',
        'body'     => 'Votre réservation a été reportée à un nouvel horaire.',
        'footer'   => 'Si vous devez apporter d\'autres modifications, veuillez nous contacter.',
    ],

    'test' => [
        'subject' => ':app_name — Test SMTP',
        'title'   => 'Configuration SMTP vérifiée',
        'body'    => 'Cet e-mail de test confirme que votre configuration SMTP fonctionne correctement.',
    ],

    'common' => [
        'date'       => 'Date',
        'time'       => 'Heure',
        'service'    => 'Prestation',
        'staff'      => 'Membre du personnel',
        'room'       => 'Chambre',
        'check_in'   => 'Arrivée',
        'check_out'  => 'Départ',
        'guests'     => 'Personnes',
        'total'      => 'Total',
        'regards'        => 'Cordialement,',
        'customer'       => 'Client',
        'manage_booking' => 'Voir ou gérer la réservation',
        'powered_by'     => 'Propulsé par :app_name',
    ],
];
