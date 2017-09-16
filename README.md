# ![vue-webpack-wordpress](https://github.com/shshaw/vue-webpack-wordpress/blob/master/template/screenshot.png)

> A simple Vue 2.0 Webpack & `vue-loader` setup for WorddPress

> This template is Vue 2.0 compatible.

Forked from: [https://github.com/caldera-learn/vue-webpack-wordpress-plugin](https://github.com/caldera-learn/vue-webpack-wordpress-plugin)

### Usage

This is a project template for [vue-cli](https://github.com/vuejs/vue-cli).

#### Install
``` bash
$ npm install -g vue-cli
$ vue init caldera-learn/vue-webpack-wordpress-plugin my-project
$ cd my-project/vue
$ npm install
$ npm run dev
```

#### Use in the WordPress
* Put `<div id="app"></div>` somewhere -- admin page, the_content() whatever...

### BTW:

* webpack_enqueue is an example of how to enqueue the built scripts.
* You should probably change constants and function prefixes.
* Josh will probably make a full boilerplate out of this at some point.
* Live reload doesn't work for Josh so he removed it.

### What's Included

- `npm run dev`: Webpack + `vue-loader` with proper config for source maps & hot-reload.

- `npm run build`: build with HTML/CSS/JS minification.

For detailed explanation on how things work, consult the [docs for vue-loader](http://vuejs.github.io/vue-loader). Also check out the [breaking changes in vue-loader@9.0.0](https://github.com/vuejs/vue-loader/releases/tag/v9.0.0).

### Fork It And Make Your Own

You can fork this repo to create your own boilerplate, and use it with `vue-cli`:

``` bash
vue init username/repo my-project
```
