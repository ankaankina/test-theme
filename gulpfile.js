'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function () {
  return gulp.src('./sass/main.scss')
  	.pipe(sourcemaps.init(''))
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write(''))
    .pipe(gulp.dest('./css'));
});

gulp.task('clean', function () {
    del(['sass']);
});

gulp.task('default', ['clean'], function() {
    gulp.start('sass');
});

gulp.task('watch', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
});