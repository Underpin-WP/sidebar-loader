# Underpin Sidebar Loader

Loader That assists with adding sidebars (widget areas) to a WordPress website.

## Installation

### Using Composer

`composer require underpin/sidebar-loader`

### Manually

This plugin uses a built-in autoloader, so as long as it is required _before_
Underpin, it should work as-expected.

`require_once(__DIR__ . '/underpin-sidebars/sidebars.php');`

## Setup

1. Install Underpin. See [Underpin Docs](https://www.github.com/underpin-wp/underpin)
1. Register new sidebars menus as-needed.

## Example

A very basic example could look something like this.

```php
// Register sidebar
underpin()->sidebars()->add( 'example-sidebar', [
	'name'        => underpin()->__( 'Human readable name' ),
	'id'          => 'example',
	'description' => underpin()->__( 'Human readable description' ),
] );
```

Alternatively, you can extend `Sidebar` and reference the extended class directly, like so:

```php
underpin()->sidebars()->add('sidebar-key','Namespace\To\Class');
```