const mix = require('laravel-mix');
const build = require('./tasks/build.js');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
  plugins: [
    build.jigsaw,
    build.browserSync(),
    build.watch([
      'config.php',
      'source/**/*.md',
      'source/**/*.php',
      'source/**/*.scss',
    ]),
  ],
});

mix.js('source/_assets/js/main.js', 'js')
  .sourceMaps()
  .sass('source/_assets/sass/main.scss', 'css')
  .options({
    processCssUrls: false,
    postCss: [tailwindcss()],
  })
  .purgeCss({
    extensions: ['html', 'md', 'js', 'php', 'vue'],
    folders: ['source'],
    whitelistPatterns: [/language/, /hljs/],
  })
  .version();
