// Include dependencies
var
    gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    minify = require('gulp-minify'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    maps = require('gulp-sourcemaps');

// Default task
gulp.task('default', function () {});

// Monitor changes on files and launch various tasks
gulp.task('watch', function () {
    // CSS stuff
    gulp.watch('./styles/**/*.scss', gulp.series('sass', 'autoprefixer', 'minify-css', 'sourcemaps'));
    // Javascript stuff
    gulp.watch('./js/*.js', gulp.series('minify-js'));
});

// Compile the main Sass file to CSS
gulp.task('sass', function () {
    return gulp.src('./styles/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./styles'));
});

// Add vendor prefixes to the compiled CSS file
gulp.task('autoprefixer', function () {
    return gulp.src('./styles/*.css')
        .pipe(autoprefixer())
        .pipe(gulp.dest('./styles'));
});

// Minify the compiled CSS file in a new .min.css file
gulp.task('minify-css', function () {
    return gulp.src('./styles/sw-retro.css')
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./styles'));
});

// Minify the JS file in a new .min.js file
gulp.task('minify-js', function () {
    return gulp.src('./js/*.js')
        .pipe(minify({
            ext: {
                min: '.min.js'
            }
        }))
        .pipe(gulp.dest('./js'));
});

// Create sourcemaps for the compiled CSS
gulp.task('sourcemaps', function () {
    return gulp.src('./styles/sw-retro.css')
        .pipe(maps.init())
        .pipe(maps.write('.'))
        .pipe(gulp.dest('./styles'));
});

// Go go go !
gulp.task('default', gulp.parallel('watch'));