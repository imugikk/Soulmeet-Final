<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'LandingController@index');
Route::post('/', 'LandingController@store');
Route::get('/home', 'HomeController@index');
Route::get('/kelas', 'UserKelasController@index');
Route::get('/sub-kelas', 'UserSubKelasController@index');

Auth::routes();

Route::prefix('admin')
    ->middleware(['auth', 'web'])
    ->group(function() {
        Route::get('/dashboard', 'DashboardController@adminDashboard')
        ->name('admin.dashboard');

        Route::get('/banner', 'BannerController@index')
        ->name('admin.banner');
        Route::post('/banner/store', 'BannerController@store')
        ->name('admin.banner.store');
        Route::get('/banner/delete/{id}', 'BannerController@delete')
        ->name('admin.banner.delete');
        Route::post('/banner/update/{id}', 'BannerController@updateModal')
        ->name('admin.banner.update.showModal');
        Route::get('/banner/show/{id}', 'BannerController@showModal')
        ->name('admin.banner.showModal');

        Route::get('/statistic', 'StatisticController@index')
        ->name('admin.statistic');
        Route::post('/statistic/store', 'StatisticController@store')
        ->name('admin.statistic.store');
        Route::get('/statistic/delete/{id}', 'StatisticController@delete')
        ->name('admin.statistic.delete');
        Route::post('/statistic/update/{id}', 'StatisticController@updateModalStat')
        ->name('admin.statistic.update.showModal');
        Route::get('/statistic/show/{id}', 'StatisticController@showModalStat')
        ->name('admin.statistic.showModal');
        Route::post('/statistic-detail/store', 'StatisticController@storeDetail')
        ->name('admin.statistic-detail.store');
        Route::get('/statistic-detail/{id}', 'StatisticController@show')
        ->name('admin.statistic-detail.show');
        Route::get('/statistic-detail/delete/{id}', 'StatisticController@deleteDetail')
        ->name('admin.statistic-detail.delete');
        Route::post('/statistic-detail/update/{id}', 'StatisticController@updateModal')
        ->name('admin.statistic-detail.update.showModal');
        Route::get('/statistic-detail/show/{id}', 'StatisticController@showModal')
        ->name('admin.statistic-detail.showModal');

        Route::get('/service', 'ServiceController@index')
        ->name('admin.service');
        Route::post('/service/store', 'ServiceController@store')
        ->name('admin.service.store');
        Route::get('/service/delete/{id}', 'ServiceController@delete')
        ->name('admin.service.delete');
        Route::post('/service/update/{id}', 'ServiceController@updateModalServ')
        ->name('admin.service.update.showModal');
        Route::get('/service/show/{id}', 'ServiceController@showModalServ')
        ->name('admin.service.showModal');
        Route::post('/service-detail/store', 'ServiceController@storeDetail')
        ->name('admin.service-detail.store');
        Route::get('/service-detail/{id}', 'ServiceController@show')
        ->name('admin.service-detail.show');
        Route::get('/service-detail/delete/{id}', 'ServiceController@deleteDetail')
        ->name('admin.service-detail.delete');
        Route::post('/service-detail/update/{id}', 'ServiceController@updateModal')
        ->name('admin.service-detail.update.showModal');
        Route::get('/service-detail/show/{id}', 'ServiceController@showModal')
        ->name('admin.service-detail.showModal');

        Route::get('/expert', 'ExpertController@index')
        ->name('admin.expert');
        Route::post('/expert/store', 'ExpertController@store')
        ->name('admin.expert.store');
        Route::get('/expert/delete/{id}', 'ExpertController@delete')
        ->name('admin.expert.delete');
        Route::post('/expert/update/{id}', 'ExpertController@updateModalExp')
        ->name('admin.expert.update.showModal');
        Route::get('/expert/show/{id}', 'ExpertController@showModalExp')
        ->name('admin.expert.showModal');
        Route::post('/expert-detail/store', 'ExpertController@storeDetail')
        ->name('admin.expert-detail.store');
        Route::get('/expert-detail/{id}', 'ExpertController@show')
        ->name('admin.expert-detail.show');
        Route::get('/expert-detail/delete/{id}', 'ExpertController@deleteDetail')
        ->name('admin.expert-detail.delete');
        Route::post('/expert-detail/update/{id}', 'ExpertController@updateModal')
        ->name('admin.expert-detail.update.showModal');
        Route::get('/expert-detail/show/{id}', 'ExpertController@showModal')
        ->name('admin.expert-detail.showModal');
        Route::get('/expert-detail/expert/edit/{id}', 'ExpertController@showExpertId')
        ->name('admin.expert-detail.showExpertId');
        Route::post('/expert-detail/expert/update/{id}', 'ExpertController@updateExpertIdModal')
        ->name('admin.expert-detail.expert.update.showModal');
        Route::get('/expert-detail/expert/show/{id}', 'ExpertController@showExpertIdModal')
        ->name('admin.expert-detail.expert.showModal');
        Route::post('/expert-detail/expert/store', 'ExpertController@storeExpertSosmed')
        ->name('admin.expert-detail.expert.store');

        Route::get('/pricing', 'PricingController@index')
        ->name('admin.pricing');
        Route::post('/pricing/store', 'PricingController@store')
        ->name('admin.pricing.store');
        Route::get('/pricing/delete/{id}', 'PricingController@delete')
        ->name('admin.pricing.delete');
        Route::post('/pricing/update/{id}', 'PricingController@updateModalPrice')
        ->name('admin.pricing.update.showModal');
        Route::get('/pricing/show/{id}', 'PricingController@showModalPrice')
        ->name('admin.pricing.showModal');
        Route::post('/pricing-detail/store', 'PricingController@storeDetail')
        ->name('admin.pricing-detail.store');
        Route::get('/pricing-detail/{id}', 'PricingController@show')
        ->name('admin.pricing-detail.show');
        Route::get('/pricing-detail/delete/{id}', 'PricingController@deleteDetail')
        ->name('admin.pricing-detail.delete');
        Route::post('/pricing-detail/update/{id}', 'PricingController@updateModal')
        ->name('admin.pricing-detail.update.showModal');
        Route::get('/pricing-detail/show/{id}', 'PricingController@showModal')
        ->name('admin.pricing-detail.showModal');
        Route::post('/pricing-item/store', 'PricingController@storeitem')
        ->name('admin.pricing-item.store');
        Route::get('/pricing-item/{id}', 'PricingController@showItem')
        ->name('admin.pricing-item.show');
        Route::get('/pricing-item/delete/{id}', 'PricingController@deleteitem')
        ->name('admin.pricing-item.delete');
        Route::post('/pricing-item/update/{id}', 'PricingController@updateModalItem')
        ->name('admin.pricing-item.update.showModal');
        Route::get('/pricing-item/show/{id}', 'PricingController@showModalItem')
        ->name('admin.pricing-item.showModal');

        Route::get('/faq', 'FaqController@index')
        ->name('admin.faq');
        Route::post('/faq/store', 'FaqController@store')
        ->name('admin.faq.store');
        Route::get('/faq/delete/{id}', 'FaqController@delete')
        ->name('admin.faq.delete');
        Route::post('/faq/update/{id}', 'FaqController@updateModalFaq')
        ->name('admin.faq.update.showModal');
        Route::get('/faq/show/{id}', 'FaqController@showModalFaq')
        ->name('admin.faq.showModal');
        Route::post('/faq-detail/store', 'FaqController@storeDetail')
        ->name('admin.faq-detail.store');
        Route::get('/faq-detail/{id}', 'FaqController@show')
        ->name('admin.faq-detail.show');
        Route::get('/faq-detail/delete/{id}', 'FaqController@deleteDetail')
        ->name('admin.faq-detail.delete');
        Route::post('/faq-detail/update/{id}', 'FaqController@updateModal')
        ->name('admin.faq-detail.update.showModal');
        Route::get('/faq-detail/show/{id}', 'FaqController@showModal')
        ->name('admin.faq-detail.showModal');

        Route::get('/config', 'ConfigController@index')
        ->name('admin.config');
        Route::post('/config/store', 'ConfigController@store')
        ->name('admin.config.store');
        Route::get('/config/delete/{id}', 'ConfigController@delete')
        ->name('admin.config.delete');
        Route::post('/config/update/{id}', 'ConfigController@updateModalConfig')
        ->name('admin.config.update.showModal');
        Route::get('/config/show/{id}', 'ConfigController@showModalConfig')
        ->name('admin.config.showModal');
        Route::get('/company-sosmed/{id}', 'ConfigController@show')
        ->name('admin.company-sosmed.show');
        Route::get('/company-sosmed/company/edit/{id}', 'ConfigController@showConfigId')
        ->name('admin.company-sosmed.showConfigId');
        Route::post('/company-sosmed/company/update/{id}', 'ConfigController@updateConfigIdModal')
        ->name('admin.company-sosmed.company.update.showModal');
        Route::get('/company-sosmed/company/show/{id}', 'ConfigController@showConfigIdModal')
        ->name('admin.company-sosmed.company.showModal');
        Route::post('/company-sosmed/company/store', 'ConfigController@storeConfigSosmed')
        ->name('admin.company-sosmed.company.store');

        Route::get('/message', 'MessageController@index')
        ->name('admin.message');
        Route::post('/message/store', 'MessageController@store')
        ->name('admin.message.store');

        Route::get('/kelas', 'KelasController@index')
        ->name('admin.kelas');
        Route::post('/kelas/store', 'KelasController@store')
        ->name('admin.kelas.store');
        Route::get('/kelas/delete/{id}', 'KelasController@delete')
        ->name('admin.kelas.delete');
        Route::post('/kelas/update/{id}', 'KelasController@updateModal')
        ->name('admin.kelas.update.showModal');
        Route::get('/kelas/show/{id}', 'KelasController@showModal')
        ->name('admin.kelas.showModal');
        Route::post('/bab/store', 'KelasController@storeBab')
        ->name('admin.bab.store');
        Route::get('/bab/{id}', 'KelasController@showBab')
        ->name('admin.bab.show');
        Route::get('/bab/delete/{id}', 'KelasController@deleteBab')
        ->name('admin.bab.delete');
        Route::post('/bab/update/{id}', 'KelasController@updateModalBab')
        ->name('admin.bab.update.showModal');
        Route::get('/bab/show/{id}', 'KelasController@showModalBab');
        Route::get('/kelas/fasilitas/create/{id}', 'KelasController@showFasilitas');
        Route::post('/kelas/fasilitas/store/{id}', 'KelasController@storeFasilitas');
        Route::get('/kelas/fasilitas/delete/{id}', 'KelasController@deleteFasilitas');

        Route::get('/fasilitas', 'FasilitasController@index')
        ->name('admin.fasilitas');
        Route::post('/fasilitas/store', 'FasilitasController@store')
        ->name('admin.fasilitas.store');
        Route::get('/fasilitas/delete/{id}', 'FasilitasController@delete')
        ->name('admin.fasilitas.delete');
        Route::post('/fasilitas/update/{id}', 'FasilitasController@updateModal')
        ->name('admin.fasilitas.update.showModal');
        Route::get('/fasilitas/show/{id}', 'FasilitasController@showModal')
        ->name('admin.fasilitas.showModal');
    });

Route::prefix('user')
    ->middleware(['auth', 'web'])
    ->group(function() {
        Route::get('/dashboard', 'DashboardController@userDashboard')
        ->name('dashboard.user');
    });


