<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'qr_code_generate' => [['builder', 'data'], ['_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['data' => '[\\w\\W]+'], [['variable', '/', '[\\w\\W]+', 'data', true], ['variable', '/', '[^/]++', 'builder', true], ['text', '/qr-code']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'add_product_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::addproduct'], [], [['text', '/ajouteradminproduit']], [], [], []],
    'Product_updated_admin' => [['id'], ['_controller' => 'App\\Controller\\AdminController::updateproduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateaddproduct']], [], [], []],
    'OnShowAddProductAdmin' => [[], ['_controller' => 'App\\Controller\\AdminController::getAll'], [], [['text', '/adproduits']], [], [], []],
    'delete_product_admin' => [['id'], ['_controller' => 'App\\Controller\\AdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admindelete']], [], [], []],
    'export_pdf' => [[], ['_controller' => 'App\\Controller\\AdminController::exportPdf'], [], [['text', '/export/pdf']], [], [], []],
    'export_excel' => [[], ['_controller' => 'App\\Controller\\AdminController::exportExcel'], [], [['text', '/export/excel']], [], [], []],
    'export_xml' => [[], ['_controller' => 'App\\Controller\\AdminController::exportXml'], [], [['text', '/export/xml']], [], [], []],
    'app_boutique' => [[], ['_controller' => 'App\\Controller\\BoutiqueController::index'], [], [['text', '/boutique']], [], [], []],
    'shopping' => [[], ['_controller' => 'App\\Controller\\BoutiqueController::shop'], [], [['text', '/shop']], [], [], []],
    'fetch_notifications' => [[], ['_controller' => 'App\\Controller\\BoutiqueController::fetchNotifications'], [], [['text', '/fetch-notifications']], [], [], []],
    'app_commande' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/commande']], [], [], []],
    'confirm_all_orders' => [[], ['_controller' => 'App\\Controller\\CommandeController::confirmOrder'], [], [['text', '/confirm-all-orders']], [], [], []],
    'view_invoice' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::viewInvoice'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/view-invoice']], [], [], []],
    'app_commentaire' => [[], ['_controller' => 'App\\Controller\\CommentaireController::index'], [], [['text', '/commentaire']], [], [], []],
    'add_commentaire' => [['idFormation'], ['_controller' => 'App\\Controller\\CommentaireController::addCommentaire'], [], [['variable', '/', '[^/]++', 'idFormation', true], ['text', '/addComm']], [], [], []],
    'all_commentaire' => [[], ['_controller' => 'App\\Controller\\CommentaireController::getAll'], [], [['text', '/allcommentaire']], [], [], []],
    'edit_commentaire' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::updatecommentaire'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateComm']], [], [], []],
    'delete_commentaire' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletecommentaire']], [], [], []],
    'Share_commentaire' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::shareOnFacebook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Sharecommentaire']], [], [], []],
    'share' => [[], ['_controller' => 'App\\Controller\\CommentaireController::shareOnFacebookV3'], [], [['text', '/share']], [], [], []],
    'app_conversation' => [[], ['_controller' => 'App\\Controller\\ConversationController::index'], [], [['text', '/conversation']], [], [], []],
    'display_conversations' => [['user1Id', 'user2Id'], ['_controller' => 'App\\Controller\\ConversationController::displayConversations'], [], [['variable', '/', '[^/]++', 'user2Id', true], ['variable', '/', '[^/]++', 'user1Id', true], ['text', '/conversations']], [], [], []],
    'select_receiver' => [['user1Id'], ['_controller' => 'App\\Controller\\ConversationController::selectReceiver'], [], [['variable', '/', '[^/]++', 'user1Id', true], ['text', '/select-receiver']], [], [], []],
    'send_message' => [['user1Id', 'user2Id'], ['_controller' => 'App\\Controller\\ConversationController::sendMessage'], [], [['variable', '/', '[^/]++', 'user2Id', true], ['variable', '/', '[^/]++', 'user1Id', true], ['text', '/sendmessage']], [], [], []],
    'delete_message' => [['id', 'user1Id', 'user2Id'], ['_controller' => 'App\\Controller\\ConversationController::delete_message'], [], [['variable', '/', '[^/]++', 'user2Id', true], ['variable', '/', '[^/]++', 'user1Id', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/messageDel']], [], [], []],
    'sse_conversations' => [['user1Id', 'user2Id'], ['_controller' => 'App\\Controller\\ConversationController::sseConversations'], [], [['variable', '/', '[^/]++', 'user2Id', true], ['variable', '/', '[^/]++', 'user1Id', true], ['text', '/sse-conversations']], [], [], []],
    'app_event_admin' => [[], ['_controller' => 'App\\Controller\\EventAdminController::index'], [], [['text', '/event/admin']], [], [], []],
    'eventadmin_getall' => [[], ['_controller' => 'App\\Controller\\EventAdminController::getAll'], [], [['text', '/EventAdmingetAll']], [], [], []],
    'eventadmin_add_form' => [[], ['_controller' => 'App\\Controller\\EventAdminController::addEventform'], [], [['text', '/addEventAdminForm']], [], [], []],
    'eventadmin_update' => [['id'], ['_controller' => 'App\\Controller\\EventAdminController::updateEvent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateEventAdmin']], [], [], []],
    'eventadmin_delete' => [['id'], ['_controller' => 'App\\Controller\\EventAdminController::deleteEventForm'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteEventAdmin']], [], [], []],
    'rev_getall' => [[], ['_controller' => 'App\\Controller\\EventAdminController::getrev'], [], [['text', '/getrev']], [], [], []],
    'eventadmin_deleterev' => [['id'], ['_controller' => 'App\\Controller\\EventAdminController::deleterev'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleterevAdmin']], [], [], []],
    'eventadmin_updaterev' => [['id'], ['_controller' => 'App\\Controller\\EventAdminController::updaterevA'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/update_reservation']], [], [], []],
    'app_event_user' => [[], ['_controller' => 'App\\Controller\\EventUserController::index'], [], [['text', '/event/user']], [], [], []],
    'eventuser_getall' => [[], ['_controller' => 'App\\Controller\\EventUserController::getAll'], [], [['text', '/EventgetAll']], [], [], []],
    'author_add' => [[], ['_controller' => 'App\\Controller\\EventUserController::addEvent'], [], [['text', '/addEventForm']], [], [], []],
    'event_update' => [['id'], ['_controller' => 'App\\Controller\\EventUserController::updateEvent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateEvent']], [], [], []],
    'event_delete' => [['id'], ['_controller' => 'App\\Controller\\EventUserController::deleteEventForm'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteEvent']], [], [], []],
    'resv_affiche' => [['id'], ['_controller' => 'App\\Controller\\EventUserController::afficher_reserv'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/list_resv']], [], [], []],
    'generate_pdf' => [['id'], ['_controller' => 'App\\Controller\\EventUserController::generatePdf'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/generate-pdf']], [], [], []],
    'event_generate_qr' => [['id'], ['_controller' => 'App\\Controller\\EventUserController::generateQrCode'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event/generate-qr']], [], [], []],
    'app_formation' => [[], ['_controller' => 'App\\Controller\\FormationController::index'], [], [['text', '/formation']], [], [], []],
    'add_formation' => [[], ['_controller' => 'App\\Controller\\FormationController::addformation'], [], [['text', '/addformation']], [], [], []],
    'update_formation' => [['id'], ['_controller' => 'App\\Controller\\FormationController::updateformation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateformation']], [], [], []],
    'one_formation' => [['id'], ['_controller' => 'App\\Controller\\FormationController::getOne'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/formation']], [], [], []],
    'all_formation' => [[], ['_controller' => 'App\\Controller\\FormationController::getAll'], [], [['text', '/allformation']], [], [], []],
    'delete_formation' => [['id'], ['_controller' => 'App\\Controller\\FormationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteformation']], [], [], []],
    'export_formations_excel' => [[], ['_controller' => 'App\\Controller\\FormationController::exportFormationsExcel'], [], [['text', '/allformation/export']], [], [], []],
    'app_group' => [[], ['_controller' => 'App\\Controller\\GroupController::index'], [], [['text', '/index']], [], [], []],
    'groups_getall' => [['userid'], ['_controller' => 'App\\Controller\\GroupController::getAllForUser'], [], [['variable', '/', '[^/]++', 'userid', true], ['text', '/getGroups']], [], [], []],
    'addgroup' => [['userid'], ['_controller' => 'App\\Controller\\GroupController::addGroup'], [], [['variable', '/', '[^/]++', 'userid', true], ['text', '/addGroup']], [], [], []],
    'deletegroup' => [['id', 'userid'], ['_controller' => 'App\\Controller\\GroupController::deletegroup'], [], [['variable', '/', '[^/]++', 'userid', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/deletegroup']], [], [], []],
    'update_group' => [['id', 'userid'], ['_controller' => 'App\\Controller\\GroupController::updateGroup'], [], [['variable', '/', '[^/]++', 'userid', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/editgroup']], [], [], []],
    'Admingroups_getall' => [[], ['_controller' => 'App\\Controller\\GroupController::getAllForAdmin'], [], [['text', '/admin/getGroups']], [], [], []],
    'admin_deletegroup' => [['id'], ['_controller' => 'App\\Controller\\GroupController::Admin_deletegroup'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/deletegroup']], [], [], []],
    'admin_updategroup' => [['id'], ['_controller' => 'App\\Controller\\GroupController::AdminupdateGroup'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/editgroup']], [], [], []],
    'add_to_cart' => [['id'], ['_controller' => 'App\\Controller\\LineorderController::addToCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/add-to-cart']], [], [], []],
    'view_cart' => [[], ['_controller' => 'App\\Controller\\LineorderController::getLineorders'], [], [['text', '/get-lineorders']], [], [], []],
    'delete_lineorder' => [['id'], ['_controller' => 'App\\Controller\\LineorderController::deleteLineorder'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete-lineorder']], [], [], []],
    'edit_lineorder' => [['id'], ['_controller' => 'App\\Controller\\LineorderController::editLineorder'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit-lineorder']], [], [], []],
    'members_getall' => [['id', 'userid'], ['_controller' => 'App\\Controller\\MembreController::getMembers'], [], [['variable', '/', '[^/]++', 'userid', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/getmembers']], [], [], []],
    'app_membre' => [[], ['_controller' => 'App\\Controller\\MembreController::index'], [], [['text', '/membre']], [], [], []],
    'addmember' => [['id', 'userId'], ['_controller' => 'App\\Controller\\MembreController::addMemberToGroup'], [], [['variable', '/', '[^/]++', 'userId', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/addmember']], [], [], []],
    'delete_member' => [['groupId', 'userId'], ['_controller' => 'App\\Controller\\MembreController::deleteMember'], [], [['variable', '/', '[^/]++', 'userId', true], ['variable', '/', '[^/]++', 'groupId', true], ['text', '/delete_member']], [], [], []],
    'update_member' => [['memberid', 'userid', 'groupid'], ['_controller' => 'App\\Controller\\MembreController::updateGroup'], [], [['variable', '/', '[^/]++', 'groupid', true], ['variable', '/', '[^/]++', 'userid', true], ['variable', '/', '[^/]++', 'memberid', true], ['text', '/editmember']], [], [], []],
    'sendEmailToAllMembers' => [['id', 'userId'], ['_controller' => 'App\\Controller\\MembreController::sendEmail'], [], [['variable', '/', '[^/]++', 'userId', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/sendemailMembers']], [], [], []],
    'app_payment' => [[], ['_controller' => 'App\\Controller\\PaymentController::index'], [], [['text', '/payment']], [], [], []],
    'process_payment' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::processPayment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/processpayment']], [], [], []],
    'payment_success' => [[], ['_controller' => 'App\\Controller\\PaymentController::success'], [], [['text', '/payment/success']], [], [], []],
    'app_product' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/product']], [], [], []],
    'add_product' => [[], ['_controller' => 'App\\Controller\\ProductController::addProduct'], [], [['text', '/ajouterproduit']], [], [], []],
    'Product_updated' => [['id'], ['_controller' => 'App\\Controller\\ProductController::updateproduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateproduct']], [], [], []],
    'OnShowAddProduct' => [[], ['_controller' => 'App\\Controller\\ProductController::getAll'], [], [['text', '/produits']], [], [], []],
    'delete_product' => [['id'], ['_controller' => 'App\\Controller\\ProductController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/productdelete']], [], [], []],
    'search_products' => [[], ['_controller' => 'App\\Controller\\ProductController::searchCriteria'], [], [['text', '/search/products']], [], [], []],
    'delete_product_if_quantity_zero' => [['id'], ['_controller' => 'App\\Controller\\ProductController::deleteProductIfQuantityZero'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete_product_if_quantity_zero']], [], [], []],
    'app_training' => [[], ['_controller' => 'App\\Controller\\TrainingController::index'], [], [['text', '/training']], [], [], []],
    'training' => [[], ['_controller' => 'App\\Controller\\TrainingController::shop'], [], [['text', '/train']], [], [], []],
    'like_formation' => [['id'], ['_controller' => 'App\\Controller\\TrainingController::likeFormation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/like']], [], [], []],
    'book_training' => [['idFormation'], ['_controller' => 'App\\Controller\\TrainingController::bookTraining'], [], [['variable', '/', '[^/]++', 'idFormation', true], ['text', '/booktraining']], [], [], []],
    'app_event_generate_qr' => [['id'], ['_controller' => 'App\\Controller\\EventUserController@generateQrCode'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event/generate-qr']], [], [], []],
];
