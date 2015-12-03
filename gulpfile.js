var gulp   = require('gulp'),
    less   = require('gulp-less'),
    concat = require('gulp-concat');

gulp.task('process-less', function(){
  gulp.src(['src/less/import.less'])
    .pipe(less())
    .pipe(concat('app.css'))
    .pipe(gulp.dest('assets/css'))
});

gulp.task('process-scripts', function(){
  gulp.src('src/js/*.js')
    .pipe(concat('app.js'))
    .pipe(gulp.dest('assets/js'))
});