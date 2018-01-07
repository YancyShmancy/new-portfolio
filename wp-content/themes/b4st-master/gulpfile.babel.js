import gulp from 'gulp';
import sass from 'gulp-sass';
import autoprefixer from 'gulp-autoprefixer';
import { browserslist as browsers } from './package.json';

gulp.task('sass', () => {
    return gulp.src('./theme/sass/main.scss')
        // .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compact'
        })
        .on('error', sass.logError))
        .pipe(autoprefixer({ browsers }))
        // .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./theme/css'));
});

gulp.task('sass:watch', () => {
    gulp.watch('./theme/sass/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'sass:watch']);


