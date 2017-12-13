'use strict';
var gulp = require('gulp');
var concat = require('gulp-concat');
var cssmin = require('gulp-minify-css');
var rename = require("gulp-rename");
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

gulp.task('default', ['styles', 'watch']);

gulp.task('styles', function() {
    return gulp.src('./assets/src/scss/styles.scss')
        .pipe(sass())
        .pipe(gulp.dest('./assets/dist/css/'))
        .pipe(cssmin())
        .pipe(rename('styling.css'))
        .pipe(gulp.dest('./web/assets/css'));
});

gulp.task('watch', function() {
    gulp.watch('./assets/**/*.scss', {interval: 1000, usePolling: true} , ['styles']);
});
