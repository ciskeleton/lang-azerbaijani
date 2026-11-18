<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Sistem yeniləmələri mövcuddur';
$lang['emails_updates_available_message'] = <<<EOT
Salam,

{site_anchor} üçün yeni sistem yeniləmələri aşkar edilib.

Bu yeniləmələr təhlükəsizlik düzəlişləri, performans yaxşılaşdırmaları və ya yeni funksiyalar ehtiva edə bilər.
Onları mümkün qədər tez nəzərdən keçirməyinizi tövsiyə edirik.

Mövcud yeniləmələri admin idarə panelindən nəzərdən keçirə və idarə edə bilərsiniz:
{link}

Yeniləmələri artıq nəzərdən keçirmisinizsə və ya tətbiq etmisinizsə, əlavə addım tələb olunmur.

Bu {site_name} tərəfindən göndərilən avtomatik sistem mesajıdır.
Xahiş edirik bu e-poçta cavab verməyin.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Hesabın aktivləşdirilməsi';
$lang['emails_account_activation_request_message'] = <<<EOT
Salam {name},

{site_anchor} saytında qeydiyyatdan keçdiyiniz üçün təşəkkür edirik. Hesabınız yaradılıb və istifadə etməzdən əvvəl aktivləşdirilməlidir.

Hesabınızı aktivləşdirmək üçün aşağıdakı linkə klikləyin və ya onu brauzerinizə kopyalayıb yapışdırın:
{link}

Hörmətlə,
-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Yeni aktivləşdirmə linki';
$lang['emails_account_activation_resend_message'] = <<<EOT
Salam {name},

Hesabınız aktiv olmadığına görə bu yaxınlarda {site_anchor} saytında yeni aktivləşdirmə linki tələb etdiniz.
Hesabınızı aktivləşdirmək üçün aşağıdakı linkə klikləyin və ya onu brauzerinizə kopyalayıb yapışdırın:
{link}

Bunu tələb etməmisinizsə, əlavə addım tələb olunmur.

Bu addım aşağıdakı IP ünvanından tələb edilib: {ip_link}.

Hörmətlə,
-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Hesab aktivləşdirildi';
$lang['emails_account_activation_success_message'] = <<<EOT
Salam {name},

{site_anchor} saytındakı hesabınız uğurla aktivləşdirildi. Artıq istədiyiniz vaxt <a href="{login_url}" target="_blank" rel="noopener">daxil ola</a> bilərsiniz.

Qaldığınızdan zövq almağınızı arzulayırıq, hörmətlərimizi qəbul edin.

-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Hesab təsdiq gözləyir';
$lang['emails_account_approval_pending_message'] = <<<EOT
Salam {name},

{site_anchor} saytına qoşulduğunuz üçün təşəkkür edirik. Hesabınız yaradılıb, lakin aktiv olmaq üçün sayt administratorunun təsdiqini tələb edir.
Bu vacib addıma görə səmimi qəlbdən üzr istəyirik, lakin bu yalnız təhlükəsizlik məqsədi daşıyır.

Hesabınız təsdiqlənən kimi təsdiq e-poçtu alacaqsınız.

Qaldığınızdan zövq almağınızı arzulayırıq, hörmətlərimizi qəbul edin.

-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Hesab təsdiqləndi';
$lang['emails_account_approval_success_message'] = <<<EOT
Salam {name},

Gözəl xəbər! {site_anchor} saytındakı hesabınız indicə təsdiqləndi.

Artıq daxil olub hesabınızı dərhal istifadə etməyə başlaya bilərsiniz:
{link}

Sizinlə olduğumuz üçün şadıq.

-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Hesab bərpa edildi';
$lang['emails_account_restored_message'] = <<<EOT
Salam {name},

Bu e-poçt {site_anchor} saytındakı hesabınızın uğurla bərpa edildiyini təsdiqləyir.

Yenidən xoş gəldiniz, ümid edirik ki, bu dəfə qaldığınızdan zövq alacaqsınız.

Hörmətlə,
-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = '{site_name} saytına xoş gəldiniz';
$lang['emails_account_welcome_message'] = <<<EOT
Salam {name},

Bir çox insan saytında qeydiyyatdan keçdikdən sonra həqiqətən uzun salam e-poçtu ardıcıllığı göndərir.

Yaxşı xəbər: biz çoxu deyilik.
Ancaq yenə də sizi salamlayırıq və {site_anchor} saytına qoşulduğunuz üçün təşəkkür edirik.

Qaldığınızdan zövq almağınızı arzulayırıq, hörmətlərimizi qəbul edin.

-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'E-poçt dəyişdirmə sorğusu';
$lang['emails_email_change_request_message'] = <<<EOT
Salam {name},

Bu e-poçtu {site_anchor} saytındakı hesabınız üçün e-poçt dəyişdirmə sorğusu aldığımız üçün alırsınız.

Davam etmək istəyirsinizsə, aşağıdakı linkə klikləyin və ya onu brauzerinizə kopyalayıb yapışdırın:
{link}

E-poçt dəyişikliyi tələb etməmisinizsə, əlavə addım tələb olunmur.

Bu addım aşağıdakı IP ünvanından tələb edilib: {ip_link}.

Hörmətlə,
-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-poçt ünvanı dəyişdirildi';
$lang['emails_email_change_success_message'] = <<<EOT
Salam {name},

Bu e-poçt {site_anchor} saytında istifadə etdiyiniz e-poçt ünvanının uğurla dəyişdirildiyini təsdiqləyir.

Bu addımı siz yerinə yetirməmisinizsə, bu problemi həll etmək üçün mümkün qədər tez bizimlə əlaqə saxlayın.

Bu addım aşağıdakı IP ünvanından yerinə yetirilib: {ip_link}.

Hörmətlə,
-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Uğursuz giriş xəbərdarlığı';
$lang['emails_login_alert_failure_message'] = <<<EOT
Salam {name},

Kimsə bu yaxınlarda {site_name} hesabınıza daxil olmaq üçün yanlış parollardan istifadə edib.

Server tarixi: {date}
Cihaz: {browser}, {platform}
IP ünvanı: {ip_link}

Bu siz deyilsinizsə, narahat olmayın, onların giriş cəhdi uğurlu olmayıb.

Bu sizsinizsə və parolunuzu xatırlamırsınızsa, onu bərpa etmək üçün aşağıdakı linkə klikləyin:
{reset_link}

Hesabınıza daxil olmaqda çətinlik çəkirsinizsə, komandamızla əlaqə saxlayın və ya bir kliklə giriş linki tələb edin.

-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Uğurlu giriş bildirişi';
$lang['emails_login_alert_success_message'] = <<<EOT
Salam {name},

Bu e-poçtu {site_name} hesabınıza uğurlu girişdən sonra göndəririk.

Server tarixi: {date}
Cihaz: {browser}, {platform}
IP ünvanı: {ip_link}

Bu sizsinizsə, bu e-poçtu təhlükəsiz şəkildə nəzərdən qaçıra bilərsiniz.

Daxil olmamısınızsa, hesabınızı qorumaq üçün dərhal parolunuzu dəyişin.

Hər hansı kömək üçün dəstək komandamızla əlaqə saxlayın.

-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Sürətli giriş linki';
$lang['emails_login_magic_link_message'] = <<<EOT
Salam {name},

{site_anchor} saytındakı hesabınıza bir kliklə giriş tələb etdiniz.

Aşağıdakı linkə klikləyin və ya onu brauzerinizə kopyalayıb yapışdırın və dərhal daxil olacaqsınız:
{link}

Bu link 15 dəqiqə ərzində etibarsız olacaq. Bunu tələb etməmisinizsə, bu e-poçtu nəzərə almayın.

Bu addım aşağıdakı IP ünvanından tələb edilib: {ip_link}.

Hörmətlə,
-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'İki faktorlu autentifikasiya';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Salam {name},

İki faktorlu autentifikasiya kodunuz: <strong>{code}</strong>

İki faktorlu autentifikasiyanı hesab parametrlərinizdən istənilən vaxt söndürə bilərsiniz.

Bu addım aşağıdakı IP ünvanından yerinə yetirilib: {ip_link}.

Hörmətlə,
-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Parolun bərpası sorğusu';
$lang['emails_password_change_request_message'] = <<<EOT
Salam {name},

Bu e-poçtu {site_anchor} saytındakı hesabınız üçün parol bərpası sorğusu aldığımız üçün alırsınız.

Davam etmək istəyirsinizsə, aşağıdakı linkə klikləyin və ya onu brauzerinizə kopyalayıb yapışdırın:
{link}

Parol bərpası tələb etməmisinizsə, əlavə addım tələb olunmur.

Bu addım aşağıdakı IP ünvanından tələb edilib: {ip_link}.

Hörmətlə,
-- {site_name} Komandası.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Parol uğurla dəyişdirildi';
$lang['emails_password_change_success_message'] = <<<EOT
Salam {name},

Bu e-poçt {site_anchor} saytındakı parolunuzun uğurla dəyişdirildiyini təsdiqləyir. Artıq yenisini istifadə edərək <a href="{login_url}" target="_blank" rel="noopener">daxil ola</a> bilərsiniz.

Bu addımı siz yerinə yetirməmisinizsə, bu problemi həll etmək üçün mümkün qədər tez bizimlə əlaqə saxlayın.

Bu addım aşağıdakı IP ünvanından yerinə yetirilib: {ip_link}.

Hörmətlə,
-- {site_name} Komandası.
EOT;
