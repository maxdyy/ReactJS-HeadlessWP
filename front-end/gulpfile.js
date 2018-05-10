var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    watch = require('gulp-watch'),
    sourcemaps = require('gulp-sourcemaps'),
    watchSass = require('gulp-watch-sass'),
    rename = require('gulp-rename'),
    notify = require('gulp-notify');

var timestamp = require('time-stamp');

gulp.task('watch', function() {
  return watch('./src/style/*.s*ss', { ignoreInitial: false }, function() {
    gulp.src('./src/style/style.s*ss')
      .pipe(sourcemaps.init())
      .pipe(sass.sync().on('error', sass.logError))
      .pipe(autoprefixer({
        browsers: ['> 1%', 'iOS 7']
      }))
      .pipe(rename({
        extname: ".min.css"
      }))
      .pipe(sass({ outputStyle: 'compressed' }))
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest('./src/'))
      .pipe(notify('CSS min build compiled ' + timestamp('HH:mm:ss')))
  });
});

gulp.task('default', ['watch']);