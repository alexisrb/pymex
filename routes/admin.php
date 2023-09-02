<?php

use App\Http\Controllers\Admin\Campaign_StrategiesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PublicityController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VotePromotionController;
use App\Http\Controllers\Admin\ElectoralController;
use App\Http\Controllers\Admin\JuridicoController;
use App\Http\Controllers\Admin\SurveyController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\FiscalizationController;
use App\Http\Controllers\Admin\geographyinformationController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\PadronController;
use App\Http\Controllers\Admin\SignatureController;




Route::get('', [HomeController::class, 'index'])->name('admin.home');


//Users
Route::resource('users', UserController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.users');

//Publicidad
Route::resource('publicity', PublicityController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.publicity');

//Voto Promocion
Route::resource('votopromotion', VotePromotionController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.vote-promotion');

//Electoral
Route::resource('electoral', ElectoralController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.electoral');

//JuridicoS
Route::resource('juridico', JuridicoController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.juridico');

//Encuestas
Route::resource('surveys', SurveyController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.surveys');

//Redes Sociales
Route::resource('socialnet', SocialController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.socialnet');

//Fiscalizacion
Route::resource('fiscalizations', FiscalizationController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.fiscalizations');

//Informacion Geographys
Route::resource('geographys', geographyinformationController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.geographys');

//Medios de Comunicacion
Route::resource('media', MediaController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.media');

//Estrategia de campaña
Route::resource('campaign-strategies', Campaign_StrategiesController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.campaign-strategies');

//Padrones
Route::resource('padrones', PadronController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.padrones');

//Recaudacion de Firmas
Route::resource('signatures', SignatureController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.signatures');