# Puzzle CLI Plain Preset Template

This is a mostly blank slate, starter template for creating a site in Jigsaw and Tailwind CSS with minimal effort. 

## Installation

If using Puzzle CLI, this is the default preset. That means you can just run:

```bash
puzzle new my-site
```

You can be explicit if you want:

```bash
puzzle new my-site --preset plain
```

If you are intalling Jigsaw manually, after installing Jigsaw, run the following command from your project directory:

```bash
./vendor/bin/jigsaw init geoffselby/puzzle-plain-preset
```

---

This starter template comes with the following.

- [Tailwind CSS V1.0](https://tailwindcss.com) pre-installed and configured
- [Purgecss](https://www.purgecss.com/) to remove unused selectors from your CSS, resulting in smaller CSS files
- A script that automatically generates a `sitemap.xml` file
- A custom 404 page

---

### Configuring Navigation

In order to keep the navigation easily configurable, it is managed via your sites config as illustrated in [this blog post](https://geoffcodesthings.com/blog/managing-navigation-menus-jigsaw). To configure your navigation, open `navigation.php` from the root directory. Each array is a link in you navigation.

The only required keys are `link`, the uri for the page, and `title`, the display title of the link.

```php
// navigation.php
return [
  [
    'link' => '/',
    'title' => 'Home',
  ],
  [
    'link' => '/about',
    'title' => 'About',
  ],
  [
    'link' => '/contact',
    'title' => 'Contact',
  ],
  ...
];
```
