<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/artikel', 'HomeController@artikel');
Route::get('/panduan', 'HomeController@panduan');
Route::get('/direktori', 'HomeController@direktori');
Route::get('/polling', 'HomeController@polling');
Route::get('/polling/detail/{id}', 'HomeController@pollingdetail');
Route::get('/rekap', 'HomeController@rekap');
Route::get('/daftar-pemenang', 'HomeController@daftarpemenang');
Route::get('/tentang', 'HomeController@tentang');
Route::get('/pendaftaran', 'HomeController@pendaftaran');
Route::get('/polling/login/{id}', 'HomeController@pollingLogin');
Route::get('/cetak', 'UserController@getPdf');
Route::get('/sendmail','HomeController@sendMail');
Route::get('konfirmasi/{token}/{email}','HomeController@konfirmasiVoting');
Route::post('/polling/login', 'HomeController@pollingStore');
Route::get('/polling/kat/{kat}', 'HomeController@pollingKat');
Route::get('/polling/kab/{kab}', 'HomeController@pollingKab');
Route::get('/artikel/{id}/show','HomeController@showArtikel');
Route::post('/artikel/cari','HomeController@cariArtikel');
Route::get('/cetakkues/{id}','AdminController@cetakkues');
Route::auth();
Route::group([
  'middleware'=>['auth']] ,function(){
    Route::get('/admin/editprofil/{id}', 'AdminController@editinventor');
    Route::get('/inventor/editprofil', 'InventorController@edit');
    Route::get('/inventor/resetpassword', 'InventorController@resetpassword');
    Route::post('/inventor/resetpassword', 'InventorController@storepassword');
    Route::get('/admin/resetpassword', 'AdminController@resetpassword');
    Route::post('/admin/resetpassword', 'AdminController@storepassword');
    Route::get('/superadmin/resetpassword', 'SuperadminController@resetpassword');
    Route::post('/superadmin/resetpassword', 'SuperadminController@storepassword');
    Route::patch('/admin/updateprofil/{id}', 'AdminController@updateprofil');
    Route::post('/admin/deletesprofil/{id}', 'AdminController@deletesprofil');
    Route::get('/inventor/draft/{id}','ProposalController@draft');
    Route::get('/admin/draft/{id}','AdminController@draft');
    Route::get('/admin/datainventor', 'AdminController@datainventor');
    Route::get('/admin/dataproposal', 'AdminController@dataproposal');
    Route::get('/admin/reviewproposal', 'AdminController@reviewproposal');
    Route::get('/admin/lihatproposal/{id}', 'AdminController@lihatproposal');
    Route::get('/admin/cetakproposal/{id}', 'AdminController@cetakproposal');
    Route::get('/inventor/cetakproposal/{id}', 'InventorController@cetakproposal');
    Route::patch('/adminprofil', 'AdminController@adminprofil');
    Route::patch('/admin/approveproposal/{id}', 'AdminController@approveproposal');
    //superadmin dashboard
    Route::get('/superadmin/listproposal', 'SuperadminController@listproposal');
    Route::get('/superadmin/cheklist/{id}', 'SuperadminController@cheklist');
    Route::get('/superadmin/publish/{id}', 'SuperadminController@publishproposal');
    Route::get('/superadmin/unpublish/{id}', 'SuperadminController@unpublishproposal');
    Route::get('/superadmin/hasilvoting', 'SuperadminController@hasilvoting');
    Route::get('/superadmin/daftarpeserta', 'SuperadminController@daftarpeserta');
    Route::get('/superadmin/rekappenilaian', 'SuperadminController@rekappenilaian');
    Route::get('/superadmin/cetakproposal/{id}', 'SuperadminController@cetakproposal');
    
    Route::get('/superadmin/detailproposal/{id}', 'SuperadminController@detailproposal');
    Route::get('/superadmin/daftarkabupaten', 'SuperadminController@daftarkabupaten');
    Route::get('/superadmin/vote', 'SuperadminController@vote');
    Route::get('/superadmin/pemenang','SuperadminController@pemenang' );
    Route::get('/superadmin/detailkuesadmin/{id}', 'SuperadminController@detailkuesadmin');

    //juri dashboard
    Route::get('/juri/profil','JuriController@profil' );
    Route::get('/juri/datapeserta','JuriController@datapeserta' );
    Route::get('/juri/formatpenilaian','JuriController@formatpenilaian' );
    Route::get('/juri/resetpassword', 'JuriController@resetpassword');
    Route::post('/juri/storepassword', 'JuriController@storepassword');

    Route::resources([
    'superadmin' => 'SuperadminController',
    'inventor' => 'InventorController',
    'admin' => 'AdminController',
    'juri' => 'JuriController',
    'permission' =>'PermissionController',
    'role' => 'RoleController',
    'proposal' => 'ProposalController',
    'user' => 'UserController',
    'adminkuesioner' => 'AdminkuesionerController',
    'pengantarkota' => 'PengantarkotaController',
    'kabupaten' => 'KabupatenController',
    'kategoriberita' => 'KategoriberitaController',
    'panduansuperadmin' => 'PanduanController',
    'slider' => 'SliderController',
    'footer' => 'FooterController',
    'article' => 'ArticleController',
    'daftarpemenang' => 'DaftarpemenangController'
  ]);  
});



