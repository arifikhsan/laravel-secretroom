<?php

namespace Arifikhsan\LaravelSecretroom;

use Arifikhsan\LaravelSecretroom\app\Views\Components\ApplicationLogo;
use Arifikhsan\LaravelSecretroom\app\Views\Components\Button;
use Illuminate\Support\ServiceProvider;

class LaravelSecretroomServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
//    $this->loadViewComponentsAs('secretroom', [
//      ApplicationLogo::class,
//      Button::class,
//    ]);

    $this->loadViewsFrom(__DIR__ . '/resources/views/components', 'components');
    $this->loadViewsFrom(__DIR__ . '/resources/views/layouts', 'layouts');
    $this->loadViewsFrom(__DIR__ . '/resources/views/secretroom', 'secretroom');
    include __DIR__ . '/routes/web.php';
  }
}
