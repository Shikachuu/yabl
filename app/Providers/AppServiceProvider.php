<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
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
        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::shouldBeStrict();

        Builder::macro(
            'search',
            function (string $field, ?string $string) {
                return empty($string) === false ? $this->whereFullText($field, $string) : $this;
            }
        );

        Builder::macro(
            'exactFilter',
            function (string $field, mixed $value) {
                return empty($value) === false ? $this->where($field, '=', $value) : $this;
            }
        );
    }
}
