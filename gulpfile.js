// Load plugins
var gulp = require('gulp'),
	plugins = require('gulp-load-plugins')({ camelize: true }),
	jeet = require('jeet'),
	nib = require('nib'),
	rupture = require('rupture');

// Styles
gulp.task('styles', function() {
  return gulp.src('assets/stylus/*.styl')
	.pipe(plugins.stylus({use:[jeet(),nib(),rupture()] }))
	.pipe(plugins.autoprefixer('last 2 versions', 'ie 9', 'ios 6', 'android 4'))
	.pipe(gulp.dest('assets/styles/build'))
	.pipe(plugins.minifyCss({ keepSpecialComments: 1 }))
	.pipe(gulp.dest('assets/css/'))
	.pipe(plugins.notify({ message: 'Styles task complete' }));
});

// Site Scripts
gulp.task('scripts', function() {
  return gulp.src(['assets/js/source/*.js'])
	.pipe(plugins.jshint('.jshintrc'))
	.pipe(plugins.jshint.reporter('default'))
	.pipe(plugins.concat('main.js'))
	.pipe(gulp.dest('assets/js/build'))
	.pipe(plugins.rename({ suffix: '.min' }))
	.pipe(plugins.uglify())
	.pipe(gulp.dest('assets/js'))
	.pipe(plugins.notify({ message: 'Scripts task complete' }));
});

// Images
gulp.task('images', function() {
  return gulp.src('assets/images/**/*')
	.pipe(plugins.cache(plugins.imagemin({ optimizationLevel: 7, progressive: true, interlaced: true })))
	.pipe(gulp.dest('assets/images'))
	.pipe(plugins.notify({ message: 'Images task complete' }));
});

// Watch
gulp.task('watch', function() {


	// Watch .scss files
	gulp.watch('assets/stylus/**/*.styl', ['styles']);

	// Watch .js files
	gulp.watch('assets/js/**/*.js', ['scripts']);

	// Watch image files
	gulp.watch('assets/images/**/*', ['images']);

 

});

// Default task
gulp.task('default', ['styles', 'scripts', 'images', 'watch']);
