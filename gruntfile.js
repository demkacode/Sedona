module.exports = function(grunt) {

    grunt.initConfig({
        less: {
          dev: {
            files: { // в .tmp less компилируется в css
              'css/style.css': 'less/style.less'
            }
          }
        },

        watch: {
            options: {
              livereload: true,
            },
            css: {
                files: ['less/style.less'],
                tasks: ['less']
            }
        }
        
    });

    // Загрузка плагинов, установленных с помощью npm install
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Задача по умолчанию
    grunt.registerTask('default', ['less']);
};