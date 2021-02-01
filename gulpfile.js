const gulp = require('gulp');
const purgecss = require('gulp-purgecss');
const postcss = require('gulp-postcss');
const cleancss = require('gulp-clean-css');

class TailwindExtractor {
    static extract(content){
        return content.match(/[\nw-/:]+(?<!:)/g);
    }
}

gulp.task('tailwind:build', function(){
    return gulp.src('styles/src/main.css')
    .pipe(postcss([
        require('tailwindcss'),
        require('autoprefixer'),
    ]))
    .pipe(gulp.dest('styles/dist/'))
})

gulp.task('css:minify', function(){
    return gulp.src('styles/dist/main.css')
    .pipe(purgecss({
        content: ['*.html'],
        extrators: [{
            extrators: TailwindExtractor,
            extensions: ['html'],
        }],
    }))
    .pipe(cleancss({level : {1: {specialComments: 0}}}))
    .pipe(gulp.dest('styles/dist/'))
});