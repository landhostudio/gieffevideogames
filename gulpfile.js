'use strict';

// Project ---------------------------------------------------------------------

var url                   = 'http://gieffevideogames:8888',
    source                = './assets-src',
    destination           = './assets',
    browserSyncPort       = 8889,
    AUTOPREFIXER_BROWSERS = {
      browsers: [
        'last 3 versions',
        'ie 11',
        'ie 10',
        'ios >= 7',
        'android >= 4'
      ]
    };

// Gulp ------------------------------------------------------------------------

var gulp         = require('gulp'),
    cache        = require('gulp-cache'),
    runSequence  = require('run-sequence'),
    flatten      = require('gulp-flatten');

// Stylesheets -----------------------------------------------------------------

var sass         = require('gulp-sass'),
    combineMq    = require('gulp-combine-mq'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano      = require('gulp-cssnano'),
    csscomb      = require('gulp-csscomb'),
    bourbon      = require('node-bourbon').includePaths,
    neat         = require('node-neat').includePaths;

// JavaScripts -----------------------------------------------------------------

var include      = require('gulp-include'),
    uglify       = require('gulp-uglify');

// BrowserSync -----------------------------------------------------------------

var browserSync  = require('browser-sync').create(),
    reload       = browserSync.reload;

// Gulp Tasks ------------------------------------------------------------------

gulp.task('stylesheets', function() {
  gulp.src(source + '/css/**/*.{scss,sass}')
    .pipe(sass({
      includePaths: bourbon,
      includePaths: neat,
      precision: 6
    }).on('error', sass.logError))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(combineMq())
    .pipe(csscomb())
    // .pipe(cssnano())
    .pipe(gulp.dest(destination + '/css'))
    .pipe(browserSync.stream());
});

gulp.task('scripts', function() {
  return gulp.src(source + '/js/{vendor,main}.js')
    .pipe(include())
    // .pipe(uglify())
    .pipe(gulp.dest(destination + '/js'))
    .pipe(browserSync.stream());
});

gulp.task('images', function() {
  return gulp.src(source + '/images/**/*')
    .pipe(flatten())
    .pipe(gulp.dest(destination + '/images'))
    .pipe(browserSync.stream());
});

gulp.task('fonts', function() {
  return gulp.src(source + '/fonts/**/*')
    .pipe(flatten())
    .pipe(gulp.dest(destination + '/fonts'))
    .pipe(browserSync.stream());
});

gulp.task('watch', function() {
  browserSync.init({
    files: [
      'site/**/*.php',
      '*.php',
      'content/**/*.{txt,md}'
    ],
    proxy: url,
    port: browserSyncPort,
    notify: false,
    ghostMode: {
      clicks: false,
      scroll: false,
      forms: {
        submit: false,
        inputs: false,
        toggles: false
      }
    },
    snippetOptions: {
      blacklist: ['/panel/**']
    }
  });

  gulp.watch(source + '/css/**/*.{scss,sass}', ['stylesheets']);
  gulp.watch(source + '/js/**/*.js', ['scripts']);
  gulp.watch(source + '/fonts/**/*', ['fonts']);
  gulp.watch(source + '/images/**/*', ['images']);
  gulp.watch(['build']);
});

gulp.task('clear', function(done) {
  return cache.clearAll(done);
});

gulp.task('build', function(callback) {
  runSequence('clear', 'stylesheets', 'scripts', 'images', 'fonts', callback);
});

gulp.task('default', function() {
  gulp.start('build');
});
