var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
let cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename");

gulp.task('hello', function() {
	console.log('Hello Zell');
  });
gulp.task('sass', function() {
return gulp.src('sass/**/*.scss') // Gets all files ending with .scss in app/scss and children dirs
  .pipe(sass.sync({outputStyle: 'expanded'}))
  .pipe(autoprefixer({
		browsers: ['last 2 versions'],
		cascade: false
	}))
	.pipe(cleanCSS())
	.pipe(rename('public.min.css'))
  	.pipe(gulp.dest('css'))
});
gulp.task('watch', function(){
	gulp.watch('sass/**', gulp.series('sass')); 
});