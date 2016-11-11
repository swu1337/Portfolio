const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const pump = require('pump');
const babel = require('gulp-babel');

gulp.task('sass', () =>
    gulp.src('src/scss/style.scss')
        .pipe(sass())
        .pipe(gulp.dest('src/css/test.css'))
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
        .pipe(concat('app.js'))
        .pipe(gulp.dest('dist/js/'))
);

// gulp.task('uglify', () =>
//     pump([
//         gulp.src('dist/js/app.js'),
//         uglify('app.min.js'),
//         gulp.dest('dist/js/')
//     ])
// );

gulp.task('uglify', function() {
    return gulp.src(['dist/js/app.js'])
        .pipe(babel({presets: ['es2015']}))
        .pipe(uglify('app.min.js').on('error', function(e){
     console.log(e);
}))
.pipe(gulp.dest("/dist/"))
});

gulp.task('watch', ['browserSync', 'sass'], () =>
    gulp.watch('src/scss/**/*.+(scss|sass)', ['sass'])
);
