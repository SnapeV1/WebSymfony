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
        '/training' => [[['_route' => 'app_training', '_controller' => 'App\\Controller\\TrainingController::index'], null, null, null, false, false, null]],
        '/train' => [[['_route' => 'training', '_controller' => 'App\\Controller\\TrainingController::shop'], null, null, null, false, false, null]],
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
                .'|/update(?'
                    .'|addproduct/([^/]++)(*:233)'
                    .'|Comm/([^/]++)(*:254)'
                    .'|Event(?'
                        .'|Admin/([^/]++)(*:284)'
                        .'|/([^/]++)(*:301)'
                    .')'
                    .'|_reservation/([^/]++)(*:331)'
                    .'|formation/([^/]++)(*:357)'
                    .'|product/([^/]++)(*:381)'
                .')'
                .'|/ad(?'
                    .'|min(?'
                        .'|delete/([^/]++)(*:417)'
                        .'|/(?'
                            .'|deletegroup/([^/]++)(*:449)'
                            .'|editgroup/([^/]++)(*:475)'
                        .')'
                    .')'
                    .'|d(?'
                        .'|Comm/([^/]++)(*:502)'
                        .'|Group/([^/]++)(*:524)'
                        .'|\\-to\\-cart/([^/]++)(*:551)'
                        .'|member/([^/]++)/([^/]++)(*:583)'
                    .')'
                .')'
                .'|/view\\-invoice/([^/]++)(*:616)'
                .'|/delete(?'
                    .'|commentaire/([^/]++)(*:654)'
                    .'|Event(?'
                        .'|Admin/([^/]++)(*:684)'
                        .'|/([^/]++)(*:701)'
                    .')'
                    .'|revAdmin/([^/]++)(*:727)'
                    .'|formation/([^/]++)(*:753)'
                    .'|group/([^/]++)/([^/]++)(*:784)'
                    .'|\\-lineorder/([^/]++)(*:812)'
                    .'|_(?'
                        .'|member/([^/]++)/([^/]++)(*:848)'
                        .'|product_if_quantity_zero/([^/]++)(*:889)'
                    .')'
                .')'
                .'|/Sharecommentaire/([^/]++)(*:925)'
                .'|/conversations/([^/]++)/([^/]++)(*:965)'
                .'|/s(?'
                    .'|e(?'
                        .'|lect\\-receiver/([^/]++)(*:1005)'
                        .'|nd(?'
                            .'|message/([^/]++)/([^/]++)(*:1044)'
                            .'|emailMembers/([^/]++)/([^/]++)(*:1083)'
                        .')'
                    .')'
                    .'|se\\-conversations/([^/]++)/([^/]++)(*:1129)'
                .')'
                .'|/messageDel/([^/]++)/([^/]++)/([^/]++)(*:1177)'
                .'|/li(?'
                    .'|st_resv/([^/]++)(*:1208)'
                    .'|ke/([^/]++)(*:1228)'
                .')'
                .'|/ge(?'
                    .'|nerate\\-pdf/([^/]++)(*:1264)'
                    .'|t(?'
                        .'|Groups/([^/]++)(*:1292)'
                        .'|members/([^/]++)/([^/]++)(*:1326)'
                    .')'
                .')'
                .'|/e(?'
                    .'|vent/generate\\-qr/([^/]++)(?'
                        .'|(*:1371)'
                    .')'
                    .'|dit(?'
                        .'|group/([^/]++)/([^/]++)(*:1410)'
                        .'|\\-lineorder/([^/]++)(*:1439)'
                        .'|member/([^/]++)/([^/]++)/([^/]++)(*:1481)'
                    .')'
                .')'
                .'|/formation/([^/]++)(*:1511)'
                .'|/pro(?'
                    .'|cesspayment/([^/]++)(*:1547)'
                    .'|ductdelete/([^/]++)(*:1575)'
                .')'
                .'|/booktraining/([^/]++)(*:1607)'
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
        233 => [[['_route' => 'Product_updated_admin', '_controller' => 'App\\Controller\\AdminController::updateproduct'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'edit_commentaire', '_controller' => 'App\\Controller\\CommentaireController::updatecommentaire'], ['id'], null, null, false, true, null]],
        284 => [[['_route' => 'eventadmin_update', '_controller' => 'App\\Controller\\EventAdminController::updateEvent'], ['id'], null, null, false, true, null]],
        301 => [[['_route' => 'event_update', '_controller' => 'App\\Controller\\EventUserController::updateEvent'], ['id'], null, null, false, true, null]],
        331 => [[['_route' => 'eventadmin_updaterev', '_controller' => 'App\\Controller\\EventAdminController::updaterevA'], ['id'], null, null, false, true, null]],
        357 => [[['_route' => 'update_formation', '_controller' => 'App\\Controller\\FormationController::updateformation'], ['id'], null, null, false, true, null]],
        381 => [[['_route' => 'Product_updated', '_controller' => 'App\\Controller\\ProductController::updateproduct'], ['id'], null, null, false, true, null]],
        417 => [[['_route' => 'delete_product_admin', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, true, null]],
        449 => [[['_route' => 'admin_deletegroup', '_controller' => 'App\\Controller\\GroupController::Admin_deletegroup'], ['id'], null, null, false, true, null]],
        475 => [[['_route' => 'admin_updategroup', '_controller' => 'App\\Controller\\GroupController::AdminupdateGroup'], ['id'], null, null, false, true, null]],
        502 => [[['_route' => 'add_commentaire', '_controller' => 'App\\Controller\\CommentaireController::addCommentaire'], ['idFormation'], null, null, false, true, null]],
        524 => [[['_route' => 'addgroup', '_controller' => 'App\\Controller\\GroupController::addGroup'], ['userid'], null, null, false, true, null]],
        551 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\LineorderController::addToCart'], ['id'], null, null, false, true, null]],
        583 => [[['_route' => 'addmember', '_controller' => 'App\\Controller\\MembreController::addMemberToGroup'], ['id', 'userId'], null, null, false, true, null]],
        616 => [[['_route' => 'view_invoice', '_controller' => 'App\\Controller\\CommandeController::viewInvoice'], ['id'], null, null, false, true, null]],
        654 => [[['_route' => 'delete_commentaire', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], null, null, false, true, null]],
        684 => [[['_route' => 'eventadmin_delete', '_controller' => 'App\\Controller\\EventAdminController::deleteEventForm'], ['id'], null, null, false, true, null]],
        701 => [[['_route' => 'event_delete', '_controller' => 'App\\Controller\\EventUserController::deleteEventForm'], ['id'], null, null, false, true, null]],
        727 => [[['_route' => 'eventadmin_deleterev', '_controller' => 'App\\Controller\\EventAdminController::deleterev'], ['id'], null, null, false, true, null]],
        753 => [[['_route' => 'delete_formation', '_controller' => 'App\\Controller\\FormationController::delete'], ['id'], null, null, false, true, null]],
        784 => [[['_route' => 'deletegroup', '_controller' => 'App\\Controller\\GroupController::deletegroup'], ['id', 'userid'], null, null, false, true, null]],
        812 => [[['_route' => 'delete_lineorder', '_controller' => 'App\\Controller\\LineorderController::deleteLineorder'], ['id'], null, null, false, true, null]],
        848 => [[['_route' => 'delete_member', '_controller' => 'App\\Controller\\MembreController::deleteMember'], ['groupId', 'userId'], null, null, false, true, null]],
        889 => [[['_route' => 'delete_product_if_quantity_zero', '_controller' => 'App\\Controller\\ProductController::deleteProductIfQuantityZero'], ['id'], null, null, false, true, null]],
        925 => [[['_route' => 'Share_commentaire', '_controller' => 'App\\Controller\\CommentaireController::shareOnFacebook'], ['id'], null, null, false, true, null]],
        965 => [[['_route' => 'display_conversations', '_controller' => 'App\\Controller\\ConversationController::displayConversations'], ['user1Id', 'user2Id'], null, null, false, true, null]],
        1005 => [[['_route' => 'select_receiver', '_controller' => 'App\\Controller\\ConversationController::selectReceiver'], ['user1Id'], null, null, false, true, null]],
        1044 => [[['_route' => 'send_message', '_controller' => 'App\\Controller\\ConversationController::sendMessage'], ['user1Id', 'user2Id'], null, null, false, true, null]],
        1083 => [[['_route' => 'sendEmailToAllMembers', '_controller' => 'App\\Controller\\MembreController::sendEmail'], ['id', 'userId'], null, null, false, true, null]],
        1129 => [[['_route' => 'sse_conversations', '_controller' => 'App\\Controller\\ConversationController::sseConversations'], ['user1Id', 'user2Id'], null, null, false, true, null]],
        1177 => [[['_route' => 'delete_message', '_controller' => 'App\\Controller\\ConversationController::delete_message'], ['id', 'user1Id', 'user2Id'], null, null, false, true, null]],
        1208 => [[['_route' => 'resv_affiche', '_controller' => 'App\\Controller\\EventUserController::afficher_reserv'], ['id'], null, null, false, true, null]],
        1228 => [[['_route' => 'like_formation', '_controller' => 'App\\Controller\\TrainingController::likeFormation'], ['id'], null, null, false, true, null]],
        1264 => [[['_route' => 'generate_pdf', '_controller' => 'App\\Controller\\EventUserController::generatePdf'], ['id'], null, null, false, true, null]],
        1292 => [[['_route' => 'groups_getall', '_controller' => 'App\\Controller\\GroupController::getAllForUser'], ['userid'], null, null, false, true, null]],
        1326 => [[['_route' => 'members_getall', '_controller' => 'App\\Controller\\MembreController::getMembers'], ['id', 'userid'], null, null, false, true, null]],
        1371 => [
            [['_route' => 'event_generate_qr', '_controller' => 'App\\Controller\\EventUserController::generateQrCode'], ['id'], null, null, false, true, null],
            [['_route' => 'app_event_generate_qr', '_controller' => 'App\\Controller\\EventUserController@generateQrCode'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        1410 => [[['_route' => 'update_group', '_controller' => 'App\\Controller\\GroupController::updateGroup'], ['id', 'userid'], null, null, false, true, null]],
        1439 => [[['_route' => 'edit_lineorder', '_controller' => 'App\\Controller\\LineorderController::editLineorder'], ['id'], null, null, false, true, null]],
        1481 => [[['_route' => 'update_member', '_controller' => 'App\\Controller\\MembreController::updateGroup'], ['memberid', 'userid', 'groupid'], null, null, false, true, null]],
        1511 => [[['_route' => 'one_formation', '_controller' => 'App\\Controller\\FormationController::getOne'], ['id'], null, null, false, true, null]],
        1547 => [[['_route' => 'process_payment', '_controller' => 'App\\Controller\\PaymentController::processPayment'], ['id'], null, null, false, true, null]],
        1575 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], null, null, false, true, null]],
        1607 => [
            [['_route' => 'book_training', '_controller' => 'App\\Controller\\TrainingController::bookTraining'], ['idFormation'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
