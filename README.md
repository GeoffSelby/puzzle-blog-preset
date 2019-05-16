# Puzzle CLI Blog Preset Template

A minimal blog preset template for Jigsaw sites powered by Tailwind CSS. 

## Installation

If using Puzzle CLI, pass the `--preset` flag with a value of blog:

```bash
puzzle new my-site --preset blog
```

If you are intalling Jigsaw manually, after installing Jigsaw, run the following command from your project directory:

```bash
./vendor/bin/jigsaw init geoffselby/puzzle-blog-preset
```

---

This starter template comes with the following.

- [Tailwind CSS V1.0](https://tailwindcss.com) pre-installed and configured
- [Purgecss](https://www.purgecss.com/) to remove unused selectors from your CSS, resulting in smaller CSS files
- A script that automatically generates a `sitemap.xml` file
- A custom 404 page

---

### Where do my blog posts go?

All posts live in `source/_posts`. The easiest way to start a new post is to copy one of the sample posts and make your changes.

---

### Configuring Navigation

In order to keep the navigation easily configurable, it is managed via your sites config as illustrated in [this blog post](https://geoffcodesthings.com/blog/managing-navigation-menus-jigsaw). To configure your navigation, open `navigation.php` from the root directory. Each array is a link in you navigation.

The only required keys are `link`, the uri for the page, and `title`, the display title of the link.

```php
// navigation.php
return [
  [
    'link' => '/',
    'title' => 'Blog',
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
