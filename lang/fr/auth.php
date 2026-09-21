<?php

declare(strict_types=1);

/**
 * French translations: authentication.
 */
return [
    'page_title'          => 'Connexion — :app_name',
    'meta_description'    => 'Connexion administrateur :app_name',
    'hero_name'           => 'VoxelBooking',
    'hero_sub'            => 'Infrastructure de planification',
    'login_heading'       => 'Connectez-vous à votre compte',
    'email_label'         => 'Adresse e-mail',
    'email_placeholder'   => 'operateur@exemple.com',
    'password_label'      => 'Mot de passe',
    'password_placeholder' => '••••••••',
    'login_button'        => 'Se connecter',
    'logging_in'          => 'Connexion en cours…',
    'logout_button'       => 'Se déconnecter',
    'invalid_credentials' => 'E-mail ou mot de passe incorrect.',
    'credentials_required' => 'L\'e-mail et le mot de passe sont obligatoires.',
    'account_not_found_for_email' => 'Aucun compte trouvé pour cet e-mail.',
    'account_not_found'   => 'Compte introuvable.',
    'account_not_found_or_inactive' => 'Compte introuvable ou désactivé.',
    'rate_limited'        => 'Trop de tentatives de connexion. Veuillez réessayer plus tard.',
    'session_expired'     => 'Votre session a expiré. Veuillez vous reconnecter.',
    'footer'              => 'Propulsé par :app_name',
    'remember_me'         => 'Se souvenir de moi',
    'toggle_theme'        => 'Changer de thème',

    // Method selector
    'tab_password'        => 'Mot de passe',
    'tab_otp'             => 'Code de connexion',
    'tab_magic_link'      => 'Lien magique',
    'send_code_button'    => 'Envoyer le code de connexion',
    'send_link_button'    => 'M\'envoyer un lien de connexion par e-mail',
    'check_email'         => 'Consultez votre e-mail pour trouver un lien de connexion.',
    'enter_code_heading'  => 'Saisissez le code de connexion',
    'enter_code_sub'      => 'Nous avons envoyé un code à 6 chiffres à :email',
    'verify_button'       => 'Vérifier',
    'resend_code'         => 'Renvoyer le code',
    'back_to_login'       => 'Retour à la connexion',
    'code_invalid'        => 'Code invalide ou expiré. Veuillez réessayer.',
    'link_invalid'        => 'Lien invalide ou expiré. Veuillez en demander un nouveau.',
    'code_sent'           => 'Code de connexion envoyé. Consultez votre e-mail.',
    'send_failed'         => 'Impossible d\'envoyer l\'e-mail de connexion. Veuillez réessayer ou utiliser un mot de passe.',
    'passwordless_unavailable' => 'La connexion sans mot de passe n\'est pas disponible. L\'envoi d\'e-mails n\'est pas configuré.',

    // OTP email
    'otp_email_subject'   => 'Votre code de connexion -- :app_name',
    'otp_email_body'      => 'Votre code de connexion est :',
    'otp_email_expiry'    => 'Ce code expire dans 10 minutes.',
    'otp_email_ignore'    => 'Si vous n\'êtes pas à l\'origine de cette demande, vous pouvez ignorer cet e-mail en toute sécurité.',

    // Magic-link email
    'magic_link_email_subject' => 'Connexion à :app_name',
    'magic_link_email_body'    => 'Cliquez ci-dessous pour vous connecter :',
    'magic_link_email_cta'     => 'Se connecter à :app_name',
    'magic_link_email_expiry'  => 'Ce lien expire dans 15 minutes et ne peut être utilisé qu\'une seule fois.',
    'magic_link_email_ignore'  => 'Si vous n\'êtes pas à l\'origine de cette demande, vous pouvez ignorer cet e-mail en toute sécurité.',

    // Password reset
    'forgot_password_link'     => 'Mot de passe oublié ?',
    'forgot_password_heading'  => 'Réinitialisez votre mot de passe',
    'forgot_password_sub'      => 'Saisissez votre e-mail et nous vous enverrons un lien de réinitialisation.',
    'forgot_password_button'   => 'Envoyer le lien de réinitialisation',
    'forgot_password_sent'     => 'Si un compte existe avec cette adresse e-mail, un lien de réinitialisation a été envoyé.',
    'forgot_password_page'     => 'Mot de passe oublié — :app_name',
    'reset_password_heading'   => 'Définir un nouveau mot de passe',
    'reset_password_button'    => 'Réinitialiser le mot de passe',
    'reset_password_success'   => 'Mot de passe réinitialisé avec succès. Vous pouvez maintenant vous connecter.',
    'reset_token_invalid'      => 'Lien de réinitialisation invalide ou expiré. Veuillez en demander un nouveau.',
    'reset_password_label'     => 'Nouveau mot de passe',
    'reset_confirm_label'      => 'Confirmer le mot de passe',
    'reset_password_mismatch'  => 'Les mots de passe ne correspondent pas.',
    'reset_password_too_short' => 'Le mot de passe doit comporter au moins 8 caractères.',
    'reset_password_page'      => 'Réinitialiser le mot de passe — :app_name',

    // Password reset email
    'reset_email_subject'      => 'Réinitialisez votre mot de passe — :app_name',
    'reset_email_body'         => 'Cliquez ci-dessous pour réinitialiser votre mot de passe :',
    'reset_email_cta'          => 'Réinitialiser votre mot de passe',
    'reset_email_expiry'       => 'Ce lien expire dans 60 minutes et ne peut être utilisé qu\'une seule fois.',
    'reset_email_ignore'       => 'Si vous n\'êtes pas à l\'origine de cette demande, vous pouvez ignorer cet e-mail en toute sécurité.',
];
