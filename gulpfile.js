const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const pump = require('pump');
const babel = require('gulp-babel');
const rename = require('gulp-rename');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', () =>
    gulp.src('src/scss/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass()).on('error', sass.logError)
        .pipe(autoprefixer({
            browsers: ['last 2 versions', '> 5%'],
            cascade: false
            }))
        .pipe(sourcemaps.write('/maps'))
        .pipe(gulp.dest('src/css/test'))
        .pipe(browserSync.reload({
            stream: true
        }))
);

gulp.task('browserSync', function() {
    browserSync.init({
        proxy: 'localhost/portfolio/'
    })
});

gulp.task('concat', () =>
    gulp.src('src/js/**/*.js')
        .pipe(sourcemaps.init())
        .pipe(concat('app.js'))
        .pipe(sourcemaps.write('src/js/maps'))
        .pipe(gulp.dest('dist/js/'))
);

gulp.task('uglify', () =>
    gulp.src('dist/js/app.js')
        .pipe(sourcemaps.init())
        .pipe(babel({presets: ['es2015']}))
        .pipe(uglify().on('error', function(e) {
            console.log(e);
        }))
        .pipe(rename('app.min.js'))
        .pipe(sourcemaps.write('src/js/maps'))
        .pipe(gulp.dest('dist/js/'))
);

gulp.task('watch', ['browserSync', 'sass', 'concat'], () => {
    gulp.watch('src/scss/**/*.+(scss|sass)', ['sass']),
    gulp.watch('src/js/**/*.js', ['concat'])
});
