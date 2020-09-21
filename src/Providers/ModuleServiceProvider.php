<?php

namespace TypiCMS\Modules\Search\Providers;

use Illuminate\Support\ServiceProvider;
use TypiCMS\Modules\Core\Facades\TypiCMS;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $modules = $this->app['config']['typicms']['modules'];
        $this->app['config']->set('typicms.modules', array_merge(['search' => ['linkable_to_page']], $modules));

        $this->loadViewsFrom(__DIR__.'/../resources/views/', 'search');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'search');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/search'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('search.php'),
        ], 'config');

        /*
         * Add the page in the view.
         */
        $app->view->composer('search::public.*', function ($view) {
            $view->page = TypiCMS::getPageLinkedToModule('search');
        });
    }

    public function register()
    {
        $app = $this->app;

        /*
         * Register route service provider
         */
        $app->register(RouteServiceProvider::class);
    }
}
