"use strict";
const gulp = require('gulp');
const { src, dest, series } = require('gulp');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass')(require('sass'));
const browsersync = require('browser-sync');
const phpConnect = require('gulp-connect-php');
const autoprefixer = require('gulp-autoprefixer');
const cleancss = require('gulp-cleancss');
const rename = require('gulp-rename');
const terser = require('gulp-terser');

// PHP server
function phpServer() {
    phpConnect.server({
        port: 8887,
        reloadOnRestart: true
    }, function (){
        browsersync.init({
            proxy: 'localhost:8888',
            browser: 'google chrome',
            notify: false,
            files: "httpdocs/wp-content/themes/bureauhanze/assets/css/style.min.css",
            injectChanges: true
        });
    });
}

//Sass task
function scssTask() {
    return src('httpdocs/wp-content/themes/bureauhanze/assets/scss/style.scss')
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(sass())
        .pipe(autoprefixer('last 2 versions'))
        .pipe(sourcemaps.write('.'))
        .pipe(cleancss({compatibility: 'ie8'}))
        .pipe(rename('style.min.css'))
        .pipe(dest('httpdocs/wp-content/themes/bureauhanze/assets/css'))
}

// Bundle JavaScript and minify
function jsTask() {
    return src('httpdocs/wp-content/themes/bureauhanze/assets/js/script.js', { sourcemaps: true })
        .pipe(terser())
        .pipe(rename("bundle.js"))
        .pipe(dest('httpdocs/wp-content/themes/bureauhanze/assets/js', { sourcemaps: '.' }));
}

// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload({stream:true})
    done();
}

// Watch PHP and SCSS files for changes
function watchFiles() {
    gulp.watch('httpdocs/wp-content/themes/bureauhanze/**/*.php', gulp.series(browserSyncReload));
    gulp.watch('httpdocs/wp-content/themes/bureauhanze/assets/scss/*.scss', gulp.series(scssTask, browserSyncReload));
    gulp.watch('httpdocs/wp-content/themes/bureauhanze/assets/js/script.js', gulp.series(jsTask, browserSyncReload));
}

// Start PHP server and Browsersync
const watch = gulp.parallel([phpServer, watchFiles]);

// Start with $gulp
exports.default = series(scssTask, jsTask, watch);