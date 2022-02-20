<?php

namespace Lianmaymesi\Wireblade\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lianmaymesi\Wireblade\WirebladeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Lianmaymesi\\Wireblade\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            WirebladeServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_wireblade_table.php.stub';
        $migration->up();
        */
    }
}
