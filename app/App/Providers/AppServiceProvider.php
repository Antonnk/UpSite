<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Support\View\Components\ButtonViewComponent;
use Support\View\Components\DescriptionListViewComponent;
use Support\View\Components\FormViewComponent;
use Support\View\Components\InputViewComponent;
use Support\View\Components\SectionViewComponent;
use Support\View\Components\TableViewComponent;

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
        Blade::component('x-form', FormViewComponent::class);
        Blade::component('description-list', DescriptionListViewComponent::class);
        Blade::component('table-component', TableViewComponent::class);
        Blade::component('button', ButtonViewComponent::class);
        Blade::component('input', InputViewComponent::class);
        Blade::component('x-section', SectionViewComponent::class);
    }
}
