/* eslint-disable quotes */
module.exports = function (grunt) {
    grunt.initConfig({
        concat_css: {
            all: {
                src: [
                    'http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300,100,200',
                    'https://fonts.googleapis.com/css?family=Open+Sans',
                    'web/css/vendor/animate.css',
                    'web/css/vendor/bootstrap.css',
                    'web/css/vendor/flexslider.css',
                    'web/css/vendor/font-awesome.css',
                    'web/css/vendor/jquery.bxslider.css',
                    'web/css/vendor/magnific-popup.css',
                    'web/css/vendor/owl.carousel.css',
                    'web/css/vendor/owl.theme.css',
                    'web/css/vendor/settings.css',
                    'web/css/style.css'
                ],
                dest: 'web/css/jetcash.css'
            }
        },
        purifycss: {
            options: {},
            target: {
                src: ['views/layouts/*.php', 'views/site/*.php', 'web/js/all.js'],
                css: ['web/css/jetcash.css'],
                dest: 'web/css/jetcash.css'
            }
        },
        cssmin: {
            web: {
                files: [{
                    expand: true,
                    cwd: 'web/css/',
                    src: ['jetcash.css'],
                    dest: 'web/css/',
                    ext: '.min.css'
                }]
            },
            style: {
                files: [{
                    expand: true,
                    cwd: 'web/css/',
                    src: ['style.css'],
                    dest: 'web/css/',
                    ext: '.min.css'
                }]
            }
        },
        concat_sourcemap: {
            options: {
                sourcesContent: true
            },
            app: {
                files: {
                    'web/js/all.js': grunt.file.readJSON('assets/js/all.json')
                }
            },
            vendor: {
                files: {
                    'web/js/vendor.js': grunt.file.readJSON('assets/js/vendor.json')
                }
            }
        },
        minified: {
            options: {
                sourcemap: true,
                allinone: false
            },
            app: {
                src: ['web/js/all.js'],
                dest: 'web/js/'
            },
            vendor: {
                src: ['web/js/vendor.js'],
                dest: 'web/js/'
            }
        },
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'web/images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'web/images/'
                }]
            }
        },
        watch: {
            js: {
                files: ['assets/js/**/*.js', 'assets/js/all.json', 'web/js/jetcash.js'],
                tasks: ['concat_sourcemap', 'minified'],
                options: {
                    livereload: true
                }
            },
            less: {
                files: ['web/css/style.css'],
                tasks: ['concat_css', 'purifycss', 'cssmin'],
                options: {
                    livereload: true
                }
            }
        },
        htmlmin: {
            dist: {
                options: {
                    removeComments: true,
                    collapseWhitespace: true
                },
                files: {
                    'views/site/index.php': 'views/site/index.php',
                    'views/layouts/footer.php': 'views/layouts/footer.php',
                    'views/layouts/header.php': 'views/layouts/header.php',
                    'views/layouts/main.php': 'views/layouts/main.php'
                }
            }
        }
    }),

        grunt.loadNpmTasks('grunt-concat-css'),
        grunt.loadNpmTasks('grunt-contrib-cssmin'),
        grunt.loadNpmTasks('grunt-purifycss'),
        grunt.loadNpmTasks('grunt-concat-sourcemap'),
        grunt.loadNpmTasks('grunt-minified'),
        grunt.loadNpmTasks('grunt-contrib-imagemin'),
        grunt.loadNpmTasks('grunt-contrib-watch'),
        grunt.loadNpmTasks('grunt-contrib-htmlmin'),

        grunt.registerTask('build', ['concat_css', 'purifycss', 'cssmin', 'concat_sourcemap', 'minified', 'imagemin']),
        grunt.registerTask('default', ['watch'])
}