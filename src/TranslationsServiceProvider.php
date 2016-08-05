<?php

namespace Bunta\Translations;

/**
 * 
 * @author 
 */
use Illuminate\Support\ServiceProvider;

class TranslationsServiceProvider extends ServiceProvider {

    public function boot() {
        $this->publishes([
            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
                ], 'migrations');
        $this->publishes([
            __DIR__ . '/config' => config_path()
                ], 'config');
        //dump('TranslationServiceprovider boot');
    }

    public function register() {
        //dump('TranslationServiceprovider register');
    }

}
