<?php

namespace CreateDatabase\Providers;

use CreateDatabase\Console\Commands\Database;
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
        $this->commands([Database::class]);
    }
}
