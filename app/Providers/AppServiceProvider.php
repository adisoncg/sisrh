<?php

namespace App\Providers;

use App\Models\Departamento;
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
        $departamentos = Departamento::select('id', 'nome')->orderBy('nome', 'asc')->get();
        view()->share('departamentos', $departamentos);
    }
}
