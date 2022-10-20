<?php

namespace App\Providers;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
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
