<?php

namespace Komtcho\Laravel\Checkline;

use Illuminate\Support\ServiceProvider;
use Komtcho\Laravel\Checkline\Views\Components\Checkline;

class ChecklineServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'komtcho-checkline');

        $this->loadViewComponentsAs('komtcho', [Checkline::class]);
    }
}
