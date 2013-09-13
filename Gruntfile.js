module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        separator: ';',
      },
      dist: {
        src: ['assets/js/vendor/plugins.js', 'assets/js/main.js'],
        dest: 'build/assets/js/main.js',
      },
    },
    uglify: {
      build1: {
        src: 'build/assets/js/main.js',
        dest: 'build/assets/js/main.js'
      }
    },

    img: {
        // using only dirs with output path
        compress: {
            src: 'assets/images',
            dest: 'build/assets/images'
        }
    },
    copy: {
      main: {
        files: [
          {src: ['*.php', 'assets/pdf/*.pdf', 'assets/css/*.css', 'assets/includes/*.php', 'assets/js/vendor/jquery.min.js', 'assets/js/vendor/modernizr.js', 'assets/json/*.json'], dest: 'build/', filter: 'isFile'}
        ]
      }
    },
    'ftp-deploy': {
      build: {
        auth: {
          host: 'ftp3.ftptoyoursite.com',
          port: 21,
          authKey: 'key1'
        },
        src: 'build',
        dest: '/web/content/osu',
        exclusions: ['build/**/.DS_Store', 'build/**/Thumbs.db']
      }
    },
    csscss: {
      options: {
        verbose: true,
        minMatch: 2,
        compass: true,
        ignoreSassMixins: true,
        compassConfig: "config.rb"
      },
      dist: {
        src: ['assets/scss/dark_rewards.scss']
      }
    },

    compass: {
        dev: {
            options:{
              config: 'config.rb',
              environment: 'development'
            }
        },
        prod: {
            options:{
              config: 'config.rb',
              environment: 'production',
              force: true
            }
        }
    },
    watch: {
      files: [ 'assets/scss/*.scss', 'assets/images/sprite_images/*.png' ],
      tasks: ['default']
    }

  });

  // Load the plugin that provides the "uglify" task.

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-ftp-deploy');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-csscss');
  grunt.loadNpmTasks('grunt-img');

  // Default task(s).
  grunt.registerTask('default', ['compass:dev', 'watch']);
  // Release Task
  grunt.registerTask('release', ['copy', 'uglify', 'compass:prod', 'img:compress']);
};