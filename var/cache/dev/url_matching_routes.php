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
        '/boutique' => [[['_route' => 'app_boutique', '_controller' => 'App\\Controller\\BoutiqueController::index'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'shopping', '_controller' => 'App\\Controller\\BoutiqueController::shop'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/confirm-all-orders' => [[['_route' => 'confirm_all_orders', '_controller' => 'App\\Controller\\CommandeController::confirmOrder'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire', '_controller' => 'App\\Controller\\CommentaireController::index'], null, null, null, false, false, null]],
        '/allcommentaire' => [[['_route' => 'all_commentaire', '_controller' => 'App\\Controller\\CommentaireController::getAll'], null, null, null, false, false, null]],
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
                    .'|adproduct/([^/]++)(*:232)'
                    .'|Comm/([^/]++)(*:253)'
                    .'|Event(?'
                        .'|Admin/([^/]++)(*:283)'
                        .'|/([^/]++)(*:300)'
                    .')'
                    .'|_reservation/([^/]++)(*:330)'
                    .'|formation/([^/]++)(*:356)'
                    .'|product/([^/]++)(*:380)'
                .')'
                .'|/ad(?'
                    .'|min(?'
                        .'|delete/([^/]++)(*:416)'
                        .'|/(?'
                            .'|deletegroup/([^/]++)(*:448)'
                            .'|editgroup/([^/]++)(*:474)'
                        .')'
                    .')'
                    .'|d(?'
                        .'|Comm/([^/]++)(*:501)'
                        .'|Group/([^/]++)(*:523)'
                        .'|\\-to\\-cart/([^/]++)(*:550)'
                        .'|member/([^/]++)/([^/]++)(*:582)'
                    .')'
                .')'
                .'|/delete(?'
                    .'|commentaire/([^/]++)(*:622)'
                    .'|Event(?'
                        .'|Admin/([^/]++)(*:652)'
                        .'|/([^/]++)(*:669)'
                    .')'
                    .'|revAdmin/([^/]++)(*:695)'
                    .'|formation/([^/]++)(*:721)'
                    .'|group/([^/]++)/([^/]++)(*:752)'
                    .'|\\-lineorder/([^/]++)(*:780)'
                    .'|_member/([^/]++)/([^/]++)(*:813)'
                .')'
                .'|/conversations/([^/]++)/([^/]++)(*:854)'
                .'|/s(?'
                    .'|e(?'
                        .'|lect\\-receiver/([^/]++)(*:894)'
                        .'|nd(?'
                            .'|message/([^/]++)/([^/]++)(*:932)'
                            .'|emailMembers/([^/]++)/([^/]++)(*:970)'
                        .')'
                    .')'
                    .'|se\\-conversations/([^/]++)/([^/]++)(*:1015)'
                .')'
                .'|/messageDel/([^/]++)/([^/]++)/([^/]++)(*:1063)'
                .'|/li(?'
                    .'|st_resv/([^/]++)(*:1094)'
                    .'|ke/([^/]++)(*:1114)'
                .')'
                .'|/ge(?'
                    .'|nerate\\-pdf/([^/]++)(*:1150)'
                    .'|t(?'
                        .'|Groups/([^/]++)(*:1178)'
                        .'|members/([^/]++)/([^/]++)(*:1212)'
                    .')'
                .')'
                .'|/e(?'
                    .'|vent/generate\\-qr/([^/]++)(?'
                        .'|(*:1257)'
                    .')'
                    .'|dit(?'
                        .'|group/([^/]++)/([^/]++)(*:1296)'
                        .'|\\-lineorder/([^/]++)(*:1325)'
                        .'|member/([^/]++)/([^/]++)/([^/]++)(*:1367)'
                    .')'
                .')'
                .'|/formation/([^/]++)(*:1397)'
                .'|/pro(?'
                    .'|cesspayment/([^/]++)(*:1433)'
                    .'|ductdelete/([^/]++)(*:1461)'
                .')'
                .'|/booktraining/([^/]++)(*:1493)'
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
        232 => [[['_route' => 'Product_updated_admin', '_controller' => 'App\\Controller\\AdminController::updateproduct'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'edit_commentaire', '_controller' => 'App\\Controller\\CommentaireController::updatecommentaire'], ['id'], null, null, false, true, null]],
        283 => [[['_route' => 'eventadmin_update', '_controller' => 'App\\Controller\\EventAdminController::updateEvent'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'event_update', '_controller' => 'App\\Controller\\EventUserController::updateEvent'], ['id'], null, null, false, true, null]],
        330 => [[['_route' => 'eventadmin_updaterev', '_controller' => 'App\\Controller\\EventAdminController::updaterevA'], ['id'], null, null, false, true, null]],
        356 => [[['_route' => 'update_formation', '_controller' => 'App\\Controller\\FormationController::updateformation'], ['id'], null, null, false, true, null]],
        380 => [[['_route' => 'Product_updated', '_controller' => 'App\\Controller\\ProductController::updateproduct'], ['id'], null, null, false, true, null]],
        416 => [[['_route' => 'delete_product_admin', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, true, null]],
        448 => [[['_route' => 'admin_deletegroup', '_controller' => 'App\\Controller\\GroupController::Admin_deletegroup'], ['id'], null, null, false, true, null]],
        474 => [[['_route' => 'admin_updategroup', '_controller' => 'App\\Controller\\GroupController::AdminupdateGroup'], ['id'], null, null, false, true, null]],
        501 => [[['_route' => 'add_commentaire', '_controller' => 'App\\Controller\\CommentaireController::addCommentaire'], ['idFormation'], null, null, false, true, null]],
        523 => [[['_route' => 'addgroup', '_controller' => 'App\\Controller\\GroupController::addGroup'], ['userid'], null, null, false, true, null]],
        550 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\LineorderController::addToCart'], ['id'], null, null, false, true, null]],
        582 => [[['_route' => 'addmember', '_controller' => 'App\\Controller\\MembreController::addMemberToGroup'], ['id', 'userId'], null, null, false, true, null]],
        622 => [[['_route' => 'delete_commentaire', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], null, null, false, true, null]],
        652 => [[['_route' => 'eventadmin_delete', '_controller' => 'App\\Controller\\EventAdminController::deleteEventForm'], ['id'], null, null, false, true, null]],
        669 => [[['_route' => 'event_delete', '_controller' => 'App\\Controller\\EventUserController::deleteEventForm'], ['id'], null, null, false, true, null]],
        695 => [[['_route' => 'eventadmin_deleterev', '_controller' => 'App\\Controller\\EventAdminController::deleterev'], ['id'], null, null, false, true, null]],
        721 => [[['_route' => 'delete_formation', '_controller' => 'App\\Controller\\FormationController::delete'], ['id'], null, null, false, true, null]],
        752 => [[['_route' => 'deletegroup', '_controller' => 'App\\Controller\\GroupController::deletegroup'], ['id', 'userid'], null, null, false, true, null]],
        780 => [[['_route' => 'delete_lineorder', '_controller' => 'App\\Controller\\LineorderController::deleteLineorder'], ['id'], null, null, false, true, null]],
        813 => [[['_route' => 'delete_member', '_controller' => 'App\\Controller\\MembreController::deleteMember'], ['groupId', 'userId'], null, null, false, true, null]],
        854 => [[['_route' => 'display_conversations', '_controller' => 'App\\Controller\\ConversationController::displayConversations'], ['user1Id', 'user2Id'], null, null, false, true, null]],
        894 => [[['_route' => 'select_receiver', '_controller' => 'App\\Controller\\ConversationController::selectReceiver'], ['user1Id'], null, null, false, true, null]],
        932 => [[['_route' => 'send_message', '_controller' => 'App\\Controller\\ConversationController::sendMessage'], ['user1Id', 'user2Id'], null, null, false, true, null]],
        970 => [[['_route' => 'sendEmailToAllMembers', '_controller' => 'App\\Controller\\MembreController::sendEmail'], ['id', 'userId'], null, null, false, true, null]],
        1015 => [[['_route' => 'sse_conversations', '_controller' => 'App\\Controller\\ConversationController::sseConversations'], ['user1Id', 'user2Id'], null, null, false, true, null]],
        1063 => [[['_route' => 'delete_message', '_controller' => 'App\\Controller\\ConversationController::delete_message'], ['id', 'user1Id', 'user2Id'], null, null, false, true, null]],
        1094 => [[['_route' => 'resv_affiche', '_controller' => 'App\\Controller\\EventUserController::afficher_reserv'], ['id'], null, null, false, true, null]],
        1114 => [[['_route' => 'like_formation', '_controller' => 'App\\Controller\\TrainingController::likeFormation'], ['id'], null, null, false, true, null]],
        1150 => [[['_route' => 'generate_pdf', '_controller' => 'App\\Controller\\EventUserController::generatePdf'], ['id'], null, null, false, true, null]],
        1178 => [[['_route' => 'groups_getall', '_controller' => 'App\\Controller\\GroupController::getAllForUser'], ['userid'], null, null, false, true, null]],
        1212 => [[['_route' => 'members_getall', '_controller' => 'App\\Controller\\MembreController::getMembers'], ['id', 'userid'], null, null, false, true, null]],
        1257 => [
            [['_route' => 'event_generate_qr', '_controller' => 'App\\Controller\\EventUserController::generateQrCode'], ['id'], null, null, false, true, null],
            [['_route' => 'app_event_generate_qr', '_controller' => 'App\\Controller\\EventUserController@generateQrCode'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        1296 => [[['_route' => 'update_group', '_controller' => 'App\\Controller\\GroupController::updateGroup'], ['id', 'userid'], null, null, false, true, null]],
        1325 => [[['_route' => 'edit_lineorder', '_controller' => 'App\\Controller\\LineorderController::editLineorder'], ['id'], null, null, false, true, null]],
        1367 => [[['_route' => 'update_member', '_controller' => 'App\\Controller\\MembreController::updateGroup'], ['memberid', 'userid', 'groupid'], null, null, false, true, null]],
        1397 => [[['_route' => 'one_formation', '_controller' => 'App\\Controller\\FormationController::getOne'], ['id'], null, null, false, true, null]],
        1433 => [[['_route' => 'process_payment', '_controller' => 'App\\Controller\\PaymentController::processPayment'], ['id'], null, null, false, true, null]],
        1461 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], null, null, false, true, null]],
        1493 => [
            [['_route' => 'book_training', '_controller' => 'App\\Controller\\TrainingController::bookTraining'], ['idFormation'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
