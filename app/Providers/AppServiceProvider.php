<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use App\Models\ProviderUser_Provider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view()->composer(
            'provider.layouts.default',
            function ($view)
            {
                $authId = Auth::guard('provider')->id();
                $data['userInfo'] = ProviderUser_Provider::where('valid', 1)->find($authId);
                $view->with($data);
            }
        );
    }
}
