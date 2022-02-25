<?php

namespace Lianmaymesi\Wireblade;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Lianmaymesi\Wireblade\Components\Form;
use Lianmaymesi\Wireblade\Components\Form\Input;
use Lianmaymesi\Wireblade\Components\Form\Textarea;
use Lianmaymesi\Wireblade\Components\Icon\Bell;
use Lianmaymesi\Wireblade\Components\Icon\ChartPie;
use Lianmaymesi\Wireblade\Components\Icon\ChevronDown;
use Lianmaymesi\Wireblade\Components\Icon\ChevronRight;
use Lianmaymesi\Wireblade\Components\Icon\Menu;
use Lianmaymesi\Wireblade\Components\Icon\Moon;
use Lianmaymesi\Wireblade\Components\Icon\Sun;
use Lianmaymesi\Wireblade\Components\Icon\X;
use Lianmaymesi\Wireblade\Components\Layouts\AppLayout;
use Lianmaymesi\Wireblade\Components\Layouts\AuthLayout;
use Lianmaymesi\Wireblade\Components\Partials\DropdownLink;
use Lianmaymesi\Wireblade\Components\Partials\NavHelp;
use Lianmaymesi\Wireblade\Components\Partials\Navigation;
use Lianmaymesi\Wireblade\Components\Partials\NavItem;
use Lianmaymesi\Wireblade\Components\Tooltip;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WirebladeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('wireblade')
            ->hasConfigFile()
            ->hasViews();
    }

    public function packageBooted()
    {
        $this->configureComponents();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../public/assets' => public_path('wireblade'),
            ], 'wireblade-assets');

            $this->publishes([
                __DIR__ . './Components' => app_path('View/Components/vendor/wireblade'),
                __DIR__ . '/../resources/views/components' => resource_path('views/vendor/wireblade/components'),
            ], 'wireblade-components');
        }

        Blade::directive('wbstyles', function () {
            return \Lianmaymesi\Wireblade\Wireblade::css();
        });

        Blade::directive('wbscripts', function () {
            return \Lianmaymesi\Wireblade\Wireblade::js();
        });
    }

    protected function registerComponent(string $component, $class)
    {
        Blade::component($class, 'wb::' . $component);
    }

    protected function configureComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {

            // Layouts
            $this->registerComponent('app', AppLayout::class);
            $this->registerComponent('auth', AuthLayout::class);

            // Forms
            $this->registerComponent('form', Form::class);
            $this->registerComponent('input', Input::class);
            $this->registerComponent('textarea', Textarea::class);

            // Icons
            $this->registerComponent('icons.chart-pie', ChartPie::class);
            $this->registerComponent('icons.menu', Menu::class);
            $this->registerComponent('icons.bell', Bell::class);
            $this->registerComponent('icons.sun', Sun::class);
            $this->registerComponent('icons.moon', Moon::class);
            $this->registerComponent('icons.chevron-right', ChevronRight::class);
            $this->registerComponent('icons.chevron-down', ChevronDown::class);
            $this->registerComponent('icons.x', X::class);
            $this->registerComponent('icons.cog', Cog::class);

            // UI
            $this->registerComponent('tooltip', Tooltip::class);

            // Partials
            $this->registerComponent('notification-item', NotificationItem::class);
            $this->registerComponent('profile', Profile::class);
            $this->registerComponent('navigation', Navigation::class);
            $this->registerComponent('nav-item', NavItem::class);
            $this->registerComponent('nav-help', NavHelp::class);
            $this->registerComponent('dropdown-link', DropdownLink::class);
        });
    }
}
