# [sage-laravel-mix](https://github.com/robbinfellow/sage-laravel-mix)

This is an extension of the Sage starter theme for Wordpress, all credits goes to the awesome work made by the guys over at [roots](https://roots.io/).

## Different from Sage 9:
* Laravel Mix as front-end for webpack
* Vuejs by default
* Prepared with [WP Glide](http://glide.thephpleague.com/)
* wp-bootstrap-navwalker by default

### Installation

This readme assumes you are using the bedrock structure for Wordpress, for installation/instructions head over to the [Bedrock repo](https://github.com/roots/bedrock).

```shell
# @ bedrock/web/app/themes
$ git clone https://github.com/robbinfellow/sage-laravel-mix.git
$ cd sage-laravel-mix
$ composer install
$ yarn
$ yarn run dev / production / watch
```

### Laravel mix
```shell
# Watch and compile assets
$ yarn run watch
# Compile assets
$ yarn run dev
# Compile and minify assets for production
$ yarn run production
```

### (Optional) [WP Glide](http://glide.thephpleague.com/)
Run the following from your bedrock root:
```
$ composer require frozzare/wp-glide
```

> Don't forget to activate the plugin in your wordpress backend.

***

# [Sage](https://roots.io/sage/)
[![Packagist](https://img.shields.io/packagist/vpre/roots/sage.svg?style=flat-square)](https://packagist.org/packages/roots/sage)
[![devDependency Status](https://img.shields.io/david/dev/roots/sage.svg?style=flat-square)](https://david-dm.org/roots/sage#info=devDependencies)
[![Build Status](https://img.shields.io/travis/roots/sage.svg?style=flat-square)](https://travis-ci.org/roots/sage)
[![Sponsored by ES6.io](https://img.shields.io/badge/%F0%9F%92%9A_Sponsored_by-ES6.io%20Tutorials-brightgreen.svg?style=flat-square)](https://roots.io/r/es6)

Sage is a WordPress starter theme with a modern development workflow.


## Documentation

Sage 8 documentation is available at [https://roots.io/sage/docs/](https://roots.io/sage/docs/).

Sage 9 documentation is currently in progress and can be viewed at [https://github.com/roots/docs/tree/sage-9/sage](https://github.com/roots/docs/tree/sage-9/sage).
