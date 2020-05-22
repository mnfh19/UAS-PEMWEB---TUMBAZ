<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::directive('money', function ($amount) {
            
            $rup = (float) $amount;
            $hasil_rupiah = "Rp " . number_format($rup,2,',','.');
            return "<?php echo $hasil_rupiah ?>";
        });
    }
}
