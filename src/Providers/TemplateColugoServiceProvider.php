<?php

namespace ConfrariaWeb\TemplateColugo\Providers;

use ConfrariaWeb\TemplateColugo\Services\TemplateColugoService;
use Illuminate\Support\ServiceProvider;

class TemplateColugoServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../Translations', 'templateColugo');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'templateColugo');
        $this->publishes([__DIR__ . '/../../config/cw_template_colugo.php' => config_path('cw_template_colugo.php')], 'config');
        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/confrariaweb/template-colugo'),
        ], 'public');
    }

    public function register()
    {
        $this->app->bind('TemplateColugoService', function ($app) {
            return new TemplateColugoService();
        });
    }
}
