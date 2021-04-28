<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use rohsyl\OmegaCore\Utils\Overt\Facades\OmegaTheme;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        OmegaTheme::setThemePath(resource_path() . '/theme/main');
        OmegaTheme::setInstallerPath('install/install.php');
        OmegaTheme::setTemplateRegisterPath('template/register.php');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
