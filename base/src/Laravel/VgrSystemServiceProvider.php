<?php
	namespace VgrSystem\Base\Laravel;

	use Illuminate\Support\ServiceProvider;

	class VgrSystemServiceProvider extends ServiceProvider
	{
		public function boot()
		{
			$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		}
	}
?>