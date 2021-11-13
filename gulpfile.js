"use strict";

const gulp = require('gulp');
const browsersync = require('browser-sync');
const phpConnect = require('gulp-connect-php');

// PHP server
function phpServer() {
    phpConnect.server({
        port: 8887,
        reloadOnRestart: true
    }, function (){
        browsersync({
            proxy: 'localhost:8888',
            browser: 'safari',
            notify: false
        });
    });
}

// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload();
    done();
}

// Watch PHP and SCSS files for changes
function watchFiles() {
    gulp.watch('httpdocs/wp-content/themes/bureauhanze/**/*.php', gulp.series(browserSyncReload));
    gulp.watch('httpdocs/wp-content/themes/bureauhanze/assets/scss/*.scss', gulp.series(browserSyncReload));
}

// Start PHP server and Browsersync
const watch = gulp.parallel([watchFiles, phpServer]);
exports.default = watch;