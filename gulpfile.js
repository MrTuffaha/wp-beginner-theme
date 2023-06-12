import gulp from "gulp";
import gulpPostCss from "gulp-postcss";
import purgecss from "gulp-purgecss";
import imagemin from 'gulp-imagemin';
import postcssPlugins from "./postcss.plugins.js";

gulp.task('styles', async () => {
    gulp.src('assets/src/css/*.css')
        .pipe(gulpPostCss(postcssPlugins))
        .pipe(gulp.dest('assets/dest/css'));
});

gulp.task('images', async () => {
    gulp.src('assets/src/image/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest('assets/dest/image/'));
});

gulp.task('build', gulp.parallel('images', 'styles'));

gulp.task('watch', () => {
    gulp.watch('./assets/src/image/', gulp.series('images'));
    gulp.watch(['./assets/src/css/', './**/*.php'], gulp.series('styles'));
});

gulp.task('build:watch', gulp.series('build', 'watch'));