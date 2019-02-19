var gulp = require('gulp');
// Requires the gulp-sass plugin
var sass = require('gulp-sass');

gulp.task('sass', done => {
  return gulp.src('scss/**/*.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe(gulp.dest('css'))
  done();
});
gulp.task('watch', done => {
	gulp.watch('scss/**/*.scss', gulp.series('sass')); 
	done();
});