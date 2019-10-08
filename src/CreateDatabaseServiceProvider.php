<?php

namespace MarceloCorrea\LaravelCreateDatabase;

use App\Console\Commands\Database;
use Illuminate\Support\ServiceProvider;

class CreateDatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Database::class,
            ]);
        }
    }
}
