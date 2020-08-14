var gulp = require('gulp');
var sass = require('gulp-sass');

sass.compiler = require('node-sass');

var sourcemaps = require('gulp-sourcemaps');
gulp.task('sass', function () {
 return gulp.src('./public/sass/styles.scss')
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.write('./maps'))
  .pipe(gulp.dest('./css'));
});
