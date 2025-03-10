<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryDetailController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParticipantReleaseController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\PlatformDetailController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\PromotionDetailController;
use App\Http\Controllers\RechargeTarjetController;
use App\Http\Controllers\ReleaseController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SaleDetailController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideogameController;
use App\Http\Controllers\VideogameTotalController;
//Reportes
use App\Http\Controllers\SaleReportController;
use App\Http\Controllers\CategoryDetailReportController;
use App\Http\Controllers\DeveloperReportController;
use App\Http\Controllers\ParticipantReleaseReportController;
use App\Http\Controllers\PlatformDetailReportController;
use App\Http\Controllers\PromotionDetailReportController;
use App\Http\Controllers\PromotionReportController;
use App\Http\Controllers\RechargeTarjetReportController;
use App\Http\Controllers\ReleaseReportController;
use App\Http\Controllers\SupplierReportController;
use App\Http\Controllers\VideogameReportController;
use App\Http\Controllers\UserReportController;
use App\Http\Controllers\ExploreController;
//
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//Graficos
//API
use App\Http\Controllers\APIController;
use App\Http\Controllers\CartController; // vista de carrito

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/explore', [ExploreController::class, 'index'])->name('explore.index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas para Administradores
Route::middleware('auth','role:admin')->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('category_details', CategoryDetailController::class);
    Route::resource('developers', DeveloperController::class);
    Route::resource('participant_releases', ParticipantReleaseController::class);
    Route::resource('payment_methods', PaymentMethodController::class);
    Route::resource('platforms', PlatformController::class);
    Route::resource('platform_details', PlatformDetailController::class);
    Route::resource('promotions', PromotionController::class);
    Route::resource('promotion_details', PromotionDetailController::class);
    Route::resource('recharge_tarjets', RechargeTarjetController::class);
    Route::resource('releases', ReleaseController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('sale_details', SaleDetailController::class);
    Route::resource('suppliers', SupplierController::class);
    Route::resource('users', UserController::class);
    Route::resource('videogames', VideogameController::class);
    Route::resource('videogame_totals', VideogameTotalController::class);

    // Rutas para Reportes del administrador
    //sale_details
    Route::get('report/sale/pdf', [SaleReportController::class, 'exportPdf'])->name('report.sale.pdf');
    Route::get('report/sale/excel', [SaleReportController::class, 'exportExcel'])->name('report.sale.excel');
    //category_details
    Route::get('report/category/pdf', [CategoryDetailReportController::class, 'exportPdf'])->name('report.category.pdf');
    Route::get('report/category/excel', [CategoryDetailReportController::class, 'exportExcel'])->name('report.category.excel');
    //developers
    Route::get('report/developer/pdf', [DeveloperReportController::class, 'exportPdf'])->name('report.developer.pdf');
    Route::get('report/developer/excel', [DeveloperReportController::class, 'exportExcel'])->name('report.developer.excel');
    //participant_releases
    Route::get('report/participant_release/pdf', [ParticipantReleaseReportController::class, 'exportPdf'])->name('report.participant_release.pdf');
    Route::get('report/participant_release/excel', [ParticipantReleaseReportController::class, 'exportExcel'])->name('report.participant_release.excel');
    //platform_details
    Route::get('report/platform_details/pdf', [PlatformDetailReportController::class, 'exportPdf'])->name('report.platform_details.pdf');
    Route::get('report/platform_details/excel', [PlatformDetailReportController::class, 'exportExcel'])->name('report.platform_details.excel');
    //promotion_details
    Route::get('report/promotion_details/pdf', [PromotionDetailReportController::class, 'exportPdf'])->name('report.promotion_details.pdf');
    Route::get('report/promotion_details/excel', [PromotionDetailReportController::class, 'exportExcel'])->name('report.promotion_details.excel');
    //promotions
    Route::get('report/promotions/pdf', [PromotionReportController::class, 'exportPdf'])->name('report.promotions.pdf');
    Route::get('report/promotions/excel', [PromotionReportController::class, 'exportExcel'])->name('report.promotions.excel');
    //recharge_tarjets
    Route::get('report/recharge_tarjets/pdf', [RechargeTarjetReportController::class, 'exportPdf'])->name('report.recharge_tarjets.pdf');
    Route::get('report/recharge_tarjets/excel', [RechargeTarjetReportController::class, 'exportExcel'])->name('report.recharge_tarjets.excel');
    //releases
    Route::get('report/releases/pdf', [ReleaseReportController::class, 'exportPdf'])->name('report.releases.pdf');
    Route::get('report/releases/excel', [ReleaseReportController::class, 'exportExcel'])->name('report.releases.excel');
    //suppliers
    Route::get('report/suppliers/pdf', [SupplierReportController::class, 'exportPdf'])->name('report.suppliers.pdf');
    Route::get('report/suppliers/excel', [SupplierReportController::class, 'exportExcel'])->name('report.suppliers.excel');
    //videogames
    Route::get('report/videogames/pdf', [VideogameReportController::class, 'exportPdf'])->name('report.videogames.pdf');
    Route::get('report/videogames/excel', [VideogameReportController::class, 'exportExcel'])->name('report.videogames.excel');
    //users
    Route::get('report/users/pdf', [UserReportController::class, 'exportPdf'])->name('report.users.pdf');
    Route::get('report/users/excel', [UserReportController::class, 'exportExcel'])->name('report.users.excel');
});

// Rutas para Clientes
Route::middleware(['auth', 'role:customer'])->group(function () {
    // Rutas del perfil
    Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
    Route::get('/profiles/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
    Route::patch('/profiles/update', [ProfileController::class, 'update'])->name('profiles.update');

    // Rutas de la lista de deseos
    Route::get('/wishlists', [WishlistController::class, 'index'])->name('wishlists.index');
    Route::post('/wishlists/add/{videogameId}', [WishlistController::class, 'add'])->name('wishlists.add');
    Route::delete('/wishlists/remove/{videogameId}', [WishlistController::class, 'remove'])->name('wishlists.remove');
    Route::delete('/wishlists/clear', [WishlistController::class, 'clear'])->name('wishlists.clear');
});

//Ruta grafico
Route::get('/graphic_sale_details', function () { return view('graphics/saledetails'); });
Route::get('/graphic_promotions', function () { return view('graphics/promotions'); });
Route::get('/graphic_recharge_tarjets', function () { return view('graphics/rechargetarjets'); });

//Rutas API externa
Route::get('/discover', [APIController::class, 'index'])->name('discover.index');

//Rutas para el carrito
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('carts.index');
    Route::post('/cart/add/{videogameId}', [CartController::class, 'add'])->name('carts.add');
    Route::patch('/cart/update/{itemId}', [CartController::class, 'update'])->name('carts.update');
    Route::delete('/cart/remove/{itemId}', [CartController::class, 'remove'])->name('carts.remove');
    Route::delete('/cart/clear', [CartController::class, 'clear'])->name('carts.clear');
});