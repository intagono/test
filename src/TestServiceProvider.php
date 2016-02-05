<?php namespace Intagono\Test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/migrations' => base_path('database/migrations')
		], 'migrations');

		$this->publishes([
			__DIR__.'/models' => app_path('models')
		], 'migrations');

		$this->publishes([
			__DIR__.'/views' => base_path('resources/views/intagono/test'),
		]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->make('Intagono\Test\TestController');

		include __DIR__.'/routes.php';
	}

}
