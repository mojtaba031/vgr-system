<?php

namespace VgrSystem\Laravel;

use Illuminate\Support\ServiceProvider;
use VgrSystem\Base;

class VgrSystemServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->app->singleton('VgrSystem', function(){
            return new Base();
        });
    }
}
