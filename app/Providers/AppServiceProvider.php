<?php

namespace App\Providers;

use App\Models\Departamento;
use Exception;
use Illuminate\Support\ServiceProvider;
use illuminate\pagination\Paginator;

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
      Paginator::useBootstrapFive();
      Paginator::useBootstrapFour();  
      try{
        $departamentos = Departamento::select('id', 'nome')->orderBy('nome', 'asc')->get();
        view()->share('departamentos', $departamentos);
      }catch(Exception $e){
        echo "Exceção capturada no boot: ". $e->getMessage();
      }
  
    }
}
