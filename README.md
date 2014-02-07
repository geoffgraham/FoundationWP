# Foundation 5 WordPress Theme

A WordPresss theme for protoyping sites using ZURB's awesome Foundation 5 front-end framework. This is basically what it would look like to install Foundation into a WordPress theme directory using the command line.

If you are looking for a full-fledged Foundation theme for WordPress, check out [FoundationPress](https://github.com/olefredrik/foundationpress). This theme is ideal more for protoyping site layouts like wireframes than creating robust websites.

## Requirements

Foundation requires the following:

  * Ruby 1.9+
  * [Node.js](http://nodejs.org)
  * [Compass](http://compass-style.org/): `gem install compass`
  * [Bower](http://bower.io): `npm install bower -g`

## Installation

To create a new project:

```
cd path/to/your/project
git clone git@github.com:geoffgraham/FoundationWP.git
mv FoundationWP your-project-directory
```

This repository includes a full WordPress installation in addition to the theme files. Update `wp-config.php` and complete the WordPress installation like you would for any other WordPress site.

If you just want the theme files, then it might be easier to download the full repository ZIP file, extract the theme from `wp-content/themes/FoundationWP` and drop it into your project.

Learn more about WordPress installation: 
[WordPress Codex](http://codex.wordpress.org/Installing_WordPress#Famous_5-Minute_Install)

## Foundation Updates

Want to update your project to the latest version of Foundation?

Run `foundation update` in the command line.

## File Structure

This theme is designed to mirror a clean Foundation installation into a WordPress theme directory.

### Stylesheets

Foundation includes two folders for styles: one for SCSS (`scss/`) and one for CSS (`stylesheets/`). I prefer to lump all my asset folders into a single "lib" directory, but that would have made future Foundation updates troublesome.

If you are writing your styles in Sass, then use the SCSS folder to hold your partials and compile them into app.scss, which will output to `app.css` in the CSS folder.

If you prefer vanilla CSS, then I recommend writing them in the theme's `style.css` file where noted to add to or override existing theme styles. Otherwise, you can create a new CSS file and enqeue it in `lib/functions/enqueue_styles.php`.

### Javascript

Foundation's Javascript files are located in `bower_components/`. They are initialized by `app.js` which is located in 'js/'.

All Javascript for the theme is enqueued by WordPress in `lib/functions/enqueue-scripts.php`. You can add your own scripts to `js/` and enqueue them the same way. This is the method recommended by WordPress.

### Library

I prefer using a directory that is dedicated for all my development assets, so I added `lib/` for you to do just that. This is where all the theme functions are kept and imported by `functions.php` but you can also use this directory to creates more directories for other assets, such as fonts, images, etc.

## Learn More About WordPress

[WordPress Codex](http://codex.wordpress.org)

## Learn More About Foundation

[Foundation Docs](http://foundation.zurb.com/docs)