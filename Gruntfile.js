module.exports = function(grunt) {
	grunt.initConfig({
		jshint: {
			all: ['Gruntfile.js', 'js/dev/*.js']
		},
		requirejs: {
			compile: {
				options: {
					almond: true,
					baseUrl: '.',
					out: "js/app.min.js",
					name: "js/dev/main",
					mainConfigFile: 'js/dev/main.js',
					include: ['node_modules/grunt-contrib-requirejs/node_modules/requirejs/require']
				}
			}
		},
		cssmin: {
			combine: {
				files: {
					'css/main.css': [
						'css/bootstrap.min.css',
						'css/agency.css',
						'bower_components/skippr/css/jquery.skippr.css'
					]
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-requirejs');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.registerTask('jscheck', ['jshint']);
	grunt.registerTask('css', ['cssmin']);
	grunt.registerTask('minifyjs', ['requirejs']);
	grunt.registerTask('runapp', ['jshint', 'cssmin', 'requirejs']);
};