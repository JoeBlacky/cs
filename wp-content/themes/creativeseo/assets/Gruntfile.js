module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      /*dist: {
        src: ['js/dev/*.js'],
        dest: 'js/<%= pkg.name %>.js'
      },*/
      distscss: {
        src: ['scss/*.scss'],
        dest: 'scss/main.scss'
      }
    },
    sass: {
      dist: {
        options: {
          style: 'nested'
        },
        files: {
          'css/main.css': 'scss/main.scss'
        }
      }
    },
    /*uglify: {
      dist: {
        files: {
          'js/main.js' : '<%= concat.dist.dest %>'
        }
      }
    },*/
    watch: {
      sass: {
        files: ['scss/**/*.scss', 'scss/*.scss'],
        tasks: ['sass'],
        options: {
          livereload: true
        },
      }/*,
      files: '<%= concat.dist.src %>',
      tasks: ['concat', 'sass']*/
    }/*,
    postcss: {
      options: {
        map: false,

        processors: [
          require('autoprefixer')({browsers: 'last 2 versions'}),
        ]
      },
      dist: {
        src: 'css/*.css'
      }
    }*/
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');

  grunt.registerTask('default', ['concat', 'uglify']);

};