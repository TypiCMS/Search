<?php

namespace TypiCMS\Modules\Search\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use TypiCMS\Modules\Core\Facades\TypiCMS;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'typicms.search');

        config(['typicms.modules.search' => ['linkable_to_page']]);

        $this->loadViewsFrom(__DIR__.'/../../resources/views/', 'search');

        $this->publishes([
            __DIR__.'/../../resources/views' => base_path('resources/views/vendor/search'),
        ], 'views');

        /*
         * Add the page in the view.
         */
        View::composer('search::public.*', function ($view) {
            $view->page = TypiCMS::getPageLinkedToModule('search');
        });
    }

    public function register(): void
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
