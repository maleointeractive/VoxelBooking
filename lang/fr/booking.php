<?php

declare(strict_types=1);

/**
 * French translations: public booking flow.
 *
 * Key convention: section.element
 * Placeholders: :name (replaced at runtime)
 * Plurals: {0} None|{1} One|[2,*] :count items
 */
return [
    // ── Step Titles ──
    'steps' => [
        'service_title'    => 'Choisissez une prestation',
        'staff_title'      => 'Avec qui souhaitez-vous rendez-vous ?',
        'staff_subtitle'   => 'Choisissez un membre de l\'équipe, ou laissez-nous assigner la première personne disponible.',
        'date_title'       => 'Choisissez une date',
        'time_title'       => 'Choisissez un horaire',
        'details_title'    => 'Vos informations',
        'details_subtitle' => 'Nous vous enverrons une confirmation par e-mail.',
        'confirm_title'    => 'Confirmez votre réservation',
        'confirm_subtitle' => 'Veuillez vérifier les informations ci-dessous.',
        // Resource-pattern
        'resource_title'    => 'Choisissez une chambre',
        'dates_title'       => 'Sélectionnez les dates',
        'dates_subtitle'    => 'Choisissez vos dates d\'arrivée et de départ.',
        'guests_title'      => 'Nombre de personnes',
    ],

    // ── Staff ──
    'staff' => [
        'any_available' => 'Peu importe',
    ],

    // ── Back Navigation ──
    'back' => [
        'change_service'     => '← Changer de prestation',
        'change_staff'       => '← Changer de membre de l\'équipe',
        'change_date'        => '← Changer la date ou l\'heure',
        'generic'            => '← Retour',
        'change_guests'      => '← Changer le nombre de personnes',
        'change_spots'       => '← Changer le nombre de places',
        'edit_details'       => '← Modifier les informations',
        'change_party_size'  => '← Changer la taille du groupe',
        'change_date_cap'    => '← Changer la date',
        'change_event'       => '← Changer d\'événement',
    ],

    // ── Form Labels ──
    'form' => [
        'name_label'        => 'Nom',
        'name_placeholder'  => 'Votre nom',
        'email_label'       => 'E-mail',
        'email_placeholder' => 'vous@exemple.com',
        'phone_label'       => 'Téléphone',
        'phone_placeholder' => 'Votre numéro de téléphone',
        'notes_label'       => 'Notes',
        'notes_placeholder' => 'Une demande particulière ?',
        'consent_default'   => 'J\'accepte le traitement de mes données personnelles pour cette réservation.',
        'privacy_link'      => 'Politique de confidentialité',
    ],

    // ── Buttons ──
    'buttons' => [
        'review'           => 'Vérifier la réservation',
        'confirm'          => 'Confirmer la réservation',
        'book_another'     => 'Prendre un autre rendez-vous',
        'add_to_calendar'  => 'Ajouter à Google Agenda',
        'download_ics'     => 'Télécharger pour votre calendrier',
        'reschedule'       => 'Reporter',
        'cancel_booking'   => 'Annuler la réservation',
        'pick_another_time'=> 'Choisir un autre horaire',
        'continue'         => 'Continuer',
        'selected_time'    => 'Sélectionné',
    ],

    // ── Confirmation ──
    'confirmed' => [
        'heading'           => 'Réservation confirmée',
        'message'           => 'Une confirmation a été envoyée à :email.',
        'email_sent'        => 'Une confirmation a été envoyée à :email.',
        'reference_label'   => 'Référence',
    ],

    // ── Pending Approval ──
    'pending' => [
        'heading'           => 'Réservation reçue',
        'message'           => 'Votre réservation est en attente d\'approbation. Nous vous préviendrons dès qu\'elle sera confirmée.',
        'reference_label'   => 'Référence',
    ],

    // ── Review ──
    'review' => [
        'cancellation_policy_label' => 'Politique d\'annulation',
    ],

    // ── Summary ──
    'summary' => [
        'service_label'    => 'Prestation',
        'with_label'       => 'Avec',
        'date_label'       => 'Date',
        'time_label'       => 'Heure',
        'duration_label'   => 'Durée',
        'price_label'      => 'Prix',
        // Resource-pattern
        'resource_label'   => 'Chambre',
        'check_in_label'   => 'Arrivée',
        'check_out_label'  => 'Départ',
        'nights_label'     => 'Nuits',
        'guests_label'     => 'Personnes',
        'total_label'      => 'Total',
        'per_night'        => '/nuit',
        // Contact details (review step)
        'contact_name'     => 'Nom',
        'contact_email'    => 'E-mail',
        'contact_phone'    => 'Téléphone',
    ],

    // ── Resource Pattern ──
    'resource' => [
        'summary_resource'  => 'Chambre',
        'check_in_label'    => 'Arrivée',
        'check_out_label'   => 'Départ',
        'nights_label'      => 'Nuits',
        'guests_label'      => 'Personnes',
        'total_label'       => 'Total',
        'per_night'         => '/nuit',
        'select_check_in'   => 'Sélectionnez la date d\'arrivée',
        'select_check_out'  => 'Sélectionnez maintenant votre date de départ',
        'amenities_label'   => 'Équipements',
        'capacity_label'    => 'Jusqu\'à :count personnes',
        'stay_range'        => ':min–:max nuits',
        'max_guests_reached'         => 'Maximum :count personnes pour cette chambre',
        'error_resource_not_found'    => 'Chambre introuvable.',
        'error_invalid_date_range'    => 'La date de départ doit être postérieure à la date d\'arrivée.',
        'error_min_stay_violation'    => 'La durée de séjour minimale n\'est pas atteinte.',
        'error_max_stay_violation'    => 'La durée de séjour maximale est dépassée.',
        'error_capacity_exceeded'     => 'Trop de personnes pour cette chambre.',
        'error_too_soon'              => 'La date d\'arrivée est trop proche.',
        'error_too_far'               => 'La date d\'arrivée est trop éloignée.',
        'error_date_blocked'          => 'Une ou plusieurs dates sont bloquées.',
        'error_already_booked'        => 'Cette chambre est déjà réservée pour ces dates.',
        'error_invalid_check_in_day'  => 'L\'arrivée n\'est pas disponible ce jour de la semaine.',
        'error_invalid_check_out_day' => 'Le départ n\'est pas disponible ce jour de la semaine.',
        'select_dates'                => 'Sélectionnez vos nouvelles dates d\'arrivée et de départ.',
    ],

    // ── Empty States ──
    'empty' => [
        'no_services'       => 'Aucune prestation disponible',
        'no_services_desc'  => 'Cette entreprise n\'a pas encore configuré de prestations.',
        'no_availability'   => 'Aucun horaire disponible ce mois-ci.',
        'no_times'          => 'Aucun horaire disponible ce jour-là.',
        'coming_soon'       => 'Bientôt disponible',
        'coming_soon_desc'  => 'Ce modèle de réservation n\'est pas encore disponible.',
        '404_title'         => 'Page introuvable',
        '404_desc'          => 'Cette page de réservation n\'existe pas ou n\'est plus active.',
        '404_help'          => 'Si vous avez suivi un lien pour arriver ici, veuillez contacter directement l\'entreprise.',
        // Resource-pattern
        'no_resources'      => 'Aucune chambre disponible',
        'no_resources_desc' => 'Cette entreprise n\'a pas encore configuré de chambres.',
        'no_dates'          => 'Aucune date disponible ce mois-ci.',
        // Capacity-pattern
        'no_slots'          => 'Aucun créneau disponible',
        'no_slots_desc'     => 'Cette entreprise n\'a pas encore configuré de créneaux.',
        'no_slots_date'     => 'Aucun créneau disponible ce jour-là.',
        // Event-pattern
        'no_events'         => 'Aucun événement à venir',
        'no_events_desc'    => 'Cette entreprise n\'a aucun événement prévu pour le moment.',
    ],

    // ── Capacity-Pattern Booking Page ──
    'capacity' => [
        'party_size_title'    => 'Taille du groupe',
        'party_size_label'    => 'Combien de personnes ?',
        'party_size_hint'     => 'Sélectionnez le nombre de personnes dans votre groupe.',
        'guest'               => 'personne',
        'guests'              => 'personnes',
        'date_title'          => 'Sélectionner une date',
        'time_title'          => 'Sélectionner un horaire',
        'spots_remaining'     => ':count places restantes',
        'slot_full'           => 'Complet',
        'min_guests_hint'     => 'Minimum :count personnes',
        'max_party_size_reached' => 'Maximum :count personnes par réservation',
    ],

    // ── Event-Pattern Booking Page ──
    'event' => [
        'events_title'        => 'Événements à venir',
        'event_detail_title'  => 'Détails de l\'événement',
        'spots_title'         => 'Combien de places ?',
        'spot'                => 'place',
        'spots'               => 'places',
        'spots_remaining'     => ':count places restantes',
        'event_full'          => 'Cet événement est complet.',
        'max_spots_reached'   => 'Maximum :count places par réservation',
        'max_reached'         => 'Nombre maximal de places atteint',
        'join_waitlist'       => 'Rejoindre la liste d\'attente',
        'waitlist_notice'     => 'Vous serez ajouté(e) à la liste d\'attente.',
        'waitlisted_title'    => 'Vous êtes sur liste d\'attente',
        'waitlisted_message'  => 'Nous vous préviendrons dès qu\'une place se libère.',
        'location_label'      => 'Lieu',
        'price_label'         => 'Prix',
        'date_label'          => 'Date',
        'time_label'          => 'Heure',
        'per_person'          => 'par personne',
        'free'                => 'Gratuit',
        'select_event'        => 'Sélectionnez un événement…',
        'full_badge'          => 'Complet',
        'waitlist_badge'      => 'Liste d\'attente',
        'no_upcoming'         => 'Aucun événement à venir disponible pour un report.',
        'spots_left'          => 'Places restantes',
    ],

    // ── Errors & Toasts ──
    'errors' => [
        'slot_taken'        => 'Ce créneau vient d\'être pris. Veuillez en choisir un autre.',
        'generic'           => 'Une erreur est survenue. Veuillez réessayer.',
        'connection'        => 'Une erreur de connexion est survenue. Veuillez réessayer.',
        'spam_detected'     => 'Votre demande n\'a pas pu être traitée. Veuillez réessayer.',
        'required_name'     => 'Veuillez saisir votre nom.',
        'required_email'    => 'Veuillez saisir une adresse e-mail valide.',
        'required_consent'  => 'Vous devez accepter la case de consentement pour continuer.',
    ],

    // ── Common / UI ──
    'common' => [
        'dismiss' => 'Fermer',
    ],

    // ── Timezone ──
    'timezone' => [
        'label'            => 'Fuseau horaire',
        'same_as_business' => 'identique à l\'entreprise',
        'notice'           => 'Horaires affichés dans votre fuseau horaire (:tz)',
        'search'           => 'Rechercher un fuseau horaire…',
        'group_americas'   => 'Amériques',
        'group_europe'     => 'Europe',
        'group_asia'       => 'Asie et Pacifique',
        'group_africa'     => 'Afrique',
        'group_other'      => 'Autre',
    ],

    // ── Duration Formatting ──
    'duration' => [
        'hours'        => 'h',
        'minutes'      => 'min',
        'hours_long'   => ':h h :m min',
        'minutes_only' => ':m min',
    ],

    // ── Time Period Labels (slot grouping) ──
    'time_periods' => [
        'morning'   => 'Matin',
        'afternoon' => 'Après-midi',
        'evening'   => 'Soir',
    ],

    // ── API Error Messages (server-side, returned as JSON) ──
    'api' => [
        'invalid_date'        => 'Paramètre de date requis (AAAA-MM-JJ)',
        'name_email_required' => 'Le nom et l\'e-mail sont obligatoires.',
        'invalid_email'       => 'Adresse e-mail invalide.',
        'phone_required'      => 'Le numéro de téléphone est obligatoire.',
        'start_time_required' => 'L\'heure de début est obligatoire.',
        'slot_unavailable'    => 'Ce créneau vient d\'être pris.',
        'booking_failed'      => 'Une erreur est survenue lors de la création de votre réservation. Veuillez réessayer.',
        'invalid_json'        => 'Corps de requête invalide.',
        'spam_detected'       => 'Requête invalide.',
        'spam_retry'          => 'Veuillez réessayer.',
        'max_bookings_exceeded' => 'Vous avez atteint le nombre maximal de réservations pour cette journée.',
        'csrf_mismatch'       => 'Jeton de sécurité invalide. Veuillez actualiser la page et réessayer.',
        // Resource-pattern
        'resource_required'     => 'Veuillez sélectionner une ressource.',
        'check_in_required'     => 'La date d\'arrivée est obligatoire.',
        'check_out_required'    => 'La date de départ est obligatoire.',
        'guest_count_invalid'   => 'Le nombre de personnes doit être d\'au moins 1.',
        'resource_unavailable'  => 'Cette ressource n\'est pas disponible pour les dates sélectionnées.',
        // Capacity-pattern
        'slot_required'         => 'Veuillez sélectionner un créneau.',
        'date_required'         => 'Veuillez sélectionner une date.',
        'party_size_invalid'    => 'La taille du groupe doit être d\'au moins 1.',
        'party_too_small'       => 'La taille du groupe est inférieure au minimum requis pour ce créneau.',
        'capacity_exceeded'     => 'Il ne reste pas assez de places pour la taille de votre groupe.',
        // Event-pattern
        'event_required'        => 'Veuillez sélectionner un événement.',
        'spot_count_invalid'    => 'Le nombre de places doit être d\'au moins 1.',
        'spot_count_too_few'    => 'Le nombre minimal de places par réservation est de :min.',
        'spot_count_too_many'   => 'Le nombre maximal de places par réservation est de :max.',
        'event_full'            => 'Cet événement est complet.',
        'event_cancelled'       => 'Cet événement a été annulé.',
        'waitlist_full'         => 'La liste d\'attente de cet événement est complète.',
    ],

    // ── Recovery ──
    'recovery' => [
        'slot_taken' => 'Cet horaire vient d\'être réservé. Essayez plutôt l\'un de ceux-ci :',
    ],

    // ── Calendar ──
    'calendar' => [
        'today'      => 'Aujourd\'hui',
        'label'      => 'Calendrier',
        'prev_month' => 'Mois précédent',
        'next_month' => 'Mois suivant',
    ],

    // ── Day Names (0=Sunday) ──
    'days' => [
        0 => 'Dimanche',
        1 => 'Lundi',
        2 => 'Mardi',
        3 => 'Mercredi',
        4 => 'Jeudi',
        5 => 'Vendredi',
        6 => 'Samedi',
    ],

    // ── Short Day Names ──
    'days_short' => [
        0 => 'DI',
        1 => 'LU',
        2 => 'MA',
        3 => 'ME',
        4 => 'JE',
        5 => 'VE',
        6 => 'SA',
    ],

    // ── Month Names (1-12) ──
    'months' => [
        1  => 'Janvier',
        2  => 'Février',
        3  => 'Mars',
        4  => 'Avril',
        5  => 'Mai',
        6  => 'Juin',
        7  => 'Juillet',
        8  => 'Août',
        9  => 'Septembre',
        10 => 'Octobre',
        11 => 'Novembre',
        12 => 'Décembre',
    ],

    // ── Footer ──
    'footer' => [
        'powered_by' => 'Propulsé par',
    ],

    // ── Theme Toggle ──
    'theme' => [
        'switch_to_light' => 'Passer au mode clair',
        'switch_to_dark'  => 'Passer au mode sombre',
        'toggle'          => 'Changer de thème',
    ],

    // ── Privacy Pages ──
    'privacy' => [
        'page_title'              => 'Vos données',
        'meta_description'        => 'Consultez vos données détenues par :business',
        'not_found'               => 'Page introuvable',
        'export_failed'           => 'Échec de l\'export. Veuillez réessayer plus tard.',
        'subtitle'                => 'Vos données détenues par cette entreprise',
        'personal_info'           => 'Informations personnelles',
        'name_label'              => 'Nom',
        'email_label'             => 'E-mail',
        'phone_label'             => 'Téléphone',
        'customer_since'          => 'Client depuis',
        'booking_history'         => 'Historique des réservations',
        'no_bookings'             => 'Aucune réservation trouvée.',
        'party_size'              => 'Taille du groupe',
        'source'                  => 'Source',
        'consent_records'         => 'Historique de consentement',
        'consented'               => 'Consentement donné',
        'actions_title'           => 'Actions',
        'gdpr_rights'             => 'Conformément au RGPD, vous avez le droit d\'exporter vos données ou d\'en demander la suppression.',
        'export_data'             => 'Exporter les données (JSON)',
        'request_deletion'        => 'Demander la suppression',
        'confirm_warning_title'   => 'Êtes-vous sûr(e) ?',
        'confirm_warning_body'    => 'Cette action demandera la suppression définitive de vos données personnelles. Elle ne pourra plus être annulée une fois traitée par l\'entreprise.',
        'cancel'                  => 'Annuler',
        'confirm_deletion'        => 'Confirmer la suppression',
        'footer_server'           => 'Vos données sont stockées sur le serveur de :business',
        'anonymized_page_title'   => 'Données supprimées',
        'anonymized_title'        => 'Vos données ont été supprimées',
        'anonymized_message'      => 'Vos informations personnelles ont été anonymisées comme demandé. Les réservations sont conservées à des fins opérationnelles, mais votre nom, votre e-mail, votre numéro de téléphone et vos notes personnelles ont été définitivement supprimés.',
        'deletion_req_page_title' => 'Suppression demandée',
        'deletion_req_title'      => 'Suppression demandée',
        'deletion_req_message'    => 'Votre demande de suppression de données a été enregistrée. L\'entreprise exploitant ce service a été notifiée et traitera votre demande.',
        'deletion_req_next_title' => 'Ce qui va se passer :',
        'deletion_req_next_body'  => 'L\'entreprise examinera votre demande et supprimera vos données personnelles. Conformément au RGPD, elle doit répondre sous 30 jours. Les réservations peuvent être conservées sous forme anonymisée à des fins d\'historique opérationnel, mais tous les identifiants personnels seront supprimés.',
    ],

    // ── Self-Service Manage Page ──
    'manage' => [
        'page_title'             => 'Gérer la réservation',
        'heading'                => 'Votre réservation',
        'cancel_heading'         => 'Annuler la réservation',
        'cancel_confirm'         => 'Êtes-vous sûr(e) de vouloir annuler cette réservation ?',
        'cancel_reason_label'    => 'Motif (facultatif)',
        'cancel_reason_placeholder' => 'Indiquez-nous la raison de votre annulation…',
        'cancel_button'          => 'Oui, annuler la réservation',
        'cancel_nevermind'       => 'Conserver ma réservation',
        'cancelled_heading'      => 'Réservation annulée',
        'cancelled_message'      => 'Votre réservation a été annulée.',
        'book_again'             => 'Réserver à nouveau',
        'time_gate_cancel'       => 'Cette réservation ne peut plus être annulée.',
        'time_gate_reschedule'   => 'Cette réservation ne peut plus être reportée.',
        'not_found'              => 'Réservation introuvable.',
        'already_cancelled'      => 'Cette réservation a déjà été annulée.',
        'cancellation_disabled'  => 'L\'annulation n\'est pas autorisée pour cette réservation.',
        'rescheduling_disabled'  => 'Le report n\'est pas disponible pour cette réservation.',
        'same_slot'              => 'Vous avez sélectionné le même horaire que votre réservation actuelle.',
        'status_confirmed'       => 'Confirmée',
        'status_pending'         => 'En attente d\'approbation',
        'status_cancelled'       => 'Annulée',
        'status_rescheduled'     => 'Reportée',
        'status_completed'       => 'Terminée',
        'loading'                => 'Chargement des détails de la réservation…',
        // Reschedule flow
        'reschedule_heading'         => 'Reporter la réservation',
        'reschedule_pick_date'       => 'Choisissez une nouvelle date et un nouvel horaire',
        'reschedule_review_heading'  => 'Confirmer le report',
        'reschedule_review_subtitle' => 'Votre réservation sera déplacée au nouvel horaire.',
        'reschedule_original_label'  => 'Actuel',
        'reschedule_new_label'       => 'Nouvel horaire',
        'reschedule_confirm_button'  => 'Confirmer le report',
        'reschedule_cancel'          => '← Retour à la réservation',
        'reschedule_success_heading' => 'Réservation reportée',
        'reschedule_success_message' => 'Votre réservation a été déplacée au nouvel horaire.',
        'reschedule_back_to_date'    => '← Changer la date ou l\'heure',
        'reschedule_reason_disabled' => 'Le report n\'est pas disponible pour cette réservation.',
        'reschedule_reason_too_late' => 'Le délai de report pour cette réservation est dépassé.',
        'reschedule_reason_not_confirmed' => 'Seules les réservations confirmées peuvent être reportées.',
        'privacy_link'                    => 'Vos données et confidentialité',
    ],

    // ── Demo Mode ──
    'demo_notice' => 'Mode démo — les modifications sont réinitialisées chaque jour.',
];
