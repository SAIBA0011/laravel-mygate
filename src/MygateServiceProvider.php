<?php

namespace Gbotha\Mygate;

use Illuminate\Support\ServiceProvider;

class MygateServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishMigrations();
        $this->publishConfig();
        $this->publishModels();
        $this->loadViews();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Publish Config File
     */
    private function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/config' => config_path('')
        ], 'config');
    }

    /**
     * Publish Migrations
     */
    private function publishMigrations()
    {
        $this->publishes([
            __DIR__ . '/migrations' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Publish Models
     */
    private function publishModels()
    {
        $this->publishes([
            __DIR__ . '/models' => app_path('mygate')
        ], 'models');
    }

    /**
     * Load Views
     */
    private function loadViews()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'Mygate');
    }
}