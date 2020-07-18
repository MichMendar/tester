var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync'),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    gcss = require('gulp-group-css-media-queries'),
    sourcemaps = require('gulp-sourcemaps'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    lineec = require('gulp-line-ending-corrector')

// Directories
var root = './',
    source = root + 'src/',
    css = root + 'src/css/'
    scss = root + 'src/scss/',
    js = root + 'src/js/',
    dist = root + 'dist/';

//browsersync with a php server
var browsersyncResource= {    
    proxy: "localhost:8080/",
};

// Files
var files = {
    html: root + '**/*.php',
    scss: source + '**/*.scss',
    js: source + '**/*.js'
};

/**
 * JS files
 */
var jsConcat = [
    './node_modules/slick-carousel/slick/slick.js',  
    js + 'main.js'
];

/**
 * Sass node modules
 */
var sassMQ = './node_modules/sass-mq/',
    normalize = './node_modules/normalize.css/',
    slick = './node_modules/slick-carousel/slick/';

/**
 * CSS files
 */
var cssConcat = [
    slick + 'slick.css',
    css + 'main.css'
];

/**
 * Sass and CSS task
 */
function cssCompiler() {
    return gulp.src([scss + 'main.scss'])
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(sass({
        outputStyle: 'expanded',
        precison: 3,
        errLogToConsole: true,
        includePaths: [
            sassMQ,
            normalize
        ]
    })).on('error', sass.logError)
    .pipe(autoprefixer('last 2 versions'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(css))
    .pipe(browserSync.stream())
}

/**
 * Concat CSS task
 */
function concatCSS() {
    return gulp.src(cssConcat)
    .pipe(sourcemaps.init({ loadMaps: true, largeFile: true }))
    .pipe(concat('style.min.css'))
    .pipe(gcss())
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('./maps/'))
    .pipe(lineec())
    .pipe(gulp.dest(dist + 'css/'))
    .pipe(browserSync.stream())
}

/**
 * Javascript task
 */
function javascript() {
    return gulp.src(jsConcat)
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(lineec())
    .pipe(gulp.dest(dist + 'js/'))
    .pipe(browserSync.stream())
}

/**
 * Watchers
 */
function watch() {
    browserSync.init(browsersyncResource)
    gulp.watch(files.scss, gulp.series([cssCompiler, concatCSS]))
    gulp.watch(files.js, javascript)
    gulp.watch([files.html, js + 'main.min.js', scss + 'style.min.css']).on('change', browserSync.reload)
}

/**
 * Tasks
 */
exports.cssCompiler = cssCompiler
exports.concatCSS = concatCSS
exports.javascript = javascript
exports.watch = watch

gulp.task('css', gulp.series(cssCompiler, concatCSS))
gulp.task('build', gulp.parallel('css', javascript))

/**
 * Default task
 */
gulp.task('default', gulp.series('build', watch))
