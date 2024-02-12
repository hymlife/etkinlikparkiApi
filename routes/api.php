<?php




use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BiletController;
use App\Http\Controllers\Api\EtkinlikController;
use App\Http\Controllers\Api\FaturaController;
use App\Http\Controllers\Api\FirmaController;
use App\Http\Controllers\Api\MekanController;
use App\Http\Controllers\Api\RezervasyonController;
use App\Http\Controllers\Api\UserController;








/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/kategori', 'ApiController@getKategoriler');
 Route::get('/mekanlar', 'ApiController@getMekanlar');
 Route::get('/gelecek-etkinlikler', 'ApiController@getGelecekEtkinlikler');
 Route::post('/tum-etkinler', 'ApiController@getTumEtkinler');
Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
Route::post('/sifre-unuttum', 'AuthController@sifreUnuttum');
Route::get('/kullanici-bilgileri', 'UserController@getKullaniciBilgileri');
Route::get('/firma-bilgileri', 'FirmaController@getFirmaBilgileri');
  Route::get('/sozlesmeler', 'ApiController@getSozlesmeler');
Route::post('/profil-resmi-guncelleme', 'UserController@profilResmiGuncelleme');
Route::get('/alt-kullanicilar', 'UserController@getAltKullanicilar');
Route::post('/alt-kullanici-olustur', 'UserController@altKullaniciOlustur');
Route::post('/sifre-degistir', 'UserController@sifreDegistir');
Route::get('/rezervasyonlarim', 'RezervasyonController@getRezervasyonlarim');
Route::get('/etkinlik-detayi/{id}', 'EtkinlikController@getEtkinlikDetayi');
Route::get('/mekan-detayi/{id}', 'MekanController@getMekanDetayi');
Route::get('/rezervasyon-detayi/{id}', 'RezervasyonController@getRezervasyonDetayi');
Route::get('/fatura-getir/{id}', 'FaturaController@getFatura');
Route::get('/bilet-getir/{id}', 'BiletController@getBilet');
Route::get('/oturma-duzeni/{id}', 'MekanController@getOturmaDuzeni');
