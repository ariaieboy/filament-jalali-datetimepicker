const mix = require('laravel-mix');

mix.disableSuccessNotifications()
mix.options({
    terser: {
        extractComments: false,
    },
})
mix.setPublicPath('resources/dist')
mix.setResourceRoot('resources')
mix.version()

mix.js('resources/js/index.js', 'js/jalali-date-time-picker.js')
