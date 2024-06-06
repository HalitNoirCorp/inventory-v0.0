const gulp = require('gulp')
const sass = require('gulp-sass')
const concat = require('gulp-concat')
const cssnano = require('gulp-cssnano')
const autoprefixer = require('gulp-autoprefixer')
const {argv} = require('yargs')
const config = require('../gulp.config.json')
const nop = require('gulp-nop')
const cssbeautify = require('gulp-cssbeautify')
const sourcemaps = require('gulp-sourcemaps')
const rename = require('gulp-rename')
const gulpIf = require("gulp-if");

let directory = argv.output
let dev = argv.dev
let mini = argv.mini
if (directory === undefined) {
    directory = config.output
}
if (mini === undefined) {
    mini = config.mini
}
function styleTaskDev(styles){
    let paths = []
    styles.forEach((js) => {
        paths.push(js.replace('{directory}', directory))
    })

    return gulp.src(paths)
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: ["./node_modules"],
            outputStyle: "compressed"
        }).on('error', sass.logError))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(`./${directory}/assets/css/`))
}

function styleTask(styles) {
    let paths = []
    styles.forEach((js) => {
        paths.push(js.replace('{directory}', directory))
    })
    return gulp.src(paths)
        .pipe(sass({
            includePaths: ["./node_modules"]
        }).on('error', sass.logError))
        .pipe(gulpIf(mini == 'true', cssnano()))
        .pipe(gulp.dest(`./${directory}/assets/css/`))
    
}

gulp.task('style:backend', function () {
    let styles = ['./src/assets/scss/**/*.scss'];
    if (dev == 'true') {
        return styleTaskDev(styles)
    } else { 
        return styleTask(styles)
    }
})

gulp.task('style:backend-plugin', function(){
    let styles = config.backend.assets.style;
    let paths = []
    styles.forEach((js) => {
        paths.push(js.replace('{directory}', directory))
    })

    return gulp.src(paths)
        .pipe(sass({
            includePaths: ["./node_modules"],
            outputStyle: "compressed"
        }).on('error', sass.logError))
        .pipe(cssnano())
        .pipe(concat('backend-plugin.min.css'))
        .pipe(gulp.dest(`./${directory}/assets/css/`))
})

gulp.task('style', gulp.series('style:backend-plugin','style:backend'));