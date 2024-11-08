<?php

namespace Lianmaymesi\Wireblade;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Lianmaymesi\Wireblade\Components\Form;
use Lianmaymesi\Wireblade\Components\Form\Checkbox;
use Lianmaymesi\Wireblade\Components\Form\FileInput;
use Lianmaymesi\Wireblade\Components\Form\Input;
use Lianmaymesi\Wireblade\Components\Form\Select;
use Lianmaymesi\Wireblade\Components\Form\TagsInput;
use Lianmaymesi\Wireblade\Components\Form\Textarea;
use Lianmaymesi\Wireblade\Components\Form\Trix;
use Lianmaymesi\Wireblade\Components\Icon\Bell;
use Lianmaymesi\Wireblade\Components\Icon\ChartPie;
use Lianmaymesi\Wireblade\Components\Icon\ChevronDown;
use Lianmaymesi\Wireblade\Components\Icon\ChevronRight;
use Lianmaymesi\Wireblade\Components\Icon\Cog;
use Lianmaymesi\Wireblade\Components\Icon\Menu;
use Lianmaymesi\Wireblade\Components\Icon\Moon;
use Lianmaymesi\Wireblade\Components\Icon\Sun;
use Lianmaymesi\Wireblade\Components\Icon\X;
use Lianmaymesi\Wireblade\Components\Layouts\AppLayout;
use Lianmaymesi\Wireblade\Components\Layouts\AuthLayout;
use Lianmaymesi\Wireblade\Components\Links\AnchorLink;
use Lianmaymesi\Wireblade\Components\Links\ButtonLink;
use Lianmaymesi\Wireblade\Components\Modal;
use Lianmaymesi\Wireblade\Components\Modal\Dialog;
use Lianmaymesi\Wireblade\Components\Notification;
use Lianmaymesi\Wireblade\Components\Partials\AuthLayoutContent;
use Lianmaymesi\Wireblade\Components\Partials\DropdownLink;
use Lianmaymesi\Wireblade\Components\Partials\NavHelp;
use Lianmaymesi\Wireblade\Components\Partials\Navigation;
use Lianmaymesi\Wireblade\Components\Partials\NavItem;
use Lianmaymesi\Wireblade\Components\Partials\NotificationItem;
use Lianmaymesi\Wireblade\Components\Partials\Profile;
use Lianmaymesi\Wireblade\Components\Table;
use Lianmaymesi\Wireblade\Components\Table\Cell;
use Lianmaymesi\Wireblade\Components\Table\Heading;
use Lianmaymesi\Wireblade\Components\Table\Row;
use Lianmaymesi\Wireblade\Components\Tooltip;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WirebladeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__ . '/../public/vendor/wireblade' => public_path('vendor/wireblade'),
            ], ['wireblade-assets']);

            $this->publishes([
                __DIR__ . '/../public/assets' => public_path('vendor/wireblade-assets'),
            ], 'wireblade-external-assets');

            $this->publishes([
                __DIR__ . './Components' => app_path('View/Components/vendor/wireblade'),
                __DIR__ . '/../resources/views/components' => resource_path('views/vendor/wireblade/components'),
            ], 'wireblade-components');
        }

        $package
            ->name('wireblade')
            ->hasConfigFile()
            ->hasViews();
    }

    public function packageBooted()
    {
        $this->configureComponents();

        Blade::directive('trixCss', function () {
            return \Lianmaymesi\Wireblade\Wireblade::trixCss();
        });

        Blade::directive('trixJs', function () {
            return \Lianmaymesi\Wireblade\Wireblade::trixJs();
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
            $this->registerComponent('select', Select::class);
            $this->registerComponent('file', FileInput::class);
            $this->registerComponent('checkbox', Checkbox::class);
            $this->registerComponent('tags-input', TagsInput::class);
            $this->registerComponent('trix', Trix::class);

            // Links
            $this->registerComponent('links.anchor', AnchorLink::class);
            $this->registerComponent('links.button', ButtonLink::class);

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
            $this->registerComponent('modal', Modal::class);
            $this->registerComponent('dialog', Dialog::class);
            $this->registerComponent('table', Table::class);
            $this->registerComponent('cell', Cell::class);
            $this->registerComponent('heading', Heading::class);
            $this->registerComponent('row', Row::class);
            $this->registerComponent('notification', Notification::class);

            // Partials
            $this->registerComponent('notification-item', NotificationItem::class);
            $this->registerComponent('profile', Profile::class);
            $this->registerComponent('navigation', Navigation::class);
            $this->registerComponent('nav-item', NavItem::class);
            $this->registerComponent('nav-help', NavHelp::class);
            $this->registerComponent('dropdown-link', DropdownLink::class);
            $this->registerComponent('auth-layout-content', AuthLayoutContent::class);
        });
    }
}
