'use strict';

// include gulp & tools
var gulp        = require('gulp');
var $           = require('gulp-load-plugins')();
var del         = require('del');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;


// default task
gulp.task('default', ['bs']);

// delete some files
gulp.task('clean', function(cb) {
  // You can use multiple globbing patterns as you would with `gulp.src`
  del(['css'], cb);
});

// DEVELOPMENT TASK: compile sass files expanded
gulp.task('dev', ['clean'], function () {
    gulp.src(['scss/**/*.scss'])
    
    .pipe($.compass({
        config_file: './config.rb',
        css: 'css',
        sass: 'scss',
        style: 'expanded',
        sourcemap: 'true'
    }))
});


// DEPLOYMENT TASK: compile sass files compressed
gulp.task('dep', ['clean'], function () {
    gulp.src(['scss/**/*.scss'])
    
    .pipe($.compass({
        config_file: './config.rb',
        css: 'css',
        sass: 'scss',
        style: 'compressed'
    }))
});

// BROWSER SYNC
gulp.task('bs', ['dev'], function() {
    browserSync.init(null, {
      proxy: "localhost"
    });

    gulp.watch(['./**/*.php'], reload);
    gulp.watch(['scss/**/*.scss'], ['dev']);
    gulp.watch(['css/**/*.css'], reload);
});