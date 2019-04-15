<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Pref;
use App\Project;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        try {
            DB::connection()->getPdo();
             $data['pref'] = Pref::find(1);
            $data['projects'] = Project::all();

                 View::share('data',$data );
        } catch (\Exception $e) {
          //  die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
