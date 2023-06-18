<?php
namespace Yoeb\Badges;

use Illuminate\Support\ServiceProvider;

class YoebServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

}

?>
