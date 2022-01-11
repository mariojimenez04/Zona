const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
// const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');

const paths = {
    scss: 'src/scss/**/*.scss',
    imagenes: 'src/img/**/*'
}

function css( done ) {
    src(paths.scss)
        .pipe( sass() )
        .pipe( dest('public/build/css'));

    done();
}

function dev( done ) {
    watch( paths.scss, css);

    done();
}

exports.dev = dev;