# concrete5.7 package with Foundation for Sites frontend

## What you get:
A concrete 5 package ready to install containing

    *   V-Card block
	*	Templates for the autonav block (core)
		- breadcrumbs 
		- list without bullets
		- top bar
		- off canvas
		- top bar and off canvas (topbar on large, off canvas on medium and small)
		- side nav templates (one aligning left, the other right)
	*	Call to action template for content block (core) 
	*	Flex video template for YouTube block (core)
	*	Forms template for form block (core)
	* 	Button postfix template for search block (core)

	File Attributes used:

	*  'Description' for showing captions

## TODO
- make the clearing_lightbox block working (branch 'clearing')
- install is_featured attribute for files (optional for clearing lightbox)
- gulp browser-sync is broken

### Working with the package
- In packages/foundation_sites/themes/foundation_sites execute `bower install` 
- execute `bundle` (only once)
- compile the stylesheet with `bundle exec compass watch`

[Foundation docs](http://foundation.zurb.com/docs/sass.html)

#### License
This package is licensed under the terms of the MIT license.

#### Recommended tools

  * Ruby 1.9+
  * [Node.js](http://nodejs.org)
  * [Sass](http://www.sass-lang.org): `gem install sass`
  * [compass](http://compass-style.org/): `gem install compass-sourcemaps --pre`
  * [bower](http://bower.io): `npm install -g bower grunt-cli`
  * [gulp.js](http://gulpjs.com/)
  * [bundler](http://bundler.io/)
