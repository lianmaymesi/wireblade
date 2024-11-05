# A simple Plain Admin UI for laravel using Tailwind CSS & Alpinejs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lianmaymesi/wireblade.svg?style=flat-square)](https://packagist.org/packages/lianmaymesi/wireblade)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lianmaymesi/wireblade/run-tests?label=tests)](https://github.com/lianmaymesi/wireblade/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lianmaymesi/wireblade/Check%20&%20fix%20styling?label=code%20style)](https://github.com/lianmaymesi/wireblade/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lianmaymesi/wireblade.svg?style=flat-square)](https://packagist.org/packages/lianmaymesi/wireblade)

![WireBlade](https://github.com/lianmaymesi/wireblade/blob/main/public/assets/images/v000001.jpg?raw=true)

WireBlade is a collection of components like forms, icons, layouts which are built by using Tailwind CSS and AlpineJS. The main purpose of this package is using for my projects. If you like this package, give it a try and send your feedback. Please be kind to me, I don't have much experiences, I am just trying myself by watching & learning tutorials. Thanks to all.

## Installation

You can install the package via composer:

```bash
composer require lianmaymesi/wireblade
```

Optionaly, you can publish the layouts for customizing:

```bash
php artisan vendor:publish --tag="wireblade-views"
```

Mandatory if you use trix editor, it helps to configure the storage disk:

```bash
php artisan vendor:publish --tag="wireblade-config"
```

Optionaly, you can publish the components views & classes:

```bash
php artisan vendor:publish --tag="wireblade-components"
```

## Usage

If you're not publishing views or components & its classes, please follow the usage.

## WireBlade Layouts - App Layout

You can extend the `app layout` by creating `resources\views\layouts\app.blade.php` and copy the below code and update the content.

```html
<x-wb::app :title="app()->view->getSections()['title']" :main-menu="app()->view->getSections()['mainMenu']">
    <!---Adding & customize the logo -->
    <x-slot name="logo"> Title </x-slot>

    <!---Updating sidebar footer -->
    <x-slot name="profile">
        <x-wb::profile
            name="LiAn DhAs"
            logout=""
            image="assets/lian-dhas.jpg"
            :linkSettings="route('profile.settings')"
        />
    </x-slot>

    <!---Adding Notification features -->
    // Notification is optional if your notification has an empty content, it will hide automatically.
    <x-slot name="notification">
        <x-wb::notification-item :read="$isRead" wire:key="$key">
            <div class="relative h-11 w-11">
                <img src="assets/brian-hughes.jpg" class="rounded-full" alt="" />
            </div>
            <div class="flex flex-col">
                <a href="" class="text-sm font-semibold"> LiAn Dhas added new Product </a>
                <div class="flex mt-1 space-x-2 text-xs">
                    <span> 3 hrs ago </span>
                    <span class="text-gray-200"> &verbar; </span>
                    <button>Mark as read</button>
                </div>
            </div>
        </x-wb::notification-item>
        <!---Add more ... -->
    </x-slot>

    <!---Sidebar Navigations -->
    <x-slot name="navigation">
        <!---Main Menu -->
        <x-wb::nav-item title="Dashboard" route="" :active="request()->is('/')">
            <x-wb::nav-help title="Dashboard" help-text="Analysis, Summary & Performance" />
        </x-wb::nav-item>

        <!---Dropdown Menu -->
        <x-wb::nav-item title="Pages" route="" dropdown>
            <x-wb::nav-help title="Dashboard" help-text="Analysis, Summary & Performance" />
            <x-slot name="submenu">
                <x-wb::dropdown-link title="Add Page" route=""></x-wb::dropdown-link>
            </x-slot>
        </x-wb::nav-item>

        <!---Add More -->
    </x-slot>

    <!---It will yield your content throught this slot -->
    <x-slot name="content"> {{ $slot }} </x-slot>
</x-wb::app>
```

## WireBlade Layouts - Auth Layout

You can extend the `auth layout` by creating `resources\views\layouts\app.blade.php` and copy the below code and update the content

```html
<x-wb::auth title="Login" show-graphics>
    <x-slot name="page_content"> Show your Login / Register / Forgot Password Page Content </x-slot>

    <x-wb::auth-layout-content
        title="Graphic Section Title"
        content="This is Login page for the website and it works nice so far."
        cta="/"
        cta_text="Know More"
    />
</x-wb::auth>
```

## Directives for styles & scripts

Add these two styles inside your `<head></head>`

```php
    {{ Vite::useHotFile('vendor/wireblade/wireblade.hot')->useBuildDirectory('vendor/wireblade')->withEntryPoints(['resources/assets/css/app.css', 'resources/assets/js/app.js']) }}
```

## Adding Dark Mode

You have to install [Tailwind CSS](https://tailwindcss.com) and enable `darkMode: 'class'`

And add the below `alpinejs` script inside <html> tag

```js
x-data="{ darkMode: false }" x-init=" darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value
=> localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark': darkMode == true }"
```

## For Sidebar

Add the below code inside your `<body>` tag

```js
x-data="sidebar"
@resize.window="handleResize"

```

## Flash Notification

Add this component on your `app` layout

```php
<x-wb::notification />
```

For triggering this notification in livewire

```php
public function store() {
    ...
    ...
    $this->dispacthBrowserEvent('notify', 'Ah! It\'s Working');
}
```

## Table

You can use table component.

```php
<x-wb::table>
    <x-slot name="head">
        <x-wb::row>
            <x-wb::heading>Name</x-wb::heading>
        </x-wb::row>
    </x-slot>

    <x-slot name="body">
        <x-wb::row>
            <x-wb::cell>John Doe</x-wb::cell>
        </x-wb::row>
    </x-slot>
</x-wb::table>
```

## Modal

You can use modal component which is same as available in Jetstream Laravel.

```php
<x-wb::dialog wire:model="showModal">

    <x-slot name="title">
        // Title goes here
    </x-slot>

    <x-slot name="content">
        // Content goes here
    </x-slot>

    <x-slot name="footer">
        // Footer goes here
    </x-slot>

</x-wb::dialog>
```

## Form Fields

You can use forms, currently limited for testing purposes.

```php
<x-wb::input label="First Name" type="text" placeholder="First Name"></x-wb::input>

<x-wb::input label="Email" type="email" placeholder="john.doe@ymail.com" />

<x-wb::input label="Age" type="number" placeholder="25" min="1" max="50" />

<x-wb::input label="DOB" type="date" />

<x-wb::input label="App Date" type="datetime-local" />

<x-wb::input label="Password" type="password" placeholder="Password" />

<x-wb::input label="Month" type="month" />

<x-wb::checkbox label="Are you sure?" />

<x-wb::form label="Product Images" />

<x-wb::input label="Search" type="search" placeholder="Search" />

<x-wb::input label="Time" type="time" suffix-label />

<x-wb::input label="Website" type="url" placeholder="www.formwind.com" prefix-label mandatory>
    <x-slot name="icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
        </svg>
    </x-slot>
</x-wb::input>

<x-wb::input label="Week" type="Week" />

<x-wb::input label="Tel" type="tel" laceholder="9x5xxxxx562" />

<x-wb::textarea label="Description" placeholder="Description" rows="10">
    <x-slot name="content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non libero praesentium
        voluptate debitis dolorum quas suscipit eos deleniti odit architecto dolor
        facilis itaque temporibus, quaerat quod provident. Quam, necessitatibus porro.
    </x-slot>
</x-wb::textarea>

<x-wb::select label="Email">
    <option value="1">1</option>
    <option value="1">1</option>
    <option value="1">1</option>
    <option value="1">1</option>
</x-wb::select>
```

## Trix Editor

If you are using trix editor you should add `@trixCss` & `@trixJs` directives in below the livewire directives on your home page.

And also if you want to add image upload through trix editor, `use WithFileAttachment` trait.

```php
\\ Page.php
use HasFileAttachment;

public $description = '';

\\ page.blade.php
<x-wb::trix label="Description" wire:model.defer="description" name="description" editor-height="100rem" />
```

## Links

### Anchor Link

```php
<x-wb::links.anchor color="red" link="https:://example.com/">
    Edit
</x-wb::links.anchor>
```

### Button Link

```php
<x-wb::links.anchor color="blue">
    Add
</x-wb::links.anchor>
```

## Tags Input

It Requires Livewire and you have to add the property in Livewire as `public $meta_key = []`

```php
<x-wb::tags-input label="Meta Keywords" wire:model.lazy="meta_key" />
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [LiAn DhAs](https://github.com/lianmaymesi)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
