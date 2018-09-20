module.exports = function (grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),
    uglify: {
      default: {
        files: {
          "js/min/default.min.js": ["js/default.js"]
        }
      }
    },
    cssmin: {
        css: {
          files: {
            "css/min/default.min.css": ["css/default.css"]
          }
        }
      }
  });

  grunt.loadNpmTasks("grunt-contrib-uglify");
  grunt.loadNpmTasks("grunt-contrib-cssmin");

  grunt.registerTask("default", ["uglify", "cssmin"]);

};