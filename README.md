# concrete5.7. package with Foundation for Sites frontend

## TODO
- make the clearing_lightbox block working (branch 'clearing')

## What you get:
A concrete 5 package ready to install containing

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

### Before you install the package
In the folder packages/foundation_sites/themes/foundation_sites execute a `bower install` and then `compass compile` (or simply `gulp` if you installed it) to get the needed assets and generate the main.css file.

#### Recommended tools

  * Ruby 1.9+
  * [Node.js](http://nodejs.org)
  * [Sass](http://www.sass-lang.org): `gem install sass`
  * [compass](http://compass-style.org/): `gem install compass-sourcemaps --pre`
  * [bower](http://bower.io): `npm install -g bower grunt-cli`
  * [gulp.js](http://gulpjs.com/)



