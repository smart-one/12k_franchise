var gulp = require('gulp'),
    minifyCSS = require('gulp-minify-css'),
    less = require('gulp-less'),
    autoprefixer = require('gulp-autoprefixer'),
    // uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    connect = require('connect'),
    serve = require('serve-static'),
    browsersync = require('browser-sync'),
    fileinclude = require('gulp-file-include'),
    reload = browsersync.reload;

gulp.task('css', function(){
  return gulp.src('less/index.less')
    .pipe(less())
    .pipe(autoprefixer('IE 8'))
    .pipe(minifyCSS({keepBreaks:true}))
    .pipe(gulp.dest('public_html/css'))
    .pipe(browsersync.reload({stream: true}));
});

gulp.task('js', function(){
  return gulp.src('js/*.js')
    .pipe(concat('main.js'))
    // .pipe(uglify())
    .pipe(gulp.dest('public_html/js'))
});

gulp.task('vendorCSS', function () {
  return gulp.src(['less/vendor/*.less'])
      .pipe(concat('vendor.css'))
      .pipe(less())
      .pipe(minifyCSS({keepBreaks:false}))
      .pipe(gulp.dest('public_html/css'));
});
gulp.task('vendorJS', function () {
  return gulp.src(['js/vendor/jquery.js', 'js/vendor/*.js'])
      .pipe(concat('vendor.js'))
      // .pipe(uglify())
      .pipe(gulp.dest('public_html/js'));
});

gulp.task('fileinclude', function() {
  gulp.src(['tmpl/*.html'])
    .pipe(fileinclude({
      prefix: '@',
      basepath: 'tmpl/parts/'
    }))
    .pipe(gulp.dest('public_html'));
});


gulp.task('default', ['css', 'fileinclude'], function(){
  browsersync({
    server: {
      baseDir: 'public_html'
    }
  });

  gulp.watch('less/*.less', ['css']); 
  gulp.watch(['tmpl/**/*.html'], ['fileinclude', reload]); 
  gulp.watch(['public_html/**/*.php'], [reload]); 
});