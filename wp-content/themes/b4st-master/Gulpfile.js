var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {
	return gulp.src('./theme/sass/**/*.scss')
		.pipe(sass.sync().on('error', sass.logError))
		.pipe(gulp.dest('./theme/css'));
});

gulp.task('sass:watch', function() {
	gulp.watch('./theme/sass/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'sass:watch']);