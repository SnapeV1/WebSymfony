<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/ajouteradminproduit' => [[['_route' => 'add_product_admin', '_controller' => 'App\\Controller\\AdminController::addproduct'], null, null, null, false, false, null]],
        '/adproduits' => [[['_route' => 'OnShowAddProductAdmin', '_controller' => 'App\\Controller\\AdminController::getAll'], null, null, null, false, false, null]],
        '/export/pdf' => [[['_route' => 'export_pdf', '_controller' => 'App\\Controller\\AdminController::exportPdf'], null, null, null, false, false, null]],
        '/export/excel' => [[['_route' => 'export_excel', '_controller' => 'App\\Controller\\AdminController::exportExcel'], null, null, null, false, false, null]],
        '/export/xml' => [[['_route' => 'export_xml', '_controller' => 'App\\Controller\\AdminController::exportXml'], null, null, null, false, false, null]],
        '/boutique' => [[['_route' => 'app_boutique', '_controller' => 'App\\Controller\\BoutiqueController::index'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'shopping', '_controller' => 'App\\Controller\\BoutiqueController::shop'], null, null, null, false, false, null]],
        '/fetch-notifications' => [[['_route' => 'fetch_notifications', '_controller' => 'App\\Controller\\BoutiqueController::fetchNotifications'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/confirm-all-orders' => [[['_route' => 'confirm_all_orders', '_controller' => 'App\\Controller\\CommandeController::confirmOrder'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire', '_controller' => 'App\\Controller\\CommentaireController::index'], null, null, null, false, false, null]],
        '/allcommentaire' => [[['_route' => 'all_commentaire', '_controller' => 'App\\Controller\\CommentaireController::getAll'], null, null, null, false, false, null]],
        '/share' => [[['_route' => 'share', '_controller' => 'App\\Controller\\CommentaireController::shareOnFacebookV3'], null, null, null, false, false, null]],
        '/conversation' => [[['_route' => 'app_conversation', '_controller' => 'App\\Controller\\ConversationController::index'], null, null, null, false, false, null]],
        '/event/admin' => [[['_route' => 'app_event_admin', '_controller' => 'App\\Controller\\EventAdminController::index'], null, null, null, false, false, null]],
        '/EventAdmingetAll' => [[['_route' => 'eventadmin_getall', '_controller' => 'App\\Controller\\EventAdminController::getAll'], null, null, null, false, false, null]],
        '/addEventAdminForm' => [[['_route' => 'eventadmin_add_form', '_controller' => 'App\\Controller\\EventAdminController::addEventform'], null, null, null, false, false, null]],
        '/getrev' => [[['_route' => 'rev_getall', '_controller' => 'App\\Controller\\EventAdminController::getrev'], null, null, null, false, false, null]],
        '/event/user' => [[['_route' => 'app_event_user', '_controller' => 'App\\Controller\\EventUserController::index'], null, null, null, false, false, null]],
        '/EventgetAll' => [[['_route' => 'eventuser_getall', '_controller' => 'App\\Controller\\EventUserController::getAll'], null, null, null, false, false, null]],
        '/addEventForm' => [[['_route' => 'author_add', '_controller' => 'App\\Controller\\EventUserController::addEvent'], null, null, null, false, false, null]],
        '/formation' => [[['_route' => 'app_formation', '_controller' => 'App\\Controller\\FormationController::index'], null, null, null, false, false, null]],
        '/addformation' => [[['_route' => 'add_formation', '_controller' => 'App\\Controller\\FormationController::addformation'], null, null, null, false, false, null]],
        '/allformation' => [[['_route' => 'all_formation', '_controller' => 'App\\Controller\\FormationController::getAll'], null, null, null, false, false, null]],
        '/allformation/export' => [[['_route' => 'export_formations_excel', '_controller' => 'App\\Controller\\FormationController::exportFormationsExcel'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_group', '_controller' => 'App\\Controller\\GroupController::index'], null, null, null, false, false, null]],
        '/admin/getGroups' => [[['_route' => 'Admingroups_getall', '_controller' => 'App\\Controller\\GroupController::getAllForAdmin'], null, null, null, false, false, null]],
        '/get-lineorders' => [[['_route' => 'view_cart', '_controller' => 'App\\Controller\\LineorderController::getLineorders'], null, null, null, false, false, null]],
        '/membre' => [[['_route' => 'app_membre', '_controller' => 'App\\Controller\\MembreController::index'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/payment/success' => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\PaymentController::success'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/ajouterproduit' => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\ProductController::addProduct'], null, null, null, false, false, null]],
        '/produits' => [[['_route' => 'OnShowAddProduct', '_controller' => 'App\\Controller\\ProductController::getAll'], null, null, null, false, false, null]],
        '/search/products' => [[['_route' => 'search_products', '_controller' => 'App\\Controller\\ProductController::searchCriteria'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/reclamationall' => [[['_route' => 'all_reclamation', '_controller' => 'App\\Controller\\ReclamationController::getAll'], null, null, null, false, false, null]],
        '/reclamer' => [[['_route' => 'add_reclamation', '_controller' => 'App\\Controller\\ReclamationController::add'], null, null, null, false, false, null]],
        '/mymessages' => [[['_route' => 'my_reclamation', '_controller' => 'App\\Controller\\ReclamationController::getReclamationById'], null, null, null, false, false, null]],
        '/training' => [[['_route' => 'app_training', '_controller' => 'App\\Controller\\TrainingController::index'], null, null, null, false, false, null]],
        '/train' => [[['_route' => 'training', '_controller' => 'App\\Controller\\TrainingController::shop'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'add_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::addUtilisateur'], null, null, null, false, false, null]],
        '/verification' => [[['_route' => 'addInBase_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::savePerson'], null, null, null, false, false, null]],
        '/utilisateurs' => [[['_route' => 'all_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::getAll'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::Profil'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::login'], null, null, null, false, false, null]],
        '/Accountrecover' => [[['_route' => 'passwordForgot_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::forgotPassword'], null, null, null, false, false, null]],
        '/verif2' => [[['_route' => 'verif2_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::codeVerifTwo'], null, null, null, false, false, null]],
        '/passwordrez' => [[['_route' => 'MDPRez_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::entryPasswd'], null, null, null, false, false, null]],
        '/emailconnect' => [[['_route' => 'emailConnection_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::emailConnection'], null, null, null, false, false, null]],
        '/verif' => [[['_route' => 'verif_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::codeVerif'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::logout'], null, null, null, false, false, null]],
        '/getUser' => [[['_route' => 'get_current_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::getcurrent'], null, null, null, false, false, null]],
        '/testmail' => [[['_route' => 'mailing', '_controller' => 'App\\Controller\\UtilisateurController::sendEmail'], null, null, null, false, false, null]],
        '/take-photo' => [[['_route' => 'take_photo', '_controller' => 'App\\Controller\\UtilisateurController::takePic'], null, null, null, false, false, null]],
        '/capture-photo' => [[['_route' => 'capture_photo', '_controller' => 'App\\Controller\\UtilisateurController::capturePhoto'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:73)'
                    .'|wdt/([^/]++)(*:92)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:137)'
                            .'|router(*:151)'
                            .'|exception(?'
                                .'|(*:171)'
                                .'|\\.css(*:184)'
                            .')'
                        .')'
                        .'|(*:194)'
                    .')'
                .')'
                .'|/u(?'
                    .'|pdate(?'
                        .'|addproduct/([^/]++)(*:236)'
                        .'|Comm/([^/]++)(*:257)'
                        .'|Event(?'
                            .'|Admin/([^/]++)(*:287)'
                            .'|/([^/]++)(*:304)'
                        .')'
                        .'|_reservation/([^/]++)(*:334)'
                        .'|formation/([^/]++)(*:360)'
                        .'|product/([^/]++)(*:384)'
                        .'|utilisateur/([^/]++)(*:412)'
                    .')'
                    .'|tilisateurs(?'
                        .'|/([^/]++)(*:444)'
                        .'|delete/([^/]++)(*:467)'
                    .')'
                .')'
                .'|/ad(?'
                    .'|min(?'
                        .'|delete/([^/]++)(*:504)'
                        .'|/(?'
                            .'|deletegroup/([^/]++)(*:536)'
                            .'|editgroup/([^/]++)(*:562)'
                        .')'
                    .')'
                    .'|d(?'
                        .'|Comm/([^/]++)(*:589)'
                        .'|Group/([^/]++)(*:611)'
                        .'|\\-to\\-cart/([^/]++)(*:638)'
                        .'|member/([^/]++)/([^/]++)(*:670)'
                    .')'
                .')'
                .'|/view\\-invoice/([^/]++)(*:703)'
                .'|/delete(?'
                    .'|commentaire/([^/]++)(*:741)'
                    .'|Event(?'
                        .'|Admin/([^/]++)(*:771)'
                        .'|/([^/]++)(*:788)'
                    .')'
                    .'|revAdmin/([^/]++)(*:814)'
                    .'|formation/([^/]++)(*:840)'
                    .'|group/([^/]++)/([^/]++)(*:871)'
                    .'|\\-lineorder/([^/]++)(*:899)'
                    .'|_(?'
                        .'|member/([^/]++)/([^/]++)(*:935)'
                        .'|product_if_quantity_zero/([^/]++)(*:976)'
                    .')'
                .')'
                .'|/Sharecommentaire/([^/]++)(*:1012)'
                .'|/conversations/([^/]++)/([^/]++)(*:1053)'
                .'|/s(?'
                    .'|e(?'
                        .'|lect\\-receiver/([^/]++)(*:1094)'
                        .'|nd(?'
                            .'|message/([^/]++)/([^/]++)(*:1133)'
                            .'|emailMembers/([^/]++)/([^/]++)(*:1172)'
                        .')'
                    .')'
                    .'|se\\-conversations/([^/]++)/([^/]++)(*:1218)'
                .')'
                .'|/m(?'
                    .'|essageDel/([^/]++)/([^/]++)/([^/]++)(*:1269)'
                    .'|dpreset/([^/]++)(*:1294)'
                .')'
                .'|/li(?'
                    .'|st_resv/([^/]++)(*:1326)'
                    .'|ke/([^/]++)(*:1346)'
                .')'
                .'|/ge(?'
                    .'|nerate\\-pdf/([^/]++)(*:1382)'
                    .'|t(?'
                        .'|Groups/([^/]++)(*:1410)'
                        .'|members/([^/]++)/([^/]++)(*:1444)'
                    .')'
                .')'
                .'|/e(?'
                    .'|vent/generate\\-qr/([^/]++)(?'
                        .'|(*:1489)'
                    .')'
                    .'|dit(?'
                        .'|group/([^/]++)/([^/]++)(*:1528)'
                        .'|\\-lineorder/([^/]++)(*:1557)'
                        .'|member/([^/]++)/([^/]++)/([^/]++)(*:1599)'
                    .')'
                .')'
                .'|/formation/([^/]++)(*:1629)'
                .'|/pro(?'
                    .'|cesspayment/([^/]++)(*:1665)'
                    .'|ductdelete/([^/]++)(*:1693)'
                .')'
                .'|/reclamation(?'
                    .'|/([^/]++)(*:1727)'
                    .'|delete/([^/]++)(*:1751)'
                    .'|answer/([^/]++)(*:1775)'
                .')'
                .'|/booktraining/([^/]++)(*:1807)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        73 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        92 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        137 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        151 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        171 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        194 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        236 => [[['_route' => 'Product_updated_admin', '_controller' => 'App\\Controller\\AdminController::updateproduct'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'edit_commentaire', '_controller' => 'App\\Controller\\CommentaireController::updatecommentaire'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'eventadmin_update', '_controller' => 'App\\Controller\\EventAdminController::updateEvent'], ['id'], null, null, false, true, null]],
        304 => [[['_route' => 'event_update', '_controller' => 'App\\Controller\\EventUserController::updateEvent'], ['id'], null, null, false, true, null]],
        334 => [[['_route' => 'eventadmin_updaterev', '_controller' => 'App\\Controller\\EventAdminController::updaterevA'], ['id'], null, null, false, true, null]],
        360 => [[['_route' => 'update_formation', '_controller' => 'App\\Controller\\FormationController::updateformation'], ['id'], null, null, false, true, null]],
        384 => [[['_route' => 'Product_updated', '_controller' => 'App\\Controller\\ProductController::updateproduct'], ['id'], null, null, false, true, null]],
        412 => [[['_route' => 'utilisateur_update', '_controller' => 'App\\Controller\\UtilisateurController::updateAuthor'], ['id'], null, null, false, true, null]],
        444 => [[['_route' => 'one_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::getOne'], ['id'], null, null, false, true, null]],
        467 => [[['_route' => 'delete_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], null, null, false, true, null]],
        504 => [[['_route' => 'delete_product_admin', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, true, null]],
        536 => [[['_route' => 'admin_deletegroup', '_controller' => 'App\\Controller\\GroupController::Admin_deletegroup'], ['id'], null, null, false, true, null]],
        562 => [[['_route' => 'admin_updategroup', '_controller' => 'App\\Controller\\GroupController::AdminupdateGroup'], ['id'], null, null, false, true, null]],
        589 => [[['_route' => 'add_commentaire', '_controller' => 'App\\Controller\\CommentaireController::addCommentaire'], ['idFormation'], null, null, false, true, null]],
        611 => [[['_route' => 'addgroup', '_controller' => 'App\\Controller\\GroupController::addGroup'], ['userid'], null, null, false, true, null]],
        638 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\LineorderController::addToCart'], ['id'], null, null, false, true, null]],
        670 => [[['_route' => 'addmember', '_controller' => 'App\\Controller\\MembreController::addMemberToGroup'], ['id', 'userId'], null, null, false, true, null]],
        703 => [[['_route' => 'view_invoice', '_controller' => 'App\\Controller\\CommandeController::viewInvoice'], ['id'], null, null, false, true, null]],
        741 => [[['_route' => 'delete_commentaire', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], null, null, false, true, null]],
        771 => [[['_route' => 'eventadmin_delete', '_controller' => 'App\\Controller\\EventAdminController::deleteEventForm'], ['id'], null, null, false, true, null]],
        788 => [[['_route' => 'event_delete', '_controller' => 'App\\Controller\\EventUserController::deleteEventForm'], ['id'], null, null, false, true, null]],
        814 => [[['_route' => 'eventadmin_deleterev', '_controller' => 'App\\Controller\\EventAdminController::deleterev'], ['id'], null, null, false, true, null]],
        840 => [[['_route' => 'delete_formation', '_controller' => 'App\\Controller\\FormationController::delete'], ['id'], null, null, false, true, null]],
        871 => [[['_route' => 'deletegroup', '_controller' => 'App\\Controller\\GroupController::deletegroup'], ['id', 'userid'], null, null, false, true, null]],
        899 => [[['_route' => 'delete_lineorder', '_controller' => 'App\\Controller\\LineorderController::deleteLineorder'], ['id'], null, null, false, true, null]],
        935 => [[['_route' => 'delete_member', '_controller' => 'App\\Controller\\MembreController::deleteMember'], ['groupId', 'userId'], null, null, false, true, null]],
        976 => [[['_route' => 'delete_product_if_quantity_zero', '_controller' => 'App\\Controller\\ProductController::deleteProductIfQuantityZero'], ['id'], null, null, false, true, null]],
        1012 => [[['_route' => 'Share_commentaire', '_controller' => 'App\\Controller\\CommentaireController::shareOnFacebook'], ['id'], null, null, false, true, null]],
        1053 => [[['_route' => 'display_conversations', '_controller' => 'App\\Controller\\ConversationController::displayConversations'], ['user1Id', 'user2Id'], null, null, false, true, null]],
        1094 => [[['_route' => 'select_receiver', '_controller' => 'App\\Controller\\ConversationController::selectReceiver'], ['user1Id'], null, null, false, true, null]],
        1133 => [[['_route' => 'send_message', '_controller' => 'App\\Controller\\ConversationController::sendMessage'], ['user1Id', 'user2Id'], null, null, false, true, null]],
        1172 => [[['_route' => 'sendEmailToAllMembers', '_controller' => 'App\\Controller\\MembreController::sendEmail'], ['id', 'userId'], null, null, false, true, null]],
        1218 => [[['_route' => 'sse_conversations', '_controller' => 'App\\Controller\\ConversationController::sseConversations'], ['user1Id', 'user2Id'], null, null, false, true, null]],
        1269 => [[['_route' => 'delete_message', '_controller' => 'App\\Controller\\ConversationController::delete_message'], ['id', 'user1Id', 'user2Id'], null, null, false, true, null]],
        1294 => [[['_route' => 'passwordreset_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::resetPasword'], ['id'], null, null, false, true, null]],
        1326 => [[['_route' => 'resv_affiche', '_controller' => 'App\\Controller\\EventUserController::afficher_reserv'], ['id'], null, null, false, true, null]],
        1346 => [[['_route' => 'like_formation', '_controller' => 'App\\Controller\\TrainingController::likeFormation'], ['id'], null, null, false, true, null]],
        1382 => [[['_route' => 'generate_pdf', '_controller' => 'App\\Controller\\EventUserController::generatePdf'], ['id'], null, null, false, true, null]],
        1410 => [[['_route' => 'groups_getall', '_controller' => 'App\\Controller\\GroupController::getAllForUser'], ['userid'], null, null, false, true, null]],
        1444 => [[['_route' => 'members_getall', '_controller' => 'App\\Controller\\MembreController::getMembers'], ['id', 'userid'], null, null, false, true, null]],
        1489 => [
            [['_route' => 'event_generate_qr', '_controller' => 'App\\Controller\\EventUserController::generateQrCode'], ['id'], null, null, false, true, null],
            [['_route' => 'app_event_generate_qr', '_controller' => 'App\\Controller\\EventUserController@generateQrCode'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        1528 => [[['_route' => 'update_group', '_controller' => 'App\\Controller\\GroupController::updateGroup'], ['id', 'userid'], null, null, false, true, null]],
        1557 => [[['_route' => 'edit_lineorder', '_controller' => 'App\\Controller\\LineorderController::editLineorder'], ['id'], null, null, false, true, null]],
        1599 => [[['_route' => 'update_member', '_controller' => 'App\\Controller\\MembreController::updateGroup'], ['memberid', 'userid', 'groupid'], null, null, false, true, null]],
        1629 => [[['_route' => 'one_formation', '_controller' => 'App\\Controller\\FormationController::getOne'], ['id'], null, null, false, true, null]],
        1665 => [[['_route' => 'process_payment', '_controller' => 'App\\Controller\\PaymentController::processPayment'], ['id'], null, null, false, true, null]],
        1693 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], null, null, false, true, null]],
        1727 => [[['_route' => 'one_reclamation', '_controller' => 'App\\Controller\\ReclamationController::getOne'], ['id'], null, null, false, true, null]],
        1751 => [[['_route' => 'delete_reclamation', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], null, null, false, true, null]],
        1775 => [[['_route' => 'answer_reclamation', '_controller' => 'App\\Controller\\ReclamationController::answer'], ['id'], null, null, false, true, null]],
        1807 => [
            [['_route' => 'book_training', '_controller' => 'App\\Controller\\TrainingController::bookTraining'], ['idFormation'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
