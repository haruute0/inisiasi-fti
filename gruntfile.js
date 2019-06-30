module.exports = function(grunt) {
    const sass = require('node-sass')
    require('load-grunt-tasks')(grunt)

    grunt.initConfig({
        watch: {
            files: 'sass/**/*.scss',
            tasks: ['sass'],
        },
        sass: {
            options: {
                implementation: sass,
                sourceMap: true,
            },
            dist: {
                files: {
                    'style.css': 'sass/style.scss',
                },
            },
        },
    })

    // Load the plugins
    grunt.loadNpmTasks('grunt-sass')
    grunt.loadNpmTasks('grunt-contrib-watch')

    // Default tasks.
    grunt.registerTask('default', ['watch'])
}