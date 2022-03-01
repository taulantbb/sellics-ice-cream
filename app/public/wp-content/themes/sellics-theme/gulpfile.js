'use strict';

// Variables
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const plumber = require('gulp-plumber');
const rename = require('gulp-rename');
const babel = require('gulp-babel');
const csso = require('gulp-csso');
const csscomb = require('gulp-csscomb');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const cleanCss = require('gulp-clean-css');
const replace = require('gulp-replace');

// TEMPLATE CONFIG HERE
const theme_dir = __dirname.split('/').pop();


// Remote Path
let pathCss = 'wp-content/themes/'+theme_dir+'/assets/app/css/';
let pathJs = 'wp-content/themes/'+theme_dir+'/assets/app/js/';
let pathImg = 'wp-content/themes/'+theme_dir+'/assets/app/img/';
let pathSvg = 'wp-content/themes/'+theme_dir+'/assets/app/svg/';

// JavaScript
gulp.task('javascript', function () {
    return gulp.src([
        './assets/dev/js/main.js'])
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(gulp.dest('./assets/app/js'))
        .pipe(uglify())
        .pipe(concat('main.min.js'))
        .pipe(gulp.dest('./assets/app/js'))

});

// Return javascript
gulp.task('return:javascript', function() {
    return gulp.src([
        './assets/app/js/main.js',
    ])
        .pipe(gulp.dest('./assets/dev/js/'))
});


// Images dev without compression
gulp.task('images:dev', function() {

    return gulp.src([
        './assets/dev/img/**/*.{png,jpg,gif}'
    ])
        .pipe(gulp.dest('./assets/app/img/'));
});

// Images build with compression
gulp.task('images:build', function() {
    if(sftp_host) {
        return gulp.src([
            './assets/dev/img/**/*.{png,jpg,gif}'
        ])
            // Add your TINYPNG key for optimize images
            .pipe(tinypng(''))
            .pipe(gulp.dest('./assets/app/img/'))
            .pipe(sftp({
                host: sftp_host,
                user: sftp_user,
                pass: sftp_pass,
                port: 2222,
                remotePath: pathImg
            }));
    } else {
        return gulp.src([
            './assets/dev/img/**/*.{png,jpg,gif}'
        ])
            // Add your TINYPNG key for optimize images
            .pipe(tinypng(''))
            .pipe(gulp.dest('./assets/app/img/'));
    }
});


// Sass to css
gulp.task('sass-to-css', function () {
    return gulp.src('./assets/dev/scss/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(plumber())
        .pipe(cleanCss({
            format: 'beautify'
        }))
        .pipe(concat('main.css'))
        .pipe(gulp.dest('./assets/app/css/'))
        .pipe(csscomb())
        .pipe(csso())
        .pipe(concat('main.min.css'))
        .pipe(gulp.dest('./assets/app/css/'));
});

// Css to sass
gulp.task('css-to-sass', function () {
    return gulp.src('./assets/app/css/main.css')
        .pipe(rename({
            extname: '.scss'
        }))
        .pipe(gulp.dest('./assets/dev/scss'));
});

// Watch
gulp.task('watch', function() {
    gulp.watch('./assets/dev/js/main.js', gulp.series('javascript'));
    gulp.watch('./assets/dev/scss/main.scss', gulp.series('sass-to-css'));
    gulp.watch('./assets/dev/scss/**/*', gulp.series('sass-to-css'));
    gulp.watch('./assets/dev/img/**/*', gulp.series('images:dev'));
});

// Gulp dev
gulp.task('dev', gulp.parallel('javascript', 'sass-to-css', 'images:dev'));

// Gulp build
gulp.task('build', gulp.parallel('javascript', 'sass-to-css', 'images:build'));

// Gulp return files on website
gulp.task('return-compiled', gulp.parallel('return:javascript', 'css-to-sass'));

// Gulp default
gulp.task('default', gulp.series('dev', gulp.parallel('watch')));