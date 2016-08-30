( function () {
    'use strict'; // Ensure Strict mode enabled

    // Load Build Process Modules
    var gulp            =   require ( 'gulp' ),
        liveserver      =   require ( 'gulp-live-server' ),
        plumber         =   require ( 'gulp-plumber' ),
        htmlmin         =   require ( 'gulp-htmlmin' ),
        extname         =   require ( 'gulp-extname' ),
        sass            =   require ( 'gulp-sass' ),
        autoprefixer    =   require ( 'gulp-autoprefixer' ),
        uglify          =   require ( 'gulp-uglify' );


    // Server Task
    gulp.task ( 'serve', function () {

        // Serve root folder at localhost:3000
        var server = liveserver.static ( 'dist/' );
        server.start ();

        // Watch for changes & Livereload 
        gulp.watch ( ['dist/**/*.html', 'dist/css/*.{min.css,css}', 'dist/js/*.{min.js,js}', 'dist/images/**/*.{png,svg}'], function ( file ) {
            server.notify.apply ( server, [ file ] );
        });
    });


    // HTML Minification Task
    gulp.task ( 'htmlminify', function () {

        return gulp.src ( 'src/html/**/*.html' )
            .pipe ( htmlmin ({
                collapseWhitespace: true,
                removeComments: true,
                minifyCSS: true,
                minifyJS: true
            }) )
            .pipe ( gulp.dest('dist') );
    });


    // Styles Task
    gulp.task ( 'styles', function () {
        
        // Read Sass index file & push compiled css to css
        return gulp.src ( 'src/sass/styles.scss' )
            .pipe ( plumber () )
            .pipe ( sass ({
                outputStyle: 'compressed',
                includePaths: ['src/sass/']
            }) )
            .pipe( autoprefixer ({
                browsers: ['last 2 versions', 'ie >= 10', '> 1%'],
                cascade: false
            }) )
            .pipe ( extname ( 'min.css' ) )
            .pipe ( gulp.dest ( 'dist/css' ) );
    });


    // Scripts Task
    gulp.task ( 'scripts', function () {

        // Read JavaScript File & Push compiled js to js
        return gulp.src('src/js/*.js')
            .pipe ( plumber () )
            .pipe ( uglify () )
            .pipe ( extname ( 'min.js' ) )
            .pipe ( gulp.dest ( 'dist/js' ) );
    });


    // Move Files
    gulp.task ( 'fileMove', function () {

        return gulp.src ( 'src/images/**/*.{png,svg}' )
            .pipe ( plumber () )
            .pipe ( gulp.dest ( 'dist/images' ) );
    });


    // Watch Task
    gulp.task ( 'watch', function () {

        // Watch HTML file changes
        gulp.watch ( 'src/html/**/*.html', ['htmlminify'] );

        // Watch for sass files to update and re-run sass-task
        gulp.watch ( 'src/sass/**/**/*.{sass,scss}', ['styles'] );

        // Watch for Javascript Files to update and re-run scripts task
        gulp.watch ( 'src/js/*.js', ['scripts'] );

        // Watch for new files & re-run fileMove Task
        gulp.watch ( 'src/images/**/*.{png,svg}', ['fileMove'] );
    });

    // Run Gulp Task
    gulp.task ( 'default', ['serve', 'htmlminify', 'styles', 'scripts', 'fileMove', 'watch'] );
}) ();