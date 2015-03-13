var gulp = require('gulp');

gulp.task('default', ['init','watch']);
gulp.task('init', ['images','styles','wptheme']);
gulp.task('dist', ['images:dist','styles:dist','wptheme:dist']);
