module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            dev: {
                src: [
                    'dev/scripts/*.js',
                    '!dev/scripts/script.js',
                    '!dev/scripts/script.min.js'
                ],
                dest: 'dev/scripts/script.js',
            }
        },

        uglify: {
            dev: {
                src: 'dev/scripts/script.js',
                dest: 'dev/scripts/script.min.js'
            }
        },

        jshint: {
            files: {
                src: [
                    'dev/scripts/script.js',
                ]
            }
        },

        sass: {
            dev: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'dev/styles/style.css': 'dev/styles/style.scss'
                }
            },
            build: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'build/styles/style.css': 'dev/styles/style.css'
                }
            }
        },

        autoprefixer: {
            dev: {
                src: 'dev/styles/style.css'
            }
        },

        imagemin: {
            dev: {
                files: [{
                    expand: true,
                    cwd: 'dev/images/src',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'dev/images/'
                }]
            }
        },

        sync: {
            main: {
                files: [{
                cwd: 'dev',
                src: [
                    '**',
                    '!**/*.scss', 
                    '!images/src/**',
                    '!styles/global',
                    '!styles/helpers',
                    '!styles/modules',
                    '!styles/pages',
                    '!styles/sections',
                    '!styles/vendor',
                    '!scripts/*.js',
                    'scripts/script.min.js',
                    'styles/style.css'
                ],
                dest: 'build',
            }],
            verbose: true
            }
        },
        watch: {
            scripts: {
                files: ['dev/scripts/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            },
            css: {
                files: [
                    'dev/styles/*.scss',
                    'dev/styles/global/*.scss',
                    'dev/styles/helpers/*.scss',
                    'dev/styles/modules/*.scss',
                    'dev/styles/pages/*.scss',
                    'dev/styles/sections/*.scss',
                    'dev/styles/vendor/*.scss'
                ],
                tasks: ['sass:dev', 'autoprefixer'],
                options: {
                    spawn: false,
                }
            }
        },
        htmlmin: {
            build: {
                options: {
                    removeComments: true,
                    removeCommentsFromCDATA: true,
                    removeAttributeQuotes: true,
                    removeRedundantAttributes: true, 
                    useShortDoctype: true,
                    removeEmptyAttributes: true,
                    removeScriptTypeAttributes: true, 
                    removeStyleLinkTypeAttributes: true,
                    removeOptionalTags: true,
                    collapseWhitespace: true
                },
                files: {
                    'build/index.html': 'dev/index.html',
                    'build/styleguide.html': 'dev/styleguide.html'
                }
            }
        },
        colorguard: {
            options: {
            // Task-specific options go here.
            },
            files: {
                src: ['dev/styles/style.css'],
            },
        },
        'ftp-deploy': {
            build: {
                auth: {
                host: 'wasserburger-biomarkt.de',
                port: 21,
                authKey: 'key1'
            },
            src: 'build/styles/',
            dest: 'sites/all/themes/biomarkt/styles/',
            exclusions: []
            }
        },
        colorguard: {
            options: {
            // Task-specific options go here.
            },
            files: {
                src: ['dev/styles/style.css'],
            },
        }
});

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-sync');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-colorguard');
    grunt.loadNpmTasks('grunt-ftp-deploy');


    grunt.registerTask('default', ['concat', 'uglify', 'sass:dev', 'autoprefixer']);
    grunt.registerTask('build', ['sync', 'sass:build', 'htmlmin:build', 'ftp-deploy']);

};