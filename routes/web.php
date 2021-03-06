<?php

Route::get('/','HomeController@index');
Route::post('/', 'HomeController@contact_us')->name('contact_us');
Route::get('/recharge','RechargeController@recharge')->name('recharge');
Route::post('/recharge','RechargeController@recharge_order')->name('recharge_order');
Route::get('/forget-password', 'HomeController@forgot_password')->name('forgot_password');
Route::post('/forgot-password', 'HomeController@forgot_password_otp')->name('forgot_password_otp');
Route::post('verify-otp', 'HomeController@verify_otp')->name('verify_otp');
Route::post('reset-password-save', 'HomeController@reset_password_save')->name('reset_password_save');
Route::get('/events', 'HomeController@events')->name('events');
Route::get('/events-int', 'HomeController@events_int')->name('events_int');
Route::get('/invoicefinal','HomeController@invoicefinal');
Route::get('/parental-consent-form','HomeController@parental_consent_form');
Route::get('/contactless/payment/{token}','HomeController@contactless_payment');
Route::get('/games/{games_id}','HomeController@games');
Route::get('/all-games','HomeController@all_games');
Route::get('/booking/{SubProductGUID}/{ProductFamilyGUID}/{StoreGUID}/{date}','HomeController@booking');
Route::get('/booking-golf/{SubProductGUID}/{ProductFamilyGUID}/{StoreGUID}/{date}/{ProductType}/{bay}','HomeController@booking_golf');
Route::get('/cart','HomeController@cart');
Route::post('/cart','HomeController@add_to_cart');
Route::post('/golf-cart','HomeController@add_to_cart_golf');
Route::post('/checkout','HomeController@checkout');
Route::post('/golf-checkout','HomeController@golf_checkout');
Route::post('/cart-golf','HomeController@add_to_cart_golf');
Route::delete('remove-from-cart', 'HomeController@remove_cart_product');
Route::post('/get-price','HomeController@get_price');
Route::post('/get-price-golf','HomeController@get_price_golf');
Route::get('/wavier-tc','MainController@wavier_form')->name('wavier');
Route::post('/wavier-tc','MainController@wavier_form_post')->name('wavierpost');
Route::get('/thankyou','MainController@thankyou')->name('thankyou');
Route::get('/thanks','HomeController@thanks')->name('thanks');
Route::get('/order','MainController@order')->name('order');
Route::get('/profile','MainController@profile')->name('profile');
Route::post('/load-more-order','MainController@load_more_order')->name('load_more_order');
Route::post('/invoice-generate','MainController@invoice_generate')->name('invoice_generate');
Route::post('/resend-otp','PhoneVerificationController@resend_otp')->name('resend_otp');
Route::post('/enq-now','HomeController@enq_now')->name('enq_now');
Route::get('/invoice-generate-view/{id}/{sid}','MainController@invoice_generate_view')->name('invoice_generate_view');
Route::get('/invoice-generate-offline-view/{sid}/{custid}','ApiController@invoice_generate_view')->name('invoice_generate_view_offline');
Route::get('/blogin','Auth\LoginController@blogin');
Route::post('/blogin','Auth\LoginController@bloginpost')->name('bloginpost');
Route::get('/timer','HomeController@timer');
Route::get('/check-session','HomeController@session_check');
Route::get('/clear-cart','HomeController@clear_cart');
Route::post('/cancel/order/data', ['as' => 'cancelt.order', 'uses' => 'HomeController@cancel_ordert']);
Route::get('/payment', ['as' => 'payment', 'uses' => 'PaymentController@payment']);
Route::get('/payment/status', ['as' => 'payment.status', 'uses' => 'PaymentController@status']);
Route::post('/contactless-payment', ['as' => 'paymentone', 'uses' => 'HomeController@contactless_payment_red']);
Route::get('/payment/contactless/status', ['as' => 'payment.statusone', 'uses' => 'HomeController@contactless_status']);
Route::get('/payment/recharge/status', ['as' => 'payment.recharge_status', 'uses' => 'MainController@contactless_status']);
Route::get('/cancel/order','MainController@cancel_order_view')->name('cancel_order_view');
Route::post('/cancel/order', ['as' => 'cancel.order', 'uses' => 'MainController@cancel_order']);
Route::put('/update-password', ['as' => 'update-password', 'uses' => 'MainController@updatePassword']);
Route::get('/parties-and-events','HomeController@parties_and_events');
Route::get('/career','HomeController@career');
Route::get('/partnership','HomeController@partnership');
Route::get('/parties-and-events','HomeController@parties_and_events');
Route::get('/safety-and-sanatization-procedures','HomeController@safety');
Route::get('/freeroam','HomeController@freeroam');
Route::get('/golf','HomeController@golf');
Route::get('/business','HomeController@business');
Route::get('/golf','HomeController@golf');
Route::get('/booking1','HomeController@booking');
Route::get('/about','HomeController@about');
Route::get('/gamergoddesses','HomeController@gamergodness');
Route::post('/gamergodness-post','HomeController@gamergodness_save')->name('gamergodness');
Route::get('/gamergoddesses-thanks','HomeController@gamergodness_thanks');
Route::get('/media','HomeController@media');
Route::get('/oculus','HomeController@oculus');
Route::get('/ps4','HomeController@ps4');
Route::get('/contact','HomeController@contact');
Route::get('/deals','HomeController@deals');
Route::get('/invoiceterms','HomeController@invoiceterms');
Route::get('/resetpassword','HomeController@resetpassword');
Route::get('phone/verify', 'PhoneVerificationController@show')->name('phoneverification.notice');
Route::post('phone/verify', 'PhoneVerificationController@verify')->name('phoneverification.verify');
Route::post('build-twiml/{code}', 'PhoneVerificationController@buildTwiMl')->name('phoneverification.build');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');