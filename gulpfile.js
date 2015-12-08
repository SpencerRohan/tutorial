var gulp   = require('gulp'),
    less   = require('gulp-less'),
    concat = require('gulp-concat'),
    insert = require('gulp-insert');
    replace = require('gulp-replace');

// gulp.task('process-variables', function(){
//     themes.forEach(function(theme) {
//       gulp.src(['./src/less/_variables-' + theme.name + '.less'])
//         .pipe(replace(/./g, ''))
//         .pipe(insert.prepend( theme.writeLess() ))
//         .pipe(concat('_variables-'+ theme.name + '.less'))
//         .pipe(gulp.dest('src/less'))
//     })
// });

gulp.task('process-less', function(){
  gulp.src(['src/less/_theme-anvil.less'])
    .pipe(less())
    .pipe(concat('site-anvil.css'))
    .pipe(gulp.dest('assets/css'));
  gulp.src(['src/less/_theme-glue.less'])
    .pipe(less())
    .pipe(concat('site-glue.css'))
    .pipe(gulp.dest('assets/css'));
  gulp.src(['src/less/_theme-jet_propelled_unicycle.less'])
    .pipe(less())
    .pipe(concat('site-jet_propelled_unicycle.css'))
    .pipe(gulp.dest('assets/css'));
});

gulp.task('process-scripts', function(){
  gulp.src(['src/vendor/jquery/dist/jquery.min.js',
            'src/vendor/bootstrap/dist/js/bootstrap.min.js',
            'src/js/*.js'])
    .pipe(concat('site.js'))
    .pipe(gulp.dest('assets/js'))
});

gulp.task('watch', function(){
  gulp.watch(['src/less/*.less',
              'src/vendor/jquery/dist/jquery.min.js',
              'src/vendor/bootstrap/dist/js/bootstrap.min.js',
              'src/js/*.js'],
              ['process-less'])
});

