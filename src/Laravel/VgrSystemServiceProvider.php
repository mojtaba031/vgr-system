<?php

namespace VgrSystem\Laravel;

use Illuminate\Support\ServiceProvider;
use VgrSystem\Base;

class VgrSystemServiceProvider extends ServiceProvider
{
	public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/vgrsystem.php', 'vgrsystem' );
    }
	
    public function boot()
    {
		$this->publishes([ __DIR__.'/config/vgrsystem.php' => config_path('vgrsystem.php') ]);
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->app->singleton('VgrSystem', function(){
            return new Base();
        });
    }
}
