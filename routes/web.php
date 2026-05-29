<?php
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\MenuItemController;

/*
|--------------------------------------------------------------------------
| Public Website
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/menu', 'menu')->name('menu');


Route::view('/gallery', 'gallery')->name('gallery');

Route::view('/contact', 'contact')->name('contact');

Route::view('/reservation', 'reservation')
    ->name('reservation');

Route::view('/offers','offers')
    ->name('offers');

Route::view('/reviews','reviews')
    ->name('reviews');


/*
|--------------------------------------------------------------------------
| Customer Dashboard
|--------------------------------------------------------------------------
*/

Route::view('/customer/dashboard',
    'customer.dashboard')
    ->name('customer.dashboard');

Route::view('/customer/profile',
    'customer.profile')
    ->name('customer.profile');

Route::view('/customer/favorites',
    'customer.favorites')
    ->name('customer.favorites');

Route::view('/customer/loyalty',
    'customer.loyalty')
    ->name('customer.loyalty');

/*
|--------------------------------------------------------------------------
| Cart
|--------------------------------------------------------------------------
*/

Route::get('/cart',
    [CartController::class,'index'])
    ->name('cart');

Route::post('/cart/add/{id}',
    [CartController::class,'add'])
    ->name('cart.add');

Route::post('/cart/update/{id}',
    [CartController::class,'update'])
    ->name('cart.update');

Route::get('/cart/remove/{id}',
    [CartController::class,'remove'])
    ->name('cart.remove');

/*
|--------------------------------------------------------------------------
| Checkout
|--------------------------------------------------------------------------
*/

Route::get('/checkout',
    [CheckoutController::class,'checkout'])
    ->name('checkout');

Route::post('/place-order',
    [CheckoutController::class,'placeOrder'])
    ->name('place.order');

Route::view('/order-success',
    'order-success')
    ->name('order.success');

/*
|--------------------------------------------------------------------------
| Reservation
|--------------------------------------------------------------------------
*/

Route::post('/reservation-store',
    [ReservationController::class,'store'])
    ->name('reservation.store');

/*
|--------------------------------------------------------------------------
| Customer Orders
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/customer/orders', function () {

        $orders = Order::where(
    'user_id',
    Auth::id()
)->get();
        return view(
            'customer.orders',
            compact('orders')
        );

    })->name('customer.orders');

});

/*
|--------------------------------------------------------------------------
| Breeze Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware(['auth','verified'])
  ->name('dashboard');

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile',
        [ProfileController::class,'edit'])
        ->name('profile.edit');

    Route::patch('/profile',
        [ProfileController::class,'update'])
        ->name('profile.update');

    Route::delete('/profile',
        [ProfileController::class,'destroy'])
        ->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::middleware(['auth','admin'])
->group(function () {

    Route::view('/admin/dashboard',
        'admin.dashboard')
        ->name('admin.dashboard');

    Route::view('/admin/customers',
        'admin.customers')
        ->name('admin.customers');

    Route::view('/admin/reviews',
        'admin.reviews')
        ->name('admin.reviews');

    Route::view('/admin/offers',
        'admin.offers')
        ->name('admin.offers');

    Route::resource(
        'admin/menu-items',
        MenuItemController::class
    );

    Route::get('/admin/orders',
        [OrderController::class,'index'])
        ->name('admin.orders');

    Route::get('/admin/analytics',
        [AdminController::class,'analytics'])
        ->name('admin.analytics');

});

/*
|--------------------------------------------------------------------------
| Reviews
|--------------------------------------------------------------------------
*/

Route::view('/reviews', 'reviews')
    ->name('reviews');

/*
|--------------------------------------------------------------------------
| Offers
|--------------------------------------------------------------------------
*/

Route::view('/offers', 'offers')
    ->name('offers');
/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
