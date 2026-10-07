<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_catalog'] = 'पॅकेज कॅटलॉग';
$lang['admin_components'] = 'घटक';
$lang['admin_content'] = 'कंटेन्ट';
$lang['admin_database_backup'] = 'डेटाबेस बॅकअप';
$lang['admin_extensions'] = 'एक्स्टेंशन';
$lang['admin_firewall'] = 'फायरवॉल';
$lang['admin_help'] = 'मदत';
$lang['admin_languages'] = 'भाषा';
$lang['admin_logs'] = 'सिस्टम लॉग';
$lang['admin_media'] = 'मीडिया लायब्ररी';
$lang['admin_modules'] = 'मॉड्युल';
$lang['admin_plugins'] = 'प्लगइन';
$lang['admin_reports'] = 'हालचाल लॉग';
$lang['admin_settings'] = 'सिस्टम सेटिंग्ज';
$lang['admin_statistics'] = 'आकडेवारी';
$lang['admin_sysinfo'] = 'सिस्टम माहिती';
$lang['admin_system'] = 'सिस्टम';
$lang['admin_system_firewall'] = 'सिस्टम फायरवॉल';
$lang['admin_themes'] = 'थीम';
$lang['admin_updates'] = 'सिस्टम अपडेट';
$lang['admin_users'] = 'वापरकर्ते';
$lang['admin_view_site'] = 'साइट पहा';
$lang['per_page'] = 'प्रति पृष्ठ';

// Generic Messages
$lang['admin_footer_thankyou'] = '<a href="%s">%s</a> वापरून तयार करण्यासाठी आभारी.';
$lang['admin_items_active_count'] = '=0{कोणतेही सक्रिय घटक नाहीत.} other{<b>%s</b> पैकी <b>#</b> घटक सक्रिय आहेत.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'इन्स्टॉल करण्यात अयशस्वी झाले: %s';
$lang['admin_install_location_app'] = 'फक्त हे अॅप्लिकेशन';
$lang['admin_install_location_core'] = 'सर्व अॅप्लिकेशन';
$lang['admin_install_location_select'] = '&#151; स्थान निवडा &#151;';
$lang['admin_install_upload_tip'] = 'पॅकेज त्याचा <b>.zip</b> फाइल येथे अपलोड करून इन्स्टॉल करा.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'जुन्या बॅकअप फाइल साफ करण्यात अयशस्वी झाले.';
$lang['admin_database_backup_clean_success'] = '%d बॅकअप फाइल हटवल्या. %d डिस्क जागा मोकळी झाली.';
$lang['admin_database_backup_create'] = 'बॅकअप तयार करा';
$lang['admin_database_backup_create_confirm'] = 'तुम्हाला नक्की आता बॅकअप तयार करायचे आहे का?';
$lang['admin_database_backup_create_error'] = 'बॅकअप फाइल तयार करण्यात अयशस्वी झाले. <b>%s</b> फोल्डर लिहिण्यायोग्य असल्याची खात्री करा.';
$lang['admin_database_backup_create_success'] = 'डेटाबेस बॅकअप फाइल <b>%s</b> यशस्वीरित्या तयार झाली.';
$lang['admin_database_backup_delete_confirm'] = 'तुम्हाला नक्की या बॅकअप फाइल हटवायच्या आहेत का?';
$lang['admin_database_backup_delete_error'] = 'निवडलेल्या बॅकअप फाइल हटवण्यात अयशस्वी झाले.';
$lang['admin_database_backup_delete_success'] = 'बॅकअप फाइल यशस्वीरित्या हटवल्या.';
$lang['admin_database_backup_download_error'] = 'निवडलेली बॅकअप फाइल डाउनलोड करण्यात अयशस्वी झाले.';
$lang['admin_database_backup_download_success'] = 'बॅकअप फाइल यशस्वीरित्या डाउनलोड झाली.';
$lang['admin_database_backup_lock_confirm'] = 'तुम्हाला नक्की या बॅकअप फाइल लॉक करायच्या आहेत का?';
$lang['admin_database_backup_lock_error'] = 'निवडलेल्या बॅकअप फाइल लॉक करण्यात अयशस्वी झाले.';
$lang['admin_database_backup_lock_success'] = 'बॅकअप फाइल यशस्वीरित्या लॉक झाल्या.';
$lang['admin_database_backup_locked_error'] = 'लॉक केलेल्या बॅकअप फाइल हटवण्यात अयशस्वी झाले.';
$lang['admin_database_backup_missing_error'] = 'बॅकअप फाइल सापडली नाही.';
$lang['admin_database_backup_unlock_confirm'] = 'तुम्हाला नक्की या बॅकअप फाइल अनलॉक करायच्या आहेत का?';
$lang['admin_database_backup_unlock_error'] = 'निवडलेल्या बॅकअप फाइल अनलॉक करण्यात अयशस्वी झाले.';
$lang['admin_database_backup_unlock_success'] = 'बॅकअप फाइल यशस्वीरित्या अनलॉक झाल्या.';
$lang['admin_database_prune'] = 'छाटणे';
$lang['admin_database_prune_confirm'] = 'तुम्हाला नक्की डेटाबेस छाटायचे आहे का? काम चालू असताना एक बॅकअप तयार केले जाईल.';
$lang['admin_database_prune_error'] = 'डेटाबेस छाटण्यात अयशस्वी झाले.';
$lang['admin_database_prune_next'] = 'पुढील छाटणी: <b>%s</b>';
$lang['admin_database_prune_success'] = 'डेटाबेस यशस्वीरित्या छाटले गेले.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'लॉग हटवा';
$lang['admin_logs_delete_confirm'] = 'तुम्हाला नक्की निवडलेल्या लॉग फाइल हटवायच्या आहेत का?';
$lang['admin_logs_delete_error'] = 'लॉग फाइल हटवण्यात अयशस्वी झाले.';
$lang['admin_logs_delete_success'] = 'लॉग फाइल यशस्वीरित्या हटवल्या.';
$lang['admin_logs_error_disabled'] = 'लॉगिंग सध्या सक्षम नाही.';
$lang['admin_logs_error_empty'] = 'कोणतेही लॉग सापडले नाहीत.';
$lang['admin_logs_error_missing'] = 'लॉग फाइल सापडली नाही किंवा ती रिकामी होती.';
$lang['admin_logs_tip'] = 'लॉगिंगने लवकरच खूप मोठ्या फाइल तयार होतात. लाइव्ह साइट्ससाठी जुन्या फाइल हटवण्याचा विचार करा.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'तुम्हाला नक्की निवडलेले ईमेल हटवायचे आहेत का?';
$lang['admin_emails_delete_error'] = 'निवडलेले ईमेल हटवण्यात अयशस्वी झाले.';
$lang['admin_emails_delete_success'] = 'निवडलेले ईमेल यशस्वीरित्या हटवले गेले.';
$lang['admin_emails_email_from'] = 'पाठवणारे';
$lang['admin_emails_mail_queue'] = 'मेल क्यू';
$lang['admin_emails_mailer'] = 'सामूहिक मेल';
$lang['admin_emails_search'] = 'विषय किंवा मजकूराद्वारे ईमेल शोधा...';
$lang['admin_emails_send_error'] = 'ईमेल क्यूमध्ये टाकण्यात अयशस्वी झाले. कृपया पुन्हा प्रयत्न करा.';
$lang['admin_emails_send_none'] = 'तुमची निवड टिका या वापरकर्त्यांशी जुळत नाही.';
$lang['admin_emails_send_success'] = 'ईमेल क्यूमध्ये टाकले गेले आहे आणि लवकरच पाठवले जाईल.';
$lang['admin_emails_send_to_banned'] = 'प्रतिबंधित वापरकर्त्यांना पाठवा.';
$lang['admin_emails_send_to_deleted'] = 'हटवलेल्या वापरकर्त्यांना पाठवा.';
$lang['admin_emails_send_to_disabled'] = 'निष्क्रिय वापरकर्त्यांना पाठवा.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'वापरकर्ता जोडा';
$lang['admin_users_all_users'] = 'सर्व वापरकर्ते';
$lang['admin_users_ban_confirm'] = 'तुम्हाला नक्की निवडलेल्या वापरकर्त्यांना प्रतिबंधित करायचे आहेत का?';
$lang['admin_users_ban_error'] = 'निवडलेल्या वापरकर्त्यांना प्रतिबंधित करण्यात अयशस्वी झाले.';
$lang['admin_users_ban_success'] = 'निवडलेले वापरकर्ते यशस्वीरित्या प्रतिबंधित झाले.';
$lang['admin_users_delete_confirm'] = 'तुम्हाला नक्की निवडलेले वापरकर्ते हटवायचे आहेत का?';
$lang['admin_users_delete_error'] = 'निवडलेले वापरकर्ते हटवण्यात अयशस्वी झाले.';
$lang['admin_users_delete_success'] = 'निवडलेले वापरकर्ते यशस्वीरित्या हटवले गेले.';
$lang['admin_users_disable_confirm'] = 'तुम्हाला नक्की निवडलेले वापरकर्ते निष्क्रिय करायचे आहेत का?';
$lang['admin_users_disable_error'] = 'निवडलेले वापरकर्ते निष्क्रिय करण्यात अयशस्वी झाले.';
$lang['admin_users_disable_success'] = 'निवडलेले वापरकर्ते यशस्वीरित्या निष्क्रिय झाले.';
$lang['admin_users_edit'] = 'वापरकर्ता संपादित करा';
$lang['admin_users_edit_error'] = 'वापरकर्ता अद्ययावत करण्यात अयशस्वी झाले.';
$lang['admin_users_edit_success'] = 'वापरकर्ता यशस्वीरित्या अद्ययावत झाला.';
$lang['admin_users_enable_confirm'] = 'तुम्हाला नक्की निवडलेले वापरकर्ते सक्षम करायचे आहेत का?';
$lang['admin_users_enable_error'] = 'निवडलेले वापरकर्ते सक्षम करण्यात अयशस्वी झाले.';
$lang['admin_users_enable_success'] = 'निवडलेले वापरकर्ते यशस्वीरित्या सक्षम झाले.';
$lang['admin_users_groups'] = 'गट';
$lang['admin_users_lock_confirm'] = 'तुम्हाला नक्की निवडलेले वापरकर्ते लॉक करायचे आहेत का?';
$lang['admin_users_lock_error'] = 'निवडलेले वापरकर्ते लॉक करण्यात अयशस्वी झाले.';
$lang['admin_users_lock_success'] = 'निवडलेले वापरकर्ते यशस्वीरित्या लॉक झाले.';
$lang['admin_users_logged'] = 'लॉग इन असलेले वापरकर्ते';
$lang['admin_users_manage'] = 'वापरकर्ते व्यवस्थापित करा';
$lang['admin_users_remove_confirm'] = 'तुम्हाला नक्की निवडलेले वापरकर्ते आणि त्यांचा सर्व डेटा कायमचा हटवायचा आहे का?';
$lang['admin_users_remove_error'] = 'निवडलेले वापरकर्ते आणि त्यांचा सर्व डेटा कायमचा हटवण्यात अयशस्वी झाले.';
$lang['admin_users_remove_success'] = 'निवडलेले वापरकर्ते आणि त्यांचा सर्व डेटा यशस्वीरित्या हटवला गेला.';
$lang['admin_users_restore_confirm'] = 'तुम्हाला नक्की निवडलेले वापरकर्ते पुनर्स्थापित करायचे आहेत का?';
$lang['admin_users_restore_error'] = 'निवडलेले वापरकर्ते पुनर्स्थापित करण्यात अयशस्वी झाले.';
$lang['admin_users_restore_success'] = 'निवडलेले वापरकर्ते यशस्वीरित्या पुनर्स्थापित झाले.';
$lang['admin_users_search'] = 'नाव, वापरकर्तानाव किंवा ईमेलाद्वारे शोधा...';
$lang['admin_users_unban_confirm'] = 'तुम्हाला नक्की निवडलेल्या वापरकर्त्यांचा प्रतिबंध काढायचा आहे का?';
$lang['admin_users_unban_error'] = 'निवडलेल्या वापरकर्त्यांचा प्रतिबंध काढण्यात अयशस्वी झाले.';
$lang['admin_users_unban_success'] = 'निवडलेल्या वापरकर्त्यांचा प्रतिबंध यशस्वीरित्या काढला गेला.';
$lang['admin_users_unlock_confirm'] = 'तुम्हाला नक्की निवडलेले वापरकर्ते अनलॉक करायचे आहेत का?';
$lang['admin_users_unlock_error'] = 'निवडलेले वापरकर्ते अनलॉक करण्यात अयशस्वी झाले.';
$lang['admin_users_unlock_success'] = 'निवडलेले वापरकर्ते यशस्वीरित्या अनलॉक झाले.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'लॉग साफ करा';
$lang['admin_reports_clear_confirm'] = 'तुम्हाला नक्की कृती लॉग साफ करायचा आहे का?';
$lang['admin_reports_clear_error'] = 'कृती लॉग साफ करण्यात अयशस्वी झाले.';
$lang['admin_reports_clear_success'] = 'कृती लॉग यशस्वीरित्या साफ झाला.';
$lang['admin_reports_latest_actions'] = 'अलीकडील कृती';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'तुम्हाला नक्की निवडलेल्या फाइल हटवायच्या आहेत का?';
$lang['admin_media_delete_error'] = 'फाइल हटवण्यात अयशस्वी झाले.';
$lang['admin_media_delete_success'] = 'फाइल यशस्वीरित्या हटवल्या.';
$lang['admin_media_file_delete_error'] = 'फाइल हटवण्यात अयशस्वी झाले.';
$lang['admin_media_file_delete_success'] = 'फाइल यशस्वीरित्या हटवली.';
$lang['admin_media_file_update_error'] = 'फाइल अद्ययावत करण्यात अयशस्वी झाले.';
$lang['admin_media_file_update_success'] = 'फाइल यशस्वीरित्या अद्ययावत झाली.';
$lang['admin_media_search'] = 'नाव, वर्णन किंवा फाइलनावाद्वारे शोधा...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{कोणतेही सक्रिय मॉड्युल नाहीत.} other{<b>%s</b> पैकी <b>#</b> मॉड्युल सक्रिय आहेत.}';
$lang['admin_modules_add'] = 'मॉड्युल जोडा';
$lang['admin_modules_delete_confirm'] = 'तुम्हाला नक्की हे मॉड्युल हटवायचे आहे: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'मॉड्युल हटवण्यात अयशस्वी झाले.';
$lang['admin_modules_delete_error_active'] = 'सक्रिय मॉड्युल हटवता येत नाहीत.';
$lang['admin_modules_delete_success'] = 'मॉड्युल यशस्वीरित्या हटवले गेले.';
$lang['admin_modules_disable_all_confirm'] = 'तुम्हाला नक्की सर्व मॉड्युल निष्क्रिय करायची आहेत का?';
$lang['admin_modules_disable_all_error'] = 'सर्व मॉड्युल निष्क्रिय करण्यात अयशस्वी झाले.';
$lang['admin_modules_disable_all_success'] = 'सर्व मॉड्युल यशस्वीरित्या निष्क्रिय झाली.';
$lang['admin_modules_disable_confirm'] = 'तुम्हाला नक्की हे मॉड्युल निष्क्रिय करायचे आहे: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'मॉड्युल निष्क्रिय करण्यात अयशस्वी झाले.';
$lang['admin_modules_disable_success'] = 'मॉड्युल यशस्वीरित्या निष्क्रिय झाले.';
$lang['admin_modules_enable_all_confirm'] = 'तुम्हाला नक्की सर्व मॉड्युल सक्षम करायची आहेत का?';
$lang['admin_modules_enable_all_error'] = 'सर्व मॉड्युल सक्षम करण्यात अयशस्वी झाले.';
$lang['admin_modules_enable_all_success'] = 'सर्व मॉड्युल यशस्वीरित्या सक्षम झाली.';
$lang['admin_modules_enable_confirm'] = 'तुम्हाला नक्की हे मॉड्युल सक्षम करायचे आहे: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'मॉड्युल सक्षम करण्यात अयशस्वी झाले.';
$lang['admin_modules_enable_success'] = 'मॉड्युल यशस्वीरित्या सक्षम झाले.';
$lang['admin_modules_global'] = 'जागतिक मॉड्युल (सामायिक)';
$lang['admin_modules_install_confirm'] = 'तुम्हाला नक्की हे मॉड्युल इन्स्टॉल करायचे आहे: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'मॉड्युल इन्स्टॉल करण्यात अयशस्वी झाले.';
$lang['admin_modules_install_success'] = 'मॉड्युल यशस्वीरित्या इन्स्टॉल झाले.';
$lang['admin_modules_install_tip'] = 'मॉड्युल तुमच्या साइटला नवीन वैशिष्ट्ये व कार्यक्षमता जोडतात. उपलब्ध मॉड्युल <a href="%s" target="_blank" rel="noopener">मॉड्युल निर्देशिकेत</a> ब्राउझ करा किंवा <b>.zip</b> पॅकेज म्हणून अपलोड करा.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{कोणतेही सक्रिय प्लगइन नाहीत.} other{<b>%s</b> पैकी <b>#</b> प्लगइन सक्रिय आहेत.}';
$lang['admin_plugins_add'] = 'प्लगइन जोडा';
$lang['admin_plugins_delete_confirm'] = 'तुम्हाला नक्की हे प्लगइन हटवायचे आहे: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'प्लगइन हटवण्यात अयशस्वी झाले.';
$lang['admin_plugins_delete_error_active'] = 'सक्रिय प्लगइन हटवता येत नाहीत.';
$lang['admin_plugins_delete_success'] = 'प्लगइन यशस्वीरित्या हटवले गेले.';
$lang['admin_plugins_disable_all_confirm'] = 'तुम्हाला नक्की सर्व प्लगइन निष्क्रिय करायची आहेत का?';
$lang['admin_plugins_disable_all_error'] = 'सर्व प्लगइन निष्क्रिय करण्यात अयशस्वी झाले.';
$lang['admin_plugins_disable_all_success'] = 'सर्व प्लगइन यशस्वीरित्या निष्क्रिय झाली.';
$lang['admin_plugins_disable_confirm'] = 'तुम्हाला नक्की हे प्लगइन निष्क्रिय करायचे आहे: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'प्लगइन निष्क्रिय करण्यात अयशस्वी झाले.';
$lang['admin_plugins_disable_success'] = 'प्लगइन यशस्वीरित्या निष्क्रिय झाले.';
$lang['admin_plugins_enable_all_confirm'] = 'तुम्हाला नक्की सर्व प्लगइन सक्षम करायची आहेत का?';
$lang['admin_plugins_enable_all_error'] = 'सर्व प्लगइन सक्षम करण्यात अयशस्वी झाले.';
$lang['admin_plugins_enable_all_success'] = 'सर्व प्लगइन यशस्वीरित्या सक्षम झाली.';
$lang['admin_plugins_enable_confirm'] = 'तुम्हाला नक्की हे प्लगइन सक्षम करायचे आहे: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'प्लगइन सक्षम करण्यात अयशस्वी झाले.';
$lang['admin_plugins_enable_success'] = 'प्लगइन यशस्वीरित्या सक्षम झाले.';
$lang['admin_plugins_global'] = 'जागतिक प्लगइन (सामायिक)';
$lang['admin_plugins_install_confirm'] = 'तुम्हाला नक्की हे प्लगइन इन्स्टॉल करायचे आहे: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'प्लगइन इन्स्टॉल करण्यात अयशस्वी झाले.';
$lang['admin_plugins_install_success'] = 'प्लगइन यशस्वीरित्या इन्स्टॉल झाले.';
$lang['admin_plugins_install_tip'] = 'प्लगइन अतिरिक्त पर्याया किंवा एकात्मनांद्वारे अस्तित्वात असलेल्या वैशिष्ट्यांना विस्तार देतात. <a href="%s" target="_blank" rel="noopener">प्लगइन निर्देशिकेतून</a> इन्स्टॉल करा किंवा <b>.zip</b> फाइल अपलोड करा.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'थीम जोडा';
$lang['admin_themes_delete_confirm'] = 'तुम्हाला नक्की ही थीम हटवायची आहे: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'थीम हटवण्यात अयशस्वी झाले.';
$lang['admin_themes_delete_error_active'] = 'सध्या सक्रिय असलेली थीम हटवता येत नाही.';
$lang['admin_themes_delete_success'] = 'थीम यशस्वीरित्या हटवली गेली.';
$lang['admin_themes_disable_confirm'] = 'तुम्हाला नक्की ही थीम निष्क्रिय करायची आहे: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'थीम निष्क्रिय करण्यात अयशस्वी झाले.';
$lang['admin_themes_disable_error_active'] = 'सक्रिय थीम निष्क्रिय करता येत नाही.';
$lang['admin_themes_disable_success'] = 'थीम यशस्वीरित्या निष्क्रिय झाली.';
$lang['admin_themes_enable_confirm'] = 'तुम्हाला नक्की ही थीम सक्षम करायची आहे: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'थीम सक्षम करण्यात अयशस्वी झाले.';
$lang['admin_themes_enable_success'] = 'थीम यशस्वीरित्या सक्षम झाली.';
$lang['admin_themes_install_confirm'] = 'तुम्हाला नक्की ही थीम इन्स्टॉल करायची आहे: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'थीम इन्स्टॉल करण्यात अयशस्वी झाले.';
$lang['admin_themes_install_success'] = 'थीम यशस्वीरित्या इन्स्टॉल झाली.';
$lang['admin_themes_install_tip'] = 'थीम तुमच्या साइटचा दिसणारा भाग व रचना बदलतात. <a href="%s" target="_blank" rel="noopener">थीम लायब्ररीतून</a> निवडा किंवा स्वतःची थीम इन्स्टॉल करण्यासाठी <b>.zip</b> फाइल अपलोड करा.';
$lang['admin_themes_none_tip'] = 'हे अॅप्लिकेशन थीमशिवाय चालवले जात आहे. जनता-समोरील इंटरफेस सानुस्कानित करण्यासाठी थीम इन्स्टॉल करा.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'मेनू';
$lang['admin_menus_assign_error'] = 'मेनू स्थान अद्ययावत करण्यात अयशस्वी झाले.';
$lang['admin_menus_assign_success'] = 'मेनू स्थान यशस्वीरित्या अद्ययावत झाली.';
$lang['admin_menus_header'] = '<b>%s</b> मेनू स्थाने उपलब्ध आहेत.';
$lang['admin_menus_location'] = 'स्थान';
$lang['admin_menus_locations'] = 'मेनू स्थाने';
$lang['admin_menus_manage'] = 'मेनू व्यवस्थापित करा';
$lang['admin_menus_menu'] = 'लागू केलेले मेनू';
$lang['admin_menus_none'] = '&#151; कोणतेही नाही &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'भाषा जोडा';
$lang['admin_languages_default_confirm'] = 'तुम्हाला नक्की ही भाषा साइटची डीफॉल्ट भाषा करायची आहे का?';
$lang['admin_languages_default_error'] = 'डीफॉल्ट भाषा बदलण्यात अयशस्वी झाले.';
$lang['admin_languages_default_error_nochange'] = 'ही भाषा आधीच डीफॉल्ट आहे.';
$lang['admin_languages_default_success'] = 'डीफॉल्ट भाषा यशस्वीरित्या बदलली.';
$lang['admin_languages_delete_confirm'] = 'तुम्हाला नक्की ही भाषा हटवायची आहे: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'भाषा हटवण्यात अयशस्वी झाले.';
$lang['admin_languages_delete_error_active'] = 'सक्रिय भाषा हटवता येत नाहीत.';
$lang['admin_languages_delete_error_default'] = 'डीफॉल्ट भाषा हटवता येत नाही.';
$lang['admin_languages_delete_success'] = 'भाषा यशस्वीरित्या हटवली गेली.';
$lang['admin_languages_disable_all_confirm'] = 'तुम्हाला नक्की सर्व भाषा निष्क्रिय करायच्या आहेत का?';
$lang['admin_languages_disable_all_error'] = 'सर्व भाषा निष्क्रिय करण्यात अयशस्वी झाले.';
$lang['admin_languages_disable_all_success'] = 'सर्व भाषा यशस्वीरित्या निष्क्रिय झाल्या.';
$lang['admin_languages_disable_confirm'] = 'तुम्हाला नक्की ही भाषा निष्क्रिय करायची आहे: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'भाषा निष्क्रिय करण्यात अयशस्वी झाले.';
$lang['admin_languages_disable_error_default'] = 'डीफॉल्ट भाषा निष्क्रिय करता येत नाही.';
$lang['admin_languages_disable_error_nochange'] = 'ही भाषा आधीच निष्क्रिय आहे.';
$lang['admin_languages_disable_success'] = 'भाषा यशस्वीरित्या निष्क्रिय झाली.';
$lang['admin_languages_enable_all_confirm'] = 'तुम्हाला नक्की सर्व भाषा सक्षम करायच्या आहेत का?';
$lang['admin_languages_enable_all_error'] = 'सर्व भाषा सक्षम करण्यात अयशस्वी झाले.';
$lang['admin_languages_enable_all_success'] = 'सर्व भाषा यशस्वीरित्या सक्षम झाल्या.';
$lang['admin_languages_enable_confirm'] = 'तुम्हाला नक्की ही भाषा सक्षम करायची आहे: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'भाषा सक्षम करण्यात अयशस्वी झाले.';
$lang['admin_languages_enable_error_nochange'] = 'ही भाषा आधीच सक्षम आहे.';
$lang['admin_languages_enable_success'] = 'भाषा यशस्वीरित्या सक्षम झाली.';
$lang['admin_languages_install_confirm'] = 'तुम्हाला नक्की ही भाषा इन्स्टॉल करायची आहे: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'भाषा इन्स्टॉल करण्यात अयशस्वी झाले.';
$lang['admin_languages_install_success'] = 'भाषा यशस्वीरित्या इन्स्टॉल झाली.';
$lang['admin_languages_install_tip'] = 'भाषा तुमच्या साइटच्या इंटरफेस व मजकूरासाठी अनुवाद जोडतात. उपलब्ध भाषा <a href="%s" target="_blank" rel="noopener">भाषा निर्देशिकेत</a> ब्राउझ करा किंवा स्वतःची भाषा इन्स्टॉल करण्यासाठी <b>.zip</b> पॅकेज अपलोड करा.';
$lang['admin_languages_tip'] = 'साइटची डीफॉल्ट भाषा सक्षम, निष्क्रिय करा आणि ठरवा. सक्षम भाषा साइट अभ्यागतांना उपलब्ध असतात.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'पॅकेज आधीच अस्तित्वात आहे.';
$lang['package_archive_download_failed'] = 'पॅकेज संग्रह डाउनलोड करण्यात अयशस्वी झाले.';
$lang['package_backup_create_error'] = 'पॅकेज बॅकअप तयार करण्यात अयशस्वी झाले.';
$lang['package_backup_dir_failed'] = 'बॅकअप निर्देशिका तयार करण्यात अयशस्वी झाले %s';
$lang['package_backup_missing'] = 'बॅकअप फाइल अस्तित्वात नाही.';
$lang['package_backup_path_error'] = 'बॅकअप फाइलचा मार्ग निश्चित करता आला नाही.';
$lang['package_backup_request_invalid'] = 'अवैध बॅकअप विनंती.';
$lang['package_backup_restore_error'] = 'पॅकेज बॅकअप पुनर्स्थापित करण्यात अयशस्वी झाले.';
$lang['package_catalog_type_unknown'] = 'अज्ञात कॅटलॉग प्रकार.';
$lang['package_checksum_error'] = 'पॅकेज चेकसम पडताळणी अयशस्वी झाली.';
$lang['package_copy_files_error'] = 'पॅकेज फाइल गंतव्यस्थानावर कॉपी करण्यात अयशस्वी झाले.';
$lang['package_copy_updates_error'] = 'अपडेट फाइल गंतव्यस्थानावर कॉपी करण्यात अयशस्वी झाले.';
$lang['package_dest_dir_failed'] = 'गंतव्य निर्देशिका तयार करण्यात अयशस्वी झाले %s';
$lang['package_destination_error'] = 'पॅकेजचे गंतव्यस्थान निश्चित करता आले नाही.';
$lang['package_download_dir_failed'] = 'डाउनलोड निर्देशिका तयार करण्यात अयशस्वी झाले %s';
$lang['package_download_empty'] = 'पॅकेज डाउनलोडने रिकामे उत्तर दिले.';
$lang['package_download_request_invalid'] = 'अवैध पॅकेज डाउनलोड विनंती.';
$lang['package_extract_failed'] = 'ZIP %s काढण्यात अयशस्वी झाले';
$lang['package_invalid_lang_files'] = 'अवैध भाषा — आवश्यक अॅप भाषा फाइलींशमध्ये नाहीत.';
$lang['package_invalid_lang_structure'] = 'अवैध भाषा — admin आणि/किंवा ci3 निर्देशिका नाहीत.';
$lang['package_invalid_missing_info'] = 'अवैध %s: "info.php" नाही.';
$lang['package_invalid_module_structure'] = 'अवैध मॉड्युल — आवश्यक config/controllers निर्देशिका नाहीत.';
$lang['package_invalid_plugin_boot'] = 'अवैध प्लगइन — "boot.php" नाही.';
$lang['package_invalid_plugin_contents'] = 'अवैध प्लगइन — प्लगइनमध्ये controllers किंवा views असू शकत नाहीत.';
$lang['package_invalid_theme_boot'] = 'अवैध थीम — "boot.php" नाही.';
$lang['package_invalid_theme_views'] = 'अवैध थीम — views निर्देशिका नाही.';
$lang['package_no_root_dir'] = 'पॅकेजमध्ये कोणतीही root निर्देशिका नाही.';
$lang['package_not_downloadable'] = 'पॅकेज सार्वजनिकपणे डाउनलोड करता येत नाही.';
$lang['package_not_in_registry'] = 'पॅकेज सार्वजनिक नोंदणीत उपलब्ध नाही.';
$lang['package_request_invalid'] = 'अवैध पॅकेज विनंती.';
$lang['package_rollback_request_invalid'] = 'अवैध रोलबॅक विनंती.';
$lang['package_root_mismatch'] = 'पॅकेज संग्रहाचे root जुळत नाही %s';
$lang['package_single_root_required'] = 'पॅकेजमध्ये नेमकी एकच root निर्देशिका असणे आवश्यक आहे.';
$lang['package_source_error'] = 'पॅकेजचा स्रोत निश्चित करता आला नाही.';
$lang['package_system_core_restricted'] = 'सिस्टम घटक पॅकेज म्हणून इन्स्टॉल करता येत नाहीत.';
$lang['package_temp_dir_failed'] = 'तात्पुरती निर्देशिका तयार करण्यात अयशस्वी झाले %s';
$lang['package_type_unknown'] = 'अज्ञात पॅकेज प्रकार.';
$lang['package_update_request_invalid'] = 'अवैध पॅकेज अपडेट विनंती.';
$lang['package_update_root_mismatch'] = 'अपडेट संग्रहाचे root जुळत नाही %s.';
$lang['package_upload_dir_failed'] = 'अपलोड निर्देशिका तयार करण्यात अयशस्वी झाले %s';
$lang['package_url_invalid'] = 'अवैध पॅकेज वितरण URL.';
$lang['package_write_failed'] = '%s मध्ये पॅकेज लिहिण्यात अयशस्वी झाले';
$lang['package_zip_not_found'] = 'पॅकेज ZIP अस्तित्वात नाही: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'नवीन अपडेट उपलब्ध आहेत!';
$lang['update_backup_error'] = 'अस्तित्वात असलेल्या पॅकेजचा बॅकअप तयार करण्यात अयशस्वी झाले. अपडेट रद्द करण्यात आले.';
$lang['update_check_disabled'] = 'स्वयंघडित अपडेट तपासणी बंद आहे. अपडेट पाहण्यासाठी ती सक्षम करा.';
$lang['update_check_error'] = 'या वेळी अपडेट तपासणी चालवता आली नाही.';
$lang['update_check_success'] = 'अपडेट तपासणी यशस्वीरित्या पूर्ण झाली.';
$lang['update_install_confirm'] = 'तुम्हाला नक्की हे पॅकेज अपडेट करायचे आहे का?';
$lang['update_install_error'] = 'पॅकेज इन्स्टॉल करता आले नाही. सध्याची आवृत्ती कायम ठेवली गेली.';
$lang['update_install_success'] = 'पॅकेज यशस्वीरित्या नवीनतम आवृत्तीवर अपडेट झाले.';
$lang['update_interval_3days'] = 'दर 3 दिवसांनी';
$lang['update_interval_biweekly'] = 'दर 2 आठवड्यांनी';
$lang['update_interval_daily'] = 'दररोज';
$lang['update_interval_monthly'] = 'महिन्याला एकदा';
$lang['update_interval_weekly'] = 'आठवड्याला एकदा';
$lang['update_languages_confirm'] = 'तुम्हाला नक्की ही भाषा अपडेट करायची आहे का?';
$lang['update_languages_error'] = 'भाषा अपडेट करण्यात अयशस्वी झाले.';
$lang['update_languages_success'] = 'भाषा यशस्वीरित्या अपडेट झाली.';
$lang['update_modules_confirm'] = 'तुम्हाला नक्की हे मॉड्युल अपडेट करायचे आहे का?';
$lang['update_modules_error'] = 'मॉड्युल अपडेट करण्यात अयशस्वी झाले.';
$lang['update_modules_success'] = 'मॉड्युल यशस्वीरित्या अपडेट झाले.';
$lang['update_not_available'] = 'तुमची वेबसाइट अद्ययावत आहे.';
$lang['update_plugins_confirm'] = 'तुम्हाला नक्की हे प्लगइन अपडेट करायचे आहे का?';
$lang['update_plugins_error'] = 'प्लगइन अपडेट करण्यात अयशस्वी झाले.';
$lang['update_plugins_success'] = 'प्लगइन यशस्वीरित्या अपडेट झाले.';
$lang['update_rollback_confirm'] = 'तुम्हाला नक्की मागील आवृत्ती पुनर्स्थापित करायची आहे का?';
$lang['update_rollback_error'] = 'मागील आवृत्ती पुनर्स्थापित करण्यात अयशस्वी झाले. स्वयं हस्तक्षेप आवश्यक असू शकते.';
$lang['update_rollback_success'] = 'मागील आवृत्ती यशस्वीरित्या पुनर्स्थापित झाली.';
$lang['update_skip_confirm'] = 'तुम्हाला नक्की हे अपडेट वगळायचे आहे का?';
$lang['update_skip_error'] = 'हे अपडेट वगळण्यात अयशस्वी झाले.';
$lang['update_skip_success'] = 'अपडेट यशस्वीरित्या वगळले गेले.';
$lang['update_themes_confirm'] = 'तुम्हाला नक्की ही थीम अपडेट करायची आहे का?';
$lang['update_themes_error'] = 'थीम अपडेट करण्यात अयशस्वी झाले.';
$lang['update_themes_success'] = 'थीम यशस्वीरित्या अपडेट झाली.';
$lang['updates_available'] = 'उपलब्ध अपडेट';
$lang['updates_check_now'] = 'आत्ता तपासा';
$lang['updates_check_now_confirm'] = 'तुम्हाला नक्की आत्ता अपडेट तपासायची आहेत का?';
$lang['updates_current_version'] = 'सध्याची आवृत्ती';
$lang['updates_enable'] = 'अपडेट सक्षम करा';
$lang['updates_last_check'] = 'शेवटची तपासणी: %s';
$lang['updates_latest_version'] = 'नवीनतम आवृत्ती';
$lang['updates_next_check'] = 'ठरलेली पुढील तपासणी: %s';
$lang['updates_previous_version'] = 'मागील आवृत्ती';
$lang['updates_recent'] = 'अलीकडे अपडेट झालेले';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'दिलेला IP पत्ता ब्लॉक करण्यात अयशस्वी झाला.';
$lang['admin_firewall_ban_success'] = 'IP पत्ता यशस्वीरित्या ब्लॉक झाला.';
$lang['admin_firewall_block_ip'] = 'IP पत्ता ब्लॉक करा';
$lang['admin_firewall_delete_confirm'] = 'तुम्हाला नक्की निवडलेले IP पत्ते अनब्लॉक करायचे आहेत का?';
$lang['admin_firewall_delete_error'] = 'निवडलेले IP पत्ते अनब्लॉक करण्यात अयशस्वी झाले.';
$lang['admin_firewall_delete_success'] = 'निवडलेले IP पत्ते यशस्वीरित्या अनब्लॉक झाले.';
$lang['admin_firewall_duration'] = 'प्रतिबंध कालावधी';
$lang['admin_firewall_permanent'] = 'कायमचा';
$lang['admin_firewall_reason'] = 'प्रतिबंधाची कारणे';
$lang['admin_firewall_tip'] = 'वारंवार उल्लंघन किंवा संदिग्ध कृतीमुळे फायरवॉलने ब्लॉक केलेले IP पत्ते पहा आणि व्यवस्थापित करा.';

// Settings
$lang['404_ban_duration'] = '404 प्रतिबंध कालावधी';
$lang['404_threshold'] = '404 मर्यादा';
$lang['uri_ban_duration'] = 'URI प्रतिबंध कालावधी';
$lang['uri_strike_threshold'] = 'URI मर्यादा';
