var gulp   = require('gulp'),
    less   = require('gulp-less'),
    concat = require('gulp-concat');

gulp.task('process-less', function(){
  gulp.src('src/less/*.less')
    .pipe(less())
    .pipe(gulp.dest('assets/css'))
});

gulp.task('process-scripts', function(){
  gulp.src('src/js/*.js')
    .pipe(concat('app.js'))
    .pipe(gulp.dest('assets/js'))
});