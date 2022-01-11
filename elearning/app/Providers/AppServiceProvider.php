<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\TaiKhoan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //]
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $countAdmin= TaiKhoan::where('ID_LoaiTaiKhoan',1)->count();
        $countStudent= TaiKhoan::where('ID_LoaiTaiKhoan',2)->count();
        $countTeacher= TaiKhoan::where('ID_LoaiTaiKhoan',3)->count();
        view()->composer('layouts.masteradmin', function($view)use ($countAdmin,$countStudent,$countTeacher)
        {
            $view->with('countAdmin', $countAdmin)
            ->with('countStudent', $countStudent)
            ->with('countTeacher', $countTeacher);
        });
    }
}
