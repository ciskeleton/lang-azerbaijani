<?php

/**
 * Admin application language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Admin
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_catalog'] = 'Paket Kataloqu';
$lang['admin_components'] = 'Komponentlər';
$lang['admin_content'] = 'Məzmun';
$lang['admin_database_backup'] = 'Verilənlər Bazası Ehtiyat Nüsxələri';
$lang['admin_dependencies'] = 'Asılılıqlar';
$lang['admin_extensions'] = 'Genişləndirmələr';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Kömək';
$lang['admin_languages'] = 'Dillər';
$lang['admin_logs'] = 'Sistem Jurnalları';
$lang['admin_media'] = 'Media Kitabxanası';
$lang['admin_modules'] = 'Modullar';
$lang['admin_plugins'] = 'Pluginlər';
$lang['admin_reports'] = 'Fəaliyyət Jurnalı';
$lang['admin_settings'] = 'Sistem Parametrləri';
$lang['admin_statistics'] = 'Statistika';
$lang['admin_sysinfo'] = 'Sistem Məlumatı';
$lang['admin_system'] = 'Sistem';
$lang['admin_system_firewall'] = 'Sistem Firewall-u';
$lang['admin_themes'] = 'Temalar';
$lang['admin_updates'] = 'Sistem Yeniləmələri';
$lang['admin_users'] = 'İstifadəçilər';
$lang['admin_view_site'] = 'Sayta Bax';
$lang['per_page'] = 'Səhifə Başına';

// Generic Messages
$lang['admin_footer_thankyou'] = '<a href="%s">%s</a> ilə yaratdığınız üçün təşəkkür edirik.';
$lang['admin_items_active_count'] = '=0{Aktiv element yoxdur.} other{<b>%s</b> elementdən <b>#</b> aktivdir.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Quraşdırma uğursuz oldu: %s';
$lang['admin_install_location_app'] = 'Yalnız bu tətbiq';
$lang['admin_install_location_core'] = 'Bütün tətbiqlər';
$lang['admin_install_location_select'] = '&#151; Yer seçin &#151;';
$lang['admin_install_upload_format'] = 'Dəstəklənən format: <b>.zip</b>';
$lang['admin_install_upload_tip'] = 'Paketi buraya <b>.zip</b> faylını yükləyərək quraşdırın.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Köhnə ehtiyat nüsxə fayllarını təmizləmək alınmadı.';
$lang['admin_database_backup_clean_success'] = '%d ehtiyat nüsxə faylı silindi. %d disk sahəsi azad edildi.';
$lang['admin_database_backup_create'] = 'Ehtiyat Nüsxə Yarat';
$lang['admin_database_backup_create_confirm'] = 'İndi ehtiyat nüsxə yaratmaq istədiyinizə əminsiniz?';
$lang['admin_database_backup_create_error'] = 'Ehtiyat nüsxə faylını yaratmaq alınmadı. <b>%s</b> qovluğunun yazıla bilən olduğuna əmin olun.';
$lang['admin_database_backup_create_success'] = 'Verilənlər bazası ehtiyat nüsxəsi <b>%s</b> uğurla yaradıldı.';
$lang['admin_database_backup_delete_confirm'] = 'Bu ehtiyat nüsxə fayllarını silmək istədiyinizə əminsiniz?';
$lang['admin_database_backup_delete_error'] = 'Seçilmiş ehtiyat nüsxə fayllarını silmək alınmadı.';
$lang['admin_database_backup_delete_success'] = 'Ehtiyat nüsxə faylları uğurla silindi.';
$lang['admin_database_backup_download_error'] = 'Seçilmiş ehtiyat nüsxə faylını yükləmək alınmadı.';
$lang['admin_database_backup_download_success'] = 'Ehtiyat nüsxə faylı uğurla yükləndi.';
$lang['admin_database_backup_lock_confirm'] = 'Bu ehtiyat nüsxə fayllarını kilidləmək istədiyinizə əminsiniz?';
$lang['admin_database_backup_lock_error'] = 'Seçilmiş ehtiyat nüsxə fayllarını kilidləmək alınmadı.';
$lang['admin_database_backup_lock_success'] = 'Ehtiyat nüsxə faylları uğurla kilidləndi.';
$lang['admin_database_backup_locked_error'] = 'Kilidlənmiş ehtiyat nüsxə fayllarını silmək alınmadı.';
$lang['admin_database_backup_missing_error'] = 'Ehtiyat nüsxə faylı tapılmadı.';
$lang['admin_database_backup_unlock_confirm'] = 'Bu ehtiyat nüsxə fayllarının kilidini açmaq istədiyinizə əminsiniz?';
$lang['admin_database_backup_unlock_error'] = 'Seçilmiş ehtiyat nüsxə fayllarının kilidini açmaq alınmadı.';
$lang['admin_database_backup_unlock_success'] = 'Ehtiyat nüsxə fayllarının kilidi uğurla açıldı.';
$lang['admin_database_prune'] = 'Təmizlə';
$lang['admin_database_prune_confirm'] = 'Verilənlər bazasını təmizləmək istədiyinizə əminsiniz? İcra zamanı ehtiyat nüsxə yaradılacaq.';
$lang['admin_database_prune_error'] = 'Verilənlər bazasını təmizləmək alınmadı.';
$lang['admin_database_prune_next'] = 'Növbəti təmizləmə: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Verilənlər bazası uğurla təmizləndi.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete_confirm'] = 'Seçilmiş jurnal fayllarını silmək istədiyinizə əminsiniz?';
$lang['admin_logs_delete_error'] = 'Jurnal fayllarını silmək alınmadı.';
$lang['admin_logs_delete_success'] = 'Jurnal faylları uğurla silindi.';
$lang['admin_logs_error_disabled'] = 'Jurnallaşdırma hazırda aktiv deyil.';
$lang['admin_logs_error_empty'] = 'Jurnal tapılmadı.';
$lang['admin_logs_error_missing'] = 'Ya jurnal faylı tapılmadı, ya da boş idi.';
$lang['admin_logs_tip'] = 'Jurnallaşdırma sürətlə çox böyük fayllar yarada bilər. Canlı saytlar üçün köhnələri silməyi düşünün.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Seçilmiş e-poçtları silmək istədiyinizə əminsiniz?';
$lang['admin_emails_delete_error'] = 'Seçilmiş e-poçtları silmək alınmadı.';
$lang['admin_emails_delete_success'] = 'Seçilmiş e-poçtlar uğurla silindi.';
$lang['admin_emails_email_from'] = 'Göndərən';
$lang['admin_emails_mail_queue'] = 'Poçt Növbəsi';
$lang['admin_emails_mailer'] = 'Kütləvi Poçt';
$lang['admin_emails_search'] = 'E-poçtları mövzuya və ya məzmuna görə axtar...';
$lang['admin_emails_send_error'] = 'E-poçtu növbəyə əlavə etmək alınmadı. Zəhmət olmasa yenidən cəhd edin.';
$lang['admin_emails_send_none'] = 'Seçdiyiniz meyarlara uyğun istifadəçi yoxdur.';
$lang['admin_emails_send_success'] = 'E-poçt növbəyə əlavə edildi və tezliklə göndəriləcək.';
$lang['admin_emails_send_to_banned'] = 'Ban edilmiş istifadəçilərə göndər.';
$lang['admin_emails_send_to_deleted'] = 'Silinmiş istifadəçilərə göndər.';
$lang['admin_emails_send_to_disabled'] = 'Qeyri-aktiv istifadəçilərə göndər.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'İstifadəçi Əlavə Et';
$lang['admin_users_all_users'] = 'Bütün İstifadəçilər';
$lang['admin_users_ban_confirm'] = 'Seçilmiş istifadəçiləri ban etmək istədiyinizə əminsiniz?';
$lang['admin_users_ban_error'] = 'Seçilmiş istifadəçiləri ban etmək alınmadı.';
$lang['admin_users_ban_success'] = 'Seçilmiş istifadəçilər uğurla ban edildi.';
$lang['admin_users_delete_confirm'] = 'Seçilmiş istifadəçiləri silmək istədiyinizə əminsiniz?';
$lang['admin_users_delete_error'] = 'Seçilmiş istifadəçiləri silmək alınmadı.';
$lang['admin_users_delete_success'] = 'Seçilmiş istifadəçilər uğurla silindi.';
$lang['admin_users_disable_confirm'] = 'Seçilmiş istifadəçiləri deaktiv etmək istədiyinizə əminsiniz?';
$lang['admin_users_disable_error'] = 'Seçilmiş istifadəçiləri deaktiv etmək alınmadı.';
$lang['admin_users_disable_success'] = 'Seçilmiş istifadəçilər uğurla deaktiv edildi.';
$lang['admin_users_edit'] = 'İstifadəçini Redaktə Et';
$lang['admin_users_edit_error'] = 'İstifadəçini yeniləmək alınmadı.';
$lang['admin_users_edit_success'] = 'İstifadəçi uğurla yeniləndi.';
$lang['admin_users_enable_confirm'] = 'Seçilmiş istifadəçiləri aktiv etmək istədiyinizə əminsiniz?';
$lang['admin_users_enable_error'] = 'Seçilmiş istifadəçiləri aktiv etmək alınmadı.';
$lang['admin_users_enable_success'] = 'Seçilmiş istifadəçilər uğurla aktiv edildi.';
$lang['admin_users_groups'] = 'Qruplar';
$lang['admin_users_lock_confirm'] = 'Seçilmiş istifadəçiləri kilidləmək istədiyinizə əminsiniz?';
$lang['admin_users_lock_error'] = 'Seçilmiş istifadəçiləri kilidləmək alınmadı.';
$lang['admin_users_lock_success'] = 'Seçilmiş istifadəçilər uğurla kilidləndi.';
$lang['admin_users_logged'] = 'Daxil Olmuş İstifadəçilər';
$lang['admin_users_manage'] = 'İstifadəçiləri İdarə Et';
$lang['admin_users_remove_confirm'] = 'Seçilmiş istifadəçiləri və bütün məlumatlarını qalıcı olaraq silmək istədiyinizə əminsiniz?';
$lang['admin_users_remove_error'] = 'Seçilmiş istifadəçiləri və bütün məlumatlarını qalıcı olaraq silmək alınmadı.';
$lang['admin_users_remove_success'] = 'Seçilmiş istifadəçilər və bütün məlumatları uğurla silindi.';
$lang['admin_users_restore_confirm'] = 'Seçilmiş istifadəçiləri bərpa etmək istədiyinizə əminsiniz?';
$lang['admin_users_restore_error'] = 'Seçilmiş istifadəçiləri bərpa etmək alınmadı.';
$lang['admin_users_restore_success'] = 'Seçilmiş istifadəçilər uğurla bərpa edildi.';
$lang['admin_users_search'] = 'Ad, istifadəçi adı və ya e-poçt ilə axtar...';
$lang['admin_users_unban_confirm'] = 'Seçilmiş istifadəçilərin banını ləğv etmək istədiyinizə əminsiniz?';
$lang['admin_users_unban_error'] = 'Seçilmiş istifadəçilərin banını ləğv etmək alınmadı.';
$lang['admin_users_unban_success'] = 'Seçilmiş istifadəçilərin banı uğurla ləğv edildi.';
$lang['admin_users_unlock_confirm'] = 'Seçilmiş istifadəçilərin kilidini açmaq istədiyinizə əminsiniz?';
$lang['admin_users_unlock_error'] = 'Seçilmiş istifadəçilərin kilidini açmaq alınmadı.';
$lang['admin_users_unlock_success'] = 'Seçilmiş istifadəçilərin kilidi uğurla açıldı.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Jurnalları Təmizlə';
$lang['admin_reports_clear_confirm'] = 'Əməliyyat jurnalını təmizləmək istədiyinizə əminsiniz?';
$lang['admin_reports_clear_error'] = 'Əməliyyat jurnalını təmizləmək alınmadı.';
$lang['admin_reports_clear_success'] = 'Əməliyyat jurnalı uğurla təmizləndi.';
$lang['admin_reports_latest_actions'] = 'Son Əməliyyatlar';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Seçilmiş faylları silmək istədiyinizə əminsiniz?';
$lang['admin_media_delete_error'] = 'Faylları silmək alınmadı.';
$lang['admin_media_delete_success'] = 'Fayllar uğurla silindi.';
$lang['admin_media_file_delete_confirm'] = 'Bu faylı silmək istədiyinizə əminsiniz?';
$lang['admin_media_file_delete_error'] = 'Faylı silmək alınmadı.';
$lang['admin_media_file_delete_success'] = 'Fayl uğurla silindi.';
$lang['admin_media_file_not_found'] = 'Fayl tapılmadı.';
$lang['admin_media_file_update_error'] = 'Faylı yeniləmək alınmadı.';
$lang['admin_media_file_update_success'] = 'Fayl uğurla yeniləndi.';
$lang['admin_media_search'] = 'Ad, təsvir və ya fayl adı ilə axtar...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Aktiv modul yoxdur.} other{<b>%s</b> moduldan <b>#</b> aktivdir.}';
$lang['admin_modules_add'] = 'Modul Əlavə Et';
$lang['admin_modules_delete_confirm'] = 'Modulu silmək istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Modulu silmək alınmadı.';
$lang['admin_modules_delete_error_active'] = 'Aktiv modullar silinə bilməz.';
$lang['admin_modules_delete_success'] = 'Modul uğurla silindi.';
$lang['admin_modules_disable_all_confirm'] = 'Bütün modulları deaktiv etmək istədiyinizə əminsiniz?';
$lang['admin_modules_disable_all_error'] = 'Bütün modulları deaktiv etmək alınmadı.';
$lang['admin_modules_disable_all_success'] = 'Bütün modullar uğurla deaktiv edildi.';
$lang['admin_modules_disable_confirm'] = 'Modulu deaktiv etmək istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Modulu deaktiv etmək alınmadı.';
$lang['admin_modules_disable_success'] = 'Modul uğurla deaktiv edildi.';
$lang['admin_modules_enable_all_confirm'] = 'Bütün modulları aktiv etmək istədiyinizə əminsiniz?';
$lang['admin_modules_enable_all_error'] = 'Bütün modulları aktiv etmək alınmadı.';
$lang['admin_modules_enable_all_success'] = 'Bütün modullar uğurla aktiv edildi.';
$lang['admin_modules_enable_confirm'] = 'Modulu aktiv etmək istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Modulu aktiv etmək alınmadı.';
$lang['admin_modules_enable_success'] = 'Modul uğurla aktiv edildi.';
$lang['admin_modules_global'] = 'Qlobal modul (paylaşılan)';
$lang['admin_modules_install_confirm'] = 'Modulu quraşdırmaq istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'Modulu quraşdırmaq alınmadı.';
$lang['admin_modules_install_success'] = 'Modul uğurla quraşdırıldı.';
$lang['admin_modules_install_tip'] = 'Modullar saytınıza yeni funksiyalar və imkanlar əlavə edir.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Aktiv plugin yoxdur.} other{<b>%s</b> plugindən <b>#</b> aktivdir.}';
$lang['admin_plugins_add'] = 'Plugin Əlavə Et';
$lang['admin_plugins_delete_confirm'] = 'Plugini silmək istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Plugini silmək alınmadı.';
$lang['admin_plugins_delete_error_active'] = 'Aktiv pluginlər silinə bilməz.';
$lang['admin_plugins_delete_success'] = 'Plugin uğurla silindi.';
$lang['admin_plugins_disable_all_confirm'] = 'Bütün pluginləri deaktiv etmək istədiyinizə əminsiniz?';
$lang['admin_plugins_disable_all_error'] = 'Bütün pluginləri deaktiv etmək alınmadı.';
$lang['admin_plugins_disable_all_success'] = 'Bütün pluginlər uğurla deaktiv edildi.';
$lang['admin_plugins_disable_confirm'] = 'Plugini deaktiv etmək istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Plugini deaktiv etmək alınmadı.';
$lang['admin_plugins_disable_success'] = 'Plugin uğurla deaktiv edildi.';
$lang['admin_plugins_enable_all_confirm'] = 'Bütün pluginləri aktiv etmək istədiyinizə əminsiniz?';
$lang['admin_plugins_enable_all_error'] = 'Bütün pluginləri aktiv etmək alınmadı.';
$lang['admin_plugins_enable_all_success'] = 'Bütün pluginlər uğurla aktiv edildi.';
$lang['admin_plugins_enable_confirm'] = 'Plugini aktiv etmək istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Plugini aktiv etmək alınmadı.';
$lang['admin_plugins_enable_success'] = 'Plugin uğurla aktiv edildi.';
$lang['admin_plugins_global'] = 'Qlobal plugin (paylaşılan)';
$lang['admin_plugins_install_confirm'] = 'Plugini quraşdırmaq istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'Plugini quraşdırmaq alınmadı.';
$lang['admin_plugins_install_success'] = 'Plugin uğurla quraşdırıldı.';
$lang['admin_plugins_install_tip'] = 'Pluginlər mövcud funksiyaları əlavə seçimlər və ya inteqrasiyalarla genişləndirir.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Tema Əlavə Et';
$lang['admin_themes_delete_confirm'] = 'Temanı silmək istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Temanı silmək alınmadı.';
$lang['admin_themes_delete_error_active'] = 'Hazırda aktiv olan temanı silə bilməzsiniz.';
$lang['admin_themes_delete_success'] = 'Tema uğurla silindi.';
$lang['admin_themes_disable_confirm'] = 'Temanı deaktiv etmək istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Temanı deaktiv etmək alınmadı.';
$lang['admin_themes_disable_error_active'] = 'Aktiv tema deaktiv edilə bilməz.';
$lang['admin_themes_disable_success'] = 'Tema uğurla deaktiv edildi.';
$lang['admin_themes_enable_confirm'] = 'Temanı aktiv etmək istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Temanı aktiv etmək alınmadı.';
$lang['admin_themes_enable_success'] = 'Tema uğurla aktiv edildi.';
$lang['admin_themes_install_confirm'] = 'Temanı quraşdırmaq istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'Temanı quraşdırmaq alınmadı.';
$lang['admin_themes_install_success'] = 'Tema uğurla quraşdırıldı.';
$lang['admin_themes_install_tip'] = 'Temalar saytınızın görünüşünü və düzənini dəyişir.';
$lang['admin_themes_none_tip'] = 'Bu tətbiq temasız işləyir. İctimai interfeysi fərdiləşdirmək üçün bir tema quraşdırın.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menyular';
$lang['admin_menus_assign_error'] = 'Menyu yerlərini yeniləmək alınmadı.';
$lang['admin_menus_assign_success'] = 'Menyu yerləri uğurla yeniləndi.';
$lang['admin_menus_header'] = '<b>%s</b> menyu yeri mövcuddur.';
$lang['admin_menus_location'] = 'Yer';
$lang['admin_menus_locations'] = 'Menyu Yerləri';
$lang['admin_menus_manage'] = 'Menyuları İdarə Et';
$lang['admin_menus_menu'] = 'Təyin Edilmiş Menyu';
$lang['admin_menus_none'] = '&#151; Heç biri &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_active_count'] = '=0{Aktiv dil yoxdur.} other{<b>%s</b> dildən <b>#</b> aktivdir.}';
$lang['admin_languages_add'] = 'Dil Əlavə Et';
$lang['admin_languages_default_confirm'] = 'Bu dili saytın standart dili etmək istədiyinizə əminsiniz?';
$lang['admin_languages_default_error'] = 'Standart dili dəyişmək alınmadı.';
$lang['admin_languages_default_error_nochange'] = 'Bu dil artıq standart dildir.';
$lang['admin_languages_default_success'] = 'Standart dil uğurla dəyişdirildi.';
$lang['admin_languages_delete_confirm'] = 'Dili silmək istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Dili silmək alınmadı.';
$lang['admin_languages_delete_error_active'] = 'Aktiv dillər silinə bilməz.';
$lang['admin_languages_delete_error_default'] = 'Standart dil silinə bilməz.';
$lang['admin_languages_delete_success'] = 'Dil uğurla silindi.';
$lang['admin_languages_disable_all_confirm'] = 'Bütün dilləri deaktiv etmək istədiyinizə əminsiniz?';
$lang['admin_languages_disable_all_error'] = 'Bütün dilləri deaktiv etmək alınmadı.';
$lang['admin_languages_disable_all_success'] = 'Bütün dillər uğurla deaktiv edildi.';
$lang['admin_languages_disable_confirm'] = 'Dili deaktiv etmək istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Dili deaktiv etmək alınmadı.';
$lang['admin_languages_disable_error_default'] = 'Standart dil deaktiv edilə bilməz.';
$lang['admin_languages_disable_error_nochange'] = 'Bu dil artıq deaktivdir.';
$lang['admin_languages_disable_success'] = 'Dil uğurla deaktiv edildi.';
$lang['admin_languages_enable_all_confirm'] = 'Bütün dilləri aktiv etmək istədiyinizə əminsiniz?';
$lang['admin_languages_enable_all_error'] = 'Bütün dilləri aktiv etmək alınmadı.';
$lang['admin_languages_enable_all_success'] = 'Bütün dillər uğurla aktiv edildi.';
$lang['admin_languages_enable_confirm'] = 'Dili aktiv etmək istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Dili aktiv etmək alınmadı.';
$lang['admin_languages_enable_error_nochange'] = 'Bu dil artıq aktivdir.';
$lang['admin_languages_enable_success'] = 'Dil uğurla aktiv edildi.';
$lang['admin_languages_install_confirm'] = 'Dili quraşdırmaq istədiyinizə əminsiniz: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'Dili quraşdırmaq alınmadı.';
$lang['admin_languages_install_success'] = 'Dil uğurla quraşdırıldı.';
$lang['admin_languages_install_tip'] = 'Dillər saytınızın interfeysi və məzmunu üçün tərcümələr əlavə edir.';
$lang['admin_languages_tip'] = 'Saytın standart dilini aktiv edin, deaktiv edin və təyin edin. Aktiv dillər sayt ziyarətçiləri üçün əlçatandır.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Paket artıq mövcuddur.';
$lang['package_archive_download_failed'] = 'Paket arxivini yükləmək alınmadı.';
$lang['package_backup_create_error'] = 'Paket ehtiyat nüsxəsini yaratmaq alınmadı.';
$lang['package_backup_dir_failed'] = 'Ehtiyat nüsxə qovluğunu yaratmaq alınmadı %s';
$lang['package_backup_missing'] = 'Ehtiyat nüsxə faylı mövcud deyil.';
$lang['package_backup_path_error'] = 'Ehtiyat nüsxə faylının yolu müəyyən edilə bilmədi.';
$lang['package_backup_request_invalid'] = 'Yanlış ehtiyat nüsxə sorğusu.';
$lang['package_backup_restore_error'] = 'Paket ehtiyat nüsxəsini bərpa etmək alınmadı.';
$lang['package_catalog_type_unknown'] = 'Naməlum kataloq növü.';
$lang['package_checksum_error'] = 'Paket yoxlama məbləğinin təsdiqi uğursuz oldu.';
$lang['package_copy_files_error'] = 'Paket fayllarını təyinat yerinə kopyalamaq alınmadı.';
$lang['package_copy_updates_error'] = 'Yeniləmə fayllarını təyinat yerinə kopyalamaq alınmadı.';
$lang['package_dependencies_missing'] = 'Tələb olunan asılılıqlar yoxdur.';
$lang['package_dest_dir_failed'] = 'Təyinat qovluğunu yaratmaq alınmadı %s';
$lang['package_destination_error'] = 'Paket təyinat yeri müəyyən edilə bilmədi.';
$lang['package_download_dir_failed'] = 'Yükləmə qovluğunu yaratmaq alınmadı %s';
$lang['package_download_empty'] = 'Paket yükləməsi boş cavab qaytardı.';
$lang['package_download_request_invalid'] = 'Yanlış paket yükləmə sorğusu.';
$lang['package_extract_failed'] = 'ZIP faylını çıxarmaq alınmadı %s';
$lang['package_invalid_lang_files'] = 'Yanlış dil — tələb olunan tətbiq dil faylları yoxdur.';
$lang['package_invalid_lang_structure'] = 'Yanlış dil — admin və/və ya ci3 qovluqları yoxdur.';
$lang['package_invalid_missing_info'] = 'Yanlış %s: "metadata.php" yoxdur.';
$lang['package_invalid_module_structure'] = 'Yanlış modul — tələb olunan config/controllers qovluqları yoxdur.';
$lang['package_invalid_plugin_contents'] = 'Yanlış plugin — pluginlər controller və ya view ehtiva edə bilməz.';
$lang['package_invalid_plugin_integration'] = 'Yanlış plugin — etibarlı inteqrasiya tapılmadı.';
$lang['package_invalid_theme_boot'] = 'Yanlış tema — "boot.php" yoxdur.';
$lang['package_invalid_theme_views'] = 'Yanlış tema — views qovluğu yoxdur.';
$lang['package_no_root_dir'] = 'Paket heç bir kök qovluq ehtiva etmir.';
$lang['package_not_downloadable'] = 'Paket ictimai olaraq yüklənə bilməz.';
$lang['package_not_in_registry'] = 'Paket ictimai reyestrdə mövcud deyil.';
$lang['package_request_invalid'] = 'Yanlış paket sorğusu.';
$lang['package_rollback_request_invalid'] = 'Yanlış geri qaytarma sorğusu.';
$lang['package_root_mismatch'] = 'Paket arxivinin kökü %s ilə uyğun gəlmir';
$lang['package_single_root_required'] = 'Paket tam olaraq bir kök qovluq ehtiva etməlidir.';
$lang['package_source_error'] = 'Paket mənbəyi müəyyən edilə bilmədi.';
$lang['package_system_core_restricted'] = 'Sistem komponentləri paket kimi quraşdırıla bilməz.';
$lang['package_temp_dir_failed'] = 'Müvəqqəti qovluğu yaratmaq alınmadı %s';
$lang['package_type_unknown'] = 'Naməlum paket növü.';
$lang['package_update_request_invalid'] = 'Yanlış paket yeniləmə sorğusu.';
$lang['package_update_root_mismatch'] = 'Yeniləmə arxivinin kökü %s ilə uyğun gəlmir.';
$lang['package_upload_dir_failed'] = 'Yükləmə qovluğunu yaratmaq alınmadı %s';
$lang['package_url_invalid'] = 'Yanlış paket paylama URL-i.';
$lang['package_write_failed'] = 'Paketi %s ünvanına yazmaq alınmadı';
$lang['package_zip_not_found'] = 'Paket ZIP mövcud deyil: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Yeni yeniləmələr mövcuddur!';
$lang['update_backup_error'] = 'Mövcud paketin ehtiyat nüsxəsini yaratmaq alınmadı. Yeniləmə dayandırıldı.';
$lang['update_check_disabled'] = 'Avtomatik yeniləmə yoxlamaları deaktivdir. Yeniləmələri görmək üçün onları aktiv edin.';
$lang['update_check_error'] = 'Hazırda yeniləmə yoxlamasını işə salmaq alınmadı.';
$lang['update_check_success'] = 'Yeniləmə yoxlaması uğurla tamamlandı.';
$lang['update_install_all_confirm'] = 'Bütün paketləri yeniləmək istədiyinizdən əminsiniz?';
$lang['update_install_all_error'] = 'Paketləri quraşdırmaq mümkün olmadı. Cari versiyalar saxlanıldı.';
$lang['update_install_all_success'] = 'Paketlər uğurla ən son versiyalara yeniləndi.';
$lang['update_install_confirm'] = 'Bu paketi yeniləmək istədiyinizə əminsiniz?';
$lang['update_install_error'] = 'Paket quraşdırıla bilmədi. Cari versiya saxlanıldı.';
$lang['update_install_success'] = 'Paket ən son versiyaya uğurla yeniləndi.';
$lang['update_interval_3days'] = 'Hər 3 Gündə';
$lang['update_interval_biweekly'] = 'Hər 2 Həftədə';
$lang['update_interval_daily'] = 'Hər Gün';
$lang['update_interval_monthly'] = 'Ayda Bir';
$lang['update_interval_weekly'] = 'Həftədə Bir';
$lang['update_languages_confirm'] = 'Bu dili yeniləmək istədiyinizə əminsiniz?';
$lang['update_languages_error'] = 'Dili yeniləmək alınmadı.';
$lang['update_languages_success'] = 'Dil uğurla yeniləndi.';
$lang['update_modules_confirm'] = 'Bu modulu yeniləmək istədiyinizə əminsiniz?';
$lang['update_modules_error'] = 'Modulu yeniləmək alınmadı.';
$lang['update_modules_success'] = 'Modul uğurla yeniləndi.';
$lang['update_not_available'] = 'Vebsaytınız güncəldir.';
$lang['update_plugins_confirm'] = 'Bu plugini yeniləmək istədiyinizə əminsiniz?';
$lang['update_plugins_error'] = 'Plugini yeniləmək alınmadı.';
$lang['update_plugins_success'] = 'Plugin uğurla yeniləndi.';
$lang['update_rollback_confirm'] = 'Əvvəlki versiyanı bərpa etmək istədiyinizə əminsiniz?';
$lang['update_rollback_error'] = 'Əvvəlki versiyanı bərpa etmək alınmadı. Əl ilə müdaxilə tələb oluna bilər.';
$lang['update_rollback_success'] = 'Əvvəlki versiya uğurla bərpa edildi.';
$lang['update_skip_confirm'] = 'Bu yeniləməni keçmək istədiyinizə əminsiniz?';
$lang['update_skip_error'] = 'Bu yeniləməni keçmək alınmadı.';
$lang['update_skip_success'] = 'Yeniləmə uğurla keçildi.';
$lang['update_themes_confirm'] = 'Bu temanı yeniləmək istədiyinizə əminsiniz?';
$lang['update_themes_error'] = 'Temanı yeniləmək alınmadı.';
$lang['update_themes_success'] = 'Tema uğurla yeniləndi.';
$lang['updates_available'] = 'Mövcud Yeniləmələr';
$lang['updates_check_now'] = 'İndi yoxla';
$lang['updates_check_now_confirm'] = 'İndi yeniləmələri yoxlamaq istədiyinizə əminsiniz?';
$lang['updates_current_version'] = 'Cari versiya';
$lang['updates_enable'] = 'Yeniləmələri Aktiv Et';
$lang['updates_last_check'] = 'Son yoxlama';
$lang['updates_latest_version'] = 'Ən son versiya';
$lang['updates_next_check'] = 'Növbəti yoxlama';
$lang['updates_previous_version'] = 'Əvvəlki versiya';
$lang['updates_recent'] = 'Son Yenilənənlər';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Göstərilən IP ünvanını bloklamaq alınmadı.';
$lang['admin_firewall_ban_success'] = 'IP ünvanı uğurla bloklandı.';
$lang['admin_firewall_block_ip'] = 'IP ünvanını blokla';
$lang['admin_firewall_delete_confirm'] = 'Seçilmiş IP ünvanlarının blokunu açmaq istədiyinizə əminsiniz?';
$lang['admin_firewall_delete_error'] = 'Seçilmiş IP ünvanlarının blokunu açmaq alınmadı.';
$lang['admin_firewall_delete_success'] = 'Seçilmiş IP ünvanlarının bloku uğurla açıldı.';
$lang['admin_firewall_duration'] = 'Ban müddəti';
$lang['admin_firewall_permanent'] = 'Daimi';
$lang['admin_firewall_reason'] = 'Ban səbəbi';
$lang['admin_firewall_tip'] = 'Təkrar pozuntular və ya şübhəli fəaliyyət səbəbindən firewall tərəfindən bloklanmış IP ünvanlarına baxın və idarə edin.';

// Settings
$lang['404_ban_duration'] = '404 Ban Müddəti';
$lang['404_threshold'] = '404 Xəbərdarlıq Limiti';
$lang['uri_ban_duration'] = 'URI Ban Müddəti';
$lang['uri_strike_threshold'] = 'URI Xəbərdarlıq Limiti';
