/* eslint-disable quotes */
module.exports = function (grunt) {
  grunt.initConfig({
    concat_css: {
      all: {
        src: [
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
      all: {
        files: {
          'web/js/all.js': grunt.file.readJSON('assets/js/all.json')
        }
      }
    },
    minified: {
      files: {
        src: ['web/js/all.js'],
        dest: 'web/js/'
      },
      options: {
        sourcemap: true,
        allinone: false
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
    }
  }),

    grunt.loadNpmTasks('grunt-concat-css'),
    grunt.loadNpmTasks('grunt-contrib-cssmin'),
    grunt.loadNpmTasks('grunt-purifycss'),
    grunt.loadNpmTasks('grunt-concat-sourcemap'),
    grunt.loadNpmTasks('grunt-minified'),
    grunt.loadNpmTasks('grunt-contrib-imagemin'),
    grunt.loadNpmTasks('grunt-contrib-watch'),

    grunt.registerTask('build', ['concat_css', 'purifycss', 'cssmin', 'concat_sourcemap', 'minified', 'imagemin']),
    grunt.registerTask('default', ['watch'])
}