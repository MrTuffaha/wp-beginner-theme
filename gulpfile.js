import gulp from "gulp";
import gulpPostCss from "gulp-postcss";
import postcssImport from "postcss-import";
import postcssNested from "postcss-nested";
import tailwindcss from "tailwindcss";
import postcssSortMediaQueries from "postcss-sort-media-queries";
import autoprefixer from "autoprefixer";
import cssnano from "cssnano";
import tailwindcssNesting from "@tailwindcss/nesting";
import purgecss from "gulp-purgecss";
import imagemin from 'gulp-imagemin';

gulp.task('styles', async () => {
    gulp.src('assets/src/css/*.css')
        .pipe(gulpPostCss([
            postcssImport(),
            tailwindcssNesting(postcssNested),
            tailwindcss({
                content: [
                    './**/*.php',
                    // Add any other files that contain CSS classes or styles
                ],
            }),
            postcssSortMediaQueries(),
            autoprefixer(),
            // cssnano(),
        ]))
        .pipe(purgecss({
            content: ['./**/*.php',]
        }))
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
    gulp.watch('./assets/src/css/', gulp.series('styles'));
});

gulp.task('build:watch', gulp.series('build', 'watch'));