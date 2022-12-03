# Changelog

All notable changes to `wireblade` will be documented in this file.

## 0.0.1 - 2022-02-26

-   Added `App` layout
-   Added couple of form fields
-   1. `input` with the following types `text` `email` `number` `date` `datetime-local` `password` `month` `search` `time` `url` `week` `tel`
-
-   1. `textarea`
-
-
-   Dark Mode
-   Sidebar & Notification drawer

## 0.0.2 - 2022-02-26

-   Fixed missing `Cog` icon class in service provider

## 1.0.0 - 2022-02-26

-   Supports `Laravel 9`

## Fixed Minor issues - 2022-04-18

This package has some missed classes and it has been fixed in this release.

## Fixed Minor issues - 2022-04-18

_dropdown_ properties are not required for **x-wb::nav-item** component.

## v1.1.0 Added Auth Layouts - 2022-04-18

Added Auth Layouts

## v1.1.1 UI Style fixes - 2022-04-18

## v1.1.2 Fixed minor issues - 2022-04-18

## v1.1.3 Content bg changed - 2022-04-20

## v1.1.4 Content bg-slate-100 to 50 changed - 2022-04-20

## v1.2.0 Added Select tag - 2022-04-20

-   Added `Select` html tag

```html
<x-wb::select label="Colors">
    <option value="Red">Red</option>
    <option></option>
    <option></option>
</x-wb::select>
```

## v1.3.0 Added Modal & Dialog component - 2022-04-20

-   Added `<x-wb::dialog></x-wb::dialog>` component which is same as available in Laravel Jetstream

## v1.4.0 Added Table component - 2022-04-21

-   Added `<x-wb::table></x-wb::table>` component
-   Including the slot components `<x-wb::heading></x-wb::heading>` , `<x-wb::row></x-wb::row>` , `<x-wb::cell></x-wb::cell>`

## v1.5.0 Added File input & Flash Notification component - 2022-04-21

-   Added `<x-wb::file></x-wb::file>` component
-   Added `<x-wb::notification></x-wb::notification>` component

## v1.6.0 Added active & title for the menus & pages - 2022-04-22

-   Added `active` property for the `navigation-item` & `dropdown-link`
-   Added `title` & `main-menu` property for the `app` layout

## v1.6.1 Fixed overflow issues while using table component - 2022-04-22

## v1.6.2 Fixed overflow issues while using table component - 2022-04-22

## v1.7.0 Added no-help property for nav-item component - 2022-04-22

-   Added `no-help` property for [x-wb::nav-item](x-wb::nav-item)</x-wb::nav-item> . It disables Help Text from the menu items.
-   Adjusts some spaces on menus

## v1.8.0 Added checkbox component - 2022-04-22

-   Added new component `<x-wb::checkbox</x-wb::checkbox>`

## v1.9.0 Added tags-input component - 2022-04-22

-   Added new component `<x-wb::tags-input</x-wb::tags-input>`

## v1.10.0 Added trix component - 2022-04-25

-   Added new component `<x-wb::trix></x-wb::trix>`

## v1.10.1 fixed trix issues - 2022-04-27

## v1.10.2 Fixed unique key issues in tags-input component - 2022-04-27

-   Unique keys to prevent tampered data issues solved in `tags-input` component

## v1.11.0 enhanced UI and added Anchor Links & Button Links

-   Enhanced little UI
-   Added <x-wb::links.anchor color="red" link="https:://example.com/">Edit</x-wb::links.anchor> component
-   Added <x-wb::links.anchor color="blue">Add</x-wb::links.anchor> components

## v1.12.0 added new property `linkSettings` for profile

-   Added new route property for `linkSettings` in profile tag

## v1.12.1 notification scroll is fixed

## v1.13 Read & Un-Read properties for notification

-   Added `read` property in `Notification` tag

## v1.13.1 Added attributes in `notification-item` to accept all starts with `wire:`

## v1.13.2 Minor fixes

## v1.13.3 Minor fixes

## v1.14 Added Trix Image Upload Trait & Some UI Fixes

-   Added trait `HasFileAttachment` class for uploading images
-   Added `mandatory`, `label`, `error`, `editor-height`, `name` properties in `<x-wb::trix></x-wb::trix>`
-   Fixed some UI issues
-   Removed `initial-value` from `trix` component

## v1.14.1 Minor UI Changes

## v1.14.2 Minor UI Changes

## v1.14.3 Minor UI Changes
