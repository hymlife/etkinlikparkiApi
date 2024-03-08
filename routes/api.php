<?php




use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiletController;
use App\Http\Controllers\EtkinlikController;
use App\Http\Controllers\FaturaController;
use App\Http\Controllers\FirmaController;
use App\Http\Controllers\MekanController;
use App\Http\Controllers\RezervasyonController;
use App\Http\Controllers\UserController;

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


Route::get('/kategoriler', [ApiController::class, 'getKategoriler']);
Route::get('/mekanlar', [ApiController::class, 'getMekanlar']);
Route::get('/gelecek-etkinlikler', [ApiController::class, 'getGelecekEtkinlikler']);
Route::get('/tum-etkinlikler', [ApiController::class, 'getTumEtkinler']);
Route::get('/etkinlik-filtre', [ApiController::class, 'getEtkinlikFiltreCategory']);

Route::get('/sozlesmeler', [ApiController::class, 'getSozlesmeler']);
Route::get('/banners', [ApiController::class, 'getBanners']);


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/sifre-unuttum', [AuthController::class, 'sifreUnuttum']);

Route::get('/kullanici-bilgileri', [UserController::class, 'getKullaniciBilgileri']);
Route::post('/profil-resmi-guncelleme', [UserController::class, 'profilResmiGuncelleme']);
Route::get('/alt-kullanicilar', [UserController::class, 'getAltKullanicilar']);
Route::post('/alt-kullanici-olustur', [UserController::class, 'altKullaniciOlustur']);
Route::post('/sifre-degistir', [UserController::class, 'sifreDegistir']);

Route::get('/rezervasyonlarim', [RezervasyonController::class, 'getRezervasyonlarim']);
Route::get('/rezervasyon-detayi/{id}', [RezervasyonController::class, 'getRezervasyonDetayi']);

Route::get('/mekan-detayi/{id}', [MekanController::class, 'getMekanDetayi']);
Route::get('/oturma-duzeni/{id}', [MekanController::class, 'getOturmaDuzeni']);

Route::get('/firma-bilgileri', [FirmaController::class, 'getFirmaBilgileri']);

Route::get('/etkinlik-detayi/{id}', [EtkinlikController::class, 'getEtkinlikDetayi']);

Route::get('/fatura-getir/{id}', [FaturaController::class, 'getFatura']);

Route::get('/bilet-getir/{id}', [BiletController::class, 'getBilet']);

