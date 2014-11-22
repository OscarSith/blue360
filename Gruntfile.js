module.exports = function(grunt) {
	grunt.initConfig({
		jshint: {
			all: ['Gruntfile.js', 'js/*.js', 'js/main.js']
		},
		requirejs: {
			compile: {
				options: {
					almond: true,
					baseUrl: '.',
					out: "js/app.min.js",
					name: "js/main",
					mainConfigFile: 'js/main.js',
					include: ['node_modules/grunt-contrib-requirejs/node_modules/requirejs/require']
				}
			}
		},
		cssmin: {
			combine: {
				files: {
					'css/main.css': ['css/bootstrap.min.css', 'css/agency.css']
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-requirejs');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.registerTask('jscheck', ['jshint']);
	grunt.registerTask('css', ['cssmin']);
	grunt.registerTask('runapp', ['jshint', 'cssmin', 'requirejs']);
};