<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/admin', 'AdminControl::index');
$routes->get('/admin/LayananMedical', 'AdminControl::LayananMedical');
$routes->get('/admin/LayananObat', 'AdminControl::LayananObat');
$routes->get('/admin/LayananDarurat', 'AdminControl::LayananDarurat');
$routes->get('/admin/LayananVaksin', 'AdminControl::LayananVaksin');
$routes->get('/admin/DataPerusahaan', 'AdminControl::DataPerusahaan');
$routes->get('/admin/DetailsDataPerusahaan', 'AdminControl::DetailsDataPerusahaan');
$routes->get('/admin/EditDataPerusahaan', 'AdminControl::EditDataPerusahaan');
$routes->get('/admin/Logout', 'AdminControl::Logout');
$routes->get('/admin/Keranjang', 'AdminControl::Keranjang');
$routes->get('/admin/StockVaksin', 'AdminControl::StockVaksin');
$routes->get('/admin/StockObat', 'AdminControl::StockObat');

$routes->post('/loginAdmin', 'Home::loginAdmin');
$routes->post('/admin/PostEdit', 'AdminControl::PostEdit');
$routes->post('/admin/BuatPerusahaan', 'AdminControl::BuatPerusahaan');
$routes->post('/admin/AjaxMedical', 'Ajax::Medical');
$routes->post('/admin/AjaxDarurat', 'Ajax::Darurat');
$routes->post('/admin/AjaxAkun', 'Ajax::Akun');
$routes->post('/admin/AjaxKeranjang', 'Ajax::Keranjang');
$routes->post('/admin/AjaxTanggalPengiriman', 'Ajax::TanggalPengiriman');
$routes->post('/admin/AjaxVaksin', 'Ajax::Vaksin');
$routes->post('/admin/HapusVaksin', 'Ajax::HapusVaksin');
$routes->post('/admin/HapusStockObat', 'Ajax::HapusStockObat');
$routes->post('/admin/tambahStockVaksin', 'AdminControl::tambahStockVaksin');
$routes->post('/admin/tambahStockObat', 'AdminControl::tambahStockObat');

$routes->get('/indexAdmin', 'Home::indexAdmin');

$routes->post('/loginClient', 'Home::loginClient');
$routes->get('/client', 'ClientControl::index');
$routes->get('/client/logout', 'ClientControl::logout');
$routes->get('/client/myAccount', 'ClientControl::myAccount');
$routes->get('/client/editProfile', 'ClientControl::editProfile');
$routes->get('/client/history', 'ClientControl::history');
$routes->get('/client/medicalcheckup', 'ClientControl::medicalcheckup');
$routes->get('/client/suksesMedical', 'ClientControl::suksesMedical');
$routes->get('/client/suksesDarurat', 'ClientControl::suksesDarurat');
$routes->get('/client/darurat', 'ClientControl::darurat');
$routes->get('/client/vaksin', 'ClientControl::vaksin');
$routes->get('/client/suksesVaksin', 'ClientControl::suksesVaksin');
$routes->get('/client/obat', 'ClientControl::obat');
$routes->get('/client/obat', 'ClientControl::obat');
$routes->get('/client/keranjang', 'ClientControl::keranjang');
$routes->get('/client/detailKeranjang', 'ClientControl::detailKeranjang');


$routes->post('/client/postEdit', 'ClientControl::postEdit');
$routes->post('/client/checkoutMedical', 'ClientControl::checkoutMedical');
$routes->post('/client/checkoutDarurat', 'ClientControl::checkoutDarurat');
$routes->post('/client/checkoutVaksin', 'ClientControl::checkoutVaksin');
$routes->post('/client/tambahObatLain', 'ClientControl::tambahObatLain');
$routes->get('/client/postEdit', 'ClientControl::editProfile');
$routes->post('/client/ajaxTambahObat', 'Ajax::tambahObat');
$routes->post('/client/ajaxHapusObat', 'Ajax::hapusObat');
$routes->post('/client/ajaxPesanObat', 'Ajax::pesanObat');
$routes->post('/client/hapusAllObat', 'Ajax::hapusAllObat');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
