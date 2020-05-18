<?php

namespace ConfrariaWeb\TemplateAdminDefault\Providers;

use Illuminate\Support\ServiceProvider;

class TemplateAdminDefaultServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'templateAdminDefault');
        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/template-admin-default'),
        ], 'public');
    }

    public function register()
    {
        
    }
}
