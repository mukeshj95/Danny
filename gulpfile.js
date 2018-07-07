const gulp = require('gulp');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');
const cssmin = require('gulp-cssmin');
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin');
const concatCss = require('gulp-concat-css');

gulp.task('sass', function ()  {
    gulp.src('sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('css/'))
});

gulp.task('minify', function () {
    gulp.src('js/main.js')
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        //.pipe(uglify().on('error', uglify.logError))
        .pipe(gulp.dest('js'));
});


gulp.task('cssminify', function () {
    gulp.src('css/style.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('css'));
});

gulp.task('cssminify2', function () {
    gulp.src('css/animation.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('css'));
});


gulp.task('image', function () {
    gulp.src('img/*')
        .pipe(imagemin())
        .pipe(gulp.dest('img'));
});


gulp.task('default', ['sass', 'minify', 'cssminify', 'image', 'cssminify2']);
